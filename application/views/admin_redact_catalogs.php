<div class="row">
    <h2 class="sub-header col-sm-12">Страница каталогов</h2>
    <div class="col-sm-11 redact-form">
        <table class="table">
            <tr>
                <th class="text-left col-md-3">Список документов</th>
                <td class="imgs-form">
                    <?foreach($catalogsData as $id => $name){?>
                        <div class="col-md-3">
                            <a href="/public/catalogs/<?=$name;?>" target="_blank"><?=$name;?></a>
                            <span class="glyphicon glyphicon-remove" title="удалить" onclick="$('#remove_file > #removefile').val(<?=$id;?>);$('#remove_file').submit();"></span>
                        </div>
                    <?}?>
                    <button class="btn btn-primary pull-left" onclick="$('#loadfile_modal').modal('toggle');"><span class="pull-right glyphicon glyphicon-plus"></span></button>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="modal fade" id="loadfile_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Загрузка документа</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label for="exampleInputFile">Выбор файла</label>
                        <input type="file" name="filename[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-default">Загрузить</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<form id="remove_file" method="post">
    <input type="hidden" id="removefile" name="removefile" value="0">
</form>