@extends('layouts.index')

@section('content')
    <br/>
    <a class="btn btn-info" href="{{ url('order/create') }}">Add</a>
    <table class="table table-bordered">
        <tr>
            <th>Order ID</th>
            <th>Nama Order</th>
            <th>Jenis Order</th>            
        </tr>
        @foreach($dataorder as $key=>$value)
        <tr>
            <td>{{ $value->order_id }}</td>
            <td>{{ $value->nama_order }}</td>
            <td>{{ $value->jenis_order }}</td>
            <td><a class="btn btn-info" href="{{ url('order/'.$value->order_id. '/edit') }}">Update</a></td>
            <!-- <td><a class="btn btn-danger" href="{{ url('order/'.$value->order_id.'/delete') }}">Delete</a></td> -->
            <td>
                <form action="{{ url('order/'.$value->order_id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection