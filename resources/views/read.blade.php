@extends('master')
@section('konten')

<table class="table table-condensed">
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
    @foreach ($guests as $guest)
    <tr>
        <th class="">{{$guest->nama}}</th>
        <td>{{$guest->email}}</td>
        <td>{{$guest->alamat}}</td>
        <td>{{$guest->no_telepon}}</td>
        <td>
            <a class="btn btn-danger btn-sm text-white" href="/update">Update</a>
            <a class="btn btn-danger btn-sm" href="/delete">Hapus</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>

@endsection 