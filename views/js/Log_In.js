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
  
  var email = $.trim($("#Email").val());
  var password = $.trim($("#Contraseña").val());

  if (email.length === 0 || password.length === 0) {
      Swal.fire({
          type: 'warning',
          title: 'Debe ingresar un Email y/o Contraseña',
      });
      e.preventDefault();
      return false;
 } 
  //else {
  //     $.ajax({
  //         url: "..\controllers\action\login.php",
  //         type: "POST",
  //         datatype: "json",
  //         data: { Email: email, Contraseña: password },
  //         crossDomain: true,
  //         success: function (data) {
  //             if (data === "null") {
  //                 Swal.fire({
  //                     type: 'error',
  //                     title: 'Email y/o Contraseña incorrecta',
  //                 });
  //             }
  //         }
  //     });
  // }
});