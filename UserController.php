<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\User;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * List User 
     * @param Nill
     * @return Array $user
     */
    public function index()
    {
        $user =auth()->user();
        if($user->user_role == 2) {
            return redirect()->route('profile.detail');
        }
        $users =  User::where('id', '!=', auth()->id())->paginate(10);
        
        return view('users.index', ['users' => $users]);
    }
    
    /**
     * Create User 
     * @param Nill
     * @return Array $user
      
     */
    public function create()
    {
        ///$roles = Role::all();
       
        return view('users.add');
    }

    /**
     * Store User
     * @param Request $request
     * @return View Users
      
     */
    public function store(Request $request)
    {
        // Validations
        $request->validate([
            'name'    => 'required',
            'email'         => 'required|unique:users,email',
            'mobile_number' => 'required|numeric|digits:10',
            'status'       =>  'required|numeric|in:0,1',
        ]);

        DB::beginTransaction();
        try {

            // Store Data
            $user = User::create([
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'email'         => $request->email,
                'mobile_number' => $request->mobile_number,
                'user_role'       => $request->user_role,
                'status'        => $request->status,
                'password'      => Hash::make($request->first_name.'@'.$request->mobile_number)
            ]);

            // Commit And Redirected To Listing
            DB::commit();
            return redirect()->route('users.index')->with('success','User Created Successfully.');

        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Update Status Of User
     * @param Integer $status
     * @return List Page With Success
      
     */
    public function updateStatus($user_id, $state_id)
    {
        // Validation
        $validate = Validator::make([
            'user_id'   => $user_id,
            'state_id'    => $state_id
        ], [
            'user_id'   =>  'required|exists:users,id',
            'state_id'    =>  'required|in:2,1',
        ]);

        // If Validations Fails
        if($validate->fails()){
            return redirect()->route('index')->with('error', $validate->errors()->first());
        }

        try {
            DB::beginTransaction();

            // Update Status
            User::whereId($user_id)->update(['state_id' => $state_id]);

            // Commit And Redirect on index with Success Message
            DB::commit();
            return redirect()->route('index')->with('success','User Status Updated Successfully!');
        } catch (\Throwable $th) {

            // Rollback & Return Error Message
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Edit User
     * @param Integer $user
     * @return Collection $user
      
     */
    public function edit(User $user)
    {
       // $roles = Role::all();
        return view('users.edit')->with([
         //   'roles' => $roles,
            'user'  => $user
        ]);
    }

    /**
     * Update User
     * @param Request $request, User $user
     * @return View Users
      
     */
    public function update(Request $request, User $user)
    {
      
        // Validations
        $request->validate([
            'name'    => 'required',
            'email'         => 'required|unique:users,email,'.$user->id.',id',
            'contact_no' => 'required|min:10|max:15',
            'address'       =>  'required',
            'zipcode'       =>  'required',
            'blood_group'       =>  'required',
            'donor_type'       =>  'required',
            'last_donate_blood'       =>  'required',
            #'state_id'       =>  'required|numeric|in:0,1',
        ]);
   
        DB::beginTransaction();
        try {

            // Store Data
            $user_updated = User::whereId($user->id)->update([
                'name'              => $request->name,             
                'email'             => $request->email,
                'contact_no'        => $request->contact_no,
                'address'           => $request->address,
                'zipcode'           => $request->zipcode,
                'blood_group'       => $request->blood_group,
                'last_donate_blood' => $request->last_donate_blood,
                'donor_type'        => $request->donor_type,
            ]);

            // Commit And Redirected To Listing
            DB::commit();
            if(auth()->user()->user_role == 1){
                return redirect()->route('index')->with('success','User Updated Successfully.');
            }
           
            return redirect()->route('profile.detail')->with('success','Record Updated Successfully.');

        } catch (\Throwable $th) {
            // Rollback and return with Error

            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Delete User
     * @param User $user
     * @return Index Users
     */
    public function delete(User $user)
    {
        DB::beginTransaction();
        try {
            // Delete User
            User::whereId($user->id)->delete();

            DB::commit();
            return redirect()->route('index')->with('success', 'User Deleted Successfully!.');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Import Users 
     * @param Null
     * @return View File
     */
    public function importUsers()
    {
        return view('users.import');
    }

    public function uploadUsers(Request $request)
    {
        Excel::import(new UsersImport, $request->file);
        
        return redirect()->route('users.index')->with('success', 'User Imported Successfully');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}
