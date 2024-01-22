

function validate(){

    var Aname = document.getElementById("adminName").value;
    var Apassword = document.getElementById("adminPassword").value;

    if(Aname == "admin" && Apassword == "admin123"){
        alert("Login Successfull !");
        window.location.assign("addfood.php");
    }
    else{
        alert("Login Failed !!!");
    }

}