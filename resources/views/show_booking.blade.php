
@extends('admin.layout.main')

@section('main-container')
    <title>Show Booking</title>
    <!-- Add necessary CSS and JS files for DataTables and Date Range Picker -->




    {{-- <h1>Show Booking</h1> --}}
    <div style="margin:10px 0px;">

        <!-- Add CSV and Excel export buttons above the search field -->
        <div class="btn-group">
            <button class="btn btn-success" id="csvExport" style="padding: 4px 8px; font-size: 12px;" style="margin-left: 260px;">Export CSV</button>
            <button class="btn btn-success" id="excelExport" style="padding: 4px 8px; font-size: 12px;" style="margin-left: 260px;">Export Excel</button>
        </div>


        <div class="filter-box">
        <strong>Date Filter:</strong>
        <input type="text" name="daterange" value="" />
        <button class="btn btn-success filter">Filter</button>
    </div>
    <table id="booking_table" class="display" style="width: calc(100% - 100px); margin-top: 20px; margin-left: 260px;">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Ticket Number</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Price</th>
                {{-- <th>Tax</th> --}}
                <th>Pawan Media Revenue</th>
                <th>Ngarpalika Tax</th>
                <th>Park Revenue</th>
                <th>Phone</th>
                <th>Payment Method</th>
                <th>Created at</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>


    <!-- Custom CSS for styling the DataTables table and action buttons -->
    <style>
        /* Custom styles for the DataTables table */
        #booking_table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        #booking_table th,
        #booking_table td {
            padding: 8px;
            text-align: left;
        }

        #booking_table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        #booking_table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #booking_table tr:hover {
            background-color: #ddd;
        }

        /* Custom styles for the action buttons in the last column */
        .btn-group {
            display: flex;
            align-items: center;
        }

        .btn-group a,
        .btn-group button {
            margin-right: 5px;
        }
        div.filter-box {
        margin: 20px 0px;
        margin-left: 260px; /* Change this value to adjust the left margin */
    }
    /* Custom style to move the "Entries" info 100 pixels from the left */
    div.dataTables_wrapper .dataTables_info {
        margin-left: 260px; /* Adjust this value as needed */
    }
     /* Custom style to move the "Entries" button 100 pixels from the left */
     div.dataTables_wrapper .dataTables_length {
        margin-left: 70px; /* Change this value to adjust the left margin */
    }

    /* Custom style to move the "Search" input (optional, adjust as needed) */
    div.dataTables_wrapper .dataTables_filter {
        margin-right: 50px; /* Change this value to adjust the left margin */
    }
    </style>
@endsection
@push('js')
<script>
    console.log('khg')
     // Function to share booking details on WhatsApp
     function shareToWhatsApp(phoneNumber, name, price, category, subCategory, ticketNumber, pdfLink) {
        // Create the pre-filled message for WhatsApp
        const message = `Thank you for choosing Tribhuwan Park for your visit!\n🎉 We're excited to have you with us! 🎉\n\nHere are your booking details:\nName: ${name}\nPrice: ${price}\nCategory: ${category}\nSub Category: ${subCategory}\nTicket No.: ${ticketNumber}\n\n📥 Click here to download your booking PDF: ${pdfLink}\n\n🎈 Have a fantastic time at Tribhuwan Park! 🎈\nIf you have any questions or need assistance, feel free to reach out to us.\n\nSee you soon! 😊🎉`;

        // Encode the message and phone number for the URL
        const encodedMessage = encodeURIComponent(message);
        const encodedPhoneNumber = encodeURIComponent(phoneNumber);

        // Create the WhatsApp URL with the pre-filled message and phone number
        const whatsappURL = `https://wa.me/${encodedPhoneNumber}?text=${encodedMessage}`;

        // Open WhatsApp in a new tab with the pre-filled message and phone number
        window.open(whatsappURL, '_blank');
    }
    $(document).ready(function() {
        $('input[name="daterange"]').daterangepicker({
          startDate: moment().subtract(3, 'M'),
          endDate: moment()
      });

        var table = $('#booking_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('booking_api') }}",
                data:function (d) {
                  d.from_date = $('input[name="daterange"]').data('daterangepicker').startDate.format('YYYY-MM-DD');
                  d.to_date = $('input[name="daterange"]').data('daterangepicker').endDate.format('YYYY-MM-DD');
              }

            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'ticket_number', name: 'ticket_number' },
                { data: 'name', name: 'name' , orderable: true},
                { data: 'qty', name: 'qty' },
                { data: 'category.name', name: 'cat', searchable: true },
                { data: 'cat_name', name: 'cat_name',searchable: true }, //subcategory name
                { data: 'price', name: 'price',searchable: true },
                // { data: 'tax', name: 'tax',searchable: true },
                { data: 'pawanmedia', name: 'pawanmedia',searchable: true },
                { data: 'taxngarpalika', name: 'taxngarpalika',searchable: true },
                { data: 'park', name: 'park',searchable: true },
                { data: 'phone', name: 'phone',searchable: true },
                { data: 'payment_method', name: 'payment_method',searchable: true },
                {
                    data: 'created_at',
                    name: 'created_at',
                    // orderable: true,
                    render: function (data, type, row) {
                        // Format the date and time as needed
                        var formattedDate = moment(data).format('YYYY-MM-DD');
                        var formattedTime = moment(data).format('HH:mm:ss');
                        return formattedDate + ' ' + formattedTime;
                    }
                },
                { data: 'createdby', name: 'createdby',searchable: true },
                {
                    data: null,
                    orderable: false,
                    render: function (data, type, row) {
                        // Add the button group in the "Action" column
                        return '<div class="btn-group">' +
                            '<a href="#" class="btn btn-sm btn-primary" onclick="shareToWhatsApp(\'' + row.phone + '\', \'' + row.name + '\', \'' + row.price + '\', \'' + row.category.name + '\', \'' + row.cat_name + '\', \'' + row.ticket_number + '\', \'' + '{{ route('download_pdf', ['id' => ' + row.id + ']) }}' + '\')">Share</a>' +
                            '<a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>' +
                            '<form id="delete-form-' + row.id + '" method="POST" action="{{ route('delete_booking', ['id' => ' + row.id + ']) }}" style="display: none;">' +
                                '@csrf' +
                                '@method('DELETE')' +
                            '</form>' +
                            '<form method="POST" action="{{ route('print_booking') }}">' +
                                '@csrf' +
                                '<input type="hidden" name="id" value="' + row.id + '">' +
                                '<input type="hidden" name="ticket_number" value="' + row.ticket_number + '">' +
                                '<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i></button>' +
                            '</form>' +
                        '</div>';
                    }
                },
            ],
            order: [[12, 'desc']],
            // Enable DataTables Buttons and specify which buttons to display
            dom: 'Blfrtip',
            buttons: [
                'csv',
                'excel',
                'print'
            ],
             // Add lengthMenu option to control the entries field
    lengthMenu: [10, 50, 100,300,500,1000,2000,5000,10000,20000,100000],// You can adjust the available options as needed
    pageLength: 10, // Set the default page length



        });
        $(".filter").click(function(){
          table.draw();
      });

      $("#csvExport").on("click", function() {
        table.button(".buttons-csv").trigger();
    });

    // Add event listener for Excel export button
    $("#excelExport").on("click", function() {
        table.button(".buttons-excel").trigger();
    });
    });
</script>
@endpush
