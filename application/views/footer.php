<?$homePageData = Model::factory('Admin')->getHomePageData();?>
<footer class="footer">
    <div class="container">
        <div class="brands">
            <p>Gala является официальным дистрибьютором в России компаний-производителей: </p>
            <img src="/public/i/brands.jpg">
        </div>
        <div class="contacts">
            <div class="contacts-title">
                <center><a href="/index/page/18">Разработка дизайн-проекта вашего интерьера</a></center>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="footer-ico footer-tel"></div>
                    <div class="contacts-data">
                        <p>звоните сейчас</p>
                        <span><?=Arr::get($homePageData, 'phone');?></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="footer-ico footer-email"></div>
                    <div class="contacts-data">
                        <p>мы ждем ваших писем</p>
                        <span><?=Arr::get($homePageData, 'email');?></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="footer-ico footer-loc"></div>
                    <div class="contacts-data">
                        <p>наш адрес</p>
                        <span><?=Arr::get($homePageData, 'address');?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="social">
                <a href="<?=Arr::get($homePageData, 'vk', '#');?>"><div class="soc-ico soc-v"></div></a>
                <a href="<?=Arr::get($homePageData, 'facebook', '#');?>"><div class="soc-ico soc-f"></div></a>
                <a href="<?=Arr::get($homePageData, 'twitter', '#');?>"><div class="soc-ico soc-t"></div></a>
                <a href="<?=Arr::get($homePageData, 'youtube', '#');?>"><div class="soc-ico soc-y"></div></a>
            </div>
        </div>
    </div>
</footer>