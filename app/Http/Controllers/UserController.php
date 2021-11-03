<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\ProfileUpdateRequest;
use App\Http\Requests\User\RegisterCareerRequest;
use App\Http\Requests\User\RegisterUniversity;
use App\Http\Requests\User\RegisterUniversityRequest;
use App\Http\Requests\User\UpdatePasswordRequest;
use App\Http\Requests\User\UserRegisterRequest;
use App\Models\Area\Area;
use App\Models\University\University;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
        /* registro usuario */
        $user = User::create([
            'name'      => $request->name,
            'last_name' => $request->last_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => bcrypt($request->password),
        ]);
        /* inico sesion */
        Auth::login($user);
        /* retorno vista */
        return redirect()->route('register.university');
    }
    /* Seleccionar universidad */
    protected function showRegistrationForm2()
    {
        $universities = University::orderBy('name','ASC')->get();
        return view('auth.registerUniversity',compact('universities'));
    }
    public function registerUniversity(RegisterUniversityRequest $request)
    {
        User::findOrFail( Auth::id() )->update(['university_id' => $request->university_id]);
        return redirect()->route('register.career');
    }
    /* Seleccionar carrera */
    protected function showRegistrationForm3()
    {
        $areas = Area::where('university_id',Auth::user()->university_id)->orderBy('name','ASC')->with('careers')->get();
        return view('auth.registerCareer',compact('areas'));
    }
    public function registerCareer(RegisterCareerRequest $request)
    {
        User::findOrFail( Auth::id() )->update(['career_id' => $request->career_id]);
        return redirect()->route('plans.index');
    }
    /* Mi perfil */
    public function profile()
    {
        $user = User::findOrFail( Auth::id() );
        $user->load('university','career');
        return view('users.profile',compact('user'));
    }
    public function profileUpdate(ProfileUpdateRequest $request)
    {
        User::findOrFail( Auth::id() )->update([
            'name'      => $request->name,
            'last_name' => $request->last_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
        ]);
        return redirect()->route('users.profile')->with('message','Datos actualizados con éxito');
    }
    public function passwordUpdate(UpdatePasswordRequest $request)
    {
        User::findOrFail( Auth::id() )->update([
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('users.profile')->with('message','Contraseña actualizada con éxito');
    }
}
