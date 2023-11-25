<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Crud_model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }
    public function add($name, $email, $course, $age)
    {
        $data = array(
            'name' => $name,
            'email' => $email,
            'course' => $course,
            'age' => $age,
        );
        return $this->db->table('student_info')
            ->insert($data);
    }
    public function read()
    {
        return $this->db->table('student_info')->get_all();
    }
    public function delete($id)
    {
        $result = $this->db->table('student_info')->where(array('id' => $id))->delete();
        if ($result)
            return true;
    }
    public function edit($id, $name, $email, $course, $age)
    {
        $data = array(
            'name' => $name,
            'email' => $email,
            'course' => $course,
            'age' => $age,
        );
        $result = $this->db->table('student_info')->insert($data)->where(array('id' => $id))->delete();
        if ($result)
            return true;
    }
    public function student_data($id){
        return $this->db->table('student_info')->where(array('id' => $id))->get();
    }
}
