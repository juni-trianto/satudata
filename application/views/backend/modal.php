        <script type="text/javascript">
        	function showAjaxModal(url) {
        		// SHOWING AJAX PRELOADER IMAGE
        		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;">Loading...</div>');

        		// jQuery('#modal_ajax .modal-content').html('<div style="text-align:center;"><img src="<?php echo base_url(); ?>uploads/loading.gif" /></div>');
        		// LOADING THE AJAX MODAL
        		jQuery('#modal_ajax').modal('show', {
        			backdrop: 'true'
        		});

        		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
        		$.ajax({
        			url: url,
        			success: function(response) {
        				jQuery('#modal_ajax .modal-body').html(response);
        			}
        		});
        	}
        </script>
         <script type="text/javascript">
        	function showAjaxModalFull(url) {
        		// SHOWING AJAX PRELOADER IMAGE
        		jQuery('#modal_ajax_full .modal-body-full').html('<div style="text-align:center;">Loading...</div>');

        		// jQuery('#modal_ajax_full .modal-content').html('<div style="text-align:center;"><img src="<?php echo base_url(); ?>uploads/loading.gif" /></div>');
        		// LOADING THE AJAX MODAL
        		jQuery('#modal_ajax_full').modal('show', {
        			backdrop: 'true'
        		});

        		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
        		$.ajax({
        			url: url,
        			success: function(response) {
        				jQuery('#modal_ajax_full .modal-body-full').html(response);
        			}
        		});
        	}
        </script>

                                                   <!--  Extra Large modal example -->
         <div class="modal zoomIn fade bs-example-modal-xl" id="modal_ajax" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog ">
                      <div class="modal-content">
                            <div class="modal-header">
                                   <h5 class="modal-title" id="myExtraLargeModalLabel">Form <?= $page_title; ?></h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                       <div class="modal-body">
                       </div>
                       <div class="modal-footer">
                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                       </div>
                       </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
           </div><!-- /.modal -->


           <div class="modal zoomIn fade bs-example-modal-xl" id="modal_ajax_full" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-fullscreen ">
                      <div class="modal-content">
                            <div class="modal-header">
                                   <h5 class="modal-title" id="myExtraLargeModalLabel">Form <?= $page_title; ?></h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                       <div class="modal-body-full">
                       </div>
                       <div class="modal-footer">
                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                       </div>
                       </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
           </div><!-- /.modal -->