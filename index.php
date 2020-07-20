<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
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
    <div class="text">        
        <h1>High & Low ゲーム</h1>
        <h2 class="my-3">ルール説明</h2>
        <h3>1.カードの強弱</h3>
        <ul>
            <li>1-1.数字はトランプ同様で13種類。</li>
            <li>1-2.カードの強さは2->K->Aの順番（Aが一番強い）。</li>
            <li>1-3.マークに強さの差はない。</li>        
        </ul>
        <h3>2.ゲームの進行方法</h3>
        <ul>
            <li>2-1.相手のカードを確認する。</li>
            <li>2-2.伏せられている自分のカードを予想する。</li>
            <li>2-3.自分のカードが相手より強いと判断したらHighを選択し、弱いと判断したらLowを選択する。</li>                
        </ul>
        <h3>3.勝敗の決め方</h3>
        <ul>
            <li>3-1.2-3の結果と実際の結果が等しければ勝利。</li>
            <li>3-2.カードの強弱で勝敗が決まるわけではない。</li>
        </ul>
        <a href="select.php">
            <button class="btn t_p btn-secondary mb-3">ゲームスタート！</button>
        </a>
    </div>
</body>
</html>