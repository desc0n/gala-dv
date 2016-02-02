<?if (!empty($words)){?>
<ul>
  <?
  $encoding = 'UTF-8';
  foreach ($words as $word){
      //$word['word'] = mb_strtolower($word['word'], $encoding);
      //$word['word'] = preg_replace("/". mb_strtolower(Arr::get($post, 'searchText', 'empty'), $encoding). "/i", '<b>' . mb_strtolower(Arr::get($post, 'searchText', 'empty'), $encoding) . '</b>', $word['word']);
      //$first = mb_substr($word['word'],0,mb_strpos($word['word'], mb_strtolower(Arr::get($post, 'searchText', ''), $encoding)), $encoding);print_r($first);
      //$last = mb_substr($word['word'],1, mb_strlen($word['word'], $encoding), $encoding);//все кроме первой буквы
      //$first = mb_strtoupper($first, $encoding);
      //$last = mb_strtolower($last, $encoding);mb_str
      //$word['word'] = $first.$last;
    ?>
  <li><a href="/word/description/<?=$word['id'];?>"><?=$word['word'];?></a></li>
  <?}?>
</ul>
<?}?>