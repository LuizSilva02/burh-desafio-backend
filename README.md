# API de Vagas de Emprego

Este projeto é uma API Restful de cadastro de vagas e candidatura de usuários.

### Ferramentas

[![PHP](https://img.shields.io/badge/PHP-000?style=for-the-badge&logo=php)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-000?style=for-the-badge&logo=postgresql)](https://www.postgresql.org/)
[![Docker](https://img.shields.io/badge/Docker-blue?style=for-the-badge&logo=docker)](https://www.docker.com/)


## Instruções para Configuração e Execução

### Passo a Passo para Configuração

1. **Clone o repositório:**

```bash
git clone https://github.com/Schusban/burh-desafio-backend.git
cd burh-desafio-backend
```


2. **Configure o ambiente:**

Crie um arquivo .env na raiz do projeto com base no arquivo .env.example fornecido. Certifique-se de ajustar as variáveis conforme necessário para o ambiente de desenvolvimento local.

3. **Suba os containers Docker:**
```bash
docker-compose up -d --build
```

**Acesse a API em http://localhost:8000.**

### Dicas para Docker

4. **Parar o container:**
```bash
docker stop <id ou nome>
```

5. **Reiniciar o container:**
```bash
docker start <id ou nome>
```

6.  **Parar todos os serviços e limpar o ambiente Docker local:**
```bash
docker-compose down
```
