<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "1111";
$dbname = "marquis";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'item', 
	1 => 'length',
	2=> 'cat',
	3=> 'dims',
	4=> 'die',
	5=> 'finish',
	6=> 'alloy',
	7=> 'dims',
	8=> 'color',
	9=> 'fab'
);

// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM inventory";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get inventory");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * ";
$sql.=" FROM inventory WHERE 1=1";



// if there is a search parameter, $requestData['search']['value'] contains search parameter
if( !empty($requestData['search']['value']) ) {   
	$sql.=" AND ( item LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR length LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR cat LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR dims LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR die LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR finish LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR alloy LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR color LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR fab LIKE '".$requestData['search']['value']."%' )";

	// $sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' )";
}



// $item = '1016202';
// $length = '72';
// $sql .= " WHERE item=".$item;
// $sql .= " AND length=".$length;




$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get inventory");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get inventory");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["item"];
	$nestedData[] = $row["length"];
	$nestedData[] = $row["cat"];
	$nestedData[] = $row["dims"];
	$nestedData[] = $row["die"];
	$nestedData[] = $row["finish"];
	$nestedData[] = $row["alloy"];
	$nestedData[] = $row["color"];
	$nestedData[] = $row["fab"];
	
	$data[] = $nestedData;
}



$json_data = array(
	"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
	"recordsTotal"    => intval( $totalData ),  // total number of records
	"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
	"data"            => $data   // total data array
	);

echo json_encode($json_data);  // send data as json format

?>
