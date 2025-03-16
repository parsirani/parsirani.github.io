<?php

$API_KEY = 'T7867779837:AAFlDyDdQ4fT8WaPQG8inpM_Vn_2fSJCypY';
define('API_KEY',$API_KEY);
// Codex
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
// Codex
$update = json_decode(file_get_contents('php://input'));
@$data = $update->callback_query->data;
@$from_id2 = $update->callback_query->from->id;
@$chat_id2 = $update->callback_query->chat->id;
@$message_id2 = $update->callback_query->message->message_id;
@$message = $update->message;
@$chat_id = $message->chat->id;
@$from_id = $message->from->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$message_id = $update->callback_query->message->message_id;
@$text = $message->text;
// Codex
@mkdir("type/");
// Codec
$emojikeys = json_encod
// Codex
if($text == '/start'){
$members = explode("\n",file_get_contents("users.txt"));
if(!in_array($chat_id,$members)){
$a = file_get_contents("users.txt");
$a = $a."\n".$chat_id;
$a = str_replace("\n\n","\n",$a);
file_put_contents("users.txt",$a);
file_put_contents("type/$chat_id-lang.txt","en");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
Channel : @CodexSilver
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"فارسی",'callback_data'=>"changelang"],['text'=>"راهنما",'callback_data'=>"0000"]],
]
])
]);
}
if(file_get_contents("type/$from_id-numbers.txt")=="shiftednumkeys"){
$keyboard = $shiftednumkeys;
}
if(file_get_contents("type/$from_id-numbers.txt")=="shiftedkeys"){
$keyboard = $shiftedkeys;
}
if(file_get_contents("type/$from_id-numbers.txt")=="shiftednumkeys2"){
$keyboard = $shiftednumkeys2;
}
if(file_get_contents("type/$from_id-numbers.txt")=="shiftedkeys2"){
$keyboard = $shiftedkeys2;
}
if(file_get_contents("type/$from_id-numbers.txt")=="numkeys"){
$keyboard = $numkeys;
}
if(file_get_contents("type/$from_id-numbers.txt")=="keys"){
$keyboard = $keys;
}
if(file_get_contents("type/$from_id-numbers.txt")=="fakeys"){
$keyboard = $fakeys;
}
if(file_get_contents("type/$from_id-numbers.txt")=="keyfont1"){
$keyboard = $keyfont1;
}
if(file_get_contents("type/$from_id-numbers.txt")=="keyfont1B"){
$keyboard = $keyfont1B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2"){
$keyboard = $keyfont2;
}
if(file_get_contents("type/$from_id-numbers.txt")=="keyfont2B"){
$keyboard = $keyfont2B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3"){
$keyboard = $keyfont3;
}
if(file_get_contents("type/$from_id-numbers.txt")=="keyfont3B"){
$keyboard = $keyfont3B;
} 
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont4"){
$keyboard = $keyfont4;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont5"){
$keyboard = $keyfont5;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont6"){
$keyboard = $keyfont6;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont7"){
$keyboard = $keyfont7;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont8"){
$keyboard = $keyfont8;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont9"){
$keyboard = $keyfont9;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont10"){
$keyboard = $keyfont10;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont11"){
$keyboard = $keyfont11;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont12"){
$keyboard = $keyfont12;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont13"){
$keyboard = $keyfont13;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont14"){
$keyboard = $keyfont14;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont15"){
$keyboard = $keyfont15;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont16"){
$keyboard = $keyfont16;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont17"){
$keyboard = $keyfont17;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont18"){
$keyboard = $keyfont18;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont19"){
$keyboard = $keyfont19;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont20"){
$keyboard = $keyfont20;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont21"){
$keyboard = $keyfont21;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont22"){
$keyboard = $keyfont22;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont23"){
$keyboard = $keyfont23;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont24"){
$keyboard = $keyfont24;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont25"){
$keyboard = $keyfont25;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont26"){
$keyboard = $keyfont26;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont27"){
$keyboard = $keyfont27;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont28"){
$keyboard = $keyfont28;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont29"){
$keyboard = $keyfont29;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont30"){
$keyboard = $keyfont30;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont31"){
$keyboard = $keyfont31;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont32"){
$keyboard = $keyfont32;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont33"){
$keyboard = $keyfont33;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont34"){
$keyboard = $keyfont34;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont35"){
$keyboard = $keyfont35;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont36"){
$keyboard = $keyfont36;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont37"){
$keyboard = $keyfont37;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont38"){
$keyboard = $keyfont38;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont39"){
$keyboard = $keyfont39;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont40"){
$keyboard = $keyfont40;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont41"){
$keyboard = $keyfont41;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont42"){
$keyboard = $keyfont42;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont43"){
$keyboard = $keyfont43;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont44"){
$keyboard = $keyfont44;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont45"){
$keyboard = $keyfont45;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont46"){
$keyboard = $keyfont46;
}
if(file_get_contents("type/$from_id-numbers.txt")=="emojikeys"){
$keyboard = $emojikeys;
}
if(file_get_contents("type/$from_id-numbers.txt")=="emojikeys2"){
$keyboard = $emojikeys2;
}
if(file_get_contents("type/$from_id-numbers.txt")!="keys"||file_get_contents("type/$from_id-numbers.txt")!="numkeys"||file_get_contents("type/$from_id-numbers.txt")!="shiftedkeys2"||file_get_contents("type/$from_id-numbers.txt")!="shiftednumkeys2"||file_get_contents("type/$from_id-numbers.txt")!="shiftedkeys"||file_get_contents("type/$from_id-numbers.txt")!="shiftednumkeys"||file_get_contents("type/$from_id-numbers.txt")!="fakeys"||file_get_contents("type/$from_id-numbers.txt")!="keyfont1"||file_get_contents("type/$from_id-numbers.txt")!="keyfont1B"||file_get_contents("type/$from_id-numbers.txt")!="keyfont2B"||file_get_contents("type/$from_id-numbers.txt")!="keyfont3B"||file_get_contents("type/$from_id-numbers.txt")!="keyfont2"||file_get_contents("type/$from_id-numbers.txt")!="keyfont3"||file_get_contents("type/$from_id-numbers.txt")!="keyfont4"||file_get_contents("type/$from_id-numbers.txt")!="keyfont5"||file_get_contents("type/$from_id-numbers.txt")!="keyfont6"||file_get_contents("type/$from_id-numbers.txt")!="keyfont7"||file_get_contents("type/$from_id-numbers.txt")!="keyfont8"||file_get_contents("type/$from_id-numbers.txt")!="keyfont9"||file_get_contents("type/$from_id-numbers.txt")!="keyfont10"||file_get_contents("type/$from_id-numbers.txt")!="keyfont11"||file_get_contents("type/$from_id-numbers.txt")!="keyfont12"||file_get_contents("type/$from_id-numbers.txt")!="keyfont13"||file_get_contents("type/$from_id-numbers.txt")!="keyfont14"||file_get_contents("type/$from_id-numbers.txt")!="keyfont15"||file_get_contents("type/$from_id-numbers.txt")!="keyfont16"||file_get_contents("type/$from_id-numbers.txt")!="keyfont17"||file_get_contents("type/$from_id-numbers.txt")!="keyfont18"||file_get_contents("type/$from_id-numbers.txt")!="keyfont19"||file_get_contents("type/$from_id-numbers.txt")!="keyfont20"||file_get_contents("type/$from_id-numbers.txt")!="keyfont21"||file_get_contents("type/$from_id-numbers.txt")!="keyfont22"||file_get_contents("type/$from_id-numbers.txt")!="keyfont23"||file_get_contents("type/$from_id-numbers.txt")!="keyfont24"||file_get_contents("type/$from_id-numbers.txt")!="keyfont25"||file_get_contents("type/$from_id-numbers.txt")!="keyfont26"||file_get_contents("type/$from_id-numbers.txt")!="keyfont27"||file_get_contents("type/$from_id-numbers.txt")!="keyfont28"||file_get_contents("type/$from_id-numbers.txt")!="keyfont29"||file_get_contents("type/$from_id-numbers.txt")!="keyfont30"||file_get_contents("type/$from_id-numbers.txt")!="keyfont31"||file_get_contents("type/$from_id-numbers.txt")!="keyfont32"||file_get_contents("type/$from_id-numbers.txt")!="keyfont33"||file_get_contents("type/$from_id-numbers.txt")!="keyfont34"||file_get_contents("type/$from_id-numbers.txt")!="keyfont35"||file_get_contents("type/$from_id-numbers.txt")!="keyfont36"||file_get_contents("type/$from_id-numbers.txt")!="keyfont37"||file_get_contents("type/$from_id-numbers.txt")!="keyfont38"||file_get_contents("type/$from_id-numbers.txt")!="keyfont39"||file_get_contents("type/$from_id-numbers.txt")!="keyfont40"||file_get_contents("type/$from_id-numbers.txt")!="keyfont41"||file_get_contents("type/$from_id-numbers.txt")!="keyfont42"||file_get_contents("type/$from_id-numbers.txt")!="keyfont43"||file_get_contents("type/$from_id-numbers.txt")!="keyfont44"||file_get_contents("type/$from_id-numbers.txt")!="keyfont45"||file_get_contents("type/$from_id-numbers.txt")!="keyfont46"||file_get_contents("type/$from_id-numbers.txt")!="emojikeys"||file_get_contents("type/$from_id-numbers.txt")!="emojikeys2"){
file_put_contents("type/$from_id-numbers.txt","keys");
$keyboard = $keys;
}
$type = file_get_contents("type/$from_id.txt");
if(!$type){
$type = " ";
}
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کاربر گرامی از کیبورد زیر یک فونت را انتخاب کنید
اگر به راهنما نیاز دارید /help را ارسال کنید
@CodexSilver",
  'reply_markup'=>$keyboard
 ]);
 }
if($text=="/help"){
$lang = file_get_contents("type/$chat_id-lang.txt");
if($lang == "fa"){
$t = "
کانال ما : @CodexSilver 1
";
$k = json_encode([
'inline_keyboard'=>[
[['text'=>"English",'callback_data'=>"changelang"]]
]]);
}else{
$t = "
Channel : @CodexSilver 2
";
$k = json_encode([
'inline_keyboard'=>[
[['text'=>"فارسی",'callback_data'=>"changelang"]]
]]);
}
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$t,
'reply_markup'=>$k
]);
}
if($data=="changelang"){
if(file_get_contents("type/$from_id2-lang.txt")=="fa"){
file_put_contents("type/$from_id2-lang.txt","en");
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"
Channel : @CodexSilver 1
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"فارسی",'callback_data'=>"changelang"]]
]
])
]);
}else{
file_put_contents("type/$from_id2-lang.txt","fa");
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"
کانال ما : @CodexSilver 2
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"English",'callback_data'=>"changelang"]]
]
])
]);
}
}

if($data=="changelang2"){
if(file_get_contents("type/$from_id2-lang.txt")=="fa"){
file_put_contents("type/$from_id2-lang.txt","en");
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"
text 2
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"فارسی",'callback_data'=>"changelang2"]]
]
])
]);
}else{
file_put_contents("type/$from_id2-lang.txt","fa");
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"
متن شما🥳
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"English",'callback_data'=>"changelang2"]]
]
])
]);
}
}
if($data=="font1"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont1");
$keyboard=$keyfont1;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font1B"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1B"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont1B");
$keyboard=$keyfont1B;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font2"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont2");
$keyboard=$keyfont2;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font2B"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2B"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont2B");
$keyboard=$keyfont2B;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font3"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont3");
$keyboard=$keyfont3;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font3B"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3B"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont3B");
$keyboard=$keyfont3B;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font4"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont4"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont4");
$keyboard=$keyfont4;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font5"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont5"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont5");
$keyboard=$keyfont5;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font6"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont6"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont6");
$keyboard=$keyfont6;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font7"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont7"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont7");
$keyboard=$keyfont7;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font8"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont8"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont8");
$keyboard=$keyfont8;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font9"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont9"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont9");
$keyboard=$keyfont9;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font10"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont10"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont10");
$keyboard=$keyfont10;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font11"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont11"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont11");
$keyboard=$keyfont11;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font12"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont12"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont12");
$keyboard=$keyfont12;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font13"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont13"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont13");
$keyboard=$keyfont13;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font14"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont14"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont14");
$keyboard=$keyfont14;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font15"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont15"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont15");
$keyboard=$keyfont15;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font16"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont16"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont16");
$keyboard=$keyfont16;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font17"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont17"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont17");
$keyboard=$keyfont17;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font18"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont18"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont18");
$keyboard=$keyfont18;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font19"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont19"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont19");
$keyboard=$keyfont19;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font20"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont20"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont20");
$keyboard=$keyfont20;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font21"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont21"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont21");
$keyboard=$keyfont21;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font22"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont22"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont22");
$keyboard=$keyfont22;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font23"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont23"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont23");
$keyboard=$keyfont23;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font24"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont24"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont24");
$keyboard=$keyfont24;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font25"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont25"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont25");
$keyboard=$keyfont25;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font26"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont26"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont26");
$keyboard=$keyfont26;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font27"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont27"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont27");
$keyboard=$keyfont27;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font28"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont28"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont28");
$keyboard=$keyfont28;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font29"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont29"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont29");
$keyboard=$keyfont29;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font30"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont30"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont30");
$keyboard=$keyfont30;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font31"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont31"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont31");
$keyboard=$keyfont31;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font32"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont32"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont32");
$keyboard=$keyfont32;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font33"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont33"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont33");
$keyboard=$keyfont33;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font34"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont34"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont34");
$keyboard=$keyfont34;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font35"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont35"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont35");
$keyboard=$keyfont35;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font36"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont36"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont36");
$keyboard=$keyfont36;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font37"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont37"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont37");
$keyboard=$keyfont37;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font38"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont38"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont35");
$keyboard=$keyfont38;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font39"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont39"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont39");
$keyboard=$keyfont39;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font40"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont40"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont40");
$keyboard=$keyfont40;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font41"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont41"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont41");
$keyboard=$keyfont41;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font42"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont42"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont42");
$keyboard=$keyfont42;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font43"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont43"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont43");
$keyboard=$keyfont43;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font44"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont44"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont44");
$keyboard=$keyfont44;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font45"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont45"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont45");
$keyboard=$keyfont45;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="font46"){
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont46"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","keyfont46");
$keyboard=$keyfont46;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="fa"){
if(file_get_contents("type/$from_id2-numbers.txt")=="fakeys"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard=$keys;
}else{
file_put_contents("type/$from_id2-numbers.txt","fakeys");
$keyboard=$fakeys;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="send"){
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
if(file_get_contents("type/$from_id2-lang.txt")=="fa"){
$text = "
0002
";
$keykey=json_encode([
'inline_keyboard'=>[
[['text'=>"English",'callback_data'=>"changelang2"]]
]]);
}
if(file_get_contents("type/$from_id2-lang.txt")=="en"){
$text = "👆🏻 Just forward this message and you're done.\nTry again: /start";
$keykey=json_encode([
'inline_keyboard'=>[
[['text'=>"فارسی",'callback_data'=>"changelang2"]]
]]);
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
]);
bot('sendMessage',[
'chat_id'=>$from_id2,
'text'=>$text,
'reply_markup'=>$keykey
]);
}
if($data=="shifton10"){
file_put_contents("type/$from_id2-numbers.txt","shiftedkeys2");
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$shiftedkeys2
]);
}
if($data=="shifton20"){
file_put_contents("type/$from_id2-numbers.txt","shiftednumkeys2");
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$shiftednumkeys2
]);
}
if($data=="shifton1"){
file_put_contents("type/$from_id2-numbers.txt","shiftedkeys");
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$shiftedkeys
]);
}
if($data=="shifton2"){
file_put_contents("type/$from_id2-numbers.txt","shiftednumkeys");
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$shiftednumkeys
]);
}
if($data=="del"){
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftednumkeys"){
$keyboard = $shiftednumkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftedkeys"){
$keyboard = $shiftedkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftednumkeys2"){
$keyboard = $shiftednumkeys2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftedkeys2"){
$keyboard = $shiftedkeys2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="numkeys"){
$keyboard = $numkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keys"){
$keyboard = $keys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="fakeys"){
$keyboard = $fakeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1"){
$keyboard = $keyfont1;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1B"){
$keyboard = $keyfont1B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2"){
$keyboard = $keyfont2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2B"){
$keyboard = $keyfont2B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3"){
$keyboard = $keyfont3;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3B"){
$keyboard = $keyfont3B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont4"){
$keyboard = $keyfont4;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont5"){
$keyboard = $keyfont5;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont6"){
$keyboard = $keyfont6;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont7"){
$keyboard = $keyfont7;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont8"){
$keyboard = $keyfont8;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont9"){
$keyboard = $keyfont9;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont10"){
$keyboard = $keyfont10;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont11"){
$keyboard = $keyfont11;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont12"){
$keyboard = $keyfont12;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont13"){
$keyboard = $keyfont13;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont14"){
$keyboard = $keyfont14;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont15"){
$keyboard = $keyfont15;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont16"){
$keyboard = $keyfont16;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont17"){
$keyboard = $keyfont17;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont18"){
$keyboard = $keyfont18;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont19"){
$keyboard = $keyfont19;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont20"){
$keyboard = $keyfont20;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont21"){
$keyboard = $keyfont21;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont22"){
$keyboard = $keyfont22;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont23"){
$keyboard = $keyfont23;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont24"){
$keyboard = $keyfont24;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont25"){
$keyboard = $keyfont25;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont26"){
$keyboard = $keyfont26;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont27"){
$keyboard = $keyfont27;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont28"){
$keyboard = $keyfont28;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont29"){
$keyboard = $keyfont29;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont30"){
$keyboard = $keyfont30;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont31"){
$keyboard = $keyfont31;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont32"){
$keyboard = $keyfont32;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont33"){
$keyboard = $keyfont33;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont34"){
$keyboard = $keyfont34;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont35"){
$keyboard = $keyfont35;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont36"){
$keyboard = $keyfont36;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont37"){
$keyboard = $keyfont37;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont38"){
$keyboard = $keyfont38;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont39"){
$keyboard = $keyfont39;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont40"){
$keyboard = $keyfont40;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont41"){
$keyboard = $keyfont41;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont42"){
$keyboard = $keyfont42;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont43"){
$keyboard = $keyfont43;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont44"){
$keyboard = $keyfont44;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont45"){
$keyboard = $keyfont45;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont46"){
$keyboard = $keyfont46;
} 
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys"){
$keyboard = $emojikeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys2"){
$keyboard = $emojikeys2;
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
$type = substr_replace($type ,"",-1);
file_put_contents("type/$from_id2.txt",$type);
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با موفقیت حذف شد
$type",
'reply_markup'=>$keyboard
]);
}
if($data=="reset"){
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftednumkeys"){
$keyboard = $shiftednumkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftedkeys"){
$keyboard = $shiftedkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftednumkeys2"){
$keyboard = $shiftednumkeys2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftedkeys2"){
$keyboard = $shiftedkeys2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="numkeys"){
$keyboard = $numkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keys"){
$keyboard = $keys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="fakeys"){
$keyboard = $fakeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1"){
$keyboard = $keyfont1;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1B"){
$keyboard = $keyfont1B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2"){
$keyboard = $keyfont2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2B"){
$keyboard = $keyfont2B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3"){
$keyboard = $keyfont3;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3B"){
$keyboard = $keyfont3B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont4"){
$keyboard = $keyfont4;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont5"){
$keyboard = $keyfont5;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont6"){
$keyboard = $keyfont6;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont7"){
$keyboard = $keyfont7;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont8"){
$keyboard = $keyfont8;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont9"){
$keyboard = $keyfont9;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont10"){
$keyboard = $keyfont10;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont11"){
$keyboard = $keyfont11;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont12"){
$keyboard = $keyfont12;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont13"){
$keyboard = $keyfont13;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont14"){
$keyboard = $keyfont14;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont15"){
$keyboard = $keyfont15;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont16"){
$keyboard = $keyfont16;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont17"){
$keyboard = $keyfont17;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont18"){
$keyboard = $keyfont18;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont19"){
$keyboard = $keyfont19;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont20"){
$keyboard = $keyfont20;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont21"){
$keyboard = $keyfont21;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont22"){
$keyboard = $keyfont22;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont23"){
$keyboard = $keyfont23;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont24"){
$keyboard = $keyfont24;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont25"){
$keyboard = $keyfont25;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont26"){
$keyboard = $keyfont26;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont27"){
$keyboard = $keyfont27;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont28"){
$keyboard = $keyfont28;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont29"){
$keyboard = $keyfont29;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont30"){
$keyboard = $keyfont30;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont31"){
$keyboard = $keyfont31;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont32"){
$keyboard = $keyfont32;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont33"){
$keyboard = $keyfont33;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont34"){
$keyboard = $keyfont34;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont35"){
$keyboard = $keyfont35;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont36"){
$keyboard = $keyfont36;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont37"){
$keyboard = $keyfont37;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont38"){
$keyboard = $keyfont38;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont39"){
$keyboard = $keyfont39;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont40"){
$keyboard = $keyfont40;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont41"){
$keyboard = $keyfont41;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont42"){
$keyboard = $keyfont42;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont43"){
$keyboard = $keyfont43;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont44"){
$keyboard = $keyfont44;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont45"){
$keyboard = $keyfont45;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont46"){
$keyboard = $keyfont46;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys"){
$keyboard = $emojikeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys2"){
$keyboard = $emojikeys2;
}
$type = "";
file_put_contents("type/$from_id2.txt",$type);
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"
متن شما با موفقیت حذف شد
$type
",
'reply_markup'=>$keyboard
]);
}
if($data=="emoji"){
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys"){
$keyboard = $keys;
file_put_contents("type/$from_id2-numbers.txt","keys");
}else{
$keyboard = $emojikeys;
file_put_contents("type/$from_id2-numbers.txt","emojikeys");
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard,
]);
}
if($data=="emoji2"){
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys2"){
$keyboard = $keys;
file_put_contents("type/$from_id2-numbers.txt","keys");
}else{
$keyboard = $emojikeys2;
file_put_contents("type/$from_id2-numbers.txt","emojikeys2");
}
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$keyboard,
]);
}
if($data=="alpha"){
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
file_put_contents("type/$from_id2-numbers.txt","keys");
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"
به منوی اصلی برگشتیم
از کیبورد زیر یک فونت را انتخاب کنید
اگر به راهنما نیاز دارید /help را ارسال کنید
@CodexSilver

☟︎︎︎متن فعلی شما☟︎︎︎
$type",
'reply_markup'=>$keys,
]);
}
if($data=="numbers"){
$type = file_get_contents("type/$from_id2.txt");
if(!$type){
$type = " ";
}
file_put_contents("type/$from_id2-numbers.txt","numkeys");
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"با استفاده از کیبورد زیر متن خود را بنویسید
$type",
'reply_markup'=>$numkeys
]);
}
if(strpos($data,"_")!==false){
$data = str_replace("_","",$data);
$data = str_replace("space"," ",$data);
$data = str_replace("enter","\n",$data);
$type = file_get_contents("type/$from_id2.txt");
$type = $type.$data;
file_put_contents("type/$from_id2.txt",$type);
$type = file_get_contents("type/$from_id2.txt");
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftednumkeys"){
file_put_contents("type/$from_id2-numbers.txt","numkeys");
$keyboard = $numkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftednumkeys2"){
$keyboard = $shiftednumkeys2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftedkeys"){
file_put_contents("type/$from_id2-numbers.txt","keys");
$keyboard = $keys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="shiftedkeys2"){
$keyboard = $shiftedkeys2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="numkeys"){
$keyboard = $numkeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keys"){
$keyboard = $keys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="fakeys"){
$keyboard = $fakeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1"){
$keyboard = $keyfont1;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont1B"){
$keyboard = $keyfont1B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2"){
$keyboard = $keyfont2;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont2B"){
$keyboard = $keyfont2B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3"){
$keyboard = $keyfont3;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont3B"){
$keyboard = $keyfont3B;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont4"){
$keyboard = $keyfont4;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont5"){
$keyboard = $keyfont5;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont6"){
$keyboard = $keyfont6;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont7"){
$keyboard = $keyfont7;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont8"){
$keyboard = $keyfont8;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont9"){
$keyboard = $keyfont9;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont10"){
$keyboard = $keyfont10;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont11"){
$keyboard = $keyfont11;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont12"){
$keyboard = $keyfont12;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont13"){
$keyboard = $keyfont13;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont14"){
$keyboard = $keyfont14;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont15"){
$keyboard = $keyfont15;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont16"){
$keyboard = $keyfont16;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont17"){
$keyboard = $keyfont17;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont18"){
$keyboard = $keyfont18;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont19"){
$keyboard = $keyfont19;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont20"){
$keyboard = $keyfont20;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont21"){
$keyboard = $keyfont21;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont22"){
$keyboard = $keyfont22;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont23"){
$keyboard = $keyfont23;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont24"){
$keyboard = $keyfont24;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont25"){
$keyboard = $keyfont25;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont26"){
$keyboard = $keyfont26;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont27"){
$keyboard = $keyfont27;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont28"){
$keyboard = $keyfont28;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont29"){
$keyboard = $keyfont29;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont30"){
$keyboard = $keyfont30;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont31"){
$keyboard = $keyfont31;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont32"){
$keyboard = $keyfont32;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont33"){
$keyboard = $keyfont33;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont34"){
$keyboard = $keyfont34;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont35"){
$keyboard = $keyfont35;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont36"){
$keyboard = $keyfont36;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont37"){
$keyboard = $keyfont37;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont38"){
$keyboard = $keyfont38;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont39"){
$keyboard = $keyfont39;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont40"){
$keyboard = $keyfont40;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont41"){
$keyboard = $keyfont41;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont42"){
$keyboard = $keyfont42;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont43"){
$keyboard = $keyfont43;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont44"){
$keyboard = $keyfont44;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont45"){
$keyboard = $keyfont45;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="keyfont46"){
$keyboard = $keyfont46;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys"){
$keyboard = $emojikeys;
}
if(file_get_contents("type/$from_id2-numbers.txt")=="emojikeys2"){
$keyboard = $emojikeys2;
}
bot('editmessagetext',[
'chat_id'=>$from_id2,
'message_id'=>$message_id2,
 'text'=>"$type",
'reply_markup'=>$keyboard
]);
}
?>