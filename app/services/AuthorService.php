<?php


namespace App\Services;
use App\Traits\ConsumeExternalService;


class AuthorService
{
    use ConsumeExternalService;

    //The base uri to consume the authors services
    public $baseUri;

    //the secret consume the authors service
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
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

    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }
}