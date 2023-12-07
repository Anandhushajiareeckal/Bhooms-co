@extends('layouts.admin')

@section('body')

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="card border-0 bg-transparent">
        <div class="card-header mb-4 border-bottom px-0">
            <h5 class="card-title mb-0 text-primary">Headers</h5>
            <div class="dropdown card-action">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full Screen">
                    <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z"></path>
                        <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
                        <path d="M12 8h4v4"></path>
                        <path d="M16 8l-5 5"></path>
                    </svg>
                </a>
                
            </div>
        </div>
        <div class="card-body p-0">
            <div class="row g-xl-4 g-3 mb-4">
                <div class="col-12">
                    <table class="table dataTable table-hover mb-0 w-100">
                        <thead>

                            <tr>
                                <th>NO.</th>
                                <th>Header</th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @for ($i = 0; $i < count($menu) -1 ; $i++)
                            @php
                                $item = $menu[$i]
                            @endphp
                            <tr>
                                <td class="">{{ $item->id }}</td>
                                <td>
                                    <form action="/admin/menu/{{$item->id}}" method="POST">
                                        @csrf
                                    <select class="form-select array-select form-control" aria-label="example" name="position" 
                                    @if ($item->m_id == 9 )
                                        style="color:red;"
                                    @endif>
                                        @foreach ($menu as $menuItem)
                                            <option 
                                            @if ($item->name == $menuItem->menus)
                                                selected
                                            @endif>
                                            {{ $menuItem->menus}}</option>
                                        @endforeach
                                    </select>      
                                    
                                </td>
                                <td>
                                    <button type="submit"><i class="fa fa-bookmark " ></i> </a></button>

                                </td>
                                <td><a href="/admin/drop-down/{{ $item->m_id }}" class="btn btn-primary  @if ($i >=6) disabled @endif">Open</a></td>
                            </tr>
                        </form>
                        @endfor

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

</div>


@endsection