<?php 

$yestoday=date("Y-m-d");


$start = new DateTime('01.09.2018');
$end = new DateTime('30.07.2019 23:59');
$interval = new DateInterval('P1D');
$dateRange = new DatePeriod($start, $interval, $end);

$weekNumber = 1;
$weeks = array();
foreach ($dateRange as $date) {
  $weeks[$weekNumber][] = $date->format('Y-m-d');
  if ($date->format('w') == 0) {
    $weekNumber++;
  }
}

//echo '<pre>';
//print_r($weeks);
//echo '</pre>';

foreach ($weeks as $key => $value) {
foreach ($value as $keys => $val) {
if($val == $yestoday){$met = $key;}}}

$b= $met % 2;
$yday=date("d.m");

foreach ($weeks as $keyz => $valuez) {
foreach ($valuez as $keysz => $valz) {
if($valz == $yestoday){$memb = $keysz;}}}
?>



<center><div class="centr"><h1 class="daz">
<?php 
if($b == 1){
echo "Неделя знаменателя";
}
else{
echo "Неделя числителя ";
}
?>
</h1></div></center>
