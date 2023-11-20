@extends('layouts.index')

@section('content')
    <h1>KRS</h1>

    <table border="2">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataMahasiswa as $mahasiswa)
                <tr>
                    <td><a href="{{ route('mahasiswa.krs', $mahasiswa['NIM']) }}">{{ $mahasiswa['NIM'] }}</a></td>
                    <td>{{ $mahasiswa['Nama'] }}</td>
                    <td>{{ $mahasiswa['Jurusan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/viewkrs') }}" class="btn btn-danger text-white mt-3 float-right"> <-- Back-to View KRS</a>

@endsection
