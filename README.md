### Bíblia

#### Objetivo

Construir a API para ser consultada pelo frontend e exibido na aplicação.

#### Informações Técnicas

- API Rest em PHP

#### Desenvolvimento do Projeto

- CRUD + patch: post, get, put, delete e atualização parcial
- Ambiente de desenvolvimento:
  - [XAMPP](https://www.apachefriends.org/): apache, php, mysql:3306
  - compose: gerenciar dependências do php
  - SQLyog: manipulação de BD
  - VSCode: IDE + Extensões
  - [brModelo](https://www.brmodeloweb.com/lang/pt-br/index.html): modelos do projeto
  - [Laravel](https://laravel.com/): 8000
- Modelo de bd
  
<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="biblia_db" title="#biblia_db" src="./.github/biblia_db_model.jpg">
</p>    

- criar frontend: `composer create-project laravel/laravel biblia`
- cd biblia
- subir o frontend: `php artisan serve`: localhost:8000
- subir o servidor db: `start` xampp / mysql : 3306
- XAMPP MySQL
  
<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="biblia_xampp_mysql" title="#biblia_xampp_mysql" src="./.github/biblia_xampp_mysql.jpg">
</p>  

- conectar sqlyog: biblia_connection
- criar db: biblia / utf8mb4 / utf8mb4_general_ci
- insomnia para testar as rotas e métodos HTTP
- estrutura do projeto: controller, model, api, migrations
- `http://127.0.0.1:8000/api/teste`
- `php artisan make:model Testamento --migration`
- app/Models/Testamento.php
- database/migrations/create_testamentos_table.php
- criar arquivo migrate: `php artisan make:model Livro --migration` 
- criar arquivo migrate: `php artisan make:model Versiculo --migration` 
- rodar as migrations e criar as tabelas: `php artisan migrate`: Livros, Testamentos, Versiculos
- criar o controller: `php artisan make:controller TestamentoController --api`
- criar o controller: `php artisan make:controller LivroController --api`
- criar o controller: `php artisan make:controller VersiculoController --api`
- configurar os métodos HTTP e o CRUD no insomnia
- Requisições Insomnia
  
<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="biblia_requisicoes_insomnia" title="#biblia_requisicoes_insomnia" src="./.github/biblia_requisicoes_insomnia.jpg">
</p>    

- Programar o projeto nos arquivos
  - app/Http/Controllers/: Livro, Testamento, Versiculo
  - app/Http/Models/: Livro, Testamento, Versiculo
  - database/migrations/: create_testamentos, create_versiculos, create_livros
  - routes/app/api.php: rotas para o CRUD : Livro, Testamento, Versiculo

- na API conseguimos ver o db com os métodos CRUD funcionando certinho 
  
<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="biblia_sqlyog" title="#biblia_sqlyog" src="./.github/biblia_sqlyog.jpg">
</p>     

#### Detalhes 

Projeto construído a partir da orientação do curso na [Udemy](https://www.udemy.com/course/api-rest-com-laravel-9-na-pratica/)

Seguindo as requisições especificadas no documento para criar a [API Rest](https://candied-gooseberry-205.notion.site/Criando-API-REST-com-Laravel-9-606573f493e9494b9b7abc7ac1298828)

Projeto objetivo [laundry backend para nuai technology](https://github.com/nuai-technology/laundry-backend)
