<!-- Bagian modal brosur -->
<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Brosur</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-0 m-0">
                <img class="img-fluid" src="<?php echo base_url('/asset/img/brosur.jpg');?>" alt="brosur"></img>
            </div>
            <div class="modal-footer text-dark float-left">
                <button type="button" class="btn btn-warning float-right btn-sm">Download
                    PDF</button>
            </div>
        </div>
    </div>
</div>
<!-- Bagian modal informasi -->
<div id="myinformasi" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Informasi</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Bagian modal syarat pendaftaran -->
<div id="syaratpendaftaran" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Syarat Pendaftaran</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-sm">
                    <thead class="bg-blues text-white text-small">
                        <tr>
                            <th colspan="2" scope="col"> Syarat Pendaftaran Mahasiswa Baru
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td colspan="2">Lulusan SMU / Kejuruan Semua Jurusan</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td colspan="2">Biaya Pendaftaran ( Sarjana & Diploma III) Rp. 350.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Biaya Pendaftaran ( Pasca Sarajana ) Rp. 500.000,-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-blues p-3 fixed-top shadow-xl">
        <a href="<?php echo base_url();?>" class="navbar-brand">
            <img src="<?php echo base_url("asset/img/logo-04.png")?>" height=" 35" alt="PMB">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#myModal" class="nav-item nav-link active" data-toggle="modal"
                    data-target="#myModal">Brosur</a>
                <a href="#" class="nav-item nav-link">Alur Pendaftaran</a>
                <a href="#syaratpendaftaran" class="nav-item nav-link" class="nav-item nav-link" data-toggle="modal"
                    data-target="#syaratpendaftaran">Syarat Pendaftaran</a>
                <a href="#myinformasi" class="nav-item nav-link" data-toggle="modal"
                    data-target="#myinformasi">Informasi</a>
                <a href="#" class="nav-item nav-link">Kontak</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="<?php echo base_url('login');?>" class="btn btn-outline-warning nav-item">Login</a>
            </div>
        </div>
    </nav>
</div>
<script>
(function titleScroller(text) {
    document.title = text;
    setTimeout(function() {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 500);
}(" PMB STMIK Dharma Negara |"));
</script>