<?php 
class PersonelIslemleri{
    public $isimSoyisim;
    public $gelir;
    public $gider;
    public function isimEkle($isimSoyisim)
    {
        $this->isimSoyisim = $isimSoyisim;

    }
    public function gelirEkle($income)
    {
        $this->gelir = $income;

    }
    public function giderEkle($isimSoyisim)
    {
        $this->isimSoyisim = $isimSoyisim;

    }
    public function aylikDurumuHesapla ()
    {
        return ($this->gelir - $this->gider);

    }
    public function yillikDurumHesapla()
    {
        return (($this->gelir -$this->gider)*12);
    }
    

}

class ElemanlarDahili extends PersonelIslemleri
{
    
}
class ElemanlarHarici extends PersonelIslemleri
{
    
}
//this olmadan çalışıyor mu dene 

$dahili = new ElemanlarDahili;
$dahili->isimEkle("Kayra");
$dahili->gelirEkle(2500);






?>