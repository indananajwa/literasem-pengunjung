<form action="{{ route('pemerintah.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama" required>
    <input type="text" name="jabatan" required>
    <input type="number" name="tahun_berkuasa" required>
    <input type="number" name="tahun_akhir">
    <input type="file" name="foto">
    <button type="submit">Save</button>
</form>
