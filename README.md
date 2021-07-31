# BlackListMCAPI in PHP

#### Implementing the blacklistmc API in PHP.

> BlackListMC: https://www.blacklistmc.net/
> BlackListMC API: https://api.blacklistmc.net/

## Documentation

The file blmcapi.php need to be required !
So put :
````php
require('blmcapi.php');
````
At the top of your file

The class is abstract so don't try to create an instance of it.

#### Usages:
```php
echo BLMCAPI::checkDiscord(689843708069150735);
```
Will print 'true'. This discord user is blacklisted.

```php
echo BLMCAPI::checkMinecraft("Test123");
```
Will print 'false'. This minecraft player is not blacklisted.

```php
echo BLMCAPI::checkTwitter("Test123");
```
Will print 'false'. This twitter account is not blacklisted.

### If you have any ideas, suggestions or questions, contact me on my discord : Papipomme#1000