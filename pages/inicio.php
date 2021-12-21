<?php 
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<div class="banner">
        <div>
            <h1>Web Designer</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque dolore cumque, voluptatibus tempora
                natus ea nobis? Ex, similique harum error beatae explicabo aliquam libero, provident nihil, dolores ab
                pariatur doloremque.</p>
        </div>
        <div></div>
        <div>
            <h1 class="heading-developer">
                &lt;Web Developer&gt;
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque dolore cumque, voluptatibus tempora
                natus ea nobis? Ex, similique harum error beatae explicabo aliquam libero, provident nihil, dolores ab
                pariatur doloremque.</p>
        </div>
    </div>
    <div class="contenedor-proyecto">
        <h1><i class="fas fa-hammer"></i>Mis ultimos trabajos</h1>
        <div class="ultimos-trabajos">
            <div class="work-item">
                <img src="<?= APP_URL ?>assets/img/web_imagen.jpg" alt="texto alternativo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident fuga molestias quasi ut deserunt, ad optio nesciunt aliquid, eveniet eaque vitae tempore reprehenderit minima necessitatibus quas consectetur incidunt, ducimus doloribus!
                </p>
                <a class="btn btn-oscuro" href="">
                    <i class="fas fa-eye"></i>
                    ver proyecto
                </a>
            </div>
            <div class="work-item">
                <img src="<?= APP_URL ?>assets/img/web_imagen.jpg" alt="texto alternativo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident fuga molestias quasi ut deserunt, ad optio nesciunt aliquid, eveniet eaque vitae tempore reprehenderit minima necessitatibus quas consectetur incidunt, ducimus doloribus!
                </p>
                <a class="btn btn-oscuro" href="">
                    <i class="fas fa-eye"></i>
                    ver proyecto
                </a>
            </div>
            <div class="work-item">
                <img src="<?= APP_URL ?>assets/img/web_imagen.jpg" alt="texto alternativo">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident fuga molestias quasi ut deserunt, ad optio nesciunt aliquid, eveniet eaque vitae tempore reprehenderit minima necessitatibus quas consectetur incidunt, ducimus doloribus!
                </p>
                <a class="btn btn-oscuro" href="">
                    <i class="fas fa-eye"></i>
                    ver proyecto
                </a>
            </div>
        </div>
    </div>
    <?php
    require_once('../components/public_footer.php');
     ?>