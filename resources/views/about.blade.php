<!DOCTYPE html>
<html lang="en">


<body>
    <!-- Spinner Start -->
    @include('header')

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">{{ GoogleTranslate::trans("Qui sommes nous?", request()->session()->get('lang') ?? 'fr') }}Qui sommes nous?</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{ GoogleTranslate::trans("Acceuil", request()->session()->get('lang') ?? 'fr') }}</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{ GoogleTranslate::trans("Acceuil", request()->session()->get('lang') ?? 'fr') }}Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ GoogleTranslate::trans("Qui sommes nous?", request()->session()->get('lang') ?? 'fr') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/about.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Entrez votre recherce">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/tech.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    {{-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Qui sommes nous?</div> --}}
                    <h1 class="mb-4">{{ GoogleTranslate::trans("Nous rendons votre entreprise plus dynamique grâce à nos Solutions de Développement sur Mesure", request()->session()->get('lang') ?? 'fr') }}</h1>
                    <p class="mb-4">{{ GoogleTranslate::trans("nous sommes des experts en création d'applications web et mobiles, en développement de logiciels personnalisés,
                        et en conception de solutions digitales innovantes pour répondre à vos besoins spécifiques. Que vous visiez à automatiser vos processus internes, à améliorer l'expérience utilisateur de vos clients ou à accroître votre présence en ligne, notre équipe talentueuse est prête à relever le défi.", request()->session()->get('lang') ?? 'fr') }}</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ GoogleTranslate::trans("Innovation et Agilité", request()->session()->get('lang') ?? 'fr') }} </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>>{{ GoogleTranslate::trans("Equipe Talentueus", request()->session()->get('lang') ?? 'fr') }}</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ GoogleTranslate::trans("Engagement 24/7", request()->session()->get('lang') ?? 'fr') }} </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{ GoogleTranslate::trans("Prix Compétitifs", request()->session()->get('lang') ?? 'fr') }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">{{ GoogleTranslate::trans("En savoir plus", request()->session()->get('lang') ?? 'fr') }} En savoir plus</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



     <!-- Feature Start -->
     <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">{{ GoogleTranslate::trans("Pourquoi nous choisir?", request()->session()->get('lang') ?? 'fr') }}</div>
                    <h1 class="text-white mb-4">{{ GoogleTranslate::trans("Votre partenaire pour concrétiser vos projets", request()->session()->get('lang') ?? 'fr') }}.</h1>
                    <p class="text-light mb-4">{{ GoogleTranslate::trans("Nous comprenons vos besoins spécifiques et offrons des solutions personnalisées qui dépassent vos attentes", request()->session()->get('lang') ?? 'fr') }} .</p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>{{ GoogleTranslate::trans("Innovation passionnée", request()->session()->get('lang') ?? 'fr') }}</span>
                    </div>
                    <p class="text-light mb-4"></p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>{{ GoogleTranslate::trans("Engagement envers l'excellence", request()->session()->get('lang') ?? 'fr') }}</span>
                    </div>
                    <p class="text-light mb-4"></p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>{{ GoogleTranslate::trans("Approche personnalisée", request()->session()->get('lang') ?? 'fr') }}</span>
                    </div>
                    <p class="text-light mb-4">{{ GoogleTranslate::trans("Nous collaborons étroitement avec nos clients pour comprendre et répondre à leurs besoins spécifiques, offrant des solutions sur mesure", request()->session()->get('lang') ?? 'fr') }}.</p>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">10</h2>
                                    <p class="text-white mb-0">{{ GoogleTranslate::trans("Nos clients", request()->session()->get('lang') ?? 'fr') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">10</h2>
                                    <p class="text-white mb-0">{{ GoogleTranslate::trans("Projets realisée", request()->session()->get('lang') ?? 'fr') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/pourquoi.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Feature End -->







      <!-- Newsletter Start -->
      <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">{{ GoogleTranslate::trans("Restez informé en vous abonnant à notre newsletter", request()->session()->get('lang') ?? 'fr') }}</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Entrez votre adresse e-mail" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    <small class="text-white-50">{{ GoogleTranslate::trans("Recevez les dernières mises à jour et actualités directement dans votre boîte de réception.", request()->session()->get('lang') ?? 'fr') }}</small>
                </div>

            </div>
        </div>
    </div>

</body>
@include('footer')

</html>
