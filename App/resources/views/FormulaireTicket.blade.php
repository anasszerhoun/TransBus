<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRQ1Zf3TA5+Y5rx5y5U5Xr5c1iY5KH5+y5I0V/H4b" crossorigin="anonymous">
    </script>
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
                            <a class="nav-link" href="{{ route('messagerie') }}" id="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Messagerie
                            </a>
                        </li>

                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="{{ route('propos') }}" tabindex="-1" aria-disabled="true">À
                                propos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="logo"><a href="#" id="logo"><img src="{{ asset('images/white_on_trans.png') }}"
                    alt=""></a></span>

    </div>
    <div class="center">
        <div class="form" id="formulaire">
            <form method="post" action="{{ route('AjoutReservation', Route::current()->parameter('id')) }}">
                @csrf
                <div class="tooop">
                    <h3>Personal Data </h3>
                    <div class="progression">
                        <div id="left" class="active"> </div>
                        <div id="center" class="noActive"> </div>
                        <div id="right" class="noActive"> </div>
                    </div>
                </div>
                <div class="first-info">
                    <div class="mb-3 info">
                        <label for="nom">First name </label>
                        <input type="text" name="nom" class="form-control" class="text"
                            placeholder="Your first name" required>
                    </div>
                    <div class="mb-3 info">
                        <label for="prenom">Last name </label>
                        <input type="text" name="prenom" class="form-control" class="text"
                            placeholder="Your last name" required>
                    </div>
                    <div class="mb-3 info">
                        <label for="cin">Cin </label>
                        <input type="text" name="cin" class="form-control" class="text" placeholder="Your cin"
                            required>
                    </div>
                    <div class="mb-3 info">
                        <label for="email">Email </label>
                        <input type="text" name="email" class="form-control" class="text" placeholder="Your email"
                            required>
                    </div>
                    <div class="mb-3 info">
                        <label for="tel">Phone number </label>
                        <input type="text" name="tel" class="form-control" class="text"
                            placeholder="Your phone number" required>
                    </div>
                </div>
                <div class="bus second-info">
                    @php
                        $id = 0;
                    @endphp
                    @for ($i = 0; $i < $capacite / 4; $i++)
                        <div class="ligne">
                            <div class="col1">
                                @php $currentId = ++$id @endphp

                                @if (!in_array($currentId, $places))
                                    <div class="setOne set setAvailable" role="checkbox" id="a{{ $currentId }}"
                                        onclick="changeColor('{{ $currentId }}')">
                                        {{ $currentId }}
                                    </div>
                                @else
                                    <div class="setOne set setInAvailable" role="checkbox"
                                        id="a{{ $currentId }}">
                                        x</div>
                                @endif

                                @php $currentId = ++$id @endphp

                                @if (!in_array($currentId, $places))
                                    <div class="setTwo set setAvailable" role="checkbox" id="a{{ $currentId }}"
                                        onclick="changeColor('{{ $currentId }}')">
                                        {{ $currentId }}
                                    </div>
                                @else
                                    <div class="setTwo set setInAvailable" role="checkbox"
                                        id="a{{ $currentId }}">
                                        x
                                    </div>
                                @endif
                            </div>
                            <div class="col2">

                                @php $currentId = ++$id @endphp

                                @if (!in_array($currentId, $places))
                                    <div class="setOne set setAvailable" role="checkbox" id="a{{ $currentId }}"
                                        onclick="changeColor('{{ $currentId }}')">
                                        {{ $currentId }}
                                    </div>
                                @else
                                    <div class="setOne set setInAvailable" role="checkbox"
                                        id="a{{ $currentId }}">
                                        x
                                    </div>
                                @endif

                                @php $currentId = ++$id @endphp

                                @if (!in_array($currentId, $places))
                                    <div class="setTwo set setAvailable" role="checkbox" id="a{{ $currentId }}"
                                        onclick="changeColor('{{ $currentId }}')">
                                        {{ $currentId }}
                                    </div>
                                @else
                                    <div class="setTwo set setInAvailable" role="checkbox"
                                        id="a{{ $currentId }}">
                                        x
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endfor
                    <span id="seatNumber" style="margin-top: 20px">Selected seat:  </span>
                    <input type="text" id="seat" style="display: none" name="seat">
                </div>
                <div class="third-info" style="display:none">
                    <div class="mb-3 info">
                        <label for="number">Card</label>
                        <div class="num">
                            <input type="text" name="number" class="form-control" class="text"
                                placeholder="XXXX-XXXX-XXXX-XXXX">
                            <div class="icons">
                                <i class="fa-brands fa-cc-visa"></i>
                                <i class="fa-brands fa-cc-mastercard"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 info cd">
                        <div>
                            <label for="date">Date</label>
                            <input type="month" name="date" class="form-control" class="text"
                                placeholder=" MM/YY ">
                        </div>
                        <div>
                            <label for="code">Cvv</label>
                            <input type="text" name="code" class="form-control" class="text"
                                placeholder="Code protection">
                        </div>
                    </div>
                    <div class="mb-3 info">
                        <label for="owner">Name of owner</label>
                        <input type="text" name="owner" class="form-control" class="text"
                            placeholder="Name on the card">
                    </div>
                </div>
                <button type="submit" class="btn btn-warning submit third-info"
                    style="margin-left: 23%;display:none">valider</button>
                <button type="button" class="btn btn-warning  first-info submit" style="margin-left: 23%;"
                    id="next">Next</button>
                <button type="button" class="btn btn-warning  second-info submit" style="margin-left: 23%;"
                    id="next2">Next</button>
                <button type="button" class="btn btn-warning  second-info previous" id="previous">Previous</button>
                <button type="button" style="display:none" class="btn btn-warning  third-info previous"
                    id="previous2">Previous</button>
            </form>
        </div>
    </div>
    </div>
    <div class="footer">
    </div>
    <script>
        function afficherId(id) {
            console.log(id)
        }

        function changeColor(id) {
            let mySet = document.getElementById("a" + id)

            if (mySet.classList.contains("activeSet")) {
                mySet.classList.remove("activeSet")
                return 0;
            }
            mySet.classList.add("activeSet")

            document.getElementById("seatNumber").textContent='Selected seat: '+id;
        }
    </script>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
