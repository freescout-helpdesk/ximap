<?php

namespace Ximap;

class Imap
{
    protected $stream;
    
    public function __construct($mailbox, $username , $password, $options = 0, $n_retries = 0, $params = [])
    {
        $this->stream = self::imap_open($mailbox, $username , $password, $options, $n_retries, $params);
    }

    public function imap_list($imap_stream, $ref, $pattern)
    {
        return self::ximap_list($imap_stream, $ref, $pattern);
    }
    
    /**
     * https://www.php.net/manual/en/function.imap-open.php
     */
    public static function ximap_open($mailbox, $username , $password, $options = 0, $n_retries = 0, $params = [])
    {
        return new Ximap\Imap($mailbox, $username , $password, $options, $n_retries, $params);
    }
    

    /**
     * https://www.php.net/manual/en/function.imap-list.php
     */
    public static function ximap_list($imap_stream, $ref, $pattern)
    {
        // todo
    }
}
