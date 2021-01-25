<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datum & Tid</title>
</head>
<body>
    
    <?php
      date_default_timezone_set("Europe/Stockholm");
$cDate = getdate();
$cWeek = idate("W");
switch ($cDate["weekday"]) {
    case "Monday";
        $cDate["weekday"] = "Måndag";
        break;
    case "Tuesday";
        $cDate["weekday"] = "Tisdag";
        break;
    case "Wednesday";
        $cDate["weekday"] = "Onsdag";
        break;
    case "Thursday";
        $cDate["weekday"] = "Torsdag";
        break;
    case "Friday";
        $cDate["weekday"] = "Fredag";
        break;
    case "Saturday";
        $cDate["weekday"] = "Lördag";
        break;
    case "Sunday";
        $cDate["weekday"] = "Söndag";
        break;
    default:
        echo "error!";
}
switch ($cDate["month"]) {
    case "January";
        $cDate["month"] = "Januari";
        break;
    case "February";
        $cDate["month"] = "Februari";
        break;
    case "March";
        $cDate["month"] = "Mars";
        break;
    case "May";
        $cDate["month"] = "Maj";
        break;
    case "june";
        $cDate["month"] = "Juni";
        break;
    case "july";
        $cDate["month"] = "Juli";
        break;
    case "august";
        $cDate["month"] = "Augusti";
        break;
    case "October";
        $cDate["month"] = "Oktober";
        break;
    default:
        echo "error!";
}
if(strlen($cDate['minutes']) == 1){
    $cDate['minutes'] = "0".$cDate['minutes'];
}
echo "Vecka ".$cWeek. " - ".$cDate['weekday']. " den ".$cDate['mday']." ".$cDate['month']." ".$cDate['year']." kl: " .$cDate['hours']. ":".$cDate['minutes'];
?>

</body>
</html>