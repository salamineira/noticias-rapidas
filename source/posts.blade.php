@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Últimas notícias de Lagoa dos Patos MG</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>Nenhuma notícia para mostrar.</p>
        @endforelse
    </ul>
@endsection
