$(document).ready(function(){

	// MOSTRANDO Y OCULTANDO MENU
	$('#button-menu').click(function(){
		if($('#button-menu').attr('class') == 'fa fa-bars' ){

			$('.navegacion').css({'width':'100%', 'background':'rgba(0,0,0,.5)'}); // Mostramos al fondo transparente
			$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close'); // Agregamos el icono X
			$('.navegacion .menu').css({'left':'0px'}); // Mostramos el menu

		} else{

			$('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
			$('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
			$('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
			$('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

		}
	});

	// MOSTRANDO SUBMENU
	$('.navegacion .menu > .item-submenu a').click(function(){
		
		var positionMenu = $(this).parent().attr('menu'); // Buscamos el valor del atributo menu y lo guardamos en una variable
		console.log(positionMenu); 

		$('.item-submenu[menu='+positionMenu+'] .submenu').css({'left':'0px'}); // Mostramos El submenu correspondiente

	});

	// OCULTANDO SUBMENU
	$('.navegacion .submenu li.go-back').click(function(){

		$(this).parent().css({'left':'-320px'}); // Ocultamos el submenu

	});

});
/*
$(buscar());
function buscar(consulta){
$.ajaz({
    url:'../Formularios/Empleados1.php',
    type:'POST',
    dataType:'php',
    data:{consulta:consulta},
})
.done(function(){
    $("#datos").php(respuesta);
})
.fail(function(){
    console.log("erro");
})

}
$(document).on('keyup','caja',function(){
var valor=$(this).val();
if(valor!=""){
    buscar(valor);
}esle{
buscar();
}

});*/



/*$(document).ready(function(){
('.menu li:has(ul)').Click(function(e){
e.preventDefault();

if($(this).hasClass('activado')){
  $(this).removeClass('activado');
$(this).children('ul').slideUp();
}else{
   $('.menu li ul').slideUp();
    $('.menu li').removeClass('activado');
   $(this).addClass('activado');
    $(this).children('ul').slideDown();

}


});

});*/



/*$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
 
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o Contraseña',
      });
      return false; 
    }else{
        $.ajax({
           url:"../index.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                  title:'Usuario y/o Contraseña incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Bienvenido!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingrese'
                   }).this((result) => { 
                       if(result.value){
                window.location.href = "../LOG/Menu_Admin";
                }
                   })
                   
               }
           }    
        });
    }     
});*/