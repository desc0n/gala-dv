<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Мы рады Вам предложить самые технологичные и современные печные камины, биокамины (настольные,напольные,настенные), топки. Все товары сочетают в себе европейское качество и современный дизайн.">
    <meta name="Keywords" content="продажа каминов, продажа печей каминов,купить камин,дровяные печи,печи отопительные,печь камин,камины во владивостоке,биокамины,купить биокамин,биокамины во владивостоке,современные камины,европейские камины,камины romotop,камины ромотоп,печь камин купить,камины для дома,печи камины длительного горения,камины gala,камины гала,современный интерьер">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GALA. Камины. <?=(isset($pageTitle) ? $pageTitle : '');?></title>

    <!-- Bootstrap -->
    <link href="/public/css/bootstrap.css" rel="stylesheet">
    <link href="/public/css/custom.css" rel="stylesheet">
    <link href='/public/fonts/gothic.ttf' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="molding-container">
    <div class="molding-title">
        <a href="/home"><img class="molding-logo" src="/public/i/slider-logo.png"></a>
        <h1>Багет</h1>
        <img class="molding-frames" src="/public/i/molding.png">
        <div class="molding-text text-center">
            <?=Arr::get($pageData, 'content');?>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/public/js/bootstrap.js"></script>
</body>
</html>