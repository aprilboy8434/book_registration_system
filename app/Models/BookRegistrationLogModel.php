<?php namespace App\Models;
use CodeIgniter\Model;

class BookRegistrationLogModel extends Model
{
    protected $table = 'book_registration_log';

    protected $allowedFields = ['title', 'note'];

    public function getBooks()
	{
			return $this->findAll();
	}
	
}
