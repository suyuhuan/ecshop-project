<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div class="nav_class f_l">
<div class="w">
    <div class=" f_l">
    <span class="nides"><a href="">收藏本站</a></span>
    <span>关注我们：</span>
    <span><a href=""><img src="themes/default/images/weiboweibo.png"/></a></span>
    <span><a href=""><img src="themes/default/images/ruihuakangyuanweixin.png"/></a></span>
    <span><a href=""><img src="themes/default/images/huakangyiyaop.png"/></a></span>
    <span>您好，欢迎来到瑞华康源！</span>
    </div>
    <div class="f_r">
    <span class="asasa"><a href="user.php">登录</a></span>
    <span class="asasa"><a href="user.php?act=register">注册</a></span>
    <span class="asasa"><a href="user.php">我的账户</a></span>
    <span class="asasa"><a href="user.php">会员专区</a></span>
    <span class="asasa"><a href="article.php?id=7">帮助中心</a></span>
    <span><a href="article.php?id=2">4000691112</a></span>
    </div>
</div>
</div>




<div class="block clearfix padding-ds">
<div class="w">
 <div class="f_l"><a href="index.php" name="top"><img style="width:200px;height:80px;" src="themes/default/images/logo.gif" /></a></div>


<div class="f_l log clearfix"  id="search">
    <div class="keys f_l">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
    <?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
  </div>
   <form id="searchForm form_search" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_l"  style="_position:relative; top:5px;">   
        <input name="keywords" type="text" id="keyword" style="width:340px;height:36px;" value="&nbsp;<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="B_input" /><input name="imageField" type="submit" value="搜索" class="go" style="cursor:pointer;" />
   </form>

 </div>




<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div class="cart f_r" id="ECS_CARTINFO">
 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</div>
<div class="blank5"></div>
</div>
</div>


<div  class="blank"></div>
<div id="mainNav" class="clearfix">
    <div class="w">
        <a href="index.php" class="cur" >全部商品分类 </a>
        <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a>
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>
