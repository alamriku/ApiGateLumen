<?php


namespace App\Services;
use App\Traits\ConsumeExternalService;


class AuthorService
{
    use ConsumeExternalService;

    //The base uri to consume the authors services
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }
}