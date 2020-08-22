<p align="center"><img src="https://painel.avdesign.com.br/img/logo/login-title.png"></p>

>

## Empresa: ÓRIGO ENERGIA  

Tecnologia: Laravel framework, HTML e Vue.

- [Veja uma demonstração online](https://www.avdesign.com.br/demo/origo).


## Instalação back-end
* Baixe os arquivos, no terminal, acesse a back-end e digite os comandos:
````
$ composer update
$ cp .env.example .env
$ php artisan key:generate
````
* Configure sua conexão no arquivo .env
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db-name
DB_USERNAME=user-name
DB_PASSWORD=password-secret
````

## Instalação front-end
* Baixe os arquivos, no terminal, acesse a front-end e digite os comandos:

## Configuração do projeto
```
npm install
```
### Compilar e recarregar  em desenvolvimento
```
npm run serve
```
### Compilar minimizado para produção
```
npm run build
```
### Verificar se existe erros
```
npm run lint
```
## Demonstração

Veja uma demonstração funcionando [Aqui](https://www.avdesign.com.br/demo/admin).
