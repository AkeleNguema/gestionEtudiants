<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD en ALRAVEL </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">

             <div class="col s12">
                <h1>Ajouter un étudiant!</h1>
                    

                <hr>
                
                @if (session('status'))
                <div class="alert alert-success">
                    {{session("status")}}
                    
                </div>
               @endif
               <ul> 
                @foreach ($errors->all() as $error)
                          <li class="alert alert-danger">{{ $error }}</li>
                @endforeach

               </ul>
               <form action= "/ajouter/traitement" method="POST" class="form-goupe">
                    @csrf
                <div class="form-goupe">
                     <label for="nom">Nom</label>
                          <input type="text" class="form-control" id="nom " name="nom">
                </div>             
                
                <div class="form-goupe">
                     <label for="prenom" >Prenom</label>
                          <input type="text" class="form-control" id="prenom " name="prenom">
                          @if ($errors->has('prenom'))
                           <p class="text-danger">{{ $errors->first('prenom') }}</p>
                         @endif
                </div> 

                <div class="form-goupe">
                     <label for="classe" >Classe</label>
                          <input type="text" class="form-control" id="classe" name="classe">
                </div> 
                 <br>
                     <button type="submit" class="btn btn-primary">Ajouter un étudiant</button>
                <br>
                <br>
                 <a href="/etudiant" class="btn btn-danger">Revenir sur la liste etudiant </a>

                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>