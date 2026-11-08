# 🎓 Gestão Escolar

Sistema de gestão escolar em PHP para cadastrar, listar e remover alunos (com telefones), usando PDO e uma estrutura em camadas inspirada em DDD.

## 📌 Sobre

Projeto de estudo de PHP orientado a objetos. O domínio (`Student`, `Phone`) fica separado da infraestrutura de persistência (repositório PDO), o que facilita trocar o banco de dados.

## 🚀 Funcionalidades

- ➕ Inserir aluno (`InserirAluno.php`)
- 📋 Listar alunos (`Lista_alunos.php`)
- 📞 Aluno com telefone (`Aluno_com_telefone.php`)
- 🗑️ Remover aluno (`removeAluno.php`)
- 🏫 Criar turma com transação (`Criar_turma.php`)

## 🧱 Estrutura

```text
src/
├── Domain/
│   ├── model/            # Student, Phone
│   └── Repository/       # StudentRepository (interface)
└── Infrastructure/
    ├── Persistence/      # ConnectionCreator (conexão PDO)
    └── Repository/       # PdoStudentRepository
```

## 🛠️ Tecnologias

| Tecnologia | Uso |
| --- | --- |
| PHP | Linguagem principal |
| PDO | Acesso ao banco de dados |
| Composer | Autoload PSR-4 (`CleversonUnitop\GestaoEscolar`) |

## ▶️ Como executar

```bash
git clone https://github.com/cleversonNobrega/Gestao_Escolar.git
cd Gestao_Escolar
composer install
php Lista_alunos.php
```

> Configure a conexão com o banco em `src/Infrastructure/Persistence/ConnectionCreator.php` antes de executar.

## 👤 Autor

Cleverson Nobrega — [@cleversonNobrega](https://github.com/cleversonNobrega)
