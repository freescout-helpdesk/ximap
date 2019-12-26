<?php

function ximap_open($mailbox , $username , $password, $options = 0, $n_retries = 0, $params = [])
{
    return Ximap\Imap::imap_open($mailbox , $username , $password, $options, $n_retries, $params);
}
