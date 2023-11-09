<style>
    * {
  box-sizing: border-box;
  margin: 0;
  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
  text-decoration: none;}
.myleft {
  background-color: rgb(32, 166, 178);
  text-align: center;
  padding-bottom: 5vh;
  box-shadow: inset -2.5vw 0px 1.8vw rgb(79, 79, 79);
  position: relative;
  background-attachment:fixed;
}
.myleft::before {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-image: url("./img/bg<?=$month?>.jpg");
  background-attachment:fixed;
  opacity: 0.1;
  box-shadow: inset -2.5vw 0px 1.8vw rgb(79, 79, 79);
  pointer-events:none;
}
.myfs-vh4 {
  font-size: 4vh;
}
.myfs-vh8 {
  font-size: 8vh;
}
.myfs-vh3 {
  font-size: 3vh;
}
.myleft form option{
  text-align:center;
}
.myleft input:nth-child(1) {
  width: 20%;
  height: 4vh;
  font-size: 1vw;
  background-color: rgba(196, 196, 196, 0.5);
  border: 0;
}
.myleft select {
  width: 40%;
  height: 4vh;
  font-size: 1vw;
  background-color: rgba(196, 196, 196, 0.5);
}
.myLheader-col-2 button {
  background-color: rgba(196, 196, 196, 0.5);
  /* border: 0; */
  font-size: 1vw;
  padding: 0.5vw 1vw;
}
.myLheader-col-4 button{
font-size:1vw;
border:0;
}
.myLheader-col-4 button:hover{
box-shadow:0 0 5px #fff;
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
  -webkit-backdrop-filter: blur(80px);
  backdrop-filter: blur(80px);
}
.myday:hover {
  background-color: transparent;
  background-image: radial-gradient(
    rgba(215, 214, 214, 0.358) 30%,
    transparent 50%,
    rgb(0, 0, 0) 80%
  );
  color: lightgoldenrodyellow;
  transition-duration: 0.5s;
  cursor: cell;
}

.mytoday-c1 {
  box-shadow: inset 0 0 30px rgb(0, 0, 0);
  color: white;
}
.mytext-c1 {
  color: lightgoldenrodyellow;
}
.mybg-c0 {
  background-color: rgb(32, 166, 178);
}
.mybg-c1 {
  background-color: lightgoldenrodyellow;
}
.mybg-c3 {
  background-color: rgba(215, 214, 214, 0.358);
}
/* 加入記事 */
.myright {
  background-image:url("./img/bg<?=$_GET['month']?>.jpg");
  background-size:15%;
  padding: 2vw;
  background-repeat: repeat;
  background-size: 10%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
  box-shadow: inset 6vw 0 5.5vw rgb(0, 0, 0);
}
.myright > p {
  font-size: 1vw;
  color: white;
  text-decoration: overline;
}
.containerNote {
  position: relative;
  width: 80%;
  height: 60%;
  backdrop-filter: blur(5px);
  padding: 1vw 2vw;
  border: 1px solid black;
  color: white;
}
.notes_header{
  position:relative;
 border-radius: 20px;
  width:80%;
  padding:2vw;
  box-shadow:inset 0 0 30px rgb(0, 0, 0);
}
.notes_header::before{
  content:"";
  position:absolute;
  width:110%;
  height:110%;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  box-shadow:0 0 20px rgb(0, 0, 0);
}
.notes_header h2{
  position:relative;
color:lightgoldenrodyellow;
}
.notes_header input[type="text"],
.notes_header input[type="submit"] {
  position:relative;
  border-radius: 10px;
  margin-top:1vw;
  width: 50%;
  height: 3vw;
  /* background-color: rgba(107, 107, 107, 0.612); */
  background-color:transparent;
  border: 1px solid lightgoldenrodyellow;
}
.notes_header input[type="submit"] {
  width: 15%;
  box-shadow: inset 0 0 10px rgb(80, 80, 80);
}
.notes_header input[type="submit"]:hover {
  box-shadow: inset 0 0 0px white;
  cursor: pointer;
}

/* 加入記事end */

</style>