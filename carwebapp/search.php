<?php

function getArray($result){
  $arr = array();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($arr, $row);
      }
  }
  return $arr;
}


if(isset($_GET['brandname']))
{

	$data_brandName = $_GET['brandname'];



	if(empty($data_brandName))
	{   
		require_once('connection.php');
       
		$query= "SELECT * FROM cars WHERE carname = '$data_brandName'";

		$result = $dbc->query($query);
		$arr = getArray($result);
		echo json_encode($arr);     
	} 
	else 
	{
		echo 'You need to enter the following data<br/>';
		foreach($data_missing as $missing)
		echo "$missing<br/>";
	}
	
}

?>