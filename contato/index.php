<?php
include("../config.php");
include("../header.php"); 
?>

<!-- conteudo 
================================================== -->

    <div class="contenidum contato">
        <h2>Contato</h2>
        <p>
            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
        </p>
        <div class="clearfix rowMapForm">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3392.2050816201104!2d-52.354563!3d-31.764891999999964!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511b583c0df5ae9%3A0x1996a6cf7ac7b836!2sPra%C3%A7a+Vinte+de+Setembro%2C+748+-+Sim%C3%B5es+Lopes!5e0!3m2!1spt-BR!2s!4v1394527695613" width="428" height="374" frameborder="0" style="border:0"></iframe>
            </div>
            <div id="TheForm">
                <form>
                    <input type="text" placeholder="Nome" name="UserName"/>
                    <input type="email" placeholder="Email" name="UserEmail"/>
                    <input type="text" placeholder="Telefone" name="UserPhone"/>
                    <span class="select">
                        <select name="assunto">
                            <option>Assunto</option>
                            <option>Assunto1</option>
                            <option>Assunto2</option>
                            <option>Assunto3</option>
                        </select>
                    </span>
                    <span class="select">
                        <select name="comoChegou">
                            <option>Como chegou até nós?</option>
                            <option>Option1</option>
                            <option>Option2</option>
                            <option>Option3</option>
                        </select>
                    </span>
                    <textarea placeholder="Mensagem"></textarea>
                    <span id="boxInputs">
                        <button type="reset">Limpar</button>
                        <button type="submit">Enviar</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
    

<?php include("../footer.php"); ?>