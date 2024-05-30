<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestion des commandes</h1>
    <h4>Modifier Commande N° :  {{$commandeFind->id}} </h4>
    <form action="{{route('commandes.update' , $commandeFind->id)}}" method="post">
        @csrf
        @method('put')
       <label for="">Numero Commande</label>
        <input type="text" name='numeroCom' value="{{$commandeFind->numeroCom}}" ><br>
        <label for="">Date Commande</label>
        <input type="date" name='dateCom' value="{{$commandeFind->dateCom}}"><br>
        <label for="">Client : </label>
        <select name="client_id" id="">
            @foreach ($clients as $clt)
                <option value="{{$clt->id}}" @if ($clt->id == $commandeFind->client_id) selected @endif>{{$clt->nom}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Modifier">
        <button><a href="{{ route('commandes.index')}}">Annuler</a></button>
    </form>
</body>
</html>