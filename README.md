# Ximap
Wrapper around [Zend Mail](https://github.com/zendframework/zend-mail) providing same set of functions as [PHP IMAP](https://www.php.net/manual/en/book.imap.php) but with x-prefix (`ximap_open`, `ximap_fetchbody`, `ximap_list`, etc.) for easier migration from PHP IMAP extension. Supports XOAUTH2-authentication.

## Usage

You can functions:
```
imap_open("{mail.example.com:143}", "sample@example.com","password");
```

Or you can use `Ximap::Imap` class:

```
$ximap = Ximap\Imap("{mail.example.com:143}", "sample@example.com","password");
```
