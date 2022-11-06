<?php 
class Welcome {
    public function hello($isim ="John",$soyisim ="Doe")
    {
        $text = "Merhaba Sisteme Giriş Yaptınız: $isim  $soyisim";
        return $text;
    }

}

$nesne = new Welcome;
//parametre sırası önemlidir
echo $hello1 = $nesne->hello("Börübay","Eğilmez");//-> ile nesne elemanlarına erişiriz
echo "<br>";
echo $hello2 = $nesne->hello();





?>