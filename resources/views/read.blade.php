@extends('master')
@section('konten')

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand">Data Tamu</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
      <script src="script.js"></script>
    </div>
  </nav>

<table class="table table-bordered">
    <thead class="">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th style="width: 200px;">Opsi</th>
    </tr>
    </thead>
<tbody>
    @foreach ($guestbooks as $guest)
    <tr>
        <th class="">{{$guest->nama}}</th>
        <td>{{$guest->email}}</td>
        <td>{{$guest->alamat}}</td>
        <td>{{$guest->no_telepon}}</td>
        <td>
            <a href="{{ url('/edit/'.$guest->id) }}"><button class="btn btn-warning">Edit</button></a>
                    |
            <a href="{{ url('/destroy/'.$guest->id) }}"><button class="btn btn-danger">Delete</button></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<div class="">
    {{ $guestbooks->links('vendor.pagination.bootstrap-4') }}
</div>
</div>



    @endsection 