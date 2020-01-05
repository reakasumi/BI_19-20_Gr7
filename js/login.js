function checkMatching2(form){
	var user=form.username.value;
	var pass=form.password.value;


	if(user!=localStorage.getItem("user_name")||pass!=localStorage.getItem("pass_word")){
         alert("Check username/password or sign up");
	}
	else{
		 alert("Welcome"+user);
		  window.location.href = "index.html";
	    }

}