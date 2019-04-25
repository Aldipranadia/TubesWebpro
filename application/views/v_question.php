<style>
    .btn_FF{
    box-sizing: border-box;
    border-radius: 4px;
    background: #ee4c22;
    color: #fff;
    font-weight: bold;
    padding: 9px 10px;
    margin-right: 15px;
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
    padding: 20px 0px;
}

.side-column{
    float: right;
    order: 2;
    width: 300px;
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

.shtout {
    float:right;
    height:25px;
    width:45px;
}

.icn {
    float:right;
    padding:0px 20px;
    
}

.streamItem_header {
    display:inline-block;
    width:100%; 
}

h2 {
    font-weight: bold;
    font-size:20px;
    display: inline;
    margin-right: 5px;
    padding: 0px 20px;
}

.btn_ans {
    border-radius: 18px;
    font-weight: bold;
    color: #ee4c22;
    padding:8px 5px;
    border: none;
    float:right;
    margin-right:15px;
}

.btn_ans:hover {
    border-radius: 18px;
    font-weight: bold;
    color: #fff;
    padding: 8px 5px;
    background-color: #ee4c22;
    text-decoration:none;
    cursor:pointer;
    margin-right:15px;
}

</style> 
<?php foreach ($ask as $a) : ?>   
    <main class="main-content">
            <div class="main-column">
            <section>
                <header>
                    <div class="friend3">
                        <div><a onclick="myFunction()" class="btn_FF fas fa-arrow-down"> Get a random question</a></div>
                        <script>
                            function myFunction() {
                                document.getElementById("demo").innerHTML = "<h2><?php echo $a['question'] ?></h2>";
                            }
                        </script>                        
                        <h4>Question</h4>
                        <div class="streamPanel">
                            <a href="#" style="color: #b2b2bb; cursor:pointer;" class="fas fa-trash-alt"> Delete all question</a>
                            <div href="#" style="float:right; cursor:pointer;"><a style="color: black;">Shoutouts</a><img class="shtout" src="assets/img/shotout.png"></div>
                        </div>
                        <h6>Questions you’ve been asked will not be visible to other users on your profile until you choose to answer them</h6>
                    </div>
                </header>
                <article class="ask">
                    <header class="streamItem_header">
                    <div>
                    <p id="demo"></p>
                   
                        <div>
                        <div href="<?= base_url(); ?>c_question/hapus/<?= $a['id_ask'] ?>" style="cursor:pointer;"class="icn fas fa-trash-alt"></div></div>
                        <a href="<?= base_url(); ?>c_answer" class="btn_ans">Answer ></a>
                    </header>
                    
            </section>
            </div>
            <?php endforeach?>