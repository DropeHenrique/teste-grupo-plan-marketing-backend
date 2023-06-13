# Backend - API de Cadastro de Eletrodomésticos

Esta é uma API desenvolvida para o cadastro de eletrodomésticos, permitindo a criação, listagem, edição e remoção de registros. Foi desenvolvida como parte de um teste para a vaga de Desenvolvedor Fullstack (PHP).

## Requisitos Técnicos

- Linguagem de programação: PHP (versão 7.3 ou superior)
- Framework: Laravel (versão 6 ou superior)
- Banco de dados: Relacional (não especificado)

## Configuração do Ambiente

Siga as instruções abaixo para configurar o ambiente de desenvolvimento:

1. Instale o PHP na versão 7.3 ou superior.
2. Instale o framework Laravel na versão 6 ou superior.
3. Configure um banco de dados relacional (MySQL, PostgreSQL, etc.) e atualize as configurações de conexão no arquivo `.env`.
4. Clone o repositório do projeto:

git clone <URL_DO_REPOSITÓRIO>


1. Instale as dependências do projeto utilizando o Composer:
   `composer install`
2. Execute as migrações do banco de dados para criar a tabela `appliances`:
   `php artisan migrate`
3. Inicie o servidor local:
   `php artisan serve`


## Rotas

A API disponibiliza as seguintes rotas:

- `GET /api/appliances`: Retorna a lista de todos os eletrodomésticos cadastrados.
- `POST /api/appliances`: Cria um novo registro de eletrodoméstico.
- `GET /api/appliances/{id}`: Retorna os detalhes de um eletrodoméstico específico.
- `PUT /api/appliances/{id}`: Atualiza um eletrodoméstico existente.
- `DELETE /api/appliances/{id}`: Remove um eletrodoméstico existente.

## Exemplos de Requisições

- Exemplo de requisição GET para listar todos os eletrodomésticos:

GET /api/appliances


Resposta:

```json
[
  {
    "id": 1,
    "name": "Geladeira Frost Free",
    "description": "Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir.",
    "voltage": "220v",
    "brand": "Electrolux",
    "created_at": "2023-06-13T12:00:00.000000Z",
    "updated_at": "2023-06-13T12:00:00.000000Z"
  },
  {
    "id": 2,
    "name": "Máquina de Lavar",
    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "voltage": "110v",
    "brand": "Brastemp",
    "created_at": "2023-06-13T12:00:00.000000Z",
    "updated_at": "2023-06-13T12:00:00.000000Z"
  }
]
```
## Testes


O projeto inclui testes unitários implementados com o PHPUnit. Para executar os testes, execute o seguinte comando:

`vendor/bin/phpunit`

Certifique-se de que o ambiente esteja configurado corretamente antes de executar os testes.

## Docker

O projeto inclui um arquivo Dockerfile e um arquivo docker-compose.yml para facilitar a execução da aplicação em um ambiente Dockerizado. Siga as instruções abaixo para usar o Docker:

### Pré-requisitos

Certifique-se de ter o Docker e o Docker Compose instalados na sua máquina.

### Construção e execução do contêiner

1. No diretório raiz do projeto, abra um terminal e execute o seguinte comando para construir a imagem do Docker:

`docker-compose build`


2. Após a conclusão da construção, execute o seguinte comando para iniciar o contêiner:

`docker-compose up`


Isso iniciará o servidor PHP-FPM dentro do contêiner e exporá a porta 8000 do contêiner para a porta 8000 do host.

### Acesso à aplicação

A aplicação estará disponível no seguinte endereço:

`http://localhost:8000`


### Configurações do Banco de Dados

O Docker Compose também inicia um contêiner do MySQL com as seguintes configurações:

- Host: `db`
- Porta: `3307`
- Banco de dados: `laravel`
- Usuário: `laravel_user`
- Senha: `secret`

Certifique-se de que essas configurações estejam corretas no arquivo `.env` do projeto Laravel.

### Comandos Úteis

- Para parar a execução do contêiner, execute o seguinte comando:
  `docker-compose down`


- Para executar comandos dentro do contêiner, use o seguinte formato:

`docker-compose exec <nome_do_serviço> <comando>`


Por exemplo, para executar as migrações do banco de dados, você pode usar:

`docker-compose exec app php artisan migrate`
