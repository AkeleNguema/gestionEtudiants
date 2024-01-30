<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gestionEtudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container-center">
        <div class="row">

             <div class="col s12">
                <h1>Gestion des Etudiants</h1>
                <hr>
                    <a href="/ajouter" class="btn btn-info">Ajouter un étudiant </a>
                    <hr>
                    @if (session('status'))
                         <div class="alert alert-success">
                    {{session("status")}}
                    
                         </div>
                     @endif
                     <table  class="table"> 
                        <thead>
                            <tr>
                                <th># </th>
                                
                                <th>Nom</th>
                                
                                <th>Prenom</th>
                                
                                <th>Class</th>
                                
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        @foreach ($etudiants as $etudiant)
                        
                        <tr>
                                <td>    {{$etudiant ->id}}  </td>
                                <td>    {{$etudiant ->nom}}  </td>
                                <td>    {{$etudiant ->prenom}}  </td>

                                <td>    {{$etudiant ->classe}} </td>

                                <td>
                                    <a href ="/update_etudiant/{{$etudiant ->id}}" class="btn btn-success"> update  </a>
                                    <a href ="#" class="btn btn-danger"> delete  </a>
                                </td>
                            </tr>
                <!--  pour l'exemple d'utilisateur
                            <tr>
                                <td>2</td>

                                <td>Akele</td>

                                <td>Ingr</td>

                                <td>6 eme</td>
                                <td>
                                    <a href ="#" class="btn btn-success"> update  </a>
                                    <a href ="#" class="btn btn-danger"> delete  </a>
                                </td>
                                
                        
                            </tr>

                            <tr>
                                <td>3</td>

                                <td>nguema</td>

                                <td>marie</td>

                                <td>6 eme</td>

                                <td>
                                    <a href ="#" class="btn btn-success"> update  </a>
                                    <a href ="#" class="btn btn-danger"> delete  </a>
                                </td>
                                
                        
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>alice</td>

                                <td>Carter</td>

                                <td>6 eme</td>

                                <td>
                                    <a href ="#" class="btn btn-success"> update  </a>
                                    <a href ="#" class="btn btn-danger"> delete  </a>
                                </td>
                            </tr>*/ -->
                        @endforeach
                        </tbody>
                     </table>



            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>