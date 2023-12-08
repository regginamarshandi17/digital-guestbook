@extends('master')
@section('konten')

<div class="form-group">
<form action="read" method="post">

    {{ csrf_field() }}
    <label for="nama">Name</label>
    <input type="text" name="nama" id="name" class ="form-control"> </br>


    <label for="email">Email</label>
    <input type="email" name="email" id="email" class ="form-control"> </br>

    <label for="Alamat">Alamat</label>
    <input type="alamat" name="alamat" id="alamat" class ="form-control"> </br>

    <label for="no_telepon">No Telepon</label>
    <input type="no_telepon" name="no_telepon" id="no_telepon" class ="form-control"> </br>

    <input type="submit" value="Save" class="btn btn-warning">
</form>
</div>
@stop