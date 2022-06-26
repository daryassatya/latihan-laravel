@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h2>
                {{-- <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a> --}}
                <a href="{{ route('post.detail', $post->slug) }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>By. <a href="{{ route('post.author', $post->author->username) }}"
                    class="text-decoration-none">{{ $post->author->name }}</a> in <a
                    href="{{ route('category.spesific', $post->category->slug) }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
