<html>

<head>
    <title>USER DETAILS</title>
    <style>
        body {
            background: #D071f9;
        }

        table {
            background-color: white;
        }

        .delete {
            background-color: red;
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
$query1 = "SELECT * FROM userinfo";
$data1 = mysqli_query($conn, $query1);
$total = mysqli_num_rows($data1);


//echo $total;
if ($total != 0) {
?>

    <h2 align="center">DISPLAYING USER RECORDS</h2>

    <center>
        <table border="1" cellspacing="7" width="80%">
            <tr>
                <th width="5%">Id</th>
                <th width="10%">First-name</th>
                <th width="10%">Last-name</th>
                <th width="10%">Gender</th>
                <th width="20%">Email</th>
                <th width="10%">Phone</th>
                <th width="15%">Operation</th>
            </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data1)) {
            echo "<tr>
               <td>" . $result['id'] . "</td>
               <td>" . $result['fname'] . "</td>
               <td>" . $result['lname'] . "</td>
               <td>" . $result['gender'] . "</td>
               <td>" . $result['email'] . "</td>
               <td>" . $result['phone'] . "</td>
               <td><a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class=delete onclick='return checkdelete()'></a></td>
        </tr>";
        }
    } else {
        echo "record not found";
    }
        ?>
        </table>
    </center>
    <script>
        function checkdelete() {
            return confirm('ARE YOU WANT TO DELETE THIS DATA ?');
        }
    </script>