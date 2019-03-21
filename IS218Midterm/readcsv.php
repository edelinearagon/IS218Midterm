<?php
class
    /**
     * Created by PhpStorm.
     * User: edeline.a
     * Date: 2019-03-11
     * Time: 22:55
     */

class getCSV
{
    public static function ReadCSV(String $samplefile)
    {
        $rfile = fopen($samplefile, "r");
        return $rfile;
    }


    public static function CSVtoArray(String $rfile)
    {
        while (!feof($rfile)) {
            $wordsTab[] = fgetcsv($rfile, 1000);
        }
        fclose($rfile);
        return $wordsTab;
    }

    public static function printCSVarray(Array $wordstab)
    {
        $arraycsv =echo($wordstab);
        return Sarraycsv;
    }

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
}
?>

