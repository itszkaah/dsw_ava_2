# dsw_ava_2

**Nome Completo**
Karina Meier <br>
**Data**  
06/05/2025 <br>
**Unidade Curricular**
Desenvolver Codigos Web
## O que é uma API REST?
Uma API REST (Representational State Transfer) define um conjunto de princípios para comunicação entre sistemas utilizando requisições HTTP.

## Códigos de Erros HTTP
Os códigos de status HTTP indicam o resultado de uma requisição:
- **200** (OK): Requisição bem-sucedida.
- **404** (Not Found): Recurso não encontrado.
- **500** (Internal Server Error): Erro no servidor.

## Diferença entre JSON, Texto Plano e XML
- **JSON**: Formato leve e estruturado para troca de dados.
- **Texto Plano**: Simples, sem estrutura específica.
- **XML**: Semelhante ao HTML, usado para organização de dados.

## Como testar este projeto?

**Instalar as dependências:**
composer require slim/slim slim/psr7 <br>
**Iniciar o servidor do PHP:**
php -S localhost:8080 <br>
**Testar os Endpoints:** <br>
<em> /uma-api,</em> <br>
{
    "message": "Uma API (Application Programming Interface) é um conjunto de regras que permite a comunicação entre sistemas diferentes."
}
<em> /codigos, </em> <br>
 {
    "message": "Os códigos de status HTTP são usados para indicar o resultado de uma requisição, como 200 (OK), 404 (Not Found) e 500 (Internal Server Error)."
}
<em> /erro </em> <br>
{
    "error": "Não encontrado"
}