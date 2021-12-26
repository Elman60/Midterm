@extends('components.app')

@section('content')

    @include('components.includes.header')
    
    <section class="section" id="menu">
        <div class="item">
            <div class='card card1'>
                <div class="price"><h6>{{ $item->price }}</h6></div>
                <div class='info'>
                <h1 class='title'>{{ $item->title }}</h1>
                <p class='description'>{{ $item->description }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection