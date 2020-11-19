<?php
/** @var string $datalayer_name */

$tab = '    ';
echo '<?php' . PHP_EOL;
echo 'namespace ' . \SwitchCat\Initializer\Initializer::getAppName() . '\\' . $datalayer_name . ';' . PHP_EOL;
echo PHP_EOL;
echo 'class ' . $datalayer_name . ' extends \\SwitchCat\\Data\\Data' . PHP_EOL;
echo '{' . PHP_EOL;
echo $tab . 'public function __construct()' . PHP_EOL;
echo $tab . '{' . PHP_EOL;
echo $tab . $tab . 'parent::__construct();' . PHP_EOL;
echo $tab . '}' . PHP_EOL;
echo '}' . PHP_EOL;
