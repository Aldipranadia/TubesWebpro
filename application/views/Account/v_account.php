<style>
    .background{
        width: 100%;
        min-height: 400px;
        max-height: 400px;
        overflow: hidden;
        background-color: #ee4c22;
        position: fixed;
        z-index: -10;
    }
    .background img{
        width: 100%;
        min-height: 400px;
        object-fit: cover;
    }
    .gradient{
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: 2;
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.4) 30%, #2b3237);
    }
    .main-content{
        padding-top: 0;
        margin-bottom: 20px;
    }
    .main-column{
        background-color: #0000003d;
        padding: 0;
    }
    .profilBox{
        margin-bottom: 30px;
        padding: 65px 0 15px;
        overflow: auto;
    }
    .profilBox img{
        float: left;
        margin: 5px;
        margin-right: 40px;
        margin-bottom: 40px;
        box-shadow: 0px 0px 0px 5px rgba(255,255,255,0.2);
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
    .profilBoxName{
        display: inline-block;
        text-align: center;
        max-width: 100%;
        position: relative;
    }
    .account{
        max-width: 820px;
        padding-top: 49px;
        margin: 0 auto;
    }
    .username{
        padding-top: 5px;
        color: white;
        font-size: 12px;
        line-height: 30px;
        text-align: left;
    }
    .user{
        color: white;
        font-size: 30px;
        line-height: 1.2;
        text-align: center;
    }
    .main-column h3{
        margin: 15px;
        display: inline-block;
        font-weight: bold;
        font-size: 16px;
        color: white;        
    }
    .question{
        background: white;
        border: 1px solid #e6e6f0;
        padding: 10px;
        position: relative;
        margin: 0px 15px;
        border-radius: 4px;
    }
    .question textarea{
        max-height: 80px;
        min-height: 20px;
        line-height: 20px;
        height: 20px;
        border: none;
        color: black;
        width: 100%;
        outline: 0;
        resize: vertical;
    }
    .option{
        overflow: auto;
        padding: 12px 15px;
    }
    .optionBar .btn{
        background-color: #FF643C;
        float: right;
        margin: 0 0 0 18px;
        line-height: normal;
        padding-bottom: 8px;
        padding-top: 8px;
        width: 100px;
        height: 38px;
    }
    .counter{
        background: none;
        text-align: right;
        font-size: 12px;
        color: rgba(255,255,255,0.3);
        margin: 0 0 0 8px;
        line-height: 38px;
        display: inline-block;
        float: right;
    }
    .tabBar{
        display: table;
        table-layout: fixed;
        box-sizing: border-box;
        width: 100%;
        border-radius: 7px;
        margin-bottom: 20px;
        background-color: transparent;
        border: solid 1px #fff;
        overflow: hidden;
    }
    .tabBar a{
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        font-weight: bold;
        font-size: 12px;
        line-height: 22px;
        padding: 4px 3px 3px;
        color: #fff;
    }
    .tabBar .active{
        color: #4A4A50;
        background-color: white;
    }
    .emptyResult{
        border-radius: 7px;
        background: white;
        padding: 30px 15px;
        text-align: center;
        word-wrap: break-word;
    }
    .emptyResult p{
        font-size: 14px;
        color: #4A4A50;
        margin: 0;
    }
    .shareButton a{
        display: inline-block;
        margin: 10px 5px 0 5px;
        min-width: 28%;
        box-sizing: border-box;
        border-radius: 4px;
        padding: 9px 10px;
        height: 35px;
    }
    .how{
        display: block;
        margin-top: 10px;
        color: #ee4c22;
    }
    .profilSide{
        float: right;
        order: 2;
        width: 300px;
    }
    .profilStat{
        display: table;
        table-layout: fixed;
        padding: 0 10px 0;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 30px;
        list-style: none;
    }
    .profilStat li{
        display: table-cell;
        text-align: center;
        padding: 5px 0;
        border-right: 2px solid rgba(0,0,0,0.1);
    }
    .profilStatIcon{
        margin: 0 auto 10px;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background: #00aab8;
    }
    .profilStatNumber{
        font-weight: bold;
        font-size: 19px;
        color: #fff;
        margin-top: 2px;
        line-height: 23px;
    }
    .profilStatLabel{
        font-weight: bold;
        font-size: 12px;
        color: rgba(255,255,255,0.5);
    }
    .profilBioItem{
        margin: 10px 0;
        position: relative;
        color: white;
    }
    .profileSection h3{
        font-weight: bold;
        font-size: 16px;
        margin: 0 0 15px;
        overflow: hidden;
        color: #fff;
    }
    .profileSection h3 a{
        color: #FF643C;
        float: right;
        font-weight: normal;
        margin: 2px 0 0 2px;
        font-size: 12px;
    }
</style>
<?php foreach ($user as $u) :  ?>
<div class="background">
    <img src="<?php echo  $u['background'] ?>">
    <div class="gradient"></div>
</div>
<main class="account">
    
    <section>
        <div class="profilBox">
            <img src="<?php echo  $u['photo'] ?>" alt="">
            <div class="profilBoxName" >
                <span class="username">@<?php echo $u['username'] ?></span>
                <br><span class="user"> <?php echo  $u['name'] ?> </span>
            </div>
        </div>
    </section>
    <div style="width: 500px; display: inline-block;">
        <div class="main-content">
            <div class="main-column">
                <section>
                    <h3>Ask Yourself</h3>
                    <form action="">
                        <div class="question" >
                            <textarea name="" id="" placeholder="what, when, why...ask" data-limit="300"></textarea>
                        </div>
                        <div class="option" >
                            <div class="optionBar">
                                <button class="btn"></button>
                                <div class="counter">300</div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <section>
            <header>
                <nav class="tabBar">
                    <a class="active" href="#!">Lastest</a>
                    <a href="#!">Top</a>
                </nav>
            </header>
            <div class="emptyResult">
                <p>You haven’t answered any questions yet</p>
                <p style="font-weight: bold;">Share your profile to get questions!</p>
                <div class="shareButton">
                    <a style="background: #3a589a" ref="www.facebook.com"></a>
                    <a style="background: #1da1f2" ref="www.twitter.com"></a>
                    <a style="background: #4e6e8e" ref="www.VK.com"></a>
                </div>
                <a class="how" href="#!">
                    How do I get more questions?
                </a>
            </div>
        </section>
    </div>
    <div class="profilSide">
        <ul class="profilStat">
            <li>
                <div class="profilStatIcon"></div>
                <div class="profilStatNumber">0</div>
                <div class="profilStatLabel">Post</div>
            </li>
            <li>
                <div class="profilStatIcon" style="background-color: #ee4c22;"></div>
                <div class="profilStatNumber">0</div>
                <div class="profilStatLabel">Post</div>
            </li>
            <li>
                <div class="profilStatIcon" style="background-color: #784589;"></div>
                <div class="profilStatNumber">0</div>
                <div class="profilStatLabel">Post</div>
            </li>
        </ul>     
        <section class="profileSection">
            <h3>
                About me
                <a href="#!">Edit profile</a>
            </h3>
            <div class="profilBIO">
                <div class="profilBioItem">nama : <?php echo  $u['name'] ?></div>
                <div class="profilBioItem">location : <?php echo  $u['location'] ?></div>
                <div class="profilBioItem">
                    link : <a href="#!"><?php echo  $u['web'] ?></a> 
                </div>
                <div class="profilBioItem">
                    interest : <a href="#!"> <?php echo  $u['interest'] ?></a> 
                </div>
            </div>
        </section>
    </div>
    <?php endforeach ?>