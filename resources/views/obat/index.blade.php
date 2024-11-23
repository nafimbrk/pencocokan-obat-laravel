<x-template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                <h2>Daftar Obat</h2>
                <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
            </div>
            
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered border-dark">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $obt)
                        <tr>
                            <td>{{ $obt->nama }}</td>
                            <td>{{ $obt->deskripsi }}</td>
                            <td>
                                <a href="{{ route('obat.edit', $obt) }}" class="btn btn-warning me-1">Edit</a>
                                <form action="{{ route('obat.destroy', $obt) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-template>





