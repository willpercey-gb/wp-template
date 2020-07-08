
<div>
    <div class="">
       <div class="container">
           <div class="row">
               <div class="col-sm-12">
                    Footer details going here    
               </div>
           </div>
       </div>
    </div>
</div>


<footer>
    <?php the_field('footer_details', 'options'); ?>
</footer>


<?php wp_footer(); ?>

<script>
    document.addEventListener(
        "DOMContentLoaded", () => {
            new Mmenu( "#mobMenu" );
        }
    );
</script>
</body>
</html>