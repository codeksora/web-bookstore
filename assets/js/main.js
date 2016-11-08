var urlGlobal = "/github/web-bookstore/";
/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};

/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});

    $(".item").eq(0).addClass("active");
    $("ul.nav-tabs li").eq(0).addClass("active");
    $(".tab-pane").eq(0).addClass("active");

    $(".check_out").on("click", function(e) {
        e.preventDefault();

        $.ajax({
    		method: "POST",
    		url: urlGlobal + "finalizarcompra",
    		data: {}
    	})
    	.done(function(response) {
    		switch(response) {
                case "1": location.replace(urlGlobal + "cuenta"); break;
                case "2": alerta("No hay saldo disponible."); break;
                case "3": location.replace(urlGlobal + "login"); break;
            }
    	});
    });

    $(".signup-form form").on("submit", function(e){
    	e.preventDefault();

    	var data_form = $(this).serializeArray();

    	$.ajax({
    		method: "POST",
    		url: urlGlobal + "login/registrar",
    		data: data_form
    	})
    	.done(function(response) {
    		if(response == "true"){
    			alerta("Registrado correctamente");
    			$(".signup-form form")[0].reset();
    		} else {
    			alerta("Este correo ya se encuentra registrado.");
    		}
    	});
    });

    $(".login-form form").on("submit", function(e){
    	e.preventDefault();
    	var data_form = $(this).serializeArray();

    	$.ajax({
    		method: "POST",
    		url: urlGlobal + "login/loguear",
    		data: data_form
    	})
    		.done(function(response) {
    			if(response == "true"){
    				alerta("Accediendo...");
                    setTimeout(function() {
                        location.replace(urlGlobal);
                    }, 2000);

    			} else {
    				alerta("Email y/o contraseña incorrectas");
    			}
    		});
    });

    $(".cart").on("click", function() {
        var $id_carrito = $(this).attr("data-id"),
            $cantidad = $("#cantidad").val();
        $.ajax({
    		method: "POST",
    		url: urlGlobal + "carrito/contador",
    		data: {
                id: $id_carrito,
                cant: $cantidad
            }
    	})
		.done(function() {
			alerta("Libro agregado al carrito");
		});
    });

    $(".cart_info table tbody").load(urlGlobal + "carrito/contador", function(){
        $.ajax({
            method: "POST",
            url: urlGlobal + "carrito/precio_total",
            data: {}
        })
        .done(function(resp){
            $("#precioTotal").html(resp);
        });

        $(".cart_delete a.cart_quantity_delete").on("click", function(e){
    		e.preventDefault();

    		var $id_libro = $(this).attr("data-id");

    		$.ajax({
    			method: "POST",
    			url: urlGlobal + "carrito/eliminar",
    			data: {
                    id: $id_libro
                }
    		}).done(function(resp){
    			if(resp == "true") {
    				$(".cart_info table tbody").html("<tr><td colspan='6' align='center'>No hay libros en el carrito</td></tr>");
    				$("#precioTotal").html("$ 0.00");
    			}
    			else $("#precioTotal").html(resp);
            });

    		$(this).parents("tr").remove();
            alerta("Libro eliminado del carrito");
    	});

        $(".cart_quantity_up").on("click", function(e){
    		e.preventDefault();
    		var input = $(this).parents().children(".cart_quantity_input").val();

    		if((input+1) >= 0) $(this).parents().children(".cart_quantity_input").val(parseInt(input)+1);

    		var cantidad = $(this).parents().children(".cart_quantity_input").val();
    		var id = $(this).parents().children(".cart_quantity_input").attr("data-id");
    		var totalPrice = $(this).parents().children(".cart_quantity_input").parents("tr").find(".cart_total_price");

            $.ajax({
    			method: "POST",
    			url: urlGlobal + "carrito/cantidad_libro",
    			data: {
                    cantidad: cantidad,
                    id: id
                }
    		})
    			.done(function(resp){
    				totalPrice.html(resp);
    			});

                $.ajax({
                    method: "POST",
                    url: urlGlobal + "carrito/precio_total",
                    data: {}
                })
                .done(function(resp){
                    $("#precioTotal").html(resp);
                });
    	});

        $(".cart_quantity_down").on("click", function(e){
    		e.preventDefault();
    		var input = $(this).parents().children(".cart_quantity_input").val();

    		if((input-1) >= 0) $(this).parents().children(".cart_quantity_input").val(parseInt(input)-1);

    		var cantidad = $(this).parents().children(".cart_quantity_input").val();
    		var id = $(this).parents().children(".cart_quantity_input").attr("data-id");
    		var totalPrice = $(this).parents().children(".cart_quantity_input").parents("tr").find(".cart_total_price");

            $.ajax({
    			method: "POST",
    			url: urlGlobal + "carrito/cantidad_libro",
    			data: {
                    cantidad: cantidad,
                    id: id
                }
    		})
    			.done(function(resp){
    				totalPrice.html(resp);
    			});

                $.ajax({
                    method: "POST",
                    url: urlGlobal + "carrito/precio_total",
                    data: {}
                })
                .done(function(resp){
                    $("#precioTotal").html(resp);
                });
    	});
    });
});

var mensaje;

function alerta(mensaje) {
    $("#alerta p").text(mensaje);
    $("#alerta").fadeIn();
    setTimeout(function() {
        $("#alerta").fadeOut()
    }, 3000);
}
