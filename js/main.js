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
           /* $('html, body').animate({
                scrollTop: $(".wrapper").offset().top
                }, 800);*/

            var validateAnovigente;
            var validatenombrecan;
            var validateapellidocan;
            var validatelugarcan;
            var validatefechacan;
            var validatecursocan;
            var validateedadcan;
            var validateedadproximacan;
            var Candidatedata=[];



        
            if (currentIndex > newIndex)
            {
                return true;
            }
     
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                console.log('when does the fuction is shooted?')
               


            console.log('what data does this have',currentIndex)
            console.log('what data does this have',newIndex)
           
           

            var validatenombremadre=validatefield('normal',$('#nombremadre').val(),'nombremadre');
            var validateapellidomadre=validatefield('normal',$('#apellidomadre').val(),'apellidomadre');
            var validateprofesionmadre=validatefield('normal',$('#profesionmadre').val(),'profesionmadre');
            var validateccmadre=validatefield('number',$('#ccmadre').val(),'ccmadre');
            var validatedirmadre=validatefield('normal',$('#dirmadre').val(),'dirmadre');
            var validatetelmadre=validatefield('normal',$('#telmadre').val(),'telmadre');
            var validatedireofimadre=validatefield('normal',$('#direofimadre').val(),'direofimadre');
            var validateteleofimadre=validatefield('normal',$('#teleofimadre').val(),'teleofimadre');









            var validatenombrerefeu=validatefield('normal',$('#nombrerefeu').val(),'nombrerefeu');
            var validateapellidorefeu=validatefield('normal',$('#apellidorefeu').val(),'apellidorefeu');
            var validateprofesionrefeu=validatefield('normal',$('#profesionrefeu').val(),'profesionrefeu');
            var validatedirerefeu=validatefield('normal',$('#direrefeu').val(),'direrefeu');
            var validateteleofirefeu=validatefield('normal',$('#teleofirefeu').val(),'teleofirefeu');
            var validatetelerefeu=validatefield('normal',$('#telerefeu').val(),'telerefeu');
            var validatevinculorefeu=validatefield('normal',$('#vinculorefeu').val(),'vinculorefeu');

            var validatebuyerEmail=validatefield('email',$('#buyerEmail').val(),'buyerEmail');





            var terminos = $('#terminos').val();
            var fechasolicita = $('#fechasolicita').val();
            var consecutivoFor = $('#consecutivoFor').val();
            var emailCan = $('#buyerEmail').val();
            
            var refCompra  = $('#referenceCode').val();



            switch (newIndex) {
                case 1:

                CheckoutFirstSection1();           
            

                   // if(numy<arrayEjemplo.lenght){
                        // hacer cualquier cosa async
                     //   numy++
                       // runTime()
                    //}else{
                      //  resol('FT esto ya termino')
                    //}

                        

                    break;
                case 2:
                 var validatenombrepadre=validatefield('normal',$('#nombrepadre').val(),'nombrepadre');
            var validateapellidopadre=validatefield('normal',$('#apellidopadre').val(),'apellidopadre');
            var validateprofesionpadre=validatefield('normal',$('#profesionpadre').val());
            var validateccpadre=validatefield('number',$('#ccpadre').val(),'ccpadre');
            var validatedirpadre=validatefield('normal',$('#dirpadre').val(),'dirpadre');
            var validatetelpadre=validatefield('normal',$('#telpadre').val(),'telpadre');
            var validatedireofipadre=validatefield('normal',$('#direofipadre').val(),'direofipadre');
            var validateteleofipadre=validatefield('normal',$('#teleofipadre').val(),'teleofipadre');
            

            let FieldsTotal=8;

            let validateSecondSection= new Promise((resolve, reject) => {
                  if (validatenombrepadre.err) {
                $(".inv-sign-nombrepadre").css('display','block')
                $('#nombrepadre').addClass('is-invalid');
                
                
            }else{
                $(".inv-sign-nombrepadre").css('display','none')
                $('#nombrepadre').removeClass('is-invalid');
                
                

            }
            if (validateapellidopadre.err) {
                $(".inv-sign-apellidopadre").css('display','block')
                $('#apellidopadre').addClass('is-invalid');
                
                

            }else{
                $(".inv-sign-apellidopadre").css('display','none')
                $('#apellidopadre').removeClass('is-invalid');
                
                

            }

            if (validateprofesionpadre.err) {
                $(".inv-sign-profesionpadre").css('display','block')
                $('#profesionpadre').addClass('is-invalid');
                
                

            }else{
                $(".inv-sign-profesionpadre").css('display','none')
                $('#profesionpadre').removeClass('is-invalid');
                
                

            }

            if (validateccpadre.err) {
                $(".inv-sign-ccpadre").css('display','block')
                $('#ccpadre').addClass('is-invalid');
                
                

            }else{
                $(".inv-sign-ccpadre").css('display','none')
                $('#ccpadre').removeClass('is-invalid');
                
                

            }

            if (validatedirpadre.err) {
                $('#dirpadre').addClass('is-invalid');
                $(".inv-sign-dirpadre").css('display','block')
                
                

            }else{
                $('#dirpadre').removeClass('is-invalid');

                $(".inv-sign-dirpadre").css('display','none')
                
                

            }

            if (validatetelpadre.err) {
                $('#telpadre').addClass('is-invalid');
                $(".inv-sign-telpadre").css('display','block')
                
                

            }else{
                $('#telpadre').removeClass('is-invalid');
                $(".inv-sign-telpadre").css('display','none')
                
                

            }
            if (validatedireofipadre.err) {
                $(".inv-sign-direofipadre").css('display','block')
                $('#direofipadre').addClass('is-invalid');
                
                

            }else{
                $(".inv-sign-direofipadre").css('display','none')
                $('#direofipadre').removeClass('is-invalid');
                
                

            }

            if (validateteleofipadre.err) {
                $(".inv-sign-teleofipadre").css('display','block')
                $('#teleofipadre').addClass('is-invalid');
                
                

            }else{
                $('#teleofipadre').removeClass('is-invalid');
                $(".inv-sign-teleofipadre").css('display','none')
                
                

            }

              setTimeout(() => resolve({ValidatorStep:returner,FieldsValidatedTotal:acum}), 600);


            }).then(
                (result)=>{
                console.log('show me the resolve',result)
                return true;
                }
            );

                  


                    
                    break;

                case 3:
                    

                    if (validatenombremadre.err) {
                $(".inv-sign-nombremadre").css('display','block')
                $('#nombremadre').addClass('is-invalid');
                
            }else{
                $(".inv-sign-nombremadre").css('display','none')
                $('#nombremadre').removeClass('is-invalid');
                

            }
            if (validateapellidomadre.err) {
                $(".inv-sign-apellidomadre").css('display','block')
                $('#apellidomadre').addClass('is-invalid');
                

            }else{
                $(".inv-sign-apellidomadre").css('display','none')
                $('#apellidomadre').removeClass('is-invalid');
                

            }

            if (validateprofesionmadre.err) {
                $(".inv-sign-profesionmadre").css('display','block')
                $('#profesionmadre').addClass('is-invalid');
                

            }else{
                $(".inv-sign-profesionmadre").css('display','none')
                $('#profesionmadre').removeClass('is-invalid');
                

            }

            if (validateccmadre.err) {
                $(".inv-sign-ccmadre").css('display','block')
                $('#ccmadre').addClass('is-invalid');
                

            }else{
                $(".inv-sign-ccmadre").css('display','none')
                $('#ccmadre').removeClass('is-invalid');
                

            }

            if (validatedirmadre.err) {
                $('#dirmadre').addClass('is-invalid');
                $(".inv-sign-dirmadre").css('display','block')
                

            }else{
                $('#dirmadre').removeClass('is-invalid');

                $(".inv-sign-dirmadre").css('display','none')
                

            }

            if (validatetelmadre.err) {
                $('#telmadre').addClass('is-invalid');
                $(".inv-sign-telmadre").css('display','block')
                

            }else{
                $('#telmadre').removeClass('is-invalid');
                $(".inv-sign-telmadre").css('display','none')
                

            }
            if (validatedireofimadre.err) {
                $(".inv-sign-direofimadre").css('display','block')
                $('#direofimadre').addClass('is-invalid');
                

            }else{
                $(".inv-sign-direofimadre").css('display','none')
                $('#direofimadre').removeClass('is-invalid');
                

            }

            if (validateteleofimadre.err) {
                $(".inv-sign-teleofimadre").css('display','block')
                $('#teleofimadre').addClass('is-invalid');
                

            }else{
                $('#teleofimadre').removeClass('is-invalid');
                $(".inv-sign-teleofimadre").css('display','none')
                

            }


            return returner;

                    

                    
                    break;

                case 4:







                    if (validatenombrerefeu.err) {
                $(".inv-sign-nombrerefeu").css('display','block')
                $('#nombrerefeu').addClass('is-invalid');
                
            }else{
                $(".inv-sign-nombrerefeu").css('display','none')
                $('#nombrerefeu').removeClass('is-invalid');
                


            }
            if (validateapellidorefeu.err) {
                $(".inv-sign-apellidorefeu").css('display','block')
                $('#apellidorefeu').addClass('is-invalid');
                

            }else{
                $(".inv-sign-apellidorefeu").css('display','none')
                $('#apellidorefeu').removeClass('is-invalid');
                

            }

            if (validateprofesionrefeu.err) {
                $(".inv-sign-profesionrefeu").css('display','block')
                $('#profesionrefeu').addClass('is-invalid');
                

            }else{
                $(".inv-sign-profesionrefeu").css('display','none')
                $('#profesionrefeu').removeClass('is-invalid');
                

            }

            if (validatedirerefeu.err) {
                $(".inv-sign-direrefeu").css('display','block')
                $('#direrefeu').addClass('is-invalid');
                

            }else{
                $(".inv-sign-direrefeu").css('display','none')
                $('#direrefeu').removeClass('is-invalid');
                

            }

            if (validateteleofirefeu.err) {
                $('#teleofirefeu').addClass('is-invalid');
                $(".inv-sign-teleofirefeu").css('display','block')
                

            }else{
                $('#teleofirefeu').removeClass('is-invalid');

                $(".inv-sign-teleofirefeu").css('display','none')
                

            }

            if (validatetelerefeu.err) {
                $('#telerefeu').addClass('is-invalid');
                $(".inv-sign-telerefeu").css('display','block')
                

            }else{
                $('#telerefeu').removeClass('is-invalid');
                $(".inv-sign-telerefeu").css('display','none')
                

            }
            if (validatevinculorefeu.err) {
                $(".inv-sign-vinculorefeu").css('display','block')
                $('#vinculorefeu').addClass('is-invalid');
                

            }else{
                $(".inv-sign-vinculorefeu").css('display','none')
                $('#vinculorefeu').removeClass('is-invalid');
                

            }





                    break;

                case 5:
                    return true;
                    // statements_1
                    break;
                case 6:
                     if (validatebuyerEmail.err) {
                $(".inv-sign-buyerEmail").css('display','block')
                $('#buyerEmail').addClass('is-invalid');
                

            }else{
                $(".inv-sign-buyerEmail").css('display','none')
                $('#buyerEmail').removeClass('is-invalid');
                

            }
            return returner;
                    break;
                case 7:
                
                  
                    
                    break;

                case 8:
                    return true;
                    
                    
                    break;

                case 9:
                    return true;
                    
                    
                    break;

                case 10:
                    return true;
                    
                    
                    break;

                case 11:
                    return true;
                    
                    if (!$('#legal').val()) {

                   $(".invalid-feedback inv-sign-legal").css('display','block')
                
                    

                }else{
                    $(".invalid-feedback inv-sign-legal").css('display','none')
                    $('#buyerEmail').removeClass('is-invalid');
                    
                }
                return returner;


                    break;
                default:
                
                    break;

            return this.returner;  
            }

            console.log('which is the returner switcher',returner)
                return returner;
            
            

            
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
                $('.wizard > .steps ul').addClass('step-10');
            } else {
                $('.wizard > .steps ul').removeClass('step-10');
            }
            if ( newIndex === 10 ) {
                $('.wizard > .steps ul').addClass('step-11');
            } else {
                $('.wizard > .steps ul').removeClass('step-11');
            }
            if ( newIndex === 11 ) {
                $('.wizard > .steps ul').addClass('step-12');
            } else {
                $('.wizard > .steps ul').removeClass('step-12');
            }

        },
        labels: {
            finish: "Enviar Solicitud",
            next: "Continuar",
            previous: "Atras"
        },

    });

    function validatefield(type,value) {

        switch (type) {
            case 'email':
                
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


                if (!re.test(value) || !value){
                   return {err:true,msg:'Correo electrónico incorrecto'}
                   
                }else{
                    return {err:false};
                   

                }
                break;


            case 'number':
                if (!value || value==null || value=='' ) {
                    return {err:true,msg:'Campo obligatorio'}

                }else{
                    if(isNaN(value)){
                        return {err:true,msg:'Campo obligatorio'}
                
                    }else{
                        return {err:false};
                    }

                }
                
                break;

            case 'normal':
                
                if(!value){
                    return {err:true,msg:'Campo obligatorio'};
                
                }else{
                    return {err:false};
                
                }
                break;
            default:
                return {err:false};
                break;
        }
    }


    function CheckoutFirstSection1(){
        let numy=0;
        validateAnovigente=validatefield('normal',$('#anovigente').val(),'anovigente');
        validatenombrecan=validatefield('normal',$('#nombrecan').val(),'nombrecan');
        validateapellidocan=validatefield('normal',$('#apellidocan').val(),'apellidocan');
        validatelugarcan=validatefield('normal',$('#lugarcan').val(),'lugarcan');
        validatefechacan=validatefield('normal',$('#fechacan').val(),'fechacan');
        validatecursocan=validatefield('normal',$('#cursocan').val(),'cursocan');
        validateedadcan=validatefield('number',$('#edadcan').val(),'edadcan');
        validateedadproximacan=validatefield('number',$('#edadproximacan').val(),'edadproximacan');
        Candidatedata=[validateAnovigente,validatenombrecan,validateapellidocan,validatelugarcan,validatefechacan,validatecursocan,validateedadcan,validateedadproximacan];
        
        for ( numy = Candidatedata.length - 1; numy >= 0; numy--) {
            
            if(numy>0){
                        
        console.log('log 1data',Candidatedata[numy]);
                        if (validatecursocan.err) {
                    $(".inv-sign-cursocan").css('display','block')
                    $('#cursocan').addClass('is-invalid');
                    
                    
            }else{
                $(".inv-sign-cursocan").css('display','none')
                $('#cursocan').remove('is-invalid');
                    
            }

            if (validateAnovigente.err) {
                $(".inv-sign-anovigente").css('display','block')
                $('#anovigente').addClass('is-invalid');
                
                    

            }else{
                $(".inv-sign-anovigente").css('display','none')
                $('#anovigente').remove('is-invalid');

                
                    

            }

            if (validatenombrecan.err) {
                $(".inv-sign-nombrecan").css('display','block')
                $('#nombrecan').addClass('is-invalid');
                
                    

            }else{
                $(".inv-sign-nombrecan").css('display','none')
                $('#nombrecan').removeClass('is-invalid');

                
                    

            }

            if (validateapellidocan.err) {
                $(".inv-sign-apellidocan").css('display','block')
                $('#apellidocan').addClass('is-invalid');
                console.log('aquii entra al error');
                
                    

            }else{
                $(".inv-sign-apellidocan").css('display','none')
                $('#apellidocan').removeClass('is-invalid');
                
                    


            }

            if (validatelugarcan.err) {
                $('#lugarcan').addClass('is-invalid');
                $(".inv-sign-lugarcan").css('display','block')
                
                    

            }else{
                $('#lugarcan').removeClass('is-invalid');

                $(".inv-sign-lugarcan").css('display','none')
                
                    


            }

            if (validatefechacan.err) {
                $('#fechacan').addClass('is-invalid');
                
                    

                $(".inv-sign-fechacan").css('display','block')
            }else{
                $('#fechacan').removeClass('is-invalid');
                $(".inv-sign-fechacan").css('display','none')
                
                    


            }
            if (validateedadcan.err) {
                $(".inv-sign-edadcan").css('display','block')
                $('#edadcan').addClass('is-invalid');
                
                    

            }else{
                $(".inv-sign-edadcan").css('display','none')
                $('#edadcan').removeClass('is-invalid');
                
                    


            }

            if (validateedadproximacan.err) {
                $(".inv-sign-edadproximacan").css('display','block')
                $('#edadproximacan').addClass('is-invalid');
                
                    

            }else{
                $('#edadproximacan').removeClass('is-invalid');
                $(".inv-sign-edadproximacan").css('display','none')
                
                    

            }

                    }else{
                        console.log('log data')
                    }
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
