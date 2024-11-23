<x-template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mt-4 mb-4">Edit Penyakit</h2>

            <form action="{{ route('penyakit.update', $penyakit) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nama" class="mb-2">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $penyakit->nama }}" required>
                </div>

               

                <div class="form-group mb-4">
                    <label for="gejala" class="mb-2">Gejala</label>
                    <textarea name="gejala" id="gejala" cols="97" rows="8" required style="display: block" class="form-control">
{{ $penyakit->gejala }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary me-2">Edit</button>
                <a href="{{ route('penyakit.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</x-template>