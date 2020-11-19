<!doctype html>
<html lang="<?php echo \SwitchCat\Initializer\Initializer::$ini['app']['language']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=$this->e($title)?></title>

    <?php
    // CSS
    if(!file_exists('templates/' . \SwitchCat\Initializer\Initializer::getTemplates()['active'] . '/assets/css/minified.css') || (bool)\SwitchCat\Initializer\Initializer::$ini['app']['cache'] === FALSE)
    {
        $Minifier = new \MatthiasMullie\Minify\CSS();
        foreach ($assets['css'] as $css)
        {
            $Minifier->add($css);
        }
        $Minifier->minify('templates/' . \SwitchCat\Initializer\Initializer::getTemplates()['active'] . '/assets/css/minified.css');
    }
    ?>
    <link href="<?php echo 'templates/' . \SwitchCat\Initializer\Initializer::getTemplates()['active'] . '/assets/css/minified.css'; ?>" rel="stylesheet">

    <?php
    // JAVASCRIPT
    if(!file_exists('templates/' . \SwitchCat\Initializer\Initializer::getTemplates()['active'] . '/assets/js/minified.js') || (bool)\SwitchCat\Initializer\Initializer::$ini['app']['cache'] === FALSE)
    {
        $Minifier = new \MatthiasMullie\Minify\JS();
        foreach ($assets['js'] as $js)
        {
            $Minifier->add($js);
        }
        $Minifier->minify('templates/' . \SwitchCat\Initializer\Initializer::getTemplates()['active'] . '/assets/js/minified.js');
    }
    ?>
    <script type="text/javascript" src="<?php echo 'templates/' . \SwitchCat\Initializer\Initializer::getTemplates()['active'] . '/assets/js/minified.js'; ?>"></script>

</head>