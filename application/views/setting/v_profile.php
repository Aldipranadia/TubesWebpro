<style>
    header{
        padding: 20px 20px 0px;
    }
    .main-column{
        padding: 0;
    }
    a{
        text-decoration: none;
        color: #ee4c22;
    }
    a:hover{
        text-decoration: none;
        color: #ee4c22;
    }
    .simpleFormItem{
        padding: 15px 10px 0px;
    }
    .simpleFormPadding{
        margin: 5px 0 0 0;
        padding: 10px;
        border: 1px solid #e6e6f0;
        border-radius: 2px;
    }
    .simpleFormPadding input{
        width: 100%;
    }
    .simpleFormPadding textarea{
        width: 100%;
        height: 65px;
        resize: vertical;
    }
    .simpleFormLabel{
        font-size: 12px;
        font-weight: bold;
        color: #2b3237;
        margin: 0;
    }
    .simpleForm{
        width: 100%;
        border: none;
        outline: 0;
        display: block;
        line-height: 1.5em;
        color: #4A4A50;
    }
    .simpleFormHint{
        font-size: 12px;
        color: #b2b2bb;
        margin-top: 3px;
    }
    .simpleFormTable{
        margin: 5px 0 0 0;
        overflow: hidden;
        width: 100%;
        border: 0 none;
        border-spacing: 0
    }
    .simpleFormTable select{
        font-size: 16px;
        background: #fff;
        padding: 10px 5px;
        border: 1px solid #e6e6f0;
        display: block;
        width: 100%;
        border-radius: 2px;
    }
    .leftTable{
        width: 25%;
    }
    .midleTable{
        width: 40%;
        padding: 0 5px;
    }
    .genderTable select{
        width: auto;
    }
    .simpleFormFirst{
        padding: 10px;
    }
    .simpleFormThird{
        padding: 10px 0px;
    }
    .simpleFormSection{
        padding: 0px 20px;
    }
    .simpleFormThird .simpleFormItem{
        padding: 10px 20px;
        border-bottom: 1px solid #e6e6f0;
    }
    .simpleFormSecond{
        border-top: solid 8px #e6e6f0;
        border-bottom: solid 8px #.
        e6e6f0;
    }
    .simpleFormVerification{
        position: relative;
        display: block;
        padding: 11px 35px;
        line-height: 18px;
        border-bottom: 1px solid #e6e6f0;
    }
    .simpleFormItem img, .moodPremium img{
        border-radius: 50%;
        height: 45px;
        width: 45px;
        margin: 5px 5px 5px 0;
    }
    .simpleFormMood{
        border-bottom: 1px solid #e6e6f0;
        margin: 10px 0 15px;
        padding: 0 0 10px 0;
    }
    .premiumMood{
        background-color: #4080D8;
        border-radius: 2px;
        color: white;
        float: left;
        font-size: 9px;
        letter-spacing: 2px;
        margin: 0 0 5px 0;
        padding: 4px 5px 3px;
        text-indent: 2px;
    }
    .moodPremium{
        height: 45px;
        width: 45px;
        margin: 4px 3px 0 0;
        padding: 2px;
    }
    .moodPremium:first-of-type img{
        clear: left;
    }
    .mood img{
        height: 33px;
        width: 33px;
        margin: 3px 7px 0 0;
    }
    .mood img.active{
        background-color: #f2f2f9;
    }
    .moodColor{
        border-radius: 50%;
        display: inline-block;
        height: 40px;
        width: 40px;
        margin: 10px 10px 5px 0;
    }
    .moodColor.active{
        background: white !important;
    }
    .premiumMood:before{
        content: '\f017';
    }
    .submitButton{
        background-color: #ee4c22;
        color: white;
        font-weight: bold;
        width: 140px;
        border-radius: 4px;
        padding: 9px 10px;
        margin: 5px;
    }
    .submitButton.inverse{
        background-color: #d5d5dd;
        color: black;
    }
    .simpleFormConfirmation{
        padding: 10px;
        border-top: solid 8px #e6e6f0;
    }
    .simpleFormInfo{
        color: #4A4A50;
        font-size: 12px;
        line-height: 16px;
        padding: 12px;
    }
    .listItemCheckbox{
        float: right;
        border-radius: 4px;
        background-color: transparent;
        border: 1px solid #cdcdd9;
        width: 20px;
        height: 20px;
    }
    .listItemCheckbox.active{
        background-color: #ee4c22;
        border: 1px solid #ee4c22;
    }
</style>
<script>
    $(document).ready(function(){
        $(".simpleFormVerification").click(function(){
            if ($(this).find('.listItemCheckbox').hasClass("active")){
                $(this).find('.listItemCheckbox').removeClass("active");
                $(this).find('.listItemCheckbox').attr('value', "0");
            }else{
                $(this).find('.listItemCheckbox').addClass("active");
                $(this).find('.listItemCheckbox').attr('value', "1");
            }
        })
        $(".mood").click(function(){
            $(".mood").find("img").removeClass("active");
            $(this).find("img").addClass("active");
        })
        $(".moodColor").click(function(){
            $(".moodColor").removeClass("active");
            $(this).addClass("active");
        })
    })
</script>
    <main class="main-content">
            <div class="main-column">
                <section>
                    <header>
                        <div class="friend3">
                            <nav class="tabBar">
                                <a class="icon active" href="#!">Profile</a>
                                <a class="icon" href="#!">Notification</a>
                                <a class="icon" href="#!">Social</a>
                                <a class="icon" href="#!">Account</a>
                            </nav>
                        </div>
                    </header>
                    <?php foreach ($user as $u) :  ?>

                    <script>
                            $(document).ready(function(){
                                var mood = ".mood.<?php echo $u['mood'] ?>";
                                $(".mood").find("img").removeClass("active");
                                $(mood).find("img").addClass("active");

                                var color = ".moodColor#<?php echo $u['color'] ?>";
                                $(".moodColor").removeClass("active");
                                $(color).addClass("active");

                                var gender = "#<?php echo $u['gender'] ?>";
                                $('.genderTable option').removeAttr('selected');
                                $(gender).attr('selected', "selected");
                                
                                if ($('.listItemCheckbox').hasClass("active")){
                                    $(this).attr('value', "1");
                                }else{
                                    $(this).attr('value', "0");
                                }
                            })
                    </script>

                    <form action="" method="post">
                        <div class="simpleFormFirst">
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Full name</h3>
                                <div class="simpleFormPadding">
                                    <input maxlength="30" name="name" class="simpleForm" type="text" value="<?php echo $u['name']; ?>">
                                </div>
                            </div>
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Location</h3>
                                <div class="simpleFormPadding">
                                    <input maxlength="30" name="location" class="simpleForm" type="text" value="<?php echo $u['location']; ?>">
                                </div>
                            </div>                        
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Bio</h3>
                                <div class="simpleFormPadding">
                                    <textarea maxlength="300" name="bio" class="simpleForm"><?php echo $u['bio']; ?></textarea>
                                </div>
                                <div class="simpleFormHint">A little information about yourself</div>
                            </div>    
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Web</h3>
                                <div class="simpleFormPadding">
                                    <textarea maxlength="300" name="web" class="simpleForm"><?php echo $u['web']; ?></textarea>
                                </div>
                            </div>  
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Add interest</h3>
                                <div class="simpleFormPadding">
                                    <input maxlength="30" name="interest" class="simpleForm" type="text" value="<?php echo $u['interest']; ?>">
                                </div>
                                <div class="simpleFormHint">Don’t post personal info in interests such as your home address or phone number</div>
                            </div>
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Username</h3>
                                <div class="simpleFormPadding">
                                    <input maxlength="30" name="username" class="simpleForm" type="text" readonly value="<?php echo $u['username'] ?>">
                                </div>
                                <div class="simpleFormHint">Username cannot be changed</div>
                            </div>
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">E-mail</h3>
                                <div class="simpleFormPadding">
                                    <input maxlength="30" name="e-mail" class="simpleForm" type="email" readonly value="<?php echo $u['e-mail'] ?>">
                                </div>
                                <a href="#!">Change email<br></a>
                                <a href="#!">Resend confirmation email</a>
                            </div>
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Birthday</h3>
                                <table class="simpleFormTable">
                                    <tr>
                                        <td class="leftTable">
                                            <select>
                                                <option value="day" selected="selected">Day</option>
                                                <?php 
                                                    for($i=1; $i<=31; $i++)
                                                    {
                                                        echo "<option value=".$i.">".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                        <td class="midleTable">
                                            <select>
                                                <option value="month" selected="selected">Month</option>
                                                <option value="month">January</option>
                                                <option value="month">February</option>
                                                <option value="month">March</option>
                                                <option value="month">April</option>
                                                <option value="month">May</option>
                                                <option value="month">June</option>
                                                <option value="month">July</option>
                                                <option value="month">August</option>
                                                <option value="month">September</option>
                                                <option value="month">October</option>
                                                <option value="month">November</option>
                                                <option value="month">December</option>
                                            </select>
                                        </td>
                                        <td class="rightTable">
                                            <select>
                                                <option value="year" selected="selected">year</option>
                                                <?php 
                                                    for($i=2014; $i>=1919; $i--)
                                                    {
                                                        echo "<option value=".$i.">".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <div class="simpleFormHint">Your age will not be visible to other users</div>
                            </div>
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">Gender</h3>
                                <table class="simpleFormTable">
                                    <tr>
                                        <td class="genderTable">
                                            <select>
                                                <option id="L" value="male" selected="selected">Male</option>
                                                <option id="P" value="female" selected="selected">Female</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="simpleFormSecond">
                            <a class="simpleFormVerification" href="#!">
                                Allow anonymous questions
                                <div name="anon_quest" class="listItemCheckbox <?php if($u['anon_quest'] == '1'){echo 'active';} ?>" value="<?php echo $u['anon_quest']?>" ></div>
                            </a>
                            <a class="simpleFormVerification" href="#!">
                                Allow Shoutout questions
                                <div name="shout_quest" class="listItemCheckbox <?php if($u['shout_quest'] == '1'){echo 'active';} ?>" value="<?php echo $u['shout_quest']?>"></div>
                            </a>
                            <a class="simpleFormVerification" href="#!">
                                Allow other users to share my posts
                                <div name="other_share_post" class="listItemCheckbox <?php if($u['other_share_post'] == '1'){echo 'active';} ?>" value="<?php echo $u['other_share_post']?>"></div>
                            </a>
                            <a class="simpleFormVerification" href="#!">
                                Allow others to subscribe to my activities
                                <div name="other_sub_act" class="listItemCheckbox <?php if($u['other_sub_act'] == '1'){echo 'active';} ?>" value="<?php echo $u['other_sub_act']?>"></div>
                            </a>
                            <a class="simpleFormVerification" href="#!">
                                Allow showing my answers on Discover feed
                                <div name="show_ans_feed" class="listItemCheckbox <?php if($u['show_ans_feed'] == '1'){echo 'active';} ?>" value="<?php echo $u['show_ans_feed']?>"></div>
                            </a>
                            <a class="simpleFormVerification" href="#!">
                                Show status
                                <div name="show_stat" class="listItemCheckbox <?php if($u['show_stat'] == '1'){echo 'active';} ?>" value="<?php echo $u['show_stat']?>"></div>
                            </a>
                        </div>
                        <div class="simpleFormThird">
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">photo</h3>
                                <img src="<?php echo  $u['photo'] ?>">
                                <a href="#!">Change photo</a>
                            </div>
                            <div class="simpleFormItem">
                                <h3 class="simpleFormLabel">photo</h3>
                                <img src="<?php echo  $u['background'] ?>">
                                <a href="#!">Change photo</a>
                            </div>                        
                        </div>
                        <div class="simpleFormSection"> 
                            <h3 class="simpleFormLabel">Set my mood</h3>
                            <div class="simpleFormMood">                             
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/137egg_big-97209e28c08e5679f46ff1b0a6184d7cac97052e9bf62cdc3839c8abcc3fdce3.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/138egg_big-fed66bf2c2037716898a64ba481ba7af8dd91e02634071c152ad5f6fe968a73a.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/139egg_big-35dabb95f6707a618c01f92e77fc01525019034d66605bdc794afafbaa523636.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/140egg_big-95f885dea1f0e418a051ccdb126ded297e9815e19c9a05f0df7bdf5a68b56f54.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/141egg_big-1b46dcc0137aeec4d2ac63dfa64104c9590171686639242c23a7ccce2b060251.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/142egg_big-eb18153df71e72d9bc534911843515e217d20d9b00d80ea16b31f343264fb49e.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/143egg_big-4887b09376a00c2e4c14c78e82f639f272423c39aa7f03ce6343630d60f1ea15.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/144egg_big-889695c0fa68a7a1617441a6ef938c64b003b3a6da5eed609b8badba257acbe6.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/144egg_big-889695c0fa68a7a1617441a6ef938c64b003b3a6da5eed609b8badba257acbe6.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/146egg_big-a09852e57c525fa858d0f53ed22e27517ee32014ddf407de8aa778f8c3e5f202.gif">
                                </a>
                            </div>
                            <div class="simpleFormMood">

                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/189_big-778bf5eb4b3cd015d29eacd01045b06a588739383e96f38866647f5e6b48ab50.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/190_big-0ac2f8fd8b0ed92c639a978ea17cf7c0bef209df6c059aa1f8c0f1ea2fdfcd47.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/191_big-04446c691ef66411ac507bd309d1ac808a2fdee4881183afdabd7b254846d5fd.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/192_big-5b476b28a19e57bb164472e2c23fe781fd5fea16eac4c7a394e007407b69ccf4.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/193_big-8d33cb33eeadce3039d3e4fc368683030f0530fcefaf3983ddce60531dac63e8.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/194_big-62f380f7da47d33ebc92f10883f61eae57d7c0352bc533c4785cb4eb5c5cf423.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/196_big-eb915f1261e61e69db498d2aeedf56ed666dd5fadb6d615ff33c6605d311e2cb.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/195_big-045e16d24bb4d17e5bcaa43959d359ac27ce4279c852ded2a8bb24bcc9a14f0b.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/197_big-3780cfe0b0670aaa448c9fbd27658c0a32727c2c6fd9d8108da41854b55396ac.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/198_big-ba1fb5d4e52d0f8f369df914776c2ff68b5fa5e7019e5b4d3116771aaa2183f7.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/74_big-744a673042197c1d55a7e7a4eb3de5774595c95d50b43c9551408c6cba23396b.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/75_big-4fcf2cb0d38fef2b548fe3a7f62c847d3c24c53cc965a0b8eb60a32d8ba6a298.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/76_big-ef79b254a6e2b0dac7ad06bc747eb299e84302042a6e46dd423574350b4e1666.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/77_big-69078b31d98ee5b5ca77463d34dcabfc9e530fdffcf7796b15e1acc9bde9ad3a.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/78_big-43cd4ed2115589d98daaeb4df8841b3e974dcd33c812d6aa144f9aa6f075aa58.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/79_big-51ccb17bcec5af2fed2554ef84df85697b0cee389744f7ec551fa9e47c97d186.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/80_big-cdd98e22d2cb639050ea5a97f1a8ef23a630b89c1137511c8105552e939d31cc.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/81_big-0d3da6e2c5866f1fe526508dcc94a7fccccef71557bafa38935e83d28a74d71f.gif">
                                </a>
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/82_big-1468ea96fe9c3b8e001d547ad541b942c56492b0bc9c760f10904f2b1ebeef84.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/83_big-3a4acb64463a0c9949c4334af397d7bf3f714c1fd883c7bca17ea322532ac6a9.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/132_big-c76931db8646242fa874c83917359ea49ccb42e89fb1db00014fd6dd1721b773.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/133_big-f8365a2030b055b213a47929ec054fa77f8e45d3763bb1da40ff3254a888154b.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/134_big-e41f23816900fa464387b64c10d53157531ec6f115f7b7df5fca037eb5644f36.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/135_big-3245eefce70b998b0e5d38c8a8d574bf132b307d0c76babef88cd830a9f8f2f9.gif">
                                </a>                            
                                <a class="moodPremium" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/136_big-8f1da846521178bf32f3700fd641039fddfce0497682ef30d3b895b5cb197063.gif">
                                </a>                            
                            </div>
                            <div class="simpleFormMood">
                                <a class="mood 1" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/0-7f2f0231c4a2f88205fd2150c43e9fc5efb72f11bc18b2b011c389bd35d03fe8.png">
                                </a>
                                <a class="mood 2" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/65-b95bec5c3e474bc5d979055096a61098576712dc0ed0b9c76b61c656c86b2fc1.png">
                                </a>
                                <a class="mood 3" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/66-a56eccf3b893318d4641a510e7d87f3cf89071189ee14d43d66d3ec416716e26.png">
                                </a>
                                <a class="mood 4" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/67-b99927fccad7afd223af61cf4a0c18734dc25eff5a879ae1d093f7190c145a52.png">
                                </a>
                                <a class="mood 5" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/68-3cef7637ac618a70c88fcf5a028fadb4f97f459a51376192fd07eeb8a46f5de7.png">
                                </a>
                                <a class="mood 6" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/69-1540062343372ee779c87331d67aabc3e15408f343b6b9422874923e2c145dcf.png">
                                </a>
                                <a class="mood 7" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/70-dfe5c8587983de9449e58ecd84d87f214d1ef965007e8a2c196b6af2445d2035.png">
                                </a>
                                <a class="mood 8" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/71-c3b0444f22eab85c8c40941310a126a9e00302035f8a17f90de3cab1b6f091ee.png">
                                </a>
                                <a class="mood 9" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/72-c4d553b91bdf00e43ac36cac25e5678ad906584d59f2e6e7e96ae50db1f52bb6.png">
                                </a>
                                <a class="mood 10" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/73-5103428239514b44d8ff12d107ad541d1be10daf5fbd7fa262698e0d8822a4b1.png">
                                </a>
                                <a class="mood 11" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/50-4bb1d6cd69978830048cc993bcbc01e6ed3357695ddc4598393080c9594a88f0.png">
                                </a>
                                <a class="mood 12" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/51-f15f0e879004ebece9c0c70894a5d6d28062fcd0db3ea15b6ffcf9a22237c537.png">
                                </a>
                                <a class="mood 13" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/52-48594fde9471deea3c32264dcc960b2cba5f897d109563eea8e4f660c24eada4.png">
                                </a>
                                <a class="mood 14" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/53-5e3b397ce7ce44578b49810b373adb6795495238206896e6efd73744bd96121c.png">
                                </a>
                                <a class="mood 15" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/54-fb6578156ae10f78834a1c88dfb5f8f3cbfa03984f31d3fd5bfb2cb9e1f8db71.png">
                                </a>
                                <a class="mood 16" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/26-8d9b5499b1b4d0dcad6469837a2294916e42c1daae7193841d0e600064a7439f.png">
                                </a>
                                <a class="mood 17" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/25-479375b521c821b801863794ed5692c9f31a7045e347ecbf3dc1ee6da82bad2c.png">
                                </a>
                                <a class="mood 18" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/27-32a286c634044a27e8d4fb236fd5e2c0a592d667f828156ac1604cc2e36df891.png">
                                </a>
                                <a class="mood 19" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/29-9a020e47cb26c80b8acefd065ff0d6e6075ec1e25bb24bff69260b20c643912d.png">
                                </a>
                                <a class="mood 20" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/28-226ae4f5aab9d7a1a26d637ed2a30cdd413ebf8e78195dcb58e307fe4d8196db.png">
                                </a>
                                <a class="mood 21" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/1-b3def0c0433088e9d546d39cf0307f87a93d5016464bb4c61d01c8a1e28d73a0.png">
                                </a>
                                <a class="mood 22" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/2-161c412885026081781b3caaabf54155fce23b8e036285e5779011f71ebbfbbc.png">
                                </a>
                                <a class="mood 23" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/3-330ea70000ea56ee5dfc713fe7d371561ca599c89a066f5db2c54f09dff71be2.png">
                                </a>
                                <a class="mood 24" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/4-07be39ca061017f183e6436d167c900c0a54218fe359b26533121220d6b8adb4.png">
                                </a>
                                <a class="mood 25" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/5-ad110424a81a1e23a96798ba6acad11df38ebf942a334e366f6fa59f7d9d99d0.png">
                                </a>
                                <a class="mood 26" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/6-2d7fcb0963e45fb7bd54398481f5e740b141d202b6b4c85e3fc985f82668393b.png">
                                </a>
                                <a class="mood 27" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/7-7ed6411fba3e7a943ddea383b3b1700bd24c93445db09e0a607d98ffa6eea191.png">
                                </a>
                                <a class="mood 28" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/8-4a1ae97017143faf2813e16f76d87ebad7922e9f9ca52b14605866aad5e64aae.png">
                                </a>
                                <a class="mood 29" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/9-4ddbee07b4440623cfe17c1c464d396ce48f177e98a83e8fa9b0a04a20dc120f.png">
                                </a>
                                <a class="mood 30" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/10-81a16b058b02ddef0e838921ef70bc841528889404b9372d7749cd103a1e91b5.png">
                                </a>
                                <a class="mood 31" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/11-f453a7e65aa4129a47d53ddf6327c0bec2dbc60e909f89c3a4c03cd9b3792fa9.png">
                                </a>
                                <a class="mood 32" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/12-b6ce664151adbe05cd1d75783fd2fd2f3d11fba78f7b6b62e26307499d768f4b.png">
                                </a>
                                <a class="mood 33" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/13-5d99611946773bb8f5f83cf7800a6cec52da3e4c2414a47143dddd6dd6231f75.png">
                                </a>
                                <a class="mood 34" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/14-f6326c6ca273ee698d4cf48e95d2e713fc789fa9c4dfc982be00b35d545d35dc.png">
                                </a>
                                <a class="mood 35" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/15-b764170b8291e371dcdf1b4c1758e92fb24d09427c13d0730a2dab9c23bea15c.png">
                                </a>
                                <a class="mood 36" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/16-20b62449e377d36e77006c60fb378a78458f842b3c8bfec52ecfc3725a2fb668.png">
                                </a>
                                <a class="mood 37" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/17-4c200fda5d29a70ec82f81832e632a6af68ee85e592f6e932b7f7e3c78f68411.png">
                                </a>
                                <a class="mood 38" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/18-75965c37cd28973a733630e9fbb49c9100d6501829222b101f540407bac83e3a.png">
                                </a>
                                <a class="mood 39" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/19-d97316045e2379b5f729f46728ece09ec5835af372b408b354b5107a9a3bc653.png">
                                </a>
                                <a class="mood 40" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/20-08552b8a26ca9191e9fd3831a2e21156312307958ce0ca31501d719d9f86c214.png">
                                </a>
                                <a class="mood 41" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/21-30bc7b2e9564d2bcc301c64e01aa85c42ad62ae472f2876310e9d069433a75ef.png">
                                </a>
                                <a class="mood 42" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/22-282e8ddb04cd67ccf1c64660483fd7c3d2e9cabd7fa50763677590082311f2f5.png">
                                </a>
                                <a class="mood 43" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/23-cc39b3b9ce54eba46c24762a6c3c41fa7a071b7a2ac49743b4e49a89f43b28c6.png">
                                </a>
                                <a class="mood 44" href="#!">
                                    <img src="https://d1muxuiltlupn6.cloudfront.net/assets/moods/24-9444b6edde1ca76ec42308c44ba8659459454d18c8ae6047d4595fde2961de53.png">
                                </a>
                            </div>
                            <div class="simpleFormMood">
                                <a id="1" class="moodColor active" style="background: #ee4c22; border: 2px solid #ee4c22" href="#!"></a>
                                <a id="2" class="moodColor" style="background: #C6304A; border: 2px solid #C6304A" href="#!"></a>
                                <a id="3" class="moodColor" style="background: #4A4A50; border: 2px solid #4A4A50" href="#!"></a>
                                <a id="4" class="moodColor" style="background: #bd4381; border: 2px solid #bd4381" href="#!"></a>
                                <a id="5" class="moodColor" style="background: #A0306F; border: 2px solid #A0306F" href="#!"></a>
                                <a id="6" class="moodColor" style="background: #642F42; border: 2px solid #642F42" href="#!"></a>
                                <a id="7" class="moodColor" style="background: #9b6d98; border: 2px solid #9b6d98" href="#!"></a>
                                <a id="8" class="moodColor" style="background: #784589; border: 2px solid #784589" href="#!"></a>
                                <a id="9" class="moodColor" style="background: #553655; border: 2px solid #553655" href="#!"></a>
                                <a id="10" class="moodColor" style="background: #4080D8; border: 2px solid #4080D8" href="#!"></a>
                                <a id="11" class="moodColor" style="background: #2D5592; border: 2px solid #2D5592" href="#!"></a>
                                <a id="12" class="moodColor" style="background: #292959; border: 2px solid #292959" href="#!"></a>
                                <a id="13" class="moodColor" style="background: #00aab8; border: 2px solid #00aab8" href="#!"></a>
                                <a id="14" class="moodColor" style="background: #24A3AE; border: 2px solid #24A3AE" href="#!"></a>
                                <a id="15" class="moodColor" style="background: #116055; border: 2px solid #116055" href="#!"></a>
                                <a id="16" class="moodColor" style="background: #8aaf33; border: 2px solid #8aaf33" href="#!"></a>
                                <a id="17" class="moodColor" style="background: #2F7F47; border: 2px solid #2F7F47" href="#!"></a>
                                <a id="18" class="moodColor" style="background: #1e6032; border: 2px solid #1e6032" href="#!"></a>                    
                            </div>                                                               
                        </div>
                        <div class="simpleFormConfirmation">
                            <button type="submit" class="btn submitButton">Save</button>
                            <button type="submit" class="btn submitButton inverse">Cancel</button>
                        </div>
                        <div class="simpleFormInfo">
                            Information you provide (other than your password) may be shared with affiliates, third-party search engines, and other third parties as explained in our
                            <a href="#!" style="color:'#ee4c22'">Privacy policy</a>
                            . If you do not want us to share your information, please do not provide it.
                        </div>
                        <?php endforeach ?>
                    </form>
                </section>
            </div>