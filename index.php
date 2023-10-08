<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="main-content">
        <div class="form-container container">
            <h1 class="text-center text-light">~ Form Biodata ~</h1>
            <form method="POST" action="data.php" name="dataForm">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="namaLengkap" class="form-label text-light">Full Name</label>
                        <input type="text" class="form-control input-custom" id="namaLengkap" name="namaLengkap" placeholder="Input Your Name Here...">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="namaDepan" class="form-label text-light">First Name</label>
                        <input type="text" class="form-control input-custom" id="namaDepan" name="namaDepan" placeholder="Input Your First Name Here...">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="namaBelakang" class="form-label text-light">Last Name</label>
                        <input type="text" class="form-control input-custom" id="namaBelakang" name="namaBelakang" placeholder="Input Your Last Name Here...">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="tanggalLahir" class="form-label text-light">Birth Date</label>
                        <input type="date" class="form-control input-custom" id="tanggalLahir" name="tanggalLahir">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="tanggalLahir" class="form-label text-light">Select Gender</label>
                        <select class="form-select select-custom" aria-label="Default select example" id="select-gender" name="gender">
                            <option id="default" selected>select Your Gender</option>
                            <option value="male" id="gender-male">Male</option>
                            <option value="female" id="gender-female">Female</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="address" class="form-label text-light">Address</label>
                        <textarea class="form-control textArea-custom" placeholder="Input Yiur Address here..." id="address" rows="3" name="address"></textarea>
                    </div>
                    <div class=" col-6 mb-3">
                        <label for="hobby" class="form-label text-light">Hobby</label>
                        <input type="text" class="form-control input-custom" id="hobby" name="hobby" placeholder="Input Your Hobby Here...">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="dreamJob" class="form-label text-light">Dream Job</label>
                        <input type="text" class="form-control input-custom" id="dreamJob" name="dreamJob" placeholder="Input Your Dream Job Here...">
                    </div>
                    <div class="text-center">
                        <button type="submit" value="submit" class="btn btn-primary w-50 submit-btn" name="submit">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>