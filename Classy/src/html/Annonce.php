<?php


namespace App\html;


class Annonce
{
    public function build(\App\Annonce $annonce) {
        return <<<EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
  <h1>$annonce->title</h1><div>$annonce->content</div>
</body>
</html>
EOT;
    }
}