<?php
require_once('includes.php');
?>
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css" />
<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Partial Table -->
        <div class="card">
            <div class="card-header">
                <h4>All Blog</h4>
                <div class="pull-right">
                    <a class="btn btn-sm btn-success" href="blog-new.php">Add New</a>
                </div>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table class="js-table-checkable table table-vcenter table-hover" id="ajax_datatable" data-jsonfile="blog.php">
                        <thead>
                        <tr>
                            <th class="text-center w-5 sortingNone short-desc">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th class="w-30">Title</th>
                            <th class="hidden-xs hidden-sm sortingNone">Description</th>
                            <th class="hidden-xs hidden-sm">Author</th>
                            <th class="hidden-xs hidden-sm sortingNone">Categories</th>
                            <th class="hidden-xs">Status</th>
                            <th class="hidden-xs hidden-sm">Last Modified</th>
                            <th class="text-center" style="width: 128px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="ajax-services">

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- .card-block -->
        </div>
        <!-- .card -->
        <!-- End Partial Table -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>

<!-- Site Action -->
<div class="site-action">
    <button type="button" class="site-action-toggle btn-raised btn btn-warning btn-floating" style="visibility: hidden;">
        <i class="back-icon ion-android-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
        <button type="button" data-ajax-response="deletemarked" data-ajax-action="deleteBlog"
                class="btn-raised btn btn-danger btn-floating animation-slide-bottom">
            <i class="icon ion-android-delete" aria-hidden="true"></i>
        </button>
    </div>
</div>
<!-- End Site Action -->

<?php include("footer.php"); ?>

<script>
    $(function()
    {
        // Init page helpers (Table Tools helper)
        App.initHelpers('table-tools');

        // Init page helpers (BS Notify Plugin)
        App.initHelpers('notify');
    });
</script>
</body>

</html>
