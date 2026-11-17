<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Form Tambah Mata Kuliah</h2>
    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <label>Kode Mata Kuliah</label><br>
        <input type="text" name="kode_matakuliah"
            value="{{ old('kode_matakuliah') }}">
        <br><br>
        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama_matakuliah"
            value="{{ old('nama_matakuliah') }}">
        <br><br>
        <label>Jumlah SKS</label><br>
        <input type="number" name="sks"
            value="{{ old('sks') }}">
        <br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>