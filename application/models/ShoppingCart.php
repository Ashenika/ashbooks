<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/10/2018
 * Time: 9:25 AM
 */

class ShoppingCart extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function getCartProduct($id = ""){

        $data = array();
        $this->db->select("book.id,
                            book.isbn_no,
                            book.code,
                            book.title,
                            book.author,
                            book.description,
                            book.publisher_name,
                            book.year,
                            book.price,
                            book.stock_quantity,
                            cat.name,
                            image.file_path");
        $this->db->from('book');
        $this->db->join('category as cat', 'cat.id = book.category_id','left');
        $this->db->join('book_image as image', 'book.id = image.book_id','left');
        $this->db->where('book.id', $id);

        $query = $this->db->get();
        return $query->result();

    }


}