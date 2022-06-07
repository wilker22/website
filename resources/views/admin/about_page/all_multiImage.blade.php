@extends('admin.admin_master')
@section('admin')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Multi Image All</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Multi Image All</h4>
                                        <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p>
        
                                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 133px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Sl</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 206px;" aria-label="Position: activate to sort column ascending">Multi Image</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 94px;" aria-label="Office: activate to sort column ascending">Action</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 41px;" aria-label="Age: activate to sort column ascending">Age</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 88px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 78px;" aria-label="Salary: activate to sort column ascending">Salary</th>
                                                </tr>
                                            
                                            </thead>
        
        
                                            <tbody>
                                                @php ($i = 1) @endphp
                                            @foreach($allMultiImage as $item)
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">{{i++}}</td>
                                                    <td>
                                                        <img style="width:60px; height: 50px;" src="{{ asset($item->multi_image) }}" alt="">
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit.multi.image',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                                        <a href="{{ route('delete.multi.image',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                        <ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="datatable_previous">
                                            <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">
                                                <i class="mdi mdi-chevron-left"></i>

                                            </a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="datatable_next">
                                            <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">
                                                <i class="mdi mdi-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>

@endsection