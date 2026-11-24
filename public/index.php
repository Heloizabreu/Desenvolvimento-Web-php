<?php
declare(strict_types=1);

//Capturar a rota da URL
$rota = $_GET['url'] ?? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$urlLimpa = trim($rota, '/');
$url = ($urlLimpa !== '') ? $urlLimpa : 'chamado/index';

//Divide a URL em um array
$segmentos = explode('/', $url);

//Definir controller
$controllerNome = ucfirst($segmentos[0]) . 'Controller';

//Definir método
$metodo = $segmentos[1] ?? 'index';

//Definir Parâmetro
$paramentros = array_slice($segmentos, 2);

//Caminho do Controller
$caminhoArquivo = __DIR__ . "/../app/Controllers/{$controllerNome}.php";

if(file_exists($caminhoArquivo)){
    require_once $caminhoArquivo;
    if(class_exists($controllerNome)){
        $controller = new $controllerNome();
        if(method_exists($controller, $metodo)){
            //Chamando o método passando os parâmetros
            call_user_func_array([$controller, $metodo], $paramentros);
        }else{
            http_response_code(404);
            echo "<h1>Erro 404</h1><p>Ação {$metodo} não encontrada no controller.</p>";
        }
    }else {
        http_response_code(500);
        echo "<h1>Erro 500 </h1> <p>Classe {$controllerNome} mal configurada.</p>";
    }
}else{
    http_response_code(404);
    echo "<h1>Erro 404</h1><p> Página ou recurso {$segmentos[0]} não existe.</p>";
}
?>