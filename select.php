<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER ACTIVITY</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('img/ind8.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .select,
        .up {
            border-color: #D071F9;
            background-color: #D071F9;
            color: white;
            border-radius: 5px;
            height: 25px;
            width: 100px;
            cursor: pointer;
            font-weight: bold;
        }

        .up {

            width: auto;
        }

        .up:hover {
            background-color: greenyellow;
        }

        .update:hover {
            background-color: purple;
        }

        label {
            font-weight: bold;
            color: black;
        }

        .update {
            border-color: black;
            background-color: white;
            color: black;
            border-radius: 5px;
            height: 40px;
            width: 300px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="title">
                USER ACTIVITY
            </div>
            <div>
                <label>PRELOAD THE ELECTRICITY GENERATION:</label>
            </div>
            <div class="form">
                <div class="input_field">
                    <div class="selectbox">
                        <select name="country">
                            <option value="1">Albania</option>
                            <option value="2">Algeria</option>
                            <option value="3">Angola</option>
                            <option value="4">Argentina</option>
                            <option value="5">Armenia</option>
                            <option value="6">Australia</option>
                            <option value="7">Austria</option>
                            <option value="8">Azerbaijan</option>
                            <option value="9">Bahrain</option>
                            <option value="10">Bangladesh</option>
                            <option value="11">Belarus</option>
                            <option value="12">Belgium</option>
                            <option value="13">Benin</option>
                            <option value="14">Bolivia</option>
                            <option value="15">Bosnia and Herzegovina</option>
                            <option value="16">Botswana</option>
                            <option value="17">Brazil</option>
                            <option value="18">Brunei Darussalam</option>
                            <option value="19">Bulgaria</option>
                            <option value="20">Cambodia</option>
                            <option value="21">Cameroon</option>
                            <option value="22">Canada</option>
                            <option value="23">Chile</option>
                            <option value="24">China</option>
                            <option value="25">Hong Kong SAR, China</option>
                            <option value="26">Colombia</option>
                            <option value="27">Congo, Dem. Rep.</option>
                            <option value="28">Congo, Rep.</option>
                            <option value="29">Costa Rica</option>
                            <option value="30">Cote d'Ivoire</option>
                            <option value="31">Croatia</option>
                            <option value="32">Cuba</option>
                            <option value="33">Curacao</option>
                            <option value="34">Cyprus</option>
                            <option value="35">Czech Republic</option>
                            <option value="36">Denmark</option>
                            <option value="37">Dominican Republic</option>
                            <option value="38">Ecuador</option>
                            <option value="39">Egypt, Arab Rep.</option>
                            <option value="40">El Salvador</option>
                            <option value="41">Eritrea</option>
                            <option value="42">Estonia</option>
                            <option value="43">Ethiopia</option>
                            <option value="44">Finland</option>
                            <option value="45">France</option>
                            <option value="46">Gabon</option>
                            <option value="47">Georgia</option>
                            <option value="48">Germany</option>
                            <option value="49">Ghana</option>
                            <option value="50">Greece</option>
                            <option value="51">Guatemala</option>
                            <option value="52">Haiti</option>
                            <option value="53">Honduras</option>
                            <option value="54">Hungary</option>
                            <option value="55">Iceland</option>
                            <option value="56">India</option>
                            <option value="57">Indonesia</option>
                            <option value="58">Iran, Islamic Rep.</option>
                            <option value="59">Iraq</option>
                            <option value="60">Ireland</option>
                            <option value="61">Israel</option>
                            <option value="62">Italy</option>
                            <option value="63">Jamaica</option>
                            <option value="64">Japan</option>
                            <option value="65">Jordan</option>
                            <option value="66">Kazakhstan</option>
                            <option value="67">Kenya</option>
                            <option value="68.">Korea, Dem. People’s Rep.</option>
                            <option value="69">Korea, Rep.</option>
                            <option value="70">Kosovo</option>
                            <option value="71">Kuwait</option>
                            <option value="72">Kyrgyz Republic</option>
                            <option value="73">Latvia</option>
                            <option value="74">Lebanon</option>
                            <option value="75">Libya</option>
                            <option value="76">Lithuania</option>
                            <option value="77">Luxembourg</option>
                            <option value="78">Macedonia, FYR</option>
                            <option value="79">Malaysia</option>
                            <option value="80">Malta</option>
                            <option value="81">Mauritius</option>
                            <option value="82">Mexico</option>
                            <option value="83">Moldova</option>
                            <option value="84">Montenegro</option>
                            <option value="85">Morocco</option>
                            <option value="86">Mozambique</option>
                            <option value="87">Myanmar</option>
                            <option value="88">Namibia</option>
                            <option value="89">Nepal</option>
                            <option value="90">Netherlands</option>
                            <option value="91">New Zealand</option>
                            <option value="92">Nicaragua</option>
                            <option value="93">Niger</option>
                            <option value="94">Nigeria</option>
                            <option value="95">Norway</option>
                            <option value="96">Oman</option>
                            <option value="97">Pakistan</option>
                            <option value="98">Panama</option>
                            <option value="99">Paraguay</option>
                            <option value="100">Peru</option>
                            <option value="101">Philippines</option>
                            <option value="102">Poland</option>
                            <option value="103">Portugal</option>
                            <option value="104">Qatar</option>
                            <option value="105">Romania</option>
                            <option value="106">Russian Federation</option>
                            <option value="107">Saudi Arabia</option>
                            <option value="108">Senegal</option>
                            <option value="109">Serbia</option>
                            <option value="110">Singapore</option>
                            <option value="111">Slovak Republic</option>
                            <option value="112">Slovenia</option>
                            <option value="113">South Africa</option>
                            <option value="114">South Sudan</option>
                            <option value="115">Spain</option>
                            <option value="116">Sri Lanka</option>
                            <option value="117">Sudan</option>
                            <option value="118">Suriname</option>
                            <option value="119">Sweden</option>
                            <option value="120">Switzerland</option>
                            <option value="121">Syrian Arab Republic</option>
                            <option value="122">Tajikistan</option>
                            <option value="123">Tanzania</option>
                            <option value="124">Thailand</option>
                            <option value="125">Togo</option>
                            <option value="126">Trinidad and Tobago</option>
                            <option value="127">Tunisia</option>
                            <option value="128">Turkey</option>
                            <option value="129">Turkmenistan</option>
                            <option value="130">Ukraine</option>
                            <option value="131">United Arab</option>
                            <option value="132" selected>United Kingdom</option>
                            <option value="133">United States</option>
                            <option value="134">Uruguay</option>
                            <option value="135">Uzbekistan</option>
                            <option value="136">Venezuela, RB</option>
                            <option value="137">Vietnam</option>
                            <option value="138">Yemen, Rep.</option>
                            <option value="139">Zambia</option>
                            <option value="140">Zimbabwe</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <center><input type="submit" name="submit" value="select" class="select" /></center>

            <br>
            <label>1]About carbon foot prints:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <button class="up" title="Click to show/hide content" type="button" onclick="if(document.getElementById('a').style.display==='none') {document.getElementById('a').style.display=''}else{document.getElementById('a').style.display='none'}">
                Sources and notes
            </button>
            <div id="a" style="display:none">
                <fieldset class="fieldSet">
                    <label> What is a carbon footprint?</label><br>
                    A carbon footprint is the total amount of greenhouse gases (including carbon dioxide and methane) that are generated by our actions.

                    The average carbon footprint for a person in the United States is 16 tons, one of the highest rates in the world. Globally, the average carbon footprint is closer to 4 tons. To have the best chance of avoiding a 2℃ rise in global temperatures, the average global carbon footprint per year needs to drop to under 2 tons by 2050.

                    Lowering individual carbon footprints from 16 tons to 2 tons doesn’t happen overnight! By making small changes to our actions, like eating less meat, taking fewer connecting flights and line drying our clothes, we can start making a big difference.
                    <br>
                </fieldset>
            </div>
            <br>
            <br>
            <label>2]About effect of carbon in nature:&emsp;&emsp;&emsp;&emsp;</label>
            <button class="up" title="Click to show/hide content" type="button" onclick="if(document.getElementById('b').style.display==='none') {document.getElementById('b').style.display=''}else{document.getElementById('b').style.display='none'}">
                Sources and notes
            </button>
            <div id="b" style="display:none">
                <fieldset class="fieldSet">
                    <label> Effects of Changing the Carbon Cycle</label><br>
                    The changes in the carbon cycle impact each reservoir. Excess carbon in the atmosphere warms the planet and helps plants on land grow more. Excess carbon in the ocean makes the water more acidic, putting marine life in danger.<br>
                    <label> Atmosphere</label><br>
                    It is significant that so much carbon dioxide stays in the atmosphere because CO2 is the most important gas for controlling Earth’s temperature. Carbon dioxide, methane, and halocarbons are greenhouse gases that absorb a wide range of energy—including infrared energy (heat) emitted by the Earth—and then re-emit it. The re-emitted energy travels out in all directions, but some returns to Earth, where it heats the surface. Without greenhouse gases, Earth would be a frozen -18 degrees Celsius (0 degrees Fahrenheit). With too many greenhouse gases, Earth would be like Venus, where the greenhouse atmosphere keeps temperatures around 400 degrees Celsius (750 Fahrenheit).<br>
                    <label>Ocean</label><br>
                    About 30 percent of the carbon dioxide that people have put into the atmosphere has diffused into the ocean through the direct chemical exchange. Dissolving carbon dioxide in the ocean creates carbonic acid, which increases the acidity of the water. Or rather, a slightly alkaline ocean becomes a little less alkaline. Since 1750, the pH of the ocean’s surface has dropped by 0.1, a 30 percent change in acidity.<br>
                    <label>Land</label><br>
                    Plants on land have taken up approximately 25 percent of the carbon dioxide that humans have put into the atmosphere. The amount of carbon that plants take up varies greatly from year to year, but in general, the world’s plants have increased the amount of carbon dioxide they absorb since 1960. Only some of this increase occurred as a direct result of fossil fuel emissions.<br>

                    <br>
                </fieldset>
            </div>
            <br>
            <br>
            <label>3]Sources which produces carbon waste:&emsp;&ensp;</label>
            <button class="up" title="Click to show/hide content" type="button" onclick="if(document.getElementById('c').style.display==='none') {document.getElementById('c').style.display=''}else{document.getElementById('c').style.display='none'}">
                Sources and notes
            </button>
            <div id="c" style="display:none">
                <fieldset class="fieldSet">
                    <label>Main source which produces carbon waste are:</label><br>
                    <label>COAL:</label><br>
                    When coal is burned it releases a number of airborne toxins and pollutants. They include mercury, lead, sulfur dioxide, nitrogen oxides, particulates, and various other heavy metals. Health impacts can range from asthma and breathing difficulties, to brain damage, heart problems, cancer, neurological disorders, and premature death.<br>
                    <label>NATURAL GAS:</label><br>
                    Combustion of natural gas and petroleum products for heating and cooking needs emits carbon dioxide (CO2), methane (CH4), and nitrous oxide (N2O). Emissions from natural gas consumption represent 79% of the direct fossil fuel CO2 emissions from the residential and commercial sectors in 2020. <br>
                    <label>OIL:</label><br>
                    Extra-heavy oils have more carbon residue and yield more high-carbon co-products, such as petroleum coke, than lighter oils. When combusted, some of these petroleum products emit more carbon dioxide than coal, with negative environmental and climate consequences.<br>
                    <label>HYDRO POWER:</label><br>
                    Hydropower energy has the fourth-lowest carbon footprint of all energy types. Per kWh produced, hydropower emits 24 grams of carbon dioxide (CO2) on a life-cycle basis. It combats climate change and has various environmental benefits, but is still responsible for some greenhouse gas emissions.<br>
                    <label>NUCLEAR:</label><br>
                    Nuclear power reactors do not produce direct carbon dioxide emissions
                    Unlike fossil fuel-fired power plants, nuclear reactors do not produce air pollution or carbon dioxide while operating.<br>

                    <br>
                </fieldset>
            </div>
            <br>
            <br>
            <label>4]Solution to reduce carbon waste:&emsp;&emsp;&emsp;&emsp;</label>
            <button class="up" title="Click to show/hide content" type="button" onclick="if(document.getElementById('d').style.display==='none') {document.getElementById('d').style.display=''}else{document.getElementById('d').style.display='none'}">
                Sources and notes
            </button>
            <div id="d" style="display:none">
                <fieldset class="fieldSet">
                    <label>5 Ways To Reduce Your Footprint Significantly</label><br>
                    >Avoid Mass Market, Throw Away Fashion.<br>
                    >Reduce your Meat and Diary Consumption.<br>
                    >Refuse Single-Use Plastic.<br>
                    >Reduce and Rethink your Transportation.<br>
                    >Switch to Green Energy.

                    <br>
                </fieldset>
            </div>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $result = $_POST['country'];
    echo "<center><a href='page.php?id=$result'><input type='submit' value='CALCULATE' class=update></a></center>";
}
?>