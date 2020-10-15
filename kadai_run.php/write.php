<?php
// ファイルに書き込み
$date = $_POST["date"];
$distance1 = $_POST["distance1"];
$distance2 = $_POST["distance2"];
$hour = $_POST["hour"];
$minute = $_POST["minute"];
$distance = $distance1. ".". $distance2;
$duration = $hour. "h". $minute. "min";

$array = ["date" => $date,
          "distance"=> $distance,
          "duration"=> $duration,];
$jsonstr =  json_encode($array);

$file = fopen("./data/data.txt","a");
fwrite($file, $jsonstr . "\n");
fclose($file);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<body>
<div class="header"></div>
<h1>Registered</h1>
<table>
        <tr>
            <th>Date</th>
            <th>Distance</th>
            <th>Duration</th>
        </tr>
        <?= "<tr><td>".$date."</td><td>".$distance."km"."</td><td>".$duration."</td></tr>" ?>
    </table>

<ul>
    <li><a href="read.php">check all log</a></li>
    <li><a href="index.php">Page back</a></li>
</ul>
</body>
</html>