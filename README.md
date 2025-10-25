# 📌 Guia de Colaboração - Projeto Laravel

## Estrutura do projeto

O projeto contém:

app/
bootstrap/
config/
database/
public/
resources/
routes/
tests/
composer.json
composer.lock
package.json
package-lock.json
.env.example
README.md



### O que **não enviar** para o GitHub

- `vendor/` → dependências do PHP  
- `node_modules/` → dependências do Node.js  
- `.env` → contém dados sensíveis (senhas, chaves, etc.)

> Essas pastas podem ser recriadas em qualquer máquina usando os comandos abaixo.

---

## Passo 1: Clonar o repositório

### Linux / macOS

```bash
git clone https://github.com/SEU_USUARIO/NOME_DO_REPO.git
cd NOME_DO_REPO

composer install      # instala dependências do Laravel
npm install           # instala dependências do frontend

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan db:seed   # opcional, se houver seeds

php artisan serve

---

## Passo 1: Clonar o repositório

### Windows

git clone https://github.com/SEU_USUARIO/NOME_DO_REPO.git
cd NOME_DO_REPO

composer install
npm install

copy .env.example .env
php artisan key:generate

php artisan migrate
php artisan db:seed   # opcional, se houver seeds

php artisan serve
