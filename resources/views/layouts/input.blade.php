
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>麻雀自動点数計算</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>

</head>
<body>

<!-- 
    <div>
        <img id="mypic" onclick="slideshow()" src="img/ura13.gif" alt="裏1">
            <script>
                var img_src = new Array("img/man1s.gif");
                var num = 0;

                function slideshow() {
                    if (num == 1) {
                    num ++;
                    }
                document.getElementById("mypic").src=img_src[num];
                }
            </script>

    <div>
        <img src="img/ura2.gif" alt="裏">
        <img src="img/ura3.gif" alt="裏">
        <img src="img/ura4.gif" alt="裏">
        <img src="img/ura5.gif" alt="裏">
        <img src="img/ura6.gif" alt="裏">
        <img src="img/ura7.gif" alt="裏">
        <img src="img/ura8.gif" alt="裏">
        <img src="img/ura9.gif" alt="裏">
        <img src="img/ura10.gif" alt="裏">
        <img src="img/ura11.gif" alt="裏">
        <img src="img/ura12.gif" alt="裏"><br>
        あがり牌<img src="img/ura14.gif" alt="裏">
    </div>
-->

    <h1>手牌を入力してください</h1>

    <div class="tab-content">
        <div class="tab-pane active">
            <div id="haiga"><!--haiga start-->   
                <img data-pai="m1" src="img/man1s.gif" alt="一萬" class="m1" name="1">
                <img data-pai="m2" src="img/man2s.gif" alt="二萬" class="m2" name="2">
                <img data-pai="m3" src="img/man3s.gif" alt="三萬" class="m3" name="3">
                <img data-pai="m4" src="img/man4s.gif" alt="四萬" class="m4" name="4">
                <img data-pai="m5" src="img/man5s.gif" alt="五萬" class="m5" name="5">
                <img data-pai="m6" src="img/man6s.gif" alt="六萬" class="m6" name="6">
                <img data-pai="m7" src="img/man7s.gif" alt="七萬" class="m7" name="7">
                <img data-pai="m8" src="img/man8s.gif" alt="八萬" class="m8" name="8">
                <img data-pai="m9" src="img/man9s.gif" alt="九萬" class="m9" name="9">
                <br>

                <img data-pai="p1" src="img/pin1s.gif" alt="一筒" class="p1" name="11">
                <img data-pai="p2" src="img/pin2s.gif" alt="二筒" class="p2" name="12">
                <img data-pai="p3" src="img/pin3s.gif" alt="三筒" class="p3" name="13">
                <img data-pai="p4" src="img/pin4s.gif" alt="四筒" class="p4" name="14">
                <img data-pai="p5" src="img/pin5s.gif" alt="五筒" class="p5" name="15">
                <img data-pai="p6" src="img/pin6s.gif" alt="六筒" class="p6" name="16">
                <img data-pai="p7" src="img/pin7s.gif" alt="七筒" class="p7" name="17">
                <img data-pai="p8" src="img/pin8s.gif" alt="八筒" class="p8" name="18">
                <img data-pai="p9" src="img/pin9s.gif" alt="九筒" class="p9" name="19">
                <br>

                <img data-pai="s1" src="img/so1s.gif" alt="一索" class="s1" name="21">
                <img data-pai="s2" src="img/so2s.gif" alt="二索" class="s2" name="22">
                <img data-pai="s3" src="img/so3s.gif" alt="三索" class="s3" name="23">
                <img data-pai="s4" src="img/so4s.gif" alt="四索" class="s4" name="24">
                <img data-pai="s5" src="img/so5s.gif" alt="五索" class="s5" name="25">
                <img data-pai="s6" src="img/so6s.gif" alt="六索" class="s6" name="26">
                <img data-pai="s7" src="img/so7s.gif" alt="七索" class="s7" name="27">
                <img data-pai="s8" src="img/so8s.gif" alt="八索" class="s8" name="28">
                <img data-pai="s9" src="img/so9s.gif" alt="九索" class="s9" name="29">
                <br>

                <img data-pai="j1" src="img/ji_ton.gif" alt="東" class="j1" name="31">
                <img data-pai="j2" src="img/ji_nan.gif" alt="南" class="j2" name="32">
                <img data-pai="j3" src="img/ji_sya.gif" alt="西" class="j3" name="33">
                <img data-pai="j4" src="img/ji_pei.gif" alt="北" class="j4" name="34">
                <img data-pai="j5" src="img/ji_haku.gif" alt="白" class="j5" name="35">
                <img data-pai="j6" src="img/ji_hatsu.gif" alt="発" class="j6" name="36">
                <img data-pai="j7" src="img/ji_chun.gif" alt="中" class="j7" name="37">
            </div><!--haiga end-->
        </div>
    </div>

<!--
    <form>
        <div>牌姿: 
          <input name="paistr" type="text">
          <input type="submit" value="決定">
          <input type="reset" value="クリア">
        </div>
    </form>

    <hr>


    <div class="huledialog hide">
        <div class="hule">
            <div class="shoupai">
                <div class="bingpai"></div>
                <div class="fulou"></div>
            </div>
        </div>
    </div>

    <div id="tehai-info" class="card" style="margin-bottom: 8px;">
        <div id="paisu">
            <table class="style">
                <tbody>
                    <tr>
                        <td id="pai0"></td>
                        <td id="pai1"></td>
                        <td id="pai2"></td>
                        <td id="pai3"></td>
                        <td id="pai4"></td>
                        <td id="pai5"></td>
                        <td id="pai6"></td>
                        <td id="pai7"></td>
                        <td id="pai8"></td>
                        <td id="pai9"></td>
                        <td id="pai10"></td>
                        <td id="pai11"></td>
                        <td id="pai12"></td>
                        <td id="pai13"></td>            
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

-->

    <hr>
    <tr>
        <a href="javascript:document.ph01.src = 'img/man1s.gif'; void(0);">
            <img src="img/man1s.gif" alt="一萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man2s.gif'; void(0);">
            <img src="img/man2s.gif" alt="二萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man3s.gif'; void(0);">
            <img src="img/man3s.gif" alt="三萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man4s.gif'; void(0);">
            <img src="img/man4s.gif" alt="四萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man5s.gif'; void(0);">
            <img src="img/man5s.gif" alt="五萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man6s.gif'; void(0);">
            <img src="img/man6s.gif" alt="六萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man7s.gif'; void(0);">
            <img src="img/man7s.gif" alt="七萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man8s.gif'; void(0);">
            <img src="img/man8s.gif" alt="八萬" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/man9s.gif'; void(0);">
            <img src="img/man9s.gif" alt="九萬" border="0"></a><br>
        
        <a href="javascript:document.ph01.src = 'img/pin1s.gif'; void(0);">
            <img src="img/pin1s.gif" alt="一筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin2s.gif'; void(0);">
            <img src="img/pin2s.gif" alt="二筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin3s.gif'; void(0);">
            <img src="img/pin3s.gif" alt="三筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin4s.gif'; void(0);">
            <img src="img/pin4s.gif" alt="四筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin5s.gif'; void(0);">
            <img src="img/pin5s.gif" alt="五筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin6s.gif'; void(0);">
            <img src="img/pin6s.gif" alt="六筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin7s.gif'; void(0);">
            <img src="img/pin7s.gif" alt="七筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin8s.gif'; void(0);">
            <img src="img/pin8s.gif" alt="八筒" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/pin9s.gif'; void(0);">
            <img src="img/pin9s.gif" alt="九筒" border="0"></a><br>
                                                                                                                                                    
        <a href="javascript:document.ph01.src = 'img/so1s.gif'; void(0);">
            <img src="img/so1s.gif" alt="一索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so2s.gif'; void(0);">
            <img src="img/so2s.gif" alt="二索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so3s.gif'; void(0);">
            <img src="img/so3s.gif" alt="三索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so4s.gif'; void(0);">
            <img src="img/so4s.gif" alt="四索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so5s.gif'; void(0);">
            <img src="img/so5s.gif" alt="五索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so6s.gif'; void(0);">
            <img src="img/so6s.gif" alt="六索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so7s.gif'; void(0);">
            <img src="img/so7s.gif" alt="七索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so8s.gif'; void(0);">
            <img src="img/so8s.gif" alt="八索" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/so9s.gif'; void(0);">
            <img src="img/so9s.gif" alt="九索" border="0"></a><br>
    
        <a href="javascript:document.ph01.src = 'img/ji_ton.gif'; void(0);">
            <img src="img/ji_ton.gif" alt="東" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/ji_nan.gif'; void(0);">
            <img src="img/ji_nan.gif" alt="南" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/ji_sya.gif'; void(0);">
            <img src="img/ji_sya.gif" alt="西" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/ji_pei.gif'; void(0);">
            <img src="img/ji_pei.gif" alt="北" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/ji_haku.gif'; void(0);">
            <img src="img/ji_haku.gif" alt="白" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/ji_hatsu.gif'; void(0);">
            <img src="img/ji_hatsu.gif" alt="発" border="0"></a>
        <a href="javascript:document.ph01.src = 'img/ji_chun.gif'; void(0);">
            <img src="img/ji_chun.gif" alt="中" border="0"></a><br>
                                                                                        
        <td><img src="img/ura1.gif" alt="裏1" name="ph01"></td>
    </tr><br>

    <tr>
        <a href="javascript:document.ph02.src = 'img/man1s.gif'; void(0);">
            <img src="img/man1s.gif" alt="一萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man2s.gif'; void(0);">
            <img src="img/man2s.gif" alt="二萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man3s.gif'; void(0);">
            <img src="img/man3s.gif" alt="三萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man4s.gif'; void(0);">
            <img src="img/man4s.gif" alt="四萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man5s.gif'; void(0);">
            <img src="img/man5s.gif" alt="五萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man6s.gif'; void(0);">
            <img src="img/man6s.gif" alt="六萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man7s.gif'; void(0);">
            <img src="img/man7s.gif" alt="七萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man8s.gif'; void(0);">
            <img src="img/man8s.gif" alt="八萬" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/man9s.gif'; void(0);">
            <img src="img/man9s.gif" alt="九萬" border="0"></a><br>
        
        <a href="javascript:document.ph02.src = 'img/pin1s.gif'; void(0);">
            <img src="img/pin1s.gif" alt="一筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin2s.gif'; void(0);">
            <img src="img/pin2s.gif" alt="二筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin3s.gif'; void(0);">
            <img src="img/pin3s.gif" alt="三筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin4s.gif'; void(0);">
            <img src="img/pin4s.gif" alt="四筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin5s.gif'; void(0);">
            <img src="img/pin5s.gif" alt="五筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin6s.gif'; void(0);">
            <img src="img/pin6s.gif" alt="六筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin7s.gif'; void(0);">
            <img src="img/pin7s.gif" alt="七筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin8s.gif'; void(0);">
            <img src="img/pin8s.gif" alt="八筒" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/pin9s.gif'; void(0);">
            <img src="img/pin9s.gif" alt="九筒" border="0"></a><br>
                                                                                                                                                   
        <a href="javascript:document.ph02.src = 'img/so1s.gif'; void(0);">
            <img src="img/so1s.gif" alt="一索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so2s.gif'; void(0);">
            <img src="img/so2s.gif" alt="二索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so3s.gif'; void(0);">
            <img src="img/so3s.gif" alt="三索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so4s.gif'; void(0);">
            <img src="img/so4s.gif" alt="四索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so5s.gif'; void(0);">
            <img src="img/so5s.gif" alt="五索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so6s.gif'; void(0);">
            <img src="img/so6s.gif" alt="六索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so7s.gif'; void(0);">
            <img src="img/so7s.gif" alt="七索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so8s.gif'; void(0);">
            <img src="img/so8s.gif" alt="八索" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/so9s.gif'; void(0);">
            <img src="img/so9s.gif" alt="九索" border="0"></a><br>

        <a href="javascript:document.ph02.src = 'img/ji_ton.gif'; void(0);">
            <img src="img/ji_ton.gif" alt="東" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/ji_nan.gif'; void(0);">
            <img src="img/ji_nan.gif" alt="南" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/ji_sya.gif'; void(0);">
            <img src="img/ji_sya.gif" alt="西" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/ji_pei.gif'; void(0);">
            <img src="img/ji_pei.gif" alt="北" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/ji_haku.gif'; void(0);">
            <img src="img/ji_haku.gif" alt="白" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/ji_hatsu.gif'; void(0);">
            <img src="img/ji_hatsu.gif" alt="発" border="0"></a>
        <a href="javascript:document.ph02.src = 'img/ji_chun.gif'; void(0);">
            <img src="img/ji_chun.gif" alt="中" border="0"></a><br>
                                                                                        
        <td><img src="img/ura2.gif" alt="裏2" name="ph02"></td>
    </tr><br>
    

    <div>
        <a href="#" name="PONG" class="btn-square">ポン</a>
        <a href="#" name="CHOW" class="btn-square">チー</a>
        <a href="#" name="ANKAN" class="btn-square">暗槓</a>
        <a href="#" name="MINKAN" class="btn-square">明槓</a>
    </div>

    <div class="form-group">
        <label for="BAKAZE">場風</label>
        <select id="BAKAZE" name="BAKAZE" class="form-control">
            <option value="TONBA">東場</option>
            <option value="NANBA">南場</option>
            <option value="SYABA">西場</option>
            <option value="PEIBA">北場</option>
        </select>

        <label for="jikaze">自風</label>
        <select id="jikaze" name="BAKAZE" class="form-control">
            <option value="TONFU">東風</option>
            <option value="NANFU">南風</option>
            <option value="SYAFU">西風</option>
            <option value="PEIFU">北風</option>
        </select>
    </div>

    <a href="output.html" class="btn-circle-3d">OK</a>

</body>
</html>