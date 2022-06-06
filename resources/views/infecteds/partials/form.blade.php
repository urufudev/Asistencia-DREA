@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection

<div class="form-body">
    <div class="form-group">
        <label >Trabajador</label>
        {{Form::select('user_id',$users,null,['class'=>'form-control select2','autocomplete'=>'off'])}}
        @error('user_id')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>


    <div class="form-group align-middle">
        <label>Estado</label>
        <div class="custom-switch custom-control mt-1">
            <span > 
            
            <input type="checkbox" name="status" class="custom-control-input " id="status" 
            @if(old('status', $infected->status) == 'ACTIVO') checked
            @endif>
            <label class="custom-control-label mr-1" for="status">
            </label>
            Activo
        </span>
        </div>
    </div>
   

      

</div>
<div class="form-actions d-flex justify-content-end">
    <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
        <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
    </button>
</div>
@section('vendor-scripts')

<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>

@endsection
@section('page-scripts')
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>

@endsection