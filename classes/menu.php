<?php
/**
 * @copyright Copyright(c) 2016 aircheng.com
 * @file menu.php
 * @brief 后台系统菜单管理
 * @author nswe
 * @date 2016/3/4 23:59:33
 * @version 4.4
 */
class Menu
{
    //菜单的配制数据
	public static $menu = array(
	    '网站设置'=>array(
    		'后台首页'=>array(
    			'/system/default' => '后台首页',
    		),
        	'网站管理'=>array(
        		'/system/conf_base' => '网站设置',
            	'/tools/seo_sitemaps' => '网站搜索地图',
        	)
		),
		'学校课程'=>array(
		    '学校展示'=>array(
                '/brand/category_list'  =>  '学校地区',
                '/brand/brand_list'     =>  '学校列表',
                '/brand/brand_edit'     =>  '添加学校'
            ),
			'课程管理'=>array(
				'/goods/category_list'	=>	'分类列表',
				'/goods/category_edit'	=>	'添加分类',
				'/goods/goods_list' => '课程列表',
				'/goods/goods_edit_1' => '添加课程'
			),
        	'代金券管理'=>array(
        		'/market/ticket_list'       => '代金券列表',
				'/market/brand_chit_list'       => '代金券列表2',
				'/market/brand_chit_list2'       => '短期课列表',
        	    '/market/brand_zuhe_list' => '短期课套餐组合',
        	    '/market/brand_chit_list3' => '手册优惠列表',
        	    '/brand/brand_chit_edit3' => '添加手册优惠',
        	),
		    '教育手册'=>array(
		        '/market/manual_list'       => '手册列表',
		    ),
        	'促销活动' => array(
			   '/market/pro_rule_list' => '促销活动列表',
        	   '/market/pro_speed_list' => '限时抢购',
        	   '/market/regiment_list' => '团购',
        	   '/market/sale_list' => '特价'
        	),
        	'线下活动地点'=>array(
	    		'/system/takeself_list' => '地点列表',
	    		'/system/takeself_edit'  => '添加地点'
        	),
		),
		'用户商家'=>array(
			'个人用户'=>array(
	    		'/member/member_list' 	=> '用户列表',
	     		'/member/group_list' 	=> '用户组',
				'/comment/message_list'	=> '用户消息',
			),
			'商户管理' => array(
				'/member/seller_list' => '商户列表',
				//'/member/seller_edit' => '商户信息',
				'/member/seller_edit2' => '商户属性',
				'/member/seller_edit3' => '商户功能',
				'/member/seller_edit4' => '商户结算',
				'/member/seller_edit5' => '商户账户',
				'/member/seller_edit6' => '商户认证',
			),
		    '教师管理' => array(
		        '/member/teacher_list' => '老师列表',
		        '/member/teacher_edit' => '添加老师'
		    ),
		),
       '文章资讯'=>array(
			'文章管理'=>array(
				'/tools/article_cat_list'=> '文章分类',
				'/tools/article_list'=> '文章列表'
			),
			'帮助管理'=>array(
   				'/tools/help_cat_list'=> '帮助分类',
   				'/tools/help_list'=> '帮助列表',
   			),
   			'广告管理'=>array(
   				'/tools/ad_position_list'=> '广告位列表',
   				'/tools/ad_list'=> '广告列表',
   			),
   			'公告管理'=>array(
   				'/tools/notice_list'=> '公告列表',
   				'/tools/notice_edit'=> '公告发布',
   			)
        ),
	    '客服咨询' => array(
			'咨询评价' => array(
				'/comment/suggestion_list'  => '建议管理',
				'/comment/refer_list'		=> '咨询管理',
				'/comment/discussion_list'	=> '讨论管理',
				'/comment/comment_list'		=> '评价管理'
			),
			'通知信息' => array(
				'/message/notify_list'      => '到货通知',
				'/message/registry_list'    => '邮件订阅',
				'/message/marketing_sms_list'=> '营销短信',
				'/comment/seller_message_list' => '商户消息发送',
			)
		),
	   '财务管理'=>array(
			'基础数据统计'=>array(
      			'/market/user_reg' 	   => '用户注册统计',
				'/market/spanding_avg' => '人均消费统计',
      			'/market/amount'       => '销售金额统计'
			),
        	'订单管理'=>array(
                '/order/order_list' => '订单列表',
             	'/order/order_collection_list'  => '收款记录',
             	'/order/order_refundment_list'  => '退款记录',
        		'/order/order_delivery_list'    => '上课记录',
        		'/order/refundment_list'        => '退款申请',
		    ),
			'成交结算'=>array(
				//'/market/order_goods_list' => '成交明细',
				//'/market/bill_list' => '结算申请',
			    '/market/sale_tixian' => '商户提现',
	     		'/member/withdraw_list' =>'用户提现',
			    '/market/profit_list' =>'平台收益',
			),
		    '推广记录' => array(
		        '/market/prom_user_list' => '推广用户列表',
		        '/market/prom_seller_list' => '推广商户列表',
		        '/market/prom_order_list' => '推广订单列表',
		     ),
        	'支付交易'=>array(
            	'/system/payment_list' => '支付方式',
		        '/market/prom_rules_list' => '推广设置',
            	'/system/delivery'  	=> '流程设置',
        	),
	      //  '短期课组合设置' => array(
	      //      '/market/brand_chit_zuhe_setting' => '短期课自选设置',
	      //  ),
		),
        '系统管理'=>array(
        	'权限管理'=>array(
        		'/system/admin_list' => '管理员',
        		'/system/role_list'  => '角色',
        		'/system/right_list' => '权限资源',
			),
			'日志操作记录'=>array(
				'/market/account_list'   => '充值操作记录',
				'/market/operation_list' => '后台操作记录',
     		 ),
		),
		'插件' => array(
       		'插件管理' => array(
       			'/plugins/plugin_list' => '插件列表',
       		),
		),
	);

	//非菜单连接映射关系,array(视图名称 => menu数组中已存在的菜单连接)
	public static $innerPathUrl = array(
		"/system/navigation" => "/system/default",
		"/system/navigation_edit" => "/system/default",
	);

    /**
     * @brief 根据权限初始化菜单
     * @param int $roleId 角色ID
     * @return array 菜单数组
     */
    public static function init($roleId)
    {
		//菜单创建事件触发
		plugin::trigger("onSystemMenuCreate");

		//根据角色分配权限
		if($roleId == 0)
		{
			$adminRights = 'administrator';
		}
		else
		{
			$roleObj = new IModel('admin_role');
			$where   = 'id = '.$roleId.' and is_del = 0';
			$roleRow = $roleObj->getObj($where);
			$adminRights = isset($roleRow['rights']) ? $roleRow['rights'] : '';
		}

		//1,超管返回全部菜单
		if($adminRights == "administrator")
		{
			return self::$menu;
		}

		//2,根据权限码显示菜单
		$result      = array();
		$defaultShow = array('/system/default');
		foreach(self::$menu as $key1 => $val1)
		{
			foreach($val1 as $key2 => $val2)
			{
				foreach($val2 as $key3 => $val3)
				{
					//把菜单数据里面的路径转化成@符号做权限码比对
					$tempKey3 = str_replace("/","@",trim($key3,"/"));
					if(in_array($key3,$defaultShow) || strpos($adminRights,$tempKey3) !== false)
					{
						$result[$key1][$key2][$key3] = $val3;
					}
				}
			}
		}
		return $result;
    }

    /**
     * @brief 根据当前URL动态生成菜单分组
     * @param array  $menu 菜单数据
     * @param string $info 连接信息
     * @return array 菜单数组
     */
    public static function get($menu,$info)
    {
    	$result = self::menuInfo($menu,$info);
    	if($result)
    	{
    		return $result;
    	}

		//历史URL信息
		$lastInfo = IUrl::getRefRoute();
		if($lastInfo && strpos($lastInfo,$info) === false && $result = self::menuInfo($menu,$lastInfo))
		{
			ICookie::set('lastInfo',$lastInfo);
			return $result;
		}

		//从COOKIE读取URL信息
		$lastInfo = ICookie::get('lastInfo');
		if($lastInfo)
		{
			return self::menuInfo($menu,$lastInfo);
		}
		return array('插件' => self::$menu['插件']);
    }

	/**
	 * @brief 判断url路径获取定义的菜单项
	 * @param array  $menu 当前管理员权限合法的菜单
	 * @param string $info 访问的URL
	 * @return array(地址=>名称) or null
	 */
    public static function menuInfo($menu,$info)
    {
    	//已有菜单查找
		foreach($menu as $key1 => $val1)
		{
			foreach($val1 as $key2 => $val2)
			{
				foreach($val2 as $key3 => $val3)
				{
					if(strpos($key3,$info) !== false || strpos($info,$key3) !== false)
					{
						return array($key1 => $menu[$key1]);
					}
				}
			}
		}

		//配置菜单映射
		if(self::$innerPathUrl)
		{
			foreach(self::$innerPathUrl as $key => $val)
			{
				if(strpos($key,$info) !== false)
				{
					return self::menuInfo($menu,$val);
				}
			}
		}
		return null;
    }

    /**
     * @brief 获取顶级分类关系数据
     * @param array $menu 菜单数据
     * @return array 顶级菜单数组
     */
    public static function getTopMenu($menu)
    {
    	$result = array();
		foreach($menu as $key1 => $val1)
		{
			foreach($val1 as $key2 => $val2)
			{
				foreach($val2 as $key3 => $val3)
				{
					$result[$key1] = $key3;
					break 2;
				}
			}
		}
		return $result;
    }
}