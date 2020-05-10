<?php namespace App\Models;
use CodeIgniter\Model;

class BiblioRegistrationLogModel extends Model
{
    protected $table = 'libpkc_biblio_registration_log';
    protected $allowedFields = ['biblio_id', 'note'];

    public function getBiblioRegistrationLogs()
	{
		return $this->findAll();
	}

}
