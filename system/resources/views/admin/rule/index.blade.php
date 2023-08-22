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
                <h3>Data Penyakit</h3>
            </center>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('admin/rule/create') }}" class="btn btn-primary float-right mb-3 mt-3">
                        <i class="fa fa-plus"></i> Buat Aturan
                    </a>

                   
                </div>
                <div class="col-md-12">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-white">No</th>
                                <th class="text-white">Kode Penyakit</th>
                                <th class="text-white">Nama Penyakit</th>
                                <th class="text-white">Gejala Penyakit</th>
                                <th class="text-white">Keterangan</th>
                                <th class="text-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_penyakit as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->kode_penyakit }}</td>
                                    <td>{{ ucwords($p->nama_penyakit) }}</td>
                                    <td>
                                        <table class="table-borderless table-sm">

                                            @foreach (App\Models\PenyakitDetail::where('kode_penyakit', $p->kode_penyakit)->get() as $detail)
                                                <tr>
                                                    <td>{{ $detail->kode_gejala }}</td>
                                                    <td>{{ $detail->gejala->nama_gejala }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                    <td>{{ $p->keterangan }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ url('admin/rule/edit', $p->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a> --}}
                                            <a href="{{ url('admin/rule/delete', $p->penyakit_id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        var u = 0;

        $("#add_gejala").click(function() {

            ++u;

            var form_gejala =
                '<table>' +
                '<tr>' +
                '<td width="80%">' +
                '<select name="kode_gejala[]" id="" class="form-control mb-3" required>' +
                '<option value="" hidden>-- Pilig Gejala --</option>' +
                '@foreach ($list_gejala as $g)' +
                '<option value="{{ $g->kode_gejala }}">{{ $g->kode_gejala }} - {{ $g->nama_gejala }}</option>' +
                '@endforeach' +
                '</select>' +
                '</td>' +
                '<td width="20%">' +
                '<button class="btn btn-danger remove-tr-untuk"><i class="fa fa-trash"></i></button>' +
                '</td>' +
                '</tr>' +
                '</table>';

            $("#dynamicTableGejala").append(form_gejala);

        });

        $(document).on('click', '.remove-tr-untuk', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endsection
