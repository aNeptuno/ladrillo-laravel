<section class="trans">  
        <!-- <a>
            <button type="button" class="btn btn-outline-secondary button-scroll" onclick="scrollBtn()">
                <i class="fa-solid fa-angle-down" id="button-scroll-icon"></i>
            </button>
        </a>   -->
</section> 

<!-- PRODUCTOS -->
<section class="section grey" id="section-first">
    <div class="section-header">
        <h3 class="section-title reveal-horizontal fade-left">/ PRODUCTOS</h3>
        <h2 class="section-subtitle reveal-horizontal fade-right">Hacemos tu proyecto realidad.</h2>
    </div>
    <div class="section-content">
        <div class="item reveal-horizontal fade-right">
            <i class="fa-solid fa-video"></i>
            <h4 class="item-t">COBERTURAS</h4>
            <p class="item-p muted">Hacemos registros completos o parciales de tu evento o espectáculo.</p>
        </div>
        <div class="item reveal-horizontal fade-right">
            <i class="fa-solid fa-bullhorn"></i>
            <h4 class="item-t">DIFUSION</h4>
            <p class="item-p muted">Creamos material audiovisual para dar a conocer tu iniciativa.</p>
        </div>
        <div class="item  reveal-horizontal fade-right">
            <i class="fa-solid fa-music"></i>
            <h4 class="item-t">MUSICALES</h4>
            <p class="item-p muted">Videoclips o sesiones para dar a conocer tu obra.</p>
        </div>
        <div class="item  reveal-horizontal fade-right">
            <i class="fa-solid fa-clapperboard"></i>
            <h4 class="item-t">OTROS</h4>
            <p class="item-p muted">Si tenés una idea diferente, contactate con nosotros.</p>
        </div>
    </div>
    <div class="section-btn reveal fade-bottom">
        <a href="{{ url('/products') }}">
            <button type="button" class="btn btn-outline-secondary home-btn">Conocé más</button>
        </a>
    </div>
</section>

<!-- SERVICIOS -->
<section class="section black">
    <div class="section-header">
        <h3 class="section-title reveal-horizontal fade-left">/ SERVICIOS</h3>
        <h2 class="section-subtitle reveal-horizontal fade-right">Tenemos los servicios que necesitás.</h2>
    </div>
    <div class="container">
        <div class="accordion accordion-custom" id="accordionServices">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Alquiler
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionServices">
                    <div class="accordion-body"> Contamos con un pequeño pero útil
                        servicio de rental. Contactate para conocer nuestro catálogo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Asistencia Técnica
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionServices">
                    <div class="accordion-body">
                        ¿Necesitás técnicos para tu rodaje? Los integrantes de Ladrillo nos especializamos en diferentes áreas del audiovisual.
                        Contá con nosotros :)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Postproducción
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionServices">
                    <div class="accordion-body">Si tenés material filmado pero no sabes qué hacer con él, te podemos ayudar.</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- QUIENES SOMOS -->
<section class="section grey">
    <div class="section-header">
        <h3 class="section-title reveal-horizontal fade-left">/ QUIENES SOMOS</h3>
        <h2 class="section-subtitle  reveal-horizontal fade-right">Pasión por el cine, una perspectiva en común sobre el medio y nuestra amistad,
            nos unió para hacer realidad nuestra visión.</h2>
    </div>
    <div class="section-content">
        <div class="reveal fade-bottom">
            <p class="about-p">En Ladrillo buscamos co-crear productos de calidad profesional e interés artístico, siempre teniendo en cuenta tu visión.
                Trabajamos con el cuidado y la dedicación que nuestro compromiso con el medio nos exige.
            </p>
        </div>
    </div>
    <div class="section-btn reveal-horizontal fade-right">
        <a href="{{ url('/aboutUs') }}">
            <button type="button" class="btn btn-outline-secondary home-btn">¡Conocenos!</button>
        </a>
    </div>

</section>

<!-- NUESTROS TRABAJOS -->
<section class="section black">
    <div class="section-header">
        <h3 class="section-title reveal-horizontal fade-left">/ NUESTROS TRABAJOS</h3>
        <h2 class="section-subtitle reveal-horizontal fade-right">Conocé algunos de nuestros proyectos.</h2>
    </div>
    <div class="section-content section-carousel">
        <div id="carouselProductsCaptions" class="carousel slide reveal fade-bottom" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ url('images/trabajos/1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <p>
                            <h3><a href="https://www.youtube.com/watch?v=hTUI70cHDQc">
                                Cobertura - Homenaje a Juan Peyrou - 2022</a>
                            </h3>
                            
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ url('images/trabajos/2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <p>
                            <h3><a href="https://www.youtube.com/watch?v=8ctol8T6_b8">
                                Videoclip - Primitiva - 2021</a>
                            </h3>
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ url('images/trabajos/3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <p>
                            <h3><a href="https://youtu.be/b0a3tx-g9mo">
                                Fashion Film - Septum - 2021</a>
                            </h3>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>