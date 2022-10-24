<x-layout>
    <a href="/" class="back-link"> &laquo; back</a>
    <h1>{{ $post->title }}</h1>
    <form method="post" action="{{ route('posts.delete', $post) }}" id="destroy">
        @method('DELETE')
        @csrf
        <button class="delete-btn">x</button>
    </form>

    <p>{!! nl2br(e($post->body)) !!}</p>

    <h1 class="commentPop">Comments</h1>

    <ul>
    @forelse ($post->comments as $item)
        <div class="comment">
            <li class="comments">
                {{ $item->body }}
                <h4 class="update">
                    {{ $item->updated_at }}
                </h4>
            </li>
        </div>
    @empty
        <h1></h1>
    @endforelse
    </ul>

    <form action="{{ route('comments.store', $post) }}" method="post" class="comment-form">
    @csrf
    <input type="text" name="body">
    <button class="comment-btn">送信</button>
    </form>

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
