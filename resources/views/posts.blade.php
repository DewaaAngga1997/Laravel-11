<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-grey-300">
            <a href="/post/{{ $post['slug'] }}">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-500">{{ $post['title'] }}
                </h2>
            </a>
            <div class="text-base text-gray-500"> <a href="#">{{ $post['author'] }}</a> | 19 Juli 2024 </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
            <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
