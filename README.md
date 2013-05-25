CrudExampleApp
==============

Sample application to demostrate usage of MvaCrud module

Installation
------------
Clone the repository and manually invoke `composer` using the shipped `composer.phar`:

    cd my/project/dir
    git clone https://github.com/rinomau/CrudExampleApp.git
    cd CrudExampleApp
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar` available.)

Configuration
-------------
Setup doctrine db configuration, create a file `doctrine.local.php` in `config/autolod` containing

    <?php
    return array(
    'doctrine' => array(
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '5432',
                    'user'     => 'postgres',
                    'password' => 'vagrant',
                    'dbname'   => 'crud_example',
                )
            )
        )
    ),
    );

    
