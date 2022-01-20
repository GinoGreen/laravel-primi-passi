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
   

   <div class="container d-flex flex-wrap">
      @foreach ($products as $product)
      <div class="card my-5 me-4" style="width: 18rem;">
         <img src="https:/{{ $product['imgURL'] }}" class="card-img-top" alt="potato">
         <div class="card-body">
            <h5 class="card-title">{{ $product['title'] }}</h5>
            <p class="card-text">{{ $product['description'] }}.</p>
         </div>
         <ul class="list-group list-group-flush">
            <li class="list-group-item">Prezzo: {{ $product['price'] }}€</li>
         </ul>
         <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
         </div>
      </div>
      @endforeach
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