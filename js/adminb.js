$(function(){
    $("#btn-enviar").click(function(){
 	var url = "../controller/indiv_controller.php"; // El script a dónde se realizará la petición.
	    $.ajax({
	        type: "POST",
	        url: url,
	        data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
	        beforeSend: function(){
	        	$('.paso2').hide();
	        	$('.paso1').show();
	        },

	    	success: function(data){
	        	$('.paso1').hide();				
	    		$('.paso2').show();
	    		$('.retorno').html(data);
	    		$('#formulario').each(function(){this.reset();});
	    	}
	    });
    });
});
$(function(){
	$('input[id=todos]').change(function(){
		$("input:checkbox").prop('checked', $(this).prop("checked"));
	});
});
$(function(){
    $("#btn-enviar-ov").click(function(){
 	var url = "../controller/ov_controller.php"; // El script a dónde se realizará la petición.
	    $.ajax({
	        type: "POST",
	        url: url,
	        data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
	        beforeSend: function(){
	        	$('.paso2').hide();
	        	$('.paso1').show();
	        },

	    	success: function(data){
	        	$('.paso1').hide();		
	    		$('.paso2').show();
	    		$('.retorno').html(data);
	    	}
	    });
    });
});
$(function(){
    $("#btn-enviar-rsv").click(function(){
 	var url = "../controller/rsv_controller.php"; // El script a dónde se realizará la petición.
	    $.ajax({
	        type: "POST",
	        url: url,
	        data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
	        beforeSend: function(){
	        	$('.paso2').hide();
	        	$('.paso1').show();
	        },

	    	success: function(data){
	        	$('.paso1').hide();				
	    		$('.paso2').show();
	    		$('.retorno').html(data);
	    	}
	    });
    });
});
$(function(){
    $("#btn-enviar-disc").click(function(){
 	var url = "../controller/disc_controller.php"; // El script a dónde se realizará la petición.
	    $.ajax({
	        type: "POST",
	        url: url,
	        data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
	        beforeSend: function(){
	        	$('.paso2').hide();
	        	$('.paso1').show();
	        },

	    	success: function(data){
	        	$('.paso1').hide();				
	    		$('.paso2').show();
	    		$('.retorno').html(data);
	    		$('#formulario').each(function(){this.reset();});
	    	}
	    });
    });
});