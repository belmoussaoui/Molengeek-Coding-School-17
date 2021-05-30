@extends('layouts.app')

@section('content')
    <h1 class="bg-primary text-white text-center my-5">Ekip</h1>
    <br>
    <hr>
    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>Equipe remplies</h2>
            <ul>
                @foreach ($equipes_remplies as $equipe)
                    <li>{{ $equipe->nom }}</li>
                @endforeach
            </ul>
  
    </section>

    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>Équipes non remplies</h2>
        <ul>
            @for ($i = 0; $i < 2; $i++)
                @if (count($equipes_non_remplies) > $i && $equipes_non_remplies[$i])
                <li>{{ $equipes_non_remplies[$i]->nom }}</li>
            @endif
            @endfor

        </ul>
    </section>
   
    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>4 joueurs sans équipes au hasard</h2>
        <ul>
            @for ($i = 0; $i < 4; $i++)
                @if (count($joueurs_sans_equipe) > $i)
                    <li>{{ $joueurs_sans_equipe[$i]->nom }}</li>
                @endif
                
            @endfor

        </ul>
    </section>

    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>4 joueurs avec équipes</h2>
        <ul>
            @for ($i = 0; $i < 4; $i++)
                <li>{{ $joueurs_avec_equipe[$i]->nom }}</li>
            @endfor

        </ul>
    </section>

    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>Equipe Europe</h2>
            <ul>
                @foreach ($equipes_europe as $equipe)
                    <li>{{ $equipe->nom }}</li>
                @endforeach
            </ul>
  
    </section>

    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>Equipe hors Europe</h2>
            <ul>
                @foreach ($equipes_hors_europe as $equipe)
                    <li>{{ $equipe->nom }}</li>
                @endforeach
            </ul>
  
    </section>

    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>5 joueuse au hasard comme eden hazard</h2>
            <ul>
                @foreach ($joueuses_au_hasard as $joueur)
                    <li>{{ $joueur->nom }}</li>
                @endforeach
            </ul>
  
    </section>

    <section class="shadow-sm p-3 mb-5 bg-white rounded">
        <h2>5 joueur Homme</h2>
            <ul>
                @foreach ($joueurs_homme as $joueur)
                    <li>{{ $joueur->nom }}</li>
                @endforeach
            </ul>
  
    </section>
    @endsection
