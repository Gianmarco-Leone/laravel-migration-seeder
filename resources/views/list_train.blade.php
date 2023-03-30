@extends('layouts.app')

@section('page_name', 'Trains list')

@section('page_title', 'Treni disponibili')

@section('main_content')
<div class="container">

    <div class="row g-3 py-5">
        @forelse($trains as $train)
        <div class="col-3">
            @include('partials._train_card')
        </div>
        @empty
        <div class="col-12">
            <h2 class="text-center">Non ci sono treni</h2>
        </div>
        @endforelse
    </div>

    <div class="text-center my-5">
        <a class="btn btn-dark" href="{{ route('home') }}">Torna alla home</a>
    </div>
</div>
@endsection