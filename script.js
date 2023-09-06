listarProductos()
function listarProductos(){
    fetch("listar.php", {
        method: "POST"
        
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}

registrar.addEventListener("click",  ()=>{
    fetch("registrar.php",{
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if(response == "ok"){
            Swal.fire({
                icon: 'success',
                title: 'Registrado',
                showConfirmButton: false,
                timer: 1500
              })
              frm.reset();
              listarProductos();
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Modificado',
                showConfirmButton: false,
                timer: 1500
              })
              idp.value ="";
              frm.reset();
              listarProductos();
        }
    })
});

function eliminar(id){

    Swal.fire({
        title: 'Esta seguro de eliminar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            fetch("eliminar.php" ,{
                method: "POST",
                body: id
            }).then(response => response.text()).then(response =>{
                if(response == "ok"){
                    listarProductos();
                    Swal.fire({
                        icon: 'success',
                        title: 'Eliminado',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
               
            })  
        }
      })
}

function editar(id){
    fetch("editar.php" , {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        idp.value = response.id;
       codigo.value = response.codigo;
       producto.value = response.producto;
       precio.value = response.precio;
       cantidad.value = response.cantidad; 
       registrar.value = "Actualizar"
    })

}