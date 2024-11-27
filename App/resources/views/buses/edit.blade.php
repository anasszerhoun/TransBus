<div class="modal fade" id="editModal{{ $bus->idBus }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>EDIT BUS</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('buses.update',$bus->immatriculation)}}" method="post">
            @csrf
            <div class="col-md-10 offset-md-1">
              <div class="form-floating mb-3">
                <input type="text" name="immatriculation" value="{{$bus->immatriculation}}" class="form-control" id="floatingInput" value="">
                <label for="floatingInput">Register</label>
              </div>
              <div class="form-floating">
                <input type="number" name="nbrPlaces" value="{{$bus->nbrPlaces}}" class="form-control" id="floatingInput" min="0">
                <label for="floatingInput">Capacity</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="submit">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>

 </script>
