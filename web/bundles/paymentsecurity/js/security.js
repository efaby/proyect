jQuery.noConflict();
$.validator.addMethod( 
	       "regex", 
	        function(value, element, regexp) { 
	        return this.optional(element) || regexp.test(value); 
	        }, 
	        "Please check your input." 
	        ); 
function validate() {
		$(document).ready(function(){
        $("#mensaje").hide();
        $("#fos_user_form").validate({
            event: "blur",
            rules: {
                '_username': {
                    required:true,
                    regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
                },
                '_password': {
                    required:true,
                    regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
                }
            },
        messages: {
            '_username': {
                'required':"El Nombre de usuario es requerido.",
                'regex': 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
                
            },
            '_password': {
                'required':"La contraseña es requerida.",
                'regex': 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
            }
        },
        debug: true,
        errorElement: "div",
        submitHandler: function(form){                    
            form.submit();
        }
    });
});
}

function validateUsername() {
    $(document).ready(function(){
        $("#fos_user_form").validate({
            event: "blur",
            rules: {
            	'username': { 
            		regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
            			}
            		},
            messages: {
            	'username': { 
            		regex: 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
            			}        		
            		},
            debug: true,
            errorElement: "div",
        submitHandler: function(form){                    
            form.submit();
        }
    });
});
}

function validatePassword() {
    $(document).ready(function(){
        $("#fos_user_form").validate({
            event: "blur",
            rules: {
            	'fos_user_resetting_form[new][first]': {        		
				minlength: 6
			},
	'fos_user_resetting_form[new][second]': {        		
		minlength: 6,
		equalTo: "#fos_user_resetting_form_new_first"
			}
            		},
            messages: {
            	'fos_user_resetting_form[new][first]': {        		
           		 minlength: 'Por favor ingrese un mínimo de 6 caracteres'
           			},
           	 'fos_user_resetting_form[new][second]': {        		
           		minlength: 'Por favor ingrese un mínimo de 6 caracteres',
           		equalTo: "La contraseña no coincide, por favor vuelva a ingresar."
           			}      		
            		},
            debug: true,
            errorElement: "div",
        submitHandler: function(form){                    
            form.submit();
        }
    });
});
}