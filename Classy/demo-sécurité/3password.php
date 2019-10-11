<?php

$pwd = 's3cr3t';

$hash = password_hash($pwd, PASSWORD_DEFAULT);

echo $hash;
echo "\n";

echo password_verify($pwd, $hash);
echo "\n";

$contenu_article = 'du contenu';
$tag = md5($contenu_article);

$nouveau_contenu_article = 'conteu=nu modifié';

// le contenu a-t-il changé ?
echo $tag . "\n";
echo $nouveau_tag = md5($nouveau_contenu_article) . "\n";
echo $tag == $nouveau_tag . "\n";