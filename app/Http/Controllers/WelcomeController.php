<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/02/2018
 * Time: 16:38
 */

namespace App\Http\Controllers;




use \Request;

class WelcomeController extends Controller
{
public function index($name){
    dd(Request::ip());

    return "welcome $name";
}


    public function getIndex(){

return'Bonsoir à tous ';
    }

}