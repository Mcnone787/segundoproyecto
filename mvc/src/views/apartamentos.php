<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="row">
  <div class="form-inline" style="    display: flex;
    justify-content: center;">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:50%;" name="titulo" id="titulo">  
    <label for="from">From</label>
    <input type="text" id="from" name="from">
    <label for="to">to</label>
    <input type="text" id="to" name="to">
    <input type="number" name="numhabita" min="1" id="numhabita">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="buscarbtn">Buscar</button>

</div>
        </div>
        <div class="row row-cols-3 row-cols-md-4 g-4 my-5 py-3" id="cosas">
            <?php if (isset($apartamentosPagina) && is_array($apartamentosPagina)) : ?>
                <?php foreach ($apartamentosPagina as $apartamento) : ?>
                    <?php
                    $titulo = $apartamento['Titulo'];
                    $descripcion = $apartamento['Descripcion'];
                    $numHabitaciones = $apartamento['num_habita'];
                    $precioAlt = $apartamento['precioALT'];
                    $precioBaj = $apartamento['PrecioBAJ'];
                    $apartamentoID = $apartamento['ApartamentosID'];
                    ?>
                    <div class="col">
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href="index.php?r=apartamentoReserva&id=<?= $apartamentoID ?>" class="stretched-link">
                            <div class="card h-100" style="width: 100%;">
                                <img src="imgs/logo/logo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $titulo ?></h5>
                                    <p class="card-text"><?= $descripcion ?></p>
                                    <p class="card-text">Habitaciones: <?= $numHabitaciones ?></p>
                                    <h6 class="card-text">Precio Alto: <?= $precioAlt ?>€ - Precio Bajo: <?= $precioBaj ?>€</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No apartments available.</p>
            <?php endif; ?>
        </div>
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= $paginaAnterior < 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?r=apartamentos&pagina=<?= $paginaAnterior ?>">Previous</a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPaginas; $i++) : ?>
                        <li class="page-item <?= $paginaActual == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?r=apartamentos&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $paginaSiguiente > $totalPaginas ? 'disabled' : '' ?>">
                        <a class="page-link" href="?r=apartamentos&pagina=<?= $paginaSiguiente ?>">Next</a>
                    </li>
            </nav>
        </div>
    </div>
    <script>
    $( "#from" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#to" ).datepicker({ dateFormat: 'yy-mm-dd' });
  $( function() {
    
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
    <script >
jQuery("#buscarbtn").click(()=>{
    let fechaini=jQuery("#from").val()
    let fechafin=jQuery("#to").val()
     let titulo=jQuery("#titulo").val()
    let numhabita=jQuery("#numhabita").val()
    
    $.ajax({
    type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
    url:"index.php", //url guarda la ruta hacia donde se hace la peticion
    data:{r:"prueba",diaini:fechaini,diafin:fechafin,titulo:titulo,numhabita:numhabita}, // data recive un objeto con la informacion que se enviara al servidor
    success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
        let apartamentos=JSON.parse(datos)
     
        jQuery("#cosas").html("")
       apartamentos.forEach(element => {
           
           
            jQuery("#cosas").append(
        `
        <div class="col">
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href="index.php?r=apartamentoReserva&id=<?= $apartamentoID ?>" class="stretched-link">
                            <div class="card h-100" style="width: 100%;">
                                <img src="imgs/logo/logo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">${element.Titulo}</h5>
                                    <p class="card-text">${element.ApartamentosID}</p>
                                    <p class="card-text">Habitaciones: <?= $numHabitaciones ?></p>
                                    <h6 class="card-text">Precio Alto: <?= $precioAlt ?>€ - Precio Bajo: <?= $precioBaj ?>€</h6>
                                </div>
                            </div>
                        </a>
                    </div>
        
        `
       )
       });
       
        //  datos.forEach(element => {
        //     console.log(element.Titulo)
        //  });
     },
    dataType: "html" // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
})
})

    </script>
    
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/apartamentos.js"></script>
</body>

</html>