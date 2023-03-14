<html>

<head>
    <title>COUNTRY DETAILS</title>
    <style>
        body {
            background: #D071f9;
        }

        table {
            background-color: white;
        }

        .update {
            background-color: green;
            color: white;
            border-radius: 5px;
            height: 22px;
            width: 100px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>

</html>
<?php
include("connection.php");
$query1 = "SELECT * FROM country";
$data1 = mysqli_query($conn, $query1);
$total = mysqli_num_rows($data1);


//echo $total;
if ($total != 0) {
?>

    <h2 align="center">DISPLAYING USER RECORDS</h2>

    <center>
        <table border="1" cellspacing="7" width="60%">
            <tr>
                <th width="5%">Id</th>
                <th width="15%">Countryname</th>
                <th width="5%">Coal</th>
                <th width="5%">Gas</th>
                <th width="5%">Oil</th>
                <th width="5%">Hydro</th>
                <th width="5%">Renewable</th>
                <th width="5%">Nuclear</th>
                <th width="10%">Operation</th>
            </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data1)) {
            echo "<tr>
               <td>" . $result['id'] . "</td>
               <td>" . $result['country'] . "</td>
               <td>" . $result['coal'] . "</td>
               <td>" . $result['gas'] . "</td>
               <td>" . $result['oil'] . "</td>
               <td>" . $result['hydro'] . "</td>
               <td>" . $result['renewable'] . "</td>
               <td>" . $result['nuclear'] . "</td>
               <td><a href='updateinfo.php?id=$result[id]'><input type='submit' value='update' class=update></a></td>
        </tr>";
        }
    } else {
        echo "record not found";
    }
        ?>
        </table>
    </center>