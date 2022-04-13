<?php
header('Content-Type: text/html; charset=UTF-8');
    class DbConnecter{


        public function Select(){
            $str = "";
            $pdo = new PDO(
                // ホスト名、データベース名
                'mysql:host=localhost;dbname=test;',
                // ユーザー名
                'root',
                // パスワード
                '*****',
                // レコード列名をキーとして取得させる
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
            );
            // SQL文をセット
            $stmt = $pdo->prepare('SELECT * FROM testtable');

            // SQL文を実行
            $stmt->execute();

            // ループして1レコードずつ取得
            foreach ($stmt as $row) {
                foreach ($row as $cell) {
                    $str .= $cell;
                }
                $str .= "<br/>";
            }

            return $str;
        }

        public function Insert($argName, $argText){

            $name = "'" . $argName . "'";
            $text = "'" . $argText . "'";
            $pdo = new PDO(
                // ホスト名、データベース名
                'mysql:host=localhost;dbname=test;',
                // ユーザー名
                'root',
                // パスワード
                '*****',
                // レコード列名をキーとして取得させる
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
            );
            // SQL文をセット
            $stmt = $pdo->prepare('insert into testtable (id, name, text) select coalesce(max(id)+1, 1),'. $name. ',' .  $text . ' from testtable;');

            // SQL文を実行
            $stmt->execute();

            header("Location: ./index.php");
        }
    }
?>
