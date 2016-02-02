<?=View::factory('navbar');?>

<!-- Begin page content -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home">Продукция</a></li>
        <li class="active">
            <?=Arr::get($notice_info, 'category_name');?>
        </li>
    </ol>
    <div class="row afterf">
        <div class="col-md-6 col-sm-10 col-xs-12">
            <?
            $imgs = Arr::get($notice_info,'imgs',[]);
            $firstImg = reset($imgs);
            if (!empty($firstImg)) {
                $image = Image::factory(sprintf('public/img/original/%s', $firstImg['src']));
                if ($image->width < $image->height) {
                    $class = 'img-height';
                } else {
                    $class = 'img-width';
                }
                ?>
                <img src="/public/img/original/<?=$firstImg['src'];?>" class="<?=$class;?> item-lage" id="big-img">
            <?}?>
            <?foreach($imgs as $img){
                $image = Image::factory(sprintf('public/img/original/%s', $img['src']));
                if ($image->width < $image->height) {
                    $class = 'img-height';
                } else {
                    $class = 'img-width';
                }
                ?>
            <div class="item-small">
                <img class="<?=$class;?>" src="/public/img/original/<?=$img['src'];?>" onclick="$('#big-img').attr('src', $(this).attr('src'));">
            </div>
            <?}?>
        </div>
        <div class="col-md-6 col-sm-10 col-xs-12">
            <div class="col-md-12  col-sm-10 col-xs-12">
                <div class="item-title"><?=Arr::get($notice_info, 'name');?></div>
                <?=Arr::get($notice_info, 'description');?>
                <div class="spec">
                    <?foreach($noticeParams as $paramsData){?>
                    <div><?=$paramsData['name'];?><span class="pull-right"><?=$paramsData['value'];?></span></div>
                    <?}?>
                </div>
                <!--<div class="recomend">
                    <div class="recomend-title">Принадлежности для топок</div>
                    <p><a href="">Eaque esse perspiciatis dolores ipsum</a></p>
                    <p><a href="">Impedit consectetur ipsam asperiores</a></p>
                    <p><a href="">Lorem ipsum dolor sit amet</a></p>
                    <p><a href="">Dolores officia iste autem culpa</a></p>
                </div>-->
                <div class="row">
                    <div class="item-price pull-right"><?=Arr::get($notice_info, 'price');?> руб.</div>
                </div>
                <div class="row">
                    <button class="btn btn-default pull-right tocart" type="submit">
                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                  </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="extras">
                <div class="extras-title">Загрузки</div>
                <ul>
                    <?foreach(Arr::get($notice_info,'files',[]) as $files){?>
                    <li><a href="/public/files/<?=$files['src'];?>" target="_blank">техническая документация</a></li>
                    <?}?>
                </ul>

            </div>
        </div>
    </div>
</div>
<?=View::factory('footer');?>