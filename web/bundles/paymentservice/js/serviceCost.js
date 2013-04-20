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
    $("#serviceCostSearch").validate({
        event: "blur", 
        rules: {
            'serviceCostSearch[name]': { 
                regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
            }
        },
        messages: {
            'serviceCostSearch[name]': { 
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
    $("#serviceCostEdit").validate({
        event: "blur", 
        rules: {
            'serviceCostEdit[name]': {        		
                regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
            },
            'serviceCostEdit[description]': {        		
                regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/ 
            },
            'serviceCostEdit[costValue]': {        		
                regex: /^(-)?\d+(\.\d\d)?$/
            },            
        },
        messages: {
            'serviceCostEdit[description]': { 
                regex: 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
            } ,
            'serviceCostEdit[name]': { 
                regex: 'Por favor ingrese letras (a-z), números (0-9) ó (-),(_),(@)' 
            },
            'serviceCostEdit[costValue]': { 
                regex: 'Por favor ingrese una cantidad valida.' 
            } ,
        },
        debug: true,
        errorElement: "div",
        submitHandler: function(form){
            form.submit();
        }
    });
}

$(document).ready(function(){
	$("#serviceCostEdit_costValue").keyup(function(){
	if ($(this).val() != '')
	$(this).val($(this).attr('value').replace(/[^0-9'\.]/g, ""));
	});
});