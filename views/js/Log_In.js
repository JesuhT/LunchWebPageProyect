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
  var email = $.trim($("#Email").val());
  var password = $.trim($("#Contraseña").val());

  if (email.length == "" || password == "") {
    Swal.fire({
      type: 'warning',
      title: 'Debe ingresar un Email y/o Contraseña',
    });
    return false;
  } else {
    $.ajax({
      url: "../../controllers/action/login.php",
      type: "POST",
      datatype: "json",
      data: { Email: email, Contraseña: password },
      crossDomain: true, 
      success: function (data) {
        console.log(data);    
        // if (data.error) {
        //   Swal.fire({
        //     type: 'error',
        //     title: data.error,
        //   });
        // }
        
        if (data == "null") {
          console.log(data);
          Swal.fire({
            type: 'error',
            title: 'Email y/o Contraseña incorrecta',
          });
        }
         else {
          console.log(data);
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