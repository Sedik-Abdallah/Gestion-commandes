<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Commande N° : {{$com->id}} </h1>
    <ul>
        <li>Numéro : {{$com->numeroCom}}</li>
        <li>Date : {{$com->dateCom}}</li>
        <li>Client : {{$com->client->nom}}</li> 
        <!-- methode de la jointure ^(client) lenom de la fct dans le model commande -->
    </ul>
    <br>
    <h1>Details Commande</h1>
    <table border='1'>
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>designation</th>
                    <th>Prix Unitaire</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            @php 
                $count=0
            @endphp
            @php 
                $total=0
            @endphp
                @foreach($details as $det)
                @php 
                    $total = $det->quantite * $det->prix
                    @endphp
                    @php 
                    $count = $count + $total
                    @endphp
                <tr>
                    <td>{{$det->numero}}</td>
                    <td>{{$det->designation}}</td>
                    <td>{{$det->prix}}</td>
                    <td>{{$det->quantite}}</td>
                    <td>{{$total}}</td>
                </tr>
                @endforeach
               
            </tbody>
           
    </table>
    <p>Mantant de la commnade: {{$count}}</p>
    <button><a href="{{ route('commandes.index')}}">Annuler</a></button>
</body>
</html>