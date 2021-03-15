@extends('template.main')


@section('content')

<div class="container">

    {{-- <h1>Home</h1> --}}
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h1 class="text-center mt-5">VOLLEYBALL</h1>

</div>

    
@endsection