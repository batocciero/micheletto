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
            "title"     => "HOME ". SITE,
            "mobile"    => "Home"
        ]);
    }

    public function historia(): void
    {
        echo $this->view->render("historia", [
            "title"     => "História ". SITE,
            "mobile"    => "História"
        ]);
    }

    // Produtos
    public function vinhos(): void
    {
        echo $this->products->render("vinhos", [
            "title"     => "Vinhos ". SITE,
            "mobile"    => "Vinhos"
        ]);
    }

    public function uvas(): void
    {
        echo $this->products->render("uvas", [
            "title"     => "Uvas ". SITE,
            "mobile"    => "Uvas"
        ]);
    }

    public function mudasdeuvas(): void
    {
        echo $this->products->render("mudasdeuvas", [
            "title"     => "Mudas de Uvas ". SITE,
            "mobile"    => "Mudas de Uvas"
        ]);
    }

    public function flores(): void
    {
        echo $this->products->render("flores", [
            "title"     => "Flores ". SITE,
            "mobile"    => "Flores"
        ]);
    }

    public function emporio(): void
    {
        echo $this->products->render("emporio", [
            "title"     => "Empório ". SITE,
            "mobile"    => "Empório"
        ]);
    }

    public function cavalos(): void
    {
        echo $this->products->render("cavalos", [
            "title"     => "Cavalos ". SITE,
            "mobile"    => "Cavalos"
        ]);
    }
    // Fim Produtos

    // Turismo
    public function monitorado(): void
    {
        echo $this->turismo->render("monitorado", [
            "title"     => "Roteiros Monitorados ". SITE,
            "mobile"    => "Passeios Monitorados"
        ]);
    }

    public function tecnico(): void
    {
        echo $this->turismo->render("tecnico", [
            "title"     => "Roteiros Técnicos ". SITE,
            "mobile"    => "Técnico em Vinicultura"
        ]);
    }

    public function pedagogico(): void
    {
        echo $this->turismo->render("pedagogico", [
            "title"     => "Roteiros Pedagógicos ". SITE,
            "mobile"    => "Roteiros Pedagógicos"
        ]);
    }

    public function melhoridade(): void
    {
        echo $this->turismo->render("melhoridade", [
            "title"     => "Roteiros Melhor Idade ". SITE,
            "mobile"    => "Melhor Idade"
        ]);
    }
    // Fim Turismo

    // Curiosidades
    public function curiosidades(): void
    {
        echo $this->view->render("curiosidades", [
            "title"     => "Curiosidades ". SITE,
            "mobile"    => "Curiosidades"
        ]);
    }

    // Eventos
    public function eventos(): void
    {
        echo $this->view->render("eventos", [
            "title"     => "Eventos ". SITE,
            "mobile"    => "Eventos"
        ]);
    }

    // Serviços
    public function servicos(): void
    {
        echo $this->view->render("servicos", [
            "title"     => "Serviços ". SITE,
            "mobile"    => "Serviços"
        ]);
    }
    
    // Error
    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title"     => "Error {$data['errcode']} | " .SITE,
            "error"     => $data["errcode"],
            "mobile"    => "Não Encontrada: ".$data["errcode"]
        ]);
    }
}
