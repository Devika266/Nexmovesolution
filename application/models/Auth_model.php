<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Verify admin credentials
     */
    public function login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');

        if ($query->num_rows() === 1) {
            $admin = $query->row();

            if (password_verify($password, $admin->password)) {
                return $admin;
            }
        }

        return false;
    }

    /**
     * Check if user is logged in
     */
    public function is_logged_in() {
        return $this->session->userdata('admin_logged_in') === true;
    }

    /**
     * Get admin by ID
     */
    public function get_admin($id) {
        $this->db->where('id', $id);
        return $this->db->get('admin')->row();
    }
}

