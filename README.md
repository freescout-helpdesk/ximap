# Ximap
Wrapper around [Zend Mail](https://github.com/zendframework/zend-mail) providing same set of functions as [PHP IMAP](https://www.php.net/manual/en/book.imap.php) but with x-prefix (`ximap_open`, `ximap_fetchbody`, `ximap_list`, etc.) for easier migration from PHP IMAP extension. Supports XOAUTH2-authentication.

## Usage

You can use functions:
```php
$imap = ximap_open("{imap.example.org}", "sample@example.com","password");

$list = ximap_list($imap, "{imap.example.org}", "*");
if (is_array($list)) {
    foreach ($list as $val) {
        echo ximap_utf7_decode($val) . "\n";
    }
} else {
    echo "imap_list failed: " . ximap_last_error() . "\n";
}

ximap_close($imap);

```

Or you can use `Ximap\Imap` class:

```php
$ximap = Ximap\Imap("{mail.example.com:143}", "sample@example.com","password");

$list = $ximap->imap_list();
if (is_array($list)) {
    foreach ($list as $val) {
        echo $ximap->imap_utf7_decode($val) . "\n";
    }
} else {
    echo "imap_list failed: " . $ximap->imap_last_error() . "\n";
}

$ximap->imap_close($imap);
```
