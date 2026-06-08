<?php

class Produto {
    // Atributos (propriedades)
        public string $nome;
            public float $preco;
                private int $estoque;

                    // Construtor — executado ao criar o objeto
                        public function __construct(string $nome, float $preco, int $estoque) {
                                $this->nome = $nome;
                                        $this->preco = $preco;
                                                $this->estoque = $estoque;
                                                    }

                                                        // Método público
                                                            public function exibir(): void {
                                                                    echo "Produto: {$this->nome} <br> Preço: R$ {$this->preco} <br> Estoque: {$this->estoque}\n";
                                                                        }

                                                                            // Getter para atributo privado
                                                                                public function getEstoque(): int {
                                                                                        return $this->estoque;
                                                                                        }
                                                                                            public function setEstoque(int $estoque): void {
                                                                                                    $this->estoque += $estoque;
                                                                                                    } 
                                                                                                    }

                                                                                                    // Criando objetos
                                                                                                    $p1 = new Produto("Notebook", 3500.00, 10);
                                                                                                    $p2 = new Produto("Mouse", 89.90, 50);
                                                                                                    $p3 = new Produto("POCO C75", 1500.00, 5);

                                                                                                    $p1->exibir();
                                                                                                    echo "<hr>";
                                                                                                    $p2->exibir();
                                                                                                    echo "<hr>";
                                                                                                    $p3->nome="Iphone 13"; 
                                                                                                    $p3->preco="14000.00";
                                                                                                    echo "<br>Estoque: " . $p3->getEstoque();
                                                                                                    $p3->exibir(); 