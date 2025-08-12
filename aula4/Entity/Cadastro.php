<?php
namespace App\Entity;

use DateTimeImmutable;

class Cadastro
{
    public function __construct(
        private string $nome,
        private string $cpfCnpj,
        private DateTimeImmutable $data,
        private string $tipo
    ) {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    public function getData(): string
    {
        return $this->data->format('d-m-Y');
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setCpfCnpj(string $cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function setData(DateTimeImmutable $data)
    {
        $this->data = $data;
        return $this;
    }

    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }
}
