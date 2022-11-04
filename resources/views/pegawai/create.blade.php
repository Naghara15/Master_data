@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pegawai') }}">
        @csrf
        Nama : <input style="margin-left: 60px" type="text" name="nama"><br/>
        Tanggal Lahir : <input style="margin-left: 9px" type="text" name="tanggal_lahir"><br/>
        Divisi : <input style="margin-left: 64px" type="text" name="divisi"><br/>
        ID : <input style="margin-left: 86px" type="text" name="karyawan_id"><br/>
        <br/>
        <button class="btn btn-info" type="submit">Save</button>

    </form>
@endsection