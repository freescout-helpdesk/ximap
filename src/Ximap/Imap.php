<?php

namespace Ximap;

class Imap
{
    protected $stream;
    
    public function __construct($mailbox, $username , $password, $options = 0, $n_retries = 0, $params = [])
    {
        $this->stream = self::imap_open($mailbox, $username , $password, $options, $n_retries, $params);
    }
    
    /**
     * https://www.php.net/manual/en/function.imap-open.php
     */
    public static function imap_open($mailbox, $username , $password, $options = 0, $n_retries = 0, $params = [])
    {
        // todo
    }
}
