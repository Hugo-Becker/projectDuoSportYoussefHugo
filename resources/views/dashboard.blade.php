@extends('template.main')


@section('content')

    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            
            
        @endif

    </div>
    <div class="container my-5">

        {{-- two random Teams filled --}}
        <section class="bg-dark text-light">
            <div class="container">
                <h1> Deux Equipes Completes</h1>
                <table class="text-light table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Club Name</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipes as $equipe)
                            @foreach ($equipes->where('maxPlayers',(count($joueurs->where('equipe_id','=',($equipe->id))))) as $fullEquipe)
                                <tr>
                                    <th scope="row">{{ $fullEquipe->clubName }}</th>
                                    <td>{{ $fullEquipe->ville }}</td>
                                    <td>{{ $fullEquipe->pays }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        {{-- 4 player sans equipe --}}
        <section>
            <div class="container">
                <h1 class="text-center mb-5">Joueurs sans équipe
                </h1>
                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs->where('equipe_id', '=', 1)->random(4) as $item)
                            <tr>
                                <th scope="row">{{ $item->nom }}</th>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->poste }}</td>
                                <td>{{ $item->equipes->clubName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>



        {{-- 4 player avec equipe --}}
        <section class="bg-dark text-light">
            <div class="container">
                <h1 class="text-center mb-5">Joueurs appartenant à une équipe
                </h1>
                <table class="table text-light table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs->where('equipe_id', '!=', 1)->random(4) as $item)
                            <tr>
                                <th scope="row">{{ $item->nom }}</th>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->poste }}</td>
                                <td>{{ $item->equipes->clubName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>


        <section>

            <div class="container">
                <h1> Deux Equipes PAS Completes</h1>
                <table class=" table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Club Name</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notFull2 as $i)
                            <tr>
                                <th scope="row">{{ $notFull[$i]->clubName }}</th>
                                <td>{{$notFull[$i]->ville }}</td>
                                <td>{{$notFull[$i]->pays }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </section>


        {{-- EQUIPES UE --}}
        <section>

            <div class="container">
                <h1>  Equipes Europe</h1>
                <table class=" table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Club Name</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($EUteams as $equipe)
                            <tr>
                                <th scope="row">{{ $equipe->clubName }}</th>
                                <td>{{$equipe->ville }}</td>
                                <td>{{$equipe->pays }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>
        {{-- EQUIPES HORS UE --}}
        <section>

            <div class="container">
                <h1>  Equipes Europe</h1>
                <table class=" table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Club Name</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($noEUteams as $equipe)
                            <tr>
                                <th scope="row">{{ $equipe->clubName }}</th>
                                <td>{{$equipe->ville }}</td>
                                <td>{{$equipe->pays }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>


        {{-- JOUEUR RPZ --}}

        <section>

            <div class="container">
                <h1 class="text-center mb-5">Joueurs RPZ
                </h1>
                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rpzPlayers as $item)
                            <tr>
                                <th scope="row">{{ $item->nom }}</th>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->poste }}</td>
                                <td>{{ $item->equipes->clubName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>



        
                {{-- girl teamed --}}

        <section>

            <div class="container">
                <h1 class="text-center mb-5">girl teamed 
                </h1>
                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($girlInTeam as $item)
                            <tr>
                                <th scope="row">{{ $item->nom }}</th>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->poste }}</td>
                                <td>{{ $item->equipes->clubName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>
                {{-- boy teamed --}}

        <section>

            <div class="container">
                <h1 class="text-center mb-5">boy teamed 
                </h1>
                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rdmI as $i)
                            <tr>
                                <th scope="row">{{ $boyInTeam[$i]->nom }}</th>
                                <td>{{ $boyInTeam[$i]->prenom }}</td>
                                <td>{{ $boyInTeam[$i]->poste }}</td>
                                <td>{{ $boyInTeam[$i]->equipes->clubName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>


 
    </div>


@endsection
