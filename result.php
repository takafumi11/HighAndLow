<?php
    $cardOpponentNumber=$_POST['OpponentCardNumber'];
    $cardOpponentSymbol=$_POST['OpponentCardSymbol'];
    $cardOpponentKey=$_POST['OpponentCardKey'];
    $cardPlayerNumber=$_POST['PlayerCardNumber'];
    $cardPlayerSymbol=$_POST['PlayerCardSymbol'];
    $cardPlayerKey=$_POST['PlayerCardKey'];
    $highOrLow=$_POST['select'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <style>
        body{
            background-color: grey;
            color: white;            
        }
        .text{
         width: 60%;   
         margin-left: 30%;
         margin-top: 10%;
        }
        
        .text ul li{
            list-style: none;
        }
        .t_p{
            color: white;
            background-color:#222;
            border: 2px solid #222;
            margin-left: 20%;
            margin-top: 5%;
        }

        @media screen and (max-width:800px){
            .text{
                width: 70%;
                margin-left: 10%;
                margin-top: 10%;
                
            }
             .t_p{
            margin-left: 30%;
            margin-top: 20%;
        }
        }
        @media screen and (max-width:500px){
            h1{
                font-size: 35px;
            }
            h2{
                font-size: 24px;
            }
            h3{
                font-size: 24px;
            }
            .text{
                width: 90%;
                margin: 0;
                margin-left: 5%;
                margin-top: 5%;
            }
             .t_p{
            margin-left: 30%;
            margin-top: 10%;
        }
        }
    </style>
    <title>High and Low ゲーム</title>
</head>
<body>
<div align="center">
    <h1 class="mt-5 pt-5">High & Low ゲーム</h1>
    <hr>
    <br>
    <?php
    $purpose = "Webプログラミング";
    echo <<< EOM
    相手のカード:
    {$cardOpponentSymbol}{$cardOpponentNumber}<br><br><br>
    あなたは「{$highOrLow}」を選択しました。<br><br><br>
    あなたのカード:
    {$cardPlayerSymbol}{$cardPlayerNumber}<br><br><br>
EOM;

if($cardOpponentKey<$cardPlayerKey){
    $result='High';
}elseif($cardOpponentKey>$cardPlayerKey){
    $result='Low';
}else{
    $result=$highOrLow;
}

if($result==$highOrLow){
    echo 'YouWin!!';
}else{
    echo 'YouLose!!';
}
    ?>
<br>
<br>
<br>
<br>
    <a href="select.php">
        <button class="btn btn-secondary">もう一度遊ぶ</button>
    </a>
    </div>
</body>
</html>
