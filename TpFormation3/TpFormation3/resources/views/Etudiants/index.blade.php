<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session()->has('success'))
     {{session('success')}}
    @endif
    <h1>La liste des etudiants</h1>
    <table border="1">
        <thead>
            <tr>
                <th>CodeE</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Addresse</th>
                <th>Date Naissance</th>
                <th>id Classe</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etud)
            <tr>
               <td>{{$etud->codeE}}</td>
               <td>{{$etud->nom}}</td>
               <td>{{$etud->prenom}}</td>
               <td>{{$etud->addresse}}</td>
               <td>{{$etud->dateNaissance}}</td>
               <td>{{$etud->idclasse}}</td>
               <td colspan="2">
                      <a href="{{route('etudiants.show', $etud->codeE)}}">Details</a>
                      <a href="{{route('etudiants.edit',$etud->codeE)}}">Modifier</a>
               </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>