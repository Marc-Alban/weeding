<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>


<!-- zone de bradcam -->
<div class="bradcam_area text-center bradcam_bg overlay3">
    <div class="bradcam_text">
        <h3>Hébergement</h3>
    </div>
</div>
<!--/ zone de bradcam -->

<!-- zone d'hébergement -->
<div class="accommodation_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section_title text-center">
                    <h3>Hébergement pour les invités</h3>
                    <p>Il existe de nombreuses variantes de passages du Lorem Ipsum disponibles, mais la majorité ont été modifiées. L'intérêt d'utiliser le Lorem Ipsum est qu'il présente une distribution de lettres plus ou moins normale, contrairement au contenu ici, ce qui le rend semblable à un anglais lisible. De nombreux logiciels de publication assistée par ordinateur et éditeurs de pages Web utilisent désormais le Lorem Ipsum comme modèle de texte.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-xl-12 col-lg-12">
                <div class="accommondation_image">
                    <img src="img/Accommodation/1.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="accommondation_image">
                    <img src="img/Accommodation/2.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="accommondation_image">
                    <img src="img/Accommodation/3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ zone d'hébergement -->

<!-- zone de participation -->
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
                            <div class="popup_box ">
                                <div class="popup_inner">
                                    <div class="form_heading text-center">
                                        <h3>Assisterez-vous ?</h3>
                                        <p>Merci de répondre avant le 30 août</p>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Votre nom">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="col-xl-12">
                                                <select class="form-select wide" id="default-select" class="">
                                                    <option data-display="1 invité">1 invité</option>
                                                    <option value="1">2 invités</option>
                                                    <option value="2">3 invités</option>
                                                    <option value="3">4 invités</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-12">
                                                <textarea placeholder="Message supplémentaire"></textarea>
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
<!-- / zone de participation -->

<!-- section contact -->
<section class="location_area">
    <div class="location_info">
        <div class="location_inner">
            <div class="location_top text-center">
                <h3>Lieu</h3>
                <p>Mas Montagnette, 19 West 21th Str.  <br>
                    <span>+1 843-853-1810</span> </p>
            </div>
            <div class="address_info d-flex justify-content-between">
                <div class="single_address text-center">
                    <h4>Où séjourner</h4>
                    <p>4:00p – 12:00p <br>
                        The Secret Shrine Club</p>
                </div>
                <div class="single_address text-center">
                    <h4>Activités</h4>
                    <p>4:00p – 12:00p <br>
                        The Secret Shrine Club</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="d-none d-sm-block">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
        </div>
    </div>
</section>
<!-- / section contact -->
<?php include 'footer.php'; ?>
