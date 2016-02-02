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
    <link rel="icon" href="/public/i/fav.png" sizes="38x38" type="image/png">
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
<div class="preload" id="preload">
    <div class="intro">
        <div class="intro-caption">
            <img class="intro-1" src="/public/i/intro/1.png">
            <div id="intro-letters">
                <img class="intro-2" src="/public/i/intro/2.png">
                <img class="intro-3" src="/public/i/intro/3.png">
                <img class="intro-4" src="/public/i/intro/4.png">
                <img class="intro-5" src="/public/i/intro/5.png">
            </div>
        </div>
    </div>
</div>
<header id="myCarousel" class="carousel slide carousel-slider">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?$i=0;?>
        <?foreach($mainPageData as $id => $img){?>
        <?$activeIndicator = !isset($activeIndicator) ? ' class="active"' : '';?>
        <li data-target="#myCarousel" data-slide-to="<?=$i;?>" <?=$activeIndicator;?>></li>
        <?$i++;?>
        <?}?>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner carousel-inner-slider">
        <?foreach($mainPageData as $id => $img){?>
        <?$active = !isset($active) ? 'active' : '';?>
        <div class="item item-slider <?=$active;?>">
            <div class="fill" style="background-image:url('/public/i/slider/<?=$img;?>');">
            </div>
        </div>
        <?}?>
    </div>

    <!-- Controls -->
    <a class="carousel-caption" href="/home">
        <img src="/public/i/slider-logo.png" class="slider-logo">
    </a>
    <a class="left carousel-control" href="/home" data-slide="prev">
        <span >КАМИНЫ</span>
    </a>
    <a class="right carousel-control" href="/molding" data-slide="next">
        <span>БАГЕТ</span>
    </a>

</header>
<link href="/public/css/slider.css" rel="stylesheet">
<link href="/public/css/intro.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/public/js/bootstrap.js"></script>
<script src="/public/js/intro.js"></script>

</body>
</html>