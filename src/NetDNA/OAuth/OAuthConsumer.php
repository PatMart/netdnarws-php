<?php
/**
 * OAuth Consumer representation.
 */
namespace NetDNA\OAuth;

class OAuthConsumer {
    public $key;
    public $secret;

    function __construct($key, $secret, $callback_url=NULL) {
        $this->key = $key;
        $this->secret = $secret;
        $this->callback_url = $callback_url;
    }

    function __toString() {
        return "\\NetDNA\\OAuth\\OAuthConsumer[key=$this->key,secret=$this->secret]";
    }
}

