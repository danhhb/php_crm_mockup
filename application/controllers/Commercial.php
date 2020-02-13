<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commercial extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('commercial_model');
	}

	public function index()
	{
		//fetch data from database
		$result_active = $this->commercial_model->get_loans(2);
		$result_accepted = $this->commercial_model->get_loans(1);
		$result_in_process = $this->commercial_model->get_loans(3);
		$data['active'] = $result_active;
		$data['accepted'] = $result_accepted;
		$data['in_process'] = $result_in_process;

		$this->load->view('index', $data);
	}

	public function report() 
	{
		//load xlsx library
		$this->load->library('Excel');
		
		//define column headers
		$headers = array('Borrower Name' => 'string', 'Deal/Product Name' => 'string', 'Lender' => 'string', 'Loan Amount' => 'dollar', 'Representative' => 'string', 'Borrower/Affiliate Phone Number' => 'string', 'Current Status/POA' => 'string', 'Stage' => 'string', 'Manager Notes' => 'string');
		
		//fetch data from database
		//:change. This can be refactored to avoid duplications
		$result_active = $this->commercial_model->get_loans(2);
		$result_accepted = $this->commercial_model->get_loans(1);
		$result_in_process = $this->commercial_model->get_loans(3);
		
		//create writer object
		$writer = new Excel();
		
	    //meta data info
		$keywords = array('report','php','commercial');
		$writer->setTitle('Commercial Processing Pepeline');
		$writer->setSubject('Test report');
		$writer->setAuthor('https://www.roytuts.com');
		$writer->setCompany('National Lending Direct, LLC');
		$writer->setKeywords($keywords);
		$writer->setDescription('Commercial Processing Pepeline');
		$writer->setTempDir(sys_get_temp_dir());
		
		//write headers
		$writer->writeSheetHeader('Sheet1', $headers);
		
		//write section row
		$writer->writeSheetRow('Sheet1',array('TERMS ACCEPTED'));

		//write rows to sheet1
		foreach ($result_accepted as $data):
			$writer->writeSheetRow('Sheet1',array($data->borrower_fname.' '.$data->borrower_lname, $data->prod_name, $data->lender_fname.' '.$data->lender_lname, $data->representative, $data->contact_phone, $data->status_poa, $data->stage, $data->note));
		endforeach;
		
		$fileLocation = 'commercial_report.xlsx';
		
		//write to xlsx file
		$writer->writeToFile($fileLocation);
		//echo $writer->writeToString();
		
		//force download
		header('Content-Description: File Transfer');
		header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		header("Content-Disposition: attachment; filename=".basename($fileLocation));
		header("Content-Transfer-Encoding: binary");
		header("Expires: 0");
		header("Pragma: public");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header('Content-Length: ' . filesize($fileLocation)); //Remove

		ob_clean();
		flush();

		readfile($fileLocation);
		unlink($fileLocation);
		exit(0);
	}
}
