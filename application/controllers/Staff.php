<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $data['department']=$this->Department_model->select_departments();
        $data['position']=$this->Position_model->select_position();
        $this->load->view('admin/header');
        $this->load->view('admin/add-staff',$data);
        $this->load->view('admin/footer');
    }

    public function manage()
    {
        $data['content']=$this->Staff_model->select_staff();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-staff',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('midname', 'Middle Name', 'required');
        $this->form_validation->set_rules('empid', 'Employee Id', 'required');
        $this->form_validation->set_rules('empstatus', 'Employee Status', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of joining', 'required');
        $this->form_validation->set_rules('txtemail', 'email', 'required');
        $this->form_validation->set_rules('txtmobile', 'mobile', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('sss', 'sss', 'required');
        $this->form_validation->set_rules('philhealth', 'philhealth', 'required');
        $this->form_validation->set_rules('pagibig', 'pagibig', 'required');
        $this->form_validation->set_rules('tin', 'tin', 'required');
        $this->form_validation->set_rules('permanent_address', 'permanent_address', 'required');
        $this->form_validation->set_rules('present_address', 'present_address', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
        $this->form_validation->set_rules('nationality', 'nationality', 'required');
        $this->form_validation->set_rules('religion', 'religion', 'required');
        $this->form_validation->set_rules('birthplace', 'birthplace', 'required');
        $this->form_validation->set_rules('txtdob', 'Date of birth', 'required');
        $this->form_validation->set_rules('civilstatus', 'civil status', 'required');
        $this->form_validation->set_rules('height', 'height', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('father', 'father', 'required');
        $this->form_validation->set_rules('mother', 'mother', 'required');
        $this->form_validation->set_rules('maiden_name', 'maiden name', 'required');
        $this->form_validation->set_rules('spouse_name', 'spouse name', 'required');
        $this->form_validation->set_rules('spouse_birthplace', 'spouse birthplace', 'required');
        $this->form_validation->set_rules('spouse_date', 'spouse birthdate', 'required');

        
        $lname=$this->input->post('lname');
        $fname=$this->input->post('fname');
        $midname=$this->input->post('midname');
        $suffixname=$this->input->post('suffix');
        $empid=$this->input->post('empid');
        $empstatus=$this->input->post('empstatus');
        $position=$this->input->post('position');
        $doj=$this->input->post('txtdoj');
        $email=$this->input->post('txtemail');
        $mobile=$this->input->post('txtmobile');
        $department=$this->input->post('slcdepartment');
        $sss=$this->input->post('sss');
        $philhealth=$this->input->post('philhealth');
        $pagibig=$this->input->post('pagibig');
        $tin=$this->input->post('tin');
        $permanent_address=$this->input->post('permanent_address');
        $present_address=$this->input->post('present_address');
        $gender=$this->input->post('slcgender');
        $nationality=$this->input->post('nationality');
        $religion=$this->input->post('religion');
        $birthplace=$this->input->post('birthplace');
        $dob=$this->input->post('txtdob');
        $civilstatus=$this->input->post('civilstatus');
        $height=$this->input->post('height');
        $weight=$this->input->post('weight');
        $father=$this->input->post('father');
        $mother=$this->input->post('mother');
        $maiden_name=$this->input->post('maiden_name');
        $spouse_name=$this->input->post('spouse_name');
        $spouse_birthplace=$this->input->post('spouse_birthplace');
        $spouse_date=$this->input->post('spouse_date');
        $added=$this->session->userdata('userid');
        
        $company_names=$this->input->post('company_name');
        $company_addresss=$this->input->post('company_address');
        $company_telnos=$this->input->post('company_telno');
        $company_positions=$this->input->post('position_lvl');
        $company_salarys=$this->input->post('prev_salary');
        $company_dates=$this->input->post('inc_date');
        $company_reasons=$this->input->post('reason');

        $elem_school=$this->input->post('elem_school');
        $elem_date=$this->input->post('elem_year');
        $elem_honor=$this->input->post('elem_honor');
        $high_school=$this->input->post('high_school');
        $high_date=$this->input->post('high_year');
        $high_honor=$this->input->post('high_honor');
        $college_school=$this->input->post('college_school');
        $college_date=$this->input->post('college_year');
        $college_honor=$this->input->post('college_honor');
        $college_degree=$this->input->post('college_degree');
        $graduate_school=$this->input->post('graduate_school');
        $graduate_date=$this->input->post('graduate_year');
        $graduate_honor=$this->input->post('graduate_honor');
        $graduate_degree=$this->input->post('graduate_degree');
        $trade=$this->input->post('trade_school');
        $trade_date=$this->input->post('trade_year');
        $trade_honor=$this->input->post('trade_honor');
        $cert=$this->input->post('cert_school');
        $cert_date=$this->input->post('cert_year');
        $cert_honor=$this->input->post('cert_honor');

        $project_names=$this->input->post('project_names');
        $proj_com_names=$this->input->post('proj_com_names');
        $start_dates=$this->input->post('start_dates');
        $accomplish_dates=$this->input->post('date_accomplishs');

        if($this->form_validation->run() !== false)
        {
            $this->load->library('image_lib');
            $config['upload_path']= 'uploads/profile-pic/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('filephoto'))
            {
                $image='default-pic.jpg';
            }
            else
            {
                $image_data =   $this->upload->data();

                $configer =  array(
                    'image_library'   => 'gd2',
                    'source_image'    =>  $image_data['full_path'],
                    'maintain_ratio'  =>  TRUE,
                    'width'           =>  150,
                    'height'          =>  150,
                    'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                $image=$image_data['file_name'];
            }
            $login=$this->Home_model->insert_login(array('username'=>$email,'password'=>$fname."123",'usertype'=>2));
            if($login>0)
            {
                $data=$this->Staff_model->insert_staff(array('id'=>$login,'lastname'=>$lname,'firstname'=>$fname,'midname'=>$midname, 'suffix'=>$suffixname, 'empid'=>$empid, 'empstatus'=>$empstatus, 'position'=>$position, 'doj'=>$doj, 'email'=>$email, 'mobile'=>$mobile, 'department_id'=>$department, 'sss'=>$sss, 'philhealth'=>$philhealth, 'pagibig'=>$pagibig, 'tin'=>$tin, 'permanent_address'=>$permanent_address, 'present_address'=>$present_address, 'gender'=>$gender, 'nationality'=>$nationality, 'religion'=>$religion, 'birthplace'=>$birthplace, 'dob'=>$dob, 'civil_status'=>$civilstatus, 'height'=>$height, 'weight'=>$weight, 'father_name'=>$father, 'mother_name'=>$mother, 'maiden_name'=>$maiden_name, 'spouse_name'=>$spouse_name, 'spouse_place'=>$spouse_birthplace, 'spouse_date'=>$spouse_date, 'pic'=>$image,'added_by'=>$added));

                $educdata=$this->Staff_model->insert_staff_educ(array('staff_id'=>$login,'elem_school'=>$elem_school,'elem_date'=>$elem_date,'elem_honor'=>$elem_honor,'high_school'=>$high_school,'high_date'=>$high_date,'high_honor'=>$high_honor,'college_school'=>$college_school,'college_date'=>$college_date, 'college_honor'=>$college_honor,'college_degree'=>$college_degree,'graduate_school'=>$graduate_school,'graduate_date'=>$graduate_date,'graduate_honor'=>$graduate_honor,'graduate_degree'=>$graduate_degree,'trade'=>$trade,'trade_date'=>$trade_date,'trade_honor'=>$trade_honor, 'cert'=>$cert,'cert_date'=>$cert_date,'cert_honor'=>$cert_honor));
                for ($i = 0; $i < count($company_names); $i++) {
                    $company_name = $company_names[$i];
                    $company_address = $company_addresss[$i];
                    $company_telno = $company_telnos[$i];
                    $company_position = $company_positions[$i];
                    $company_salary = $company_salarys[$i];
                    $company_date = $company_dates[$i];
                    $company_reason = $company_reasons[$i];
                    $this->Staff_model->insert_staff_exp(array('exp_id'=>$login,'company_name'=>$company_name,'company_address'=>$company_address,'company_telno'=>$company_telno,'company_position'=>$company_position,'company_salary'=>$company_salary,'company_date'=>$company_date,'company_reason'=>$company_reason));
                }

                for ($i = 0; $i < count($project_names); $i++) {
                    $project_name = $project_names[$i];
                    $proj_com_name = $proj_com_names[$i];
                    $start_date = $start_dates[$i];
                    $accomplish_date = $accomplish_dates[$i];
                    $this->Staff_model->insert_staff_proj(array('project_id'=>$login,'project_name'=>$project_name,'company_name'=>$proj_com_name,'started_date'=>$start_date,'accomplish_date'=>$accomplish_date));
                }
            }
            
            if($data==true)
            {
                
                $this->session->set_flashdata('success', "New Staff Added Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, New Staff Adding Failed.");
            }
            redirect(base_url()."manage-staff");
            // redirect($_SERVER['HTTP_REFERER']);
        }
        else{
            $this->index();
            return false;

        } 
    }

    public function update()
    {
        $this->load->helper('form');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('midname', 'Middle Name', 'required');
        $this->form_validation->set_rules('empid', 'Employee Id', 'required');
        $this->form_validation->set_rules('empstatus', 'Employee Status', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of joining', 'required');
        $this->form_validation->set_rules('txtemail', 'email', 'required');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number ', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('sss', 'sss', 'required');
        $this->form_validation->set_rules('philhealth', 'philhealth', 'required');
        $this->form_validation->set_rules('pagibig', 'pagibig', 'required');
        $this->form_validation->set_rules('tin', 'tin', 'required');
        $this->form_validation->set_rules('permanent_address', 'permanent_address', 'required');
        $this->form_validation->set_rules('present_address', 'present_address', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
        $this->form_validation->set_rules('nationality', 'nationality', 'required');
        $this->form_validation->set_rules('religion', 'religion', 'required');
        $this->form_validation->set_rules('birthplace', 'birthplace', 'required');
        $this->form_validation->set_rules('txtdob', 'Date of birth', 'required');
        $this->form_validation->set_rules('civilstatus', 'civil status', 'required');
        $this->form_validation->set_rules('height', 'height', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('father', 'father', 'required');
        $this->form_validation->set_rules('mother', 'mother', 'required');
        $this->form_validation->set_rules('maiden_name', 'maiden name', 'required');
        $this->form_validation->set_rules('spouse_name', 'spouse name', 'required');
        $this->form_validation->set_rules('spouse_birthplace', 'spouse birthplace', 'required');
        $this->form_validation->set_rules('spouse_date', 'spouse birthdate', 'required');

        $id=$this->input->post('txtid');
        $lname=$this->input->post('lname');
        $fname=$this->input->post('fname');
        $midname=$this->input->post('midname');
        $suffixname=$this->input->post('suffix');
        $empid=$this->input->post('empid');
        $empstatus=$this->input->post('empstatus');
        $position=$this->input->post('position');
        $doj=$this->input->post('txtdoj');
        $email=$this->input->post('txtemail');
        $mobile=$this->input->post('txtmobile');
        $department=$this->input->post('slcdepartment');
        $sss=$this->input->post('sss');
        $philhealth=$this->input->post('philhealth');
        $pagibig=$this->input->post('pagibig');
        $tin=$this->input->post('tin');
        $permanent_address=$this->input->post('permanent_address');
        $present_address=$this->input->post('present_address');
        $gender=$this->input->post('slcgender');
        $nationality=$this->input->post('nationality');
        $religion=$this->input->post('religion');
        $birthplace=$this->input->post('birthplace');
        $dob=$this->input->post('txtdob');
        $civilstatus=$this->input->post('civilstatus');
        $height=$this->input->post('height');
        $weight=$this->input->post('weight');
        $father=$this->input->post('father');
        $mother=$this->input->post('mother');
        $maiden_name=$this->input->post('maiden_name');
        $spouse_name=$this->input->post('spouse_name');
        $spouse_birthplace=$this->input->post('spouse_birthplace');
        $spouse_date=$this->input->post('spouse_date');
        $added=$this->session->userdata('userid');
        
        $expid=$this->input->post('expid');
        $company_names=$this->input->post('company_name');
        $company_addresss=$this->input->post('company_address');
        $company_telnos=$this->input->post('company_telno');
        $company_positions=$this->input->post('position_lvl');
        $company_salarys=$this->input->post('prev_salary');
        $company_dates=$this->input->post('inc_date');
        $company_reasons=$this->input->post('reason');

        $elem_school=$this->input->post('elem_school');
        $elem_date=$this->input->post('elem_year');
        $elem_honor=$this->input->post('elem_honor');
        $high_school=$this->input->post('high_school');
        $high_date=$this->input->post('high_year');
        $high_honor=$this->input->post('high_honor');
        $college_school=$this->input->post('college_school');
        $college_date=$this->input->post('college_year');
        $college_honor=$this->input->post('college_honor');
        $college_degree=$this->input->post('college_degree');
        $graduate_school=$this->input->post('graduate_school');
        $graduate_date=$this->input->post('graduate_year');
        $graduate_honor=$this->input->post('graduate_honor');
        $graduate_degree=$this->input->post('graduate_degree');
        $trade=$this->input->post('trade_school');
        $trade_date=$this->input->post('trade_year');
        $trade_honor=$this->input->post('trade_honor');
        $cert=$this->input->post('cert_school');
        $cert_date=$this->input->post('cert_year');
        $cert_honor=$this->input->post('cert_honor');

        $prjid=$this->input->post('prjid');
        $project_names=$this->input->post('project_name');
        $proj_com_names=$this->input->post('proj_com_name');
        $start_dates=$this->input->post('start_date');
        $accomplish_dates=$this->input->post('date_accomplish');

        if($this->form_validation->run() !== false)
        {
            $this->load->library('image_lib');
            $config['upload_path']= 'uploads/profile-pic/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('filephoto'))
            {
                $staff = array('lastname'=>$lname,'firstname'=>$fname,'midname'=>$midname, 'suffix'=>$suffixname, 'empid'=>$empid, 'empstatus'=>$empstatus, 'position'=>$position, 'doj'=>$doj, 'email'=>$email, 'mobile'=>$mobile, 'department_id'=>$department, 'sss'=>$sss, 'philhealth'=>$philhealth, 'pagibig'=>$pagibig, 'tin'=>$tin, 'permanent_address'=>$permanent_address, 'present_address'=>$present_address, 'gender'=>$gender, 'nationality'=>$nationality, 'religion'=>$religion, 'birthplace'=>$birthplace, 'dob'=>$dob, 'civil_status'=>$civilstatus, 'height'=>$height, 'weight'=>$weight, 'father_name'=>$father, 'mother_name'=>$mother, 'maiden_name'=>$maiden_name, 'spouse_name'=>$spouse_name, 'spouse_place'=>$spouse_birthplace, 'spouse_date'=>$spouse_date, 'added_by'=>$added);
                $educ = array('elem_school'=>$elem_school,'elem_date'=>$elem_date,'elem_honor'=>$elem_honor,'high_school'=>$high_school,'high_date'=>$high_date,'high_honor'=>$high_honor,'college_school'=>$college_school,'college_date'=>$college_date,'college_honor'=>$college_honor,'college_degree'=>$college_degree,'graduate_school'=>$graduate_school,'graduate_date'=>$graduate_date,'graduate_honor'=>$graduate_honor,'graduate_degree'=>$graduate_degree,'trade'=>$trade,'trade_date'=>$trade_date,'trade_honor'=>$trade_honor,'cert'=>$cert,'cert_date'=>$cert_date,'cert_honor'=>$cert_honor);
                // $exp = array('company_name'=>$company_name,'company_address'=>$company_address,'company_telno'=>$company_telno,'company_position'=>$company_position,'company_salary'=>$company_salary,'company_date'=>$company_date,'company_reason'=>$company_reason);
                // $proj = array('project_name'=>$project_name,'company_name'=>$proj_com_name,'started_date'=>$start_date,'accomplish_date'=>$accomplish_date);


                for ($i = 0; $i < count($company_addresss); $i++) {
                    $idd = $expid[$i];
                    $company_name = $company_names[$i];
                    $company_address = $company_addresss[$i];
                    $company_telno = $company_telnos[$i];
                    $company_position = $company_positions[$i];
                    $company_salary = $company_salarys[$i];
                    $company_date = $company_dates[$i];
                    $company_reason = $company_reasons[$i];
                    $this->Staff_model->update_all_staff(array('company_name'=>$company_name,'company_address'=>$company_address,'company_telno'=>$company_telno,'company_position'=>$company_position,'company_salary'=>$company_salary,'company_date'=>$company_date,'company_reason'=>$company_reason),'workexp_tbl','id', $idd);
                }


                for ($i = 0; $i < count($project_names); $i++) {
                    $idd = $prjid[$i];
                    $project_name = $project_names[$i];
                    $proj_com_name = $proj_com_names[$i];
                    $start_date = $start_dates[$i];
                    $accomplish_date = $accomplish_dates[$i];
                    $this->Staff_model->update_all_staff(array('project_name'=>$project_name,'company_name'=>$proj_com_name,'started_date'=>$start_date,'accomplish_date'=>$accomplish_date),'project_tbl','id', $idd);
                }

                $data=$this->Staff_model->update_staff($staff, $educ, $id);

                if(isset($_POST['edit_company_name'])){
                    $edit_company_addresss=$this->input->post('edit_company_address');
                    $edit_company_names=$this->input->post('edit_company_name');
                    $edit_company_telnos=$this->input->post('edit_company_telno');
                    $edit_position_lvls=$this->input->post('edit_position_lvl');
                    $edit_prev_salarys=$this->input->post('edit_prev_salary');
                    $edit_inc_dates=$this->input->post('edit_inc_date');
                    $edit_reasons=$this->input->post('edit_reason');
                    
                    for ($i = 0; $i < count($edit_company_names); $i++) {
                        $edit_company_address = $edit_company_addresss[$i];
                        $edit_company_name = $edit_company_names[$i];
                        $edit_company_telno = $edit_company_telnos[$i];
                        $edit_position_lvl = $edit_position_lvls[$i];
                        $edit_prev_salary = $edit_prev_salarys[$i];
                        $edit_inc_date = $edit_inc_dates[$i];
                        $edit_reason = $edit_reasons[$i];
                        $this->Staff_model->insert_staff_exp(array('exp_id'=>$id,'company_name'=>$edit_company_name,'company_address'=>$edit_company_address,'company_telno'=>$edit_company_telno,'company_position'=>$edit_position_lvl,'company_salary'=>$edit_prev_salary,'company_date'=>$edit_inc_date,'company_reason'=>$edit_reason));
                    }
                }

                if(isset($_POST['edit_project_name'])){
                    $edit_proj_com_names=$this->input->post('edit_proj_com_name');
                    $edit_project_names=$this->input->post('edit_project_name');
                    $edit_start_dates=$this->input->post('edit_start_date');
                    $edit_date_accomplishs=$this->input->post('edit_date_accomplish');
                    
                    for ($i = 0; $i < count($edit_project_names); $i++) {
                        $edit_proj_com_name = $edit_proj_com_names[$i];
                        $edit_project_name = $edit_project_names[$i];
                        $edit_start_date = $edit_start_dates[$i];
                        $edit_date_accomplish = $edit_date_accomplishs[$i];
                        
                        $this->Staff_model->insert_staff_proj(array('project_id'=>$id,'project_name'=>$edit_project_name,'company_name'=>$edit_proj_com_name,'started_date'=>$edit_start_date,'accomplish_date'=>$edit_date_accomplish));
                    }
                }
            }
            else
            {
                $image_data =   $this->upload->data();

                $configer =  array(
                'image_library'   => 'gd2',
                'source_image'    =>  $image_data['full_path'],
                'maintain_ratio'  =>  TRUE,
                'width'           =>  150,
                'height'          =>  150,
                'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $staff = array('lastname'=>$lname,'firstname'=>$fname,'midname'=>$midname, 'suffix'=>$suffixname, 'empid'=>$empid, 'empstatus'=>$empstatus, 'position'=>$position, 'doj'=>$doj, 'email'=>$email, 'mobile'=>$mobile, 'department_id'=>$department, 'sss'=>$sss, 'philhealth'=>$philhealth, 'pagibig'=>$pagibig, 'tin'=>$tin, 'permanent_address'=>$permanent_address, 'present_address'=>$present_address, 'gender'=>$gender, 'nationality'=>$nationality, 'religion'=>$religion, 'birthplace'=>$birthplace, 'dob'=>$dob, 'civil_status'=>$civilstatus, 'height'=>$height, 'weight'=>$weight, 'father_name'=>$father, 'mother_name'=>$mother, 'maiden_name'=>$maiden_name, 'spouse_name'=>$spouse_name, 'spouse_place'=>$spouse_birthplace, 'spouse_date'=>$spouse_date, 'pic'=>$image_data['file_name'], 'added_by'=>$added);
                $educ = array('elem_school'=>$elem_school,'elem_date'=>$elem_date,'elem_honor'=>$elem_honor,'high_school'=>$high_school,'high_date'=>$high_date,'high_honor'=>$high_honor,'college_school'=>$college_school,'college_date'=>$college_date,'college_honor'=>$college_honor,'college_degree'=>$college_degree,'graduate_school'=>$graduate_school,'graduate_date'=>$graduate_date,'graduate_honor'=>$graduate_honor,'graduate_degree'=>$graduate_degree,'trade'=>$trade,'trade_date'=>$trade_date,'trade_honor'=>$trade_honor);

                for ($i = 0; $i < count($company_names); $i++) {
                    $idd = $expid[$i];
                    $company_name = $company_names[$i];
                    $company_address = $company_addresss[$i];
                    $company_telno = $company_telnos[$i];
                    $company_position = $company_positions[$i];
                    $company_salary = $company_salarys[$i];
                    $company_date = $company_dates[$i];
                    $company_reason = $company_reasons[$i];
                    $this->Staff_model->update_all_staff(array('company_name'=>$company_name,'company_address'=>$company_address,'company_telno'=>$company_telno,'company_position'=>$company_position,'company_salary'=>$company_salary,'company_date'=>$company_date,'company_reason'=>$company_reason),'workexp_tbl','id', $idd);
                }

                if(isset($_POST['edit_company_name'])){
                    $edit_company_addresss=$this->input->post('edit_company_address');
                    $edit_company_names=$this->input->post('edit_company_name');
                    $edit_company_telnos=$this->input->post('edit_company_telno');
                    $edit_position_lvls=$this->input->post('edit_position_lvl');
                    $edit_prev_salarys=$this->input->post('edit_prev_salary');
                    $edit_inc_dates=$this->input->post('edit_inc_date');
                    $edit_reasons=$this->input->post('edit_reason');
                    
                    for ($i = 0; $i < count($edit_company_names); $i++) {
                        $edit_company_address = $edit_company_addresss[$i];
                        $edit_company_name = $edit_company_names[$i];
                        $edit_company_telno = $edit_company_telnos[$i];
                        $edit_position_lvl = $edit_position_lvls[$i];
                        $edit_prev_salary = $edit_prev_salarys[$i];
                        $edit_inc_date = $edit_inc_dates[$i];
                        $edit_reason = $edit_reasons[$i];
                        $this->Staff_model->insert_staff_exp(array('exp_id'=>$id,'company_name'=>$edit_company_name,'company_address'=>$edit_company_address,'company_telno'=>$edit_company_telno,'company_position'=>$edit_position_lvl,'company_salary'=>$edit_prev_salary,'company_date'=>$edit_inc_date,'company_reason'=>$edit_reason));
                    }
                }

                if(isset($_POST['edit_project_name'])){
                    $edit_proj_com_names=$this->input->post('edit_proj_com_name');
                    $edit_project_names=$this->input->post('edit_project_name');
                    $edit_start_dates=$this->input->post('edit_start_date');
                    $edit_date_accomplishs=$this->input->post('edit_date_accomplish');
                    
                    for ($i = 0; $i < count($edit_project_names); $i++) {
                        $edit_proj_com_name = $edit_proj_com_names[$i];
                        $edit_project_name = $edit_project_names[$i];
                        $edit_start_date = $edit_start_dates[$i];
                        $edit_date_accomplish = $edit_date_accomplishs[$i];
                        
                        $this->Staff_model->insert_staff_proj(array('project_id'=>$id,'project_name'=>$edit_project_name,'company_name'=>$edit_proj_com_name,'started_date'=>$edit_start_date,'accomplish_date'=>$edit_accomplish_date));
                    }
                }
                
                for ($i = 0; $i < count($project_names); $i++) {
                    $idd = $prjid[$i];
                    $project_name = $project_names[$i];
                    $proj_com_name = $proj_com_names[$i];
                    $start_date = $start_dates[$i];
                    $accomplish_date = $accomplish_dates[$i];
                    $this->Staff_model->update_all_staff(array('project_name'=>$project_name,'company_name'=>$proj_com_name,'started_date'=>$start_date,'accomplish_date'=>$accomplish_date),'project_tbl','id', $idd);
                }

                $data=$this->Staff_model->update_staff($staff, $educ, $id);
            }
            
            if($this->db->affected_rows() > -10)
            {
                $this->session->set_flashdata('success', "Staff Updated Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, Staff Updated Failed.");
            }
            redirect(base_url()."manage-staff");
        }
        else{
            $this->index();
            return false;
        } 
    }

    function edit($id)
    {
        $data['department']=$this->Department_model->select_departments();
        $data['position']=$this->Position_model->select_positions();
        $data['content']=$this->Staff_model->select_staff_byID($id);
        $data['workexp']=$this->Staff_model->select_workexp_byID($id);
        $data['projectrec']=$this->Staff_model->select_project_byID($id);
        $data['educ']=$this->Staff_model->select_educ_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-staff',$data);
        $this->load->view('admin/footer');
    }

    function infoForm($id)
    {
        $data['department']=$this->Department_model->select_departments();
        $data['position']=$this->Position_model->select_positions();
        $data['content']=$this->Staff_model->select_staff_byID($id);
        $data['workexp']=$this->Staff_model->select_workexp_byID($id);
        $data['projectrec']=$this->Staff_model->select_project_byID($id);
        $data['educ']=$this->Staff_model->select_educ_byID($id);

        $this->load->view('admin/info-form',$data);
    }


    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Staff_model->delete_staff($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Staff Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Staff Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete_all($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Staff_model->delete_all_staff(array('workexp_tbl','educational_bg','project_tbl','staff_tbl') , array('exp_id','staff_id','project_id','id') ,$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Staff Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Staff Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


}
