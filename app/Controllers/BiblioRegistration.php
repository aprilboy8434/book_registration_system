<?php namespace App\Controllers;
use App\Models\BiblioRegistrationLogModel;
use App\Models\BiblioModel;
use CodeIgniter\Controller;

class BiblioRegistration extends Controller
{
        public function index()
        {
			$biblioRegistrationLogmodel = new BiblioRegistrationLogModel();

			$data = [
					'biblioRegistrationLogs'  => $biblioRegistrationLogmodel->getBiblioRegistrationLogs(),
					'title' => 'รายการหนังสือลงทะเบียน',
			];
	
			echo view('templates/header', $data);
			echo view('biblio_registration/registration_list', $data);
			echo view('templates/footer');
        }

        // public function view()
        // {
		// 	$model = new BooksModel();

		// 	$data['books'] = $model->getBooks();
	
		// 	if (empty($data['books']))
		// 	{
		// 			throw new \CodeIgniter\Exceptions\PageNotFoundException('ไม่พบหนังสือลงทะเบียน');
		// 	}
	
		// 	$data['title'] = $data['books']['title'];
	
		// 	echo view('templates/header', $data);
		// 	echo view('books/view', $data);
		// 	echo view('templates/footer');
        // }


	public function create()
	{
		helper('form');
		$biblioModel = new BiblioModel();

		$data = [
			'biblios'  => $biblioModel->getBiblios(),
			'title' => 'รายการหนังสือลงทะเบียน',
	];

		if (! $this->validate([
			'title' => 'required',
		]))
		{
			echo view('templates/header', ['title' => 'ลงทะเบียนหนังสือใหม่']);
			echo view('biblio_registration/registration_form', $data);
			echo view('templates/footer');

		}
		else
		{
			$model->save([
				// 'title'  => $this->request->getVar('title'),
				// 'note' => $this->request->getVar('note'),
				//'slug'  => url_title($this->request->getVar('title')),
			]);
			#echo view('book_registration/success');
		}
	}

}