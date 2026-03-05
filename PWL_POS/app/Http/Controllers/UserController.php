<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::findOr(20, ['username', 'nama'], function () {
                abort(404);
        });
        return view('user', ['data' => $user]);
    }
}
//tambah data user dengan ELoquen1 Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::insert($data); //tambahkan data baru ke tabel m_user

        //update data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        //     'level_id' => 5
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data user
        // $data =[
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager Tiga',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data); 