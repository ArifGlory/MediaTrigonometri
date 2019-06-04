<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 22/11/2018
 * Time: 13:51
 */
class The_Model extends CI_Model
{
    var $tb_materi    = "tb_materi";

    function get_materi(){
        $data = $this->db->get($this->tb_materi);
        return $data;
    }
}