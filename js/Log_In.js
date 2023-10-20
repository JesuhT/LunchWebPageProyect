const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const main = document.getElementById('main');

signUpButton.addEventListener('click', () => {
  main.classList.add("right-panel-active");
});
signInButton.addEventListener('click', () => {
  main.classList.remove("right-panel-active");
});
/**Jquery para formularios */
$('#formLogin').submit(function (e) {
  e.preventDefault();
  var Email = $.trim($("#Email").val());
  var Contraseña = $.trim($("#Contraseña").val());

  if (Email.length == "" || Contraseña == "") {
    Swal.fire({
      type: 'warning',
      title: 'Debe ingresar un Email y/o Contraseña',
    });
    return false;
  } else {
    $.ajax({
      url: "controllers/action/login.php",
      type: "POST",
      datatype: "json",
      data: { Email: Email, Contraseña: Contraseña },
      success: function (data) {
        if (data == "null") {
          Swal.fire({
            type: 'error',
            title: 'Email y/o Contraseña incorrecta',
          });
        } else {
          Swal.fire({
            type: 'success',
            title: '¡Conexión exitosa!',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ingresar'
          }).then((result) => {
            if (result.value) {
              window.location.href = "menu.php";
            }
          })

        }
      }
    });
  }
});