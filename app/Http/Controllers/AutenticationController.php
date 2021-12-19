<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class AutenticationController extends Controller
{
    public function home()
    {
        return view('public');
    }

    public function private()
    {
        return view('index');
    }

    public function login()
    {
        return view('autentication.login');
    }

    public function autentication(Request $request)
    {
        $data = $request->all();

        $login = $data['login'];
        $password = $data['password'];

        $user = User::where('login', $login)->first();

        if(Auth::check() || ($user && Hash::check($password, $user->password)))
        {
            Auth::login($user);
            return redirect(route('dashboard'));
        } else {
            return redirect(route('login'));
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return redirect(route('home'));
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function search(Request $request)
    {
        if($request['search'] === false) {
            return redirect(route('index'));
        }

        $data = $request->all();

        $user = $this->searchUser($data['search']);
        $repos = $this->repos($data['search']);
        $info = new \stdClass();
        $info->userInfo = json_decode($user);
        $info->repos = json_decode($repos);

        return View::make('user-info', compact('info'));
    }

    #You have to create a Access Token on Git Hub (Settings>Developer Settins>Personal Access Token) or follow link https://github.com/settings/tokens
    #When you create this token, put then on --CreateThisOnGitHub
    public function searchUser($user)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.github.com/users/'.$user,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array($user => '+in:login','type' => 'Users'),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/vnd.github.v3+json',
                'Authorization: Bearer --CreateThisOnGitHub',
                "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 YaBrowser/16.3.0.7146 Yowser/2.5 Safari/537.36"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

    #You have to create a Access Token on Git Hub (Settings>Developer Settins>Personal Access Token) or follow link https://github.com/settings/tokens
    #When you create this token, put then on --CreateThisOnGitHub
    public function repos($user)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.github.com/users/'.$user.'/repos',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array($user => '+in:login','type' => 'Users'),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/vnd.github.v3+json',
                'Authorization: Bearer --CreateThisOnGitHub',
                "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 YaBrowser/16.3.0.7146 Yowser/2.5 Safari/537.36"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}
