# AirlanggaAcademic
Project Pengembangan Sistem Informasi 2017

## Requirements:
* [XAMPP](https://www.apachefriends.org/download.html) (atau tool lain, dengan versi PHP minimal 5.6.4.) 
* [Composer](https://getcomposer.org/)


## Installation:
[Clone this repo](https://github.com/AirlanggaAcademicIS/AirlanggaAcademic.git)

Setelah itu run command berikut di cmd direktori repo tadi
```bash
composer install
```

Import database airlangga_academic.sql ke phpmyadmin (filenya ada di dalam repo tadi)

Buat file baru bernama .env

Copy paste isi dari .env.example ke .env tadi, kemudian atur konfigurasi username dan password database di .env

```php
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

Setelah itu jalankan command ini di cmd
```bash
php artisan key:generate
```

Dan terakhir jalankan aplikasi ini dengan command
```bash
php artisan serve
```

Untuk menjalankan aplikasi di browser gunakan url "localhost:8000"

## Akun untuk login
* Mahasiswa
username : 081411631070
password : mahasiswa

* Dosen
username : 12345678910
password : dosen

* Karyawan
username : 12345
password : karyawan

## Modul yang tersedia:
### Modul Inventaris
Fitur :
1. Manajemen asset
2. Manajemen data peminjaman asset
3. Manajemen data maintenance asset
4. QRCODE generator
5. location report generator

Minus :
- Peminjam dgn NIM blm terintegrasi
- lokasi di location report "Labkom 5 & 6"

Modul Dosen
Fitur:
1. manajemen data penelitian
2. manajemen data jurnal
3. manajemen data konferensi
4 manajemen data pengmas
5. manajemen data sk tugas
6. laporan kinerja dosen tiap semester
7. validasi data dosen
8. manajemen biodata dosen
9. view semua data dosen

Minus :
- data penelitian yg melibatkan beberapa orang masi ditulis terpisah ( tidak gabung )

### Modul Kegiatan
Fitur :
1. Pengajuan Kegiatan
2. Pengajuan LPJ Kegiatan
3. Pencatatan Kegiatan yg akan dilaksanakan
4. Pencatatan Kegiatan yg telah dilaksanakan
5. Download Surat Pengajuan

Minus :
- view detail karyawan dari dosen belum muncul
- fitur edit masih mengisi ulang

### Modul Mahasiswa 
Fitur :
1. Pengelolaan akun mahasiswa
2. Ubah password akun mhs
3. Pengelolaan biodata mhs
3. Pengelolaan prestasi mhs
4. Pengelolaan penelitian mhs
5. Verifikasi prestasi dan penelitian mhs

Minus:
- Belum bisa mengirim email ke mhs setelah akun dibuat
- Password default sama spt nim mhs

### Modul Layanan Akademik
Fitur :
1. Pengelolahan akun karyawan
2. Kalender Ruangan
3. Permohonan Ruangan
4. Pengumpulan Hardcopy Proposal Skripsi
5. Share Document (Upload dan Download Dokumen)
6. Surat Masuk
7. Surat Keluar Mahasiswa
8. Surat Keluar Dosen

Minus:
- Seharusnya tidak semua karyawan dapat mengelolah akun karyawan (Hanya yang berhak mengelolah saja)
- Password default akun karyawan adalah "karyawan"
- Ditakutkan jika mahasiswa/dosen bisa memasuki halaman karyawan dengan memasukkan url (Begitu juga sebaliknya)
- Bug Fitur Search Kalender Ruangan saat dropdown search masih "Pilih ruangan"
- Proses bisnis surat keluar dan pengumpulan hardcopy yang belum sesuai dengan apa yang diharapkan oleh Pak Indra

### Modul Monitoring Skripsi 
Fitur :
1. download upload form usulan
2. Data skripsi 
3. Data konsultasi
4. Input keterangan status
5. Input jenis kbk
6. Upload Download berkas proposal dan skripsi
7. Jadwal sidang proposal dan skripsi
8. Hasil sidang proposal dan skripsi

Minus : 
- Edit dosen pembimbing agak bermasalah

### Modul Notulensi 
Fitur :
1. Undangan rapat, (kirim dan konfirmasi undangan melalui imel dan sistem)
2. Cetak daftar kehadiran rapat
3. Input, konfirmasi dan kirim hasil notulensi
4. Data notulensi 
5. Jadwal kegiatan rapat


### Modul Kurikulum
Fitur :
1. Generate pdf
2. E-learning
3. CRUD RPS
4. CRUD Silabus
5. CRUD Capaian Pembelajaran
6. CRUD Capaian Program
7. CRUD Mata Kuliah
8. Pilih dan Delete Mata Kuliah Prodi
9. CRUD Kategori Capaian Pembelajaran

Minus :
- Pdf kurang rapi
- Belum bisa menghapus file yg telah di upload
- Lanjutan rps belum muncul di halaman index rps karena status rps setelah input lanjutan rps belum berubah
- Belum bisa auth karyawan yang sedang login dari prodi apa

### Modul Krs & Khs:
Fitur:
1. CRU ruang
2. CRU mk ditawarkan
3. CRU dosen matkul
4. CRUD jadwal
5. CRUD krs + cetak
6. Approve natkul
7. CRU bobot nilai
8. Upload nilai & download template nilai
9. Lihat krs + cetak
10. Lihat detail nilai
11. Histori nilai

Minus:
- Tampilan GUI kurang rapi
- Exception upload nilai kurang (isi bobot dulu baru bisa upload)
- Exception tambah tahun akademik kurang (input tahun akademik tahun lalu yg blm ada didb masih bisa)
- Kebanyakan tabel belum urut

Good Luck, Have Fun :3 

[Coding for Purpose]