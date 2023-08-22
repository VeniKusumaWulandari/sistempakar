@extends('admin.template.base')
@section('content')
    <style>
        td {
            vertical-align: top !important;
        }
    </style>
    <div class="card mt-3">
        <div class="card-body">
            <center>
                <h3>BUAT ATURAN / RULE</h3>
            </center>
        </div>
    </div>
    <form action="{{ url('admin/rule/create') }}" method="post">
        @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                                <th>Kode Penyakit</th>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="{{ $kode_penyakit }}"
                                    name="kode_penyakit" readonly>
                                    <input type="hidden" class="form-control" value="{{ $kode_detail }}"
                                    name="kode_detail" readonly>
                                </td>
                        </tr>
                        <tr>
                                <th>Nama Penyakit</th>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="nama_penyakit" required>
                                </td>
                        </tr>
                        <tr>
                                <th>Keterangan Penyakit</th>
                                <td>:</td>
                                <td>
                                    <textarea name="keterangan" id="" cols="30" rows="3" class="form-control" required></textarea>
                                </td>
                        </tr>
                    </table>
                    
                </div>
                <div class="col-md-12">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <td colspan="3" class="text-white">Ceklis gejala yang ada didalam rule</td>
                            </tr>
                            <tr>
                                <th class="text-white">Kode</th>
                                <th class="text-white">Gejala</th>
                                <th class="text-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_gejala as $g)
                                <tr>
                                    <td>{{ $g->kode_gejala }}</td>
                                    <td>{{ $g->nama_gejala }}</td>
                                    
                                    
                                    <td>
                                        <input type="checkbox" class="checkbox" name="kode_gejala[]" value="{{ $g->kode_gejala }}">
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                       
                    </table>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary float-right">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
