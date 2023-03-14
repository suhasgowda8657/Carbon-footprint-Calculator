<?php include("connection.php");
$id = $_GET['id'];
$query1 = "SELECT * FROM country WHERE id='$id'";
$data1 = mysqli_query($conn, $query1);
$total = mysqli_num_rows($data1);
$result = mysqli_fetch_assoc($data1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UODATE COUNTRY DETAILS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('img/ind5.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                UPDATE DETAILS
            </div>
            <div class="form">
                <div class="input_field">
                    <label>country</label>
                    <input type="text" value="<?php echo $result['country']; ?>" class="input" name="country" required>
                </div>
                <div class="input_field">
                    <label>coal</label>
                    <input type="text" value="<?php echo $result['coal']; ?>" class="input" name="coal" required>
                </div>
                <div class="input_field">
                    <label>gas</label>
                    <input type="text" value="<?php echo $result['gas']; ?>" class="input" name="gas" required>
                </div>
                <div class="input_field">
                    <label>oil</label>
                    <input type="text" value="<?php echo $result['oil']; ?>" class="input" name="oil" required>
                </div>
                <div class="input_field">
                    <label>hydro</label>
                    <input type="text" value="<?php echo $result['hydro']; ?>" class="input" name="hydro" required>
                </div>
                <div class="input_field">
                    <label>renewable</Address></label>
                    <input type="text" value="<?php echo $result['renewable']; ?>" class="input" name="renewable" required>
                </div>
                <div class="input_field">
                    <label>nuclear</label>
                    <input type="text" value="<?php echo $result['nuclear']; ?>" class="input" name="nuclear" required>
                </div>
                <div class="input_field">
                    <input type="submit" value="UPDATE DETAILS" class="btn" name="update">
                </div>
            </div>
        </form>
</body>

</html>
<?php
if ($_POST['update']) {
    $country =   $_POST['country'];
    $coal =   $_POST['coal'];
    $gas =     $_POST['gas'];
    $oil =    $_POST['oil'];
    $hydro =  $_POST['hydro'];
    $renewable =   $_POST['renewable'];
    $nuclear =   $_POST['nuclear'];
    $query = "UPDATE country SET country='$country',coal='$coal',gas='$gas',oil='$oil',hydro='$hydro',renewable='$renewable',nuclear='nuclear' 
    WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record updated')</script>";
?>
        <meta http-equiv="refresh" content="0;url=http://localhost/carbon footprint/countrydetails.php" />
<?php
    } else {
        echo "failed";
    }
}


?>