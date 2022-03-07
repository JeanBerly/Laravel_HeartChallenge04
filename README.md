<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h1>Pokedéx</h1>
Neste projeto você pode cadastrar um usuário e posteriormente logar com ele, podendo adicionar pokemons em seu registro, tudo isso fica guardado
em um banco de dados.

## Quero rodar em minha máquina, como fazer?

Primeiro irá ser necessário iniciar um projeto laravel. Para isso, veja a documentação do laravel neste link: https://laravel.com/docs/9.x/installation

### Passo 1:
Vá no arquivo .env.example e o renomeie para .env.
Neste arquivo você precisa alterar os seguintes campos:<br>

### Nome do seu banco de dados:<br>

DB_CONNECTION=mysql<br>
### Se quiser rodar localmente mantenha este ip:<br>
DB_HOST=127.0.0.1<br>
### Veja qual porta seu banco de dados utiliza, no caso do MYSql por padrão é a 3306<br>
DB_PORT=3306<br>
### Nome do banco de dados onde as tabelas são guardadas. (Se não tiver abra o terminal no mysql e escreva "CREATE DATABASE Nome_que_voce_quiser";<br>
DB_DATABASE=laravel<br>
### Username para utilizar seu banco de dados(por padrão é root)
DB_USERNAME=root<br>
### Senha do banco de dados
DB_PASSWORD=

### Passo 2:

Abra seu terminal no diretório do projeto, e escreva o seguinte comando:

#### php artisan migrate

### Após isso, rode este comando que irá popular a sua tabela Pokemons.

#### php artisan DB:seed

Agora seu projeto está pronto para iniciar.

## Imagens do projeto: 

