<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="dl-icon-close"></i></span>
                </button>
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-box product-summary">
                            <h3 class="product-title mb--15"></h3>
                            <h4 class="product-short-description mb--25 mb-md--20 text-center">@if(session('message')){{session('message')}}@endif</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
