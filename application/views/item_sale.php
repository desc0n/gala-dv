<div class="row">
  <div class="col-xs-12">
    <ol class="breadcrumb">
      <li><a href="/">Главная</a></li>
      <li><a href="/category/sale/<?=Arr::get($params, 'category_id', 0);?>"><?=(!empty(Arr::get($params, 'category_id', 0)) ? Arr::get(Arr::get($categoryArr, 0, []), 'name', '') : 'Поиск');?></a></li>
      <li class="active"><?=(!empty(Arr::get($notice_info,'name','')) ? Arr::get($notice_info,'name','') : 'Аренда');?></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-xs-4">
    <div class="col-xs-12 boat-search">
      <div class="row">
        <div class="col-xs-12 center-block">
          <h4>
            <p class="text-center">
              <b>
                Компания "Морские Просторы" осуществляет продажу катеров
                и яхт и принимает заказы на покупку любой водной техники из Японии
              </b>
            </p>
          </h4>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <p>
              Если Вы являетесь владельцем катера, яхты, водного мотоцикла,
              вы можете совершенно бесплатно разместить объявление о продаже
              своей техники в данном разделе. Для этого отправьте письмо на
              наш электронный адрес <b class="text-center boat-search">na.morya@mail.ru</b> с подробной информацией и ценой
              Также Вы можете заказать любую водную технику, новую или б/у,
              лодочные моторы или комплектующе товары для водной техники из Японии.
              Таможенное оформление, быстрая доставка, выгодные условия.
              Поможем с приобретением товаров с электронного рынка Yahoo/Ebay
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-8">
      <h1 class="htle"><?=Arr::get($notice_info,'name','');?></h1>
      <dl class="dl-horizontal">
        <dt>Мощность (л.с.):</dt>
        <dd><?=Arr::get($notice_info,'power','');?></dd>
        <dt>Цена продажи (руб.):</dt>
        <dd><?=Arr::get($notice_info,'price','');?></dd>
      </dl>
      <h3 class="htle">Описание:</h3>
      <p><?=Arr::get($notice_info,'description','');?></p>
      <?if (Auth::instance()->logged_in('admin')){?>
        <div class="admin-link">
          <a href="/admin/control_panel/redact_notice_sale?id=<?=Arr::get($notice_info,'id',0);?>" target="_blank">Редактировать</a>
          <a onclick="javascript: var den = confirm('Подтверждаете удаление?'); if(den){document.location = '/admin/control_panel/delete_notice?id=<?=Arr::get($notice_info,'id',0);?>&category_id=<?=Arr::get($notice_info, 'category', 0);?>';}" href="#">Удалить</a>
        </div>
      <?}?>
    </div>
  </div>
  <div class="item-p">
    <?
    $i = 1;
    $dif = 2;
    foreach(Arr::get($notice_info,'imgs',[]) as $img){
      if(($i % $dif) == 1) {
        ?>
        <div class="row">
        <div class="col-xs-4 img-link">
        </div>
        <div class="col-xs-4 img-link">
          <a href="/public/img/sale/original/<?=$img['src'];?>">
            <img src="/public/img/sale/original/<?=$img['src'];?>"  alt="turntable">
          </a>
        </div>
      <?
      } else if(($i % $dif) == 2) {
        ?>
        <div class="col-xs-4">
          <a href="/public/img/sale/original/<?=$img['src'];?>">
            <img src="/public/img/sale/original/<?=$img['src'];?>"  alt="turntable">
          </a>
        </div>
        </div>
      <?
      } else if(($i % $dif) == 0) {
        ?>
        <div class="row">
          <div class="col-xs-4 img-link">
          </div>
          <div class="col-xs-4 img-link">
            <a href="/public/img/sale/original/<?=$img['src'];?>">
              <img src="/public/img/sale/original/<?=$img['src'];?>"  alt="turntable">
            </a>
          </div>
          <div class="col-xs-4">
          </div>
        </div>
      <?
      }
      $i++;
    }
    ?>
  </div>
