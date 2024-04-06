<!DOCTYPE html>
<html lang="en">


<body>


    @include('header')



    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">{{ GoogleTranslate::trans("Il nous renconte leur experience avec Tech Solution", request()->session()->get('lang') ?? 'fr') }} </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Temoignage</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/temoignage.png" alt="" style="max-height: 300px;">
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
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{ GoogleTranslate::trans("Témoignages", request()->session()->get('lang') ?? 'fr') }}</div>
                    <h1 class="mb-4">{{ GoogleTranslate::trans("Ce que disent nos clients", request()->session()->get('lang') ?? 'fr') }}!</h1>
                  <p class="mb-4">{{ GoogleTranslate::trans("Nos clients sont notre priorité absolue. Voici ce qu'ils disent à propos de notre travail :", request()->session()->get('lang') ?? 'fr') }} </p>
                    <a class="btn btn-primary rounded-pill px-4" href="">{{ GoogleTranslate::trans("En savoir plus", request()->session()->get('lang') ?? 'fr') }}</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">{{ GoogleTranslate::trans("Très satisfait du service fourni par HB Tech Solution. Leur expertise et dévouement ont été cruciaux pour notre projet.", request()->session()->get('lang') ?? 'fr') }} </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-8.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mme LARIS</h5>
                                    <span>DG Winner-expertise</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">{{ GoogleTranslate::trans("La collaboration avec HB Tech Solution pour notre application web et mobile a été très fructueuse. Leur expertise technique et leur engagement ont été essentiels pour concrétiser nos idées.", request()->session()->get('lang') ?? 'fr') }} </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-7.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mr AKUETE</h5>
                                    <span>DG GAGNON Microfinance</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">{{ GoogleTranslate::trans("Nous sommes extrêmement satisfaits de la collaboration avec HB Tech Solution pour notre stratégie de communication digitale. Leur expertise dans ce domaine et leur engagement ont grandement contribué à atteindre nos objectifs de manière efficace.", request()->session()->get('lang') ?? 'fr') }} </p>

                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-9.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mme Genevieve Rose</h5>
                                    <span>DG Light Mode fashion</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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
