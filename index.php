<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <!--<link rel="stylesheet" href="styles/bootstrap.min.css" >    -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
   <title>AGTeam</title>    
</head>
<body>
    <div class="container-fluid">               
        <?php require 'mod/navbar.php' ?>
        <div class="fondo">                      
            <div class="row">                         
                <div class="col-sm-12">
                    <h2 class="frase-inicio">Aprende de Bases de Datos con Nosotros</h2>
                    <h3 class="parrafo-inicio">El futuro tecnologico en un click</h3>
                    <div class="input-group mb-3 input-buscar-curso">
                        <input type="text" class="form-control" placeholder="Busca tu curso" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        <span class="input-group-text btn-buscar-curso" id="basic-addon2">Buscar</span>
                        </div>
                    </div>
                </div>            
            </div>                    
            <div class="row fila-titulo-cursos">
                    <div class="col-sm-12">
                        <p>Nuestros cursos</p>
                    </div>
            </div>
            <div class="row fila-1-cursos justify-content-center">                
                <div class="col-lg-4 card-cursos">
                    <div class="card" style="">
                        <img class="card-img-top" src="resources/img/fund-bdd.png" alt="Card image cap">
                        <hr>
                        <div class="card-body">
                            <p class="titulo-curso">Fundamentos de bases de datos</p>
                            <p class="card-text descripcion-curso">Crea tus propios modelos de bases de datos con la mejores prácticas del curso. <br> <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-cursos">
                    <div class="card" style="">
                        <img class="card-img-top sql-server" src="resources/img/myql.png" alt="Card image cap">
                        <hr>
                        <div class="card-body">
                            <p class="titulo-curso">MySQL  <span class="badge badge-warning">Proximamente</span></p>
                            <p class="card-text descripcion-curso">Aprende las funciones de MySQL como gestor de base de datos con el que podrás crear aplicaciones para ejecutar dichas funciones.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fila-2-cursos justify-content-center">
                <div class="col-lg-4 card-cursos">
                    <div class="card" style="">
                        <img class="card-img-top" src="resources/img/postgreesql.png" alt="Card image cap">
                        <hr>
                        <div class="card-body">
                            <p class="titulo-curso">Curso de PostreSQL  <span class="badge badge-warning">Proximamente</span></p>
                            <p class="card-text descripcion-curso">Diseña, crea y administra bases de datos con PostreSQL, el más poderoso motor OpenSource</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-cursos">
                    <div class="card" style="">
                        <img class="card-img-top" src="resources/img/mongo1.png" alt="Card image cap">
                        <hr>
                        <div class="card-body">
                            <p class="titulo-curso">Curso de MongoDB  <span class="badge badge-warning">Proximamente</span></p>
                            <p class="card-text descripcion-curso">Con este curso aprenderas que es NoSQL y como implementarlo a través de MongoDB.</p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="row frase-final">
                <div class="col-lg-12">
                    <p>La importancia de las bases de datos es vital en la actualidad ya que es muy demandada por empresas de nivel mundial</p>
                </div>
            </section>                      
        </div>                                    
    </div>    
    <?php require('mod/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>