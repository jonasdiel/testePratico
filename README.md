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
    `docker exec -it testepratico_workspace_1 cp .env.example .env`
- Gerar chave de segurança
    `docker exec -it testepratico_workspace_1 php artisan key:generate`
- Acessando aplicação: http://localhost/    
