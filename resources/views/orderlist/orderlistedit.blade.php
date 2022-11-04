@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('orderlist/'.$modelorderlist->orderlist_id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Order Id : <input style="margin-left: 15px" type="text" name="order_idr" value="{{ $modelorderlist->order_id }}"><br/>
        Employee Id : <input style="margin-left: 24px" type="text" name="jenis_order" value="{{ $modelorderlist->employee_id }}"><br/>
        <br/>
        <button class="btn btn-info" type="submit">Save</button>

    </form>
@endsection