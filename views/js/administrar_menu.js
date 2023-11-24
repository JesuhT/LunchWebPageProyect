$(document).ready(function () {
  ajaxVerAlmuerzosEnMenu();
})

function ajaxVerAlmuerzosEnMenu() {
  $.ajax({
    url: "/../../controllers/action/ver-menu.php",
    success: function (result) {
      console.log(result);
      insertarAlmuerzosEnMenuEnTabla(JSON.parse(result));
    },
    error: function (xhr) {
      alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
    }
  });
}

function insertarAlmuerzosEnMenuEnTabla(result) {
  console.log(result);
  let almuerzosEnMenu = '';
  $.each(result, function (i) {
    almuerzosEnMenu += '<tr id=' + result[i].ID_almuerzo + '>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].ID_almuerzo + '</td>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].nombre + '</td>'
      + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].ID_menu + '</td>'
      + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].dia + '</td>'
      + '<td class="data-list" width="150" class="text-center" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'
      + '<div class="btn-container">'
      + '<a class="editaralmenu btn btn-sm" data-id="' + result[i].ID_almuerzo + '" style="background-color: #007BFF; color: #fff;" role="button" aria-pressed="true">'
      + '<i class="fas fa-edit"></i> Editar</a>'
      + '</div>'
      + '<div class="btn-container">'
      + '<a  data-id="' + result[i].ID_almuerzo + '" class="deleteAlmuerzoEnMenu btn btn-danger btn-sm" role="button" aria-pressed="true">'
      + '<i class="fas fa-trash-alt"></i> Eliminar</a>'
      + '</div></td>'
      + '</tr>';
  });

  $("#almuerzosEnMenu tbody").append(almuerzosEnMenu);
  insertarDatosAlmuerzoEnMenuEnModal();

}

function insertarDatosAlmuerzoEnMenuEnModal() {
  $('.editaralmenu').click(function () {
    var almuerzoID = $(this).data('id');
    console.log(almuerzoID);
    $.ajax({
      url: '/../../controllers/actionadmin/verUsuarioPorId.php?idUsuario=' + userID,
      success: function (response) {
        var usuario = JSON.parse(response);
        console.log(response);
        $("#almuerzosEnMenu").modal('show');
        $("#almuerzosEnMenu input[name='ID_almuerzo']").val(usuario.ID_almuerzo);
        $("#almuerzosEnMenu input[name='nombre']").val(usuario.nombre);
        $("#almuerzosEnMenu input[name='ID_menu']").val(usuario.ID_menu);
        $("#almuerzosEnMenu input[name='dia']").val(usuario.dia);
        // Seleccionar el programa del usuario en el select correspondiente
        var programaSelect = $("#modalEditarUsuario select[name='programa']");
        programaSelect.val(usuario.ID_programa);

        // Seleccionar el rol del usuario en el select correspondiente
        var rolSelect = $("#modalEditarUsuario select[name='rol']");
        rolSelect.val(usuario.ID_rol);
      },
      error: function (err) {
        console.error('Error:', err);
      }
    });
  });
  $('.deleteAlmuerzoEnMenu').click(function () {
    var almuerzoID = $(this).data('id');

    Swal.fire({
      title: '¿Estás seguro?',
      text: 'Esta acción no se puede deshacer.',
      icon: 'warning',
      confirmButtonColor: '#3085d6',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminarlo'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: '/../../controllers/action/eliminarAlmuerzoMenu.php?idAlmuerzo=' + almuerzoID,
          success: function (response) {
            var result = JSON.parse(response);

            Swal.fire({
              icon: result.estado ? 'success' : 'error',
              title: result.msg,
              showConfirmButton: false,
              timer: 1500
            }).then(function () {
              // Recarga la página después de cerrar SweetAlert
              location.reload();
            });
          },
          error: function (err) {
            console.error('Error:', err);
          }
        });
      }
    });
  });
}
