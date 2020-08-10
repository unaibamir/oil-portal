@extends('layouts.master')


@section('page.title', 'Ports')

@section('content')
<!-- Default box -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ports</h3>
                </div>

                <div class="card-body">

                    @if( !empty($ports) )

                        <table class="table table-bordered table-striped ports" id="example1">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                      #
                                    </th>
                                    <th style="width: 20%">
                                      Name
                                    </th>
                                    <th style="width: 30%">
                                        Location
                                    </th>
                                    <th>
                                        Location Link
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                  </tr>
                            </thead>
                        
                            <tbody>
                                @foreach( $ports as $port )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $port->name }}</td>
                                        <td>{{ $port->location->name }}</td>
                                        <td>{{ $port->lat }}</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-danger btn-xs" href="#" onclick="event.preventDefault(); document.getElementById('port-delete').submit();">
                                                <i class="fas fa-folder"></i> Delete
                                            </a>
                                            <form id="port-delete" action="{{ route('ports.destroy', $port->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            

                        </table>
                    
                    @endif

                </div>
            </div>

        </div>

    </div>
</div>
@endsection



@section( 'stylesheet' )
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection


@section( 'scripts' )
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection