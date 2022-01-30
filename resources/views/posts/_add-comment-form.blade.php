@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">@csrf
            <header class="flex items-center">
                <img class="rounded-full mr-4" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="Profile Image"
                    width="40" height="40">
                <h2>You want to leave a comment?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" rows="5" class="w-full text-sm focus:outline-none focus:ring"
                    placeholder="Your comment text here" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/login" class="hover:underline">Log in to leave a comment...</a>
        <a href="/register" class="hover:underline">or Register here</a>
    </p>
@endauth
