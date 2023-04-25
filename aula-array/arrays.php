<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Arrays Revisão</title>
</head>
<body>

<div class="topo">

<nav class="navbar navbar-expand-sm  navbar-dark" styles="widht: 150px">
  <div class="container-fluid">
  <img src="./eu-removebg-preview.png" alt="eu" widht=100px height= 120px >
    <a class="navbar-brand" href="#"> <h1>  Aula Sobre: Array</h1></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/DyjaynySilva"><p>Códigos</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><p>Vetores</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><p>Barras de navegações</p></a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><p>Favoritos</p></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Crepúsculo</a></li>
            <li><a class="dropdown-item" href="#">MPB</a></li>
            <li><a class="dropdown-item" href="#">Como eu era antes de você</a></li>
          </ul>
        </li>
      </ul>
    </div>

      
  </div>

</nav>
</div>

<div class="conteudo">
    <h2> Arrays com lista ordenada - Explícito</h2>

    <?php
    $livros = array('Romance','Fantasia','Época');


    echo'<pre>';
    print_r($livros);
    echo'</pre>';

    echo'<h2> Adicionar itens ao array</h2>';

    $livros[]='Ação';

    echo'<pre>';
    print_r($livros);
    echo'</pre>';
    
    $livros[]='Terror';

    echo'<pre>';
    print_r($livros);
    echo'</pre>';

    echo'<h2> Alterar itens ao array</h2>';

    $livros[1]= 'Ficção Científiica';

    echo'<pre>';
    print_r($livros);
    echo'</pre>';

    echo'<h2> Arrays com lista ordenada - Implícito</h2>';
    echo'<BR>';
   

    $livro=['Romance', 'Ficção', 'Humor', 'Fanfic'];

    echo'<pre>';
    print_r($livro);
    echo'</pre>';
    
    echo'<h2> Array associativo , Chave=> Valor </h2>';

    $arrayA=[
       0=> 'livro',
       1=> 'filme',
       2=>'musica',
       10=> 'chocolate'
    ];

    echo'<pre>';
    print_r($arrayA);
    echo'</pre>';

    echo'<h2> Array associativo , impressão de 1 item: </h2>';

    echo'<pre>';
    print_r($arrayA[2]);
    echo'</pre>';

   echo'<h2> Adição de 1 item: </h2>';

    $arrayA[9]= 'sorvete';
    
    echo'<pre>';
    print_r($arrayA);
    echo'</pre>';

    $arrayA[]= 'Rir';

    echo'<pre>';
    print_r($arrayA);
    echo'</pre>';

    echo'<h2> Arrays com Multivalores: </h2>';

    $arrayA['Meu nome']= 'Dyjayny';
    $arrayA['Mãe']='Marcionília';
    $arrayA[20]= 'Aesthetic';    
    $arrayA['Pai']='Arnaldo';
    $arrayA['Irmãos']='Nadson, Harley,<br> Amanda e Kelvy';
    $arrayA['Minha idade']='17 anos';

    echo'<pre>';
    print_r($arrayA);
    echo'</pre>';
    
    echo'<h2> Array Multidimencional </h2>';

    $multidimensional=[
        'alunos'=>[
        [     'id'=> '17',
              'nome'=> 'Dyjayny',
              'enderço'=> 'Rua Dois de Julho'
        ],

        [     'id'=> '5',
              'nome'=> 'Kelvy',
              'enderço'=> 'Rua Dois de Julho'
        ],
        [        'id'=> '8',
                 'nome'=> 'Amanda',
                 'enderço'=> 'Rua Dois de Julho'
        ]

        ]
        ];

   
    echo'<pre>';
    print_r($multidimensional);
    echo'</pre>';

    echo'<pre>';
    echo'Chamando um só:<br><br>';
    print_r($multidimensional['alunos'][0]);
    echo'</pre>';

    echo'<pre>';
    echo'Especificando:<br><br>';
    print_r($multidimensional['alunos'][0]['nome']);
    echo'</pre>';



    ?>
   </div> 
</body>
</html>