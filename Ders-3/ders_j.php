<?php 

class Dersler {
    public function Java(){
        return "Java Kurs İçeriği";
    }
    public function Php(){
        return "Php Kurs İçeriği";
    }
    public function Sql(){
        return "Sql Kurs İçeriği";
    }
}
class Eğitmenler extends Dersler
{
    public function Java(){
        $kim = "Erkan Güler" . parent::Java();
        return $kim;
    }
    public function Php(){
        $kim = "Mehmet Can hanaylı" . parent::Php();
        return $kim;
    }
    public function Sql(){
        $kim = "Taner Karataş" . parent::Sql();
        return $kim;
    }
    
}
$egitmenler = new Egitmenler;




?>