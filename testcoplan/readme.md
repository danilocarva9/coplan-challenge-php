composer install

php artisan migrate:fresh --seed

php artisan key:generate

php artisan storage:link

sudo chgrp -R www-data /var/www/html/your-project

sudo chmod -R 775 /var/www/html/your-project/storage

php artisan migrate
