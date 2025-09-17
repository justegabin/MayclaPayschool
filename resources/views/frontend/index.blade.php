<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MayclaPaySchool</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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

   <!--  SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <!-- =======================================================
      DEBUT CSS POP UP
  ======================================================== -->


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

 <style>
        .btn-gradient {
            background: linear-gradient(45deg, #6c5ce7, #a29bfe);
            border: none;
            color: white;
        }
        .btn-gradient:hover {
            background: linear-gradient(45deg, #5245c9, #8479f2);
            color: white;
        }
        .custom-popup {
            background: linear-gradient(135deg, #2d3436, #636e72);
            border-radius: 20px;
        }
        .form-control[readonly] {
            background-color: #f8f9fa;
            opacity: 1;
        }
    </style>

  <!-- =======================================================
      FIN CSS POP UP
  ======================================================== -->


  <!-- =======================================================
      DEBUT  CSS VALIDATION PAIEMENT MOBILE MONEY
  ======================================================== -->

    <style>
            .is-valid {
                border-color: #28a745 !important;
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right calc(0.375em + 0.1875rem) center;
                background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }

            .is-invalid {
                border-color: #dc3545 !important;
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right calc(0.375em + 0.1875rem) center;
                background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
    </style>

  <!-- =======================================================
      FIN CSS VALIDATION PAIEMENT MOBILE MONEY
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

                <button type="button" class="btn btn-gradient" data-bs-toggle="modal" data-bs-target="#wizardModal1">
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

        {{-- =====================================================================================
          DEBUT POP UP  <!-- Wizard Modal 1 -->
          =======================================================================================--}}


{{-- ===================================================================================== DEBUT POP UP -- Wizard Modal 1 =======================================================================================--}}
<div class="modal fade" id="wizardModal1" tabindex="-1" aria-labelledby="wizardModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-popup">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold text-white text-center w-100" id="wizardModalLabel">✨ Payer la scolarité</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body text-white">

                {{-- Step 1 --}}
                <div class="wizard-step" id="step1">
                    <p>Choisissez une option :</p>
                    <div class="d-flex justify-content-center gap-3 mt-3 w-100">
                        <button type="button" class="btn btn-gradient rounded-pill flex-fill" onclick="nextStep(2)">
                            Payer sans créer un compte
                        </button>
                        <button type="button" class="btn btn-gradient rounded-pill flex-fill" onclick="openWizard2()">
                            Se connecter / Créer un compte
                        </button>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="wizard-step  d-none" id="step2">
                    <p>Entrez le matricule de l'apprenant :</p>
                    <form id="matriculeForm">
                        <div class="mb-3">
                            <label for="matriculeInput" class="form-label text-light">Matricule</label>
                            <input type="text" class="form-control rounded-pill" id="matriculeInput" name="matricule" placeholder="Ex : MBJ25" required>
                            <div id="matriculeError" class="text-danger mt-2 d-none"></div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(1)">Retour</button>
                        <button type="button" class="btn btn-gradient rounded-pill px-4" id="rechercherBtn" onclick="rechercherMatricule()">
                            <span id="rechercherText">Suivant</span>
                            <span id="rechercherSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                        </button>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="wizard-step d-none" id="step3">
                    <p>Vérifiez les informations de l'apprenant :</p>
                    <div class="d-flex flex-column gap-2">
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">Matricule</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="displayMatricule" readonly>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">Nom & Prénoms</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="displayNomPrenom" readonly>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">École</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="displayEcole" readonly>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">Niveau scolaire</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="displayNiveau" readonly>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">Scolarité mensuelle</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="displayScolarite" readonly>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">Frais de service</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="displayFrais" readonly>
                        </div>

                        <!-- AJOUTEZ CES DEUX CHAMPS DE SAISIE -->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="mobileMoneyType" class="form-label text-light mb-0" style="width: 140px;">Type mobile money</label>
                            <select id="mobileMoneyType" class="form-control rounded-pill flex-fill">
                                <option value="">-- Sélectionnez --</option>
                                <option value="airtel">Airtel Money</option>
                                <option value="moov">Moov Money</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 140px;">Numéro de téléphone</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="telStep3" placeholder="074273811">
                        </div>
                        <!-- FIN DES CHAMPS AJOUTÉS -->
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(2)">Retour</button>
                        {{-- <button type="button" class="btn btn-gradient rounded-pill px-4" onclick="nextStep(5)">Valider</button> --}}
                        {{-- <button type="button" class="btn btn-gradient rounded-pill px-4" onclick="validerEtPasserEtape4()">Valider</button> --}}
                        <button type="button" class="btn btn-gradient rounded-pill px-4" onclick="validerEtPasserEtape5()">Valider</button>
                    </div>
                </div>

                {{-- Step 4 --}}
                {{-- <div class="wizard-step d-none" id="step4">
                    <p>Confirmez votre paiement :</p>
                    <form id="formStep4">
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 120px;">Montant à payer</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="montantStep4" placeholder="70.000 FCFA">
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 120px;">Frais de service</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="fraisStep4" placeholder="1500 FCFA">
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="mobileMoneyType" class="form-label text-light mb-0" style="width: 120px;">Type mobile money</label>
                            <select id="mobileMoneyType" class="form-control rounded-pill flex-fill">
                                <option value="">-- Sélectionnez --</option>
                                <option value="airtel" selected>Airtel Money</option>
                                <option value="moov">Moov Money</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label class="form-label text-light mb-0" style="width: 120px;">Numéro de téléphone</label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="telStep4" placeholder="074273811">
                        </div>
                    </form>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(3)">Retour</button>
                        <button type="button" class="btn btn-gradient rounded-pill px-4" onclick="nextStep(5)">Valider</button>
                    </div>
                </div> --}}

                {{-- Step 5 --}}
                {{-- <div class="wizard-step d-none" id="step5">
                    <div class="text-center">
                        <h5 class="fw-bold text-success">✅ Paiement réussi !</h5>
                        <p class="mt-3">Votre paiement es  été effectué avec succès. Un reçu vous a été envoyé par SMS.</p>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" class="btn btn-gradient rounded-pill px-4" data-bs-dismiss="modal">Terminer</button>
                    </div>
                </div> --}}

                {{-- <div class="wizard-step d-none" id="step5">
                    <div class="text-center">
                        <h5 class="fw-bold text-warning">⏳ Validation du paiement</h5>
                        <p class="mt-3">Un pop-up de confirmation vient d'être envoyé sur votre téléphone.</p>
                        <p>Veuillez saisir votre mot de passe Mobile Money pour finaliser la transaction.</p>
                        <div class="spinner-border text-light mt-3" role="status">
                            <span class="visually-hidden">En attente de confirmation...</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" class="btn btn-gradient rounded-pill px-4" data-bs-dismiss="modal">Terminer</button>
                    </div>
                </div> --}}


                <div class="wizard-step d-none" id="step5">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-phone text-warning" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="fw-bold text-warning">Validation requise</h5>
                        {{-- <p class="mt-3">Un message de confirmation a été envoyé sur votre téléphone.</p> --}}
                        <p>Veuillez saisir votre <strong>mot de passe Mobile Money</strong> dans le pop-up qui s'affiche pour finaliser le paiement.</p>

                        <div class="alert alert-info mt-3">
                            <i class="bi bi-info-circle"></i> Si le pop-up n'apparaît pas, reprenez la procédure
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4 me-2" onclick="prevStep(4)">Retour</button>
                        <button type="button" class="btn btn-gradient rounded-pill px-4" data-bs-dismiss="modal">Terminer</button>
                    </div>
                </div>
                {{-- FIN --}}

            </div>
        </div>
    </div>
</div>
{{-- ===================================================================================== FIN POP UP =======================================================================================--}}


        {{-- =====================================================================================
          FIN POP UP  <!-- FIN  Wizard Modal  1 -->
          =======================================================================================--}}

        {{-- =====================================================================================
          DEBUT POP UP  <!-- Wizard Modal 2 -->
          =======================================================================================--}}


            <div class="modal fade" id="wizardModal2" tabindex="-1" aria-labelledby="wizardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content custom-popup">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold text-white text-center w-100" id="wizardModalLabel">
                    ✨ Se connecter
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>

                <div class="modal-body text-white">
                    <!-- Step 1 -->
                    <div class="wizard-step" id="step11">
                   {{--  <p>Choisissez une option :</p> --}}

                    <div class="d-flex justify-content-center gap-3 mt-3 w-100">

                        {{-- <button type="button" class="btn btn-gradient rounded-pill flex-fill" onclick="nextStep(22)">
                        Payer sans créer un compte
                        </button>
                        <button type="button" class="btn btn-gradient rounded-pill flex-fill" onclick="nextStep(22)">
                        Se connecter / Créer un compte
                        </button> --}}

                        {{-- =====================================================================
                              ==================Debut du formaulaire =========================
                        ========================================================================== --}}



    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <!-- Email Address -->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Email
                            </label>
                            <input id="email"  type="email" name="email" class="form-control rounded-pill flex-fill" required autofocus autocomplete="username">
                        </div>

                        <!-- Password -->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Mot de passe :
                            </label>
                            <input id="password" type="password" name="password" class="form-control rounded-pill flex-fill"   required autocomplete="current-password">
                        </div>



                    {{--  <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div> --}}

                        <!-- Remember Me -->

                        <div class="mb-3 d-flex align-items-center gap-3">
                            {{-- <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('enregistrer') }}</span>
                            </label> --}}

                            <!-- Mot de passe oublié -->
                            @if (Route::has('password.request'))



                                    {{-- <a class="underline text-sm text-black font-bold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
 --}}
                                        <a class="underline text-sm text-black font-bold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="javascript:void(0)"
                                                onclick="prevStep(33)">
                                                    {{ __('Mot de passe oublié ?') }}
                                        </a>


                            @endif

                        </div>

                        <div class="flex items-center justify-end mt-4">


                            {{-- <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button> --}}


                            <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(22)">
                                        Créer un compte
                            </button>

                            <button type="submit" class="btn btn-gradient rounded-pill px-4">
                                {{ __('Se connecter') }}
                            </button>
                        </div>
                    </form>



                        {{-- =====================================================================
                        ==================================  Fin du formulaire ========================
                        ==========================================================================--}}

                    </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="wizard-step d-none" id="step22">
                    <p>Créer un compte</p>
                     {{-- Start form --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <!-- Nom-->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Nom & Prénoms
                            </label>
                            <input  id="name"  type="text" name="name" class="form-control rounded-pill flex-fill" required autofocus autocomplete="name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!-- Email Address -->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Email
                            </label>
                            <input id="email"  type="email" name="email" class="form-control rounded-pill flex-fill" required autofocus autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Mot de passe :
                            </label>
                            <input id="password" type="password" name="password" class="form-control rounded-pill flex-fill"   required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Confirm Mot de passe :
                            </label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control rounded-pill flex-fill"   required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        {{-- <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Vous avez un compte?') }}
                            </a>

                            <x-primary-button class="ms-4">
                                {{ __('Valider') }}
                            </x-primary-button>
                        </div> --}}



                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(11)">
                        Retour
                        </button>
                        {{-- <button type="button" class="btn btn-gradient rounded-pill px-4" onclick="nextStep(33)">
                        Valider
                        </button> --}}

                        <button type="submit" class="btn btn-gradient rounded-pill px-4">
                                {{ __('Valider') }}
                        </button>
                    </div>

                </form>
                    {{-- End form --}}

                    </div>

                    <!-- Step 3 -->
                    <div class="wizard-step d-none" id="step33">
                    <p>Réinitialisation du mot de passe:</p>
                    <div class="d-flex flex-column gap-2">

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->

                            <div class="mb-3 d-flex align-items-center gap-3">
                                <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                                Email
                                </label>
                                <input id="email" class="form-control rounded-pill flex-fill" type="email" name="email" required autofocus>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(11)">
                        Retour
                        </button>
                        <button type="submit" class="btn btn-gradient rounded-pill px-4">
                        Lien de réinitialisation
                        </button>
                        {{-- <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Lien de réinitialisation du mot de passe par e-mail') }}
                                </x-primary-button>
                        </div> --}}
                    </div>
                    </div>

                    </form>

                    <!-- Step 4 -->
                    <div class="wizard-step d-none" id="step44">
                    <p>Confirmez votre paiement :</p>

                    <form>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                            Montant à payer
                            </label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="matriculeInput" placeholder="70.000 FCFA ">
                        </div>

                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                            Frais de service
                            </label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="matriculeInput" placeholder="1500 FCFA">
                        </div>

                        <div class="mb-3 d-flex align-items-center gap-3">
                                <label for="mobileMoneyType" class="form-label text-light mb-0" style="width: 120px;">
                                    Type mobile money
                                </label>

                                <select id="mobileMoneyType" class="form-control rounded-pill flex-fill">
                                    <option value="">-- Sélectionnez --</option>
                                    <option value="airtel" selected>Airtel Money</option>
                                    <option value="moov">Moov Money</option>
                                </select>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <label for="matriculeInput" class="form-label text-light mb-0" style="width: 120px;">
                            Numéro de téléphone
                            </label>
                            <input type="text" class="form-control rounded-pill flex-fill" id="matriculeInput" placeholder="074273811">
                        </div>

                        </form>


                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-light rounded-pill px-4" onclick="prevStep(33)">
                        Retour
                        </button>
                        {{-- <button type="button" class="btn btn-gradient rounded-pill px-4" data-bs-dismiss="modal">
                        Confirmer
                        </button> --}}
                        <button type="button" class="btn btn-gradient rounded-pill px-4" onclick="nextStep(55)">
                        Valider
                        </button>
                    </div>

                    </div>

                    <!-- Step 5 -->
                    <div class="wizard-step d-none" id="step55">
                    <div class="text-center">
                        <h5 class="fw-bold text-success">✅ Paiement réussi !</h5>
                        <p class="mt-3">Votre paiement a été effectué avec succès.
                        Un reçu vous a été envoyé par SMS .</p>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" class="btn btn-gradient rounded-pill px-4" data-bs-dismiss="modal">
                        Terminer
                        </button>
                    </div>
                    </div>

                </div>
                </div>
            </div>
            </div>

        {{-- =====================================================================================
          FIN POP UP  <!-- FIN  Wizard Modal  2 -->
          =======================================================================================--}}


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
  <!-- JS pour wizard -->
<script>
function nextStep(step) {
  document.querySelectorAll('.wizard-step').forEach(el => el.classList.add('d-none'));
  document.getElementById('step' + step).classList.remove('d-none');
}

function prevStep(step) {
  nextStep(step);
}

/*  FERMER LE PREMIER WIZARD ET OUVRIR LE DEUXIEME  */
function openSecondWizard() {
    // Fermer le premier wizard
    var firstModal = bootstrap.Modal.getInstance(document.getElementById('wizardModal1'));
    if(firstModal) firstModal.hide();

    // Ouvrir le deuxième wizard
    var secondModalEl = document.getElementById('wizardModal2');
    var secondModal = new bootstrap.Modal(secondModalEl);
    secondModal.show();
}
/*  FFIN FERMER LE PREMIER WIZARD ET OUVRIR LE DEUXIEME  */


function openWizard2() {
    // Ferme le premier wizard si ouvert
    var firstModalEl = document.getElementById('wizardModal1');
    var firstModal = bootstrap.Modal.getInstance(firstModalEl);
    if (firstModal) {
        firstModal.hide();
    }

    // Ouvre le deuxième wizard
    var secondModalEl = document.getElementById('wizardModal2');
    var secondModal = new bootstrap.Modal(secondModalEl);
    secondModal.show();
}

/*
=====================================================================================
         DEBUT  SCRIPT POUR AFFICHER L'APPRENANT -->
 =======================================================================================

*/

// Fonction pour rechercher le matricule
function rechercherMatricule() {
    const matricule = document.getElementById('matriculeInput').value.trim();
    const errorDiv = document.getElementById('matriculeError');
    const rechercherBtn = document.getElementById('rechercherBtn');
    const rechercherText = document.getElementById('rechercherText');
    const rechercherSpinner = document.getElementById('rechercherSpinner');

    // Reset erreur
    errorDiv.classList.add('d-none');
    errorDiv.textContent = '';

    if (!matricule) {
        errorDiv.textContent = 'Veuillez saisir un matricule';
        errorDiv.classList.remove('d-none');
        return;
    }

    // Afficher le spinner
    rechercherText.classList.add('d-none');
    rechercherSpinner.classList.remove('d-none');
    rechercherBtn.disabled = true;

    // Envoyer la requête AJAX
    fetch('/rechercher-matricule', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
        },
        body: JSON.stringify({ matricule: matricule })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur serveur: ' + response.status);
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Remplir les champs avec les données
            document.getElementById('displayMatricule').value = data.apprenant.matricule || 'N/A';
            document.getElementById('displayNomPrenom').value = (data.apprenant.nom || '') + ' ' + (data.apprenant.prenom || '');
            document.getElementById('displayEcole').value = data.apprenant.etablissement || 'N/A';
            document.getElementById('displayNiveau').value = data.apprenant.niveau || 'N/A';
            document.getElementById('displayScolarite').value = (data.apprenant.montant_scolarite || '0') + ' FCFA';
            document.getElementById('displayFrais').value = (data.apprenant.frais || '0') + ' FCFA';

            // Passer à l'étape 3
            nextStep(3);
        } else {
            throw new Error(data.message);
        }
    })
    .catch(error => {
        errorDiv.textContent = error.message;
        errorDiv.classList.remove('d-none');
    })
    .finally(() => {
        // Cacher le spinner
        rechercherText.classList.remove('d-none');
        rechercherSpinner.classList.add('d-none');
        rechercherBtn.disabled = false;
    });
}

// Fonctions de navigation
function nextStep(step) {
    document.querySelectorAll('.wizard-step').forEach(el => {
        el.classList.add('d-none');
    });
    document.getElementById('step' + step).classList.remove('d-none');
}

function prevStep(step) {
    document.querySelectorAll('.wizard-step').forEach(el => {
        el.classList.add('d-none');
    });
    document.getElementById('step' + step).classList.remove('d-none');
}

// Permettre la soumission avec Entrée
document.getElementById('matriculeInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        rechercherMatricule();
    }
});

// Ouvrir le modal automatiquement pour tester
/* document.addEventListener('DOMContentLoaded', function() {
    var myModal = new bootstrap.Modal(document.getElementById('wizardModal1'));
    myModal.show();
}); */






/*
=====================================================================================
         FIN DU   SCRIPT POUR AFFICHER L'APPRENANT -->
 =======================================================================================

*/


/*
=======================================================================================
VALIDATION DE FORMULAIRE POUR LA SAISIE MOBILE MONEY
====================================================================================== */

// Validation des numéros de téléphone selon l'opérateur
// Validation des numéros de téléphone selon l'opérateur
document.getElementById('mobileMoneyType').addEventListener('change', function() {
    validatePhoneNumber();
});

document.getElementById('telStep3').addEventListener('input', function() {
    validatePhoneNumber();
});

function validatePhoneNumber() {
    const operator = document.getElementById('mobileMoneyType').value;
    const phoneInput = document.getElementById('telStep3');
    const phoneNumber = phoneInput.value.trim();

    // Reset des styles
    phoneInput.classList.remove('is-invalid');
    phoneInput.classList.remove('is-valid');

    if (!phoneNumber) return;

    let isValid = false;

    if (operator === 'airtel') {
        // Validation Airtel: commence par 07, puis 4/6/7, et 9 chiffres total
        const airtelRegex = /^07[467]\d{6}$/;
        isValid = airtelRegex.test(phoneNumber);
    }
    else if (operator === 'moov') {
        // Validation Moov: commence par 06, puis 0/2/6, et 9 chiffres total
        const moovRegex = /^06[026]\d{6}$/;
        isValid = moovRegex.test(phoneNumber);
    }

    // Appliquer les styles de validation
    if (isValid) {
        phoneInput.classList.add('is-valid');
    } else if (operator && phoneNumber) {
        phoneInput.classList.add('is-invalid');
    }
}

// Mettre à jour le placeholder selon l'opérateur
document.getElementById('mobileMoneyType').addEventListener('change', function() {
    const operator = this.value;
    const phoneInput = document.getElementById('telStep3');

    if (operator === 'airtel') {
        phoneInput.placeholder = '076273811 (Airtel)';
    } else if (operator === 'moov') {
        phoneInput.placeholder = '066339203 (Moov)';
    } else {
        phoneInput.placeholder = '074273811';
    }
});

// Fonction de validation avant passage au step 5
function validerEtPasserEtape5() {
    const operator = document.getElementById('mobileMoneyType').value;
    const phoneNumber = document.getElementById('telStep3').value.trim();

    // Validation de l'opérateur
    if (!operator) {
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: 'Veuillez sélectionner un type de Mobile Money',
            confirmButtonColor: '#6c5ce7'
        });
        return;
    }

    // Validation du numéro de téléphone
    if (!phoneNumber) {
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: 'Veuillez saisir un numéro de téléphone',
            confirmButtonColor: '#6c5ce7'
        });
        return;
    }

    // Validation du format du numéro
    validatePhoneNumber();

    if (!document.getElementById('telStep3').classList.contains('is-valid')) {
        let errorMessage = '';

        if (operator === 'airtel') {
            errorMessage = 'Numéro Airtel invalide. Le format doit être : 076xxxxxx, 074xxxxxx ou 077xxxxxx (9 chiffres)';
        } else if (operator === 'moov') {
            errorMessage = 'Numéro Moov invalide. Le format doit être : 060xxxxxx, 062xxxxxx ou 066xxxxxx (9 chiffres)';
        }

        Swal.fire({
            icon: 'error',
            title: 'Numéro invalide',
            text: errorMessage,
            confirmButtonColor: '#6c5ce7'
        });
        return;
    }

    // Si tout est valide, passer à l'étape 5
    nextStep(5);
}

/*
======================================================================================
FIN VALIDATION DE FORMULAIRE POUR LA SAISIE DE MOBILE MONEY
======================================================================================
*/

/*
===========================================================================
DEBUT  EN ATTENTE DE A CONFIRMATION DE PAIEMENT
===========================================================================
*/

function validerEtPasserEtape5() {
    const operator = document.getElementById('mobileMoneyType').value;
    const phoneNumber = document.getElementById('telStep3').value.trim();

    // ... vos validations existantes ...

    // Si tout est valide, afficher la confirmation SweetAlert2
    Swal.fire({
        title: 'Confirmation requise',
        html: `Un pop-up de confirmation a été envoyé au <strong>${phoneNumber}</strong><br>Veuillez saisir votre mot de passe Mobile Money pour finaliser le paiement.`,
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#6c5ce7',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'J\'ai validé le paiement',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            // Passer au step 5 seulement après confirmation
            nextStep(5);
        }
    });
}


/*
===========================================================================
FIN EN ATTENTE DE A CONFIRMATION DE PAIEMENT
===========================================================================
*/
</script>


</body>

</html>
