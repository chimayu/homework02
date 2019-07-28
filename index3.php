<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM blg');
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
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8b4fc3c985.js"></script>

    <title>Blog??</title>

  </head>
  <body>

    <div class="container">
        <div class="row header border-bottom mt-3 mb-5">
            <div class="col-12 p-3">
                <!-- <i class="fas fa-headphones title"></i> -->
                <img src="assets/img/headphones-solid.svg" class="logo">
                <span class="ml-3 title">Blog??</span><span class="small pl-4"></span>blog??</span>
            </div>            
        </div>

        <form method="POST" action="check.php">
            <div>
                タイトル<br>
                <input type="text" name="title">
            </div>
            <div>
                内容<br>
                <textarea name="content"></textarea>
            </div>
            <input type="submit" value="送信">
        </form>

        <br><br>
        
        <?php foreach ($results as $result): ?>
            <p><?php echo 'タイトル: ' . h($result['blg_title']); ?></p>
            <p><?php echo '内容: ' . h($result['blg_content']); ?></p>
            <hr>
        <?php endforeach; ?>


        <div class="row mt-5">
            <div class="col-12 p-3 title">
                A
            </div>            
        </div>
        
        <div class="row">
            <div class="col-sm-12 bg-warning p-3">
                <img src="assets/img/logo_dummy.jpg" alt="logo_dummy" class="grid-img">
            </div>   
        </div>

        <div class="row mt-5">
            <div class="col-12 p-3 title">
                B
            </div>            
        </div>
        
        <div class="row">
            <div class="col-sm-12 bg-info p-3">
                <img src="assets/img/logo_dummy.jpg" alt="logo_dummy" class="grid-img">
            </div> 
        </div>

        <div class="row mt-5">
            <div class="col-12 p-3 title">
                C
            </div>            
        </div>
        
        <div class="row">
            <div class="col-sm-12 bg-warning p-3">
                <img src="assets/img/logo_dummy.jpg" alt="logo_dummy" class="grid-img">
            </div> 
        </div>

        <div class="row mt-5">
            <div class="col-12 p-3 title">
                D
            </div>            
        </div>
        
        <div class="row">
            <div class="col-sm-12 bg-info p-3">
                <img src="assets/img/logo_dummy.jpg" alt="logo_dummy" class="grid-img">
            </div>  
        </div>

        <div class="row mt-5">
            <div class="col-12 p-3 title">
                E
            </div>            
        </div>
        
        <div class="row">
            <div class="col-sm-12 bg-warning p-3">
                <img src="assets/img/logo_dummy.jpg" alt="logo_dummy" class="grid-img">
            </div> 
        </div>
        
        <div class="row p-3 mt-5 mb-5 border-top">
            <div class="col-2"><span class="copy">&copy;2019 mayumi</span></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-3"><a class="js-scroll">ページTOPに戻る</a></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <a class="col-1" href="index4.php">NEXT-></a>
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