@extends('layout.app')
@section('title', 'dashboard')
@section('content')
    {{-- <div><a href="{{url('create')}}">create</a></div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>address</th>
                    <th>phone</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href="{{url('view/'.$item->id)}}">view</a>
                        <a href="{{ url('edit/'.$item->id) }}">edit</a>
                        <a href="{{ url('delete/'.$item->id)}}">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}

    <div class="card">
        <div class="card-header">Contacts</div>
        <div class="card-body">
            <a href="{{url('create')}}" class="btn btn-success" title="Add New Contact">
                <i class="fa fa-plus" aria-hidden="true">add new</i>
            </a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->phone}}</td>

                            <td>
                                <a href="{{url('view/'.$item->id)}}" class="btn btn-info">view</a>
                                <a href="{{url('edit/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection