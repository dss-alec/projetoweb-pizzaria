# 🚀 Guia de configuração - Linux / macOS

## Clonar e rodar o projeto

1. Crie um arquivo chamado `setup_linux.sh` com o conteúdo abaixo:

```bash
#!/bin/bash

# Defina seu usuário e repositório do GitHub
GITHUB_USER="SEU_USUARIO"
REPO_NAME="NOME_DO_REPO"

echo "Clonando repositório..."
git clone https://github.com/$GITHUB_USER/$REPO_NAME.git
cd $REPO_NAME || exit

echo "Instalando dependências PHP e Node..."
composer install
npm install

echo "Configurando ambiente..."
cp .env.example .env
php artisan key:generate

echo "Rodando migrations..."
php artisan migrate
php artisan db:seed

echo "Iniciando servidor Laravel..."
php artisan serve

2. Execute no terminal:

chmod +x setup_linux.sh
./setup_linux.sh
