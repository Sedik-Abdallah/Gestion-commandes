<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{ route('commandes.create')}}"> Ajouter une commande</a>
    <h1>liste des Commandes</h1>
    <table border='1'>
        <thead>
            <tr>
                <th>N°Com</th>
                <th>Date Com</th>
                <th>Client</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $com)
            <tr>
                <td>{{$com->numeroCom}}</td>
                <td>{{$com->dateCom}}</td>
                <td>{{$com->nom}}</td>
                <td><a href="{{ route('commandes.edit',$com->id)}}">Modifier</a>||<a href="">Supprimer</a>
                || <a href="{{ route('commandes.show', $com->id)}}">afficher</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>