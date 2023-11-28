<style>
* {
    font-family: 'Cabin Sketch', sans-serif;
    font-size: 1.5rem;
    text-shadow: 0px 0px 5px #333;

}

body {
    position: relative;
    background-color: #F7EBEC;
    background-size: 150px;
    color: #333;
    background-image: url(./img/bg-index.png);
    background-position: right bottom;
    background-repeat: repeat-x;
    background-attachment: fixed;

}

.mybtn {
    background-color: #F0E2E1;
}

@keyframes jumpRight {
    0% {
        transform: translate(0vw, 0vh);
    }

    12% {
        transform: translate(12vw, -200%);
    }

    25% {
        transform: translate(25vw, 0vh);
    }

    37% {
        transform: translate(37vw, -200%);
    }

    50% {
        transform: translate(50vw, 0vh);
    }

    62% {
        transform: translate(62vw, -200%);
    }

    75% {
        transform: translate(75vw, 0vh);
    }

    87% {
        transform: translate(87vw, -200%);
    }

    100% {
        transform: translate(100vw, 0vh);
    }
}

.forg {
    height: 2.5vh;
    position: absolute;
    bottom: 0;
    left: 0;

}

.forg img {
    width: 100px;
    animation: jumpRight 5s ease-in-out infinite;
}
</style>

<body>
    <div class="container min-vh-100">
        <div class="row mt-2">
            <button type="button" class="col-12 col-sm m-1 py-2 btn mybtn"><a class="text-dark"
                    href="./calendar.php?your_choice=1"><i class="fa-regular fa-hand-scissors fa-xl"></i></a></button>
            <button type="button" class="col-12 col-sm m-1 py-2 btn mybtn"><a class="text-dark"
                    href="./calendar.php?your_choice=2"><i class="fa-regular fa-hand-back-fist fa-xl"></i></a></button>
            <button type="button" class="col-12 col-sm m-1 py-2 btn mybtn"><a class="text-dark"
                    href="./calendar.php?your_choice=3"><i class="fa-regular fa-hand fa-xl"></i></a></button>
        </div>
        <div class="row text-center my-1 my-sm-5">
            <div class="col-4 text-light">
                <h2>You play</h1>
                    <?= $_SESSION['your_choice']; ?>
            </div>
            <h1 class="col-4">VS</h1>
            <div class="col-4 text-light">
                <h2>Opponent plays</h1>
                    <?= $_SESSION['computer']; ?>
            </div>
            <div class="row m-auto flex-column my-sm-3 my-1">
                <h1 class=""><?= $_SESSION['result']; ?></h1>
                <h1 class="">won&nbsp;<?= $_SESSION['win'] ?>/<?= $_SESSION['n'] ?>&nbsp;times</h1>
            </div>


        </div>
        <div class="forg">
            <img class="element-to-animate" src="./img/bg-jump-1.png" alt="">
        </div>
    </div>