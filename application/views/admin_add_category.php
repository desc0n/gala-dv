<div class="row add-category">
    <h2 class="sub-header col-sm-12">Категории товаров:</h2>
    <div class="col-sm-11">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
                            Основные категории
                        </a>
                    </h4>
                </div>
                <div id="collapse" class="panel-collapse collapse">
                    <div class="panel-body product-group-panel-body">
                        <?foreach(Model::factory('Admin')->getCategory() as $group_1_data){?>
                            <div class="row-accordion">
                                <div class="panel-group" id="accordion1<?=$group_1_data['id'];?>">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion1<?=$group_1_data['id'];?>" href="#collapse1<?=$group_1_data['id'];?>">
                                                    <?=$group_1_data['name'];?>
                                                </a>
                                                <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: var den=confirm('Точно подтверждаете удаление?');if(den)$('#remove_group_form_1_<?=$group_1_data['id'];?>').submit();"></span>
                                            </h4>
                                            <form id="remove_group_form_1_<?=$group_1_data['id'];?>" class="display-none" action="/admin/control_panel/add_category" method="post">
                                                <input type="hidden" name="type_id" value="1">
                                                <input type="hidden" name="removegroup" value="<?=$group_1_data['id'];?>">
                                            </form>
                                        </div>
                                        <div id="collapse1<?=$group_1_data['id'];?>" class="panel-collapse collapse">
                                            <div class="panel-body product-group-panel-body">
                                                <?foreach (Model::factory('Admin')->getCategory($group_1_data['id']) as $group_2_data){?>
                                                    <div class="row-accordion">
                                                        <div class="panel-group" id="accordion2<?=$group_2_data['id'];?>">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion2<?=$group_2_data['id'];?>" href="#collapse2<?=$group_2_data['id'];?>">
                                                                            <?=$group_2_data['name'];?>
                                                                        </a>
                                                                        <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: var den=confirm('Точно подтверждаете удаление?');if(den)$('#remove_group_form_2_<?=$group_2_data['id'];?>').submit();"></span>
                                                                    </h4>
                                                                    <form id="remove_group_form_2_<?=$group_2_data['id'];?>" class="display-none" action="/admin/control_panel/add_category" method="post">
                                                                        <input type="hidden" name="type_id" value="2">
                                                                        <input type="hidden" name="removegroup" value="<?=$group_2_data['id'];?>">
                                                                    </form>
                                                                </div>
                                                                <div id="collapse2<?=$group_2_data['id'];?>" class="panel-collapse collapse">
                                                                    <div class="panel-body product-group-panel-body">
                                                                        <?foreach(Model::factory('Admin')->getCategory($group_2_data['id']) as $group_3_data){?>
                                                                            <div class="row-accordion">
                                                                                <div class="panel-group" id="accordion3<?=$group_3_data['id'];?>">
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading">
                                                                                            <h4 class="panel-title">
                                                                                                <a data-toggle="collapse" data-parent="#accordion3<?=$group_3_data['id'];?>" href="#collapse3<?=$group_3_data['id'];?>">
                                                                                                    <?=$group_3_data['name'];?>
                                                                                                </a>
                                                                                                <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: var den=confirm('Точно подтверждаете удаление?');if(den)$('#remove_group_form_3_<?=$group_3_data['id'];?>').submit();"></span>
                                                                                            </h4>
                                                                                            <form id="remove_group_form_3_<?=$group_3_data['id'];?>" class="display-none" action="/admin/control_panel/add_category" method="post">
                                                                                                <input type="hidden" name="type_id" value="3">
                                                                                                <input type="hidden" name="removegroup" value="<?=$group_3_data['id'];?>">
                                                                                            </form>
                                                                                        </div>
                                                                                        <?/*<div id="collapse3<?=$group_3_data['id'];?>" class="panel-collapse collapse">
																				<div class="panel-body product-group-panel-body">
																					<form action="/admin/control_panel/add_category" method="post">
																						<div class="input-group">
																							<input type="text" class="form-control" name="group_name">
																							<span class="input-group-btn">
																								<button class="btn btn-default" type="submit" name="addgroup" value="3"><span class="glyphicon glyphicon-plus"></span></button>
																							</span>
																						</div>
																						<input type="hidden" name="parent_id" value="<?=$group_3_data['id'];?>">
																					</form>
																				</div>
																			</div>*/?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?}?>
                                                                        <form action="/admin/control_panel/add_category" method="post">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control" name="group_name">
																		<span class="input-group-btn">
																			<button class="btn btn-default" type="submit" name="addgroup" value="3"><span class="glyphicon glyphicon-plus"></span></button>
																		</span>
                                                                            </div>
                                                                            <input type="hidden" name="parent_id" value="<?=$group_2_data['id'];?>">
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?}?>
                                                <form action="/admin/control_panel/add_category" method="post">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="group_name">
													<span class="input-group-btn">
														<button class="btn btn-default" type="submit" name="addgroup" value="2"><span class="glyphicon glyphicon-plus"></span></button>
													</span>
                                                    </div>
                                                    <input type="hidden" name="parent_id" value="<?=$group_1_data['id'];?>">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                        <form action="/admin/control_panel/add_category" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" name="group_name">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit" name="addgroup" value="1"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>