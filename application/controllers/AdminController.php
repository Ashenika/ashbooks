<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct(){
        parent::__construct();
        $this->load->library('auth_lib');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
//        if ($this->session->userdata('user_id')) {
//            redirect(base_url().'index.php/AdminController/index','refresh');
//        }
        $this->load->view('admin_login_view');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->auth_lib->login($username,$password);
       // $this->session->set_userdata('user_id', $user);

        if ($user !== false) {
            $this->load->view('admin_main_view');
        }
        else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('admin_login_view',$data);
        }

    }

    public function addCategoryView(){
        $this->load->view('admin_add_category');
    }

    public function addBookView(){
        $data['category'] = $this->category->getBookCategories();
        $this->load->view('admin_add_book',$data);
    }

    public function viewBookList(){
        // Search text
        $title = $this->input->post('author');
        $author= $this->input->post('title');

        $categories['category'] = $this->category->getBookCategories();
        $book = $this->data['books'] = $this->book->getAllBooks($title,$author); // calling Post model method getPosts()
        $data=array($categories,$book);
       // print_r(json_encode($this->data));
        $this->load->view('admin_book_list', $this->data); // load the view file , we are passing $data array to view file
       // $this->load->view('admin_book_list',$data);
    }

    public function viewBookDetail($id){
        $this->data['details'] = $this->book->getBookDetail($id);
        //print_r(json_encode($this->data));
        $this->load->view('admin_book_detail_view',$this->data);
    }

    public function addCategory(){
        //Setting values for tabel columns
        $data = array(
            'name' => $this->input->post('category')
        );
        //Transfering data to Model
        $this->category->insert_category($data);
        $data['message'] = 'Data Inserted Successfully';
        //Loading View
        $this->load->view('admin_add_category', $data);
    }

    public function addBook(){

        /*FORM DATA*/
          $data = array(
            'isbn_no'        => $this->input->post('isbn'),
            'code'           => $this->input->post('isbn'),
            'title'          => $this->input->post('title'),
            'author'         => $this->input->post('author'),
            'description'    => $this->input->post('description'),
            'publisher_name' => $this->input->post('publisher'),
            'year'           => $this->input->post('year'),
            'price'          => $this->input->post('price'),
            'category_id'    => $this->input->post('category'),
            'stock_quantity' => $this->input->post('stockQty'),
            'created_at'     => date("YmdHis")
        );
        $book = $this->book->insertBook($data);



        if (!empty($_FILES['images']['name'][0])) {

            if ($this->upload_files($this->input->post('title'),$_FILES['images']) === FALSE) {
                //if Errors
                $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');

            }
            $filePath= $this->upload->data('file_path');
            $file_ext = $this->upload->data('file_ext');
            $file_name = $this->upload->data('file_name');
            /*IMAGE DATA*/
            $file = array(
                'file_path' => $filePath.$file_name,
                'file_ext'  => $file_ext,
                'book_id'   => $book,
                'created_at'=> date("YmdHis")
            );
            $this->bookImage->insertBookImage($file);
        }

        $data['message'] = 'Data Inserted Successfully';
        //Loading View
       redirect('AdminController/addBookView', 'refresh');
    }

   private function upload_files( $title, $files)
    {
        $config = array(
            'upload_path'   => './uploads/',
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }
        return $images;
    }

}

