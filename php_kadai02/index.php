<?php

// if ($_SERVER['REQUEST_METHOD'] === 'POST')
// {
//     var_dump($_POST);
//     $title = $_POST['title'];
//     $impression = $_POST['email'];
//     $name = $_POST['name'];
//     echo ($HTTP_POST_VARS);

// }

?>

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
    <form action="post.php" method="post">
        件名:      <input type="text" name="title"><br>
       お名前:     <input type="text" name="name"><br>
       メール:     <input type="text" name="email"><br>
       本文:       <textarea name="contents" rows="8" cols="40"></textarea><br>
        <input type="submit" value = "お問い合わせ送信">
        </form>
    </div>






</article>


</body>
</html>