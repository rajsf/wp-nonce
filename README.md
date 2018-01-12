# Wordpress with nonce functionality

## Requirements

* PHP >= 5.3.0
* WordPress >= 4.0


## Usage

Setup the minimum required things:

```php
<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

require_once 'classes/Wpnonce.php'; // Require a class


// Instantiate an object of the class
$obj_nonce = new WpNonce();
```
### Example


Adding a nonce to a form:

```php
$obj_nonce->get_wp_nonce_field( 'delete-post_'.$post_id );
```

creating a nonce:

```php
$newnonce = $obj_nonce->wp_create_nonce( 'action_'.$post->id );
```

Verifying a nonce:

```php
$obj_nonce->wp_verify_nonce_field( 'delete-post_'.$post_id );
```

Verifying a nonce passed in some other context:

```php
$nonce->wp_check_admin_referer( $_REQUEST['my_nonce'], 'edit-post_'.$post->ID );
```

