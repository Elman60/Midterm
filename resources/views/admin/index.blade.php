@extends('components.app')

@section('content')

    @include('components.includes.header')
    <section class="section" id="menu">
    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="price" placeholder="Price">
        <button>Add</button>
    </form>
    </section>
@endsection