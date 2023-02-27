<?php

class Curl
{
    private $ch;

    public function __construct()
    {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }

    public function setOption($option, $value)
    {
        curl_setopt($this->ch, $option, $value);
    }

    public function post($datawa)
    {
        curl_setopt($this->ch, CURLOPT_URL, 'https://api.fonnte.com/send');
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_ENCODING, '');
        curl_setopt($this->ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $datawa);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
            'Authorization: kpe@NL5fkenc#HwnTwGy' //change TOKEN to your actual token
        ));
        $result = curl_exec($this->ch);
        curl_close($this->ch);
        return $result;
    }
}
