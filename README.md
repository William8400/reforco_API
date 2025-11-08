# descrição: 

### Esta API gerencia informações sobre bandas musicais.
### Ela permite visualizar, adicionar, editar e remover bandas armazenadas em um arquivo JSON 

## Url http://(seu-dominio.com)/api.php 

### Método GET: ele retorna todas bandas que você quer ou uma específica api.php?banda=Nome_da_Banda

## Exemplos de requisição : 

### api.php?banda=Queen

## Método POST: Ele adiciona uma nova banda no JSON 

## Corpo da Requisição:
```json
{
    "The_Beatles": {
        "origem": "Liverpool, Inglaterra",
        "genero": ["Rock", "Pop"],
        "ano_formacao": 1960,
        "ano_termino": 1970,
        "descricao": "The Beatles foram uma das bandas mais influentes da história da música."
    }
}
```

## Método PUT: Ele atualiza os dados de uma banda ja cadastrada

## Corpo da Requisição:

```json

{
    "Mettalica": {
        "origem": "Los Angeles, EUA",
        "genero": ["Heavy Metal", "Thrash Metal"],
        "ano_formacao": 1981,
        "descricao": "Banda lendária de metal, referência mundial."
    }
}
```

## Exemplo de resposta: 

```json

{
    "mensagem": "Banda 'Mettalica' atualizada com sucesso!"
}

```

## Método DELETE: Ele remove toda a banda que você desejar 

## Exemplo de Requisição: 

```json

{
    "Queen": {}
}

```







