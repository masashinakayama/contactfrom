<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactform</title>

    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらでよろしいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。</p>

        <p>名前<br><?php echo $_POST['name']; ?></p>
        <p>メールアドレス<br><?php echo $_POST['mail'] ?></p>
        <p>年齢<br><?php echo $_POST['age'] ?></p>
        <p>コメント<br><?php echo $_POST['comments'] ?></p>

        <!-- 戻って修正するボタン -->
        <form action="index.html">
            <input type="submit" calss="button1" value="戻って修正する">
        </form>

        <!-- 改めてindex.htmlの内容をinsert.phpへ渡すボタン -->
        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>
    </div>
    
</body>
</html>