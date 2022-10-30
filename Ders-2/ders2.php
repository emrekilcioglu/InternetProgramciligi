<?php
/* 

    class: Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.

    new: Daha önceden tanımlanmş olan herhangi bir sınıfı çağırmak için kullanılır.

    Kurallar:
    
    1.Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır.
    2.Sınıf isimleri içerisinde alfanumerik(A-Z a-z 0-9) değerler ve _ kullanılabilir.
    3.Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır.
    4.Sınıf isimleri rakam ile başlayamaz.
    5.Sınıf isimleri içerisinde hiçbir zaman boşluk ve türkçe karakter bulunmaz, özel karakterler(~|*?) kullanılamaz.  
    6.Sınıf isimleri tanımlanırken, php tarafından kullanılmakta olan isimler/tanımlar kullanılamaz.
    7.Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (Namespace(isim uzayı) kullanılması durumunda birden fazla kes farklı name space içerisinde kullanılabilir.)
    8.Sınıf isimleri küçük/büyük harf duyarlı değildir.
    9. Sınıf kapasama/etki alanı kurallarına tabidir.

    Yapısı: 

    class isim{
        Kod Blokları...
    }


    __construct : Sınıfın yapıcı metodudur. Sınıf çağırıldığında otomatik çalışır.

    __destruct : Sınıfın yıkıcı metodudur. Sınıfın işlemi bittiğinde otomatik çalışır.

*/

class Sinif
{

    /* 
Yapıcı metotlara parametre gönderilebilir.
Yapıcı metotlara gönderilecek parametrelere varsayılan değer atanabilir(localhost).
Değer gelmediğinde varsayılan değer aktif olur.
Değer gelirse de gelen değer aktif olur.
*/
    public function __construct($hostname = "localhost", $username, $pass, $dbName)
    {
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    /* public her yerden erişilebilir. */
    public $isim = "Emre";
    public $soyisim = "Kilcioglu";


    public function write()
    {
        $metin = "Write fonksiyonu çalıştı";
        return $metin;
    }


    public function __destruct()
    {
        echo "Yıkıcı metot çalıştı";
    }
}


$nesne = new Sinif("emrekilcioglu.xyz", "kilcioglu", "1212413", "ders_db");
echo "<br>";
//echo new Sinif ("deneme.com","dene","11111","db");


echo gettype($nesne);
echo "<br>";

print_r($nesne);

echo $nesne->write(); /* Nesne içerisindeki değişkene erişim. */

/*

Constructor bizim sınıfımızın bağımlı olduğu elemanları(Kütüphane,Sınıf gibi)
bizim sınıfımız için hazır eden metodtur zaten kendisi sınıf çağılır çağırılmaz ilk çalışan metodur,
mesela composition yaptığımız bir sınıfın nesnesine ihtiyacımız var bunu contructor ile çağırıp
kullanabilirz

 */

