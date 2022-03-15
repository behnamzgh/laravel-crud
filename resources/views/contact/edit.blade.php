@extends('layout.app')
@section('title', 'edit')
@section('content')
    <div class="card">
        <div class="card-header">Edit Contacts</div>
        <div class="card-body">
            <form action=" {{url('update/'.$contact->id)}} " method="post">
                @csrf
                <label for="">Name</label><br>
                <input type="text" name="name" class="form-control" value="{{$contact->name}}"><br>

                <label for="">Address</label><br>
                <input type="text" name="address" class="form-control" value="{{$contact->address}}"><br>

                <label for="">Phone</label><br>
                <input type="text" name="phone" class="form-control" value="{{$contact->phone}}"><br>

                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection