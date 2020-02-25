
<!-- フォームの値を取得 -->
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  foreach($_POST as $idx => $dainyu)
  {
    // echo "<p>".$idx."=".$dainyu."<br>";
    $dainyu = htmlspecialchars($dainyu,ENT_QUOTES);

    $$idx = $dainyu;

    // echo "idx=".$$idx."___でdainyu=_".$dainyu."<br>";
  }
}


else{
  exit();
}

// <!-- 入力チェック -->
$ErrFlg = 0;
if ($title == "") {
  echo "<p>件名が入力されていません";
  $ErrFlg = 1;
}

if ($name == "") {
  echo "<p>お名前が入力されていません";
  $ErrFlg = 1;
}

if ($email == "") {
  echo "<p>メールアドレスが入力されていません";
  $ErrFlg = 1;
}

if ($contents == "") {
  echo "<p>本文が入力されていません";
  $ErrFlg = 1;
}





if($ErrFlg){
 echo "<br><a href=\"index.php\">戻ろう</a>";

  exit();

}

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>確認画面</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">


</head>
<body>
<article class="formArea">
 <h1>お問い合わせフォーム</h1>

    <div class="container">
    <form action="mail.php" method="post">
    <h1>確認画面 こちらで間違いないですか?</h1>
    <input type="submit" value = "お問い合わせ送信">

      <?php
      echo "<h1>".$title."<br>".$name."<br>".$email."<br>"."contents"."</h1>";
      ?>
      <input type="hidden" name="title" value="<?php echo $title ?>">
      <input type="hidden" name="name" value="<?php echo $name ?>">
      <input type="hidden" name="email" value="<?php echo $email ?>">
      <input type="hidden" name="contents" value="<?php echo $contents ?>"
      <input type="submit" value = "お問い合わせ送信"><a href="index.php">戻ろう</a>

        </form>
    </div>






</article>


</body>
</html>