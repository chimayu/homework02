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
    $name = $_POST['name'];
    $content = $_POST['content'];

    if ($title == '') {
        $title_result = 'タイトルが入力されていません。';
    } else {
        $title_result = 'タイトル：' . $title;
    }

    if ($name == '') {
        $name_result = '名前が入力されていません。';
    } else {
        $name_result = '名前：' . $name;
    }

    if ($content == '') {
        $content_result =  '内容が入力されていません。';
    } else {
        $content_result = '内容：' . $content;
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
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/style6.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8b4fc3c985.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 p-3 bg-info section_head rounded-top">
                <div class="title">入力内容確認</div>
            </div>  
        </div>
        <div class="row">
            <div class="col-sm-12 border border-info p-3 rounded-bottom">
                <p><?php echo h($title_result); ?></p>
                <p><?php echo h($name_result); ?></p>
                <p><?php echo h($content_result); ?></p> 

                <!-- 送信内容が入ってない場合はOKボタンを出さないPHP -->
                <form method="POST" action="thanks6.php">
                    <input type="hidden" name="title" value="<?php echo h($title); ?>">
                    <input type="hidden" name="name" value="<?php echo h($name); ?>">
                    <input type="hidden" name="content" value="<?php echo h($content); ?>">
                    <input type="button" value="戻る" onclick="history.back()" class="rounded-pill btn bg-light pl-3 pr-3 mt-2 button-gray">
                    <?php if ($title != '' && $name != '' && $content != ''): ?>
                        <input type="submit" value="OK" class="rounded-pill btn btn-info pl-4 pr-4 mt-2">
                    <?php endif; ?>
                </form>
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