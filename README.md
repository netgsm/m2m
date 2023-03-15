
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

# İletişim & Destek

 Netgsm API Servisi ile alakalı tüm sorularınızı ve önerilerinizi teknikdestek@netgsm.com.tr adresine iletebilirsiniz.


# Doküman 

 API Servisi için hazırlanmış kapsamlı dokümana ve farklı yazılım dillerinde örnek amaçlı hazırlanmış örnek kodlamalara 
 [https://www.netgsm.com.tr/m2mapi/#m2m-api](https://www.netgsm.com.tr/m2mapi/#m2m-api) adresinden ulaşabilirsiniz.


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

 

### KREDİ SORGULAMA

Aboneliğinizde bulunan Kredi bilgilerine bu servisten ulaşabilirsiniz.  

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

