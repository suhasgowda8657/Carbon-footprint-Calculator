<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM userinfo WHERE id='$id'";
$data3 = mysqli_query($conn, $query);
if ($data3) {
    echo "<script>alert('Record Deleted')</script>";
?>
    <meta http-equiv="refresh" content="0;url=http://localhost/carbon footprint/userdetails.php" />
<?php
} else {
    echo "not deleted";
}
?>