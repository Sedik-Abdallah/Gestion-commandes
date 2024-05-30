<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion Commandes</title>
</head>

<body>

    <div class="mt-5 mb-2 text-center">
        <a class="text-warning font-weight-bold fs-5" href="{{ route('commandes.create') }}">Nouvelle Commande</a>
    </div>

    <h1 class="text-center fs-2 fw-bold mb-5">Liste des Commandes</h1>
    @if (session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <table class="table table-striped table-hover">
            <thead class="bg-warning text-white">
                <tr>
                    <th>N&ordm; Com</th>
                    <th>Date Com</th>
                    <th>Client</th>
                    <th>Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $e)
                <tr>
                    <td>{{ $e->numCom }}</td>
                    <td>{{ $e->dateCom }}</td>
                    <td>{{ $e->client->nom }}</td>
                    <td>
                        <a class="btn btn-primary me-2" href="{{route('commandes.edit', $e->id)}}">Edit</a>
                        <form action="{{ route('commandes.destroy', $e->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('commandes.show', $e->id) }}" class="text-primary">>></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
        

    </div>
    <script>
       
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');

            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</body>

</html>