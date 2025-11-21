
<div class="header-search-form-wrapper">
    <div class="cart-search-contact">
        <button class="search-toggle-btn"><i
                class="fi flaticon-magnifiying-glass"></i></button>
        <div class="header-search-form">
            <form action="/" method="get">
                <div>
                    <input type="text" name="s"  id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="<?php echo esc_attr__('Search here...', 'sbtech')?>">
                    <button type="submit"><i
                            class="fi flaticon-magnifiying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>