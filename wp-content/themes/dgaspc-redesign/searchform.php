<!-- SEARCH HTML FORM -->
<form role="search" method="get" class="search-form w-100" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group shadow-sm rounded-pill overflow-hidden border">
        <input type="search" 
               class="form-control border-0 ps-3 py-2 bg-light small" 
               placeholder="Caută în site (ex: adopție, cerere, handicap)..." 
               value="<?php echo get_search_query(); ?>" 
               name="s" 
               aria-label="Căutare">
        <button class="btn btn-primary border-0 px-4 py-2 d-flex align-items-center justify-content-center" type="submit" aria-label="Caută">
            <i class="bi bi-search"></i>
        </button>
    </div>
</form>