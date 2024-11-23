<x-template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h4>Daftar Penyakit</h4>
                    </div>
                    
                    <div class="card-body">
                        
                        
<div class="my-3 col-4 ms-auto">
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari" aria-label="keyword" name="keyword" value="{{ request('keyword') }}"
                aria-describedby="basic-addon1">
                <button class="input-group-text btn btn-primary" id="basic-addon1">Cari</button>
            </div>
        </form>
    </div>
                        
                        
                        <!--<table id="penyakitTable" class="table table-striped table-bordered">-->
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Penyakit</th>
                                    <th>Gejala</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penyakit as $index => $p)
                                    <tr>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->gejala }}</td>
                                        <td>
                                            <a href="{{ route('pengecekan.show', $p->id) }}" class="btn btn-info btn-sm">Cek Obat</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-3">
        {{ $penyakit->withQueryString()->links() }}
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery dan DataTables -->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>-->
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">-->

    <!--<script>-->
    <!--    $(document).ready(function() {-->
    <!--        $('#penyakitTable').DataTable({-->
    <!--            "language": {-->
    <!--                "search": "Cari Penyakit:",-->
    <!--                "lengthMenu": "Tampilkan _MENU_ data per halaman",-->
    <!--                "zeroRecords": "Tidak ada data yang ditemukan",-->
    <!--                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",-->
    <!--                "infoEmpty": "Tidak ada data tersedia",-->
    <!--                "infoFiltered": "(difilter dari _MAX_ total data)"-->
    <!--            },-->
    <!--            "paging": true,-->
    <!--            "searching": true,-->
    <!--            "ordering": true-->
    <!--        });-->
    <!--    });-->
    <!--</script>-->
</x-template>
