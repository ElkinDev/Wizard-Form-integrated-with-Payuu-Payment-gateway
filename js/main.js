$(function(){
    $(document).ready(function () {
        $('#loadingView').css('display','none')
        
    })
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,


          onFinishing: function (event, currentIndex)
        {
            $('#loadingView').css('display','flex');

            var form = $("#frmaccion");
            
                


            var anovigente = $('#anovigente').val();
            var nombrecan = $('#nombrecan').val();
            var apellidocan = $('#apellidocan').val();
            var lugarcan = $('#lugarcan').val();
            var fechacan = $('#fechacan').val();
            var cursocan = $('#cursocan').val();
            var edadcan = $('#edadcan').val();
            var edadproximacan = $('#edadproximacan').val();
            var nombrepadre = $('#nombrepadre').val();
            var apellidopadre = $('#apellidopadre').val();
            var profesionpadre = $('#profesionpadre').val();
            var ccpadre = $('#ccpadre').val();
            var dirpadre = $('#dirpadre').val();
            var telpadre = $('#telpadre').val();
            var direofipadre = $('#direofipadre').val();
            var teleofipadre = $('#teleofipadre').val();
            var nombremadre = $('#nombremadre').val();
            var apellidomadre = $('#apellidomadre').val();
            var profesionmadre = $('#profesionmadre').val();
            var ccmadre = $('#ccmadre').val();
            var dirmadre = $('#dirmadre').val();
            var telmadre = $('#telmadre').val();
            var direofimadre = $('#direofimadre').val();
            var teleofimadre = $('#teleofimadre').val();
            var nombrerefeu = $('#nombrerefeu').val();
            var apellidorefeu = $('#apellidorefeu').val();
            var profesionrefeu = $('#profesionrefeu').val();
            var direrefeu = $('#direrefeu').val();
            var teleofirefeu = $('#teleofirefeu').val();
            var telerefeu = $('#telerefeu').val();
            var vinculorefeu = $('#vinculorefeu').val();
            var nombrerefed = $('#nombrerefed').val();
            var apellidorefed = $('#apellidorefed').val();
            var profesionrefed = $('#profesionrefed').val();
            var direrefed = $('#direrefed').val();
            var teleofirefed = $('#teleofirefed').val();
            var telerefed = $('#telerefed').val();
            var vinculorefed = $('#vinculorefed').val();
            var nombreherma = $('#nombreherma').val();
            var apellidoherma = $('#apellidoherma').val();
            var edadherma = $('#edadherma').val();
            var colegioherma = $('#colegioherma').val();
            var nombrehermad = $('#nombrehermad').val();
            var apellidohermad = $('#apellidohermad').val();
            var edadhermad = $('#edadhermad').val();
            var colegiohermad = $('#colegiohermad').val();
            var nombrehermat = $('#nombrehermat').val();
            var apellidohermat = $('#apellidohermat').val();
            var edadhermat = $('#edadhermat').val();
            var colegiohermat = $('#colegiohermat').val();
            var nombrehermac = $('#nombrehermac').val();
            var apellidohermac = $('#apellidohermac').val();
            var edadhermac = $('#edadhermac').val();
            var colegiohermac = $('#colegiohermac').val();
            var padecimientocan = $('#padecimientocan').val();
            var terminos = $('#terminos').val();
            var legal = $('#legal').prop('checked');
            var fechasolicita = $('#fechasolicita').val();
            var consecutivoFor = $('#consecutivoFor').val();
            var emailCan = $('#buyerEmail').val();
            
            var refCompra  = $('#referenceCode').val();
    
            console.log('checking out the telerefed´s value',telerefed)            
             
             var request = $.ajax({
                type: "POST",
                url: "../datosRep.php",
                dataType: "html",
                data: {anovigenteD:anovigente,nombrecanD:nombrecan,apellidocanD:apellidocan,lugarcanD:lugarcan,fechacanD:fechacan,cursocanD:cursocan,edadcanD:edadcan,edadproximacanD:edadproximacan,nombrepadreD:nombrepadre,apellidopadreD:apellidopadre,profesionpadreD:profesionpadre,ccpadreD:ccpadre,dirpadreD:dirpadre,telpadreD:telpadre,direofipadreD:direofipadre,teleofipadreD:teleofipadre,nombremadreD:nombremadre,apellidomadreD:apellidomadre,profesionmadreD:profesionmadre,ccmadreD:ccmadre,dirmadreD:dirmadre,telmadreD:telmadre,direofimadreD:direofimadre,teleofimadreD:teleofimadre,nombrerefeuD:nombrerefeu,apellidorefeuD:apellidorefeu,profesionrefeuD:profesionrefeu,direrefeuD:direrefeu,teleofirefeuD:teleofirefeu,telerefeuD:telerefeu,vinculorefeuD:vinculorefeu,nombrerefedD:nombrerefed,apellidorefedD:apellidorefed,profesionrefedD:profesionrefed,direrefedD:direrefed,teleofirefedD:teleofirefed,telerefedD:telerefed,vinculorefedD:vinculorefed,nombrehermaD:nombreherma,apellidohermaD:apellidoherma,edadhermaD:edadherma,colegiohermaD:colegioherma,nombrehermadD:nombrehermad,apellidohermadD:apellidohermad,edadhermadD:edadhermad,colegiohermadD:colegiohermad,nombrehermatD:nombrehermat,apellidohermatD:apellidohermat,edadhermatD:edadhermat,colegiohermatD:colegiohermat,nombrehermacD:nombrehermac,apellidohermacD:apellidohermac,edadhermacD:edadhermac,colegiohermacD:colegiohermac,padecimientocanD:padecimientocan,terminosD:terminos,fechasolicitaD:fechasolicita,consecutivoForD:consecutivoFor,emailCanD:emailCan, RefeC:refCompra },
            success:function(data){
                $(".actions li a").addClass('d-none')
                 $('#loadingView').css('display','none');
                 $('#last-Step-submitform').removeClass('d-block');
                 $('#last-Step-submitform').addClass('d-none');
                 $('#success-message').removeClass('d-none');
                 $('#success-message').removeClass('last-Step-submitform');
                 console.log('Let´s show de outcome data',data)

                 form.submit();

                
                },
            error:function(data){
                alert ('Error ');
                }
            });     
        },
        onFinished: function (event, currentIndex)
        {
            var form = $(this);


        },

        onStepChanging: function (event, currentIndex, newIndex) {
           $('html, body').animate({
                scrollTop: $(".wrapper").offset().top+100
                }, 800);

            var validateAnovigente;
            var validatenombrecan;
            var validateapellidocan;
            var validatelugarcan;
            var validatefechacan;
            var validatecursocan;
            var validateedadcan;
            var validateedadproximacan;
            var validatenombrepadre;
                var validateapellidopadre;
                var validateprofesionpadre;
                var validateccpadre;
                var validatedirpadre;
                var validatetelpadre;
                var validatedireofipadre;
                var validateteleofipadre;
                    var validatenombremadre;
                    var validateapellidomadre;
                    var validateprofesionmadre;
                    var validateccmadre;
                    var validatedirmadre;
                    var validatetelmadre;
                    var validatedireofimadre;
                    var validateteleofimadre;
                        var validatenombrerefeu;
                        var validateapellidorefeu;
                        var validateprofesionrefeu;
                        var validatedirerefeu;
                        var validateteleofirefeu;
                        var validatetelerefeu;
                        var validatevinculorefeu;
            var Candidatedata=[];



        
            if (currentIndex > newIndex)
            {
                return true;
            }
     
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                console.log('when does the fuction is shooted?')
               
}



    
            
             
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
            if ( newIndex === 5 ) {
                $('.wizard > .steps ul').addClass('step-6');
            } else {
                $('.wizard > .steps ul').removeClass('step-6');
            }
            if ( newIndex === 6 ) {
                $('.wizard > .steps ul').addClass('step-7');
            } else {
                $('.wizard > .steps ul').removeClass('step-7');
            }
            if ( newIndex === 7 ) {
                $('.wizard > .steps ul').addClass('step-8');
            } else {
                $('.wizard > .steps ul').removeClass('step-8');
            }
            if ( newIndex === 8 ) {
                $('.wizard > .steps ul').addClass('step-9');
            } else {
                $('.wizard > .steps ul').removeClass('step-9');
            }

            if ( newIndex === 9 ) {
                $('.wizard > .steps ul').addClass('step-9');
            } else {
                $('.wizard > .steps ul').removeClass('step-9');
            }

            

            var validatebuyerEmail=validatefield('email',$('#buyerEmail').val(),'buyerEmail');





            var terminos = $('#terminos').val();
            var fechasolicita = $('#fechasolicita').val();
            var consecutivoFor = $('#consecutivoFor').val();
            var emailCan = $('#buyerEmail').val();
            
            var refCompra  = $('#referenceCode').val();



            switch (newIndex) {
                case 1:
         
            
        var numy=0;
        validateAnovigente=validatefield('normal',$('#anovigente').val(),'anovigente');
        validatenombrecan=validatefield('normal',$('#nombrecan').val(),'nombrecan');
        validateapellidocan=validatefield('normal',$('#apellidocan').val(),'apellidocan');
        validatelugarcan=validatefield('normal',$('#lugarcan').val(),'lugarcan');
        validatefechacan=validatefield('normal',$('#fechacan').val(),'fechacan');
        validatecursocan=validatefield('normal',$('#cursocan').val(),'cursocan');
        validateedadcan=validatefield('number',$('#edadcan').val(),'edadcan');
        validateedadproximacan=validatefield('number',$('#edadproximacan').val(),'edadproximacan');
        Candidatedata=[validateAnovigente,validatenombrecan,validateapellidocan,validatelugarcan,validatefechacan,validatecursocan,validateedadcan,validateedadproximacan];
            var catchIssue=null;
        
            for ( numy = Candidatedata.length - 1; numy >= 0; numy--) {
                if(numy>0){
                            
                            console.log('log 1data',Candidatedata[numy]);
                            if (Candidatedata[numy].err) {
                                $(".inv-sign-"+Candidatedata[numy].name).css('display','block')
                                $('#'+Candidatedata[numy].name).addClass('is-invalid');
                        
                            }else{
                                $(".inv-sign-"+Candidatedata[numy].name).css('display','none')
                                $('#'+Candidatedata[numy].name).removeClass('is-invalid');
                            }

                        }else{
                            if (validateAnovigente.err || validatenombrecan.err || validateapellidocan.err || validatelugarcan.err || validatefechacan.err || validatecursocan.err || validateedadcan.err || validateedadproximacan.err) {
                                catchIssue=false;
                                return false;
                            }else{
                                catchIssue=true;
                                return true;
                                console.log('know if each field is right!',catchIssue)

                            }
                            
                        }
            }

                        

                    break;
                case 2:
                 validatenombrepadre=validatefield('normal',$('#nombrepadre').val(),'nombrepadre');
                 validateapellidopadre=validatefield('normal',$('#apellidopadre').val(),'apellidopadre');
                 validateprofesionpadre=validatefield('normal',$('#profesionpadre').val(),'profesionpadre');
                 validateccpadre=validatefield('number',$('#ccpadre').val(),'ccpadre');
                 validatedirpadre=validatefield('normal',$('#dirpadre').val(),'dirpadre');
                 validatetelpadre=validatefield('normal',$('#telpadre').val(),'telpadre');
                 validatedireofipadre=validatefield('normal',$('#direofipadre').val(),'direofipadre');
                 validateteleofipadre=validatefield('normal',$('#teleofipadre').val(),'teleofipadre');
                var numy=0;
                Candidatedata=[validatenombrepadre,validateapellidopadre,validateprofesionpadre,validateccpadre,validatedirpadre,validatetelpadre,validatedireofipadre,validateteleofipadre];
                    var catchIssue=null;
        
            for ( numy = Candidatedata.length; numy >= 0;) {
                if(numy>0){
                            
                            console.log('log 1data',Candidatedata[numy-1]);
                            if (Candidatedata[numy-1].err) {
                                $(".inv-sign-"+Candidatedata[numy-1].name).css('display','block')
                                $('#'+Candidatedata[numy-1].name).addClass('is-invalid');
                        
                            }else{
                                $(".inv-sign-"+Candidatedata[numy-1].name).css('display','none')
                                $('#'+Candidatedata[numy-1].name).removeClass('is-invalid');
                            }

                        }else{
                                console.log('know if each field is right!',catchIssue)

                            if (validatenombrepadre.err || validateapellidopadre.err || validateprofesionpadre.err || validateccpadre.err || validatedirpadre.err || validatetelpadre.err || validatedireofipadre.err || validateteleofipadre.err) {
                                catchIssue=false;
                                return false;
                            }else{
                                catchIssue=true;
                                return true;

                            }
                            
                        }
                         numy--
            }

        
        

                    
                    break;

                case 3:
                    validatenombremadre=validatefield('normal',$('#nombremadre').val(),'nombremadre');
                    validateapellidomadre=validatefield('normal',$('#apellidomadre').val(),'apellidomadre');
                    validateprofesionmadre=validatefield('normal',$('#profesionmadre').val(),'profesionmadre');
                    validateccmadre=validatefield('number',$('#ccmadre').val(),'ccmadre');
                    validatedirmadre=validatefield('normal',$('#dirmadre').val(),'dirmadre');
                    validatetelmadre=validatefield('normal',$('#telmadre').val(),'telmadre');
                    validatedireofimadre=validatefield('normal',$('#direofimadre').val(),'direofimadre');
                    validateteleofimadre=validatefield('normal',$('#teleofimadre').val(),'teleofimadre');
                    var numy=0;
                Candidatedata=[validatenombremadre,validateapellidomadre,validateprofesionmadre,validateccmadre,validatedirmadre,validatetelmadre,validatedireofimadre,validateteleofimadre];
                    var catchIssue=null;
        
            for ( numy = Candidatedata.length; numy >= 0;) {
                if(numy>0){
                            
                            console.log('log 1data',Candidatedata[numy-1]);
                            if (Candidatedata[numy-1].err) {
                                $(".inv-sign-"+Candidatedata[numy-1].name).css('display','block')
                                $('#'+Candidatedata[numy-1].name).addClass('is-invalid');
                        
                            }else{
                                $(".inv-sign-"+Candidatedata[numy-1].name).css('display','none')
                                $('#'+Candidatedata[numy-1].name).removeClass('is-invalid');
                            }

                        }else{
                            if (validatenombremadre.err || validateapellidomadre.err || validateprofesionmadre.err || validateccmadre.err || validatedirmadre.err || validatetelmadre.err || validatedireofimadre.err || validateteleofimadre.err) {
                                catchIssue=false;
                                return false;
                            }else{
                                catchIssue=true;
                                return true;
                                console.log('know if each field is right!',catchIssue)

                            }
                            
                        }

                         numy--
            
            }

                    

                    
                    break;

                case 4:

                    validatenombrerefeu=validatefield('normal',$('#nombrerefeu').val(),'nombrerefeu');
                    validateapellidorefeu=validatefield('normal',$('#apellidorefeu').val(),'apellidorefeu');
                    validateprofesionrefeu=validatefield('normal',$('#profesionrefeu').val(),'profesionrefeu');
                    validatedirerefeu=validatefield('normal',$('#direrefeu').val(),'direrefeu');
                    validateteleofirefeu=validatefield('normal',$('#teleofirefeu').val(),'teleofirefeu');
                    validatetelerefeu=validatefield('normal',$('#telerefeu').val(),'telerefeu');
                    validatevinculorefeu=validatefield('normal',$('#vinculorefeu').val(),'vinculorefeu');
                    var numy=0;
                    Candidatedata=[validatenombrerefeu,validateapellidorefeu,validateprofesionrefeu,validatedirerefeu,validateteleofirefeu,validatetelerefeu,validatevinculorefeu];
                    var catchIssue=null;
                    for ( numy = Candidatedata.length; numy >= 0;) {
                if(numy>0){
                            
                            console.log('log 1data',Candidatedata[numy-1]);
                            if (Candidatedata[numy-1].err) {
                                $(".inv-sign-"+Candidatedata[numy-1].name).css('display','block')
                                $('#'+Candidatedata[numy-1].name).addClass('is-invalid');
                        
                            }else{
                                $(".inv-sign-"+Candidatedata[numy-1].name).css('display','none')
                                $('#'+Candidatedata[numy-1].name).removeClass('is-invalid');
                            }
                                }else{
                                    if (validatenombrerefeu.err || validateapellidorefeu.err || validateprofesionrefeu.err || validatedirerefeu.err || validateteleofirefeu.err || validatetelerefeu.err || validatevinculorefeu.err) {
                                        catchIssue=false;
                                        return false;
                                    }else{
                                        catchIssue=true;
                                        return true;
                                        console.log('know if each field is right!',catchIssue)

                                    }
                                    
                                }
                                numy--
                    
                    }

                    


                    break;

                case 5:
                    return true;
                    
                    break;
                case 6:
                     if (validatebuyerEmail.err) {
                        $(".inv-sign-buyerEmail").css('display','block')
                        $('#buyerEmail').addClass('is-invalid');
                            return false;
                

                    }else{
                            $(".inv-sign-buyerEmail").css('display','none')
                            $('#buyerEmail').removeClass('is-invalid');
                            return true;

                    }
            
                    break;
            
                case 7:
                    return true;
                    
                    
                    break;

             
                case 8:
                    return true
                


                    break;
                case 9:
                    if (!$('#legal').prop('checked')) {

                       $(".inv-sign-legal").css('display','block')
                    
                        return false;
                                

                    }else{
                        $(".inv-sign-legal").css('display','none')
                        return true;

                        
                    }

                    break;
                default:
                
                    break;
  
            }

            
            

        },
        labels: {
            finish: "Enviar Solicitud",
            next: "Continuar",
            previous: "Atras"
        },

    });

    function validatefield(type,value,nameSelector) {

        switch (type) {
            case 'email':
                
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


                if (!re.test(value) || !value){
                   return {err:true,name:nameSelector,msg:'Correo electrónico incorrecto'}
                   
                }else{
                    return {err:false,name:nameSelector};
                   

                }
                break;


            case 'number':
                if (!value || value==null || value=='' ) {
                    return {err:true,name:nameSelector,msg:'Campo obligatorio'}

                }else{
                    if(isNaN(value)){
                        return {err:true,name:nameSelector,msg:'Campo obligatorio'}
                
                    }else{
                        return {err:false,name:nameSelector};
                    }

                }
                
                break;

            case 'normal':
                
                if(!value){
                    return {err:true,name:nameSelector,msg:'Campo obligatorio'};
                
                }else{
                    return {err:false,name:nameSelector};
                
                }
                break;
            default:
                return {err:false,name:nameSelector};
                break;
        }
    }




            
    


    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Date Picker
    var dp1 = $('#fechacan').datepicker().data('datepicker');
    dp1.selectDate(new Date());
})
