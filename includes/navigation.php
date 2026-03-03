<?php
$current = getCurrentSlide();
$currentId = getCurrentSlideId();
$prev = getPrevSlide($current);
$next = getNextSlide($current);
$presentationOrder = getPresentationOrder();
$currentOrder = array_search($currentId, $presentationOrder, true);
$displayIndex = $currentOrder === false ? 1 : $currentOrder + 1;
$displayTotal = count($presentationOrder);
?>

<div class="slide-number" onclick="toggleNavModal()">
    <span><?php echo str_pad($displayIndex, 2, '0', STR_PAD_LEFT); ?> / <?php echo $displayTotal; ?></span>
</div>

<a href="/logout.php" class="logout-btn" title="Logout">
    <span class="material-symbols-rounded">logout</span>
    <span class="logout-tooltip">Logout</span>
</a>

<div class="nav-modal" id="navModal">
    <div class="nav-list">
        <?php 
        global $slide_titles;
        $orderIndex = 0;
        foreach($presentationOrder as $slideId): 
            $orderIndex++;
        ?>
            <div class="nav-list-item<?php echo $currentId === $slideId ? ' current' : ''; ?>" onclick="goToSlide('<?php echo $slideId; ?>')">
                <div class="nav-item-number"><?php echo str_pad((string)$orderIndex, 2, '0', STR_PAD_LEFT); ?></div>
                <div class="nav-item-title"><?php echo $slide_titles[$slideId] ?? $slideId; ?></div>
            </div>
        <?php endforeach; ?>
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
    <button class="nav-btn" onclick="openWorkshopScript()" title="Open Script Guide">
        <span class="material-symbols-rounded">menu_book</span>
        <span class="nav-tooltip">Workshop Script</span>
    </button>
    <button class="nav-btn" onclick="exportPDF()" title="Export to PDF">
        <span class="material-symbols-rounded">picture_as_pdf</span>
        <span class="nav-tooltip">Export PDF</span>
    </button>
</div>

<script>
function exportPDF() {
    // Use browser's print function to save as PDF
    window.print();
}
</script>
