<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $req)
    {
        // $req->session()->put('uname', $req->uname);

        // if($req->session()->has('uname'))
        // {
            
        // }
        // else
        // {
        //     $req->session()->flash('msg','Invalid Username or Password!');
        //     return redirect ('/login');
        // }
       return view('user.create');
    }

    public function details($id,Request $req)
    {

        if($req->session()->has('uname'))
        {
            $user = $this->getUserList();
            $usr = '';
    
            foreach($user as $u)
            {
                if($u['id'] == $id)
                {
                    $user = $u;
                    break;
                }
            
            return view('user.details')->with('user',$user);
            }
        }
        
        else
        {
            $req->session()->flash('msg','Invalid Username or Password!');
            return redirect ('/login');
        }


        
    }

    public function edit($id)
    {
        echo $id;
    }

    public function update(Request $req,$id)
    {
        echo $id;
    }

    public function delete($id)
    {
        echo $id;
    }

    public function destroy($id)
    {
        echo $id;
    }

    public function view(Request $req)
    {
        

        if($req->session()->has('uname'))
        {
            $users = $this->getUserList();
        
        return view ('user.viewAllUser')->with('userlist',$users);
            //return view('home',compact('id','name'));
        }
        else
        {
            $req->session()->flash('msg','Invalid Username or Password!');
            return redirect ('/login');
        }
    }

    public function getUserList()
    {
        return 
        [
            ['id'=>1,'uname'=>'AB Anik','password'=>'123','email'=>'anik@gmail.com','type'=>'Admin'],
            ['id'=>2,'uname'=>'Akash','password'=>'456','email'=>'akash@gmail.com','type'=>'Student'],
            ['id'=>3,'uname'=>'Choyon','password'=>'789','email'=>'choyon@gmail.com','type'=>'Admin']
        ];
    }
}
