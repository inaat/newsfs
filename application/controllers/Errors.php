<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : skylinewebsloution school management system
 * @version : 3.0
 * @developed by : skylinewebsloutionCoder
 * @support : skylinewebsloutioncoder@yahoo.com
 * @author url : http://codecanyon.net/user/skylinewebsloutionCoder
 * @filename : Accounting.php
 * @copyright : Reserved skylinewebsloutionCoder Team
 */

class Errors extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('errors/error_404_message.php');
    }
}
