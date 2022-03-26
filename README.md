# posobota Contember Demo

Demo of [Nextras ORM generator](https://github.com/contember/nextras-orm-generator).

Start Contember:
```
npm install
npm start
```

Start nette:
```
cd nette
php -S localhost:5000 -t www
```

After change of Contember schema you can regenerate nextras ORM model by running this command in `nette` directory:

```
php ./vendor/bin/contember-nextras-orm-generator --dir app/ --endpoint http://localhost:1481/content/posobota-nextras-demo/live --token 0000000000000000000000000000000000000000
```
