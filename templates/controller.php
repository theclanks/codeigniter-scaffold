<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class <%=@model.capitalize%> extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('<%=@model.downcase%>_model');
	}

	function index() {
		$data['<%=@model.downcase%>'] = $this-><%=@model.downcase%>_model->findAll();
		$this->load->view('<%=@model.downcase%>/index', $data);
	}

	function save() {
		$this-><%=@model.downcase%>_model->save($data)
		$this->load->view('<%=@model.downcase%>/index', $data);
	}
}
?>