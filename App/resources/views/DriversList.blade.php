@extends('sidebar')
@include('buses/addDriver')
@section('BusesData')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <br><br>
    <div class="col-md-10 offset-md-1">
        @if (session('success'))
            <div class="alert alert-success d-flex align-items-center justify-content-between">
                {{ session('success') }}
            </div>
        @endif
        @include('buses.create')
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">ALL DRIVERS</h1>
            <form class="d-flex mt-3 offset-md-5">
                <input class="form-control custom-height" type="search" id="search" value="" placeholder="Search"
                    aria-label="Search">
            </form>
            <button type="button" class="btn btn-success me-1 custom-height" data-bs-toggle="modal"
                data-bs-target="#exampleModal2">Add Driver</button>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Permis</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="AllBuses">
                            @foreach ($drivers as $driver)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $driver->nom }}</td>
                                    <td>{{ $driver->prenom }}</td>
                                    <td>{{ $driver->telephone }}</td>
                                    <td>{{ $driver->permis }}</td>
                                    <td>{{ $driver->urlPhoto}}</td>
                                    <td></td>
                                    <td>
                                        @include('buses.editDriver', ['driver' => $driver])
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $driver->idChauffeur }}">Edit</button>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('driver.delete', $driver->idChauffeur) }}"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bus"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
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
