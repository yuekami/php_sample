<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chapter1</title>
</head>

<body>

    <form action="post.php" method="POST">
        名前:<input type="text" name="name" value=""><br />
        テキスト:<input type="text" name="text" value=""><br />
        <input type="submit" value="登録">
    </form>
    <?php
    header('Content-Type: text/html; charset=UTF-8');
    require "DbConnecter.php";

    $dbConnecter = new DbConnecter;
    echo $dbConnecter->Select();

    ?>
</body>

</html>
