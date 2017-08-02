<?php
$currentYear = date('Y');
$currentMonthText = date('F');
$currentMonth = date('n');
$today = date('d');
//$currentMonth = 2;
$selectedYear = $currentYear;
$selectedMonthText = $currentMonthText;
$selectedMonth = $currentMonth;
$numberOfDays = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);

$monthStartingDay = date('N', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
$weekDays = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
$cellCount = 42;
$columns = 7;
$date = 1;
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Quotes</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->



</head>

<body>


    <div class="row">
      <div class="col-xs-12 col-md-3">

    <table class="table table-responsive table-bordered">
      <tr>
        <td><a href="#"><<</a></td>
        <td colspan="5" class="text-center"><strong><?= $currentMonthText." ".$currentYear ?></strong></td>
        <td><a href="#">>></a></td>
      </tr>
      <tr>
        <th><span class="hidden-xs">MON</span><span class="visible-xs">M</span></th>
        <th><span class="hidden-xs">TUE</span><span class="visible-xs">T</span></th>
        <th><span class="hidden-xs">WED</span><span class="visible-xs">W</span></th>
        <th><span class="hidden-xs">THU</span><span class="visible-xs">T</span></th>
        <th><span class="hidden-xs">FRI</span><span class="visible-xs">F</span></th>
        <th><span class="hidden-xs">SAT</span><span class="visible-xs">S</span></th>
        <th><span class="hidden-xs">SUN</span><span class="visible-xs">S</span></th>
      </tr>
      <?php
        for($i=1;$i<=$cellCount;$i++){
          if($i == 1)
            echo "<tr>";
          if($i >= $monthStartingDay && $date <= $numberOfDays){
			  if ($today == $date)
				  $class = "active text-center";
			  else
				  $class = "text-center";
              echo "<td class='$class'><a href='#'>".$date++."</a></td>";
            if($i%$columns == 0 && $i != $cellCount){
              echo "</tr><tr>";
            }
            else if($i%$columns == 0){
              echo "</tr>";
            }
          }
          else{
            echo "<td>&nbsp;</td>";
          }
          if($date > $numberOfDays && $i%$columns == 0){
            echo "</tr>";
            break;
          }
        }
       ?>

    </table>
  </div>
</div>
  </div>

</body>
</html>
