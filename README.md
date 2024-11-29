# ShopwareDocsEntityExtension

This plugin extends the Shopware 6 entity `product`.

## Installation

```shell
bin/console plugin:install ShopwareDocsEntityExtension --activate
```

## HTTP test



```http request

### Authenticate into Shopware 6 instance
POST http://localhost:8080/api/oauth/token
Content-Type: application/json


{
  "client_id": "administration",
  "grant_type": "password",
  "username": "shopware",
  "password": "shopware"
}

> {% client.global.set("access_token", response.body.access_token) %}

### Update product with custom extension
PATCH http://localhost:8080/api/product/c7bca22753c84d08b6178a50052b4146
Content-Type: application/json
Authorization: Bearer {{access_token}}


{
  "productExtension": {
    "customString": "test"
  }
}


```