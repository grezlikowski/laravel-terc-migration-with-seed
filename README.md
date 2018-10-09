# laravel-terc-migration-with-seed
Bazy danych rejestru TERC - SQL i migracje dla Laravela

## Jak używać?
1. Skopiuj podkatalogi folderu database do swojego projektu Laravel.
1. Wywołaj migracje bazy danych poleceniem: `php artisan migrate`
1. `php artisan db:seed --class=SimcTableSeeder`
1. `php artisan db:seed --class=TercTableSeeder`
1. `php artisan db:seed --class=UlicTableSeeder`

Dane pochodzą z rejestru TERYT: http://eteryt.stat.gov.pl/eTeryt/.