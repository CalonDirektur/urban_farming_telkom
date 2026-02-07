<?php
$tanaman = [
    // Paket Bertani 1
    ["nama" => "Selada", "file" => "selada.html", "deskripsi" => "Rendah kalori, renyah, dan sangat baik untuk hidrasi.", "icon" => "fas fa-leaf", "paket" => "Bertani 1"],
    ["nama" => "Kangkung", "file" => "kangkung.html", "deskripsi" => "Sayuran hijau yang tangguh dan kaya akan zat besi.", "icon" => "fas fa-leaf", "paket" => "Bertani 1"],
    
    // Paket Bertani 2
    ["nama" => "Seledri", "file" => "seledri.html", "deskripsi" => "Aromatik, membantu kontrol tekanan darah dan pencernaan.", "icon" => "fas fa-heartbeat", "paket" => "Bertani 2"],
    ["nama" => "Kemangi", "file" => "kemangi.html", "deskripsi" => "Aroma khas yang menenangkan dan kaya antioksidan.", "icon" => "fas fa-spa", "paket" => "Bertani 2"],
    ["nama" => "Kenikir", "file" => "kenikir.html", "deskripsi" => "Daun tradisional dengan khasiat antioksidan yang sangat tinggi.", "icon" => "fas fa-seedling", "paket" => "Bertani 2"],
    
    // Paket Bertani 3
    ["nama" => "Sawi", "file" => "sawi.html", "deskripsi" => "Sumber kalsium dan vitamin K yang baik untuk tulang.", "icon" => "fas fa-leaf", "paket" => "Bertani 3"],
    ["nama" => "Bayam", "file" => "bayam.html", "deskripsi" => "Energi alami dari zat besi untuk vitalitas tubuh.", "icon" => "fas fa-bolt", "paket" => "Bertani 3"],
    
    // Paket Bertani 4
    ["nama" => "Cabe", "file" => "cabe.html", "deskripsi" => "Pedas menggugah selera dan kaya akan Vitamin C.", "icon" => "fas fa-pepper-hot", "paket" => "Bertani 4"],
    ["nama" => "Timun", "file" => "bonte.html", "deskripsi" => "Sangat menyegarkan dengan kadar air lebih dari 90%.", "icon" => "fas fa-faucet-drip", "paket" => "Bertani 4"]
];
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Urban Farming Experience | Masjid Nurul Iman</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            mosque: "#166534",
            leaf: "#166534",
            sprout: "#22C55E",
            gold: "#D4AF37",
            night: "#0A0A0A"
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
    /* Stroke & Contrast System */
.hero-title-contrast {
    /* Stroke Hitam Tegas */
    -webkit-text-stroke: 2px #000000;
    paint-order: stroke fill;
    
    /* Shadow Berlapis untuk Kedalaman (Depth) */
    text-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.8),
        0 4px 8px rgba(0, 0, 0, 0.5);
    
    letter-spacing: -0.02em;
}

.hero-subtitle-contrast {
    -webkit-text-stroke: 1px rgba(0, 0, 0, 0.6);
    paint-order: stroke fill;
    text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
}

.hero-p-contrast {
    /* Stroke halus untuk teks panjang agar tidak pecah */
    -webkit-text-stroke: 0.5px rgba(0, 0, 0, 0.8);
    paint-order: stroke fill;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
}

/* Opsional: Tambahkan sedikit blur pada overlay untuk meningkatkan fokus teks */
.hero-gradient {
    backdrop-filter: blur(1px);
}
    .glass {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(15px);
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .hero-title {
      -webkit-text-stroke: 1.5px white;
      paint-order: stroke fill;
      text-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    #particle-glow {
      pointer-events: none;
      position: fixed;
      width: 250px; height: 250px;
      background: radial-gradient(circle, rgba(34, 197, 94, 0.15) 0%, transparent 70%);
      border-radius: 50%;
      z-index: 9999;
      transform: translate(-50%, -50%);
    }

    .islamic-pattern {
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 0l5 15h15l-12 9 5 15-13-10-13 10 5-15-12-9h15z' fill='%23166534' fill-opacity='0.03'/%3E%3C/svg%3E");
    }

    .hero-parallax {
      transition: transform 0.2s cubic-bezier(0.1, 0, 0.2, 1);
    }
  </style>
</head>

<body class="bg-stone-50 text-stone-900 font-sans islamic-pattern overflow-x-hidden">

<div id="particle-glow" class="hidden md:block"></div>

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
            <a href="donasi.php" 
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
    <img src="https://images.unsplash.com/photo-1530633173744-8581b6a982c2?auto=format&fit=crop&q=80&w=2000" 
         id="hero-bg" 
         class="w-full h-full object-cover scale-110 hero-parallax" 
         alt="Urban Farm Background">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-mosque/50 to-stone-50"></div>
  </div>

  <div class="relative z-10 text-center px-6" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="text-gold font-serif italic text-2xl md:text-3xl mb-4 drop-shadow-md">Tanam Kebaikan, Panen Keberkahan</h2>
    <h1 class="hero-title text-5xl md:text-8xl font-black text-white leading-none tracking-tighter mb-6">
        URBAN <br> <span class="text-sprout italic">FARMING</span> <br> EXPERIENCE
    </h1>
    <p class="text-white text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed drop-shadow-lg">
        Menumbuhkan kesadaran ekologi melalui semangat <span class="italic font-semibold">Memakmurkan Masjid</span> di Nurul Iman Telkom Makassar.
    </p>
    <div class="mt-12 flex justify-center space-x-4">
        <a href="#katalog" class="p-4 rounded-full border border-white/30 text-white hover:bg-white/10 transition-all">
          <i class="fas fa-chevron-down animate-bounce"></i>
        </a>
    </div>
  </div>
</section> -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1530633173744-8581b6a982c2?auto=format&fit=crop&q=80&w=2000" 
         id="hero-bg" 
         class="w-full h-full object-cover scale-110 hero-parallax" 
         alt="Urban Farm Background">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-mosque/40 to-stone-50 hero-gradient"></div>
  </div>

  <div class="relative z-10 text-center px-6" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="text-gold font-serif italic text-2xl md:text-3xl mb-4 hero-subtitle-contrast">
        Tanam Kebaikan, Panen Keberkahan
    </h2>

    <h1 class="hero-title-contrast text-5xl md:text-8xl font-black text-white leading-none tracking-tighter mb-6">
        URBAN <br> <span class="text-sprout italic">FARMING</span> <br> EXPERIENCE
    </h1>

    <p class="text-white text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed hero-p-contrast">
        Menumbuhkan kesadaran ekologi melalui semangat <span class="italic font-semibold">Memakmurkan Masjid</span> di Nurul Iman Telkom Makassar.
    </p>

    <div class="mt-12 flex justify-center space-x-4">
        <a href="#katalog" class="p-4 rounded-full border border-white/30 text-white hover:bg-white/10 transition-all shadow-lg">
          <i class="fas fa-chevron-down animate-bounce"></i>
        </a>
    </div>
  </div>
</section>

<section id="katalog" class="py-32 px-6 max-w-7xl mx-auto">
  <div class="text-center mb-20" data-aos="fade-up">
    <h3 class="text-mosque font-serif text-3xl italic mb-2">Eksplorasi Hayati</h3>
    <h4 class="text-5xl font-black tracking-tighter text-stone-800 uppercase">Katalog Tanaman MTTG</h4>
    <div class="w-24 h-1 bg-gold mx-auto mt-6 rounded-full"></div>
  </div>

  <?php
  $pakets = ["Bertani 1", "Bertani 2", "Bertani 3", "Bertani 4"];
  foreach ($pakets as $p):
  ?>
    <div class="mb-24">
      <div class="flex items-center space-x-4 mb-10" data-aos="fade-right">
        <span class="bg-mosque text-white px-4 py-1 rounded-lg font-bold text-sm tracking-widest uppercase"><?= $p ?></span>
        <div class="h-px flex-grow bg-stone-200"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php foreach ($tanaman as $item): ?>
          <?php if ($item['paket'] == $p): ?>
            <a href="<?= $item['file']; ?>" 
               class="group relative p-10 bg-white rounded-[3rem] border border-stone-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3"
               data-aos="fade-up">
              
              <div class="w-16 h-16 mb-8 rounded-2xl bg-stone-50 text-mosque flex items-center justify-center group-hover:bg-mosque group-hover:text-white transition-all duration-500 shadow-inner">
                <i class="<?= $item['icon']; ?> text-3xl"></i>
              </div>

              <h3 class="text-3xl font-serif italic font-bold mb-4 text-stone-800">
                <?= $item['nama']; ?>
              </h3>

              <p class="text-stone-500 leading-relaxed font-light mb-8">
                <?= $item['deskripsi']; ?>
              </p>

              <div class="flex items-center text-mosque font-bold text-sm tracking-widest uppercase group-hover:text-sprout transition-colors">
                Pelajari Detail <i class="fas fa-arrow-right ml-3 text-xs group-hover:translate-x-2 transition-transform"></i>
              </div>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<section class="py-32 bg-mosque text-white relative overflow-hidden text-center">
    <div class="absolute inset-0 opacity-10 islamic-pattern"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-6" data-aos="zoom-in">
        <h2 class="text-sprout font-serif text-3xl italic mb-8">Ayat-Ayat Semesta</h2>
        <p class="text-3xl md:text-5xl leading-tight font-light mb-10 italic">
            “Tidakkah kamu memperhatikan bahwa Allah menurunkan air dari langit, lalu Kami tumbuhkan dengan air itu berbagai macam tumbuh-tumbuhan di bumi.”
        </p>
        <div class="h-[1px] w-24 bg-gold mx-auto mb-6"></div>
        <p class="font-bold tracking-widest text-gold uppercase text-sm">QS. Az-Zumar: 21</p>
    </div>
</section>

<section class="py-32 px-6 text-center">
  <div class="max-w-5xl mx-auto bg-stone-100 rounded-[4rem] p-16 md:p-32 relative overflow-hidden border border-stone-200 shadow-2xl">
    <div class="relative z-10" data-aos="fade-up">
      <h2 class="text-5xl md:text-7xl font-black leading-none tracking-tighter text-mosque mb-8">
          HIJAUKAN MASJID.<br>RAWAT BUMI.<br>TEBAR MANFAAT.
      </h2>
      <p class="text-xl text-stone-500 max-w-2xl mx-auto font-light mb-12 italic">
          Mari beramal jariyah melalui paket sedekah bertani MTTG untuk keberlanjutan ekosistem masjid.
      </p>
      <a href="donasi.php" class="px-14 py-6 bg-mosque text-white rounded-full font-bold text-lg hover:bg-night transition-all shadow-2xl hover:scale-105 inline-block">
          Ayo Beramal Jariyah Sekarang <i class="fas fa-arrow-right ml-2 text-sprout"></i>
      </a>
    </div>
  </div>
</section>

<footer class="py-16 text-center bg-stone-50 border-t border-stone-200">
  <div class="max-w-7xl mx-auto px-6">
    <!-- <div class="flex flex-col md:flex-row justify-between items-center gap-8 mb-12">
      <span class="font-black text-mosque text-3xl tracking-tighter italic">MTTG</span>
      <div class="flex space-x-8 text-stone-400 text-xl">
        <a href="#" class="hover:text-mosque"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-mosque"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="hover:text-mosque"><i class="fab fa-youtube"></i></a>
      </div>
    </div> -->
    <p class="text-[10px] uppercase tracking-[0.5em] text-stone-400 font-bold">
      © 2026 Urban Farming Experience • Masjid Nurul Iman Telkom Makassar
    </p>
  </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    const glow = document.getElementById('particle-glow');
    const heroBg = document.getElementById('hero-bg');

    document.addEventListener('mousemove', e => {
        // Cursor Glow
        glow.style.left = e.clientX + 'px';
        glow.style.top = e.clientY + 'px';

        // Hero Parallax
        const x = (window.innerWidth / 2 - e.pageX) / 45;
        const y = (window.innerHeight / 2 - e.pageY) / 45;
        heroBg.style.transform = `scale(1.1) translate(${x}px, ${y}px)`;
    });
</script>

</body>
</html>