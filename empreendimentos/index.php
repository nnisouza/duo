<?php
include("../config.php");
include("../header.php"); 
?>

<!-- conteudo 
================================================== -->

    <div class="contenidum empreendimentos">
        <h2>
            Empreendimentos
        </h2>
        <div class="empTop">
            <div class="mainImage">
                <img src="<?php echo THEME_URL; ?>assets/img/major1.jpg"/>
            </div>
            <div class="mainImageDescription">
                <h3>lançamento</h3>
                <h4>duo neto 352 </h4>
                <p>
                    Com arquitetura característica, o DUO Neto 352 é projetado em lofts amplos trazendo um conceito inovador que reflete a versatilidade com que lidamos no dia-a-dia. <br/>
Compreendendo a possibilidade de diversas concepções de ambiente, torna-se o seu espaço: construído para adaptar-se a você e não o contrário.
                </p>
                <a href="#">
                    Saiba mais sobre o DUO Neto 352 &gt;
                </a>
            </div>
        </div>
        <div class="empGallery">
            <ul>
                <li class="active" data-image="../assets/img/major1.jpg">
                    <span></span>
                    <img src="<?php echo THEME_URL; ?>assets/img/emp1.jpg"/>
                </li>
                <li data-image="../assets/img/major2.jpg">
                    <span></span>
                    <img src="<?php echo THEME_URL; ?>assets/img/emp2.jpg"/>
                </li>
                <li data-image="../assets/img/major.jpg">
                    <span></span>
                    <img src="<?php echo THEME_URL; ?>assets/img/emp3.jpg"/>
                </li>
                <li data-image="../assets/img/major4.jpg">
                    <span></span>
                    <img src="<?php echo THEME_URL; ?>assets/img/emp4.jpg"/>
                </li>
            </ul>
        </div>
        <div class="another">
            <h3>
                conheça outros empreendimentos duo lifestyle
            </h3>
            <div class="empUnderGallery clearfix">
                <ul>
                    <li>
                        <img src="<?php echo THEME_URL; ?>assets/img/empU1.jpg"/>
                        <div id="amarelo">
                            <h4>duo neto 527</h4>
                            <p>
                                This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo THEME_URL; ?>assets/img/empU1.jpg"/>
                        <div id="roxo">
                            <h4>duo neto 527</h4>
                            <p>
                                This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo THEME_URL; ?>assets/img/empU1.jpg"/>
                        <div id="verde">
                            <h4>duo neto 527</h4>
                            <p>
                                This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    

<?php include("../footer.php"); ?>