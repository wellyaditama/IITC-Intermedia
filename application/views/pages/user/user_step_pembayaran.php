<?php $this->load->view('component/nav') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/app/css/stepper.css" />
<div class="container">
  <div class="columns">
    <div class="column is-4">
      <?php $this->load->view('component/stepper') ?>
    </div>
    <!-- pilih lomba -->
    <div class="column is-8 containerr">
      <h1 class="title">Pembayaran</h1>
      <h2 class="subtitle">
        <p>Silahkan lakukan pembayaran sesuai dengan data di bawah ini, lalu unggahlah bukti transfernya di sini. 
          Tunggu 1 * 24 Jam untuk konfirmasi aktif dari admin. Apabila sudah aktif maka anda dapat melanjutkan ke step selanjutnya.</p>
      </h2>
      <!-- <div class="column"> -->
      <div class="notification">
        <article class="media">
          <div class="media-left">
            <p style="font-weight: bold;">Status Peserta : <p>
          </div>
          <div class="media-content">
            <div class="content">
              <?php if ($pendaftaran->status == "unactive") {
                echo "<p class='has-text-danger'>Tidak Aktif</p>";
              } else {
                echo "<p class='has-text-success'>Aktif</p>";
              } ?>
            </div>
          </div>
        </article>
      </div>
      <!-- </div> -->
      <div id="warning" class=""></div>
      <div class="columns is-12">
        <div class="column is-6">
          <table class="table is-stripped">
            <tr>
              <th colspan="2">Rincian Pembayaran</th>
            </tr>
            <tr>
              <td>ID Daftar</td>
              <td><?= $pendaftaran->id ?></td>
            </tr>
            <?php if ($pendaftaran->jumlah_anggota > 0) { ?>
              <tr>
                <td>Nama Team</td>
                <td><?= $pendaftaran->nama_team; ?></td>
              </tr>
            <?php } ?>
            <tr>
              <td>Tanggal Daftar</td>
              <td><?= date("d/m/Y", strtotime($pendaftaran->tanggal_daftar)) ?></td>
            </tr>
            <tr>
              <td>Kategori Lomba</td>
              <td><?= $pendaftaran->namalomba; ?></td>
            </tr>
            <tr>
              <td>Biaya Pendaftaran</td>
              <td>Rp<?= number_format($lomba->harga, 0, ",", ".") ?>,-</td>
            </tr>
          </table>
        </div>
      </div>
       <div>
          <table  class="table is-stripped">
            <tr>
              <th colspan="5">Transfer ke:</th>
            </tr>
            <tr>
              <td colspan="2"><b>Nama Bank / E-wallet</b></th>
              <td ><b>Nomor Rekening</b></td>
              <td><b>Atas Nama</b></td>
            </tr>
            <tr>
              <td colspan="2"><b>BANK BRI</b></th>
              <td>007701106263501</td>
              <td>AZIZ AFIAN NAGITA</td>
            </tr>
            <tr>
              <td colspan="2"><b>JENIUS / BTPN</b></th>
              <td>90230052409</td>
              <td>MOHAMAD SYAHRI NURROCHIM</td>
            </tr>
             <tr>
              <td colspan="2"><b>OVO</b></th>
              <td>082314736799</td>
              <td>DWI SUGIANTO</td>
            </tr>
          </table>
        </div>
      <div id="progress"></div>
      <div class="field">
        <label class="label">Bukti Transfer (ekstensi diterima: JPG, JPEG, PNG; Batas maksimum: 5 MB)</label>
        <form action="javascript:trySaveBayar('<?= base_url(); ?>');" method="POST" enctype="multipart/form-data">
          <div class="field is-grouped">
            <div class="file is-boxed is-success has-name">
              <label class="file-label">
                <input class="file-input" type="file" name="bukti" id="bukti" />
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Upload Foto
                  </span>
                </span>
                <span id="filename" class="file-name">
                  <?= ($pendaftaran->bukti_bayar == "" ? "Pilih berkas foto terlebih dahulu" : $pendaftaran->bukti_bayar); ?>
                </span>
              </label>
            </div>
          </div>
          <div class="field is-grouped">
            <div class="control">
              <input onclick="trySaveBayar('<?= base_url(); ?>');" type="submit" id="simpan" name="kirim" value="Simpan" class="button is-link">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="footer" style="padding-bottom:3rem !important;">
  <div class="content has-text-centered">
		<div class="containerr">
		<div class="columns">
			<div class="column is-4"></div>
				<div class="columns">
					<div class="column">
						<br>
						<a href="http://intermediaamikom.org" >
						<i class="fa fa-globe" style="color:black"></i>
						<p style="color:black">UKM Intermedia</p>
						</a>
					</div>
					<div class="column is-4">
						<a href="">
						<img style="width:30%;" src="<?= base_url() ?>assets/app/images/logo/logo.png" alt="">
						<p style="color:black">IITC 2020</p>
						</a>
					</div>
					<div class="column">
						<br>
						<a href="https://www.instagram.com/iitc_intermedia">
						<i class="fab fa-instagram" style="color:black"></i>
						<p style="color:black">Instagram</p>
						</a>
					</div>
				</div>
				<div class="column is-4">
				</div>
		</div>
		</div>
  </div>
</footer>