<?php
declare(strict_types=1);

class ChamadoController{
    public function index(): void{
        echo "<h2> LogiTech Sistemas - Listagem de Chamados</h2>";
        echo "<p>Rota padrão adicionada com sucesso!</p>";
    }

    public function criar(): void{
        echo "<h2>LogiTech Sistemas - Formulário de Novo Chamado<h2>";
    }

    public function exibir(string $id ='0'): void{
        echo "<h2>Detalhes do Chamado Técnico #{$id}</h2>";
    }
}
?>
