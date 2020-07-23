@extends('layouts.public')
@section('content')
<!-- About Generic Start -->
<section class="about-generic-area">
    <div class="container border-top-generic">
        <div class="row mt-5">
            <div class="col-lg-8 align-content-center">

                <form action="/daftar" method="post">
                    @csrf
                    @method('POST')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pendaftaran Peserta</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="number" name="age" value="{{ old('age') }}" class="form-control"
                                    placeholder="Umur">
                            </div>

                            <p>Jenis Kelamin</p>
                            <div class="form-check form-check-inline ml-4 mr-5">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                    value="m" {{ (old('gender') == 'L') ? 'checked' : ''}}>
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline ml-4 mb-3">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                    value="f" {{ (old('gender') == 'P') ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" name="address" value="{{ old('address') }}" class="form-control"
                                    placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                    placeholder="E-mail">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">No HP</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control"
                                    placeholder="Cth: 0811 ...">
                            </div>
                            <div class="form-group-sm d-flex">
                                <div class="primary-checkbox">
                                    <input id="terms" type="checkbox" id="terms"
                                        {{ (old('terms')!=null) ? 'checked' : ''}}>
                                    <label for="terms"></label>
                                </div>
                                <p>&nbsp; Saya setuju dengan
                                    <b><a href="tna.php" target="_blank">Syarat & Ketentuan</a></b> yang berlaku
                                </p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-between">
                            <button type="button" id="btnSubmit" class="genric-btn primary circle">Daftar</button>
                        </div>
                        <button id="submit" type="submit" hidden></button>
                        <!-- /.card -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Errors message --}}
@if ($errors->any())
<div id="errors" class="d-none">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif

@section('script')

<script>
    $(document).ready(function () {
        // Terms Validation Message
        $('#btnSubmit').click(function () {
            if (!$('#terms').is(':checked')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ups',
                    text: 'Mohon menyetujui persyaratan untuk melakukan registrasi :)'
                })
            } else {
                $('#submit').click()
            }
        })

        // Error Validation Message
        if ({{ $errors->count() }} > 0) {
            Swal.fire({
                icon: 'error',
                title: 'Ups, ada kesalahan',
                html: $('#errors').html(),
            })
        }
    })

</script>
@endsection
