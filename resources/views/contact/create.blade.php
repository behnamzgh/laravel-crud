@extends('layout.app')
@section('title', 'create')
@section('content')
    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <div>
            name:<input type="text" name="name">
            address: <input type="text" name="address">
            phone: <input type="text" name="phone">
            <input type="submit">
        </div>
    </form>
@endsection