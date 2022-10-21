<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuarioController extends Controller {

    public function screenAdd() {
        $this->render('cadastrar');
    }

    public function edit($args) {
        $user = Usuario::select()->where('id-usuario', $args['id'])->one();

        $this->render('editar', [
            'usuario'=> $user
        ]);
    }
    public function editAction($args) {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){

            Usuario::update()
                ->set('nome', $nome)
                ->set('email', $email)
                ->where('id-usuario', $args['id'])
            ->execute();

            $this -> redirect('/usuarios');
        }
        $this -> redirect('/usuario/'.$args['id'].'/editar');
    }
    public function del($args) {
        Usuario::delete()
            ->where('id-usuario', $args['id'])
        ->execute();
        $this->redirect('/usuarios');
    }


    public function addAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        if($nome && $email && $senha){
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0){
                $senha = Usuario::tranformPassoword($senha);
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email, 
                    'senha' => $senha
                ])->execute();
                $this-> redirect('/');
            }
            $this-> redirect('/cadastrar');
        }
    }
    
    public function screenList() {
        $usuarios = Usuario::select()->execute();
        $this->render('listar', [
            'usuarios' => $usuarios
        ]);    
    }

}