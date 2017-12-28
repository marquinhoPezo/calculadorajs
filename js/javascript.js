
window.onload = function(){
	pantalla = document.getElementById("textopantalla");

	x="0";xi=1;coma=0;

}

function numero(xx){
	if(x=="0" || xi==1){
		pantalla.innerHTML = xx;
		x=xx;
		if(xx=='.'){
			pantalla.innerHTML = "0.";
			x=xx;
			coma=1;
		}
	}
	else{
		if(xx=="." && coma==0){
			pantalla.innerHTML+=xx;
			x+=xx;
			coma=1;
		}else if(xx=="." && coma==1){}
			else{
				pantalla.innerHTML+=xx;
				x+=xx;
			}
		}

	xi=0;
	document.getElementById("textopantalla").value = x;
	
}