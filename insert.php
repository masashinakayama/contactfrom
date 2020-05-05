<?php
mb_internal_encodeing("utf8");
$pdo = new PDO("mysql:dbname=contactform;host=localhost;","root","root");

$pdo->exec("insert into contacrform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactform</title>

    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
    </div>
    
</body>
</html>