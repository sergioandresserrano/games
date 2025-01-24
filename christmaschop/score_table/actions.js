$(document).ready(function(){
    $(window).scrollTop(0);
});
$(window).load(function(){
	$(window).scrollTop(0);
	
	
	
	$.easing.minorelastic = function (x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*2;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(10*Math.PI)/p ) + c + b;
	}
	

	
	<!--NAVIGATION---------------------------------------------------------------------------------------------->
	
	
	
	$(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.arrow_up').fadeIn();
        } else {
            $('.arrow_up').fadeOut();
        }
    });

    $( ".footer_arrow" ).click(
		function(){
			$('body').scrollTo( '0',1000, {easing:'easeOutQuad'} );
		}
	)
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	<!--SIGN UP FORM---------------------------------------------------------------------------------------------->
	
	
	$("#borrar").on('click', function(){
		$("#nombre").val('')
		$("#email").val('')
		$("#asunto").val('')
		$("#mensaje").val('')
	})
	
	$("#enviar").on('click', function(){
		
		if($("#nombre").val()=="" || $("#email").val()=="" || $("#asunto").val()=="" || $("#mensaje").val()==""){
			
			alert("* No pueden existir campos vacios!")
		
		}else{
			
			$.post("js/mail/mail.php",{"nombre":$("#nombre").val(),"email":$("#email").val(),"asunto":$("#asunto").val(),"mensaje":$("#mensaje").val()}
			,function(data0, textStatus){
				
				if(data0==1){
					
					$("#nombre").val('')
					$("#email").val('')
					$("#asunto").val('')
					$("#mensaje").val('')
					
					alert("* Mensaje Enviado!")	
					
				}else{
					alert("Existe un error en nuestros servidores. Por favor intenta mas tarde. -Gracias")	
				}
			})

		
		}

		
	})


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	







});





