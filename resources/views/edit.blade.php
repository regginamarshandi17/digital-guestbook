@extends('master')
@section('konten')

<div class="form-group">
    <form method="POST" action="{{ url('/update/'.$guestbooks->id) }}">

        {{ csrf_field() }}
        @method('PUT')
    <label for="nama">Name</label>
    <input type="text" name="nama" value="{{$guestbooks->nama}}" class ="form-control"> </br>
    @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif


    <label for="email">Email</label>
    <input type="email" name="email" value="{{$guestbooks->email}}" class ="form-control"> </br>
    @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

    <label for="Alamat">Alamat</label>
    <input type="alamat" name="alamat" value="{{$guestbooks->alamat}}" class ="form-control"> </br>
    @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

    <label for="no_telepon">No Telepon</label>
    <input type="no_telepon" name="no_telepon" value="{{$guestbooks->no_telepon}}" class ="form-control"> </br>
    @if($errors->has('no_telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telepon')}}
                                </div>
                            @endif

        <input type="submit" value="Save" class="btn btn-warning">
    </form>
    </div>
@stop