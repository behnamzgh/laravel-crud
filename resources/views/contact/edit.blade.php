@extends('layout.app')
@section('title', 'edit')
@section('content')
    <form action="{{route('contact.update')}}" method="get">
        @csrf
        <div>
            name:<input type="text" name="name" value="{{ $contact->name }}">
            address: <input type="text" name="address" value="{{$contact->address}}">
            phone: <input type="text" name="phone" value="{{$contact->phone}}">
            <input type="submit">
        </div>
    </form>
@endsection