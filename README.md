Spevnik spolocenstva Efata
==========================

## Instalacia projektu
Ako pve je treba si naklonovat tento git repozitar
```
git clone https://github.com/jpaholik/spevnik-backend.git
```

Po stiahnuti je treba si nastavit parametre pre localhost (nateraz hlavne pristup k DB). Konfiguracne nastavenia si dajte do suboru 
```
app/config/parameters-environment.yml
```
Tento subor sa pouziva iba lokalne, nie je na githube. Priklad je uvedeny nizsie, alebo sa mozte pozriet do `app/config/parameters.yml`
```yaml
# parameters-environment.yml
parameters:
    database_host: 127.0.0.1
    database_port: 3306
    database_name: exampleDbName
    database_user: exampleUser
    database_password: examplePass
```

Po nastaveni parametrov je treba spustit nasledujuci prikaz, ktory zabezpeci aj vytvorenie tabuliek a zakladnych ciselnikov v DB.
```
composer install
```

## API URL

Export piesne v XML formate (podla standardu http://openlyrics.org/dataformat.html):
```
/api/v1/get-song/xml/{slug}
```

## Databazovy model

Model bol vytvoreny v [MySql Workbench](https://www.mysql.com/products/workbench/) a mozte ho najst v 
```
src/Efata/Bundle/SongbookApiBundle/Resources/db/db-model.mwb
```