<?php
/**
 * @var array $args
 */

if (!defined('ABSPATH')) exit;

?>

<div class="row g-0">
    <?php
        $i = 0; foreach ($args['industries'] as $name => $item) : $i++;
    ?>
    <div class="col-12 col-lg-3 <?php echo $i == 1 || $i % 4 == 1 ? '' : 'offset-lg-3'; ?>">
        <div class="animate industries-item h4 text-center text-md-start">
            <a href="<?php echo $item['url'];?>">
                <figure>
                    <?php echo file_get_contents($item['thumb']); ?>
                </figure>
                <hr class="d-none d-lg-block">
                <span><?php echo $name; ?></span>
                <div class="d-none d-md-block d-lg-none">
                    <svg>
                        <use xlink:href="#arrow-short"></use>
                    </svg>
                </div>
            </a>
        </div>
        <?php if ($i !== count($args['industries'])) : ?>
            <hr class="d-lg-none">
        <?php endif; ?>
    </div>
    <?php
        endforeach;
    ?>
</div>
