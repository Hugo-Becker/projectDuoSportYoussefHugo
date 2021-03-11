@extends('template.main')

@section('content')

    <div class="container">

        <form action="joueurs" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mt-3" >
                <label for="">Nom</label>
                <input name="nom" class="form-control" type="text">
            </div>
            <div class="mt-3" >
                <label for="">Prenom</label>
                <input name="prenom" class="form-control" type="text">
            </div>
            <div class="mt-3" >
                <label for="">Age</label>
                <input name="age" class="form-control" type="number">
            </div>
            <div class="mt-3">  
                <label for="">Genre</label>
                <input name="genre" class="form-control" type="text">
            </div>
            <div class="mt-3" >
                <label for="">Nationalité</label>
                <input name="nat" class="form-control" type="text">
            </div>
            <div class="mt-3" >
                <label for="">Poste</label>
                <input name="poste" class="form-control" type="text">
            </div>
            <div class="mt-3" >
                <label for="">Telephone</label>
                <input name="tel" class="form-control" type="text">
            </div>
            <div class="mt-3" >
                <label for="">Email</label>
                <input name="email" class="form-control" type="email">
            </div>

            <div class="mt-3" >
                <label for="">Equipe</label>
                <select name="equipe_id" id="">
                    @foreach ($equipes as $equipe)
                        <option value="{{$equipe->id}}">{{$equipe->clubName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3" >
                <label for="formFile" class="form-label">Photo</label>
                <input name="src" class="form-control" type="file" id="formFile">
            </div>


            <button class="btn btn-success mt-3" type="submit">VALIDER</button>


         </form>

        

    </div>
    
@endsection