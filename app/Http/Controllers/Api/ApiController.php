<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\UserModel;
use Illuminate\Support\Facades\Redis;

class ApiController extends Controller
{
    // public function login(Request $request)
    // {
    //     $user_name = $request->input('user_name');
    //     $user_tel = $request->input('user_tel');
    //     $user_email = $request->input('user_email');
    //     $user_pwd = $request->input('user_pwd');
    //     $token = md5(time());
    //     if(!empty($user_name)){
    //         $info = User::where(['user_name' => $user_name])->first();
    //         if ($info) {
    //             $pass = $info->user_pwd;
    //             if (password_verify($user_pwd, $pass)) {
    //                 Redis::set('token',$token,604800);
    //                 return json_encode(['msg'=>'登陆成功','code'=>'200','token'=>$token,'user_id'=>$info['user_id']],JSON_UNESCAPED_UNICODE);
    //             } else {
    //                 return json_encode(['msg'=>'密码有误','code'=>'201'],JSON_UNESCAPED_UNICODE);
    //             }
    //         } else {
    //             return json_encode(['msg'=>'邮箱有误','code'=>'202'],JSON_UNESCAPED_UNICODE);
    //         }
    //     }else if(!empty($user_email)){
    //         $info = User::where(['user_email' => $user_email])->first();
    //         if ($info) {
    //             $pass = $info->user_pwd;
    //             if (password_verify($user_pwd, $pass)) {
    //                 Redis::set('token',$token,604800);
    //                 return json_encode(['msg'=>'登陆成功','code'=>'200','token'=>$token,'user_id'=>$info['user_id']],JSON_UNESCAPED_UNICODE);
    //             } else {
    //                 return json_encode(['msg'=>'密码有误','code'=>'201'],JSON_UNESCAPED_UNICODE);
    //             }
    //         } else {
    //             return json_encode(['msg'=>'邮箱有误','code'=>'202'],JSON_UNESCAPED_UNICODE);
    //         }
    //     }else if(!empty($user_tel)){
    //         $info = User::where(['user_tel' => $user_tel])->first();
    //         if ($info) {
    //             $pass = $info->user_pwd;
    //             if (password_verify($user_pwd, $pass)) {
    //                 Redis::set('token',$token,604800);
    //                 return json_encode(['msg'=>'登陆成功','code'=>'200','token'=>$token,'user_id'=>$info['user_id']],JSON_UNESCAPED_UNICODE);
    //             } else {
    //                 return json_encode(['msg'=>'密码有误','code'=>'201'],JSON_UNESCAPED_UNICODE);
    //             }
    //         } else {
    //             return json_encode(['msg'=>'邮箱有误','code'=>'202'],JSON_UNESCAPED_UNICODE);
    //         }
    //     }

    // }
    // /**
    //  * @param Request $request
    //  * @return false|string
    //  * 注册
    //  */
    // public function reg(Request $request)
    // {
    //     $this->validate($request, [
    //         'user_name' => 'required|unique:user',
    //         'user_email' => 'required|unique:user',
    //         'user_tel' => 'required|unique:user',
    //     ],[
    //         'user_name.unique'=>'用户名称不能一致',
    //         'user_name.required'=>'用户名称不能为空',
    //         'user_email.unique'=>'邮箱称不能一致',
    //         'user_email.required'=>'邮箱称不能为空',
    //         'user_tel.unique'=>'手机号称不能一致',
    //         'user_tel.required'=>'手机号称不能为空',
    //     ]);


    //     $data = $request->all();
    //     if($data['user_pwd1'] != $data['user_pwd']){
    //         return json_encode(['msg'=>'密码不一致','code'=>'202'],JSON_UNESCAPED_UNICODE);
    //     }
    //     $data['user_pwd'] = password_hash($data['user_pwd'], PASSWORD_BCRYPT);
    //     $res = User::create([
    //         'user_name'=>$data['user_name'],
    //         'user_tel'=>$data['user_tel'],
    //         'user_email'=>$data['user_email'],
    //         'user_pwd'=>$data['user_pwd'],
    //     ]);
    //     if ($res) {
    //         return json_encode(['msg'=>'注册成功','code'=>'200'],JSON_UNESCAPED_UNICODE);
    //     } else {d
    //         return json_encode(['msg'=>'注册失败','code'=>'201'],JSON_UNESCAPED_UNICODE);
    //     }
    // }

    // public function token(Request $request)
    // {
    //     if(empty($_SERVER['HTTP_TOKEN'])){
    //         return json_encode(['code'=>203,'msg'=>'Token Not Valid!']);
    //     }
    //     $token = $_SERVER['HTTP_TOKEN'];
    //     $user_id = $_SERVER['HTTP_UID'];

    //     if ($token != Redis::get('token')) {
    //         return json_encode(['code'=>203,'msg'=>'Token Not Valid!']);
    //     } else {
    //         $data = User::get();
    //         return json_encode(['code'=>0,'msg'=>'ok','data'=>$data]);
    //     }

    // }
    public function postman1()
    {
    //     $token  = $_SERVER['HTTP_TOKEN'];
    //     // echo $token;
    //     // $request_uri = $_SERVER['REQUEST_RUI'];
    //     // echo "$request_uri";
    //     $url_hash = md5($token);

    //     echo 'usl_hasg: ' . $url_hash;echo "</br>";
    //     $key = 'count:url:'.$url_hash;
    //     echo "key:" . $key;echo "</br>";

    //     $count = Redis::get($key);
    //     echo "当前接口访问次数为: "  .$count;echo "</br>";
    //     if ($count >= 5) {
    //         echo "请勿频繁访问接口,10秒后重试";
    //         Redis::expire($key,10);die;
    //     }
    //     $count = Redis::incr($key);
    //     // echo "count: ".$count;
    //     
    //     
    //     
        // $token = $_SERVER['HTTP_TOKEN'];
        // $request_uri = $_SERVER['REQUEST_URI'];
        // $url_hash = md5($token . $request_uri);
        // $key = 'count:url:'.$url_hash;
        // $count = Redis::get($key);
        // echo "当前接口访问次数为：". $count;echo '</br>';

        // if($count >= 5){
        //     $time = 10;   
        //     echo "请勿频繁请求接口, $time 秒后重试";
        //     Redis::expire($key,$time);
        //     die;
        // }
        // $count = Redis::incr($key);
        // echo 'count: '.$count;
   
    }
        public function reg(Request $request){
    //        echo "123";die;
            $password2 = $request->input('password2');
    //           echo $password2;die;
            if($request->input('password')!=$password2){
                echo "两次密码不一致";die;
            };

            $data=[
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'tel'=> $request->input('tel'),
                'appid'=> $request->input('appid'),
                'password'=>  password_hash($request->input('password'),PASSWORD_BCRYPT),
                'last_login'    => time(),
                'last_ip'       => $_SERVER['REMOTE_ADDR'],     //获取远程IP
            ];
            $aaa=UserModel::insertGetId($data);
            if($aaa){
                $response = [
                    'errno' => 400000,
                    'msg'   => '注册成功'
                ];
            }
            return $response;

        }
  //登陆
        public function login(Request $request){
            $data = $request->input();
    //        dd($data);
            $password = $request->input('password');
            if(strpos($data['account'],'@')){
                $where=['email'=>$data['account']];
            }else{
                $where=['tel'=>$data['account']];
            }
            $u = UserModel::where($where)->first();
    //        dd($u);
            if($u){
                //验证密码
                if( password_verify($password,$u->password) ){
                    // 登录成功
                    //echo '登录成功';
                    //生成token
                    $redis_key='token:user:appid:'.$u['appid'];
                    $redis_val=md5(time().$u['p_id'].$u['name']);
                    Redis::set($redis_key,$redis_val);
                    Redis::expire($redis_key,60480);
                    $response = [
                        'errno' => 0,
                        'state'=> '登陆成功',
                        'msg'   => 'ok',
                        'data'  => [
                            'appid'=>$u['appid'],
                            'token' => $redis_val
                        ]
                    ];

                }else{
                    $response = [
                        'errno' => 400003,
                        'msg'   => '密码不正确'
                    ];
                }
            }else{
                $response = [
                    'errno' => 400004,
                    'msg'   => '用户不存在'];
            }
            return $response;
        }


        public function getuserinfo(){
            $data=$_POST;
            dd($data);
            if(strpos($data['account'],'@')){
                $where=['email'=>$data['account']];
            }else{
                $where=['tel'=>$data['account']];
            }
            $info=UserModel::where($where)->first();
            if(!$info){
                $error1=json_encode(['errorcode'=>'0009','errmsg'=>'account或token有误1'],JSON_UNESCAPED_UNICODE);
                echo $error1;exit;
            }
//        $redis_key='token:user:id:'.$info['appid'];
            $redis_key='token:user:appid:'.$info['appid'];
            $redis_token=Redis::get($redis_key);
            $data_token=$_SERVER['HTTP_TOKEN'];
            if($redis_token!=$data_token){
                $error1=json_encode(['errorcode'=>'0009','errmsg'=>'account或token有误2'],JSON_UNESCAPED_UNICODE);
                echo $error1;exit;
            }
            unset($info['p_id']);
            unset($info['password']);
            echo json_encode($info->toarray(),JSON_UNESCAPED_UNICODE);
        }

        //鉴权
        /**
         * 接口鉴权
         */
        public function auth()
        {
            $appid = $_POST['appid'];
            $token = $_POST['token'];

            if(empty($_POST['appid']) || empty($_POST['token'])){
                $response = [
                    'errno' => 40003,
                    'msg'   => 'Need token or uid'
                ];
                return $response;
            }

            $redis_key='token:user:appid:'.$appid;
            //验证token是否有效
            $cache_token = Redis::get($redis_key);

            if($token==$cache_token)        // token 有效
            {
                $response = [
                    'errno' => 0,
                    'msg'   => 'ok'
                ];
            }else{
                $response = [
                    'errno' => 40003,
                    'msg'   => 'Token Not Valid!'
                ];
            }
            return $response;
        }
        public function yq(){

        echo '<pre>';print_r($_GET);echo '</pre>';

        $key = "mxl";          // 计算签名的KEY 与发送端保持一致

        //验签
        $data = $_GET['data'];  //接收到的数据
        $signature = $_GET['signature'];    //发送端的签名

        // 计算签名
        echo "接收到的签名：". $signature;echo '</br>';
        $s = md5($data.$key);
        echo '接收端计算的签名：'. $s;echo '</br>';

        //与接收到的签名 比对
        if($s == $signature)
        {
            echo "验签成功";
        }else{
            echo "验签失败";
        }

        }
}
