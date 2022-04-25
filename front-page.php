
<?php
    get_header(); // dynamicly load the header file
    ?>  
  
		<article class="content px-3 py-5 p-md-5">
	    
        <!-- the loop 
dinamicly queries the database and fine which rows corresponds to the page we one.
Pull the information and displays it in that section below
-->
       
        <?php
            if(have_posts() ){ //if post exists then execute
                while(have_posts()){ // while we have posts then execute every single time as long there is a posts.
                    the_post(); //calls the post and wordpress query the database and fect out a single post.
                    the_content(); //grabs the content
                    
                }
            } 
        ?>


	    </article>
	    
<?php
    get_footer(); // dynamicly load the footer file
    ?> 
    
 