<?php
// DB接続の設定
// DB名は`gsacf_x00_00`にする
$dbn = 'mysql:dbname=commit;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
    
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


$sql = "SELECT * FROM travel WHERE Q1='0'";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();


if ($status == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
   
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    $output = "";
    foreach ($result as $record) {


        $output .= "<span>{$record["commit"]},</span>";
    }
};



$sql2 = "SELECT * FROM travel WHERE Q1='1'";

// ASC

// SQL準備&実行

$stmt = $pdo->prepare($sql2);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    // fetchAll()関数でSQLで取得したレコードを配列で取得できる
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output2 = "";
    // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
    // `.=`は後ろに文字列を追加する，の意味
    foreach ($result as $record) {

        $output2 .= "<span>{$record["commit"]}<br> </span>";
    }
};

// $option1 = "SELECT COUNT(Q1) FROM travel WHERE  Q1='0' ";

// $stmt = $pdo->prepare($option1);
// $status1 = $stmt->execute();

// if ($status1 == false) {
//     $error = $stmt->errorInfo();
//     exit("sqlError:" . $error[2]);
// } else {
//     $result1 = $stmt->fetchAll(PDO::FETCH_NUM);  // データの出力用変数（初期値は空文字）を設定

// };

// $option2 = "SELECT COUNT(Q1) FROM travel WHERE  Q1='1' ";

// $stmt = $pdo->prepare($option2);
// $status2 = $stmt->execute();

// if ($status2 == false) {
//     $error = $stmt->errorInfo();
//     exit("sqlError:" . $error[2]);
// } else {
//     $result2 = $stmt->fetchAll(PDO::FETCH_NUM);  // データの出力用変数（初期値は空文字）を設定


// };
?>

<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>（一覧画面）</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // google.charts.load('current', {
        //     'packages': ['corechart']
        // });
        // google.charts.setOnLoadCallback(drawChart);

        // function drawChart() {

        //     var data = google.visualization.arrayToDataTable([
        //         ['有沒有來過福岡', '人数'],
        //         ['有', <?= $result1 ?>],
        //         ['沒有', <?= $result2 ?>]
        //     ]);

        //     var options = {
        //         title: '來過福岡的人數百分比'
        //     };

        //     var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        //     chart.draw(data, options);
        // };
    </script>

    <style>
        body {
            background-color: whitesmoke;
        }

        .img {
            position: relative;
        }

        .a {
            position: absolute;
            right: 5px;
            top: 5px;
            z-index: 2;
        }

        .b {
            position: absolute;
            right: 5px;
            top: 350px;
            z-index: 1;
        }

        .c {
            position: absolute;
            left: 5px;
            top: 350px;
            z-index: 2;
        }

        .d {
            position: absolute;
            left: 5px;
            top: 5px;
            z-index: 1;
        }

        .p {
            position: absolute;
            left: 60px;
            top: 130px;
            z-index: 100;
        }

        .p2 {
            position: absolute;
            right: 230px;
            top: 80px;
            z-index: 100;
        }

        .text {
            position: absolute;
            right: 550px;
            top: 300px;
            z-index: 100;
            font-weight: 800;
            font-size: 18px;
        }

        .text2 {
            position: absolute;
            right: 330px;
            top: 480px;
            z-index: 100;
            font-weight: 800;
            font-size: 18px;
        }

        .link{
            text-decoration: none;
            font-weight: 800;
        }
        .link:hover{
            opacity: 0.6;
        }
    </style>
</head>

<body>

    <a href="H_input.php" class="link">返回</a>
    <div class="img">

        <img class="a" src="https://static.fotor.com.cn/assets/stickers/freelancer_PR_0806_02/05f85136-f4d7-44e5-9f60-158af58bd722_medium_thumb.jpg" alt="" width="400px" height="350px">
        <img class="b" src="https://lh3.googleusercontent.com/proxy/sCnzrRKVL_cF5kEJ4_bvM6MWmaU7M2UyiMdbrC0a4LjBsLKAQalw4vXnoQXEhB2rxoBVVB0BWr7fpNZF5yhbr-OZ90xjc96HQjoLmigv65ZFbJvPyr_Ya0I" alt="" width="300px" height="300px">
        <img class="c" src="https://lh3.googleusercontent.com/proxy/sMUsG5--2Y9cji6YMZhTZFzHye9N3LWMtrm_n6uN_S3iVfpvlISTFa_P2zDS57WDzzSQWx0ytbkG1p4r3B9b0eW656DctoB24nSQv5B-UFB7fROfoWHuGqw" alt="" width="290px" height="330px">
        <img class="d" src="https://img.tukuppt.com/png_preview/00/05/59/cxWNEVH3Nx.jpg!/fw/780" alt="" width="600px" height="350px">
    </div>
    <table>

        <tbody>
            <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
            <h1 class="text">福岡に来たことある人のコメント</h1>
            <h1 class="text2">福岡に来たことない人コメント</h1>
            <p class="p"><?= $output ?></p>
            <p class="p2" style="direction: rtl;"><?= $output2 ?></p>

        </tbody>
    </table>

    <!-- <div id="piechart1" style="width: 900px; height: 500px;"></div> -->
</body>

</html>