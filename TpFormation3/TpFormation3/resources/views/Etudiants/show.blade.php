<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>les informations de l'étudiant</h1>
    <h4>Code E : {{$etudiant->codeE}}</h4>
    <h4>le Nom d'etudiant : {{$etudiant->nom}}</h4>
    <h4>le prenom d'etudiant : {{$etudiant->prenom}}</h4>
    <h4>Sa date de Naissance : {{$etudiant->dateNaissance}}</h4>
    <h4>S'addresse: {{$etudiant->addresse}}</h4>

    <h1>Sa classe</h1>
    <!-- la jointure avec la ta ble -->
    <h4>l'id:{{$classe->idc}}</h4>
    <h4>Libelle:{{$classe->libelle}}</h4>
    <h4>Nombre maximum des etudiants :{{$classe->NombreMax}}</h4>

    <h1>Sa formation en cours</h1>
    <h4>id formation: {{$formation->idf}}</h4>
    <h4>Titre de Formation: {{$formation->titre}}</h4>
    <h4>Nombre d'heure de formation: {{$formation->nbrHeure}}</h4>
 
    <h1>les avis</h1>
    @if(count($av)>0)
        
        @foreach($av as $f)
            <h4>id formation : {{$f->idf}}</h4>
            <h4>les points données :{{$f->pivot->points}}</h4>
        @endforeach
    @else
        <p>pas d'avis</p>
    @endif
</body>
</html>