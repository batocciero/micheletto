<?php


namespace Source\App;


use League\Plates\Engine;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    public function home(): void
    {
        echo $this->view->render("home", [
            "title" => "HOME ". SITE
        ]);
    }

//    public function recentProjects(): void
//    {
//        echo $this->view->render("recentProjects", [
//            "title" => "Projetos ". SITE
//        ]);
//    }
//
//    public function about(): void
//    {
//        echo $this->view->render("about", [
//            "title" => "Sobre ". SITE
//        ]);
//    }
//
//    public function contact(): void
//    {
//        echo $this->view->render("contact", [
//            "title" => "Contato ". SITE
//        ]);
//    }


    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | " .SITE,
            "error" => $data["errcode"]
        ]);
    }

}