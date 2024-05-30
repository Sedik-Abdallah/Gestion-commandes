<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestion des Commandes</h1>
    <h4>Ajouter Nouvelle commandes</h4>
    <br>
    <form action="{{route('commandes.store')}}" method="post">
    @csrf
        <label for="">Numero Commande</label>
        <input type="text" name='numeroCom' ><br>
        <label for="">Date Commande</label>
        <input type="date" name='dateCom'><br>
        <label for="">Client : </label>
        <select name="client_id" id="">
            @foreach ($clients as $clt)
                <option value={{$clt->id}}>{{$clt->nom}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Ajouter">
        <button><a href="{{ route('commandes.index')}}">Annuler</a></button>
    </form>
</body>
</html>