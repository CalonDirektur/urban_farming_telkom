# 🌱 Urban Farming Experience - Masjid Nurul Iman Telkom

[![Maintenance](https://img.shields.com/badge/Maintained%3F-yes-green.svg)](https://github.com/username/urban-farming-mttg/graphs/commit-activity)
[![License: MIT](https://img.shields.com/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Framework: Tailwind](https://img.shields.com/badge/Framework-Tailwind_CSS-blueviolet.svg)](https://tailwindcss.com/)

**Urban Farming Experience** adalah inisiatif digital dari **Gerakan Memakmurkan Masjid (GMM)** di Masjid Nurul Iman Telkom Makassar. Proyek ini mentransformasi sedekah tradisional menjadi pengalaman interaktif berbasis QR Code, menggabungkan edukasi pertanian perkotaan, kesehatan, dan nilai-nilai spiritual Al-Qur'an.

---

## ✨ Fitur Utama

* **High-Fidelity UI/UX:** Desain premium dengan palet warna natural (Mosque Green, Sprout, Gold).
* **Interactive Experience:** * **Cursor Tracking Glow:** Pendaran cahaya hijau yang mengikuti interaksi pengguna.
    * **Parallax Hero:** Latar belakang dinamis yang merespon pergerakan kursor/giroskop.
    * **Stroke Typography System:** Tipografi tajam yang memastikan teks terbaca jelas di atas visual rimbun.
* **Sistem Paket Bertani:** Katalog digital yang terintegrasi dengan program donasi operasional masjid.
* **Spiritual Reflective Sections:** Integrasi ayat-ayat Al-Qur'an (seperti Surah Az-Zumar: 21 dan Yasin: 34) untuk penguatan iman.
* **Hybrid Theme Support:** Dukungan *Dark/Light Mode* yang tersimpan via `localStorage`.

---

## 📦 Paket Sedekah Bertani (MTTG)

Sistem katalog dirancang berdasarkan 4 paket utama sesuai program Urban Farming MTTG:

| Paket | Donasi | Varietas Tanaman |
| :--- | :--- | :--- |
| **Bertani 1** | Rp 100.000 | Selada, Kangkung |
| **Bertani 2** | Rp 100.000 | Seledri, Kemangi, Kenikir |
| **Bertani 3** | Rp 150.000 | Sawi, Bayam |
| **Bertani 4** | Rp 150.000 | Cabai, Timun |

Setiap donasi mencakup benih, media tanam, polybag/pot, nutrisi (POC), dan kontribusi biaya operasional kemakmuran Masjid Nurul Iman.

---

## 🛠️ Teknologi yang Digunakan

* **Core:** PHP 8.x, HTML5, JavaScript (ES6+).
* **Styling:** [Tailwind CSS](https://tailwindcss.com/) (CDN).
* **Animations:** [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/).
* **Iconography:** [Font Awesome 6](https://fontawesome.com/).
* **Typography:** Google Fonts (Inter & Playfair Display).

---

## 📂 Struktur File

```text
.
├── index.php           # Katalog utama & Gerbang QR Experience
├── donasi.php          # Halaman konversi sedekah & informasi rekening
├── anggur.php          # Template khusus varietas Anggur (Lorano, Dixon, dll)
└── assets/             # Direktori gambar dan aset statis
