<style>
    * {
  box-sizing: border-box;
  margin: 0;
  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
  text-decoration: none;}
  a{
    color:black;
  }
  body{
position:relative;
background-color:#001F3F;
  }
body::before{
  content:"";
  width:100%;
  height:100%;
  /* background-image:url('./img/bg<?=$_SESSION['month']?>.png'); */
  background-image:url('./img/walkman.gif');
  /* 動畫取自https://cn.phoneky.com/gif-animations/?id=s2s205275 */
  background-size:contain;
  background-position: right center;
  background-repeat: no-repeat;
  opacity: 0.1;
  position:absolute;
  top:0;
  left:0;
}
  .myright {
position:relative;
  padding: 2vw;
  display: flex;
  flex-direction: column;
  align-items: center;
        color: #333333;
}
.myleft {
  position:relative;
        color: #ffffff;
        text-align:center;
}

.myw-30{
  width:30%;
}
.myfs-1vh{
font-size: 2vh;
}
.myfs-vh3 {
  font-size: 3vh;
}
.myfs-vh4 {
  font-size: 4vh;
}
.myfs-vh5 {
  font-size: 5vh;
}
.myfs-vh8 {
  font-size: 8vh;
}
.myfs-vh3 {
  font-size: 3vh;
}

.myleft input:nth-child(1) {
  background-color: rgba(196, 196, 196, 0.5);
  border: 1px solid white;
}
.myleft select {
  width: 40%;
  height: 4vh;
  font-size: 1vw;
  background-color: rgba(196, 196, 196, 0.5);
  border: 1px solid white;
}
.myLheader-col-2 button {
  font-size: 2vh;
}
.myLheader-col-4 input[type='text']{
  font-size:2vh;
  height:4vh;
}
.myLheader-col-4 select{
  font-size:2vh;
}
.myLheader-col-4 button{
  width:10vh;
font-size:2vh;
border:0;
}
.myLheader-col-4 button i{
color:#888;
}
.myLheader-col-4 button i:hover{
color:#fff;
}
.myevery{
  font-size:1vw;
  display: inline-block;
  width: 5vw;
  border-radius: 50%;
  line-height: 5vw;
  -webkit-backdrop-filter: blur(80px);
  backdrop-filter: blur(80px);
}
.myday:hover {
background-color: rgb(255,204,203);
filter:drop-shadow(2px 2px 0px #FFCCCB);
  color: #333;
  transition-duration: 0.3s;
}
.mynotedD{
  color:white;
  background-color: rgb(195, 41, 41);
  text-shadow:5px 5px 2px rgba(0, 0, 0, 0.66);
}

.mytoday-c1 {
  box-shadow: inset 0 0 50px rgb(0, 31, 63);
  background-color:white;
  color: white;
}
.mytext-c1 {
  color: #ffcccb;
}
.mytext-c2{
  color:rgb(253,248,244);
}
.mytext-c3{
  color:#333333;
}
.mybg-c0 {
  background-color: rgb(32, 166, 178);
}
.mybg-c1 {
  background-color: lightgoldenrodyellow;
}
.mybg-c2{
  background-color: rgb(44,67,111);
}
.mybg-c3 {
  background-color: rgba(215, 214, 214, 0.2);
  box-shadow:inset 10px -10px 10px rgb(169, 169, 169);
}
.mybg-c4{
  background-color:transparent;
  backdrop-filter: blur(5px);
  color: rgb(44,67,111);
  border-radius:10px;
}
.mybg-c5{
  background-color:rgb(44,67,111);
}
.mybg-c4:hover{
background-color:#ffcccb;
}
.mybtn-bgc1{
  background-color: rgb(44,67,111);
}
.containerNote {
  position: relative;
  width: 80%;
  border-radius: 30px;
  padding: 4vh;
  border:1px solid rgb(44,67,111);;
}
/* 加入記事end */

</style>