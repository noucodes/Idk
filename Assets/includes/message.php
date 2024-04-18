<?php
if (isset($_SESSION['message'])):

    ?>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">System</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['message'] ?>
            </div>
        </div>
    </div>

    <?php
    unset($_SESSION['message']);
endif;
?>