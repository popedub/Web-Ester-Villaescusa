<div class="modal animated fadeIn" id="info" tabindex="-1" role="dialog" aria-labelledby="infoTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="infoTitle">{{ get_the_title() }}</div>
        <div class="info-modal d-none d-lg-block">Info</div>
      </div>
      <div class="modal-body">
        <div class="modal-dialog-centered">
          <div class="informacion-block d-block text-left mx-auto">
              {!! $info !!}
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <a href="#" rol="button" data-dismiss="modal">@php echo __('Cerrar','sage'); @endphp</a>
      </div>
    </div>
  </div>
</div>
