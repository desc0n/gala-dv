<div class="row">
    <h2 class="sub-header col-sm-12">Список товаров по группам:</h2>
    <div class="col-sm-11">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
                            Основные группы
                        </a>
                    </h4>
                </div>
                <div id="collapse" class="panel-collapse collapse in">
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
                                            </h4>
                                        </div>
                                        <div id="collapse1<?=$group_1_data['id'];?>" class="panel-collapse collapse <?=(Arr::get($get,'group_1','') == $group_1_data['id'] ? 'in' : '');?>">
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
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse2<?=$group_2_data['id'];?>" class="panel-collapse collapse <?=(Arr::get($get,'group_2','') == $group_2_data['id'] ? 'in' : '');?>">
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
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="collapse3<?=$group_3_data['id'];?>" class="panel-collapse collapse <?=(Arr::get($get,'group_3','') == $group_3_data['id'] ? 'in' : '');?>">
                                                                                            <div class="panel-body product-group-panel-body">
                                                                                                <?foreach(Model::factory('Notice')->getNotice(['category_id' => $group_3_data['id']]) as $product_3_data){?>
                                                                                                    <div class="alert alert-info">
                                                                                                        <strong><?=$product_3_data['id'];?></strong> <a href="/admin/control_panel/redact_notice?id=<?=$product_3_data['id'];?>"><?=(empty($product_3_data['name']) ? '...' : $product_3_data['name']);?></a>
                                                                                                        <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: $('#removeproduct').val(<?=$product_3_data['id'];?>);$('#remove_product').submit();"></span>
                                                                                                    </div>
                                                                                                <?}?>
                                                                                                <form method="post">
                                                                                                    <div class="input-group">
                                                                                                        <input type="text" class="form-control" name="name">
																							<span class="input-group-btn">
																								<button class="btn btn-default" type="submit" name="addnotice" value="3"><span class="glyphicon glyphicon-plus"></span></button>
																							</span>
                                                                                                    </div>
                                                                                                    <input type="hidden" name="category" value="<?=$group_3_data['id'];?>">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?}?>
                                                                        <?foreach(Model::factory('Notice')->getNotice(['category_id' => $group_2_data['id']]) as $product_2_data){?>
                                                                            <div class="alert alert-info">
                                                                                <strong><?=$product_2_data['id'];?></strong>  <a href="/admin/control_panel/redact_notice?id=<?=$product_2_data['id'];?>"><?=(empty($product_2_data['name']) ? '...' : $product_2_data['name']);?></a>
                                                                                <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: $('#removeproduct').val(<?=$product_2_data['id'];?>);$('#remove_product').submit();"></span>
                                                                            </div>
                                                                        <?}?>
                                                                        <form method="post">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control" name="name">
																		<span class="input-group-btn">
																			<button class="btn btn-default" type="submit" name="addnotice" value="3"><span class="glyphicon glyphicon-plus"></span></button>
																		</span>
                                                                            </div>
                                                                            <input type="hidden" name="category" value="<?=$group_2_data['id'];?>">
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?}?>
                                                <?/*foreach(Model::factory('Notice')->getNotice(['category_id' => $group_1_data['id']]) as $product_1_data){?>
                                                    <div class="alert alert-info">
                                                        <strong><?=$product_1_data['id'];?></strong> <a href="/admin/control_panel/redact_notice?id=<?=$product_1_data['id'];?>"><?=$product_1_data['name'];?></a>
                                                        <span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="javascript: $('#removeproduct').val(<?=$product_1_data['id'];?>);$('#remove_product').submit();"></span>
                                                    </div>
                                                <?}*/?>
                                                <!--<form method="post">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="name">
													<span class="input-group-btn">
														<button class="btn btn-default" type="submit" name="addnotice" value="2"><span class="glyphicon glyphicon-plus"></span></button>
													</span>
                                                    </div>
                                                    <input type="hidden" name="category" value="<?=$group_1_data['id'];?>">
                                                </form>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="remove_product" method="post">
    <input type="hidden" id="removeproduct" name="removeproduct">
</form>