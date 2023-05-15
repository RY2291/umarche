<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleContainer extends Controller{

    public function showServiceProviderTest(){

        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');

        $sample = app()->make('serviceProviderTest');

        // dd($password, $encrypt->decrypt($password), $sample);
    }

    public function showServiceContainerTest(){

        app()->bind('lifeCycle', function(){
            return 'ライフサイクル';
        });

        $test = app()->make('lifeCycle');

        // サービスコンテナなし
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();
        
        // サービスコンテナあり
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        // dd($test ,app());
    }
}


class Sample{
    
    public $message;

    public function __construct(Message $message){

        $this->message = $message;
    }

    public function run(){

        $this->message->send();
    }
}

class Message{

    public function send(){

        echo 'メッセージ表示';
    }
}