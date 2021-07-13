$(function() {
    
   new Typed('#typed',{
      strings : ['Confirmer votre participation en renseignant ce formulaire'],
      typeSpeed : 50,
      delaySpeed : 100,
      loop : true
    });

     $('#valereForm').submit(function (e) {

         e.preventDefault();

         let data  = $(this).serialize();

            $.ajax({
            url: 'app/sender.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {

              // console.log(data);

                 if(data.valider){

                        //alert('okay');
                       //confirm('valider votre inscription svp!');
                      //console.log('success');
                     /*alert('Inscription validée, vous recevez un mail confirmant votre reservation à votre adresse:'+' '+res.email);*/

                    $('#fullName').val(' ');
                    $('#email').val(' ');
                    $('#phone').val(' ');
                    $('.comments').val(' ');

                    let sms = "Merci! Valère service vous contactera dans moins de 24H.";

                     $('#message').html('<div class="alert alert-success alert-dismissible text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+sms+'</div>');


                     /* setTimeout('document.location.reload()',500);*/

                }else{

                    //console.log('error');

                   $('#fullName + .comments').html(data.fullNameError);
                   $('#email + .comments').html(data.emailError);
                   $('#phone + .comments').html(data.phoneError);



                }

       }
     })

   // alert('je suis en test');

  })

})



 