@if(session('msg'))

<div class="alert alert-success mt-0 msg " role="alert">
    {{session('msg')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="بستن">
        <span aria-hidden="true">&times;</span>
  </div>
  @endif
