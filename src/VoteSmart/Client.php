<?php
namespace VoteSmart;

class Client
{
    protected $client;

    protected $base_uri = 'http://api.votesmart.org';

    public function __construct($api_key, $output = 'JSON') {
        // Server is case sensitive
        $output = strtoupper($output);
        $this->client = new \Guzzle\Http\Client($this->base_uri . "?key=$api_key&o=$output");
        $this->client->setDefaultHeaders(array('Content-Type' => 'application/json'));
    }

    public function get($endpoint, $params = array()) {
        $qs = ($params) ? "?" . http_build_query($params) : "";
        return $this->client->get($endpoint . $qs)->send();
    }
}