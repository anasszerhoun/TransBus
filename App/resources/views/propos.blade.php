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
        <div class="container mt-5 propos">
            <div class="propos-next">
                <h1 class="my-4">À Propos de TransVoyage</h1>
                <p>Chez TransVoyage, nous croyons en la puissance des voyages pour transformer les vies. Depuis notre
                    fondation il y a plus de 2 ans, nous nous sommes engagés à offrir à nos clients des expériences de
                    voyage exceptionnelles et mémorables.</p>
                <p>Notre équipe est composée d'experts passionnés par la découverte de nouveaux horizons et la création
                    de souvenirs inoubliables. Que vous recherchiez une aventure palpitante, une escapade relaxante ou
                    une immersion culturelle, nous avons les connaissances et les ressources pour rendre votre voyage
                    aussi unique que vous l'êtes.</p>
                <p>En tant qu'agence de voyage engagée envers la durabilité et le respect de l'environnement, nous
                    travaillons avec des partenaires locaux qui partagent nos valeurs et contribuent positivement aux
                    communautés que nous visitons.</p>
                <p>Que vous soyez un voyageur expérimenté ou que vous planifiez votre premier voyage, nous sommes là
                    pour vous guider à chaque étape. Explorez notre gamme de destinations, laissez-vous inspirer par nos
                    offres exclusives et commencez à créer vos propres aventures avec TransVoyage.</p>
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
