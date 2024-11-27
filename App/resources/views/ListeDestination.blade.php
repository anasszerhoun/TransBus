<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

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
                            <a class="nav-link active fw-bold" aria-current="page" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="{{route('destinations')}}">Destinations</a>
                        </li>
                        <li class="nav-item  mr-5 pr-3">
                            <a class="nav-link" href="{{route('propos')}}" id="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">A propos
                            </a>
                        </li>

                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="{{route('messagerie')}}" tabindex="-1" aria-disabled="true">Messagerie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="logo"><a href="#" id="logo"><img src="{{ asset('images/white_on_trans.png') }}" alt=""></a></span>
        <div class="title">
            <h3>Destinations <i class="fa-solid fa-bus"></i></h3>
        </div>
        <div class="buses">
            @foreach ($itineraires as $itineraire)
                <div class="one">
                    <div class="ONE"><img src="{{ asset('images/H.jpg') }}"
                            style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
                    <div class="TWO">
                        <div class="down2">
                            <h3>{{ $itineraire->VilleDepart }} <i class="fa-solid fa-arrow-right"></i>
                                {{ $itineraire->VilleArrivee }} </h3>
                        </div>
                        <div class="high">
                            <div class="confort">
                                <h6>Confort +</h6>
                            </div>
                            <div class="icons">
                                <i class="fa-solid fa-wifi"></i>
                                <i class="fa-brands fa-usb"></i>
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
