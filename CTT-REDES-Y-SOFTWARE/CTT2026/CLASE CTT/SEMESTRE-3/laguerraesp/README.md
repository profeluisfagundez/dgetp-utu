# laguerraesp
La Guerra Española resumida para aplicar los conceptos básicos de POO, Diseño en capas y Patrones de Diseño


## Deployment

Estructura del proyecto

```php
/laguerraesp
├── /app
│   ├── /controllers
│   │   ├── AuthController.php
│   │   ├── PartidaController.php
│   │   ├── JugadorController.php
│   │   └── MazoController.php
│   ├── /models
│   │   ├── CartaModel.php
│   │   ├── MazoModel.php
│   │   ├── JugadorModel.php
│   │   ├── PartidaModel.php
│   ├── /imagenes
│   └── /views
│       ├── /auth
│       │   ├── login.php
│       │   └── register.php
│       ├── /partida
│       │   ├── index.php
│       │   └── result.php
│       ├── /jugador
│       │   └── profile.php
│       ├── /mazo
│       │   └── view.php
│       └── /layouts
│           └── main.php
├── /public
│   ├── /css
│   │   └── style.css
│   ├── /js
│   │   └── script.js
│   └── index.php
├── /config
│   ├── database.php
│   └── config.php
├── /routes
│   └── web.php
└── /tests
    └── AuthTest.php
    └── PartidaTest.php
    └── JugadorTest.php
    └── MazoTest.php
    └── UserTest.php

```
