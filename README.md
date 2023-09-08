<p>a personal blog built using :
php (Laravel),
Javascript,
Tailwind CSS ,
i mostly use Mysql for my databases management but in this project i used sqlite to make the project easier to upload in github,
i used Tailwind authentication for users registery and login,
to run the project on the local server you have to download node js and php then go to .env file in the root dir and edit to the project location DB_DATABASE = ./../../blog/database/blog-db.sqlite
then run in terminal :</p>
"<p>php artisan migrate:install --database=sqlite</p>"
"<p>php artisan migrate</p>"
"<p>npm i</p>"
"<p>npm run watch</p>"
"<p>php artisan serve</p>"
