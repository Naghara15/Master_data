@extends('layouts.index')

@section('content')
    <br/>
    <a class="btn btn-info" href="{{ url('orderlist/create') }}">Add</a>
    <table class="table table-bordered">
        <tr>
            <th>Orderlist ID</th>
            <th>Order ID</th>
            <th>Employee ID</th>            
        </tr>
        @foreach($dataorderlist as $key=>$value)
        <tr>
            <td>{{ $value->orderlist_id }}</td>
            <td>{{ $value->order_id }}</td>
            <td>{{ $value->employee_id }}</td>
            <td><a class="btn btn-info" href="{{ url('orderlist/'.$value->orderlist_id.'/edit') }}">Update</a></td>
            <td>
                <form action="{{ url('orderlist/'.$value->orderlist_id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection