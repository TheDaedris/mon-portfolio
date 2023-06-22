<?php
if (!isset($_GET['page'])) $_GET['page'] = "Accueil";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <base href="/portfolio/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ＰＯＲＴＦＯＬＩＯ　ＳＡＭ</title>
</head>
<style>
    /*Basic CSS*/
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@100;400&family=Tilt+Warp&display=swap');
    :root{
        --bg:#fff;
        --main-color:#f21839;
        
    }
    a, p, div{
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
<body>
    <?php include("partials/header.php"); ?>
    <main>
        <?php if(file_exists('pages/'.$_GET['page'].'.php')) include('pages/'.$_GET['page'].'.php');?>
    </main>
    <?php include("partials/footer.php"); ?>
</body>
</html>