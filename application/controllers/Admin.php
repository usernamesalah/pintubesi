<?php

/**
 * summary
 */
class Admin extends MY_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->module = 'admin';

        $this->load->library('ci_jwt');
        $access_token = $this->session->userdata('token');
        if ( !isset($access_token) )
        {
            redirect('login/admin');
            exit;
        }

        $token = $this->ci_jwt->decode($access_token);
        if ( !isset($token->username) )
        {
            redirect('login/admin');
            exit;
        }

        $this->admin = $token;
        $this->load->library("Tanggal");
    }

    public function index()
    {
        if ( $this->POST('simpan') )
        {
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            if ( $password !== $password_lagi )
            {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('admin');
                exit;
            }
            $this->load->model('User_m');
            $this->User_m->update($this->data['username'], ['password' => password_hash($password, PASSWORD_DEFAULT)]);
            $this->flashmsg('Password Berhasil Diganti', 'success');
            redirect('admin');
            exit;
        }
        $this->data['title'] = 'Pendaftaran';
        $this->data['content'] = 'dashboard';
        $this->template($this->data, $this->module);
    }

    public function whatsapp()
    {
        if ( $this->POST('simpan') )
        {
            $this->Setting_m->update_where(["index" => "whatsapp"], ["value" => $this->POST('nomor')]);
            $this->flashmsg('Success Save WhatsApp', 'success');
            redirect('admin/whatsapp');
            exit;
        }
        $this->data['whatsapp'] = $this->Setting_m->get_row(['index' => 'whatsapp']);
        $this->data['title'] = 'WhatsApp';
        $this->data['content'] = 'whatsapp';
        $this->template($this->data, $this->module);

    }

    public function tentang()
    {
        if ( $this->POST('simpan') )
        {
            $this->Setting_m->update_where(["index" => "tentang"], ["value" => $this->POST('tentang')]);
            $this->flashmsg('Success Save tentang', 'success');
            redirect('admin/tentang');
            exit;
        }
        $this->data['tentang'] = $this->Setting_m->get_row(['index' => 'tentang']);
        $this->data['title'] = 'tentang';
        $this->data['content'] = 'tentang';
        $this->template($this->data, $this->module);
    }


    public function alamat()
    {
        if ( $this->POST('simpan') )
        {
            $this->Setting_m->update_where(["index" => "alamat"], ["value" => $this->POST('alamat')]);
            $this->flashmsg('Success Save alamat', 'success');
            redirect('admin/alamat');
            exit;
        }
        $this->data['alamat'] = $this->Setting_m->get_row(['index' => 'alamat']);
        $this->data['title'] = 'alamat';
        $this->data['content'] = 'alamat';
        $this->template($this->data, $this->module);
    }

    public function tambah_produk()
    {
        if ( $this->POST('simpan') )
        {
            $foto_id = $this->__generate_random_id();
            if ( !empty($_FILES['foto']['name']) )
            {
                $this->upload($foto_id, 'product', 'foto');
            }

            $galery = [];
            if ( count($_FILES['galery']) > 0 )
            {
                $name = $this->multiple_upload('product', 'galery');
                foreach ($name as $value)
                {
                    $galery[] = "/assets/upload/product/" . $value;
                }
            }
            $data = [
                'nama' => $this->POST('nama'),
                'deskripsi' => $this->POST('deskripsi'),
                'kategori' => $this->POST('kategori'),
                'ukuran' => $this->POST('ukuran'),
                'tebal_daun_pintu' => $this->POST('tebal_daun_pintu'),
                'tebal_plat_daun_pintu' => $this->POST('tebal_plat_daun_pintu'),
                'tebal_plat_kusen_pintu' => $this->POST('tebal_plat_kusen_pintu'),
                'insulation' => $this->POST('insulation'),
                'engsel' => $this->POST('engsel'),
                'fire_rated' => $this->POST('fire_rated'),
                'overlap_bibir_pintu' => $this->POST('overlap_bibir_pintu'),
                'aksesoris' => $this->POST('aksesoris'),
                'tebal_frame_kisi' => $this->POST('tebal_frame_kisi'),
                'tebal_rangka_pintu' => $this->POST('tebal_rangka_pintu'),
                'sliding_gear' => $this->POST('sliding_gear'),
                'foto' => "/assets/upload/product/" . $foto_id . ".jpg",
                'galery' => json_encode($galery)
            ];

            $this->Product_m->insert($data);
            $this->flashmsg('Success Save product', 'success');
            redirect('admin/product');
            exit;
        }
        $this->data['title'] = 'Product';
        $this->data['content'] = 'tambah_product';
        $this->template($this->data, $this->module);
    }


    public function product()
    {
        $this->data['products'] = $this->Product_m->get();
        $this->data['title'] = 'product';
        $this->data['content'] = 'product';
        $this->template($this->data, $this->module);
    }
    public function detail_product($id)
    {
        if ( !isset($id) )
        {
            $this->flashmsg('Product tidak ditemukan', 'danger');
            redirect('admin/product');
            exit;
        }

        $this->data['product'] = $this->Product_m->get_row(['id' => $id]);
        $this->data['title'] = 'product';
        $this->data['content'] = 'detail_product';
        $this->template($this->data, $this->module);
    }

    public function delete_product($id)
    {
        if ( !isset($id) )
        {
            $this->flashmsg('Product tidak ditemukan', 'danger');
            redirect('admin/product');
            exit;
        }

        $this->Product_m->delete($id);
        $this->flashmsg('Product telah di hapus', 'success');
        redirect('admin/product');
        exit;
    }
    public function client()
    {
        if($this->POST('create')){
            $image_url = $this->__generate_random_id();
            $this->upload($image_url , "client" , 'foto');
            $data = [
                "nama" => $this->POST('nama'),
                "detail" => $this->POST('detail'),
                "image" => "client/" . $image_url . ".jpg"
            ];
            $this->Client_m->insert($data);
            $this->flashmsg('Client Berhasil ditambah', 'success');
            redirect('admin/client');
            exit;
        }
        $this->data['clients'] = $this->Client_m->get();
        $this->data['title'] = 'Client';
        $this->data['content'] = 'client';
        $this->template($this->data, $this->module);
    }

    public function delete_client($id)
    {
        if ( !isset($id) )
        {
            $this->flashmsg('Client tidak ditemukan', 'danger');
            redirect('admin/client');
            exit;
        }

        $this->Client_m->delete($id);
        $this->flashmsg('Client telah di hapus', 'success');
        redirect('admin/client');
        exit;
    }

    public function foto_depan()
    {
        if ( $this->POST('simpan') )
        {
            if ( count($_FILES['photos']) > 0 )
            {
                $name = $this->multiple_upload('home', 'photos');
                foreach ($name as $value)
                {
                    $this->Home_image_m->insert([
                        "url" => "/assets/upload/home/" . $value
                    ]);
                }
            }

            $this->flashmsg('Success Save Foto', 'success');
            redirect('admin/foto-depan');
            exit;
        }
        $this->data['photos'] = $this->Home_image_m->get();
        $this->data['title'] = 'alamat';
        $this->data['content'] = 'foto_depan';
        $this->template($this->data, $this->module);
    }
}
