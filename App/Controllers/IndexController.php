<?php
namespace App\Controllers;
use SON\Controller\Action;
use App\Models\Client;

class IndexController extends Action
{

    public function index()
    {
        $client = new Container::getModel("Client");
        $this->views->clients = $client->fetchAll();
        $this->render("index");
    }
    public function contact()
    {
        $client = new Container::getModel("Client");
        $this->views->clients = $client->find(2);
        $this->render("contact");
    }

}
