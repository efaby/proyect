jQuery.noConflict();
var doc = $(document);
doc.ready(loadEvents);

$.validator.addMethod( 
    "regex", 
    function(value, element, regexp) { 
        return this.optional(element) || regexp.test(value); 
    }, 
    "Please check your input." 
    ); 

function loadEvents(){	
	
    setValidations(); 
    setValidationsEdit();
}

function setValidations(){
    $("#userSearch").validate({
        event: "blur", 
        rules: {
            'userSearch[name]': { 
                regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
            }
        },
        messages: {
            'userSearch[name]': { 
                regex: 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
            }        		
        },
        debug: true,
        errorElement: "div",
        errorLabelContainer: $("div.error"),
        submitHandler: function(form){
            form.submit();
        }
    });
}

function setValidationsEdit(){
    $("#userEdit").validate({
        event: "blur", 
        rules: {
            'userEdit[name]': {        		
                regex: /^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/ 
            },
            'userEdit[canonical]': {        		
                regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
            },
            'userEdit[lastname]': {        		
                regex: /^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/
            },
            'userEdit[email][E-mail]': {        		
                email: true
            },
            'userEdit[email][Repita_E-mail]': {        		
                email: true,
                equalTo: "#userEdit_email_E-mail"
            },
            'userEdit[plainPassword][password]': {        		
                minlength: 6
            },
            'userEdit[plainPassword][repeat_password]': {        		
                minlength: 6,
                equalTo: "#userEdit_plainPassword_password"
            },
            'userEdit[idDocument]': {        		
                regex: /^(?:\+)?\d{10}$/
            },
            'userEdit[organization]': {        		
            	required:true  
            },
            'userEdit[office]': {        		
            	required:true  
            },
          
        },
        messages: {
            'userEdit[canonical]': { 
                regex: 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
            } ,
            'userEdit[name]': { 
                regex: 'Por favor ingrese solo letras (a-z).' 
            },
            'userEdit[lastname]': { 
                regex: 'Por favor ingrese solo letras (a-z).' 
            } ,
            'userEdit[email][E-mail]': {        		
                email: 'Por favor ingrese un mail válido.'
            },
            'userEdit[email][Repita_E-mail]': {        		
                email: 'Por favor ingrese un mail válido.',
                equalTo: 'El E-mail no coincide, por favor vuelva a ingresar.'
            },
            'userEdit[plainPassword][password]': {        		
                minlength: 'Por favor ingrese un mínimo de 6 caracteres'
            },
            'userEdit[plainPassword][repeat_password]': {        		
                minlength: 'Por favor ingrese un mínimo de 6 caracteres',
                equalTo: "La contraseña no coincide, por favor vuelva a ingresar."
            },
            'userEdit[idDocument]': { 
                regex: 'Por favor ingrese 10 números.' 
            },
            'userEdit[organization]': {
            	'required':"Seleccione una Casa Comercial."     
            }, 
            'userEdit[office]': {
            	'required':"Seleccione una Sucursal."     
            }, 
            
        },
        debug: true,
        errorElement: "div",
        submitHandler: function(form){
            form.submit();
        }
    });
}