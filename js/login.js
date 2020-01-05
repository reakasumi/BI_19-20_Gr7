function checkMatching2(form){
	var user=form.username.value;
	var pass=form.password.value;
	var localUser=localStorage.getItem("user_name");
	var localPass=localStorage.getItem("pass_word");
	var patt = new RegExp(localUser);


	if(patt.exec(user)==null||pass!=localPass){
         alert("Check username/password or sign up");
	}
	else{
		 alert("Welcome"+user);
		  window.location.href = "index.html";
	    }

}