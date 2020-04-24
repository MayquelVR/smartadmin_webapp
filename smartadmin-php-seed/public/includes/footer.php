<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- BEGIN Page Footer -->
<footer class="page-footer" role="contentinfo">
    <div class="d-flex align-items-center flex-1 text-muted">
        <span class="hidden-md-down fw-700">2019 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-primary fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a></span>
    </div>
    <div>
        <ul class="list-table m-0">
            <li><a href="<?= APP_URL ?>/intel_introduction.php" class="text-secondary fw-700">About</a></li>
            <li class="pl-3"><a href="<?= APP_URL ?>/info_app_licensing.php" class="text-secondary fw-700">License</a></li>
            <li class="pl-3"><a href="<?= APP_URL ?>/info_app_docs.php" class="text-secondary fw-700">Documentation</a></li>
            <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</footer>
<!-- END Page Footer -->
<!-- BEGIN Shortcuts -->
<!-- modal shortcut -->
<div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="app-list w-auto h-auto p-0 text-left">
                    <li>
                        <a href="<?= APP_URL ?>/intel_introduction.php" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                            </div>
                            <span class="app-list-name">
                                Home
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= APP_URL ?>/page_inbox_general.php" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                            </div>
                            <span class="app-list-name">
                                Inbox
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= APP_URL ?>/intel_introduction.php" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                            </div>
                            <span class="app-list-name">
                                Add More
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- END Shortcuts -->
