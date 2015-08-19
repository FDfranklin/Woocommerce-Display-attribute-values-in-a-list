# Woocommerce - Display attribute values in a list
By default Woocommerce will display your attribute values in the additional information tab within a p tag separated by commas, this will put it in a list.

    <?php

    $subheadingvalues = get_the_terms( $product->id, 'pa_attribute');
    
    if ($subheadingvalues): ?>
    <ul>
    	<?php foreach ( $subheadingvalues as $subheadingvalue ): ?>
    		<li>
    			<?php echo $subheadingvalue->name; ?>
    		</li>
    	<?php endforeach; ?>
    </ul>
    
    <?php endif; ?>

Add the above to your template.

Edit 'pa_attribute' with the name of your attribute slug.

Example: My attribute slug is named "Chemicals" so it will look like this:

    <?php

    $subheadingvalues = get_the_terms( $product->id, 'pa_chemicals');
    
    if ($subheadingvalues): ?>
    <ul class="chem-att">
    	<?php foreach ( $subheadingvalues as $subheadingvalue ): ?>
    		<li>
    			<?php echo $subheadingvalue->name; ?>
    		</li>
    	<?php endforeach; ?>
    </ul>
    
    <?php endif; ?>

The output code will looks like this:

    <ul class="chem-att">
    	<li>
    		Chlorofluorocarbons (CFC)
    	</li>
    	<li>
    		Fluorochlorocarbons
    	</li>
    </ul>

Pretty simple but some of you  may need the code output a different way instead of all the attribute values listed in one line spererated by commas.
