<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MayclaPaySchool</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
      DEBUT CSS POP UP
  ======================================================== -->


  <!-- CSS personnalisé -->
<style>
/* Bouton avec dégradé */
.btn-gradient {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: #fff;
  font-weight: 600;
  border: none;
  border-radius: 50px;
  padding: 10px 20px;
  transition: 0.3s;
}
.btn-gradient:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(106, 17, 203, 0.6);
}

/* Pop-up style glassmorphism */
.custom-popup {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(15px);
  border-radius: 20px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
  animation: popIn 0.5s ease;
}

/* Animation apparition */
@keyframes popIn {
  from { transform: scale(0.8); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
</style>

  <!-- =======================================================
      FIN CSS POP UP
  ======================================================== -->

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/logo.png" alt="">
        {{-- <h1 class="sitename">Rapid</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Accueil</a></li>
          <li>
            <a href="#about">

                <button type="button" class="btn btn-gradient" data-bs-toggle="modal" data-bs-target="#customModal">
                    🚀 Payer la scolarité
                </button>
            </a>
          </li>
          <li><a href="#faq">Question fréquentes</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/assets/img//template/Rapid/hero-bg.jpg" class="hero-bg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-lg-last hero-img">
            <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1>La scolarité <span> réglée en un clic</span></h1>
            <div class="d-flex justify-content-center">
                <a href="#about" class="btn-get-started">Télécharger l'APP mobile sur</a>
            </div>
            <div class="d-flex justify-content-center">
                <img src="assets/img/appstore.png" alt="">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        {{--  DEBUT POP UP --}}

      <!-- Bouton pour ouvrir le popup -->
{{-- <button type="button" class="btn btn-gradient" data-bs-toggle="modal" data-bs-target="#customModal">
  🚀 Ouvrir le Pop-up
</button> --}}

<!-- Pop-up personnalisé -->
<div class="modal fade" id="customModal" tabindex="-1" aria-labelledby="customModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-popup">
      <div class="modal-header border-0">

        <h5 class="modal-title fw-bold text-white text-center w-100" id="customModalLabel">
        ✨ Payer la scolarité
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-white">
            <div class="d-flex justify-content-center gap-3 mt-3 w-100">
                <button type="button" class="btn btn-gradient rounded-pill flex-fill" data-bs-toggle="modal" data-bs-target="#matriculeModal">
                    Payer sans créer <br/> un compte
                </button>

                <button type="button" class="btn btn-gradient rounded-pill flex-fill">
                    Créer un compte
                </button>
            </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-outline-light rounded-pill px-4" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>


<!-- ✅ Deuxième pop-up (formulaire matricule) -->
<div class="modal fade" id="matriculeModal" tabindex="-1" aria-labelledby="matriculeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-popup">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-white text-center w-100" id="matriculeModalLabel">
          ✨ Entrer le matricule de l'apprenant
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body text-white">
        <form>
          <div class="mb-3">
            <label for="matriculeInput" class="form-label text-light">Matricule</label>
            <input type="text" class="form-control rounded-pill" id="matriculeInput" placeholder="Ex : MBJ25">
          </div>
        </form>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-outline-light rounded-pill px-4" data-bs-dismiss="modal">
          Annuler
        </button>
        <button type="button" class="btn btn-gradient rounded-pill px-4">
          Valider
        </button>
      </div>
    </div>
  </div>
</div>

        {{-- FIN POP UP --}}

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section>
    <!-- /Stats Section -->



    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Questions Fréquemment Posées</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Qu’est-ce que MayclaPaySchool ?</h3>
                <div class="faq-content">
                  <p>MayclaPaySchool est une application et un site web qui vous permettent de payer la scolarité de vos proches sans avoir à vous déplacer.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Quel est l’avantage pour un établissement d’avoir un tel système ??</h3>
                <div class="faq-content">
                  <p>Un établissement gagne en efficacité dans la gestion des paiements, réduit considérablement les files d’attente et facilite le suivi des transactions. De plus, aujourd’hui, les parents et les étudiants sont déjà habitués à payer leurs factures (électricité, eau, Canal+, Mobile Money, etc.) via des solutions numériques. MayclaPaySchool s’inscrit donc dans cette même logique moderne et pratique.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Est-il possible de payer la scolarité sans avoir à ouvrir de compte ?</h3>
                <div class="faq-content">
                  <p> Oui, il est possible de payer sans ouvrir de compte. Cependant, vous ne pourrez pas consulter l’historique de vos transactions.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">

              <div class="faq-item">
                <h3>Est-il possible de payer la scolarité de plusieurs élèves ou étudiants avec le même compte ?</h3>
                <div class="faq-content">
                  <p>Oui, vous pouvez payer la scolarité de plusieurs apprenants avec le même compte. Il vous suffit d’entrer le matricule de l’élève, de vérifier ses informations, puis d’effectuer le paiement.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Quels avantages avons-nous à ouvrir un compte sur l’application ?</h3>
                <div class="faq-content">
                  <p> L’ouverture d’un compte vous permet d’accéder à l’historique complet de toutes vos transactions : les paiements effectués, les dates et le statut de chaque opération.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Quels moyens de paiement sont acceptés ?</h3>
                <div class="faq-content">
                  <p>Vous pouvez régler vos paiements via Mobile Money, (Airtel et Moovmoney )</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

             {{-- deubut dexième  lot fac --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                        <div class="faq-item">
                            <h3>Les paiements sont-ils sécurisés ?</h3>
                            <div class="faq-content">
                            <p>Oui. MayclaPaySchool utilise des technologies sécurisées et s’appuie sur des partenaires agréés afin de garantir la fiabilité et la sécurité de vos transactions..</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Comment savoir si mon paiement a bien été pris en compte ?</h3>
                            <div class="faq-content">
                            <p>Après chaque paiement, vous recevez une notification ainsi qu’un reçu électronique consultable dans l’historique de votre compte.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">

                        <div class="faq-item">
                            <h3>Que faire si je me trompe dans le matricule ou le montant ?</h3>
                            <div class="faq-content">
                            <p>Si une erreur survient, contactez immédiatement l’assistance via l’application ou le site web. Notre équipe vous accompagnera pour corriger la situation.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Comment un établissement peut-il s’inscrire sur la plateforme ?</h3>
                            <div class="faq-content">
                            <p> L’établissement doit contacter notre équipe commerciale pour la mise en place de son espace dédié. Une fois inscrit, il pourra suivre en temps réel tous les paiements reçus.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

          {{-- fin deuxième lot fac --}}


        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Temoignages</h2>
        {{-- <p></p> --}}
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Je peux enfin payer l’école de mes enfants sans quitter mon lieu de travail. Simple, rapide, efficace</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Avec MayclaPaySchool, nous avons réduit de moitié les retards de paiement. C’est un vrai soulagement pour notre administration</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Les rappels automatiques m’aident à ne jamais oublier une échéance. Je me sens accompagnée</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>On voit en temps réel qui a payé et qui est en retard. C’est un vrai changement dans la gestion de notre école</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Contact Section -->
    {{-- <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section> --}}
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Adresse</h4>
            <p>Libreville Gabon</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+241 074273811</span><br>
              {{-- <strong>Email:</strong> <span>info@mayclapayschool.com</span><br> --}}
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Heure d'ouverture</h4>
            <p>
              <strong>Lundi-Samedi:</strong> <span>08h 30 - 18h 30</span><br>
              <strong>Dimanche</strong>: <span>fermé</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Nous suivre sur </h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MayclaPaySchool</strong> <span>tous drois reservés</span></p>
      <div class="credits">
        {{-- Designed by <a href="https://mayclapayschool.com/">MayclaPaySchool</a> --}}
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
