<?php


namespace App\Services;
use App\Traits\ConsumeExternalService;

class BookService
{
    use ConsumeExternalService;

    //The base uri to consume the books services
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    // obtain full list of books from the other service
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }
    // create a single author from the other service
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    public function obtainBook($author)
    {
        return $this->performRequest('GET', "/books/{$author}");
    }

    public function editBook($data, $author)
    {
        return $this->performRequest('PUT', "/books/{$author}", $data);
    }
    public function deleteBook($author)
    {
        return $this->performRequest('DELETE', "/books/{$author}");
    }
}