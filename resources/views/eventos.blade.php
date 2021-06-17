<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aula 3 de pw3 sobre views">
    <!-- <link rel="stylesheet" href="app.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Aula 3- Gestão de aluno</title>
</head>
<body>
<h1>Site Etec</h1>
<section>
<a href="/">Home</a> <br>
<a href="/aluno">aluno</a> <br>
<a href="/professor">Professor</a>
</section>

    @yield('home')
 
    @yield('leitura') <!-- pra ver a tabela toda-->

<script src="js/aluno.js"></script> 
<!-- <script src="js/professor.js"></script>  -->

<!--o pq q ta é pq esse script ta relacionado ao yield de cima-->

    @yield('registro') <!-- pra ver a template de visualizar 1 elemento da tabela-->
    @yield('create')<!-- pra ver a template de cadastro-->
    @yield('edit') <!-- pra ver a template de ediçãos-->

    <!-- @yield('conteudo') -->
    <!-- @yield('programa') -->

    <!-- @yield('professor') -->
    
</body>
</html>