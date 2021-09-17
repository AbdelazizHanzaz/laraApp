<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{


    public function index(){

       // $channels = Channel::all();

       //return view("channel.index", compact('channels'));

       //get data by view composers
       return view('channel.index');


    }




}
