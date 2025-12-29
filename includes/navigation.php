<?php
$current = getCurrentSlide();
$prev = getPrevSlide($current);
$next = getNextSlide($current);
?>

<div class="slide-number" onclick="toggleNavModal()">
    <span><?php echo str_pad($current, 2, '0', STR_PAD_LEFT); ?> / <?php echo TOTAL_SLIDES; ?></span>
</div>

<a href="/logout.php" class="logout-btn" title="Logout">
    <span class="material-symbols-rounded">logout</span>
    <span class="logout-tooltip">Logout</span>
</a>

<div class="nav-modal" id="navModal">
    <div class="nav-list">
        <?php 
        global $slide_titles;
        for($i = 0; $i <= TOTAL_SLIDES; $i++): 
        ?>
            <div class="nav-list-item<?php echo $current === $i ? ' current' : ''; ?>" onclick="goToSlide(<?php echo $i; ?>)">
                <div class="nav-item-number"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                <div class="nav-item-title"><?php echo $slide_titles[$i] ?? 'Slide ' . $i; ?></div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="nav-footer">
        <small style="display: block; color: #666;">
            Session: <?php echo getSessionTimeRemaining(); ?> min
        </small>
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
