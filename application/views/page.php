<?=View::factory('navbar');?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="header item-title"><h3><?=Arr::get($pageData, 'title');?></h3></div>
            <div><?=Arr::get($pageData, 'content');?></div>
        </div>
    </div>
</div>
<?=View::factory('footer');?>