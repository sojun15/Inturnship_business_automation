## Folder structure of Laravel
- composer.json -> There remain the most important information such as php version, laravel version, dependencies, config and so on.

## vendor folder
- Which types of dependencies name are written into compser.json, package.json file those necessary files are stored into vendor folder.

## app folder
- In app folder there have http, controller, models, providers parts.

## Routes folder
- In routes folder there have web.php file where we write our necessary routes which are used into our project such as home route get('/'), dashboard route get('/dashboard') and so on.

## resource folder
- In resource folder there have views, js, css folder where we keep js files, css files and files which are viewed into browser.

## config folder
- when we will do a project then there need different types of configaration such as database, cache, filesystem, session and so on.

## database folder
- In database folder there have migrations, seeders, factories folders. In migrations folder there have database changes schema and so on.

## public folder
- In public folder there have index.hp file which is executed at first and the icon which we see into title bar.

## tests folder
- In tests folder there have present unit test, feature test code and so on.

## .env file
- In our project there have some sensitive information such as database user_name, password, port, mail_port and so on.

## .gitignore file
- When we deploy our project into github or another platform we want not to go our important files uploads there. For this reason we write those into gitignore file.