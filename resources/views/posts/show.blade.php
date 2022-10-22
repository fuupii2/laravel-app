<x-layout>
    <a href="/" class="back-link"> &laquo; back</a>
    <h1>{{ $post->title }}</h1>
    <form method="post" action="{{ route('posts.delete', $post) }}" id="destroy">
        @method('DELETE')
        @csrf
        <button class="delete-btn">x</button>
    </form>

    <p>{!! nl2br(e($post->body)) !!}</p>

<script>
    'use strict'
    {
    const destroy = document.getElementById('destroy');
    destroy.addEventListener('submit', e => {
        e.preventDefault();

        if(!confirm('Sure to delete?')) {
            return;
        }

        e.target.submit();
    });
}
</script>
</x-layout>
