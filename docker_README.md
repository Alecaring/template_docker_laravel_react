### controllare docker se è installato sulla macchina 
``` bash
docker -v   # controllo di versione
```

### procedere all'istallazione di laravel sail
``` bash
composer require laravel/sail --dev   # installare solo nell'ambiente di sviluppo
```

### dopo aver installato sail pubblichiamo lo script
``` bash
php artisan sail:install
```

### selezionare le opzioni desiderate 
``` bash
 Which services would you like to install?
  [0] mysql
  [1] pgsql
  [2] redis
  [3] meilisearch
  [4] mailhog
  [5] selenium
 > 
# esempio per selezionare mysql e redis ( 0,2 )
```

### Avvia Docker e Sail
``` bash
./vendor/bin/sail up
```
``` bash
./vendor/bin/sail up -d # avvia tutto in un ambiente separato
```

### Avvia Docker e Sail
```
./vendor/bin/sail up
```