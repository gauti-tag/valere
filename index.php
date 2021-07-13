<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Gauti-tag">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/font.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/icon-valere.png" type="image/x-icon">

</head>
<body>
    
   <section> 

         <div class="container">

           <!-- ====== Banner and typing animation ===-->

             <div class="row text-center align-items-center">

                    <div class="col-md-12 animate__animated animate__zoomIn"> <!-- animate__delay-1s -->
                       <img id="banner"  class="img-fluid" src="assets/img/banner-valere.jpg" alt="bannière de la valere" srcset="">

                        <div id="text" class="text-center mx-auto">
                            Vous n'allez plus faire le tour des agences pour trouver une servante fiable et <br> compétente après avoir participé à cette conférence

                            <p class="ticket"> TICKETS DISPONIBLES / 10.000F.CFA </p>
                        </div>
                    </div>

                     <div id="element" class="col-md-12 text-center py-1 animate__animated animate__slideInRight animate__delay-1s">
                         <p><!--Confirmer votre participation en renseignant ce formulaire --><span id="typed"></span></p>
                    </div>
                             
             </div>

             <!-- / === -->

             <div class="row">

                 <div class="col-md-4"></div>

                 <div class="col-md-4 animate__animated animate__zoomInRight animate__delay-2s">

                     <div class="container">

                         <div id="message" style="font-weight: bold">

                         </div>

                         <form id="valereForm" method="POST">

                             <div class="form-group row">
                                 <input autocomplete="off" type="text" class="form-control btn-sm" name="fullName" id="fullName" placeholder="NOM ET PRENOMS">
                                 <div class="comments"></div>
                             </div>
                             <div class="form-group row">
                                 <input autocomplete="off" type="text" class="form-control btn-sm" name="email" id="email" placeholder="ADRESSE MAIL">
                                 <div class="comments"></div>
                             </div>
                             <div class="form-group row">
                                 <input autocomplete="off" type="text" class="form-control btn-sm" name="phone" id="phone" placeholder="TELEPHONE">
                                 <div class="comments"></div>
                             </div>
                             <div style="font-size: 10px; font-weight: bold">
                                <p> En soumettant ce formulaire vous acceptez <br> d'être recontacté par Valère entreprise de personnel de maison. </p>
                             </div>

                             <div class="row">
                                 <!-- <div class="col-md-4 col-sm-4"></div>
                                 <div class="col-md-4 col-sm-4"></div> -->
                                 <div class="col-md-12  pb-3">
                                     <button class="btn-soumettre">SOUMETTRE</button>
                                 </div>
                             </div>

                          </form>

                     </div>
                 </div>

                 <div class="col-md-4"></div>

             </div>
         </div>   
   
   </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/control.inputs.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/script.js"></script>

    <script>

    
    </script>

   


</body>
</html>