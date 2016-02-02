<ul class="typeahead dropdown-menu" style="top: 0px; left: 0px; display: <?=(!empty($words) ? 'block' : 'none');?>;">
  <?foreach ($words as $word){?>
  <li><a href="/admin/control_panel/redact_word?wordId=<?=$word['id'];?>"><?=$word['word'];?></a></li>
  <?}?>
</ul>