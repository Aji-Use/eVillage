<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}

    {{-- font-thin, font-extralight, font-light, font-normal, font-medium, font-semibold, font-bold, font-extrabold, font-black. --}}

    <div
        class="relative h-[92vh] w-full bg-no-repeat bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1539600937385-bd902dd379cc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">
        <!-- Elemen semi-transparan dengan efek blur -->
        <div class="absolute inset-0 backdrop-blur-sm bg-black/30 ">
            <!-- Konten -->
            <div class="banner ml-16 mt-16 text-white  text-5xl font-black font-roboto">
                <h1>Selamat Datang Di <br>Wakanda Land</h1>
                <p class="text-base text-justify mt-6">
                    Website ini memuat seputar informasi seperti struktur kepemerintahan, <br>
                    sejarah, program, dan laporan pengeluaran desa yang berguna untuk <br>
                    membantu warga menemukan informasi.
                </p>
            </div>
        </div>
    </div>

    {{-- Program Desa --}}
    <h2 class="text-4xl text-center mt-10 font-semibold">Program Desa</h2>
    <div
        class="container-card mt-8 w-[70%] m-auto bg-white rounded-lg flex gap-4 justify-between p-4 ">
        {{-- Klinik --}}
        <div class="card w-[15vw] h-[45vh] border rounded bg-white p-4 hover:cursor-pointer shadow-custom "
            data-aos="zoom-in">
            <a href="/klinik">
                <img src="https://w7.pngwing.com/pngs/957/974/png-transparent-hospital-logo-clinic-health-care-physician-business-thumbnail.png"
                    alt="" class="w-[50vw] h-[25vh]">
                <h3 class="mt-4 text-center font-semibold text-lg">Klinik Desa</h3>
                <p class="font-base mt-2 text-center">Unit kesehatan desa untuk membantu pengobatan warga</p>
            </a>
        </div>

        {{-- PKK --}}
        <div class="card w-[15vw] h-[45vh] border rounded bg-white p-4 hover:cursor-pointer shadow-custom"
            data-aos="zoom-in">
            <a href="/pkk">
                <img src="https://kelurahan-pangongangan.madiunkota.go.id/wp-content/uploads/2017/07/LOGO-PKK-PNG.png"
                    alt="" class="w-[50vw] h-[25vh]">
                <h3 class="mt-4 text-center font-semibold text-lg">PKK</h3>
                <p class="font-base mt-2 text-center">Program Kesejahteraan Keluarga Desa Wakanda</p>
            </a>
        </div>

        {{-- Karangtaruna --}}
        <div class="card w-[15vw] h-[45vh] border rounded bg-white p-4 hover:cursor-pointer shadow-custom"
            data-aos="zoom-in">
            <a href="/karta">
                <img src="https://w7.pngwing.com/pngs/717/974/png-transparent-yellow-and-red-karang-taruna-logo-karang-taruna-logo-organization-karang-taruna-cdr-logo-signage-thumbnail.png"
                    alt="" class="w-[50vw] h-[25vh]">
                <h3 class="mt-4 text-center font-semibold text-lg">Karangtaruna</h3>
                <p class="font-base mt-2 text-center">Karangtaruna Desa Wakanda</p>
            </a>
        </div>

        {{-- pendidikan --}}
        <div class="card w-[15vw] h-[45vh] border rounded bg-white p-4 hover:cursor-pointer shadow-custom"
            data-aos="zoom-in">
            <a href="/pendidikan">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/1200px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png"
                    alt="" class="w-[50vw] h-[25vh]">
                <h3 class="mt-4 text-center font-semibold text-lg">Pendidikan</h3>
                <p class="font-base mt-2 text-center">Pendidikan yang ada di Desa Wakanda</p>
            </a>
        </div>
    </div>
    {{-- </div> --}}

    <div class="container">
        <h2 class="text-4xl text-center mt-6 font-semibold">Kepala Daerah</h2>
        {{-- <div class="hero bg-white border m-auto mb-6"> --}}
        <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/102/2024/08/15/1000002224-2315964640.jpg"
            alt="" class="w-64 h-64 rounded m-auto mt-4 ">
        {{-- </div> --}}

    </div>

</x-layout>
