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
    background-color: #f8f8f8;
        color: #333333;
  }
  .myright {
  /* background-image:url("./img/bg<?=$_GET['month']?>.jpg"); */
  /* background-color:#f9e3c0; */
  /* background-size:15%; */
  padding: 2vw;
  /* background-repeat: repeat; */
  /* background-size: 10%; */
  border-radius: 10vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #b4cccb;
        color: #333333;
        box-shadow:inset 50px 0px 60px rgba(0, 0, 0, 0.5);
}
.myleft {
  background-color: #d8b4a2; /* 主題2背景色，淺橙色 */
        color: #ffffff;;
        border-radius: 10vh;
        box-shadow:inset -50px 0px 60px rgba(0, 0, 0, 0.5);
        position:relative;
        text-align:center;
  /* background-color: rgb(32, 166, 178);
  background-color:#c4d8e2;
  text-align: center;
  padding-bottom: 5vh;
  box-shadow: inset -2.5vw 0 1.8vw rgb(79, 79, 79);
  position: relative;
  background-attachment:fixed; */
}
/* .myleft::before {
  content: "";
  border-radius: 10vh;
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-image: url("./img/bg<?=$month?>.jpg");
  background-attachment:fixed;
  background-size: 10%;
  opacity: 1;
  box-shadow:inset 50px 50px 60px rgba(0, 0, 0, 0.5);
  pointer-events:none;
} */
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
  background-color: rgba(196, 196, 196, 0.8);
  border: 3px solid #b17e5e;
}
.myleft select {
  width: 40%;
  height: 4vh;
  font-size: 1vw;
  background-color: #b17e5e;
  border: 1px solid #b17e5e;
}
.myLheader-col-2 button {
  /* background-color: rgba(196, 196, 196, 0.5); */
  /* border: 0; */
  font-size: 2vh;
}
.myLheader-col-4 input[type='text']{
  font-size:2vh;
}
.myLheader-col-4 select{
  font-size:2vh;
}
.myLheader-col-4 button{
  width:10vh;
font-size:2vh;
border:0;
}
.myLheader-col-4 button:hover{
box-shadow:inset 0 0 5px #fff;
background-color:transparent;
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
  box-shadow: 5px 5px black;
  -webkit-backdrop-filter: blur(80px);
  backdrop-filter: blur(80px);
}
.myday{
  color:rgb(119,123,108);
}
.myday:hover {
  background-image: radial-gradient(
    rgb(253,248,244),
    rgb(255, 255, 255)
  );
  color: black;
  transition-duration: 0.3s;
}
.mynotedD{
  color:white;
  background-color: rgb(195, 41, 41);
  text-shadow:5px 5px 2px rgba(0, 0, 0, 0.66);
}

.mytoday-c1 {
  box-shadow: inset 0 0 30px rgb(0, 0, 0);
  color: white;
}
.mytext-c1 {
  color: #7e8f7c;
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
  /* background-color: #e8dbcf; */
  background-color:transparent;
  color: #333333;
  border-radius:10px;
}
.containerNote {
  position: relative;
  width: 80%;
  /* backdrop-filter: blur(5px); */
  border-radius: 30px;
  padding: 4vh;
  border:1px solid black;
}
.myhover-1:hover{
  background-color:black;
  color:antiquewhite;
  box-shadow:inset 0 0 10px #B47157;
}
/* 加入記事end */

</style>