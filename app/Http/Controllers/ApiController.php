<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ApiController extends Controller

{

    public function makeTheCallOfApi(Request $request)
    {     
        $username = $request->username;
        
        $url = 'https://api.github.com/users/'.$username;
        // Inicia o curl
        $curl = curl_init();

        // Configura os parâmetros do curl
        curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT=> 1
        ]);
        // Envio e armazenamento da resposta
        $response = json_decode(curl_exec($curl)) ;


        //Testa e trata um possível erro
        if(!$response->message)
        {
        $login = $response->login;
        $id = $response->id;
        $email = $response->email ?? 'Este email não está disponível';
        $name = $response->name ?? $username;

        //retorna a view com os dados prtinentes
        return view('pages.result.success',['login'=> $login,
                                            'id'=> $id,
                                            'email'=>$email,
                                            'name'=>$name]);       
        }
        else echo 'Usuário não encontrado, redirecionando em 3... ';
        header( "refresh:3; url=http://127.0.0.1:8000/" );
    }
}
