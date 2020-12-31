<?php

function ListadoMenu(){
    return array(
        array(
            "title"=>"Inicio",
            "url"=>base_url("index.php/inicio"),
        ),
        array(
            "title"=>"Login",
            "url"=>base_url(),
        ),
        array(
            "title"=>"Registro",
            "url"=>base_url("index.php/registro"),
        )
    );
}