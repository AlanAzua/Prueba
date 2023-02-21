<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Orders</h2>
    <table class="table table-bordered tabla-orders">
        <thead>
            <tr>
                <th>order_id</th>
                <th>user_id</th>
                <th>order_total</th>
                <th>created_at</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
<script type="text/javascript">
  $(function () {
    var table = $('.tabla-orders').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('orders.tabla') }}",
        columns: [
            {data: 'order_id', name: 'order_id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'order_total', name: 'order_total'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: true, searchable: true},
        ]
    });
  });
</script>
</html>