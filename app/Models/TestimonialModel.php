<?php namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model{

    protected $table = 'testimonial';

    public function insertTestimonial($data){
        return $this->db->table($this->table)->insert($data);
    }
}