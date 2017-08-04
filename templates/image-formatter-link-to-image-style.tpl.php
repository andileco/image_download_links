<?php

/**
 * @file
 * Image formatter link to image style template.
 *
 * Variables available:
 * - $variables
 *
 **/

?>

<a href="<?php print($variables['image_link']) ?>" target="_blank">
    <img class="file-icon" alt="" title="application/pdf"
         src="/modules/file/icons/image-x-generic.png"/>
    <span>Download</span>
</a> (<?php print(image_formatter_link_to_image_style_filesize_formatted($variables['path'])) ?>)






