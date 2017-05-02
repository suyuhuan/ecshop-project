<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box">
<div class="box_2 centerPadd">
  <div class="itemTit" id="itemBest">
      <?php if ($this->_var['cat_rec'] [ 1 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(1, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a></h2>
      <?php $_from = $this->_var['cat_rec']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
      <h2 class="h2bg"><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(1, <?php echo $this->_var['rec_data']['cat_id']; ?>)"><?php echo $this->_var['rec_data']['cat_name']; ?></a></h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
  </div>
  <div id="show_best_area" class="clearfix goodsBox">
  <?php endif; ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_78515600_1458038754');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_78515600_1458038754']):
?>
  <div class="goodsItem">
         <span class="best"></span>
           <a href="<?php echo $this->_var['goods_0_78515600_1458038754']['url']; ?>"><img src="<?php echo $this->_var['goods_0_78515600_1458038754']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_78515600_1458038754']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods_0_78515600_1458038754']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_78515600_1458038754']['name']); ?>"><?php echo $this->_var['goods_0_78515600_1458038754']['short_style_name']; ?></a></p>
           <font class="f1">
           <?php if ($this->_var['goods_0_78515600_1458038754']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_78515600_1458038754']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_78515600_1458038754']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div class="more"><a href="search.php?intro=best"><img src="themes/default/images/more.gif" /></a></div>
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>
</div>
</div>
<div class="blank5"></div>
  <?php endif; ?>
<?php endif; ?>
