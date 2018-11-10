<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/21/2018
 * Time: 10:51 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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

    public function index(){

        $this->data['categories'] = $this->category->getAllBookCategories();
        //print_r($this->data);
        $this->load->view('home_view',$this->data);
    }

    public function shoppingCart(){
        $this->load->view('shopping_cart');
    }

    public function viewAllByCategory($category_id){
       // $config['base_url'] = base_url() . 'index.php/HomeController/viewAllByCategory/'.$category_id;
       // $config['total_rows'] = $this->category->record_count();;
        //$config['per_page'] = 12;
       // $config["uri_segment"] = 3;
        $config = array();
        $config["base_url"] = base_url() . 'index.php/HomeController/viewAllByCategory/'.$category_id;
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

        // build paging links
        $data['details'] = $this->category->getAllBooksByCategory($category_id,$config["per_page"], $page);
       // print_r(json_encode($data));

      //  return;
        $params          = $this->pagination->create_links();
        $data["links"]   = explode('&nbsp;',$params );

        $this->load->view('all_books_category_view',$data);
    }
}
