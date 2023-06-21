## Screenshots

![preview img](/preview.png)

## Download

Clone Project

```bash
  git clone https://github.com/XuanTrung2303/ecommerce-website-3 ecommerce-website-3
```

```bash
  cd ecommerce-website-3
```

-   Copy .env.example to .env then edit the database and fire the key

```bash
    composer install --ignore-platform-req=ext-gd
    composer install --ignore-platform-req=ext-openss
```

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Login

-   email = admin@admin.com
-   password = 123
