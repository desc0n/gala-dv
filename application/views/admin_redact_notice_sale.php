<div class="row">
	<h2 class="sub-header col-sm-12">Карточка объявления:</h2>
	<div class="col-sm-11 redact-form">
		<table class="table">
			<form id="redactnotice_sale_form" role="form" action="/admin/control_panel/redact_notice_sale?id=<?=Arr::get($_GET, 'id', 0);?>" method="post">
			<tr>
				<th class="text-left">Категория:</th>
				<td>
					<select class="form-control" name="category">
						<option value="0">не выбрано</option>
						<?
						foreach ($categoryArr as $categoryData) {
							$selected = Arr::get($notice_sale_info,'category',0) == $categoryData['id'] ? 'selected' : '';
							?>
							<option value="<?=$categoryData['id'];?>" <?=$selected;?>><?=$categoryData['name'];?></option>
						<?}?>
					</select>
				</td>
			</tr>
			<tr>
				<th class="text-left">Наименование</th>
				<td><input type="text" name="name" class="form-control" value="<?=Arr::get($notice_sale_info,'name','');?>"></td>
			</tr>
			<tr>
				<th class="text-left">Мощность</th>
				<td><input type="text" name="power" class="form-control" value="<?=Arr::get($notice_sale_info,'power','');?>"></td>
			</tr>
			<tr>
				<th class="text-left">Цена</th>
				<td><input type="text" name="price" class="form-control" value="<?=Arr::get($notice_sale_info,'price',0);?>"></td>
			</tr>
			<tr>
				<th class="text-left">Описание</th>
				<td><textarea name="description" class="form-control" rows="5"><?=Arr::get($notice_sale_info,'description','');?></textarea></td>
			</tr>
			<input type="hidden" name="redactnotice_sale" value="<?=$notice_sale_id;?>">
			</form>
			<tr>
				<td colspan="2"><button class="btn btn-success" onclick="$('#redactnotice_sale_form').submit();">Сохранить</button></td>
			</tr>
			<tr>
				<th class="text-left">Фото</th>
				<td class="imgs-form">
					<?foreach(Arr::get($notice_sale_info,'imgs',[]) as $img){?>
					<div class="img-link" data-toggle="tooltip" data-placement="left" data-html="true" title="<img class='tooltip-img' src='/public/img/original/<?=$img['src'];?>'>">
						<img src="/public/img/sale/thumb/<?=$img['src'];?>" >
						<span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="$('#remove_img > #removeimg').val(<?=$img['id'];?>);$('#remove_img').submit();"></span>
					</div>
					<?}?>
					<button class="btn btn-success" onclick="$('#loadimg_modal').modal('toggle');">Добавить фото <span class="glyphicon glyphicon-plus"></span></button>
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
        <form role="form" action="/admin/control_panel/redact_notice_sale?id=<?=$notice_sale_id;?>" method="post" enctype='multipart/form-data'>
		  <div class="form-group">
			<label for="exampleInputFile">Выбор файла</label>
			  <input type="file" name="imgname[]" id="exampleInputFile" multiple>
		  </div>
		  <input type="hidden" name="loadnotice_saleimg" value="<?=$notice_sale_id;?>">
		  <button type="submit" class="btn btn-default">Загрузить</button>
		</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<form id="remove_img" action="/admin/control_panel/redact_notice_sale?id=<?=$notice_sale_id;?>" method="post">
	<input type="hidden" id="removeimg" name="removeimg" value="0">
</form>