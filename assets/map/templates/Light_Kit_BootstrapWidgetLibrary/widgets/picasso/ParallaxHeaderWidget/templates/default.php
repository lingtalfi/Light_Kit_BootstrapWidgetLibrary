<?php


/**
 * @var $this PicassoWidget
 */

use Ling\Kit_PicassoWidget\Widget\PicassoWidget;

$backgroundUrl = $z['background_url'] ?? "";
$backgroundHeight = $z['background_height'] ?? "200px";
$overlayColor = $z['overlay_color'] ?? "rgba(0,0,0,0.7)";
$title = $z['title'] ?? "";
$text = $z['text'] ?? "";
$textVisibleSize = $z['text_visible_size'] ?? "md";


?>


<section class="kit-bwl-parallax_header <?php echo htmlspecialchars($this->getCssClass()); ?>"
         style="background-image: url(<?php echo htmlspecialchars($backgroundUrl) ?>); min-height: <?php echo htmlspecialchars($backgroundHeight); ?>"
    <?php echo $this->getAttributesHtml(); ?>
>
    <div class="dark-overlay" style="background: <?php echo htmlspecialchars($overlayColor); ?>">
        <div class="row">
            <div class="col">
                <div class="container pt-5">
                    <?php if ('' !== $title): ?>
                        <h1><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ('' !== $text): ?>
                        <p class="d-none d-<?php echo htmlspecialchars($textVisibleSize); ?>-block"><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>