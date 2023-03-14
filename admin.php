<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <style>
        .admin {
            border-color: #D071F9;
            background-color: #D071F9;
            color: white;
            border-radius: 5px;
            height: 25px;
            width: 100px;
            cursor: pointer;
            font-weight: bold;
        }

        body {
            background-image: url('img/ind6.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .admin {
            border-color: #D071F9;
            background-color: #D071F9;
            color: black;
            border-radius: 5px;
            height: 30px;
            width: 110px;
            cursor: pointer;
            font-weight: bold;
        }

        h1 {
            color: white;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <div class="title">
            ADMIN ACTIVITY
        </div>
        <label>USER DETAILS:&emsp;&emsp;&emsp;</label>
        <a href='userdetails.php?id=$result[id]'><input type='submit' value='CLICK' class="admin"></a><br><br>
        <label>COUNTRIES DETAILS:</label>
        <a href='countrydetails.php?id=$result[id]'><input type='submit' value='CLICK' class="admin"></a>
    </div>
</body>

</html>