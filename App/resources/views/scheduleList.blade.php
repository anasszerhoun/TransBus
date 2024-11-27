@extends('sidebar')
@include('buses/addSchedule')
@include('buses/detailSchedule')
@section('BusesData')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styleOneBackOffice.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <br><br>
    <div class="col-md-10 offset-md-1">
        @if (session('success'))
            <div class="alert alert-success d-flex align-items-center justify-content-between">
                {{ session('success') }}
            </div>
        @endif
        @include('buses.create')
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">ALL SCHEDULES</h1>
            <form class="d-flex mt-3 offset-md-5">
                <input class="form-control custom-height" type="search" id="search" value="" placeholder="Search"
                    aria-label="Search">
            </form>
            <button type="button" class="btn btn-success me-1 custom-height" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Add Schedule</button>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date Voyage</th>
                                <th>Heure de Depart</th>
                                <th>Heure d'Arrivee</th>
                                <th>Prix</th>
                                <th>Ville De Depart</th>
                                <th>Ville D'Arrivee</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="AllBuses">
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $schedule->DateDepart }}</td>
                                    <td>{{ $schedule->HeureDepart }}</td>
                                    <td>{{ $schedule->HeureDArrivee }}</td>
                                    <td>{{ $schedule->Prix }}</td>
                                    <td>{{ $itineraries->firstWhere('idItineraire', $schedule->idItineraire)->VilleDepart }}</td>
                                    <td>{{ $itineraries->firstWhere('idItineraire', $schedule->idItineraire)->VilleArrivee }}</td>
                                    <form action="{{ route('schedule.detail', $schedule->id) }}" method="POST">
                                        @csrf
                                        <td><button type="button" class="btn btn-primary me-1 custom-height"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                                data-date-voyage="{{ $schedule->DateDepart }}"
                                                data-heure-depart="{{ $schedule->HeureDepart}}"
                                                data-heure-arrivee="{{ $schedule->HeureDArrivee }}"
                                                data-ville-depart="{{ $itineraries->firstWhere('idItineraire', $schedule->idItineraire)->VilleDepart }}"
                                                data-ville-arrivee="{{ $itineraries->firstWhere('idItineraire', $schedule->idItineraire)->VilleArrivee }}"
                                                data-driver-nom="{{ $drivers->firstWhere('idChauffeur', $schedule->idChauffeur)->nom }}"
                                                data-driver-prenom="{{ $drivers->firstWhere('idChauffeur', $schedule->idChauffeur)->prenom }}"
                                                data-driver-telephone="{{ $drivers->firstWhere('idChauffeur', $schedule->idChauffeur)->telephone }}"
                                                data-driver-permis="{{ $drivers->firstWhere('idChauffeur', $schedule->idChauffeur)->permis }}"
                                                data-driver-photo="{{ $drivers->firstWhere('idChauffeur', $schedule->idChauffeur)->urlPhoto }}"
                                                data-bus-immatriculation="{{ $buses->firstWhere('idBus', $schedule->idBus)->immatriculation }}"
                                                data-bus-nbrplaces="{{ $buses->firstWhere('idBus', $schedule->idBus)->nbrPlaces }}">Détails</button>
                                        </td>
                                        <td></td>
                                    </form>
                                    <td></td>
                                    {{-- <td>
                                        @include('buses.editItineraire', ['itineraire' => $itineraire])
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $itineraire->idItineraire }}">Edit</button>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('itineraire.delete', $itineraire->idItineraire) }}"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bus"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#exampleModal2').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Bouton qui déclenche le modal
            var modal = $(this);

            // Extraire les informations des attributs data-*
            var dateVoyage = button.data("date-voyage")
            var heureDepart = button.data("heure-depart")
            var heureArrivee = button.data('heure-arrivee');
            var villeDepart = button.data('ville-depart');
            var villeArrivee = button.data('ville-arrivee');
            var driverNom = button.data('driver-nom');
            var driverPrenom = button.data('driver-prenom');
            var driverTelephone = button.data('driver-telephone');
            var driverPermis = button.data('driver-permis');
            var driverPhoto = button.data('driver-photo')
            var busImmatriculation = button.data('bus-immatriculation');
            var busNbrPlaces = button.data('bus-nbrplaces');



            // Mettre à jour le contenu du modal
            modal.find('.modal-title').text('Détails du voyage');

            modal.find('.nom').html(`<p><strong>Nom :</strong> ${driverPrenom}</p>`);
            modal.find('.prenom').html(`<p><strong>Prenom :</strong> ${driverNom}</p>`);
            modal.find('.telephone').html(`<p><strong>Telephone :</strong> ${driverTelephone}</p>`);
            modal.find('.permis').html(`<p><strong>Permis :</strong> ${driverPermis}</p>`);

            modal.find('.testPhoto').html(`<p><strong>Permis :</strong> ${driverPhoto}</p>`);


            modal.find('.photo').html(`<img src="${driverPhoto}">`);


            modal.find(".immatriculation").html(`<p><strong>Immatriculation :</strong> ${busImmatriculation}</p>`)
            modal.find(".nbrPlaces").html(`<p><strong>Nombre de places :</strong> ${busNbrPlaces}</p>`)



            modal.find(".dateV").html(`<span>${dateVoyage}</span>`)
            modal.find(".departTime").html(`<span>${heureDepart}</span>`)
            modal.find(".arriveeTime").html(`<span>${heureArrivee}</span>`)
            modal.find(".villeDepart").html(`<span>${villeDepart}</span>`)
            modal.find(".villeArrivee").html(`<span>${villeArrivee}</span>`)








        //     modal.find('.modal-body').html(`
        //     <p><strong>Ville de départ:</strong> ${villeDepart}</p>
        //     <p><strong>Ville d' Arrivee:</strong> ${villeArrivee}</p>
        //     <p><strong>Chauffeur Nom:</strong> ${driverNom}</p>
        //     <p><strong>Chauffeur Prenom:</strong> ${driverPrenom}</p>
        //     <p><strong>Chauffeur Permis:</strong> ${driverPermis}</p>
        //     <p><strong>Chauffeur telephone:</strong> ${driverTelephone}</p>
        //     <p><strong>Bus Immatriculation:</strong> ${busImmatriculation}</p>
        //     <p><strong>Bus Nbre Places:</strong> ${busNbrPlaces}</p>

        // // `);
        });
    </script>


    <script>
        $(document).ready(function() {
                $(document).on('keyup', '#search', function() {
                    $.ajax({
                        url: "{{ route('buses.action') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        dataType: 'json',
                        success: function(data)

                    });


                    {
                        $('#AllBuses').html(data.table_data);

                    }
                });
            }


            var query = $(this).val(); fetch_customer_data(query);
        );
    </script>
@endsection
