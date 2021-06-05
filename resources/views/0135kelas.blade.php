<head>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        .tambah {
            padding: 8px 16px;
            text-decoration: none;
        }

    </style>
</head>

<body>
    @extends('layout.header')
    @section('konten')
        <div class="container" align="center" style="position: relative"">
                    <table class=" table" style="width: 400px">
            <thead class="table">
                <tr>
                    <th>id</th>
                    <th>id_siswa</th>
                    <th>id_guru</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kelas)
                    <tr>
                        <td>{{ $kelas->id }}</td>
                        <td>{{ $kelas->id_siswa }}</td>
                        <td>{{ $kelas->id_guru }}</td>
                        <td><a href="">Edit </a> |<a href=""> Hapus</a> </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            <div style="overflow-x:auto;" align="center"> <button class="tambah" href="{{ route('kelas.create') }}">
                    Tambah
                    Data
                </button>
            </div>
        @endsection
</body>
