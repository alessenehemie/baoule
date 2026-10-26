<?php 
      if(isset($_POST["generer"])){ 
         $jour=$_POST["jour"];
         $sexe=$_POST["sexe"];
         
         if($jour=="lundi" and $sexe=="M"){
             echo ("NOM:KOUASSI");
         }elseif($jour=="lundi" and $sexe=="F"){
             echo( "NOM:AKISSI");
             }


              if($jour=="mardi" and $sexe=="M"){
             echo ("NOM:KOUADIO");
         }elseif($jour=="mardi" and $sexe=="F"){
             echo( "NOM:ADJOUA");
             }

         if($jour=="mercredi" and $sexe=="M"){
             echo ("NOM:KONAN");
         }elseif($jour=="mercredi" and $sexe=="F"){
             echo( "NOM:AHOU");
             }
             
         if($jour=="jeudi" and $sexe=="M"){
             echo ("NOM:KOUAKOU");
         }elseif($jour=="jeudi" and $sexe=="F"){
             echo( "NOM:AMOIN");
             }
             
         if($jour=="vendredie" and $sexe=="M"){
             echo ("NOM:YAO");
         }elseif($jour=="vendredi" and $sexe=="F"){
             echo( "NOM:AFFOUE");
             }
             
         if($jour=="samedi" and $sexe=="M"){
             echo ("NOM:KOFFI");
         }elseif($jour=="samedi" and $sexe=="F"){
             echo( "NOM:AMENAN");
             }
             
         if($jour=="dimanche" and $sexe=="M"){
             echo ("NOM:KOUAME");
         }elseif($jour=="dimanche" and $sexe=="F"){
             echo( "NOM:AKISSI");
             }

      }