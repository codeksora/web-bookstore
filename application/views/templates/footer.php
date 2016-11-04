<?php

echo '
<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>b</span>-store</h2>
                        <p>Una tienda virtual reconocida por muchos usuarios, donde encontrarás tus libros favoritos.</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="' . base_url() . 'tienda">
                                <div class="iframe-img">
                                    <img src="' . base_url() . 'assets/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Tienda</p>
                            <h2>Ver tienda</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="' . base_url() . 'tienda">
                                <div class="iframe-img">
                                    <img src="' . base_url() . 'assets/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="' . base_url() . 'tienda">
                                <div class="iframe-img">
                                    <img src="' . base_url() . 'assets/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="' . base_url() . 'tienda">
                                <div class="iframe-img">
                                    <img src="' . base_url() . 'assets/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="' . base_url() . 'assets/images/home/map.png" alt="" />
                        <p>Av. 28 de Julio, Lima 15046, Perú</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016 B-STORE - Todos los derechos reservados.</p>
                <p class="pull-right">Desarrollado por <span><a target="_blank" href="#">JAC DEV</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->
<div id="alerta">
    <p></p>
</div>
<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById("gmap"), {
          center: {lat: -12.0648913, lng: -77.0367465},
          scrollwheel: false,
          zoom: 18,
          position: {lat: -12.0648913, lng: -77.0367465}
        });

        var marker = new google.maps.Marker({
            position: {lat: -12.0648913, lng: -77.0367465},
            title:"Tienda B-Store"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
      }

    </script>

<script src="' . base_url() . 'assets/js/jquery.js"></script>
<script src="' . base_url() . 'assets/js/bootstrap.min.js"></script>
<script src="' . base_url() . 'assets/js/jquery.scrollUp.min.js"></script>
<script src="' . base_url() . 'assets/js/price-range.js"></script>
<script src="' . base_url() . 'assets/js/jquery.prettyPhoto.js"></script>
<script src="' . base_url() . 'assets/js/contact.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtzH2GrqfBbkM3ezfgSNuyeA9-IW1-wMw&callback=initMap"></script>
<script src="' . base_url() . 'assets/js/gmaps.js"></script>
<script src="' . base_url() . 'assets/js/main.js"></script>
</body>
</html>';
