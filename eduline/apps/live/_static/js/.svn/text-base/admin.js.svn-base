//检查添加直播课堂表单提交
admin.checkLive=function(form) {
    if(form.title.value.replace(/^ +| +$/g,'')==''){
        ui.error('直播课堂名称不能为空!');
        return false;
    }
    if($('.mzTopLevel option:selected').val() <= 0){
        ui.error('请选择直播课堂分类!');
        return false;
    }
    if(form.cover.value.replace(/^ +| +$/g,'')==''){
        ui.error('请上传直播课堂封面!');
        return false;
    }
    if(form.info.value.replace(/^ +| +$/g,'')==''){
        ui.error('直播课堂信息不能为空!');
        return false;
    }
    if(form.price.value.replace(/^ +| +$/g,'')==''){
        ui.error('直播课堂价格不能为空!');
        return false;
    }
    if(isNaN(form.price.value)){
        ui.error('直播课堂价格必须为数字!');
        return false;
    }
    if(form.beginTime.value.replace(/^ +| +$/g,'')==''){
        ui.error('上架时间不能为空!');
        return false;
    }
    if(form.endTime.value.replace(/^ +| +$/g,'')==''){
        ui.error('下架时间不能为空!');
        return false;
    }

    return true;
};

/**
 *
 * @param id
 * @returns {boolean}
 * 直播操作
 */
admin.doaction = function(id,action,type){
    if("undefined" == typeof(id) || id=='')
        id = admin.getChecked();
    if(id == ''){
        ui.error( '请选择直播课堂' );return false;
    }
    if(confirm( '确定操作该课堂直播？' )){
        $.post(U('live/AdminLive/doaction'+action),{id:id,type:type},function(obj){
            admin.ajaxReloads(obj);
        },'json');
    }
};

/**
 * 处理ajax返回数据之后的刷新操作
 */
admin.ajaxReloads = function(obj){
    if(obj.status == 1){
        ui.success(obj.info,3);
        window.location.reload();
    }else{
        ui.error(obj.info,3);
    }
};

/**
 * 展示互动
 * ————————————————————————————
 */


/**
 * 光慧
 * ————————————————————————————
 */





///**
// * 后台JS操作对象 -
// *admin.bindTrOn
// * 后台所有JS操作都集中在此
// */
//var admin = {};
//
///**
// * 收缩展开某个DOM
// */
//admin.fold = function(id){
//    $('#'+id).slideToggle('fast');
//};
//
//
//// 查看直播课堂信息  暂时未用
//admin.checkLive = function(SDK_ID){
//    if("undefined" == typeof(SDK_ID) || SDK_ID=='')
//        SDK_ID = admin.getChecked();
//    if(SDK_ID == ''){
//        ui.error( L('请选择直播课堂') );return false;
//    }
//    $.post(U('live/Admin/checkLive'),{SDK_ID:SDK_ID},function(e){
//        console.log(e);
//        //admin.ajaxReload(e);
//        //if(e.status == 1){
//        //    ui.success(e.info);
//        //    setTimeout(null,1500);
//        //    parent.MainIframe.location.reload();
//        //}else{
//        //    ui.error(e.info);
//        //    parent.MainIframe.location.reload();
//        //}
//        ////refresh();
//    },'json');
//    var url = U('live/Admin/checkLive')+'&SDK_ID='+SDK_ID;
//    ui.box.load(url,"直播课堂信息");
//};
//
///**
// *
// * @param SDK_ID
// * @returns {boolean}
// * 禁用直播课堂-展示互动
// */
//admin.closeLive = function(SDK_ID){
//    if("undefined" == typeof(SDK_ID) || SDK_ID=='')
//        SDK_ID = admin.getChecked();
//    if(SDK_ID == ''){
//        ui.error( L('请选择直播课堂') );return false;
//    }
//    if(confirm( L('确定禁用该课堂直播？') )){
//        $.post(U('live/Admin/closeLive'),{SDK_ID:SDK_ID},function(e){
//            admin.ajaxReload(e);
//        },'json');
//    }
//};
//// 恢复直播课堂-展示互动
//admin.openLive = function(SDK_ID){
//    if("undefined" == typeof(SDK_ID) || SDK_ID=='')
//        SDK_ID = admin.getChecked();
//    if(SDK_ID == ''){
//        ui.error( L('请选择直播课堂') );return false;
//    }
//    if(confirm( L('确定恢复该直播课堂？') )){
//        $.post(U('live/Admin/openLive'),{SDK_ID:SDK_ID},function(e){
//            admin.ajaxReload(e);
//        },'json');
//    }
//};
//// 激活直播课堂-展示互动
//admin.activeLive = function(SDK_ID){
//    if("undefined" == typeof(SDK_ID) || SDK_ID=='')
//        SDK_ID = admin.getChecked();
//    if(SDK_ID==''){
//        ui.error( L('请选择直播课堂') );return false;
//    }
//    if(confirm( '确定要激活该直播课堂？' )){
//        $.post(U('live/Admin/activeLive'),{SDK_ID:SDK_ID},function(e){
//            admin.ajaxReload(e);
//        },'json');
//    }
//};
//// 彻底删除用户-展示互动
//admin.delete = function(SDK_ID){
//    if("undefined" == typeof(SDK_ID) || SDK_ID=='')
//        SDK_ID = admin.getChecked();
//    if(SDK_ID==''){
//        ui.error( L('请选择直播课堂') );return false;
//    }
//    if(confirm( '确定要彻底关闭该直播课堂？' )){
//        $.post(U('live/Admin/deleteZshd'),{SDK_ID:SDK_ID},function(e){
//            admin.ajaxReload(e);
//        },'json');
//    }
//};
//
//
////创建展示互动直播间
////admin.addLiveZshd = function(){
////    location.href = U('live/Admin/addZshd');
////};
//
////创建三芒直播间
//admin.addLiveSm = function(){
//    location.href = U('live/Admin/addSm');
//};
//
////创建光慧直播间
//admin.addLiveGh = function(){
//    location.href = U('live/Admin/addGh');
//};
//
////删除光慧直播
//admin.delGh = function(id){
//    if(confirm('确定删除此直播间吗？')){
//        $.post(U('live/Admin/delGh'), {id:id}, function(msg){
//            admin.ajaxReload(msg);
//        },'json');
//    }
//};
//
//
//admin.upload = function(cover,obj){
//    if("undefined"  != typeof(core.uploadFile)){
//        core.uploadFile.filehash = new Array();
//    }
//    core.plugInit('uploadFile',obj,function(data){
//        $(obj).parents('#divup_1').siblings('#show_cover').html('<img class="pic-size" src="'+data.src+'">');
//        $(obj).parents('#divup_1').siblings('#form_cover').val(data.attach_id);
//    },'image');
//};
//
//function refresh() {
//    parent.MainIframe.location.reload();
//}