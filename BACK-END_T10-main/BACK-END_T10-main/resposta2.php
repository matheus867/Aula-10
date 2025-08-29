<?php
// Definindo a classe Carro
class tocedor {
    public $nome;
    public $time;
    public $idade;

    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade) {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }

    // Método para exibir informações
    public function exibir() {
        echo "Torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";
    }
}

// Criando objetos (instâncias)
$torcedor1 = new tocedor("Gabriel", "Santos", '20');
$torcedor2 = new tocedor(nome: "Lucas", time: "Flamengo", idade: '19');
$torcedor3 = new tocedor(nome: "Eduardo", time: "Cruzeiro", idade: '34');

// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
$torcedor3->exibir();
?>
