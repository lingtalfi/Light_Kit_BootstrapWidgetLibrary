<?php


/**
 * @var $this PicassoWidget
 */


use Ling\Kit_PicassoWidget\Widget\PicassoWidget;

$title = $z['title'] ?? "";
$text = $z['text'] ?? "";
$column_class = $z['column_class'] ?? "col-md-4";
$nb_photos_per_row = $z['nb_photos_per_row'] ?? "3";

// doesn't do anything, ekko problem???
//$photo_height = $z['photo_height'] ?? 560;
//$photo_width = $z['photo_width'] ?? 560;
$photos = $z['photos'] ?? [];


$cpt = 0;


?>

<section class="kit-bwl-photo_gallery <?php echo htmlspecialchars($this->getCssClass()); ?>"
    <?php echo $this->getAttributesHtml(); ?>
>
    <div class="container">
        <?php if ('' !== $title): ?>
            <h1 class="text-center"><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if ('' != $text): ?>
            <p class="text-center"><?php echo $text; ?></p>
        <?php endif; ?>
        <div class="row mb-4">

            <?php foreach ($photos

            as $photo):
            $cpt++;
            ?>
            <div class="<?php echo htmlspecialchars($column_class); ?>">
                <a href="<?php echo htmlspecialchars($photo['url']); ?>" data-toggle="lightbox"
                   data-gallery="img-gallery"
                >
                    <img src="<?php echo htmlspecialchars($photo['url']); ?>"
                         alt="<?php echo htmlspecialchars($photo['alt']); ?>" class="img-fluid">
                </a>
            </div>

            <?php if ($nb_photos_per_row === $cpt):
            $cpt = 0; ?>
        </div>
        <div class="row mb-4">
            <?php endif; ?>


            <?php endforeach; ?>
        </div>
    </div>
</section>