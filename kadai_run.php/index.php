<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Log of the day</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header"></div>
    <h1>Running Log</h1>
    <form action="write.php" method="post">
        <ul>
        <li>Date: <input type="date" name="date" id="date"></li> 
        <li>Distance: <input type="number" name="distance1" id="distance1" value="0" min="0" > . <input type="number" name="distance2" id="distance2" value="0" min="0" max="9"> km</li> 
        <li>Duration: <input type="number" name="hour" id="hour" value="0" min="0"> h <input type="number" name="minute" id="minute" value="0" min="0" max="59"> min</li> 
        <!-- <li><span id="cal">【Auto cal】</span>Average Pace: <input type="text" name="pace" id="pace" placeholder="00" disabled="disabled">min/km</li>  -->
        <li><input type="submit" value="Submit" id="submit"></li> 
        </ul>
    </form>

<script>

// // paceを自動計算
// $("#cal").on("click", function(){
//     let distance1 = $("#distance1").val();
//     let distance2 = $("#distance2").val();
//     let hour = $("#hour").val();
//     let minute = $("#minute").val();
//     // minuteが59より大きかったらアラートを出す
//     if (minute>59) {
//         alert("59分以上は時間単位で入力してください");
//         return false;
//     }
//     // 各フォームが空白ならアラートを出す
//     if (distance1 == "" && distance2 == "") {
//           alert("走行距離を入力してください");
//           return false;
//         }
//     if (hour == "" && minute == "") {
//           alert("走行時間を入力してください");
//           return false;
//         }
//     let duration_h = hour*60;
//     if (duration_h==0) {
//         duration_h ="";
//     }
//     let duration_m = minute;
//     if (duration_m==0) {
//         duration_m ="";
//     }
//     let duration = duration_h + duration_m;
//     let pace = parseInt(duration/distance/60);
//     $("#pace").val(pace);
// });

$("#submit").on("click", function(){
    let date = $("#date").val();
    let distance1 = $("#distance1").val();
    let distance2 = $("#distance2").val();
    let hour = $("#hour").val();
    let minute = $("#minute").val();
    // minuteが59より大きかったらアラートを出す
    if (minute>59) {
        alert("59分以上は時間で入力してください");
        return false;
    }
    // 各フォームが空白ならアラートを出す
    if (date == "") {
          alert("日にちを選択してください");
          return false;
        }
    if (distance1 == "0" && distance2 == "0") {
          alert("走行距離を入力してください");
          return false;
        }
    if (hour == "0" && minute == "0") {
          alert("走行時間を入力してください");
          return false;
        }
});



    
</script>
</body>
</html>