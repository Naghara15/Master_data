@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('orderlist') }}">
        @csrf
        Order Id : <input style="margin-left: 37px" type="text" name="order_id"><br/>
        Employee Id : <input style="margin-left: 9px" type="text" name="employee_id"><br/>
        <br/>
        <button class="btn btn-info" type="submit">Save</button>

    </form>
@endsection