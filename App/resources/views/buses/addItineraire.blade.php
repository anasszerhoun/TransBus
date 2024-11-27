<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"  id="exampleModalLabel"><b>NEW ITINERAIRE</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('itineraire.add')}}" method="post">
            @csrf
            <div class="col-md-10 offset-md-1">
              <div class="form-floating mb-3">
                <input type="text" name="VilleDepart" class="form-control" id="floatingInput">
                <label for="floatingInput">VilleDepart</label>
              </div>
              <div class="form-floating">
                <input type="text" name="VilleArrivee" class="form-control" id="floatingInput" min="0">
                <label for="floatingInput">VilleArrivee</label>
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
