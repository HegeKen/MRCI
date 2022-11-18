<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'app.adlt'
        ];
        helper(['form']);
        echo view('admin/header',$data);
        echo view('admin/tabs');
        echo view('admin/login');
        echo view('admin/footer');
    } 
  
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard');
            }else{
                $session->setFlashdata('msg', '密码输入错误，请输入至少 6 位，且包含大小写字母的密码');
                return redirect()->to('/admin/login');
            }
        }else{
            $session->setFlashdata('msg', '邮箱输入错误');
            return redirect()->to('/admin/login');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/login');
    }
} 