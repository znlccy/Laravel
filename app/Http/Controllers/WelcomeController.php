<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/10
 * Time: 14:29
 */
namespace App\Http\Controllers;
use App\Models\User;

class WelcomeController
{
    public function index() {
        /*return '<h1>控制器成功!</h1>';*/

        $student = User::first();
        $data = $student->getAttribute();
        return "学生ID:".$data['userId']." ;学生Name:".$data['userName'];
    }
}
?>