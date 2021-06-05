<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>aldo</title>
</head>

<body>
    <div id="myTabContent" class="tab-content" align="center">
        @extends('layout.header')
        @section('konten')
            <style type="text/css">
                .pagination li {
                    float: left;
                    list-style-type: none;
                    margin: 5px;
                }

            </style>

            <h2><a href="https://www.markombur.com/2020/08/nama-dosen-untag-surabaya.html"><br>Universitas 17 Agustus
                    Surabaya</a></h2>
            <h3>Data Pegawai</h3>


            <p>Cari Data Pegawai :</p>
            <form action="/pegawai/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Nama .." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
            <br />
        </div>
        <div id="myTabContent" class="tab-content" align="center">
            <table class="table" border="2" style="width: 400px">
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                </tr>
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <br />
        Jumlah Data : {{ $pegawai->total() }} <br />


        {{ $pegawai->links() }}

    @endsection
</body>

</html>
<div id="myTabContent" class="tab-content" align="center">

</div>
