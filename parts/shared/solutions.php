<section id="portfolio" class="mySection bg-light pt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="s-heading fw-bold text-primary">Produktefür die Zukunft</h2>
            <h4 class="s-subheading text-muted">Die von uns angebotenen Produkte sind innovativ, umweltfreundlich und wirtschaftlich rentabel</h4>
            <h2 class="text-primary s-heading fw-bold pt-3">Unsere Lösungen</h2>
        </div>
        <div class="row gy-4">
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal1" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/solutions/photovoltaik.jpg" alt="Photovoltaik" />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Photovoltaik</div>
                        <div class="pc-subheading text-muted fst-italic">Solarpaneele / Batterien</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal2" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/solutions/globales.jpg" alt="globales" />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Globales System</div>
                        <div class="pc-subheading text-muted fst-italic">Ihre Solaranlage + ein Wechselrichter + eine Batterie + ein Autoladegerät</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="p-item">
                    <a href="#PModal3" class="p-link" data-bs-toggle="modal">
                        <div class="p-hover">
                            <div class="ph-content text-white">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/solutions/infrarotstrahler.jpg" alt="Infrarotstrahler" />
                    </a>
                    <div class="p-caption text-center bg-white p-4">
                        <div class="pc-heading">Infrarotstrahler</div>
                        <div class="pc-subheading text-muted fst-italic">Strahlungsheizkörper</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- portfolio modal item 1-->
<div class="modal fade p-modal" id="PModal1" tabindex="-1" role="dialog" aria-labelledby="myTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.svg" alt="close" />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle1">PHOTOVOLTAIK</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Die Bereitstellung von Strom so nah wie möglich am Verbrauch, dank unserer Solarpaneele / Batterien.</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/solutions/photovoltaik.jpg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Unsere hochmodernen Solarpaneele und Batteriespeichersysteme garantieren eine effiziente und nachhaltige Energieversorgung direkt dort, wo sie benötigt wird. Mit unseren Produkten nutzen Sie Sonnenenergie optimal, um Ihren Energiebedarf umweltfreundlich und kostengünstig zu decken.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Photovoltaik:</strong> Stromerzeugung direkt am Verbrauchsort</li>
                    
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<!-- portfolio modal item 2-->
<div class="modal fade p-modal" id="PModal2" tabindex="-1" role="dialog" aria-labelledby="myTitle2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.svg" alt="close" />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle2">GLOBALES SYSTEM</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Ihre Solaranlage + ein Wechselrichter + eine Batterie + ein Autoladegerät = mehr Unabhängigkeit und Einsparungen</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/solutions/globales.jpg" alt="globales" />
                <p class="my-4 col-lg-6 mx-auto">Kombinieren Sie Ihre Solaranlage mit einem Wechselrichter, einer Batterie und einem Autoladegerät, um Ihre Unabhängigkeit zu maximieren und gleichzeitig Kosten zu sparen. Unser integriertes System garantiert eine effiziente Energieversorgung und bietet Ihnen die Möglichkeit, Ihr Elektrofahrzeug direkt mit erneuerbarer Energie zu laden.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Globales System für mehr Unabhängigkeit</strong></li>
                    
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- portfolio modal item 3-->
<div class="modal fade p-modal" id="PModal3" tabindex="-1" role="dialog" aria-labelledby="myTitle3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content text-center py-5 mt-2">
            <div class="close-modal" data-bs-dismiss="modal" aria-label="Schließen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.svg" alt="close" />
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase mb-3" id="myTitle3">INFRAROTSTRAHLER</h2>
                <p class="p-intro text-muted mb-4 fst-italic">Strahlungsheizkörper, die Ihnen schnell und ohne CO2-Emissionen sanfte Wärme bringen</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/solutions/Infrarotstrahler.jpg" alt="..." />
                <p class="my-4 col-lg-6 mx-auto">Unsere Infrarotstrahler sind die ideale Lösung für alle, die schnell und umweltfreundlich heizen möchten. Diese Strahlungsheizkörper erwärmen Ihre Räume effizient ohne CO2-Emissionen und sorgen für eine angenehme Wärme, die sofort spürbar ist.</p>
                <ul class="list-inline mb-4">
                    <li><strong>Infrarotstrahler: </strong>Schnelle Wärme, null Emissionen</li>
                    
                </ul>
                <button class="btn btn-danger btn-lg text-uppercase py-3" data-bs-dismiss="modal" type="button">Schließen <i class="bi bi-x-lg ms-1"></i></button>
            </div>
        </div>
    </div>
</div>