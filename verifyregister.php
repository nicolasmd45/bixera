<?php
session_start();
if((str_contains($session["email"], "@uniuv.edu.br")) == TRUE){
    echo "email válido"
}
else{
    echo "email inválido"
}
?>