<?php
if(checkloggedin()) {

    if(isset($_GET['uname'])){
        $chatusername = $_GET['uname'];
        $chatuserid = $_GET['uid'];

        $chat_userdata = get_user_data($chatusername);
        $chatuser_image = $chat_userdata['image'];
        if($chatuser_image == "")
            $chatuser_image = "avatar_default.png";
    }else{
        $chatusername = "";
        $chatuserid = "";
        $chatuser_image = "";
    }

    if(!$config['wchat_purchase_code'])
        error($lang['PAGE_NOT_FOUND'], __LINE__, __FILE__, 1);
    if($config['wchat_on_off'] == 'on') {
        $ses_userdata = get_user_data($_SESSION['user']['username']);
        $author_image = $ses_userdata['image'];
        $page = new HtmlTemplate ("templates/" . $config['tpl_name'] . "/wchat.tpl");
        $page->SetParameter('PAGE_TITLE', $lang['MESSAGE']);
        $page->SetParameter('PAGE_META_KEYWORDS', $config['meta_keywords']);
        $page->SetParameter('LANGUAGE_DIRECTION', get_current_lang_direction());
        $page->SetParameter('PAGE_META_DESCRIPTION', ($meta_desc == '')?$config['meta_description']:$meta_desc);
        $page->SetParameter ('USERIMG', $author_image);
        $page->SetParameter('CHAT_USER_ID',$chatuserid);
        $page->SetParameter ('CHAT_USERNAME',$chatusername);
        $page->SetParameter ('CHAT_USERIMG',$chatuser_image);
        $page->SetParameter('COPYRIGHT_TEXT', $config['copyright_text']);
        $page->CreatePageEcho();
    }else
        error($lang['PAGE_NOT_FOUND'], __LINE__, __FILE__, 1);
}else
    headerRedirect($link['LOGIN']);
?>