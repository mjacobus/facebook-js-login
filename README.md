Facebook Login Example
----------------------------

- [Documentation](https://developers.facebook.com/docs/php/howto/example_access_token_from_javascript)
- [Sdk](https://github.com/facebook/facebook-php-sdk-v4)

How to run it:

Crate your own .env file based on the [example](https://github.com/mjacobus/facebook-js-login/blob/master/.env.example)

```bash
cp .env.example .env
# edit it with your credentials
```

```bash
composer install
php -S localhost:8080 -t public
```

Then go to [localhost:8080](http://localhost:8080)
