@extends('layout.app')
@section('title', 'dashboard')
@section('content')
    <div><a href="{{route('contact.create')}}">create</a></div>
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
                        <a href="{{url('view'.'/'.$item->id)}}">view</a>
                        <a href="{{ url('edit'.'/'.$item->id) }}">edit</a>
                        {{-- <a href="{{route('contact.delete')}}">delete</a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection