@extends('layouts.admin')
@section('title', 'Tambah Peserta')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-content-center">
                @if ($errors->any())
                <div class="card text-danger">
                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="card card-primary">

                    <!-- form start -->
                    <form action="/admin/peserta" method="post">
                        @csrf
                        @method('POST')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Umur</label>
                                <input type="number" name="age" value="{{ old('age') }}" class="form-control"
                                    placeholder="Umur">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="m"
                                        {{ (old('gender') == 'L') ? 'checked' : '' }}>
                                    <label class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="f"
                                        {{ (old('gender') == 'P') ? 'checked' : '' }}>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" name="address" value="{{ old('address') }}"
                                    class="form-control" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No HP</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Cth: 0811 ...">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-block btn-primary">Tambah</button>
                        </div>
                        <!-- /.card -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/.Container fluid-->
</section>
@endsection
