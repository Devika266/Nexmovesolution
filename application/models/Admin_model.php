<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function au_general($data, $id=''){
        if ($id=='') {
            $this->db->insert('general', $data);
        } else {
            $this->db->where('id', $id);
            $this->db->update('general', $data);
        }
    }

    public function general(){
        $this->db->where('id',1);
        return $this->db->get('general')->row();
    }
    public function au_service($data, $id = '')
{
    if (empty($id)) {
        return $this->db->insert('service', $data);
    } else {
        $this->db->where('id', $id);
        return $this->db->update('service', $data);
    }
}
    public function delete_service($id)
{
    $this->db->where('id', $id);
    return $this->db->delete('service');
}

    public function service(){
        return $this->db->get('service')->result();
    }
    // Get one service by ID
    public function get_service($id)
{
    $this->db->where('id', $id);
    return $this->db->get('service')->row();
}
public function get_service_by_slug($slug)
{
    $this->db->where('slug', $slug);
    return $this->db->get('service')->row();
}
    
    public function au_portfolio($data, $id = '')
{
    if (empty($id)) {
        return $this->db->insert('portfolio', $data);
    } else {
        $this->db->where('id', $id);
        return $this->db->update('portfolio', $data);
    }
}
    public function delete_portfolio($id)
{
    $this->db->where('id', $id);
    return $this->db->delete('portfolio');
}

    public function portfolio(){
        return $this->db->get('portfolio')->result();
    }
    // Get one service by ID
    public function get_portfolio($slug)
    {
        $this->db->where('id', $slug);
        return $this->db->get('portfolio')->row();   // <-- service, not services
    }

    public function get_portfolio_slug($slug)
    {
        $this->db->where('slug', $slug);
        return $this->db->get('portfolio')->row();   // <-- service, not services
    }

     public function au_blog($data, $id = '')
{
    if (empty($id)) {
        return $this->db->insert('blog', $data);
    } else {
        $this->db->where('id', $id);
        return $this->db->update('blog', $data);
    }
}
    public function delete_blog($id)
{
    $this->db->where('id', $id);
    return $this->db->delete('blog');
}

    public function blog(){
        return $this->db->get('blog')->result();
    }
    public function get_latest_blogs($limit = 3){
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);
        return $this->db->get('blog')->result();
    }
    // Get one service by ID
    public function get_blog($slug)
    {
        $this->db->where('slug', $slug);
        return $this->db->get('blog')->row();  
    }

    public function get_portfolios()
{
    return $this->db->order_by('id', 'DESC')
                    ->get('portfolio')
                    ->result();
}

}