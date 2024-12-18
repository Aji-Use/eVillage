<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-3xl text-center font-semibold font-inter uppercase tracking-wider mt-6 mb-8">sejarah desa dalam
        beberapa versi</h1>

    <!-- Slider main container -->
    <div class="swiper  relative">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide  ">
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20230515/pngtree-green-rice-fields-at-sunrise-overlooking-a-small-mountain-village-in-image_2541172.jpg" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/jawapos/2020/10/desa-bisa-kaya-dari-wisata.jpg" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="https://www.masterplandesa.com/wp-content/uploads/2023/07/HIPWEE.jpg" alt="">
            </div>
            
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        
        <div class="swiper-button-prev absolute bottom-0"></div>
        <div class="swiper-button-next"></div>
        
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    {{-- @foreach ($sejarahs as $sejarah)
        <article class="border-b-2 border-black pb-2 pt-4">
            <a href="/sejarahs/{{$sejarah['slug']}}">
                <h3 class="font-medium text-xl hover:underline "> {{ $sejarah['title'] }}</h3>
            </a>
            <p class="text-xs mb-2">{{$sejarah->author->name}} | {{$sejarah->created_at}}</p>
            <p>
                {{Str::limit($sejarah['body'], 150)}} --}}
    {{-- {{ $sejarah['body'] }} --}}
    {{-- </p>
            <a href="/sejarahs/{{$sejarah['slug']}}" class="text-blue-600 hover:underline text-xs">Read more... &raquo;</a>
        </article>
    @endforeach --}}
</x-layout>
