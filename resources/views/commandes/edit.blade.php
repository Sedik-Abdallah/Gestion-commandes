<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div style="background:#EFEFEF;font-weight:bold" class="m-5 p-5 rounded">
        <h1 class="text-center">Gestion des Commandes</h1>
        <h2 class="text-center">Modifier Commande N&ordm; :{{$commande->numCom}}</h2>
        <form class="form" method="POST" action="{{route('commandes.update', $commande->id)}}">
            @METHOD('PUT')
            @csrf
            <label>Nemero commande : </label>
            <input class="form-control" name="numCom" value="{{$commande->numCom}}">
            <label>Date Commande : </label>
            <input class="form-control" name="dateCom" type="date" value="{{$commande->dateCom}}">
            <label>Client : </label>
            <select class="form-control" name="clientId" >
                @foreach ($clients as $client)
                    <option value="{{$client->id}}" @if($client->id === $commande->clientId) selected @endif >{{$client->nom}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary m-3" type="submit">Edit</button>
            <a class="btn btn-secondary m-3" href="{{route("commandes.index")}}">Annuler</a>
        </form>
    </div>
</body>
</html>
