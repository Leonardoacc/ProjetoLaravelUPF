
# Documentação do Sistema de Locadora de Filmes

## Índice
1. [Visão Geral](#visão-geral)
2. [Funcionalidades](#funcionalidades)
3. [Tecnologias Utilizadas](#tecnologias-utilizadas)
4. [Requisitos](#requisitos)
5. [Instalação e Configuração](#instalação-e-configuração)
6. [Estrutura do Projeto](#estrutura-do-projeto)
7. [Fluxo de Uso](#fluxo-de-uso)
8. [Rotas e Controllers](#rotas-e-controllers)
9. [Pontos de Estilo e Layout](#pontos-de-estilo-e-layout)

---

## 1. Visão Geral
O **Sistema de Locadora de Filmes** é uma aplicação web desenvolvida em PHP usando o framework **Laravel**. Ele gerencia um catálogo de filmes, clientes, funcionários, locações e pagamentos de forma eficiente.

O objetivo principal é proporcionar uma interface intuitiva para gerenciar operações diárias da locadora, como registro de clientes, filmes, e controle de locações.

---

## 2. Funcionalidades

- **Gerenciamento de Filmes:**
  - Cadastro, edição e exclusão de filmes.
  - Visualização da lista de filmes disponíveis.

- **Gerenciamento de Categorias:**
  - Organização dos filmes por categorias.

- **Gerenciamento de Clientes:**
  - Cadastro de clientes, atualização de informações e exclusão.

- **Gerenciamento de Funcionários:**
  - Controle de funcionários responsáveis pela locadora.

- **Controle de Locações:**
  - Registro de filmes alugados e controle de devoluções.

- **Gestão de Pagamentos:**
  - Controle de pagamentos realizados pelos clientes.

- **Autenticação e Controle de Acesso:**
  - Sistema de login e registro.
  - Acesso restrito às operações de gerenciamento.

---

## 3. Tecnologias Utilizadas

- **Linguagem:** PHP 8.2
- **Framework:** Laravel 11
- **Banco de Dados:** PostgreSQL
- **Front-end:**
  - Bootstrap 4.5 para estilos e layout responsivo.
  - Font Awesome para ícones.
- **Servidor:** Artisan (embutido no Laravel).

---

## 4. Requisitos

- PHP >= 8.2
- Composer
- PostgreSQL
- Node.js (para gerenciamento de dependências front-end)
- Extensão `pdo_pgsql` habilitada no PHP.

---

## 5. Instalação e Configuração

1. **Clone o Repositório:**
   ```bash
   git clone <seu-repositorio-url>
   cd locadora-filmes
   ```

2. **Instale Dependências Back-end:**
   ```bash
   composer install
   ```

3. **Instale Dependências Front-end:**
   ```bash
   npm install
   npm run dev
   ```

4. **Configuração do Banco de Dados:**
   - Crie um banco de dados PostgreSQL.
   - Configure o arquivo `.env`:
     ```
     DB_CONNECTION=pgsql
     DB_HOST=127.0.0.1
     DB_PORT=5432
     DB_DATABASE=locadora
     DB_USERNAME=seu_usuario
     DB_PASSWORD=sua_senha
     ```

5. **Execute as Migrações:**
   ```bash
   php artisan migrate
   ```

6. **Inicie o Servidor:**
   ```bash
   php artisan serve
   ```

7. Acesse a aplicação em `http://127.0.0.1:8000`.

---

## 6. Estrutura do Projeto

### Diretórios e Arquivos Importantes:
- **`app/Models`**: Modelos representando tabelas do banco de dados.
- **`app/Http/Controllers`**: Contém a lógica dos controladores.
- **`resources/views`**: Arquivos Blade para as views.
- **`routes/web.php`**: Define as rotas principais do sistema.
- **`public/css/app.css`**: Estilo customizado.

---

## 7. Fluxo de Uso

### Acessar o Sistema:
1. Ao acessar o sistema pela URL inicial (`http://127.0.0.1:8000`), você será redirecionado para a tela de login.
2. Caso não tenha um usuário, utilize a página de registro para criar uma conta.

### Após Login:
- A interface exibe botões para gerenciar **clientes**, **filmes**, **categorias**, **funcionários**, **locações** e **pagamentos**.
- Cada botão redireciona para a funcionalidade correspondente.

### Operações CRUD:
- Para cada funcionalidade (como Filmes ou Clientes), é possível:
  - Adicionar um novo item.
  - Editar um item existente.
  - Visualizar detalhes de um item.
  - Excluir itens.

---

## 8. Rotas e Controllers

### Rotas de Autenticação:
- **Login:** `GET /login` e `POST /login`
- **Registro:** `GET /register` e `POST /register`
- **Logout:** `POST /logout`

### Rotas CRUD:
| Entidade       | Método  | URL                | Controller           | Método no Controller    |
|----------------|---------|--------------------|----------------------|-------------------------|
| Clientes       | GET     | `/clientes`        | ClienteController    | `index`                 |
|                | POST    | `/clientes`        | ClienteController    | `store`                 |
|                | GET     | `/clientes/{id}`   | ClienteController    | `show`                  |
|                | PUT     | `/clientes/{id}`   | ClienteController    | `update`                |
|                | DELETE  | `/clientes/{id}`   | ClienteController    | `destroy`               |
| Funcionários   | [idem acima] | `/funcionarios`   | FuncionarioController |                         |
| Filmes         | [idem acima] | `/filmes`         | FilmeController       |                         |
| Locações       | [idem acima] | `/locacoes`       | LocacaoController     |                         |
| Pagamentos     | [idem acima] | `/pagamentos`     | PagamentoController   |                         |

---

## 9. Pontos de Estilo e Layout

### Layout Principal:
- Arquivo: `resources/views/layouts/app.blade.php`.
- Inclui cabeçalho com navegação, rodapé e área para conteúdo dinâmico.

### Home:
- Estilo responsivo com Bootstrap 4.
- Botões coloridos para cada funcionalidade.

### Detalhes:
- Design consistente em todas as páginas.
- Ícones fornecidos pelo Font Awesome.
- Footer padrão com direitos reservados.

---

## Próximos Passos
- Implementar relatórios para análise de dados da locadora.
- Adicionar sistema de busca para melhorar a navegação.
- Personalizar mais o design visual para melhor experiência do usuário.
