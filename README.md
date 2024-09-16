# CondoMaster

**CondoMaster** é uma plataforma completa de administração para síndicos de condomínios, com suporte a versões mobile, desktop e web. A aplicação oferece uma interface intuitiva e ferramentas poderosas para auxiliar na gestão de condomínios.

## Tecnologias Utilizadas
- **Front-end:** Vue.js
- **Back-end:** Python (Flask/Django)
- **API:** Python (Flask/Django)
- **Banco de Dados:** MySQL
- **Desktop:** C# com WPF/WinForms
- **Mobile:** Xamarin (C#)
- **OnePage e Site Institucional:** Bootstrap

## Estrutura do Projeto

```
/CondoMaster
│
├── /frontend          # Aplicação Frontend Vue.js
│   ├── /public        # Arquivos públicos (imagens, ícones, etc.)
│   ├── /src           # Código-fonte da aplicação
│   │   ├── /assets    # Estilos e assets como CSS, imagens
│   │   ├── /components # Componentes Vue.js
│   │   ├── /views     # Páginas Vue.js
│   │   ├── App.vue    # Componente raiz
│   │   ├── main.js    # Arquivo principal da aplicação
│   └── package.json   # Dependências do projeto Vue.js
│
├── /backend           # Aplicação Backend Python (API)
│   ├── /app           # Código-fonte do backend
│   │   ├── /models    # Modelos do banco de dados
│   │   ├── /routes    # Rotas da API
│   │   ├── /controllers # Lógica de negócio
│   │   ├── __init__.py # Inicializador do app Flask/Django
│   ├── requirements.txt # Dependências do Python
│   └── manage.py      # Arquivo de entrada do framework
│
├── /database          # Scripts e Configurações do Banco de Dados
│   ├── schema.sql     # Estrutura do banco de dados MySQL
│   ├── migrations/    # Migrações de banco de dados
│
├── /docs              # Documentação do Projeto
│   ├── README.md      # Informações gerais do projeto
│   ├── API.md         # Documentação da API
│
├── /tests             # Testes automatizados para backend e frontend
│   ├── /unit          # Testes unitários
│   ├── /integration   # Testes de integração
│
├── /config            # Arquivos de configuração
│   ├── .env           # Variáveis de ambiente (configuração da API, banco, etc.)
│   └── settings.py    # Configurações gerais do app (backend)
│
└── docker-compose.yml # Arquivo Docker para configuração de ambientes (opcional)
```

## Funcionalidades
- Gestão completa de condomínios, com controle de unidades, moradores e despesas.
- Ferramentas de comunicação entre síndicos e condôminos.
- Versão mobile para gestão em tempo real.
- Dashboard intuitiva com relatórios e gráficos.
- Integração com banco de dados relacional MySQL.

## Instalação e Configuração

### Pré-requisitos
- **Node.js** (para front-end)
- **Python 3.8+** (para back-end)
- **MySQL** (para banco de dados)
- **.NET SDK** (para aplicação desktop e mobile)
- **Docker** (opcional, para ambiente de desenvolvimento)

### Passos para rodar o projeto

1. **Clone o repositório:**
    ```bash
    git clone https://github.com/usuario/CondoMaster.git
    ```

2. **Front-end (Vue.js):**
    ```bash
    cd frontend
    npm install
    npm run serve
    ```

3. **Back-end (Python):**
    ```bash
    cd backend
    python -m venv venv
    source venv/bin/activate  # ou `venv\Scripts\activate` no Windows
    pip install -r requirements.txt
    python manage.py runserver
    ```

4. **Banco de Dados (MySQL):**
    - Crie o banco de dados e configure as credenciais no arquivo `.env`.
    ```bash
    mysql -u root -p
    CREATE DATABASE condodb;
    ```

5. **Testes:**
    - Para rodar os testes, execute:
    ```bash
    cd tests
    pytest
    ```

## Prazos de Desenvolvimento

| Fase                        | Duração Estimada |
| --------------------------- | ---------------- |
| Configuração do Ambiente    | 1 semana         |
| Front-end Vue.js            | 6 semanas        |
| Back-end Python e API       | 9 semanas        |
| Banco de Dados MySQL        | 4 semanas        |

## Contribuição
Se você deseja contribuir com o projeto, faça um fork do repositório, crie uma branch, e envie seu pull request.

---

Se precisar de mais informações ou tiver dúvidas, entre em contato!
