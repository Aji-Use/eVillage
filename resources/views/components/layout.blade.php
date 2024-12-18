<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eVillage</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    {{-- cdn swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{--  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Tambahkan efek animasi pada bar */
        .progress-bar {
            /* Durasi animasi 1 detik */
            transition: width 1s ease-in-out;
        }
    </style>

</head>

<body class="h-full w-full bg-white">
    {{-- script AOS --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000, // Durasi animasi (ms)
                once: true, // Animasi berjalan hanya sekali
            });
        });
    </script>


    <div class="min-h-full">

        <x-header>
            {{-- {{ $title }} --}}
        </x-header>

        <main>
            {{ $slot }}
        </main>

        <x-footer></x-footer>
    </div>


    {{-- script js --}}
    <script>
        // Toggle Menu Visibility
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            // direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>

    {{-- Bar Persentase --}}
    <script>
        // Data persentase profesi
        const data = [{
                profession: "Karyawan Swasta",
                percentage: 50,
                maxPercen: 100
            },
            {
                profession: "Pegawai Negeri",
                percentage: 10,
                maxPercen: 100
            },
            {
                profession: "Petani",
                percentage: 40,
                maxPercen: 100
            }
        ];

        // Fungsi untuk membuat bar persentase
        function renderBars(data) {
            const container = document.getElementById('profession-bars');
            container.innerHTML = ''; // Bersihkan kontainer sebelum render ulang

            data.forEach(item => {
                const bar = document.createElement('div');
                bar.classList.add('space-y-1', 'profession-bar');

                bar.innerHTML = `
          <div class="flex justify-between text-sm font-medium">
            <span>${item.profession}</span>
            <span>${item.maxPercen}%</span>
          </div>
          <div class="w-full bg-gray-200 rounded">
            <div class="progress-bar bg-blue-500 text-xs font-medium text-white text-center p-1 leading-none rounded " style="width: 0;">
              ${item.percentage}%
            </div>
          </div>
        `;
                container.appendChild(bar);
            });
        }

        //  Fungsi untuk memulai animasi bar saat terlihat
        function startAnimation(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target.querySelector('.progress-bar');
                    const percentage = bar.textContent.replace('%', '').trim();
                    bar.style.width = `${percentage}%`;
                    observer.unobserve(entry.target); // Hentikan observasi setelah animasi berjalan
                }
            });
        }

        // Intersection Observer untuk memantau elemen
        const observer = new IntersectionObserver(startAnimation, {
            root: null, // Viewport sebagai root
            threshold: 0.5 // Animasi dimulai ketika elemen 50% terlihat
        });


        // Render bar persentase
        renderBars(data);
        // Observasi setiap elemen bar
        const professionBars = document.querySelectorAll('.profession-bar');
        professionBars.forEach(bar => observer.observe(bar));
    </script>
</body>

</html>
