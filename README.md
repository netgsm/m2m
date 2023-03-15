
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
    - [Yetkilendirme](#yetki̇lendi̇rme)
    - [Hat Listesi](#hat-li̇stesi̇)
    - [Hat Detayı](#hat-detayi)

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

### YETKİLENDİRME

<ul>
<li>M2M API servisi ile işlem yapabilmek için erişim anahtarı almanızı sağlar.</li>
<li>API servisi ile yapacağınız diğer işlemler için bu yetkilendirmeye ihtiyaç duyulmaktadır.</li>
<li>Servisten alınan yanıt JSON türündedir.</li>
</ul>
<b> Tanımlar </b>
<table>
<thead>
<tr>
<th>Değişken</th>
<th>Anlamı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>username</code></td>
<td>Hizmet aldığınız abone numarası. <em>(Zorunlu parametre)</em></td>
</tr>
<tr>
<td><code>password</code></td>
<td>Kullanıcı şifresi. <em>(Zorunlu parametre)</em></td>
</tr>
<tr>
<td><code>appkey</code></td>
<td>Geliştirici hesabınızdan yayınlanan uygulamanıza ait id bilgisi. <em>(Zorunlu parametre.)</em></td>
</tr>
</tbody>
</table>

```     
      use Netgsm\M2m\m2m;
      $islem=new m2m;
      $data=array(
            'username'=>'510xxxxxxx',
            'password' => 'xxxxxx',
            'appKey' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'

      );
      $sonuc=$islem->yetkilendirme($data);
      dd($sonuc);
      die;
``` 
#### Başarılı Sorgulama

```

Array
(
    [token] => 'token'
    [exp] => 1681455059
)

```
#### Başarısız Sorgulama

```
Array
(
    [message] => An error occurred in the login service
)

```

### HAT LİSTESİ


<p>Yetkilendirdiğiniz aboneliğinize bağlı hat listesine ve detaylarına (imei,iccid vs.) ulaşabilirsiniz.</p>
<p><strong> Tanımlar </strong></p>
<table>
<thead>
<tr>
<th>Değişken</th>
<th>Anlamı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>Authorization:Bearer</code></td>
<td>Yetkilendirme isteği sonucunda alınan token değeri  <em>(Zorunlu parametre)</em></td>
</tr>
</tbody>
</table>
<p><strong> Servisten Dönen Yanıt </strong></p>
<table>
<thead>
<tr>
<th>Parametre</th>
<th>Anlamı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>Telefon numarasının kayıtlı olduğu kurum adı</td>
</tr>
<tr>
<td><code>imei</code></td>
<td>Yetkilendirdiğiniz telefon numarası ile eşleşen Uluslararası Mobil Cihaz Kodu.</td>
</tr>
<tr>
<td><code>iccid</code></td>
<td>Telefon numarası ile eşleştirilmiş simkart seri numarası.</td>
</tr>
<tr>
<td><code>msisdn</code></td>
<td>Abonenin tanımlanması ve doğrulanması için operatör tarafından aboneye atanan özel numara.</td>
</tr>
<tr>
<td><code>account_type</code></td>
<td>Hesap türü.</td>
</tr>
<tr>
<td><code>imsi</code></td>
<td>Bu numara SIM kartın çalıştığı şebeke olan bireysel operatör şebekesini tanımlar. şebeke sağlayıcısı ile SIM kartın iletişim kurabilmesini sağlar.</td>
</tr>
</tbody>
</table>
<p><strong> Hata Durumları </strong></p>
<table>
<thead>
<tr>
<th>HTTP status</th>
<th>Parametre</th>
<th>Hata mesajı</th>
</tr>
</thead>
<tbody>
<tr>
<td>301 Moved Permanently</td>
<td>message</td>
<td>Couldn't find any record(s)</td>
</tr>
<tr>
<td>400 Bad Request</td>
<td>status  reply</td>
<td>0  Expired!</td>
</tr>
</tbody>
</table>


```
      use Netgsm\M2m\m2m;
      $islem=new m2m;
      $token='token degeri';
      $sonuc=$islem->hatlistesi($token);
      dd($sonuc);
      die;
``` 

#### Başarılı Sorgulama

```
Array
(
    [data] => stdClass Object
        (
            [company] => NETGSM İLETİŞİM VE BİLGİ TEKNOLOJİLERİ A.Ş
            [main_account] => Array
                (
                    [0] => stdClass Object
                        (
                            [imei] => 
                            [iccid] => xx
                            [msisdn] => xx
                            [imsi] => xx
                        )

                )

            [sub_accounts] => Array
                (
                    [0] => stdClass Object
                        (
                            [imei] => 
                            [iccid] => xx
                            [msisdn] => xx
                            [imsi] => xx
                            [account_type] => Credit and Management Sharing
                        )

                    [1] => stdClass Object
                        (
                            [imei] => 
                            [iccid] => xx
                            [msisdn] => xx
                            [imsi] => xx
                            [account_type] => Credit and Management Sharing
                        )


                    

                )

        )

)

```

#### Başarısız Sorgulama

```
Array
(
    [status] => 0
    [reply] => Expired!
)

```
### HAT DETAYI
<p><strong> Tanımlar </strong></p>
<table>
<thead>
<tr>
<th>Değişken</th>
<th>Anlamı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>Authorization:Bearer</code></td>
<td>Yetkilendirme isteği sonucunda alınan token değeri  <em>(Zorunlu parametre)</em></td>
</tr>
<tr>
<td><code>imei</code></td>
<td>Yetkilendirdiğiniz telefon numarası ile eşleşen Uluslararası Mobil Cihaz Kodu.</td>
</tr>
<tr>
<td><code>iccid</code></td>
<td>Telefon numarası ile eşleştirilmiş simkart seri numarası.</td>
</tr>
<tr>
<td><code>msisdn</code></td>
<td>Abonenin tanımlanması ve doğrulanması için operatör tarafından aboneye atanan özel numara.</td>
</tr>
</tbody>
</table>


```
      use Netgsm\M2m\m2m;
      $islem=new m2m;
        $data=array(
              'tokendegeri'=>xx',
              'imei' => 'xx',
              'iccid' => 'xx',
              'msisdn'=>'xx'
  
        );
        $sonuc=$islem->hatdetay($data);
        dd($sonuc);
        die;
``` 

#### Başarılı Sorgulama

```
Array
(
    [data] => stdClass Object
        (
            [company] => NETGSM İLETİŞİM VE BİLGİ TEKNOLOJİLERİ A.Ş
            [line_information] => stdClass Object
                (
                    [aggreement_date] => 17.06.2022 09:23
                    [account_type] => Credit and Management Sharing
                    [imei] => xx
                    [iccid] => xx
                    [msisdn] => xx
                    [imsi] => xx
                )

            [usage_information] => stdClass Object
                (
                    [used_kbytes] => xx
                    [last_update] => 15.03.2023 10:38
                )

            [commitment_detail] => Array
                (
                    [0] => stdClass Object
                        (
                            [service_title] => M2M Data
                            [tariff_title] => 250 MB M2M Data
                            [end_date] => 17.06.2023 00:00
                        )

                )

        )

)
a

```

#### Başarısız Sorgulama

```
Array
(
    [status] => 0
    [reply] => Expired!
)

```

<p><strong> Servisten Dönen Yanıt</strong></p>
<table>
<thead>
<tr>
<th>Parametre</th>
<th>Anlamı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>Telefon numarasının kayıtlı olduğu kurum adı.</td>
</tr>
<tr>
<td><code>aggreement_date</code></td>
<td>Sözleşme tarihi.</td>
</tr>
<tr>
<td><code>account_type</code></td>
<td>Hesap türü.</td>
</tr>
<tr>
<td><code>imei</code></td>
<td>Telefon numarası ile eşleşen Uluslararası Mobil Cihaz Kodu.</td>
</tr>
<tr>
<td><code>iccid</code></td>
<td>Telefon numarası ile eşleştirilmiş sim kart seri numarası.</td>
</tr>
<tr>
<td><code>msisdn</code></td>
<td>Abonenin tanımlanması ve doğrulanması için operatör tarafından aboneye atanan özel numara.</td>
</tr>
<tr>
<td><code>imsi</code></td>
<td>Bu numara SIM kartın çalıştığı şebeke olan bireysel operatör şebekesini tanımlar. şebeke sağlayıcısı ile SIM kartın iletişim kurabilmesini sağlar.</td>
</tr>
<tr>
<td><code>used_kbytes</code></td>
<td>Data kullanım miktarı</td>
</tr>
<tr>
<td><code>last_update</code></td>
<td>Son güncel olma tarihi</td>
</tr>
<tr>
<td><code>service_title</code></td>
<td>Servis adı.</td>
</tr>
<tr>
<td><code>tariff_title</code></td>
<td>Tarife adı.</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>Tarife bitiş tarihi.</td>
</tr>
</tbody>
</table>
<p><strong> Hata Durumları </strong></p>

<table>
<thead>
<tr>
<th>HTTP status</th>
<th>Parametre</th>
<th>Hata mesajı</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>400 Bad Request</code></td>
<td>status  reply</td>
<td>0  Expired!</td>
</tr>
<tr>
<td><code>404 Not Found</code></td>
<td>message</td>
<td>Couldn't find any record(s)!</td>
</tr>
<tr>
<td><code>422 Unprocessable Entity</code></td>
<td>message imei iccidphone_number</td>
<td>The given data was invalid.The imei field is required when none of iccid / phone number are present.<br>The iccid field is required when none of imei / phone number are present.The phone number field is required when none of imei / iccid are present.</td>
</tr>
</tbody>
</table>
