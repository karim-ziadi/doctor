
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dr.Ziadi Jamel</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('front/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('front/css/owl.carousel.min.css')}}" rel="stylesheet">

        <link href="{{asset('front/css/owl.theme.default.min.css')}}" rel="stylesheet">

        <link href="{{asset('front/css/templatemo-medic-care.css')}}" rel="stylesheet">
        


    </head>
    
    <body id="top">
    
        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        Dr.Ziadi Jamel
                        <strong class="d-block">Chirurgien Urologue</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Accueille</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about">À propos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#timeline">Services</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                                Dr.Ziadi Jamel
                                <strong class="d-block">Chirurgien Urologue</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Cabinet</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#booking">Rendez-Vous</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}"><i class="bi bi-box-arrow-in-right"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('front/images/slider/2.png')}}" class="img-fluid" alt="" >
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{asset('front/images/slider/3.png')}}" class="img-fluid" alt="" >
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{asset('front/images/slider/4.png')}}" class="img-fluid" alt="" >
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-4">
                                    Meilleure 
                                    <div class="animated-info">
                                        <span class="animated-item">Santé</span>
                                        <span class="animated-item">Jours</span>
                                        <span class="animated-item">Vit</span>
                                    </div>
                                </h1>
                                <p style="font-size: 13px;">
                                                Bienvenue dans notre cabinet
                                                d'urologie située à Avenue 14
                                                janvier kasserine.La diversité
                                                de nos prestations,nous permet
                                                de vous offrir une gamme
                                                complète de services médicaux et
                                                chirurgicaux.<br />Très à
                                                l'écoute de nos patients,nous
                                                nous tenons à disposition durant
                                                toute la durée des soins .<br />Nos
                                                assistantes médicales
                                                compétentes seront là pour vous
                                                conseiller et orionter.<br />Nous
                                                sommes ravis de vous acceuillir
                                                à notre cabinet .</span
                                                >
                                            </p>
                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="tel:28 120 908" data-hover="Appeler"><i class="bi-phone"></i> 28 120 908</a>

                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Rencontrez <span style="color:var(--primary-color)">Dr Ziadi Jamel</span></h2>

                            <p>Dr Ziadi Jamel,spécialiste en chirurgie
                                urologique,diplomé de la Faculté de Médecine de
                                Monastir.Ancien médecin spécialiste à l hopital
                                régional de Kasserine.</p>

                            
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">15</span> Ans<br>d'expériences</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="{{asset('front/images/gallery/44.png')}}" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src="{{asset('front/images/gallery/55.png')}}" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Nos Services</h2>
                        
                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Chirurgie laparoscopique</h3>

                                    <p>Donec facilisis urna dui, a dignissim mauris pretium a. Quisque quis libero fermentum, tempus felis eu, consequat nibh.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    {{-- <i class="bi-patch-check-fill timeline-icon"></i> --}}
                                    <img class="timeline-icon" src="{{asset('front/images/service/laparoscopie.png')}}"  style="width: 58px;margin-left: 16px;margin-top: 9px;">
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    {{-- <time>2021-07-31 Saturday</time> --}}
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">lithotriptie Extra corporelle</h3>

                                    <p>You are fully permitted to use this template for your commercial or personal website. You are not permitted to redistribute the template ZIP file for a download purpose on any other</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <img class="timeline-icon" src="{{asset('front/images/service/11.png')}}"  style="width: 58px;margin-left: 16px;margin-top: 9px;">
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Chirurgie Urologique</h3>

                                    <p>Phasellus eleifend, urna interdum congue viverra, arcu neque ultrices ligula, id pulvinar nisi nibh et lacus. </p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <img class="timeline-icon" src="{{asset('front/images/service/22.png')}}"  style="width: 58px;margin-left: 16px;margin-top: 9px;">
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    {{-- <time>2021-06-28 Monday</time> --}}
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Sterilité Masculine Et Impuissance</h3>

                                    <p class="mb-0 pb-0">Fusce vestibulum euismod nulla sed ultrices. Praesent rutrum nulla vel sapien euismod, quis tempus dui placerat.</p>
                                    
                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <img class="timeline-icon" src="{{asset('front/images/service/63.png')}}"  style="width: 58px;margin-left: 16px;margin-top: 9px;">
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    {{-- <time>2021-05-30 Sunday</time> --}}
                                </div>
                            </div>

                            {{-- <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Freelance Nursing</h3>

                                    <p>If you need a working contact form that submits email to your inbox, please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">visit our contact page</a> for more information.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-person timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-05-18 Tuesday</time>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="reviews">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Notre Cabinet</h2>

                            <div class="owl-carousel reviews-carousel">

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <img src="{{asset('front/images/cabinet/1.png')}}"  alt="">
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <img src="{{asset('front/images/cabinet/26.png')}}"  alt="">
                                </figure>
                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <img src="{{asset('front/images/cabinet/257.png')}}"  alt="">
                                </figure>

                               
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Prenez rendez-vous</h2>
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                </div>
                                @endif
                                <form action="{{route('sendEmail')}}" method="POST" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Nom & Prénon" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Adresse E-mail" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="phone" id="phone"  class="form-control" placeholder="Telephone: 22 22 22 22">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            {{-- <input type="date" name="date"  value="" class="form-control"> --}}
                                            <input type="date"class="form-control" >
                                            
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message supplémentaire"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Réserver maintenant</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="section-padding">
              <div class="container">
                    <div class="row">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4056315144717!2d8.833725315220482!3d35.17144128031643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f91556374b26fb%3A0xa91dc1f3d3e43ad6!2sCabinet%20Dr%20Ziadi%20Jamel!5e0!3m2!1sen!2stn!4v1644224549507!5m2!1sen!2stn" width="100%"
                                        height="350"
                                        style="border: 0"
                                        allowfullscreen=""
                                        frameborder="0"
                                        loading="lazy"
                                        allowfullscreen></iframe>
                    </div>
              </div>
            </section>
        </main>


        <footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <h5 class="mb-lg-4 mb-3">Horaires d'ouvertures</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                Dimanche : Fermer
                            </li>

                            <li class="list-group-item d-flex">
                                Lundi - Vendredi
                                <span>8h00 - 17H00</span>
                            </li>

                            <li class="list-group-item d-flex">
                                Samedi
                                <span>8h00 - 13H00</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3">Notre Cabinet</h5>

                        <p><a href="mailto:hello@company.co">docteurziadi@yahoo.fr</a><p>

                        <p>14 janvier, Kasserine, Tunisia</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-2">Socials</h5>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/profile.php?id=100078703093751" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>

                        <div>
                            <p class="copyright-text">Copyright © karamix 2023 
                            {{-- <br><br>Design: <a href="https://templatemo.com" target="_parent">TemplateMo</a></p>
                            <p class="copyright-text">Distributed By: <a href="https://themewagon.com" target="_parent">Themewagon</a></p> --}}
                        </div>
                    </div>

                   

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('front/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/scrollspy.min.js')}}"></script>
        <script src="{{asset('front/js/custom.js')}}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            config ={
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                
            }
            flatpickr("input[type=date]",config)
        </script> --}}

    </body>
</html>