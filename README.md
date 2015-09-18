# WordPress Clean up #

# Installation
1. Install via composer
2. Activate plugin
3. Configure using the WpCleanUp.php file in your theme folder

##Configuration
On activation the plugin creates a file named WpCleanUpConfig.php in your current theme. The file consists of a config-array with the possibility to clean up WordPress without anny manual work.
```php
<?php
return [
    'AdminBarNodes' => true,
    'AdminUpdateNotice' => true,
    'LogInLogoUrl' => home_url(),
    'LogInLogoTitle' => '',
    'DashBoardBoxes' => true,
    'PostTags' => false,
];
```