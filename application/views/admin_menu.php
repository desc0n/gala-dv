<?if (Auth::instance()->logged_in("admin")){?>
<a class="btn btn-success admin-main-page-link" href="/admin/users"><span class="glyphicon glyphicon-user"></span> Работа с персоналом</a>
<a class="btn btn-info admin-main-page-link" href="/admin/product"><span class="glyphicon glyphicon-file"></span> Редактирование данных</a>
<?}?>
<a class="btn btn-danger admin-main-page-link" href="/admin"><span class="glyphicon glyphicon-shopping-cart"></span> Операции с товаром</a>
<a class="btn btn-primary admin-main-page-link" href="/admin/cash"><span class="glyphicon glyphicon-usd"></span> Операции с кассой</a>
<a class="btn btn-warning admin-main-page-link" href="/admin/contractor"><span class="glyphicon glyphicon-briefcase"></span> Работа с контрагентами</a>
