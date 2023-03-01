## Resumo

O projeto dividido em duas partes beckend e frontend. Backnend usando nestjs como framework, usando mongodb websocket e outros recusos que o framework oferece e o Frontend usando ReactJS com typescript como framework.

## Requisitos

- Docker
- Docker-compose

## Instalar API

Passo para rodar a API.

1. Entre na pasta **`backend`**
2. Rodar o comando
   1. Linux: **`copy .env.example .env`** no terminal
   2. Windows
3. Abra o copie o arquivo .env e configure as variáveis
   - DB_HOST
   - DB_PORT
   - DB_DATABASE
   - DB_USERNAME
   - DB_PASSWORD
4. Rodar o comando **`docker-compose up -d --build`** no terminal

URLs

- API home - http://localhost:8000

## Instalar Frontend

Passo para rodar a API.

1. Entre na pasta **`frontend`**
2. Rodar o comando **`docker-compose up -d --build`** no terminal

URLs

- App home - http://localhost:5173
