Nama : RAHMAT
NIM : 312010229
Kelas : TI.20.A.2

# Lab8Web

Menjalankan MySQL Server
Untuk menjalankan MySQL Server dari menu XAMPP Contol.

Mengakses MySQL Client menggunakan PHP MyAdmin
Pastikan webserver Apache dan MySQL server sudah dijalankan. Kemudian buka
melalui browser: http://localhost/phpmyadmin/

### Membuat Database

CREATE DATABASE latihan1;

### Membuat Tabel

CREATE TABLE data_barang (

id_barang int(10) auto_increment Primary Key,

kategori varchar(30),

nama varchar(30),

gambar varchar(100),

harga_beli decimal(10,0),

harga_jual decimal(10,0),

stok int(4)

);

Tampilan di phpMyadmin

![Gambar 1](screenshot/ss1a.png)

### Menambahkan Data

INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)

VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),

('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),

('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);

![Gambar 2](screenshot/ss1c.png)

### Membuat Program CRUD

Buat folder lab8_php_database pada root directory web server (d:\xampp\htdocs)
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab8_php_database/

![Gambar 3](screenshot/ss2a.png)

### Membuat file koneksi database

Buat file baru dengan nama koneksi.php

![Gambar 4](screenshot/ss2b.png)

Buka melalui browser untuk menguji koneksi database (untuk menyampilkan pesan
koneksi berhasil, uncomment pada perintah echo “koneksi berhasil”;

![Gambar 5](screenshot/ss2c.png)

Ini tampilannya di browser jika koneksi berhasil

![Gambar 6](screenshot/ss2d.png)

### Membuat file index untuk menampilkan data (Read)

Buat file baru dengan nama index.php

Ini kodenya

![Gambar 7](screenshot/ss3a.png)
![Gambar 8](screenshot/ss3b.png)

Ini tampilannya di browser

![Gambar 9](screenshot/ss3c.png)

### Menambah Data (Create)

Buat file baru dengan nama tambah.php

Ini kodenya

![Gambar 10](screenshot/ss4a.png)
![Gambar 11](screenshot/ss4b.png)
![Gambar 12](screenshot/ss4c.png)

Ini tampilannya di browser

![Gambar 13](screenshot/ss4d.png)

### Mengubah Data (Update)

Buat file baru dengan nama ubah.php

Ini kodenya

![Gambar 14](screenshot/ss5a.png)
![Gambar 15](screenshot/ss5b.png)
![Gambar 16](screenshot/ss5c.png)
![Gambar 17](screenshot/ss5d.png)

Ini tampilannya di browser

![Gambar 18](screenshot/ss5e.png)

### Menghapus Data (Delete)

Buat file baru dengan nama hapus.php

Ini kodenya

![Gambar 19](screenshot/ss6a.png)
