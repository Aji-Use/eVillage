<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="font-medium text-4xl m-auto w-max mb-6">Sejarah Desa Dalam Beberapa Versi</h2>

    @foreach ($sejarahs as $sejarah)
        <article class="border-b-2 border-black pb-2 pt-4">
            <a href="/sejarahs/{{$sejarah['slug']}}">
                <h3 class="font-medium text-xl hover:underline "> {{ $sejarah['title'] }}</h3>
            </a>
            <p class="text-xs mb-2">{{$sejarah->author->name}} | {{$sejarah->created_at}}</p>
            <p>
                {{Str::limit($sejarah['body'], 150)}}
                {{-- {{ $sejarah['body'] }} --}}
            </p>
            <a href="/sejarahs/{{$sejarah['slug']}}" class="text-blue-600 hover:underline text-xs">Read more... &raquo;</a>
        </article>
    @endforeach
</x-layout>
