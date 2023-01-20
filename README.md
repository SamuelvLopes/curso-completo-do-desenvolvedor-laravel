# curso-completo-do-desenvolvedor-laravel
## comandos
- laravel new app_super_gestao
- php artisan list
- php artisan -V
- php artisan serve
- php artisan serve --port=9000
- php artisan 
- php artisan down 
- php artisan up

## rotas no laravel
 - web
 - api
 - console
 - channels

## Rota Web
## Rota Api
- Não guarda cookie e sessão

## Rota Console
- Serve para comandos personalizados do artisan

## Rota Channels
- WebSocket
## Rota Web
- Para modelo tradicional, Guarda Cookie e sessão

## Principais Verbos Http
- get
- post
- put
- patch
- delete
- options

## Controllers
- Action são metodos dos controladores

### Criação de controller
- php artisan make:controller PrincipalController
- php artisan make:controller ContatoController
- php artisan make:controller SobreNosController

### model com migration
- php artisan make:model Contato -m

### migrations
- php artisan make:migration alter_contato_add_collun_sexo
- php artisan migrate:rollback
- php artisan migrate:rollback --step=2
- php artisan migrate:status 
- php artisan migrate:reset
- php artisan migrate:refresh
- php artisan migrate:fresh


### middleware 
- php artisan make:middleware LogAcessoMiddleware



### Router
- php artisan route:list

### Passar pra view em 
- array associativo
- compact
- with

