## Instalação

Teste Prático de PHP para novos Colaboradores

## Pré-requisito

- Docker e docker-compose
- Ambiente de desenvolvimento docker com [Laradock](https://laradock.io/).

## Executando

- Clonar repositório incluindo submódulos:

    `git clone --recurse-submodules https://github.com/jonasdiel/testePratico.git`

- Acessar diretório do projeto:

    `cd testePratico/`
- Executar containers:

    `./run`
- Instalar dependências

    `docker exec -it testepratico_workspace_1 composer install`    
- Copiar arquivo de configuração    

    `cp env_laradock laradock/.env`
    
    `cp .env.example .env`
- Gerar chave de segurança

    `docker exec -it testepratico_workspace_1 php artisan key:generate`
- Executar migrations da base de dados

    `docker exec -it testepratico_workspace_1 php artisan migrate`
- Inserir lista de especialidades com seeds

    `docker exec -it testepratico_workspace_1 php artisan db:seed --class=Especialidades`
- Obter ip do contaner NGINX para informar na configuração
    `docker inspect testepratico_nginx_1 | grep  '"IPAddress": "'`    

- Alterar arquivo .env e alterar APP_URL para o client API resolver internamente
    `APP_URL=http://192.168.160.6`
    
- Para executar os testes da API

    `docker exec -it testepratico_workspace_1 php artisan test`
    
- Acessando aplicação: http://localhost/    
