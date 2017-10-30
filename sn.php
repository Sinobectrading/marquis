<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include_once 'db.php';	
include_once 'func.php';


if( isset($_POST["snvalue"]) && isset($_POST["selvalue"]) ) {
	$sn = $_POST["snvalue"];
	$sel = $_POST["selvalue"];
}

// $sn = 'SN00302';
// $sel = '48';
if ($sel == "all") {
	$querypo = "SELECT * FROM iventory WHERE die=:die";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':die', $sn, PDO::PARAM_STR);
}
else{
	$querypo = "SELECT * FROM iventory WHERE die=:die and length=:sel";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':die', $sn, PDO::PARAM_STR);
		$stmtpo->bindParam(':sel', $sel, PDO::PARAM_STR);
	}

	$stmtpo->execute();

	
	if( $stmtpo->rowCount() > 0){
		$size = $stmtpo->rowCount();
		$result = $stmtpo->fetchAll();
		// print_r($result);
		$response = json_encode($result);
	 	echo '{"success":true,"size":'.$size.',"result":'.$response.'}';
	}
 
	if ( $stmtpo->rowCount() ==0 ) {
		echo '{"success":false,"message":"No matched products found."}';
	} 



?>