<div class="row">
	<p>
	<form>
		<div class="text-muted col-sm-12">Страница:</div>
		<div class="col-sm-6">
			<select class="form-control" name="id">
				<option value="0">не выбрано</option>
                <?foreach($pages as $page) {?>
				<option value="<?=$page['id'];?>" <?=(Arr::get($get, 'id', 0) == $page['id'] ? 'selected' : '');?>><?=$page['title'];?></option>
                <?}?>
			</select>
		</div>
		<button class="btn btn-default" type="submit">Выбрать</button>
	</form>
	</p>
	<form class="form-horizontal row" style="display:inline-block;margin-left:40px;" method="post" action="/admin/control_panel/redact_page">
		<p>
			<div class="row">
				<h3>Редактируем страницу</h3>
			</div>
		</p>
		<p>
			<div class="form-group span12">
				<label for="redact_title_text">Заголовок страницы</label>
				<input type="text" name="title" class="form-control" value="<?=Arr::get($pageData, 'title', '');?>">
			</div>
		</p>
        <p>
			<div class="form-group span12">
				<label for="redact_content_text">Текст страницы</label>
				<textarea id="redact_content_text" name="text" class="ckeditor"><?=Arr::get($pageData, 'content', '');?></textarea>
			</div>
		</p>
		<p>
			<div class="row">
				<button type="submit" class="btn btn-primary" name="redactpage" value="<?=Arr::get($get, 'id', 0);?>">Сохранить</button>
			</div>
		</p>
	</form>
</div>

