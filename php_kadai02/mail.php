<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">

</head>
<body>
<article class="formArea">
    <h1>お問い合わせフォーム</h1>
    <div class="container">
    <?php

    $to = "uso8oo@nifty.com";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      foreach ($_POST as $idx => $dainyu) {
        $dainyu = htmlspecialchars($dainyu,ENT_QUOTES);
        $$idx = $dainyu;
      }
    }
    else {
      exit();
    }

echo $name;
    $naiyou = "お名前:$name\nメールアドレス:$email\n
    タイトル:$title\n
    本文:$contents\n";
    $returnpath = '-f uso8oo@nifty.com';

    // 言語設定する
  mb_language("japanese");
  mb_internal_encoding("EUC-JP");

  if(mb_send_mail($to,$title,$naiyou,"from:$email",$returnpath)){
    echo "メールは送信されました";
  } else {
    echo "メールは送信されませんでした";
  }

    ?>
    <p><a href='index.php'></a></p>
  <a href="index.php">戻る</a>
  <br>


    </div>
</article>

</body>
</html>
