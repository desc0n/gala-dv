<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/home">Главная</a></li>
                <li class="dropdown">
                    <?=View::factory('menu')->set('id', 1);?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Продукция <span class="caret"></span></a>

                    <ul class="dropdown-menu dropdown-trimenu">
                        <?foreach(Model::factory('Admin')->getNavbarCategory() as $group_1_data){?>
                        <div class="trimenu" >
                            <li><div class="trimenu-title"><?=$group_1_data['name'];?></div></li>
                            <?foreach (Model::factory('Admin')->getNavbarCategory($group_1_data['id']) as $group_2_data){?>
                            <li><a href="/category/list/?category_id=<?=$group_2_data['id'];?>"><?=$group_2_data['name'];?></a></li>
                            <?}?>
                        </div>
                        <?}?>
                    </ul>
                </li>
                <li><a href="/catalogs">Скачать каталоги</a></li>
                <li><a href="/index/page/5">Доставка и оплата</a></li>
                <li><a href="/index/page/6">Контакты</a></li>
                <form class="navbar-form navbar-right" action="/category/list">
                    <div class="input-group nav-search">
                        <input type="text" class="form-control" name="name" placeholder="искать" value="<?=Arr::get($_GET, 'name');?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div>
                </form>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>