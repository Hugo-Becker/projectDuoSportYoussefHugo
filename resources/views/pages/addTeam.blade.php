@extends('template.main')


@section('content')

    <div class="container">

        <form action="equipes" method="POST">
            @csrf
            <div class="mt-3">
                <label for="">club name</label>
                <input class="form-control" name="clubName" type="text" id="">
            </div>
            <div class="mt-3">
                <label for="">ville</label>
                <input class="form-control" name="ville" type="text" id="">
            </div>
            <div class="mt-3">
                <label for="">pays</label>
                <input class="form-control" name="pays" type="text" id="">
            </div>
            <div class="mt-3">
                <label for="">max players</label>
                <input class="form-control" name="maxPlayers" type="number" id="">
            </div>
            <div class="mt-3">
                <label for="">max Avants</label>
                <input class="form-control" name="maxAvants" type="number" id="">
            </div>
            <div class="mt-3">
                <label for="">maxCentres</label>
                <input class="form-control" name="maxCentres" type="number" id="">
            </div>
            <div class="mt-3">
                <label for="">maxArrieres</label>
                <input class="form-control" name="maxArrieres" type="number"  id="">
            </div>
            <div class="mt-3">
                <label for="">maxRemplaçants</label>
                <input class="form-control" name="maxRemplaçants" type="number"  id="">
            </div>

            <button class="mt-3 btn btn-success" type="submit">VALIDER</button>
        </form>
    </div>
    
@endsection