
function post(url,data,successCallback,failCallback)//QUITAR DE AQUÍ
{
    console.log(url);
    $.ajax({
        'url':url,
        type:'POST',
        'data':data,
        cache:false,
        contentType:false,
        processData:false,       
        //dataType:"json"
        success:successCallback, 
        error: failCallback
    });
}

<<<<<<< HEAD
//FUNCION PARA ENVIAR CORREO AL USUARIO
=======
>>>>>>> 0f908f587ca8774406807e9d6b98f4f55ba0dd8c
function contactoEnviarMensajeBtn_click()
{
    console.log("enviando mensaje");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('apellido',   $("input[name='apellido']").val() );
    formData.append('correo',   $("input[name='correo']").val() );
    formData.append('opcion',  $("select[name='opciones']").val() );
    formData.append('mensaje',   $("textarea[name='mensaje']").val() );

	post('send-form.php',formData,function(data){
        swal({
            title:"¡ LISTO !",
            text:"¡ Gracias por tu mensaje, nos comunicaremos con usted lo antes posible",
            type: "success",
            confirmButtonColor: '#55b7e6',
        });
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}

<<<<<<< HEAD

// FUNCION PARA ENVIAR CORREO AL ADMINISTRADOR DE LA PAGINA
function contactoEnviarDatos(){
    console.log("enviando datos");
    var phone = $("input[name='telefono']");
=======
function contactoEnviarDatos(){
    console.log("enviando datos");
    var phone = $("input[name='tel']");
>>>>>>> 0f908f587ca8774406807e9d6b98f4f55ba0dd8c
    var tel =  "";
    if (phone.val() === "") {
        tel = "No hay";
    }
    else{
        tel = phone.val();
    }
    console.log(tel);
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
<<<<<<< HEAD
    formData.append('apellido',   $("input[name='apellido']").val() );
    formData.append('correo',   $("input[name='correo']").val() );
    formData.append('telefono', tel );
    formData.append('opcion',   $("select[name='opciones']").val() );
    formData.append('mensaje',   $("textarea[name='mensaje']").val() );
=======
    formData.append('ocupacion',   $("input[name='ocu']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('telefono', tel );
    formData.append('asunto',   $("select[name='asun']").val() );
    formData.append('mensaje',   $("textarea[name='men']").val() );
>>>>>>> 0f908f587ca8774406807e9d6b98f4f55ba0dd8c

	post('send-data.php',formData,function(data){
		console.log("Exito al enviar datos");
		console.log(data);
	},function(data){
		console.log("Error al enviar datos");
		console.log(data);
    });	
    return false;
}