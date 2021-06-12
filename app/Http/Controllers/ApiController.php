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
        CURLOPT_RETURNTRANSFER => 1, //O return será uma string e não um resultado direto
        CURLOPT_URL => $url,         //A url para fetch
        CURLOPT_USERAGENT=> 1        //User agent que possibilita a utilização da API
        ]);

        // Envio e armazenamento da resposta
        $response = json_decode(curl_exec($curl));

        $convertedToArray = get_object_vars($response);

        if(count($convertedToArray) < 10 ){
            
            echo "Usuário incorreto, tente novamente em 3...";
            header( "refresh:3;url=http://127.0.0.1:8000" );
            return ;

        }

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
}
