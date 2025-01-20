<!-- resources/views/admin/pemerintah/index.blade.php -->
<h1>Daftar Pemerintah</h1>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Tahun Awal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemerintah as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>{{ $item->tahun_awal }}</td>
                <td>
                    <a href="{{ route('pemerintah.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('pemerintah.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
