<?php


namespace Source\App;


use League\Plates\Engine;

class Web
{

    /**
     * @var Engine
     */
    private $view; // Esse serve para HOME, História e Curiosidades.
    private $products;
    private $turismo;
    private $servicos;
    private $eventos;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
        $this->products = Engine::create(__DIR__ . "/../../theme/produtos", "php");
        $this->turismo = Engine::create(__DIR__ . "/../../theme/turismo", "php");
        $this->servicos = Engine::create(__DIR__ . "/../../theme/servicos", "php");
        $this->eventos = Engine::create(__DIR__ . "/../../theme/eventos", "php");
    }

    public function home(): void
    {
        echo $this->view->render("home", [
            "title" => "HOME ". SITE
        ]);
    }

    public function historia(): void
    {
        echo $this->view->render("historia", [
            "title" => "História ". SITE
        ]);
    }

    // Produtos
    public function vinhos(): void
    {
        echo $this->products->render("vinhos", [
            "title" => "Vinhos ". SITE
        ]);
    }

    public function uvas(): void
    {
        echo $this->products->render("uvas", [
            "title" => "Uvas ". SITE
        ]);
    }

    public function mudasdeuvas(): void
    {
        echo $this->products->render("mudasdeuvas", [
            "title" => "Mudas de Uvas ". SITE
        ]);
    }

    public function flores(): void
    {
        echo $this->products->render("flores", [
            "title" => "Flores ". SITE
        ]);
    }

    public function emporio(): void
    {
        echo $this->products->render("emporio", [
            "title" => "Empório ". SITE
        ]);
    }

    public function cavalos(): void
    {
        echo $this->products->render("cavalos", [
            "title" => "Cavalos ". SITE
        ]);
    }
    // Fim Produtos

    // Turismo
    public function monitorado(): void
    {
        echo $this->turismo->render("monitorado", [
            "title" => "Roteiros Monitorados ". SITE
        ]);
    }

    public function tecnico(): void
    {
        echo $this->turismo->render("tecnico", [
        "title" => "Roteiros Técnicos ". SITE
        ]);
    }

    public function pedagogico(): void
    {
        echo $this->turismo->render("pedagogico", [
        "title" => "Roteiros Pedagógicos ". SITE
        ]);
    }

    public function melhoridade(): void
    {
        echo $this->turismo->render("melhoridade", [
        "title" => "Roteiros Melhor Idade ". SITE
        ]);
    }
    // Fim Turismo

    
    // Error
    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | " .SITE,
            "error" => $data["errcode"]
        ]);
    }

}
