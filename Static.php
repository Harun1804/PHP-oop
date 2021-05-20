<?php   

class ContohStatic {
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " Kali <br>";
    }

    public static function hai()
    {
        return "Hai, Honey " . self::$angka++ . " Kali <br>";
    }
}

$obj = new ContohStatic();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

echo ContohStatic::hai();
echo ContohStatic::hai();
