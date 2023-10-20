@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-altamira">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/altamira.content')
@endsection
