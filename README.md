# Instalação

Para instalar o  projeto, siga estas etapas:

1. Clone o repositório
```bash
git clone https://github.com/Sobin27/laravel_mongo.git
```

2. Instale as dependências
```bash
composer install
```

3. Copie o arquivo `.env.example` e renomeie para `.env`
```bash
cp .env.example .env
```

4. Gere a chave da aplicação
```bash
php artisan key:generate
```

5. Configure o Mongo no arquivo `.env`
```
DB_CONNECTION=mongodb

MONGO_DB_HOST=host.docker.internal ou localhost (caso não esteja utilizando docker.)
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=name_database
MONGO_DB_USERNAME=name_user
MONGO_DB_PASSWORD=password
```

## Docker
Caso queira utilizar o docker, basta rodar o comando abaixo:
```bash
docker build -t laravel_mongo "caminho_da_aplicação"
```
Após buildar a imagem, rode o comando abaixo:
```bash
docker run -d -p 8000:80 laravel_mongo
```
