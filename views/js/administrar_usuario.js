$(document).ready(function() { 
  ajaxVerUsuarios();
})

function ajaxVerUsuarios(){
  $.ajax({
      url: "/../../controllers/actionadmin/ver-usuarios.php",
      success: function(result){ 
         insertarUsuariosEnTabla(JSON.parse(result));
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
  console.log(result[i].Nombre);
  $.each(result, function(i) {
      usuarios += '<tr id=' + result[i].ID_usuario + '>'
          + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Nombre + '</td>'
          + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Apellido + '</td>'
          + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Email + '</td>'
          + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Contrasena + '</td>'
          + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Celular + '</td>'
          + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].ID_programa +'</td>'
          + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].ID_rol +'</td>'
          + '<td class="data-list" width="150" class="text-center" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'
          + '<div class="btn-container">' 
          + '<a href="#" class="editar btn btn-sm" data-id="' + result[i].ID_usuario + '" style="background-color: #007BFF; color: #fff;" role="button" aria-pressed="true">'
          + '<i class="fas fa-edit"></i> Editar</a>'
          + '</div>'
          + '<div class="btn-container">'
          + '<a href="/../../controllers/actionadmin/eliminarUsuario.php?idUsuario=' + result[i].ID_usuario + '" class="btn btn-danger btn-sm" role="button" aria-pressed="true">'
          + '<i class="fas fa-trash-alt"></i> Eliminar</a>'
          + '</div></td>'
          + '</tr>';
  });

  $("#usuariosRegistrados tbody").append(usuarios);
  insertarDatosUsuarioEnModal();
  
}

function insertarDatosUsuarioEnModal() {
  $('.editar').click(function() {
      var userID = $(this).data('id');
      console.log(userID); 
      $.ajax({
          url: '/../../controllers/actionadmin/verUsuarioPorId.php?idUsuario=' + userID,
          success: function(response) {
              var usuario = JSON.parse(response);
              
              $("#modalEditarUsuario").modal('show');

              $("#modalEditarUsuario input[name='nombres']").val(usuario.Nombre);
              $("#modalEditarUsuario input[name='apellidos']").val(usuario.Apellido);
              $("#modalEditarUsuario input[name='email']").val(usuario.Email);
              $("#modalEditarUsuario input[name='contrasena']").val(usuario.Contrasena);
              $("#modalEditarUsuario input[name='celular']").val(usuario.Celular);
              $("#modalEditarUsuario input[name='nombrePrograma']").val(usuario.ID_programa);
              

              if (usuario.ID_rol == 1) {
                  $("#modalEditarUsuario .rol option:eq(1)").prop('selected', true);
              } else {
                  $("#modalEditarUsuario .rol option:eq(2)").prop('selected', true);
              }
          },
          error: function(err) {
            console.error('Error:', err);
          }
      });
  });
}
