<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
        <a href="http://www.lamarhon.com.br" target = "Blank"><img src = '/img/LogoLamarhon.png' width = 100 height = 100/></a>    
        <!-- Fontes do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstraps  -->

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    </head>
    <body>

<header>
   
<nav class="navbar navbar-expand-lg navbar-light" >


    <div class = "collapse navbar-collapse" id="navbar">
<a href="" class = "navbar-brand">
    <img src="/img/logoNSR.png" width = 100 height = 100 alt="">
</a>
    <ul class="navbar-nav">
    <li class="nav-item">
     
       <a href="/" class = "navbar-link">Home |  </a> 
    </li>
    <li class="nav-item">
    <a href="/events/create" class = "navbar-link">Criar eventos | </a> 
    </li>
   <li class="nav-item">
    <a href="http://www.lamarhon.com.br/equipe.php" class = "navbar-link">Equipe | </a> 
    </li>
    <li class="nav-item">
     <a href="http://www.lamarhon.com.br/sobre_portugues.php" class = "navbar-link">História | </a> 
    </li>
    <li class="nav-item">
     <a href="http://www.lamarhon.com.br/indexCadastro.php" class = "navbar-link">Download | </a> 
    </li>
    <li class="nav-item">
     <a href="http://www.lamarhon.com.br/index_lamarhon.php" class = "navbar-link">Avaliar |  </a> 
    </li>
    <li class="nav-item">
     <a href="http://www.lamarhon.com.br/acesso/acessar/login.html" class = "navbar-link">Entrar </a> 
    </li>
</ul>
</div>
</nav>
</header>
    
    @yield('content')
<footer>
   <p>Lamarhon &copy; desde 2016</p> 
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>