(function () {
    'use strict';
    window.addEventListener('load', function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

 

  const validatePass = (passwork) => {
    return String(passwork)
      .toLowerCase()
      .match(
        /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/
      )
  };
  const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
function Login (e){
  e.preventDefault();
  const isCaptchaChecked = (grecaptcha && grecaptcha.getResponse().length !== 0);
console.log(isCaptchaChecked);
  if(isCaptchaChecked == false){
    var x = document.getElementById("snackbar");
    	x.className = "show";
    	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      return ;
  }else{
    // alert('Oke')
    if(!validateEmail(document.getElementById('email').value)){
      alert("Sai định dạng email"); // chay di
    }
    if(!validatePass(document.getElementById('pass').value)){
      alert("Sai định dạng pass"); // chay di
    }
    
    /// cop cho cai id coib id cua from a from1  ??? 
    window.location.href = "http://localhost:5501/contact.html";
  //  return; 
   

  }
 

}
  
       