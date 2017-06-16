<div class="header-middle isof-wc__middle">
	<div class="container">
		<div class="row">
			<div class="col-md-2" id="isof-wc__header-logo">
				<?php if( function_exists( 'emallshop_header_logo' ) ) {
					emallshop_header_logo();
				}?>
			</div>
			<div class="col-md-4" id="isof-wc__header-search">
				<?php if( function_exists( 'emallshop_products_live_search_form' ) ) {
					emallshop_products_live_search_form();
				}?>
			</div>
			<div class="col-md-1">
			</div>
			<div class="isof-wc__telefono col-md-3" id="isof-wc__header-telefono">
				<div class="col-md-12">
					<span>Llámanos en Colombia</span>
				</div>
				<div class="isof-wc__telefono__numeros col-md-12">
					<?php
					emallshop_customer_support();
					?>
				</div>
			</div>               
			<div class="col-sm-6 col-md-2" id="isof-wc__header-botones">
				<div class="header-right">
					<?php if( function_exists( 'emallshop_wishlist' ) ) {
						emallshop_wishlist();
					}
					if( function_exists( 'emallshop_campare' ) ) {
						emallshop_campare();
					}
					if( function_exists( 'emallshop_header_cart' ) ) {
						emallshop_header_cart();
					}?>
					<span class="isof__wc__my-acount">
					<?php
						if( function_exists( 'emallshop_myaccount' ) ) {
							emallshop_myaccount();
						}
					?>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header-navigation isof-wc__header-navigation">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-5 col-md-3">
				<?php if( function_exists( 'emallshop_category_menu' ) ) {
					emallshop_category_menu();
				}?>
			</div>
			<div class="col-xs-6 col-sm-7 col-md-9">
				<?php if( function_exists( 'emallshop_header_menu' ) ) {
					emallshop_header_menu();
				}?>				
			</div>			
		</div>
	</div>
</div>