<?php
    $postController = new \App\Controller\PostController();
    $sliderController = new \App\Controller\SliderController();
    $brandController = new \App\Controller\BrandController();
    $helper = new \App\Helper\Helper();

    $category = "";
    $ative = "";
?>
<!-- --------------------------------- CAROUSEL TOPO ---------------------------- -->
<div class="slide container" style="margin-top: 8.4em;">
    <!--banner rotativos -->
    <?php
    $listaS = $sliderController->allStatus(1);
    if($listaS == null):
        echo "Não existem posts no momento";
    else:
    ?>
    <div class="wrapper">
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <?php
                        foreach ($listaS as $slider):
                    ?>
                    <li>
                        <?php
                            if($slider != null):
                        ?>
                            <a href="<?= $slider->link; ?>" target="_blank">
                                <img src="./upload/<?= $slider->thumb; ?>" alt="<?= $slider->title; ?>" />
                            </a>
                            <a href="#" class="box-text-banner">
                                <div class="header-banner">
                                    <h1 class="title-slider"></h1>
                                </div>
                            </a>
                        <?php
                            else:
                                ?>
                        <a href="#" target="_blank">
                            <img src="./upload/<?= $slider->thumb; ?>" alt="<?= $slider->title; ?>" />
                        </a>
                        <a href="#" class="box-text-banner">
                            <div class="header-banner">
                                <h1 class="title-slider"></h1>
                            </div>
                        </a>
                        <?php
                            endif;
                        ?>

                    </li>
                        <?php
                            endforeach;
                    ?>
                </ul>
            </div>
            <div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
            </div>
        </div>
    </div>
    <!--banner rotativos -->
    <div class="clear"></div>
    <div class="border-bottom-carousel">
        <span class="bd-cl-one"></span>
        <span class="bd-cl-two"></span>
        <span class="bd-cl-three"></span>
    </div>
    <?php
        endif;
    ?>
</div>
<!--END CAROUSEL TOP-->

<main class="main-content container">
    <!--SECTION ABOUT-->
    <section class="sec-about container" id="sobre">
        <h1 class="font-zero"></h1>
        <div id="">
            <article class="art-about ">
                <div class="full-about content">
                    <div class="bx-desc-about">
                        <div class="desc-about">
                            <h2>QUEM NÓS <span>SOMOS</span>
                                <!--<br/>CERTA PARA SEU <span>VEÍCULO</span>-->
                            </h2>
                            <p>
                                As Obras Sociais O Consolador foi fundada em setembro de 2005 com o objetivo de
                                promover
                                socialmente a comunidade do Sol Nascente/Ceilância.
                            </p>
                            <a href="<?= HOME;?>/sobre">
                                Saiba mais!
                            </a>
                        </div>
                    </div>
                    <div class="bx-desc-about">
                        <div class="right-about">
                            <div class="box-donation">
                                <div class="icon-donation">
                                    <div class="lenght-icon">
                                        <img
                                            src="data:image/svg+xml;base64,
                                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00Ny4wNTQsMzAyaC0zMmMtOC4yOTEsMC0xNSw2LjcwOS0xNSwxNXYxODBjMCw4LjI5MSw2LjcwOSwxNSwxNSwxNWgzMmMyNC44MTQsMCw0NS0yMC4xODYsNDUtNDVWMzQ3ICAgIEM5Mi4wNTQsMzIyLjE4Niw3MS44NjksMzAyLDQ3LjA1NCwzMDJ6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MDcuNTU0LDMzMS4wOTljLTEuOC0yLjk5OS00LjE5OS01LjQtNi44OTktNy41Yy0xMS4wNDUtOS42NjItMjkuNjU0LTguNzQ5LTQwLjQ5OSwzLjAwMWwtNjguMTAxLDc4LjZsLTIuMSwyLjM5OSAgICBjLTguMzk5LDkuMy0yMC40LDE0LjQwMS0zMi45OTksMTQuNDAxaC0xMTYuNGMtOC40MDEsMC0xNS02LjYwMS0xNS0xNWMwLTguNDAxLDYuNTk5LTE1LDE1LTE1aDkxLjVjMTYuNSwwLDMwLTEzLjUsMzAtMzB2LTAuMyAgICBjLTAuMy0xNi41LTEzLjUtMjkuNy0zMC0yOS43aC01NC4zYy04Ljk5NiwwLTE4LjYzNi0zLjMwMy0yNi40LTkuOTAxYy0zNi41OTktMzIuMS05MC0zNC4yLTEyOS4zLTYuODk5djE4NC40OTkgICAgYzI5LjcsOC4xMDEsNjAuMywxMi4zMDEsOTEuMTk5LDEyLjMwMWgxMzMuODAxYzMyLjk5OSwwLDY0LjItMTUuNjAxLDg0LTQyLjAwMWw3Mi4wMDEtOTYgICAgQzUxMy41NiwzNjAuMjEsNTE0LjM1MiwzNDEuMyw1MDcuNTU0LDMzMS4wOTl6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MDIuMjY0LDI4Ljk5NUMzODUuNjI3LDEwLjI5NywzNjIuNTY0LDAsMzM3LjMyNCwwYy0yOC4xNzIsMC01Mi41OTMsMTMuMzIxLTcwLjYyMiwzOC41MjIgICAgYy0xLjM1MiwxLjg4OS0yLjYxNywzLjc3OS0zLjgwMiw1LjY0OWMtMS4xODQtMS44NzEtMi40NDktMy43Ni0zLjgwMS01LjY0OUMyNDEuMDcsMTMuMzIxLDIxNi42NDksMCwxODguNDc3LDAgICAgYy0yNS4yNCwwLTQ4LjMwMywxMC4yOTctNjQuOTM5LDI4Ljk5NEMxMDcuNzUsNDYuNzM4LDk5LjA1NCw3MC40NTksOTkuMDU0LDk1Ljc4OGMwLDI3LjUyNSwxMC42ODEsNTIuOTI0LDMzLjYxMSw3OS45MzQgICAgYzIwLjAwOSwyMy41NjUsNDguNzA4LDQ3Ljc4OCw4MS45MzgsNzUuODM2YzEyLjI4LDEwLjM2NSwyNC45NzksMjEuMDgzLDM4LjQ3MywzMi43NzhjMi44MTksMi40NDMsNi4zMjEsMy42NjUsOS44MjQsMy42NjUgICAgYzMuNTAyLDAsNy4wMDUtMS4yMjIsOS44MjQtMy42NjVjMTMuNDkyLTExLjY5MywyNi4xODktMjIuNDEsMzguNDY5LTMyLjc3M2MyMS4zNDItMTguMDE0LDM5Ljc3My0zMy41Nyw1NS43NjctNDguNjYgICAgYzMxLjA1My0yOS4yOTgsNTkuNzg3LTYyLjU1Myw1OS43ODctMTA3LjExNEM0MjYuNzQ3LDcwLjQ2LDQxOC4wNTIsNDYuNzM5LDQwMi4yNjQsMjguOTk1eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                                    </div>
                                </div>
                                <div class="description-donation">
                                    <h2>DONATIVOS</h2>
                                    <p>
                                        Doações mensais de voluntários cadastrados como colaboradores.
                                    </p>
                                </div>

                                <div class="next-choose">
                                    <div class="choose">
                                        <a href="">Doar Agora</a>
                                    </div>
                                </div>

                            </div>
                            <div class="box-donation">
                                <div class="icon-donation">
                                    <div class="lenght-icon">
                                        <img
                                            src="data:image/svg+xml;base64,
                                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxjaXJjbGUgY3g9Ijg1Ljk3MSIgY3k9Ijg2LjE2NyIgcj0iMzYuMzY5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPGNpcmNsZSBjeD0iMzA5Ljc3IiBjeT0iODYuMTY3IiByPSIzNi4zNjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzk0LjM3OCw0MzMuNzA3bC0zNC4yNDYtOTAuODQ2bC0zLjY5OC01Ny45NDJjMC01LjI2NiwwLTEyMC4yNDMsMC0xMjUuNTE4YzAtMTIuNTc3LTguODAzLTI0LjU2OC0yMy41ODItMjQuNTY4aC0zOS4wNiAgICBjLTEyLjM1LDAtMjIuNTA2LDEwLjkyMi0yMi41MDYsMjQuNTY4djQyLjg4NGw3LjQ3MS0wLjYzMWwzMy4yOTYtMzUuMjA5bC0yNi43NzcsNDguNzQ2bC02MC40ODYsNS4xMDYgICAgYy05LjY0NCwwLjgxNC0xNi44MjcsOS4yODgtMTYuMDEsMTguOTYyYzAuODE2LDkuNjcsOS4zMiwxNi44MjcsMTguOTYyLDE2LjAxbDY5Ljg2Mi01Ljg5NyAgICBjNS44NTYtMC40OTUsMTEuMDc1LTMuODg2LDEzLjkwNS05LjAzN2wyOS41NjktNTMuODNjLTE3LjUwMSw2Mi44MjMtMTYuMTU2LDU4LjU3My0xNy4yNjYsNjAuNTkxICAgIGMtNS4xMDcsOS4yOTMtMTQuNDYzLDE1LjM3NC0yNS4wMjgsMTYuMjY2Yy0xLjQ2NywwLjEyMy0yNi45MzksMi4yNzQtMjguMjc1LDIuMzg2bC0xMS4xMzQsNzguNjQyICAgIGMtMC4xMzksMC45NzgtMC4yMDgsMS45NjQtMC4yMDgsMi45NTF2OTMuNzk1YzAsMTEuNjMsOS40MjgsMjEuMDU4LDIxLjA1OCwyMS4wNThzMjEuMDU4LTkuNDI4LDIxLjA1OC0yMS4wNTh2LTkyLjMxMiAgICBjMS4wOTYtNy43NDMsOC4wMS01Ni41NzYsOC45NzItNjMuMzcyaDQuMDgxYzAuMDAxLDEuNTU0LTAuMzg3LTUuMDA5LDMuOTY3LDYzLjIyOWMwLjEzMywyLjA4NCwwLjU3NCw0LjEzNCwxLjMxMSw2LjA4NyAgICBsMzUuMzU5LDkzLjc5NWM0LjEwNiwxMC44ODksMTYuMjU4LDE2LjM3NywyNy4xMzMsMTIuMjc2QzM5Mi45ODQsNDU2LjczNywzOTguNDgxLDQ0NC41ODksMzk0LjM3OCw0MzMuNzA3eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZCMjI5IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8Y2lyY2xlIGN4PSI0NTguMTIxIiBjeT0iODYuMTY3IiByPSIzNi4zNjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTExLjgwNCw0MzguMjg2bC0xMS43MjgtODUuNzk3YzUuMDk1LTcxLjg3Myw0LjY3NS02NS40NzcsNC42NzctNjcuMDM0aDAuMDNWMTU5LjQwMSAgICBjMC0xMi41NzctOC44MDMtMjQuNTY4LTIzLjU4Mi0yNC41NjhoLTM5LjA2Yy0xMi4zNTYsMC0yMi41MDcsMTAuOTI5LTIyLjUwNywyNC41Njh2NzkuMDQ5bDE4LjU0MS0xMy4yMTJsMTAuNjk3LTQ3LjI2NCAgICBsMS44MTMsNTUuNTg4bC00OS40MzUsMzUuMjI1Yy03Ljg5Miw1LjYyNC05LjczMywxNi41NzktNC4xMDgsMjQuNDc0YzUuNTU3LDcuODAxLDE2LjUwNiw5Ljc4NSwyNC40NzQsNC4xMDhsNTcuMDk4LTQwLjY4NSAgICBjNC45MzQtMy41MTcsNy41MzktOS4xOTksNy4zNTYtMTQuODYzbC0yLjAwMi02MS4zODRsMTUuNTU2LDU3LjczMWMxLjc3Miw2LjU3NS0wLjQzNiwyMS4xNjQtMTIuNzY1LDI5Ljk0OWwtMjQuMzMsMTcuMzM2aDAuMDc2ICAgIGwtNC42OTUsNjYuMjM0Yy0wLjEwMywxLjQ0OC0wLjA1NiwyLjkwMywwLjE0Miw0LjM0MWwxMi4wMjMsODcuOTYxYzEuNTc1LDExLjUyNSwxMi4xOTUsMTkuNTg4LDIzLjcxNiwxOC4wMTIgICAgQzUwNS4zMTQsNDYwLjQyNyw1MTMuMzc5LDQ0OS44MDksNTExLjgwNCw0MzguMjg2eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZCMjI5IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDI5Ljc2NCwzMDguODAzYy01LjA5NywzLjYzMi0xMS4yMDksNS43NDUtMTcuODMsNS44NDdsLTQuMjExLDI5Ljc0MmMtMC4xMzksMC45NzgtMC4yMDgsMS45NjQtMC4yMDgsMi45NTEgICAgYzAsMTAuMjQsMCw4My42NDIsMCw5My43OTVjMCwxMS40NTQsOS4zMTQsMjEuMDU4LDIxLjA1OCwyMS4wNThjMTEuNjMsMCwyMS4wNTgtOS40MjgsMjEuMDU4LTIxLjA1OHYtOTIuMzExbDguNTMxLTYwLjI2ICAgIEw0MjkuNzY0LDMwOC44MDN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMTcuMTc2LDE5MS4wOWgtNzcuNzY0YzAuMDk3LDEwLjM3LDQuMzI4LDIwLjI3OSwxMS44MTUsMjcuNTQzbC00MC43NjEtMy40NGwtMjYuNzc3LTQ4Ljc0N2wzMy4yOTYsMzUuMjA5bDcuNDcxLDAuNjMxICAgIHYtNDIuODg0YzAtMTMuNjgyLTEwLjE4OS0yNC41NjgtMjIuNTA2LTI0LjU2OEg2Mi44ODhjLTE0LjczNiwwLTIzLjU4MiwxMS45NjEtMjMuNTgyLDI0LjU2OGMwLDUuMjg3LDAsMTIwLjI3MiwwLDEyNS41MTUgICAgbC0zLjY5OCw1Ny45NDVMMS4zNTksNDMzLjcxMWMtNC4xMDMsMTAuODgyLDEuMzk0LDIzLjAzLDEyLjI3NiwyNy4xMzNjMTAuODgxLDQuMTAxLDIzLjAzLTEuMzkzLDI3LjEzMy0xMi4yNzZsMzUuMzU5LTkzLjc5NSAgICBjMC43MzYtMS45NTMsMS4xNzgtNC4wMDMsMS4zMTEtNi4wODdjNC4zMTEtNjcuNTU5LDMuOTY2LTYxLjY1MywzLjk2Ny02My4yM2g0LjA4MWMwLjk2Myw2LjgwMSw3Ljg3NSw1NS42MzEsOC45NzIsNjMuMzcydjkyLjMxMSAgICBjMCwxMS42Myw5LjQyOCwyMS4wNTgsMjEuMDU4LDIxLjA1OGMxMS42MywwLDIxLjA1OC05LjQyOCwyMS4wNTgtMjEuMDU4di05My43OTVjMC0wLjk4OC0wLjA3LTEuOTc0LTAuMjA4LTIuOTUxbC0xMS4xMzMtNzguNjQyICAgIGMtMS4zMjUtMC4xMTEtMjYuNzk4LTIuMjYyLTI4LjI3Ni0yLjM4NmMtMTAuNTY2LTAuODkyLTE5LjkyMi02Ljk3My0yNS4wMjgtMTYuMjY2Yy0xLjExOS0yLjAzNSwwLjE5NiwyLjA5My0xNy4yNjYtNjAuNTkxICAgIGwyOS41NjksNTMuODNjMi44Myw1LjE1MSw4LjA0OSw4LjU0MywxMy45MDUsOS4wMzdsNjkuODYyLDUuODk3YzkuNjc2LDAuODE5LDE4LjE0OS02LjM2OSwxOC45NjItMTYuMDEgICAgYzAuMzA3LTMuNjQ1LTAuNTIxLTcuMTUzLTIuMjU3LTEwLjE4MkMyMDMuMDE3LDIyNi4wMzgsMjE2Ljk5NywyMTAuMjEsMjE3LjE3NiwxOTEuMDl6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" />
                                    </div>
                                </div>
                                <div class="description-donation">
                                    <h2>VOLUNTÁRIOS</h2>
                                    <p>
                                        Seu tempo e seu talento doados para o Consolador, saiba mais.
                                    </p>
                                </div>

                                <div class="next-choose">
                                    <div class="choose">
                                        <a href="">Voluntariar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-donation">
                                <div class="icon-donation">
                                    <div class="lenght-icon">
                                        <img
                                            src="data:image/svg+xml;base64,
                                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDU2MC40ODkgNTYwLjQ4OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTYwLjQ4OSA1NjAuNDg5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGc+Cgk8Zz4KCQk8Y2lyY2xlIGN4PSIxMDAuMjEyIiBjeT0iMTMxLjMyNSIgcj0iMjguMTcxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCQk8Y2lyY2xlIGN4PSI0Mi4yNTMiIGN5PSIxNjYuODkzIiByPSIxNS40NjIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJCTxwYXRoIGQ9Ik0zODMuMTI4LDMxNy40NGMwLTIxLjgxMi01LjIyNi01Ni4zNDctNDMuNDcxLTYzLjQ2NmMtNy41ODMtMS43NDUtMTQuMDE5LTEuNDYzLTE2Ljk2NC0xLjIxNCAgICBjLTAuODMyLDAuMDcxLTEuNDk3LDAuODM2LTEuNDk3LDEuNjczdjI0Ljg1M2MwLDAuODM2LTAuNjUsMS4zMzQtMS40NjgsMS4xNDNjLTEuNjMtMC4zNjgtMy4xMTItMC41NjktNC44MS0wLjU2OSAgICBjLTEyLjAzNCwwLTIxLjc3NCw5LjYzOS0yMS43NzQsMjEuNjY4YzAsMy4yOTksMC43NTEsNi40MjYsMi4wNjIsOS4xNTZjMC4zNTgsMC43NSwwLjAzMywxLjMzNC0wLjgwNCwxLjMzNGgtOTUuNDgxICAgIGMtMC44MzcsMC0xLjc3NC0wLjYyMi0yLjA5OS0xLjM5MmwtMTMuMDg2LTM0Ljk5OWMzLjQzMy0wLjUyMSw2LjY2Ni0yLjM0OCw4Ljg1LTUuMzk0YzQuMjg5LTUuOTg2LDIuOTE3LTE0LjMxNS0zLjA2OS0xOC42MDggICAgbC02LjYwMy00LjczM2MtMC41NTUtMC41ODMtMS4xNjctMS4xMjgtMS44NS0xLjYxMWwtMzEuMzc1LTIyLjE2MWwtMjEuNTYzLTQzLjkzYy0yLjE5NS00LjcwOS02Ljc3NS03LjQ4Mi0xMS42MzMtNy42NzQgICAgYy0wLjEwNS0wLjAxOS0wLjIyOS0wLjA3Mi0wLjMxNS0wLjA3Mkg3NC44ODFjLTMuMjc1LDAtNS44MTQsMi42NzctNS42MzIsNS45NDhsLTEuMzUzLDI2LjIyNSAgICBjLTIuMzA1LTEwLjQ2MS0xMS42MTktMTguMjk4LTIyLjc3My0xOC4yOThjLTkuNzQ1LDAtMTguMDgzLDUuOTc3LTIxLjU3OCwxNC40NThsLTIuMjYxLTMxLjgzOCAgICBjLTAuMzItNC40ODUtNC4yNDEtNy44NTEtOC42OTItNy41NGMtNC40ODUsMC4zMi03Ljg2LDQuMjEyLTcuNTQsOC42OTdsMy43OTIsNTMuMzQ0YzAuMjA2LDQuMDA3LDMuNDY2LDMzLjQ0NSw1My4yMDEsMzcuNzI0ICAgIGwtNDEuMzcyLDc4Ljc5NWMtMS41MjUsMi45MDItMC4wODYsNS4yNzMsMy4xODksNS4yNzNoMjYuODEzdjI0LjczOEwyLjUxMiw0MzYuMTExYy00LjMxMiw2LjAxNS0yLjkzNiwxNC4zOTIsMy4wODQsMTguNzA5ICAgIGMyLjM2NywxLjY5Nyw1LjA5NywyLjUxLDcuNzk4LDIuNTFjNC4xNzQsMCw4LjI5MS0xLjk0MSwxMC45MDYtNS41OTRsNTAuNjQ4LTcwLjYzNGMxLjYzLTIuMjc1LDIuNTEtNS4wMTEsMi41MS03LjgxMnYtMjkuMDQ2ICAgIGg2LjU2bDMzLjgyMiwxMDMuODM0YzEuODQ2LDUuNjYxLDcuMDk1LDkuMjU3LDEyLjc0Nyw5LjI1N2MxLjM3NywwLDIuNzc4LTAuMjEsNC4xNTUtMC42NjVjNy4wNDItMi4yOSwxMC44ODctOS44NTgsOC41OTctMTYuODk2ICAgIGwtMzEuMTE2LTk1LjUyOWgyMC44NTFjMy4yNzUsMCw0Ljk0OS0yLjQ4MSwzLjcxLTUuNTE4bC0zMi44NTctODAuNTg4Yy0xLjIzOC0zLjAzNi0xLjEyOC03Ljk1NiwwLjI0NC0xMC45M2wxMy4yNjgtMjguODI2ICAgIGw5LjQ0OCwxOS4zMTJjMC45OSwyLjEyMywyLjUxNSwzLjk0OSw0LjQzMiw1LjI5OGwyMy42NjcsMTYuNzE1bDEzLjgwNCw5Ljg5M2M1LjM5MywxNC40MiwxOC45NzcsNDkuOTIxLDE4Ljk3Nyw0OS45MjEgICAgYzAuMzgzLDAuNzQxLDAuNTQxLDIuMDEzLDAuNTA3LDIuODQ1Yy0wLjE4Nyw1LjEzNSwyLjk2OSwxMy4zMyw0LjI4OSwxNi41MTVjNS43NzYsMTYuODkyLDE3Ljk0NCwzNy4xNTksNDAuNjk4LDQ5Ljg0NCAgICBjLTAuMDE0LDAuMDQzLTAuMDEsMC4wOTEtMC4wMjksMC4xMzRsLTIuNjQ5LDYuMTM1Yy0wLjEzOSwwLjMyLTAuNDAxLDAuNjA3LTAuNzA4LDAuODQ3ICAgIGMtMTEuODU3LDAuMTQzLTIxLjQyOSw5Ljc5Mi0yMS40MjksMjEuNjg4YzAsMTEuOTg2LDkuNzE1LDIxLjcwMiwyMS43MDIsMjEuNzAyYzExLjk4NywwLDIxLjcwMi05LjcxNiwyMS43MDItMjEuNzAyICAgIGMwLTQuOTc4LTEuNjkyLTkuNTQ4LTQuNTEzLTEzLjIxMWMwLjAyOC0wLjE5NiwwLjAwNS0wLjQxNiwwLjA3Ni0wLjU4M2wzLjExMy03LjI0OGMwLjA1Ny0wLjEzNSwwLjE0OC0wLjIzOSwwLjIzOS0wLjM1ICAgIGM5Ljg4NywzLjA0NiwyMS4xOTUsNC44NDQsMzQuMTgxLDQuODQ0YzE2LjIzNywwLDI5LjkzMS0yLjU3Miw0MS40ODYtNi44MjNsMy45MzYsOS4xNjFjMC4yODIsMC42NiwwLjE5MSwxLjU3OC0wLjA4MSwyLjMgICAgYy0yLjI1MiwzLjQxOS0zLjU3Miw3LjUxMi0zLjU3MiwxMS45MWMwLDExLjk4Niw5LjcxNiwyMS43MDIsMjEuNzAyLDIxLjcwMnMyMS43MDItOS43MTYsMjEuNzAyLTIxLjcwMiAgICBjMC05LjIwNC01LjczNy0xNy4wNS0xMy44MjctMjAuMjA2Yy0yLjU0OS0xLjE1Mi01LjM2NC0xLjgwNy04LjM0NC0xLjgwN2MtMC4wNTIsMC0wLjExNCwwLTAuMTY3LDAuMDA1ICAgIGMtMC4wOTYsMC0wLjQzNi0wLjYxNy0wLjc2NS0xLjM4N2wtMy41NjItOC4zMDFDMzczLjkwNSwzNjYuNjM1LDM4My4xMjgsMzM0LjAyNiwzODMuMTI4LDMxNy40NHoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCQk8cGF0aCBkPSJNNTUwLjIxNCw0MDQuOTk0YzkuOTExLDAsMTEuNDctNC45ODYsOS41NzYtOS4yMTNjLTAuNDg3LTEuMDktMzQuNjY0LTc2LjU0OC0zNS4yMzItNzcuNzMzICAgIGMtMC41Ni0xLjE2Ny0xLjU4My00LjI4NC03LjI4Ny00LjI4NGMtMy42NjcsMC02Ljc0MSwyLjI4LTcuNjM2LDUuNjM3Yy0wLjI0MywwLjkwOC0xLjAxNCwxLjY3OS0xLjk1LDEuNjc5aC0yNC42MzggICAgYy0wLjkzOCwwLTIuMTU2LTAuNjEyLTIuNzMtMS4zNDljLTAuMjM0LTAuMjk3LTEuMzE5LTQuOTUzLTUuOTg2LTQuOTUzYzAsMC0xMi4yOTIsMC0xMy43MzEsMGMtNS44NTMsMC04Ljg0NiwyLjAyNy0xMC4xNjUsNy44MTIgICAgbC0xNC40MjUsNDguOTE3Yy0wLjI0NCwwLjkwOC0xLjE0NywxLjUwNi0yLjA4NSwxLjQzNWMwLDAtOC40NjgsMC0xMC4wNCwwYy01LjQ1NiwwLTkuNjk2LDMuOTMtOS42OTYsOS4zODUgICAgYzAsMC4zNTktMS4wMjgsMTUuNjIxLTEuMDM4LDE5LjQzN2MwLDAuOTM3LTAuMjgyLDIuNDA5LTAuNTYsMy4zMDljLTAuNzU1LDIuNDQ4LTEuMTY2LDUuMDQ5LTEuMTY2LDcuNzQ1ICAgIGMwLDE0LjUyMSwxMS43NzEsMjYuMjkyLDI2LjI5MiwyNi4yOTJzMjYuMjkyLTEyLjEzLDI2LjI5Mi0yNi42NWMwLTIuMjI0LTAuMjc3LTMuOTczLTAuNzk5LTYuNDMxICAgIGMtMC4xOTYtMC45MTgsMC4zMjUtMS42NTksMS4xNzctMS42NTljMC44NTEsMCwxLjg1OSwwLjY4OCwyLjI2MSwxLjUzNWMwLDAsMTEuMDY5LDIzLjUzOCwxMS4wNzksMjMuNTgxICAgIGMwLjAwOSwwLjA0MywwLjQxMSwwLjczNiwxLjA0NywxLjQzYzEuNjk3LDEuODU0LDQuMTExLDMuMDE3LDYuNzk5LDMuMDE3YzUuMTI1LDAsOS4yOC00LjA2LDkuMjgtOS4xODUgICAgYzAtMC40NTQtMC4wMzMtMC44Ny0wLjEwMS0xLjI4MWMtMC4xMDktMC43MDMtNy44NTEtMTcuNTYyLTcuODUxLTE3LjU2MmMtMC40MDEtMC44NDcsMC4wMjgtMS41MzUsMC45NzEtMS41MzVoMTIuMjkyICAgIGMwLjkzOCwwLDEuNTQ1LDAuNzQ2LDEuMzU0LDEuNjY0Yy0wLjQ4MiwyLjM1My0wLjc0MSwzLjg0NC0wLjc0MSw1LjkwOWMwLDEzLjQ3OSwxMC45MjUsMjQuNTgxLDI0LjM5OCwyNC41ODEgICAgczI0LjM5OS0xMC44MzUsMjQuMzk5LTI0LjMwOWMwLTEuODY5LTAuMjExLTMuNjY3LTAuNjEyLTUuNDAyQzU0OC43NTEsNDA1Ljg4OSw1NDkuMjc2LDQwNC45OTQsNTUwLjIxNCw0MDQuOTk0eiAgICAgTTUxOC4yOTQsMzQ4LjMxMmMtMjAuMTI0LDAtMzMuNjkzLDI1Ljc5LTQzLjM1NiwyNS43OWMwLDAtMi4wNDEsMC4xMDUtMi44My0wLjAzM2MtMC43ODktMC4xNDQtMS4xODctMC45NzYtMC45MjgtMS44NzkgICAgbDkuNzk3LTMzLjMxMmMwLjI0OC0wLjkwMywxLjE4MS0xLjY0NSwyLjExOC0xLjY0NWgzMS40NjVjMC45MzgsMCwxLjkyMiwwLjU0NSwyLjE5NSwxLjIybDAuNDk3LDEuMjE5bDIuMjA0LDYuNzk5ICAgIEM1MTkuNzQzLDM0Ny4zNTYsNTE5LjIwNywzNDguMDk4LDUxOC4yOTQsMzQ4LjMxMnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCQk8Y2lyY2xlIGN4PSI0NjkuMDQ3IiBjeT0iMjg2LjI2NyIgcj0iMjMuMDMxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+" />
                                    </div>
                                </div>
                                <div class="description-donation">
                                    <h2>CRECHE</h2>
                                    <p>
                                        Abertura da Creche Léon Denis, que será gratuita e já está em fase de
                                        construção.
                                    </p>


                                </div>

                                <div class="next-choose">
                                    <div class="choose">
                                        <a href="<?= HOME;?>/creche">Saiba mais...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!--END SECTION VOLUTER-->

    <!--VOLUNTER-->
    <div class="bx-info-voluter">
        <div class="bx-voluter">
            <div class="voluter-box" style="width: 80%;margin: 0 10%;">

                <div class="info-voluter">
                    <h2>
                        <span>VOLUNTÁRIO</span>
                        <br />ESPERAMOS <span>POR VOCÊ</span>
                        <p>
                            Seu tempo e seu talento<br /> doados para o Consolador.
                        </p>
                    </h2>
                    <a class="btn-voluter modal-express-ajax"  id="modalBtn"  href="#">
                        VOLUNTARIAR
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--END VOLUTER-->
    <!--MODAL VOLUTER-->
    <?php
    include 'inc/modal-voluntary.php';
    ?>
    <!--END MODAL VOLUTER-->

    <!-- TAKE ON OUR CAUSE -->
    <section class="section-take-on-our-cause">
        <div class="bax-header">
            <h1>NOSSAS <small>CAUSAS</small></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et magna aliqua.</p>
        </div>

        <!-- ARTICLE TAKE ON OUR CAUSE -->
        <article class="article-take-on-our-cause">
            <?php
                $category = 2;
                $ative = 1;
                $listP = $postController->allStatusCategory($ative,$category,0,3);
                if($listP == null):
                    echo "Não existem posts no momento";
                else:
                    foreach ($listP as $post):
            ?>
            <!-- DETAILS TAKE OUR CAUSE -->
            <div class="bx-take-on-our-cause">
                <div class="thumb">
                    <img src="./upload/<?= $post->thumb; ?>" alt="">
                </div>
                <div class="description">
                    <h2><?= $post->title; ?></h2>
                    <p><?= $helper->limitarTexto($post->resume, 150); ?></p>
                </div>
                <div class="box-reade-more">
                    <div class="bx-reade-more">
                        <a href="<?= HOME; ?>/causa/<?= $post->url; ?>" class="btn-reade-more">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <!-- END DETAILS TAKE OUR CAUSE -->
            <?php
                    endforeach;
                endif;
            ?>
        </article>
        <!-- END ARTICLE TAKE ON OUR CAUSE -->
    </section>
    <!-- TAKE ON OUR CAUSE -->

    <!-- INFO DONATES -->
    <section class="section-info-donation">
        <h1 class="font-zero"></h1>
        <div class="bg-donation">
            <article class="article-info-donation">

                <!-- INFO DONATION -->
                <div class="info-donation">
                    <div class="thumb">
                        <img
                            src="data:image/svg+xml;base64,
                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00Ny4wNTQsMzAyaC0zMmMtOC4yOTEsMC0xNSw2LjcwOS0xNSwxNXYxODBjMCw4LjI5MSw2LjcwOSwxNSwxNSwxNWgzMmMyNC44MTQsMCw0NS0yMC4xODYsNDUtNDVWMzQ3ICAgIEM5Mi4wNTQsMzIyLjE4Niw3MS44NjksMzAyLDQ3LjA1NCwzMDJ6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MDcuNTU0LDMzMS4wOTljLTEuOC0yLjk5OS00LjE5OS01LjQtNi44OTktNy41Yy0xMS4wNDUtOS42NjItMjkuNjU0LTguNzQ5LTQwLjQ5OSwzLjAwMWwtNjguMTAxLDc4LjZsLTIuMSwyLjM5OSAgICBjLTguMzk5LDkuMy0yMC40LDE0LjQwMS0zMi45OTksMTQuNDAxaC0xMTYuNGMtOC40MDEsMC0xNS02LjYwMS0xNS0xNWMwLTguNDAxLDYuNTk5LTE1LDE1LTE1aDkxLjVjMTYuNSwwLDMwLTEzLjUsMzAtMzB2LTAuMyAgICBjLTAuMy0xNi41LTEzLjUtMjkuNy0zMC0yOS43aC01NC4zYy04Ljk5NiwwLTE4LjYzNi0zLjMwMy0yNi40LTkuOTAxYy0zNi41OTktMzIuMS05MC0zNC4yLTEyOS4zLTYuODk5djE4NC40OTkgICAgYzI5LjcsOC4xMDEsNjAuMywxMi4zMDEsOTEuMTk5LDEyLjMwMWgxMzMuODAxYzMyLjk5OSwwLDY0LjItMTUuNjAxLDg0LTQyLjAwMWw3Mi4wMDEtOTYgICAgQzUxMy41NiwzNjAuMjEsNTE0LjM1MiwzNDEuMyw1MDcuNTU0LDMzMS4wOTl6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MDIuMjY0LDI4Ljk5NUMzODUuNjI3LDEwLjI5NywzNjIuNTY0LDAsMzM3LjMyNCwwYy0yOC4xNzIsMC01Mi41OTMsMTMuMzIxLTcwLjYyMiwzOC41MjIgICAgYy0xLjM1MiwxLjg4OS0yLjYxNywzLjc3OS0zLjgwMiw1LjY0OWMtMS4xODQtMS44NzEtMi40NDktMy43Ni0zLjgwMS01LjY0OUMyNDEuMDcsMTMuMzIxLDIxNi42NDksMCwxODguNDc3LDAgICAgYy0yNS4yNCwwLTQ4LjMwMywxMC4yOTctNjQuOTM5LDI4Ljk5NEMxMDcuNzUsNDYuNzM4LDk5LjA1NCw3MC40NTksOTkuMDU0LDk1Ljc4OGMwLDI3LjUyNSwxMC42ODEsNTIuOTI0LDMzLjYxMSw3OS45MzQgICAgYzIwLjAwOSwyMy41NjUsNDguNzA4LDQ3Ljc4OCw4MS45MzgsNzUuODM2YzEyLjI4LDEwLjM2NSwyNC45NzksMjEuMDgzLDM4LjQ3MywzMi43NzhjMi44MTksMi40NDMsNi4zMjEsMy42NjUsOS44MjQsMy42NjUgICAgYzMuNTAyLDAsNy4wMDUtMS4yMjIsOS44MjQtMy42NjVjMTMuNDkyLTExLjY5MywyNi4xODktMjIuNDEsMzguNDY5LTMyLjc3M2MyMS4zNDItMTguMDE0LDM5Ljc3My0zMy41Nyw1NS43NjctNDguNjYgICAgYzMxLjA1My0yOS4yOTgsNTkuNzg3LTYyLjU1Myw1OS43ODctMTA3LjExNEM0MjYuNzQ3LDcwLjQ2LDQxOC4wNTIsNDYuNzM5LDQwMi4yNjQsMjguOTk1eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkZCMjI5IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                    </div>
                    <div class="description">
                        <h2>201816</h2>
                        <p>DOAÇÕES</p>
                    </div>
                </div>
                <!-- INFO DONATION -->

                <!-- INFO DONATION -->
                <div class="info-donation">
                    <div class="thumb">
                        <img
                            src="data:image/svg+xml;base64,
                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDU2NC4xNTMgNTY0LjE1MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTY0LjE1MyA1NjQuMTUyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTAwLjM0NSwyNDAuMTQ4aC0zLjUxOWMtMC45NTYsMC0xLjcyNywwLjc3NC0xLjcyNywxLjcyN2MwLDAsMCw2MC45OTQsMCwxMjYuNTA3YzMuNjY4LTQuODQ5LDcuMjItOS43NTQsMTAuNjQ4LTE0LjcwNyAgICBjLTIuMjc2LTIuODQxLTMuNjQ4LTYuNDQtMy42NTMtMTAuMzY2Yy0wLjAwNS0wLjAwNS0wLjAyMy0xMDEuNDM4LTAuMDIzLTEwMS40MzggICAgQzUwMi4wNzIsMjQwLjkxOCw1MDEuMjk3LDI0MC4xNDgsNTAwLjM0NSwyNDAuMTQ4eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9wYXRoPgoJCTxwYXRoIGQ9Ik00NTAuNDg3LDM1Ny4yODloLTMuNDU3Yy0xLjIwNSwwLTEuNzcsMC41MTItMS43NywxLjczYzAsMCwwLDMwLjIwMywwLDY0Ljk1NGMyLjM1Ny0yLjIyOSw0LjY4Ny00LjQ4LDYuOTk1LTYuNzYxICAgIGMwLTMxLjgxNCwwLTU4LjE5MywwLTU4LjE5M0M0NTIuMjU1LDM1Ny44MDEsNDUxLjY5MiwzNTcuMjg5LDQ1MC40ODcsMzU3LjI4OXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcGF0aD4KCQk8cGF0aCBkPSJNMTE1Ljk5MSwzNTcuMjg5aC0zLjQ1MmMtMS4yMDUsMC0xLjc2OSwwLjUxMi0xLjc2OSwxLjczYzAsMCwwLDI1Ljc2MiwwLDU3LjA2OWMyLjMxLDIuMjk1LDQuNjM4LDQuNTY2LDYuOTk1LDYuODA5ICAgIGMwLTM0LjI5NiwwLTYzLjg3OCwwLTYzLjg3OEMxMTcuNzYsMzU3LjgwMSwxMTcuMTk2LDM1Ny4yODksMTE1Ljk5MSwzNTcuMjg5eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9wYXRoPgoJCTxwYXRoIGQ9Ik01MTkuMzY2LDgzLjgxMkM0MTYuMy0xMC42NjYsMjk5LjE5OSwxMDMuMjE0LDI4NC4xNDcsMTE4LjcwNWMtMC44OTgsMC45MjMtMS44MDcsMS42ODgtMi4wNywxLjY5NyAgICBjLTAuMjYzLTAuMDE1LTEuMTc2LTAuNzc0LTIuMDctMS42OTdDMjY0Ljk1NiwxMDMuMjE0LDE0Ny44NTMtMTAuNjY2LDQ0Ljc4OSw4My44MTJDLTEzLjM4NSwxMzkuMjAyLTEwLjI2OCwyMjIuMTY2LDI3LjcsMzAxLjE4MSAgICBjMC0zMi42NSwwLTcyLjQ5NywwLTczLjI5NmMwLTIyLjczNSwxNy40ODUtNDAuMjIsMzkuMzQ1LTQwLjIyYzAuNTU0LDAsNTAuNzE0LDAsNTAuNzE0LDBjMTMuNzgsMCw0My4xNjEsMCw0My43MTUsMCAgICBjMjEuODYsMCwzOS4zNDUsMTcuNDg0LDM5LjM0NSw0MC4yMmMwLDEuMzU3LDAsMTE1LjM2MSwwLDExNS40MTRjMCw5LjE3Ni03LjQzOSwxNi42MS0xNi42MTUsMTYuNjEgICAgYy05LjE3LDAtMTYuNjA1LTcuNDMtMTYuNjEtMTYuNjAxYy0wLjAwNC0wLjAwNS0wLjAyNC0xMDEuNDM4LTAuMDI0LTEwMS40MzhjMC0wLjk1Ni0wLjc3NC0xLjcyNy0xLjcyNi0xLjcyN2gtMy41MTkgICAgYy0wLjk1NywwLTEuNzI2LDAuNzc0LTEuNzI2LDEuNzI3YzAsMCwwLDEzMi44MTMsMCwyMTYuOTgyYzI4LjQzOCwyMC45MTMsNTkuMDIsMzcuOSw5MC4zMjcsNDkuMjY2ICAgIGMwLjAwNS00OS43NTgsMC4wMTQtMTYwLjA3MSwwLjAxNC0xNjAuMDcxYzAtMC42MTctMC41NjQtMS4xMTktMS4xODEtMS4xMTloLTQuNjQ3Yy0wLjYxNywwLTEuMTA0LDAuNTAyLTEuMTA0LDEuMTE5ICAgIGwwLjAxNCw2NS4zNzRjLTAuMDA0LDUuOTM0LTQuODUzLDEwLjQ4NS0xMC43ODYsMTAuNDg1Yy01LjkzOCwwLTEwLjgzNC00LjU1Ny0xMC44MzQtMTAuNDljMC0wLjAzMywwLTczLjgxMiwwLTc0LjY5MiAgICBjMC0xNC43MTIsMTMuNzY1LTI2LjM4OCwyNy45MTMtMjYuMzg4YzAuMzU4LDAsNjMuMDkzLDAsNjMuNDU3LDBjMTQuMTQ3LDAsMjcuOTc1LDExLjY3MSwyNy45NzUsMjYuMzg4YzAsMC44OCwwLDc0LjY1OSwwLDc0LjY5MiAgICBjMCw1LjkzOC00LjgzOSwxMC40OS0xMC43NzcsMTAuNDljLTUuOTMzLDAtMTAuODQ0LTQuNTUyLTEwLjg0OS0xMC40ODVjLTAuMDA0LDAsMC4wMi02NS4zNzQsMC4wMi02NS4zNzQgICAgYzAtMC42MTctMC40ODItMS4xMTktMS4xLTEuMTE5aC00LjcxOWMtMC42MTcsMC0xLjExOSwwLjUwMi0xLjExOSwxLjExOWMwLDAsMCwxMTAuMzI3LDAsMTYwLjA4MSAgICBjMzAuODk2LTExLjIxMiw2MS4wOS0yNy45MDMsODkuMjE4LTQ4LjQzOGMwLTg0LjEyMiwwLTIxNy44MTksMC0yMTcuODE5YzAtMC45NTYtMC43NzQtMS43MjctMS43MjYtMS43MjdoLTMuNTIgICAgYy0wLjk1NiwwLTEuNzI2LDAuNzc1LTEuNzI2LDEuNzI3YzAsMC0wLjAxNSwxMDEuNDM0LTAuMDI0LDEwMS40MzhjLTAuMDA0LDkuMTcxLTcuNDM5LDE2LjYwMS0xNi42MDksMTYuNjAxICAgIGMtOS4xNzYsMC0xNi42MS03LjQzOS0xNi42MS0xNi42MWMwLTAuMDUzLDAtMTE0LjA1NywwLTExNS40MTRjMC0yMi43MzQsMTcuNDg1LTQwLjIyLDM5LjM0NS00MC4yMmMwLjU1NSwwLDUwLjcxLDAsNTAuNzEsMCAgICBjMTMuNzgsMCw0My4xNiwwLDQzLjcyLDBjMjEuODYsMCwzOS4zNDUsMTcuNDg1LDM5LjM0NSw0MC4yMmMwLDAuODE3LDAsNDIuNTc3LDAsNzUuNjMgICAgQzU3NC4zNSwyMjMuODAyLDU3OC4xMTMsMTM5Ljc0Nyw1MTkuMzY2LDgzLjgxMnogTTE0NS40OTEsMTUyLjYxOGMtMC42MzYsMy4xMTItMS43MjYsNi4wNTgtMy4xOTksOC43NjkgICAgcy0zLjMyOCw1LjE4NC01LjQ4OSw3LjM0NWMtMC43MjIsMC43MjItMS40NzgsMS40MDUtMi4yNjcsMi4wNTZjLTUuNTA4LDQuNTQ3LTEyLjU3NCw3LjI3Ny0yMC4yNzcsNy4yNzcgICAgYy0yLjIsMC00LjM1MS0wLjIyNS02LjQyNi0wLjY0NmMtMy4xMTItMC42MzYtNi4wNTgtMS43MjctOC43NjktMy4xOTlzLTUuMTgzLTMuMzI3LTcuMzQ0LTUuNDg4ICAgIGMtMi4xNjYtMi4xNjEtNC4wMTYtNC42MzgtNS40ODktNy4zNDVjLTEuNDczLTIuNzExLTIuNTYzLTUuNjU2LTMuMTk5LTguNzY5Yy0wLjQyNS0yLjA3NS0wLjY0Ni00LjIyMi0wLjY0Ni02LjQyNiAgICBjMC0zLjI5OSwwLjUwMi02LjQ4MywxLjQzNS05LjQ4MWMwLjMxMS0wLjk5OSwwLjY2OS0xLjk3NSwxLjA3MS0yLjkzMWMxLjIxLTIuODU5LDIuODI2LTUuNTA4LDQuNzc2LTcuODcgICAgYzAuNjUtMC43ODksMS4zMzktMS41NDQsMi4wNTYtMi4yNjJjMi4xNjEtMi4xNjEsNC42MzgtNC4wMTYsNy4zNDQtNS40ODhjMi43MTEtMS40NzMsNS42NTYtMi41NjMsOC43NjktMy4xOTkgICAgYzIuMDc1LTAuNDI2LDQuMjIyLTAuNjQ2LDYuNDI2LTAuNjQ2YzcuNzAzLDAsMTQuNzcsMi43MywyMC4yNzcsNy4yNzdjMC43ODksMC42NSwxLjU0NCwxLjMzNCwyLjI2NywyLjA1NiAgICBjMC43MjIsMC43MjMsMS40MDUsMS40NzgsMi4wNTYsMi4yNjJjMS45NTEsMi4zNjIsMy41NjIsNS4wMTEsNC43NzYsNy44N2MwLjQwMiwwLjk1MSwwLjc2LDEuOTMyLDEuMDcxLDIuOTMxICAgIGMwLjkzMiwyLjk5MywxLjQzNCw2LjE3OCwxLjQzNCw5LjQ4MUMxNDYuMTQyLDE0OC4zOTYsMTQ1LjkxNywxNTAuNTQzLDE0NS40OTEsMTUyLjYxOHogTTI4Mi4wNzIsMzA4LjkzNyAgICBjLTEyLjMzMSwwLTIyLjMyOC05Ljk5OC0yMi4zMjgtMjIuMzI5YzAtOC41NjcsNC44MjktMTYuMDAyLDExLjkxLTE5Ljc0Nmw2Ljk1Mi0xMS43MDR2OS4zOTUgICAgYzAuODYxLTAuMTM0LDEuNzM2LTAuMjE1LDIuNjI1LTAuMjQ4bDUuNDg4LTkuMTQ2djkuNjE1YzAuNjg0LDAuMTQzLDEuMzU0LDAuMzE1LDIuMDA4LDAuNTIxbDYuMDItMTAuMTM2djEzLjA3MSAgICBjNS44MzQsNC4wMzEsOS42NTMsMTAuNzU4LDkuNjUzLDE4LjM3OUMzMDQuNCwyOTguOTM4LDI5NC40MDMsMzA4LjkzNywyODIuMDcyLDMwOC45Mzd6IE00NzkuOTg3LDE1Mi42MTggICAgYy0wLjYzNiwzLjExMi0xLjcyNiw2LjA1OC0zLjE5OCw4Ljc2OXMtMy4zMjgsNS4xODQtNS40ODksNy4zNDVjLTUuNzcxLDUuNzcxLTEzLjczNiw5LjMzOC0yMi41MzksOS4zMzggICAgYy0yLjE5OSwwLTQuMzUxLTAuMjI2LTYuNDI2LTAuNjQ2Yy0zLjExMi0wLjYzNy02LjA1OC0xLjcyNy04Ljc2OS0zLjE5OXMtNS4xODMtMy4zMjctNy4zNDQtNS40ODhzLTQuMDE3LTQuNjM5LTUuNDg5LTcuMzQ1ICAgIGMtMS40NzMtMi43MTEtMi41NjItNS42NTYtMy4xOTgtOC43NjljLTAuNDI2LTIuMDc1LTAuNjQ2LTQuMjIyLTAuNjQ2LTYuNDI2YzAtMy4yOTksMC41MDItNi40ODMsMS40MzQtOS40ODEgICAgYzAuMzEyLTAuOTk5LDAuNjctMS45NzUsMS4wNzEtMi45MzFjMS4yMS0yLjg1OSwyLjgyNi01LjUwOCw0Ljc3Ni03Ljg3YzAuNjUtMC43ODksMS4zMzQtMS41NDQsMi4wNTYtMi4yNjIgICAgYzIuMTYxLTIuMTYxLDQuNjM5LTQuMDE2LDcuMzQ1LTUuNDg4YzIuNzExLTEuNDczLDUuNjU2LTIuNTYzLDguNzY5LTMuMTk5YzIuMDc1LTAuNDI2LDQuMjIyLTAuNjQ2LDYuNDI2LTAuNjQ2ICAgIGM4LjgwMywwLDE2Ljc3MiwzLjU2NywyMi41MzksOS4zMzhjMC43MjIsMC43MjIsMS40MDUsMS40NzgsMi4wNTYsMi4yNjJjMS45NTEsMi4zNjEsMy41NjIsNS4wMTEsNC43NzYsNy44NyAgICBjMC40MDIsMC45NTEsMC43NjEsMS45MzIsMS4wNzEsMi45MzFjMC45MzMsMi45OTMsMS40MzUsNi4xNzgsMS40MzUsOS40ODFDNDgwLjYzMiwxNDguMzk2LDQ4MC40MTMsMTUwLjU0Myw0NzkuOTg3LDE1Mi42MTh6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3BhdGg+CgkJPHBhdGggZD0iTTI4NC4zMjksNDIyLjE4MWgtNC41NzVjLTAuNzc5LDAtMS4xNDcsMC4zMjktMS4xNDcsMS4xMThjMCwwLDAsMTMuNzcxLDAsMzAuODgyYy0wLjAxNCwwLjA2Ny0wLjA0MywwLjEzLTAuMDQzLDAuMjAxICAgIGwtMC4wMDUsNjIuMjI5YzAuMDE0LDAuMDA0LDAuMDI5LDAuMDA5LDAuMDQzLDAuMDA5bDAsMGMxLjEyNCwwLjI4MiwyLjI0NywwLjU2NCwzLjM3NSwwLjgzMmgwLjE5NiAgICBjMS4xMjMtMC4yNjMsMi4yNDItMC41NDUsMy4zNjYtMC44MjdjLTAuMDA1LTE2LjEyNy0wLjAxNS05My4zMjUtMC4wMTUtOTMuMzI1QzI4NS41MjQsNDIyLjUxLDI4NS4xMDgsNDIyLjE4MSwyODQuMzI5LDQyMi4xODF6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3BhdGg+CgkJPHBhdGggZD0iTTY3LjkyLDI0MS44NzVjMC0wLjk1Ny0wLjc3NS0xLjcyNy0xLjcyNi0xLjcyN2gtMy41MTljLTAuOTU3LDAtMS43MjYsMC43NzQtMS43MjYsMS43MjcgICAgYzAsMC0wLjAxNSwxMDEuNDM0LTAuMDI0LDEwMS40MzhjMCwzLjU3MS0xLjE0Myw2Ljg3MS0zLjA2LDkuNTc3YzMuMjQ3LDQuNzA5LDYuNTkzLDkuMzgxLDEwLjA1NSwxMy45OTkgICAgQzY3LjkyLDMwMS45NDEsNjcuOTIsMjQxLjg3NSw2Ny45MiwyNDEuODc1eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9wYXRoPgoJCTxwYXRoIGQ9Ik0yODUuNTgyLDUxNi42MWwtMC4wMDUtNjIuMjI5YzAtMC4wNjYtMC4wMzMtMC4xMjQtMC4wNDgtMC4xOTFjMCwwLjA2MiwwLDAuMTI5LDAsMC4xOTEgICAgYzAuMDA1LDIwLjM3MywwLjAxLDQ2LjExNSwwLjAxLDYyLjI0MkMyODUuNTU3LDUxNi42MTksMjg1LjU2Nyw1MTYuNjE0LDI4NS41ODIsNTE2LjYxeiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                    </div>
                    <div class="description">
                        <h2>225</h2>
                        <p>VOLUNTÁRIOS</p>
                    </div>
                </div>
                <!-- INFO DONATION -->

                <!-- INFO DONATION -->
                <div class="info-donation">
                    <div class="thumb">
                        <img
                            src="data:image/svg+xml;base64,
                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDY1Ljk4NyA0NjUuOTg3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NjUuOTg3IDQ2NS45ODc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzcyLjczNSwyMzYuNTQ3Yy0yLjY1MS0zLjUzNS03LjY2NS00LjI1MS0xMS4yLTEuNmMtMS42OTgsMS4yNzQtMi44MjEsMy4xNy0zLjEyLDUuMjcybC00LjQ0LDMxLjEyICAgIGMtMC4xMDcsMC40LTAuMjQ3LDAuNzktMC40MTYsMS4xNjhjOC4xNTktMTAuODM0LDE0Ljc0NC0yMi43NjksMTkuNTYtMzUuNDQ4TDM3Mi43MzUsMjM2LjU0N3oiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTM0Ni4wNDcsMjc4LjIwM2MtMC4zNzcsMC0wLjc1NC0wLjAyNC0xLjEyOC0wLjA3MmwtNDcuNTItNi43OTJjLTQuMzc0LTAuNjI3LTcuNDExLTQuNjgtNi43ODQtOS4wNTQgICAgYzAtMC4wMDEsMC0wLjAwMSwwLTAuMDAybDQuNDQtMzEuMTJjMC42MTktNC4zNzUtMi40MjUtOC40MjMtNi44LTkuMDQyYy0yLjA5My0wLjI5Ni00LjIxOSwwLjI0OC01LjkxMiwxLjUxNGwtMjUuMTUyLDE4Ljg1NiAgICBjLTMuNTM1LDIuNjUxLTguNTQ5LDEuOTM1LTExLjItMS42djBsLTI4LjgtMzguNGMtMi42NTEtMy41MzUtMS45MzUtOC41NDksMS42LTExLjJsMjUuMTQ0LTE4Ljg1NiAgICBjMy41MzUtMi42NTEsNC4yNTEtNy42NjUsMS42LTExLjJjLTEuMjc0LTEuNjk4LTMuMTctMi44MjEtNS4yNzItMy4xMmwtMzEuMTItNC40NDhjLTQuMzc0LTAuNjIyLTcuNDE2LTQuNjczLTYuNzkzLTkuMDQ3ICAgIGMwLTAuMDAzLDAuMDAxLTAuMDA2LDAuMDAxLTAuMDA5bDYuNzkyLTQ3LjUxMmMwLjYyMi00LjM3NCw0LjY3My03LjQxNiw5LjA0Ny02Ljc5M2MwLjAwMywwLDAuMDA2LDAuMDAxLDAuMDA5LDAuMDAxbDMxLjEyLDQuNDQ4ICAgIGMzLjIwMSwwLjQ2NCw2LjM2NC0xLjA1OCw4LTMuODQ4YzEuNjk5LTIuNzczLDEuNTA4LTYuMzA3LTAuNDgtOC44OGwtMTguODQtMjUuMTM2Yy0yLjY1MS0zLjUzNS0xLjkzNS04LjU0OSwxLjYtMTEuMmw0LjUzNi0zLjQgICAgYy03LjM0OC0wLjM1NS0xNC43MTMtMC4xNTgtMjIuMDMyLDAuNTkyQzE0My4wODcsNTEuOTA1LDg2LjM0NywxMjMuMjc0LDk1LjM2OSwyMDIuMjljNC45MTUsNDMuMDQ1LDI4Ljk0OSw4MS41ODksNjUuNDM4LDEwNC45NDUgICAgYzEzLjMyMiw4LjI2LDIxLjUwNCwyMi43NSwyMS42OTYsMzguNDI0djMyLjMyOGMwLDEzLjI1NSwxMC43NDUsMjQsMjQsMjRoNjRjMTMuMjU1LDAsMjQtMTAuNzQ1LDI0LTI0di0zMS42NjQgICAgYzAuMjAzLTE2LjA0Miw4LjU1My0zMC44NzgsMjIuMTYtMzkuMzc2YzEyLjYxMi04LjE4MiwyMy44NzUtMTguMjc2LDMzLjM4NC0yOS45MiAgICBDMzQ4Ljg0MSwyNzcuNzY2LDM0Ny40NjEsMjc4LjE3MiwzNDYuMDQ3LDI3OC4yMDN6IE0yNDYuNTAzLDM3Ny45ODdoLTE2di0yNGgxNlYzNzcuOTg3eiBNMjMwLjUwMywzMzcuOTg3ICAgIGMtMC4wMDUtMjEuMTUyLTEzLjA0OC00MC4xMTItMzIuOC00Ny42OGMtNTcuNjA5LTIyLjUyNi04Ni4wNDktODcuNDg3LTYzLjUyMy0xNDUuMDk2YzguNzIyLTIyLjMwNywyNC4zNjYtNDEuMjMsNDQuNjM1LTUzLjk5MiAgICBsOC40ODgsMTMuNTM2Yy00NC44NzUsMjguMjM3LTU4LjM2Miw4Ny41MDUtMzAuMTI1LDEzMi4zOGMxMC45NCwxNy4zODYsMjcuMTY5LDMwLjgwNSw0Ni4zMDEsMzguMjg0ICAgIGMyNS45MjgsOS45MTcsNDMuMDQ0LDM0LjgwOCw0My4wMjQsNjIuNTY4SDIzMC41MDN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMDYuNTAzLDQ0MS45ODd2OGMwLDguODM3LDcuMTYzLDE2LDE2LDE2aDMyYzguODM3LDAsMTYtNy4xNjMsMTYtMTZ2LThIMjA2LjUwM3oiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1Ni40ODcsMzEzLjk4N2MtNC43NC0zLjA3My05LjMwNS02LjQwOS0xMy42NzItOS45OTJjLTEyLjA3NywyMy41MS00MC45MjUsMzIuNzc4LTY0LjQzNSwyMC43MDIgICAgYy0xNi4wMDItOC4yMi0yNi4wNDItMjQuNzItMjUuOTg5LTQyLjcxYzAuMDM3LTI0LjE4NywxOC4wNS00NC41NzUsNDIuMDQ4LTQ3LjU5MmMtMi45MzYtOC44My01LjA1Ny0xNy45MTEtNi4zMzYtMjcuMTI4ICAgIGwtMS40LDYuNjU2Yy0xLjgxOCw4LjY0Ny0xMC4zMDMsMTQuMTgzLTE4Ljk1LDEyLjM2NWMtMi4wNzEtMC40MzUtNC4wMzUtMS4yNzctNS43NzgtMi40NzdsLTE2LjY0LTExLjQyNGwtMTQuNTc2LDE0LjU0NCAgICBsMTEuNDU2LDE2LjY1NmM1LjAxNCw3LjI3NiwzLjE4LDE3LjI0LTQuMDk2LDIyLjI1NGMtMS43NDUsMS4yMDItMy43MTEsMi4wNDYtNS43ODQsMi40ODJsLTE5Ljk0NCw0LjJ2MTkuMDA4bDE5Ljk0NCw0LjIgICAgYzguNjQ3LDEuODIxLDE0LjE4MSwxMC4zMDcsMTIuMzYsMTguOTU0Yy0wLjQzNywyLjA3Ni0xLjI4Myw0LjA0NC0yLjQ4OCw1Ljc5bC0xMS40NDgsMTYuNTY4bDE0LjU3NiwxNC41NDRsMTYuNjI0LTExLjQ1NiAgICBjNy4yNzYtNS4wMTQsMTcuMjQtMy4xOCwyMi4yNTQsNC4wOTZjMS4yMDIsMS43NDUsMi4wNDYsMy43MTEsMi40ODIsNS43ODRsNC4xOTIsMTkuOTc2aDE5LjAxNmw0LjE5Mi0xOS45NDQgICAgYzEuODItOC42NDcsMTAuMzA1LTE0LjE4MiwxOC45NTItMTIuMzYyYzIuMDczLDAuNDM2LDQuMDM5LDEuMjgsNS43ODQsMi40ODJsMTYuNjE2LDExLjQyNGwxNy4xNi0xNy4xNiAgICBDMTY5LjczLDMyNS45NzEsMTY0LjA0LDMxOC43NTYsMTU2LjQ4NywzMTMuOTg3eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9wYXRoPgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cmVjdCB4PSIyMDYuNTAzIiB5PSI0MDkuOTg3IiB3aWR0aD0iNjQiIGhlaWdodD0iMTYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcmVjdD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTQzOC4yNTUsMTM3LjkxNWMtMTMuMTIxLTEuODc2LTIyLjIzNy0xNC4wMzUtMjAuMzYxLTI3LjE1NmMwLjkwMS02LjMwMSw0LjI2OC0xMS45ODYsOS4zNjEtMTUuODA0bDE4Ljc0NC0xNC4wNjQgICAgbC0xOS4yLTI1LjZsLTE4Ljc0NCwxNC4wNTZjLTEwLjYwMiw3Ljk1Ni0yNS42NDYsNS44MS0zMy42MDEtNC43OTFjLTMuODE1LTUuMDg0LTUuNDU4LTExLjQ3NS00LjU2Ny0xNy43NjlsMy4zMTItMjMuMiAgICBsLTMxLjY3Mi00LjUybC0zLjMxMiwyMy4yYy0xLjg3NywxMy4xMjEtMTQuMDM1LDIyLjIzNy0yNy4xNTYsMjAuMzYxYy02LjMwMS0wLjkwMS0xMS45ODYtNC4yNjgtMTUuODA0LTkuMzYxbC0xNC4wNjQtMTguNzc2ICAgIGwtMjUuNiwxOS4ybDE0LjA1NiwxOC43NDRjNy45NTQsMTAuNjAzLDUuODA3LDI1LjY0Ni00Ljc5NiwzMy42MDFjLTUuMDk1LDMuODIyLTExLjQ5OSw1LjQ2Mi0xNy44MDQsNC41NTlsLTIzLjItMy4zMTIgICAgbC00LjU0NCwzMS42OGwyMy4yLDMuMzEyYzEzLjEyMSwxLjg3NywyMi4yMzcsMTQuMDM1LDIwLjM2MSwyNy4xNTZjLTAuOTAxLDYuMzAxLTQuMjY4LDExLjk4Ni05LjM2MSwxNS44MDRsLTE4LjczNiwxNC4wNjQgICAgbDE5LjIsMjUuNmwxOC43NDQtMTQuMDU2YzEwLjYwMy03Ljk1NCwyNS42NDYtNS44MDcsMzMuNjAxLDQuNzk2YzMuODIyLDUuMDk1LDUuNDYyLDExLjUsNC41NTksMTcuODA0bC0zLjMxMiwyMy4ybDMxLjc0NCw0LjU0NCAgICBsMy4zMTItMjMuMmMxLjg3Ny0xMy4xMjEsMTQuMDM1LTIyLjIzNywyNy4xNTYtMjAuMzYxYzYuMzAxLDAuOTAxLDExLjk4Niw0LjI2OCwxNS44MDQsOS4zNjFsMTQuMDY0LDE4LjczNmwyNS42LTE5LjIgICAgbC0xNC4xMDQtMTguNzc2Yy03Ljk1MS0xMC42MDUtNS44LTI1LjY0OCw0LjgwNS0zMy41OTljNS4wODQtMy44MTIsMTEuNDcyLTUuNDUyLDE3Ljc2My00LjU2MWwyMy4yLDMuMzEybDQuNTItMzEuNjcyICAgIEw0MzguMjU1LDEzNy45MTV6IE0zNDAuMzkxLDE4OC4wOTljLTI2LjUxLDAtNDgtMjEuNDktNDgtNDhzMjEuNDktNDgsNDgtNDhjMjYuNTEsMCw0OCwyMS40OSw0OCw0OCAgICBDMzg4LjM2LDE2Ni41OTYsMzY2Ljg4OCwxODguMDY4LDM0MC4zOTEsMTg4LjA5OXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHJlY3QgeD0iMzkwLjUwMyIgeT0iMjk3Ljk4NyIgd2lkdGg9IjU2IiBoZWlnaHQ9IjE2IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3JlY3Q+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxyZWN0IHg9IjM5OC41MDQiIHk9IjMzNC43NSIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NDAxIC0wLjc2ODMgMC43NjgzIDAuNjQwMSAtMTM0Ljg4NzYgNDQ0LjAyNTQpIiB3aWR0aD0iMTYiIGhlaWdodD0iNjIuNDgiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcmVjdD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHJlY3QgeD0iMzQyLjUwMyIgeT0iMzYxLjk4NyIgd2lkdGg9IjE2IiBoZWlnaHQ9IjU2IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIiBzdHlsZT0iZmlsbDojRkZCMjI5Ij48L3JlY3Q+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxyZWN0IHg9IjUuNTE5IiB5PSIxMjkuOTg3IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjk3MDEgLTAuMjQyNSAwLjI0MjUgMC45NzAxIC0zMi4zMTU1IDEzLjQ1NzcpIiB3aWR0aD0iNjUuOTY4IiBoZWlnaHQ9IjE1Ljk5MiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSI+PC9yZWN0PgoJPC9nPgo8L2c+PGc+Cgk8Zz4KCQk8cmVjdCB4PSI0Mi41MDIiIHk9IjM1LjU4NSIgdHJhbnNmb3JtPSJtYXRyaXgoMC41ODEyIC0wLjgxMzcgMC44MTM3IDAuNTgxMiAtMzUuODA4OCA3MC40MDIxKSIgd2lkdGg9IjE1Ljk5MiIgaGVpZ2h0PSI2OC44MTYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcmVjdD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHJlY3QgeD0iOTQuMzI5IiB5PSIwLjk1MiIgdHJhbnNmb3JtPSJtYXRyaXgoMC45Njg4IC0wLjI0NzcgMC4yNDc3IDAuOTY4OCAtNS4yMjc3IDI2LjQwMSkiIHdpZHRoPSIxNiIgaGVpZ2h0PSI2Ni4wNTYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNGRkIyMjkiPjwvcmVjdD4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+" />
                    </div>
                    <div class="description">
                        <h2>10</h2>
                        <p>PROJETOS</p>
                    </div>
                </div>
                <!-- INFO DONATION -->

                <!-- INFO DONATION -->
                <div class="info-donation">
                    <div class="thumb">
                        <img
                            src="data:image/svg+xml;base64,
                            PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDU2MC40ODkgNTYwLjQ4OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTYwLjQ4OSA1NjAuNDg5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGc+Cgk8Zz4KCQk8Y2lyY2xlIGN4PSIxMDAuMjEyIiBjeT0iMTMxLjMyNSIgcj0iMjguMTcxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCQk8Y2lyY2xlIGN4PSI0Mi4yNTMiIGN5PSIxNjYuODkzIiByPSIxNS40NjIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvY2lyY2xlPgoJCTxwYXRoIGQ9Ik0zODMuMTI4LDMxNy40NGMwLTIxLjgxMi01LjIyNi01Ni4zNDctNDMuNDcxLTYzLjQ2NmMtNy41ODMtMS43NDUtMTQuMDE5LTEuNDYzLTE2Ljk2NC0xLjIxNCAgICBjLTAuODMyLDAuMDcxLTEuNDk3LDAuODM2LTEuNDk3LDEuNjczdjI0Ljg1M2MwLDAuODM2LTAuNjUsMS4zMzQtMS40NjgsMS4xNDNjLTEuNjMtMC4zNjgtMy4xMTItMC41NjktNC44MS0wLjU2OSAgICBjLTEyLjAzNCwwLTIxLjc3NCw5LjYzOS0yMS43NzQsMjEuNjY4YzAsMy4yOTksMC43NTEsNi40MjYsMi4wNjIsOS4xNTZjMC4zNTgsMC43NSwwLjAzMywxLjMzNC0wLjgwNCwxLjMzNGgtOTUuNDgxICAgIGMtMC44MzcsMC0xLjc3NC0wLjYyMi0yLjA5OS0xLjM5MmwtMTMuMDg2LTM0Ljk5OWMzLjQzMy0wLjUyMSw2LjY2Ni0yLjM0OCw4Ljg1LTUuMzk0YzQuMjg5LTUuOTg2LDIuOTE3LTE0LjMxNS0zLjA2OS0xOC42MDggICAgbC02LjYwMy00LjczM2MtMC41NTUtMC41ODMtMS4xNjctMS4xMjgtMS44NS0xLjYxMWwtMzEuMzc1LTIyLjE2MWwtMjEuNTYzLTQzLjkzYy0yLjE5NS00LjcwOS02Ljc3NS03LjQ4Mi0xMS42MzMtNy42NzQgICAgYy0wLjEwNS0wLjAxOS0wLjIyOS0wLjA3Mi0wLjMxNS0wLjA3Mkg3NC44ODFjLTMuMjc1LDAtNS44MTQsMi42NzctNS42MzIsNS45NDhsLTEuMzUzLDI2LjIyNSAgICBjLTIuMzA1LTEwLjQ2MS0xMS42MTktMTguMjk4LTIyLjc3My0xOC4yOThjLTkuNzQ1LDAtMTguMDgzLDUuOTc3LTIxLjU3OCwxNC40NThsLTIuMjYxLTMxLjgzOCAgICBjLTAuMzItNC40ODUtNC4yNDEtNy44NTEtOC42OTItNy41NGMtNC40ODUsMC4zMi03Ljg2LDQuMjEyLTcuNTQsOC42OTdsMy43OTIsNTMuMzQ0YzAuMjA2LDQuMDA3LDMuNDY2LDMzLjQ0NSw1My4yMDEsMzcuNzI0ICAgIGwtNDEuMzcyLDc4Ljc5NWMtMS41MjUsMi45MDItMC4wODYsNS4yNzMsMy4xODksNS4yNzNoMjYuODEzdjI0LjczOEwyLjUxMiw0MzYuMTExYy00LjMxMiw2LjAxNS0yLjkzNiwxNC4zOTIsMy4wODQsMTguNzA5ICAgIGMyLjM2NywxLjY5Nyw1LjA5NywyLjUxLDcuNzk4LDIuNTFjNC4xNzQsMCw4LjI5MS0xLjk0MSwxMC45MDYtNS41OTRsNTAuNjQ4LTcwLjYzNGMxLjYzLTIuMjc1LDIuNTEtNS4wMTEsMi41MS03LjgxMnYtMjkuMDQ2ICAgIGg2LjU2bDMzLjgyMiwxMDMuODM0YzEuODQ2LDUuNjYxLDcuMDk1LDkuMjU3LDEyLjc0Nyw5LjI1N2MxLjM3NywwLDIuNzc4LTAuMjEsNC4xNTUtMC42NjVjNy4wNDItMi4yOSwxMC44ODctOS44NTgsOC41OTctMTYuODk2ICAgIGwtMzEuMTE2LTk1LjUyOWgyMC44NTFjMy4yNzUsMCw0Ljk0OS0yLjQ4MSwzLjcxLTUuNTE4bC0zMi44NTctODAuNTg4Yy0xLjIzOC0zLjAzNi0xLjEyOC03Ljk1NiwwLjI0NC0xMC45M2wxMy4yNjgtMjguODI2ICAgIGw5LjQ0OCwxOS4zMTJjMC45OSwyLjEyMywyLjUxNSwzLjk0OSw0LjQzMiw1LjI5OGwyMy42NjcsMTYuNzE1bDEzLjgwNCw5Ljg5M2M1LjM5MywxNC40MiwxOC45NzcsNDkuOTIxLDE4Ljk3Nyw0OS45MjEgICAgYzAuMzgzLDAuNzQxLDAuNTQxLDIuMDEzLDAuNTA3LDIuODQ1Yy0wLjE4Nyw1LjEzNSwyLjk2OSwxMy4zMyw0LjI4OSwxNi41MTVjNS43NzYsMTYuODkyLDE3Ljk0NCwzNy4xNTksNDAuNjk4LDQ5Ljg0NCAgICBjLTAuMDE0LDAuMDQzLTAuMDEsMC4wOTEtMC4wMjksMC4xMzRsLTIuNjQ5LDYuMTM1Yy0wLjEzOSwwLjMyLTAuNDAxLDAuNjA3LTAuNzA4LDAuODQ3ICAgIGMtMTEuODU3LDAuMTQzLTIxLjQyOSw5Ljc5Mi0yMS40MjksMjEuNjg4YzAsMTEuOTg2LDkuNzE1LDIxLjcwMiwyMS43MDIsMjEuNzAyYzExLjk4NywwLDIxLjcwMi05LjcxNiwyMS43MDItMjEuNzAyICAgIGMwLTQuOTc4LTEuNjkyLTkuNTQ4LTQuNTEzLTEzLjIxMWMwLjAyOC0wLjE5NiwwLjAwNS0wLjQxNiwwLjA3Ni0wLjU4M2wzLjExMy03LjI0OGMwLjA1Ny0wLjEzNSwwLjE0OC0wLjIzOSwwLjIzOS0wLjM1ICAgIGM5Ljg4NywzLjA0NiwyMS4xOTUsNC44NDQsMzQuMTgxLDQuODQ0YzE2LjIzNywwLDI5LjkzMS0yLjU3Miw0MS40ODYtNi44MjNsMy45MzYsOS4xNjFjMC4yODIsMC42NiwwLjE5MSwxLjU3OC0wLjA4MSwyLjMgICAgYy0yLjI1MiwzLjQxOS0zLjU3Miw3LjUxMi0zLjU3MiwxMS45MWMwLDExLjk4Niw5LjcxNiwyMS43MDIsMjEuNzAyLDIxLjcwMnMyMS43MDItOS43MTYsMjEuNzAyLTIxLjcwMiAgICBjMC05LjIwNC01LjczNy0xNy4wNS0xMy44MjctMjAuMjA2Yy0yLjU0OS0xLjE1Mi01LjM2NC0xLjgwNy04LjM0NC0xLjgwN2MtMC4wNTIsMC0wLjExNCwwLTAuMTY3LDAuMDA1ICAgIGMtMC4wOTYsMC0wLjQzNi0wLjYxNy0wLjc2NS0xLjM4N2wtMy41NjItOC4zMDFDMzczLjkwNSwzNjYuNjM1LDM4My4xMjgsMzM0LjAyNiwzODMuMTI4LDMxNy40NHoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCQk8cGF0aCBkPSJNNTUwLjIxNCw0MDQuOTk0YzkuOTExLDAsMTEuNDctNC45ODYsOS41NzYtOS4yMTNjLTAuNDg3LTEuMDktMzQuNjY0LTc2LjU0OC0zNS4yMzItNzcuNzMzICAgIGMtMC41Ni0xLjE2Ny0xLjU4My00LjI4NC03LjI4Ny00LjI4NGMtMy42NjcsMC02Ljc0MSwyLjI4LTcuNjM2LDUuNjM3Yy0wLjI0MywwLjkwOC0xLjAxNCwxLjY3OS0xLjk1LDEuNjc5aC0yNC42MzggICAgYy0wLjkzOCwwLTIuMTU2LTAuNjEyLTIuNzMtMS4zNDljLTAuMjM0LTAuMjk3LTEuMzE5LTQuOTUzLTUuOTg2LTQuOTUzYzAsMC0xMi4yOTIsMC0xMy43MzEsMGMtNS44NTMsMC04Ljg0NiwyLjAyNy0xMC4xNjUsNy44MTIgICAgbC0xNC40MjUsNDguOTE3Yy0wLjI0NCwwLjkwOC0xLjE0NywxLjUwNi0yLjA4NSwxLjQzNWMwLDAtOC40NjgsMC0xMC4wNCwwYy01LjQ1NiwwLTkuNjk2LDMuOTMtOS42OTYsOS4zODUgICAgYzAsMC4zNTktMS4wMjgsMTUuNjIxLTEuMDM4LDE5LjQzN2MwLDAuOTM3LTAuMjgyLDIuNDA5LTAuNTYsMy4zMDljLTAuNzU1LDIuNDQ4LTEuMTY2LDUuMDQ5LTEuMTY2LDcuNzQ1ICAgIGMwLDE0LjUyMSwxMS43NzEsMjYuMjkyLDI2LjI5MiwyNi4yOTJzMjYuMjkyLTEyLjEzLDI2LjI5Mi0yNi42NWMwLTIuMjI0LTAuMjc3LTMuOTczLTAuNzk5LTYuNDMxICAgIGMtMC4xOTYtMC45MTgsMC4zMjUtMS42NTksMS4xNzctMS42NTljMC44NTEsMCwxLjg1OSwwLjY4OCwyLjI2MSwxLjUzNWMwLDAsMTEuMDY5LDIzLjUzOCwxMS4wNzksMjMuNTgxICAgIGMwLjAwOSwwLjA0MywwLjQxMSwwLjczNiwxLjA0NywxLjQzYzEuNjk3LDEuODU0LDQuMTExLDMuMDE3LDYuNzk5LDMuMDE3YzUuMTI1LDAsOS4yOC00LjA2LDkuMjgtOS4xODUgICAgYzAtMC40NTQtMC4wMzMtMC44Ny0wLjEwMS0xLjI4MWMtMC4xMDktMC43MDMtNy44NTEtMTcuNTYyLTcuODUxLTE3LjU2MmMtMC40MDEtMC44NDcsMC4wMjgtMS41MzUsMC45NzEtMS41MzVoMTIuMjkyICAgIGMwLjkzOCwwLDEuNTQ1LDAuNzQ2LDEuMzU0LDEuNjY0Yy0wLjQ4MiwyLjM1My0wLjc0MSwzLjg0NC0wLjc0MSw1LjkwOWMwLDEzLjQ3OSwxMC45MjUsMjQuNTgxLDI0LjM5OCwyNC41ODEgICAgczI0LjM5OS0xMC44MzUsMjQuMzk5LTI0LjMwOWMwLTEuODY5LTAuMjExLTMuNjY3LTAuNjEyLTUuNDAyQzU0OC43NTEsNDA1Ljg4OSw1NDkuMjc2LDQwNC45OTQsNTUwLjIxNCw0MDQuOTk0eiAgICAgTTUxOC4yOTQsMzQ4LjMxMmMtMjAuMTI0LDAtMzMuNjkzLDI1Ljc5LTQzLjM1NiwyNS43OWMwLDAtMi4wNDEsMC4xMDUtMi44My0wLjAzM2MtMC43ODktMC4xNDQtMS4xODctMC45NzYtMC45MjgtMS44NzkgICAgbDkuNzk3LTMzLjMxMmMwLjI0OC0wLjkwMywxLjE4MS0xLjY0NSwyLjExOC0xLjY0NWgzMS40NjVjMC45MzgsMCwxLjkyMiwwLjU0NSwyLjE5NSwxLjIybDAuNDk3LDEuMjE5bDIuMjA0LDYuNzk5ICAgIEM1MTkuNzQzLDM0Ny4zNTYsNTE5LjIwNywzNDguMDk4LDUxOC4yOTQsMzQ4LjMxMnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGQjIyOSIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCQk8Y2lyY2xlIGN4PSI0NjkuMDQ3IiBjeT0iMjg2LjI2NyIgcj0iMjMuMDMxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkIyMjkiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L2NpcmNsZT4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+">
                    </div>
                    <div class="description">
                        <h2>201816</h2>
                        <p>DONATE</p>
                    </div>
                </div>
                <!-- INFO DONATION -->

            </article>
        </div>

    </section>
    <!-- END INFO DONATES -->

    <!-- DONATION NEW PAY  -->
    <section class="section-donation-new">
        <div class="bax-header">
            <h1>DOAR <small>AGORA</small></h1>
            <p>Um minuto para doar, uma vida de mudanças.</p>
        </div>
        <!-- ARTICLE DONATION NEW PAY  -->
        <article class="article-donation-new">
            <!-- DONATION NEW  -->
            <div class="donation-new">
                <div class="type-donation">
                    <h2>DOAR</h2>
                </div>
                <div class="value-donation">
                    <p><span class="cifrao">R$</span> 25,00<br />
                        <span>Mensal</span></p>
                </div>
                <div class="btn-donation-new">
                    <a href="">DOAR</a>
                </div>
            </div>
            <!-- DONATION NEW  -->

            <!-- DONATION NEW  -->
            <div class="donation-new">
                <div class="type-donation">
                    <h2>DOAR</h2>
                </div>
                <div class="value-donation">
                    <p><span class="cifrao">R$</span> 50,00<br />
                        <span>Mensal</span></p>
                </div>
                <div class="btn-donation-new">
                    <a href="">DOAR</a>
                </div>
            </div>
            <!-- DONATION NEW  -->

            <!-- DONATION NEW  -->
            <div class="donation-new">
                <div class="type-donation">
                    <h2>DOAR</h2>
                </div>
                <div class="value-donation">
                    <p><span class="cifrao">R$</span> 100,00<br />
                        <span>Mensal</span></p>
                </div>
                <div class="btn-donation-new">
                    <a href="">DOAR</a>
                </div>
            </div>
            <!-- DONATION NEW  -->

            <!-- DONATION NEW  -->
            <div class="donation-new">
                <div class="type-donation">
                    <h2>DOAR</h2>
                </div>
                <div class="value-donation">
                    <p><span class="cifrao">R$</span> 200,00<br />
                        <span>Mensal</span></p>
                </div>
                <div class="btn-donation-new">
                    <a href="">DOAR</a>
                </div>
            </div>
            <!-- DONATION NEW  -->
        </article>
        <!-- END ARTICLE DONATION NEW PAY  -->
    </section>
    <!-- END DONATION NEW PAY -->

    <!-- BX GALERY -->
<!--    <section class="section-gallery">-->
<!--        <div class="bax-header">-->
<!--            <h1>NOSSA <small>GALERIA</small></h1>-->
<!--        </div>-->

<!--        <article class="artc-gallery">-->
<!--            <div class="box-gallery">-->
<!--                <div class="box-buttomFilter">-->
<!--                    <ul class="buttomFilter">-->
<!--                        <li>-->
<!--                            <button class="btn_item ct_active" window="markeOne">-->
<!--                                CRIANÇAS-->
<!--                            </button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button class="btn_item" window="markeTwo">-->
<!--                                JOVENS-->
<!--                            </button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button class="btn_item" window="markeThree">-->
<!--                                ADUTOS-->
<!--                            </button>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="window item_ gallery" window="markeOne">-->
<!--                    <div class="box-item">-->
<!--                        <div class="item-window one">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window two">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window three">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window four">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window five">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window six">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window seven">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window eight">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="window item_ hidden-window" window="markeTwo">-->
<!--                    <div class="box-item gallery">-->
<!--                        <div class="item-window one">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window two">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window three">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window four">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window five">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window six">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window seven">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window eight">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window one">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="item-window nine">-->
<!--                            <a class="image-link" href="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" title="Academia fitOne">-->
<!--                                <img src="--><?//= INCLUDE_PATH; ?><!--/assets/image/cases3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->

<!--    </section>-->
    <!-- END BX GALERY -->

    <!-- BLOG -->
    <section class="section-blog">
        <div class="bax-header">
            <h1>ÚLTIMAS DO <small>BLOG</small></h1>
        </div>
        <!-- ARTICLE BLOG -->
        <article class="article-blog">
            <div class="bx-post">
                <?php
                $category = 1;//BLOG
                $ative = 1;//ATIVO

                $listP = $postController->allStatusCategory($ative,$category,0,3);
                if($listP == null):
                    echo "Não existem posts no momento";
                else:
                    foreach ($listP as $post):
                        ?>
                        <!-- POST -->
                        <div class="post">
                            <div class="thumb-post">
                                <a href="<?= HOME; ?>/artigo/<?= $post->url; ?>">
                                    <img src="./upload/<?= $post->thumb; ?>" alt="" srcset="">
                                </a>
                            </div>
                            <div class="description">
                                <div class="day">
                                    <?php
                                        $data = $helper->converteData($post->data);
                                        $d = explode("/", $data);

                                    ?>
                                    <h3><?= $d[0] ?><br>
                                        <p><?= $helper->pegarMes($d[1]); ?></p>
                                    </h3>
                                </div>
                                <div class="description-post">
                                    <h2><a href="<?= HOME; ?>/artigo/<?= $post->url; ?>"><?= $post->title; ?></a></h2>
                                    <p>
                                        <?= $helper->limitarTexto($post->resume, 50);
                                            //$texto = html_entity_decode($post->resume);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- END POST -->
                        <?php
                    endforeach;
                endif;
                ?>

            </div>
        </article>
        <!-- END ARTICLE BLOG -->
    </section>
    <!-- END BLOG -->

    <!-- OUR PARTNERS -->
    <section class="section-our-partners">
        <div class="bax-header">
            <h1>NOSSOS <small>PARCEIROS</small></h1>
        </div>

        <!-- ARTICLE OUR PARTNERS -->
        <article class="article-our-partners">
            <!-- BX OUR PARTNERS -->
            <div class="bx-our-partners owl-carousel owl-theme">
                <?php
                $listaS = $brandController->allStatus(1,0,30);
                if($listaS == null):
                    echo "Não existem posts no momento";
                else:

                    foreach ($listaS as $brand):
                        ?>
                        <!-- OUR PARTNERS -->
                        <div class="item our-partners">
                            <div class="thumb-our-partners">
                                <img src="./upload/<?= $brand->thumb; ?>" alt="">
                            </div>
                        </div>
                        <!-- OUR PARTNERS -->
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <!-- END BX OUR PARTNERS -->
        </article>
        <!-- END ARTICLE OUR PARTNERS -->
    </section>
    <!-- END OUR PARTNERS -->

    <!-- HELP US -->
    <section class="section-help-us">
        <!-- BOX HELP US -->
        <div class="help-us">
            <h1>
                Ajude-nos a Construir a Nossa Creche e tornar esse sonho<br>
                realidade?
            </h1>
            <p>Assim estarão auxiliando as mães e nossas crianças carente do Sol Nascente</p>
        </div>
        <!-- END BOX HELP US -->

        <!-- BTN READER MORE -->
        <div class="bx-btn-reader-more">
            <a href="" class="btn-reader-more">Saiba Mais</a>
        </div>
        <!-- END BTN READER MORE -->
    </section>
    <!-- END HELP US -->

    <!-- NEWSLETTER -->
    <div class="bx-newsletter">
        <!-- NEWSLETTER -->
        <div class="newsletter">
            <!-- HEADER NEWSLETTER -->
            <div class="header-newsletter">
                <h2>Gostaria de <strong>receber novidades?</strong></h2>
            </div>
            <!-- END HEADER NEWSLETTER -->

            <form action="">
                <div class="row">
                    <input type="text" name="" id="" placeholder="Informe seu nome">
                </div>

                <div class="row">
                    <input type="text" name="" id="" placeholder="Informe seu e-mail">
                </div>

                <div class="btn-row">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
        <!-- NEWSLETTER -->
    </div>
    <!-- END NEWSLETTER -->

</main>