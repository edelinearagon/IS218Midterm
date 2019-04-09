<?php
/**
 * Created by PhpStorm.
 * User: edeline.a
 * Date: 2019-03-21
 * Time: 04:58
 */

function printCSVarray($wordstab)
{
    $arraycsv = print($wordstab);
    return $arraycsv;
}

include 'csvtoarray.php';
echo printCSVarray();
