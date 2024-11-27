<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article>
        <h1 class='text-xl'>{{ $sejarah->title}}</h1> 
        <h2 class="font-medium text-xs mb-6">{{ $sejarah->author->name }} | 17 agustus</h2>
        
        <p>
           {{$sejarah->body}}
        </p>
        
    </article>
</x-layout>
