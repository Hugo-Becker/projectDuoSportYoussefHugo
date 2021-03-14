@extends('template.main')


@section('content')

    <div class="container mt-3">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Nat</th>
                    <th scope="col">Poste</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Email</th>
                    <th scope="col">Equipe</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($joueurs as $joueur)

                    <tr>
                        <th scope="row">{{ $joueur->id }}</th>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td>{{ $joueur->age }}</td>
                        <td>{{ $joueur->genre }}</td>
                        <td>{{ $joueur->nat }}</td>
                        <td>{{ $joueur->poste }}</td>
                        <td>{{ $joueur->tel }}</td>
                        <td>{{ $joueur->email }}</td>
                        <td>
                            <a href="/equipes/{{ $joueur->equipe_id }}">{{ $joueur->equipes->clubName }}</a>

                        </td>
                    </tr>

                @endforeach


            </tbody>
        </table>

    </div>

@endsection
