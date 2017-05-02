<div class="footer-box">
        
    <div class="w footer-icon" style="text-align:center;">
	<div class="iconMap">
    	<a class="iconMap1" rel="nofollow" title="货到付款" target="_blank" href="article_cat.php?id=2">
			<p class="iconBg"></p>
			<p class="icon-title">货到付款</p>
		</a>
        <a class="iconMap2" rel="nofollow" title="专业药师咨询" target="_blank" href="article_cat.php?id=2">
			<p class="iconBg iconBg1"></p>
			<p class="icon-title">专业药师咨询</p>
		</a>
        <a rel="nofollow" title="100%" target="_隐私保护" href="article_cat.php?id=2">
			<p class="iconBg iconBg2"></p>
			<p class="icon-title">隐私保护</p>
		</a>
        <a rel="nofollow" title="满99包邮" target="_blank" href="article_cat.php?id=2">
			<p class="iconBg iconBg3"></p>
			<p class="icon-title">满99包邮</p>
		</a>
        <a rel="nofollow" title="药监认证" target="_blank" href="article_cat.php?id=2">
			<p class="iconBg iconBg4"></p>
			<p class="icon-title">药监认证</p>
		</a>
        <a rel="nofollow" title="正品保障" target="_blank" href="article_cat.php?id=2">
			<p class="iconBg iconBg5"></p>
			<p class="icon-title">正品保障</p>
		</a>
            </div>
        </div>

	<div class="footer-table">
    	<div class="w clearfix">
            <div class="someInfo f_l">
            	<div class="phone">
                	<h4>24小时客服热线</h4>
			<i>&nbsp;</i>
			<p>4000 691112</p>
                </div>
                <div class="phone1">
                	<h4>新手上路</h4>
			<p><a href="article_cat.php?id=2">免费注册</a></p>
			<p><a href="article_cat.php?id=2">购物流程</p></a>
			<p><a href="article_cat.php?id=2">订购方式</p></a>
			<p><a href="article_cat.php?id=2">订单状态</p></a>
			<p><a href="article_cat.php?id=2">常见问题</p></a>
                </div>                
                <div class="phone1">
                	<h4>关于支付</h4>
			<p><a href="v">支付方式</p></a>
			<p><a href="article_cat.php?id=2">货到付款</p></a>
			<p><a href="article_cat.php?id=2">银行转账</p></a>
			<p><a href="article_cat.php?id=2">发票</p></a>
			<p><a href="article_cat.php?id=2">退款</p></a>
                </div>
                <div class="phone1">
                	<h4>关于配送</h4>
			<p><a href="article_cat.php?id=2">配送方式</p></a>
			<p><a href="article_cat.php?id=2">配送费用</p></a>
			<p><a href="article_cat.php?id=2">收货验货</p></a>
			<p><a href="article_cat.php?id=2">配送地区</p></a>
			<p><a href="article_cat.php?id=2">到货时间</p></a>
                </div>
                <div class="phone1">
                	<h4>售后服务</h4>
			<p><a href="article_cat.php?id=2">正品保证</p></a>
			<p><a href="article_cat.php?id=2">售货说明</p></a>
			<p><a href="article_cat.php?id=2">退货商品</p></a>
			<p><a href="article_cat.php?id=2">发票制度</p></a>
			<p><a href="article_cat.php?id=2">发票票据</p></a>
                </div>
                <div class="phone1">
                	<h4>会员中心</h4>
			<p><a href="article_cat.php?id=2">成为会员</p></a>
			<p><a href="article_cat.php?id=2">会员等级</p></a>
			<p><a href="article_cat.php?id=2">会员积分</p></a>
			<p><a href="article_cat.php?id=2">优惠券使用</p></a>
			<p><a href="article_cat.php?id=2">投诉与建议</p></a>
                </div>
            </div>
            
            <?php if ($this->_var['helps']): ?>
        	<table class="dtab f_l clearfix" cellspacing="0" cellpadding="0">
        		<tr>
            		<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?>
                	<?php if ($this->_foreach['foo']['iteration'] < 6): ?> 
                	<td>
                		<div class="line"></div>
                	</td>
                	<td>
                		<dl class="dl">
                    		<dt class="dt"><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
                        	<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                        	<dd class="dd">
                        		<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a>
                        	</dd>
                        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    	</dl>
                	</td>
                	<?php endif; ?>
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                	<td>
                		<div class="line"></div>
                	</td>
            	</tr>
        	</table>
        	<?php endif; ?>
            <div class="weixin f_r">
            	<div class="img">
                        <a rel="nofollow" class="f_r" href="javascript:;">
                                <dt><img width="100" height="100" src="themes/default/images/20151231104101_6009.png"></dt>
                                <dl>华康医药微信</dl>
                        </a>
                        <a rel="nofollow" class="f_r" href="javascript:;">
                                <dt><img width="100" height="100" src="themes/default/images/20151231104113_0740.png"></dt>
                                <dl>瑞华康源微信</dl>
                        </a>
                </div>
        	</div>
        </div>
    </div>
    
	<div class="foot_con">
    	<div class="blank"></div>
        
        <div class="blank"></div>
        <div id="bottomNav" class="rolling" >
            <?php if ($this->_var['navigator_list']['bottom']): ?>
            <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_80859300_1458038754');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_80859300_1458038754']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav_0_80859300_1458038754']['url']; ?>" <?php if ($this->_var['nav_0_80859300_1458038754']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_80859300_1458038754']['name']; ?></a> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php endif; ?>
        </div>
        
        
        
        <div class="text" style="height:1px ; width:1px; overflow:hidden;">
        	<?php echo $this->_var['shop_address']; ?>
        	<?php if ($this->_var['service_phone']): ?>
            Tel: <?php echo $this->_var['service_phone']; ?>
            <?php endif; ?>
            <?php if ($this->_var['service_email']): ?>
            E-mail: <?php echo $this->_var['service_email']; ?><br />
            <?php endif; ?>
            <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
            <?php if ($this->_var['im']): ?>
            <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
            <?php if ($this->_var['im']): ?>
            <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
            <?php if ($this->_var['im']): ?> 
            <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/default/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
            <?php if ($this->_var['im']): ?> 
            <img src="themes/default/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
            <?php if ($this->_var['im']): ?> 
            <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
        </div>
        
        <div class="record">
        <p style="font-size:14px;"><a href="#">首页</a> | <a href="">专科用药</a> | <a href="category.php?id=2">医疗器械</a> | <a href="category.php?id=1">专科用药</a> | <a href="article_cat.php?id=3">健康问答</a> | <a href="category.php?id=4">隐形眼镜</a> | <a href="article_cat.php?id=2">关于我们</a></p>
        <p style="color:#999;">京公网安备110102000377-1 版权所有：深圳市华康医药有限公司</p>
        <p style="color:#999;">地址：深圳市龙岗区龙城街道爱联社区台中工业园B26栋B04栋（大运中心地铁大运站C出口星河时代花园旁）</p>        
        <p class="span_src"><span><img src="themes/default/images/20160225152901.png"/></span><span><img src="themes/default/images/authentication06.jpg"/></span><span><img src="themes/default/images/authentication03.jpg"/></span><span><img src="themes/default/images/tool_icon2.png"/></span></p>
        </div>        
  </div>
</div>
  




<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
