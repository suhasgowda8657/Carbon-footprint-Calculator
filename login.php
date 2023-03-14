<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('img/ind4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .admin {
            border-color: #D071F9;
            background-color: #D071F9;
            color: white;
            border-radius: 5px;
            height: 22px;
            width: 100px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                USER DETAILS
            </div>
            <div class="form">
                <div class="input_field">
                    <label>First name</label>
                    <input type="text" class="input" name="fname" required>
                </div>
                <div class="input_field">
                    <label>Last name</label>
                    <input type="text" class="input" name="lname" required>
                </div>
                <div class="input_field">
                    <label>gander</label>
                    <div class="selectbox">
                        <select name="gender" required>
                            <option value="">select</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email Address</Address></label>
                    <input type="text" class="input" name="email" required>
                </div>
                <div class="input_field">
                    <label>phone Number</label>
                    <input type="text" class="input" name="phone" required>
                </div>
                <div class="input_field">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree terms and conditions</P>
                </div>
                <div class="input_field">
                    <input type="submit" value="Enter" class="btn" name="Register">

                </div>
            </div>
        </form>
        <br>
        <div><a href='admin.php?id=$result[id]'><input type='submit' value='Admin' class="admin"></a></div>
</body>

</html>
<?php
if ($_POST['Register']) {
    $fname =   $_POST['fname'];
    $lname =   $_POST['lname'];
    $gender =  $_POST['gender'];
    $email =   $_POST['email'];
    $phone =   $_POST['phone'];
    if ($fname != "" && $lname != "" && $gender != "" && $email != "" && $phone != "") {
        $query = "INSERT INTO userinfo (fname,lname,gender,email,phone) VALUES('$fname','$lname','$gender','$email','$phone')";
        $data = mysqli_query($conn, $query);
?>
        <meta http-equiv="refresh" content="0;url=http://localhost/carbon footprint/select.php" />
<?php
        if ($data) {
            echo "inserted";
        } else {
            echo "failed";
        }
    } else {
        echo "<script>alert('please fill the form');</script>";
    }
}


?>