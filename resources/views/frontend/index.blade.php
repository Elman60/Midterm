@extends('components.app')

@section('content')

    @include('components.includes.header')
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($items as $item)
                        <div class="item">
                            <div class='card card1'>
                                <div class="price"><h6>{{ $item->price }}</h6></div>
                                <div class='info'>
                                <h1 class='title'>{{ $item->title }}</h1>
                                <p class='description'>{{ $item->description }}</p>
                                <a href="{{ route('item.show', $item->id) }}">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
@endsection