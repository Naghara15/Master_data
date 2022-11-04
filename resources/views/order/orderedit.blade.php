@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('order/'.$modelorder->order_id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Nama Order : <input style="margin-left: 15px" type="text" name="nama_order" value="{{ $modelorder->nama_order }}"><br/>
        Jenis Order : <input style="margin-left: 24px" type="text" name="jenis_order" value="{{ $modelorder->jenis_order }}"><br/>
        <br/>
        <button class="btn btn-info" type="submit">Save</button>

    </form>
@endsection