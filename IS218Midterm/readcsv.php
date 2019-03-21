<?php
    /**
     * Created by PhpStorm.
     * User: edeline.a
     * Date: 2019-03-11
     * Time: 22:55
     */

use buildtable;
use csvtoarray;
use printcsvarrray;
use readcsv;

class getCSV
{
    public static function ReadCSV(String $samplefile)
    {
        $rfile = fopen($samplefile, "r");
        return $rfile;
    }

}
?>

