<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;


class BaseApi
{
    protected $baseUrl;

    public function __construct()
	{
        $this->baseUrl = env('API_HOST');
    }

    private function client()
    {
        return Http::baseUrl($this->baseUrl);
    }

    public function index(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
    





    
    public function create(String $endpoint, Array $data)
    {
        return $this->client()->post($endpoint, $data);
    }


   
}