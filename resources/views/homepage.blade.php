@extends('layouts.app')

@section('page_name', 'Home')

@section('page_title', 'Home')

@section('main_content')
<div class="container text-center">
  <a class="btn btn-dark" href="{{ route('trains') }}">Vai ai treni</a>
</div>
@endsection
