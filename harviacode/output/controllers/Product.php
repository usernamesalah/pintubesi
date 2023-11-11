<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'product/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'product/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'product/index.html';
            $config['first_url'] = base_url() . 'product/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Product_model->total_rows($q);
        $product = $this->Product_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'product_data' => $product,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('product/product_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Product_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'kategori' => $row->kategori,
		'ukuran' => $row->ukuran,
		'tebal_daun_pintu' => $row->tebal_daun_pintu,
		'tebal_plat_daun_pintu' => $row->tebal_plat_daun_pintu,
		'tebal_plat_kusen_pintu' => $row->tebal_plat_kusen_pintu,
		'insulation' => $row->insulation,
		'engsel' => $row->engsel,
		'fire_rated' => $row->fire_rated,
		'overlap_bibir_pintu' => $row->overlap_bibir_pintu,
		'aksesoris' => $row->aksesoris,
		'tebal_frame_kisi' => $row->tebal_frame_kisi,
		'tebal_rangka_pintu' => $row->tebal_rangka_pintu,
		'sliding_gear' => $row->sliding_gear,
		'foto' => $row->foto,
		'galery' => $row->galery,
	    );
            $this->load->view('product/product_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('product/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'kategori' => set_value('kategori'),
	    'ukuran' => set_value('ukuran'),
	    'tebal_daun_pintu' => set_value('tebal_daun_pintu'),
	    'tebal_plat_daun_pintu' => set_value('tebal_plat_daun_pintu'),
	    'tebal_plat_kusen_pintu' => set_value('tebal_plat_kusen_pintu'),
	    'insulation' => set_value('insulation'),
	    'engsel' => set_value('engsel'),
	    'fire_rated' => set_value('fire_rated'),
	    'overlap_bibir_pintu' => set_value('overlap_bibir_pintu'),
	    'aksesoris' => set_value('aksesoris'),
	    'tebal_frame_kisi' => set_value('tebal_frame_kisi'),
	    'tebal_rangka_pintu' => set_value('tebal_rangka_pintu'),
	    'sliding_gear' => set_value('sliding_gear'),
	    'foto' => set_value('foto'),
	    'galery' => set_value('galery'),
	);
        $this->load->view('product/product_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'ukuran' => $this->input->post('ukuran',TRUE),
		'tebal_daun_pintu' => $this->input->post('tebal_daun_pintu',TRUE),
		'tebal_plat_daun_pintu' => $this->input->post('tebal_plat_daun_pintu',TRUE),
		'tebal_plat_kusen_pintu' => $this->input->post('tebal_plat_kusen_pintu',TRUE),
		'insulation' => $this->input->post('insulation',TRUE),
		'engsel' => $this->input->post('engsel',TRUE),
		'fire_rated' => $this->input->post('fire_rated',TRUE),
		'overlap_bibir_pintu' => $this->input->post('overlap_bibir_pintu',TRUE),
		'aksesoris' => $this->input->post('aksesoris',TRUE),
		'tebal_frame_kisi' => $this->input->post('tebal_frame_kisi',TRUE),
		'tebal_rangka_pintu' => $this->input->post('tebal_rangka_pintu',TRUE),
		'sliding_gear' => $this->input->post('sliding_gear',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'galery' => $this->input->post('galery',TRUE),
	    );

            $this->Product_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('product'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Product_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('product/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'kategori' => set_value('kategori', $row->kategori),
		'ukuran' => set_value('ukuran', $row->ukuran),
		'tebal_daun_pintu' => set_value('tebal_daun_pintu', $row->tebal_daun_pintu),
		'tebal_plat_daun_pintu' => set_value('tebal_plat_daun_pintu', $row->tebal_plat_daun_pintu),
		'tebal_plat_kusen_pintu' => set_value('tebal_plat_kusen_pintu', $row->tebal_plat_kusen_pintu),
		'insulation' => set_value('insulation', $row->insulation),
		'engsel' => set_value('engsel', $row->engsel),
		'fire_rated' => set_value('fire_rated', $row->fire_rated),
		'overlap_bibir_pintu' => set_value('overlap_bibir_pintu', $row->overlap_bibir_pintu),
		'aksesoris' => set_value('aksesoris', $row->aksesoris),
		'tebal_frame_kisi' => set_value('tebal_frame_kisi', $row->tebal_frame_kisi),
		'tebal_rangka_pintu' => set_value('tebal_rangka_pintu', $row->tebal_rangka_pintu),
		'sliding_gear' => set_value('sliding_gear', $row->sliding_gear),
		'foto' => set_value('foto', $row->foto),
		'galery' => set_value('galery', $row->galery),
	    );
            $this->load->view('product/product_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'ukuran' => $this->input->post('ukuran',TRUE),
		'tebal_daun_pintu' => $this->input->post('tebal_daun_pintu',TRUE),
		'tebal_plat_daun_pintu' => $this->input->post('tebal_plat_daun_pintu',TRUE),
		'tebal_plat_kusen_pintu' => $this->input->post('tebal_plat_kusen_pintu',TRUE),
		'insulation' => $this->input->post('insulation',TRUE),
		'engsel' => $this->input->post('engsel',TRUE),
		'fire_rated' => $this->input->post('fire_rated',TRUE),
		'overlap_bibir_pintu' => $this->input->post('overlap_bibir_pintu',TRUE),
		'aksesoris' => $this->input->post('aksesoris',TRUE),
		'tebal_frame_kisi' => $this->input->post('tebal_frame_kisi',TRUE),
		'tebal_rangka_pintu' => $this->input->post('tebal_rangka_pintu',TRUE),
		'sliding_gear' => $this->input->post('sliding_gear',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'galery' => $this->input->post('galery',TRUE),
	    );

            $this->Product_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('product'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Product_model->get_by_id($id);

        if ($row) {
            $this->Product_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('product'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('product'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
	$this->form_validation->set_rules('ukuran', 'ukuran', 'trim|required');
	$this->form_validation->set_rules('tebal_daun_pintu', 'tebal daun pintu', 'trim|required');
	$this->form_validation->set_rules('tebal_plat_daun_pintu', 'tebal plat daun pintu', 'trim|required');
	$this->form_validation->set_rules('tebal_plat_kusen_pintu', 'tebal plat kusen pintu', 'trim|required');
	$this->form_validation->set_rules('insulation', 'insulation', 'trim|required');
	$this->form_validation->set_rules('engsel', 'engsel', 'trim|required');
	$this->form_validation->set_rules('fire_rated', 'fire rated', 'trim|required');
	$this->form_validation->set_rules('overlap_bibir_pintu', 'overlap bibir pintu', 'trim|required');
	$this->form_validation->set_rules('aksesoris', 'aksesoris', 'trim|required');
	$this->form_validation->set_rules('tebal_frame_kisi', 'tebal frame kisi', 'trim|required');
	$this->form_validation->set_rules('tebal_rangka_pintu', 'tebal rangka pintu', 'trim|required');
	$this->form_validation->set_rules('sliding_gear', 'sliding gear', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('galery', 'galery', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-11-11 16:00:48 */
/* http://harviacode.com */