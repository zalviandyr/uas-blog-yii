# YII Framework

## Documentation

-   [Pembuatan Blog - Part 1](./docs/blog-part-1.md)
-   [Pembuatan Blog - Part 2](./docs/blog-part-2.md)
-   [Pembuatan Blog - Part 3](./docs/blog-part-3.md)
-   [Pembuatan Blog - Part 4](./docs/blog-part-4.md)

## Installation

-   Clone this repository
-   Open with text editor
-   Install all dependencies
    ```bash
    > composer install
    ```
-   Initialization

    ```bash
    > php init
    ```

-   Open **main-local** in `common/config`, to pretty url

    ```php
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false
    ],
    ```

-   Open **main-local** in `common/config`, to setting database
    ```php
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=<your_database>',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],
    ```
-   Migrate database
    ```bash
    > php yii migrate
    ```

## Run

-   Run use local development PHP
    ```bash
    > php -S 127.0.0.1:8000 -t frontend/web
    ```
-   You can access `127.0.0.1:8000` in browser
