<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 22/11/2018
 * Time: 13:51
 */
class Materi extends CI_Controller
{
    var $gallerypath;
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
        $this->load->model('The_Model');
    }

    function pengertianTrigonometri(){
        $this->load->view('materi/pengertian_trigonometri');
    }

    function derajatDanRadian(){
        $this->load->view('materi/sudut_drjt_radian');
    }

    function jamAnalog(){
        $this->load->view('materi/jam_analog');
    }

  
}