<?php
$varietas = [

    "lorano" => [
        "nama" => "Lorano",
        "tagline" => "Anggur Ungu Tahan Jamur dengan Tampilan Premium",
        "asal" => "Ukraina",
        "warna" => "Merah keunguan hingga ungu tua kebiruan",
        "rasa" => "Manis dengan asam rendah",
        "ukuran" => "Besar dengan bentuk lonjong",
        "karakteristik" => "Berbiji, tampilan menarik, tahan jamur, tidak mudah pecah.",
        "gambar" => "anggur/lorano.png",
        "accent" => "from-purple-900/80 to-indigo-900/90"
    ],

    "arra15" => [
        "nama" => "Arra 15",
        "tagline" => "Anggur Hijau Tanpa Biji Favorit Pasar Premium",
        "asal" => "Israel",
        "warna" => "Hijau pucat berlilin (waxy)",
        "rasa" => "Manis dengan sedikit asam",
        "ukuran" => "Sedang hingga besar",
        "karakteristik" => "Tanpa biji, renyah, lonjong, tahan pecah.",
        "gambar" => "anggur/arra15.png",
        "accent" => "from-lime-800/80 to-emerald-900/90"
    ],

    "dixon" => [
        "nama" => "Dixon",
        "tagline" => "Produksi Cepat dan Stabil untuk Budidaya Tropis",
        "asal" => "Ukraina",
        "warna" => "Kuning kemerahan",
        "rasa" => "Manis dominan",
        "ukuran" => "Besar",
        "karakteristik" => "Berbiji, mudah berbuah, pertumbuhan cepat, relatif tahan pecah.",
        "gambar" => "anggur/dixon.png",
        "accent" => "from-red-900/80 to-amber-900/90"
    ],

    "baikonur" => [
        "nama" => "Baikonur",
        "tagline" => "Anggur Ungu Gelap dengan Tekstur Renyah",
        "asal" => "Rusia",
        "warna" => "Ungu tua hampir hitam",
        "rasa" => "Manis kuat",
        "ukuran" => "Besar, lonjong",
        "karakteristik" => "Berbiji, renyah, mudah berbuah, tidak mudah busuk setelah matang.",
        "gambar" => "anggur/baikonur.png",
        "accent" => "from-slate-900/80 to-purple-950/90"
    ],

    "cherny_crystal" => [
        "nama" => "Cherny Crystal",
        "tagline" => "Hitam Legam dengan Kulit Kuat dan Daging Padat",
        "asal" => "Rusia",
        "warna" => "Hitam gelap",
        "rasa" => "Manis legit, asam seimbang",
        "ukuran" => "Kecil hingga sedang",
        "karakteristik" => "Biji lunak, crunchy, pertumbuhan cepat, kulit kuat.",
        "gambar" => "anggur/cherny_crystal.png",
        "accent" => "from-neutral-900/80 to-zinc-950/90"
    ],

    "ilaria" => [
        "nama" => "Ilaria",
        "tagline" => "Adaptif Tropis dengan Kulit Sangat Tipis",
        "asal" => "Ukraina",
        "warna" => "Hijau muda mengkilap",
        "rasa" => "Manis tinggi tanpa asam",
        "ukuran" => "Besar, lonjong/oval",
        "karakteristik" => "Berbiji, mudah berbuah di iklim tropis, kulit sangat tipis.",
        "gambar" => "anggur/ilaria.png",
        "accent" => "from-green-700/80 to-emerald-900/90"
    ],

    "natali" => [
        "nama" => "Natali",
        "tagline" => "Stabil dan Aman untuk Budidaya Tropis",
        "asal" => "Ukraina",
        "warna" => "Kuning keemasan",
        "rasa" => "Manis segar",
        "ukuran" => "Sedang",
        "karakteristik" => "Berbiji, stabil di tropis, cukup toleran jamur.",
        "gambar" => "anggur/natali.png",
        "accent" => "from-yellow-700/80 to-amber-900/90"
    ],

    "dubovski_pink" => [
        "nama" => "Dubovski Pink",
        "tagline" => "Visual Pink Cerah dengan Tandan Besar",
        "asal" => "Ukraina",
        "warna" => "Pink cerah",
        "rasa" => "Sangat manis",
        "ukuran" => "Besar",
        "karakteristik" => "Berbiji, adaptasi baik, tandan besar, visual menarik.",
        "gambar" => "anggur/dubovski_pink.png",
        "accent" => "from-pink-700/80 to-rose-900/90"
    ],

    "coklat" => [
        "nama" => "Coklat",
        "tagline" => "Maroon Gelap dengan Rasa Maksimal Saat Matang Sempurna",
        "asal" => "Ukraina",
        "warna" => "Merah maroon gelap kecokelatan",
        "rasa" => "Manis tinggi",
        "ukuran" => "Besar dan padat",
        "karakteristik" => "Rasa maksimal saat warna gelap sempurna.",
        "gambar" => "anggur/coklat.png",
        "accent" => "from-amber-900/80 to-brown-950/90"
    ],

    "early_adora" => [
        "nama" => "Early Adora",
        "tagline" => "Tanpa Biji, Matang Lebih Awal di Iklim Tropis",
        "asal" => "Israel",
        "warna" => "Merah keunguan",
        "rasa" => "Manis",
        "ukuran" => "Sedang",
        "karakteristik" => "Tanpa biji, mudah berbuah, matang awal, kulit kuat.",
        "gambar" => "anggur/early_adora.png",
        "accent" => "from-rose-900/80 to-red-950/90"
    ]

];


$key = null;
if (!empty($_GET)) $key = strtolower(array_key_first($_GET));
if (isset($_GET['v'])) $key = strtolower($_GET['v']);

if (!$key || !isset($varietas[$key])) $key = array_key_first($varietas);
$data = $varietas[$key];
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['nama'] ?> | Premium Urban Farming</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        leaf: "#1A3C15",
                        sprout: "#76BA1B",
                        gold: "#D4AF37"
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
        .hero-title {
            font-weight: 900;
            letter-spacing: -0.02em;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
            text-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        #light-trail {
            pointer-events: none;
            position: fixed;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(118,186,27,0.08), transparent 70%);
            border-radius: 50%;
            z-index: 9999;
            transform: translate(-50%, -50%);
        }
        .parallax-bg {
            transition: transform 0.1s ease-out;
        }
    </style>
</head>

<body class="bg-stone-50 dark:bg-stone-950 text-slate-900 dark:text-stone-100 transition-colors">

    <div id="light-trail" class="hidden md:block"></div>

    <div class="fixed top-6 right-6 z-50">
        <button onclick="toggleTheme()" class="p-4 rounded-2xl glass shadow-xl border border-white/20">
            <span id="theme-icon" class="text-xl">🌙</span>
        </button>
    </div>

    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <img src="<?= $data['gambar'] ?>" id="hero-bg" class="absolute inset-0 w-full h-full object-cover scale-110 parallax-bg">
        <div class="absolute inset-0 bg-gradient-to-b <?= $data['accent'] ?> via-black/40 to-stone-50 dark:to-stone-950"></div>

        <div class="relative z-10 text-center px-6" data-aos="zoom-out" data-aos-duration="1500">
            <span class="inline-block px-4 py-1 border border-sprout/50 rounded-full text-sprout text-sm tracking-widest uppercase mb-4 glass">Premium Variety</span>
            <h1 class="hero-title text-7xl md:text-[10rem] italic font-serif text-white leading-none">
                <?= strtoupper($data['nama']) ?>
            </h1>
            <p class="text-xl md:text-2xl mt-8 text-stone-200 max-w-3xl mx-auto font-light leading-relaxed">
                <?= $data['tagline'] ?>
            </p>
            <div class="mt-12 animate-bounce opacity-50">
                <i class="fas fa-chevron-down text-2xl"></i>
            </div>
        </div>
    </section>

    <section class="relative py-24 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative" data-aos="fade-right">
                <div class="absolute -inset-4 bg-sprout/20 blur-3xl rounded-full"></div>
                <img src="<?= $data['gambar'] ?>" class="relative rounded-[3rem] shadow-2xl border border-white/10">
            </div>
            
            <div class="space-y-8" data-aos="fade-left">
                <div>
                    <h2 class="text-sprout font-bold tracking-widest uppercase text-sm mb-2">Anatomi Varietas</h2>
                    <h3 class="text-5xl font-serif italic mb-6">Detail Karakteristik</h3>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <?php 
                    $details = [
                        ["Asal", $data['asal'], "fa-earth-asia"],
                        ["Warna", $data['warna'], "fa-palette"],
                        ["Rasa", $data['rasa'], "fa-utensils"],
                        ["Ukuran", $data['ukuran'], "fa-ruler-combined"]
                    ];
                    foreach($details as $d):
                    ?>
                    <div class="p-6 rounded-3xl glass shadow-sm border border-stone-200 dark:border-stone-800">
                        <i class="fas <?= $d[2] ?> text-sprout mb-3"></i>
                        <p class="text-xs opacity-60 uppercase tracking-tighter"><?= $d[0] ?></p>
                        <p class="font-bold mt-1 leading-tight"><?= $d[1] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="p-8 rounded-3xl bg-leaf text-white shadow-xl">
                    <p class="text-sm opacity-70 mb-2 uppercase tracking-widest font-bold text-sprout">Catatan Budidaya</p>
                    <p class="text-lg italic leading-relaxed">"<?= $data['karakteristik'] ?>"</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 relative overflow-hidden text-center bg-stone-900 text-white italic">
        <div class="absolute inset-0 opacity-10 islamic-pattern"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-6">
            <p class="text-sprout mb-6 tracking-widest uppercase font-bold text-sm">Renungan dari Langit</p>
            <h2 class="text-3xl md:text-5xl font-serif mb-10 leading-snug">
                وَجَعَلْنَا فِيهَا جَنَّاتٍ مِّن نَّخِيلٍ وَأَعْنَابٍ
            </h2>
            <p class="text-2xl md:text-3xl font-light text-stone-300 italic">
                “Dan Kami jadikan padanya di bumi kebun-kebun kurma dan anggur...”
            </p>
            <div class="h-px w-24 bg-sprout/50 mx-auto mt-8 mb-4"></div>
            <p class="text-sm opacity-60 font-sans tracking-widest uppercase">Surah Yasin : 34</p>
        </div>
    </section>

    <section class="py-32 bg-stone-50 dark:bg-stone-950">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-serif italic text-center mb-16">Kebaikan Di Setiap Butir</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-10">
                <?php
                $manfaat = [
                    ["fa-heart","Kesehatan Jantung"],
                    ["fa-brain","Nutrisi Otak"],
                    ["fa-seedling","Pencernaan"],
                    ["fa-bolt","Antioksidan"],
                    ["fa-shield-alt","Imunitas"],
                    ["fa-feather","Diet Sehat"]
                ];
                foreach($manfaat as $m):
                ?>
                <div class="p-8 rounded-[2rem] glass dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center hover:scale-105 transition-transform group">
                    <div class="w-16 h-16 bg-leaf text-sprout rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-sprout group-hover:text-white transition-colors">
                        <i class="fas <?= $m[0] ?> text-2xl"></i>
                    </div>
                    <p class="font-bold tracking-tight uppercase text-xs"><?= $m[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-32 text-center relative">
        <div class="absolute inset-0 -z-10 bg-leaf/5"></div>
        <h2 class="text-5xl md:text-7xl font-black leading-[0.9] tracking-tighter mb-8">
            HIJAUKAN MASJID.<br>
            <span class="text-sprout">RAWAT BUMI.</span><br>
            TEBAR MANFAAT.
        </h2>
        <p class="text-stone-500 max-w-xl mx-auto mb-12 italic">Dari satu bibit, mengalir ribuan kebaikan untuk ummat dan alam.</p>
       <a href="donasi.php" class="inline-block">
    <button class="px-14 py-6 bg-leaf text-white rounded-full font-bold text-lg hover:bg-night transition-all shadow-2xl hover:scale-105">
        Ayo Beramal Jariyah Sekarang <i class="fas fa-arrow-right ml-2 text-sprout"></i>
    </button>
        </a>
    </section>

    <footer class="py-12 text-center text-xs text-stone-400 border-t border-stone-200 dark:border-stone-900 tracking-[0.3em] uppercase">
        © 2026 Urban Farming Experience • Makassar Digital Garden
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Cursor Light Follower
        const light = document.getElementById("light-trail");
        const heroBg = document.getElementById("hero-bg");

        document.addEventListener("mousemove", e => {
            // Light trail
            light.style.left = e.clientX + "px";
            light.style.top = e.clientY + "px";

            // Parallax Hero
            const x = (window.innerWidth / 2 - e.pageX) / 50;
            const y = (window.innerHeight / 2 - e.pageY) / 50;
            heroBg.style.transform = `scale(1.1) translate(${x}px, ${y}px)`;
        });

        // Theme Switcher
        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle("dark");
            const isDark = html.classList.contains("dark");
            document.getElementById("theme-icon").innerText = isDark ? "☀️" : "🌙";
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }

        // Persistent Theme
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            document.getElementById("theme-icon").innerText = "☀️";
        }
    </script>
</body>
</html>