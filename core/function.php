<?php
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function urls ($value){
    return $_SERVER["REQUEST_URI"] == $value;
}

function routeToControler($uri,$routes)
{
    if (array_key_exists($uri, $routes)) {
        http_response_code(200);
        
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}


function authorize($condition ,$status = Response::HTTP_FORBIDDEN){
    if(!$condition){
        abort($status); 
    }
    
}

?>