<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{
    public function getBerita()
    {
        $query = $this->db->get('tblberita');
        return $query;
    }
}
