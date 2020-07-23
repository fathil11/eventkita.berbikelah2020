@extends('layouts.public')
@section('content')

<!-- About Generic Start -->
<section class="about-generic-area">
    <div class="container border-top-generic">

        <div class="row mt-5">
            <div class="col-lg-8 align-content-center">
                <div class="card card-primary">
                    <div class="card-header">
                        <center>
                            <h3 class="card-title">Konfirmasi Pembayaran</h3>
                        </center>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <center>
                            <h4>Terima kasih atas partisipasinya !</h4>>
                            <p>Registrasi sudah berhasil,</p>
                            <p>segera lakukan pembayaran sebesar</p>
                            <p><b>Rp. 100.000</b> untuk mendapatkan arahan selanjutnya</p>
                            <br>
                            <p>No. Rekening :</p>
                            <p><b>123000 (A/N JARWO)</b> Mandiri</p>
                            <p><b>654321 (A/N JUNET)</b> BCA</p>
                            <br>
                            <p>Bila sudah melakukan pembayaran,</p>
                            <p> anda dapat menghubungi nomor dibawah</p>
                            <p>dengan menyertakan bukti transfer</p>
                            <br>
                            <h4>Konfirmasi:</h4>
                            <p><strong><a href="https://wa.me/62XXXXXXXXXXX?text=Konfirmasi%pembayaran%20A%2FN%20KARYOTO">+6281234567898</a></strong> Garong</p>
                        </center>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer justify-content-between">
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@if (session()->has('success'))
@section('script')
<script>
$(document).ready(function(){
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Terimakasih telah berpartisipasi dalam BerBIKELah 2020 :)'
    })
})
</script>
@endsection
@endif
