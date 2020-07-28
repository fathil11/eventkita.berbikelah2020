@extends('layouts.admin')
@section('title', 'Daftar Peserta')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Pengambilan Merchant</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participants as $key=>$participant)
                                <tr>
                                    <td class="text-center">{{ ($key+1) }}</td>
                                <td><a href="/admin/peserta/{{ $participant->id }}">{{ $participant->name }}</a></td>
                                    <td>{{ $participant->email }}</td>
                                    <td class="text-center">{{ $participant->phone }}</td>
                                    <td class="text-center">
                                        @if ($participant->get_merchant_at == null)
                                        Belum Diambil
                                        @else
                                        Diambil pada {{ Carbon::parse($participant->get_merchant_at)->locale('id')->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($participant->get_merchant_at == null)
                                        <a href="/admin/peserta/{{ $participant->id }}/merchant/ambil" class="btn btn-sm btn-success">Ambil</a>
                                        @else
                                        <a href="/admin/peserta/{{ $participant->id }}/merchant/batalkan" class="btn btn-sm btn-danger">Batalkan</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
</section>

@endsection


@section('script')
<script>
    $(function() {
        // $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection
