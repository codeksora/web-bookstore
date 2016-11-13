var urlGlobal = "/github/web-bookstore/";

$(document).ready(function() {
    $("#login-admin").on("submit", function(e) {
        e.preventDefault();

        var data_form = $(this).serializeArray();

    	$.ajax({
    		method: "POST",
    		url: urlGlobal + "login/loguear",
    		data: data_form
    	})
    		.done(function(response) {
    			if(response == "admintrue"){
    				alerta("Accediendo...");
                    setTimeout(function() {
                        location.replace(urlGlobal + "admin/dashboard");
                    }, 2000);

    			} else {
    				alerta("Email y/o contraseña incorrectas");
    			}
    		});
    });

    $("#categoria").on("submit", function(e) {
        e.preventDefault();
        var data_form = $(this).serializeArray();

        $.ajax({
    		method: "POST",
    		url: urlGlobal + "admin/dashboard/1",
    		data: data_form
    	})
    		.done(function(resp) {
                alerta("Categoría agregado");
    				setTimeout(function() {
                        location.reload();
                    }, 2000);
    		});
    });

    $("#autor").on("submit", function(e) {
        e.preventDefault();
        var data_form = $(this).serializeArray();

        $.ajax({
    		method: "POST",
    		url: urlGlobal + "admin/dashboard/2",
    		data: data_form
    	})
    		.done(function(resp) {
                alerta("Autor agregado");
    				setTimeout(function() {
                        location.reload();
                    }, 2000);
    		});
    });

    $("#libro").on("submit", function(e) {
        e.preventDefault();

        $.ajax({
    		method: "POST",
    		url: urlGlobal + "admin/dashboard/3",
    		data: new FormData(this),
            contentType: false,
            processData: false
    	})
    		.done(function(resp) {
                alerta("Libro agregado");
				setTimeout(function() {
                    location.reload();
                }, 2000);
    		});
    });
});

var mensaje;

var alerta = function(mensaje) {
    $("#alerta p").text(mensaje);
    $("#alerta").fadeIn();
    setTimeout(function() {
        $("#alerta").fadeOut()
    }, 3000);
}
