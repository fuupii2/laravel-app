<x-layout>
    <a href="/" class="back-link"> &laquo; back</a>
    <h1>Edit form</h1>


    <form action="{{ route('posts.update', $post) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
            <h2>タイトルを編集</h2>
                <input type="text" name="title" value="{{ $post->title }}">
            @error('title')
                <div class="error">{{ $message }}</div>
        </div>
        @enderror
        <div>
            <h2>本文を編集</h2>
            <textarea name="body"> {{ $post->body }}</textarea>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button>[edit]</button>
    </form>
</x-layout>

