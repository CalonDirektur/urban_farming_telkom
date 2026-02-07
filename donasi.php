<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedekah Bertani | Masjid Nurul Iman</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        mosque: '#166534',
                        gold: '#D4AF37',
                        sprout: '#22C55E',
                        earth: '#4B3621'
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
        /* Stroke System untuk Hero Section */
.hero-stroke-gold {
    -webkit-text-stroke: 1px rgba(0, 0, 0, 0.5); /* Stroke tipis untuk h2 */
    paint-order: stroke fill;
}

.hero-stroke-main {
    -webkit-text-stroke: 2px #000; /* Stroke tegas untuk judul utama */
    paint-order: stroke fill;
    text-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.hero-stroke-p {
    -webkit-text-stroke: 0.5px rgba(0, 0, 0, 0.8); /* Stroke sangat tipis untuk paragraf */
    paint-order: stroke fill;
}

/* Penyesuaian agar stroke tidak menutupi warna asli saat di mode gelap */
html.dark .hero-stroke-main {
    -webkit-text-stroke: 1px rgba(255, 255, 255, 0.2);
}

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(22, 101, 52, 0.9));
        }
        .islamic-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 0l5 15h15l-12 9 5 15-13-10-13 10 5-15-12-9h15z' fill='%23166534' fill-opacity='0.03'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-stone-50 text-slate-900 font-sans islamic-pattern">

    <!-- <nav class="fixed top-0 w-full z-50 glass py-4 px-6 border-b border-stone-200">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4 overflow-x-auto">
                <span class="font-black text-mosque tracking-tighter text-xl">MTTG</span>
                <div class="h-6 w-px bg-stone-300"></div>
                <span class="text-xs uppercase font-bold tracking-widest text-stone-500 whitespace-nowrap">Masjid Nurul Iman</span>
            </div>
            <a href="#donasi" class="bg-mosque text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-sprout transition-all">
                Donasi Sekarang
            </a>
        </div>
    </nav> -->
    <nav class="fixed top-0 w-full z-50 glass py-4 px-6">
    <div class="max-w-7xl mx-auto flex justify-between items-center">

        <!-- BRAND -->
        <div class="flex items-center space-x-4">
            <a href="index.php" 
               class="font-black text-mosque tracking-tighter text-2xl italic 
                      hover:opacity-80 transition 
                      focus:outline-none focus:ring-2 focus:ring-mosque/40">
                MTTG
            </a>

            <div class="h-6 w-px bg-stone-300"></div>

            <div class="hidden sm:block">
                <span class="text-[10px] uppercase font-bold tracking-[0.2em] text-stone-500 block leading-none">
                    Urban Farming
                </span>
                <span class="text-xs font-bold text-mosque uppercase">
                    Masjid Nurul Iman
                </span>
            </div>
        </div>

        <!-- CTA -->
        <div class="flex items-center space-x-6">
            <a href="#donasi" 
               class="bg-mosque text-white px-6 py-2.5 rounded-full text-sm font-bold 
                      hover:bg-sprout hover:scale-105 transition-all 
                      shadow-lg shadow-mosque/20">
                Donasi Sekarang
            </a>
        </div>

    </div>
</nav>


    <!-- <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1591857177580-dc82b9ac4e17?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <div class="relative z-10 text-center px-6" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="text-gold font-serif italic text-2xl md:text-3xl mb-4">Tanam Kebaikan, Panen Keberkahan</h2>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-none tracking-tighter mb-6">
                GERAKAN <br> <span class="text-sprout">MEMAKMURKAN</span> <br> MASJID
            </h1>
            <p class="text-stone-200 text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed">
                Transformasi sedekah melalui program Urban Farming untuk kemakmuran Masjid Nurul Iman Telkom Makassar.
            </p>
            <div class="mt-12">
                <i class="fas fa-chevron-down text-white text-2xl animate-bounce"></i>
            </div>
        </div>
    </section> -->

    <section class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="anggur/masjid.jpg" class="w-full h-full object-cover">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <div class="relative z-10 text-center px-6" data-aos="fade-up" data-aos-duration="1500">
        <h2 class="text-gold font-serif italic text-2xl md:text-3xl mb-4 hero-stroke-gold">
            Tanam Kebaikan, Panen Keberkahan
        </h2>

        <h1 class="text-5xl md:text-8xl font-black text-white leading-none tracking-tighter mb-6 hero-stroke-main">
            GERAKAN <br> <span class="text-sprout">MEMAKMURKAN</span> <br> MASJID
        </h1>

        <p class="text-stone-200 text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed hero-stroke-p">
            Transformasi sedekah melalui program Urban Farming untuk kemakmuran Masjid Nurul Iman Telkom Makassar.
        </p>

        <div class="mt-12">
            <i class="fas fa-chevron-down text-white text-2xl animate-bounce"></i>
        </div>
    </div>
</section>

    <section class="py-24 px-6 max-w-4xl mx-auto text-center">
        <div data-aos="fade-up">
            <i class="fas fa-mosque text-mosque text-4xl mb-6"></i>
            <h3 class="font-serif text-3xl italic mb-6 text-mosque">Sedekah Bertani</h3>
            <p class="text-xl text-stone-600 leading-relaxed italic">
                “Mari bersedekah memakmurkan masjid melalui kegiatan bertanam di lingkungan masjid. Setiap helai daun yang tumbuh menjadi saksi kebaikan Anda di hadapan Sang Pencipta.”
            </p>
        </div>
    </section>

    <section id="donasi" class="py-24 px-6 bg-stone-100">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-sm uppercase tracking-[0.4em] text-stone-500 font-bold mb-2">Pilihan Paket</h2>
                <h3 class="text-4xl font-black text-mosque">Paket Sedekah Bertani</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-stone-200 hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex justify-between items-start mb-6">
                        <span class="bg-sprout/10 text-sprout px-4 py-1 rounded-full text-xs font-bold uppercase">Bertani 1</span>
                        <span class="text-2xl font-black text-mosque">100K</span>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Selada & Kangkung</h4>
                    <ul class="text-sm space-y-3 text-stone-500 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Media Tanam</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Polybag / Pot</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> POC</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Sekam Bakar</li>
                    </ul>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-stone-200 hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-between items-start mb-6">
                        <span class="bg-sprout/10 text-sprout px-4 py-1 rounded-full text-xs font-bold uppercase">Bertani 2</span>
                        <span class="text-2xl font-black text-mosque">100K</span>
                    </div>
                    <h4 class="text-xl font-bold mb-4 leading-tight">Seledri, Kemangi & Kenikir</h4>
                    <ul class="text-sm space-y-3 text-stone-500 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Media Tanam</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Polybag / Pot</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> POC</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Nutrisi</li>
                    </ul>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-stone-200 hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex justify-between items-start mb-6">
                        <span class="bg-gold/10 text-gold px-4 py-1 rounded-full text-xs font-bold uppercase">Bertani 3</span>
                        <span class="text-2xl font-black text-mosque">150K</span>
                    </div>
                    <h4 class="text-xl font-bold mb-4 leading-tight">Sawi & Bayam</h4>
                    <ul class="text-sm space-y-3 text-stone-500 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Media Tanam</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Polybag / Pot</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Sekam Bakar</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> POC</li>
                    </ul>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-stone-200 hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex justify-between items-start mb-6">
                        <span class="bg-gold/10 text-gold px-4 py-1 rounded-full text-xs font-bold uppercase">Bertani 4</span>
                        <span class="text-2xl font-black text-mosque">150K</span>
                    </div>
                    <h4 class="text-xl font-bold mb-4 leading-tight">Cabai & Timun</h4>
                    <ul class="text-sm space-y-3 text-stone-500 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Media Tanam</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Polybag / Pot</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Sekam Bakar</li>
                        <li class="flex items-center"><i class="fas fa-check text-sprout mr-2"></i> Nutrisi (NPK)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 bg-mosque text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 islamic-pattern"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10" data-aos="zoom-in">
            <h3 class="text-3xl font-serif italic mb-6">Mengapa Berdonasi?</h3>
            <p class="text-xl font-light leading-relaxed mb-8 text-stone-200">
                Setiap donasi yang Anda berikan tidak hanya menyediakan benih dan paket tanam, tetapi juga berkontribusi langsung pada biaya operasional <strong>Urban Farming MTTG</strong> dan mendukung program kemakmuran <strong>Masjid Nurul Iman Telkom Makassar</strong>. 
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4 text-sm font-bold tracking-widest uppercase">
                <span class="border border-white/20 px-6 py-3 rounded-full italic">#UrbanFarmingMTTG</span>
                <span class="border border-white/20 px-6 py-3 rounded-full italic">#MasjidNurulImanTelkom</span>
            </div>
        </div>
    </section>

    <section class="py-24 px-6">
        <div class="max-w-4xl mx-auto bg-white rounded-[3rem] shadow-2xl overflow-hidden flex flex-col md:flex-row" data-aos="fade-up">
            <div class="md:w-1/2 p-12 bg-stone-50 flex flex-col justify-center">
                <h4 class="text-sm font-bold text-stone-400 uppercase tracking-widest mb-4">Informasi Rekening</h4>
                <div class="mb-8">
                    <p class="text-mosque font-black text-2xl">Bank Mandiri</p>
                    <p class="text-4xl font-mono text-earth mt-2">1700014543098</p>
                    <p class="text-lg mt-1 font-semibold">a/n Fakhriyah Ramadhani</p>
                </div>
                <div class="p-4 bg-sprout/10 rounded-2xl flex items-start space-x-3">
                    <i class="fas fa-info-circle text-sprout mt-1"></i>
                    <p class="text-xs text-stone-600">Mohon sertakan kode unik paket atau keterangan saat transfer untuk memudahkan verifikasi.</p>
                </div>
            </div>

            <div class="md:w-1/2 p-12 bg-white flex flex-col justify-center border-l border-stone-100">
                <h4 class="text-sm font-bold text-stone-400 uppercase tracking-widest mb-4">Konfirmasi Sedekah</h4>
                <p class="text-stone-600 mb-8 leading-relaxed">Setelah melakukan transfer, mohon kirimkan bukti sedekah Anda melalui WhatsApp kepada pengelola kami.</p>
                <a href="https://wa.me/6282271430565" target="_blank" class="flex items-center justify-center space-x-3 bg-[#25D366] text-white py-4 rounded-full font-bold shadow-lg hover:scale-105 transition-all">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    <span>Kirim Bukti via WhatsApp</span>
                </a>
                <p class="text-center mt-4 text-sm font-semibold text-stone-500">Ibu Fakhriyah Ramadhani</p>
            </div>
        </div>
    </section>

    <footer class="py-16 px-6 bg-stone-50 border-t border-stone-200">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-xs uppercase tracking-[0.4em] font-bold text-stone-400 mb-10 italic">Didukung Oleh</p>
            <div class="flex flex-wrap justify-center items-center gap-12 grayscale opacity-60">
                <span class="font-bold text-xl">Danantara Indonesia</span>
                <!-- <span class="font-bold text-xl tracking-tighter">BiSA</span> -->
                <span class="font-bold text-xl">MTTG</span>
                <span class="font-bold text-xl">Telkom Property</span>
                <span class="font-bold text-xl">Telkom Indonesia</span>
            </div>
            <div class="mt-20 text-stone-400 text-xs tracking-widest uppercase italic">
                &copy; 2026 Urban Farming Experience • Masjid Nurul Iman Makassar
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000
        });
    </script>
</body>
</html>