<!-- modal -->
<div id="suksesseminar" class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-content">
        <!-- Any other Bulma elements you want -->
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <!-- <div class="media-coantent"> -->
                        <p class="title is-4">
                            Selesai!
                        </p>
                    <!-- </div> -->
                </div>

                <div class="content">
                    <?php if ($htm != "OTS") {?>
                        Kode pendaftaran kamu : .
                        <center><h3><code><?= $code; ?></code></h3></center>
                     <!--   Lakukan pembayaran HTM <*?= $htm; ?> sebesar Rp<*?= number_format($biaya, 0, ",", ".") ?>,- ke:<br> -->
                     <b></b>Informasi</b><br> 
                        <ol>
                            <li>Kami akan menambahkan nomor kamu ke grup Whatsapp peserta webinar</li>
                            <li>Link, ID dan Password room Zoom akan kami kirimkan ke grup Whatsapp dan ke alamat email kamu (h-1)</li>
                        </ol>
                        
                        Untuk pertanyaan, silahkan hubungi contact person berikut:
                        <table>
                            <tr>
                                <td>Fina Erviana</td>
                                <td>
                                    <a href="https://api.whatsapp.com/send?phone=6282311471826">0823-1147-1826</a>
                                </td>
                                <td>
                                    <a href="tel:+6282311471826" class="button is-primary is-small"><i class="fas fa-phone"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=6282311471826" class="button is-primary is-small"><i class="fab fa-whatsapp"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gilang</td> 6283842135415
                                <td>
                                    <a href="https://api.whatsapp.com/send?phone=6283842135415">0838-4213-5415</a>
                                </td>
                                <td>
                                    <a href="tel:+6283842135415" class="button is-primary is-small"><i class="fas fa-phone"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=6283842135415" class="button is-primary is-small"><i class="fab fa-whatsapp"></i></a>
                                </td>
                            </tr>
                        </table>
                        <b>CATATAN:</b><br>Kami telah mengirimkan Kode Pendaftaran ke email yang Anda berikan. Silakan periksa inbox pada email Anda. Apabila tidak ada pesan baru, periksalah di kotak spam.<br>
                        <p align="right">
                            <a class="button k-button k-primary raised has-gradient slanted" href="<?= base_url(); ?>">
                                <span class="text">
                                    Oke
                                </span>
                                <span class="front-gradient"></span>
                            </a>
                        </p>
                    <?php } else { ?>
                        Selamat! Kini Anda dapat mengikuti acara Webinar.<br>
                      <!--  Karena Anda mendafar pada masa On The Spot, Anda perlu membayar biaya masuk (HTM) sebesar Rp<*?= number_format($biaya, 0, ",", ".") ?>,- langsung ke panitia pendaftaran (Divisi IP). -->
                        <p align="right">
                            <a class="button k-button k-primary raised has-gradient slanted" href="<?= base_url(); ?>">
                                <span class="text">
                                    Oke
                                </span>
                                <span class="front-gradient"></span>
                            </a>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close">x</button>
</div>