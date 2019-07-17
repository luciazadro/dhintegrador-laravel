window.onload=function(){
    // let registerForm = document.forms[0]
    let formulario = document.getElementById('formulario');
    
    formulario.elements.name.focus();
    console.log(formulario);
    console.log(formulario.elements.name.value);
    
    formulario.onsubmit = function(evento) {
      if (!validateFormulario()) {
        evento.preventDefault()
      }else{
       formulario.submit()
      }
    }
  
    function validateFormulario() {
      let {name, lastname, email, password, repassword} = formulario.elements

      if (!validateName(name)) return false; 
      if (!validateLastname(lastname)) return false;
      if (!validateEmail(email)) return false;
      if (!validatePassword(password)) return false;
      if (!validateRepassword(password, repassword)) return false;

      return true;

      function validateName(name) {
        let = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/
        let errorName = document.getElementById('errorNombre');
        if (username.value.length < 12){
          errorName.innerHTML = "Nombre no puede tener menos de 12 digitos";
          errorName.classList.add('alert-danger');
          name.classList.add('is-invalid');
          return false;
        } else{
          errorUserName.innerHTML = "";
          errorUserName.classList.remove('alert-danger');
          name.classList.remove('is-invalid');
          name.classList.add('is-valid');
          formulario.elements.lastname.focus();
          return true;
        }
      }
        function validateLastname(lastname) {
          let = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/
          let errorLastname = document.getElementById('errorApellido');
          if (username.value.length < 12){
            errorLastname.innerHTML = "Nombre no puede tener menos de 12 digitos";
            errorLastname.classList.add('alert-danger');
            lastname.classList.add('is-invalid');
            return false;
          } else{
            errorLastname.innerHTML = "";
            errorLastname.classList.remove('alert-danger');
            lastname.classList.remove('is-invalid');
            lastname.classList.add('is-valid');
            formulario.elements.email.focus();
            return true;
          }
        }
      function validateEmail(email) {
        let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        let error = document.getElementById('errorEmail');
  
  
        if (!re.test(email.value)){ 
          
          email.classList.add('is-invalid'); 
          console.log(errorEmail);
          error.innerHTML= "Debe colocar un email válido";
          error.classList.add('alert-danger');
          
        return false
      }else{
        error.innerHTML= "";
        error.classList.remove('alert-danger');
        email.classList.remove('is-invalid'); 
        email.classList.add('is-valid');
        formulario.elements.password.focus()
        return true;
      }
  
      }
    
      function validatePassword(password) {
        let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
        let errorPassword = document.getElementById('errorPassword');
  
        if (!re.test(password.value)) {
          errorPassword.innerHTML = "Debe especificar una contraseña válida";
          errorPassword.classList.add('alert-danger');
          password.classList.add('is-invalid');
          return false;  
  
        }else{
          errorPassword.innerHTML = "";
          errorPassword.classList.remove('alert-danger');
          password.classList.remove('is-invalid');
          password.classList.add('is-valid');
          formulario.elements.repassword.focus();
          return true;
        }
      }
    
      function validateRepassword(password,repassword){
        console.log(password.value);
        console.log(repassword.value);
        if (password.value != repassword.value) {
          errorRepassword.innerHTML = "Las conraseñas no coinciden";
          errorrepassword .classList.add('alert-danger');
          repassword.classList.add('is-invalid');
          return false;  
  
        }else{
          errorRepassword .innerHTML = "";
          errorrepasswordRepeat.classList.remove('alert-danger');
          repassword.classList.remove('is-invalid');
          repassword.classList.add('is-valid');
          return true;
        }   
      }
    } 
}   
  
  