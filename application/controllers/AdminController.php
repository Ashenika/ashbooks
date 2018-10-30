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
    public function index()
    {
        $this->load->view('admin_main_view');
    }

    public function addCategory(){
        $this->load->view('admin_add_category');
    }

    public function addBook(){
        $this->load->view('admin_add_book');
    }

    public function viewBookList(){
        $this->load->view('admin_book_list');
    }
}
