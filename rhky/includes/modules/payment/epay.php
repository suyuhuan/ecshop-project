<?php

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/epay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'epay_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'ECSHOP TEAM';

    /* 网址 */
    $modules[$i]['website'] ='http://www.95epay.cn/merRegister.jsp?countermanName=%E5%BC%A0%E4%BF%8A%E8%BE%89&countermanPhoneNO=13113391311&countermanQQ=2361064531';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'epay_account',           'type' => 'text',   'value' => ''),
        array('name' => 'epay_key',               'type' => 'text',   'value' => '')
    );

    return;
}

/**
 * 类
 */
class epay
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function epay()
    {
    }

    function __construct()
    {
        $this->epay();
    }

    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
        if (!defined('EC_CHARSET'))
        {
            $charset = 'utf-8';
        }
        else
        {
            $charset = EC_CHARSET;
        }
        $parameter=array();
        $parameter['MerNo']=$payment['epay_account'];
        $parameter['MD5key']=$payment['epay_key'];

	
        $parameter['Amount']= $order['order_amount'];
        $parameter['BillNo']= time().str_pad($order['log_id'], 10, "0", STR_PAD_LEFT);
        $parameter['ReturnURL'] = $GLOBALS['ecs']->url() . 'respond.php';
        $parameter['NotifyURL'] = $GLOBALS['ecs']->url() . 'respond.php';
        $parameter['PaymentType']= "";
        $parameter['PayType']= "CSPAY";//CSPAY:网银支付; 

        $sign_params  = array(
            'MerNo'       => $parameter['MerNo'],
            'BillNo'       => $parameter['BillNo'], 
            'Amount'         => $parameter['Amount'],   
            'ReturnURL'       => $parameter['ReturnURL'],
        );
        $sign_str = "";
        ksort($sign_params);

        foreach ($sign_params as $key => $val)
        {
                                   
             $sign_str .= sprintf("%s=%s&", $key, $val);
        }
        $parameter['MD5info']= strtoupper(md5($sign_str. strtoupper(md5($parameter['MD5key']))));
        $parameter['MerRemark']='epay';
        $parameter['products']='IphoneNike';
        $button ='<form action="https://www.95epay.cn/sslpayment" method="post">';
        foreach($parameter as $key=>$val)
        {
          $button .='<input type="hidden" name="'.$key.'" value="'.$val.'">';
        }
        $button .='<p align="center"><input type="submit" name="b1" value="'.$GLOBALS['_LANG']['pay_button'].'"></p>
       </form>';
        return $button;
    }

    /**
     * 响应操作
     */
    function respond()
    {
        $payment  = get_payment('epay');
        $md5sign         ='';
        $BillNo          =     $_POST["BillNo"];
        $Amount          =     $_POST["Amount"];
        $Succeed         =     $_POST["Succeed"];     
        $MD5info         =     $_POST["MD5info"];
        $Result          =     $_POST["Result"];
        $MerNo           =     $_POST['MerNo'];
        $MD5key          =     $payment['epay_key'];
        $MerRemark       =     $_POST['MerRemark'];		//自定义信息返回
        $sign_params  = array(
        'MerNo'         => $MerNo,
        'BillNo'        => $BillNo, 
        'Amount'        => $Amount,   
        'Succeed'       => $Succeed
            );
         
        $sign_str = "";
        ksort($sign_params);
        foreach ($sign_params as $key => $val) {              
            $sign_str .= sprintf("%s=%s&", $key, $val);    
        }
       $md5sign= strtoupper(md5($sign_str. strtoupper(md5($MD5key)))); 
         
       if($md5sign==$MD5info && $Succeed!='88')
       {
           return false;
       }
       elseif($md5sign==$MD5info && $Succeed=='88')
       {
            /* 改变订单状态 */
            $order_sn=substr($BillNo,-10);
            $order_sn=intval($order_sn);
            order_paid($order_sn);
            return true;
       }
       else
       {
           return false;
       }

    }



}

?>