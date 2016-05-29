<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
/*
		//C()方法为config的缩写
    	echo C('name')."<br/>";
    	echo C('sex')."<br/>".C('age');
*/
/*    	
    	echo C('URL_MODEL')."<br/>";
    	//U('模块/方法', array('id'=>1,'xxx.html', true/false, 'localhost'));
    	//true/false设置是否需要跳转
    	echo U('Index/user', array('id'=>1),'html',false,'thinkphp');
*/
/*        
    	// show();
        $arr = array(1,2,3,4,5);
        dump($arr);
*/
        // $this->display('test');

/*
//第一种赋值方法
        $name = "ChangPengfei";
        $this->name2 = $name;
        $this->display();
*/

/*
//第二种赋值方法
        $name = "Jerry";
        $this->name2 =$name;
        $date = date('Y-m-d');
        $this->assign('name',$name);
        $this->display();
*/  
/*
        $me['name'] = '常鹏飞';

       $name=substr(md5($me['name']),0,5).'<br/>';
       $this->name=$name;
       $this->now=time();

        $me['age'] = 29;
        $me['sex'] = 'boy';
        $this->assign('me',$me);
        $this->display();
*/


        $person = array(
            1=>array('name' =>'Jack' ,'age'=>'18' ),
            2 => array('name' => 'Tom','age'=>'16' ),
            3 => array('name' => 'Peter','age'=>'13' ),
            4 => array('name' =>'Mary','age'=>'21'),
        );
        $this->assign('person',$person);
      
        $num = 15;
        $this->assign('num',$num);

        // $name = 'xiaohuang';
        // $this->assign('name',$name);

        $this->display();
    }

    public function user_model(){
/*
    	echo 'id is:'.$_GET['id']."<br/>";
    	echo "这里是index模块的user方法";
*/
/*
        trace('name', C('name'));
        // dump($_SERVER);

        G('run');                    //使用G()函数查看运行时间，这里标记开始位置
        for($i=0;$i<1000;$i++){
            $count += $i;
        }
        echo $count."<br/>";
        echo G('run','end')."<br/>"; //查看运行时间，单位毫秒

        echo C('name');              //输出Conf目录下，配置文件某一项的值
        $this->display();
*/

    //实例化基础模型model
        //$user = new Model('user');

        // $user = M('user');
        // $data = $user->select();
        // dump($data);

    //实例化用户自定义模型
        // $user = new UserModel();

        //M()方法只是实例化模型，不需要用户定义模型文件、模型类
        //D()方法是高级的M()方法，如果没有找到自定义的模型类(删掉UserModel)，他会自动转为M()方法
        /*
            $user = D('User');
            // echo $user->getinfo();
            $data =$user->select();
            dump($data);
        */
    //实例化公共模型
        // $user = new CommonModel();

        // $user = D('User');     //使User模型继承CommonModel，则对$user直接用D()方法
        // echo $user->strmake('bbbbb');
    //实例化空模型
            $model = M();   //实例化一个控模型
            //$data = $model->query('select * from mooc_user');   //query进行日常读取
            $sql = "update mooc_user set user_name='xiaochang',nick_name='小常' where id=2";
            $model->execute($sql);  //execute用于update、insert等
            dump($data);
    }

    public function user_curd(){
//数据库CURD操作
    // add 创建多条数据库
            $data = array(
                0 => array(
                    'user_name' => 'xiaochang',
                    'nick_name' => '小常',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                1 => array(
                    'user_name' => 'xiaowang',
                    'nick_name' => '小王',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                2 => array(
                    'user_name' => 'xiaohong',
                    'nick_name' => '小红',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                3 => array(
                    'user_name' => 'xiaogang',
                    'nick_name' => '小刚',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                4 => array(
                    'user_name' => 'xiaozhang',
                    'nick_name' => '小张',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                5 => array(
                    'user_name' => 'xiaoli',
                    'nick_name' => '小李',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                6 => array(
                    'user_name' => 'xiaotang',
                    'nick_name' => '小唐',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                7 => array(
                    'user_name' => 'xiaoyu',
                    'nick_name' => '小雨',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                8 => array(
                    'user_name' => 'xiaohui',
                    'nick_name' => '小慧',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                9 => array(
                    'user_name' => 'xiaoxia',
                    'nick_name' => '小霞',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ),
                10 => array(
                    'user_name' => 'xiaobao',
                    'nick_name' => '小宝',
                    'password'  => md5('123456'),
                    'score'     => '100',
                    'create_date' => date('Y-m-d H:i:s'),
                    'update_date' => date('Y-m-d H:i:s'),
                ), 

            );           

            // echo M('User')->addAll($data);  //插入多条数据，返回第一条受影响的ID号

            // echo M()->getLastSql(); //调式信息，显示执行的SQL语句，一般不用，而用Trace
            // echo M('User')->add($data);  //插入单条数据        
    //二、 select查询——————尽量使用表达式和区间查询方式
            // 1、直接使用字符串进行查询——————尽量不用
            // $data = M('User')->where('id=1')->select();
            // 2、使用数组方式查询
/*
            $where['id'] = 24;
            $where['user_name'] = 'xiaoming';
            $where['_logic'] = 'or';
            $data = M('User')->where($where)->select();
*/
        // 3、表达式查询 eq neq egt gt lt elt like between in(not)
        //$where['字段名']=array(表达式，查询条件)    
            // $where['id'] = array('lt',3);
            // $where['id'] = array('between','1,28');
            // $where['id'] = array('notin','1,28');
            // $where['user_name'] = array('like','%bao');
            // $where['user_name']=array('like',array('%ming','%bao'));
        // 4、区间查询1<id<25
            // $where['id'] = array(array('gt',1),array('lt',25)); 
            // $where['id'] = array(array('gt',33),array('lt',24),'or');
        
        // 5、混合用法，尽量不用混合用法和字符串用法
            // $where['id'] = array('gt',10);
            // $where['_string'] = 'score>70';    
            // $data = M('User')->where($where)->select();
            
        // 6、统计用法
            /*
            count统计数量、max获取最大值、min最小值、avg平均值、sum求和
            */
            // $data = M('User')->count();
            // $data = M('user')->min('id');
            // $data = M('User')->avg('score');
            // $data = M('user')->sum('score');

            // dump($data);

    // 三、update更新_________save()函数即为update()            
            // $where['id']=1;
            /*
            $update['score']=60;
            $data = M('user')->where($where)->save($update);
            */
            // $data = M('user')->where($where)->select();
            // dump($data);

    // 四、delete删除
            /*   
            $where['user_name']='xiaoyu';
            $data = M('user')->where($where)->select();
            dump($data);
            */
            // echo M('user')->where($where)->delete();
            //echo M('user')->delete('27');     //省略$where条件，只能传入主键id

            $this->display();
    }

    public function user()
    {
    //连贯操作
    // 1、order排序    order(字符串)多个条件用英文逗号隔开
        // $data = M('user')->order('score desc')->select();
        //$data = M('user')->order('score desc,id asc')->select();

    // 2、field($string, false) $string传入多个字段名用英文逗号分开
        //第二个参数为false时，过滤只显示$string字段信息；true时，显示除string之外的信息        
        // $data = M('user')->field('id,user_name')->order('score desc,id asc')->select();
        // $data = M('user')->field('id,user_name',true)->order('score desc,id asc')->select();

    // 3、limit(start,length)，从start开始，取长度5个数据；start可省略
        /*
        $data = M('user')->field('id,user_name',true)
                         ->order('score desc,id asc')
                         ->limit(1,5)   //start开始为0，这里从第2条开始，取5个数据
                         ->select();
        */                 

    // 4、page(页码，每页的条数)，每页条数可省略，默认为20 
        /*
        $data = M('user')->field('id,user_name')
                         ->order('id asc')
                         ->page(1,5)
                         ->select();
        */
    //group分组操作，统计每个分数的人数
        /*                 
        $data = M('user')->field('score, count(*) as total')
                         ->having('score>=70')  //只统计出大于70分的每个分数的人数
                         ->group('score')
                         ->select();
        */
    //多表查询table方法，table(array('表名'=>'别名')) 表名需要加前缀 _______table()方法一般不用
        /*
        $data=M('user')->table(array('mooc_user'=>'user','mooc_userinfo'=>'info'))
                       ->where('user.id = info.user_id')
                       ->select();
        */
    //多表查询join方法，join()支持字符串和数组
        /* //默认为左关联，即左表user全显示，以user为准去匹配userinfo，user有userinfo没有的为空               
        $data=M('user')->join('mooc_userinfo On mooc_userinfo.user_id=mooc_user.id')
                        ->select(); 
        */
        //右关联以右表userinfo为准，即只显示userinfo中有的数据
        //inner join显示两表都有的数据
        /*                
        $data=M('user')->join('inner join mooc_userinfo On mooc_userinfo.user_id=mooc_user.id')
                        ->select();                              
        */
    //对表查询union查询，union('string/array',true/false)
        //union查询只能查询两个表拥有的相同字段，且字段类型一样
        /* //字符串形式
        $data = M('user')->field('user_name,id')    //这里的字段顺序要与下面一致
                         ->union('select user_name,id from mooc_user2') 
                         ->select(); 
        */
        /* //数组形式，union all查询去重复操作                 
        $data = M('user')->field('user_name')       //下面为数组形式,设置true,进行union all查询
                         ->union(array('field'=>'user_name','table'=>'mooc_user2'),true)
            //多表查询   ->union(array('field'=>'user_name','table'=>'mooc_user3'),true)
                         ->select();
        */
    //过滤查询 distinct
        $data = M('user')->field('score')
                         ->distinct(true)       //设置distinct为true过滤掉重复数据
                         ->order('score asc')
                         ->select();

        //这里测试github，增加了一些分支信息                

        dump($data);
        $this->display();
    }

}