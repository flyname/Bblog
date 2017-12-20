<?php

namespace App\Http\Controllers\Home;
use App\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CommentsController extends Controller
{

    public function index(Request $request)
    {
        if($request->isMethod('post')){
           
                 //默认前台用户是没有登录的
                  //表中admin_id字段没有修改
                  $all = $request->all();                 
                  $all = $request->except('_token');
                  $all['ip']=$_SERVER['REMOTE_ADDR'];
                  // 数据入库
                  $result = \App\Comments::create($all);
              
                  if($result)
                  {   
                      return \App\Tools\ajax_success();
                  }
                  else
                  {
                      return \App\Tools\ajax_error();
                  }
              }
   
    }
}
