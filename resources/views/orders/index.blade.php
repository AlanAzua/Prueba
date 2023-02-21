<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Orders</h2>
    <table class="table table-bordered" id="tabla-orders">
        <thead>
            <tr>
                <th>order_id</th>
                <th>user_id</th>
                <th>order_total</th>
                <th>created_at</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody >
        </tbody>
    </table>
</div>
   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    var table = $('#tabla-orders').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('orders.list') }}",
        columns: [
            {data: 'order_id', name: 'order_id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'order_total', name: 'order_total'},
            {data: 'created_at', name: 'created_at'},
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'action', name: 'action', orderable: true, searchable: true},
        ]
    });
  });
</script>
</html>