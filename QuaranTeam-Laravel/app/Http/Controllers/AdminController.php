<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Database\Seeds\UsersTabelSeeder;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AdminController extends Controller
{
  public function index()
  {
      $index = User::all();
      return view('Admin/index', ['userdata' => $index]);
  }

  public function add()
  {
      return view('Admin/add');
  }

  public function addUser(Request $request)
  {
    $this->validate($request,[
          'username' => 'required',
          'password' => 'required',
          'name'     => 'required'
    ]);

          if ($request->isAdmin == 1) {
            User::create([
            'username' => $request->username,
            'password' => $request->password,
            'name'     => $request->name,
            'isAdmin'  => $request->isAdmin
            ]);
          } else {
            User::create([
            'username' => $request->username,
            'password' => $request->password,
            'name'     => $request->name
            'isAdmin'  => 0
            ]);
          }

    return redirect('admin');
  }

  public function edit($id)
  {
      $edit = User::find($id);
      return view('Admin/edit', ['userdata' => $edit]);
  }

  public function update($id, Request $request)
  {

      $this->validate($request,[
          'username' => 'required',
          'password' => 'required',
          'nama'     => 'required'

      ]);

      if ($request->isAdmin == 1) {
        $update = User::find($id);
        $update->username = $request->username;
        $update->password = $request->password;
        $update->name     = $request->name;
        $update->isAdmin  = $request->isAdmin;
        $update->save();
      } else {
        $update = User::find($id);
        $update->username = $request->username;
        $update->password = $request->password;
        $update->name     = $request->name;
        $update->isAdmin  = 0;
        $update->save();
      }
      
      return redirect('admin/edit');
  }

  public function delete($delId)
  {
      $delete = User::find($delId);
      $delete->delete();
      return redirect('admin');
  }
}
