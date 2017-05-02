<?php

class template
{
    /**
    * 鐢ㄦ潵瀛樺偍鍙橀噺鐨勭┖闂
    *
    * @access  private
    * @var     array      $vars
    */
    var $vars = array();

   /**
    * 妯℃澘瀛樻斁鐨勭洰褰曡矾寰
    *
    * @access  private
    * @var     string      $path
    */
    var $path = '';

    /**
     * 鏋勯€犲嚱鏁
     *
     * @access  public
     * @param   string       $path
     * @return  void
     */
    function __construct($path)
    {
        $this->template($path);
    }

    /**
     * 鏋勯€犲嚱鏁
     *
     * @access  public
     * @param   string       $path
     * @return  void
     */
    function template($path)
    {
        $this->path = $path;
    }

    /**
     * 妯℃嫙smarty鐨刟ssign鍑芥暟
     *
     * @access  public
     * @param   string       $name    鍙橀噺鐨勫悕瀛
     * @param   mix           $value   鍙橀噺鐨勫€
     * @return  void
     */
    function assign($name, $value)
    {
        $this->vars[$name] = $value;
    }

    /**
     * 妯℃嫙smarty鐨刦etch鍑芥暟
     *
     * @access  public
     * @param   string       $file   鏂囦欢鐩稿?璺?緞
     * @return  string      妯℃澘鐨勫唴瀹?鏂囨湰鏍煎紡)
     */
    function fetch($file)
    {
        extract($this->vars);
        ob_start();
        include($this->path . $file);
        $contents = ob_get_contents();
        ob_end_clean();

        return $contents;
    }

    /**
     * 妯℃嫙smarty鐨刣isplay鍑芥暟
     *
     * @access  public
     * @param   string       $file   鏂囦欢鐩稿?璺?緞
     * @return  void
     */
    function display($file)
    {
        echo $this->fetch($file);
    }
}

?>