<head>
    <meta charset="utf-8">
    <title>HB Tech Solution</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
{{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
<!-- Navbar Start -->
 <div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="/index" class="navbar-brand">
                <h1 class="text-white">HB<span class="text-dark">.</span>Tech Solution</h1>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link active">{{ GoogleTranslate::trans("Acceuil", request()->session()->get('lang') ?? 'fr') }}</a>
                    <a href="/about" class="nav-item nav-link">{{ GoogleTranslate::trans("Qui sommes nous?", request()->session()->get('lang') ?? 'fr') }}</a>
                    <a href="/service" class="nav-item nav-link">{{ GoogleTranslate::trans("Nos services", request()->session()->get('lang') ?? 'fr') }}</a>
                    <a href="/project" class="nav-item nav-link">{{ GoogleTranslate::trans("Projets", request()->session()->get('lang') ?? 'fr') }}</a>
                    <a href="/gallerie" class="nav-item nav-link">{{ GoogleTranslate::trans("Gallerie", request()->session()->get('lang') ?? 'fr') }}</a>
                    <a href="/contact" class="nav-item nav-link">{{ GoogleTranslate::trans("Contact", request()->session()->get('lang') ?? 'fr') }}</a>
                </div>
                {{-- <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> --}}

                    <div style="justify-content:center;align-items:center;display:flex; height:80px; margin-left:20px; margin-top:20px" class="">
                        <a href="{{ route('changeLang') }}?lang=fr"><p class="text-white">FR</p></a>
                        &nbsp &nbsp
                            <a href="{{ route('changeLang') }}?lang=en"><p class="text-white">EN</p></a>
                    </div>
            </div>

        </nav>
    </div>
</div>
<!-- Navbar End -->
