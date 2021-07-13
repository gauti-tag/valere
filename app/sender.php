<?php


  //echo 'je suis Tiehoule';

 require_once 'fonction.php';


  $data = array(
        'database'=>'',
        'fullName'=>'',
        'fullNameError'=>'',
        'email'=>'',
        'emailError'=>'',
        'phone'=>'',
        'phoneError'=>'',
        'valider'=>'',
        'query'=>'',
        'sender'=>''
     
     );

      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){

        try {

           //$data['database'] = new PDO('mysql:host=localhost;dbname=valere_db','root','');
            $data['database'] = new PDO('mysql:host=185.98.131.158;dbname=valer1422336','valer1422336','sxwwy39g26');
            $data['database']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $data['fullName'] = VerifInput($_POST['fullName']);
            $data['email'] = VerifInput($_POST['email']);
            $data['phone'] = VerifInput($_POST['phone']);


            $data['valider'] = true;

             }catch (PDOException $e){


            print 'error'.$e->getMessage().'<br>';

        }

    }


    if(empty($data['fullName']))
    {
        $data['fullNameError'] = 'Merci d\'entrer votre nom et prenoms svp!';
        $data['valider'] = false;
    }

    if(empty($data['email']))
    {
        $data['emailError'] = 'Merci d\'entrer votre addresse email svp!';
        $data['valider'] = false;

    }elseif (!IsEmail($data['email']))
    {
        $data['emailError'] = 'Email non valide!';
        $data['valider'] = false;
    }


     if(empty($data['phone']))
    {
        $data['phoneError'] = 'Merci d\'entrer votre numéro de téléphone svp!';
        $data['valider'] = false;

    }elseif (!IsPhone($data['phone']))
     {
         $data['phoneError'] = 'Cet numéro de téléphone est non valide';
         $data['valider'] = false;

     }




    if($data['valider'])
    {


        $data['query'] ="INSERT INTO customers (full_name,email,phone,status)
                                VALUES (:full_name,:email,:phone,:status)";


        $data['sender'] = $data['database']->prepare($data['query']);

        $data['sender']->execute(array(

            "full_name" =>$data['fullName'],
            "email"=>$data['email'],
            "phone"=>$data['phone'],
            "status"=>0

        ));



    }



    echo json_encode($data);