<?php

return [
    '400' => [
        'title' => 'Geçersiz İstek',
        'message' => 'Sunucu isteğinizi anlayamadı. Lütfen verdiğiniz bilgileri kontrol edin ve tekrar deneyin.',
    ],
    '401' => [
        'title' => 'Yetkisiz',
        'message' => 'Bu kaynağa erişmek için yetkiniz yok. Lütfen kimlik bilgilerinizi kontrol edin ve tekrar deneyin.',
    ],
    '402' => [
        'title' => 'Ödeme Gerekli',
        'message' => 'Bu işlem için ödeme gereklidir. Devam etmek için lütfen hesabınızı düzenleyin.',
    ],
    '403' => [
        'title' => 'Yasak',
        'message' => 'Bu sayfaya erişme veya bu işlemi yapma izniniz yok.',
    ],
    '404' => [
        'title' => 'Bulunamadı',
        'message' => 'Aradığınız sayfa bulunamadı. Taşınmış veya silinmiş olabilir.',
    ],
    '405' => [
        'title' => 'İzin Verilmeyen Yöntem',
        'message' => 'Denediğiniz işlem izin verilmiyor. Lütfen istek yöntemini kontrol edin.',
    ],
    '406' => [
        'title' => 'Kabul Edilemez',
        'message' => 'Sunucu, isteğinizle eşleşen bir yanıt sağlayamıyor.',
    ],
    '407' => [
        'title' => 'Proxy Kimlik Doğrulaması Gerekli',
        'message' => 'Bu kaynağa erişmek için geçerli proxy kimlik bilgilerini sağlayın.',
    ],
    '408' => [
        'title' => 'İstek Zaman Aşımı',
        'message' => 'İsteğiniz çok uzun sürdü. Lütfen bağlantınızı kontrol edin ve tekrar deneyin.',
    ],
    '409' => [
        'title' => 'Çakışma',
        'message' => 'Kaynağın mevcut durumu ile çakışma var. Lütfen isteğinizi gözden geçirin.',
    ],
    '410' => [
        'title' => 'Artık Yok',
        'message' => 'Erişmeye çalıştığınız kaynak kalıcı olarak kaldırılmıştır.',
    ],
    '411' => [
        'title' => 'Uzunluk Gerekli',
        'message' => 'Lütfen isteğinizde geçerli bir Content-Length başlığı ekleyin.',
    ],
    '412' => [
        'title' => 'Önkoşul Başarısız',
        'message' => 'İsteğiniz, sunucunun belirttiği gerekli koşulları karşılamıyor.',
    ],
    '413' => [
        'title' => 'İstek Çok Büyük',
        'message' => 'İsteğiniz işlenemeyecek kadar büyük. Lütfen boyutu küçültüp tekrar deneyin.',
    ],
    '414' => [
        'title' => 'URI Çok Uzun',
        'message' => 'İstediğiniz URL çok uzun. Kısaltıp tekrar gönderin.',
    ],
    '415' => [
        'title' => 'Desteklenmeyen Medya Türü',
        'message' => 'Sunucu bu medya türünü işleyemiyor. İstek formatınızı ayarlayın.',
    ],
    '416' => [
        'title' => 'Aralık Karşılanamaz',
        'message' => 'Talep ettiğiniz aralık bu kaynak için geçerli değil.',
    ],
    '417' => [
        'title' => 'Beklenti Başarısız',
        'message' => 'Sunucu, isteğinizde belirtilen beklentileri karşılayamadı.',
    ],
    '418' => [
        'title' => 'Desteklenmeyen İstek',
        'message' => 'Sunucu bu isteği işlemeyi reddediyor çünkü desteklenmiyor. Lütfen isteğinizi gözden geçirin ve tekrar deneyin.',
    ],
    '419' => [
        'title' => 'Sayfa Süresi Doldu',
        'message' => 'Oturumunuzun süresi doldu. Lütfen sayfayı yenileyip tekrar deneyin.',
    ],
    '421' => [
        'title' => 'Yanlış Yönlendirilmiş İstek',
        'message' => 'İsteğiniz yanlış sunucuya gönderildi. Lütfen tekrar deneyin.',
    ],
    '422' => [
        'title' => 'İşlenemeyen Varlık',
        'message' => 'Geçersiz veriler nedeniyle isteğiniz işlenemedi. Lütfen kontrol edin ve tekrar deneyin.',
    ],
    '423' => [
        'title' => 'Kilitli',
        'message' => 'Kaynak şu anda kilitli ve değiştirilemez. Lütfen daha sonra tekrar deneyin.',
    ],
    '424' => [
        'title' => 'Bağımlılık Başarısız',
        'message' => 'Bu istek, önceki ilgili bir isteğin başarısız olması nedeniyle başarısız oldu.',
    ],
    '425' => [
        'title' => 'Çok Erken',
        'message' => 'Sunucu bu isteği henüz işlemeye hazır değil. Lütfen daha sonra tekrar deneyin.',
    ],
    '426' => [
        'title' => 'Yükseltme Gerekli',
        'message' => 'Bu isteği yapmak için protokolünüzü veya istemcinizi güncelleyin.',
    ],
    '428' => [
        'title' => 'Önkoşul Gerekli',
        'message' => 'Bu istek için belirli koşulların sağlanması gerekir. Gerekli başlıkları ekleyin.',
    ],
    '429' => [
        'title' => 'Çok Fazla İstek',
        'message' => 'Kısa süre içinde çok fazla istek gönderdiniz. Lütfen biraz bekleyip tekrar deneyin.',
    ],
    '431' => [
        'title' => 'İstek Başlık Alanları Çok Büyük',
        'message' => 'İstek başlıklarınız çok büyük. Lütfen boyutu azaltıp tekrar deneyin.',
    ],
    '451' => [
        'title' => 'Hukuki Sebeplerle Kullanılamıyor',
        'message' => 'Bu kaynağa erişim, hukuki veya düzenleyici sebeplerle kısıtlanmıştır.',
    ],
    '500' => [
        'title' => 'Sunucu Hatası',
        'message' => 'Sunucuda beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar deneyin veya sorun devam ederse destekle iletişime geçin.',
    ],
    '501' => [
        'title' => 'Uygulanmadı',
        'message' => 'Bu işlevsellik sunucu tarafından desteklenmiyor.',
    ],
    '502' => [
        'title' => 'Hatalı Ağ Geçidi',
        'message' => 'Sunucu, yukarı sunucudan geçersiz bir yanıt aldı. Lütfen tekrar deneyin.',
    ],
    '503' => [
        'title' => 'Hizmet Kullanılamıyor',
        'message' => 'Platformumuz şu anda bakımda. Kısa süre içinde tekrar çevrimiçi olmayı bekliyoruz. Sabırınız için teşekkürler.',
    ],
    '504' => [
        'title' => 'Ağ Geçidi Zaman Aşımı',
        'message' => 'Sunucu bir yanıt beklerken zaman aşımına uğradı. Lütfen daha sonra tekrar deneyin.',
    ],
    '505' => [
        'title' => 'HTTP Sürümü Desteklenmiyor',
        'message' => 'Sunucu, bu istekte kullanılan HTTP sürümünü desteklemiyor.',
    ],
    '506' => [
        'title' => 'Varyant da Müzakere Ediyor',
        'message' => 'Sunucu iç yapılandırma hatasıyla karşılaştı. Lütfen daha sonra tekrar deneyin.',
    ],
    '507' => [
        'title' => 'Yetersiz Depolama',
        'message' => 'Sunucu, bu isteği tamamlamak için gerekli verileri depolayamaz.',
    ],
    '508' => [
        'title' => 'Döngü Algılandı',
        'message' => 'Sunucu isteği işlerken sonsuz bir döngü tespit etti.',
    ],
    '510' => [
        'title' => 'Genişletilmedi',
        'message' => 'Bu istek, sunucu tarafından desteklenmeyen ek uzantılar gerektiriyor.',
    ],
    '511' => [
        'title' => 'Ağ Kimlik Doğrulaması Gerekli',
        'message' => 'Ağa erişmek için kimlik doğrulaması yapmanız gerekiyor. Lütfen kimlik bilgilerinizi sağlayın.',
    ],
];
