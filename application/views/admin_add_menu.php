<div class="row add-category">
    <h2 class="sub-header col-sm-12">Меню "Введение"</h2>
    <div class="col-sm-11">
        <div class="panel-menu" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
                            Список пунктов
                        </a>
                    </h4>
                </div>
                <div id="collapse" class="panel-collapse collapse">
                    <div class="panel-body product-menu-panel-body">
                        <?foreach(Model::factory('Admin')->getMenu(1) as $menu_1_data){?>
                            <div class="row-accordion">
                                <div class="panel-menu" id="accordion1<?=$menu_1_data['id'];?>">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion1<?=$menu_1_data['id'];?>" href="#collapse1<?=$menu_1_data['id'];?>">
                                                    <?=$menu_1_data['name'];?>
                                                </a>
                                                <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: var den=confirm('Точно подтверждаете удаление?');if(den)$('#remove_menu_form_1_<?=$menu_1_data['id'];?>').submit();"></span>
                                                <a class="pull-right glyphicon glyphicon-pencil" style="margin-right: 20px;" title="редактировать" href="/admin/control_panel/redact_page/?id=<?=$menu_1_data['page_id'];?>"></a>
                                            </h4>
                                            <form id="remove_menu_form_1_<?=$menu_1_data['id'];?>" class="display-none" method="post">
                                                <input type="hidden" name="type_id" value="1">
                                                <input type="hidden" name="removemenu" value="<?=$menu_1_data['id'];?>">
                                            </form>
                                        </div>
                                        <div id="collapse1<?=$menu_1_data['id'];?>" class="panel-collapse collapse">
                                            <div class="panel-body product-menu-panel-body">
                                                <?foreach (Model::factory('Admin')->getMenu($menu_1_data['id']) as $menu_2_data){?>
                                                    <div class="row-accordion">
                                                        <div class="panel-menu" id="accordion2<?=$menu_2_data['id'];?>">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion2<?=$menu_2_data['id'];?>" href="#collapse2<?=$menu_2_data['id'];?>">
                                                                            <?=$menu_2_data['name'];?>
                                                                        </a>
                                                                        <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: var den=confirm('Точно подтверждаете удаление?');if(den)$('#remove_menu_form_2_<?=$menu_2_data['id'];?>').submit();"></span>
                                                                        <a class="pull-right glyphicon glyphicon-pencil" style="margin-right: 20px;" title="редактировать" href="/admin/control_panel/redact_page/?id=<?=$menu_2_data['page_id'];?>"></a>
                                                                    </h4>
                                                                    <form id="remove_menu_form_2_<?=$menu_2_data['id'];?>" class="display-none" method="post">
                                                                        <input type="hidden" name="type_id" value="2">
                                                                        <input type="hidden" name="removemenu" value="<?=$menu_2_data['id'];?>">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?}?>
                                                <form method="post">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="menu_name">
													<span class="input-group-btn">
														<button class="btn btn-default" type="submit" name="addmenu" value="2"><span class="glyphicon glyphicon-plus"></span></button>
													</span>
                                                    </div>
                                                    <input type="hidden" name="parent_id" value="<?=$menu_1_data['id'];?>">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                        <form method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" name="menu_name">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit" name="addmenu" value="1"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
                            </div>
                            <input type="hidden" name="parent_id" value="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>