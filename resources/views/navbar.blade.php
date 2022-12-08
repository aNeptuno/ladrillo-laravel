
<nav class="navbar navbar-1 navbar-dark bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ url('images/logos/iso.svg') }}" alt="Ladrillo logo" id="logo-nav"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-nav">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-nav">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/services') }}">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/aboutUs') }}">Quiénes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/works') }}">Nuestros trabajos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item brands-menu">
                <a href="https://www.facebook.com/ladrillouy">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://www.instagram.com/ladrillo.coop/">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="fa-brands fa-youtube"></i>
                </a>
              </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<nav class="navbar navbar-2 navbar-expand-lg navbar-dark bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ url('images/logos/iso.svg') }}" alt="Ladrillo logo" id="logo-nav">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/products') }}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/aboutUs') }}">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/works') }}">Nuestros trabajos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">Contacto</a>
        </li>
      </ul>
    </div> 

  </div>
</nav>