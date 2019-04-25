<style>
    .btn_FF{
    box-sizing: border-box;
    border-radius: 4px;
    background: #ee4c22;
    color: #fff;
    font-weight: bold;
    padding: 12px 35px;
    margin-right: 15px;
    margin-top:10px;
    float: right;
}
body{
    background: #2b3237;
}

.friend3{
    padding-bottom: 15px;
}

.btn_FF:hover{
    color: white;
    background-color: rgb(160, 42, 0);
    cursor:pointer;
    text-decoration:none;
}

.main-column{
    float: left;
    background-color: white;
    width: 500px;
    border-radius: 7px;
    margin-left:20px;
    padding: 20px 0px;
    margin-top:100px;
    margin-left:300px;
}
.side-column{
    float: right;
    order: 2;
    width: 300px;
    margin-top:100px;
}
footer .siteLinks a{
    display: block;
    width: 140px;
    float: left;
    line-height: 28px;
    text-align: left;
    color: rgba(255,255,255,0.5);
}

footer .siteLink{
    line-height: 20px;
    padding: 15px 10px 0;
    text-align: center;
    overflow: hidden;
}
.social-links a{
    color: #fff;
    border-radius: 50%;
    display: inline-block;
    font-size: 15px;
    height: 30px;
    line-height: 30px;
    margin: 12px 8px;
    width: 30px;
    vertical-align: middle;
    background: rgba(0,0,0,0.3);
    text-align: center;
}
.languageBox{
    border-bottom: 1px solid rgba(255,255,255,0.15);
    padding: 0 10px;
    color: rgba(255,255,255,0.5);
}
.copyright{
    padding: 10px;
    color: #b2b2bb;
}
.main-content{
    padding-top: 70px;  
    display: block;
    max-width: 820px;
    margin: 0 auto;
    overflow: hidden;
}

h4 {
    display: inline-block;
    padding-top: 7px;
    padding-left: 20px;
    font-weight:bold;
    font-size:19px;
}

.streamPanel {
    overflow: hidden;
    padding: 15px;
    font-size: 12px;
    background-color: #f2f2f9;
    text-align: left;
    color: #b2b2bb;
}
h6{
    padding: 10px 10px;
    color: #b2b2bb;
}

.pageTitle{
    color: #4A4A50;
    font-weight: bold;
    font-size: 15px;
    padding-left:10px;
    text-align: left;
}
.txtar{
    font-size: 16px;
    line-height: 22px;
    min-height: 155px;
    background: transparent;
    border: round;
    color: #2b3237;
    display: block;
    outline: 0;
    width: 95%;
    margin-right: 10px;
}

</style>
<?php foreach ($ask as $a) : ?>
<div class="main-column">
            <section>
                <div class="pageTitle answer">
                     <form method="post" action="<?php echo base_url(). 'c_answer/tambahAns'; ?>">
                        <?php echo $a['question'] ?>
                        <input type="text" name="ans" class="txtar"></br>
                        <button type="submit" class="btn_FF fas fa-play" style="cursor:pointer"></button>
                    </form>
                </div>
            </section>
</div>
<?php endforeach?>