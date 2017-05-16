<?php
get_header();
?>
    <section id="page-404" class="page-404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">

                    <h2 class="alert-danger"><strong> 404 Page not found</strong></h2>
                    <div class="widget widget_search inline-block">
                        <form role="search" method="get" class="searchform form-inline" action="<?php echo home_url( '/' ); ?>">
                            <div class="form-group">
                                <label for="search">Search</label>
                                <input type="text" value="" name="s" id="search" class="form-control"
                                       placeholder="Search...">
                            </div>
                            <button type="submit" class="btn-default">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>