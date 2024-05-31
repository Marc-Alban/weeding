<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- bradcam_area  -->
<div class="bradcam_area text-center bradcam_bg overlay3">
    <div class="bradcam_text">
        <h3>Photos Capturées</h3>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- gallery_area  -->
<div class="gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <h3>Galerie de Photos</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row grid no-gutters">
            <div class="col-xl-4 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_1">
                    <a class="popup-image" href="img/gallery/1.png"></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_2">
                    <a class="popup-image" href="img/gallery/2.png"></a>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_3">
                    <a class="popup-image" href="img/gallery/3.png"></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_4">
                    <a class="popup-image" href="img/gallery/4.png"></a>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_5">
                    <a class="popup-image" href="img/gallery/5.png"></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_6">
                    <a class="popup-image" href="img/gallery/6.png"></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_7">
                    <a class="popup-image" href="img/gallery/7.png"></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_8">
                    <a class="popup-image" href="img/gallery/8.png"></a>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-lg-6 grid-item">
                <div class="single_gallery gallery_imag_9">
                    <a class="popup-image" href="img/gallery/9.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ gallery_area  -->

<!-- attend_area -->
<div class="attending_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                <div class="main_attending_area">
                    <div class="flower_1 d-none d-lg-block">
                        <img src="img/appointment/flower-top.png" alt="">
                    </div>
                    <div class="flower_2 d-none d-lg-block">
                        <img src="img/appointment/flower-bottom.png" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="popup_box">
                                <div class="popup_inner">
                                    <div class="form_heading text-center">
                                        <h3>Venez-vous ?</h3>
                                        <p>Merci de répondre avant le 30 août</p>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Votre Nom">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="col-xl-12">
                                                <select class="form-select wide" id="default-select">
                                                    <option data-display="1 Invité">1 Invité</option>
                                                    <option value="1">2 Invités</option>
                                                    <option value="2">3 Invités</option>
                                                    <option value="3">4 Invités</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-12">
                                                <textarea placeholder="Message Additionnel"></textarea>
                                            </div>
                                            <div class="col-xl-12">
                                                <button type="submit" class="boxed_btn3">R.S.V.P</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / attend_area -->

<!-- contact section start -->
<section class="location_area">
    <div class="location_info">
        <div class="location_inner">
            <div class="location_top text-center">
                <h3>Lieu</h3>
                <p>Mas Montagnette, 19 Rue Ouest 21 <br>
                <span>+1 843-853-1810</span></p>
            </div>
            <div class="address_info d-flex justify-content-between">
                <div class="single_address text-center">
                    <h4>Où séjourner</h4>
                    <p>16:00 – 12:00 <br>
                    The Secret Shrine Club</p>
                </div>
                <div class="single_address text-center">
                    <h4>Activités</h4>
                    <p>16:00 – 12:00 <br>
                    The Secret Shrine Club</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="d-none d-sm-block">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                <!-- Carte Google Maps -->
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->

<?php include 'footer.php'; ?>
