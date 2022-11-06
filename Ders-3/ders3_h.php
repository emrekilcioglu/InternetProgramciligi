<?php 
/*
Access Modifier (Erişim Belirleyicileri)

Public : Genel heryerden erişime açık olduğunu ifade eder.
Private : Özel,yanlızca sınıf içerisinden erişilebilir
Protected : Korumalı, sınıf içerisisinden ve türetilen sınıflardan erişilebilir

static : Hızlı erişilebilen proje çalıştığı anda kendinden nesne türetir

$this : Bu sınıfta şeklinde işaret eder java ile aynı
self : Kendi sınıfımda,şeklinde 
parent : üst sınıfı işaret eder
*/

class Kutuphane{
    protected $libraryName =  "Adü Kütüphane";
    protected const YEAR = 1980;

    

    
    

}
class YeniKutuphane extends Kutuphane
{
    public function getInfo()
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermemktedir";
        $isim = $this->libraryName;//Extend edilen sınıfın içerisindeki public değişkenlerre this ile erişebiliriz

        $kurulus = self::YEAR;//Extend edilen sınıfın içerisinde ki 
        return "$text , $isim, ($kurulus)";
    }
}

$yeniNesne = new YeniKutuphane ;

echo $yeniNesne->getInfo();









?>