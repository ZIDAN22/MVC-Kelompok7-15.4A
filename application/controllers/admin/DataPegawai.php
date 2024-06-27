<?php
class dataPegawai extends CI_Controller{
    public function index(){
        $data['title'] = "Data Pegawai";
        $data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataPegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData(){
        $data['title'] = "Tambah Data Pegawai";
        $data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formTambahPegawai', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambahDataAksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambahData();
        }else{
                $nik                              =$this->input->post('nik');
                $nama_pegawai                     =$this->input->post('nama_pegawai');
                $jenis_kelamin                    =$this->input->post('jenis_kelamin');
                $jabatan                          =$this->input->post('jabatan');
                $tanggal_masuk                    =$this->input->post('tanggal_masuk');
                $status                           =$this->input->post('status');
                $photo                            =$_FILES['photo']['name'];
                if($photo =''){}
                else{
                    $config['upload_path']   ='./assets/upload';
                    $config['allowed_types'] ='jpg|jpeg|png|tiff';
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('photo')){
                        echo "photo Gagal diupload!";
                    }else{
                        $photo = $this->upload->data('file_name');
                    }
                }

                $data = array (
                    'nik'               => $nik,
                    'nama_pegawai'      => $nama_pegawai,
                    'jenis_kelamin'     => $jenis_kelamin,
                    'jabatan'           => $jabatan,
                    'tanggal_masuk'     => $tanggal_masuk,
                    'status'            => $status,
                    'photo'             => $photo
                );
                $this->penggajianModel->insert_data($data, 'data_pegawai');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil DiTambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/dataPegawai');
             }
        }
        public function _rules()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        // $this->form_validation->set_rules('photo', 'Photo', 'required');
    }

    public function deleteData($id){
        $where = array('id_pegawai' =>$id);
        $this->penggajianModel->delete_data($where, 'data_pegawai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Berhasil DiHapus!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/dataPegawai');
    }
}
?>