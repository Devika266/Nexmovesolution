<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->library('session');
		$this->load->helper('url');

		// Authentication check - skip for login, logout, and auth methods
		$method = $this->router->fetch_method();
		$allowed_methods = ['login', 'logout', 'authenticate'];
		if (!in_array($method, $allowed_methods)) {
			if (!$this->Auth_model->is_logged_in()) {
				redirect('admin/login');
			}
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function login()
	{
		// If already logged in, redirect to dashboard
		if ($this->Auth_model->is_logged_in()) {
			redirect('/');
		}
		$this->load->view('Admin/login');
	}

	public function authenticate()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Please enter both username and password.');
			redirect('admin/login');
		}

		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$remember = $this->input->post('remember');
		$result = $this->Auth_model->login($username, $password);

		if ($result) {
			$session_data = array(
				'admin_id'       => $result->id,
				'admin_username' => $result->username,
				'admin_email'    => $result->email,
				'admin_logged_in' => true
			);
			$this->session->set_userdata($session_data);

			if ($remember) {
				$this->session->sess_expiration = 86400 * 30; // 30 days
			}

			$this->session->set_flashdata('success', 'Welcome back, ' . $result->username . '!');
			redirect('admin');
		} else {
			$this->session->set_flashdata('error', 'Invalid username or password.');
			redirect('admin/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function index()
	{
		$data['total_services'] = count($this->Admin_model->service());
		$data['total_portfolios'] = count($this->Admin_model->portfolio());
		$data['total_blogs'] = count($this->Admin_model->blog());
		$this->load->view('Admin/dashboard', $data);
	}
	public function settings()
	{
		$data['settings']=$this->Admin_model->general();
		$this->load->view('Admin/settings', $data);
	}
	public function seo()
	{
		$this->load->view('Admin/seo');
	}
	public function service()
	{
		$data['service']=$this->Admin_model->service();
		
		$this->load->view('Admin/service', $data);
	}
	public function portfolio()
	{
		$data['portfolio']=$this->Admin_model->portfolio();
		$this->load->view('Admin/portfolio', $data);
	}
	public function blog()
	{
		$data['blog']=$this->Admin_model->blog();
		$this->load->view('Admin/blog', $data);
	}
	public function edit()
	{
		// For add mode - pass null so the view shows empty fields
		$data['service'] = null;
		$data['offers'] = [];
		$data['steps'] = [];
		$data['benefits'] = [];
		$data['selected_technologies'] = [];
		$this->load->view('Admin/service_add', $data);
	}
	public function editportfolio()
	{
		// For add mode - pass null so the view shows empty fields
		$data['portfolio'] = null;
		$this->load->view('Admin/portfolio_add', $data);
	}
	public function editblog()
	{
		// For add mode - pass null so the view shows empty fields
		$data['blog'] = null;
		$this->load->view('Admin/blog_add', $data);
	}

	public function general_settings(){
		$id=$this->input->post('id');

		$data['website_name']=$this->input->post('websitename');
		$data['tagline']=$this->input->post('tagline');
		$data['about_company']=$this->input->post('about_company');
		$data['email_address']=$this->input->post('email');
		$data['phone_no']=$this->input->post('phone');
		$data['whatsApp_number']=$this->input->post('whatsapp');
		$data['address']=$this->input->post('address');
		$data['Facebook_URL']=$this->input->post('facebook_url');
		$data['Instagram_URL']=$this->input->post('instagram_url');
		$data['LinkedIn_URL']=$this->input->post('linkedin_url');

		// Get existing settings for old image paths
        $settings = $this->Admin_model->general();

		// Handle Logo upload
        if (!empty($_FILES['logo']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('logo')) {
                $upload_data = $this->upload->data();
                $data['Website_Logo'] = $upload_data['file_name'];
                if ($settings && !empty($settings->Website_Logo)) {
                    $old_path = FCPATH . 'uploads/' . $settings->Website_Logo;
                    if (file_exists($old_path)) unlink($old_path);
                }
            }
        }

        // Handle White Logo upload
        if (!empty($_FILES['white_logo']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('white_logo')) {
                $upload_data = $this->upload->data();
                $data['White_Logo'] = $upload_data['file_name'];
                if ($settings && !empty($settings->White_Logo)) {
                    $old_path = FCPATH . 'uploads/' . $settings->White_Logo;
                    if (file_exists($old_path)) unlink($old_path);
                }
            }
        }

        // Handle Favicon upload
        if (!empty($_FILES['favicon']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|ico';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('favicon')) {
                $upload_data = $this->upload->data();
                $data['Favicon'] = $upload_data['file_name'];
                if ($settings && !empty($settings->Favicon)) {
                    $old_path = FCPATH . 'uploads/' . $settings->Favicon;
                    if (file_exists($old_path)) unlink($old_path);
                }
            }
        }

		$this->Admin_model->au_general($data, $id);

		redirect('settings');
	}
	
	public function service_settings()
	{
    $id = $this->input->post('id');

    $data['service_name'] = $this->input->post('service_name');
    $data['slug'] = $this->input->post('slug');
    $data['shot_description'] = $this->input->post('short_description');
    $data['long_description'] = $this->input->post('long_description');

    $offers = [];

	$offer_titles = $this->input->post('offer_title');
	$offer_icons  = $this->input->post('offer_icon');

	if (!empty($offer_titles)) {
		foreach ($offer_titles as $key => $title) {
			$offers[] = [
				'title' => $title,
				'icon'  => $offer_icons[$key] ?? ''
			];
		}
	}

	$data['offers'] = json_encode($offers);

		$steps = [];

	$step_titles = $this->input->post('process_title');
	$step_descriptions = $this->input->post('process_description');

	if (!empty($step_titles)) {
		foreach ($step_titles as $key => $title) {
			$steps[] = [
				'title'       => $title,
				'description' => $step_descriptions[$key] ?? ''
			];
		}
	}

	$data['steps'] = json_encode($steps);
		

	$benefits = [];

	$benefit_titles = $this->input->post('benefit_title');
	$benefit_descriptions = $this->input->post('benefit_description');

	if (!empty($benefit_titles)) {
		foreach ($benefit_titles as $key => $title) {
			$benefits[] = [
				'title'       => $title,
				'description' => $benefit_descriptions[$key] ?? ''
			];
		}
	}

	$data['benefits'] = json_encode($benefits);

    // Handle Technologies
    $technologies = $this->input->post('technologies');
    $data['technologies'] = !empty($technologies) ? json_encode($technologies) : json_encode([]);

    // Handle image upload
    if (!empty($_FILES['service_image']['name'])) {
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('service_image')) {
            $upload_data = $this->upload->data();
            $data['service_image'] = $upload_data['file_name'];

            // Delete old image if editing
            if (!empty($id)) {
                $old = $this->Admin_model->get_service($id);
                if ($old && !empty($old->service_image)) {
                    $old_path = FCPATH . 'uploads/' . $old->service_image;
                    if (file_exists($old_path)) {
                        unlink($old_path);
                    }
                }
            }
        }
    }

    // Save
    $this->Admin_model->au_service($data, $id);

    // Redirect
    redirect('admin/service');
}

	
	public function editing($id)
{
    $service = $this->Admin_model->get_service($id);

    $data['service'] = $service;

    // Offers
    $data['offers'] = !empty($service->offers)
        ? json_decode($service->offers, true)
        : [];

    // Work Process
    $data['steps'] = !empty($service->steps)
        ? json_decode($service->steps, true)
        : [];

    // Benefits
    $data['benefits'] = !empty($service->benefits)
        ? json_decode($service->benefits, true)
        : [];

    // Technologies
    $selected_technologies = !empty($service->technologies)
        ? json_decode($service->technologies, true)
        : [];
    $data['selected_technologies'] = is_array($selected_technologies) ? $selected_technologies : [];

    // Load the view
    $this->load->view('Admin/service_add', $data);
	}
	public function delete_service($id)
	{
		$this->Admin_model->delete_service($id);

		redirect('admin/service');
	}
	public function edit_portfolio($id)
{
    $portfolio = $this->Admin_model->get_portfolio($id);

    $data['portfolio'] = $portfolio;

    $this->load->view('Admin/portfolio_add', $data);
	}
	public function delete_portfolio($id)
	{
		$this->Admin_model->delete_portfolio($id);

		redirect('admin/portfolio');
	}
	public function portfolio_settings(){
		$id=$this->input->post('id');

		$data['project_name']=$this->input->post('project_name');
		$data['slug']=$this->input->post('slug');
		$data['client_name']=$this->input->post('client_name');
		$data['service']=$this->input->post('service');
		$data['platform']=$this->input->post('platform');
		$data['project_date']=$this->input->post('project_date');
		$data['banner_title']=$this->input->post('banner_title');
		$data['breadcrumb_title']=$this->input->post('breadcrumb_title');
		$data['banner_description']=$this->input->post('banner_description');
		$data['section_heading']=$this->input->post('overview_title');
		$data['overview_description']=$this->input->post('overview_description');
		$overview_points = $this->input->post('overview_points');

$data['bullet_point'] = !empty($overview_points)
    ? json_encode($overview_points)
    : json_encode([]);
	$data['result_heading']=$this->input->post('result_title');
		$data['result_description']=$this->input->post('result_description');

		// Get existing portfolio for old image paths
		$old_portfolio = null;
		if (!empty($id)) {
			$old_portfolio = $this->Admin_model->get_portfolio($id);
		}

		if (!empty($_FILES['banner_image']['name'])) {

    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['max_size']      = 2048;
    $config['encrypt_name']  = TRUE;

    $this->load->library('upload');
    $this->upload->initialize($config);

    
}

// ================= Main Image Upload =================

if (!empty($_FILES['main_image']['name'])) {

    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['max_size']      = 2048;
    $config['encrypt_name']  = TRUE;

    $this->upload->initialize($config);

    if ($this->upload->do_upload('main_image')) {

        $upload_data = $this->upload->data();
        $data['project_img'] = $upload_data['file_name'];

		// Delete old main image
		if ($old_portfolio && !empty($old_portfolio->project_img)) {
			$old_path = FCPATH . 'uploads/' . $old_portfolio->project_img;
			if (file_exists($old_path)) unlink($old_path);
		}

    } else {

        die($this->upload->display_errors());

    }
}

		// Save
    $this->Admin_model->au_portfolio($data, $id);

    // Redirect
    redirect('admin/portfolio');
	}

	public function blog_settings(){
		$id=$this->input->post('id');

		$data['hero_tittle']=$this->input->post('hero_tittle');
		$data['hero_description']=$this->input->post('hero_description');
		$data['blog_title']=$this->input->post('blog_title');
		$data['blog_description']=$this->input->post('blog_description');
		$data['blog_content']=$this->input->post('blog_content');

		$this->load->library('upload');

		// Handle Hero Background Image upload
		if (!empty($_FILES['bg_img']['name'])) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|webp';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('bg_img')) {
				$upload_data = $this->upload->data();
				$data['bg_img'] = $upload_data['file_name'];

				// Delete old image if editing
				if (!empty($id)) {
					$old = $this->Admin_model->get_blog($id);
					if ($old && !empty($old->bg_img)) {
						$old_path = FCPATH . 'uploads/' . $old->bg_img;
						if (file_exists($old_path)) {
							unlink($old_path);
						}
					}
				}
			}
		}

		// Handle Featured Image upload
		if (!empty($_FILES['featured_img']['name'])) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|webp';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('featured_img')) {
				$upload_data = $this->upload->data();
				$data['featured_img'] = $upload_data['file_name'];

				// Delete old image if editing
				if (!empty($id)) {
					$old = $this->Admin_model->get_blog($id);
					if ($old && !empty($old->featured_img)) {
						$old_path = FCPATH . 'uploads/' . $old->featured_img;
						if (file_exists($old_path)) {
							unlink($old_path);
						}
					}
				}
			}
		}

		$this->Admin_model->au_blog($data, $id);

		redirect('admin/blog');
	}
	public function edit_blog($id)
{
    $blog = $this->Admin_model->get_blog($id);

    $data['blog'] = $blog;

    $this->load->view('Admin/blog_add', $data);
	}
	public function delete_blog($id)
	{
		$this->Admin_model->delete_blog($id);

		redirect('admin/blog');
	}
public function delete_blog_image($id)
{

    $blog=$this->Admin_model->get_blog($id);

    if(!empty($blog->bg_img))
    {

        $path='./uploads/'.$blog->bg_img;

        if(file_exists($path))
        {
            unlink($path);
        }

        $this->db->where('id',$id);
        $this->db->update('blog',array(
            'bg_img'=>''
        ));

    }

    echo json_encode(array(
        'status'=>'success'
    ));

}
public function delete_blog_featured_image($id)
{

    $blog=$this->Admin_model->get_blog($id);

    if(!empty($blog->featured_img))
    {

        $path='./uploads/'.$blog->featured_img;

        if(file_exists($path))
        {
            unlink($path);
        }

        $this->db->where('id',$id);
        $this->db->update('blog',array(
            'featured_img'=>''
        ));

    }

    echo json_encode(array(
        'status'=>'success'
    ));

}
public function delete_portfolio_banner_image($id)
{

    $portfolio=$this->Admin_model->get_portfolio($id);

    if(!empty($portfolio->background_img))
    {

        $path='./uploads/'.$portfolio->background_img;

        if(file_exists($path))
        {
            unlink($path);
        }

        $this->db->where('id',$id);
        $this->db->update('portfolio',array(
            'background_img'=>''
        ));

    }

    echo json_encode(array(
        'status'=>'success'
    ));

}
public function delete_portfolio_main_image($id)
{

    $portfolio=$this->Admin_model->get_portfolio($id);

    if(!empty($portfolio->project_img))
    {

        $path='./uploads/'.$portfolio->project_img;

        if(file_exists($path))
        {
            unlink($path);
        }

        $this->db->where('id',$id);
        $this->db->update('portfolio',array(
            'project_img'=>''
        ));

    }

    echo json_encode(array(
        'status'=>'success'
    ));

}
public function delete_settings_logo()
{
    $settings=$this->Admin_model->general();

    if(!empty($settings->Website_Logo))
    {
        $path='./uploads/'.$settings->Website_Logo;
        if(file_exists($path)) { unlink($path); }
        $this->db->where('id',1);
        $this->db->update('general',array('Website_Logo'=>''));
    }
    echo json_encode(array('status'=>'success'));
}
public function delete_settings_white_logo()
{
    $settings=$this->Admin_model->general();

    if(!empty($settings->White_Logo))
    {
        $path='./uploads/'.$settings->White_Logo;
        if(file_exists($path)) { unlink($path); }
        $this->db->where('id',1);
        $this->db->update('general',array('White_Logo'=>''));
    }
    echo json_encode(array('status'=>'success'));
}
public function delete_settings_favicon()
{
    $settings=$this->Admin_model->general();

    if(!empty($settings->Favicon))
    {
        $path='./uploads/'.$settings->Favicon;
        if(file_exists($path)) { unlink($path); }
        $this->db->where('id',1);
        $this->db->update('general',array('Favicon'=>''));
    }
    echo json_encode(array('status'=>'success'));
}
public function delete_service_image($id)
{

    $service=$this->Admin_model->get_service($id);

    if(!empty($service->service_image))
    {

        $path='./uploads/'.$service->service_image;

        if(file_exists($path))
        {
            unlink($path);
        }

        $this->db->where('id',$id);
        $this->db->update('service',array(
            'service_image'=>''
        ));

    }

    echo json_encode(array(
        'status'=>'success'
    ));

}
}
