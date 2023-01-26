<?php
/**
 * @var array $args
 */

if (!defined('ABSPATH')) exit;

$project_count = 8;
?>

<!-- Gutenberg block projects -->
<div class="projects">
    <div class="row g-0 justify-content-between" id="posts" data-projects="<?php echo json_encode($args['ids']); ?>">
        <?php
        $i = 0;
        foreach($args['projects'] as $project => $item) :
            $i++;
            ?>
            <div class="col-100 col-md-40 col-lg-auto col-lg-<?php echo in_array($i % 4, [2, 3]) ? 6 : 4; ?>">
                <div class="animate">
                    <div class="projects-item h3 <?php echo $i % 2 == 0 ? 'ms-auto' : ''; ?>">
                        <a href="<?php echo esc_url($item['url']); ?>">
                            <figure>
                                <?php echo $item['thumb']; ?>
                            </figure>
                            <span>
                                <?php echo esc_html($project); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            if ($i >= $project_count) break;
        endforeach;
        ?>
    </div>
</div>
<!-- // Gutenberg block projects -->
