<?php
/**
 * Created by PhpStorm.
 * User: edeline.a
 * Date: 2019-04-09
 * Time: 06:08
 */

class myautoloader
{
    function my_autoloader($class)
    {
        include 'src/'. $class.'php';
    }

    public function project()
    {
        spl_autoload_register('my_autoloader');
        $name = "sample.csv";
        csv::openCSV($name);
        html::buildtable(csv::printcsvarray(csv::csvtoarray($name)));
        fclose(csv::readcsv($name));
    }
}