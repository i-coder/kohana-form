
<textarea placeholder="<?php echo ucfirst(str_replace("_", " ", $name)); ?>" name="<?php echo $name ?>" class="<?php echo implode(" ", $css_classes) ?>" id="<?php echo $name . $formset_index ?>" cols="30"
          rows="10"><?php echo $value ?></textarea>