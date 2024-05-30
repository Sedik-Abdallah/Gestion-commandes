<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#formationSelect').change(function() {
        var selectedFormationId = $(this).val();
        console.log('Selected Formation ID:', selectedFormationId);

        // Clear previous results
        $('#formationDetails').empty();
        $('#classesTable tbody').empty();

        // Make AJAX call if a valid formation ID is selected
        if (selectedFormationId) {
          $.ajax({
            url: '/search/' + selectedFormationId,
            method: 'GET',
            success: function(data) {
              console.log('Search Result:', data);
              // Update the DOM with the received data
              if (data.formation) {
                $('#formationDetails').html(
                  '<strong>ID:</strong> ' + data.formation.idf + '<br>' +
                  '<strong>Titre:</strong> ' + data.formation.titre + '<br>' +
                  '<strong>Nombre heure:</strong> ' + data.formation.nbrHeure
                );
              } else {
                $('#formationDetails').html('No formation details found.');
              }

              if (data.classes && data.classes.length > 0) {
                data.classes.forEach(function(classe) {
                  $('#classesTable tbody').append(
                    '<tr>' +
                      '<td>' + classe.idc + '</td>' +
                      '<td>' + classe.libelle + '</td>' +
                      '<td>' + classe.NombreMax + '</td>' +
                    '</tr>'
                  );
                });
              } else {
                $('#classesTable tbody').append('<tr><td colspan="3">No classes found.</td></tr>');
              }
            },
            error: function(error) {
              console.error('Error:', error);
              $('#formationDetails').html('An error occurred while fetching data.');
            }
          });
        }
      });
    });
  </script>
  <title>Search</title>
</head>
<body>
  <h1>Rechercher une formation</h1>
  <span>Choisir une formation: </span>
  <select name="id" id="formationSelect">
    @foreach ($formations as $formation)
      <option value="{{ $formation->idf }}">{{ $formation->idf }}</option>
    @endforeach
  </select>
  <div id="result">
    <h2>Formation Details</h2>
    <p id="formationDetails"></p>
    <h2>Classes</h2>
    <table id="classesTable" border="1">
      <thead>
        <tr>
          <th>Class ID</th>
          <th>Libelle</th>
          <th>Nombre Max</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data will be appended here via JavaScript -->
      </tbody>
    </table>
  </div>
</body>
</html>
