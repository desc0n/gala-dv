<div class="row">
    <h2 class="sub-header col-sm-12">Редактирование вступительной страницы</h2>
    <div class="col-sm-11 redact-form">
        <table class="table">
            <tr>
                <th class="text-left col-md-3">Фото на слайдер</th>
                <td class="imgs-form">
                    <?foreach($mainPageData as $id => $img){?>
                        <div class="img-link pull-left" data-toggle="tooltip" data-placement="left" data-html="true" title="<img class='tooltip-img' src='/public/i/main/big/<?=$img;?>' style='width:200px;'>">
                            <img src="/public/i/slider/<?=$img;?>">
                            <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="$('#remove_img > #removeimg').val(<?=$id;?>);$('#remove_img').submit();"></span>
                        </div>
                    <?}?>
                    <button class="btn btn-primary" onclick="$('#loadimg_modal').modal('toggle');"><span class="pull-right glyphicon glyphicon-plus"></span></button>
                </td>
            </tr>
        </table>
    </div>
</div>
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