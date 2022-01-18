<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid-logic :posts="$posts"/>
        @else
            <p class="text-center">Sorry dear visitor...We don't have any post yet.</p>
        @endif
    </main>

</x-layout>
