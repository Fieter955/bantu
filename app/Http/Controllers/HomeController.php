<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Landing Page";
        $packages = [
            (object)[
                'package_code' => 'Dummy Code',
                'package_name' => 'Dummy Name',
                'package_desc' => 'Dummy Desc'
            ],
            (object)[
                'package_code' => 'Dummy Code 2',
                'package_name' => 'Dummy Name 2',
                'package_desc' => 'Dummy Desc 2'
            ],
            (object)[
                'package_code' => 'Dummy Code 3',
                'package_name' => 'Dummy Name 3',
                'package_desc' => 'Dummy Desc 3'
            ]
        ];

        // Gunakan dd() untuk debug, pastikan variabel $packages memiliki nilai yang benar
      

        return view('frontpage.landing', compact('title', 'packages'));
    }

    public function about(){

        $title = "About";
        $packages = [
            (object)[
                'package_code' => 'Dummy Code',
                'package_name' => 'Dummy Name',
                'package_desc' => 'Dummy Desc'
            ],
            (object)[
                'package_code' => 'Dummy Code 2',
                'package_name' => 'Dummy Name 2',
                'package_desc' => 'Dummy Desc 2'
            ],
            (object)[
                'package_code' => 'Dummy Code 3',
                'package_name' => 'Dummy Name 3',
                'package_desc' => 'Dummy Desc 3'
            ]
        ];

        return view('frontpage.about', compact('title', 'packages'));
    }

    public function portofolio(){
        $title = "Portofolio";
        $packages = [
            (object)[
                'package_code' => 'Dummy Code',
                'package_name' => 'Dummy Name',
                'package_desc' => 'Dummy Desc'
            ],
            (object)[
                'package_code' => 'Dummy Code 2',
                'package_name' => 'Dummy Name 2',
                'package_desc' => 'Dummy Desc 2'
            ],
            (object)[
                'package_code' => 'Dummy Code 3',
                'package_name' => 'Dummy Name 3',
                'package_desc' => 'Dummy Desc 3'
            ]
        ];

        return view('frontpage.portofolio', compact('title', 'packages'));

    }

    public function contact(){
        $title = "Contact";
        $packages = [
            (object)[
                'package_code' => 'Dummy Code',
                'package_name' => 'Dummy Name',
                'package_desc' => 'Dummy Desc'
            ],
            (object)[
                'package_code' => 'Dummy Code 2',
                'package_name' => 'Dummy Name 2',
                'package_desc' => 'Dummy Desc 2'
            ],
            (object)[
                'package_code' => 'Dummy Code 3',
                'package_name' => 'Dummy Name 3',
                'package_desc' => 'Dummy Desc 3'
            ]
        ];

        return view('frontpage.contact', compact('title', 'packages'));
    }


    public function uji(){
        $title = "Contact";
        $packages = [
            (object)[
                'package_code' => 'Dummy Code',
                'package_name' => 'Dummy Name',
                'package_desc' => 'Dummy Desc'
            ],
            (object)[
                'package_code' => 'Dummy Code 2',
                'package_name' => 'Dummy Name 2',
                'package_desc' => 'Dummy Desc 2'
            ],
            (object)[
                'package_code' => 'Dummy Code 3',
                'package_name' => 'Dummy Name 3',
                'package_desc' => 'Dummy Desc 3'
            ]
        ];

        return view('frontpage.landinguji', compact('title', 'packages'));
    }

    public function utstekweb(){
        $datas = Book::all();
       
        return view('utstekweb.landing',[
            'datas'=>$datas
        ]);
    }


    public function utstekwebslug($slug){
        $data = Book::where('id', $slug)->first();
        

        return view('utstekweb.detail', [
            'data'=>$data
        ]);
    }

    public function inputbuku(){
       
        $datas = Book::all();
        return view('utstekweb.inputbuku', [
            'datas'=>$datas
        ]);
    }

    public function uplodimage(){
        return view('uplodimage.index');
    }

    public function store(Request $request){
        $judul = $request->judul;
        $penulis =$request->penulis;
        $pengarang =$request->pengarang;
        $tanggal =$request->tanggal;
        $category_id =$request->category;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fillname = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fillname);


       

            $image = new Book;
            $image->Gambar = $fillname;
            $image->Judul_Buku = $judul;
            $image->Pengarang = $pengarang;
            $image->Penulis = $penulis;
            $image->Tanggal_Terbit = $tanggal;
            $image->category_id = $category_id;
            $image->save();

            return view('utstekweb.inputbuku');
        }


    }

    public function makan(){
        $datas = Book::all();
        return view('utstekweb.admin', [
            'datas' => $datas]

        );
    }

    public function style(){
        return view('style');
    }

    public function register()
    {
        return view('utstekweb.layout.register');
    }

    public function login()
    {
        return view('utstekweb.layout.login');
    }

    public function loginRequested(Request $request)
    {
        // Validate login form fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        // Uncomment the following line for debugging
        // return $credentials;
    
        if (Auth::attempt($credentials)) {
            // If authentication is successful
            $request->session()->regenerate();
            return redirect('utstekweb');
        } else {
            // If authentication fails
            return redirect()->route('login')->withErrors('Invalid credentials');
        }
    }
    




    public function registerRequested(Request $request)
    {
        // Validation rules
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', // Adjust the minimum password length as needed
        ]);
    
        // Create a new user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Hash the password
        ]);
    
        // You can log in the user here if needed
    
        // Redirect to the login page after successful registration
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



}
