
<?php
    require_once('connect.php');
	$data = array("success"=>false);
	if(isset($_GET['limit']) && isset($_GET['start'])){
	
		$limit = mysql_real_escape_string($_GET['limit']);
		$start = mysql_real_escape_string($_GET['start']);
		
		$count = mysql_query("SELECT COUNT(id) AS count FROM food_table WHERE  available= '1'");
		$array = mysql_fetch_array($count);
		$query = mysql_query("SELECT * FROM food_table WHERE  available= '1' LIMIT ".$limit." OFFSET ".$start);
		$arr = array();
		while( $row = mysql_fetch_array ( $query )){
			$arr[] = array(
				"fID"      => $row["id"],
				"name"    => $row["foodName"],
				"image"   => "http://127.0.0.1/senchatouchprojects/SenchaTouchV2.3.1/project/CustomerDesign/image/".$row["foodImage"],
				"price"   => $row["foodPrice"],
				"content" => $row["foodDetails"]
			);
		}
		$data = array(
			"success"=>true,
			"totalCount"=>$array['count'],
			"menu"=>$arr
		);
	}
	if(isset($_REQUEST['request'])){
		$callback = $_REQUEST['request'];
		if ($callback) {
			header('Content-Type: text/javascript');
			echo  $callback . '(' . json_encode($data) . ');';
		} else {
			header('Content-Type: application/x-json');
			echo json_encode($data);
		}
	}
?>