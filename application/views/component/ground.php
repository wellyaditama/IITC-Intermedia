<!-- modal -->
        <div id="whatsapp" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <!-- Any other Bulma elements you want -->
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <!-- <div class="media-coantent"> -->
                                <p class="title is-4">
                                    Hubungi Kami
                                </p>
                            <!-- </div> -->
                        </div>

                    <div class="content">
                    Untuk pertanyaan dan informasi lebih lanjut, hubungi:<br><br>
                    <table>
                        <tr><td>Fina Erviana</td><td><a href="https://api.whatsapp.com/send?phone=6282311471826" target="_blank">0823-1147-1826</a></td><td><a href="tel:+6282311471826" class="button is-primary"><i class="fas fa-phone"></i></a></td></tr>
                        <tr><td>Meilia</td><td><a href="https://api.whatsapp.com/send?phone=6285726467006" target="_blank">0857-2646-7006</a></td><td><a href="tel:+6285726467006" class="button is-primary"><i class="fas fa-phone"></i></a></td></tr>
                    </table>
                    <span class="text">
                    Klik nomor diatas untuk menghubungi via WhatsApp, atau klik <a class="button is-primary is-small"><i class="fas fa-phone "></i></a> untuk memanggil/menyimpan kontak.
                    </span>
                    <br><br>
                    <p align="right">
                    <button
                        class="button k-button k-primary raised has-gradient slanted"
                        onclick="hideWhatsApp();"
                    >
                        <span class="text">
                        Tutup
                        </span>
                        <span class="front-gradient"></span>
                    </button>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <!-- <button class="modal-close is-large" aria-label="close"></button> -->
        </div>
        
        <script src="<?= base_url()?>assets/app/js/app.js"></script>
        <script type="text/javascript">
            var step = "<?= @$step; ?>";
            var ket  = "<?= @$keterangan; ?>";
        </script>
        <script src="<?= base_url()?>assets/app/js/warning.js"></script>
        <script src="<?= base_url()?>assets/app/js/step.js"></script>
        <!--script src="assets/js/particlesjs/particles.min.js"></script-->
        <script src="<?= base_url()?>assets/app/js/aos/aos.js"></script>
        <script src="<?= base_url()?>assets/app/js/timer.js"></script>
        <script src="<?= base_url()?>assets/app/js/timeline.js"></script>
        <script src="<?= base_url()?>assets/app/js/roadmap.js"></script>
        <script src="<?= base_url()?>assets/app/js/main.js" defer="defer"></script>        
		<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="<?= base_url()?>assets/app/js/custom.js"></script>
		<script src="<?= base_url()?>assets/app/js/dashboard.js"></script>
		<?= $this->session->flashdata('pesan')?>
	</body>  
	
</html>