
# Laravel ve Symfony Netgsm M2M Entegrasyonu

M2M API servisleri ile kullanabileceğiniz özellikler:  

<ul>
<li>
<p>Aboneliğiniz ve ona bağlı hesaplara ait hat lisesi bilgisi (IMEI, IMSI, MSISDN) sorgulanabilir.</p>
</li>
<li>
<p>Hattınıza ait son kullanım miktarı ve son aktif olduğu tarih bilgisi alınabilir.</p>
</li>
<li>
<p>Hattınıza bağlı tarih bazlı data kullanım miktarı sorgulabilir.</p>
</li>
<li>
<p>Imei değişiklik geçmişi sorgulanabilir.</p>
<p><strong> M2M API servisleri içerisinde yer alan kavramlar </strong></p>
<table>
<thead>
<tr>
<th>Kavram</th>
<th>Anlamı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>IMEI</code></td>
<td>Uluslararası Mobil Cihaz Kodu. Her bir GSM telefon cihazına üretim aşamasında IMEI numarası yüklenmektedir. IMEI numarası her bir cihazın kimlik numarası olup tek ve benzersizdir ve 15 haneden oluşur.</td>
</tr>
<tr>
<td><code>IMSI</code></td>
<td>Uluslararası Mobil Abone Kimliği (IMSI) – Bu numara, SIM kartın çalıştığı şebeke olan bireysel operatör şebekesini tanımlar. şebeke sağlayıcısı ile SIM kartın iletişim kurabilmesini sağlar.</td>
</tr>
<tr>
<td><code>ICCID</code></td>
<td>ICCID (Entegre Devre Kartı Tanımlayıcısı) - Bir SIM kart, benzersiz seri numarasını (ICCID) içerir. ICCID'ler SIM kartlarda saklanır ve ayrıca bir kişiselleştirme işlemi sırasında SIM kart üzerinde basılır. ICCID, ITU-T tavsiyesi E.118 tarafından Birincil Hesap Numarası olarak tanımlanır.</td>
</tr>
<tr>
<td><code>MSISDN</code></td>
<td>GSM veya UMTS mobil şebekelerinde abonenin tanımlanması ve doğrulanması için operatör tarafından aboneye atanan özel bir numaradır.</td>
</tr>
</tbody>
</table>
</li>
</ul>


## İçindekiler

- [İletişim & Destek](#i̇letişim--destek)
- [Supported](#supported)
- [Kurulum](#Kurulum)
- [Doküman](#doküman)
    - [Geliştirici Hesabı](#geli̇şti̇ri̇ci̇-hesabi)
    - [Appkey](#appkey)

# İletişim & Destek

 Netgsm API Servisi ile alakalı tüm sorularınızı ve önerilerinizi teknikdestek@netgsm.com.tr adresine iletebilirsiniz.
 
## Supported
### Supported Laravel Versions

Laravel 6.x, Laravel 7.x, Laravel 8.x, Laravel 9.x, Laravel 10.x, 
### Supported Lumen Versions

Lumen 6.x, Lumen 7.x, Lumen 8.x, Lumen 9.x, 

### Supported Symfony Versions

Symfony 4.x, Symfony 5.x, Symfony 6.x

### Supported Php Versions

PHP 7.2.5 ve üzeri

### Kurulum

<b>composer require netgsm/m2m</b>


# Doküman 

 API Servisi için hazırlanmış kapsamlı dokümana ve farklı yazılım dillerinde örnek amaçlı hazırlanmış örnek kodlamalara 
 [https://www.netgsm.com.tr/m2mapi/#m2m-api](https://www.netgsm.com.tr/m2mapi/#m2m-api) adresinden ulaşabilirsiniz.



 

### GELİŞTİRİCİ HESABI

<p>Netgsm hizmetlerini yazılımlarına entegre eden geliştiricileri  Netgsm Geliştirici Hesabı ile geliştirici ekosistemine dahil ediyoruz,  <a href="https://www.netgsm.com.tr/gelistiriciler/">https://www.netgsm.com.tr/gelistiriciler/</a> adresinden bir geliştirici hesabı oluşturabilirsiniz.</p>
<p>Sistemde aktivasyonunuz onaylandıktan sonra, portal üzerinden <a href="https://www.netgsm.com.tr">https://www.netgsm.com.tr</a> <strong> Geliştirici </strong> sekmesinden uygulamalarınızı kaydedebilirsiniz.</p>
<p>Geliştirici hesabınıza eklediğiniz Uygulanmanızın onaylandıktan sonra Netgsm Entegrasyon Listesinde yayınlanır ve göndereceğiniz SMS methoduna göre bize appkey parametresinde uygulama kodunuzu iletebilirsiniz.</p>
<p>Geliştirici hesabı ile;</p>
<ul>
<li>Uygulamalarınıza ya da senaryonuza en uygun hizmeti size sunmak</li>
<li>Uygulamanız özelinde taleplerin, geliştirmelerin alınması için teknik ekip ile görüşmelerinizin yapılabilir olması</li>
<li>Geliştirme ve güncellemelerden anlık haberdar olmanız
sağlanır.</li>
</ul> 

### APPKEY

<p>Entegrasyonlarınızın yayınlanması ve gönderimlerinizde appkey parametresi göndermeniz;</p>
<ul>
<li>Arızalarda doğrudan irtibata geçilmesi</li>
<li>Yazılım kaynaklı problem tespit edildiğinde tarafınıza bilgi verilmesi</li>
<li>Gönderim istatistik ve raporlarınız
açısından kolaylık sağlar.</li>
</ul>

```
        use Netgsm\Account\account;
	$kredi=new account;
       	$sonuc=$kredi->kredisorgu();
      	dd($sonuc);
        die;
``` 
#### Başarılı Sorgulama

```
Array
(
    [durum] => Başarılı sorgulama
    [cüzdan] => 34,020
    [code] => 00
)

```
#### Başarısız Sorgulama

```
Array
(
   [durum] => Geçersiz kullanıcı adı , şifre veya kullanıcınızın API erişim izninin olmadığını gösterir.  
   Ayrıca eğer API erişiminizde IP sınırlaması yaptıysanız ve sınırladığınız ip dışında gönderim sağlıyorsanız 30 hata kodunu  
   alırsınız.API erişim izninizi veya IP sınırlamanızı , web arayüzümüzden;  sağ üst köşede bulunan ayarlar> API işlemleri   
   menüsunden kontrol edebilirsiniz.
   [code] => 30
)

```

### PAKET SORGULAMA

Aboneliğinizde bulunan Paket - Kampanya bilgilerine bu servisten ulaşabilirsiniz.  

```
        use Netgsm\Account\account;
	$kredi=new account;
     	$sonuc=$kredi->paketsorgu();
       	dd($sonuc);
        die;
``` 

#### Başarılı Sorgulama

```
Array
(
    [0] => 215 | Adet | Sms Hizmeti - Giden
)

```

#### Başarısız Sorgulama

```
Array
(
   [durum] => Geçersiz kullanıcı adı , şifre veya kullanıcınızın API erişim izninin olmadığını gösterir.  
   Ayrıca eğer API erişiminizde IP sınırlaması yaptıysanız ve sınırladığınız ip dışında gönderim sağlıyorsanız 30 hata kodunu  
   alırsınız.API erişim izninizi veya IP sınırlamanızı , web arayüzümüzden;  sağ üst köşede bulunan ayarlar> API işlemleri   
   menüsunden kontrol edebilirsiniz.
   [code] => 30
)

```

