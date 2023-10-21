# Projeto

Tecnologias utilizadas:

- Back-end: PHP.
- Front-end: Svelte, TypeScript.

Funcionamento:

# Rodando o projeto:

Você pode rodar o projeto de duas maneiras:
- Usando Node + PHP.
- Usando Docker.

Se você escolheu rodar com Docker:

# Documentação.

## API.

A API está alocada na porta http://localhost:1010.
As suas funções são: adicionar, atualizar, excluir e listar clientes.

As respectivas rotas para cada função:

### Listar todos os clientes.

`GET /client`

**Resposta (tipos):**

```
{
    "id": int,
    "name": string,
    "email": string,
    "birth": string,
    "phone": string,
    "group": string
} []
```

**Resposta (exemplo):**
```json
[
    {
        "id": 1,
        "name": "Pedro",
        "email": "contatopedrohalves@gmail.com",
        "birth": "2005-07-15",
        "phone": "14981838507",
        "group": "Bronze"
    }
]
```

### Adicionar cliente.

`POST /client`

**Requisição (tipos):**
```
{
    "name": string,
    "email": string,
    "birth": string,
    "phone": string,
    "group": string
}
```

**Requisição (exemplo):**
```json
{
    "name": "Pedro",
    "email": "contatopedrohalves@gmail.com",
    "birth": "2005-07-15",
    "phone": "14981838507",
    "group": "Bronze"
}
```

### Atualizar cliente.

`PUT /client`

**Requisição (tipos):**
```
{
    "id": int,
    "name": string,
    "email": string,
    "birth": string,
    "phone": string,
    "group": string
}
```

**Requisição (exemplo):**
```json
{
    "id": 1,
    "name": "Pedro",
    "email": "contatopedrohalves@gmail.com",
    "birth": "2005-07-15",
    "phone": "14981838507",
    "group": "Bronze"
}
```

### Excluir cliente.

`DELETE /client`

**Requisição (tipos):**
```
{
    "id": int
}
```

**Requisição (exemplo):**
```json
{
    "id": "1"
}
```