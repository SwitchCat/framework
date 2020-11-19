<?php
declare(strict_types = 1);
require 'vendor/autoload.php';

try
{
    \SwitchCat\Initializer\Initializer::start();

    // Select needed controller
    $Control = new SwitchCat\Control\IndexControl();
    $Control->run();
}
catch (Symfony\Component\Yaml\Exception\ParseException $e)
{
    printf('Unable to parse the YAML string: %s', $e->getMessage());
    exit();
}
catch (\SwitchCat\Connections\ConnectionsException $e)
{
    $exc_data = $e->getInfo();
}
catch (\SwitchCat\Data\DataException $e)
{
    $exc_data = $e->getInfo();
}
catch (\SwitchCat\View\ViewException $e)
{
    $exc_data = $e->getInfo();
}
catch (\SwitchCat\Control\ControlException $e)
{
    $exc_data = $e->getInfo();
}
catch(\Exception $e)
{
    echo $e->getMessage();
}
finally
{
    if(isset($exc_data))
    {
        include $exc_data['template'];
    }
}