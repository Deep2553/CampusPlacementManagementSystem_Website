<?php

$id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","minor_project");
$query="update company set a_status=1 where c_id='$id'";
mysqli_query($conn,$query);
mysqli_close($conn);
header("Location: ./po_PendingCom_List.php");

?>