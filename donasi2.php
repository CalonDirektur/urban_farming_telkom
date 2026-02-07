<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedekah Bertani | Masjid Nurul Iman</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        mosque: '#166534',
                        sprout: '#22C55E',
                        gold: '#D4AF37',
                        earth: '#4B3621',
                        night: '#0A0A0A'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass-card {
            background: rgba(10, 10, 10, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .islamic-bg {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 0l5 15h15l-12 9 5 15-13-10-13 10 5-15-12-9h15z' fill='%23166534' fill-opacity='0.03'/%3E%3C/svg%3E");
        }
        #particle-glow {
            pointer-events: none;
            position: fixed;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(34, 197, 94, 0.1), transparent 70%);
            border-radius: 50%;
            z-index: 9999;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body class="bg-stone-50 dark:bg-night text-slate-900 dark:text-stone-100 italic islamic-bg transition-colors duration-500">

    <div id="particle-glow" class="hidden md:block"></div>

    <div class="fixed top-6 right-6 z-50">
        <button onclick="toggleTheme()" class="p-4 rounded-2xl glass-card shadow-xl border border-stone-200 dark:border-stone-800">
            <span id="theme-icon">🌙</span>
        </button>
    </div>

    <header class="py-20 px-6 text-center" data-aos="fade-down">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-mosque dark:text-sprout font-serif italic text-2xl mb-2">Bismillahirrohmanirrohim</h2>
            <h1 class="text-5xl md:text-7xl font-black tracking-tighter text-mosque dark:text-white mb-6 uppercase">Waqaf & Sedekah Bertani</h1>
            <p class="text-stone-500 dark:text-stone-400 max-w-2xl mx-auto font-light leading-relaxed">
                Setiap rupiah yang Anda donasikan mendukung pengadaan benih unggul, media tanam, serta operasional keberlanjutan <strong>Urban Farming MTTG</strong> dan kemakmuran <strong>Masjid Nurul Iman Telkom Makassar</strong>.
            </p>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-6 mb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            $pakets = [
                [
                    "nama" => "Bertani 1", 
                    "harga" => "100.000", 
                    "tanaman" => "Selada & Kangkung", 
                    "isi" => ["Benih Selada & Kangkung", "Media Tanam", "Polybag/Pot", "POC", "Sekam Bakar"],
                    "color" => "border-sprout"
                ],
                [
                    "nama" => "Bertani 2", 
                    "harga" => "100.000", 
                    "tanaman" => "Seledri, Kemangi & Kenikir", 
                    "isi" => ["Benih Seledri, Kemangi, Kenikir", "Media Tanam", "Polybag/Pot", "POC", "Nutrisi"],
                    "color" => "border-sprout"
                ],
                [
                    "nama" => "Bertani 3", 
                    "harga" => "150.000", 
                    "tanaman" => "Sawi & Bayam", 
                    "isi" => ["Benih Sawi & Bayam", "Media Tanam", "Polybag/Pot", "Sekam Bakar", "POC"],
                    "color" => "border-gold"
                ],
                [
                    "nama" => "Bertani 4", 
                    "harga" => "150.000", 
                    "tanaman" => "Cabai & Timun", 
                    "isi" => ["Benih Cabai & Timun", "Media Tanam", "Polybag/Pot", "Sekam Bakar", "Nutrisi (NPK)"],
                    "color" => "border-gold"
                ]
            ];

            foreach ($pakets as $index => $p):
            ?>
            <div class="glass-card rounded-[3rem] p-10 flex flex-col hover:shadow-2xl transition-all duration-500 border-t-8 <?= $p['color'] ?>" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="mb-8">
                    <h3 class="font-black text-mosque dark:text-sprout text-xs uppercase tracking-[0.4em] mb-2"><?= $p['nama'] ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-sm font-bold mr-1">Rp</span>
                        <span class="text-4xl font-black text-earth dark:text-white"><?= $p['harga'] ?></span>
                    </div>
                </div>
                
                <div class="flex-grow">
                    <h4 class="font-bold text-xl mb-6 text-mosque dark:text-stone-200 leading-tight"><?= $p['tanaman'] ?></h4>
                    <ul class="space-y-4 text-sm text-stone-500 dark:text-stone-400 mb-10">
                        <?php foreach ($p['isi'] as $item): ?>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-sprout mt-1 mr-3"></i>
                            <span><?= $item ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <a href="https://wa.me/6282271430565?text=Assalamualaikum,%20saya%20ingin%20berdonasi%20paket%20<?= urlencode($p['nama']) ?>" 
                   class="block text-center py-5 bg-mosque hover:bg-night text-white rounded-full font-bold text-sm shadow-lg hover:scale-105 transition-all">
                    Pilih Paket Ini
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 mb-32">
        <div class="bg-white dark:bg-stone-900 rounded-[4rem] shadow-2xl overflow-hidden border border-stone-100 dark:border-stone-800" data-aos="zoom-in">
            <div class="grid md:grid-cols-2">
                <div class="p-16 bg-stone-50 dark:bg-stone-800/50">
                    <h4 class="text-xs font-black text-stone-400 uppercase tracking-widest mb-6">Informasi Rekening</h4>
                    <div class="mb-10">
                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/fa/Bank_Mandiri_logo.svg/1200px-Bank_Mandiri_logo.svg.png" class="h-8 mb-6 dark:invert dark:opacity-80">
                        <p class="text-4xl font-mono font-black text-earth dark:text-white tracking-tighter">1700014543098</p>
                        <p class="text-lg font-bold text-mosque dark:text-sprout mt-2">a/n Fakhriyah Ramadhani</p>
                    </div>
                    <div class="p-4 bg-sprout/10 rounded-2xl flex items-start">
                        <i class="fas fa-info-circle text-sprout mt-1 mr-3"></i>
                        <p class="text-xs text-stone-600 dark:text-stone-400 italic">Donasi mencakup biaya operasional kebun & kemakmuran masjid.</p>
                    </div>
                </div>

                <div class="p-16 flex flex-col justify-center">
                    <h4 class="text-xs font-black text-stone-400 uppercase tracking-widest mb-6">Konfirmasi Sedekah</h4>
                    <p class="text-stone-600 dark:text-stone-400 mb-10 leading-relaxed italic">Mohon kirimkan bukti transfer Anda melalui WhatsApp untuk pencatatan jariyah.</p>
                    
                    <a href="https://wa.me/6282271430565" target="_blank" class="flex items-center justify-center space-x-4 bg-[#25D366] text-white py-6 rounded-full font-bold shadow-xl hover:scale-105 transition-all">
                        <i class="fab fa-whatsapp text-2xl"></i>
                        <div class="text-left">
                            <span class="block text-xs opacity-80 uppercase tracking-widest font-black">Konfirmasi via WA</span>
                            <span class="text-lg">0822 7143 0565</span>
                        </div>
                    </a>
                    <p class="text-center mt-6 text-sm text-stone-400 uppercase font-bold tracking-widest italic">Ibu Fakhriyah Ramadhani</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 text-center px-6">
        <div class="max-w-2xl mx-auto" data-aos="fade-up">
            <i class="fas fa-quote-left text-4xl text-sprout opacity-20 mb-8"></i>
            <p class="text-3xl font-serif italic text-mosque dark:text-stone-300 leading-snug">
                “Perumpamaan orang yang menginfakkan hartanya di jalan Allah seperti sebutir biji yang menumbuhkan tujuh tangkai...”
            </p>
            <p class="mt-6 text-xs uppercase tracking-[0.3em] font-bold text-stone-400 tracking-widest">Surah Al-Baqarah: 261</p>
        </div>
    </section>

    <footer class="py-12 text-center text-[10px] text-stone-400 border-t border-stone-200 dark:border-stone-900 tracking-[0.4em] uppercase">
        © 2026 Urban Farming Experience • Masjid Nurul Iman Telkom Makassar
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Particle Glow Follower
        const glow = document.getElementById('particle-glow');
        document.addEventListener('mousemove', (e) => {
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        });

        // Theme Switcher
        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            document.getElementById('theme-icon').innerText = isDark ? '☀️' : '🌙';
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }

        // Init Theme
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('theme-icon').innerText = '☀️';
        }
    </script>
</body>
</html>