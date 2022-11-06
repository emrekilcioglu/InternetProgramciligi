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

    private function info()
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermemktedir";
        return $text;
    }
    public function setLibraryName($libraryName)
    {
        $this->libraryName = $libraryName;
    }
    public function getLibraryName()
    {
        return $this->libraryName; 
    }
    public function getYEAR()
    {
        return $this::YEAR;
    }
    public function getInfo()
    {
        return $this->info();
    }

}
$nesne = new Kutuphane;
/*echo "Kütüphane Adı : $nesne->libraryName";
echo "<br>";
echo "Kütüphanenin Kuruluş Yılı: ". $nesne::YEAR;
echo "<br>";
echo $nesne->getInfo();
*/
echo "Kütüphane Adı : ". $nesne->getLibraryName();
echo "<br>";
echo "Kütüphanenin Kuruluş Yılı: ". $nesne->getYEAR();
echo "<br>";
echo $nesne->getInfo();









?>