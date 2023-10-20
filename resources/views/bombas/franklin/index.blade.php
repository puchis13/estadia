@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-franklin">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/franklin.content')
@endsection
