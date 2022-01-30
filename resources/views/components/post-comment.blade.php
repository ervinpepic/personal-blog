@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl border border-gray space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="Profile Image" width="60" height="60">
    </div>
    <div>
        <header class="mb-2">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p>Posted 
                <time>{{ $comment->created_at }}</time>
            </p>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>