<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-grey-300">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            <div class="text-base text-gray-500"> <a href="#">{{ $post['author'] }}</a> | 19 Juli 2024 </div>
            <p class="my-4 font-light">{{ $post['body'] }}</p>
            <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach



</x-layout>
