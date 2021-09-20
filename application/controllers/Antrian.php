  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

//load Spout Library
require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';
 
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Antrian extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('app');

	}

	public function index(){
		 $this->Mypage('home');

	}

	public function simulasi(){
		 //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload') {
            $config['upload_path']      = './assets/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
            $config['file_name']        = 'doc' . time(); //rename file yang diupload
 
            $this->load->library('upload', $config);
 
            if ($this->upload->do_upload('excel')) {
                //fetch data upload
                $file   = $this->upload->data();
 
                $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
                $reader->open('assets/' . $file['file_name']); //open file xlsx yang baru saja diunggah
 
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet) {
                    $numRow = 1;
 
                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();
 
                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row) {
 
                        if ($numRow > 1) {
                            //ambil cell
                            $cells = $row->getCells();
 
                            $data = array(
                    "hari"=> $cells[0],
                    "nama"=> $cells[1],
                    "loket"=> $cells[2],
                    "loket2"=> $cells[3]
                            );
 
                            //tambahkan array $data ke $save
                            array_push($save, $data);
                        }
 
                        $numRow++;
                    }
                    //simpan data ke database
                    // $this->db->empty_table('antrian');
                    $this->app->simpan($save);
 
                    //tutup spout reader
                    $reader->close();
 
                    //hapus file yang sudah diupload
                    unlink('assets/' . $file['file_name']);
                    $this->session->set_flashdata('sukses',"Import data berhasil dilakukan!!");
                    redirect('antrian/simulasi');
                }
            }
        }

          $query = $this->db->query("select hari, SUM(loket) as totalLoket1, SUM(loket2) as totalLoket2, (SUM(loket)+SUM(loket2)) as total from antrian group by hari");


         $data=array(
            "simulasi"=>$query->result(),
        );
		 $this->Mypage('simulasi', $data);

	}


	 public function add()
    {
        $this->form_validation->set_rules('hari', 'hari', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('antrian/simulasi');
        }else{
            $data=array(
                "hari"=>$_POST['hari'],
                "loket"=>$_POST['loket'],
                "loket2"=>$_POST['loket2']
            );
            $this->db->insert('antrian',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('antrian/simulasi');
        }
    }
	
}
