<footer>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                  <a href="index.html" class="d-inline-block mb-3">
                      <h1 class="text-white">HB Tech Solution</h1>
                  </a>
                  <p class="mb-0">HB Tech Solution {{ GoogleTranslate::trans("propose des solutions logicielles personnalisées pour les entreprises, répondant précisément à leurs besoins et objectifs.", request()->session()->get('lang') ?? 'fr') }} </p>
              </div>

              <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                  <h5 class="text-white mb-4">{{ GoogleTranslate::trans("Contacts", request()->session()->get('lang') ?? 'fr') }}</h5>
                  <p><i class="fa fa-map-marker-alt me-3"></i>Adidogomé Madiba,<br> Lomé-Togo</p>
                  <p><i class="fa fa-phone-alt me-3"></i>+228 97556532</p>
                  <div class="d-flex pt-2">
                      <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=61557001477948&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/hb_techsolution_officiel/"><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/hb-tech-solution-a2336a2ba/"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <p href="Contact.HbTechSolution@protonmail.com"><i class="fa fa-envelope me-3"></i>Email:<br>contact.HBTechSolution@protonmail.com</p>
              </div>
              <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                  <h5 class="text-white mb-4">{{ GoogleTranslate::trans("Liens populaires", request()->session()->get('lang') ?? 'fr') }}</h5>
                  <a class="btn btn-link" href="/about">{{ GoogleTranslate::trans("À propos de nous", request()->session()->get('lang') ?? 'fr') }}</a>
                  <a class="btn btn-link" href="/service">{{ GoogleTranslate::trans("Nos projets", request()->session()->get('lang') ?? 'fr') }}</a>
                  <a class="btn btn-link" href="/contact">{{ GoogleTranslate::trans("Nous contacter", request()->session()->get('lang') ?? 'fr') }}</a>
                  <a class="btn btn-link" href="/gallerie">{{ GoogleTranslate::trans("Gallerie", request()->session()->get('lang') ?? 'fr') }}</a>
              </div>

              <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                  <h5 class="text-white mb-4">{{ GoogleTranslate::trans("Nos services", request()->session()->get('lang') ?? 'fr') }}</h5>
                  <a class="btn btn-link" href="/automatisation-robotique">{{ GoogleTranslate::trans("Conception de site web", request()->session()->get('lang') ?? 'fr') }}</a>
                  <a class="btn btn-link" href="/apprentissage-machine">{{ GoogleTranslate::trans("Conception d'application mobile", request()->session()->get('lang') ?? 'fr') }}</a>
                  <a class="btn btn-link" href="/analyse-predictive">{{ GoogleTranslate::trans("Designer web / infographie", request()->session()->get('lang') ?? 'fr') }}</a>
                  <a class="btn btn-link" href="/science-des-donnees">{{ GoogleTranslate::trans("Stratégie de Marketing Digital", request()->session()->get('lang') ?? 'fr') }}</a>
              </div>

          </div>
      </div>
      <div class="container wow fadeIn" data-wow-delay="0.1s">
          <div class="copyright">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a class="border-bottom" href="#">HB Tech Solution</a>, {{ GoogleTranslate::trans("Tous droits réservés", request()->session()->get('lang') ?? 'fr') }}.
                      Conçu par <a class="border-bottom" href=""> HB Tech Expertise</a>
                  </div>
                  <div class="col-md-6 text-center text-md-end">
                      <div class="footer-menu">
                        <a href="#">Nos reseaux sociaux</a>
                          <a href="/">{{ GoogleTranslate::trans("facebook", request()->session()->get('lang') ?? 'fr') }}</a>
                          <a href="/cookies">{{ GoogleTranslate::trans("Instagram", request()->session()->get('lang') ?? 'fr') }}</a>


                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

</footer>
