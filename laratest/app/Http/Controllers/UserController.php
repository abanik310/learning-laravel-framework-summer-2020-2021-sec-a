<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function details($id)
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
        }
        //$user = ['id'=>1,'uname'=>'AB Anik','password'=>'123','email'=>'anik@gmail.com','type'=>'Admin'];
        return view('user.details')->with('user',$user);
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

    public function view()
    {
        $users = $this->getUserList();
        
        return view ('user.viewAllUser')->with('userlist',$users);
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
