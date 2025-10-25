
---

### 3️⃣ README Windows (`README_WINDOWS.md`)

```markdown
# 🚀 Guia de configuração - Windows

## Clonar e rodar o projeto

1. Crie um arquivo chamado `setup_windows.ps1` com o conteúdo abaixo:

```powershell
# Defina seu usuário e repositório do GitHub
$GITHUB_USER = "SEU_USUARIO"
$REPO_NAME = "NOME_DO_REPO"

Write-Host "Clonando repositório..."
git clone https://github.com/$GITHUB_USER/$REPO_NAME.git
Set-Location $REPO_NAME

Write-Host "Instalando dependências PHP e Node..."
composer install
npm install

Write-Host "Configurando ambiente..."
Copy-Item .env.example .env
php artisan key:generate

Write-Host "Rodando migrations..."
php artisan migrate
php artisan db:seed

Write-Host "Iniciando servidor Laravel..."
php artisan serve

# Execute no PowerShell:

.\setup_windows.ps1
