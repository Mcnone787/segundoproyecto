<html lang="es">
<head>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="srcs/style.css">
      <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="container" style="margin-bottom:200px;">
        <div class="row">
            <div class="col-5">
                <p style="color:black; text-align:left;flotar:none;">
                    Añade tu apartamento con este formulario ^^
                </p>
            </div>
            <div class="col-7">     
            <form class="form-control form_session" action="index.php?r=doeditaparta" method="post">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6" >
                               <label for="Nombre"> Nombre apartamento </label><input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-6" >
                            <label for="Nombre"> CP </label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                        </div>
                    </div>
                    <!-- 
ApartamentosID Ascendente 1	
Titulo	
CP	
Laltidud	
Longitud	
Descripcion	
m2	
num_habita	
Lista_servicios	
precioALT	
PrecioBAJ	
temporada	
servicios	
estados	
GestorId	 -->
                    <div class="mb-3">
                    <div class="row">
                    <div class="col-6" >
                               <label for="Laltidud"> Laltidud  </label><input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-6" >
                            <label for="Longitud"> Longitud </label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                                <div class="col-3">
                                </div>
                                <div class="col-5">
                                    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                </div>
                                <div class="col-3"></div>

                    </div>
                    <div class="row">
                    <div class="col-6" >
                               <label for="Laltidud"> m2	  </label><input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-6" >
                            <label for="Longitud">  Lista de servicios </label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-6" >
                               <label for="Laltidud"> precioALT  </label><input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-6" >
                            <label for="Longitud"> PrecioBAJ </label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-6" >
                               <label for="Laltidud"> temporada  </label><input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-6" >
                            <label for="Longitud"> servicios </label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-6" >
                               <label for="Laltidud"> Estado  </label><input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-6" >
                    </div>
</div>  
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>

        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>