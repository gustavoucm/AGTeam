<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <!--<link rel="stylesheet" href="styles/bootstrap.min.css" >    -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="styles/sign_in.css">
    <title>Registrarse</title>
</head>
<body>    
    
    <div class="container-fluid">
        <?php require 'mod/navbar.php' ?>
        <h1 class="titulo-registrarse">Regístrate</h1>        
        <form action="" class="form-registro">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nombre (s)</label>
                    <input type="text" class="form-control" id="name">
                </div class="form-group">
                <div class="form-group col-md-6">
                    <label for="last_name">Apellidos</label>
                    <input type="text" class="form-control" id="last_name">
                </div class="form-group">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="user">Nombre de usuario</label>
                    <input type="text" class="form-control" id="user">
                </div class="form-group">
                <div class="form-group col-md-6">
                    <label for=email"">Correo electrónico</label>
                    <input type="text" class="form-control" id="email">
                </div class="form-group">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password">
            </div class="form-group">
            <div class="form-group">
                <label for="">Repetir contraseña</label>
                <input type="password" class="form-control">
            </div class="form-group">  
            <div class="form-group">                
                <input type="checkbox" id="terms_conditions">
                <label for="terms_conditions" >Acepto los términos y condiciones</label>                
            </div>
            <div class="form-group">
                <input type="submit" value="Registrarme" class="btn btn-primary">
            </div>                  
        </form>        
        <?php require 'mod/footer.php' ?>
    </div>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    

</body>
</html>