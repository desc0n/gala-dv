<?=View::factory('navbar');?>

<!-- Begin page content -->
<div class="container">

    <div class="row afterf">

        <div class="container">

            <div id="carousel-example-generic" class="carousel slide carousel-index" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?foreach (Arr::get($homePageData, 'big_img', []) as $img) {?>
                    <?$active = !isset($active) ? 'active' : '';?>
                    <div class="item <?=$active;?>">
                        <img src="/public/i/home/big/<?=$img;?>" alt="">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <?}?>
                    <div class="carousel-slogan">
                        <div class="header">Современное тепло</div>
                        <div class="slogan">новое слово в решении интерьеров и экстерьеров</div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="index-nav ">
                <div class="col-md-4 col-sm-12 col-xs-12 left"><a href="/category/list/?category_id=1">Биокамины</a></div>
                <div class="col-md-4 col-sm-12 col-xs-12 middle"><a href="/category/list/?all_ch=true&category_id=2">Печные камины и топки</a></div>
                <div class="col-md-4 col-sm-12 col-xs-12 right"><a href="/category/list/?category_id=3">Аксессуары</a></div>
            </div>
            <div class="newsblock">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="header"><?=Arr::get($homePageData, 'trend_title');?></div>
                            <div class="content"><?=Arr::get($homePageData, 'trend');?></div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="header"><?=Arr::get($homePageData, 'news_title');?></div>
                            <div class="content"><?=Arr::get($homePageData, 'news');?></div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="header">Новинки</div>
                            <div class="latest">
                                <div id="carousel-example-generic-small" class="carousel slide carousel-index" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?foreach (Arr::get($homePageData, 'small_img', []) as $img) {?>
                                            <?$activeSmall = !isset($activeSmall) ? 'active' : '';?>
                                            <div class="item <?=$activeSmall;?>">
                                                <img src="/public/i/home/small/<?=$img;?>" alt="">
                                                <div class="carousel-caption">
                                                </div>
                                            </div>
                                        <?}?>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic-small" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic-small" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=View::factory('footer');?>