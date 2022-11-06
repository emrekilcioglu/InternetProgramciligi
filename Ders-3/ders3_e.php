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
    private $libraryName =  "Adü Kütüphane";
    private const YEAR = 1980;

    public function info()
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermemktedir";
        $isim = $this->libraryName;
        $kurulus = self::YEAR;
        return "$text , $isim, ($kurulus)";
    }

    
    

}
$nesne = new Kutuphane ;
echo $nesne->info();









?>