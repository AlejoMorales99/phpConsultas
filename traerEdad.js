let btn = document.getElementById("btn1");
let guardarConsulta = document.getElementById("guardar");

guardarConsulta.addEventListener("click",function(e){
    e.preventDefault();

    let formulario = new FormData( document.getElementById("enviar"));

    console.log(...formulario);

    fetch("http://localhost/Hospisoftv1/app/insertarConsultasMedicas.php",{
        method: "post",
        body: formulario
    })
        .then((Response) => Response.json())
        .then((data)=>{

            

        
        })


});

btn.addEventListener("change",function(e){
    e.preventDefault();
    
    

    let formulario = new FormData( document.getElementById("enviar"));
    

    fetch("http://localhost/Hospisoftv1/app/traerEdadCliente.php",{
        method: "post",
        body: formulario
    })
        .then((Response) => Response.json())
        .then((data)=>{
            document.getElementById("fecha").value= data["fecha"];
            document.getElementById("edad").value= data["edad"] ;
        })





});