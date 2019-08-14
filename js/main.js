$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,


          onFinishing: function (event, currentIndex)
        {
            var form = $("#frmaccion");
            form.submit();  
        },
        onFinished: function (event, currentIndex)
        {
            var form = $(this);
            form.submit();  

        },

        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.wizard > .steps ul').addClass('step-2');
            } else {
                $('.wizard > .steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
                $('.wizard > .steps ul').addClass('step-3');
            } else {
                $('.wizard > .steps ul').removeClass('step-3');
            }
            if ( newIndex === 3 ) {
                $('.wizard > .steps ul').addClass('step-4');
            } else {
                $('.wizard > .steps ul').removeClass('step-4');
            }
            if ( newIndex === 4 ) {
                $('.wizard > .steps ul').addClass('step-5');
            } else {
                $('.wizard > .steps ul').removeClass('step-5');
            }
            return true; 
        },
        labels: {
            finish: "Enviar Solicitud",
            next: "Continuar",
            previous: "Atras"
        },

    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Date Picker
    var dp1 = $('#dp1').datepicker().data('datepicker');
    dp1.selectDate(new Date());
})
