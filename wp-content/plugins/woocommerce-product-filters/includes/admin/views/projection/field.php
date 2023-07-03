<div class="sort-item projection field-projection" data-entity-id="{{data.entity.entityId}}">
	<div class="left-position">
		<div class="title-container">
			<span class="entity-title">{{data.entity.title}}</span>
			<span class="type-title"><?php echo esc_html( $title ); ?></span>
		</div>
	</div>
	<div class="right-position">
		<div class="actions-wrapper">
			<div class="button-link edit-action">
				<span class="text"><?php echo esc_html__( 'Edit', 'woocommerce-product-filters' ); ?></span>
			</div>
			<div class="button-link remove-action">
				<span class="text"><?php echo esc_html__( 'Remove', 'woocommerce-product-filters' ); ?></span>
			</div>
		</div>
	</div>
</div>
