<!DOCTYPE html>
<html>
<head>
  <title>ATM Receipt</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .atm-receipt {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
    }
    .receipt-header {
      text-align: center;
      margin-bottom: 10px;
    }
    .logo-image {
      max-width: 100px;
      height: auto;
    }
    .park-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 0;
    }
    .park-info {
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }
    .receipt-details {
      margin-bottom: 20px;
      padding: 10px; /* Add some padding around the table */
    }
    .receipt-details p {
      margin: 5px 0;
    }
    .receipt-table {
      width: 100%;
      margin-bottom: 10px;
      border-collapse: collapse; /* Collapse borders to avoid doubled borders */
    }
    .receipt-table th,
    .receipt-table td {
      padding: 8px;
      border: 1px solid #ccc; /* Add border to all cells */
      text-align: left;
    }
    .receipt-table th:first-child,
    .receipt-table td:first-child {
      border-left: none; /* Remove left border for the first column */
    }
    .receipt-table th:last-child,
    .receipt-table td:last-child {
      border-right: none; /* Remove right border for the last column */
    }
    .receipt-table th,
    .receipt-table tbody td {
      border-bottom: none; /* Remove bottom border for table headers and body cells */
    }
    .receipt-table tbody tr:last-child td {
      border-bottom: 1px solid #ccc; /* Add bottom border for the last row */
    }
    .receipt-total {
      margin-top: 20px;
      text-align: right;
    }
    .powered-by {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
      color: #999;
    }
    .thank-you {
      margin-top: 10px;
      text-align: center;
      font-size: 16px;
      font-weight: bold;
    }
    .pan-no {
      float: left;
      font-size: 12px;
      color: #555;
    }

    .vat-no {
      float: right;
      font-size: 12px;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="atm-receipt">
    <div class="pan-no">
        <p>जी.प्र.का.द.न. १९९१ </p>
      </div>
      <div class="vat-no">
        <p>पान.न. ३०२६२१४७५ </p>
      </div>
    <div class="receipt-header">
      <img src="{{url('dist/img/logo.png')}}" class="logo-image" alt="Logo">
      <h3 class="park-name">शाहिद स्मारक प्रकृति प्रतिष्ठान</h3>
      <p class="park-info">चन्द्रागिरी नगरपालिका-0४</p>
      <p class="park-info">Phone-014312182</p>
    </div>

    <!-- End Sample Log -->
    @foreach ($print as $row)
    <div class="receipt-details">
      <p><strong>Date:</strong> {{ date('F j, Y h:i A', strtotime($row->created_at)) }}</p>

      <table class="receipt-table">
        <thead>
          <tr>
            <th>Ticket no.</th>
            <th>Name</th>
            <th>Tickets</th>
            <th>Category</th>
            <th>Subcategory</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $row->ticket_number }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->qty }}</td>
            @php
              $cat = DB::table('categories')->where('id', $row->cat)->first();
            @endphp
            <td>{{ $cat->name }}</td>
            @php
              $sub = DB::table('sub_categories')->where('id', $row->cat_id)->first();
            @endphp
            <td>{{ $sub->name }}</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" style="text-align: right;"><strong>Per Ticket:</strong></td>
            <td>{{ 'Rs.' . number_format($sub->price, 2) }}</td>
          </tr>
          <tr>
            <td colspan="3" style="text-align: right;"><strong>SubTotal:</strong></td>
            <td>{{ 'Rs.' . number_format($row->price, 2) }}</td>
          </tr>
        </tfoot>
      </table>
    </div>
    @endforeach

    <div class="thank-you">Thank you for visiting!🙏🏾</div>
    <div class="powered-by">
        Powered by Pawan Media <img src="{{url('dist/img/pawan.png')}}" alt="Pawan Media Logo" style="height: 20px; width: auto;">
      </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Automatically trigger print dialog on page load
      window.print();
    });
  </script>
</body>
</html>
