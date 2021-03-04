<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
 {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
		
	// 	$this->load->view("admindashboard");

	// }
  public function admin()
  {
    
    $this->load->view("admindashboard");

  }
  public function student()
  {
    
    $this->load->view("studentdashboard");

  }
  public function trainer()
  {
    
    $this->load->view("trainerdashboard");

  }
  public function batch()
  {
    $this->load->view("batch");
  }
public function exam()
  {
    $this->load->view("exam");
  }
  public function performance()
  {
    $this->load->view("performance");
  }
   public function calendar()
  {
    $this->load->view("calendar");
  }
   public function notification()
  {
    $this->load->view("notification");
  }
   public function events()
  {
    $this->load->view("events");
  }
   public function timetable()
  {
    $this->load->view("timetable");
  }
  /****
*@Login function start
*@Arsha
*@date
*@04/03/2021
****/
public function log()
{

$this->load->view('login');

}
public function academiclogin()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("email","email",'required');
$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$pass=$this->input->post("password");
$email=$this->input->post("email");
$rslt=$this->mainmodel->selectpass2($email,$pass);
if($rslt)
{
$id=$this->mainmodel->getuserid2($email);
$user=$this->mainmodel->getuser2($id);
$this->load->library(array('session'));
$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'usertype'=>$user->usertype,'logged_in'=>(bool)true));
if($_SESSION['status']=='1'&&$_SESSION['usertype']=='0'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/home');
}
else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='1'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/ahome');
}
else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='2'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/home');
}
else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='3'&&$_SESSION['logged_in']==true)
{
redirect(base_url().'main/home');
}
else
{
echo "waiting for approval";
}
}
else
{
echo "invalid user";
}
}
else{
redirect('main/log','refresh');
}
}
public function ahome()
{

$this->load->view('adminpage');

}
/****
*@Add batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchview()
{

$this->load->view('addbatch');

}
public function batchinsert()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->library('form_validation');
$this->form_validation->set_rules("bname","Name",'required');
$this->form_validation->set_rules("startdate","sdate",'required');
$this->form_validation->set_rules("enddate","edate",'required');
$this->form_validation->set_rules("totalday","totalday",'required');
$this->form_validation->set_rules("totalhr","totalhr",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("bname"=>$this->input->post("bname"),"startdate"=>$this->input->post("startdate"),"enddate"=>$this->input->post("enddate"),"totalday"=>$this->input->post("totalday"),"totalhr"=>$this->input->post("totalhr"));

$this->mainmodel->batchmodel($a);
redirect(base_url().'main/batchview');

   }
    }
        else
        {
             redirect(base_url().'main/log');
        }

}
/****
*@View batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchdetail()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->batchdetail();
        $this->load->view('viewbatch',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }
    /****
*@Delete batch details function start
*@Arsha
*@date
*@04/03/2021
****/
    public function deletebatch()
    {  
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
       
       
            $this->load->model('mainmodel');
            $id=$this->uri->segment(3);
            $this->mainmodel->deletebatch($id);
            redirect('main/batchdetail','refresh');
        }
        else
        {
             redirect(base_url().'main/log');
        }
}
/****
*@update batch details function start
*@Arsha
*@date
*@04/03/2021
****/
public function batchupdateview()
    {
       
        $this->load->model('mainmodel');
        $id=$this->uri->segment(3);
        //$id=$this->session->id;
        $data['user_data']=$this->mainmodel->batchupdateview($id);
        $this->load->view('batchupdate',$data);
       
       

    }
    public function batchupdate1()
    {
       
        $this->load->model('mainmodel');
        $a=array("bname"=>$this->input->post("bname"),
            "startdate"=>$this->input->post("startdate"),
            "enddate"=>$this->input->post("enddate"),
            "totalday"=>$this->input->post("totalday"),
            "totalhr"=>$this->input->post("totalhr"));
       
       
        if($this->input->post("update"))
        {
           // $id=$this->session->id;
            //$id=$this->uri->segment(3);
            $id=$this->input->post("id");
            $this->mainmodel->batchupdate1($a,$id);
            redirect('main/batchdetail','refresh');
        }
   

    }
    /****
*@view batch details by trainer function start
*@Arsha
*@date
*@04/03/2021
****/
    public function batchdetail2()
    {
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
       
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->batchdetail2();
        $this->load->view('viewbatch2',$data);


        }
        else
        {
             redirect(base_url().'main/log');
        }


    }
    /****
*@view batch details by student function start
*@Arsha
*@date
*@04/03/2021
****/
    public function studbatch()
    {
       
        $this->load->model('mainmodel');
        //$id=$this->uri->segment(3);
        $id=$this->session->id;
        $data['user_data']=$this->mainmodel->studbatch($id);
        $this->load->view('studbatch',$data);
       



}
/****
*@Add event details function start
*@Arsha
*@date
*@04/03/2021
****/
public function event()
{

$this->load->view('addevent');

}
public function addevent()
{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
$this->load->library('form_validation');
$this->form_validation->set_rules("eventname","ename",'required');
$this->form_validation->set_rules("date","date",'required');
$this->form_validation->set_rules("time","time",'required');
$this->form_validation->set_rules("duration","duration",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("eventname"=>$this->input->post("eventname"),"date"=>$this->input->post("date"),"time"=>$this->input->post("time"),"duration"=>$this->input->post("duration"));

$this->mainmodel->addevent($a);
redirect(base_url().'main/event');

   }
    }
        else
        {
             redirect(base_url().'Main/log');
        }

}

/****
*@Exam details
*@Radhika
*@date
*@04/03/2021
****/

public function exam()
{
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->batchname();
$this->load->view('examdetails',$data);
}

public function examdetails()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("ename","ename",'required');
$this->form_validation->set_rules("edate","edate",'required');
$this->form_validation->set_rules("totalmark","totalmark",'required');
$this->form_validation->set_rules("subject","subject",'required');
$this->form_validation->set_rules("startingtime","time",'required');
$this->form_validation->set_rules("endingtime","time",'required');



if($this->form_validation->run())
{
$this->load->model('mainmodel');
$a=array("ename"=>$this->input->post("ename"),
"edate"=>$this->input->post("edate"),
"totalmark"=>$this->input->post("totalmark"),
"subject"=>$this->input->post("subject"),
"startingtime"=>$this->input->post("startingtime"),
"endingtime"=>$this->input->post("endingtime"),
"b_id"=>$this->input->post("batch"));
$this->mainmodel->register($a);
redirect(base_url().'main/exam');

   }

}


public function view_exam_details()
{
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->exam_view();
$this->load->view('exam_details_view',$data);


}

public function exam_update()
{

$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$data['user_data']=$this->mainmodel->exam_single_data($id);
$this->load->view('examdetailupdate',$data);
}



public function update_exam_details()
{

$a=array("ename"=>$this->input->post("ename"),
"edate"=>$this->input->post("edate"),
"totalmark"=>$this->input->post("totalmark"),
"subject"=>$this->input->post("subject"),
"startingtime"=>$this->input->post("startingtime"),
"endingtime"=>$this->input->post("endingtime"),
"b_id"=>$this->input->post("batch"));
$this->load->model('mainmodel');

if($this->input->post("update"))
{
$id=$this->uri->segment(3);

$this->mainmodel->update_exam($a,$id);
redirect('main/','refresh');
}
}





public function exam_delete()
{

$id=$this->uri->segment(3);
$this->load->model('mainmodel');
$this->mainmodel->exam_delete($id);
redirect('main/view_exam_details','refresh');
}


//login start



/*************notification*******************/

//admin adding notification



public function notification()
{
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->batchname();
$this->load->view('notification',$data);

}

//action
public function notification_add()
{

$this->load->library('form_validation');
$this->form_validation->set_rules("notification","notification",'required');




if($this->form_validation->run())
{


$this->load->model('mainmodel');

$n=array("notification"=>$this->input->post("notification"),"b_id"=>$this->input->post("bname"),"date"=>date('y-m-d'));

$this->mainmodel->notifymodel($n);
redirect('main/notification','refresh');
}

}

//insertion of notification ends

//admin view of notification

public function notiadmin()
{

$this->load->model('mainmodel');
$date=date('y-m-d');// for auto delete of notification
  $this->mainmodel->notidelete($date);
$data['n']=$this->mainmodel->admin_notify();
$this->load->view('admin_notify_view',$data);


}

/*notification:admin delete*/
public function notify_delete()
{

$id=$this->uri->segment(3);
$this->load->model('mainmodel');
$this->mainmodel->admin_delete($id);
redirect('main/notiadmin','refresh');
}

/*notification :admin update*/


public function admin_update()
{

$a=array("notification"=>$this->input->post("notification"));
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
         
$data['user_data']=$this->mainmodel->singledata($id);
//print_r($data);
$this->mainmodel->singleselect();
$this->load->view('update_noti_view',$data);
if($this->input->post("update"))
{
$this->mainmodel->updatedetails($a,$this->input->post("id"));
redirect('main/notiadmin','refresh');
}

}

  
}
	