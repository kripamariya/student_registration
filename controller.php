<?php

class controller{

	public function reg(){
		header('Location:views/registration.php');
	}
	public function login(){
		header('Location:views/login.php');
	}
	public function update_form(){
		header('Location:update_form.php');
	}
	public function update_formx(){
		header('Location:update_formx.php');
	}
	public function stud_list(){
		header('Location:student_list.php');
	}
	public function back(){
		header('Location:student_list.php');
	}
	public function acad_list(){
		header('Location:academic_view.php');
	}
	public function mark_list(){
		header('Location:mark_list.php');
	}
	public function view_sub(){
		header('Location:sub_view.php');
	}
	public function asub(){
		header('Location:add_subject.php');
	}
	public function stud_mark_list(){
		header('Location:mark_view.php');
	}
    public function view_markl(){
		header('Location:mark_list.php');
	}
	public function amark(){
		header('Location:mark_add.php');
	}

}

?>