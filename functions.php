<?php

//This file contains all the functions that are needed

function doctype(){
    echo "<!DOCTYPE html>\n";
    echo "<html lang=fr>";
}

function header($titre){
    echo "<head>\n";
    echo "    <meta charset='UTF-8'>\n";
    echo "    <title>$titre</title>\n";
    echo "</head>\n";
}

?>