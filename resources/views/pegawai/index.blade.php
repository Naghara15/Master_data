@extends('layouts.index')

@section('content')
    <br/>
    <a class="btn btn-info" href="{{ url('pegawai/create') }}">Add</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Divisi</th>
        </tr>
        @foreach($datas as $key=>$value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->tanggal_lahir }}</td>
            <td>{{ $value->divisi }}</td>
            <td><a class="btn btn-info" href="{{ url('pegawai/'.$value->id.'/edit') }}">Update</a></td>
            <td>
                <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection