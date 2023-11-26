<style>
* {
    margin: 0;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    font-family: 'Mansalva', sans-serif;
    text-decoration: none;
}

a {
    color: black;
}

.myright {
    position: relative;
    padding: 2vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #333333;
    background-color:#f6efef;
    background-image:linear-gradient(90deg,#f0e2e1 25%, #F7EBEC 25%, transparent 30%);

}
.mynote-header {
    font-family: 'Cabin Sketch', sans-serif;
    font-size:1.5rem;
}

.mycard{
    background-color:#f0e2e1;
    font-family: 'Cabin Sketch', sans-serif;
    box-shadow: 0 0 2px #D9D2D2;
}
.mycard-date{
    font-family:'Cabin Sketch', sans-serif;
}
.mycardDel{
    background-color:#4fc4cf !important;
}
.myright-footer{
    width:100%;
    height:50%;
    position:absolute;
    right:0;
    bottom:0;
    background-image:url(./img/bg-right.png);
    background-repeat: no-repeat;
    background-size:20%;
    background-position:right bottom;
    background-attachment: fixed;
}

.myleft {
    position: relative;
    color: #333;
    text-align: center;
    background-color:#F0E2E1;
    background-image:url(./img/bg-left.png);
    background-size:50vh;
    background-repeat: no-repeat;
    background-position:left bottom;
    /* box-shadow:inset -30px 0px 20px #D9D2D2; */
}
.myselect-btn{
    font-family: 'Cabin Sketch', sans-serif;
    font-size:2rem;
}
.myLeft-month{
    font-weight:bolder;
    font-family: 'Cabin Sketch', sans-serif;
    font-size:4rem;
}
.myLeft-year{
    font-weight:bolder;
    font-size:1.5rem;
}
.mycalendar{
    border-radius: 50px;
    margin-bottom:30px;
    
}
.mycalendar-week{
    background-color:#4FC4CF;
    font-family: 'Cabin Sketch', sans-serif;
    font-size:1rem;
    color:rgb(240,226,225);    
}
.mycalendar span{
    font-size:1rem;
    font-family: 'Sniglet', sans-serif;
    
}
.myw-A {
    width: auto !important;
}

.myfs-1vh {
    font-size: 2vh;
}

.myfs-vh3 {
    font-size: 3vh;
}


.myfs-vh5 {
    font-size: 5vh;
}

.myfs-vh3 {
    font-size: 3vh;
}

.myLheader-col-2 button {
    font-size: 2vh;
}
.my-select select{
    border:0;
    box-sizing:border-box;
}



.myevery {
    font-size: 1vw;
    display: inline-block;
    width: 5vw;
    border-radius: 50%;
    line-height: 5vw;
    -webkit-backdrop-filter: blur(80px);
    backdrop-filter: blur(80px);
}

.myday:hover {
    background-color:#4fc4cf;
    box-shadow:50px 50px 50px transparent !important;
    color: #333 !important;
    transition-duration: 0.3s;
}

.mynotedD {
    color: white;
    background-color: rgb(195, 41, 41);
    text-shadow: 5px 5px 2px rgba(0, 0, 0, 0.66);
}

.mytoday-c1 {
    border:1px solid #4fc4cf;
    /* background-color: white; */
    color: #4fc4cf;
    /* text-shadow:5px 5px 2px #4fc4cf; */
}

.mytext-c1 {
    color: #fec7d7;
}

.mytext-c2 {
    color: rgb(253, 248, 244);
}

.mytext-c3 {
    color: #333333;
}

.mybg-c0 {
    background-color: rgb(32, 166, 178);
}

.mybg-c1 {
    background-color: lightgoldenrodyellow;
}

.mybg-c2 {
    background-color: rgb(44, 67, 111);
}

.mybg-c3 {
    background-color: rgba(215, 214, 214, 0.2);
    box-shadow: inset 10px -10px 10px rgb(169, 169, 169);
}

.mybg-c4 {
    background-color: transparent;
    backdrop-filter: blur(5px);
    color: rgb(44, 67, 111);
    border-radius: 10px;
}

.my-btn {
    background-color: #4fc4cf;
}


.containerNote {
    position: relative;
    width: 100%;
    padding: 4vh;
    background:#04315A;
    margin:10px auto;
    color:#F0E2E1;
}


/* 加入記事end */
</style>