<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="../sass/app.scss">
   
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
   
   <div class="jumbotron jumbotron-fluid" style="background-image: url('https://static.vecteezy.com/system/resources/previews/002/099/443/non_2x/programming-code-coding-or-hacker-background-programming-code-icon-made-with-binary-code-digital-binary-data-and-streaming-digital-code-vector.jpg'); background-size: cover; height: 340px;">
      <div class="container pt-5">
         <h1 class="display-4 text-white">Fluid jumbotron</h1>
         <p class="lead text-white">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
   </div>

   <div class="container">
      <h1 class="text-center my-5">Primipassi Laravel</h1>
      <p class="my-5">Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.</p>
      <p class="my-5">Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.</p>
      <p class="my-5">Whether you are new to PHP or web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.</p>
      <div class="card text-center">
         <div class="card-header">
           Featured
         </div>
         <div class="card-body">
           <h5 class="card-title">Special title treatment</h5>
           <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
           <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
         <div class="card-footer text-muted">
           2 days ago
         </div>
       </div>
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