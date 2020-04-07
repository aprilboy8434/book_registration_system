<?php namespace App\Controllers;
use App\Models\BookRegistrationLogModel;
use CodeIgniter\Controller;

class BookRegistration extends Controller
{
        public function index()
        {
			$model = new BookRegistrationLogModel();

			$data = [
					'books'  => $model->getBooks(),
					'title' => 'รายการหนังสือลงทะเบียน',
			];
	
			echo view('templates/header', $data);
			echo view('book_registration/registration_list', $data);
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
		$model = new BookRegistrationLogModel();

		if (! $this->validate([
			'title' => 'required',
		]))
		{
			echo view('templates/header', ['title' => 'ลงทะเบียนหนังสือใหม่']);
			echo view('book_registration/registration_form');
			echo view('templates/footer');

		}
		else
		{
			$model->save([
				'title'  => $this->request->getVar('title'),
				'note' => $this->request->getVar('note'),
				//'slug'  => url_title($this->request->getVar('title')),
			]);
			#echo view('book_registration/success');
		}
	}

}