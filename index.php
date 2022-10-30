<?php

    require_once(__DIR__."/config/config.php");

    require_once(__DIR__."/config/function.php");

    $title = 'HOME | '.$CMSNT->site('tenweb');

    require_once(__DIR__."/public/client/Header.php");

    require_once(__DIR__."/public/client/Nav.php");

?>

<body style="

background: url('https://i.pinimg.com/736x/56/86/03/568603cbd1860c67bf8f6776cbe7f885.jpg');?>') 0 / cover fixed;

background-repeat: no-repeat;

">

 

   

<div class="v-theme">

    <div class="my-6">

   <div class="max-w-6xl mx-auto relative "  style="

    backdrop-filter: blur(6px);

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    overflow: hidden;

    box-shadow: 0 0 50px #ff00a0;

    border: solid 2.5px #fa00d1bf;

"> 

        <div class="w-full border-4 border-trueGray-800 bg-trueGray-800 max-w-6xl mx-auto relative">

            <div class="flex md:flex-row-reverse flex-wrap">

                <div class="w-full md:w-4/6 pb-0">

                    

                    <div class="mb-4 py-4 md:p-4 bg-box-dark" style="

    backdrop-filter: blur(6px);

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    overflow: hidden;

    box-shadow: 0 0 50px #ff00a0;

    border: solid 2.5px #fa00d1bf;

">

                    <iframe src="https://youtube.com/embed/<?=$CMSNT->site('id_video_youtube');?>" frameborder="0" width="100%" height="350" allowfullscreen=""></iframe>

                    </div>

                    

                </div>

                               <div class="w-full md:w-2/6"> 

                    

                    <div class="mb-4 py-4 md:p-4 bg-box-dark" style="

    backdrop-filter: blur(6px);

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    overflow: hidden;

    box-shadow: 0 0 50px #ff00a0;

    border: solid 2.5px #fa00d1bf;

">

                        <div class="flex color-grant font-bold">

                            <div class="cursor-pointer bg-trueGray-800 tablinks" onclick="Tab('nap')">

                                <h2 class="py-1 px-2 w-32 text-center title-grant font-extrabold text-xl md:text-2xl">

                                    <font color="FF00FF">NẠP THẺ</font>

                                </h2>

                            </div>

                            <div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('top')">

                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">

                                    TOP NẠP TIỀN </h2>

                            </div>

                        </div>

                        <span class="tabcontent" id="nap" style="display:block;">

                            <form class="w-full form-header">

                                <div class="py-3 px-5">

                                   <span class="mb-2 block">

                                        <div class="flex items-center relative" style="border-radius: 3.5px;overflow: hidden;box-shadow: 0 0 10px #000;color: white;">

                                            <select id="loaithe"

                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">

                                                <option value="">💎Chọn Loại Thẻ💎</option>

<option value="VIETTEL">💛Viettel (100%)💛</option>

                        <option value="MOBIFONE">🧡Mobifone (100%)🧡</option>

                        <option value="Vinaphone">💙Vinaphone (100%)💙</option>

<option value="Vietnammobile">💚Vietnamobile (100%)💚</option>

<option value="Zing">🤍Zing (100%)🤍</option>

                                            </select>

                                            <div

                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"

                                                    class="fill-current h-4 w-4">

                                                    <path

                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">

                                                    </path>

                                                </svg>

                                            </div>

                                        </div>

                                    </span>

                                    <span class="mb-2 block">

                                        <div class="flex items-center relative" style="border-radius: 3.5px;overflow: hidden;box-shadow: 0 0 10px #000;color: white;">

                                            <select id="menhgia"

                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">

                                                <option value="">🌟Mệnh Giá🌟

</option>

<option value="10000">🌟10,000 VND🌟</option>

<option value="20000">🌟20,000 VND🌟</option>

<option value="30000">🌟30,000 VND🌟</option>

<option value="50000">🌟50,000 VND🌟</option>

<option value="100000">🌟100,000 VND🌟</option>

<option value="200000">🌟200,000 VND🌟</option>

<option value="300000">🌟300,000 VND🌟</option>

<option value="500000">🌟500,000 VND🌟</option>

<option value="1000000">🌟1,000,000 VND🌟</option>

                                            </select>

                                            <div

                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"

                                                    class="fill-current h-4 w-4">

                                                    <path

                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">

                                                    </path>

                                                </svg>

                                            </div>

                                        </div>

                                    </span>

                                   <span class="mb-2 block"> 

                                   <div class="flex items-center relative">

                                       <div

                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">

                                            <box-icon name='wallet-alt' type='solid' animation='tada' color='rgba(239,10,211,0.76)' ></box-icon>

                                            </div>

                                            <input type="text" id="seri" placeholder="Mã Số Seri" class="appearance-none bg-trueGray-900 block border-trueGray-600 focus:outline-none leading-tight px-3 py-2 rounded text-white w-full" style=" border-radius: 10px; background: #fffefe; box-shadow: 0 0 25px black; color: black; ">  

                                            </div>

                                   </span>

                                    </span>

                                    <span class="mb-2 block">

                                        <div class="flex items-center relative">

                                            <div

                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">

                                            <box-icon name='wallet-alt' type='solid' animation='tada' color='rgba(239,10,211,0.76)' ></box-icon>

                                            </div>

                                           <input type="text" id="pin" placeholder="Mã số thẻ" class="appearance-none bg-trueGray-900 block border-trueGray-600 focus:outline-none leading-tight px-3 py-2 rounded text-white w-full" style="

    border-radius: 10px;

    background: #fffefe;

    box-shadow: 0 0 25px black;

    color: black;

">

                                        </div>

                                    </span>

                                    <div class="mt-4">

                                        <button type="button" id="NapThe"

                                            class="flex focus:outline-none h-9 items-center justify-center p-1 px-8 rounded text-white text-xl w-full textss"style="

   background: linear-gradient(45deg, #CC00CC, #990033, #0066CC);

                            overflow: hidden;

                            box-shadow: 0 0 20px #FF0000;

">

                                                

                                                <div>

                                                        

                                                  </div><h1 style="color: #FFFFF;"><i class="fa fa-shopping"></i>💷Nạp Ngay💷

                                        </button>

                                    </div>

                                    <div class="text-center mt-2 text-white font-semibold text-sm">

                                        🚫Hãy chọn đúng mệnh giá. Sai sẽ mất thẻ🚫

                                        <br>

                                        ❗Vui Lòng Nhập Đúng Số Seri❗

                                    </div>

                                </div>

                            </form>

                        </span>

                        <div class="tabcontent" id="top">

                            <div class="v-list-top-card py-1 mt-2 md:py-2 px-1 md:px-3">

                                <?php $i=0; foreach($CMSNT->get_list("SELECT * FROM `users` ORDER BY `total_money` DESC LIMIT 6 ") as $top) { ?>

                                <div class="flex items-center justify-between px-2 py-1">

                                    <div class="flex items-center">

                                        <div class="v-star relative">

                                            <box-icon name='bell' type='solid' size='lg' color="red" animation='tada'></box-icon>

                                    

                                            <span class="absolute font-bold text-white" style="top: 10px; left: 19px;">

                                                <?=$i++;?> </span>

                                        </div>

                                        <span class="ml-1 text-white w-full font-bold truncate"

                                            style="max-width: 8rem;">

                                            <?=$top['username'];?>

                                        </span>

                                    </div>

                                    <div class="font-bold text-lg">

                                        <span class="bg-pink-600 w-32 text-white rounded-sm text-center inline-block">

                                            <?=format_cash($top['total_money']);?> <span

                                                class="text-xs"><small>VND</small></span>

                                         </span>

                                    </div>

                                </div>

                              <?php }?>

                                                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <br>

     <div class="pb-10">

        <div class="v-card w-full max-w-6xl mx-auto">

            <div class="md:mx-0">

                <div class="py-2">

                    <div class="mb-10">

                        <div class="mb-4 py-4 md:p-4 bg-box-dark" style="

    backdrop-filter: blur(6px);

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    overflow: hidden;

    box-shadow: 0 0 50px #ff00a0;

    border: solid 2.5px #fa00d1bf;

">

                            <marquee>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>tha****</b><b>đã mua 1500 ROBUX ĐÃ THUẾ </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>choi****</b><b>đã mua NICK ROBLOX FRUIT </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>5dt****</b><b>đã mua MUA 300 ROBUX CHÍNH HÃNG </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>l72n****</b><b>đã mua GamePASS </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>Tgk****</b><b>đã mua 90 ROBUX ĐÃ THUẾ </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>Tac****</b><b>đã mua soul </b>

                               

                                

                                </div>

                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>Vip****</b><b>đã mua MUA NICK ROBLOX FRUIT 2 TRIỆU </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>Dak****</b><b>đã mua 5000 ROBUX ĐÃ THUẾ </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>skh****</b><b>đã mua MUA GAMEPASS ( DARK BLADE YORU ) </b>

                               

                                

                                </div>

                                                                <img src="https://i.imgur.com/pFLwH1Z.png" width="35" height="35" style="display: inline-block;"><div style="display: inline-block; margin: 0 20px 0 20px; text-align: center; color: #fff"> <b>fre****</b><b>đã mua 1800 ROBUX ĐÃ THUẾ </b>

                               

                                

                                </div>

                                                                                                 </marquee>

        </div> 

      </div>

                    </div>

                </div>

                

 

         

<div class="pb-10">

        <div class="v-card w-full max-w-6xl mx-auto">

            <div class="md:mx-0">

                <div class="py-2">

                    <div class="mb-16">

                        <div class="mb-4 py-4 md:p-4 bg-box-dark" style="

    backdrop-filter: blur(6px);

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    overflow: hidden;

    box-shadow: 0 0 50px #ff00a0;

    border: solid 2.5px #fa00d1bf;

">

                            

                        <div class="mb-6 block">

                            <div class="mb-4 py-4 md:p-4 chino-container outer">

                            <div class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center md:text-3xl text-2xl font-extrabold" style="font-family: Varela Round;animation: lights 5s 750ms linear infinite;">

<style>

.txtdeepshadow {

text-align: center;

font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;

font-size: 30px;

height: 100px;

padding-top: 40px;

color: #e0dfdc;

background-color: ;

letter-spacing: .1em;

text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);

}

</style>

<h1 class='txtdeepshadow'>DANH MỤC DỊCH VỤ ROBLOX</h1>

                             <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>

                        </div>

                        

                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">

                                                                  

                            <?php foreach($CMSNT->get_list("SELECT * FROM `category_caythue` WHERE `display` = 'SHOW' ") as $category) { ?>

                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"

                                style="padding: 1px; padding: 1px;border: 3px solid #FFFFFF;">

                                <!---->

                                <a href="<?=BASE_URL('dich-vu/'.$category['id']);?>">

                                    <img data-src="<?=BASE_URL($category['img']);?>"

                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />

                                    <div class="py-1">

                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"

                                            style="color: #ead9d9;">

                                            <?=$category['title'];?>

                                        </div>

                                        <div class="flex px-2 mt-2 justify-center">

                                            <!---->

                                            <!---->

                                        </div>

                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">

                                               <button type="button" id="<?=BASE_URL('dich-vu/'.$category['id']);?>" class="flex focus:outline-none h-10 items-center justify-center p-1 px-8 rounded text-white text-xl w-full textss"style="

   background: linear-gradient(45deg, #FFFFFF, #FFFFFF);

                            overflow: hidden;

                            box-shadow: 0 0 20px #FF0000;

">

                                                

                                                <div>

                                                        

                                                  </div><h1 style="color: #000000;"><i class="fa fa-heart"></i>  MUA NGAY<i class='bx bxl-gitlab bx-fade-up' ></i>

                                                

                                                </a>

                                            </div>

                                        </div>

                                </a>

                            </div>

                            <?php }?>

                            <!--LIÊN QUÂN-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    

<div class="pb-10">

        <div class="v-card w-full max-w-6xl mx-auto">

            <div class="md:mx-0">

                <div class="py-2">

                    <div class="mb-16">

                        <div class="mb-4 py-4 md:p-4 bg-box-dark" style="

    backdrop-filter: blur(6px);

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    overflow: hidden;

    box-shadow: 0 0 50px #ff00a0;

    border: solid 2.5px #fa00d1bf;

">

                            

                            <div class="mb-6">

                        <div class="mb-6 block">

                            <div class="mb-4 py-4 md:p-4 chino-container outer">

                            <div class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center md:text-3xl text-2xl font-extrabold" style="font-family: Varela Round;animation: lights 5s 750ms linear infinite;">

         <style>

.txtdeepshadow {

text-align: center;

font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;

font-size: 30px;

height: 100px;

padding-top: 40px;

color: #e0dfdc;

background-color: ;

letter-spacing: .1em;

text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);

}

</style>

     <h1 class='txtdeepshadow'> DANH MỤC BÁN ACC ROBLOX</h1>

                          

                            <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>

                        </div>

                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">

                            <?php foreach($CMSNT->get_list("SELECT * FROM `category` WHERE `display` = 'SHOW' ") as $category) { ?>

                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"

                                style="padding: 1px; padding: 1px;border: 3px solid #FFFFFF;">

                                <!---->

                               

                                <a href="<?=BASE_URL('Groups/'.$category['id']);?>">

                                    <img data-src="<?=BASE_URL($category['img']);?>"

                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />

                                    <div class="py-1">

                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"

                                            style="color: #ead9d9;">

                                            <?=$category['title'];?>

                                        </div>

                                        <ul

                                            class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">

                                            <!---->

                                        </ul>

                                        <div class="flex px-2 mt-2 justify-center">

                                            <!---->

                                            <!---->

                                       </div>

                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">

                                               <button type="button" id="<?=BASE_URL('Groups/'.$category['id']);?>" class="flex focus:outline-none h-10 items-center justify-center p-1 px-8 rounded text-white text-xl w-full textss"style="

   background: linear-gradient(45deg, #FFFFFF, #FFFFFF);

                            overflow: hidden;

                            box-shadow: 0 0 20px #FF0000;

">

                                                

                                                <div>

                                                        

                                                  </div><h1 style="color: #000000;"><i class="fa fa-heart"></i>  MUA NGAY<i class='bx bxl-gitlab bx-fade-up' ></i>

                                                

                                                </a>

                                            </div>

                                        </div>

                                </a>

                            </div>

                            <?php }?>

                            <!--LIÊN QUÂN-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

  </style>

   

    <div class="animated modal fadeIn is-visible fixed z-50 pin bg-smoke-dark flex p-2 md:p-0 top-0 left-0 bottom-0 right-0"

        style="z-index: 999;backdrop-filter: blur(5px);" id="indexModal">

        <div class="align-top animated bg-white fadeInDown fixed flex flex-col h-auto justify-center m-auto max-w-md md:max-w-lg md:shadow-lg pin-b pin-x relative rounded zivhdcard shadow-inner w-full" style="

    background: linear-gradient(45deg, #bf05af9e, #8b178585);

    border-radius: 5px;

    border: solid 1px white;

    box-shadow: 0 0 25px violet;

">

            <div class="modal-header">

                <div class="text-red-600 font-bold text-lg text-center mb-3 p-3 uppercase border-b border-gray-300">

                    <h1 style="color: #FFFFFF;">Thông báo

                    </div>

    <center><div class="line"></div> </center>

                 <span class="absolute cursor-pointer text-2xl text-gray-800 pt-3 px-3" onclick="FuncHideModal()"

                    style="right: -1px; top: -2px;"><box-icon name='x-circle' type='solid' animation='spin' color='#ead9d9' ></box-icon></span>

            </div>

            <div class="modal-content">

                <div class="overflow-auto p-2 md:px-4" style="max-height: 600px;">

                    <div class="relative px-2 pb-4 text-gray-900">

                        <div class="md:px-4 overflow-auto p-2" style="max-height:400px">

                            <div class="pb-4 px-2 relative text-gray-900">

                                <?=$CMSNT->site('thongbao');?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

        <script>

    function FuncHideModal() {

        var x = document.getElementById("indexModal");

        if (x.style.display === "none") {

            x.style.display = "block";

        } else {

            x.style.display = "none";

        }

    }

    </script>

   

                

    <script type="text/javascript">

    $("#NapThe").on("click", function() {

        $('#NapThe').html('ĐANG XỬ LÝ').prop('disabled',

            true);

        $.ajax({

            url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",

            method: "POST",

            data: {

                loaithe: $("#loaithe").val(),

                menhgia: $("#menhgia").val(),

                seri: $("#seri").val(),

                pin: $("#pin").val()

            },

            success: function(response) {

                $("#thongbao").html(response);

                $('#NapThe').html(

                        'NẠP NGAY')

                    .prop('disabled', false);

            }

        });

    });

    </script>

    <script type="text/javascript">

    $("#NapThe").on("click", function() {

        $('#NapThe').html('ĐANG XỬ LÝ').prop('disabled',

            true);

        $.ajax({

            url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",

            method: "POST",

            data: {

                loaithe: $("#loaithe").val(),

                menhgia: $("#menhgia").val(),

                seri: $("#seri").val(),

                pin: $("#pin").val()

            },

            success: function(response) {

                $("#thongbao").html(response);

                $('#NapThe').html(

                        'NẠP NGAY')

                    .prop('disabled', false);

            }

        });

    });

    </script>

    <?php 

    require_once(__DIR__."/public/client/Footer.php");

?>

