<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class RegisteredUserController extends Controller
{
    /**
     * Menampilkan tampilan registrasi.
     */
    public function index()
    {
        return view('admin.index', []);
    }

    /**
     * Menampilkan formulir registrasi.
     */
    // public function create(): View
    // {
    //      return view('auth.register');
    // }

    /**
     * Menangani permintaan registrasi yang masuk.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    // $request->validate([
    //     'name' => ['required', 'string', 'max:255'],
    //     'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
    //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
    //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
    // ]);

    // // Mengunggah avatar pengguna ke Cloudinary
    // $avatar = Cloudinary::upload($request->file('avatar')->getRealPath())->getSecurePath();

    // Membuat pengguna baru
    // $user = User::create([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'avatar' => $avatar, // Menyimpan URL gambar dari Cloudinary
    //     'password' => Hash::make($request->password),
    // ]);

    // Mengirimkan event Registered
    // event(new Registered($user));

    // // Login pengguna yang baru terdaftar
    // Auth::login($user);

    //     // return redirect(RouteServiceProvider::HOME);
    // }
}
