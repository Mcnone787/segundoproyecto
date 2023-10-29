$.ajax({
    type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
    url:"index.php", //url guarda la ruta hacia donde se hace la peticion
    data:{r:"prueba",diaini:"2023-10-26",diafin:"2023-10-27"}, // data recive un objeto con la informacion que se enviara al servidor
    success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
         datos.array.forEach(element => {
            console.log(element.Titulo)
         });
     },
    dataType: "html" // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
})