<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <div class="first">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="{{route('propos')}}" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">A propos</a>
                        </li>
                        <li class="nav-item mr-5 pr-3">
                            <a class="nav-link" href="{{route('messagerie')}}" tabindex="-1" aria-disabled="true">Messagerie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="logo"><a href="#" id="logo"><img src="{{ asset('images/white_on_trans.png') }}" alt=""></a></span>

        <div class="add">
            <div class="validate">
                <i class="fa-solid fa-circle-check" style="color: #1fc242;"></i>
            </div>
            <div class="ticket">
                <h3>Reservation Ajouté !!</h3>
                <span><a href="{{asset('../storage/'.$pdfFileName)}}" target="_blank">Télécharger le Ticket</a></span>
            </div>
        </div>
    </div>
    <div class="footer d-flex row ">
        <div class="adresse container ">
            <a href=" ">Sahara Voyage Bd El Fida, Casablanca 20100, Morocco</a>
            <i class="fa-solid fa-phone">  0534566713</i>
        </div>
    </div>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
