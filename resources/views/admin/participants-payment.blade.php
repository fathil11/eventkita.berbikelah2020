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
                                    <th>Alamat</th>
                                    <th>Status</th>
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
                                    <td class="">{{ $participant->address }}</td>
                                    <td class="text-center">
                                        @if ($participant->paid_by == null)
                                            Belum Lunas
                                        @else
                                            Lunas
                                        @endif
                                    </td>
                                    <td>
                                        @if ($participant->paid_by == null)
                                        <a href="/admin/peserta/{{ $participant->id }}/lunas" class="btn btn-sm btn-success">Lunaskan</a>
                                        @else
                                        <a href="/admin/peserta/{{ $participant->id }}/tidak-lunas" class="btn btn-sm btn-secondary">Tidak Lunaskan</a>
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
