@extends('admin.layouts.master-soyuz')
@section('title',__('All Services | '))
@section('body')
@component('admin.component.breadcumb',['secondaryactive' => 'active'])
@slot('heading')
{{ __('All Services') }}
@endslot

@slot('menu1')
{{ __('Open Ai') }}
@endslot

@slot('button')

<div class="col-md-6">
  <div class="widgetbar">
    
    <a href=" {{url('admin/services/create')}} " class="btn btn-primary-rgba mr-2">
      <i class="feather icon-plus mr-2"></i> {{__("Add Service")}}
    </a>
  </div>
</div>
@endslot
@endcomponent

<div class="contentbar">
  <div class="row">

    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title"> {{__("All Services")}}</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="full_detail_table" class="width100 table table-bordered table-striped">
              <thead>
                <tr>
                
                  <th>{{ __("Name") }}</th>
                  <th>{{ __("Status") }}</th>
                  <th>{{ __("Action") }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($services as $service)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $service->name }}</td>
                  <td>
                    <form method="POST" action="{{ route('service.quick.update',$service->id) }}">
                      {{ csrf_field() }}
                      <button @if(env('DEMO_LOCK')==0) type="submit" @else title="{{ __("This operation is disabled in Demo !") }}"
                        disabled="" @endif class="btn btn-sm btn-rounded {{ $service->status ==1 ? 'btn-success-rgba' : 'btn-danger-rgba' }}">
                        {{ $service->status==1 ? __('Active') : __('Deactive') }}
                      </button>
                    </form>
                  </td>
                  <td>
                    <div class="dropdown">
                  <button class="btn btn-round btn-primary-rgba" type="button" id="CustomdropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                  <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton3">
               
                    <a class="dropdown-item" title="{{__("Edit service")}} {{ $service->name }}" href="{{url('admin/services/'.$service->id.'/edit')}}"><i class="feather icon-edit mr-2"></i>{{ __("Edit") }}</a>
                     <a class="dropdown-item"  data-toggle="modal" data-target="#delete{{ $service->id }}" 
                    disabled="disabled" title="This operation is disabled in Demo !" ><i class="feather icon-delete mr-2"></i>{{ __("Delete")}}</a>
                         
                    </div>
                </div>
                
                
               
<div id="delete{{ $service->id }}" class="delete-modal modal fade" role="dialog">
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
        <p>{{__('Do you really want to delete this service')}} <b>{{ $service->name }}</b> ? <b> {{__("By Clicking YES IF any user attach to this service will be unroled !</b> This process cannot be undone")}}.</p>
      </div>
      <div class="modal-footer">
        <form method="post" action="{{ route('services.destroy',$service->id) }}" class="pull-right">
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
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
 