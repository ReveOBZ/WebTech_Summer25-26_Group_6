function validateForm() {
    var password = document.getElementById("password").value;
    var confirm = document.getElementById("confirmpassword").value;
    var email = document.getElementById("Email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

    if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false;
    }
    else
    {
      document.getElementById("errormail").innerHTML="";
    }

    if (password.length<8 )
    {
      document.getElementById("errorpass").innerHTML="Password must contain 8 characters";
      return false;
    }
    else
    {
      document.getElementById("errorpass").innerHTML="";
    }

    if(confirm != password)
    {
        document.getElementById("errorconfirm").innerHTML="Passwords do not match";
        return false;
    }
    else
    {
        document.getElementById("errorconfirm").innerHTML="";
    }

    return true;
}