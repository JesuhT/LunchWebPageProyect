$(document).ready(function() { 
    ajaxVerUsuarios();
  })
  
  function ajaxVerUsuarios(){
    $.ajax({
        url: "../controlador/accion/ver-usuarios.php",
        success: function(result){ 
           insertarUsuariosEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
  }

  $(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault();
      
      // Hacer la solicitud AJAX
      $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(), // Serializa los datos del formulario
        success: function(response) {
          var result = JSON.parse(response);
          
          // Muestra el mensaje de éxito
          alert(result.msg);
          location.reload();
        },
        error: function(err) {
          console.error('Error:', err);
        }
      });
    });
  });
  
  function insertarUsuariosEnTabla(result) {
    let usuarios = '';
  
    $.each(result, function(i) {
        usuarios += '<tr id=' + result[i].ID_usuario + '>'
            + '<td width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Nombres + '</td>'
            + '<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Apellidos + '</td>'
            + '<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Email + '</td>'
            + '<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Contraseña + '</td>'
            + '<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Celular + '</td>'
            + '<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].NombrePrograma + '</td>'
            + '<td width="150" class="text-center" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'
            + '<div class="btn-container">' 
            + '<a href="#" class="editar btn btn-sm" style="background-color: #007BFF; color: #fff;" role="button" aria-pressed="true">'
            + '<i class="fas fa-edit"></i> Editar</a>'
            + '</div>'
            + '<div class="btn-container">'
            + '<a href="../controlador/accion/eliminarUsuario.php?idUsuario=' + result[i].ID_usuario + '" class="btn btn-danger btn-sm" role="button" aria-pressed="true">'
            + '<i class="fas fa-trash-alt"></i> Eliminar</a>'
            + '</div></td>'
            + '</tr>';
    });
  
    $("#usuariosRegistrados tbody").append(usuarios);
    insertarDatosUsuarioEnModal();
    
  }
  

function insertarDatosUsuarioEnModal(){
    $(".editar").on("click",function(){
        let idUsuario = $(this).closest("tr").attr("id")
    
        $.ajax({
            type: "POST",
            data: {idUsuario: idUsuario},
            url: "../controlador/accion/verUsuarioPorId.php",
            success: function(data){
                let usuario = JSON.parse(data)
             
                $("#modalEditarUsuario").modal('show');

                $("#modalEditarUsuario input[name='idUsuario']").val(usuario.id)
                $("#modalEditarUsuario input[name='nombres']").val(usuario.nombres);
                $("#modalEditarUsuario input[name='apellidos']").val(usuario.apellidos);
                $("#modalEditarUsuario input[name='email']").val(usuario.email);
                $("#modalEditarUsuario input[name='contrasena']").val(usuario.contrasena);
                $("#modalEditarUsuario input[name='celular']").val(usuario.celular);
                $("#modalEditarUsuario input[name='nombrePrograma']").val(usuario.nombrePrograma);
                
                if(usuario.ID_rol == 1){
                    $("#modalEditarUsuario .rol option:eq(1)").prop('selected', true)
                }else{
                    $("#modalEditarUsuario .rol option:eq(2)").prop('selected', true)
                }
              
          }})

    })
}