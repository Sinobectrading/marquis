<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include_once 'db.php';	
include_once 'func.php';


if( isset($_POST["snvalue"]) && isset($_POST["lengthvalue"])  && isset($_POST["typevalue"]) ) {
	$sn = $_POST["snvalue"];
	$length = $_POST["lengthvalue"];
	$type = $_POST["typevalue"];

}

// $sn = 'SN00302';
// $sel = '48';
if ($length == "all") {
	if ($type == "all") {
		$querypo = "SELECT * FROM inventory WHERE item=:item";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':item', $sn, PDO::PARAM_STR);
	}
	else{
		$querypo = "SELECT * FROM inventory WHERE item=:item AND cat=:cat ";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':item', $sn, PDO::PARAM_STR);
		$stmtpo->bindParam(':cat', $type, PDO::PARAM_STR);
	}
}
else{
	if ($type == "all") {
		$querypo = "SELECT * FROM inventory WHERE item=:item AND length=:length";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':item', $sn, PDO::PARAM_STR);
		$stmtpo->bindParam(':length', $length, PDO::PARAM_STR);
	}
	else{
		$querypo = "SELECT * FROM inventory WHERE item=:item AND cat=:cat AND length=:length";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':item', $sn, PDO::PARAM_STR);
		$stmtpo->bindParam(':cat', $type, PDO::PARAM_STR);
		$stmtpo->bindParam(':length', $length, PDO::PARAM_STR);
	}
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