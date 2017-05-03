<?php
return array (
  'S_admin_Content_comment' => 
  array (
    'key' => 
    array (
      'comment_id' => 'comment_id',
      'uid' => 'uid',
      'app_uid' => 'app_uid',
    ),
    'key_name' => 
    array (
      'comment_id' => '评论ID',
      'uid' => '评论者ID',
      'app_uid' => '作者ID',
    ),
    'key_type' => 
    array (
      'comment_id' => 'text',
      'uid' => 'text',
      'app_uid' => 'text',
    ),
    'key_tishi' => 
    array (
      'comment_id' => '多个id之间用英文的","隔开',
      'uid' => '多个id之间用英文的","隔开',
      'app_uid' => '多个id之间用英文的","隔开',
    ),
    'key_javascript' => 
    array (
      'comment_id' => '',
      'uid' => '',
      'app_uid' => '',
    ),
  ),
  'S_admin_Home_invatecount' => 
  array (
    'key' => 
    array (
      'inviter_uid' => 'inviter_uid',
      'receiver_uid' => 'receiver_uid',
    ),
    'key_name' => 
    array (
      'inviter_uid' => '邀请人ID',
      'receiver_uid' => '被邀请人ID',
    ),
    'key_type' => 
    array (
      'inviter_uid' => 'text',
      'receiver_uid' => 'text',
    ),
    'key_tishi' => 
    array (
      'inviter_uid' => '',
      'receiver_uid' => '',
    ),
    'key_javascript' => 
    array (
      'inviter_uid' => '',
      'receiver_uid' => '',
    ),
  ),
  'S_admin_Home_invateTop' => 
  array (
    'key' => 
    array (
      'inviter_uid' => 'inviter_uid',
    ),
    'key_name' => 
    array (
      'inviter_uid' => '邀请人ID',
    ),
    'key_type' => 
    array (
      'inviter_uid' => 'text',
    ),
    'key_tishi' => 
    array (
      'inviter_uid' => '',
    ),
    'key_javascript' => 
    array (
      'inviter_uid' => '',
    ),
  ),
  'S_admin_Content_message' => 
  array (
    'key' => 
    array (
      'from_uid' => 'from_uid',
      'mix_man' => 'mix_man',
      'content' => 'content',
    ),
    'key_name' => 
    array (
      'from_uid' => '私信发送者ID',
      'mix_man' => '私信成员ID',
      'content' => '私信内容',
    ),
    'key_type' => 
    array (
      'from_uid' => 'text',
      'mix_man' => 'text',
      'content' => 'text',
    ),
    'key_tishi' => 
    array (
      'from_uid' => '',
      'mix_man' => '',
      'content' => '',
    ),
    'key_javascript' => 
    array (
      'from_uid' => '',
      'mix_man' => '',
      'content' => '',
    ),
  ),
  'S_admin_Home_logs' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'app_name' => 'app_name',
      'ctime' => 'ctime',
      'isAdmin' => 'isAdmin',
      'keyword' => 'keyword',
    ),
    'key_name' => 
    array (
      'uname' => '用户帐号',
      'app_name' => '操作详情',
      'ctime' => '时间范围',
      'isAdmin' => '日志类型',
      'keyword' => '查询关键字',
    ),
    'key_type' => 
    array (
      'uname' => 'text',
      'app_name' => 'select',
      'ctime' => 'date',
      'isAdmin' => 'checkbox',
      'keyword' => 'text',
    ),
    'key_tishi' => 
    array (
      'uname' => '',
      'app_name' => '',
      'ctime' => '',
      'isAdmin' => '',
      'keyword' => '',
    ),
    'key_javascript' => 
    array (
      'uname' => '',
      'app_name' => 'admin.selectLog(this.value)',
      'ctime' => '',
      'isAdmin' => '',
      'keyword' => '',
    ),
  ),
  'S_admin_User_online' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'email' => 'email',
      'sex' => 'sex',
      'user_group' => 'user_group',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户昵称',
      'email' => 'Email',
      'sex' => '性别',
      'user_group' => '用户组',
      'ctime' => '注册时间',
    ),
    'key_type' => 
    array (
      'uid' => 'text',
      'uname' => 'text',
      'email' => 'text',
      'sex' => 'radio',
      'user_group' => 'select',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'ctime' => '',
    ),
  ),
  'S_admin_User_dellist' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'email' => 'email',
      'sex' => 'sex',
      'user_group' => 'user_group',
      'user_category' => 'user_category',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'uid' => '用户ID',
      'uname' => '用户帐号',
      'email' => 'Email',
      'sex' => '性别',
      'user_group' => '用户组',
      'user_category' => '',
      'ctime' => '注册时间',
    ),
    'key_type' => 
    array (
      'uid' => 'text',
      'uname' => 'text',
      'email' => 'text',
      'sex' => 'radio',
      'user_group' => 'select',
      'user_category' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
  ),
  'S_weiba_Admin_postList' => 
  array (
    'key' => 
    array (
      'post_id' => 'post_id',
      'title' => 'title',
      'post_uid' => 'post_uid',
      'recommend' => 'recommend',
      'digest' => 'digest',
      'top' => 'top',
      'weiba_id' => 'weiba_id',
    ),
    'key_name' => 
    array (
      'post_id' => '帖子ID',
      'title' => '帖子标题',
      'post_uid' => '发帖人ID',
      'recommend' => '是否推荐',
      'digest' => '是否精华',
      'top' => '是否置顶',
      'weiba_id' => '所属微吧',
    ),
    'key_type' => 
    array (
      'post_id' => 'text',
      'title' => 'text',
      'post_uid' => 'text',
      'recommend' => 'radio',
      'digest' => 'radio',
      'top' => 'radio',
      'weiba_id' => 'select',
    ),
    'key_tishi' => 
    array (
      'post_id' => '',
      'title' => '',
      'post_uid' => '',
      'recommend' => '',
      'digest' => '',
      'top' => '',
      'weiba_id' => '',
    ),
    'key_javascript' => 
    array (
      'post_id' => '',
      'title' => '',
      'post_uid' => '',
      'recommend' => '',
      'digest' => '',
      'top' => '',
      'weiba_id' => '',
    ),
  ),
  'S_weiba_Admin_postRecycle' => 
  array (
    'key' => 
    array (
      'post_id' => 'post_id',
      'title' => 'title',
      'post_uid' => 'post_uid',
      'weiba_id' => 'weiba_id',
    ),
    'key_name' => 
    array (
      'post_id' => '帖子ID',
      'title' => '帖子标题',
      'post_uid' => '发帖人ID',
      'weiba_id' => '所属微吧',
    ),
    'key_type' => 
    array (
      'post_id' => 'text',
      'title' => 'text',
      'post_uid' => 'text',
      'weiba_id' => 'select',
    ),
    'key_tishi' => 
    array (
      'post_id' => '',
      'title' => '',
      'post_uid' => '',
      'weiba_id' => '',
    ),
    'key_javascript' => 
    array (
      'post_id' => '',
      'title' => '',
      'post_uid' => '',
      'weiba_id' => '',
    ),
  ),
  'S_admin_Config_getInviteAdminList' => 
  array (
    'key' => 
    array (
      'invite_type' => 'invite_type',
    ),
    'key_name' => 
    array (
      'invite_type' => '邀请类型',
    ),
    'key_type' => 
    array (
      'invite_type' => 'radio',
    ),
    'key_tishi' => 
    array (
      'invite_type' => '',
    ),
    'key_javascript' => 
    array (
      'invite_type' => '',
    ),
  ),
  'S_admin_Content_topic' => 
  array (
    'key' => 
    array (
      'topic_id' => 'topic_id',
      'topic_name' => 'topic_name',
      'recommend' => 'recommend',
      'essence' => 'essence',
      'lock' => 'lock',
    ),
    'key_name' => 
    array (
      'topic_id' => '话题ID',
      'topic_name' => '话题名称',
      'recommend' => '是否推荐',
      'essence' => '是否精华',
      'lock' => '是否屏蔽',
    ),
    'key_type' => 
    array (
      'topic_id' => 'text',
      'topic_name' => 'text',
      'recommend' => 'radio',
      'essence' => 'radio',
      'lock' => 'radio',
    ),
    'key_tishi' => 
    array (
      'topic_id' => '',
      'topic_name' => '',
      'recommend' => '',
      'essence' => '',
      'lock' => '',
    ),
    'key_javascript' => 
    array (
      'topic_id' => '',
      'topic_name' => '',
      'recommend' => '',
      'essence' => '',
      'lock' => '',
    ),
  ),
  'S_admin_Medal_userMedal' => 
  array (
    'key' => 
    array (
      'user' => 'user',
      'medal' => 'medal',
    ),
    'key_name' => 
    array (
      'user' => '用户',
      'medal' => '勋章',
    ),
    'key_type' => 
    array (
      'user' => 'user',
      'medal' => 'select',
    ),
    'key_tishi' => 
    array (
      'user' => '',
      'medal' => '',
    ),
    'key_javascript' => 
    array (
      'user' => '',
      'medal' => '',
    ),
  ),
  'S_admin_Content_attach' => 
  array (
    'key' => 
    array (
      'attach_id' => 'attach_id',
      'name' => 'name',
      'from' => 'from',
    ),
    'key_name' => 
    array (
      'attach_id' => '附件ID',
      'name' => '附件名称',
      'from' => '来源类型',
    ),
    'key_type' => 
    array (
      'attach_id' => 'text',
      'name' => 'text',
      'from' => 'text',
    ),
    'key_tishi' => 
    array (
      'attach_id' => '多个id之间用英文的","隔开',
      'name' => '',
      'from' => '',
    ),
    'key_javascript' => 
    array (
      'attach_id' => '',
      'name' => '',
      'from' => '',
    ),
  ),
  'S_tipoff_Admin_index' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'uid' => 'uid',
      'status' => 'status',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'uid' => '发布者',
      'status' => '状态',
    ),
    'key_type' => 
    array (
      'tipoff_id' => 'text',
      'content' => 'text',
      'uid' => 'text',
      'status' => 'select',
    ),
    'key_tishi' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
  ),
  'S_tipoff_Admin_open' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'uid' => 'uid',
      'status' => 'status',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'uid' => '发布者',
      'status' => '状态',
    ),
    'key_type' => 
    array (
      'tipoff_id' => 'text',
      'content' => 'text',
      'uid' => 'text',
      'status' => 'select',
    ),
    'key_tishi' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
  ),
  'S_tipoff_Admin_bonus' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'uid' => 'uid',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'uid' => '发布者',
    ),
    'key_type' => 
    array (
      'tipoff_id' => 'text',
      'content' => 'text',
      'uid' => 'text',
    ),
    'key_tishi' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
    ),
  ),
  'S_tipoff_Admin_recycle' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'uid' => 'uid',
      'status' => 'status',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'uid' => '发布者',
      'status' => '状态',
    ),
    'key_type' => 
    array (
      'tipoff_id' => 'text',
      'content' => 'text',
      'uid' => 'text',
      'status' => 'select',
    ),
    'key_tishi' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
  ),
  'S_tipoff_Admin_archive' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'uid' => 'uid',
      'status' => 'status',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'uid' => '发布者',
      'status' => '状态',
    ),
    'key_type' => 
    array (
      'tipoff_id' => 'text',
      'content' => 'text',
      'uid' => 'text',
      'status' => 'select',
    ),
    'key_tishi' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'uid' => '',
      'status' => '',
    ),
  ),
  'S_admin_Config_lang' => 
  array (
    'key' => 
    array (
      'key' => 'key',
      'appname' => 'appname',
      'filetype' => 'filetype',
      'content' => 'content',
    ),
    'key_name' => 
    array (
      'key' => '语言KEY',
      'appname' => '应用名称',
      'filetype' => '文件类型',
      'content' => '语言内容',
    ),
    'key_type' => 
    array (
      'key' => 'text',
      'appname' => 'text',
      'filetype' => 'radio',
      'content' => 'text',
    ),
    'key_tishi' => 
    array (
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'content' => '',
    ),
    'key_javascript' => 
    array (
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'content' => '',
    ),
  ),
  'S_admin_User_pending' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'email' => 'email',
      'sex' => 'sex',
      'user_group' => 'user_group',
      'user_category' => 'user_category',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户名',
      'email' => 'Email',
      'sex' => '性别',
      'user_group' => '用户组',
      'user_category' => '用户标签',
      'ctime' => '注册时间',
    ),
    'key_type' => 
    array (
      'uid' => 'text',
      'uname' => 'text',
      'email' => 'text',
      'sex' => 'radio',
      'user_group' => 'hidden',
      'user_category' => 'select',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
  ),
  'S_weiba_Admin_weibaAdminAudit' => 
  array (
    'key' => 
    array (
      'follower_uid' => 'follower_uid',
      'weiba_name' => 'weiba_name',
    ),
    'key_name' => 
    array (
      'follower_uid' => '用户ID',
      'weiba_name' => '微吧名称',
    ),
    'key_type' => 
    array (
      'follower_uid' => 'text',
      'weiba_name' => 'text',
    ),
    'key_tishi' => 
    array (
      'follower_uid' => '',
      'weiba_name' => '',
    ),
    'key_javascript' => 
    array (
      'follower_uid' => '',
      'weiba_name' => '',
    ),
  ),
  'S_vtask_Admin_index' => false,
  'S_vtask_Admin_open' => false,
  'S_vtask_Admin_bonus' => false,
  'S_vtask_Admin_recycle' => false,
  'S_vtask_Admin_archive' => false,
  'S_weiba_Admin_index' => 
  array (
    'key' => 
    array (
      'weiba_id' => 'weiba_id',
      'weiba_name' => 'weiba_name',
      'weiba_cate' => 'weiba_cate',
      'uid' => 'uid',
      'admin_uid' => 'admin_uid',
      'recommend' => 'recommend',
    ),
    'key_name' => 
    array (
      'weiba_id' => '微吧ID',
      'weiba_name' => '微吧名称',
      'weiba_cate' => '微吧分类',
      'uid' => '创建者UID',
      'admin_uid' => '吧主UID',
      'recommend' => '是否推荐',
    ),
    'key_type' => 
    array (
      'weiba_id' => 'text',
      'weiba_name' => 'text',
      'weiba_cate' => 'select',
      'uid' => 'text',
      'admin_uid' => 'text',
      'recommend' => 'radio',
    ),
    'key_tishi' => 
    array (
      'weiba_id' => '',
      'weiba_name' => '',
      'weiba_cate' => '',
      'uid' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
    'key_javascript' => 
    array (
      'weiba_id' => '',
      'weiba_name' => '',
      'weiba_cate' => '',
      'uid' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
  ),
  'S_admin_Content_feed' => 
  array (
    'key' => 
    array (
      'feed_id' => 'feed_id',
      'uid' => 'uid',
      'type' => 'type',
      'rec' => 'rec',
    ),
    'key_name' => 
    array (
      'feed_id' => '动态ID',
      'uid' => '用户ID',
      'type' => '动态类型',
      'rec' => '回收站',
    ),
    'key_type' => 
    array (
      'feed_id' => 'text',
      'uid' => 'text',
      'type' => 'select',
      'rec' => 'hidden',
    ),
    'key_tishi' => 
    array (
      'feed_id' => '多个id之间用英文的","隔开',
      'uid' => '多个id之间用英文的","隔开',
      'type' => '',
      'rec' => '',
    ),
    'key_javascript' => 
    array (
      'feed_id' => '',
      'uid' => '',
      'type' => '',
      'rec' => '',
    ),
  ),
  'S_classroom_AdminSuggest_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'content' => 'content',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'content' => '内容',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'content' => 'text',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'content' => '通过关键字进行查找',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'content' => '',
    ),
  ),
  'S_classroom_AdminNote_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'is_open' => 'is_open',
      'note_title' => 'note_title',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'uid' => '用户ID',
      'type' => '笔记类型',
      'is_open' => '公开',
      'note_title' => '笔记标题',
      'ctime' => '创建时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'type' => 'radio',
      'is_open' => 'radio',
      'note_title' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'is_open' => '',
      'note_title' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'is_open' => '',
      'note_title' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminWithdraw_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'startTime' => '通过申请起始时间范围查找',
      'endTime' => '通过申请结束时间范围查找',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminQuestion_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'qst_title' => 'qst_title',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '问题ID',
      'uid' => '用户ID',
      'type' => '提问类型',
      'qst_title' => '提问标题',
      'ctime' => '创建时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'type' => 'radio',
      'qst_title' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'qst_title' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'qst_title' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminReview_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'star' => 'star',
      'review_description' => 'review_description',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '点评ID',
      'uid' => '用户ID',
      'type' => '点评类型',
      'star' => '星级',
      'review_description' => '点评内容',
      'ctime' => '创建时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'type' => 'radio',
      'star' => 'radio',
      'review_description' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'star' => '',
      'review_description' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'star' => '',
      'review_description' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminWithdraw_successful' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'startTime' => '通过申请起始时间范围查找',
      'endTime' => '通过申请结束时间范围查找',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminSpecial_special' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'sc_id' => 'sc_id',
      'title' => 'title',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '专题ID',
      'sc_id' => '专题分类',
      'title' => '专题标题',
      'ctime' => '专题创建时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'sc_id' => 'select',
      'title' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'sc_id' => '',
      'title' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'sc_id' => '',
      'title' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminWithdraw_failure' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '操作',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminSpecial_category' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '专题分类ID',
      'title' => '专题分类名称',
      'ctime' => '创建时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'title' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminWithdraw_process' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'startTime' => '通过申请起始时间范围查找',
      'endTime' => '通过申请结束时间范围查找',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminWithdraw_cancel' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'startTime' => '通过申请起始时间范围查找',
      'endTime' => '通过申请结束时间范围查找',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminOrder_album' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'cuid' => 'cuid',
      'album_id' => 'album_id',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => '专辑订单ID',
      'uid' => '用户',
      'cuid' => '创建用户',
      'album_id' => '专辑ID',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'cuid' => 'user',
      'album_id' => 'text',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '根据专辑订单ID查询某个专辑订单',
      'uid' => '',
      'cuid' => '',
      'album_id' => '根据某个专辑ID进行搜索',
      'startTime' => '根据时间范围进行搜索',
      'endTime' => '根据时间范围进行搜索',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'cuid' => '',
      'album_id' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminAlbum_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'album_title' => 'album_title',
    ),
    'key_name' => 
    array (
      'id' => '专辑ID',
      'album_title' => '专辑名称',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'album_title' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'album_title' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'album_title' => '',
    ),
  ),
  'S_classroom_AdminLearnc_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'vip_type' => 'vip_type',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'vip_type' => 'VIP类型',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'vip_type' => 'select',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'vip_type' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'vip_type' => '',
    ),
  ),
  'S_classroom_AdminCard_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'account' => 'account',
      'accountmaster' => 'accountmaster',
    ),
    'key_name' => 
    array (
      'uid' => '持卡人',
      'account' => '账号',
      'accountmaster' => '真实姓名',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'account' => 'text',
      'accountmaster' => 'text',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'account' => '',
      'accountmaster' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'account' => '',
      'accountmaster' => '',
    ),
  ),
  'S_classroom_AdminLearnc_readhistory' => 
  array (
    'key' => 
    array (
      'type' => 'type',
      'note' => 'note',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'type' => '业务类型',
      'note' => '业务备注',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'type' => 'select',
      'note' => 'text',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'type' => '',
      'note' => '',
      'startTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'type' => '',
      'note' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminLearnc_uflow' => 
  array (
    'key' => 
    array (
      'type' => 'type',
      'note' => 'note',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'type' => '类型',
      'note' => '业务备注',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'type' => 'select',
      'note' => 'text',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'type' => '',
      'note' => '',
      'startTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'type' => '',
      'note' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminLianZai_xdate' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'cid' => 'cid',
      'name' => 'name',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '分期ID',
      'cid' => '连载栏目',
      'name' => '分期名称',
      'ctime' => '创建时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'cid' => 'select',
      'name' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '请输入数字',
      'cid' => '',
      'name' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'cid' => '',
      'name' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminLianZai_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'type' => 'type',
      'did' => 'did',
      'title' => 'title',
      'description' => 'description',
      'source' => 'source',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '内容ID',
      'type' => '内容分类',
      'did' => '分期',
      'title' => '内容标题',
      'description' => '内容描述',
      'source' => '内容来源',
      'ctime' => '创建日期',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'type' => 'radio',
      'did' => 'select',
      'title' => 'text',
      'description' => 'text',
      'source' => 'text',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '请输入数字',
      'type' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'type' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminLearnc_recharge' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_Wenda_Admin_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'wd_title' => 'wd_title',
    ),
    'key_name' => 
    array (
      'id' => '问答id',
      'uid' => '用户名',
      'type' => '问答类型',
      'wd_title' => '问答标题',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'type' => 'radio',
      'wd_title' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'wd_title' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'wd_title' => '',
    ),
  ),
  'S_classroom_AdminTeacher_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'title' => 'title',
      'inro' => 'inro',
    ),
    'key_name' => 
    array (
      'id' => '讲师id',
      'name' => '讲师名称',
      'title' => '讲师职称',
      'inro' => '讲师介绍',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'name' => 'text',
      'title' => 'text',
      'inro' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'name' => '',
      'title' => '',
      'inro' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'name' => '',
      'title' => '',
      'inro' => '',
    ),
  ),
  'S_classroom_AdminVideo_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'video_title' => 'video_title',
      'uid' => 'uid',
    ),
    'key_name' => 
    array (
      'id' => '搜索ID',
      'video_title' => '课程名称',
      'uid' => '用户uid',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'video_title' => 'text',
      'uid' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'video_title' => '',
      'uid' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'video_title' => '',
      'uid' => '',
    ),
  ),
  'S_classroom_AdminLearnc_flow' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'type' => 'type',
      'note' => 'note',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'uid' => '用户',
      'type' => '类型',
      'note' => '业务备注',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'uid' => 'user',
      'type' => 'select',
      'note' => 'text',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'type' => '',
      'note' => '',
      'startTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'type' => '',
      'note' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_exam_AdminCategory_index' => 
  array (
    'key' => 
    array (
      'exam_category_id' => 'exam_category_id',
      'exam_category_name' => 'exam_category_name',
      'exam_category_admin' => 'exam_category_admin',
    ),
    'key_name' => 
    array (
      'exam_category_id' => '考试分类ID',
      'exam_category_name' => '考试分类名称',
      'exam_category_admin' => '创建人',
    ),
    'key_type' => 
    array (
      'exam_category_id' => 'text',
      'exam_category_name' => 'text',
      'exam_category_admin' => 'text',
    ),
    'key_tishi' => 
    array (
      'exam_category_id' => '',
      'exam_category_name' => '',
      'exam_category_admin' => '',
    ),
    'key_javascript' => 
    array (
      'exam_category_id' => '',
      'exam_category_name' => '',
      'exam_category_admin' => '',
    ),
  ),
  'S_exam_AdminCategory_paper' => 
  array (
    'key' => 
    array (
      'paper_category_id' => 'paper_category_id',
      'paper_category_name' => 'paper_category_name',
    ),
    'key_name' => 
    array (
      'paper_category_id' => '试卷分类ID',
      'paper_category_name' => '试卷分类名称',
    ),
    'key_type' => 
    array (
      'paper_category_id' => 'text',
      'paper_category_name' => 'text',
    ),
    'key_tishi' => 
    array (
      'paper_category_id' => '',
      'paper_category_name' => '',
    ),
    'key_javascript' => 
    array (
      'paper_category_id' => '',
      'paper_category_name' => '',
    ),
  ),
  'S_exam_AdminCategory_question' => 
  array (
    'key' => 
    array (
      'question_category_id' => 'question_category_id',
      'question_category_name' => 'question_category_name',
    ),
    'key_name' => 
    array (
      'question_category_id' => '题库分类ID',
      'question_category_name' => '题库分类名称',
    ),
    'key_type' => 
    array (
      'question_category_id' => 'text',
      'question_category_name' => 'text',
    ),
    'key_tishi' => 
    array (
      'question_category_id' => '',
      'question_category_name' => '',
    ),
    'key_javascript' => 
    array (
      'question_category_id' => '',
      'question_category_name' => '',
    ),
  ),
  'S_exam_AdminUserExam_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'email' => 'email',
      'sex' => 'sex',
      'user_group' => 'user_group',
      'user_category' => 'user_category',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户名',
      'email' => 'Email',
      'sex' => '性别',
      'user_group' => '用户组',
      'user_category' => '标签',
      'ctime' => '注册时间',
    ),
    'key_type' => 
    array (
      'uid' => 'text',
      'uname' => 'text',
      'email' => 'text',
      'sex' => 'radio',
      'user_group' => 'select',
      'user_category' => 'select',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
  ),
  'S_classroom_AdminOrder_course' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'course_id' => 'course_id',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uid' => '',
      'course_id' => '',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'course_id' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'course_id' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'course_id' => '',
    ),
  ),
  'S_admin_Home_tag' => 
  array (
    'key' => 
    array (
      'name' => 'name',
      'table' => 'table',
    ),
    'key_name' => 
    array (
      'name' => '标签名',
      'table' => '标签类型',
    ),
    'key_type' => 
    array (
      'name' => 'text',
      'table' => 'select',
    ),
    'key_tishi' => 
    array (
      'name' => '',
      'table' => '',
    ),
    'key_javascript' => 
    array (
      'name' => '',
      'table' => '',
    ),
  ),
  'S_live_Admin_index' => 
  array (
    'key' => 
    array (
      'number' => 'number',
      'subject' => 'subject',
      'SDK_ID' => 'SDK_ID',
    ),
    'key_name' => 
    array (
      'number' => '直播课堂名称',
      'subject' => '名称',
      'SDK_ID' => '编号',
    ),
    'key_type' => 
    array (
      'number' => 'text',
      'subject' => 'text',
      'SDK_ID' => 'text',
    ),
    'key_tishi' => 
    array (
      'number' => '',
      'subject' => '',
      'SDK_ID' => '',
    ),
    'key_javascript' => 
    array (
      'number' => '',
      'subject' => '',
      'SDK_ID' => '',
    ),
  ),
  'S_wenda_AdminIndex_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'wd_description' => 'wd_description',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '发布人',
      'type' => '问答类型',
      'wd_description' => '描述',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'type' => 'select',
      'wd_description' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'wd_description' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'wd_description' => '',
    ),
  ),
  'S_exam_AdminQuestion_index' => 
  array (
    'key' => 
    array (
      'question_id' => 'question_id',
      'question_category' => 'question_category',
      'question_type' => 'question_type',
    ),
    'key_name' => 
    array (
      'question_id' => '试题ID',
      'question_category' => '问题分类',
      'question_type' => '问题类型',
    ),
    'key_type' => 
    array (
      'question_id' => 'text',
      'question_category' => 'select',
      'question_type' => 'select',
    ),
    'key_tishi' => 
    array (
      'question_id' => '',
      'question_category' => '',
      'question_type' => '',
    ),
    'key_javascript' => 
    array (
      'question_id' => '',
      'question_category' => '',
      'question_type' => '',
    ),
  ),
  'S_classroom_AdminVideo_videoLib' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'uid' => 'uid',
      'type' => 'type',
      'status' => 'status',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '名称',
      'uid' => '创建人',
      'type' => '类型',
      'status' => '状态',
      'ctime' => '操作',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'title' => 'text',
      'uid' => 'user',
      'type' => 'text',
      'status' => 'text',
      'ctime' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'uid' => '',
      'type' => '',
      'status' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'uid' => '',
      'type' => '',
      'status' => '',
      'ctime' => '',
    ),
  ),
  'S_live_AdminLive_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'title' => 'title',
      'price' => 'price',
      'score' => 'score',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户id',
      'title' => '标题',
      'price' => '价格',
      'score' => '评分',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'title' => 'text',
      'price' => 'text',
      'score' => 'radio',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'title' => '',
      'price' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'title' => '',
      'price' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminOrder_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'muid' => 'muid',
      'video_id' => 'video_id',
      'order_album_id' => 'order_album_id',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => '订单ID',
      'uid' => '用户',
      'muid' => '商家',
      'video_id' => '课程ID',
      'order_album_id' => '专辑订单ID',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'muid' => 'hidden',
      'video_id' => 'text',
      'order_album_id' => 'hidden',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '根据ID查询某个订单',
      'uid' => '',
      'muid' => '',
      'video_id' => '根据某个课程ID搜索',
      'order_album_id' => '根据专辑订单ID进行搜索,为0时只限时不是通过专辑购买的记录',
      'startTime' => '根据时间范围进行搜索',
      'endTime' => '根据时间范围进行搜索',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'muid' => '',
      'video_id' => '',
      'order_album_id' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_classroom_AdminOrder_live' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'live_id' => 'live_id',
      'startTime' => 'startTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'live_id' => '直播ID',
      'startTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'user',
      'live_id' => 'text',
      'startTime' => 'date',
      'endTime' => 'date',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'live_id' => '',
      'startTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'live_id' => '',
      'startTime' => '',
      'endTime' => '',
    ),
  ),
  'S_admin_User_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'email' => 'email',
      'sex' => 'sex',
      'user_group' => 'user_group',
      'user_category' => 'user_category',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户名',
      'email' => 'Email',
      'sex' => '性别',
      'user_group' => '用户组',
      'user_category' => '标签',
      'ctime' => '注册时间',
    ),
    'key_type' => 
    array (
      'uid' => 'text',
      'uname' => 'user',
      'email' => 'text',
      'sex' => 'radio',
      'user_group' => 'select',
      'user_category' => 'select',
      'ctime' => 'date',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'email' => '',
      'sex' => '',
      'user_group' => '',
      'user_category' => '',
      'ctime' => '',
    ),
  ),
  'S_exam_AdminPaper_index' => 
  array (
    'key' => 
    array (
      'paper_id' => 'paper_id',
      'paper_name' => 'paper_name',
      'paper_category' => 'paper_category',
    ),
    'key_name' => 
    array (
      'paper_id' => '试卷ID',
      'paper_name' => '试卷名称',
      'paper_category' => '试卷分类',
    ),
    'key_type' => 
    array (
      'paper_id' => 'text',
      'paper_name' => 'text',
      'paper_category' => 'select',
    ),
    'key_tishi' => 
    array (
      'paper_id' => '',
      'paper_name' => '',
      'paper_category' => '',
    ),
    'key_javascript' => 
    array (
      'paper_id' => '',
      'paper_name' => '',
      'paper_category' => '',
    ),
  ),
  'S_exam_AdminExam_index' => 
  array (
    'key' => 
    array (
      'exam_id' => 'exam_id',
      'exam_name' => 'exam_name',
      'exam_category' => 'exam_category',
      'exam_begin_time' => 'exam_begin_time',
      'exam_end_time' => 'exam_end_time',
    ),
    'key_name' => 
    array (
      'exam_id' => '考试ID',
      'exam_name' => '考试名称',
      'exam_category' => '考试分类',
      'exam_begin_time' => '考试开始时间',
      'exam_end_time' => '考试结束时间',
    ),
    'key_type' => 
    array (
      'exam_id' => 'text',
      'exam_name' => 'text',
      'exam_category' => 'select',
      'exam_begin_time' => 'date',
      'exam_end_time' => 'date',
    ),
    'key_tishi' => 
    array (
      'exam_id' => '',
      'exam_name' => '',
      'exam_category' => '',
      'exam_begin_time' => '',
      'exam_end_time' => '',
    ),
    'key_javascript' => 
    array (
      'exam_id' => '',
      'exam_name' => '',
      'exam_category' => '',
      'exam_begin_time' => '',
      'exam_end_time' => '',
    ),
  ),
  'S_classroom_AdminLearnc_classlearn' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'video_id' => 'video_id',
    ),
    'key_name' => 
    array (
      'id' => '订单ID',
      'uid' => '用户名',
      'video_id' => '课程名称',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'uid' => 'text',
      'video_id' => 'text',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'video_id' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'video_id' => '',
    ),
  ),
);
?>