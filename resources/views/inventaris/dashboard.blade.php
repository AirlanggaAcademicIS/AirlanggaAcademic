@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

      
@endsection

@section('code-footer')
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
@endsection