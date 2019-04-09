<?php
    /**
     * Created by PhpStorm.
     * User: edeline.a
     * Date: 2019-03-11
     * Time: 22:55
     */

class getCSV
{
    public static function ReadCSV($samplefile)
    {
        $rfile = fopen($samplefile, "r");
        return $rfile;
    }

}
?>
?>

