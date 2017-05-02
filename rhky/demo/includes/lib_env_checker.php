<?php

function check_dirs_priv($checking_dirs)
{
    include_once(ROOT_PATH . 'includes/lib_common.php');

    global $_LANG;
    $msgs = array('result' => 'OK', 'detail' => array());

    foreach ($checking_dirs as $dir)
    {
        if (!file_exists(ROOT_PATH . $dir))
        {
            $msgs['result'] = 'ERROR';
            $msgs['detail'][] = array($dir, $_LANG['not_exists']);
            continue;
        }

        if (file_mode_info(ROOT_PATH . $dir) < 2)
        {
            $msgs['result'] = 'ERROR';
            $msgs['detail'][] = array($dir, $_LANG['cannt_write']);
        }
        else
        {
            $msgs['detail'][] = array($dir, $_LANG['can_write']);
        }
    }

    return $msgs;
}

/**
 * 妫€鏌ユā鏉跨殑璇诲啓鏉冮檺
 *
 * @access  public
 * @param   array      $templates_root        妯℃澘鏂囦欢绫诲瀷鎵€鍦ㄧ殑鏍硅矾寰勬暟缁勶紝褰㈠?锛歛rray('dwt'=>'', 'lbi'=>'')
 * @return  array      妫€鏌ュ悗鐨勬秷鎭?暟缁勶紝鍏ㄩ儴鍙?啓涓虹┖鏁扮粍锛屽惁鍒欐槸涓€涓?互涓嶅彲鍐欑殑鏂囦欢璺?緞缁勬垚鐨勬暟缁
 */
function check_templates_priv($templates_root)
{
    global $_LANG;
    $msgs = array();
    $filename = '';
    $filepath = '';

    foreach ($templates_root as $tpl_type => $tpl_root)
    {
        if (!file_exists($tpl_root))
        {
            $msgs[] = str_replace(ROOT_PATH, '', $tpl_root . ' ' . $_LANG['not_exists']);
            continue;
        }

        $tpl_handle = @opendir($tpl_root);
        while (($filename = @readdir($tpl_handle)) !== false)
        {
            $filepath = $tpl_root . $filename;
            if(is_file($filepath)
                    && strrpos($filename, '.' . $tpl_type) !== false
                    && file_mode_info($filepath) < 7)
            {
                $msgs[] = str_replace(ROOT_PATH, '', $filepath . ' ' . $_LANG['cannt_write']);
            }
        }
        @closedir($tpl_handle);
    }

    return $msgs;
}/**
 *  妫€鏌ョ壒瀹氱洰褰曟槸鍚︽湁鎵ц?rename鍑芥暟鏉冮檺
 *
 * @access  public
 * @param   void
 *
 * @return void
 */
function check_rename_priv()
{
    /* 鑾峰彇瑕佹?鏌ョ殑鐩?綍 */
    $dir_list   = array();
    $dir_list[] = 'templates/caches';
    $dir_list[] = 'templates/compiled';
    $dir_list[] = 'templates/compiled/admin';
    /* 鑾峰彇images鐩?綍涓嬪浘鐗囩洰褰 */
    $folder = opendir(ROOT_PATH . 'images');
    while ($dir = readdir($folder))
    {
        if (is_dir(ROOT_PATH . 'images/' . $dir) && preg_match('/^[0-9]{6}$/', $dir))
        {
            $dir_list[] = 'images/' . $dir;
        }
    }
    closedir($folder);
    /* 妫€鏌ョ洰褰曟槸鍚︽湁鎵ц?rename鍑芥暟鐨勬潈闄 */
    $msgs = array();
    foreach ($dir_list AS $dir)
    {
        $mask = file_mode_info(ROOT_PATH .$dir);
        if ((($mask & 2) > 0) && (($mask & 8) < 1))
        {
            /* 鍙?湁鍙?啓鏃舵墠妫€鏌?ename鏉冮檺 */
            $msgs[] = $dir . ' ' . $GLOBALS['_LANG']['cannt_modify'];
        }
    }
    return $msgs;
}

?>