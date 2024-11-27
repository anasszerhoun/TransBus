<div class="modal fade" id="editModal{{ $driver->idChauffeur }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>EDIT DRIVER</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('driver.update',$driver->idChauffeur)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-10 offset-md-1">
              <div class="form-floating mb-3">
                <input type="text" name="nom" value="{{$driver->nom}}" class="form-control" id="floatingInput" value="">
                <label for="floatingInput">Nom</label>
              </div>
              <div class="form-floating">
                <input type="text" name="prenom" style="margin-top: 10px" value="{{$driver->prenom}}" class="form-control" id="floatingInput" min="0">
                <label for="floatingInput" >Prenom</label>
              </div>
              <div class="form-floating">
                <input type="text" name="telephone" style="margin-top: 10px" value="{{$driver->telephone}}" class="form-control" id="floatingInput" min="0">
                <label for="floatingInput">Telephpne</label>
              </div>
              <div class="form-floating">
                <input type="text" name="permis" style="margin-top: 10px" value="{{$driver->permis}}" class="form-control" id="floatingInput" min="0">
                <label for="floatingInput">Permis</label>
              </div>
              <div class="form-floating mb-3">
                <input type="file" name="urlPhoto" class="form-control" id="floatingInput" accept=".jpg, .jpeg, .png">
                <label for="floatingInput">Photo</label>
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
