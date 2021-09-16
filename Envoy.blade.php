* -A in SSH enables agent forwarding.
* -p 2122 is not needed if you use the default port of 22.
* Replace SSH_USER and example.com with your own values.
* Example run: $ envoy run deploy_demo
* --no-scripts because Laravel composer.json's post-install-cmd includes optimize, which is already done by php artisan dump-autoload
 
@servers(['test' => '-A -p 2122 -l user test.example.com', 'prod' => '-A -p 2122 -l user example.com'])

@task('install_test', ['on' => ['test']])
    cd project
    git clone git@bitbucket.org:example/example.com.git .
    composer install -n --no-dev --no-scripts
    php artisan dump-autoload
    php artisan migrate
    chmod -R 0777 public/upload app/storage
@endtask

@task('install_prod', ['on' => ['prod']])
    cd project
    git clone git@bitbucket.org:example/example.com.git .
    composer install -n --no-dev --no-scripts
    php artisan dump-autoload
    php artisan migrate
    chmod -R 0777 public/upload app/storage
@endtask

@task('deploy_test', ['on' => ['test']])
    cd project
    git pull origin
    composer install -n --no-dev --no-scripts
    php artisan dump-autoload
    php artisan migrate
@endtask

@task('deploy_prod', ['on' => ['prod']])
    cd project
    git pull origin
    composer install -n --no-dev --no-scripts
    php artisan dump-autoload
    php artisan migrate
@endtask