@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-blog">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('blog.content')
@endsection
