
<?php
  if (isset($_GET['mailSuccess'])) {
    echo "<script>alert('Muchas gracias por contactarnos');
    window.location.href = 'index.php#contacto';</script>";
}

if (isset($_GET["mailError"])) {
    echo "<script>alert('Hubo un error en el envío del correo, prueba otra vez');
    window.location.href = window.history.go(-1) + '#contacto';</script>";
}
?>
 
<section class="section black" id="contacto">
    <div class="section-header">
        <h3 class="section-title reveal-horizontal fade-left">/ CONTACTO</h3>
        <h2 class="section-subtitle reveal-horizontal fade-right">Ponete en contacto con nosotros</h2>
    </div>


    <div class="section-content-contact">

        <form class="contact-form needs-validation" id="contact-form"  name="contact-form"  method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
            @csrf 
            <div class="contact-item">
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" id="nombre" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="contact-item">
                <input type="text" class="form-control" class="form-control" placeholder="Email" aria-label="Email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="contact-item">
                <input type="text" class="form-control" placeholder="Asunto" aria-label="Asunto" id="asunto" name="subj" value="{{ old('subj') }}">
                @error('subj')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="contact-item">
                <textarea class="form-control" placeholder="Mensaje" aria-label="Mensaje" id="mensaje" name="msg" value="{{ old('msg') }}"></textarea>
                @error('msg')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @if(Session::has('message_sent'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('message_sent')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="contact-btn">
                <input class="btn btn-secondary btn-contact g-recaptcha"   
                        data-sitekey="6LeTNWYjAAAAAAU6qpt3tGlRHrr2NIVaLfRMnZMk" 
                        data-callback='onSubmit' 
                        data-action='submit' 
                        type="submit" id="submit" value="Enviar">
            </div>
        </form>


        <div class="contact-info">
            <h4>Información de contacto</h4>
            <p>ladrilloproduccionesuy@gmail.com</p>
            <p>Seguinos en nuestras redes</p>
            <li class="nav-item brands-menu contact-brands">
                <a href="https://www.facebook.com/ladrillouy"  id="first-brand">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://www.instagram.com/ladrillo.coop/">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCdT2Xfxy3LvMZS8Agm_lBgQ">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </li>
        </div>
    </div>
</section>

<!-- @push('js')
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>
@endpush -->
