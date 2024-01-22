
./vendor/bin/sail artisan migrate:fresh

./vendor/bin/sail artisan shield:install

 ./vendor/bin/sail artisan db:seed --class=GrowthStatusSeeder

 ./vendor/bin/sail artisan db:seed --class=LifeEventSeeder
