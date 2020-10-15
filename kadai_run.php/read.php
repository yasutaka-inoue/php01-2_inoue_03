<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
function getfile(){
    // ファイルを開く
    $openFile = fopen("./data/data.txt","r");
    // ファイル内容を1行ずつ読み込んで出力
    while($str = fgets($openFile)){
        // echo nl2br($str);
        $array = json_decode($str, true);
        $date = h($array ["date"]);
        $distance = h($array ["distance"]);
        $duration = h($array ["duration"]);
        echo "<tr><td>".$date."</td>
        <td>".$distance."km"."</td>
        <td>".$duration."</td>";
    }
    // ファイルを閉じる
    fclose($openFile);
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Log</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/monthly.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/monthly.css">
</head>
<body>
<div class="header"></div>
    <h1>Running Log</h1>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Distance</th>
            <th>Duration</th>
        </tr>
        <?php getfile() ?>
    </table>
    <div class="monthly" id="mycalendar"></div>

<script>
// 走った日にカレンダーにマークをつける
$("#mycalendar").monthly({
});



</script>
</body>
</html>