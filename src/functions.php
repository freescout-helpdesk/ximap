<?php

function ximap_open($mailbox , $username , $password, $options = 0, $n_retries = 0, $params = [])
{
    return Ximap\Imap::ximap_open($mailbox , $username , $password, $options, $n_retries, $params);
}

function ximap_list($imap_stream, $ref, $pattern)
{
    return Ximap\Imap::ximap_open($imap_stream, $ref, $pattern);
}
