#!/usr/bin/env php
<?php
declare(strict_types=1);

require 'vendor/autoload.php';

try
{
    // Setup initializer
    \SwitchCat\Initializer\Initializer::start();

    // CLI OPTIONS
    $shortopts  = "";
    $shortopts .= "f:";
    $shortopts .= "r:";
    $options = getopt($shortopts);

    if(!isset($options['f']))
    {
        $Control = new \SwitchCat\Control\SwitchCatNoParamsControl();
    }

    // SELECT CONTROLLER
    switch ($options['f'])
    {
        case 'model':
            $Control = new \SwitchCat\Control\SwitchCatCreateModelControl();
            break;
        case 'init':
            if(file_exists('ini/app.yaml'))
            {
                \SwitchCat\Cli\Cli::Climate()->br();
                \SwitchCat\Cli\Cli::Climate()->red('Application already initialised. Use [ -f info ] parameter to get initialisation update methods.');
                \SwitchCat\Cli\Cli::Climate()->br();
                die();
            }
            $Control = new \SwitchCat\Control\SwitchCatInitAppControl();
            break;
        case 'info':
            $Control = new \SwitchCat\Control\SwitchCatInfoControl();
            break;
        default:
            break;
    }

    // Run controller
    $Control->run($options);
}
catch (\SwitchCat\Data\DataException $e)
{
    $exc_data = $e->getInfo();
}
catch (\SwitchCat\Control\ControlException $e)
{
    $exc_data = $e->getInfo();
}
catch (\Exception $e)
{
    \SwitchCat\Cli\Cli::Climate()->to('error')->red($e->getMessage());
}
finally
{
    if(isset($exc_data))
    {
        include $exc_data['template'];
    }
}