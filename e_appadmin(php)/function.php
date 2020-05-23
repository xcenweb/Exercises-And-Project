<?php
header("content-type:text/html;charset=utf-8");

//获取目录文件列表
function searchDir($path,&$data){
if(is_dir($path)){
$dp=dir($path);
while($file=$dp->read()){
if($file!='.'&& $file!='..'){
searchDir($path.'/'.$file,$data);
}
}
$dp->close();
}
if(is_file($path)){
$data[]=$path;
}
}


function getDir($dir){
$data=array();
searchDir($dir,$data);
return   $data;
}




//获取文件列表最大值
function posv($dir){

$array=getDir($dir);

$data=count($array);

for($i=0;$i<$data;$i++){

$v=explode('/',$array[$i]);

$vvv=explode('.',$v[1]);

$arr[$i]=$vvv[0];

}

$pos=@array_search(max($arr),$arr);

return $arr[$pos];

}



function yy($file){

if (file_exists($file)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename='.basename($file));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));
  ob_clean();
  flush();
  readfile($file);
  exit;
}

}



//文件上传
function filev($file,$dir){

$posv=posv($dir);

$posv=$posv+1;

$temp = explode(".",$file["name"]);

$extension = end($temp);

	echo "文件名: " . $file["name"] . "<br>";
	echo "类型: " . $file["type"] . "<br>";
	echo "大小: " . ($file["size"] / 1024) . " kB<br>";
	//echo "文件临时存储的位置: " . $file["tmp_name"];

$name=$posv.'.'.$extension;

if($extension!="php"){

if(move_uploaded_file($file["tmp_name"],$dir."/".$name))
{

echo "状态:成功<br>";
echo '你是本站第<font color="#FF0000">'.$posv."</font>个文件上传者<br>";
echo '直链:<font color="#00EC00">'.HOST."up.php?f=".$name.'</font>';

}else{

echo "状态:失败";

}
}else{

echo "状态:失败<br>";
echo "不支持上传php文件";

}

}





//图片输出
function imguuu($dir){

$fileres = file_get_contents($dir);
header('Content-type: image/png');

return $fileres;

}
//使用卡密
function ukm($user,$km){
if($user!="")
{
if($km!="")
{
$file='admin/user/'.$user.'/data.txt';
$file1='km/'.$km;
$data=@file_get_contents($file);
$dkm=@file_get_contents($file1);
$data1=explode("①",$data);
$ss=$data1[4]+$dkm;
$p=$data1[0].'①'.$data1[1].'①'.$data1[2].'①'.$data1[3].'①'.$ss;
if(@file_put_contents($file,$p)==null)
{
return "未知错误";
}
unlink($file1);
return "【使用卡密".$km."成功，获得金币：".$dkm."】";
}
return "请输入卡密";
}
return "请输入用户名";
}

//签到
function qd($user){
$file='admin/user/'.$user.'/time.txt';
$file1='admin/user/'.$user.'/data.txt';
if($user!="")
{
$time=date("Ymd");
$data=@file_get_contents($file);
$dataa=@file_get_contents($file1);
$data1=explode("①",$dataa);
if($data==null)
{
$timee=$time-1;
@file_put_contents($file,$timee);
}
if($data<$time)
{
if(@file_put_contents($file,$time)==null){
return "未知错误01";
}
$dds=$data1[4]+50;
$p=$data1[0].'①'.$data1[1].'①'.$data1[2].'①'.$data1[3].'①'.$dds;
@file_put_contents($file1,$p);
return "签到成功，加【50】金币";
}
return "您已经签到过了";
}
return "请输入用户名";
}


//创建卡密
function km($km,$jb,$pass){
$admin=123456;
if($pass==$admin)
{
if($km!="")
{
if($jb!="")
{
$file='km/'.$km;
if(@file_put_contents($file,$jb)==null)
{
return "未知错误";
}
return "创建【".$km."】卡密成功";
}
return "面额为空";
}
return "请输入要创建的卡密";
}
return "管理员密码错误";
}


//admin
function admin($user,$jb,$tdpass,$pass){
$admin=123456;
$file='admin/user/'.$user.'/data.txt';
if($pass==$admin)
{
if($user!="")
{
if($jb!="")
{
$data=@file_get_contents($file);
$data1=explode("①",$data);
$p=$data1[0].'①'.$data1[1].'①'.$data1[2].'①'.$data1[3].'①'.$jb;

if(@file_put_contents($file,$p)==null){

return "未知错误01";
}
return "修改成功";
}

if($tdpass!="")
{
$file='admin/user/'.$user.'/pass.txt';
if(@file_put_contents($file,$tdpass)==null){
return "未知错误01";
}
return "修改成功";
}
}
else
{
return "用户名为空";
}
}
else
{
return "管理员密码错误";
}
}



//登录
function login($user,$pass){

$file='admin/user/'.$user.'/data.txt';
$file1='admin/user/'.$user.'/pass.txt';
if($user==null||$pass==null){

return "请把信息写完整";

}

if(@file_exists($file)!="true"){

return "用户不存在";

}

$data=@file_get_contents($file);
$pass1=@file_get_contents($file1);
if($data==null){

return "未知错误";

}

$data1=explode("①",$data);

if($data1[0]!=$user||$pass1!=$pass){

return "帐号或密码错误";

}

return "登录成功";

}




//注册
function register($user,$name,$pass,$qq){

$file='admin/user/'.$user.'/data.txt';
$file1='admin/user/'.$user;
$file2='admin/user/'.$user.'/pass.txt';
$jb=0;
if($user==null||$pass==null||$qq==null||$name==null){

return "请把信息写完整";

}

if(@file_exists($file)){

return "已有用户存在";

}

if(@mkdir($file1)!="true"){

return "未知错误";

}

$date=date("Y-m-d H:i:s");


$data=$user.'①'.$name.'①'.$qq.'①'.$date.'①'.$jb;
if(@file_put_contents($file,$data)==null){

return "未知错误01";

}
$yhz=@file_put_contents($file2,$pass);
return "注册成功";

}




//用户信息
function userinfo($user){

$file='admin/user/'.$user.'/data.txt';

if($user==null){

return "请把信息写完整";

}

if(@file_exists($file)!="true"){

return "要查询用户不存在";

}

$data=@file_get_contents($file);

if($data==null){

return "未知错误";

}

$data1=explode("①",$data);

$file19='admin/user/'.$user.'/a.png';

if(@file_exists($file19)){

$img="img.php?user=".$data1[0];

}else{

$img='http://q2.qlogo.cn/headimg_dl?bs=qq&dst_uin='.$data1[2].'&spec=100';

}

return "用户名：⑩".$data1[0]."⑩<br>用户昵称：①".$data1[1]."①<br>用户QQ：②".$data1[2]."②<br>注册时间：③".$data1[3]."③<br>用户头像：④".$img."④<br>当前金币：⑤".$data1[4].'⑤';

}




//密码修改
function revisepass($user,$pass,$pass1){

$file='admin/user/'.$user.'/data.txt';

if($user==null||$pass==null||$pass1==null){

return "请把信息写完整";

}

if(@file_exists($file)!="true"){

return "要修改的用户不存在";

}

$data=@file_get_contents($file);

if($data==null){

return "未知错误";

}

$data1=explode("①",$data);

if($data1[0]!=$user||$data1[1]!=$pass){

return "要修改帐号或旧密码错误";

}

$p=$data1[0].'①'.$pass1.'①'.$data1[2].'①'.$data1[3].'①'.$data1[4];

if(@file_put_contents($file,$p)==null){

return "未知错误01";

}

return "修改成功";

}




//头像上传
function upimg($file,$user,$pass){

if($file==null||$user==null||$pass==null){

return "请把信息写完整";

}

if(@login($user,$pass)!="登录成功"){

return "帐号或密码不对";

}

$file1='admin/user/'.$user.'/data.txt';
$file2='admin/user/'.$user.'/a.png';

if(@file_exists($file1)!="true"){

return "还没注册用户";

}

if(!move_uploaded_file($file['tmp_name'],$file2)){ 

return "文件上传错误";

}

return "上传头像成功";

}

?>
