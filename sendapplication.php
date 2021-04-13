<?php

require './vendor/autoload.php';

if(isset($_POST['applicationbtn'])){
     //variables
     $name =  $_POST['jobfullname'];
     $email = $_POST['jobemail'];
     $phone = $_POST['jobphone'];
     $jobcode = $_POST['jobcode'];
     //$resume = $_POST['jobfile'];
     $message = $_POST['jobnote'];


      $sendemail = new \SendGrid\Mail\Mail();
      $sendemail->setFrom("fgcc@mts.net", $name);
      $sendemail->setSubject('FGCCC Job Application');
      $sendemail->addTo("fgcc@mts.net", "FGCCC");
      $sendemail->addContent("text/html", 'Email: '.$email . 
      '<br/>Name: '. $name .
      '<br/>Phone: '.$phone.
      '<br/>Job Code: '. $jobcode.
      '<br/>Message:<br/>'.$message);

        $uploadsDir = "assets/uploads/"; 

        $fileName = $_FILES['jobfile']['name'];
        $tempLocation = $_FILES['jobfile']['tmp_name'];
        $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $targetFilePath = $uploadsDir . $fileName;
        if(move_uploaded_file($tempLocation,$targetFilePath)){
            
            $file_encoded = base64_encode(file_get_contents($targetFilePath));
            $sendemail->addAttachment(
                $file_encoded,
                "application/".$extension,
                $fileName,
                "attachment"
            );

            $api = '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';
            $sendgrid = new \SendGrid($api);
            if($sendgrid->send($sendemail)){
                    if(!unlink($targetFilePath)){
                        header('Location: careers.php?message=failed');
                    }else{
                        header('Location: careers.php?message=sent');
                    }
            }else{
                header('Location: careers.php?message=failed');
            }
        }else{
            header('Location: careers.php?message=failed');
        }
        
        
  }