<?php
/**
 * Created by PhpStorm.
 * User: edeline.a
 * Date: 2019-03-21
 * Time: 04:57
 */

use buildtable;
use printcsvarrray;
use readcsv;

class csvtoarray 
{
    public static function CSVtoArray(String $rfile)
    {
        while (!feof($rfile)) {
            $wordsTab[] = fgetcsv($rfile, 1000);
        }
        fclose($rfile);
        return $wordsTab;
    }
}    

?>
