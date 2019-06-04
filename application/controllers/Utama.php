<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Glory
 * Date: 22/11/2018
 * Time: 13:51
 */
class Utama extends CI_Controller
{
    var $gallerypath;
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
    }

    function index(){
       $this->load->view('login');
    }

    function dashboard(){

        $data['tanggal']    = date('d-F-Y');
        $data['nama_hari']  = $this->getHariIni();

        $this->load->view('parts/header');
        $this->load->view('parts/sidebar');
        $this->load->view('dashboard/dashboard',$data);
        $this->load->view('parts/footer');
    }

    function materi(){
        $data['tanggal']    = date('d-F-Y');

        $this->load->view('parts/header');
        $this->load->view('parts/sidebar');
        $this->load->view('materi/materi',$data);
        $this->load->view('parts/footer');
    }

    function getHariIni(){
        $hari = date ("D");
     
        switch($hari){
            case 'Sun':
                $hari_ini = "Minggu";
            break;
            case 'Mon':			
                $hari_ini = "Senin";
            break;
            case 'Tue':
                $hari_ini = "Selasa";
            break;
            case 'Wed':
                $hari_ini = "Rabu";
            break;
            case 'Thu':
                $hari_ini = "Kamis";
            break;
            case 'Fri':
                $hari_ini = "Jumat";
            break;
            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            default:
                $hari_ini = "Tidak di ketahui";		
            break;
        }
     
        return "" . $hari_ini . "";
    }

  
}