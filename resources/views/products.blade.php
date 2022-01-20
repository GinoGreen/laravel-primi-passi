<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Home Laravel</title>
</head>
<body>

   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">Primipassi</a>
            <div class="navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                  <a class="nav-link" href="{{ route('products') }}">Prodotti</a>
                  <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
               </div>
            </div>
         </div>
       </nav>
   </header>
   

   <div class="container">

   </div>

   <footer class="mt-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">Primipassi</a>
            <div class="navbar-nav">
               <a class="nav-link" href="#">Contatti</a>
               <a class="nav-link" href="#">Contatti</a>
               <a class="nav-link" href="#">Contatti</a>
               <a class="nav-link" href="#">Copyright</a>
               <a class="nav-link" href="#">Copyright</a>
               <a class="nav-link" href="#">Copyright</a>
               <a class="nav-link" href="#">Copyright</a>
               <a class="nav-link" href="#">Info</a>
               <a class="nav-link" href="#">Info</a>
               <a class="nav-link" href="#">Info</a>
               <a class="nav-link" href="#">Info</a>
            </div>
         </div>
       </nav>
   </footer>

</body>
</html>