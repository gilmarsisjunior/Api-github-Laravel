# ESCOPO 1 - API gitHub


## 🚀 Começando

Faça um clone desse repositório em uma pasta de sua preferência


Consulte **Instalação** para saber como implantar o projeto.


### 🔧 Instalação

Após clonar o repositório, abra-o em um editor de texto de sua preferência e em seguida rode o comando "php artisan serve" e acesse o servidor local que foi aberto.

```
 php artisan serve
Starting Laravel development server: http://127.0.0.1:8000
PHP 7.4.9 Development Server (http://127.0.0.1:8000) started
```


## ⚙️ Executando a aplicação

Na página principal do aplicativo, digite um usuário ativo (teste com "gilmarsisjunior") do github no input de pesquisa e clique em Pesquisar:


### ⌨️ ESCOPO 2

Ao tentar executar a Api, obtive o erro de cors, o erro traduzido:
"Falha em carregar... A resposta à solicitação de comprovação não passa na verificação de controle de acesso: Nenhum cabeçalho "Access-Control-Allow-Origin" presente no recurso solicitado. Origem ... portanto, não tem permissão de acesso
"
Que acontece quando tentamos fazer um request de origem cruzada.

As possíveis soluções que desenvolvi, foi consumir a api diretamente do back-end, criando um bypass e só depois consumir diretamente pelo front-end, isso resolveria a questão da origem cruzada e conseguiriamos consumir a api sem problemas. 

A outra solução (e a mais viável pra esse caso) seria permitir no próprio servidor o usuário que precisa consumir a api, (no meu caso "localhost/5500"). :


```
Access-Control-Allow-Origin: https://localhost/5500"
Access-Control-Allow-Methods: POST, GET
Access-Control-Allow-Headers: *

```

## 🛠️ Construído com

Laravel Framework


## ✒️ Autores

Gilmar Silva Santos Junior
(https://www.linkedin.com/in/gilmar-sisjunior)
