<div class="row">
    <h2 class="sub-header col-sm-12">Редактирование главной страницы:</h2>
    <div class="col-sm-11 redact-form">
        <table class="table">
            <form id="redacthomepage_form" role="form" method="post">
                <?foreach ($homePage as $page) {?>
                <tr>
                    <th class="text-left col-md-3"><?=$page['title'];?></th>
                    <?if (in_array($page['name'], ['trend', 'news'])) {?>
                    <?$ckeditorClass = $page['name'] == 'news' ? 'ckeditor' : '';?>
                    <td><textarea name="<?=$page['name'];?>" rows="7" class="form-control <?=$ckeditorClass;?>"><?=$page['value'];?></textarea></td>
                    <?} else {?>
                    <td><input type="text" name="<?=$page['name'];?>" class="form-control" value="<?=$page['value'];?>"></td>
                    <?}?>
                </tr>
                <?}?>
                <input type="hidden" name="redacthomepage" value="1">
            </form>
            <tr>
                <th class="text-left col-md-3">Фото на большой слайдер</th>
                <td class="imgs-form">
                    <?foreach(Arr::get($homePageData,'big_img',[]) as $id => $img){?>
                        <div class="img-link pull-left" data-toggle="tooltip" data-placement="left" data-html="true" title="<img class='tooltip-img' src='/public/i/home/big/<?=$img;?>' style='width:200px;'>">
                            <img src="/public/i/home/big/<?=$img;?>">
                            <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="$('#remove_img > #removeimg').val(<?=$id;?>);$('#remove_img').submit();"></span>
                        </div>
                    <?}?>
                    <button class="btn btn-primary" onclick="$('#loadhomepagetype').val('big');$('#loadimg_modal').modal('toggle');"><span class="pull-right glyphicon glyphicon-plus"></span></button>
                </td>
            </tr>
            <tr>
                <th class="text-left col-md-3">Фото на маленький слайдер</th>
                <td class="imgs-form">
                    <?foreach(Arr::get($homePageData,'small_img',[]) as $id => $img){?>
                        <div class="img-link pull-left" data-toggle="tooltip" data-placement="left" data-html="true" title="<img class='tooltip-img' src='/public/i/home/small/<?=$img;?>' style='width:200px;'>">
                            <img src="/public/i/home/small/<?=$img;?>">
                            <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="$('#remove_img > #removeimg').val(<?=$id;?>);$('#remove_img').submit();"></span>
                        </div>
                    <?}?>
                    <button class="btn btn-primary" onclick="$('#loadhomepagetype').val('small');$('#loadimg_modal').modal('toggle');"><span class="pull-right glyphicon glyphicon-plus"></span></button>
                </td>
            </tr>
        </table>
        <button class="btn btn-success" onclick="$('#redacthomepage_form').submit();">Сохранить</button>
    </div>
</div>
<p></p>
<form method="post">
    <div class="row">
        <table class="table table-bordered" style="width: 40%;">
            <tr><th>Изменить заголовки</th></tr>
            <?foreach ($homePage as $page) {?>
            <tr>
                <?if (in_array($page['name'], ['trend', 'news'])) {?>
                <td><input type="text" class="form-control" name="<?=$page['name'];?>" value="<?=$page['title'];?>"></td>
                <?}?>
            </tr>
            <?}?>
            <tr>
                <td>
                    <button class="btn btn-primary" name="changetitle">Сохранить</button>
                </td>
            </tr>
        </table>
    </div>
</form>
<div class="modal fade" id="loadimg_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Загрузка изображения</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label for="exampleInputFile">Выбор файла</label>
                        <input type="file" name="imgname[]" id="exampleInputFile" multiple>
                    </div>
                    <input type="hidden" id="loadhomepagetype" name="loadhomepagetype" value="big">
                    <button type="submit" class="btn btn-default">Загрузить</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<form id="remove_img" method="post">
    <input type="hidden" id="removeimg" name="removeimg" value="0">
</form>