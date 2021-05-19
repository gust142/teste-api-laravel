# desafio

API de controle de movimentações (saque e depósito) desenvolvido em Laravel 7.x com banco de dados SQLite.

## Iniciando a configuração

A seguir serão mostradas todas as informações para a execução do projeto.

## Pré-requisitos

Composer - https://getcomposer.org/

PHP - https://www.php.net/manual/

Laravel - https://laravel.com/docs/7.x/installation

### Installing

Após clonar o projeto, com o PHP e o Composer instalado na máquina, execute o seguinte comando dentro do diretório do projeto:
```
composer install
```

O comando acima irá baixar todas as dependências para execução do projeto, após sua conclusão, no diretório do projeto, execute o comando abaixo:

```
php artisan key:generate
```
Após este procedimento, é necessário rodar as migrations, para gerar o banco de dados em sqlite, utilize o seguinte comando abaixo:

```
php artisan migrate
```
Em seguida, execute os seeders desenvolvidos para mock dos dados com o comando abaixo:

```
php artisan db:seed --class=ContaSeeder
php artisan db:seed --class=OperacaoSeeder
```
Após este procedimento, para rodar o projeto, execute o comando abaixo:

```
php artisan serve
```



## Tecnologias utilizadas

* [Laravel](https://maven.apache.org/) - Framework PHP livre e open-source para desenvolvimento de sistemas web em padrão MVC.
* [SQLite](https://www.sqlite.org/index.html) - SQLite é uma biblioteca que implementa um banco de dados SQL embutido.

## Autor

* **Gustavo Gomes Farias** - *Desenvolvedor de software* - [GitHub](https://github.com/gust142/)



