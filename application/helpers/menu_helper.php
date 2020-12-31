<?php

function main_menu(){
    return array(
        array(
            "title"=>"Login",
            "url"=>base_url(),
        ),
        array(
            "title"=>"Inicio",
            "url"=>base_url("index.php/Inicio"),
        ),
        array(
            "title"=>"Registro",
            "url"=>base_url("index.php/Registro"),
        ),
    );
}