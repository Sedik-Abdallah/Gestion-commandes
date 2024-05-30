<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>L'ancienne classe est :</h1>
    <form action="{{route('etudiants.update',$etudiantFind->codeE)}}" method="post">
        @csrf
        @method('put')
        <ul>

            <li>Id:{{$classe->idc}}</li>
            <li>Libelle:{{$classe->libelle}} </li>
            <li>Libelle:{{$classe->NombreMax}} </li>
        </ul>
        <h1>Choisir une nouvelle classe</h1>
        <select name="idc" id="">
            @foreach($idfind as $id)
            <option value="{{$id->idc}}">{{$id->idc}}</option>
            @endforeach
        </select>
        <button>Sauvgarder</button>
    </form>
</body>
</html>