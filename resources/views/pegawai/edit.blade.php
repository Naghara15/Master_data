@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pegawai/'.$model->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Nama             <input style="margin-left: 60px" type="text" name="nama" value="{{ $model->nama }}"><br/>
        Tanggal Lahir    <input style="margin-left: 8px" type="text" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}"><br/>
        Divisi           <input style="margin-left: 64px" type="text" name="divisi" value="{{ $model->divisi }}"><br/>
        ID               <input style="margin-left: 86px" type="text" name="karyawan_id" value="{{ $model->karyawan_id }}"><br/>
        </br>
        <button class="btn btn-info" type="submit">Save</button>

    </form>
@endsection