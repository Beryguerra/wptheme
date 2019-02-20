<!--para uma single blog post-->

<?php get_header();?><!--chama para a frontpage o header.php-->

<!--******************************************************************************-->

<!--  inserir o conteudo da page  -->
    <div class="container pt-5 pb-5"><!-- da o padding top e padding bottom-->
    
        <h1> <?php the_title();?></h1><!--insere o titulo da pagina: HOME neste caso pois foi a k definimos como mainpage-->
        
        <?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo da page-->

            <?php the_content();?><!--conteudo-->

        <?php endwhile; endif;?><!--fim do loop para mostrar conteudo-->
    </div>
    

<?php get_footer();?><!--chama para a frontpage o footer.php-->