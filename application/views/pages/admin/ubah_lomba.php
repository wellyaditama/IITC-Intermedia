<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        IITC Admin Profile
    </title>
    <?php $this->load->view('assets/admin/stylesheet') ?>
</head>

<body class="">
    <!-- sidebar -->
    <?php $this->load->view('master/admin/sidebar') ?>
    <!-- end sidebar -->
    <div class="main-content">
        <!-- header -->
        <?php $this->load->view('master/admin/header') ?>
        <!-- end header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <?php echo $this->session->flashdata('pesan') ?>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Ubah Lomba</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <h6 class="heading-small text-muted mb-4">Informasi Lomba</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Nama</label>
                                                <input type="text" name="nama" class="form-control form-control-alternative" value="<?= $lomba[0]['nama'] ?>" placeholder="Masukkan nama perlombaan">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-kategori">kategori</label>
                                                <select name="id_k" class="form-control form-control-alternative">
                                                    <option value="">Pilih Kategori Lomba</option>
                                                    <?php foreach ($kategori as $key => $val) { ?>
                                                        <option value="<?= $val['id'] ?>" <?php if ($lomba[0]['id_kategori'] == $val['id']) {
                                                                                                    echo "selected";
                                                                                                } ?>><?= $val['nama'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Tema</label>
                                                <input type="text" name="tema" class="form-control form-control-alternative" placeholder="Masukkan tema perlombaan" value="<?= $lomba[0]['tema'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Keterangan</label>
                                                <select name="keterangan" class="form-control form-control-alternative">
                                                    <option value="">Pilih Keterangan Lomba</option>
                                                    <option value="individu" <?php if ($lomba[0]['keterangan'] == "individu") {
                                                                                    echo "selected";
                                                                                } ?>>Individu</option>
                                                    <option value="kelompok" <?php if ($lomba[0]['keterangan'] == "kelompok") {
                                                                                    echo "selected";
                                                                                } ?>>Kelompok</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Jumlah Anggota</label>
                                                <input type="number" name="jumlah" class="form-control form-control-alternative" value="<?= $lomba[0]['jumlah_anggota'] ?>" placeholder="Dihitung anggota saja (koor tidak masuk)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Deskripsi</label>
                                                <textarea name="des" rows="5" class="form-control form-control-alternative" placeholder="Masukkan deskripsi perlombaan"><?= $lomba[0]['deskripsi'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">HTM Lomba</label>
                                                <input type="number" name="harga" class="form-control form-control-alternative" placeholder="Masukkan HTM Lomba" value="<?= $lomba[0]['harga'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Guide Book (panduan):zip/rar</label>
                                                <input type="file" name="gb" class="form-control form-control-alternative">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php foreach ($lomba as $key => $val) { ?>
                                                <div class="row form-group">
                                                    <div class="col-lg-5"><input class="form-control" type="text" name="nama_lomba[]" value="<?= $val['nama_lomba'] ?>" placeholder="Ex : Juara 1"></div>
                                                    <div class="col-lg-5"><input class="form-control" type="number" name="nominal[]" value="<?= $val['nominal'] ?>" placeholder="Nominal (1000000)"></div>
                                                    <div class="col-lg-2"><button onclick="btn_remove(this)" type="button" class="btn btn-md btn-danger"><i class="fa fa-trash"></i> Hapus</button></div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Gambar</label>
                                                <input type="file" class="form-control form-control-alternative" name="gambar">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Lampiran File</label>
                                                <select name="lampiran" class="form-control form-control-alternative">
                                                    <option value="">Pilih Status Lampiran File</option>
                                                    <option value="true" <?php if ($lomba[0]['lampiran'] == "true") {
                                                                                echo "selected";
                                                                            } ?>>Dibutuhkan</option>
                                                    <option value="false" <?php if ($lomba[0]['lampiran'] == "false") {
                                                                                echo "selected";
                                                                            } ?>>Tidak Dibutuhkan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nama">Pre Registration</label>
                                                <select name="pre" class="form-control form-control-alternative">
                                                    <option value="">Pilih Status Pre Registration</option>
                                                    <option value="true" <?php if ($lomba[0]['pre_registration'] == "true") {
                                                                                echo "selected";
                                                                            } ?>>Dibutuhkan</option>
                                                    <option value="false" <?php if ($lomba[0]['pre_registration'] == "false") {
                                                                                echo "selected";
                                                                            } ?>>Tidak Dibutuhkan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <input type="submit" value="simpan" name="kirim" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('master/admin/footer') ?>
        </div>
    </div>
</body>
<?php $this->load->view('assets/admin/javascript') ?>

</html>