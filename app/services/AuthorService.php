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

    // obtain full list of authors from the other service
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }
    // create a single author from the other service
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }
}