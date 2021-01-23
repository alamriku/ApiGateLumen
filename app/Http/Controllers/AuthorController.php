<?php


namespace App\Http\Controllers;


use App\Services\AuthorService;
use App\Traits\ApiResponse;

class AuthorController extends Controller
{
    use ApiResponse;

    //the service to consume the authors Microservice

    public $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        return $this->successResponse($this->authorService->obtainAuthors());
    }
}