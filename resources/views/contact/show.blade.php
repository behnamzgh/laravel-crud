@extends('layout.app')
@section('title', 'show')
@section('content')
    <div class="card">
        <div class="card-header">Contacts Information</div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$contact->name}} </h5>
            <p class="card-text">Address: {{$contact->address}} </p>
            <p class="card-text">Phone: {{$contact->phone}} </p>
        </div>
    </div>
@endsection