# Laravel PHP Framework


plicação Heroku rodando https://laravelpoke.herokuapp.com/

 
A aplicação seria:
Uma API onde o usuário interage com POSTMAN, lendo em JSON e possui as seguintes rotas:
 
POST    https://laravelpoke.herokuapp.com/api/cadastro
{
        "name": "pokemon",
        "email": "buferze@gmail.com",
        "password": 123456789
}


POST    https://laravelpoke.herokuapp.com/api/login
{
  "email": "buferze@gmail.com",
  "password": "123456789"
}

GET     https://laravelpoke.herokuapp.com/api/pokemon - lista todos os pokemons do banco de dados;
utilizando token: Bearer eyJ0eXAiOiJKV1QiLCJhbG  exemplo sera gerado no login

GET     https://laravelpoke.herokuapp.com/api/pokemon/:id - mostra os detalhes de um pokemon;
utilizando token: Bearer eyJ0eXAiOiJKV1QiLCJhbG  exemplo sera gerado no login


POST    https://laravelpoke.herokuapp.com/api/pokemon 
- cadastra um novo pokemon com nome, tipo do pokemon, poder de ataque, poder de defesa e agilidade;
utilizando token: Bearer eyJ0eXAiOiJKV1QiLCJhbG  exemplo sera gerado no login
{
  "name": "string",
  "tipo": "string",
  "poderatack": 0,
  "poderdefesa": 0,
  "agilidade": 0
}


PUT     https://laravelpoke.herokuapp.com/api/pokemon/:id - altera os dados do pokemon;
utilizando token: Bearer eyJ0eXAiOiJKV1QiLCJhbG  exemplo sera gerado no login
{
  "name": "string",
  "tipo": "string",
  "poderatack": 0,
  "poderdefesa": 0,
  "agilidade": 0
}

DELETE  https://laravelpoke.herokuapp.com/api/pokemon/:id - remove um pokemon;
utilizando token: Bearer eyJ0eXAiOiJKV1QiLCJhbG  exemplo sera gerado no login
 

