#### Trabajos escolares fork from Gitlab

# practica-2-v

## Issue #1

![Issue #1](https://i.imgur.com/HezB3mK.png)

260403f2aa73ae2fd800018843d457f5e7e97f16

## Issue #2
![Issue #2](https://i.imgur.com/w3K078q.gif)

5e6c0acd8315d04ad0b8b44172a8dd1eb0ad1e75

## Issue #3
![Issue #3](https://i.imgur.com/tdaR1Bw.gif)

5e6c0acd8315d04ad0b8b44172a8dd1eb0ad1e75

[HerokuApp](https://practica2-v.herokuapp.com/)

[Cypress](https://dashboard.cypress.io/#/projects/7cmhy1/runs)

## Docker

### Pre-Configuracion

Configurar .env

```ssh
vim ./www/.env
DATABASE_HOST="mysql_db"
DATABASE_NAME="develop"
DATABASE_USER="panda"
DATABASE_PASSWORD="ce61649168c4550c2f7acab92354dc6e"
```

### Development

```ssh
docker-composer up
```