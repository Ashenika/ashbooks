<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/27/2018
 * Time: 5:57 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ItemsListController extends CI_Controller {

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
        $this->load->library('pagination');
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
        $this->load->view('all_books_view');
    }

    public function viewAllBooks(){

        $field  = $this->input->post('category');

        // $config['base_url'] = base_url() . 'index.php/HomeController/viewAllByCategory/'.$category_id;
        // $config['total_rows'] = $this->category->record_count();;
        //$config['per_page'] = 12;
        // $config["uri_segment"] = 3;
        $config = array();
        $config["base_url"] = base_url() . 'index.php/ItemsListController/viewAllBooks/';
        $total_row = $this->category->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 12;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = '>';
        $config['prev_link'] = '<';


        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
        }
        else{
            $page = 1;
        }

        if (isset($filter) && !empty($search)) {
            $this->load->model('book');
            $data['details'] = $this->book->getBooksFilters($field);
        } else {
            $this->load->model('book');
            $data['details'] = $this->book->getBooks();
        }
        // build paging links

        $params          = $this->pagination->create_links();
        $data["links"]   = explode('&nbsp;',$params );
        $data['category'] = $this->category->getBookCategoriesFilter();

        $aa=array($data);

//        print_r(json_encode($data));
//        return;
        $this->load->view('all_books_view',$data);
    }



}






