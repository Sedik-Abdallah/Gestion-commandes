<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Commande</title>
</head>

<body>

    <div class="container mt-5">
        <h1>Commande N&ordm; : {{ $commande->numCom }}</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item"><b>Numero:</b> {{ $commande->numCom }}</li>
            <li class="list-group-item"><b>Date:</b> {{ $commande->dateCom }}</li>
            <li class="list-group-item"><b>Client:</b> {{ $commande->client->nom }}</li>
        </ul>

        <h2 class="mb-3">Details Commandes</h2>
        <table class="table table-striped table-hover">
            <thead class="bg-warning text-white">
                <tr>
                    <th >Numero</th>
                    <th >Designation</th>
                    <th >Prix</th>
                    <th >Quantite</th>
                    <th >Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commande->articles as $e)
                <tr>
                    <td>{{ $e->numero }}</td>
                    <td>{{ $e->designation }}</td>
                    <td>{{ $e->prix }}</td>
                    <td>{{ $e->quantite }}</td>
                    <td>{{ $e->prix * $e->quantite }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center"> 
            <p class="h4 text-danger d-flex justify-content-between w-50">
                <b>Prix Total :</b> {{ $commande->getTotal() }}
            </p>
            
        </div>
    </div>

</body>

</html>
