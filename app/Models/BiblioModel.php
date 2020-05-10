<?php namespace App\Models;
use CodeIgniter\Model;

class BiblioModel extends Model
{
    protected $table = 'biblio';
    protected $allowedFields = ['title', ];

    public function getBiblios()
	{
		return $this->findAll(100);
    }
    
}
