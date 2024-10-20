impostiamo i dati nel file .env 
- porta
- nome db
- username e password
installare il pacchetto di autenticazione
installare laravel breeze

```bash
composer require laravel/breeze --dev
```

dopo di che 

```bash
php artisan breeze:install
```

scegliere alpine nel terminale

poi "phpUnit"

cacellare nel package.json le dipendeze inutile 
fare npm i
cancellare cartella node_modules e package-lock.json
e fare npm i


npm i --save-dev sass

npm install bootstrap@5.3.3

cancellare :
file tailwind.config.js 
file postcss.config.js 

nel /resouces rinominimo i file css
pulire il file .scss
in app.js togliere 
"import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();"

nel file vite.config.js
modificare il file di stile in scss


il nostro file vite.config.js sarà cosi :
```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            '~resources' : '/resources'
        }
    }
});
```
in app.scss
@import "~bootstrap/scss/bootstrap";

in app.js
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

cancellare la cartella views in resouces

e importare la caretlla nuova controlla nel mamp/htdocs

far partire entrambi i server 

fare php artisan migrate