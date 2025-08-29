<?php
// Definindo a classe Carro
class Torcedor {
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
        echo "Torcedor: {$this->nome}, {$this->idade} anos, torce para o {$this->time}.<br>";
    }
}

// Criando objetos (instâncias)
$torcedor1 = new Torcedor("Matheus", "Vasco", 25);
$torcedor2 = new Torcedor("Ana", "maldito Flamengo", 25);
$torcedor3 = new Torcedor("Churros", "Botafogo", 22);


// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
$torcedor3->exibir();
?>