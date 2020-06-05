<?php
//別ファイルの読み込み
require_once('functions.php');
require_once('dbconnect.php');



//全件取得用のSQL文作成
$sql = 'SELECT * FROM surveys';

//SQLの実行準備
$stmt = $dbh->prepare($sql);

//SQLの実行
$stmt->execute();

//結果の取得
$results = $stmt->fetchAll();
// var_dump($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    div {
      padding: 20px;
      border: 1px solid black;
      margin: 5px;
    }
  </style>
</head>
<body>
  
  
  <?php foreach ($results as $key => $value) { ?>
  
  <div>
    <p>ID: <?php echo h($value['id']); ?> </p>
    <p>名前：<?php echo h($value['name']); ?></p>
    <p>メールアドレス： <?php echo h($value['email']); ?></p>
    <p>お問い合わせ内容：<?php echo h($value['content']); ?></p>
  </div>

  <?php } ?>

</body>
</html>