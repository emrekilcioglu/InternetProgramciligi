<?php

/* 
Uygulama-1

1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Birinci metotta  girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta  girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.

Uygulama-2

1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. sınıf içerisine public 2 tane metot yazınız.
5. Birinci metoda parametre olarak gönderilen vize ve final notlarını alarak, ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotda  parametre olarak gelen sayının faktöryel hesabını yaptırarak ekrana sonucunu yazdırınız. 

*/

//Uygulama 1


class Sinif1{
    public $sayi1;
    public $sayi2;
    public $sayi3;

    public function __construct($sayi1,$sayi2,$sayi3)
    {
        $this->sayi1 = $sayi1;
        $this->sayi2 = $sayi2;
        $this->sayi3 = $sayi3;

        
    }

    public function kareAl($var)
    {
        echo "$var Karesi : ".($var*$var);
    }

    public function kareAl2($var)
    {
        echo"$var kare Dizisi:";
        echo "<br>";

       for ($i=0; $i <$var ; $i++) { 
        echo ($i*$i);
        echo "<br>";
       }
    }




}

//Uygulama 2

class Sinif2{
    public function __construct()
    {
        echo "Sinif2 Construct Çalıştı";
        echo "<br>";
    }

    public function notOrtalama($vize,$final)
    {
        $ortalama = (($vize*0.3)+($final*0.7));

        if ($ortalama > 50) {
            echo "Tebrikler Geçtiniz";
        }
        else {
            echo "Üzgünüm kaldınız";
        }
    }

    public function faktoriyel($var)
    {
        $faktoriyel;
        for ($i=$var; $i >= 1 ; $i--) { 
            $faktoriyel = ($faktoriyel * $var);
        }
        echo "Faktöriyel = $faktoriyel";
    }



    function __destruct()
    {
        echo "Sinif2 Destruct Çalıştı";
    }

}


$nesne1 = new Sinif1(10,11,20);
$nesne2 = new Sinif2;
$nesne1 -> kareAl(2);
echo "<br>";
$nesne1 -> kareAl2(5);
echo "<br>";
echo "<br>";
$nesne2 -> notOrtalama(50,90);
echo "<br>";
$nesne2 -> faktoriyel(6);
echo "<br>"


?>