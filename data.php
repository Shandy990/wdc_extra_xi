<?php
if (isset($_POST["submit"])) {
    $fullName = $_POST['namaLengkap'];
    $firstName = $_POST['namaDepan'];
    $lastName = $_POST['namaBelakang'];
    $birthDate = $_POST['tanggalLahir'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobby = $_POST['hobby'];
    $dreamJob = $_POST['dreamJob'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="main-content">
        <div class="form-container container">
            <h1 class="text-center text-light text-capitalize">~ <?= $fullName ?> Biodata ~</h1>
            <div class="biodata">
                <div class="row text-light">
                    <div class="col-12 mb-3">
                        <label for="namaLengkap" class="form-label text-light">Full Name</label>
                        <input type="text" class="form-control input-custom" id="namaLengkap" name="namaLengkap">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="namaDepan" class="form-label text-light">First Name</label>
                        <input type="text" class="form-control input-custom" id="namaDepan" name="namaDepan">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="namaBelakang" class="form-label text-light">Last Name</label>
                        <input type="text" class="form-control input-custom" id="namaBelakang" name="namaBelakang">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="tanggalLahir" class="form-label text-light">Birth Date</label>
                        <input type="text" class="form-control input-custom" id="tanggalLahir" name="tanggalLahir">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="tanggalLahir" class="form-label text-light">Select Gender</label>
                        <input type="text" id="select-gender" name="gender" class="form-control input-custom">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="address" class="form-label text-light">Address</label>
                        <textarea class="form-control textArea-custom" id="address" rows="3" name="address"></textarea>
                    </div>
                    <div class=" col-6 mb-3">
                        <label for="hobby" class="form-label text-light">Hobby</label>
                        <input type="text" class="form-control input-custom" id="hobby" name="hobby">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="dreamJob" class="form-label text-light">Dream Job</label>
                        <input type="text" class="form-control input-custom" id="dreamJob" name="dreamJob">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>