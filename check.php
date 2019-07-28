<?php
    // 別のファイルを読み込む
    require_once('function.php');

    // GETで来た場合はindex.htmlに戻す
    // echo '<pre>';
    // var_dump();
    // die;

     if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html');
    }

    $title = $_POST['title'];
    $content = $_POST['content'];

    if ($title == '') {
        $title_result = 'タイトルが入力されていません。';
    } else {
        $title_result = 'タイトル：' . $title;
    }

    if ($content == '') {
        $content_result =  'お問い合わせ内容が入力されていません。';
    } else {
        $content_result = 'お問い合わせ内容：' . $content;
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- reset CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css_b/bootstrap.min.css">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8b4fc3c985.js"></script>
</head>

<body>
    <h1>入力内容確認</h1>
    <p><?php echo h($title_result); ?></p>
    <p><?php echo h($content_result); ?></p>
    <!-- 送信内容が入ってない場合はOKボタンを出さないPHP -->
    <form method="POST" action="thanks.php">
        <input type="hidden" name="title" value="<?php echo h($title); ?>">
        <input type="hidden" name="content" value="<?php echo h($content); ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($title != '' && $content != ''): ?>
            <input type="submit" value="OK">
        <?php endif; ?>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/js_b/bootstrap.min.js"></script>

    <!-- my JS -->
    <script src="assets/js/app.js"></script>

</body>
</html>