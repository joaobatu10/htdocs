<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\ContatoModel;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $data['informacoes'] = "";
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }
    public function receber_formulario(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $nome = $request->getParsedBody()['nome'];
        $telefone = $request->getParsedBody()['telefone'];
        $mensagem = $request->getParsedBody()['mensagem'];

        $campos = array(
            'nome' => $nome,
            'telefone' => $telefone,
            'mensagem' => $mensagem
        );


        $contato = new ContatoModel();

        $contato->insertContatoModel($campos);

        header('Location: '.URL_BASE.'contato-recebido');
        exit();
    }
        public function contato_recebido(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $data['informacoes'] = "";
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "contato_recebido.php", $data);
    }
    public function page(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $data['informacoes'] = "";
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }
}