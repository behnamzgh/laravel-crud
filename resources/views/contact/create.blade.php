@extends('layout.app')
@section('title', 'create')
@section('content')
    <div class="card">
        <div class="card-header">Add Contact</div>
        <div class="card-body">
            <form action="{{url('store')}}" method="POST">
                @csrf
                <label for="">Name</label><br>
                <input type="text" name="name" class="form-control"><br>

                <label for="">Address</label><br>
                <input type="text" name="address" class="form-control"><br>

                <label for="">Phone</label><br>
                <input type="text" name="phone" class="form-control"><br>

                <input type="submit" value="add" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection