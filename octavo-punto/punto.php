<?php
    $S = $_POST ['S'];
    $E = $_POST ['E'];
    
    if($S=="M"){
        if($E>=63){
            echo "usted se puede jubilar";
        }else{
            echo "usted no se puede jubilar";
        }
    }elseif($S=="F"){
        if($E>54){
            echo "usted se puede jubilar";
        }else{
            echo "usted no se puede jubilar";
        }
    }


?>