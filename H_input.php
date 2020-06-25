<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
    <style>
        .survey {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: 'cursive', 'Sawarabi Gothic',
                sans-serif;
        }

        .survey ul li {
            list-style: none;
        }

        .survey ul {
            color: steelblue;
        }

        .a {
            font-size: 18px;
            font-weight: 800;
            font-family: 'Pangolin', cursive;

        }

        .qu {
            border-bottom: lightslategrey solid 2px;

        }

        .b {
            border-left: hidden;
            border-top: hidden;
            border-right: hidden;
        }

        .c:hover {
            opacity: 0.3;
        }

        .title {
            margin: 10px;
        }

        .button {
            margin-top: 10px;
        }

        a:hover {
            opacity: 0.6;
        }

        .p {
            font-family: 'Pangolin', cursive;
        }

        .link {
            text-decoration: none;
            font-weight: 800;
           
        }

        .link:hover {
            opacity: 0.6;
        }
    </style>
</head>

<body>
    <form action="H_create.php" method="post">


        <a href="H_read.php" class="link">一覧画面</a>
        <div class="survey">
            <h1>福岡アンケート調査</h1>
            <p class="p">Fukuoka travel survey</p>
            <img src="https://kinarino.k-img.com/system/press_images/001/251/467/3eafd0b90d7dd3fb9538379af797dae6698e5c60.jpg?1529471036" width="600px" height="300px">
            <div class="title">
                <label for="name" class="c"> 姓名: <input type="name" name="name">
            </div>
            <div class="title">
                <label for="email" class="c">email: <input type="email" name="email">
            </div>
            <div class="title">
                <label for="Q1"> 您有來過福岡嗎:</label>
                <input type="radio" name="Q1" value="0">有。
                <input type="radio" name="Q1" value="1">沒有。
            </div>
            <div>
                您對福岡的印象？ <input type="text" name="commit">
            </div>
            <div>
                <button style="width:120px;height:40px;border:2px blue none;" class="button">submit</button>
            </div>

        </div>
    </form>
</body>

</html>