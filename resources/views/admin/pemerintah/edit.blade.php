<!-- resources/views/admin/pemerintah/edit.blade.php -->
<h1>Edit Pemerintah</h1>

<form action="{{ route('pemerintah.update', $pemerintah->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Ini untuk method PUT karena kita update data -->
    
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="{{ old('nama', $pemerintah->nama) }}" required><br>

    <label for="jabatan">Jabatan:</label>
    <input type="text" name="jabatan" value="{{ old('jabatan', $pemerintah->jabatan) }}" required><br>

    <label for="tahun_awal">Tahun Awal:</label>
    <input type="text" name="tahun_awal" value="{{ old('tahun_awal', $pemerintah->tahun_awal) }}" required><br>

    <label for="tahun_akhir">Tahun Akhir:</label>
    <input type="text" name="tahun_akhir" value="{{ old('tahun_akhir', $pemerintah->tahun_akhir) }}"><br>

    <label for="foto">Foto:</label>
    <input type="file" name="foto"><br>

    <button type="submit">Update</button>
</form>
