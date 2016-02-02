<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <?=Arr::get(Arr::get(Model::factory('Admin')->getMenu(null, $id), 0, []), 'name');?> <span class="caret"></span>
</a>
<ul class="dropdown-menu">
    <?
    $menu1Arr = Model::factory('Admin')->getMenu($id);
    foreach($menu1Arr as $menu_1_data){
        if (empty(Model::factory('Admin')->getMenu($menu_1_data['id']))) {?>
    <?=($menu_1_data != reset($menu1Arr) ? '<li role="separator" class="divider"></li>' : '');?>
    <li>
        <a href="/index/page/<?=$menu_1_data['page_id'];?>"><?=$menu_1_data['name'];?></a>
    </li>
        <?} else {?>
    <?=($menu_1_data != reset($menu1Arr) ? '<li role="separator" class="divider"></li>' : '');?>
    <li class="dropdown dropdown-submenu">
        <a href="#"><?=$menu_1_data['name'];?></a>
        <ul class="dropdown-menu">
            <?
            $menu2Arr = Model::factory('Admin')->getMenu($menu_1_data['id']);
            foreach($menu2Arr as $menu_2_data){
                ?>
            <?=($menu_2_data != reset($menu2Arr) ? '<li role="separator" class="divider"></li>' : '');?>
            <li>
                <a href="/index/page/<?=$menu_2_data['page_id'];?>"><?=$menu_2_data['name'];?></a>
            </li>
            <?}?>
        </ul>
    </li>
        <?}
    }
    ?>
</ul>