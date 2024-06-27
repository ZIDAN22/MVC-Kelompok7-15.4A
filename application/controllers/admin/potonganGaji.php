<?php 
class potonganGaji extends CI_Controller{

    public function index(){

        $data['title'] = "Potongan Gaji";
        $data['pot_gaji'] = $this->penggajianModel->
        get_data('potongan_gaji')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/potonganGaji', $data);
        $this->load->view('templates_admin/footer');
    }    

    public function tambahData(){
        $data['title'] = "Tambah Potongan Gaji";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formPotonganGaji', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi(){
        $this->_rules();
        if($this->form_validation->run()==FALSE){
                $this->tambahData();
        }else{
            $potongan             = $this->input->post('potongan');
            $jml_potongan         = $this->input->post('jml_potongan');

            $data = array(
                'potongan'             => $potongan,
                'jml_potongan'         => $jml_potongan,
            );
            $this->penggajianModel->insert_data($data, 'potongan_gaji');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Data Berhasil Ditambahkan!
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
            redirect('admin/potonganGaji');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('potongan', 'Potongan', 'required');
        $this->form_validation->set_rules('jml_potongan', 'Jumlah Potongan', 'required');
    }
    public function hapusData($id)
    {
        $where = array('id'=> $id);
        $this->penggajianModel->delete_data($where, 'potongan_gaji');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    Data Tipe Berhasil DiHapus!
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
            redirect('admin/potonganGaji');
      }
}
?>