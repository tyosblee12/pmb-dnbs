<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("asset/style.css")?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/mystyle.css") ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?php echo base_url('asset/icon.ico');?>">
    <title>PMB - Dharma Negara</title>
</head>

<body>
    <div class="container">
        <!-- AWAL NAVBAR -->
        <!-- AKHIR NAVBAR -->
        <div class="col-lg-12 col-md-12 text-animate-bottom">
            <div class="pt-5 mt-5 bg-white text-center">
                <div class="container-fluid py-2">
                    <h2 class="font-weight-bold">Pendaftaran</h2>
                    <p>Isi form dibawah ini dengan benar.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center w3-animate-bottom">
                <div class="row">
                    <form class="p-3 ">
                        <div class="form-group">
                            <label for="no_telp">Program Studi</label>
                            <input type="text" class="form-control font-weight-bold" id="jurusan"
                                placeholder="S1 - Teknik Informatika" value="S1 - Teknik Informatika" readonly>
                        </div>
                        <div class="form-row border-5 border-success">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ttl">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="ttl" name="ttl">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="number" class="form-control" id="no_telp" placeholder="Nomor Telepon Aktif">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Alamat Lengkap</label>
                            <textarea type="text" class="form-control" id="inputAddress"
                                placeholder="1234 Main St"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Alamat Email Aktif">
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" placeholder="******************">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Kota</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark bg-blues">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- AWAL FOOTER -->
    <!-- AKHIR FOOTER -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>