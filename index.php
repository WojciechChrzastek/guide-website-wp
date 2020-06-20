<?php
/**
 * The main template file for guide theme.
 */

get_header();
?>

    <section id="top" class="container-fluid">
        <div class="background-image" style="background-image: url('img/malaga-panoramic.jpg');"></div>
        <h1>Welcome to Malaga!!</h1>
        <p>
            Snow topgallant nipperkin scuttle mizzenmast jib cog Spanish Main pressgang salmagundi trysail bilge water.<br> Handsomely snow knave? Capstan Yellow Jack weigh anchor!
        </p>
        <div class="scroll-icon d-none d-xl-block d-lg-block d-md-block">
            <span class="scroll-icon-dot"></span>
        </div>
    </section>

    <section id="section" class="container-fluid">
   
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?> 
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?> 

    </section>

    <section id="contact" class="container-fluid">
        <h2>Contact</h2>
        <form class="col-sm-4" id="contact-form">
            <p>
                Feel free to use the form below to contact me.
                <br>
                Fields marked with an * are required
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">Name*</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                     required pattern="[A-z0-9À-ž\s]{2,50}" minlength="2" maxlength="50"
                     title="Name should be 2 to 50 alphanumeric chacacters long.">
                </div>
                <div class="col-sm-6">
                    <label for="email">Email address*</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                     required minlength="6" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                     title="Please enter valid email address.">
                    <small class="form-text text-muted">Your email will not be shared with anyone.</small>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message*</label>
                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter message"
                 required></textarea>
            </div>

            <!-- Super-simple honeypot antispam -->
            <input type="hidden" name="honey">
            <!-- Super-simple honeypot antispam -->

            <div id="msg"></div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

<?php
get_footer();