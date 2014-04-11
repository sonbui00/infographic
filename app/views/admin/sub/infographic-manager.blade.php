@extends('admin.main')

@section('head')
	@parent
	{{	HTML::style('css/dataTables.bootstrap.css')	}}
@stop

@section('content')
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="data-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Link en</th>
                                            <th>Link vi</th>
                                            <th>Link word vi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($infographics as $infographic)
										<tr>
                                            <td>{{	$infographic->id 	}}</td>
                                            <td>{{	$infographic->title 	}}</td>
                                            <td>{{	$infographic->description 	}}</td>
                                            <td>{{	$infographic->link_en 	}}</td>
                                            <td>{{	$infographic->link_vi 	}}</td>
                                            <td>{{	$infographic->link_word_vi 	}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

@stop



@section('foot')
	<div class="btn-group tool-buttons hide">
	  <button type="button" class="btn btn-primary delete-item">Delete</button>
	  <button type="button" class="btn btn-primary edit-item">Edit</button>
	  <button type="button" class="btn btn-primary view-item">View</button>
	  <!-- <button type="button" class="btn btn-primary remove-item">Remove Selected</button> -->
	</div>
	@parent
	{{	HTML::script('js/jquery.dataTables.js')	}}
	{{	HTML::script('js/dataTables.bootstrap.js')	}}

	<script>
	
    $(document).ready(function() {
    	// $numberRowSelected = 0;
        $('#data-table tbody tr').click(function(e) {
        	if ($(this).hasClass('row_selected bg-success')) {
        		$(this).removeClass('row_selected bg-success');
        		$('.tool-buttons').addClass('hide');
        		// $numberRowSelected--;
        	} else {
        		oTable.$('tr.row_selected').removeClass('row_selected bg-success');
        		$(this).addClass('row_selected bg-success');
        		$('.tool-buttons').removeClass('hide');
        		// $numberRowSelected++;
        	}
/*        	if ($numberRowSelected > 0) {
        		$('.tool-buttons').removeClass('hide');
        		if ($numberRowSelected == 1) {
        			$('.tool-buttons .edit-item, .tool-buttons .view-item').prop('disabled', '');
        		} else {
        			$('.tool-buttons .edit-item, .tool-buttons .view-item').attr('disabled', 'disabled');
        		}
        	} else {
        		$('.tool-buttons').addClass('hide');
        	}*/
        });

        $('.tool-buttons .edit-item, .tool-buttons .view-item').click(function(e) {
        	var url = "{{ URL::action('Infographic@getView', '') }}";
        	var id = oTable.$('tr.row_selected').first().find('td:first').text();
        	window.open(url +'/'+ id, '_blank');
        });


        var oTable = $('#data-table').dataTable();
    });
    </script>
@stop
