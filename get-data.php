<?php
include('db.php');
$id=$_POST['id'];
$type=$_POST['type'];

if($type=='city'){
	$sql="select id,name from city where state_id='$id'";
}else{
	$sql="select id,name from state where country_id='$id'";
}
$stmt=$con->prepare($sql);
$stmt->bind_result($id,$name);

$html='';

if($stmt->execute()){
	 $stmt->store_result();
	 while($stmt->fetch()){
		$html.='<option value='.$id.'>'.$name.'</option>';
	 }
	 
}
echo $html;

?>