<div class="row">
  <div class="col-xs-12">
      <ol class="breadcrumb">
      <li><a href="/">Главная</a></li>
      <li class="active"><?=(!empty(Arr::get($get, 'category_id', 0)) ? Arr::get(Arr::get($categoryArr, 0, []), 'name', '') : 'Поиск');?></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-xs-4 col-md-4 col-sm-4">
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
  <div class="col-xs-8 col-md-8 col-sm-8">
    <table class="table table-bordered category-table">
      <thead>
        <tr>
          <th class="text-center photo-col">Фото</th>
          <th class="text-center">Описание</th>
          <!--<th class="col-xs-1 text-center">
            <form>
              <div class="col-xs-11 col-md-10 col-sm-10"> Мощность </div>
              <div class="col-xs-1 col-md-2 col-sm-2">
                <button class="btn <?=(Arr::get($get, 'sort', 'price') == 'power' ? 'btn-primary' : 'btn-default');?> glyphicon glyphicon-chevron-<?=(Arr::get($get, 'order', 'asc') == 'desc' && Arr::get($get, 'sort', 'price') == 'power' ? 'up' : 'down');?>"></button>
              </div>
              <input type="hidden" name="sort" value="power">
              <input type="hidden" name="order" value="<?=(Arr::get($get, 'order', 'asc') == 'asc' && Arr::get($get, 'sort', 'price') == 'power' ? 'desc' : 'asc');?>">
            </form>
          </th>-->
          <th class="col-xs-1 text-center">
            <form>
              <div class="col-xs-11 col-md-10 col-sm-10"> Цена </div>
              <div class="col-xs-1 col-md-2 col-sm-2">
                <button class="btn <?=(Arr::get($get, 'sort', 'price') == 'price' ? 'btn-primary' : 'btn-default');?> glyphicon glyphicon-chevron-<?=(Arr::get($get, 'order', 'asc') == 'desc' && Arr::get($get, 'sort', 'price') == 'price' ? 'up' : 'down');?>"></button>
              </div>
              <input type="hidden" name="sort" value="price">
              <input type="hidden" name="order" value="<?=(Arr::get($get, 'order', 'asc') == 'asc' && Arr::get($get, 'sort', 'price') == 'price' ? 'desc' : 'asc');?>">
            </form>
          </th>
        </tr>
      </thead>
      <tbody>
      <?foreach($noticeData as $notice){?>
        <tr>
          <th>
            <a class="unstyled-link" href="/item/sale/<?=$notice['id'];?>">
              <img src="<?=(isset($notice['imgs'][0]['src']) ? '/public/img/sale/original/' . $notice['imgs'][0]['src'] : '/public/i/nopic.jpg');?>" style="width: 200px;">
            </a>
          </th>
          <td>
          <h2><a href="/item/sale/<?=$notice['id'];?>"><?=$notice['name'];?></a></h2>
            <?=mb_substr($notice['description'], 0, 90);?> ...
            <?if (Auth::instance()->logged_in('admin')){?>
            <div class="admin-link">
              <a href="/admin/control_panel/redact_notice_sale?id=<?=$notice['id'];?>" target="_blank">Редактировать</a>
              <a onclick="javascript: var den = confirm('Подтверждаете удаление?'); if(den){document.location = '/admin/control_panel/delete_notice_sale?id=<?=$notice['id'];?>&category_id=<?=Arr::get($get, 'category_id', 0);?>';}" href="#">Удалить</a>
            </div>
            <?}?>
          </td>
          <!--<td class="text-center"><?=$notice['power'];?></td>-->
          <td class="text-center"><?=$notice['price'];?> руб.</td>
        </tr>
       <?}?>
      </tbody>
    </table>
    <div>
      <?$pageCount = Arr::get(Arr::get($noticeData, 0, []), 'page_count', 1);?>
      <?if (!empty($pageCount)) {?>
      <ul class="pagination">
        <li <?=(Arr::get($get, 'page', 1) == 1 ? 'class="disabled"' : '');?>><a href="/category/sale/<?=Arr::get($get, 'category_id', 0);?>?sort=<?=Arr::get($get, 'sort', 'price');?>&order=<?=Arr::get($get, 'order', 'asc');?>&limit=<?=Arr::get($get, 'limit', 25);?>&page=<?=(Arr::get($get, 'page', 1) - 1);?>">&laquo;</a></li>
        <?for($i=1;$i<=$pageCount;$i++){?>
        <li <?=(Arr::get($get, 'page', 1) == $i ? 'class="active"' : '');?>><a href="/category/sale/<?=Arr::get($get, 'category_id', 0);?>?sort=<?=Arr::get($get, 'sort', 'price');?>&order=<?=Arr::get($get, 'order', 'asc');?>&limit=<?=Arr::get($get, 'limit', 25);?>&page=<?=$i;?>"><?=$i;?></a></li>
        <?}?>
        <li <?=(Arr::get($get, 'page', 1) == $pageCount ? 'class="disabled"' : '');?>><a href="/category/sale/<?=Arr::get($get, 'category_id', 0);?>?sort=<?=Arr::get($get, 'sort', 'price');?>&order=<?=Arr::get($get, 'order', 'asc');?>&limit=<?=Arr::get($get, 'limit', 25);?>&page=<?=(Arr::get($get, 'page', 1) + 1);?>">&raquo;</a></li>
      </ul>
      <?}?>
    </div>
  </div>
</div>
