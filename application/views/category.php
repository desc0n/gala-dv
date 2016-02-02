<?=View::factory('navbar');?>

<!-- Begin page content -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home">Продукция</a></li>
        <li class="active"><?=(Arr::get($_GET, 'name') != null ? 'Поиск' : Arr::get(Arr::get($categoryArr, 0, []), 'name'));?></li>
    </ol>
    <?if (!empty($subCategoryArr)) {?>
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="filters-list filters">
                    <?foreach ($subCategoryArr as $categoryData) {?>
                    <?$active = $categoryData['id'] == Arr::get($get, 'pid') ? 'class="active"' : '';?>
                    <p class="cat-filter"><a href="/category/list/?category_id=<?=$categoryData['id'];?>" <?=$active;?>><?=$categoryData['name'];?></a></p>
                    <?}?>
                    <p class="cat-filter-helper"></p>
                </ul>
            </div>
        </div>
    </div>
    <?}?>
    <div class="row afterf">
        <?foreach($notices as $notice) {
            $imgs = Arr::get(Arr::get($notice,'imgs',[]), 0, []);?>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="list-item">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="/item/show/<?=$notice['id'];?>">
                        <img class="category-img" src="/public/img/thumb/<?=Arr::get($imgs, 'src', 'nopic.jpg');?>">
                    </a>
                </div>
                <div class="col-md-8  col-sm-8 col-xs-8">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="/item/show/<?=$notice['id'];?>" class="item-link">
                                <div class="item-title"><?=$notice['name'];?>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="features">
                                <div class="type"></div>
                                <div class="item-description"><?=$notice['short_description'];?></div>
                                <div class="catitem-price pull-right"><?=$notice['price'];?> руб.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="detal pull-right">
                                <a href="/item/show/<?=$notice['id'];?>">детально</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?}?>
    </div>
</div>
<?=View::factory('footer');?>