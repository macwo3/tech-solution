<!DOCTYPE html>
<html lang="en">


<body>
@include('header')


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">{{ GoogleTranslate::trans("Allons à la découverte de nos projets", request()->session()->get('lang') ?? 'fr') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{ GoogleTranslate::trans("Acceuil", request()->session()->get('lang') ?? 'fr') }}</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ GoogleTranslate::trans("Nos projets", request()->session()->get('lang') ?? 'fr') }}Nos projets</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/project.png" alt="" style="max-height: 300px;">
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
                            placeholder="Entrez vote recherche">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

  <!-- Case Start -->
  <div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{ GoogleTranslate::trans("NOS PROJETS RECENTS ", request()->session()->get('lang') ?? 'fr') }}</div>
            <h2 class="mb-4">{{ GoogleTranslate::trans("Quelques projets phares développés par", request()->session()->get('lang') ?? 'fr') }} Tech Solution.</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/project-6.jpg" alt="">
                    <a class="case-overlay text-decoration-none" href="">
                        <small>Application mobile</small>
                        <h5 class="lh-base text-white mb-3">{{ GoogleTranslate::trans("D-Academy est une application de E-learning de gestion des cours et quizz", request()->session()->get('lang') ?? 'fr') }}
                        </h5>
                        <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/project-5.jpg" alt="">
                    <a class="case-overlay text-decoration-none" href="">
                        <small>Application mobile</small>
                        <h5 class="lh-base text-white mb-3">Titan est une application mobile de réseèrvation de taxi moto
                        </h5>
                        <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/project-4.jpg" alt="">
                    <a class="case-overlay text-decoration-none" href="">
                        <small>{{ GoogleTranslate::trans("Application web", request()->session()->get('lang') ?? 'fr') }}</small>
                        <h5 class="lh-base text-white mb-3">Hotel Premuim(PR) {{ GoogleTranslate::trans("est une application web modulabe de gestion de services hoteliers", request()->session()->get('lang') ?? 'fr') }}
                        </h5>
                        <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Case End -->


      <!-- FAQs Start -->
      <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">{{ GoogleTranslate::trans("FAQ populaires", request()->session()->get('lang') ?? 'fr') }}</div>
                <h1 class="mb-4">{{ GoogleTranslate::trans("Questions fréquemment posées", request()->session()->get('lang') ?? 'fr') }}</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    {{ GoogleTranslate::trans("Comment créer un site internet ?", request()->session()->get('lang') ?? 'fr') }}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    {{ GoogleTranslate::trans("Nous proposons un processus de développement web complet, de la conception à la mise en ligne, en utilisant les technologies les plus récentes pour garantir un site web moderne et fonctionnel", request()->session()->get('lang') ?? 'fr') }}.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {{ GoogleTranslate::trans("Combien de temps faudra-t-il pour obtenir un nouveau site Web", request()->session()->get('lang') ?? 'fr') }} ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    {{ GoogleTranslate::trans("Combien de temps faudra-t-il pour obtenir un nouveau site WebLe délai de création d'un nouveau site web dépend de divers facteurs, notamment la complexité du projet, les fonctionnalités requises et la disponibilité des ressources. Nous travaillons efficacement pour livrer votre site dans les délais convenus", request()->session()->get('lang') ?? 'fr') }}.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    {{ GoogleTranslate::trans("Créez-vous uniquement des sites Web HTML ", request()->session()->get('lang') ?? 'fr') }}?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    {{ GoogleTranslate::trans("Non, nous utilisons une variété de technologies et de plateformes pour répondre aux besoins spécifiques de nos clients, y compris les sites web dynamiques, les applications web & Mobiles et les solutions e-commerce", request()->session()->get('lang') ?? 'fr') }}.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    {{ GoogleTranslate::trans("Mon site Web sera-t-il adapté aux mobiles", request()->session()->get('lang') ?? 'fr') }} ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    {{ GoogleTranslate::trans("Absolument. Nous concevons et développons des sites web entièrement réactifs, garantissant une expérience utilisateur optimale sur tous les appareils, y compris les smartphones et les tablettes", request()->session()->get('lang') ?? 'fr') }}.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    {{ GoogleTranslate::trans("Allez-vous maintenir mon site pour moi", request()->session()->get('lang') ?? 'fr') }}?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    {{ GoogleTranslate::trans("Oui, nous proposons des services de maintenance et de support pour assurer le bon fonctionnement continu de votre site web, y compris les mises à jour de contenu, les correctifs de sécurité et les améliorations fonctionnelles", request()->session()->get('lang') ?? 'fr') }}.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    {{ GoogleTranslate::trans("Je suis sur un budget strict. Avez-vous des options à faible coût ", request()->session()->get('lang') ?? 'fr') }}?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    {{ GoogleTranslate::trans("Nous comprenons l'importance de respecter les contraintes budgétaires. Nous proposons des solutions adaptées à différents budgets, en optimisant les ressources disponibles pour offrir la meilleure valeur à nos clients ", request()->session()->get('lang') ?? 'fr') }}.
                                </div>
                            </div>
                        </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                {{ GoogleTranslate::trans("Est-il possible de personnaliser entièrement le design de mon site web ?", request()->session()->get('lang') ?? 'fr') }}
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                {{ GoogleTranslate::trans("Oui, nous offrons des services de conception web personnalisés pour répondre aux besoins spécifiques de nos clients. Nous travaillons en étroite collaboration avec vous pour comprendre vos préférences en matière de design et créer un site web unique qui reflète l'identité de votre entreprise.", request()->session()->get('lang') ?? 'fr') }}
                            </div>
                        </div>
                    </div>

                      <div class="accordion-item wow fadeIn" data-wow-delay="0.9s">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                {{ GoogleTranslate::trans("Proposez-vous des solutions d'hébergement pour les sites web que vous créez ?", request()->session()->get('lang') ?? 'fr') }}
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                {{ GoogleTranslate::trans("Oui, nous offrons des services d'hébergement web pour nos clients. Nous proposons différentes options d'hébergement adaptées à vos besoins, allant des serveurs partagés aux solutions d'hébergement dédiées, garantissant ainsi la performance et la disponibilité de votre site web", request()->session()->get('lang') ?? 'fr') }}.
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


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
    <!-- Newsletter End -->

</body>
@include('footer')

</html>
