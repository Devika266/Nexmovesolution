<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
public function index()
{
     $this->load->model('Admin_model');
    $data['general'] = $this->Admin_model->general();
    $data['portfolios'] = $this->Admin_model->get_portfolios();
    $data['services'] = $this->Admin_model->service();
    $data['blogs'] = $this->Admin_model->get_latest_blogs(3);

    $this->load->view('website/home', $data);
}
public function home()
{
    $this->load->model('Admin_model');
    $data['general'] = $this->Admin_model->general();
    $data['portfolios'] = $this->Admin_model->get_portfolios();
    $data['services'] = $this->Admin_model->service();
    $data['blogs'] = $this->Admin_model->get_latest_blogs(3);

    $this->load->view('website/home', $data);
}

public function privacy()
{

    $this->load->view('website/privacy');
}
public function cookies()
{

    $this->load->view('website/cookies');
}
public function refund()
{

    $this->load->view('website/refund');
}
public function term()
{

    $this->load->view('website/term');
}
public function thank_you()
{
    
    $this->load->view('website/thank-you');
}
public function about()
	{
		$this->load->model('Admin_model');
    $data['general'] = $this->Admin_model->general();
     $data['portfolios'] = $this->Admin_model->get_portfolios();
     $data['services'] = $this->Admin_model->service();
    $this->load->view('website/about', $data);
	}
public function blog()
	{
		$this->load->model('Admin_model');
		$data['general'] = $this->Admin_model->general();
		$data['services'] = $this->Admin_model->service();

		$data['blogs'] = $this->Admin_model->blog();

		$this->load->view('website/blog', $data);
	}
public function portfoliomain()
{
	$this->load->model('Admin_model');
	$data['general'] = $this->Admin_model->general();
	$data['services'] = $this->Admin_model->service();

	$data['portfolios'] = $this->Admin_model->get_portfolios();

	$this->load->view('website/portfoliomain', $data);
}
	public function service($slug)
{
	$this->load->model('Admin_model');
	$data['general'] = $this->Admin_model->general();
	$data['services'] = $this->Admin_model->service();

	// Get service by slug or ID
	if (is_numeric($slug)) {
		$service = $this->Admin_model->get_service($slug);
	} else {
		$service = $this->Admin_model->get_service_by_slug($slug);
	}

	if (empty($service)) {
		show_404();
		return;
	}

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
	$technologies = !empty($service->technologies)
		? json_decode($service->technologies, true)
		: [];

	$data['technologies'] = is_array($technologies)
		? $technologies
		: [];

	$this->load->view('website/service', $data);
}
	public function blogdetail($slug)
{
	$this->load->model('Admin_model');
	$data['general'] = $this->Admin_model->general();
	$data['services'] = $this->Admin_model->service();

	$blog = $this->Admin_model->get_blog($slug);

	if (empty($blog)) {
		show_404();
		return;
	}

	$data['blog'] = $blog;

	$this->load->view('website/blogdetail', $data);
}
	public function contact()
	{
		$this->load->model('Admin_model');
		$data['services'] = $this->Admin_model->service();
		$data['settings'] = $this->Admin_model->general();

		$this->load->view('website/contact', $data);
	}

	public function portfolio($slug)
{
	$this->load->model('Admin_model');
	$data['general'] = $this->Admin_model->general();
	$data['services'] = $this->Admin_model->service();
	
	if (is_numeric($slug)) {
		$portfolio = $this->Admin_model->get_portfolio($slug);
	} else {
		$portfolio = $this->Admin_model->get_portfolio_slug($slug);
	}

	if (empty($portfolio)) {
		show_404();
		return;
	}

	$data['portfolio'] = $portfolio;

	$this->load->view('website/portfolio', $data);
}
}

