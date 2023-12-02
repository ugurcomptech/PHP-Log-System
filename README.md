# PHP Log System

Bu PHP betiği, siteye giren kullanıcının çeşitli bilgilerini alır, örneğin IP adresi ve hangi cihazdan giriş yaptığı gibi. Alınan bilgiler, ilk olarak access_log.txt dosyasına yazılır. Daha sonra, access_log.php sayfasında bu bilgileri tablo şeklinde düzenli ve okunabilir bir şekilde gösterir. 

**Not:** Alınan IP adresi, kullanıcının çıkış IP adresini temsil eder.


## Kullanımı

Hangi sayfada log tutmak istiyorsanız o sayfaya gidip  ```<?php include 'config.php'; ?> ``` kodunu yazmanız gerekmektedir. Sayfaya hangi IP adresinden girdiği gibi bazı bilgiler gözükecektir. Eğer local de test ederseniz çıkış IP adresinizi alamayabilirsiniz o yüzden host da denemeniz daha iyi olacaktır.


![image](https://github.com/ugurcomptech/PHP-Log-System/assets/133202238/52006716-41aa-4a79-90ea-defbed867531)
