# Modul_6
1.Perbedaan Cookies Dan Session Adalah

Jika Cookies Adalah Sebuah adalah serangkaian teks yang disimpan pada
 komputer Anda oleh situs web yang Anda kunjungi. Pada umumnya cookie 
menyimpan pengaturan atau preferensi Anda untuk suatu situs web tertentu,
misalnya bahasa yang dipilih, atau lokasi (negara) Anda.


Jika Session Adalah Sebuah Metode Penyimpanan Pada Saat Login
Yang Biasa Digunakan untuk Autentikasi

2. 

Untuk Penghapusan Cookies dapat Dan Session Menggunakan Kodingan PHP 

3.

Untuk Cookies :
 if (isset($_COOKIE['remember_user'])) {
    unset($_COOKIE['Hello']);
    unset($_COOKIE['HelloTest1']);
    setcookie('Hello', null, -1, '/');
    setcookie('HelloTest1', null, -1, '/');
    return true;
} else {
    return false;
}


4. Untuk Session Menggunakam = Session_destroy()
