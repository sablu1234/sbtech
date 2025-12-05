<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
   <div>
      <input type="text" value="<?php echo get_search_query();?>" name="<?php echo esc_attr('s','sbtech')?>" class="<?php echo esc_attr('form-control','sbtech')?>" placeholder="<?php echo esc_html__('Search Post..','sbtech')?>">
      <button type="<?php echo esc_attr('submit','sbtech')?>"><i class="<?php echo esc_attr('ti-search','sbtech')?>"></i></button>
   </div>
</form>