<?php
$symbols=array(
    '♠️','❤️','♦️','♣️'
);
$Power=array($symbols);

$numbers=[];

for($i=2;$i<11;$i++){
    $numbers[]=$i;
}

$numbers[]='J';
$numbers[]='Q';
$numbers[]='K';
$numbers[]='A';

$deck=[];

foreach($symbols as $symbol){
    foreach($numbers as $key=> $number){
        $deck[]=array(
            'key'=>$key,'number'=>$number,'symbol'=>$symbol
        );
    }
}

shuffle($deck);

$cardPlayer=array_shift($deck);
$cardOpponent=array_shift($deck);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>High and Low</title>
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
            /* border: none; */
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
</head>
<body>
    <div class="text-center">

        <h1 class="mt-5 pt-5">High & Low ゲーム</h1>
<hr>
<br>
        <form action="result.php" method="post">
            <?php
                echo <<<EOM
                相手のカード:
                {$cardOpponent['symbol']}{$cardOpponent['number']}
                <input type="hidden" name="OpponentCardNumber" value="{$cardOpponent['number']}">
                <input type="hidden" name="OpponentCardSymbol" value="{$cardOpponent['symbol']}">
                <input type="hidden" name="OpponentCardKey" value="{$cardOpponent['key']}">
                <input type="hidden" name="OpponentCardPower" value="{$cardOpponent['key']}">
                <input type="hidden" name="PlayerCardNumber" value="{$cardPlayer['number']}">
                <input type="hidden" name="PlayerCardSymbol" value="{$cardPlayer['symbol']}">
                <input type="hidden" name="PlayerCardKey" value="{$cardPlayer['key']}">
                <input type="hidden" name="" value="{$Power}">
                
                EOM;
            ?>
    
            
            <br>
            <br>
            <br>
            <input type="radio" name="select" value="High" required>High
            <input class="ml-3" type="radio" name="select" value="Low" required>Low
            <br>
            
            <br>
            <br>
            <input type="submit" class="btn btn-secondary" value="決定">
        </form>
    </div>
</body>
</html>