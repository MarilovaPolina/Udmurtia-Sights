# Udmurtia-Sights
Команда Авитаминоз. Инструкция:

Модули: 
  HTTP: Apache_2.4-PHP_7.2-7.4+Ngnx_1.23
  PHP: PHP_7.4
  MySQL/MariaDB: MySQL-8.0-Win10
  PostgreSQL: —
  MongoDB: —
  Memcached: —
  Redis: —
  DNS: —

Подключение базы данных (app/database/connect.php):
  $driver = 'mysql';
  $host = 'localhost';
  $db_name = 'udm';
  $db_user = 'root';
  $db_pass = '';
  $charset = 'utf8';

На локальном сервере в папку "localhost" переместить файлы из репозитория. 
В PhpMyAdmin войти в аккаунт с именем пользователя "root" и без пароля. 
Там создать базу данных "udm", импортировать в нее файл "udm.sql" из репозитория.
Готово.

Главный администратор сайта: 
  Логин: MAdmin1
  Пароль: 11111
Администратор сайта: 
  Логин: miniAdmin
  Пароль: 22222
