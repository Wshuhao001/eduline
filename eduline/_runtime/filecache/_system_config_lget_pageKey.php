<?php
return array (
  'admin_Home_logsArchive' => 
  array (
    'key' => 
    array (
      'Name' => 'Name',
      'Engine' => 'Engine',
      'Version' => 'Version',
      'Rows' => 'Rows',
      'Data_length' => 'Data_length',
      'Data_free' => 'Data_free',
      'Create_time' => 'Create_time',
      'Update_time' => 'Update_time',
      'Collation' => 'Collation',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'Name' => '表名',
      'Engine' => '数据引擎',
      'Version' => '版本',
      'Rows' => '条数',
      'Data_length' => '数据大小',
      'Data_free' => '数据空闲',
      'Create_time' => '创建时间',
      'Update_time' => '最后纪录',
      'Collation' => '字符集',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'Name' => '0',
      'Engine' => '0',
      'Version' => '1',
      'Rows' => '0',
      'Data_length' => '0',
      'Data_free' => '1',
      'Create_time' => '0',
      'Update_time' => '0',
      'Collation' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'Name' => '',
      'Engine' => '',
      'Version' => '',
      'Rows' => '',
      'Data_length' => '',
      'Data_free' => '',
      'Create_time' => '',
      'Update_time' => '',
      'Collation' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_newschedule' => 
  array (
    'key' => 
    array (
      'task_to_run' => 'task_to_run',
      'schedule_type' => 'schedule_type',
      'modifier' => 'modifier',
      'dirlist' => 'dirlist',
      'month' => 'month',
      'start_datetime' => 'start_datetime',
      'end_datetime' => 'end_datetime',
      'info' => 'info',
    ),
    'key_name' => 
    array (
      'task_to_run' => '执行函数',
      'schedule_type' => '任务类型',
      'modifier' => '执行频率',
      'dirlist' => 'dirlist',
      'month' => 'month',
      'start_datetime' => '开始时间',
      'end_datetime' => '结束时间',
      'info' => '简介',
    ),
    'key_type' => 
    array (
      'task_to_run' => 'text',
      'schedule_type' => 'text',
      'modifier' => 'text',
      'dirlist' => 'text',
      'month' => 'text',
      'start_datetime' => 'date',
      'end_datetime' => 'date',
      'info' => 'text',
    ),
    'key_default' => 
    array (
      'task_to_run' => '',
      'schedule_type' => '',
      'modifier' => '',
      'dirlist' => '',
      'month' => '',
      'start_datetime' => '',
      'end_datetime' => '',
      'info' => '',
    ),
    'key_tishi' => 
    array (
      'task_to_run' => '计划任务执行的函数，格式为：app/Model/method',
      'schedule_type' => 'ONCE、MINUTE、HOURLY、DAILY、WEEKLY、MONTHLY 之一',
      'modifier' => '类型为MONTHLY时必须；ONCE时无效；其他时为可选，默认为1',
      'dirlist' => '指定周或月的一天或多天。只与WEEKLY和MONTHLY共同使用时有效，其他时忽略。',
      'month' => '指定一年中的一个月或多个月.只在schedule_type=MONTHLY时有效，其他时忽略。当modifier=LASTDAY时必须，其他时可选。有效值：Jan - Dec，默认为*(每个月)',
      'start_datetime' => '任务启动时间，使用“Y-m-d H:i:s”格式',
      'end_datetime' => '失效时间，使用“Y-m-d H:i:s”格式',
      'info' => '对计划任务的简要描述',
    ),
    'key_javascript' => 
    array (
      'task_to_run' => '',
      'schedule_type' => '',
      'modifier' => '',
      'dirlist' => '',
      'month' => '',
      'start_datetime' => '',
      'end_datetime' => '',
      'info' => '',
    ),
  ),
  'admin_Home_schedule' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'method' => 'method',
      'schedule_type' => 'schedule_type',
      'modifier' => 'modifier',
      'dirlist' => 'dirlist',
      'month' => 'month',
      'start_datetime' => 'start_datetime',
      'end_datetime' => 'end_datetime',
      'last_run_time' => 'last_run_time',
      'info' => 'info',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'method' => '执行函数',
      'schedule_type' => '类型',
      'modifier' => '执行频率',
      'dirlist' => 'dirlist',
      'month' => 'month',
      'start_datetime' => '开始时间',
      'end_datetime' => '失效时间',
      'last_run_time' => '上次执行',
      'info' => '简介',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'method' => '0',
      'schedule_type' => '0',
      'modifier' => '0',
      'dirlist' => '0',
      'month' => '0',
      'start_datetime' => '0',
      'end_datetime' => '0',
      'last_run_time' => '0',
      'info' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'method' => '',
      'schedule_type' => '',
      'modifier' => '',
      'dirlist' => '',
      'month' => '',
      'start_datetime' => '',
      'end_datetime' => '',
      'last_run_time' => '',
      'info' => '',
    ),
  ),
  'admin_Config_addannoun' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'content' => 'content',
      'attach' => 'attach',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'title' => '公告标题',
      'content' => '公告内容',
      'attach' => '附件',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'title' => 'text',
      'content' => 'textarea',
      'attach' => 'file',
    ),
    'key_default' => 
    array (
      'id' => '',
      'title' => '',
      'content' => '',
      'attach' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'content' => '',
      'attach' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'content' => '',
      'attach' => '',
    ),
  ),
  'admin_Home_systemdata' => 
  array (
    'key' => 
    array (
      'name' => 'name',
      'key' => 'key',
      'value' => 'value',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'name' => '中文名',
      'key' => 'KEY',
      'value' => '保存的值',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'name' => '0',
      'key' => '0',
      'value' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'name' => '',
      'key' => '',
      'value' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_addsystemdata' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'key' => 'key',
      'value' => 'value',
    ),
    'key_name' => 
    array (
      'id' => '',
      'name' => '中文名',
      'key' => 'KEY',
      'value' => '保存的值',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'name' => 'text',
      'key' => 'text',
      'value' => 'textarea',
    ),
    'key_default' => 
    array (
      'id' => '',
      'name' => '',
      'key' => '',
      'value' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'name' => '',
      'key' => '',
      'value' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'name' => '',
      'key' => '',
      'value' => '',
    ),
  ),
  'admin_Config_footer' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'uid' => 'uid',
      'sort' => 'sort',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'title' => '标题',
      'uid' => '发布者',
      'sort' => '排序',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'uid' => '0',
      'sort' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'uid' => '',
      'sort' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_profileCategory' => 
  array (
    'key' => 
    array (
      'field_id' => 'field_id',
      'field_key' => 'field_key',
      'field_name' => 'field_name',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'field_id' => '分类ID',
      'field_key' => '分类键值',
      'field_name' => '分类名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'field_id' => '0',
      'field_key' => '0',
      'field_name' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'field_id' => '',
      'field_key' => '',
      'field_name' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_setCreditLevel' => 
  array (
    'key' => 
    array (
      'level' => 'level',
      'name' => 'name',
      'image' => 'image',
      'start' => 'start',
      'end' => 'end',
    ),
    'key_name' => 
    array (
      'level' => '等级',
      'name' => '等级名称',
      'image' => '等级图标',
      'start' => '积分开始值',
      'end' => '积分结束值',
    ),
    'key_type' => 
    array (
      'level' => 'word',
      'name' => 'text',
      'image' => 'hidden',
      'start' => 'text',
      'end' => 'text',
    ),
    'key_default' => 
    array (
      'level' => '',
      'name' => '',
      'image' => '',
      'start' => '',
      'end' => '',
    ),
    'key_tishi' => 
    array (
      'level' => '',
      'name' => '',
      'image' => '',
      'start' => '',
      'end' => '',
    ),
    'key_javascript' => 
    array (
      'level' => '',
      'name' => '',
      'image' => '',
      'start' => '',
      'end' => '',
    ),
  ),
  'admin_Home_invateTop' => 
  array (
    'key' => 
    array (
      'sort' => 'sort',
      'inviter_uid' => 'inviter_uid',
      'nums' => 'nums',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'sort' => '名次',
      'inviter_uid' => '邀请人',
      'nums' => '邀请数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'sort' => '0',
      'inviter_uid' => '0',
      'nums' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'sort' => '',
      'inviter_uid' => '',
      'nums' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_addProfileCategory' => 
  array (
    'key' => 
    array (
      'type' => 'type',
      'field_key' => 'field_key',
      'field_name' => 'field_name',
      'field_type' => 'field_type',
    ),
    'key_name' => 
    array (
      'type' => '类型',
      'field_key' => '分类键值',
      'field_name' => '分类名称',
      'field_type' => '上级分类',
    ),
    'key_type' => 
    array (
      'type' => 'hidden',
      'field_key' => 'text',
      'field_name' => 'text',
      'field_type' => 'hidden',
    ),
    'key_default' => 
    array (
      'type' => '1',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '0',
    ),
    'key_tishi' => 
    array (
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
    ),
    'key_javascript' => 
    array (
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
    ),
  ),
  'admin_Home_feedback' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'feedbacktype' => 'feedbacktype',
      'feedback' => 'feedback',
      'uid' => 'uid',
      'cTime' => 'cTime',
      'type' => 'type',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'feedbacktype' => '反馈类型',
      'feedback' => '反馈内容',
      'uid' => '提交者',
      'cTime' => '提交时间',
      'type' => '处理状态',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'feedbacktype' => '0',
      'feedback' => '0',
      'uid' => '0',
      'cTime' => '0',
      'type' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'feedbacktype' => '',
      'feedback' => '',
      'uid' => '',
      'cTime' => '',
      'type' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Content_message' => 
  array (
    'key' => 
    array (
      'message_id' => 'message_id',
      'fuid' => 'fuid',
      'from_uid' => 'from_uid',
      'mix_man' => 'mix_man',
      'content' => 'content',
      'mtime' => 'mtime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'message_id' => '私信ID',
      'fuid' => '私信发送者',
      'from_uid' => '对话发起者',
      'mix_man' => '对话成员',
      'content' => '私信内容',
      'mtime' => '发送时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'message_id' => '0',
      'fuid' => '0',
      'from_uid' => '0',
      'mix_man' => '0',
      'content' => '0',
      'mtime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'message_id' => '',
      'fuid' => '',
      'from_uid' => '',
      'mix_man' => '',
      'content' => '',
      'mtime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Content_comment' => 
  array (
    'key' => 
    array (
      'comment_id' => 'comment_id',
      'uid' => 'uid',
      'app_uid' => 'app_uid',
      'source_type' => 'source_type',
      'content' => 'content',
      'ctime' => 'ctime',
      'client_type' => 'client_type',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'comment_id' => '评论ID',
      'uid' => '评论者',
      'app_uid' => '资源作者',
      'source_type' => '资源类型',
      'content' => '评论内容',
      'ctime' => '评论时间',
      'client_type' => '来源类型',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'comment_id' => '0',
      'uid' => '0',
      'app_uid' => '0',
      'source_type' => '0',
      'content' => '0',
      'ctime' => '0',
      'client_type' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'comment_id' => '',
      'uid' => '',
      'app_uid' => '',
      'source_type' => '',
      'content' => '',
      'ctime' => '',
      'client_type' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Content_attach' => 
  array (
    'key' => 
    array (
      'attach_id' => 'attach_id',
      'name' => 'name',
      'size' => 'size',
      'uid' => 'uid',
      'ctime' => 'ctime',
      'from' => 'from',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'attach_id' => '附件ID',
      'name' => '附件名称',
      'size' => '附件大小',
      'uid' => '上传者',
      'ctime' => '上传时间',
      'from' => '来源类型',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'attach_id' => '0',
      'name' => '0',
      'size' => '0',
      'uid' => '0',
      'ctime' => '0',
      'from' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'attach_id' => '',
      'name' => '',
      'size' => '',
      'uid' => '',
      'ctime' => '',
      'from' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_setCreditNode' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'appname' => 'appname',
      'action' => 'action',
      'info' => 'info',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'appname' => '应用',
      'action' => '动作',
      'info' => '动作别名',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'appname' => '0',
      'action' => '0',
      'info' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'appname' => '',
      'action' => '',
      'info' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_setPermNode' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'appname' => 'appname',
      'appinfo' => 'appinfo',
      'module' => 'module',
      'rule' => 'rule',
      'ruleinfo' => 'ruleinfo',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'appname' => '应用',
      'appinfo' => '应用别名',
      'module' => '模块',
      'rule' => '权限节点',
      'ruleinfo' => '节点别名',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'appname' => '0',
      'appinfo' => '0',
      'module' => '0',
      'rule' => '0',
      'ruleinfo' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'appname' => '',
      'appinfo' => '',
      'module' => '',
      'rule' => '',
      'ruleinfo' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_setFeedNode' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'appname' => 'appname',
      'nodetype' => 'nodetype',
      'nodeinfo' => 'nodeinfo',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'appname' => '应用名称',
      'nodetype' => '微博类型',
      'nodeinfo' => '类型别名',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'appname' => '0',
      'nodetype' => '0',
      'nodeinfo' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'appname' => '',
      'nodetype' => '',
      'nodeinfo' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_editCreditNode' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'appname' => 'appname',
      'action' => 'action',
      'info' => 'info',
    ),
    'key_name' => 
    array (
      'id' => '',
      'appname' => '应用',
      'action' => '动作',
      'info' => '动作别名',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'appname' => 'text',
      'action' => 'text',
      'info' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'appname' => '',
      'action' => '',
      'info' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'appname' => '',
      'action' => '',
      'info' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'appname' => '',
      'action' => '',
      'info' => '',
    ),
  ),
  'admin_Apps_editFeedNode' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'appname' => 'appname',
      'nodetype' => 'nodetype',
      'nodeinfo' => 'nodeinfo',
      'xml' => 'xml',
    ),
    'key_name' => 
    array (
      'id' => '',
      'appname' => '应用',
      'nodetype' => '类型',
      'nodeinfo' => '类型别名',
      'xml' => '模板内容',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'appname' => 'text',
      'nodetype' => 'text',
      'nodeinfo' => 'text',
      'xml' => 'textarea',
    ),
    'key_default' => 
    array (
      'id' => '',
      'appname' => '',
      'nodetype' => '',
      'nodeinfo' => '',
      'xml' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'appname' => '',
      'nodetype' => '',
      'nodeinfo' => '',
      'xml' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'appname' => '',
      'nodetype' => '',
      'nodeinfo' => '',
      'xml' => '',
    ),
  ),
  'admin_Apps_install' => 
  array (
    'key' => 
    array (
      'icon_url' => 'icon_url',
      'app_name' => 'app_name',
      'app_alias' => 'app_alias',
      'description' => 'description',
      'host_type_alias' => 'host_type_alias',
      'company_name' => 'company_name',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'icon_url' => '图标地址',
      'app_name' => '应用名称',
      'app_alias' => '应用别名',
      'description' => '应用描述',
      'host_type_alias' => '托管类型',
      'company_name' => '公司名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'icon_url' => '0',
      'app_name' => '0',
      'app_alias' => '0',
      'description' => '0',
      'host_type_alias' => '0',
      'company_name' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'icon_url' => '',
      'app_name' => '',
      'app_alias' => '',
      'description' => '',
      'host_type_alias' => '',
      'company_name' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_logs' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'uname' => 'uname',
      'app_name' => 'app_name',
      'ip' => 'ip',
      'data' => 'data',
      'ctime' => 'ctime',
      'isAdmin' => 'isAdmin',
      'type_info' => 'type_info',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户ID',
      'uname' => '用户帐号',
      'app_name' => '操作详情',
      'ip' => 'IP',
      'data' => '日志数据',
      'ctime' => '记录时间',
      'isAdmin' => '类型',
      'type_info' => '日志类型',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'uid' => '0',
      'uname' => '0',
      'app_name' => '0',
      'ip' => '0',
      'data' => '0',
      'ctime' => '0',
      'isAdmin' => '0',
      'type_info' => '1',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'uname' => '',
      'app_name' => '',
      'ip' => '',
      'data' => '',
      'ctime' => '',
      'isAdmin' => '',
      'type_info' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Department_index' => 
  array (
    'key' => 
    array (
      'department_id' => 'department_id',
      'title' => 'title',
      'parent_dept_id' => 'parent_dept_id',
      'display_order' => 'display_order',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'department_id' => '部门ID',
      'title' => '部门名称',
      'parent_dept_id' => '上级部门',
      'display_order' => '顺序',
      'ctime' => '添加时间',
      'DOACTION' => '操作',
    ),
    'key_type' => 
    array (
      'department_id' => 'hidden',
      'title' => 'text',
      'parent_dept_id' => 'select',
      'display_order' => 'hidden',
      'ctime' => 'hidden',
      'DOACTION' => 'hidden',
    ),
    'key_default' => 
    array (
      'department_id' => '',
      'title' => '',
      'parent_dept_id' => '',
      'display_order' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
    'key_tishi' => 
    array (
      'department_id' => '',
      'title' => '',
      'parent_dept_id' => '',
      'display_order' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
    'key_javascript' => 
    array (
      'department_id' => '',
      'title' => '',
      'parent_dept_id' => 'admin.selectDepart(this.value,$(this))',
      'display_order' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_announcement' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'uid' => 'uid',
      'sort' => 'sort',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'title' => '公告标题',
      'uid' => '发布者',
      'sort' => '排序',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'uid' => '0',
      'sort' => '1',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'uid' => '',
      'sort' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_addTag' => 
  array (
    'key' => 
    array (
      'tags' => 'tags',
    ),
    'key_name' => 
    array (
      'tags' => '标签',
    ),
    'key_type' => 
    array (
      'tags' => 'stringText',
    ),
    'key_default' => 
    array (
      'tags' => '',
    ),
    'key_tishi' => 
    array (
      'tags' => '按回车添加标签',
    ),
    'key_javascript' => 
    array (
      'tags' => '',
    ),
  ),
  'admin_Home_feedbackType' => 
  array (
    'key' => 
    array (
      'type_id' => 'type_id',
      'type_name' => 'type_name',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'type_id' => '反馈类型ID',
      'type_name' => '反馈类型',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'type_id' => '1',
      'type_name' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'type_id' => '',
      'type_name' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_lang' => 
  array (
    'key' => 
    array (
      'lang_id' => 'lang_id',
      'key' => 'key',
      'appname' => 'appname',
      'filetype' => 'filetype',
      'zh-cn' => 'zh-cn',
      'zh-tw' => 'zh-tw',
      'en' => 'en',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'lang_id' => 'ID',
      'key' => '语言KEY',
      'appname' => '应用名称',
      'filetype' => '文件类型',
      'zh-cn' => '简体',
      'zh-tw' => '繁体',
      'en' => '英文',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'lang_id' => '0',
      'key' => '0',
      'appname' => '0',
      'filetype' => '0',
      'zh-cn' => '0',
      'zh-tw' => '0',
      'en' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'lang_id' => '',
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'zh-cn' => '',
      'zh-tw' => '',
      'en' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_updateLangContent' => 
  array (
    'key' => 
    array (
      'key' => 'key',
      'appname' => 'appname',
      'filetype' => 'filetype',
      'zh-cn' => 'zh-cn',
      'zh-tw' => 'zh-tw',
      'en' => 'en',
    ),
    'key_name' => 
    array (
      'key' => '语言KEY',
      'appname' => '应用名称',
      'filetype' => '文件类型',
      'zh-cn' => '简体中文',
      'zh-tw' => '繁体中文',
      'en' => '英文',
    ),
    'key_type' => 
    array (
      'key' => 'text',
      'appname' => 'text',
      'filetype' => 'radio',
      'zh-cn' => 'textarea',
      'zh-tw' => 'textarea',
      'en' => 'textarea',
    ),
    'key_default' => 
    array (
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'zh-cn' => '',
      'zh-tw' => '',
      'en' => '',
    ),
    'key_tishi' => 
    array (
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'zh-cn' => '',
      'zh-tw' => '',
      'en' => '',
    ),
    'key_javascript' => 
    array (
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'zh-cn' => '',
      'zh-tw' => '',
      'en' => '',
    ),
  ),
  'admin_Home_tag' => 
  array (
    'key' => 
    array (
      'tag_id' => 'tag_id',
      'table' => 'table',
      'name' => 'name',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tag_id' => '标签ID',
      'table' => '标签类型',
      'name' => '标签名',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tag_id' => '0',
      'table' => '0',
      'name' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tag_id' => '',
      'table' => '',
      'name' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_index' => 
  array (
    'key' => 
    array (
      'app_id' => 'app_id',
      'icon_url' => 'icon_url',
      'app_name' => 'app_name',
      'app_alias' => 'app_alias',
      'status' => 'status',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'app_id' => '应用ID',
      'icon_url' => '图标',
      'app_name' => '应用名',
      'app_alias' => '别名',
      'status' => '状态',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'app_id' => '1',
      'icon_url' => '0',
      'app_name' => '0',
      'app_alias' => '0',
      'status' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'app_id' => '',
      'icon_url' => '',
      'app_name' => '',
      'app_alias' => '',
      'status' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_addFeedbackType' => 
  array (
    'key' => 
    array (
      'type_id' => 'type_id',
      'type_name' => 'type_name',
    ),
    'key_name' => 
    array (
      'type_id' => '',
      'type_name' => '反馈类型',
    ),
    'key_type' => 
    array (
      'type_id' => 'hidden',
      'type_name' => 'text',
    ),
    'key_default' => 
    array (
      'type_id' => '',
      'type_name' => '',
    ),
    'key_tishi' => 
    array (
      'type_id' => '',
      'type_name' => '',
    ),
    'key_javascript' => 
    array (
      'type_id' => '',
      'type_name' => '',
    ),
  ),
  'admin_Home_addfeedbackType_edit' => 
  array (
    'key' => 
    array (
      'type_id' => 'type_id',
      'type_name' => 'type_name',
    ),
    'key_name' => 
    array (
      'type_id' => '',
      'type_name' => '反馈类型',
    ),
    'key_type' => 
    array (
      'type_id' => 'hidden',
      'type_name' => 'text',
    ),
    'key_default' => 
    array (
      'type_id' => '',
      'type_name' => '',
    ),
    'key_tishi' => 
    array (
      'type_id' => '',
      'type_name' => '',
    ),
    'key_javascript' => 
    array (
      'type_id' => '',
      'type_name' => '',
    ),
  ),
  'admin_Config_addArticle' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'content' => 'content',
      'attach' => 'attach',
      'type' => 'type',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'title' => '标题',
      'content' => '内容',
      'attach' => '附件',
      'type' => '类型',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'title' => 'text',
      'content' => 'editor',
      'attach' => 'file',
      'type' => 'hidden',
    ),
    'key_default' => 
    array (
      'id' => '',
      'title' => '',
      'content' => '',
      'attach' => '',
      'type' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'content' => '',
      'attach' => '',
      'type' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'content' => '',
      'attach' => '',
      'type' => '',
    ),
  ),
  'admin_User_profile' => 
  array (
    'key' => 
    array (
      'field_id' => 'field_id',
      'field_key' => 'field_key',
      'field_name' => 'field_name',
      'field_type' => 'field_type',
      'visiable' => 'visiable',
      'editable' => 'editable',
      'required' => 'required',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'field_id' => '字段ID',
      'field_key' => '字段键值',
      'field_name' => '字段名称',
      'field_type' => '字段分类',
      'visiable' => '是否空间可见',
      'editable' => '是否可编辑',
      'required' => '是否必填项',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'field_id' => '1',
      'field_key' => '0',
      'field_name' => '0',
      'field_type' => '0',
      'visiable' => '0',
      'editable' => '0',
      'required' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'field_id' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '',
      'editable' => '',
      'required' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_pending' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'location' => 'location',
      'ctime' => 'ctime',
      'reg_ip' => 'reg_ip',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户名',
      'location' => '地区',
      'ctime' => '注册时间',
      'reg_ip' => '注册IP',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uid' => '0',
      'uname' => '0',
      'location' => '0',
      'ctime' => '0',
      'reg_ip' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'location' => '',
      'ctime' => '',
      'reg_ip' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_online' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'user_group' => 'user_group',
      'location' => 'location',
      'ctime' => 'ctime',
      'last_operating_ip' => 'last_operating_ip',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户昵称',
      'user_group' => '用户组',
      'location' => '地区',
      'ctime' => '注册时间',
      'last_operating_ip' => '最后操作IP',
    ),
    'key_hidden' => 
    array (
      'uid' => '0',
      'uname' => '0',
      'user_group' => '0',
      'location' => '0',
      'ctime' => '0',
      'last_operating_ip' => '0',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'user_group' => '',
      'location' => '',
      'ctime' => '',
      'last_operating_ip' => '',
    ),
  ),
  'admin_User_viewIP' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'day' => 'day',
      'action' => 'action',
      'ip' => 'ip',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '日志ID',
      'day' => '时间',
      'action' => '动作',
      'ip' => 'IP记录',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'day' => '0',
      'action' => '0',
      'ip' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'day' => '',
      'action' => '',
      'ip' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_loginLog' => 
  array (
    'key' => 
    array (
      'login_logs_id' => 'login_logs_id',
      'ip' => 'ip',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'login_logs_id' => '日志ID',
      'ip' => 'IP操作',
      'ctime' => '时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'login_logs_id' => '0',
      'ip' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'login_logs_id' => '',
      'ip' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_addCreditType' => 
  array (
    'key' => 
    array (
      'CreditType' => 'CreditType',
      'CreditName' => 'CreditName',
    ),
    'key_name' => 
    array (
      'CreditType' => '积分类型',
      'CreditName' => '别名',
    ),
    'key_type' => 
    array (
      'CreditType' => 'text',
      'CreditName' => 'text',
    ),
    'key_default' => 
    array (
      'CreditType' => '',
      'CreditName' => '',
    ),
    'key_tishi' => 
    array (
      'CreditType' => '',
      'CreditName' => '如"积分，经验，威望"',
    ),
    'key_javascript' => 
    array (
      'CreditType' => '',
      'CreditName' => '',
    ),
  ),
  'admin_Config_creditType' => 
  array (
    'key' => 
    array (
      'CreditType' => 'CreditType',
      'CreditName' => 'CreditName',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'CreditType' => '积分类型',
      'CreditName' => '别名',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'CreditType' => '0',
      'CreditName' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'CreditType' => '',
      'CreditName' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_feedback_list' => 
  array (
    'key' => 
    array (
      'feedbacktype' => 'feedbacktype',
      'uid' => 'uid',
      'feedback' => 'feedback',
      'cTme' => 'cTme',
    ),
    'key_name' => 
    array (
      'feedbacktype' => '反馈类型',
      'uid' => '提交者',
      'feedback' => '反馈内容',
      'cTme' => '反馈时间',
    ),
    'key_type' => 
    array (
      'feedbacktype' => 'text',
      'uid' => 'text',
      'feedback' => 'text',
      'cTme' => 'text',
    ),
    'key_default' => 
    array (
      'feedbacktype' => '',
      'uid' => '',
      'feedback' => '',
      'cTme' => '',
    ),
    'key_tishi' => 
    array (
      'feedbacktype' => '',
      'uid' => '',
      'feedback' => '',
      'cTme' => '',
    ),
    'key_javascript' => 
    array (
      'feedbacktype' => '',
      'uid' => '',
      'feedback' => '',
      'cTme' => '',
    ),
  ),
  'weiba_Admin_postList' => 
  array (
    'key' => 
    array (
      'post_id' => 'post_id',
      'title' => 'title',
      'post_uid' => 'post_uid',
      'post_time' => 'post_time',
      'last_reply_time' => 'last_reply_time',
      'read_count/reply_count' => 'read_count/reply_count',
      'weiba_id' => 'weiba_id',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'post_id' => '帖子ID',
      'title' => '帖子标题',
      'post_uid' => '发帖人',
      'post_time' => '发帖时间',
      'last_reply_time' => '最后回复时间',
      'read_count/reply_count' => '浏览数/评论数',
      'weiba_id' => '所属微吧',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'post_id' => '0',
      'title' => '0',
      'post_uid' => '0',
      'post_time' => '0',
      'last_reply_time' => '0',
      'read_count/reply_count' => '0',
      'weiba_id' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'post_id' => '',
      'title' => '',
      'post_uid' => '',
      'post_time' => '',
      'last_reply_time' => '',
      'read_count/reply_count' => '',
      'weiba_id' => '',
      'DOACTION' => '',
    ),
  ),
  'weiba_Admin_postRecycle' => 
  array (
    'key' => 
    array (
      'post_id' => 'post_id',
      'title' => 'title',
      'post_uid' => 'post_uid',
      'post_time' => 'post_time',
      'last_reply_time' => 'last_reply_time',
      'read_count/reply_count' => 'read_count/reply_count',
      'weiba_id' => 'weiba_id',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'post_id' => '帖子ID',
      'title' => '帖子标题',
      'post_uid' => '发帖人',
      'post_time' => '发帖时间',
      'last_reply_time' => '最后回复时间',
      'read_count/reply_count' => '浏览数/评论数',
      'weiba_id' => '所属微吧',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'post_id' => '0',
      'title' => '0',
      'post_uid' => '0',
      'post_time' => '0',
      'last_reply_time' => '0',
      'read_count/reply_count' => '0',
      'weiba_id' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'post_id' => '',
      'title' => '',
      'post_uid' => '',
      'post_time' => '',
      'last_reply_time' => '',
      'read_count/reply_count' => '',
      'weiba_id' => '',
      'DOACTION' => '',
    ),
  ),
  'page_Admin_canvas' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'canvas_name' => 'canvas_name',
      'description' => 'description',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '名称',
      'canvas_name' => '画布名称',
      'description' => '说明',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'title' => '0',
      'canvas_name' => '0',
      'description' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'DOACTION' => '',
    ),
  ),
  'page_Admin_editCanvas' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'canvas_name' => 'canvas_name',
      'description' => 'description',
      'data' => 'data',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '名称',
      'canvas_name' => '画布名称',
      'description' => '说明',
      'data' => '画布内容',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'title' => 'text',
      'canvas_name' => 'text',
      'description' => 'text',
      'data' => 'textarea',
    ),
    'key_default' => 
    array (
      'id' => '',
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'data' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'data' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'data' => '',
    ),
  ),
  'page_Admin_editPage' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'page_name' => 'page_name',
      'domain' => 'domain',
      'canvas' => 'canvas',
      'status' => 'status',
      'guest' => 'guest',
      'seo_title' => 'seo_title',
      'seo_keywords' => 'seo_keywords',
      'seo_description' => 'seo_description',
    ),
    'key_name' => 
    array (
      'id' => '',
      'page_name' => '名称',
      'domain' => '域名',
      'canvas' => '画布',
      'status' => '状态',
      'guest' => '游客',
      'seo_title' => 'SEO title',
      'seo_keywords' => 'SEO keywords',
      'seo_description' => 'SEO description',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'page_name' => 'text',
      'domain' => 'text',
      'canvas' => 'select',
      'status' => 'radio',
      'guest' => 'radio',
      'seo_title' => 'text',
      'seo_keywords' => 'text',
      'seo_description' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'status' => '',
      'guest' => '',
      'seo_title' => '',
      'seo_keywords' => '',
      'seo_description' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'status' => '',
      'guest' => '',
      'seo_title' => '',
      'seo_keywords' => '',
      'seo_description' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'status' => '',
      'guest' => '',
      'seo_title' => '',
      'seo_keywords' => '',
      'seo_description' => '',
    ),
  ),
  'admin_User_officialList' => 
  array (
    'key' => 
    array (
      'official_id' => 'official_id',
      'uid' => 'uid',
      'uname' => 'uname',
      'title' => 'title',
      'info' => 'info',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'official_id' => '主键',
      'uid' => '用户ID',
      'uname' => '用户昵称',
      'title' => '分类名称',
      'info' => '相关信息',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'official_id' => '1',
      'uid' => '0',
      'uname' => '0',
      'title' => '0',
      'info' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'official_id' => '',
      'uid' => '',
      'uname' => '',
      'title' => '',
      'info' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_officialAddUser' => 
  array (
    'key' => 
    array (
      'uids' => 'uids',
      'category' => 'category',
      'info' => 'info',
    ),
    'key_name' => 
    array (
      'uids' => '用户',
      'category' => '分类',
      'info' => '相关信息',
    ),
    'key_type' => 
    array (
      'uids' => 'user',
      'category' => 'select',
      'info' => 'textarea',
    ),
    'key_default' => 
    array (
      'uids' => '',
      'category' => '',
      'info' => '',
    ),
    'key_tishi' => 
    array (
      'uids' => '',
      'category' => '',
      'info' => '',
    ),
    'key_javascript' => 
    array (
      'uids' => '',
      'category' => '',
      'info' => '',
    ),
  ),
  'admin_Config_cloudattach' => 
  array (
    'key' => 
    array (
      'cloud_attach_open' => 'cloud_attach_open',
      'cloud_attach_api_url' => 'cloud_attach_api_url',
      'cloud_attach_bucket' => 'cloud_attach_bucket',
      'cloud_attach_form_api_key' => 'cloud_attach_form_api_key',
      'cloud_attach_prefix_urls' => 'cloud_attach_prefix_urls',
      'cloud_attach_admin' => 'cloud_attach_admin',
      'cloud_attach_password' => 'cloud_attach_password',
    ),
    'key_name' => 
    array (
      'cloud_attach_open' => '开启又拍云附件',
      'cloud_attach_api_url' => '默认API地址',
      'cloud_attach_bucket' => '图片bucket',
      'cloud_attach_form_api_key' => '表单API密钥',
      'cloud_attach_prefix_urls' => '域名前缀',
      'cloud_attach_admin' => '操作员帐号',
      'cloud_attach_password' => '操作员密码',
    ),
    'key_type' => 
    array (
      'cloud_attach_open' => 'radio',
      'cloud_attach_api_url' => 'text',
      'cloud_attach_bucket' => 'text',
      'cloud_attach_form_api_key' => 'text',
      'cloud_attach_prefix_urls' => 'textarea',
      'cloud_attach_admin' => 'text',
      'cloud_attach_password' => 'password',
    ),
    'key_default' => 
    array (
      'cloud_attach_open' => '1',
      'cloud_attach_api_url' => 'http://v0.api.upyun.com',
      'cloud_attach_bucket' => '',
      'cloud_attach_form_api_key' => '',
      'cloud_attach_prefix_urls' => '',
      'cloud_attach_admin' => '',
      'cloud_attach_password' => '',
    ),
    'key_tishi' => 
    array (
      'cloud_attach_open' => '',
      'cloud_attach_api_url' => '',
      'cloud_attach_bucket' => '',
      'cloud_attach_form_api_key' => '',
      'cloud_attach_prefix_urls' => '需要在又拍云绑定过的域名，多个域名请用半角逗号分隔',
      'cloud_attach_admin' => '',
      'cloud_attach_password' => '',
    ),
    'key_javascript' => 
    array (
      'cloud_attach_open' => '',
      'cloud_attach_api_url' => '',
      'cloud_attach_bucket' => '',
      'cloud_attach_form_api_key' => '',
      'cloud_attach_prefix_urls' => '',
      'cloud_attach_admin' => '',
      'cloud_attach_password' => '',
    ),
  ),
  'admin_Config_cloudimage' => 
  array (
    'key' => 
    array (
      'cloud_image_open' => 'cloud_image_open',
      'cloud_image_api_url' => 'cloud_image_api_url',
      'cloud_image_bucket' => 'cloud_image_bucket',
      'cloud_image_form_api_key' => 'cloud_image_form_api_key',
      'cloud_image_prefix_urls' => 'cloud_image_prefix_urls',
      'cloud_image_admin' => 'cloud_image_admin',
      'cloud_image_password' => 'cloud_image_password',
    ),
    'key_name' => 
    array (
      'cloud_image_open' => '开启又拍云图片',
      'cloud_image_api_url' => '默认API地址',
      'cloud_image_bucket' => '图片bucket',
      'cloud_image_form_api_key' => '表单API密钥',
      'cloud_image_prefix_urls' => '域名前缀',
      'cloud_image_admin' => '操作员帐号',
      'cloud_image_password' => '操作员密码',
    ),
    'key_type' => 
    array (
      'cloud_image_open' => 'radio',
      'cloud_image_api_url' => 'text',
      'cloud_image_bucket' => 'text',
      'cloud_image_form_api_key' => 'text',
      'cloud_image_prefix_urls' => 'textarea',
      'cloud_image_admin' => 'text',
      'cloud_image_password' => 'password',
    ),
    'key_default' => 
    array (
      'cloud_image_open' => '1',
      'cloud_image_api_url' => 'http://v0.api.upyun.com',
      'cloud_image_bucket' => '',
      'cloud_image_form_api_key' => '',
      'cloud_image_prefix_urls' => '',
      'cloud_image_admin' => '',
      'cloud_image_password' => '',
    ),
    'key_tishi' => 
    array (
      'cloud_image_open' => '',
      'cloud_image_api_url' => '',
      'cloud_image_bucket' => '',
      'cloud_image_form_api_key' => '',
      'cloud_image_prefix_urls' => '需要在又拍云绑定过的域名，多个域名请用半角逗号分隔',
      'cloud_image_admin' => '',
      'cloud_image_password' => '',
    ),
    'key_javascript' => 
    array (
      'cloud_image_open' => '',
      'cloud_image_api_url' => '',
      'cloud_image_bucket' => '',
      'cloud_image_form_api_key' => '',
      'cloud_image_prefix_urls' => '',
      'cloud_image_admin' => '',
      'cloud_image_password' => '',
    ),
  ),
  'admin_Config_invite' => 
  array (
    'key' => 
    array (
      'send_email_num' => 'send_email_num',
      'send_link_num' => 'send_link_num',
      'apply_credit' => 'apply_credit',
    ),
    'key_name' => 
    array (
      'send_email_num' => '邮件邀请码数量',
      'send_link_num' => '链接邀请码数量',
      'apply_credit' => '申请邀请码扣除积分',
    ),
    'key_type' => 
    array (
      'send_email_num' => 'text',
      'send_link_num' => 'text',
      'apply_credit' => 'text',
    ),
    'key_default' => 
    array (
      'send_email_num' => '',
      'send_link_num' => '',
      'apply_credit' => '',
    ),
    'key_tishi' => 
    array (
      'send_email_num' => '',
      'send_link_num' => '',
      'apply_credit' => '',
    ),
    'key_javascript' => 
    array (
      'send_email_num' => '',
      'send_link_num' => '',
      'apply_credit' => '',
    ),
  ),
  'admin_Task_mainIndex' => 
  array (
    'key' => 
    array (
      'task_name' => 'task_name',
      'step_name' => 'step_name',
      'step_desc' => 'step_desc',
      'count' => 'count',
      'reward' => 'reward',
      'medal' => 'medal',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'task_name' => '任务类型',
      'step_name' => '任务名称',
      'step_desc' => '任务描述',
      'count' => '完成人数',
      'reward' => '积分奖励',
      'medal' => '勋章奖励',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'task_name' => '0',
      'step_name' => '0',
      'step_desc' => '0',
      'count' => '0',
      'reward' => '0',
      'medal' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'task_name' => '',
      'step_name' => '',
      'step_desc' => '',
      'count' => '',
      'reward' => '',
      'medal' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Task_index' => 
  array (
    'key' => 
    array (
      'task_name' => 'task_name',
      'step_name' => 'step_name',
      'step_desc' => 'step_desc',
      'count' => 'count',
      'reward' => 'reward',
      'medal' => 'medal',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'task_name' => '任务类型',
      'step_name' => '任务名称',
      'step_desc' => '任务说明',
      'count' => '完成人数',
      'reward' => '积分奖励',
      'medal' => '勋章奖励',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'task_name' => '0',
      'step_name' => '0',
      'step_desc' => '0',
      'count' => '0',
      'reward' => '0',
      'medal' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'task_name' => '',
      'step_name' => '',
      'step_desc' => '',
      'count' => '',
      'reward' => '',
      'medal' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Task_customIndex' => 
  array (
    'key' => 
    array (
      'task_name' => 'task_name',
      'task_desc' => 'task_desc',
      'condesc' => 'condesc',
      'count' => 'count',
      'reward' => 'reward',
      'medal' => 'medal',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'task_name' => '任务名称',
      'task_desc' => '任务描述',
      'condesc' => '条件',
      'count' => '完成人数',
      'reward' => '积分奖励',
      'medal' => '勋章奖励',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'task_name' => '0',
      'task_desc' => '0',
      'condesc' => '0',
      'count' => '0',
      'reward' => '0',
      'medal' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'task_name' => '',
      'task_desc' => '',
      'condesc' => '',
      'count' => '',
      'reward' => '',
      'medal' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Task_reward' => 
  array (
    'key' => 
    array (
      'task_name' => 'task_name',
      'reward' => 'reward',
      'medal' => 'medal',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'task_name' => '任务类型',
      'reward' => '积分奖励',
      'medal' => '勋章奖励',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'task_name' => '0',
      'reward' => '0',
      'medal' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'task_name' => '',
      'reward' => '',
      'medal' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Task_editCustomTask' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'task_name' => 'task_name',
      'task_desc' => 'task_desc',
      'end_time1' => 'end_time1',
      'userlevel' => 'userlevel',
      'usergroup' => 'usergroup',
      'reg_time1' => 'reg_time1',
      'topic' => 'topic',
      'task_condition' => 'task_condition',
      'num' => 'num',
      'exp' => 'exp',
      'medal_id' => 'medal_id',
      'medal_name' => 'medal_name',
      'medal_src' => 'medal_src',
      'score' => 'score',
    ),
    'key_name' => 
    array (
      'id' => '',
      'task_name' => '任务名称',
      'task_desc' => '任务描述',
      'end_time1' => '领取时间',
      'userlevel' => '用户等级',
      'usergroup' => '用户组',
      'reg_time1' => '注册时间',
      'topic' => '话题',
      'task_condition' => '前置任务',
      'num' => '任务数量',
      'exp' => '经验奖励',
      'medal_id' => '',
      'medal_name' => '',
      'medal_src' => '',
      'score' => '财富奖励',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'task_name' => 'text',
      'task_desc' => 'textarea',
      'end_time1' => 'date',
      'userlevel' => 'checkbox',
      'usergroup' => 'checkbox',
      'reg_time1' => 'date',
      'topic' => 'text',
      'task_condition' => 'select',
      'num' => 'text',
      'exp' => 'text',
      'medal_id' => 'hidden',
      'medal_name' => 'hidden',
      'medal_src' => 'hidden',
      'score' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'task_name' => '',
      'task_desc' => '',
      'end_time1' => '',
      'userlevel' => '',
      'usergroup' => '',
      'reg_time1' => '',
      'topic' => '',
      'task_condition' => '',
      'num' => '',
      'exp' => '',
      'medal_id' => '',
      'medal_name' => '',
      'medal_src' => '',
      'score' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'task_name' => '',
      'task_desc' => '',
      'end_time1' => '',
      'userlevel' => '',
      'usergroup' => '',
      'reg_time1' => '',
      'topic' => '',
      'task_condition' => '',
      'num' => '',
      'exp' => '',
      'medal_id' => '',
      'medal_name' => '',
      'medal_src' => '',
      'score' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'task_name' => '',
      'task_desc' => '',
      'end_time1' => '',
      'userlevel' => '',
      'usergroup' => '',
      'reg_time1' => '',
      'topic' => '',
      'task_condition' => '',
      'num' => '',
      'exp' => '',
      'medal_id' => '',
      'medal_name' => '',
      'medal_src' => '',
      'score' => '',
    ),
  ),
  'weiba_Admin_editPost' => 
  array (
    'key' => 
    array (
      'post_id' => 'post_id',
      'title' => 'title',
      'content' => 'content',
      'recommend' => 'recommend',
      'digest' => 'digest',
      'top' => 'top',
    ),
    'key_name' => 
    array (
      'post_id' => '帖子ID',
      'title' => '帖子标题',
      'content' => '帖子内容',
      'recommend' => '是否推荐',
      'digest' => '是否精华',
      'top' => '是否置顶',
    ),
    'key_type' => 
    array (
      'post_id' => 'hidden',
      'title' => 'text',
      'content' => 'editor',
      'recommend' => 'radio',
      'digest' => 'radio',
      'top' => 'radio',
    ),
    'key_default' => 
    array (
      'post_id' => '',
      'title' => '',
      'content' => '',
      'recommend' => '',
      'digest' => '',
      'top' => '',
    ),
    'key_tishi' => 
    array (
      'post_id' => '',
      'title' => '',
      'content' => '',
      'recommend' => '',
      'digest' => '',
      'top' => '',
    ),
    'key_javascript' => 
    array (
      'post_id' => '',
      'title' => '',
      'content' => '',
      'recommend' => '',
      'digest' => '',
      'top' => '',
    ),
  ),
  'admin_Config_getInviteAdminList' => 
  array (
    'key' => 
    array (
      'face' => 'face',
      'receiver_uname' => 'receiver_uname',
      'receiver_email' => 'receiver_email',
      'ctime' => 'ctime',
      'invite_type' => 'invite_type',
      'invite_code' => 'invite_code',
      'inviter_uname' => 'inviter_uname',
    ),
    'key_name' => 
    array (
      'face' => '被邀请人头像',
      'receiver_uname' => '被邀请人昵称',
      'receiver_email' => '被邀请人注册邮箱',
      'ctime' => '被邀请人注册时间',
      'invite_type' => '邀请类型',
      'invite_code' => '邀请码',
      'inviter_uname' => '邀请人昵称',
    ),
    'key_hidden' => 
    array (
      'face' => '0',
      'receiver_uname' => '0',
      'receiver_email' => '0',
      'ctime' => '0',
      'invite_type' => '0',
      'invite_code' => '0',
      'inviter_uname' => '0',
    ),
    'key_javascript' => 
    array (
      'face' => '',
      'receiver_uname' => '',
      'receiver_email' => '',
      'ctime' => '',
      'invite_type' => '',
      'invite_code' => '',
      'inviter_uname' => '',
    ),
  ),
  'page_Admin_addCanvas' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'canvas_name' => 'canvas_name',
      'description' => 'description',
      'data' => 'data',
    ),
    'key_name' => 
    array (
      'title' => '名称',
      'canvas_name' => '画布名称',
      'description' => '说明',
      'data' => '画布内容',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'canvas_name' => 'text',
      'description' => 'text',
      'data' => 'textarea',
    ),
    'key_default' => 
    array (
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'data' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'data' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'canvas_name' => '',
      'description' => '',
      'data' => '',
    ),
  ),
  'admin_Medal_userMedal' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'medalname' => 'medalname',
      'medalsrc' => 'medalsrc',
      'desc' => 'desc',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uname' => '用户名',
      'medalname' => '勋章名称',
      'medalsrc' => '勋章',
      'desc' => '颁发描述',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'medalname' => '0',
      'medalsrc' => '0',
      'desc' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'medalname' => '',
      'medalsrc' => '',
      'desc' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Medal_editMedal' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'desc' => 'desc',
      'src' => 'src',
      'small_src' => 'small_src',
    ),
    'key_name' => 
    array (
      'id' => '',
      'name' => '勋章名称',
      'desc' => '勋章描述',
      'src' => '上传勋章大图',
      'small_src' => '上传勋章小图',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'name' => 'text',
      'desc' => 'text',
      'src' => 'image',
      'small_src' => 'image',
    ),
    'key_default' => 
    array (
      'id' => '',
      'name' => '',
      'desc' => '',
      'src' => '',
      'small_src' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'name' => '',
      'desc' => '',
      'src' => '',
      'small_src' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'name' => '',
      'desc' => '',
      'src' => '',
      'small_src' => '',
    ),
  ),
  'admin_Medal_editUserMedal' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'medal_id' => 'medal_id',
      'desc' => 'desc',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uid' => '用户名',
      'medal_id' => '选择勋章',
      'desc' => '颁发描述',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'uid' => 'word',
      'medal_id' => 'select',
      'desc' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'uid' => '',
      'medal_id' => '',
      'desc' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'medal_id' => '',
      'desc' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'medal_id' => '',
      'desc' => '',
    ),
  ),
  'admin_User_verifiedGroup' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'usergroup_id' => 'usergroup_id',
      'category' => 'category',
      'company' => 'company',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'phone' => 'phone',
      'reason' => 'reason',
      'info' => 'info',
      'attachment' => 'attachment',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uname' => '用户名',
      'usergroup_id' => '认证类型',
      'category' => '认证分类',
      'company' => '企业名称',
      'realname' => '法人姓名',
      'idcard' => '营业执照号',
      'phone' => '联系方式',
      'reason' => '认证理由',
      'info' => '认证资料',
      'attachment' => '认证附件',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uname' => '0',
      'usergroup_id' => '0',
      'category' => '0',
      'company' => '0',
      'realname' => '0',
      'idcard' => '0',
      'phone' => '0',
      'reason' => '0',
      'info' => '0',
      'attachment' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uname' => '',
      'usergroup_id' => '',
      'category' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'reason' => '',
      'info' => '',
      'attachment' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_verifyGroup' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'usergroup_id' => 'usergroup_id',
      'category' => 'category',
      'company' => 'company',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'phone' => 'phone',
      'reason' => 'reason',
      'info' => 'info',
      'attachment' => 'attachment',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uname' => '用户名',
      'usergroup_id' => '认证类型',
      'category' => '认证分类',
      'company' => '企业名称',
      'realname' => '法人姓名',
      'idcard' => '营业执照号',
      'phone' => '联系方式',
      'reason' => '认证理由',
      'info' => '认证资料',
      'attachment' => '认证附件',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uname' => '0',
      'usergroup_id' => '0',
      'category' => '0',
      'company' => '0',
      'realname' => '0',
      'idcard' => '0',
      'phone' => '0',
      'reason' => '0',
      'info' => '0',
      'attachment' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uname' => '',
      'usergroup_id' => '',
      'category' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'reason' => '',
      'info' => '',
      'attachment' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_feed' => 
  array (
    'key' => 
    array (
      'weibo_nums' => 'weibo_nums',
      'weibo_type' => 'weibo_type',
      'weibo_premission' => 'weibo_premission',
      'weibo_send_info' => 'weibo_send_info',
      'weibo_default_topic' => 'weibo_default_topic',
      'weibo_at_me' => 'weibo_at_me',
    ),
    'key_name' => 
    array (
      'weibo_nums' => '微博字数',
      'weibo_type' => '微博类型',
      'weibo_premission' => '微博设置',
      'weibo_send_info' => '微博提示语',
      'weibo_default_topic' => '微博框默认话题',
      'weibo_at_me' => '@范围配置',
    ),
    'key_type' => 
    array (
      'weibo_nums' => 'text',
      'weibo_type' => 'checkbox',
      'weibo_premission' => 'checkbox',
      'weibo_send_info' => 'text',
      'weibo_default_topic' => 'text',
      'weibo_at_me' => 'radio',
    ),
    'key_default' => 
    array (
      'weibo_nums' => '',
      'weibo_type' => '',
      'weibo_premission' => '',
      'weibo_send_info' => '',
      'weibo_default_topic' => '',
      'weibo_at_me' => '',
    ),
    'key_tishi' => 
    array (
      'weibo_nums' => '',
      'weibo_type' => '',
      'weibo_premission' => '',
      'weibo_send_info' => '',
      'weibo_default_topic' => '不需输入＃号，如：伦敦奥运会',
      'weibo_at_me' => '',
    ),
    'key_javascript' => 
    array (
      'weibo_nums' => '',
      'weibo_type' => '',
      'weibo_premission' => '',
      'weibo_send_info' => '',
      'weibo_default_topic' => '',
      'weibo_at_me' => '',
    ),
  ),
  'admin_Config_navAdd' => 
  array (
    'key' => 
    array (
      'navi_name' => 'navi_name',
      'app_name' => 'app_name',
      'url' => 'url',
      'target' => 'target',
      'status' => 'status',
      'position' => 'position',
      'guest' => 'guest',
      'is_app_navi' => 'is_app_navi',
      'order_sort' => 'order_sort',
    ),
    'key_name' => 
    array (
      'navi_name' => '导航名称',
      'app_name' => '英文名称',
      'url' => '链接地址',
      'target' => '打开方式',
      'status' => '状态',
      'position' => '导航位置',
      'guest' => '是否游客可见',
      'is_app_navi' => '是否应用内部导航',
      'order_sort' => '应用排序',
    ),
    'key_type' => 
    array (
      'navi_name' => 'text',
      'app_name' => 'text',
      'url' => 'text',
      'target' => 'select',
      'status' => 'radio',
      'position' => 'select',
      'guest' => 'hidden',
      'is_app_navi' => 'hidden',
      'order_sort' => 'text',
    ),
    'key_default' => 
    array (
      'navi_name' => '',
      'app_name' => '',
      'url' => '',
      'target' => '',
      'status' => '1',
      'position' => '',
      'guest' => '1',
      'is_app_navi' => '0',
      'order_sort' => '',
    ),
    'key_tishi' => 
    array (
      'navi_name' => '',
      'app_name' => '如核心就是public，通讯录就是contact',
      'url' => '使用{website}表示网站根地址',
      'target' => '',
      'status' => '',
      'position' => '',
      'guest' => '',
      'is_app_navi' => '',
      'order_sort' => '',
    ),
    'key_javascript' => 
    array (
      'navi_name' => '',
      'app_name' => '',
      'url' => '',
      'target' => '',
      'status' => '',
      'position' => '',
      'guest' => '',
      'is_app_navi' => '',
      'order_sort' => '',
    ),
  ),
  'admin_User_findPeopleConfig' => 
  array (
    'key' => 
    array (
      'findPeople' => 'findPeople',
    ),
    'key_name' => 
    array (
      'findPeople' => '全局配置',
    ),
    'key_type' => 
    array (
      'findPeople' => 'checkbox',
    ),
    'key_default' => 
    array (
      'findPeople' => '',
    ),
    'key_tishi' => 
    array (
      'findPeople' => '',
    ),
    'key_javascript' => 
    array (
      'findPeople' => '',
    ),
  ),
  'admin_User_verifyCategory' => 
  array (
    'key' => 
    array (
      'user_verified_category_id' => 'user_verified_category_id',
      'title' => 'title',
      'pCategory' => 'pCategory',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'user_verified_category_id' => '分类ID',
      'title' => '分类名称',
      'pCategory' => '所属认证类型',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'user_verified_category_id' => '0',
      'title' => '0',
      'pCategory' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'user_verified_category_id' => '',
      'title' => '',
      'pCategory' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_creditSet' => 
  array (
    'key' => 
    array (
      'uid_chose' => 'uid_chose',
      'uids' => 'uids',
      'userGroup' => 'userGroup',
      'creditType' => 'creditType',
      'todo' => 'todo',
      'nums' => 'nums',
    ),
    'key_name' => 
    array (
      'uid_chose' => '指定用户',
      'uids' => '用户',
      'userGroup' => '用户组',
      'creditType' => '积分类型',
      'todo' => '操作',
      'nums' => '数量',
    ),
    'key_type' => 
    array (
      'uid_chose' => 'radio',
      'uids' => 'user',
      'userGroup' => 'select',
      'creditType' => 'select',
      'todo' => 'radio',
      'nums' => 'text',
    ),
    'key_default' => 
    array (
      'uid_chose' => '',
      'uids' => '',
      'userGroup' => '',
      'creditType' => '',
      'todo' => '1',
      'nums' => '',
    ),
    'key_tishi' => 
    array (
      'uid_chose' => '',
      'uids' => '',
      'userGroup' => '',
      'creditType' => '',
      'todo' => '',
      'nums' => '',
    ),
    'key_javascript' => 
    array (
      'uid_chose' => 'admin.setCredit(this.value)',
      'uids' => '',
      'userGroup' => '',
      'creditType' => '',
      'todo' => '',
      'nums' => '',
    ),
  ),
  'admin_Task_taskConfig' => 
  array (
    'key' => 
    array (
      'task_switch' => 'task_switch',
    ),
    'key_name' => 
    array (
      'task_switch' => '任务状态',
    ),
    'key_type' => 
    array (
      'task_switch' => 'radio',
    ),
    'key_default' => 
    array (
      'task_switch' => '',
    ),
    'key_tishi' => 
    array (
      'task_switch' => '',
    ),
    'key_javascript' => 
    array (
      'task_switch' => '',
    ),
  ),
  'tipoff_Admin_dealUser' => 
  array (
    'key' => 
    array (
      'dealUser' => 'dealUser',
    ),
    'key_name' => 
    array (
      'dealUser' => '处理人设置',
    ),
    'key_type' => 
    array (
      'dealUser' => 'user',
    ),
    'key_default' => 
    array (
      'dealUser' => '',
    ),
    'key_tishi' => 
    array (
      'dealUser' => '',
    ),
    'key_javascript' => 
    array (
      'dealUser' => '',
    ),
  ),
  'admin_Config_attach' => 
  array (
    'key' => 
    array (
      'attach_path_rule' => 'attach_path_rule',
      'attach_max_size' => 'attach_max_size',
      'attach_allow_extension' => 'attach_allow_extension',
    ),
    'key_name' => 
    array (
      'attach_path_rule' => '目录规则',
      'attach_max_size' => '最大允许值',
      'attach_allow_extension' => '扩展名限定',
    ),
    'key_type' => 
    array (
      'attach_path_rule' => 'text',
      'attach_max_size' => 'text',
      'attach_allow_extension' => 'stringText',
    ),
    'key_default' => 
    array (
      'attach_path_rule' => 'Y/md/H/',
      'attach_max_size' => '2',
      'attach_allow_extension' => 'jpg,gif,png,jpeg,bmp,zip,rar,doc,xls,ppt,docx,xlsx,pptx,pdf',
    ),
    'key_tishi' => 
    array (
      'attach_path_rule' => '注：不建议修改',
      'attach_max_size' => '单位：兆(M) 允许使用小数点。如：0.5或2等',
      'attach_allow_extension' => '按回车添加，多个输入后用英文逗号,分割',
    ),
    'key_javascript' => 
    array (
      'attach_path_rule' => '',
      'attach_max_size' => '',
      'attach_allow_extension' => '',
    ),
  ),
  'admin_Content_template' => 
  array (
    'key' => 
    array (
      'tpl_id' => 'tpl_id',
      'name' => 'name',
      'alias' => 'alias',
      'title' => 'title',
      'body' => 'body',
      'lang' => 'lang',
      'type' => 'type',
      'type2' => 'type2',
      'is_cache' => 'is_cache',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tpl_id' => '模板ID',
      'name' => '名称',
      'alias' => '别名',
      'title' => '标题模板',
      'body' => '内容模板',
      'lang' => '语言',
      'type' => '模板类型',
      'type2' => '模板类型2',
      'is_cache' => '是否默认缓存',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tpl_id' => '0',
      'name' => '0',
      'alias' => '0',
      'title' => '0',
      'body' => '0',
      'lang' => '0',
      'type' => '0',
      'type2' => '0',
      'is_cache' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tpl_id' => '',
      'name' => '',
      'alias' => '',
      'title' => '',
      'body' => '',
      'lang' => '',
      'type' => '',
      'type2' => '',
      'is_cache' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Content_upTemplate' => 
  array (
    'key' => 
    array (
      'tpl_id' => 'tpl_id',
      'name' => 'name',
      'alias' => 'alias',
      'title' => 'title',
      'body' => 'body',
      'lang' => 'lang',
      'type' => 'type',
      'type2' => 'type2',
      'is_cache' => 'is_cache',
    ),
    'key_name' => 
    array (
      'tpl_id' => '模板ID',
      'name' => '名称',
      'alias' => '别名',
      'title' => '标题模板',
      'body' => '内容模板',
      'lang' => '语言',
      'type' => '模板类型',
      'type2' => '模板类型2',
      'is_cache' => '是否默认缓存',
    ),
    'key_type' => 
    array (
      'tpl_id' => 'hidden',
      'name' => 'text',
      'alias' => 'text',
      'title' => 'text',
      'body' => 'textarea',
      'lang' => 'text',
      'type' => 'text',
      'type2' => 'text',
      'is_cache' => 'radio',
    ),
    'key_default' => 
    array (
      'tpl_id' => '',
      'name' => '',
      'alias' => '',
      'title' => '',
      'body' => '',
      'lang' => '',
      'type' => '',
      'type2' => '',
      'is_cache' => '',
    ),
    'key_tishi' => 
    array (
      'tpl_id' => '',
      'name' => '使用英文，保证唯一性。建议：“类型_动作”，如“blog_add”或“credit_blog_add”',
      'alias' => '简单达意，如“发表博客”',
      'title' => '使用“{”和“}”包含变量名，如“{actor}做了{action}”',
      'body' => '使用“{”和“}”包含变量名，如“{actor}做了{action}增加了{volume}个{credit_type}”',
      'lang' => '与全局语言包一致，如“en”、“zh”等',
      'type' => '如“blog”、“credit”等',
      'type2' => '备用类型，可留空。如“credit_blog”等',
      'is_cache' => '是否使用默认的模板缓存系统',
    ),
    'key_javascript' => 
    array (
      'tpl_id' => '',
      'name' => '',
      'alias' => '',
      'title' => '',
      'body' => '',
      'lang' => '',
      'type' => '',
      'type2' => '',
      'is_cache' => '',
    ),
  ),
  'tipoff_Admin_index' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'status' => 'status',
      'open' => 'open',
      'uid' => 'uid',
      'create_time' => 'create_time',
      'publish_time' => 'publish_time',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'status' => '状态',
      'open' => '是否公开',
      'uid' => '发布者',
      'create_time' => '创建时间',
      'publish_time' => '公开时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tipoff_id' => '0',
      'content' => '0',
      'status' => '0',
      'open' => '0',
      'uid' => '0',
      'create_time' => '0',
      'publish_time' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'status' => '',
      'open' => '',
      'uid' => '',
      'create_time' => '',
      'publish_time' => '',
      'DOACTION' => '',
    ),
  ),
  'tipoff_Admin_open' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'status' => 'status',
      'open' => 'open',
      'uid' => 'uid',
      'create_time' => 'create_time',
      'publish_time' => 'publish_time',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'status' => '状态',
      'open' => '是否公开',
      'uid' => '发布者',
      'create_time' => '创建时间',
      'publish_time' => '公开时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tipoff_id' => '0',
      'content' => '0',
      'status' => '0',
      'open' => '0',
      'uid' => '0',
      'create_time' => '0',
      'publish_time' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'status' => '',
      'open' => '',
      'uid' => '',
      'create_time' => '',
      'publish_time' => '',
      'DOACTION' => '',
    ),
  ),
  'tipoff_Admin_bonus' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'status' => 'status',
      'uid' => 'uid',
      'create_time' => 'create_time',
      'publish_time' => 'publish_time',
      'bonus' => 'bonus',
      'is_bonus' => 'is_bonus',
      'bonus_uid' => 'bonus_uid',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'status' => '状态',
      'uid' => '发布者',
      'create_time' => '创建时间',
      'publish_time' => '公开时间',
      'bonus' => '奖金',
      'is_bonus' => '是否发放',
      'bonus_uid' => '发放者',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tipoff_id' => '0',
      'content' => '0',
      'status' => '0',
      'uid' => '0',
      'create_time' => '0',
      'publish_time' => '0',
      'bonus' => '0',
      'is_bonus' => '0',
      'bonus_uid' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'status' => '',
      'uid' => '',
      'create_time' => '',
      'publish_time' => '',
      'bonus' => '',
      'is_bonus' => '',
      'bonus_uid' => '',
      'DOACTION' => '',
    ),
  ),
  'tipoff_Admin_recycle' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'status' => 'status',
      'open' => 'open',
      'uid' => 'uid',
      'create_time' => 'create_time',
      'publish_time' => 'publish_time',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'status' => '状态',
      'open' => '是否公开',
      'uid' => '发布者',
      'create_time' => '创建时间',
      'publish_time' => '公开时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tipoff_id' => '0',
      'content' => '0',
      'status' => '0',
      'open' => '0',
      'uid' => '0',
      'create_time' => '0',
      'publish_time' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'status' => '',
      'open' => '',
      'uid' => '',
      'create_time' => '',
      'publish_time' => '',
      'DOACTION' => '',
    ),
  ),
  'tipoff_Admin_archive' => 
  array (
    'key' => 
    array (
      'tipoff_id' => 'tipoff_id',
      'content' => 'content',
      'status' => 'status',
      'open' => 'open',
      'uid' => 'uid',
      'create_time' => 'create_time',
      'publish_time' => 'publish_time',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'tipoff_id' => '爆料ID',
      'content' => '内容',
      'status' => '状态',
      'open' => '是否公开',
      'uid' => '发布者',
      'create_time' => '创建时间',
      'publish_time' => '公开时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'tipoff_id' => '0',
      'content' => '0',
      'status' => '0',
      'open' => '0',
      'uid' => '0',
      'create_time' => '0',
      'publish_time' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'tipoff_id' => '',
      'content' => '',
      'status' => '',
      'open' => '',
      'uid' => '',
      'create_time' => '',
      'publish_time' => '',
      'DOACTION' => '',
    ),
  ),
  'tipoff_Admin_anonyuser' => 
  array (
    'key' => 
    array (
      'anonyuser' => 'anonyuser',
    ),
    'key_name' => 
    array (
      'anonyuser' => '匿名者UID',
    ),
    'key_type' => 
    array (
      'anonyuser' => 'oneUser',
    ),
    'key_default' => 
    array (
      'anonyuser' => '',
    ),
    'key_tishi' => 
    array (
      'anonyuser' => '',
    ),
    'key_javascript' => 
    array (
      'anonyuser' => '',
    ),
  ),
  'tipoff_Admin_status' => 
  array (
    'key' => 
    array (
      'status' => 'status',
      'title' => 'title',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'status' => '状态',
      'title' => '名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'status' => '0',
      'title' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'status' => '',
      'title' => '',
      'DOACTION' => '',
    ),
  ),
  'tipoff_Admin_tipoffSet' => 
  array (
    'key' => 
    array (
      'tipoff_nums' => 'tipoff_nums',
    ),
    'key_name' => 
    array (
      'tipoff_nums' => '微博字数',
    ),
    'key_type' => 
    array (
      'tipoff_nums' => 'text',
    ),
    'key_default' => 
    array (
      'tipoff_nums' => '0',
    ),
    'key_tishi' => 
    array (
      'tipoff_nums' => '',
    ),
    'key_javascript' => 
    array (
      'tipoff_nums' => '',
    ),
  ),
  'admin_Config_setSeo' => 
  array (
    'key' => 
    array (
      'name' => 'name',
      'title' => 'title',
      'keywords' => 'keywords',
      'des' => 'des',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'name' => '页面名称',
      'title' => '标题',
      'keywords' => '关键字',
      'des' => '页面描述',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'name' => '0',
      'title' => '0',
      'keywords' => '0',
      'des' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'name' => '',
      'title' => '',
      'keywords' => '',
      'des' => '',
      'DOACTION' => '',
    ),
  ),
  'weiba_Admin_editWeiba' => 
  array (
    'key' => 
    array (
      'weiba_id' => 'weiba_id',
      'weiba_name' => 'weiba_name',
      'logo' => 'logo',
      'intro' => 'intro',
      'who_can_post' => 'who_can_post',
      'admin_uid' => 'admin_uid',
      'recommend' => 'recommend',
    ),
    'key_name' => 
    array (
      'weiba_id' => '微吧ID',
      'weiba_name' => '微吧名称',
      'logo' => 'logo',
      'intro' => '微吧简介',
      'who_can_post' => '发帖权限',
      'admin_uid' => '吧主',
      'recommend' => '是否推荐',
    ),
    'key_type' => 
    array (
      'weiba_id' => 'hidden',
      'weiba_name' => 'text',
      'logo' => 'image',
      'intro' => 'textarea',
      'who_can_post' => 'radio',
      'admin_uid' => 'oneUser',
      'recommend' => 'radio',
    ),
    'key_default' => 
    array (
      'weiba_id' => '',
      'weiba_name' => '',
      'logo' => '',
      'intro' => '',
      'who_can_post' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
    'key_tishi' => 
    array (
      'weiba_id' => '',
      'weiba_name' => '',
      'logo' => '附件格式：gif，jpg，jpeg，png，bmp； 附件大小：不超过2M',
      'intro' => '',
      'who_can_post' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
    'key_javascript' => 
    array (
      'weiba_id' => '',
      'weiba_name' => '',
      'logo' => '',
      'intro' => '',
      'who_can_post' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
  ),
  'admin_User_addProfileField' => 
  array (
    'key' => 
    array (
      'field_id' => 'field_id',
      'type' => 'type',
      'field_key' => 'field_key',
      'field_name' => 'field_name',
      'field_type' => 'field_type',
      'visiable' => 'visiable',
      'editable' => 'editable',
      'required' => 'required',
      'privacy' => 'privacy',
      'form_type' => 'form_type',
      'form_default_value' => 'form_default_value',
      'validation' => 'validation',
      'tips' => 'tips',
    ),
    'key_name' => 
    array (
      'field_id' => '字段ID',
      'type' => '类型',
      'field_key' => '字段键值',
      'field_name' => '字段名称',
      'field_type' => '字段类型',
      'visiable' => '是否可见',
      'editable' => '是否可修改',
      'required' => '是否必填',
      'privacy' => '默认隐私设置',
      'form_type' => '表单类型',
      'form_default_value' => '表单默认值',
      'validation' => '表单验证方法',
      'tips' => '字段填写说明',
    ),
    'key_type' => 
    array (
      'field_id' => 'hidden',
      'type' => 'hidden',
      'field_key' => 'text',
      'field_name' => 'text',
      'field_type' => 'select',
      'visiable' => 'radio',
      'editable' => 'radio',
      'required' => 'radio',
      'privacy' => 'hidden',
      'form_type' => 'select',
      'form_default_value' => 'textarea',
      'validation' => 'hidden',
      'tips' => 'hidden',
    ),
    'key_default' => 
    array (
      'field_id' => '',
      'type' => '2',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '1',
      'editable' => '1',
      'required' => '1',
      'privacy' => '0',
      'form_type' => '',
      'form_default_value' => '',
      'validation' => '',
      'tips' => '',
    ),
    'key_tishi' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '',
      'editable' => '',
      'required' => '',
      'privacy' => '',
      'form_type' => '',
      'form_default_value' => '以竖线分隔 例：男|女',
      'validation' => '',
      'tips' => '',
    ),
    'key_javascript' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '',
      'editable' => '',
      'required' => '',
      'privacy' => '',
      'form_type' => '',
      'form_default_value' => '',
      'validation' => '',
      'tips' => '',
    ),
  ),
  'admin_User_editProfileField' => 
  array (
    'key' => 
    array (
      'field_id' => 'field_id',
      'type' => 'type',
      'field_key' => 'field_key',
      'field_name' => 'field_name',
      'field_type' => 'field_type',
      'visiable' => 'visiable',
      'editable' => 'editable',
      'required' => 'required',
      'privacy' => 'privacy',
      'form_type' => 'form_type',
      'form_default_value' => 'form_default_value',
      'validation' => 'validation',
      'tips' => 'tips',
    ),
    'key_name' => 
    array (
      'field_id' => '字段ID',
      'type' => '字段类型',
      'field_key' => '字段键值',
      'field_name' => '字段名称',
      'field_type' => '字段类型',
      'visiable' => '是否可见',
      'editable' => '是否可修改',
      'required' => '是否必填',
      'privacy' => '默认隐私设置',
      'form_type' => '表单类型',
      'form_default_value' => '表单默认值',
      'validation' => '表单验证方法',
      'tips' => '字段填写说明',
    ),
    'key_type' => 
    array (
      'field_id' => 'hidden',
      'type' => 'hidden',
      'field_key' => 'hidden',
      'field_name' => 'text',
      'field_type' => 'select',
      'visiable' => 'radio',
      'editable' => 'radio',
      'required' => 'radio',
      'privacy' => 'hidden',
      'form_type' => 'select',
      'form_default_value' => 'textarea',
      'validation' => 'hidden',
      'tips' => 'hidden',
    ),
    'key_default' => 
    array (
      'field_id' => '',
      'type' => '2',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '1',
      'editable' => '1',
      'required' => '1',
      'privacy' => '0',
      'form_type' => '',
      'form_default_value' => '',
      'validation' => '',
      'tips' => '',
    ),
    'key_tishi' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '',
      'editable' => '',
      'required' => '',
      'privacy' => '',
      'form_type' => '',
      'form_default_value' => '以竖线分隔 例：男|女',
      'validation' => '',
      'tips' => '',
    ),
    'key_javascript' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
      'visiable' => '',
      'editable' => '',
      'required' => '',
      'privacy' => '',
      'form_type' => '',
      'form_default_value' => '',
      'validation' => '',
      'tips' => '',
    ),
  ),
  'admin_Content_addTopic' => 
  array (
    'key' => 
    array (
      'topic_name' => 'topic_name',
      'note' => 'note',
      'domain' => 'domain',
      'des' => 'des',
      'pic' => 'pic',
      'topic_user' => 'topic_user',
      'outlink' => 'outlink',
      'recommend' => 'recommend',
    ),
    'key_name' => 
    array (
      'topic_name' => '话题名称',
      'note' => '话题注释',
      'domain' => '话题域名',
      'des' => '详细说明',
      'pic' => '图片',
      'topic_user' => '话题人物推荐',
      'outlink' => '外链',
      'recommend' => '设为推荐',
    ),
    'key_type' => 
    array (
      'topic_name' => 'text',
      'note' => 'textarea',
      'domain' => 'define',
      'des' => 'textarea',
      'pic' => 'image',
      'topic_user' => 'user',
      'outlink' => 'text',
      'recommend' => 'radio',
    ),
    'key_default' => 
    array (
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '',
      'topic_user' => '',
      'outlink' => '',
      'recommend' => '0',
    ),
    'key_tishi' => 
    array (
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '最佳图片大小为620*200',
      'topic_user' => '前台最多显示12个话题推荐人物',
      'outlink' => '以http://或https://开头',
      'recommend' => '前台最多显示10个热门话题',
    ),
    'key_javascript' => 
    array (
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '',
      'topic_user' => '',
      'outlink' => '',
      'recommend' => '',
    ),
  ),
  'admin_Content_editTopic' => 
  array (
    'key' => 
    array (
      'topic_id' => 'topic_id',
      'topic_name' => 'topic_name',
      'note' => 'note',
      'domain' => 'domain',
      'des' => 'des',
      'pic' => 'pic',
      'topic_user' => 'topic_user',
      'outlink' => 'outlink',
      'recommend' => 'recommend',
    ),
    'key_name' => 
    array (
      'topic_id' => '话题ID',
      'topic_name' => '话题名称',
      'note' => '话题注释',
      'domain' => '话题域名',
      'des' => '详细说明',
      'pic' => '话题图片',
      'topic_user' => '话题人物推荐',
      'outlink' => '添加外链',
      'recommend' => '设置为热门话题推荐',
    ),
    'key_type' => 
    array (
      'topic_id' => 'hidden',
      'topic_name' => 'word',
      'note' => 'textarea',
      'domain' => 'define',
      'des' => 'textarea',
      'pic' => 'image',
      'topic_user' => 'user',
      'outlink' => 'text',
      'recommend' => 'radio',
    ),
    'key_default' => 
    array (
      'topic_id' => '',
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '',
      'topic_user' => '',
      'outlink' => '',
      'recommend' => '',
    ),
    'key_tishi' => 
    array (
      'topic_id' => '',
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '最佳图片大小为620*200',
      'topic_user' => '前台最多显示12个话题推荐人物',
      'outlink' => '以http://或https://开头',
      'recommend' => '前台最多显示10个热门话题',
    ),
    'key_javascript' => 
    array (
      'topic_id' => '',
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '',
      'topic_user' => '',
      'outlink' => '',
      'recommend' => '',
    ),
  ),
  'admin_Home_message' => 
  array (
    'key' => 
    array (
      'user_group_id' => 'user_group_id',
      'content' => 'content',
    ),
    'key_name' => 
    array (
      'user_group_id' => '用户组',
      'content' => '发送内容',
    ),
    'key_type' => 
    array (
      'user_group_id' => 'select',
      'content' => 'editor',
    ),
    'key_default' => 
    array (
      'user_group_id' => '',
      'content' => '',
    ),
    'key_tishi' => 
    array (
      'user_group_id' => '',
      'content' => '内容将在前台系统消息中展示',
    ),
    'key_javascript' => 
    array (
      'user_group_id' => '',
      'content' => '',
    ),
  ),
  'admin_Global_setCreditLevel' => 
  array (
    'key' => 
    array (
      'level' => 'level',
      'name' => 'name',
      'image' => 'image',
      'start' => 'start',
      'end' => 'end',
    ),
    'key_name' => 
    array (
      'level' => '等级',
      'name' => '等级名称',
      'image' => '等级图标',
      'start' => '积分开始值',
      'end' => '积分结束值',
    ),
    'key_type' => 
    array (
      'level' => 'word',
      'name' => 'text',
      'image' => 'image',
      'start' => 'text',
      'end' => 'text',
    ),
    'key_default' => 
    array (
      'level' => '',
      'name' => '',
      'image' => '',
      'start' => '',
      'end' => '',
    ),
    'key_tishi' => 
    array (
      'level' => '',
      'name' => '',
      'image' => '',
      'start' => '',
      'end' => '',
    ),
    'key_javascript' => 
    array (
      'level' => '',
      'name' => '',
      'image' => '',
      'start' => '',
      'end' => '',
    ),
  ),
  'admin_UserGroup_addUsergroup' => 
  array (
    'key' => 
    array (
      'user_group_id' => 'user_group_id',
      'user_group_name' => 'user_group_name',
      'user_group_icon' => 'user_group_icon',
      'user_group_type' => 'user_group_type',
      'is_authenticate' => 'is_authenticate',
    ),
    'key_name' => 
    array (
      'user_group_id' => '用户组ID',
      'user_group_name' => '用户组名称',
      'user_group_icon' => '用户组图标',
      'user_group_type' => '用户组类型',
      'is_authenticate' => '是否为认证组',
    ),
    'key_type' => 
    array (
      'user_group_id' => 'hidden',
      'user_group_name' => 'text',
      'user_group_icon' => 'radio',
      'user_group_type' => 'hidden',
      'is_authenticate' => 'radio',
    ),
    'key_default' => 
    array (
      'user_group_id' => '',
      'user_group_name' => '',
      'user_group_icon' => '-1',
      'user_group_type' => '0',
      'is_authenticate' => '0',
    ),
    'key_tishi' => 
    array (
      'user_group_id' => '',
      'user_group_name' => '',
      'user_group_icon' => '可自由上传图标到addons/theme/stv1/_stastic/image/usergroup，选无则表示该用户组没有图标',
      'user_group_type' => '',
      'is_authenticate' => '',
    ),
    'key_javascript' => 
    array (
      'user_group_id' => '',
      'user_group_name' => '',
      'user_group_icon' => '',
      'user_group_type' => '',
      'is_authenticate' => '',
    ),
  ),
  'admin_User_editProfileCategory' => 
  array (
    'key' => 
    array (
      'field_id' => 'field_id',
      'type' => 'type',
      'field_key' => 'field_key',
      'field_name' => 'field_name',
      'field_type' => 'field_type',
    ),
    'key_name' => 
    array (
      'field_id' => '字段ID',
      'type' => '字段/分类',
      'field_key' => '分类键值',
      'field_name' => '分类名称',
      'field_type' => '上级分类',
    ),
    'key_type' => 
    array (
      'field_id' => 'hidden',
      'type' => 'hidden',
      'field_key' => 'hidden',
      'field_name' => 'text',
      'field_type' => 'hidden',
    ),
    'key_default' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
    ),
    'key_tishi' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
    ),
    'key_javascript' => 
    array (
      'field_id' => '',
      'type' => '',
      'field_key' => '',
      'field_name' => '',
      'field_type' => '',
    ),
  ),
  'admin_User_verifyConfig' => 
  array (
    'key' => 
    array (
      'top_user' => 'top_user',
    ),
    'key_name' => 
    array (
      'top_user' => '置顶用户',
    ),
    'key_type' => 
    array (
      'top_user' => 'user',
    ),
    'key_default' => 
    array (
      'top_user' => '',
    ),
    'key_tishi' => 
    array (
      'top_user' => '前台最多只能展示3个已认证用户',
    ),
    'key_javascript' => 
    array (
      'top_user' => '',
    ),
  ),
  'admin_User_official' => 
  array (
    'key' => 
    array (
      'top_user' => 'top_user',
    ),
    'key_name' => 
    array (
      'top_user' => '置顶用户',
    ),
    'key_type' => 
    array (
      'top_user' => 'user',
    ),
    'key_default' => 
    array (
      'top_user' => '',
    ),
    'key_tishi' => 
    array (
      'top_user' => '前台最多只能展示3个已推荐用户',
    ),
    'key_javascript' => 
    array (
      'top_user' => '',
    ),
  ),
  'admin_Content_topic' => 
  array (
    'key' => 
    array (
      'topic_id' => 'topic_id',
      'topic_name' => 'topic_name',
      'note' => 'note',
      'domain' => 'domain',
      'des' => 'des',
      'pic' => 'pic',
      'topic_user' => 'topic_user',
      'outlink' => 'outlink',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'topic_id' => '话题ID',
      'topic_name' => '话题名称',
      'note' => '话题注释',
      'domain' => '话题域名',
      'des' => '详细说明',
      'pic' => '话题图片',
      'topic_user' => '话题人物推荐',
      'outlink' => '外链',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'topic_id' => '0',
      'topic_name' => '0',
      'note' => '0',
      'domain' => '0',
      'des' => '0',
      'pic' => '0',
      'topic_user' => '0',
      'outlink' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'topic_id' => '',
      'topic_name' => '',
      'note' => '',
      'domain' => '',
      'des' => '',
      'pic' => '',
      'topic_user' => '',
      'outlink' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Home_invatecount' => 
  array (
    'key' => 
    array (
      'invite_record_id' => 'invite_record_id',
      'receiver_uid' => 'receiver_uid',
      'inviter_uid' => 'inviter_uid',
      'is_audit' => 'is_audit',
      'is_active' => 'is_active',
      'is_init' => 'is_init',
      'ctime' => 'ctime',
      'recived_email' => 'recived_email',
    ),
    'key_name' => 
    array (
      'invite_record_id' => '邀请ID',
      'receiver_uid' => '被邀请人',
      'inviter_uid' => '邀请人',
      'is_audit' => '是否审核',
      'is_active' => '是否激活',
      'is_init' => '是否初始化',
      'ctime' => '注册时间',
      'recived_email' => '被邀请人email',
    ),
    'key_hidden' => 
    array (
      'invite_record_id' => '0',
      'receiver_uid' => '0',
      'inviter_uid' => '0',
      'is_audit' => '0',
      'is_active' => '0',
      'is_init' => '0',
      'ctime' => '0',
      'recived_email' => '0',
    ),
    'key_javascript' => 
    array (
      'invite_record_id' => '',
      'receiver_uid' => '',
      'inviter_uid' => '',
      'is_audit' => '',
      'is_active' => '',
      'is_init' => '',
      'ctime' => '',
      'recived_email' => '',
    ),
  ),
  'admin_Home_invateDetail' => 
  array (
    'key' => 
    array (
      'invite_record_id' => 'invite_record_id',
      'receiver_uid' => 'receiver_uid',
      'is_audit' => 'is_audit',
      'is_active' => 'is_active',
      'is_init' => 'is_init',
      'ctime' => 'ctime',
      'recived_email' => 'recived_email',
    ),
    'key_name' => 
    array (
      'invite_record_id' => 'ID',
      'receiver_uid' => '被邀请人',
      'is_audit' => '是否审核',
      'is_active' => '是否激活',
      'is_init' => '是否初始化',
      'ctime' => '注册时间',
      'recived_email' => '被邀请人email',
    ),
    'key_hidden' => 
    array (
      'invite_record_id' => '0',
      'receiver_uid' => '0',
      'is_audit' => '0',
      'is_active' => '0',
      'is_init' => '0',
      'ctime' => '0',
      'recived_email' => '0',
    ),
    'key_javascript' => 
    array (
      'invite_record_id' => '',
      'receiver_uid' => '',
      'is_audit' => '',
      'is_active' => '',
      'is_init' => '',
      'ctime' => '',
      'recived_email' => '',
    ),
  ),
  'admin_Task_editTask' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'task_name' => 'task_name',
      'step_name' => 'step_name',
      'step_desc' => 'step_desc',
      'task_type' => 'task_type',
      'condition' => 'condition',
      'num' => 'num',
      'exp' => 'exp',
      'score' => 'score',
      'action' => 'action',
      'medal' => 'medal',
    ),
    'key_name' => 
    array (
      'id' => '',
      'task_name' => '任务类型',
      'step_name' => '任务名称',
      'step_desc' => '任务说明',
      'task_type' => '',
      'condition' => '',
      'num' => '任务数值',
      'exp' => '经验奖励值',
      'score' => '财富奖励值',
      'action' => '',
      'medal' => '勋章奖励',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'task_name' => 'text',
      'step_name' => 'text',
      'step_desc' => 'text',
      'task_type' => 'hidden',
      'condition' => 'hidden',
      'num' => 'text',
      'exp' => 'text',
      'score' => 'text',
      'action' => 'hidden',
      'medal' => 'select',
    ),
    'key_default' => 
    array (
      'id' => '',
      'task_name' => '',
      'step_name' => '',
      'step_desc' => '',
      'task_type' => '',
      'condition' => '',
      'num' => '',
      'exp' => '',
      'score' => '',
      'action' => '',
      'medal' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'task_name' => '',
      'step_name' => '',
      'step_desc' => '',
      'task_type' => '',
      'condition' => '',
      'num' => '可修改任务里的数值',
      'exp' => '',
      'score' => '',
      'action' => '',
      'medal' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'task_name' => '',
      'step_name' => '',
      'step_desc' => '',
      'task_type' => '',
      'condition' => '',
      'num' => '',
      'exp' => '',
      'score' => '',
      'action' => '',
      'medal' => '',
    ),
  ),
  'admin_Task_editReward' => 
  array (
    'key' => 
    array (
      'task_type' => 'task_type',
      'task_level' => 'task_level',
      'exp' => 'exp',
      'score' => 'score',
      'medal' => 'medal',
    ),
    'key_name' => 
    array (
      'task_type' => '',
      'task_level' => '',
      'exp' => '经验奖励值',
      'score' => '财富奖励值',
      'medal' => '勋章奖励',
    ),
    'key_type' => 
    array (
      'task_type' => 'hidden',
      'task_level' => 'hidden',
      'exp' => 'text',
      'score' => 'text',
      'medal' => 'select',
    ),
    'key_default' => 
    array (
      'task_type' => '',
      'task_level' => '',
      'exp' => '',
      'score' => '',
      'medal' => '',
    ),
    'key_tishi' => 
    array (
      'task_type' => '',
      'task_level' => '',
      'exp' => '',
      'score' => '',
      'medal' => '',
    ),
    'key_javascript' => 
    array (
      'task_type' => '',
      'task_level' => '',
      'exp' => '',
      'score' => '',
      'medal' => '',
    ),
  ),
  'admin_Medal_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'desc' => 'desc',
      'src' => 'src',
      'small_src' => 'small_src',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'name' => '名称',
      'desc' => '描述',
      'src' => '勋章大图',
      'small_src' => '勋章小图',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'name' => '0',
      'desc' => '0',
      'src' => '0',
      'small_src' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'name' => '',
      'desc' => '',
      'src' => '',
      'small_src' => '',
      'DOACTION' => '',
    ),
  ),
  'category_conf_channel_category' => 
  array (
    'key' => 
    array (
      'attach' => 'attach',
      'show_type' => 'show_type',
      'user_bind' => 'user_bind',
      'topic_bind' => 'topic_bind',
    ),
    'key_name' => 
    array (
      'attach' => '分类图片',
      'show_type' => '默认展示方式',
      'user_bind' => '用户绑定',
      'topic_bind' => '话题绑定',
    ),
    'key_type' => 
    array (
      'attach' => 'image',
      'show_type' => 'radio',
      'user_bind' => 'user',
      'topic_bind' => 'stringText',
    ),
    'key_default' => 
    array (
      'attach' => '',
      'show_type' => '',
      'user_bind' => '',
      'topic_bind' => '',
    ),
    'key_tishi' => 
    array (
      'attach' => '',
      'show_type' => '',
      'user_bind' => '',
      'topic_bind' => '不需输入＃号，如：伦敦奥运会',
    ),
    'key_javascript' => 
    array (
      'attach' => '',
      'show_type' => '',
      'user_bind' => '',
      'topic_bind' => '',
    ),
  ),
  'weiba_Admin_weibaAdminAudit' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'follower_uid' => 'follower_uid',
      'follower_uname' => 'follower_uname',
      'weiba_name' => 'weiba_name',
      'type' => 'type',
      'reason' => 'reason',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'follower_uid' => '用户ID',
      'follower_uname' => '昵称',
      'weiba_name' => '微吧名称',
      'type' => '申请类型',
      'reason' => '申请原因',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'follower_uid' => '0',
      'follower_uname' => '0',
      'weiba_name' => '0',
      'type' => '0',
      'reason' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'follower_uid' => '',
      'follower_uname' => '',
      'weiba_name' => '',
      'type' => '',
      'reason' => '',
      'DOACTION' => '',
    ),
  ),
  'channel_Admin_unauditList' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'content' => 'content',
      'status' => 'status',
      'category' => 'category',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uname' => '昵称',
      'content' => '内容',
      'status' => '审核',
      'category' => '分类名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'uname' => '0',
      'content' => '0',
      'status' => '0',
      'category' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'content' => '',
      'status' => '',
      'category' => '',
      'DOACTION' => '',
    ),
  ),
  'channel_Admin_auditList' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'content' => 'content',
      'status' => 'status',
      'category' => 'category',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uname' => '昵称',
      'content' => '内容',
      'status' => '审核',
      'category' => '分类名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'uname' => '0',
      'content' => '0',
      'status' => '0',
      'category' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'content' => '',
      'status' => '',
      'category' => '',
      'DOACTION' => '',
    ),
  ),
  'vtask_Admin_open' => false,
  'vtask_Admin_bonus' => false,
  'vtask_Admin_recycle' => false,
  'vtask_Admin_archive' => false,
  'vtask_Admin_anonyuser' => 
  array (
    'key' => 
    array (
      'anonyuser' => 'anonyuser',
    ),
    'key_name' => 
    array (
      'anonyuser' => '匿名者UID',
    ),
    'key_type' => 
    array (
      'anonyuser' => 'oneUser',
    ),
    'key_default' => 
    array (
      'anonyuser' => '',
    ),
    'key_tishi' => 
    array (
      'anonyuser' => '',
    ),
    'key_javascript' => 
    array (
      'anonyuser' => '',
    ),
  ),
  'vtask_Admin_status' => 
  array (
    'key' => 
    array (
      'status' => 'status',
      'title' => 'title',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'status' => '状态',
      'title' => '名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'status' => '0',
      'title' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'status' => '',
      'title' => '',
      'DOACTION' => '',
    ),
  ),
  'vtask_Admin_vtaskSet' => false,
  'vtask_Admin_vtaskSource' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'source_url' => 'source_url',
      'source_key' => 'source_key',
      'source_ip' => 'source_ip',
      'ctime' => 'ctime',
      'ftime' => 'ftime',
      'status' => 'status',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '来源名称',
      'source_url' => '来源网址',
      'source_key' => '密匙',
      'source_ip' => '来源IP',
      'ctime' => '创建时间',
      'ftime' => '失效时间',
      'status' => '是否有效',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'source_url' => '0',
      'source_key' => '0',
      'source_ip' => '0',
      'ctime' => '0',
      'ftime' => '0',
      'status' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'source_url' => '',
      'source_key' => '',
      'source_ip' => '',
      'ctime' => '',
      'ftime' => '',
      'status' => '',
      'DOACTION' => '',
    ),
  ),
  'vtask_Admin_addSource' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'source_url' => 'source_url',
      'source_key' => 'source_key',
      'source_ip' => 'source_ip',
      'ftime' => 'ftime',
    ),
    'key_name' => 
    array (
      'title' => '来源名称',
      'source_url' => '来源网址',
      'source_key' => '密匙',
      'source_ip' => '来源IP',
      'ftime' => '失效时间',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'source_url' => 'text',
      'source_key' => 'text',
      'source_ip' => 'text',
      'ftime' => 'date',
    ),
    'key_default' => 
    array (
      'title' => '',
      'source_url' => '',
      'source_key' => '',
      'source_ip' => '',
      'ftime' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'source_url' => '',
      'source_key' => '留空则根据网站规则自动生成',
      'source_ip' => '',
      'ftime' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'source_url' => '',
      'source_key' => '',
      'source_ip' => '',
      'ftime' => '',
    ),
  ),
  'vtask_Admin_editSource' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'source_url' => 'source_url',
      'source_key' => 'source_key',
      'source_ip' => 'source_ip',
      'ftime' => 'ftime',
    ),
    'key_name' => 
    array (
      'title' => '来源名称',
      'source_url' => '来源网址',
      'source_key' => '密匙',
      'source_ip' => '来源IP',
      'ftime' => '失效时间',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'source_url' => 'text',
      'source_key' => 'text',
      'source_ip' => 'text',
      'ftime' => 'date',
    ),
    'key_default' => 
    array (
      'title' => '',
      'source_url' => '',
      'source_key' => '',
      'source_ip' => '',
      'ftime' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'source_url' => '',
      'source_key' => '',
      'source_ip' => '',
      'ftime' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'source_url' => '',
      'source_key' => '',
      'source_ip' => '',
      'ftime' => '',
    ),
  ),
  'channel_Admin_index' => 
  array (
    'key' => 
    array (
      'is_audit' => 'is_audit',
      'default_category' => 'default_category',
      'show_type' => 'show_type',
    ),
    'key_name' => 
    array (
      'is_audit' => '是否审核',
      'default_category' => '默认分类',
      'show_type' => '展示风格',
    ),
    'key_type' => 
    array (
      'is_audit' => 'radio',
      'default_category' => 'select',
      'show_type' => 'radio',
    ),
    'key_default' => 
    array (
      'is_audit' => '',
      'default_category' => '',
      'show_type' => '',
    ),
    'key_tishi' => 
    array (
      'is_audit' => '',
      'default_category' => '',
      'show_type' => '',
    ),
    'key_javascript' => 
    array (
      'is_audit' => '',
      'default_category' => '',
      'show_type' => '',
    ),
  ),
  'admin_Task_addTask' => 
  array (
    'key' => 
    array (
      'task_name' => 'task_name',
      'task_desc' => 'task_desc',
      'end_time1' => 'end_time1',
      'userlevel' => 'userlevel',
      'usergroup' => 'usergroup',
      'reg_time1' => 'reg_time1',
      'topic' => 'topic',
      'task_condition' => 'task_condition',
      'num' => 'num',
      'exp' => 'exp',
      'score' => 'score',
      'attach_id' => 'attach_id',
      'attach_small' => 'attach_small',
      'medal_name' => 'medal_name',
      'medal_desc' => 'medal_desc',
    ),
    'key_name' => 
    array (
      'task_name' => '任务名称',
      'task_desc' => '任务描述',
      'end_time1' => '领取时间',
      'userlevel' => '用户等级',
      'usergroup' => '用户组',
      'reg_time1' => '注册时间',
      'topic' => '话题',
      'task_condition' => '任务条件',
      'num' => '领取数量',
      'exp' => '经验',
      'score' => '财富',
      'attach_id' => '上传勋章大图',
      'attach_small' => '上传勋章小图',
      'medal_name' => '勋章名称',
      'medal_desc' => '勋章描述',
    ),
    'key_type' => 
    array (
      'task_name' => 'text',
      'task_desc' => 'textarea',
      'end_time1' => 'date',
      'userlevel' => 'checkbox',
      'usergroup' => 'checkbox',
      'reg_time1' => 'date',
      'topic' => 'text',
      'task_condition' => 'select',
      'num' => 'text',
      'exp' => 'text',
      'score' => 'text',
      'attach_id' => 'image',
      'attach_small' => 'image',
      'medal_name' => 'text',
      'medal_desc' => 'text',
    ),
    'key_default' => 
    array (
      'task_name' => '',
      'task_desc' => '',
      'end_time1' => '',
      'userlevel' => '',
      'usergroup' => '',
      'reg_time1' => '',
      'topic' => '',
      'task_condition' => '',
      'num' => '',
      'exp' => '',
      'score' => '',
      'attach_id' => '',
      'attach_small' => '',
      'medal_name' => '',
      'medal_desc' => '',
    ),
    'key_tishi' => 
    array (
      'task_name' => '',
      'task_desc' => '',
      'end_time1' => '',
      'userlevel' => '',
      'usergroup' => '',
      'reg_time1' => '',
      'topic' => '',
      'task_condition' => '',
      'num' => '',
      'exp' => '',
      'score' => '',
      'attach_id' => '100x100',
      'attach_small' => '30x30',
      'medal_name' => '',
      'medal_desc' => '',
    ),
    'key_javascript' => 
    array (
      'task_name' => '',
      'task_desc' => '',
      'end_time1' => '',
      'userlevel' => '',
      'usergroup' => '',
      'reg_time1' => '',
      'topic' => '',
      'task_condition' => '',
      'num' => '',
      'exp' => '',
      'score' => '',
      'attach_id' => '',
      'attach_small' => '',
      'medal_name' => '',
      'medal_desc' => '',
    ),
  ),
  'admin_Medal_addMedal' => 
  array (
    'key' => 
    array (
      'name' => 'name',
      'desc' => 'desc',
      'src' => 'src',
      'small_src' => 'small_src',
    ),
    'key_name' => 
    array (
      'name' => '勋章名称',
      'desc' => '勋章描述',
      'src' => '上传勋章大图',
      'small_src' => '上传勋章小图',
    ),
    'key_type' => 
    array (
      'name' => 'text',
      'desc' => 'text',
      'src' => 'image',
      'small_src' => 'image',
    ),
    'key_default' => 
    array (
      'name' => '',
      'desc' => '',
      'src' => '',
      'small_src' => '',
    ),
    'key_tishi' => 
    array (
      'name' => '',
      'desc' => '',
      'src' => '100x100',
      'small_src' => '30x30',
    ),
    'key_javascript' => 
    array (
      'name' => '',
      'desc' => '',
      'src' => '',
      'small_src' => '',
    ),
  ),
  'admin_Medal_addUserMedal' => 
  array (
    'key' => 
    array (
      'user' => 'user',
      'medal' => 'medal',
      'attach_id' => 'attach_id',
      'attach_small' => 'attach_small',
      'medal_name' => 'medal_name',
      'medal_desc' => 'medal_desc',
      'desc' => 'desc',
    ),
    'key_name' => 
    array (
      'user' => '用户名',
      'medal' => '选择勋章',
      'attach_id' => '上传勋章大图',
      'attach_small' => '上传勋章小图',
      'medal_name' => '勋章名称',
      'medal_desc' => '勋章描述',
      'desc' => '颁发描述',
    ),
    'key_type' => 
    array (
      'user' => 'user',
      'medal' => 'select',
      'attach_id' => 'image',
      'attach_small' => 'text',
      'medal_name' => 'text',
      'medal_desc' => 'text',
      'desc' => 'text',
    ),
    'key_default' => 
    array (
      'user' => '',
      'medal' => '',
      'attach_id' => '',
      'attach_small' => '',
      'medal_name' => '',
      'medal_desc' => '',
      'desc' => '',
    ),
    'key_tishi' => 
    array (
      'user' => '',
      'medal' => '',
      'attach_id' => '100x100',
      'attach_small' => '30x30',
      'medal_name' => '',
      'medal_desc' => '',
      'desc' => '',
    ),
    'key_javascript' => 
    array (
      'user' => '',
      'medal' => 'admin.addmedal(this.value)',
      'attach_id' => '',
      'attach_small' => '',
      'medal_name' => '',
      'medal_desc' => '',
      'desc' => '',
    ),
  ),
  'admin_Home_cacheConfig' => 
  array (
    'key' => 
    array (
      'cachetype' => 'cachetype',
      'cachesetting' => 'cachesetting',
      'status' => 'status',
    ),
    'key_name' => 
    array (
      'cachetype' => '缓存类型',
      'cachesetting' => '缓存配置',
      'status' => '运行状态',
    ),
    'key_type' => 
    array (
      'cachetype' => 'radio',
      'cachesetting' => 'text',
      'status' => 'radio',
    ),
    'key_default' => 
    array (
      'cachetype' => '',
      'cachesetting' => '',
    ),
    'key_tishi' => 
    array (
      'cachetype' => '',
      'cachesetting' => '',
    ),
    'key_javascript' => 
    array (
      'cachetype' => '',
      'cachesetting' => '',
    ),
  ),
  'category_conf_vtask_status' => 
  array (
    'key' => 
    array (
      'color' => 'color',
      'font' => 'font',
    ),
    'key_name' => 
    array (
      'color' => '',
      'font' => '',
    ),
    'key_type' => 
    array (
      'color' => 'color',
      'font' => 'color',
    ),
    'key_default' => 
    array (
      'color' => '',
      'font' => '',
    ),
    'key_tishi' => 
    array (
      'color' => '',
      'font' => '',
    ),
    'key_javascript' => 
    array (
      'color' => '',
      'font' => '',
    ),
  ),
  'vtask_Admin_index' => 
  array (
    'key' => 
    array (
      'notify_conf' => 'notify_conf',
      'deal_uids' => 'deal_uids',
    ),
    'key_name' => 
    array (
      'notify_conf' => '通知设置',
      'deal_uids' => '处理人设置',
    ),
    'key_type' => 
    array (
      'notify_conf' => 'checkbox',
      'deal_uids' => 'user',
    ),
    'key_default' => 
    array (
      'notify_conf' => '',
      'deal_uids' => '',
    ),
    'key_tishi' => 
    array (
      'notify_conf' => '',
      'deal_uids' => '',
    ),
    'key_javascript' => 
    array (
      'notify_conf' => '',
      'deal_uids' => '',
    ),
  ),
  'admin_Config_footNav' => 
  array (
    'key' => 
    array (
      'navi_id' => 'navi_id',
      'navi_name' => 'navi_name',
      'app_name' => 'app_name',
      'url' => 'url',
      'target' => 'target',
      'status' => 'status',
      'position' => 'position',
      'guest' => 'guest',
      'is_app_navi' => 'is_app_navi',
      'parent_id' => 'parent_id',
      'order_sort' => 'order_sort',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'navi_id' => '导航ID',
      'navi_name' => '导航名称',
      'app_name' => '英文名称',
      'url' => '链接地址',
      'target' => '打开方式',
      'status' => '状态',
      'position' => '导航位置',
      'guest' => '游客可见',
      'is_app_navi' => '应用内容导航',
      'parent_id' => '父导航',
      'order_sort' => '应用排序',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'navi_id' => '0',
      'navi_name' => '0',
      'app_name' => '0',
      'url' => '0',
      'target' => '0',
      'status' => '0',
      'position' => '0',
      'guest' => '1',
      'is_app_navi' => '1',
      'parent_id' => '1',
      'order_sort' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'navi_id' => '',
      'navi_name' => '',
      'app_name' => '',
      'url' => '',
      'target' => '',
      'status' => '',
      'position' => '',
      'guest' => '',
      'is_app_navi' => '',
      'parent_id' => '',
      'order_sort' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_compareLangFile' => 
  array (
    'key' => 
    array (
      'key' => 'key',
      'appname' => 'appname',
      'filetype' => 'filetype',
      'zh-cn' => 'zh-cn',
      'en' => 'en',
      'zh-tw' => 'zh-tw',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'key' => '语言KEY',
      'appname' => '应用名称',
      'filetype' => '文件类型',
      'zh-cn' => '简体',
      'en' => '英文',
      'zh-tw' => '繁体',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'key' => '0',
      'appname' => '0',
      'filetype' => '0',
      'zh-cn' => '0',
      'en' => '0',
      'zh-tw' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'key' => '',
      'appname' => '',
      'filetype' => '',
      'zh-cn' => '',
      'en' => '',
      'zh-tw' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_updateAdminTab' => 
  array (
    'key' => 
    array (
      'key' => 'key',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'key' => '页面KEY',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'key' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'key' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_onLineApp' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'type' => 'type',
      'download_count' => 'download_count',
      'user' => 'user',
      'option' => 'option',
    ),
    'key_name' => 
    array (
      'title' => '应用名',
      'type' => '类型',
      'download_count' => '下载次数',
      'user' => '开发者',
      'option' => '操作',
    ),
    'key_hidden' => 
    array (
      'title' => '0',
      'type' => '0',
      'download_count' => '0',
      'user' => '0',
      'option' => '0',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'type' => '',
      'download_count' => '',
      'user' => '',
      'option' => '',
    ),
  ),
  'page_Admin_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'page_name' => 'page_name',
      'domain' => 'domain',
      'canvas' => 'canvas',
      'manager' => 'manager',
      'visit_count' => 'visit_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'page_name' => '页面名',
      'domain' => '域名',
      'canvas' => '画布',
      'manager' => '管理员',
      'visit_count' => '访问量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'page_name' => '0',
      'domain' => '0',
      'canvas' => '0',
      'manager' => '0',
      'visit_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'manager' => '',
      'visit_count' => '',
      'DOACTION' => '',
    ),
  ),
  'page_Admin_addPage' => 
  array (
    'key' => 
    array (
      'page_name' => 'page_name',
      'domain' => 'domain',
      'canvas' => 'canvas',
      'status' => 'status',
      'guest' => 'guest',
      'seo_title' => 'seo_title',
      'seo_keywords' => 'seo_keywords',
      'seo_description' => 'seo_description',
    ),
    'key_name' => 
    array (
      'page_name' => '名称',
      'domain' => '域名',
      'canvas' => '画布',
      'status' => '状态',
      'guest' => '游客',
      'seo_title' => 'SEO标题',
      'seo_keywords' => 'SEO关键词',
      'seo_description' => 'SEO描述',
    ),
    'key_type' => 
    array (
      'page_name' => 'text',
      'domain' => 'text',
      'canvas' => 'select',
      'status' => 'radio',
      'guest' => 'radio',
      'seo_title' => 'text',
      'seo_keywords' => 'text',
      'seo_description' => 'text',
    ),
    'key_default' => 
    array (
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'status' => '',
      'guest' => '',
      'seo_title' => '',
      'seo_keywords' => '',
      'seo_description' => '',
    ),
    'key_tishi' => 
    array (
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'status' => '',
      'guest' => '',
      'seo_title' => '',
      'seo_keywords' => '',
      'seo_description' => '',
    ),
    'key_javascript' => 
    array (
      'page_name' => '',
      'domain' => '',
      'canvas' => '',
      'status' => '',
      'guest' => '',
      'seo_title' => '',
      'seo_keywords' => '',
      'seo_description' => '',
    ),
  ),
  'admin_Apps_preinstall' => 
  array (
    'key' => 
    array (
      'app_id' => 'app_id',
      'app_name' => 'app_name',
      'app_alias' => 'app_alias',
      'app_entry' => 'app_entry',
      'description' => 'description',
      'status' => 'status',
      'host_type' => 'host_type',
      'icon_url' => 'icon_url',
      'large_icon_url' => 'large_icon_url',
      'admin_entry' => 'admin_entry',
      'statistics_entry' => 'statistics_entry',
      'company_name' => 'company_name',
      'display_order' => 'display_order',
      'version' => 'version',
      'api_key' => 'api_key',
      'secure_key' => 'secure_key',
      'add_front_top' => 'add_front_top',
      'add_front_applist' => 'add_front_applist',
      'add_tonav' => 'add_tonav',
    ),
    'key_name' => 
    array (
      'app_id' => '应用ID',
      'app_name' => '应用英文名',
      'app_alias' => '应用名称',
      'app_entry' => '前台入口',
      'description' => '应用描述',
      'status' => '应用状态',
      'host_type' => '托管类别',
      'icon_url' => '图标地址',
      'large_icon_url' => '大图标地址',
      'admin_entry' => '后台入口',
      'statistics_entry' => '统计入口',
      'company_name' => '公司名称',
      'display_order' => '排序',
      'version' => '版本',
      'api_key' => 'API_KEY',
      'secure_key' => 'SECURE_KEY',
      'add_front_top' => '添加到前台应用框',
      'add_front_applist' => '添加到前台应用列表',
      'add_tonav' => '添加到导航',
    ),
    'key_type' => 
    array (
      'app_id' => 'hidden',
      'app_name' => 'hidden',
      'app_alias' => 'text',
      'app_entry' => 'hidden',
      'description' => 'textarea',
      'status' => 'radio',
      'host_type' => 'hidden',
      'icon_url' => 'hidden',
      'large_icon_url' => 'hidden',
      'admin_entry' => 'hidden',
      'statistics_entry' => 'hidden',
      'company_name' => 'text',
      'display_order' => 'hidden',
      'version' => 'text',
      'api_key' => 'hidden',
      'secure_key' => 'hidden',
      'add_front_top' => 'radio',
      'add_front_applist' => 'radio',
      'add_tonav' => 'radio',
    ),
    'key_default' => 
    array (
      'app_id' => '',
      'app_name' => '',
      'app_alias' => '',
      'app_entry' => '',
      'description' => '',
      'status' => '1',
      'host_type' => '',
      'icon_url' => '',
      'large_icon_url' => '',
      'admin_entry' => '',
      'statistics_entry' => '',
      'company_name' => '智士软件',
      'display_order' => '',
      'version' => '',
      'api_key' => '',
      'secure_key' => '',
      'add_front_top' => '1',
      'add_front_applist' => '1',
      'add_tonav' => '1',
    ),
    'key_tishi' => 
    array (
      'app_id' => '',
      'app_name' => '',
      'app_alias' => '前台展示的应用名称（必填）',
      'app_entry' => '',
      'description' => '前台展示的应用简介',
      'status' => '',
      'host_type' => '',
      'icon_url' => '',
      'large_icon_url' => '',
      'admin_entry' => '',
      'statistics_entry' => '',
      'company_name' => '',
      'display_order' => '',
      'version' => '',
      'api_key' => '',
      'secure_key' => '',
      'add_front_top' => '',
      'add_front_applist' => '',
      'add_tonav' => '',
    ),
    'key_javascript' => 
    array (
      'app_id' => '',
      'app_name' => '',
      'app_alias' => '',
      'app_entry' => '',
      'description' => '',
      'status' => '',
      'host_type' => '',
      'icon_url' => '',
      'large_icon_url' => '',
      'admin_entry' => '',
      'statistics_entry' => '',
      'company_name' => '',
      'display_order' => '',
      'version' => '',
      'api_key' => '',
      'secure_key' => '',
      'add_front_top' => '',
      'add_front_applist' => '',
      'add_tonav' => '',
    ),
  ),
  'admin_Config_attachimage' => 
  array (
    'key' => 
    array (
      'attach_max_size' => 'attach_max_size',
      'attach_allow_extension' => 'attach_allow_extension',
      'auto_thumb' => 'auto_thumb',
    ),
    'key_name' => 
    array (
      'attach_max_size' => '最大允许值',
      'attach_allow_extension' => '扩展名限定',
      'auto_thumb' => '自动缩略',
    ),
    'key_type' => 
    array (
      'attach_max_size' => 'text',
      'attach_allow_extension' => 'stringText',
      'auto_thumb' => 'radio',
    ),
    'key_default' => 
    array (
      'attach_max_size' => '1',
      'attach_allow_extension' => 'jpg,gif,png,jpeg',
      'auto_thumb' => '',
    ),
    'key_tishi' => 
    array (
      'attach_max_size' => '单位：兆(M) 允许使用小数点。如：0.5或2等',
      'attach_allow_extension' => '按回车添加，多个输入后用英文逗号,分割',
      'auto_thumb' => '可配置 800x800，这个缩图直接覆盖原图',
    ),
    'key_javascript' => 
    array (
      'attach_max_size' => '',
      'attach_allow_extension' => '',
      'auto_thumb' => '',
    ),
  ),
  'admin_Config_guest' => 
  array (
    'key' => 
    array (
      'weiba/Index/index' => 'weiba/Index/index',
      'weiba/Index/detail' => 'weiba/Index/detail',
      'weiba/Index/postDetail' => 'weiba/Index/postDetail',
      'weiba/Index/postList' => 'weiba/Index/postList',
      'weiba/Index/weibaList' => 'weiba/Index/weibaList',
      'people/Index/*' => 'people/Index/*',
      'develop/Index/*' => 'develop/Index/*',
      'develop/Public/*' => 'develop/Public/*',
      'channel/Index/*' => 'channel/Index/*',
    ),
    'key_name' => 
    array (
      'weiba/Index/index' => '微吧首页',
      'weiba/Index/detail' => '微吧详情',
      'weiba/Index/postDetail' => '微吧帖子详情',
      'weiba/Index/postList' => '微吧帖子列表',
      'weiba/Index/weibaList' => '微吧列表',
      'people/Index/*' => '找人',
      'develop/Index/*' => '前台应用商店',
      'develop/Public/*' => '后台应用商店',
      'channel/Index/*' => '频道',
    ),
    'key_type' => 
    array (
      'weiba/Index/index' => 'radio',
      'weiba/Index/detail' => 'radio',
      'weiba/Index/postDetail' => 'radio',
      'weiba/Index/postList' => 'radio',
      'weiba/Index/weibaList' => 'radio',
      'people/Index/*' => 'radio',
      'develop/Index/*' => 'radio',
      'develop/Public/*' => 'radio',
      'channel/Index/*' => 'radio',
    ),
    'key_default' => 
    array (
      'weiba/Index/index' => '',
      'weiba/Index/detail' => '',
      'weiba/Index/postDetail' => '',
      'weiba/Index/postList' => '',
      'weiba/Index/weibaList' => '',
      'people/Index/*' => '',
      'develop/Index/*' => '',
      'develop/Public/*' => '',
      'channel/Index/*' => '',
    ),
    'key_tishi' => 
    array (
      'weiba/Index/index' => '',
      'weiba/Index/detail' => '',
      'weiba/Index/postDetail' => '',
      'weiba/Index/postList' => '',
      'weiba/Index/weibaList' => '',
      'people/Index/*' => '',
      'develop/Index/*' => '',
      'develop/Public/*' => '',
      'channel/Index/*' => '',
    ),
    'key_javascript' => 
    array (
      'weiba/Index/index' => '',
      'weiba/Index/detail' => '',
      'weiba/Index/postDetail' => '',
      'weiba/Index/postList' => '',
      'weiba/Index/weibaList' => '',
      'people/Index/*' => '',
      'develop/Index/*' => '',
      'develop/Public/*' => '',
      'channel/Index/*' => '',
    ),
  ),
  'weiba_Admin_index' => 
  array (
    'key' => 
    array (
      'weiba_id' => 'weiba_id',
      'weiba_name' => 'weiba_name',
      'weiba_cate' => 'weiba_cate',
      'logo' => 'logo',
      'uid' => 'uid',
      'ctime' => 'ctime',
      'admin_uid' => 'admin_uid',
      'follower_count/thread_count' => 'follower_count/thread_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'weiba_id' => '微吧ID',
      'weiba_name' => '微吧名称',
      'weiba_cate' => '微吧分类',
      'logo' => 'logo',
      'uid' => '创建者',
      'ctime' => '创建时间',
      'admin_uid' => '吧主',
      'follower_count/thread_count' => '成员数/帖子数',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'weiba_id' => '0',
      'weiba_name' => '0',
      'weiba_cate' => '0',
      'logo' => '0',
      'uid' => '0',
      'ctime' => '0',
      'admin_uid' => '0',
      'follower_count/thread_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'weiba_id' => '',
      'weiba_name' => '',
      'weiba_cate' => '',
      'logo' => '',
      'uid' => '',
      'ctime' => '',
      'admin_uid' => '',
      'follower_count/thread_count' => '',
      'DOACTION' => '',
    ),
  ),
  'weiba_Admin_weibaCate' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'name' => 'name',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '分类ID',
      'name' => '分类名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'name' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'name' => '',
      'DOACTION' => '',
    ),
  ),
  'weiba_Admin_addWeibaCate' => 
  array (
    'key' => 
    array (
      'name' => 'name',
    ),
    'key_name' => 
    array (
      'name' => '分类名称',
    ),
    'key_type' => 
    array (
      'name' => 'text',
    ),
    'key_default' => 
    array (
      'name' => '',
    ),
    'key_tishi' => 
    array (
      'name' => '',
    ),
    'key_javascript' => 
    array (
      'name' => '',
    ),
  ),
  'weiba_Admin_editWeibaCate' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'name' => 'name',
    ),
    'key_name' => 
    array (
      'id' => '分类ID',
      'name' => '分类名称',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'name' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'name' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'name' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'name' => '',
    ),
  ),
  'weiba_Admin_addWeiba' => 
  array (
    'key' => 
    array (
      'weiba_name' => 'weiba_name',
      'cid' => 'cid',
      'logo' => 'logo',
      'intro' => 'intro',
      'who_can_post' => 'who_can_post',
      'admin_uid' => 'admin_uid',
      'recommend' => 'recommend',
    ),
    'key_name' => 
    array (
      'weiba_name' => '微吧名称',
      'cid' => '微吧分类',
      'logo' => 'logo',
      'intro' => '微吧简介',
      'who_can_post' => '发帖权限',
      'admin_uid' => '吧主',
      'recommend' => '是否推荐',
    ),
    'key_type' => 
    array (
      'weiba_name' => 'text',
      'cid' => 'select',
      'logo' => 'image',
      'intro' => 'textarea',
      'who_can_post' => 'radio',
      'admin_uid' => 'oneUser',
      'recommend' => 'radio',
    ),
    'key_default' => 
    array (
      'weiba_name' => '',
      'cid' => '',
      'logo' => '',
      'intro' => '',
      'who_can_post' => '0',
      'admin_uid' => '',
      'recommend' => '0',
    ),
    'key_tishi' => 
    array (
      'weiba_name' => '',
      'cid' => '',
      'logo' => '附件格式：gif，jpg，jpeg，png，bmp； 附件大小：不超过2M',
      'intro' => '',
      'who_can_post' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
    'key_javascript' => 
    array (
      'weiba_name' => '',
      'cid' => '',
      'logo' => '',
      'intro' => '',
      'who_can_post' => '',
      'admin_uid' => '',
      'recommend' => '',
    ),
  ),
  'admin_Config_guestNav' => 
  array (
    'key' => 
    array (
      'navi_id' => 'navi_id',
      'navi_name' => 'navi_name',
      'app_name' => 'app_name',
      'url' => 'url',
      'target' => 'target',
      'status' => 'status',
      'position' => 'position',
      'guest' => 'guest',
      'is_app_navi' => 'is_app_navi',
      'parent_id' => 'parent_id',
      'order_sort' => 'order_sort',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'navi_id' => '导航ID',
      'navi_name' => '导航名称',
      'app_name' => '英文名称',
      'url' => '链接地址',
      'target' => '打开方式',
      'status' => '状态',
      'position' => '导航位置',
      'guest' => '游客可见',
      'is_app_navi' => '应用内部导航',
      'parent_id' => '父导航',
      'order_sort' => '排序',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'navi_id' => '0',
      'navi_name' => '0',
      'app_name' => '0',
      'url' => '0',
      'target' => '0',
      'status' => '0',
      'position' => '0',
      'guest' => '1',
      'is_app_navi' => '1',
      'parent_id' => '0',
      'order_sort' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'navi_id' => '',
      'navi_name' => '',
      'app_name' => '',
      'url' => '',
      'target' => '',
      'status' => '',
      'position' => '',
      'guest' => '',
      'is_app_navi' => '',
      'parent_id' => '',
      'order_sort' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_UserGroup_index' => 
  array (
    'key' => 
    array (
      'user_group_id' => 'user_group_id',
      'app_name' => 'app_name',
      'user_group_name' => 'user_group_name',
      'user_group_type' => 'user_group_type',
      'user_group_icon' => 'user_group_icon',
      'is_authenticate' => 'is_authenticate',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'user_group_id' => '用户组ID',
      'app_name' => '应用名',
      'user_group_name' => '用户组名称',
      'user_group_type' => '用户组类型',
      'user_group_icon' => '用户组图标',
      'is_authenticate' => '是否为认证组',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'user_group_id' => '0',
      'app_name' => '0',
      'user_group_name' => '0',
      'user_group_type' => '0',
      'user_group_icon' => '0',
      'is_authenticate' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'user_group_id' => '',
      'app_name' => '',
      'user_group_name' => '',
      'user_group_type' => '',
      'user_group_icon' => '',
      'is_authenticate' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_setUcenter' => 
  array (
    'key' => 
    array (
      'ucenter_open' => 'ucenter_open',
      'ucenter_config' => 'ucenter_config',
    ),
    'key_name' => 
    array (
      'ucenter_open' => 'Ucenter 同步开关',
      'ucenter_config' => 'Ucenter 配置信息',
    ),
    'key_type' => 
    array (
      'ucenter_open' => 'radio',
      'ucenter_config' => 'textarea',
    ),
    'key_default' => 
    array (
      'ucenter_open' => '',
      'ucenter_config' => '',
    ),
    'key_tishi' => 
    array (
      'ucenter_open' => '',
      'ucenter_config' => '',
    ),
    'key_javascript' => 
    array (
      'ucenter_open' => '',
      'ucenter_config' => '',
    ),
  ),
  'admin_Content_feed' => 
  array (
    'key' => 
    array (
      'feed_id' => 'feed_id',
      'uid' => 'uid',
      'uname' => 'uname',
      'data' => 'data',
      'publish_time' => 'publish_time',
      'type' => 'type',
      'from' => 'from',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'feed_id' => '动态ID',
      'uid' => '用户ID',
      'uname' => '用户名',
      'data' => '数据',
      'publish_time' => '发布时间',
      'type' => '微博类型',
      'from' => '来自',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'feed_id' => '0',
      'uid' => '0',
      'uname' => '0',
      'data' => '0',
      'publish_time' => '0',
      'type' => '0',
      'from' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'feed_id' => '',
      'uid' => '',
      'uname' => '',
      'data' => '',
      'publish_time' => '',
      'type' => '',
      'from' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminReview_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'review_description' => 'review_description',
      'star' => 'star',
      'type' => 'type',
      'parent_id' => 'parent_id',
      'uid' => 'uid',
      'oid' => 'oid',
      'review_vote_count' => 'review_vote_count',
      'review_comment_count' => 'review_comment_count',
      'review_source' => 'review_source',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'review_description' => '点评内容',
      'star' => '星级',
      'type' => '点评类型',
      'parent_id' => '父级ID',
      'uid' => '用户名称',
      'oid' => '课程/专辑名称',
      'review_vote_count' => '投票数量',
      'review_comment_count' => '评论数量',
      'review_source' => '点评来源',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'review_description' => '0',
      'star' => '0',
      'type' => '0',
      'parent_id' => '1',
      'uid' => '0',
      'oid' => '0',
      'review_vote_count' => '0',
      'review_comment_count' => '0',
      'review_source' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'review_description' => '',
      'star' => '',
      'type' => '',
      'parent_id' => '',
      'uid' => '',
      'oid' => '',
      'review_vote_count' => '',
      'review_comment_count' => '',
      'review_source' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_unauditList' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'video_title' => 'video_title',
      'user_title' => 'user_title',
      'activity' => 'activity',
      'ctime' => 'ctime',
      'del' => 'del',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'video_title' => '课程名称',
      'user_title' => '创建者',
      'activity' => '是否审核',
      'ctime' => '创建时间',
      'del' => '是否删除',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'video_title' => '0',
      'user_title' => '0',
      'activity' => '0',
      'ctime' => '0',
      'del' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'video_title' => '',
      'user_title' => '',
      'activity' => '',
      'ctime' => '',
      'del' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminWithdraw_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'wnum' => 'wnum',
      'ctime' => 'ctime',
      'status' => 'status',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'wnum' => '提现数量',
      'ctime' => '申请时间',
      'status' => '状态',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'wnum' => '0',
      'ctime' => '0',
      'status' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'wnum' => '',
      'ctime' => '',
      'status' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminWithdraw_process' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'wnum' => 'wnum',
      'ctime' => 'ctime',
      'status' => 'status',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'wnum' => '提现数量',
      'ctime' => '申请时间',
      'status' => '状态',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'wnum' => '0',
      'ctime' => '0',
      'status' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'wnum' => '',
      'ctime' => '',
      'status' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminWithdraw_successful' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'wnum' => 'wnum',
      'ctime' => 'ctime',
      'status' => 'status',
      'rtime' => 'rtime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'wnum' => '提现数量',
      'ctime' => '申请时间',
      'status' => '状态',
      'rtime' => '处理时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'wnum' => '0',
      'ctime' => '0',
      'status' => '0',
      'rtime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'wnum' => '',
      'ctime' => '',
      'status' => '',
      'rtime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminWithdraw_failure' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'wnum' => 'wnum',
      'ctime' => 'ctime',
      'status' => 'status',
      'rtime' => 'rtime',
      'reason' => 'reason',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'wnum' => '提现数量',
      'ctime' => '申请时间',
      'status' => '状态',
      'rtime' => '处理时间',
      'reason' => '失败原因',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'wnum' => '0',
      'ctime' => '0',
      'status' => '0',
      'rtime' => '0',
      'reason' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'wnum' => '',
      'ctime' => '',
      'status' => '',
      'rtime' => '',
      'reason' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminWithdraw_cancel' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'wnum' => 'wnum',
      'ctime' => 'ctime',
      'status' => 'status',
      'rtime' => 'rtime',
      'reason' => 'reason',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'wnum' => '提现数量',
      'ctime' => '申请时间',
      'status' => '状态',
      'rtime' => '取消时间',
      'reason' => '取消原因',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'wnum' => '0',
      'ctime' => '0',
      'status' => '0',
      'rtime' => '0',
      'reason' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'wnum' => '',
      'ctime' => '',
      'status' => '',
      'rtime' => '',
      'reason' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminSpecial_category' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'cover' => 'cover',
      'intro' => 'intro',
      'sort' => 'sort',
      'src' => 'src',
      'templet' => 'templet',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'title' => '分类名称',
      'cover' => '封面',
      'intro' => '分类简介',
      'sort' => '排序',
      'src' => '分类链接',
      'templet' => '模板名称',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'title' => '0',
      'cover' => '0',
      'intro' => '0',
      'sort' => '1',
      'src' => '1',
      'templet' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'cover' => '',
      'intro' => '',
      'sort' => '',
      'src' => '',
      'templet' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminSpecial_addcategory' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'cover' => 'cover',
      'templet' => 'templet',
      'sort' => 'sort',
      'intro' => 'intro',
    ),
    'key_name' => 
    array (
      'title' => '标题',
      'cover' => '封面',
      'templet' => '模板名称',
      'sort' => '排序',
      'intro' => '简介',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'cover' => 'image',
      'templet' => 'text',
      'sort' => 'text',
      'intro' => 'textarea',
    ),
    'key_default' => 
    array (
      'title' => '',
      'cover' => '',
      'templet' => '',
      'sort' => '50',
      'intro' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'cover' => '只能上传一张图片',
      'templet' => '',
      'sort' => '',
      'intro' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'cover' => '',
      'templet' => '',
      'sort' => '',
      'intro' => '',
    ),
  ),
  'classroom_AdminLearnc_readhistory' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'num' => 'num',
      'balance' => 'balance',
      'rel_id' => 'rel_id',
      'note' => 'note',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uid' => '用户名称',
      'type' => '变动类型',
      'num' => '变动学币数',
      'balance' => '变动后学币数(可用学币)',
      'rel_id' => '关联ID',
      'note' => '业务备注',
      'ctime' => '发生时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'type' => '0',
      'num' => '0',
      'balance' => '0',
      'rel_id' => '0',
      'note' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'num' => '',
      'balance' => '',
      'rel_id' => '',
      'note' => '',
      'ctime' => '',
    ),
  ),
  'classroom_AdminSpecial_special' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'sc_id' => 'sc_id',
      'title' => 'title',
      'intro' => 'intro',
      'cover' => 'cover',
      'attach_id' => 'attach_id',
      'src' => 'src',
      'foldername' => 'foldername',
      'sort' => 'sort',
      'ctime' => 'ctime',
      'utime' => 'utime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'sc_id' => '专题分类',
      'title' => '专题名称',
      'intro' => '专题介绍',
      'cover' => '封面预览',
      'attach_id' => '附件下载',
      'src' => '专题链接',
      'foldername' => '文件夹',
      'sort' => '排序',
      'ctime' => '创建时间',
      'utime' => '修改时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'sc_id' => '0',
      'title' => '0',
      'intro' => '0',
      'cover' => '0',
      'attach_id' => '0',
      'src' => '1',
      'foldername' => '0',
      'sort' => '1',
      'ctime' => '0',
      'utime' => '1',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'sc_id' => '',
      'title' => '',
      'intro' => '',
      'cover' => '',
      'attach_id' => '',
      'src' => '',
      'foldername' => '',
      'sort' => '',
      'ctime' => '',
      'utime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminConfig_index' => 
  array (
    'key' => 
    array (
      'master_uid' => 'master_uid',
      'withdraw_basenum' => 'withdraw_basenum',
    ),
    'key_name' => 
    array (
      'master_uid' => '高教网帐号',
      'withdraw_basenum' => '提现倍数',
    ),
    'key_type' => 
    array (
      'master_uid' => 'oneUser',
      'withdraw_basenum' => 'text',
    ),
    'key_default' => 
    array (
      'master_uid' => '1',
      'withdraw_basenum' => '100',
    ),
    'key_tishi' => 
    array (
      'master_uid' => '高教网对应的用户，后台发布的课程或专辑都属于当前设置的用户',
      'withdraw_basenum' => '提现的倍数，实际提现为该数的一倍及以上才会通过',
    ),
    'key_javascript' => 
    array (
      'master_uid' => '',
      'withdraw_basenum' => '',
    ),
  ),
  'classroom_AdminSuggest_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'content' => 'content',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'content' => '反馈内容',
      'ctime' => '提交时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'content' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'content' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminWithdraw_view' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'ctime' => 'ctime',
      'wnum' => 'wnum',
      'bcard_text' => 'bcard_text',
      'status' => 'status',
      'reason' => 'reason',
      'rtime' => 'rtime',
      'statusCode' => 'statusCode',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'ctime' => '申请时间',
      'wnum' => '提现数量',
      'bcard_text' => '提现账户信息',
      'status' => '状态',
      'reason' => '原因',
      'rtime' => '处理/取消时间',
      'statusCode' => '状态码',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'uid' => 'define',
      'ctime' => 'define',
      'wnum' => 'define',
      'bcard_text' => 'define',
      'status' => 'define',
      'reason' => 'define',
      'rtime' => 'define',
      'statusCode' => 'hidden',
    ),
    'key_default' => 
    array (
      'id' => '',
      'uid' => '',
      'ctime' => '',
      'wnum' => '',
      'bcard_text' => '',
      'status' => '',
      'reason' => '',
      'rtime' => '',
      'statusCode' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'ctime' => '',
      'wnum' => '',
      'bcard_text' => '',
      'status' => '',
      'reason' => '',
      'rtime' => '',
      'statusCode' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'ctime' => '',
      'wnum' => '',
      'bcard_text' => '',
      'status' => '',
      'reason' => '',
      'rtime' => '',
      'statusCode' => '',
    ),
  ),
  'classroom_AdminWithdraw_operate' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'ctime' => 'ctime',
      'wnum' => 'wnum',
      'bcard_text' => 'bcard_text',
      'status' => 'status',
      'reason' => 'reason',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'ctime' => '申请时间',
      'wnum' => '提现数量',
      'bcard_text' => '提现账户信息',
      'status' => '状态',
      'reason' => '原因',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'uid' => 'define',
      'ctime' => 'define',
      'wnum' => 'define',
      'bcard_text' => 'define',
      'status' => 'select',
      'reason' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'uid' => '',
      'ctime' => '',
      'wnum' => '',
      'bcard_text' => '',
      'status' => '',
      'reason' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'ctime' => '',
      'wnum' => '',
      'bcard_text' => '',
      'status' => '',
      'reason' => '如果是失败或取消，可输入原因备注',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'ctime' => '',
      'wnum' => '',
      'bcard_text' => '',
      'status' => '',
      'reason' => '',
    ),
  ),
  'classroom_AdminSpecial_addspecial' => 
  array (
    'key' => 
    array (
      'sc_id' => 'sc_id',
      'title' => 'title',
      'foldername' => 'foldername',
      'attach_id' => 'attach_id',
      'sort' => 'sort',
      'intro' => 'intro',
      'mytest' => 'mytest',
    ),
    'key_name' => 
    array (
      'sc_id' => '专题分类',
      'title' => '专题名称',
      'foldername' => '文件夹',
      'attach_id' => '附件上传',
      'sort' => '排序',
      'intro' => '专题简介',
      'mytest' => '我的测试',
    ),
    'key_type' => 
    array (
      'sc_id' => 'select',
      'title' => 'text',
      'foldername' => 'text',
      'attach_id' => 'file',
      'sort' => 'text',
      'intro' => 'textarea',
      'mytest' => 'define',
    ),
    'key_default' => 
    array (
      'sc_id' => '',
      'title' => '',
      'foldername' => '',
      'attach_id' => '',
      'sort' => '50',
      'intro' => '',
      'mytest' => '',
    ),
    'key_tishi' => 
    array (
      'sc_id' => '',
      'title' => '',
      'foldername' => '',
      'attach_id' => '附件只能上传一个,且只能为ZIP格式【ZIP内至少包含一个index.html】',
      'sort' => '',
      'intro' => '',
      'mytest' => '',
    ),
    'key_javascript' => 
    array (
      'sc_id' => '',
      'title' => '',
      'foldername' => '',
      'attach_id' => '',
      'sort' => '',
      'intro' => '',
      'mytest' => '',
    ),
  ),
  'classroom_AdminOrder_album' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'cuid' => 'cuid',
      'album_id' => 'album_id',
      'price' => 'price',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'cuid' => '创建用户',
      'album_id' => '专辑',
      'price' => '价格',
      'ctime' => '时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'cuid' => '0',
      'album_id' => '0',
      'price' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'cuid' => '',
      'album_id' => '',
      'price' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_postRecycle' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'album_title' => 'album_title',
      'user_title' => 'user_title',
      'del' => 'del',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'album_title' => '专辑名称',
      'user_title' => '创建者',
      'del' => '是否删除(隐藏)',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'album_title' => '0',
      'user_title' => '0',
      'del' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'album_title' => '',
      'user_title' => '',
      'del' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLearnc_hislist' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'type' => 'type',
      'num' => 'num',
      'balance' => 'balance',
      'rel_id' => 'rel_id',
      'note' => 'note',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'type' => '类型',
      'num' => '变动数量',
      'balance' => '余额',
      'rel_id' => '关联ID',
      'note' => '业务备注',
      'ctime' => '发生时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'type' => '0',
      'num' => '0',
      'balance' => '0',
      'rel_id' => '0',
      'note' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'type' => '',
      'num' => '',
      'balance' => '',
      'rel_id' => '',
      'note' => '',
      'ctime' => '',
    ),
  ),
  'classroom_AdminVideo_askVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'qst_comment_count' => 'qst_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'qst_title' => '问题题目',
      'uid' => '提问者',
      'oid' => '课程',
      'qst_comment_count' => '回答数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'qst_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'qst_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'uid' => '',
      'oid' => '',
      'qst_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_answerVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'qst_comment_count' => 'qst_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'qst_title' => '回答内容',
      'uid' => '回答用户',
      'oid' => '所属课程',
      'qst_comment_count' => '点评数',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'qst_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'qst_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'uid' => '',
      'oid' => '',
      'qst_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_commentVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'qst_comment_count' => 'qst_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'qst_title' => '点评内容',
      'uid' => '点评用户',
      'oid' => '所属课程',
      'qst_comment_count' => '',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'qst_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'qst_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'uid' => '',
      'oid' => '',
      'qst_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_noteVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'note_comment_count' => 'note_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'note_title' => '笔记标题',
      'uid' => '笔记作者',
      'oid' => '所属课程',
      'note_comment_count' => '笔记评论数',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'note_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'note_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'uid' => '',
      'oid' => '',
      'note_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_noteCommentVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'note_comment_count' => 'note_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'note_title' => '评论标题',
      'uid' => '评论用户',
      'oid' => '所属课程',
      'note_comment_count' => '回复数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'note_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'note_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'uid' => '',
      'oid' => '',
      'note_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_noteReplayVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'note_title' => '回复内容',
      'uid' => '回复用户',
      'oid' => '所属课程',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'note_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'uid' => '',
      'oid' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLearnc_edit' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'balance' => 'balance',
      'frozen' => 'frozen',
      'vip_type' => 'vip_type',
      'vip_expire' => 'vip_expire',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'balance' => '余额',
      'frozen' => '冻结',
      'vip_type' => 'VIP类型',
      'vip_expire' => '过期时间',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'uid' => 'define',
      'balance' => 'text',
      'frozen' => 'text',
      'vip_type' => 'select',
      'vip_expire' => 'date',
    ),
    'key_default' => 
    array (
      'id' => '',
      'uid' => '',
      'balance' => '',
      'frozen' => '',
      'vip_type' => '',
      'vip_expire' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'uid' => '',
      'balance' => '一般情况下请勿随意改动余额，直接改动没有流水记录',
      'frozen' => '一般情况下请勿随意改动冻结，直接改动没有流水记录',
      'vip_type' => '',
      'vip_expire' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'balance' => '',
      'frozen' => '',
      'vip_type' => '',
      'vip_expire' => '',
    ),
  ),
  'classroom_AdminVideo_reviewVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'review_description' => 'review_description',
      'uid' => 'uid',
      'oid' => 'oid',
      'star' => 'star',
      'review_comment_count' => 'review_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'review_description' => '点评内容',
      'uid' => '评价会员',
      'oid' => '所属课程',
      'star' => '评价星级',
      'review_comment_count' => '评价回复数',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'review_description' => '0',
      'uid' => '0',
      'oid' => '0',
      'star' => '0',
      'review_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'review_description' => '',
      'uid' => '',
      'oid' => '',
      'star' => '',
      'review_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_reviewCommentVideo' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'review_description' => 'review_description',
      'uid' => 'uid',
      'oid' => 'oid',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'review_description' => '回复点评的内容',
      'uid' => '回复用户',
      'oid' => '所属课程',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'review_description' => '0',
      'uid' => '0',
      'oid' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'review_description' => '',
      'uid' => '',
      'oid' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_askAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'qst_comment_count' => 'qst_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'qst_title' => '提问标题',
      'uid' => '提问用户',
      'oid' => '所属专辑',
      'qst_comment_count' => '回答数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'qst_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'qst_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'uid' => '',
      'oid' => '',
      'qst_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_answerAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'qst_comment_count' => 'qst_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'qst_title' => '回答内容',
      'uid' => '回答用户',
      'oid' => '所属专辑',
      'qst_comment_count' => '点评数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'qst_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'qst_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'uid' => '',
      'oid' => '',
      'qst_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_commentAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'qst_title' => '评价内容',
      'uid' => '评价用户',
      'oid' => '所属专辑',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'qst_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'uid' => '',
      'oid' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_noteAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'note_comment_count' => 'note_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'note_title' => '笔记标题',
      'uid' => '笔记作者',
      'oid' => '所属专辑',
      'note_comment_count' => '评论数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'note_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'note_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'uid' => '',
      'oid' => '',
      'note_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_noteCommentAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'note_comment_count' => 'note_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'note_title' => '评论内容',
      'uid' => '评论用户',
      'oid' => '所属专辑',
      'note_comment_count' => '回复数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'note_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'note_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'uid' => '',
      'oid' => '',
      'note_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_noteReplayAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'uid' => 'uid',
      'oid' => 'oid',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'note_title' => '回复内容',
      'uid' => '回复用户',
      'oid' => '所属专辑',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'note_title' => '0',
      'uid' => '0',
      'oid' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'uid' => '',
      'oid' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_reviewAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'review_description' => 'review_description',
      'uid' => 'uid',
      'oid' => 'oid',
      'star' => 'star',
      'review_comment_count' => 'review_comment_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'review_description' => '点评内容',
      'uid' => '点评用户',
      'oid' => '所属专辑',
      'star' => '星级',
      'review_comment_count' => '回复数量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'review_description' => '0',
      'uid' => '0',
      'oid' => '0',
      'star' => '0',
      'review_comment_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'review_description' => '',
      'uid' => '',
      'oid' => '',
      'star' => '',
      'review_comment_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_reviewCommentAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'review_description' => 'review_description',
      'uid' => 'uid',
      'oid' => 'oid',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'review_description' => '回复内容',
      'uid' => '回复用户',
      'oid' => '所属专辑',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'review_description' => '0',
      'uid' => '0',
      'oid' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'review_description' => '',
      'uid' => '',
      'oid' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_recycle' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'album_title' => 'album_title',
      'user_title' => 'user_title',
      'del' => 'del',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'album_title' => '专辑名称',
      'user_title' => '创建者',
      'del' => '是否删除(隐藏)',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'album_title' => '0',
      'user_title' => '0',
      'del' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'album_title' => '',
      'user_title' => '',
      'del' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_addVerify' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'usergroup_id' => 'usergroup_id',
      'user_verified_category_id' => 'user_verified_category_id',
      'company' => 'company',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'phone' => 'phone',
      'school' => 'school',
      'specialty' => 'specialty',
      'address' => 'address',
      's_address' => 's_address',
      'reason' => 'reason',
      'info' => 'info',
      'attach' => 'attach',
    ),
    'key_name' => 
    array (
      'uname' => '用户名',
      'usergroup_id' => '认证类型',
      'user_verified_category_id' => '认证分类',
      'company' => '企业名称',
      'realname' => '真实姓名',
      'idcard' => '身份证号码',
      'phone' => '手机号码',
      'school' => '学校',
      'specialty' => '专业',
      'address' => '个人地址',
      's_address' => '学校地址',
      'reason' => '认证理由',
      'info' => '认证资料',
      'attach' => '认证附件',
    ),
    'key_type' => 
    array (
      'uname' => 'oneUser',
      'usergroup_id' => 'radio',
      'user_verified_category_id' => 'select',
      'company' => 'text',
      'realname' => 'text',
      'idcard' => 'text',
      'phone' => 'text',
      'school' => 'text',
      'specialty' => 'text',
      'address' => 'text',
      's_address' => 'text',
      'reason' => 'textarea',
      'info' => 'textarea',
      'attach' => 'file',
    ),
    'key_default' => 
    array (
      'uname' => '',
      'usergroup_id' => '5',
      'user_verified_category_id' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'reason' => '',
      'info' => '',
      'attach' => '',
    ),
    'key_tishi' => 
    array (
      'uname' => '',
      'usergroup_id' => '',
      'user_verified_category_id' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'reason' => '',
      'info' => '',
      'attach' => '',
    ),
    'key_javascript' => 
    array (
      'uname' => '1',
      'usergroup_id' => 'admin.addVerifyConfig(this.value)',
      'user_verified_category_id' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'reason' => '',
      'info' => '',
      'attach' => '',
    ),
  ),
  'admin_User_verified' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'usergroup_id' => 'usergroup_id',
      'category' => 'category',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'phone' => 'phone',
      'reason' => 'reason',
      'info' => 'info',
      'school' => 'school',
      'specialty' => 'specialty',
      'address' => 'address',
      's_address' => 's_address',
      'attachment' => 'attachment',
      'other_data' => 'other_data',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uname' => '用户名',
      'usergroup_id' => '认证类型',
      'category' => '认证分类',
      'realname' => '真实姓名',
      'idcard' => '身份证号码',
      'phone' => '手机号码',
      'reason' => '认证理由',
      'info' => '认证资料',
      'school' => '学校',
      'specialty' => '专业',
      'address' => '个人地址',
      's_address' => '学校地址',
      'attachment' => '认证附件',
      'other_data' => '其他资料',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uname' => '0',
      'usergroup_id' => '0',
      'category' => '0',
      'realname' => '0',
      'idcard' => '0',
      'phone' => '0',
      'reason' => '0',
      'info' => '0',
      'school' => '0',
      'specialty' => '0',
      'address' => '0',
      's_address' => '0',
      'attachment' => '0',
      'other_data' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uname' => '',
      'usergroup_id' => 'admin.addVerifyConfig(this.value)',
      'category' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'reason' => '',
      'info' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'attachment' => '',
      'other_data' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_verify' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'usergroup_id' => 'usergroup_id',
      'category' => 'category',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'phone' => 'phone',
      'reason' => 'reason',
      'info' => 'info',
      'school' => 'school',
      'specialty' => 'specialty',
      'address' => 'address',
      's_address' => 's_address',
      'attachment' => 'attachment',
      'other_data' => 'other_data',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uname' => '用户名',
      'usergroup_id' => '认证类型',
      'category' => '认证分类',
      'realname' => '真实姓名',
      'idcard' => '身份证号码',
      'phone' => '手机号码',
      'reason' => '认证理由',
      'info' => '认证资料',
      'school' => '学校',
      'specialty' => '专业',
      'address' => '个人地址',
      's_address' => '学校地址',
      'attachment' => '认证附件',
      'other_data' => '其他资料',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uname' => '0',
      'usergroup_id' => '0',
      'category' => '0',
      'realname' => '0',
      'idcard' => '0',
      'phone' => '0',
      'reason' => '0',
      'info' => '0',
      'school' => '0',
      'specialty' => '0',
      'address' => '0',
      's_address' => '0',
      'attachment' => '0',
      'other_data' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uname' => '',
      'usergroup_id' => '',
      'category' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'reason' => '',
      'info' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'attachment' => '',
      'other_data' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_editVerify' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'usergroup_id' => 'usergroup_id',
      'user_verified_category_id' => 'user_verified_category_id',
      'company' => 'company',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'phone' => 'phone',
      'school' => 'school',
      'specialty' => 'specialty',
      'address' => 'address',
      's_address' => 's_address',
      'reason' => 'reason',
      'info' => 'info',
      'attach' => 'attach',
    ),
    'key_name' => 
    array (
      'uid' => '',
      'uname' => '用户名',
      'usergroup_id' => '认证类型',
      'user_verified_category_id' => '认证分类',
      'company' => '企业名称',
      'realname' => '真实姓名',
      'idcard' => '身份证号码',
      'phone' => '手机号码',
      'school' => '学校',
      'specialty' => '专业',
      'address' => '个人地址',
      's_address' => '学校地址',
      'reason' => '认证理由',
      'info' => '认证资料',
      'attach' => '认证附件',
    ),
    'key_type' => 
    array (
      'uid' => 'hidden',
      'uname' => 'word',
      'usergroup_id' => 'radio',
      'user_verified_category_id' => 'select',
      'company' => 'text',
      'realname' => 'text',
      'idcard' => 'text',
      'phone' => 'text',
      'school' => 'text',
      'specialty' => 'text',
      'address' => 'text',
      's_address' => 'text',
      'reason' => 'textarea',
      'info' => 'textarea',
      'attach' => 'file',
    ),
    'key_default' => 
    array (
      'uid' => '',
      'uname' => '',
      'usergroup_id' => '',
      'user_verified_category_id' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'reason' => '',
      'info' => '',
      'attach' => '',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'uname' => '',
      'usergroup_id' => '',
      'user_verified_category_id' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'reason' => '',
      'info' => '',
      'attach' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'usergroup_id' => 'admin.addVerifyConfig(this.value)',
      'user_verified_category_id' => '',
      'company' => '',
      'realname' => '',
      'idcard' => '',
      'phone' => '',
      'school' => '',
      'specialty' => '',
      'address' => '',
      's_address' => '',
      'reason' => '',
      'info' => '',
      'attach' => '',
    ),
  ),
  'classroom_AdminVideo_forwordUnauditList' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'video_title' => 'video_title',
      'user_title' => 'user_title',
      'activity' => 'activity',
      'ctime' => 'ctime',
      'del' => 'del',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'video_title' => '课程标题',
      'user_title' => '创建用户',
      'activity' => '是否通过审核',
      'ctime' => '创建时间',
      'del' => '是否删除',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'video_title' => '0',
      'user_title' => '0',
      'activity' => '0',
      'ctime' => '0',
      'del' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'video_title' => '',
      'user_title' => '',
      'activity' => '',
      'ctime' => '',
      'del' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminCard_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'accountmaster' => 'accountmaster',
      'accounttype' => 'accounttype',
      'account' => 'account',
      'location' => 'location',
      'bankofdeposit' => 'bankofdeposit',
      'tel_num' => 'tel_num',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'uid' => '持卡者',
      'accountmaster' => '姓名',
      'accounttype' => '账号类型',
      'account' => '账号',
      'location' => '省市',
      'bankofdeposit' => '开户行',
      'tel_num' => '联系人手机',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'accountmaster' => '0',
      'accounttype' => '0',
      'account' => '0',
      'location' => '0',
      'bankofdeposit' => '0',
      'tel_num' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'accountmaster' => '',
      'accounttype' => '',
      'account' => '',
      'location' => '',
      'bankofdeposit' => '',
      'tel_num' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminNote_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'note_title' => 'note_title',
      'note_description' => 'note_description',
      'type' => 'type',
      'parent_id' => 'parent_id',
      'uid' => 'uid',
      'oid' => 'oid',
      'is_open' => 'is_open',
      'note_help_count' => 'note_help_count',
      'note_comment_count' => 'note_comment_count',
      'note_collect_count' => 'note_collect_count',
      'note_source' => 'note_source',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'note_title' => '笔记名称',
      'note_description' => '笔记描述',
      'type' => '类型',
      'parent_id' => '对应本表ID',
      'uid' => '用户名称',
      'oid' => '课程/专辑名称',
      'is_open' => '公开',
      'note_help_count' => '同问',
      'note_comment_count' => '评论',
      'note_collect_count' => '收藏',
      'note_source' => '来源',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'note_title' => '0',
      'note_description' => '0',
      'type' => '0',
      'parent_id' => '1',
      'uid' => '0',
      'oid' => '0',
      'is_open' => '0',
      'note_help_count' => '0',
      'note_comment_count' => '0',
      'note_collect_count' => '0',
      'note_source' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'note_title' => '',
      'note_description' => '',
      'type' => '',
      'parent_id' => '',
      'uid' => '',
      'oid' => '',
      'is_open' => '',
      'note_help_count' => '',
      'note_comment_count' => '',
      'note_collect_count' => '',
      'note_source' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminQuestion_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'qst_title' => 'qst_title',
      'qst_description' => 'qst_description',
      'type' => 'type',
      'parent_id' => 'parent_id',
      'uid' => 'uid',
      'oid' => 'oid',
      'qst_help_count' => 'qst_help_count',
      'qst_comment_count' => 'qst_comment_count',
      'qst_source' => 'qst_source',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '序号',
      'qst_title' => '问题标题',
      'qst_description' => '问题描述',
      'type' => '提问类型',
      'parent_id' => '父级ID',
      'uid' => '用户名',
      'oid' => '课程/专辑名称',
      'qst_help_count' => '同问数量',
      'qst_comment_count' => '评论数量',
      'qst_source' => '问题来源',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'qst_title' => '0',
      'qst_description' => '0',
      'type' => '0',
      'parent_id' => '1',
      'uid' => '0',
      'oid' => '0',
      'qst_help_count' => '0',
      'qst_comment_count' => '0',
      'qst_source' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'qst_title' => '',
      'qst_description' => '',
      'type' => '',
      'parent_id' => '',
      'uid' => '',
      'oid' => '',
      'qst_help_count' => '',
      'qst_comment_count' => '',
      'qst_source' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLianZai_xdate' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'cid' => 'cid',
      'name' => 'name',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '分期序号',
      'cid' => '栏目名称',
      'name' => '分期名称',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'cid' => '0',
      'name' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'cid' => '',
      'name' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLianZai_addxdate' => 
  array (
    'key' => 
    array (
      'cid' => 'cid',
      'name' => 'name',
    ),
    'key_name' => 
    array (
      'cid' => '连载栏目',
      'name' => '分期名称',
    ),
    'key_type' => 
    array (
      'cid' => 'select',
      'name' => 'text',
    ),
    'key_default' => 
    array (
      'cid' => '',
      'name' => '',
    ),
    'key_tishi' => 
    array (
      'cid' => '添加之后不能修改',
      'name' => '',
    ),
    'key_javascript' => 
    array (
      'cid' => '',
      'name' => '',
    ),
  ),
  'classroom_AdminConfig_page' => 
  array (
    'key' => 
    array (
      'home_ipurl' => 'home_ipurl',
      'home_aurl' => 'home_aurl',
      'video_list_num' => 'video_list_num',
      'album_list_num' => 'album_list_num',
      'album_list_tag_num' => 'album_list_tag_num',
      'foot_html' => 'foot_html',
      'qqlist' => 'qqlist',
    ),
    'key_name' => 
    array (
      'home_ipurl' => '有趣的产品',
      'home_aurl' => '活动专栏',
      'video_list_num' => '课程列表每页数量',
      'album_list_num' => '专辑列表每页数量',
      'album_list_tag_num' => '专辑列表标签数量',
      'foot_html' => '网页底部信息',
      'qqlist' => '联系QQ',
    ),
    'key_type' => 
    array (
      'home_ipurl' => 'text',
      'home_aurl' => 'text',
      'video_list_num' => 'text',
      'album_list_num' => 'text',
      'album_list_tag_num' => 'text',
      'foot_html' => 'textarea',
      'qqlist' => 'textarea',
    ),
    'key_default' => 
    array (
      'home_ipurl' => '',
      'home_aurl' => '',
      'video_list_num' => '9',
      'album_list_num' => '9',
      'album_list_tag_num' => '30',
      'foot_html' => '',
      'qqlist' => '',
    ),
    'key_tishi' => 
    array (
      'home_ipurl' => '链接到的URL地址',
      'home_aurl' => '链接到的URL地址',
      'video_list_num' => '',
      'album_list_num' => '',
      'album_list_tag_num' => '专辑列表页面，热门使用标签的显示数量',
      'foot_html' => '网页底部信息，支持HTML',
      'qqlist' => '请用回车换行',
    ),
    'key_javascript' => 
    array (
      'home_ipurl' => '',
      'home_aurl' => '',
      'video_list_num' => '',
      'album_list_num' => '',
      'album_list_tag_num' => '',
      'foot_html' => '',
      'qqlist' => '',
    ),
  ),
  'classroom_AdminLianZai_addarticle' => 
  array (
    'key' => 
    array (
      'istop' => 'istop',
      'title' => 'title',
      'source' => 'source',
      'description' => 'description',
    ),
    'key_name' => 
    array (
      'istop' => '是否推荐',
      'title' => '文章标题',
      'source' => '文章来源',
      'description' => '文章内容',
    ),
    'key_type' => 
    array (
      'istop' => 'radio',
      'title' => 'text',
      'source' => 'text',
      'description' => 'editor',
    ),
    'key_default' => 
    array (
      'istop' => '',
      'title' => '',
      'source' => '',
      'description' => '',
    ),
    'key_tishi' => 
    array (
      'istop' => '',
      'title' => '',
      'source' => '',
      'description' => '',
    ),
    'key_javascript' => 
    array (
      'istop' => '',
      'title' => '',
      'source' => '',
      'description' => '',
    ),
  ),
  'classroom_AdminLianZai_addvideo' => 
  array (
    'key' => 
    array (
      'istop' => 'istop',
      'did' => 'did',
      'title' => 'title',
      'description' => 'description',
      'source' => 'source',
      'attach' => 'attach',
      'definename' => 'definename',
    ),
    'key_name' => 
    array (
      'istop' => '是否推荐',
      'did' => '分期',
      'title' => '标题',
      'description' => '描述',
      'source' => '来源',
      'attach' => '图片附件',
      'definename' => '视频附件',
    ),
    'key_type' => 
    array (
      'istop' => 'radio',
      'did' => 'select',
      'title' => 'text',
      'description' => 'textarea',
      'source' => 'text',
      'attach' => 'image',
      'definename' => 'define',
    ),
    'key_default' => 
    array (
      'istop' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
      'definename' => '',
    ),
    'key_tishi' => 
    array (
      'istop' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
      'definename' => '',
    ),
    'key_javascript' => 
    array (
      'istop' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
      'definename' => '',
    ),
  ),
  'classroom_AdminLianZai_addcontent' => 
  array (
    'key' => 
    array (
      'istop' => 'istop',
      'did' => 'did',
      'title' => 'title',
      'description' => 'description',
      'source' => 'source',
      'attach' => 'attach',
    ),
    'key_name' => 
    array (
      'istop' => '是否推荐',
      'did' => '分期',
      'title' => '内容标题',
      'description' => '内容描述',
      'source' => '内容来源',
      'attach' => '图片附件',
    ),
    'key_type' => 
    array (
      'istop' => 'radio',
      'did' => 'select',
      'title' => 'text',
      'description' => 'textarea',
      'source' => 'text',
      'attach' => 'image',
    ),
    'key_default' => 
    array (
      'istop' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
    ),
    'key_tishi' => 
    array (
      'istop' => '',
      'did' => '添加之后不能再次修改',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
    ),
    'key_javascript' => 
    array (
      'istop' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
    ),
  ),
  'classroom_AdminLianZai_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'type' => 'type',
      'did' => 'did',
      'title' => 'title',
      'description' => 'description',
      'source' => 'source',
      'attach' => 'attach',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '内容序号',
      'type' => '类型',
      'did' => '分期',
      'title' => '标题',
      'description' => '描述',
      'source' => '来源',
      'attach' => '附件预览',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'type' => '0',
      'did' => '0',
      'title' => '0',
      'description' => '0',
      'source' => '0',
      'attach' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'type' => '',
      'did' => '',
      'title' => '',
      'description' => '',
      'source' => '',
      'attach' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_editUser' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'email' => 'email',
      'uname' => 'uname',
      'phone' => 'phone',
      'password' => 'password',
      'sex' => 'sex',
      'user_group' => 'user_group',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'email' => 'Email',
      'uname' => '用户名',
      'phone' => '手机号',
      'password' => '新密码',
      'sex' => '性别',
      'user_group' => '用户组',
    ),
    'key_type' => 
    array (
      'uid' => 'hidden',
      'email' => 'text',
      'uname' => 'text',
      'phone' => 'text',
      'password' => 'text',
      'sex' => 'radio',
      'user_group' => 'checkbox',
    ),
    'key_default' => 
    array (
      'uid' => '',
      'email' => '',
      'uname' => '',
      'phone' => '',
      'password' => '',
      'sex' => '',
      'user_group' => '',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'email' => '',
      'uname' => '',
      'phone' => '',
      'password' => '',
      'sex' => '',
      'user_group' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'email' => '',
      'uname' => '',
      'phone' => '',
      'password' => '',
      'sex' => '',
      'user_group' => '',
    ),
  ),
  'admin_Config_unionpay' => 
  array (
    'key' => 
    array (
      'unionpay_key' => 'unionpay_key',
      'unionpay_merId' => 'unionpay_merId',
      'unionpay_merAbbr' => 'unionpay_merAbbr',
    ),
    'key_name' => 
    array (
      'unionpay_key' => '商户密钥',
      'unionpay_merId' => '商户ID',
      'unionpay_merAbbr' => '商户名称',
    ),
    'key_type' => 
    array (
      'unionpay_key' => 'text',
      'unionpay_merId' => 'text',
      'unionpay_merAbbr' => 'text',
    ),
    'key_default' => 
    array (
      'unionpay_key' => '',
      'unionpay_merId' => '',
      'unionpay_merAbbr' => '',
    ),
    'key_tishi' => 
    array (
      'unionpay_key' => '',
      'unionpay_merId' => '',
      'unionpay_merAbbr' => '',
    ),
    'key_javascript' => 
    array (
      'unionpay_key' => '',
      'unionpay_merId' => '',
      'unionpay_merAbbr' => '',
    ),
  ),
  'wenda_Admin_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'type' => 'type',
      'username' => 'username',
      'wd_title' => 'wd_title',
      'wd_help_count' => 'wd_help_count',
      'wd_comment_count' => 'wd_comment_count',
      'wd_browse_count' => 'wd_browse_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '问答id',
      'type' => '问答类型',
      'username' => '发布人',
      'wd_title' => '问答标题',
      'wd_help_count' => '赞',
      'wd_comment_count' => '评论数量',
      'wd_browse_count' => '浏览量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'type' => '0',
      'username' => '0',
      'wd_title' => '0',
      'wd_help_count' => '0',
      'wd_comment_count' => '0',
      'wd_browse_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'type' => '',
      'username' => '',
      'wd_title' => '',
      'wd_help_count' => '',
      'wd_comment_count' => '',
      'wd_browse_count' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminOrder_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'muid' => 'muid',
      'video_id' => 'video_id',
      'old_price' => 'old_price',
      'discount' => 'discount',
      'discount_type' => 'discount_type',
      'price' => 'price',
      'album_title' => 'album_title',
      'percent' => 'percent',
      'user_num' => 'user_num',
      'master_num' => 'master_num',
      'learn_status' => 'learn_status',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'muid' => '商家',
      'video_id' => '课程',
      'old_price' => '原价',
      'discount' => '折扣',
      'discount_type' => '折扣类型',
      'price' => '订单价格',
      'album_title' => '通过专辑',
      'percent' => '商家比例',
      'user_num' => '商家分成',
      'master_num' => '网站分成',
      'learn_status' => '学习状态',
      'ctime' => '时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'muid' => '1',
      'video_id' => '0',
      'old_price' => '0',
      'discount' => '0',
      'discount_type' => '0',
      'price' => '0',
      'album_title' => '0',
      'percent' => '1',
      'user_num' => '1',
      'master_num' => '1',
      'learn_status' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'muid' => '',
      'video_id' => '',
      'old_price' => '',
      'discount' => '',
      'discount_type' => '',
      'price' => '',
      'album_title' => '',
      'percent' => '',
      'user_num' => '',
      'master_num' => '',
      'learn_status' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminOrder_albumOrderList' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'muid' => 'muid',
      'video_id' => 'video_id',
      'old_price' => 'old_price',
      'discount' => 'discount',
      'discount_type' => 'discount_type',
      'price' => 'price',
      'album_title' => 'album_title',
      'percent' => 'percent',
      'user_num' => 'user_num',
      'master_num' => 'master_num',
      'learn_status' => 'learn_status',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'muid' => '商家',
      'video_id' => '课程',
      'old_price' => '原价',
      'discount' => '折扣',
      'discount_type' => '折扣类型',
      'price' => '订单价格',
      'album_title' => '通过专辑',
      'percent' => '商家比例',
      'user_num' => '商家分成',
      'master_num' => '网站分成',
      'learn_status' => '学习状态',
      'ctime' => '时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'muid' => '1',
      'video_id' => '0',
      'old_price' => '0',
      'discount' => '0',
      'discount_type' => '0',
      'price' => '0',
      'album_title' => '0',
      'percent' => '1',
      'user_num' => '1',
      'master_num' => '1',
      'learn_status' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'muid' => '',
      'video_id' => '',
      'old_price' => '',
      'discount' => '',
      'discount_type' => '',
      'price' => '',
      'album_title' => '',
      'percent' => '',
      'user_num' => '',
      'master_num' => '',
      'learn_status' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminOrder_viewOrder' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'ctime' => 'ctime',
      'uid' => 'uid',
      'muid' => 'muid',
      'video_id' => 'video_id',
      'old_price' => 'old_price',
      'discount' => 'discount',
      'discount_type' => 'discount_type',
      'price' => 'price',
      'album_title' => 'album_title',
      'percent' => 'percent',
      'user_num' => 'user_num',
      'master_num' => 'master_num',
      'learn_status' => 'learn_status',
    ),
    'key_name' => 
    array (
      'id' => '订单ID',
      'ctime' => '购买时间',
      'uid' => '购买用户',
      'muid' => '课程上传者',
      'video_id' => '课程',
      'old_price' => '原价',
      'discount' => '折扣',
      'discount_type' => '折扣类型',
      'price' => '购买价格',
      'album_title' => '专辑',
      'percent' => '分成比例',
      'user_num' => '商家分成',
      'master_num' => '网站分成',
      'learn_status' => '学习状态',
    ),
    'key_type' => 
    array (
      'id' => 'define',
      'ctime' => 'define',
      'uid' => 'define',
      'muid' => 'define',
      'video_id' => 'define',
      'old_price' => 'define',
      'discount' => 'define',
      'discount_type' => 'define',
      'price' => 'define',
      'album_title' => 'define',
      'percent' => 'define',
      'user_num' => 'define',
      'master_num' => 'define',
      'learn_status' => 'define',
    ),
    'key_default' => 
    array (
      'id' => '',
      'ctime' => '',
      'uid' => '',
      'muid' => '',
      'video_id' => '',
      'old_price' => '',
      'discount' => '',
      'discount_type' => '',
      'price' => '',
      'album_title' => '',
      'percent' => '',
      'user_num' => '',
      'master_num' => '',
      'learn_status' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'ctime' => '',
      'uid' => '',
      'muid' => '',
      'video_id' => '',
      'old_price' => '',
      'discount' => '',
      'discount_type' => '',
      'price' => '',
      'album_title' => '',
      'percent' => '',
      'user_num' => '',
      'master_num' => '',
      'learn_status' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'ctime' => '',
      'uid' => '',
      'muid' => '',
      'video_id' => '',
      'old_price' => '',
      'discount' => '',
      'discount_type' => '',
      'price' => '',
      'album_title' => '',
      'percent' => '',
      'user_num' => '',
      'master_num' => '',
      'learn_status' => '',
    ),
  ),
  'classroom_AdminConfig_other' => 
  array (
    'key' => 
    array (
      'qiniu_AccessKey' => 'qiniu_AccessKey',
      'qiniu_SecretKey' => 'qiniu_SecretKey',
      'qiniu_Domain' => 'qiniu_Domain',
      'qiniu_Bucket' => 'qiniu_Bucket',
    ),
    'key_name' => 
    array (
      'qiniu_AccessKey' => '七牛AccessKey',
      'qiniu_SecretKey' => '七牛SecretKey',
      'qiniu_Domain' => '七牛域名',
      'qiniu_Bucket' => '空间名称',
    ),
    'key_type' => 
    array (
      'qiniu_AccessKey' => 'text',
      'qiniu_SecretKey' => 'text',
      'qiniu_Domain' => 'text',
      'qiniu_Bucket' => 'text',
    ),
    'key_default' => 
    array (
      'qiniu_AccessKey' => '',
      'qiniu_SecretKey' => '',
      'qiniu_Domain' => '',
      'qiniu_Bucket' => '',
    ),
    'key_tishi' => 
    array (
      'qiniu_AccessKey' => '',
      'qiniu_SecretKey' => '',
      'qiniu_Domain' => '请输入七牛提供的域名，不加http://',
      'qiniu_Bucket' => '',
    ),
    'key_javascript' => 
    array (
      'qiniu_AccessKey' => '',
      'qiniu_SecretKey' => '',
      'qiniu_Domain' => '',
      'qiniu_Bucket' => '',
    ),
  ),
  'admin_Config_audit' => 
  array (
    'key' => 
    array (
      'open' => 'open',
      'keywords' => 'keywords',
      'replace' => 'replace',
    ),
    'key_name' => 
    array (
      'open' => '是否开启敏感词过滤',
      'keywords' => '敏感词',
      'replace' => '敏感词替换为',
    ),
    'key_type' => 
    array (
      'open' => 'radio',
      'keywords' => 'stringText',
      'replace' => 'text',
    ),
    'key_default' => 
    array (
      'open' => '1',
      'keywords' => '',
      'replace' => '',
    ),
    'key_tishi' => 
    array (
      'open' => '',
      'keywords' => '按回车添加，多个输入后用英文逗号,分割',
      'replace' => '',
    ),
    'key_javascript' => 
    array (
      'open' => '',
      'keywords' => '',
      'replace' => '',
    ),
  ),
  'exam_AdminQuestion_postRecycle' => 
  array (
    'key' => 
    array (
      'question_id' => 'question_id',
      'uname' => 'uname',
      'question_status' => 'question_status',
      'question_category_name' => 'question_category_name',
      'question_type_title' => 'question_type_title',
      'question_point' => 'question_point',
      'question_content' => 'question_content',
      'question_insert_date' => 'question_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'question_id' => '试题ID',
      'uname' => '创建人',
      'question_status' => '试题状态',
      'question_category_name' => '试题分类',
      'question_type_title' => '试题类型',
      'question_point' => '试题分数',
      'question_content' => '题干描述',
      'question_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'question_id' => '0',
      'uname' => '0',
      'question_status' => '0',
      'question_category_name' => '0',
      'question_type_title' => '0',
      'question_point' => '0',
      'question_content' => '0',
      'question_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'question_id' => '',
      'uname' => '',
      'question_status' => '',
      'question_category_name' => '',
      'question_type_title' => '',
      'question_point' => '',
      'question_content' => '',
      'question_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminExam_postRecycle' => 
  array (
    'key' => 
    array (
      'exam_id' => 'exam_id',
      'exam_name' => 'exam_name',
      'exam_category' => 'exam_category',
      'exam_begin_time' => 'exam_begin_time',
      'exam_end_time' => 'exam_end_time',
      'exam_passing_grade' => 'exam_passing_grade',
      'exam_publish_result_flg' => 'exam_publish_result_flg',
      'exam_mode' => 'exam_mode',
      'exam_times_mode' => 'exam_times_mode',
      'exam_admin' => 'exam_admin',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'exam_id' => '考试ID',
      'exam_name' => '考试名称',
      'exam_category' => '所属分类',
      'exam_begin_time' => '考试开始时间',
      'exam_end_time' => '考试结束时间',
      'exam_passing_grade' => '及格分数',
      'exam_publish_result_flg' => '是否显示排名',
      'exam_mode' => '考试模式',
      'exam_times_mode' => '允许考试次数',
      'exam_admin' => '创建人',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'exam_id' => '0',
      'exam_name' => '0',
      'exam_category' => '0',
      'exam_begin_time' => '0',
      'exam_end_time' => '0',
      'exam_passing_grade' => '0',
      'exam_publish_result_flg' => '0',
      'exam_mode' => '0',
      'exam_times_mode' => '0',
      'exam_admin' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'exam_id' => '',
      'exam_name' => '',
      'exam_category' => '',
      'exam_begin_time' => '',
      'exam_end_time' => '',
      'exam_passing_grade' => '',
      'exam_publish_result_flg' => '',
      'exam_mode' => '',
      'exam_times_mode' => '',
      'exam_admin' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminCategory_index' => 
  array (
    'key' => 
    array (
      'exam_category_id' => 'exam_category_id',
      'exam_category_name' => 'exam_category_name',
      'exam_category_admin' => 'exam_category_admin',
      'exam_category_insert_date' => 'exam_category_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'exam_category_id' => '考试分类ID',
      'exam_category_name' => '考试分类名称',
      'exam_category_admin' => '创建人',
      'exam_category_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'exam_category_id' => '0',
      'exam_category_name' => '0',
      'exam_category_admin' => '0',
      'exam_category_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'exam_category_id' => '',
      'exam_category_name' => '',
      'exam_category_admin' => '',
      'exam_category_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminCategory_paper' => 
  array (
    'key' => 
    array (
      'paper_category_id' => 'paper_category_id',
      'paper_category_name' => 'paper_category_name',
      'paper_category_admin' => 'paper_category_admin',
      'paper_category_insert_date' => 'paper_category_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'paper_category_id' => '试卷分类ID',
      'paper_category_name' => '试卷分类名称',
      'paper_category_admin' => '创建人',
      'paper_category_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'paper_category_id' => '0',
      'paper_category_name' => '0',
      'paper_category_admin' => '0',
      'paper_category_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'paper_category_id' => '',
      'paper_category_name' => '',
      'paper_category_admin' => '',
      'paper_category_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminCategory_question' => 
  array (
    'key' => 
    array (
      'question_category_id' => 'question_category_id',
      'question_category_name' => 'question_category_name',
      'question_category_admin' => 'question_category_admin',
      'question_category_insert_date' => 'question_category_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'question_category_id' => '题库分类ID',
      'question_category_name' => '题库分类名称',
      'question_category_admin' => '创建人',
      'question_category_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'question_category_id' => '0',
      'question_category_name' => '0',
      'question_category_admin' => '0',
      'question_category_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'question_category_id' => '',
      'question_category_name' => '',
      'question_category_admin' => '',
      'question_category_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminPaper_postRecycle' => 
  array (
    'key' => 
    array (
      'paper_id' => 'paper_id',
      'paper_name' => 'paper_name',
      'paper_category' => 'paper_category',
      'paper_type' => 'paper_type',
      'paper_question_count' => 'paper_question_count',
      'paper_point' => 'paper_point',
      'paper_insert_date' => 'paper_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'paper_id' => '试卷ID',
      'paper_name' => '试卷名称',
      'paper_category' => '所属分类',
      'paper_type' => '出卷类型',
      'paper_question_count' => '试题总数',
      'paper_point' => '试题总分',
      'paper_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'paper_id' => '0',
      'paper_name' => '0',
      'paper_category' => '0',
      'paper_type' => '0',
      'paper_question_count' => '0',
      'paper_point' => '0',
      'paper_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'paper_id' => '',
      'paper_name' => '',
      'paper_category' => '',
      'paper_type' => '',
      'paper_question_count' => '',
      'paper_point' => '',
      'paper_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminUserExam_ExamRrecord' => 
  array (
    'key' => 
    array (
      'user_exam_id' => 'user_exam_id',
      'exam_name' => 'exam_name',
      'paper_name' => 'paper_name',
      'paper_point' => 'paper_point',
      'exam_passing_grade' => 'exam_passing_grade',
      'user_exam_number' => 'user_exam_number',
      'user_total_date' => 'user_total_date',
      'user_exam_score' => 'user_exam_score',
      'user_right_count' => 'user_right_count',
      'user_error_count' => 'user_error_count',
      'user_exam_time' => 'user_exam_time',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'user_exam_id' => '用户考试记录ID',
      'exam_name' => '考试名称',
      'paper_name' => '试卷名称',
      'paper_point' => '试卷总分',
      'exam_passing_grade' => '及格分数',
      'user_exam_number' => '考试次数',
      'user_total_date' => '考试所花时间',
      'user_exam_score' => '考试得分',
      'user_right_count' => '正确个数',
      'user_error_count' => '错误个数',
      'user_exam_time' => '交卷时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'user_exam_id' => '0',
      'exam_name' => '0',
      'paper_name' => '0',
      'paper_point' => '0',
      'exam_passing_grade' => '0',
      'user_exam_number' => '0',
      'user_total_date' => '0',
      'user_exam_score' => '0',
      'user_right_count' => '0',
      'user_error_count' => '0',
      'user_exam_time' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'user_exam_id' => '',
      'exam_name' => '',
      'paper_name' => '',
      'paper_point' => '',
      'exam_passing_grade' => '',
      'user_exam_number' => '',
      'user_total_date' => '',
      'user_exam_score' => '',
      'user_right_count' => '',
      'user_error_count' => '',
      'user_exam_time' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminUserExam_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'user_group' => 'user_group',
      'location' => 'location',
      'ctime' => 'ctime',
      'reg_ip' => 'reg_ip',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uid' => '用户ID',
      'uname' => '用户名称',
      'user_group' => '用户组',
      'location' => '地区',
      'ctime' => '注册时间',
      'reg_ip' => '注册IP',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uid' => '0',
      'uname' => '0',
      'user_group' => '0',
      'location' => '0',
      'ctime' => '0',
      'reg_ip' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'user_group' => '',
      'location' => '',
      'ctime' => '',
      'reg_ip' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminUserExam_postRecycle' => 
  array (
    'key' => 
    array (
      'user_exam_id' => 'user_exam_id',
      'exam_name' => 'exam_name',
      'paper_name' => 'paper_name',
      'paper_point' => 'paper_point',
      'exam_passing_grade' => 'exam_passing_grade',
      'user_exam_number' => 'user_exam_number',
      'user_total_date' => 'user_total_date',
      'user_exam_score' => 'user_exam_score',
      'user_right_count' => 'user_right_count',
      'user_error_count' => 'user_error_count',
      'user_exam_time' => 'user_exam_time',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'user_exam_id' => '考试记录ID',
      'exam_name' => '考试名称',
      'paper_name' => '试卷名称',
      'paper_point' => '试卷总分',
      'exam_passing_grade' => '及格分数',
      'user_exam_number' => '考试次数',
      'user_total_date' => '考试所花时间',
      'user_exam_score' => '考试得分',
      'user_right_count' => '正确个数',
      'user_error_count' => '错误个数',
      'user_exam_time' => '交卷时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'user_exam_id' => '0',
      'exam_name' => '0',
      'paper_name' => '0',
      'paper_point' => '0',
      'exam_passing_grade' => '0',
      'user_exam_number' => '0',
      'user_total_date' => '0',
      'user_exam_score' => '0',
      'user_right_count' => '0',
      'user_error_count' => '0',
      'user_exam_time' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'user_exam_id' => '',
      'exam_name' => '',
      'paper_name' => '',
      'paper_point' => '',
      'exam_passing_grade' => '',
      'user_exam_number' => '',
      'user_total_date' => '',
      'user_exam_score' => '',
      'user_right_count' => '',
      'user_error_count' => '',
      'user_exam_time' => '',
      'DOACTION' => '',
    ),
  ),
  'live_Admin_create' => 
  array (
    'key' => 
    array (
      'name' => 'name',
      'templatetype' => 'templatetype',
      'authtype' => 'authtype',
      'publisherpass' => 'publisherpass',
      'assistantpass' => 'assistantpass',
      'playpass' => 'playpass',
      'checkurl' => 'checkurl',
      'barrage' => 'barrage',
      'foreignpublish' => 'foreignpublish',
      'desc' => 'desc',
    ),
    'key_name' => 
    array (
      'name' => '直播间名称',
      'templatetype' => '直播间模板',
      'authtype' => '学生密码设置',
      'publisherpass' => '讲师端密码',
      'assistantpass' => '助教端密码',
      'playpass' => '学生端密码',
      'checkurl' => '接口验证地址',
      'barrage' => '是否开启弹幕',
      'foreignpublish' => '是否开启第三方推流',
      'desc' => '描述',
    ),
    'key_type' => 
    array (
      'name' => 'text',
      'templatetype' => 'radio',
      'authtype' => 'select',
      'publisherpass' => 'text',
      'assistantpass' => 'text',
      'playpass' => 'text',
      'checkurl' => 'text',
      'barrage' => 'radio',
      'foreignpublish' => 'radio',
      'desc' => 'editor',
    ),
    'key_default' => 
    array (
      'name' => '',
      'templatetype' => '',
      'authtype' => '',
      'publisherpass' => '',
      'assistantpass' => '',
      'playpass' => '',
      'checkurl' => '',
      'barrage' => '',
      'foreignpublish' => '',
      'desc' => '',
    ),
    'key_tishi' => 
    array (
      'name' => '',
      'templatetype' => '',
      'authtype' => '',
      'publisherpass' => '',
      'assistantpass' => '',
      'playpass' => '密码验证填写',
      'checkurl' => '接口验证填写',
      'barrage' => '',
      'foreignpublish' => '',
      'desc' => '',
    ),
    'key_javascript' => 
    array (
      'name' => '',
      'templatetype' => '',
      'authtype' => '',
      'publisherpass' => '',
      'assistantpass' => '',
      'playpass' => '',
      'checkurl' => '',
      'barrage' => '',
      'foreignpublish' => '',
      'desc' => '',
    ),
  ),
  'exam_AdminExam_ExamDetil' => 
  array (
    'key' => 
    array (
      'user_exam_id' => 'user_exam_id',
      'user_name' => 'user_name',
      'user_exam_number' => 'user_exam_number',
      'user_exam_time' => 'user_exam_time',
      'user_exam_score' => 'user_exam_score',
      'user_total_date' => 'user_total_date',
      'user_right_count' => 'user_right_count',
      'user_error_count' => 'user_error_count',
    ),
    'key_name' => 
    array (
      'user_exam_id' => '考试ID',
      'user_name' => '用户名',
      'user_exam_number' => '考试次数',
      'user_exam_time' => '交卷时间',
      'user_exam_score' => '考试得分',
      'user_total_date' => '考试所花时间',
      'user_right_count' => '正确个数',
      'user_error_count' => '错误个数',
    ),
    'key_hidden' => 
    array (
      'user_exam_id' => '0',
      'user_name' => '0',
      'user_exam_number' => '0',
      'user_exam_time' => '0',
      'user_exam_score' => '0',
      'user_total_date' => '0',
      'user_right_count' => '0',
      'user_error_count' => '0',
    ),
    'key_javascript' => 
    array (
      'user_exam_id' => '',
      'user_name' => '',
      'user_exam_number' => '',
      'user_exam_time' => '',
      'user_exam_score' => '',
      'user_total_date' => '',
      'user_right_count' => '',
      'user_error_count' => '',
    ),
  ),
  'exam_AdminExam_index' => 
  array (
    'key' => 
    array (
      'exam_id' => 'exam_id',
      'exam_name' => 'exam_name',
      'exam_count' => 'exam_count',
      'exam_status' => 'exam_status',
      'exam_category' => 'exam_category',
      'exam_begin_time' => 'exam_begin_time',
      'exam_end_time' => 'exam_end_time',
      'exam_passing_grade' => 'exam_passing_grade',
      'exam_publish_result_flg' => 'exam_publish_result_flg',
      'exam_times_mode' => 'exam_times_mode',
      'exam_admin' => 'exam_admin',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'exam_id' => '考试ID',
      'exam_name' => '考试名称',
      'exam_count' => '已考试人数',
      'exam_status' => '是否启用',
      'exam_category' => '所属分类',
      'exam_begin_time' => '考试开始时间',
      'exam_end_time' => '考试结束时间',
      'exam_passing_grade' => '及格分数',
      'exam_publish_result_flg' => '是否显示排名',
      'exam_times_mode' => '允许考试次数',
      'exam_admin' => '创建人',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'exam_id' => '0',
      'exam_name' => '0',
      'exam_count' => '0',
      'exam_status' => '0',
      'exam_category' => '0',
      'exam_begin_time' => '0',
      'exam_end_time' => '0',
      'exam_passing_grade' => '0',
      'exam_publish_result_flg' => '0',
      'exam_times_mode' => '0',
      'exam_admin' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'exam_id' => '',
      'exam_name' => '',
      'exam_count' => '',
      'exam_status' => '',
      'exam_category' => '',
      'exam_begin_time' => '',
      'exam_end_time' => '',
      'exam_passing_grade' => '',
      'exam_publish_result_flg' => '',
      'exam_times_mode' => '',
      'exam_admin' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminOrder_course' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'teacher_name' => 'teacher_name',
      'course_name' => 'course_name',
      'course_price' => 'course_price',
      'teach_way' => 'teach_way',
      'is_del' => 'is_del',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uname' => '用户',
      'teacher_name' => '授课教师',
      'course_name' => '课程名称',
      'course_price' => '课程价格',
      'teach_way' => '授课方式',
      'is_del' => '是否删除',
      'ctime' => '创建时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'teacher_name' => '0',
      'course_name' => '0',
      'course_price' => '0',
      'teach_way' => '0',
      'is_del' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'teacher_name' => '',
      'course_name' => '',
      'course_price' => '',
      'teach_way' => '',
      'is_del' => '',
      'ctime' => '',
    ),
  ),
  'admin_Config_nav' => 
  array (
    'key' => 
    array (
      'navi_id' => 'navi_id',
      'navi_name' => 'navi_name',
      'app_name' => 'app_name',
      'url' => 'url',
      'target' => 'target',
      'status' => 'status',
      'position' => 'position',
      'guest' => 'guest',
      'is_app_navi' => 'is_app_navi',
      'parent_id' => 'parent_id',
      'order_sort' => 'order_sort',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'navi_id' => '导航ID',
      'navi_name' => '导航名称',
      'app_name' => '英文名称',
      'url' => '链接地址',
      'target' => '打开方式',
      'status' => '状态',
      'position' => '导航位置',
      'guest' => '游客可见',
      'is_app_navi' => '应用内部导航',
      'parent_id' => '父导航',
      'order_sort' => '应用排序',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'navi_id' => '0',
      'navi_name' => '0',
      'app_name' => '0',
      'url' => '0',
      'target' => '0',
      'status' => '0',
      'position' => '0',
      'guest' => '1',
      'is_app_navi' => '1',
      'parent_id' => '1',
      'order_sort' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'navi_id' => '',
      'navi_name' => '',
      'app_name' => '',
      'url' => '',
      'target' => '',
      'status' => '',
      'position' => '',
      'guest' => '',
      'is_app_navi' => '',
      'parent_id' => '',
      'order_sort' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminConfig_qiniuyun' => 
  array (
    'key' => 
    array (
      'qiniu_AccessKey' => 'qiniu_AccessKey',
      'qiniu_SecretKey' => 'qiniu_SecretKey',
      'qiniu_Domain' => 'qiniu_Domain',
      'qiniu_Bucket' => 'qiniu_Bucket',
    ),
    'key_name' => 
    array (
      'qiniu_AccessKey' => '七牛AccessKey',
      'qiniu_SecretKey' => '七牛SecretKey',
      'qiniu_Domain' => '七牛域名',
      'qiniu_Bucket' => '七牛空间',
    ),
    'key_type' => 
    array (
      'qiniu_AccessKey' => 'text',
      'qiniu_SecretKey' => 'text',
      'qiniu_Domain' => 'text',
      'qiniu_Bucket' => 'text',
    ),
    'key_default' => 
    array (
      'qiniu_AccessKey' => '',
      'qiniu_SecretKey' => '',
      'qiniu_Domain' => '',
      'qiniu_Bucket' => '',
    ),
    'key_tishi' => 
    array (
      'qiniu_AccessKey' => '',
      'qiniu_SecretKey' => '',
      'qiniu_Domain' => '',
      'qiniu_Bucket' => '',
    ),
    'key_javascript' => 
    array (
      'qiniu_AccessKey' => '',
      'qiniu_SecretKey' => '',
      'qiniu_Domain' => '',
      'qiniu_Bucket' => '',
    ),
  ),
  'classroom_AdminConfig_up' => 
  array (
    'key' => 
    array (
      'up_AccessKey' => 'up_AccessKey',
      'up_SecretKey' => 'up_SecretKey',
      'up_Domain' => 'up_Domain',
      'up_Bucket' => 'up_Bucket',
    ),
    'key_name' => 
    array (
      'up_AccessKey' => '又拍AccessKey',
      'up_SecretKey' => '又拍SecretKey',
      'up_Domain' => '又拍域名',
      'up_Bucket' => '又拍空间',
    ),
    'key_type' => 
    array (
      'up_AccessKey' => 'text',
      'up_SecretKey' => 'text',
      'up_Domain' => 'text',
      'up_Bucket' => 'text',
    ),
    'key_default' => 
    array (
      'up_AccessKey' => '',
      'up_SecretKey' => '',
      'up_Domain' => '',
      'up_Bucket' => '',
    ),
    'key_tishi' => 
    array (
      'up_AccessKey' => '',
      'up_SecretKey' => '',
      'up_Domain' => '',
      'up_Bucket' => '',
    ),
    'key_javascript' => 
    array (
      'up_AccessKey' => '',
      'up_SecretKey' => '',
      'up_Domain' => '',
      'up_Bucket' => '',
    ),
  ),
  'classroom_AdminConfig_aliyun' => 
  array (
    'key' => 
    array (
      'ali_AccessKey' => 'ali_AccessKey',
      'ali_SecretKey' => 'ali_SecretKey',
      'ali_Domain' => 'ali_Domain',
      'ali_Bucket' => 'ali_Bucket',
    ),
    'key_name' => 
    array (
      'ali_AccessKey' => '阿里AccessKey',
      'ali_SecretKey' => '阿里SecretKey	',
      'ali_Domain' => '阿里域名',
      'ali_Bucket' => '阿里空间',
    ),
    'key_type' => 
    array (
      'ali_AccessKey' => 'text',
      'ali_SecretKey' => 'text',
      'ali_Domain' => 'text',
      'ali_Bucket' => 'text',
    ),
    'key_default' => 
    array (
      'ali_AccessKey' => '',
      'ali_SecretKey' => '',
      'ali_Domain' => '',
      'ali_Bucket' => '',
    ),
    'key_tishi' => 
    array (
      'ali_AccessKey' => '',
      'ali_SecretKey' => '',
      'ali_Domain' => '',
      'ali_Bucket' => '',
    ),
    'key_javascript' => 
    array (
      'ali_AccessKey' => '',
      'ali_SecretKey' => '',
      'ali_Domain' => '',
      'ali_Bucket' => '',
    ),
  ),
  'classroom_AdminVideo_postRecycle' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'video_title' => 'video_title',
      'user_title' => 'user_title',
      'activity' => 'activity',
      'del' => 'del',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'video_title' => '课程名称',
      'user_title' => '创建者',
      'activity' => '是否审核',
      'del' => '是否删除(隐藏)',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '1',
      'video_title' => '1',
      'user_title' => '1',
      'activity' => '1',
      'del' => '1',
      'ctime' => '1',
      'DOACTION' => '1',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'video_title' => '',
      'user_title' => '',
      'activity' => '',
      'del' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Apps_editPermNode' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'appname' => 'appname',
      'appinfo' => 'appinfo',
      'module' => 'module',
      'rule' => 'rule',
      'ruleinfo' => 'ruleinfo',
    ),
    'key_name' => 
    array (
      'id' => '',
      'appname' => '应用',
      'appinfo' => '应用别名',
      'module' => '模块',
      'rule' => '权限节点',
      'ruleinfo' => '节点别名',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'appname' => 'text',
      'appinfo' => 'text',
      'module' => 'radio',
      'rule' => 'text',
      'ruleinfo' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'appname' => '',
      'appinfo' => '',
      'module' => '',
      'rule' => '',
      'ruleinfo' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'appname' => '',
      'appinfo' => '',
      'module' => '',
      'rule' => '',
      'ruleinfo' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'appname' => '',
      'appinfo' => '',
      'module' => '',
      'rule' => '',
      'ruleinfo' => '',
    ),
  ),
  'admin_Single_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'cate' => 'cate',
      'url' => 'url',
      'action' => 'action',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'title' => '标题',
      'cate' => '分类',
      'url' => 'URL',
      'action' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'cate' => '0',
      'url' => '0',
      'action' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'cate' => '',
      'url' => '',
      'action' => '',
    ),
  ),
  'classroom_AdminAlbum_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'album_title' => 'album_title',
      'cover' => 'cover',
      'user_title' => 'user_title',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'album_title' => '专辑名称',
      'cover' => '专辑封面',
      'user_title' => '创建者',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'album_title' => '0',
      'cover' => '0',
      'user_title' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'album_title' => '',
      'cover' => '',
      'user_title' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Single_edit' => 
  array (
    'key' => 
    array (
      'cate_id' => 'cate_id',
      'title' => 'title',
      'text' => 'text',
      'url' => 'url',
      'sort' => 'sort',
    ),
    'key_name' => 
    array (
      'cate_id' => '分类',
      'title' => '标题',
      'text' => '内容',
      'url' => 'URL',
      'sort' => '排序',
    ),
    'key_type' => 
    array (
      'cate_id' => 'select',
      'title' => 'text',
      'text' => 'editor',
      'url' => 'text',
      'sort' => 'text',
    ),
    'key_default' => 
    array (
      'cate_id' => '',
      'title' => '',
      'text' => '',
      'url' => '',
      'sort' => '',
    ),
    'key_tishi' => 
    array (
      'cate_id' => '',
      'title' => '',
      'text' => '',
      'url' => '',
      'sort' => '',
    ),
    'key_javascript' => 
    array (
      'cate_id' => '',
      'title' => '',
      'text' => '',
      'url' => '',
      'sort' => '',
    ),
  ),
  'admin_Single_add' => 
  array (
    'key' => 
    array (
      'cate_id' => 'cate_id',
      'title' => 'title',
      'text' => 'text',
      'url' => 'url',
      'sort' => 'sort',
    ),
    'key_name' => 
    array (
      'cate_id' => '分类',
      'title' => '标题',
      'text' => '内容',
      'url' => 'URL',
      'sort' => '排序',
    ),
    'key_type' => 
    array (
      'cate_id' => 'select',
      'title' => 'text',
      'text' => 'editor',
      'url' => 'text',
      'sort' => 'text',
    ),
    'key_default' => 
    array (
      'cate_id' => '',
      'title' => '',
      'text' => '',
      'url' => '',
      'sort' => '',
    ),
    'key_tishi' => 
    array (
      'cate_id' => '',
      'title' => '',
      'text' => '',
      'url' => '',
      'sort' => '',
    ),
    'key_javascript' => 
    array (
      'cate_id' => '',
      'title' => '',
      'text' => '',
      'url' => '',
      'sort' => '',
    ),
  ),
  'admin_Topic_editor' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'desc' => 'desc',
      'text' => 'text',
      'image' => 'image',
      'cate' => 'cate',
      're' => 're',
      'readcount' => 'readcount',
    ),
    'key_name' => 
    array (
      'title' => '标题',
      'desc' => '资讯摘要',
      'text' => '资讯内容',
      'image' => '封面图片',
      'cate' => '资讯分类',
      're' => '是否推荐',
      'readcount' => '浏览量',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'desc' => 'textarea',
      'text' => 'editor',
      'image' => 'image',
      'cate' => 'select',
      're' => 'radio',
      'readcount' => 'text',
    ),
    'key_default' => 
    array (
      'title' => '',
      'desc' => '',
      'text' => '',
      'image' => '',
      'cate' => '',
      're' => '',
      'readcount' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'desc' => '',
      'text' => '',
      'image' => '',
      'cate' => '',
      're' => '',
      'readcount' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'desc' => '',
      'text' => '',
      'image' => '',
      'cate' => '',
      're' => '',
      'readcount' => '',
    ),
  ),
  'admin_Topic_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'cate' => 'cate',
      'desc' => 'desc',
      'dateline' => 'dateline',
      'action' => 'action',
      're' => 're',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '标题',
      'cate' => '分类',
      'desc' => '摘要',
      'dateline' => '时间',
      'action' => '操作',
      're' => '是否推荐',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'cate' => '0',
      'desc' => '0',
      'dateline' => '0',
      'action' => '0',
      're' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'cate' => '',
      'desc' => '',
      'dateline' => '',
      'action' => '',
      're' => '',
    ),
  ),
  'wenda_AdminIndex_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'type' => 'type',
      'username' => 'username',
      'wd_description' => 'wd_description',
      'wd_comment_count' => 'wd_comment_count',
      'wd_browse_count' => 'wd_browse_count',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '问答id',
      'type' => '问答类型',
      'username' => '发布人',
      'wd_description' => '问题描述',
      'wd_comment_count' => '评论数量',
      'wd_browse_count' => '浏览量',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'type' => '0',
      'username' => '0',
      'wd_description' => '0',
      'wd_comment_count' => '0',
      'wd_browse_count' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'type' => '',
      'username' => '',
      'wd_description' => '',
      'wd_comment_count' => '',
      'wd_browse_count' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Verify_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'phone' => 'phone',
      'code' => 'code',
      'stime' => 'stime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'phone' => '手机号',
      'code' => '验证码',
      'stime' => '发送时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'phone' => '0',
      'code' => '0',
      'stime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'phone' => '',
      'code' => '',
      'stime' => '',
    ),
  ),
  'live_AdminConfig_baseConfig' => 
  array (
    'key' => 
    array (
      'live_opt' => 'live_opt',
    ),
    'key_name' => 
    array (
      'live_opt' => '直播选择',
    ),
    'key_type' => 
    array (
      'live_opt' => 'radio',
    ),
    'key_default' => 
    array (
      'live_opt' => '',
    ),
    'key_tishi' => 
    array (
      'live_opt' => '',
    ),
    'key_javascript' => 
    array (
      'live_opt' => '',
    ),
  ),
  'admin_Config_alipay' => 
  array (
    'key' => 
    array (
      'alipay_partner' => 'alipay_partner',
      'seller_email' => 'seller_email',
      'alipay_key' => 'alipay_key',
      'private_key' => 'private_key',
      'public_key' => 'public_key',
    ),
    'key_name' => 
    array (
      'alipay_partner' => '合作身份者id',
      'seller_email' => '卖家支付宝帐号',
      'alipay_key' => '安全检验码',
      'private_key' => '私钥（app使用）',
      'public_key' => '公钥',
    ),
    'key_type' => 
    array (
      'alipay_partner' => 'text',
      'seller_email' => 'text',
      'alipay_key' => 'text',
      'private_key' => 'textarea',
      'public_key' => 'textarea',
    ),
    'key_default' => 
    array (
      'alipay_partner' => '',
      'seller_email' => '',
      'alipay_key' => '',
      'private_key' => '',
      'public_key' => '',
    ),
    'key_tishi' => 
    array (
      'alipay_partner' => '以2088开头的16位纯数字',
      'seller_email' => '以数字和字母组成的32位字符',
      'alipay_key' => '',
      'private_key' => '',
      'public_key' => '',
    ),
    'key_javascript' => 
    array (
      'alipay_partner' => '',
      'seller_email' => '',
      'alipay_key' => '',
      'private_key' => '',
      'public_key' => '',
    ),
  ),
  'admin_Config_email' => 
  array (
    'key' => 
    array (
      'email_sendtype' => 'email_sendtype',
      'email_host' => 'email_host',
      'email_ssl' => 'email_ssl',
      'email_port' => 'email_port',
      'email_account' => 'email_account',
      'email_password' => 'email_password',
      'email_sender_name' => 'email_sender_name',
      'email_sender_email' => 'email_sender_email',
      'email_test' => 'email_test',
    ),
    'key_name' => 
    array (
      'email_sendtype' => '邮件发送方式',
      'email_host' => 'SMTP地址',
      'email_ssl' => '是否启用SSL连接',
      'email_port' => '端口',
      'email_account' => '邮箱地址',
      'email_password' => '邮箱密码',
      'email_sender_name' => '发送者姓名',
      'email_sender_email' => '发送者邮箱',
      'email_test' => '测试邮件',
    ),
    'key_type' => 
    array (
      'email_sendtype' => 'select',
      'email_host' => 'text',
      'email_ssl' => 'radio',
      'email_port' => 'text',
      'email_account' => 'text',
      'email_password' => 'text',
      'email_sender_name' => 'text',
      'email_sender_email' => 'text',
      'email_test' => 'text',
    ),
    'key_default' => 
    array (
      'email_sendtype' => 'smtp',
      'email_host' => 'smtp.163.com',
      'email_ssl' => '0',
      'email_port' => '25',
      'email_account' => '_12345678_@163.com',
      'email_password' => 'uwycitfk',
      'email_sender_name' => 'SociaxTeam',
      'email_sender_email' => 'sociax@zhishisoft.com',
      'email_test' => '',
    ),
    'key_tishi' => 
    array (
      'email_sendtype' => '',
      'email_host' => '发送邮箱的smtp地址。如: smtp.gmail.com或smtp.qq.com',
      'email_ssl' => '此选项需要服务器环境支持SSL（如果使用Gmail或QQ邮箱，请选择是）',
      'email_port' => 'smtp的端口。默认为25。具体请参看各STMP服务商的设置说明 （如果使用Gmail或QQ邮箱，请将端口设为465）',
      'email_account' => '邮箱地址请输入完整地址email@email.com格式',
      'email_password' => '邮箱密码',
      'email_sender_name' => '邮件中显示的发送者姓名',
      'email_sender_email' => '邮件中显示的发送者邮箱',
      'email_test' => '<a onclick="admin.testEmail()">点击测试邮件</a>',
    ),
    'key_javascript' => 
    array (
      'email_sendtype' => '',
      'email_host' => '',
      'email_ssl' => '',
      'email_port' => '',
      'email_account' => '',
      'email_password' => '',
      'email_sender_name' => '',
      'email_sender_email' => '',
      'email_test' => '',
    ),
  ),
  'admin_User_tryout' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'phone' => 'phone',
      'tname' => 'tname',
      'company' => 'company',
      'hangye' => 'hangye',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'phone' => '手机号',
      'tname' => '姓名',
      'company' => '公司',
      'hangye' => '行业',
      'ctime' => '申请时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'phone' => '0',
      'tname' => '0',
      'company' => '0',
      'hangye' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'phone' => '',
      'tname' => '',
      'company' => '',
      'hangye' => '',
      'ctime' => '',
    ),
  ),
  'admin_Config_sms' => 
  array (
    'key' => 
    array (
      'sms_uid' => 'sms_uid',
      'sms_pwd' => 'sms_pwd',
      'sms_tpl' => 'sms_tpl',
    ),
    'key_name' => 
    array (
      'sms_uid' => '用户uid',
      'sms_pwd' => '用户密码',
      'sms_tpl' => '短信模板',
    ),
    'key_type' => 
    array (
      'sms_uid' => 'text',
      'sms_pwd' => 'text',
      'sms_tpl' => 'textarea',
    ),
    'key_default' => 
    array (
      'sms_uid' => '',
      'sms_pwd' => '',
      'sms_tpl' => '',
    ),
    'key_tishi' => 
    array (
      'sms_uid' => '',
      'sms_pwd' => '',
      'sms_tpl' => '模板中必须包含{code}',
    ),
    'key_javascript' => 
    array (
      'sms_uid' => '',
      'sms_pwd' => '',
      'sms_tpl' => '',
    ),
  ),
  'classroom_AdminConfig_basic' => 
  array (
    'key' => 
    array (
      'upload_room' => 'upload_room',
      'player_type' => 'player_type',
      'withdraw_basenum' => 'withdraw_basenum',
      'rechange_basenum' => 'rechange_basenum',
      'rechange_default' => 'rechange_default',
      'video_free_time' => 'video_free_time',
    ),
    'key_name' => 
    array (
      'upload_room' => '上传空间',
      'player_type' => '播放器',
      'withdraw_basenum' => '提现倍数',
      'rechange_basenum' => '充值倍数',
      'rechange_default' => '充值默认值',
      'video_free_time' => '课程试看时长',
    ),
    'key_type' => 
    array (
      'upload_room' => 'radio',
      'player_type' => 'radio',
      'withdraw_basenum' => 'text',
      'rechange_basenum' => 'text',
      'rechange_default' => 'textarea',
      'video_free_time' => 'text',
    ),
    'key_default' => 
    array (
      'upload_room' => '',
      'player_type' => 'cu',
      'withdraw_basenum' => '100',
      'rechange_basenum' => '1',
      'rechange_default' => '',
      'video_free_time' => '10',
    ),
    'key_tishi' => 
    array (
      'upload_room' => '',
      'player_type' => '播放器1视频地址加密，播放器2跨平台',
      'withdraw_basenum' => '提现的倍数，实际提现为该数的一倍及以上才会通过',
      'rechange_basenum' => '充值的倍数，实际充值为该数的一倍及以上才会通过，取值>=0.01',
      'rechange_default' => '默认的充值金额，一行一个,页面展示目前只支持四个',
      'video_free_time' => '单位：秒',
    ),
    'key_javascript' => 
    array (
      'upload_room' => '',
      'player_type' => '',
      'withdraw_basenum' => '',
      'rechange_basenum' => '',
      'rechange_default' => '',
      'video_free_time' => '',
    ),
  ),
  'classroom_AdminVideo_recycle' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'video_title' => 'video_title',
      'user_title' => 'user_title',
      'activity' => 'activity',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'video_title' => '课程名',
      'user_title' => '创建者',
      'activity' => '是否审核',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'video_title' => '0',
      'user_title' => '0',
      'activity' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'video_title' => '',
      'user_title' => '',
      'activity' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_appConfig' => 
  array (
    'key' => 
    array (
      'download_url' => 'download_url',
    ),
    'key_name' => 
    array (
      'download_url' => 'app下载地址',
    ),
    'key_type' => 
    array (
      'download_url' => 'text',
    ),
    'key_default' => 
    array (
      'download_url' => '',
    ),
    'key_tishi' => 
    array (
      'download_url' => '',
    ),
    'key_javascript' => 
    array (
      'download_url' => '',
    ),
  ),
  'admin_Config_site' => 
  array (
    'key' => 
    array (
      'site_closed' => 'site_closed',
      'site_name' => 'site_name',
      'site_slogan' => 'site_slogan',
      'site_header_keywords' => 'site_header_keywords',
      'site_header_description' => 'site_header_description',
      'site_company' => 'site_company',
      'site_footer' => 'site_footer',
      'site_logo_head' => 'site_logo_head',
      'site_logo_foot' => 'site_logo_foot',
      'site_qq' => 'site_qq',
      'site_qrcode' => 'site_qrcode',
      'site_closed_reason' => 'site_closed_reason',
      'sys_domain' => 'sys_domain',
      'sys_nickname' => 'sys_nickname',
      'sys_tel' => 'sys_tel',
      'sys_email' => 'sys_email',
      'home_page' => 'home_page',
      'site_theme_name' => 'site_theme_name',
      'sys_version' => 'sys_version',
      'site_online_count' => 'site_online_count',
      'site_rewrite_on' => 'site_rewrite_on',
      'site_analytics_code' => 'site_analytics_code',
    ),
    'key_name' => 
    array (
      'site_closed' => '站点状态',
      'site_name' => '站点名称',
      'site_slogan' => '站点口号',
      'site_header_keywords' => '页面头信息关键字',
      'site_header_description' => '页面头信息描述',
      'site_company' => '公司名称',
      'site_footer' => '版权信息',
      'site_logo_head' => '头部logo',
      'site_logo_foot' => '底部logo',
      'site_qq' => '站点客服qq',
      'site_qrcode' => '站点二维码',
      'site_closed_reason' => '站点关闭理由',
      'sys_domain' => '站点预留域名',
      'sys_nickname' => '站点预留昵称',
      'sys_tel' => '客服电话',
      'sys_email' => '客服邮箱',
      'home_page' => '默认首页',
      'site_theme_name' => '站点风格包',
      'sys_version' => 'JS版本',
      'site_online_count' => '站点统计',
      'site_rewrite_on' => '伪静态开关',
      'site_analytics_code' => '第三方统计代码',
    ),
    'key_type' => 
    array (
      'site_closed' => 'radio',
      'site_name' => 'text',
      'site_slogan' => 'textarea',
      'site_header_keywords' => 'textarea',
      'site_header_description' => 'textarea',
      'site_company' => 'hidden',
      'site_footer' => 'textarea',
      'site_logo_head' => 'image',
      'site_logo_foot' => 'image',
      'site_qq' => 'text',
      'site_qrcode' => 'image',
      'site_closed_reason' => 'textarea',
      'sys_domain' => 'stringText',
      'sys_nickname' => 'stringText',
      'sys_tel' => 'hidden',
      'sys_email' => 'hidden',
      'home_page' => 'hidden',
      'site_theme_name' => 'select',
      'sys_version' => 'text',
      'site_online_count' => 'radio',
      'site_rewrite_on' => 'radio',
      'site_analytics_code' => 'textarea',
    ),
    'key_default' => 
    array (
      'site_closed' => '1',
      'site_name' => '',
      'site_slogan' => '',
      'site_header_keywords' => '',
      'site_header_description' => '',
      'site_company' => '',
      'site_footer' => 'Copyright 2016 Seition All Rights Reserved',
      'site_logo_head' => '',
      'site_logo_foot' => '',
      'site_qq' => '',
      'site_qrcode' => '',
      'site_closed_reason' => '抱歉，本站暂停访问。',
      'sys_domain' => '',
      'sys_nickname' => '',
      'sys_tel' => '',
      'sys_email' => '',
      'home_page' => '',
      'site_theme_name' => '',
      'sys_version' => '',
      'site_online_count' => '0',
      'site_rewrite_on' => '0',
      'site_analytics_code' => '',
    ),
    'key_tishi' => 
    array (
      'site_closed' => '',
      'site_name' => '',
      'site_slogan' => '会显示在默认登录页、默认title中',
      'site_header_keywords' => '',
      'site_header_description' => '',
      'site_company' => '',
      'site_footer' => '如:Copyright 2016 Seition All Rights Reserved',
      'site_logo_head' => '建议尺寸：205px*45px',
      'site_logo_foot' => '建议尺寸：240px*55px',
      'site_qq' => '',
      'site_qrcode' => '',
      'site_closed_reason' => '',
      'sys_domain' => '按回车添加，多个输入后用英文逗号,分割',
      'sys_nickname' => '按回车添加，多个输入后用英文逗号,分割',
      'sys_tel' => '',
      'sys_email' => '',
      'home_page' => '',
      'site_theme_name' => '',
      'sys_version' => 'JS、CSS等静态文件修改后，可以修改此版本号，刷新用户浏览器缓存',
      'site_online_count' => '',
      'site_rewrite_on' => '请拷贝URLRewrite目录下文件到根目录，根据Web服务器来配置',
      'site_analytics_code' => '',
    ),
    'key_javascript' => 
    array (
      'site_closed' => 'admin.siteConfig(this.value)',
      'site_name' => '',
      'site_slogan' => '',
      'site_header_keywords' => '',
      'site_header_description' => '',
      'site_company' => '',
      'site_footer' => '',
      'site_logo_head' => '',
      'site_logo_foot' => '',
      'site_qq' => '',
      'site_qrcode' => '',
      'site_closed_reason' => '',
      'sys_domain' => '',
      'sys_nickname' => '',
      'sys_tel' => '',
      'sys_email' => '',
      'home_page' => '',
      'site_theme_name' => '',
      'sys_version' => '',
      'site_online_count' => '',
      'site_rewrite_on' => '',
      'site_analytics_code' => '',
    ),
  ),
  'live_Admin_editGh' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'myAdminLevelhidden' => 'myAdminLevelhidden',
      'title' => 'title',
      'introduce' => 'introduce',
      'price' => 'price',
      'supportMobile' => 'supportMobile',
      'maxNum' => 'maxNum',
      'liveMode' => 'liveMode',
      'score' => 'score',
      'cover' => 'cover',
      'account' => 'account',
      'passwd' => 'passwd',
      'info' => 'info',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '分类',
      'title' => '名称',
      'introduce' => '简介',
      'price' => '价格',
      'supportMobile' => '是否支持手机端',
      'maxNum' => '观看人数上限',
      'liveMode' => '直播模式',
      'score' => '评分',
      'cover' => '课程封面',
      'account' => '讲师账号',
      'passwd' => '讲师密码',
      'info' => '讲师简介',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'myAdminLevelhidden' => 'define',
      'title' => 'text',
      'introduce' => 'textarea',
      'price' => 'text',
      'supportMobile' => 'radio',
      'maxNum' => 'text',
      'liveMode' => 'radio',
      'score' => 'text',
      'cover' => 'image',
      'account' => 'text',
      'passwd' => 'text',
      'info' => 'textarea',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_default' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '',
      'title' => '',
      'introduce' => '',
      'price' => '',
      'supportMobile' => '',
      'maxNum' => '',
      'liveMode' => '',
      'score' => '',
      'cover' => '',
      'account' => '',
      'passwd' => '',
      'info' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '',
      'title' => '',
      'introduce' => '',
      'price' => '',
      'supportMobile' => '',
      'maxNum' => '0无限制',
      'liveMode' => '支持手机端选择大视频',
      'score' => '请输入1-5的值',
      'cover' => '',
      'account' => '',
      'passwd' => '',
      'info' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '',
      'title' => '',
      'introduce' => '',
      'price' => '',
      'supportMobile' => '',
      'maxNum' => '',
      'liveMode' => '',
      'score' => '',
      'cover' => '',
      'account' => '',
      'passwd' => '',
      'info' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'classroom_AdminVip_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'sort' => 'sort',
      'vip_year' => 'vip_year',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '名称',
      'sort' => '等级',
      'vip_year' => '年费',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'sort' => '0',
      'vip_year' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'sort' => '',
      'vip_year' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVip_addVip' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'sort' => 'sort',
      'vip_year' => 'vip_year',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '名称',
      'sort' => '等级',
      'vip_year' => '年费',
    ),
    'key_type' => 
    array (
      'id' => 'text',
      'title' => 'text',
      'sort' => 'text',
      'vip_year' => 'text',
    ),
    'key_default' => 
    array (
      'id' => '',
      'title' => '',
      'sort' => '',
      'vip_year' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'sort' => '数字越高，等级越高',
      'vip_year' => '单位：元',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'sort' => '',
      'vip_year' => '',
    ),
  ),
  'live_AdminConfig_ghConfig' => 
  array (
    'key' => 
    array (
      'customer' => 'customer',
      'secretKey' => 'secretKey',
      'api_url' => 'api_url',
      'video_url' => 'video_url',
    ),
    'key_name' => 
    array (
      'customer' => '',
      'secretKey' => '',
      'api_url' => '',
      'video_url' => '',
    ),
    'key_type' => 
    array (
      'customer' => 'text',
      'secretKey' => 'text',
      'api_url' => 'text',
      'video_url' => 'text',
    ),
    'key_default' => 
    array (
      'customer' => '',
      'secretKey' => '',
      'api_url' => '',
      'video_url' => '',
    ),
    'key_tishi' => 
    array (
      'customer' => '',
      'secretKey' => '',
      'api_url' => 'api地址',
      'video_url' => '视频地址',
    ),
    'key_javascript' => 
    array (
      'customer' => '',
      'secretKey' => '',
      'api_url' => '',
      'video_url' => '',
    ),
  ),
  'classroom_AdminTeacher_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'name' => 'name',
      'face' => 'face',
      'title' => 'title',
      'inro' => 'inro',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '讲师id',
      'uid' => '用户id',
      'name' => '讲师名称',
      'face' => '头像',
      'title' => '讲师职称',
      'inro' => '讲师介绍',
      'DOACTION' => '操作 　　',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'name' => '0',
      'face' => '0',
      'title' => '0',
      'inro' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'name' => '',
      'face' => '',
      'title' => '',
      'inro' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_register' => 
  array (
    'key' => 
    array (
      'account_type' => 'account_type',
      'default_user_group' => 'default_user_group',
    ),
    'key_name' => 
    array (
      'account_type' => '注册类型',
      'default_user_group' => '默认用户组',
    ),
    'key_type' => 
    array (
      'account_type' => 'radio',
      'default_user_group' => 'checkbox',
    ),
    'key_default' => 
    array (
      'account_type' => '',
      'default_user_group' => '',
    ),
    'key_tishi' => 
    array (
      'account_type' => '',
      'default_user_group' => '',
    ),
    'key_javascript' => 
    array (
      'account_type' => '',
      'default_user_group' => '',
    ),
  ),
  'live_Admin_end' => 
  array (
    'key' => 
    array (
      'number' => 'number',
      'subject' => 'subject',
      'speaker' => 'speaker',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'teacherJoinUrl' => 'teacherJoinUrl',
      'studentJoinUrl' => 'studentJoinUrl',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentClientToken' => 'studentClientToken',
      'studentToken' => 'studentToken',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'is_active' => 'is_active',
      'is_del' => 'is_del',
      'price' => 'price',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'number' => '编号',
      'subject' => '直播课堂名称',
      'speaker' => '演讲人',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'teacherJoinUrl' => '老师/助教',
      'studentJoinUrl' => '学生URL',
      'teacherToken' => '老师口令',
      'assistantToken' => '助教口令',
      'studentClientToken' => '学生客户端',
      'studentToken' => '学生口令',
      'clientJoin' => '客户端',
      'webJoin' => 'WEB端',
      'is_active' => '是否审核',
      'is_del' => '是否开启',
      'price' => '价格',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'number' => '0',
      'subject' => '0',
      'speaker' => '0',
      'startDate' => '0',
      'invalidDate' => '0',
      'teacherJoinUrl' => '1',
      'studentJoinUrl' => '1',
      'teacherToken' => '0',
      'assistantToken' => '0',
      'studentClientToken' => '0',
      'studentToken' => '0',
      'clientJoin' => '0',
      'webJoin' => '0',
      'is_active' => '0',
      'is_del' => '0',
      'price' => '0',
      'SDK_ID' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'number' => '',
      'subject' => '',
      'speaker' => '',
      'startDate' => '',
      'invalidDate' => '',
      'teacherJoinUrl' => '',
      'studentJoinUrl' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentClientToken' => '',
      'studentToken' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'is_active' => '',
      'is_del' => '',
      'price' => '',
      'SDK_ID' => '',
      'DOACTION' => '',
    ),
  ),
  'live_Admin_close' => 
  array (
    'key' => 
    array (
      'number' => 'number',
      'subject' => 'subject',
      'speaker' => 'speaker',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'teacherJoinUrl' => 'teacherJoinUrl',
      'studentJoinUrl' => 'studentJoinUrl',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentClientToken' => 'studentClientToken',
      'studentToken' => 'studentToken',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'is_active' => 'is_active',
      'is_del' => 'is_del',
      'price' => 'price',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'number' => '编号',
      'subject' => '直播课堂名称',
      'speaker' => '演讲人',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'teacherJoinUrl' => '老师/助教',
      'studentJoinUrl' => '学生URL',
      'teacherToken' => '老师口令',
      'assistantToken' => '助教口令',
      'studentClientToken' => '学生客户端',
      'studentToken' => '学生口令',
      'clientJoin' => '客户端',
      'webJoin' => 'WEB端',
      'is_active' => '是否审核',
      'is_del' => '是否开启',
      'price' => '价格',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'number' => '0',
      'subject' => '0',
      'speaker' => '0',
      'startDate' => '0',
      'invalidDate' => '0',
      'teacherJoinUrl' => '1',
      'studentJoinUrl' => '1',
      'teacherToken' => '0',
      'assistantToken' => '0',
      'studentClientToken' => '0',
      'studentToken' => '0',
      'clientJoin' => '0',
      'webJoin' => '0',
      'is_active' => '0',
      'is_del' => '0',
      'price' => '0',
      'SDK_ID' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'number' => '',
      'subject' => '',
      'speaker' => '',
      'startDate' => '',
      'invalidDate' => '',
      'teacherJoinUrl' => '',
      'studentJoinUrl' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentClientToken' => '',
      'studentToken' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'is_active' => '',
      'is_del' => '',
      'price' => '',
      'SDK_ID' => '',
      'DOACTION' => '',
    ),
  ),
  'live_Admin_update' => 
  array (
    'key' => 
    array (
      'SDK_ID' => 'SDK_ID',
      'subject' => 'subject',
      'speaker' => 'speaker',
      'cover' => 'cover',
      'price' => 'price',
      'myAdminLevelhidden' => 'myAdminLevelhidden',
      'score' => 'score',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentToken' => 'studentToken',
      'scheduleInfo' => 'scheduleInfo',
      'description' => 'description',
    ),
    'key_name' => 
    array (
      'SDK_ID' => '',
      'subject' => '直播课程名称',
      'speaker' => '演讲人',
      'cover' => '封面照',
      'price' => '价格',
      'myAdminLevelhidden' => '分类',
      'score' => '评分',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'clientJoin' => '学生客户端',
      'webJoin' => '学生WEB端',
      'teacherToken' => ' 老师口令',
      'assistantToken' => ' 助教口令',
      'studentToken' => '学生客户端口令',
      'scheduleInfo' => '课程安排信息',
      'description' => '课程信息简介',
    ),
    'key_type' => 
    array (
      'SDK_ID' => 'hidden',
      'subject' => 'text',
      'speaker' => 'select',
      'cover' => 'image',
      'price' => 'text',
      'myAdminLevelhidden' => 'define',
      'score' => 'text',
      'startDate' => 'date',
      'invalidDate' => 'date',
      'clientJoin' => 'radio',
      'webJoin' => 'radio',
      'teacherToken' => 'text',
      'assistantToken' => 'text',
      'studentToken' => 'text',
      'scheduleInfo' => 'textarea',
      'description' => 'textarea',
    ),
    'key_default' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'myAdminLevelhidden' => '',
      'score' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'scheduleInfo' => '',
      'description' => '',
    ),
    'key_tishi' => 
    array (
      'SDK_ID' => '',
      'subject' => '请输入直播课堂的名称，不能与已有直播课堂名称相同',
      'speaker' => '',
      'cover' => '建议上传270*160图片，以免造成图片变形',
      'price' => '',
      'myAdminLevelhidden' => '',
      'score' => '请输入0-5之间的整数',
      'startDate' => '必须大于当前时间',
      'invalidDate' => '不能小于开始时间',
      'clientJoin' => '是否开启学生客户端',
      'webJoin' => '是否开启学生WEB端',
      'teacherToken' => '四个口令值不能相同',
      'assistantToken' => '四个口令值不能相同',
      'studentToken' => '四个口令值不能相同',
      'scheduleInfo' => '请输入该堂课程详细安排信息，越详细越好介绍',
      'description' => '请输入该堂课程信息简介',
    ),
    'key_javascript' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'myAdminLevelhidden' => '',
      'score' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'scheduleInfo' => '',
      'description' => '',
    ),
  ),
  'live_Admin_closeZshd' => 
  array (
    'key' => 
    array (
      'number' => 'number',
      'subject' => 'subject',
      'speaker' => 'speaker',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'teacherJoinUrl' => 'teacherJoinUrl',
      'studentJoinUrl' => 'studentJoinUrl',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentClientToken' => 'studentClientToken',
      'studentToken' => 'studentToken',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'is_active' => 'is_active',
      'is_del' => 'is_del',
      'price' => 'price',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'number' => '编号',
      'subject' => '直播课堂名称',
      'speaker' => '主讲人',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'teacherJoinUrl' => '教师加入地址',
      'studentJoinUrl' => '学生加入地址',
      'teacherToken' => '老师口令',
      'assistantToken' => '助教口令',
      'studentClientToken' => '学生客户端口令',
      'studentToken' => '学生web端口令',
      'clientJoin' => '客户端',
      'webJoin' => 'WEB端',
      'is_active' => '是否审核',
      'is_del' => '是否开启',
      'price' => '价格',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'number' => '0',
      'subject' => '0',
      'speaker' => '0',
      'startDate' => '0',
      'invalidDate' => '0',
      'teacherJoinUrl' => '1',
      'studentJoinUrl' => '1',
      'teacherToken' => '0',
      'assistantToken' => '0',
      'studentClientToken' => '0',
      'studentToken' => '0',
      'clientJoin' => '0',
      'webJoin' => '0',
      'is_active' => '0',
      'is_del' => '0',
      'price' => '0',
      'SDK_ID' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'number' => '',
      'subject' => '',
      'speaker' => '',
      'startDate' => '',
      'invalidDate' => '',
      'teacherJoinUrl' => '',
      'studentJoinUrl' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentClientToken' => '',
      'studentToken' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'is_active' => '',
      'is_del' => '',
      'price' => '',
      'SDK_ID' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminAlbum_addAlbum' => 
  array (
    'key' => 
    array (
      'album_category' => 'album_category',
      'album_title' => 'album_title',
      'album_intro' => 'album_intro',
      'price' => 'price',
      'album_html' => 'album_html',
      'cover' => 'cover',
      'album_tag' => 'album_tag',
      'listingtime' => 'listingtime',
      'uctime' => 'uctime',
      'is_best' => 'is_best',
    ),
    'key_name' => 
    array (
      'album_category' => '专辑分类',
      'album_title' => '专辑名称',
      'album_intro' => '专辑简介',
      'price' => '价格',
      'album_html' => '专辑包含课程',
      'cover' => '专辑封面',
      'album_tag' => '专辑标签',
      'listingtime' => '上架时间',
      'uctime' => '下架时间',
      'is_best' => '是否精选',
    ),
    'key_type' => 
    array (
      'album_category' => 'define',
      'album_title' => 'text',
      'album_intro' => 'textarea',
      'price' => 'text',
      'album_html' => 'define',
      'cover' => 'image',
      'album_tag' => 'text',
      'listingtime' => 'date',
      'uctime' => 'date',
      'is_best' => 'checkbox',
    ),
    'key_default' => 
    array (
      'album_category' => '',
      'album_title' => '',
      'album_intro' => '',
      'price' => '',
      'album_html' => '',
      'cover' => '',
      'album_tag' => '',
      'listingtime' => '',
      'uctime' => '',
      'is_best' => '',
    ),
    'key_tishi' => 
    array (
      'album_category' => '',
      'album_title' => '',
      'album_intro' => '',
      'price' => '',
      'album_html' => '',
      'cover' => '建议尺寸：520*320',
      'album_tag' => '多个标签请以半角<,>逗号分割',
      'listingtime' => '',
      'uctime' => '',
      'is_best' => '',
    ),
    'key_javascript' => 
    array (
      'album_category' => '',
      'album_title' => '',
      'album_intro' => '',
      'price' => '',
      'album_html' => '',
      'cover' => '',
      'album_tag' => '',
      'listingtime' => '',
      'uctime' => '',
      'is_best' => '',
    ),
  ),
  'classroom_AdminTeacher_addTeacher' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'name' => 'name',
      'title' => 'title',
      'head_id' => 'head_id',
      'teacher_age' => 'teacher_age',
      'high_school' => 'high_school',
      'graduate_school' => 'graduate_school',
      'label' => 'label',
      'teach_way' => 'teach_way',
      'inro' => 'inro',
      'teach_evaluation' => 'teach_evaluation',
    ),
    'key_name' => 
    array (
      'uid' => '用户名称',
      'name' => '讲师名称',
      'title' => '讲师职称',
      'head_id' => '讲师照片',
      'teacher_age' => '教龄',
      'high_school' => '最高学历',
      'graduate_school' => '毕业院校',
      'label' => '标签',
      'teach_way' => '授课方式',
      'inro' => '讲师简介',
      'teach_evaluation' => '教学特点',
    ),
    'key_type' => 
    array (
      'uid' => 'oneUser',
      'name' => 'text',
      'title' => 'text',
      'head_id' => 'image',
      'teacher_age' => 'text',
      'high_school' => 'text',
      'graduate_school' => 'text',
      'label' => 'text',
      'teach_way' => 'text',
      'inro' => 'textarea',
      'teach_evaluation' => 'text',
    ),
    'key_default' => 
    array (
      'uid' => '',
      'name' => '',
      'title' => '',
      'head_id' => '',
      'teacher_age' => '',
      'high_school' => '',
      'graduate_school' => '',
      'label' => '',
      'teach_way' => '',
      'inro' => '',
      'teach_evaluation' => '',
    ),
    'key_tishi' => 
    array (
      'uid' => '',
      'name' => '请输入讲师的名称',
      'title' => '请输入讲师的职称',
      'head_id' => '建议尺寸：180*180',
      'teacher_age' => '',
      'high_school' => '',
      'graduate_school' => '',
      'label' => '',
      'teach_way' => '',
      'inro' => '请输入讲师的简介',
      'teach_evaluation' => '',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'name' => '',
      'title' => '',
      'head_id' => '',
      'teacher_age' => '',
      'high_school' => '',
      'graduate_school' => '',
      'label' => '',
      'teach_way' => '',
      'inro' => '',
      'teach_evaluation' => '',
    ),
  ),
  'classroom_AdminAlbum_editAlbum' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'myAdminLevelhidden' => 'myAdminLevelhidden',
      'album_title' => 'album_title',
      'album_intro' => 'album_intro',
      'price' => 'price',
      'album_html' => 'album_html',
      'cover' => 'cover',
      'album_tag' => 'album_tag',
      'listingtime' => 'listingtime',
      'uctime' => 'uctime',
      'is_best' => 'is_best',
    ),
    'key_name' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '专辑分类',
      'album_title' => '专辑名称',
      'album_intro' => '专辑简介',
      'price' => '价格',
      'album_html' => '包含课程',
      'cover' => '封面',
      'album_tag' => '专辑标签',
      'listingtime' => '上架时间',
      'uctime' => '下架时间',
      'is_best' => '是否精选',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'myAdminLevelhidden' => 'define',
      'album_title' => 'text',
      'album_intro' => 'textarea',
      'price' => 'text',
      'album_html' => 'define',
      'cover' => 'image',
      'album_tag' => 'text',
      'listingtime' => 'date',
      'uctime' => 'date',
      'is_best' => 'checkbox',
    ),
    'key_default' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '',
      'album_title' => '',
      'album_intro' => '',
      'price' => '',
      'album_html' => '',
      'cover' => '',
      'album_tag' => '',
      'listingtime' => '',
      'uctime' => '',
      'is_best' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '',
      'album_title' => '',
      'album_intro' => '',
      'price' => '',
      'album_html' => '',
      'cover' => '建议尺寸：520*320',
      'album_tag' => '多个tag请用半角逗号(,)分隔',
      'listingtime' => '',
      'uctime' => '',
      'is_best' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'myAdminLevelhidden' => '',
      'album_title' => '',
      'album_intro' => '',
      'price' => '',
      'album_html' => '',
      'cover' => '',
      'album_tag' => '',
      'listingtime' => '',
      'uctime' => '',
      'is_best' => '',
    ),
  ),
  'classroom_AdminLearnc_recharge' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'catagroy' => 'catagroy',
      'money' => 'money',
      'type' => 'type',
      'vip_length' => 'vip_length',
      'note' => 'note',
      'ctime' => 'ctime',
      'status' => 'status',
      'stime' => 'stime',
      'pay_order' => 'pay_order',
      'pay_type' => 'pay_type',
    ),
    'key_name' => 
    array (
      'id' => '编号',
      'uname' => '用户名',
      'realname' => '真实姓名',
      'idcard' => '身份证号',
      'catagroy' => '用户权限',
      'money' => '金额',
      'type' => '类型',
      'vip_length' => 'vip到期时间',
      'note' => '备注',
      'ctime' => '创建时间',
      'status' => '状态',
      'stime' => '完成时间',
      'pay_order' => '支付平台订单号',
      'pay_type' => '支付方式',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'realname' => '0',
      'idcard' => '0',
      'catagroy' => '0',
      'money' => '0',
      'type' => '0',
      'vip_length' => '1',
      'note' => '0',
      'ctime' => '0',
      'status' => '0',
      'stime' => '0',
      'pay_order' => '0',
      'pay_type' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'realname' => '',
      'idcard' => '',
      'catagroy' => '',
      'money' => '',
      'type' => '',
      'vip_length' => '',
      'note' => '',
      'ctime' => '',
      'status' => '',
      'stime' => '',
      'pay_order' => '',
      'pay_type' => '',
    ),
  ),
  'live_Admin_addZshd' => 
  array (
    'key' => 
    array (
      'subject' => 'subject',
      'speaker' => 'speaker',
      'cover' => 'cover',
      'price' => 'price',
      'cate_id' => 'cate_id',
      'score' => 'score',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentClientToken' => 'studentClientToken',
      'studentToken' => 'studentToken',
      'scheduleInfo' => 'scheduleInfo',
      'description' => 'description',
    ),
    'key_name' => 
    array (
      'subject' => '直播课程名称',
      'speaker' => '主讲人',
      'cover' => '封面照',
      'price' => '价格',
      'cate_id' => '分类',
      'score' => '评分',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'clientJoin' => '学生客户端',
      'webJoin' => '学生WEB端',
      'teacherToken' => ' 老师口令',
      'assistantToken' => ' 助教口令',
      'studentClientToken' => '学生客户端口令',
      'studentToken' => '学生WEB端口令',
      'scheduleInfo' => '课程安排信息',
      'description' => '课程信息简介',
    ),
    'key_type' => 
    array (
      'subject' => 'text',
      'speaker' => 'select',
      'cover' => 'image',
      'price' => 'text',
      'cate_id' => 'define',
      'score' => 'text',
      'startDate' => 'date',
      'invalidDate' => 'date',
      'clientJoin' => 'radio',
      'webJoin' => 'radio',
      'teacherToken' => 'text',
      'assistantToken' => 'text',
      'studentClientToken' => 'text',
      'studentToken' => 'text',
      'scheduleInfo' => 'textarea',
      'description' => 'textarea',
    ),
    'key_default' => 
    array (
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'cate_id' => '',
      'score' => '4',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '498527',
      'assistantToken' => '594384',
      'studentClientToken' => '495423',
      'studentToken' => '685942',
      'scheduleInfo' => '',
      'description' => '',
    ),
    'key_tishi' => 
    array (
      'subject' => '请输入直播课堂的名称，不能与已有直播课堂名称相同',
      'speaker' => '',
      'cover' => '建议尺寸：520*320',
      'price' => '',
      'cate_id' => '',
      'score' => '默认值 可以修改 请输入0-5之间的整数',
      'startDate' => '必须大于当前时间',
      'invalidDate' => '不能小于开始时间',
      'clientJoin' => '是否开启学生客户端',
      'webJoin' => '是否开启学生WEB端',
      'teacherToken' => '默认值（可以修改，必须为6-15位的数字）, 四个口令值不能相同',
      'assistantToken' => '默认值（可以修改，必须为6-15位的数字）, 四个口令值不能相同',
      'studentClientToken' => '默认值（可以修改，必须为6-15位的数字）, 四个口令值不能相同',
      'studentToken' => '默认值（可以修改，必须为6-15位的数字）, 四个口令值不能相同',
      'scheduleInfo' => '请输入该堂课程详细安排信息，越详细越好介绍',
      'description' => '请输入该堂课程信息简介',
    ),
    'key_javascript' => 
    array (
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'cate_id' => '',
      'score' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentClientToken' => '',
      'studentToken' => '',
      'scheduleInfo' => '',
      'description' => '',
    ),
  ),
  'live_Admin_addGh' => 
  array (
    'key' => 
    array (
      'cate_id' => 'cate_id',
      'title' => 'title',
      'introduce' => 'introduce',
      'price' => 'price',
      'maxNum' => 'maxNum',
      'supportMobile' => 'supportMobile',
      'liveMode' => 'liveMode',
      'score' => 'score',
      'cover' => 'cover',
      'account' => 'account',
      'passwd' => 'passwd',
      'info' => 'info',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'cate_id' => '分类',
      'title' => '名称',
      'introduce' => '简介',
      'price' => '价格',
      'maxNum' => '观看人数上线',
      'supportMobile' => '是否支持手机端',
      'liveMode' => '直播模式',
      'score' => '评分',
      'cover' => '课程封面',
      'account' => '讲师账号',
      'passwd' => '讲师密码',
      'info' => '讲师简介',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'cate_id' => 'define',
      'title' => 'text',
      'introduce' => 'textarea',
      'price' => 'text',
      'maxNum' => 'text',
      'supportMobile' => 'radio',
      'liveMode' => 'radio',
      'score' => 'text',
      'cover' => 'image',
      'account' => 'text',
      'passwd' => 'text',
      'info' => 'textarea',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_default' => 
    array (
      'cate_id' => '',
      'title' => '',
      'introduce' => '',
      'price' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'score' => '5',
      'cover' => '',
      'account' => '',
      'passwd' => '',
      'info' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_tishi' => 
    array (
      'cate_id' => '',
      'title' => '',
      'introduce' => '',
      'price' => '',
      'maxNum' => '0无限制',
      'supportMobile' => '',
      'liveMode' => '支持手机端请选择大视频',
      'score' => '请输入1-5的值',
      'cover' => '建议尺寸：520*320',
      'account' => '',
      'passwd' => '',
      'info' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'cate_id' => '',
      'title' => '',
      'introduce' => '',
      'price' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'score' => '',
      'cover' => '',
      'account' => '',
      'passwd' => '',
      'info' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'live_Admin_editZshd' => 
  array (
    'key' => 
    array (
      'SDK_ID' => 'SDK_ID',
      'subject' => 'subject',
      'speaker' => 'speaker',
      'cover' => 'cover',
      'price' => 'price',
      'myAdminLevelhidden' => 'myAdminLevelhidden',
      'score' => 'score',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentToken' => 'studentToken',
      'studentClientToken' => 'studentClientToken',
      'scheduleInfo' => 'scheduleInfo',
      'description' => 'description',
    ),
    'key_name' => 
    array (
      'SDK_ID' => '直播课程名称',
      'subject' => '直播课程名称',
      'speaker' => '主讲人',
      'cover' => '封面照',
      'price' => '价格',
      'myAdminLevelhidden' => '分类',
      'score' => '评分',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'clientJoin' => '学生客户端',
      'webJoin' => '学生WEB端',
      'teacherToken' => '老师口令',
      'assistantToken' => '助教口令',
      'studentToken' => '学生web端口令',
      'studentClientToken' => '学生客户端口令',
      'scheduleInfo' => '课程安排信息',
      'description' => '课程信息简介',
    ),
    'key_type' => 
    array (
      'SDK_ID' => 'text',
      'subject' => 'text',
      'speaker' => 'select',
      'cover' => 'image',
      'price' => 'text',
      'myAdminLevelhidden' => 'define',
      'score' => 'text',
      'startDate' => 'date',
      'invalidDate' => 'date',
      'clientJoin' => 'radio',
      'webJoin' => 'radio',
      'teacherToken' => 'text',
      'assistantToken' => 'text',
      'studentToken' => 'text',
      'studentClientToken' => 'text',
      'scheduleInfo' => 'textarea',
      'description' => 'textarea',
    ),
    'key_default' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'myAdminLevelhidden' => '',
      'score' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'studentClientToken' => '',
      'scheduleInfo' => '',
      'description' => '',
    ),
    'key_tishi' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'myAdminLevelhidden' => '',
      'score' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'studentClientToken' => '',
      'scheduleInfo' => '',
      'description' => '',
    ),
    'key_javascript' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker' => '',
      'cover' => '',
      'price' => '',
      'myAdminLevelhidden' => '',
      'score' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'studentClientToken' => '',
      'scheduleInfo' => '',
      'description' => '',
    ),
  ),
  'admin_Application_about' => 
  array (
    'key' => 
    array (
      'about' => 'about',
    ),
    'key_name' => 
    array (
      'about' => '',
    ),
    'key_type' => 
    array (
      'about' => 'editor',
    ),
    'key_default' => 
    array (
      'about' => '',
    ),
    'key_tishi' => 
    array (
      'about' => '',
    ),
    'key_javascript' => 
    array (
      'about' => '',
    ),
  ),
  'live_Admin_endZshd' => 
  array (
    'key' => 
    array (
      'number' => 'number',
      'subject' => 'subject',
      'speaker' => 'speaker',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'teacherJoinUrl' => 'teacherJoinUrl',
      'studentJoinUrl' => 'studentJoinUrl',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentClientToken' => 'studentClientToken',
      'studentToken' => 'studentToken',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'is_active' => 'is_active',
      'is_del' => 'is_del',
      'price' => 'price',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'number' => '编号',
      'subject' => '直播课堂名称',
      'speaker' => '主讲人',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'teacherJoinUrl' => '老师地址',
      'studentJoinUrl' => '助教地址',
      'teacherToken' => '老师口令',
      'assistantToken' => '助教口令',
      'studentClientToken' => '学生客户端口令',
      'studentToken' => '学生web端口令',
      'clientJoin' => '客户端',
      'webJoin' => 'web端',
      'is_active' => '是否审核',
      'is_del' => '是否开启',
      'price' => '价格',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'number' => '0',
      'subject' => '0',
      'speaker' => '0',
      'startDate' => '0',
      'invalidDate' => '0',
      'teacherJoinUrl' => '1',
      'studentJoinUrl' => '1',
      'teacherToken' => '0',
      'assistantToken' => '0',
      'studentClientToken' => '0',
      'studentToken' => '0',
      'clientJoin' => '0',
      'webJoin' => '0',
      'is_active' => '0',
      'is_del' => '0',
      'price' => '0',
      'SDK_ID' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'number' => '',
      'subject' => '',
      'speaker' => '',
      'startDate' => '',
      'invalidDate' => '',
      'teacherJoinUrl' => '',
      'studentJoinUrl' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentClientToken' => '',
      'studentToken' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'is_active' => '',
      'is_del' => '',
      'price' => '',
      'SDK_ID' => '',
      'DOACTION' => '',
    ),
  ),
  'live_Admin_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'uname' => 'uname',
      'price' => 'price',
      'account' => 'account',
      'passwd' => 'passwd',
      'maxNum' => 'maxNum',
      'supportMobile' => 'supportMobile',
      'introduce' => 'introduce',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '直播名称',
      'uname' => '操作人',
      'price' => '价格',
      'account' => '讲师账号',
      'passwd' => '讲师密码',
      'maxNum' => '观看人数上限',
      'supportMobile' => '手机端',
      'introduce' => '课程简介',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'title' => '0',
      'uname' => '0',
      'price' => '0',
      'account' => '0',
      'passwd' => '0',
      'maxNum' => '0',
      'supportMobile' => '0',
      'introduce' => '0',
      'beginTime' => '0',
      'endTime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'uname' => '',
      'price' => '',
      'account' => '',
      'passwd' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'introduce' => '',
      'beginTime' => '',
      'endTime' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminPaper_recycle' => 
  array (
    'key' => 
    array (
      'paper_id' => 'paper_id',
      'paper_status' => 'paper_status',
      'paper_name' => 'paper_name',
      'paper_describe' => 'paper_describe',
      'paper_type' => 'paper_type',
      'paper_point' => 'paper_point',
      'paper_update_date' => 'paper_update_date',
      'paper_insert_date' => 'paper_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'paper_id' => '试卷ID',
      'paper_status' => '试卷状态',
      'paper_name' => '试卷名称',
      'paper_describe' => '试卷描述',
      'paper_type' => '试卷类型',
      'paper_point' => '试卷分数',
      'paper_update_date' => '最后一次修改时间',
      'paper_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'paper_id' => '0',
      'paper_status' => '0',
      'paper_name' => '0',
      'paper_describe' => '0',
      'paper_type' => '0',
      'paper_point' => '0',
      'paper_update_date' => '0',
      'paper_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'paper_id' => '',
      'paper_status' => '',
      'paper_name' => '',
      'paper_describe' => '',
      'paper_type' => '',
      'paper_point' => '',
      'paper_update_date' => '',
      'paper_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminCategory_option' => 
  array (
    'key' => 
    array (
      'question_type_id' => 'question_type_id',
      'question_type_title' => 'question_type_title',
      'question_type_admin' => 'question_type_admin',
      'question_type_insert_date' => 'question_type_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'question_type_id' => 'ID',
      'question_type_title' => '标题',
      'question_type_admin' => '添加者',
      'question_type_insert_date' => '时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'question_type_id' => '0',
      'question_type_title' => '0',
      'question_type_admin' => '0',
      'question_type_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'question_type_id' => '',
      'question_type_title' => '',
      'question_type_admin' => '',
      'question_type_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Topic_newZixun' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'desc' => 'desc',
      'text' => 'text',
      'image' => 'image',
      'cate' => 'cate',
      're' => 're',
      'recount' => 'recount',
    ),
    'key_name' => 
    array (
      'title' => '标题',
      'desc' => '摘要',
      'text' => '资讯内容',
      'image' => '封面图片',
      'cate' => '资讯分类',
      're' => '是否推荐',
      'recount' => '推荐权重',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'desc' => 'textarea',
      'text' => 'editor',
      'image' => 'image',
      'cate' => 'select',
      're' => 'radio',
      'recount' => 'text',
    ),
    'key_default' => 
    array (
      'title' => '',
      'desc' => '',
      'text' => '',
      'image' => '',
      'cate' => '',
      're' => '',
      'recount' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'desc' => '',
      'text' => '',
      'image' => '',
      'cate' => '',
      're' => '',
      'recount' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'desc' => '',
      'text' => '',
      'image' => '',
      'cate' => '',
      're' => '',
      'recount' => '',
    ),
  ),
  'classroom_AdminVideo_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'video_title' => 'video_title',
      'cover' => 'cover',
      'v_price' => 'v_price',
      'user_title' => 'user_title',
      'video_collect_count' => 'video_collect_count',
      'video_comment_count' => 'video_comment_count',
      'video_question_count' => 'video_question_count',
      'video_note_count' => 'video_note_count',
      'video_score' => 'video_score',
      'video_order_count' => 'video_order_count',
      'activity' => 'activity',
      'best' => 'best',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'video_title' => '课程名称',
      'cover' => '课程封面',
      'v_price' => '价格',
      'user_title' => '上传用户',
      'video_collect_count' => '收藏数',
      'video_comment_count' => '评论数',
      'video_question_count' => '提问数',
      'video_note_count' => '笔记数',
      'video_score' => '课程评分',
      'video_order_count' => '订单数',
      'activity' => '是否审核',
      'best' => '是否精选',
      'ctime' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'video_title' => '0',
      'cover' => '0',
      'v_price' => '0',
      'user_title' => '0',
      'video_collect_count' => '0',
      'video_comment_count' => '0',
      'video_question_count' => '0',
      'video_note_count' => '0',
      'video_score' => '0',
      'video_order_count' => '0',
      'activity' => '0',
      'best' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'video_title' => '',
      'cover' => '',
      'v_price' => '',
      'user_title' => '',
      'video_collect_count' => '',
      'video_comment_count' => '',
      'video_question_count' => '',
      'video_note_count' => '',
      'video_score' => '',
      'video_order_count' => '',
      'activity' => '',
      'best' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_videoLib' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'title' => 'title',
      'type' => 'type',
      'ctime' => 'ctime',
      'status_txt' => 'status_txt',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uid' => '创建人',
      'title' => '名称',
      'type' => '类型',
      'ctime' => '创建时间',
      'status_txt' => '状态',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'title' => '0',
      'type' => '0',
      'ctime' => '0',
      'status_txt' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'title' => '',
      'type' => '',
      'ctime' => '',
      'status_txt' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Application_appConfig' => 
  array (
    'key' => 
    array (
      'download_url' => 'download_url',
    ),
    'key_name' => 
    array (
      'download_url' => 'APP下载地址',
    ),
    'key_type' => 
    array (
      'download_url' => 'text',
    ),
    'key_default' => 
    array (
      'download_url' => '',
    ),
    'key_tishi' => 
    array (
      'download_url' => '',
    ),
    'key_javascript' => 
    array (
      'download_url' => '',
    ),
  ),
  'admin_Application_addSlide' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'image' => 'image',
      'type' => 'type',
      'data' => 'data',
    ),
    'key_name' => 
    array (
      'title' => '标题',
      'image' => '图片',
      'type' => '类型',
      'data' => '链接地址',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'image' => 'text',
      'type' => 'select',
      'data' => 'text',
    ),
    'key_default' => 
    array (
      'title' => '',
      'image' => '',
      'type' => '',
      'data' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'image' => '',
      'type' => '',
      'data' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'image' => '',
      'type' => '',
      'data' => '',
    ),
  ),
  'admin_Application_index' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'image' => 'image',
      'type' => 'type',
      'data' => 'data',
      'doAction' => 'doAction',
    ),
    'key_name' => 
    array (
      'title' => '标题',
      'image' => '图片',
      'type' => '类型',
      'data' => '链接地址',
      'doAction' => '操作',
    ),
    'key_hidden' => 
    array (
      'title' => '0',
      'image' => '0',
      'type' => '0',
      'data' => '0',
      'doAction' => '0',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'image' => '',
      'type' => '',
      'data' => '',
      'doAction' => '',
    ),
  ),
  'admin_Application_feedback' => 
  array (
    'key' => 
    array (
      'user' => 'user',
      'content' => 'content',
      'time' => 'time',
      'doaction' => 'doaction',
    ),
    'key_name' => 
    array (
      'user' => '用户',
      'content' => '内容',
      'time' => '时间',
      'doaction' => '操作',
    ),
    'key_hidden' => 
    array (
      'user' => '0',
      'content' => '0',
      'time' => '0',
      'doaction' => '0',
    ),
    'key_javascript' => 
    array (
      'user' => '',
      'content' => '',
      'time' => '',
      'doaction' => '',
    ),
  ),
  'live_AdminLive_closeLive' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'mhm_id' => 'mhm_id',
      'title' => 'title',
      'price' => 'price',
      'score' => 'score',
      'cover' => 'cover',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
      'is_re' => 'is_re',
      'is_charge' => 'is_charge',
      'is_open' => 'is_open',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户id',
      'mhm_id' => '机构id',
      'title' => '标题',
      'price' => '价格',
      'score' => '评分',
      'cover' => '封面',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
      'is_re' => '是否认证',
      'is_charge' => '是否免费',
      'is_open' => '是否删除',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'mhm_id' => '0',
      'title' => '0',
      'price' => '0',
      'score' => '0',
      'cover' => '0',
      'beginTime' => '0',
      'endTime' => '0',
      'is_re' => '0',
      'is_charge' => '0',
      'is_open' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'mhm_id' => '',
      'title' => '',
      'price' => '',
      'score' => '',
      'cover' => '',
      'beginTime' => '',
      'endTime' => '',
      'is_re' => '',
      'is_charge' => '',
      'is_open' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLearnc_flow' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'catagroy' => 'catagroy',
      'type' => 'type',
      'num' => 'num',
      'balance' => 'balance',
      'rel_id' => 'rel_id',
      'note' => 'note',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uname' => '用户名',
      'realname' => '真实姓名',
      'idcard' => '身份证',
      'catagroy' => '用户组',
      'type' => '业务类型',
      'num' => '变动数量',
      'balance' => '变动后余额',
      'rel_id' => '关联ID',
      'note' => '业务备注',
      'ctime' => '发生时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'realname' => '0',
      'idcard' => '0',
      'catagroy' => '0',
      'type' => '0',
      'num' => '0',
      'balance' => '0',
      'rel_id' => '0',
      'note' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'realname' => '',
      'idcard' => '',
      'catagroy' => '',
      'type' => '',
      'num' => '',
      'balance' => '',
      'rel_id' => '',
      'note' => '',
      'ctime' => '',
    ),
  ),
  'live_AdminLive_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'title' => 'title',
      'price' => 'price',
      'score' => 'score',
      'cover' => 'cover',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
      'is_open' => 'is_open',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '上传者',
      'title' => '标题',
      'price' => '价格',
      'score' => '评分',
      'cover' => '封面',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
      'is_open' => '是否禁用',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'title' => '0',
      'price' => '0',
      'score' => '0',
      'cover' => '0',
      'beginTime' => '0',
      'endTime' => '0',
      'is_open' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'title' => '',
      'price' => '',
      'score' => '',
      'cover' => '',
      'beginTime' => '',
      'endTime' => '',
      'is_open' => '',
      'DOACTION' => '',
    ),
  ),
  'live_AdminLive_editGhLiveRoom' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'introduce' => 'introduce',
      'speaker_id' => 'speaker_id',
      'maxNum' => 'maxNum',
      'supportMobile' => 'supportMobile',
      'liveMode' => 'liveMode',
      'account' => 'account',
      'passwd' => 'passwd',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '直播标题',
      'introduce' => '简介',
      'speaker_id' => '主讲人',
      'maxNum' => '最大在线人数',
      'supportMobile' => '是否支持手机端',
      'liveMode' => '直播模式',
      'account' => '讲师账户',
      'passwd' => '讲师密码',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'title' => 'text',
      'introduce' => 'editor',
      'speaker_id' => 'user',
      'maxNum' => 'text',
      'supportMobile' => 'radio',
      'liveMode' => 'radio',
      'account' => 'text',
      'passwd' => 'text',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_default' => 
    array (
      'id' => '',
      'title' => '',
      'introduce' => '',
      'speaker_id' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'account' => '',
      'passwd' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'introduce' => '',
      'speaker_id' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'account' => '',
      'passwd' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'introduce' => '',
      'speaker_id' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'account' => '',
      'passwd' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'classroom_AdminOrder_live' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'live_id' => 'live_id',
      'price' => 'price',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uid' => '用户',
      'live_id' => '直播课程',
      'price' => '价格',
      'ctime' => '下单时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'live_id' => '0',
      'price' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'live_id' => '',
      'price' => '',
      'ctime' => '',
    ),
  ),
  'live_AdminLive_addLive' => 
  array (
    'key' => 
    array (
      'title' => 'title',
      'live_cate' => 'live_cate',
      'cover' => 'cover',
      'price' => 'price',
      'info' => 'info',
      'score' => 'score',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'title' => '标题',
      'live_cate' => '分类',
      'cover' => '封面',
      'price' => '价格',
      'info' => '简介',
      'score' => '评分',
      'beginTime' => '开始时间',
      'endTime' => '开始时间',
    ),
    'key_type' => 
    array (
      'title' => 'text',
      'live_cate' => 'define',
      'cover' => 'image',
      'price' => 'text',
      'info' => 'editor',
      'score' => 'select',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_default' => 
    array (
      'title' => '',
      'live_cate' => '',
      'cover' => '',
      'price' => '',
      'info' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_tishi' => 
    array (
      'title' => '',
      'live_cate' => '',
      'cover' => '',
      'price' => '',
      'info' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'title' => '',
      'live_cate' => '',
      'cover' => '',
      'price' => '',
      'info' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'classroom_AdminLearnc_uflow' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'catagroy' => 'catagroy',
      'type' => 'type',
      'num' => 'num',
      'balance' => 'balance',
      'rel_id' => 'rel_id',
      'note' => 'note',
      'ctime' => 'ctime',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uname' => '用户名',
      'realname' => '真实名字',
      'idcard' => '身份证号',
      'catagroy' => '用户组',
      'type' => '业务类型',
      'num' => '变动数量',
      'balance' => '变动后余额',
      'rel_id' => '关联ID',
      'note' => '业务备注',
      'ctime' => '发生时间',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'realname' => '0',
      'idcard' => '0',
      'catagroy' => '0',
      'type' => '0',
      'num' => '0',
      'balance' => '0',
      'rel_id' => '0',
      'note' => '0',
      'ctime' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'realname' => '',
      'idcard' => '',
      'catagroy' => '',
      'type' => '',
      'num' => '',
      'balance' => '',
      'rel_id' => '',
      'note' => '',
      'ctime' => '',
    ),
  ),
  'live_AdminLive_editLive' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'title' => 'title',
      'live_cate' => 'live_cate',
      'cover' => 'cover',
      'price' => 'price',
      'info' => 'info',
      'score' => 'score',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'id' => '',
      'title' => '标题',
      'live_cate' => '分类',
      'cover' => '图片',
      'price' => '价格',
      'info' => '简介',
      'score' => '评分',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'id' => 'hidden',
      'title' => 'text',
      'live_cate' => 'define',
      'cover' => 'image',
      'price' => 'text',
      'info' => 'editor',
      'score' => 'select',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_default' => 
    array (
      'id' => '',
      'title' => '',
      'live_cate' => '',
      'cover' => '',
      'price' => '',
      'info' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_tishi' => 
    array (
      'id' => '',
      'title' => '',
      'live_cate' => '',
      'cover' => '',
      'price' => '',
      'info' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'title' => '',
      'live_cate' => '',
      'cover' => '',
      'price' => '',
      'info' => '',
      'score' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'live_AdminLive_editZshdLiveRoom' => 
  array (
    'key' => 
    array (
      'SDK_ID' => 'SDK_ID',
      'subject' => 'subject',
      'speaker_id' => 'speaker_id',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'maxNum' => 'maxNum',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentToken' => 'studentToken',
      'studentClientToken' => 'studentClientToken',
      'description' => 'description',
      'scheduleInfo' => 'scheduleInfo',
    ),
    'key_name' => 
    array (
      'SDK_ID' => '',
      'subject' => '直播课程名称',
      'speaker_id' => '主讲人',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'maxNum' => '最大支持人数',
      'clientJoin' => '学生客户端',
      'webJoin' => '学生WEB端',
      'teacherToken' => '讲师口令',
      'assistantToken' => '助教口令',
      'studentToken' => '学生WEB端口令',
      'studentClientToken' => '学生客户端口令',
      'description' => '课程信息简介',
      'scheduleInfo' => '课程安排信息',
    ),
    'key_type' => 
    array (
      'SDK_ID' => 'hidden',
      'subject' => 'text',
      'speaker_id' => 'select',
      'startDate' => 'date',
      'invalidDate' => 'date',
      'maxNum' => 'text',
      'clientJoin' => 'radio',
      'webJoin' => 'radio',
      'teacherToken' => 'text',
      'assistantToken' => 'text',
      'studentToken' => 'text',
      'studentClientToken' => 'text',
      'description' => 'textarea',
      'scheduleInfo' => 'textarea',
    ),
    'key_default' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker_id' => '',
      'startDate' => '',
      'invalidDate' => '',
      'maxNum' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'studentClientToken' => '',
      'description' => '',
      'scheduleInfo' => '',
    ),
    'key_tishi' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker_id' => '',
      'startDate' => '',
      'invalidDate' => '',
      'maxNum' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'studentClientToken' => '',
      'description' => '',
      'scheduleInfo' => '',
    ),
    'key_javascript' => 
    array (
      'SDK_ID' => '',
      'subject' => '',
      'speaker_id' => '',
      'startDate' => '',
      'invalidDate' => '',
      'maxNum' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentToken' => '',
      'studentClientToken' => '',
      'description' => '',
      'scheduleInfo' => '',
    ),
  ),
  'live_AdminLive_liveRoomIndex' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uame' => 'uame',
      'subject' => 'subject',
      'speaker_name' => 'speaker_name',
      'teacherToken' => 'teacherToken',
      'assistantToken' => 'assistantToken',
      'studentClientToken' => 'studentClientToken',
      'studentToken' => 'studentToken',
      'startDate' => 'startDate',
      'invalidDate' => 'invalidDate',
      'clientJoin' => 'clientJoin',
      'webJoin' => 'webJoin',
      'is_active' => 'is_active',
      'is_open' => 'is_open',
      'SDK_ID' => 'SDK_ID',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => 'ID',
      'uame' => '创建者',
      'subject' => '直播课程名称',
      'speaker_name' => '主讲人',
      'teacherToken' => '讲师口令',
      'assistantToken' => '助教口令',
      'studentClientToken' => '学生客户端口令',
      'studentToken' => '学生WEB端口令',
      'startDate' => '开始时间',
      'invalidDate' => '结束时间',
      'clientJoin' => '学生客户端',
      'webJoin' => '学生WEB端',
      'is_active' => '是否审核',
      'is_open' => '是否开启',
      'SDK_ID' => '',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uame' => '0',
      'subject' => '0',
      'speaker_name' => '0',
      'teacherToken' => '0',
      'assistantToken' => '0',
      'studentClientToken' => '0',
      'studentToken' => '0',
      'startDate' => '0',
      'invalidDate' => '0',
      'clientJoin' => '0',
      'webJoin' => '0',
      'is_active' => '0',
      'is_open' => '0',
      'SDK_ID' => '1',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uame' => '',
      'subject' => '',
      'speaker_name' => '',
      'teacherToken' => '',
      'assistantToken' => '',
      'studentClientToken' => '',
      'studentToken' => '',
      'startDate' => '',
      'invalidDate' => '',
      'clientJoin' => '',
      'webJoin' => '',
      'is_active' => '',
      'is_open' => '',
      'SDK_ID' => '',
      'DOACTION' => '',
    ),
  ),
  'live_AdminLive_addLiveRoom' => 
  array (
    'key' => 
    array (
      'live_id' => 'live_id',
      'title' => 'title',
      'introduce' => 'introduce',
      'speaker_id' => 'speaker_id',
      'maxNum' => 'maxNum',
      'supportMobile' => 'supportMobile',
      'liveMode' => 'liveMode',
      'account' => 'account',
      'passwd' => 'passwd',
      'beginTime' => 'beginTime',
      'endTime' => 'endTime',
    ),
    'key_name' => 
    array (
      'live_id' => '',
      'title' => '直播标题',
      'introduce' => '直播简介',
      'speaker_id' => '主讲人',
      'maxNum' => '最大支持人数',
      'supportMobile' => '是否支持手机端',
      'liveMode' => '直播模式',
      'account' => '讲师账号',
      'passwd' => '讲师口令',
      'beginTime' => '开始时间',
      'endTime' => '结束时间',
    ),
    'key_type' => 
    array (
      'live_id' => 'hidden',
      'title' => 'text',
      'introduce' => 'textarea',
      'speaker_id' => 'select',
      'maxNum' => 'text',
      'supportMobile' => 'radio',
      'liveMode' => 'radio',
      'account' => 'text',
      'passwd' => 'text',
      'beginTime' => 'date',
      'endTime' => 'date',
    ),
    'key_default' => 
    array (
      'live_id' => '',
      'title' => '',
      'introduce' => '',
      'speaker_id' => '',
      'maxNum' => '10',
      'supportMobile' => '',
      'liveMode' => '',
      'account' => '',
      'passwd' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_tishi' => 
    array (
      'live_id' => '',
      'title' => '',
      'introduce' => '',
      'speaker_id' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'account' => '',
      'passwd' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
    'key_javascript' => 
    array (
      'live_id' => '',
      'title' => '',
      'introduce' => '',
      'speaker_id' => '',
      'maxNum' => '',
      'supportMobile' => '',
      'liveMode' => '',
      'account' => '',
      'passwd' => '',
      'beginTime' => '',
      'endTime' => '',
    ),
  ),
  'exam_AdminQuestion_index' => 
  array (
    'key' => 
    array (
      'question_id' => 'question_id',
      'question_category_name' => 'question_category_name',
      'question_type_title' => 'question_type_title',
      'question_point' => 'question_point',
      'question_content' => 'question_content',
      'question_status' => 'question_status',
      'question_insert_date' => 'question_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'question_id' => '试题ID',
      'question_category_name' => '试题分类',
      'question_type_title' => '试题类型',
      'question_point' => '试题分数',
      'question_content' => '题干描述',
      'question_status' => '试题状态',
      'question_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'question_id' => '0',
      'question_category_name' => '0',
      'question_type_title' => '0',
      'question_point' => '0',
      'question_content' => '0',
      'question_status' => '0',
      'question_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'question_id' => '',
      'question_category_name' => '',
      'question_type_title' => '',
      'question_point' => '',
      'question_content' => '',
      'question_status' => '',
      'question_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'exam_AdminPaper_index' => 
  array (
    'key' => 
    array (
      'paper_id' => 'paper_id',
      'paper_name' => 'paper_name',
      'paper_category_name' => 'paper_category_name',
      'paper_describe' => 'paper_describe',
      'paper_type' => 'paper_type',
      'paper_point' => 'paper_point',
      'paper_question_count' => 'paper_question_count',
      'paper_status' => 'paper_status',
      'uname' => 'uname',
      'paper_insert_date' => 'paper_insert_date',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'paper_id' => '试卷ID',
      'paper_name' => '试卷名称',
      'paper_category_name' => '试卷名称',
      'paper_describe' => '试卷描述',
      'paper_type' => '出卷方式',
      'paper_point' => '试卷总分',
      'paper_question_count' => '试题总数',
      'paper_status' => '是否启用',
      'uname' => '创建人',
      'paper_insert_date' => '创建时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'paper_id' => '0',
      'paper_name' => '0',
      'paper_category_name' => '0',
      'paper_describe' => '0',
      'paper_type' => '0',
      'paper_point' => '0',
      'paper_question_count' => '0',
      'paper_status' => '0',
      'uname' => '0',
      'paper_insert_date' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'paper_id' => '',
      'paper_name' => '',
      'paper_category_name' => '',
      'paper_describe' => '',
      'paper_type' => '',
      'paper_point' => '',
      'paper_question_count' => '',
      'paper_status' => '',
      'uname' => '',
      'paper_insert_date' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLearnc_learn' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'video_title' => 'video_title',
      'sid' => 'sid',
      'time' => 'time',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uname' => ' 用户名',
      'video_title' => '课程名',
      'sid' => '章节',
      'time' => '学习时长（分钟）',
      'ctime' => '学习时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'video_title' => '0',
      'sid' => '0',
      'time' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'video_title' => '',
      'sid' => '',
      'time' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminVideo_learn' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uname' => 'uname',
      'video_title' => 'video_title',
      'sid' => 'sid',
      'time' => 'time',
      'ctime' => 'ctime',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uname' => '用户名',
      'video_title' => '课程名',
      'sid' => '章节',
      'time' => '学习时长（分钟）',
      'ctime' => '学习时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uname' => '0',
      'video_title' => '0',
      'sid' => '0',
      'time' => '0',
      'ctime' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uname' => '',
      'video_title' => '',
      'sid' => '',
      'time' => '',
      'ctime' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_index' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'phone' => 'phone',
      'user_group' => 'user_group',
      'location' => 'location',
      'is_audit' => 'is_audit',
      'is_start' => 'is_start',
      'is_active' => 'is_active',
      'is_init' => 'is_init',
      'ctime' => 'ctime',
      'reg_ip' => 'reg_ip',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户名',
      'phone' => '手机号',
      'user_group' => '用户组',
      'location' => '地区',
      'is_audit' => '是否审核',
      'is_start' => '是否人脸识别',
      'is_active' => '是否激活',
      'is_init' => '是否初始化',
      'ctime' => '注册时间',
      'reg_ip' => '注册IP',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uid' => '0',
      'uname' => '0',
      'phone' => '0',
      'user_group' => '0',
      'location' => '0',
      'is_audit' => '0',
      'is_start' => '0',
      'is_active' => '0',
      'is_init' => '0',
      'ctime' => '0',
      'reg_ip' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'phone' => '',
      'user_group' => '',
      'location' => '',
      'is_audit' => '',
      'is_start' => '',
      'is_active' => '',
      'is_init' => '',
      'ctime' => '',
      'reg_ip' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_dellist' => 
  array (
    'key' => 
    array (
      'uid' => 'uid',
      'uname' => 'uname',
      'phone' => 'phone',
      'user_group' => 'user_group',
      'location' => 'location',
      'is_audit' => 'is_audit',
      'is_start' => 'is_start',
      'is_active' => 'is_active',
      'is_init' => 'is_init',
      'ctime' => 'ctime',
      'reg_ip' => 'reg_ip',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uid' => 'UID',
      'uname' => '用户名称',
      'phone' => '',
      'user_group' => '用户组',
      'location' => '地区',
      'is_audit' => '审核',
      'is_start' => '人脸识别',
      'is_active' => '激活',
      'is_init' => '初始化',
      'ctime' => '注册时间',
      'reg_ip' => '注册IP',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uid' => '0',
      'uname' => '0',
      'phone' => '0',
      'user_group' => '0',
      'location' => '0',
      'is_audit' => '0',
      'is_start' => '0',
      'is_active' => '0',
      'is_init' => '0',
      'ctime' => '0',
      'reg_ip' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uid' => '',
      'uname' => '',
      'phone' => '',
      'user_group' => '',
      'location' => '',
      'is_audit' => '',
      'is_start' => '',
      'is_active' => '',
      'is_init' => '',
      'ctime' => '',
      'reg_ip' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_User_addUser' => 
  array (
    'key' => 
    array (
      'email' => 'email',
      'uname' => 'uname',
      'password' => 'password',
      'sex' => 'sex',
      'is_start' => 'is_start',
      'user_group' => 'user_group',
    ),
    'key_name' => 
    array (
      'email' => 'Email',
      'uname' => '用户名',
      'password' => '密码',
      'sex' => '性别',
      'is_start' => '人脸识别',
      'user_group' => '用户组',
    ),
    'key_type' => 
    array (
      'email' => 'text',
      'uname' => 'text',
      'password' => 'text',
      'sex' => 'radio',
      'is_start' => 'radio',
      'user_group' => 'checkbox',
    ),
    'key_default' => 
    array (
      'email' => '',
      'uname' => '',
      'password' => '',
      'sex' => '1',
      'is_start' => '',
      'user_group' => '',
    ),
    'key_tishi' => 
    array (
      'email' => '',
      'uname' => '',
      'password' => '',
      'sex' => '',
      'is_start' => '',
      'user_group' => '',
    ),
    'key_javascript' => 
    array (
      'email' => '',
      'uname' => '',
      'password' => '',
      'sex' => '',
      'is_start' => '',
      'user_group' => '',
    ),
  ),
  'classroom_AdminClass_index' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'video_id' => 'video_id',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '',
      'uid' => '',
      'video_id' => '',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'video_id' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'video_id' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLearnc_classlearn' => 
  array (
    'key' => 
    array (
      'id' => 'id',
      'uid' => 'uid',
      'video_id' => 'video_id',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'id' => '订单ID',
      'uid' => '用户',
      'video_id' => '课堂名称',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'id' => '0',
      'uid' => '0',
      'video_id' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'id' => '',
      'uid' => '',
      'video_id' => '',
      'DOACTION' => '',
    ),
  ),
  'classroom_AdminLearnc_index' => 
  array (
    'key' => 
    array (
      'uname' => 'uname',
      'realname' => 'realname',
      'idcard' => 'idcard',
      'catagroy' => 'catagroy',
      'balance' => 'balance',
      'frozen' => 'frozen',
      'count' => 'count',
      'vip_type' => 'vip_type',
      'vip_expire' => 'vip_expire',
      'DOACTION' => 'DOACTION',
    ),
    'key_name' => 
    array (
      'uname' => '用户名',
      'realname' => '真实姓名',
      'idcard' => '身份证号',
      'catagroy' => '用户权限',
      'balance' => '可用学币',
      'frozen' => '冻结学币',
      'count' => '课堂总数（条）',
      'vip_type' => 'VIP类型',
      'vip_expire' => 'VIP到期时间',
      'DOACTION' => '操作',
    ),
    'key_hidden' => 
    array (
      'uname' => '0',
      'realname' => '0',
      'idcard' => '0',
      'catagroy' => '0',
      'balance' => '0',
      'frozen' => '0',
      'count' => '0',
      'vip_type' => '0',
      'vip_expire' => '0',
      'DOACTION' => '0',
    ),
    'key_javascript' => 
    array (
      'uname' => '',
      'realname' => '',
      'idcard' => '',
      'catagroy' => '',
      'balance' => '',
      'frozen' => '',
      'count' => '',
      'vip_type' => '',
      'vip_expire' => '',
      'DOACTION' => '',
    ),
  ),
  'admin_Config_youtu' => 
  array (
    'key' => 
    array (
      'appid' => 'appid',
      'secretId' => 'secretId',
      'secretKey' => 'secretKey',
      'userid' => 'userid',
      'Mintime' => 'Mintime',
      'Maxtime' => 'Maxtime',
    ),
    'key_name' => 
    array (
      'appid' => '',
      'secretId' => '',
      'secretKey' => '',
      'userid' => '',
      'Mintime' => '',
      'Maxtime' => '',
    ),
    'key_type' => 
    array (
      'appid' => 'text',
      'secretId' => 'text',
      'secretKey' => 'text',
      'userid' => 'text',
      'Mintime' => 'text',
      'Maxtime' => 'text',
    ),
    'key_default' => 
    array (
      'appid' => '',
      'secretId' => '',
      'secretKey' => '',
      'userid' => '',
      'Mintime' => '5',
      'Maxtime' => '',
    ),
    'key_tishi' => 
    array (
      'appid' => '',
      'secretId' => '',
      'secretKey' => '',
      'userid' => '',
      'Mintime' => '单位：分   设置时为整分钟数    视频播放验证时间最小为5分钟',
      'Maxtime' => '单位：分    设置时为整分钟数    视频播放验证时间大于等于5；设为5，表示5分钟弹出验证；设为大于5；表示在Mintime和Maxtime取随机分钟数弹出验证',
    ),
    'key_javascript' => 
    array (
      'appid' => '',
      'secretId' => '',
      'secretKey' => '',
      'userid' => '',
      'Mintime' => '',
      'Maxtime' => '',
    ),
  ),
);
?>