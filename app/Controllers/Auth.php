<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;

class Auth extends Controller{

    public function __construct()
    {
        helper(['url','form']);
    }


    //Main Function of this controller
    //It will navigate to login page
    public function index(){
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    //When user enter credentials for logging in, this function will validate all entered values with DB
    function check(){
        // echo 'check login......';
        //Lets start validation
        //These are custome validations for Pak Number and password
        $validation = $this->validate([
            'pak_number'=>[
                'rules'=>'required|integer|is_not_unique[users.pak_number]|min_length[5]|max_length[8]',
                'errors'=>[
                    'required'=>'Pak Number is required',
                    'integer'=> 'Enter a valid Pak Number',
                    'is_not_unique'=>'This Pak_Number is not registered on our service',
                    'min_length'=>'Password must have atleast 5 digits in length',
                    'max_length'=>'Password must not have more than 8 digits in length'
                ]
            ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have more than 12 characters in length'
                ]
            ]
        ]);

        if (!$validation){
            return view('auth/login', ['validation'=>$this->validator]);
        }else{
            //echo 'form successful validated';

            //Lets check user

            $pnumber  = $this->request->getPost('pak_number');
            $password = $this->request->getPost('password');
            $usersModel = new \App\Models\UsersModel();
            $user_info = $usersModel->where('pak_number', $pnumber)->first();
            $check_password = Hash::check($password, $user_info['password']);

//            print_r($user_info);
//            die;
            if(!$check_password){
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('/auth')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('/dashboard');
            }
        }
    }

    //This function is used to save data into DB when user filled the form of Sign Up
    public function save(){
        //Let's validate requests
        // $validation = $this->validate([
        //     'name'=>'required',
        //     'email'=>'required|valid_email|is_unique[users.email]',
        //     'password'=>'required|min_length[5]|max_length[12]',
        //     'cpassword'=>'required|min_length[5]|max_length[12]|matches[password]'

        // ]);

//    echo 'test';
//    die;
        //Creating custom validation
        $validation = $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Your full name is required'
                ]
            ],
            'pak_number'=>[
                'rules'=>'required|integer|min_length[5]|max_length[8]',
                'errors'=>[
                    'required'=>'Pak Number is required',
                    'integer'=> 'Enter a valid Pak Number',
                    'min_length'=>'Pak-Number must have atleast 5 digits in length',
                    'max_length'=>'Pak-Number must not have more than 8 digits in length'
                ]
            ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have characters more than 12 in length'
                ]
            ],
            'cpassword'=>[
                'rules'=>'required|min_length[5]|max_length[12]|matches[password]',
                'errors'=>[
                    'required'=>'Confirm password is required',
                    'min_length'=>'Confirm password must have atleast 5 characters in length',
                    'max_length'=>'Confirm password must not have characters more than 12 in length',
                    'matches'=>'Confirm password not matches to password'
                ]
            ]
        ]);

        if(!$validation){
            return view('auth/register', ['validation'=>$this->validator]);
        }else{
            //Registering users into Database
            $name = $this->request->getPost('name');
            $pnumber = $this->request->getPost('pak_number');
            $designation = $this->request->getPost('designation');
            $password = $this->request->getPost('password');

            $values = [
                'name'=>$name,
                'pak_number'=>$pnumber,
                'designation'=>$designation,
                'password'=>Hash::make($password),
            ];

            $usersModel = new \App\Models\UsersModel();
            $count = $usersModel->countAll();
            //For debugging purpose
            // print_r("checked");die;
            //print_r($password);die;
//            print_r($values);
//            die;
            $query = $usersModel->insert($values, true);
//            print_r($query);
//            die;
            if(!$query){
//                print_r($values);die;
                return redirect()->back()->with('fail', 'Something went wrong');
            }else{
//                print_r($values);die;
                return redirect()->to('auth')->with('success', 'You are now registered successfully');

                //if we want to redirect user direct to dashboard after sign Up
                //$last_id = $usersModel->insertID();
                //session()->set('loggedUser', $last_id);
                //return redirect()->to('/dashboard');
            }
//            print_r($values);
//            die;
        }


    }



    //This function will remove current session and redirect to login page
    function logout(){
        if (session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'You are logged out');
        }
    }

}
