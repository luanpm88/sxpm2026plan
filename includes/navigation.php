<?php
$current = getCurrentSlide();
$prev = getPrevSlide($current);
$next = getNextSlide($current);
?>

<div class="slide-number" onclick="toggleNavModal()"><?php echo str_pad($current, 2, '0', STR_PAD_LEFT); ?> / <?php echo TOTAL_SLIDES; ?></div>

<div class="nav-modal" id="navModal">
    <div class="nav-grid">
        <div class="nav-item<?php echo $current === 0 ? ' current' : ''; ?>" onclick="goToSlide(0)">Bìa</div>
        <?php for($i = 1; $i <= TOTAL_SLIDES; $i++): ?>
            <div class="nav-item<?php echo $current === $i ? ' current' : ''; ?>" onclick="goToSlide(<?php echo $i; ?>)"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
        <?php endfor; ?>
    </div>
</div>

<div class="navigation">
    <button class="nav-btn" onclick="previousSlide()" <?php echo $prev ? '' : 'disabled'; ?>>
        <span class="material-symbols-rounded">arrow_back</span>
    </button>
    <button class="nav-btn" onclick="nextSlide()" <?php echo $next ? '' : 'disabled'; ?>>
        <span class="material-symbols-rounded">arrow_forward</span>
    </button>
</div>
