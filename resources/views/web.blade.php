<x-layout>
    <div class="contents">
        <div class="head-contents">
            <h1>hello laravel</h1>
            <h2><a class="cbtn" href="{{ route('posts.create') }}">CREATE</a></h2>
        </div>

        <ul>
            @forelse ($posts as $post)
                <li>
                    <div class="post">
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                        <a class="edit-btn"href="{{ route('posts.edit', $post) }}">
                            [edit]
                        </a>
                    </div>

                </li>
            @empty
                <li>なにも投稿されていません</li>
            @endforelse
        </ul>
    </div>
</x-layout>

