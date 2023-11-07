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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <style>
        #button{
            width: 20px; 
            height: 20px; 
        }
    </style>
</head>

<body>

    <?php include "nav.php"; ?>
        <div class="container" style="margin-bottom:400px;">
            <form class="form-control form_session" action="index.php?r=modifygalery&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" style="margin-top:100px;margin-bottom:200px;">
            <div class="row">
                <div class="col-12 col-lg-6" style="display: flex;flex-direction: row;justify-content: center;margin-top:40px;">

                    <div class="col-12" >
                        <h2 style="text-align:center;margin-bottom:40px;">Eliminar imagenes de la galeria</h2>
                        <?php 
                        if($imgs["src_imagen"]==null){
                            echo "<p style='text-align:center;'>No hay imagenes :-:</p>";
                        } else{
                            foreach ($imgs["src_imagen"] as $key => $value) {?>
<div class="col-12" style="margin-top:40px;">
                        <img src="<?php echo $value; ?>" alt="d" style="    height: min-content;
    width: 300px;"> <input type="checkbox" id="button" name="remove<?php echo $key;?>" id="">
    </div>
                            
                        <?php }
                        }?>
                       
                            
                        
                    </div>
                </div>
                    <div class="col-12 col-lg-6" style="display: flex;flex-direction: row;justify-content: center;margin-top:40px;">
                    <div>
                                    <h3 style="text-align:center;">Añadir imagenes del apartamento</h3>
                                    <button type="button" class="btn btn-success" id="addimg" style="float:right;margin-top:20px;margin-bottom:20px;">Añadir imagen</button>
                                    <div id="imgs">
                                    </div>
                    </div>
            </div>
            <div class="col-12" style="padding:20px;">
                <button type="submit" class="btn btn-success" style="margin:0 auto;display:flex;">Aplicar cambios</button>
            </div>
        </div>
        </div>
        
         

    </form>
    <?php include "footer.php"; ?>
    <script>
        $(function() {
            $("#accordion").accordion({
                collapsible: true
            });
        });
    </script>
    <script src="srcs/index.js"></script>
    <script src="srcs/addmoreimg.js"></script>
</body>

</html>