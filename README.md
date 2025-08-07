# SIP-SJ (Sistem Informasi Posyandu - Seputih Jaya) 🏥

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.1+-38B2AC.svg)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 📋 Deskripsi

SIP-SJ adalah sistem informasi posyandu yang dirancang khusus untuk monitoring dan pencegahan stunting pada balita di Kelurahan Seputih Jaya, Kecamatan Gunung Sugih. Sistem ini memungkinkan kader dan bidan untuk mengelola data balita, memantau perkembangan, dan mengidentifikasi kasus stunting secara real-time.

## ✨ Fitur Utama

### 🔐 Sistem Autentikasi & Role Management
- **Multi-role**: Kader dan Bidan dengan akses berbeda
- **Lingkungan-based access**: Kader hanya bisa akses data lingkungannya
- **Secure authentication** dengan Laravel Breeze

### 📊 Dashboard & Monitoring
- **Dashboard real-time** dengan statistik stunting per lingkungan
- **Visualisasi data** dengan chart dan grafik
- **Monitoring perkembangan** balita secara berkala

### 👶 Manajemen Data Balita
- **CRUD Data Balita**: Tambah, edit, hapus data balita
- **Detail lengkap**: NIK, alamat, tanggal lahir, jenis kelamin
- **KIA tracking**: Status kepemilikan Kartu Ibu dan Anak

### 📈 Sistem Penilaian Stunting
- **Kategori status**: Sehat, Perlu Perhatian, Stunting, Perlu Diverifikasi
- **Perkembangan tracking**: Record perkembangan balita
- **Alert system**: Notifikasi untuk kasus yang perlu perhatian

### 🏘️ Manajemen Lingkungan
- **5 Lingkungan**: Pembagian wilayah berdasarkan lingkungan
- **Data terorganisir**: Filter dan grouping berdasarkan lingkungan
- **Access control**: Role-based access per lingkungan

## 🛠️ Tech Stack

### Backend
- **Laravel 10.x** - PHP Framework
- **PHP 8.1+** - Programming Language
- **MySQL** - Database
- **Laravel Breeze** - Authentication
- **Laravel Sanctum** - API Authentication

### Frontend
- **Tailwind CSS 3.1+** - CSS Framework
- **Alpine.js** - JavaScript Framework
- **Bootstrap 5.2.3** - UI Components
- **Flowbite** - Tailwind Components
- **Vite** - Build Tool

### Development Tools
- **Laravel Pint** - Code Style
- **Prettier** - Code Formatting
- **PHPUnit** - Testing
- **Laravel Sail** - Development Environment

## 🚀 Instalasi

### Prerequisites
- PHP 8.1 atau lebih tinggi
- Composer
- Node.js & NPM
- MySQL Database

### Setup Project

1. **Clone repository**
```bash
git clone https://github.com/your-username/SIP-SJ.git
cd SIP-SJ
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node.js dependencies**
```bash
npm install
```

4. **Setup environment**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database di `.env`**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sip_sj_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations dan seeders**
```bash
php artisan migrate
php artisan db:seed
```

7. **Build assets**
```bash
npm run build
```

8. **Start development server**
```bash
php artisan serve
```

## 📁 Struktur Database

### Tabel Utama
- **`users`** - Data pengguna (kader/bidan)
- **`data_balita`** - Data balita
- **`data_perkembangan_balita`** - Data perkembangan balita

### Relasi
- User → DataBalita (one-to-many)
- DataBalita → DataPerkembanganBalita (one-to-many)

## 🔧 Konfigurasi Role

### Kader
- Akses terbatas ke lingkungan tertentu
- CRUD data balita di lingkungannya
- Input data perkembangan

### Bidan
- Akses ke semua lingkungan
- Monitoring dan verifikasi data
- Analisis stunting

## 📱 Routes

### Public Routes
- `/` - Homepage

### Protected Routes (Auth Required)
- `/dashboard` - Dashboard utama
- `/list/{lingkungan}` - List balita per lingkungan
- `/detail/{id_balita}` - Detail balita
- `/add/{id_balita}` - Tambah perkembangan
- `/new` - Tambah balita baru
- `/perkembangan-total/edit/{id}` - Edit perkembangan

## 🧪 Testing

```bash
# Run semua tests
php artisan test

# Run specific test
php artisan test --filter BalitaControllerTest
```

## 📦 Deployment

### Production Build
```bash
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets
npm run build
```

### Environment Variables
Pastikan set environment variables berikut di production:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `DB_*` - Database configuration
- `MAIL_*` - Email configuration

## 🤝 Contributing

1. Fork project
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

## 📞 Contact

**Project Link:** [https://github.com/your-username/SIP-SJ](https://github.com/your-username/SIP-SJ)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - PHP Framework
- [Tailwind CSS](https://tailwindcss.com) - CSS Framework
- [Flowbite](https://flowbite.com) - UI Components
- [Alpine.js](https://alpinejs.dev) - JavaScript Framework

---

**Made with ❤️ for Seputih Jaya's children health monitoring**
