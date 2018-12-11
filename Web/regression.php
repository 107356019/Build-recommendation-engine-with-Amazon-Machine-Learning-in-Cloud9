<html>
<head>
    <!--Import css-->
    <link rel="stylesheet" href="sexybuttons.css" type="text/css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css-table.css" />
    <!--Import JQuery-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            background: url("bg.png");
            background-size: 80% 110%;
            background-repeat: no-repeat;
            background-position: center;
            padding-top: 40px;
            margin: 0;
            padding: 20px;
            font: 13px "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, sans-serif;
        }
        /* ---- Some Resets ---- */
        p,
        table caption, td, tr, th {
        	margin:0;
        	padding:0;
        	font-weight:normal;
        	font-size:12px;	
        }
        /* ---- Paragraphs ---- */
        
        p {
        	margin-bottom:15px;
        	}
        	
        /* ---- Table ---- */
        table{
        	border-collapse:collapse;
        	margin-bottom:15px;
        	width:80%;
        	}

    	caption {
    		text-align:left;
    		font-size:10px;
    		padding-bottom:10px;
    		}
	
    	table td,
    	table th {
    		padding:8px;
    		border:1px solid #fff;
    		border-width:0 1px 1px 0;
    		}
    		
    	thead th {
    		background:#91c5d4;
    		}
    			
    		thead th[colspan],
    		thead th[rowspan] {
    			background:#66a9bd;
    			}
		
    	tbody th,
    	tfoot th {
    		text-align:right;
    		background:#91c5d4;
    		}
    		
    	tbody td,
    	tfoot td {
    		text-align:left;
    		background:#d5eaf0;
    		}
    		
    	tfoot th {
    		background:#b0cc7f;
    		}
    		
    	tfoot td {
    		background:#d7e1c5;
    		font-weight:bold;
    		}
    			
    	tbody tr.odd td { 
    		background:#bcd9e1;
    		}
    
    </style>
</head>
<script>
    // table hover setting
    $(document).ready(function () {		   
        $('tbody tr').hover(function() {
        $(this).addClass('odd');
        }, function() {
        $(this).removeClass('odd');
        });

    });
</script>
<body>
    <div style="margin:0px auto;text-align:center;width:1000px;height:60px">
        <!-- ECV Logo -->
        <img src="https://rec-data.kalibrr.com/logos/VELCLCTWTN2ZQU5V92UVT4LKGPJYCV8N5EXBCZYT-5bb027b7.png" width="100px" style="padding-right:10px;vertical-align: middle;">
         <!-- Title -->
        <span style="vertical-align: middle;"><font size="6px"><b>Bootcamp : Amazon Machine Learning Demo</b></font></span>
    </div>
    <center>
        <form method="POST" action="regression.php">
            <input type="hidden" name="ml" value="y">
            <table>
                <thead>
                    <tr>
                        <th scope="col" colspan="8">
                            <font size="3px"><b>amazon machine learning demo</b></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- The variable of season -->
                    <tr>
                        <th><b>Season</b> </th>
                        <td><input type="radio" name="mla" value="1" checked> spring</td>
                        <td><input type="radio" name="mla" value="2"> summer</td>
                        <td><input type="radio" name="mla" value="3"> fall</td>
                        <td><input type="radio" name="mla" value="4"> winter</td>
                        <td colspan="3"></td>
                    </tr>
                    <!-- The variable of Month -->
                    <tr>
                        <th><b>Month </b></th>
                        <td><input type="radio" name="mlb" value="1" checked> January</td>
                        <td><input type="radio" name="mlb" value="2"> February</td>
                        <td><input type="radio" name="mlb" value="3"> March</td>
                        <td><input type="radio" name="mlb" value="4"> April</td>
                        <td><input type="radio" name="mlb" value="5"> May</td>
                        <td><input type="radio" name="mlb" value="6"> June</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="radio" name="mlb" value="7"> July</td>
                        <td><input type="radio" name="mlb" value="8"> August</td>
                        <td><input type="radio" name="mlb" value="9"> September</td>
                        <td><input type="radio" name="mlb" value="10"> October</td>
                        <td><input type="radio" name="mlb" value="11"> November</td>
                        <td><input type="radio" name="mlb" value="12"> December</td>
                        <td></td>
                    </tr>
                    <!-- The variable of weekday -->
                    <tr>
                        <th><b>Weekday </b></th>
                        <td><input type="radio" name="mlc" value="0" checked> Sunday</td>
                        <td><input type="radio" name="mlc" value="1"> Monday</td>
                        <td><input type="radio" name="mlc" value="2"> Tuesday</td>
                        <td><input type="radio" name="mlc" value="3"> Wednesday</td>
                        <td><input type="radio" name="mlc" value="4"> Thursday</td>
                        <td><input type="radio" name="mlc" value="5"> Friday</td>
                        <td><input type="radio" name="mlc" value="6"> Saturday</td>
                    </tr>
                    <!-- The variable of working day -->
                    <tr>
                        <th><b>Working Day </b></th>
                        <td><input type="radio" name="mld" value="0" checked> No</td>
                        <td><input type="radio" name="mld" value="1"> Yes</td>
                        <td colspan="5"></td>
                    </tr>
                    
                    <!-- The variable of weathersit -->
                    <tr>
                        <th><b>Weathersit </b></th>
                        <td><input type="radio" name="mle" value="1" checked> Cloudy</td>
                        <td><input type="radio" name="mle" value="2"> Sunny</td>
                        <td><input type="radio" name="mle" value="3"> Rainy</td>
                        <td colspan="4"></td>
                    </tr>
                </tbody>
            </table>
            <!-- Predict button -->
            <center>
                <button type="submit" class="sexybutton sexysimple sexymagenta">PREDICT !</button>
            </center>
        </form>
    </center>
    <h1>
        <center>
            <?php
            // set time zone 
            date_default_timezone_set("Asia/Taipei");
            
            // import aws sdk for php
            require './vendor/autoload.php';

            // declare a client to use aws machine learning
            $ml = new Aws\MachineLearning\MachineLearningClient([
                'region' => 'us-east-1',
                'version' => 'latest',
            ]);
            
            // get form data
            if ($_POST["ml"] == "y") {
                $mla = $_POST[mla];
                $mlb = $_POST[mlb];
                $mlc = $_POST[mlc];
                $mld = $_POST[mld];
                $mle = $_POST[mle];

                // get predict result
                $result = $ml->predict([
                    'MLModelId' => 'your model id', // REQUIRED
                    'PredictEndpoint' => 'your endpoint url', // REQUIRED
                    'Record' => ['season' => $mla, 'mnth' => $mlb, 'weekday' => $mlc, 'workingday' => $mld, 'weathersit' => $mle], // REQUIRED
                ]);

                // show predict result
                $show = $result[Prediction][predictedValue];
                switch ($mla) {case "1":$a = "spring";
                        break;case "2":$a = "summer";
                        break;case "3":$a = "fall";
                        break;case "4":$a = "winter";
                        break;}
                switch ($mlb) {case "1":$b = "January";
                        break;case "2":$b = "February";
                        break;case "3":$b = "March";
                        break;case "4":$b = "April";
                        break;case "5":$b = "May";
                        break;case "6":$b = "June";
                        break;
                    case "7":$b = "July";
                        break;case "8":$b = "August";
                        break;case "9":$b = "September";
                        break;case "10":$b = "October";
                        break;case "11":$b = "November";
                        break;case "12":$b = "December";
                        break;}
                switch ($mlc) {case "0":$c = "Sunday";
                        break;case "1":$c = "Monday";
                        break;case "2":$c = "Tuesday";
                        break;case "3":$c = "Wednesday";
                        break;case "4":$c = "Thursday";
                        break;case "5":$c = "Friday";
                        break;case "6":$c = "Saturday";
                        break;}
                switch ($mld) {case "0":$d = "No";
                        break;case "1":$d = "Yes";
                        break;}
                switch ($mle) {case "1":$e = "Cloudy";
                        break;case "2":$e = "Sunny";
                        break;case "3":$e = "Rainy";
                        break;}
                
                echo "<br><font color='gray'>Season: " . $a . ", Month: " . $b . ", Weekday: " . $c . ", Working Day: " . $d . ", Weathersit: " . $e . "</font>";
                echo "<br>Predict Result :<font size='40px'>" . $show . "</font>";

                $result = $ml->getMLModel([
                    'MLModelId' => 'your model id', // REQUIRED
                    'Verbose' => true,
                ]);
            }

            ?>
        </center>
</body>

</html>