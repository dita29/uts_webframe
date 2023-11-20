@extends('layouts.index')

@section('content')
    <h1>KRS</h1>
<div>
        <table border="2">
            <thead>
                <tr>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>SKS</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post['KodeMatkul'] }}</td>
                        <td>{{ $post['NamaMatkul'] }}</td>
                        <td>{{ $post['SKS'] }}</td>
                        <td>{{ $post['Semester'] }}</td>
                    </tr>
               @endforeach
            </tbody>
        </table>
    <a href="{{ url('/datamahasiswa') }}" class="btn btn-danger text-white mt-3 float-right">Go-to Data Mahasiswa --></a>
</div>
@endsection
