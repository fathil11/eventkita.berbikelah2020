function sukses() {
    Swal.fire({
        type: 'success',
        title: '<strong>Sukses!</strong>',
        text: 'Registrasi Berhasil!',
        timer: 1000,
        showConfirmButton: false
    }).then(function() {
        window.location.href = "confirm.php";
    })
};

function login() {
    Swal.fire({
        type: 'success',
        title: '<strong>Sukses!</strong>',
        text: 'Login Berhasil!',
        timer: 1000,
        showConfirmButton: false
    }).then(function() {
        window.location.href = "scan.php";
    })
};