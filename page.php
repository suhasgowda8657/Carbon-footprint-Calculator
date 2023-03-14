<?php
include("connection.php");
$id = $_GET['id'];
$query2 = "SELECT * FROM country WHERE id='$id'";
$data1 = mysqli_query($conn, $query2);
$total = mysqli_num_rows($data1);
$result = mysqli_fetch_assoc($data1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CALCULATE</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .up {
            border-color: #D071F9;
            background-color: #D071F9;
            color: white;
            border-radius: 5px;
            height: 25px;
            width: 200px;
            cursor: pointer;
            font-weight: bold;
        }

        .up:hover {
            background-color: purple;
        }

        body {
            background-image: url('img/ind10.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        table,
        th,
        td {
            border: 1.5px;
            background-color: white;
        }

        .num {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <div>
        <center><label>THESE ARE THE DETAILS OF:<input class="num" type="text" value="<?php echo $result['country']; ?>"></label></center>
    </div>
    <form>
        <br>
        <br>
        <center>
            <table border="1" cellspacing="10" id="inputTable" class="inputTable">
                <tr>
                    <td><label for="coal%">Coal</label></td>
                    <td><input type="text" id="coal%" class="num" value="<?php echo $result['coal']; ?>" name="coal">%</td>
                    <td><input type="text" id="coalCO" class="num" value="820" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>
                <tr>
                    <td><label for="gas%">Natural gas</label></td>
                    <td><input type="text" id="gas%" class="num" value="<?php echo $result['gas']; ?>" name="gas"> %</td>
                    <td><input type="text" id="gasCO" class="num" value="490" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>
                <tr>
                    <td><label for="oil%">Oil</label></td>
                    <td><input type="text" id="oil%" class="num" value="<?php echo $result['oil']; ?>" name="oil"> %</td>
                    <td><input type="text" id="oilCO" class="num" value="778" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>
                <tr>
                    <td><label for="hydro%">Hydropower</label></td>
                    <td><input type="text" id="hydro%" class="num" value="<?php echo $result['hydro']; ?>" name="hydro"> %</td>
                    <td><input type="text" id="hydroCO" class="num" value="24" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>
                <tr>
                    <td><label for="renew%">Renewable</label></td>
                    <td><input type="text" id="renew%" class="num" value="<?php echo $result['renewable']; ?>" name="renewable"> %</td>
                    <td><input type="text" id="renewCO" class="num" value="41" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>
                <tr>
                    <td><label for="nuclear%">Nuclear</label></td>
                    <td><input type="text" id="nuclear%" class="num" value="<?php echo $result['nuclear']; ?>" name="nuclear"> %</td>
                    <td><input type="text" id="nuclearCO" class="num" value="12" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>
                <tr>
                    <td><label for="custom%">Custom</label></td>
                    <td><input type="text" id="custom%" class="num" value="0"> %</td>
                    <td><input type="text" id="customCO" class="num" value="0" onkeyup="Calculate()"> gCO<sub>2</sub>/kWh</td>
                </tr>

            </table>
        </center>
        <br>
        <div class="container">
            <form>
                <div class="form">
                    Total percentage:<span id="total%"></span>
                    <br>

                    <label for="power">How much power do you use (continuously)?</label>
                    <input type="text" id="power" value="1000" class="power" onkeyup="Calculate()">
                    <select id="powerUnit" onchange="Calculate()">
                        <option value="1000" id="W" selected>W</option>
                        <option value="1" id="kW">kW</option>
                        <option value="0.001" id="MW">MW</option>
                        <option value="0.000001" id="GW">GW</option>
                        <option value="0.000000001" id="TW">TW</option>
                    </select>
                    <br>
                    You produce <b><span id="kgCO2result"></span></b> kg of CO<sub>2</sub> emissions per year.
                    <br>
                    You would need to plant <b><span id="treesRequired"></span></b> trees to eliminate your carbon footprint on our
                    planet.
                    <br>

                    <br>
                    <center><input class="up" type="reset"></center>

                    <br>

                    <br>
                    <center><button class="up" title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler').style.display==='none') {document.getElementById('spoiler').style.display=''}else{document.getElementById('spoiler').style.display='none'}">
                            Sources and notes
                        </button></center>
                    <div id="spoiler" style="display:none">
                        <fieldset class="fieldSet">
                            <label>FORMULA TO CALCULATE CARBON FOOTPRINTS:</label><br>
                            carbon produced=((%coal*carbon due to coal)+(%gas*carbon due to gas)+(%oil*carbon due to oil)+(%hydro*carbon due to hydro)+(%renewable*carbon due to renewable)
                            (%nuclear*carbon due to nuclear)(%costum*carbon due to costum)/100000) * 24 * 365.2422 * power;<br>
                            trees requried=(carbon produced)/15.7;
                            <br>
                        </fieldset>
                    </div>
                    <br>
                </div>
                <center><a href='login.php'><input type='button' value='EXIT' class=up></a></center>
            </form>
        </div>
        <script src="co2calc.js"></script>
</body>

</html>