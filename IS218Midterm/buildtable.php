<?php
/**
 * Created by PhpStorm.
 * User: edeline.a
 * Date: 2019-03-21
 * Time: 04:58
 */
public static function buildTable(Array $wordstab)
{
    $row = 1;
    if (($wordstab) !== FALSE)
    {

        echo '<table border="1">';
        //this one creates a table first, and keeps creating rows as there is data
        while ($wordstab !== FALSE) {
            $num = count($wordstab);
            if ($row == 1) {
                echo '<thead><tr>';
            }else{
                echo '<tr>';
            }
            //puts data in the cells
            for ($c=0; $c < $num; $c++) {
                if(empty($wordstab[$c])) {
                    $value = "&nbsp;";
                }else{
                    $value = $wordstab[$c];
                }
                if ($row == 1) {
                    echo '<th>'.$value.'</th>';
                }else{
                    echo '<td>'.$value.'</td>';
                }
            }

            if ($row == 1) {
                echo '</tr></thead><tbody>';
            }else{
                echo '</tr>';
            }
            $row++;
        }

        echo '</tbody></table>';
    }

}
