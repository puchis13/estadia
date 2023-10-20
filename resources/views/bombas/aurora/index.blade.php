@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-aurora">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/aurora.content')
@endsection
