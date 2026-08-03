<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_model extends CI_Model
{
    public function get_services()
{
    return $this->db->order_by('id', 'DESC')
                    ->get('service')
                    ->result();
}

public function get_service($id)
{
    return $this->db->where('id', $id)
                    ->get('service')
                    ->row();
}

public function get_blogs()
{
    return $this->db->order_by('id', 'DESC')
                    ->get('blog')
                    ->result();
}

public function get_blog($id)
{
    return $this->db->where('id', $id)
                    ->get('blog')
                    ->row();
}
public function get_portfolios()
{
    return $this->db->order_by('id', 'DESC')
                    ->get('portfolio')
                    ->result();
}

public function get_portfolio($id)
{
    return $this->db->where('id', $id)
                    ->get('portfolio')
                    ->row();
}
public function general()
{
    return $this->db->get('general')->row();
}
}