<?php


namespace App\Services;
use App\Repositories\BookRepository;
use Exception;



class BookService
{

    protected $bookRepository;
    /*
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository){
        $this->bookRepository=$bookRepository;
    }
    public function getById($id){
        return $this->bookRepository->getById($id);
    }


}
