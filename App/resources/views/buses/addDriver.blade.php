<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>NEW DRIVER</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('driver.add') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-md-10 offset-md-1">
                        <div class="form-floating mb-3">
                            <input type="text" name="nom" class="form-control" id="floatingInput">
                            <label for="floatingInput">Nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="prenom" class="form-control" id="floatingInput">
                            <label for="floatingInput">Prenom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="telephone" class="form-control" id="floatingInput">
                            <label for="floatingInput">Telephone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="permis" class="form-control" id="floatingInput">
                            <label for="floatingInput">Permis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" name="urlPhoto" class="form-control" id="floatingInput" accept=".jpg, .jpeg, .png">
                            <label for="floatingInput">Photo</label>
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
