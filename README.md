# Show Stock Qty on product page for Magento 2 by Corals

## Demo:

### Simple Product Page
![Simple Product stock quantity](screenshots/simple_product.png)
### Configurable Product Page
![Configurable Product quantity](screenshots/configurable_product.png)

## Installation via composer


```
composer require Corals/stock-qty-m2
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

After install the module, please go to Store -> Configuration -> Corals Extension -> Stock Qty to enable/disable the function
