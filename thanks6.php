<?php
    require_once('function.php');
    require_once('dbconnect.php'); // 追加

     if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html');
    }

    $title = $_POST['title'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    // SQL文の準備
    $stmt = $dbh->prepare('INSERT INTO blg (blg_title, blg_name, blg_content) VALUES (?, ?, ?)');
    // SQL文の実行
    $stmt->execute([$title, $name, $content]);//?を変数に置き換えてSQLを実行
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- reset CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css_b/bootstrap.min.css">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/style6.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8b4fc3c985.js"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 p-3 bg-info section_head rounded-top">
                <div class="title">送信完了</div>
            </div>  
        </div>
        <div class="row">
            <div class="col-sm-12 border border-info p-3 rounded-bottom">
                <p><?php echo 'タイトル：'. h($title); ?></p>
                <p><?php echo '名前：'. h($name); ?></p>
                <p><?php echo '内容：'. h($content); ?></p>
                <a href="index6.php"><input type="button" value="トップページへ" class="rounded-pill btn btn-info pl-4 pr-4 mt-2"></a>
            </div>
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