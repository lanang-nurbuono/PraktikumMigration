<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
</head>
<body>

    <h2>Data Mata Kuliah</h2>

    <a href="{{ route('matakuliah.create') }}">
        <button>Tambah Mata Kuliah</button>
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($matakuliah as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->kode_matakuliah }}</td>
                    <td>{{ $data->nama_matakuliah }}</td>
                    <td>{{ $data->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $data->id) }}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>
</html>