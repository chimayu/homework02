<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM blg ORDER BY blg_id DESC');
    $stmt->execute();
    $results = $stmt->fetchAll();
?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- reset CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css_b/bootstrap.min.css">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/style6.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8b4fc3c985.js"></script>

    <title>何かの掲示板??</title>

  </head>
  <body>

    <div class="container">
        <div class="row header border-bottom mt-3 mb-5">
            <div class="col-12 p-3">
                <i class="fas fa-headphones title logo"></i>
                <!-- <img src="assets/img/headphones-solid.svg" class="logo"> -->
                <span class="ml-3 title">おすすめの音楽を紹介する掲示板</span><span class="small pl-4"></span>NO MUSIC NO LIFE</span>
            </div>            
        </div>

        <form method="POST" action="check6.php">
            <div>
                <span class="mr-1 input_subject">タイトル</span><span class="text-danger">*</span><br>
                <input type="text" name="title" class="border border-info p-2 input_text mt-2 rounded">
            </div>
            <div class="mt-3">
                <span class="mr-1 input_subject">名前</span><span class="text-danger">*</span><br>
                <input type="text" name="name" class="border border-info p-2 input_text mt-2 rounded">
            </div>
            <div class="mt-3">
                <span class="mr-1 input_subject">内容</span><span class="text-danger">*</span><br>
                <textarea name="content" class="border border-info p-2 input_text mt-2 rounded"></textarea>
            </div>
            <input type="submit" value="送信" class="rounded-pill btn btn-info pl-4 pr-4 mt-2">
        </form>

        <br><br>
        
        <?php foreach ($results as $result): ?>
        <div class="row mt-5">
            <div class="col-12 p-3 bg-info section_head rounded-top">
                <span class="mr-4"><?php echo 'No: ' . h($result['blg_id']); ?></span>
                <span class="mr-4"><?php echo '名前: ' . h($result['blg_name']); ?></span>
                <span class="mr-4"><?php echo 'タイトル: ' . h($result['blg_title']); ?></span>
                <span><?php echo '投稿日時: ' . h($result['blg_registdate']); ?></span>
            </div>  
        </div>
        <div class="row">
            <div class="col-sm-12 border border-info p-3 rounded-bottom">
                <?php echo h($result['blg_content']); ?>
            </div>   
        </div>
        <?php endforeach; ?>
        
        <div class="row p-3 mt-5 mb-5 border-top">
            <div class="col-2"><span class="copy">&copy;2019 mayumi</span></div>
            <div class="col-3"></div>
            <div class="col-3"><a class="js-scroll">ページTOPに戻る</a></div>
            <div class="col-3"></div>
            <a class="col-1 text-info" href="index.php">BACK-></a>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/js_b/bootstrap.min.js"></script>

    <!-- my JS -->
    <script src="assets/js/app.js"></script>
  </body>
</html>