<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Test
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Test extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // Contoh string dengan spasi di awal dan akhir
$input_string = "   Ini adalah contoh penggunaan trim.   ";

// Menggunakan trim untuk menghapus spasi di awal dan akhir string
$trimmed_string = trim($input_string);

// Menampilkan hasil sebelum dan sesudah trim
echo "String Sebelum Trim: '$input_string'<br>";
echo "String Setelah Trim: '$trimmed_string'";
  }

}


/* End of file Test.php */
/* Location: ./application/controllers/Test.php */