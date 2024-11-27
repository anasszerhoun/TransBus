<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 90%">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"  id="exampleModalLabel"><b>NEW ITINERAIRE</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('schedule.add')}}" method="post">
            @csrf
            <div class="rowOne">
                <div class="options">
                    <label for="chauffeur">Chauffeur</label>
                    <select name="chauffeur" id="">
                        <option value="" disabled selected>Full Name</option>
                        @foreach($drivers as $driver)
                        <option value="{{$driver->idChauffeur}}" >{{$driver->nom}} {{$driver->prenom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="options">
                    <label for="bus">Bus</label>
                    <select name="bus" id="">
                        <option value="" disabled selected>immatriculation</option>
                        @foreach($buses as $bus)
                        <option value="{{$bus->idBus}}"> {{$bus->immatriculation}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="options">
                    <label for="itineraire">Itineraire</label>
                    <select name="itineraire" id="">
                        <option value="" disabled selected></option>
                        @foreach($itineraries as $itineraire)
                        <option value="{{$itineraire->idItineraire}}">{{$itineraire->VilleDepart}} - {{$itineraire->VilleArrivee}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="rowTwo">
                <div class="options">
                    <label for="dateDepart">Date de voyage</label>
                    <input type="date" name="dateDepart">
                </div>
                <div class="options">
                    <label for="heureDepart">Heure de depart</label>
                    <input type="time" name="heureDepart">
                </div>
                <div class="options">
                    <label for="heureArrivee">Heure de arrivee</label>
                    <input type="time" name="heureArrivee">
                </div>
                <div class="options">
                    <label for="prix">Prix</label>
                    <input type="number" name="prix">
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Submit">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
