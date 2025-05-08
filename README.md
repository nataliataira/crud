# 📝 CRUD em PHP com Armazenamento em JSON

Este projeto é uma aplicação simples de CRUD (Create, Read, Update, Delete) desenvolvida em PHP, que utiliza um arquivo JSON para armazenar os dados. É uma ótima opção para aprender os conceitos básicos de manipulação de dados sem a necessidade de um banco de dados tradicional.

---

## 📁 Estrutura do Projeto

```
crud/
├── html-part/
│   └── _form.php
├── users/
│   └── users.json
├── create.php
├── delete.php
├── index.php
├── update.php
└── view.php
```

- **`html-part/_form.php`**: Contém o formulário reutilizável para criação e edição de usuários.
- **`users/users.json`**: Arquivo que armazena os dados dos usuários em formato JSON.
- **`create.php`**: Lida com a criação de novos usuários.
- **`delete.php`**: Responsável por excluir usuários existentes.
- **`index.php`**: Página principal que lista todos os usuários.
- **`update.php`**: Permite a edição dos dados de um usuário.
- **`view.php`**: Exibe os detalhes de um usuário específico.

---

## 🚀 Como Executar

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/nataliataira/crud.git
   ```

2. **Navegue até o diretório do projeto:**

   ```bash
   cd crud
   ```

3. **Inicie o servidor embutido do PHP:**

   ```bash
   php -S localhost:8000
   ```

4. **Acesse a aplicação no navegador:**

   ```
   http://localhost:8000
   ```

---

## 🧪 Funcionalidades

- **Criar**: Adicionar novos usuários preenchendo o formulário.
- **Ler**: Listar todos os usuários cadastrados na página principal.
- **Atualizar**: Editar as informações de um usuário existente.
- **Excluir**: Remover um usuário do sistema.

---

## 📌 Observações

- Os dados são armazenados no arquivo `users/users.json`.
- Certifique-se de que o servidor tenha permissões de escrita neste arquivo.
- O projeto não utiliza banco de dados; ideal para fins educacionais e pequenos projetos.

---

## 📜 Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais informações.

---

> Projeto desenvolvido por [Natalia Taira](https://github.com/nataliataira).
