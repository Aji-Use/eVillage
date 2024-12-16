<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}

    {{-- font-thin, font-extralight, font-light, font-normal, font-medium, font-semibold, font-bold, font-extrabold, font-black. --}}
    {{-- Landing Page --}}
    <x-landing-page></x-landing-page>

    {{-- Program Desa --}}
    
    {{-- </div> --}}

    {{-- PRESTASI --}}
    <div class="border border-red-500 pt-12">
        <h2 class="text-4xl text-center  font-semibold">Prestasi</h2>
    </div>

    {{-- Komoditas Pertanian --}}
    <div class="komoditas h-[100vh]  pt-12 pb-8 border border-red-500">
        <h2 class="text-4xl text-center  font-semibold">Komoditas Pertanian Desa Wakanda</h2>
        <div class="box-komoditas w-[70%] h-[70vh] m-auto border border-blue-900 flex justify-between gap-6">
            <div class="image w-[20%] ">
                <img src="https://jogjabenih.jogjaprov.go.id/images/files/bawang%20merah.jpg" alt=""
                    class="h-[60%] object-cover ">
                <p>Komoditas Bawang Merah</p>
            </div>

        </div>
    </div>

    {{-- Profil Kepala Daerah --}}
    <div class="container bg-[#EBF4F6] pt-12 pb-8">
        <h2 class="text-4xl text-center  font-semibold">Kepala Daerah</h2>
        {{-- <div class="hero bg-white border m-auto mb-6"> --}}
        <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/102/2024/08/15/1000002224-2315964640.jpg"
            alt="" class="w-64 h-64 rounded-lg m-auto my-8 bg-white p-1">
        {{-- </div> --}}
        <div class="w-[70%] m-auto p-4 flex justify-center gap-8 border border-yellow-400">
            <div class="visi border w-[45vh] p-4 bg-white ">
                <h1 class="text-center text-2xl font-medium">VISI</h1>
                <p class="text-justify mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias facilis
                    minus voluptatibus. Cum
                    tempore quae ratione veniam, labore, quaerat nisi mollitia quod eius reprehenderit dolor, in alias
                    nam itaque sunt?</p>
            </div>
            <div class="misi border w-[45vh] p-4 bg-white">
                <h3 class="text-center text-2xl font-medium">MISI</h3>
                <p class="text-justify mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias facilis
                    minus voluptatibus. Cum
                    tempore quae ratione veniam, labore, quaerat nisi mollitia quod eius reprehenderit dolor, in alias
                    nam itaque sunt?</p>
            </div>
        </div>
    </div>

</x-layout>