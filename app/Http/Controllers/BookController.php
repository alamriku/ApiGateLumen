<?php


namespace App\Http\Controllers;


use App\Services\BookService;
use App\Traits\ApiResponse;

class BookController extends Controller
{
    use ApiResponse;

    public $bookService;

    //the service to consume the books Microservice

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }
}