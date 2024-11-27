<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                            <a class="nav-link active fw-bold" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="#">Destinations</a>
                        </li>
                        <li class="nav-item  mr-5 pr-3">
                            <a class="nav-link" href="#" id="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Horaires
                            </a>
                        </li>

                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Messagerie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="logo"><a href="#" id="logo"><img src="{{ asset('images/white_on_trans.png') }}"
                    alt=""></a></span>
        <div class="container center">
            <div class="formulaire">
                <form action="ajout" method="GET">
                    <input list="villes" type="text" name="depart" id="form" placeholder="Depart">
                    <datalist id="villes">
                        <option value="Casablanca">
                        <option value="Agadir">
                        <option value="Tanger">
                        <option value="Marrakech">
                        <option value="Khouribga">
                    </datalist>
                    <input list="villes" type="text" name="arrivee" id="form" placeholder="Arrive">
                    <input type="date" name="dateDepart" id="form" placeholder="Date">
                    <input type="number" min="0" name="" id="form" placeholder="Nombre">
                    <input type="submit" value="Mettre a jour" id="form">
                </form>
            </div>
            <div class="buses">
                @if ($voyages->isEmpty())
                    <div style="padding: 20px;width;300px;height:80px;margin-left:50px;background-color:#ffc107;border-radius:10px;text-align:center">
                        <p style="font-size: 1.6rem;color:white;font-weight:bold">Aucun voyage trouvé !!!</p>
                    </div>

                @else
                    @foreach ($voyages as $voyage)
                        <div class="one">
                            <div class="ONE" id="data"><img src="{{ asset('images/H.jpg') }}"
                                    style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt="">
                            </div>
                            <div class="TWO">
                                <div class="up">
                                    <div class="Time" id="data">
                                        <h5 class="heure">{{ $voyage->HeureDepart }}</h5>
                                        <h6 class="duree">- <i class="fa-solid fa-hourglass-end"></i> 08:30 -</h6>
                                        <h5 class="heure">{{ $voyage->HeureDArrivee }}</h5>
                                    </div>
                                    <h3 class="prix" id="data">{{ $voyage->Prix }} DH</h3>
                                </div>
                                <div class="down" id="data">
                                    <h3>{{ $villeDepart }} <i class="fa-solid fa-arrow-right"></i> {{ $villeArrivee }}
                                    </h3>
                                    <a class="reserver" href="{{ route('reservation', $voyage->id) }}">Réserver</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif
                    {{-- <div class="one">
                    <div class="ONE"><img src="{{ asset('images/H.jpg') }}" style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
                    <div class="TWO">
                        <div class="up">
                            <div class="Time">
                                <h5 class="heure">10:00</h5><h6 class="duree">-  <i class="fa-solid fa-hourglass-end"></i>  08:30  -</h6><h5 class="heure">18:30</h5>
                            </div>
                            <h3 class="prix">180 DH</h3>
                        </div>
                        <div class="down">
                            <h3>AGADIR <i class="fa-solid fa-arrow-right"></i>  CASABLANCA</h3>
                            <button class="reserver" onclick="{window.location.href='reservation.html'}">Réserver</button>
                        </div>
                    </div>
                </div>
                <div class="one">
                    <div class="ONE"><img src="{{ asset('images/H.jpg') }}" style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
                    <div class="TWO">
                        <div class="up">
                            <div class="Time">
                                <h5 class="heure">16:00</h5><h6 class="duree">-  <i class="fa-solid fa-hourglass-end"></i>  08:00 -</h6><h5 class="heure">00:00 </h5>
                            </div>
                            <h3 class="prix">180 DH</h3>
                        </div>
                        <div class="down">
                            <h3>AGADIR <i class="fa-solid fa-arrow-right"></i>  CASABLANCA</h3>
                            <button class="reserver">Réserver</button>
                        </div>
                    </div>
                </div>
                <div class="one">
                    <div class="ONE"><img src="{{ asset('images/H2.jpg') }}" style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
                    <div class="TWO">
                        <div class="up">
                            <div class="Time">
                                <h5 class="heure">20:00</h5><h6 class="duree">-  <i class="fa-solid fa-hourglass-end"></i>  08:00  -</h6><h5 class="heure">04:00</h5>
                            </div>
                            <h3 class="prix">180 DH</h3>
                        </div>
                        <div class="down">
                            <h3>AGADIR <i class="fa-solid fa-arrow-right"></i>  CASABLANCA</h3>
                            <button class="reserver">Réserver</button>
                        </div>
                    </div>
                </div>
                <div class="one">
                    <div class="ONE"><img src="{{ asset('images/H3.jpg') }}" style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
                    <div class="TWO">
                        <div class="up">
                            <div class="Time">
                                <h5 class="heure">23:00</h5><h6 class="duree">-  <i class="fa-solid fa-hourglass-end"></i>  07:30  -</h6><h5 class="heure">06:30</h5>
                            </div>
                            <h3 class="prix">180 DH</h3>
                        </div>
                        <div class="down">
                            <h3>AGADIR <i class="fa-solid fa-arrow-right"></i>  CASABLANCA</h3>
                            <button class="reserver">Réserver</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
