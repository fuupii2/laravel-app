<x-layout>
    <div class="head-contents">
        <a class="back-link" href="/" class="backlink"> &laquo; back</a>
        <h1>Let's create something</h1>
    </div>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <div>
                <h2>タイトルを入力</h2>
                <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
            </div>
            <div>
                <h2>本文</h2>
                <textarea name="body"> {{ old('body') }}</textarea>

        @error('body')
                <div class="error">{{ $message }}</div>
        @enderror
            </div>
        <button>[Add]</button>
    </form>
</x-layout>
