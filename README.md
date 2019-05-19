# Sistema gerenciador de tarefas

A aplicação utiliza o [CakePHP](https://cakephp.org) 3.x.

## Instalação

### Utilizando docker

1. Instalar o [Docker](https://docs.docker.com/install) ou se preferir instalar pelo [script](https://github.com/docker/docker-install)
2. Instalar o [docker compose](https://docs.docker.com/compose/install/)

Com o docker e docker compose instalado você ira executar o seguinte comando
```bash
sudo docker-compose up -d
```
Logo apos de baixar a imagens, você terá que baixar as dependencias do CakePHP
```bash
sudo docker exec -it testePratico composer install
```
Com pacotes baixados rodar comando para criar banco de dados
```bash
sudo docker exec -it testePratico ./bin/cake migrations migrate
```
Acesse [locahost:9008](http://locahost:9008/) ou seuip:9008, que foi definido no docker-compose.yml

### Utilizando a própria maquina
### Requisitos para instalar o cakePHP
- HTTP Server. Por exemplo: Apache. De preferência com mod_rewrite ativo, mas não é obrigatório.
- PHP 5.6.0 ou superior.
- Extensão mbstring
- Extensão intl

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) ou update `composer self-update`.
2. Instalar o [Mysql](https://www.digitalocean.com/community/tutorials/como-instalar-o-mysql-no-ubuntu-18-04-pt) ou [Mysql para window](https://dev.mysql.com/downloads/windows/)

Apos instalar o banco de dados crie seu banco de dados, por exemplo.
```bash
CREATE DATABASE testePratico;
```

Você terá que baixar as dependencias do CakePHP
```bash
sudo composer install
```
Apos isso edite o arquivo `config/app.php` procure por `'Datasources'` e mude de acordo com o banco de dados que você criou.

Quando configurar o app.php, crie as tabelas com o comando
```bash
bin/cake migrations migrate
```

Agora você pode usar o servidor da sua máquina para exibir a página inicial padrão ou iniciar
o servidor embutido com, por exemplo:

```bash
bin/cake server -p 9008
```
Acesse [locahost:9008](http://locahost:9008/) ou seuip:9008
