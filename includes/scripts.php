<?php
$current = getCurrentSlide();
$prev = getPrevSlide($current);
$next = getNextSlide($current);
?>

<script>
    function nextSlide() {
        <?php if($next): ?>
        window.location.href = '<?php echo $next; ?>';
        <?php endif; ?>
    }
    
    function previousSlide() {
        <?php if($prev): ?>
        window.location.href = '<?php echo $prev; ?>';
        <?php endif; ?>
    }
    
    function toggleNavModal() {
        const modal = document.getElementById('navModal');
        modal.classList.toggle('active');
    }
    
    function goToSlide(num) {
        window.location.href = `slide_${num.toString().padStart(2, '0')}.php`;
    }
    
    document.addEventListener('click', function(event) {
        const modal = document.getElementById('navModal');
        const slideNumber = document.querySelector('.slide-number');
        if (modal && slideNumber && !modal.contains(event.target) && !slideNumber.contains(event.target)) {
            modal.classList.remove('active');
        }
    });
    
    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowRight' || event.key === ' ') {
            event.preventDefault();
            nextSlide();
        } else if (event.key === 'ArrowLeft') {
            event.preventDefault();
            previousSlide();
        }
        if (event.key === 'Escape') {
            document.getElementById('navModal').classList.remove('active');
        }
        if (event.key >= '0' && event.key <= '9') {
            const slideNum = parseInt(event.key);
            window.location.href = `slide_${slideNum.toString().padStart(2, '0')}.php`;
        }
    });
</script>
