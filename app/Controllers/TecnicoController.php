<?php
declare(strict_types=1);

class TecnicoController{
    public function index(): void{
        echo "<h1>Lista de Técnicos Cadastrados</h1>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>ID</th><th>Nome</th><th>E-mail</th></tr>";
        echo "<tr><td>1</td><td>Ana Souza</td><td>ana@email.com.br</td></tr>";
        echo "<tr><td>2</td><td>Carlos Morato</td><td>morato@email.com.br</td></tr>";
        echo "<tr><td>3</td><td>Luiz Platini</td><td>platini@email.com.br</td></tr>";
        echo "</table>";
    }

    public function perfil(string $id = '0'): void{
        echo "<h2>Perfil do Técnico #{$id}</h2>";
    }
}
?>