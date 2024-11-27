<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transBus</title>
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <div class="first">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                        <li class="nav-item mr-5 pr-3 ">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="{{ route('destinations') }}">Destinations</a>
                        </li>
                        <li class="nav-item  mr-5 pr-3">
                            <a class="nav-link" href="{{ route('propos') }}" id="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">A propos</a>
                        </li>
                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="{{ route('messagerie') }}" tabindex="-1"
                                aria-disabled="true">Messagerie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="logo"><a href="#"><img src="{{ asset('images/white_on_trans.png') }}"
                    alt=""></a></span>
        <div class="center" id="hhh">
            <div class="form">
                <form method="POST" action="{{ route('destination') }}">
                    @csrf
                    <div class="mb-3">
                        <input list="villes" type="text" name="depart" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="Selectionner ville de depart" required>
                        <datalist id="villes">
                            <option value="Casablanca">
                            <option value="Agadir">
                            <option value="Tanger">
                            <option value="Marrakech">
                            <option value="Khouribga">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <input list="villes" type="text" name="arrivee" class="form-control " id=""
                            aria-describedby="emailHelp" placeholder="Selectionner ville d'arrivee" required>
                    </div>
                    <div class="mb-3 row container justify-content-between w-100 ">
                        <input type="date" style="font-size:1rem;" class="form-control w-100" id="dateDepart"
                            placeholder="Date" name="dateDepart" required>
                    </div>
                    <div class="mb-3 ">
                        <input type="number" name="quantity" id="quantity" class="form-control col-12 ">
                    </div>
                    <button id="Rechercher" type="submit" class="btn btn-warning"
                        style="margin-left: 23%;">Rechercher</button>
                </form>
            </div>

        </div>
    </div>
    <div class="container mt-5 mb-5">
        <h2 class="text text-center">NOS SERVICES À BORD</h2>
        <br>
        <p class="text-center">Profitez de nos services exclusifs pour un voyage agréable et plus confortable</p>
    </div>
    <div class="d-flex" style="width: 100%;justify-content: space-between;margin-top: 8rem;margin-bottom: 8rem;">
        <i class="fas fa-wifi"></i>
        <i class="fas fa-brands fa-youtube"></i>
        <i class="fas fa-tv"></i>
        <i class="fas fa-brands fa-usb"></i>
    </div>
    <div class="" style="margin-top: 8%;margin-bottom: 5%; ">
        <h2 class="text text-center mt-3 ">NOS BONS PLANS</h2>
        <p class="text-center mt-2 ">Découvrez nos meilleures offres pour voyager au meilleur prix</p>
    </div>
    <div class="plans d-flex justify-content-center ">
        <div class="col-lg-3 p-1 col-md-6 col-12 mr-5 mr-2 ">
            <div class="card" style="height: 95vh;background-color:rgb(209, 206, 197); ">
                <img src="{{ asset('images/casa.jpg') }}" class="card-img-top " style="height:31vh ;"
                    alt="... ">
                <div class="card-body ">
                    <h5 class="card-titre ">TETOUAN - CASA
                    </h5>
                    <p class="card-text pt-5 pb-5 ">Bénéficiez d’un tarif exceptionnel et profitez du paysage et de la
                        culture des montagnes de l'Atlas! </p>
                </div>
                <h4>150 DH</h4>
                <button class="btn btn-primary mb-4 ">Vister</button>
            </div>
        </div>
        <div class="col-lg-3 p-1 col-md-6 col-12 mr-2 ">
            <div class="card " style="height: 95vh;background-color:rgb(215, 220, 164); ">
                <img src="{{ asset('images/R (1).jpeg') }}" class="card-img-top " alt="... ">
                <div class="card-body ">
                    <h5 class="card-titre ">AGADIR - TANGER</h5>
                    <p class="card-text pt-4 pb-5 ">Outre ses plages magnifiques, Agadir offre une multitude
                        d'activités aux visiteurs, tels que des sports nautiques, des excursions dans le désert, des
                        visites de souks traditionnels et des dégustations de la délicieuse cuisine marocaine.
                    </p>
                </div>
                <h4>170 DH</h4>
                <button class="btn btn-primary mb-4 ">Vister</button>
            </div>
        </div>

        <div class="col-lg-3 p-1 col-md-6 col-12 ml-5 mr-2 ">
            <div class="card " style="height: 95vh;background-color:rgb(237, 239, 141); ">
                <img src="{{ asset('images/R (2).jpeg') }}" class="card-img-top " alt="... ">
                <div class="card-body ">
                    <h5 class="card-titre ">DAKHLA - RABAT</h5>
                    <p class="card-text pt-5 pb-5 ">Partez à la découverte des charmes de la perle du Sud Marocain à
                        petit prix ! </p>
                </div>
                <h4>200 DH</h4>
                <button class="btn btn-primary mb-4 ">Vister</button>
            </div>
        </div>
    </div>

    <div class="footer d-flex row ">
        <div class="adresse container ">
            <a href=" ">Sahara Voyage Bd El Fida, Casablanca 20100, Morocco</a>
            <i class="fa-solid fa-phone"> 0534566713</i>
        </div>
    </div>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
