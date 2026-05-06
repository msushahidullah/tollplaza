@extends('admin.layouts.master-soyuz')
@section('title',__('Open Ai'))
@section('body')
@component('admin.component.breadcumb',['secondaryactive' => 'active'])
@slot('heading')
{{ __('Open Ai') }}
@endslot

@slot('menu1')
{{ __('Open Ai') }}
@endslot

@slot('button')

<div class="col-md-6">
  <div class="widgetbar">
    
    {{-- <a href=" {{url('admin/services/create')}} " class="btn btn-primary-rgba mr-2">
      <i class="feather icon-plus mr-2"></i> {{__("Add Service")}}
    </a> --}}
  <a type="button" class="btn btn-danger-rgba btn-md z-depth-0" data-toggle="modal" data-target="#bulk_delete"><i class="fa fa-trash"></i> {{__('Delete Selected')}}</a>

  </div>
</div>
@endslot
@endcomponent

<div class="contentbar">
  <div class="row">

    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title"> {{__("All Openai List")}}</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="full_detail_table" class="width100 table table-bordered table-striped">
              <thead>
                <tr>
                    <th>
                        <div class="inline">
                          <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" id="checkboxAll">
                          <label for="checkboxAll" class="material-checkbox"></label>
                        </div>
                        </th>
                    <th>{{ __('Genrate') }}</th>
                    <th>{{ __('Prompt') }}</th>
                    <th>{{ __('Response') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach($openai as $key => $test)
                @if(isset($test))
                <tr role="row" class="odd">
                   <td>
                    <div class="inline">
                        <input type="checkbox" form="bulk_delete_form" class="filled-in material-checkbox-input" name="checked[]" value="{{ $test->id }}" id="checkbox{{ $test->id }}">
                        <label for="checkbox{{ $test->id }}" class="material-checkbox"></label>
                    </div>
                   </td>
                    <td>
                        {{ $test->generate }}
                    </td>
                    <td>
                        {{ $test->prompt }}
                    </td>
                    @if($test->generate == 'Image Generate')
                    @if(!empty($test->response))
                    <td>
                        <div class="ai-generate-image">
                            <img src="{{ $test->response }}" class="img-fluid img-circle" alt="">
                            <div class="img-output-icon">
                                <ul class="pl-0">
                                    <li><a href="{{ $test->response }}" title="Download" download><i class="feather icon-download"></i></a></li>
                                    <li><a href="{{ $test->response }}" data-lightbox="homePortfolio" title="View" target="_blank"><i class="feather icon-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    @endif                                     
                    @else
                     @php
                        $jsonData = $test->response;
                        $decodedData = json_decode($jsonData, true);
                    @endphp
                    <td>{{ $decodedData['content'] ?? ''}}</td>
                     @endif
                
                  <td>
                    <div class="dropdown">
                  <button class="btn btn-round btn-primary-rgba" type="button" id="CustomdropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                  <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton3">
               
                    
                     <a class="dropdown-item"  data-toggle="modal" data-target="#delete{{ $test->id }}" 
                    disabled="disabled" title="This operation is disabled in Demo !" ><i class="feather icon-delete mr-2"></i>{{ __("Delete")}}</a>
                         
                    </div>
                </div>
                
                
               
<div id="delete{{ $test->id }}" class="delete-modal modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="delete-icon"></div>
      </div>
      <div class="modal-body text-center">
        <h4 class="modal-heading">
          {{__('Are You Sure ?')}}
        </h4>
        <p>{{__('Do you really want to delete this service')}} <b>{{ $test->title }}</b> ? <b> {{__("By Clicking YES IF any user attach to this service will be unroled !</b> This process cannot be undone")}}.</p>
      </div>
      <div class="modal-footer">
        <form method="post" action="{{url('openai/delete/'.$test->id)}}" class="pull-right">
          {{csrf_field()}}
          {{method_field("DELETE")}}

          <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">
            {{__('No')}}
          </button>
          <button type="submit" class="btn btn-danger">
            {{__('Yes')}}
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
                <b>
                </b></td>
              </tr>
              @endif

              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="bulk_delete" class="delete-modal modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="delete-icon"></div>
        </div>
        <div class="modal-body text-center">
          <h4 class="modal-heading">{{ __("Are You Sure ?") }}</h4>
          <p>
            {{__("Do you really want to delete selected products? This process cannot be undone.")}}
          </p>
        </div>
        <div class="modal-footer">
         <form id="bulk_delete_form" method="post" action="{{ route('openai.bulk.delete') }}">
            @csrf
            @method('DELETE')
            <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">{{ __("NO") }}</button>
            <button type="submit" class="btn btn-danger">{{ __("YES") }}</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
 