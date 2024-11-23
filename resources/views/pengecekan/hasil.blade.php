<x-template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h4>Hasil Pengecekan Obat untuk Penyakit: {{ $penyakit->nama }}</h4>
                    </div>
                    <div class="card-body">
                        @if($obat && $obat->count() > 0)
                            <table class="table table-striped table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Nama Obat</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($obat as $index => $o)
                                        <tr>
                                            <td>{{ $o->nama }}</td>
                                            <td>{{ $o->deskripsi }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-danger">Tidak ada obat yang cocok untuk penyakit ini.</p>
                        @endif
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('pengecekan.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
