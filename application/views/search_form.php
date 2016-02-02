<form class="search-form" method="post" action="/category/list/<?=(!empty(Arr::get($get, 'category_id', 0)) ? Arr::get($get, 'category_id', 0) : '');?>">
  <div class="row">
    <div class="col-xs-12 center-block">
      <h5><p class="text-center"><b>ОТДОХНИТЕ НА УРА - ПОДБЕРИТЕ КАТЕРА</b></p></h5>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <p class="text-center">ВМЕСТИМОСТЬ (ЧЕЛ.)</p>
        <div class="pull-left title">от</div> <input type="text" class="short-input form-control" name="capacity" placeholder="" value="<?=Arr::get($get, 'capacity', Arr::get($post, 'capacity',''));?>">
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <p class="text-center">СТОИМОСТЬ (РУБ./ДЕНЬ)</p>
        <div class="pull-left title">до</div> <input type="text" class="short-input form-control" name="price" placeholder="" value="<?=Arr::get($get, 'price', Arr::get($post, 'price',''));?>">
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <p class="text-center">ПО НАЗВАНИЮ</p>
        <input type="text" class="form-control" name="name" placeholder="" value="<?=Arr::get($get, 'name', Arr::get($post, 'name',''));?>">
      </div>
    </div>
    <div class="col-xs-12">
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="category_id" value="<?=Arr::get($get, 'category_id', Arr::get($post, 'category_id',''));?>">НАЙТИ</button>
    </div>
  </div>
</form>
