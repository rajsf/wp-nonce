# Wordpress wpnonce
A package which serves the functionality of working with WordPress Nonce in object oriented environment to make things easy


Table of contents:
 * [Requirements](#requirements)
 * [Installation](#installation)
 * [Usage](#usage)

## Requirements

* PHP >= 5.3.0
* WordPress >= 4.0

## Installation

You can install it via on command-line 

```sh
php composer.phar install
```

### Another way

1. Download the [latest zip](https://github.com/rajsf/wp-nonce/archive/master.zip) of this repo.
2. Unzip the master.zip file.
3. Copy and paste it into the root of your directory.

## Usage

Setup the minimum required thigs:

```php
<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Nonces;


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

