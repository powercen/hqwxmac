<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use EasyWeChat\kernel\Messages\Text;

class WeChatController extends Controller
{

    public function serve()
    {
        Log::info('request arrived.');
        $app = app('wechat.official_account');
        $app->server->push(function ($message){
            switch ($message['MsgType']){
                case 'event':
                    //关注消息，新用户关注进入公众号
                    if($message['Event'] == 'subscribe'){
                        return new Text('你好，欢迎来到华庆作业区');
                    }
                    return 'success';
                case 'text':
                    return new Text('你刚才输入了 ' . $message['Content']);
                default:
                    return 'success';
            }

        });

        return $app->server->serve();
    }



}
