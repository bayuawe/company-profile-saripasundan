

# 🏢 Company Profile – Sari Pasundan
**Company Profile – Sari Pasundan** adalah aplikasi web yang dikembangkan menggunakan Laravel untuk menampilkan profil perusahaan secara profesional. Proyek ini dirancang untuk memperkenalkan produk dan layanan CV. Sari Pasundan Berkah kepada calon pelanggan melalui platform digital yang responsif dan mudah digunakan

---

## 🚀 Fitur Utama

 Menampilkan informasi perusahaan secara lengkap dan terstruktu.
 Galeri produk dengan kategori yang mudah dinavigas.
 Desain responsif yang optimal untuk berbagai perangka.
 Formulir kontak untuk memudahkan komunikasi dengan pelangga.
 Pengelolaan konten yang efisien melalui struktur proyek Larave.

## 🛠️ Teknologi yang Digunakan
- [Laravel](https://laravel.co/)- [PHP](https://www.php.ne/)- [Blade Templating Engine](https://laravel.com/docs/9.x/blae)- [Tailwind CSS](https://tailwindcss.co/)- [MySQL](https://www.mysql.co/)- [Vite](https://vitejs.de/)

## ⚙️ Instalasi & Setup

**Clone repositori ini**
   ```bash
   git clone https://github.com/bayuawe/company-profile-saripasundan.git
   cd company-profile-saripasundan
   ```

**Instal dependensi PHP dan JavaScript**
   ```bash
   composer install
   npm install
   ```

**Salin file `.env` dan atur konfigurasi**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

**Atur koneksi database di file `.env` dan jalankan migrasi**
   ```bash
   php artisan migrate
   ```

**Jalankan server pengembangan**
   ```bash
   php artisan serve
   npm run dev
   ```

## 📁 Struktur Proyk
```bash
company-profile-saripasundan/
├── app/                 # Logika aplikasi
├── bootstrap/           # Bootstrap Laravel
├── config/              # Konfigurasi aplikasi
├── database/            # Migrasi dan seeder
├── public/              # Aset publik
├── resources/           # View dan aset frontend
├── routes/              # Definisi rute
├── storage/             # File yang dihasilkan
├── tests/               # Pengujian
├── .env.example         # Contoh file environment
├── composer.json        # Dependensi PHP
├── package.json         # Dependensi JavaScript
└── vite.config.js       # Konfigurasi Vite
```

## ✨ Kontribui
Kontribusi sangat terbuka! Jika Anda memiliki ide, perbaikan bug, atau peningkatan fitur, silakan fork repositori ini dan buat pull requst.

## 📄 Lisesi
Proyek ini dilisensikan di bawah [MIT License](LICESE).

## 📬 Kotak
Dibuat oleh [Bayu Aryandi Wijaya](bayuawe.my.id). Jika Anda memiliki pertanyaan atau masukan, silakan hubungi melalui [bayuaryandi21@gmail.com](mailto:bayuaryandi21@gmailcom).
