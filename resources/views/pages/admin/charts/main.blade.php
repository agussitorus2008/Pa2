<x-app-layout title="Home">
    @section('css')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    @endsection
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Basic Bar</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @section('custom_js')
        <script>
            var ctx = $("#line-chart");
            const lineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    lables: @json($data['label']),
                    datasets: [{
                        label: 'Total Order',
                        data: @json($data['data']),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                    }],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            console.log(true);
        </script>
    @endsection --}}



    {{-- @section('custom_js')
        <script>
            var ctx = $("#line-chart");
            const lineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($data['label']),
                    datasets: [{
                            label: 'Accepted',
                            data: @json($data['accepted']),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgb(75, 192, 192)',
                            borderWidth: 1
                        },
                        {
                            label: 'Rejected',
                            data: @json($data['rejected']),
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            borderWidth: 1
                        }
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Table for Accepted and Rejected Orders
            var tableData = '';
            var labels = @json($data['label']);
            var acceptedData = @json($data['accepted']);
            var rejectedData = @json($data['rejected']);
            var totalData = 0; // Variable to store total orders

            for (var i = 0; i < labels.length; i++) {
                tableData += '<tr>';
                tableData += '<td>' + labels[i] + '</td>';
                tableData += '<td>' + acceptedData[i] + '</td>';
                tableData += '<td>' + rejectedData[i] + '</td>';
                tableData += '</tr>';

                // Calculate total orders
                totalData += acceptedData[i] + rejectedData[i];
            }

            // Add total row to the table
            tableData += '<tr>';
            tableData += '<td><strong>Total</strong></td>';
            tableData += '<td>' + totalData + '</td>';
            tableData += '<td></td>';
            tableData += '</tr>';

            $('#order-table tbody').html(tableData);

            // Calculate total order
            var totalOrder = acceptedData.reduce((a, b) => a + b, 0) + rejectedData.reduce((a, b) => a + b, 0);

            // Add total order to the chart
            lineChart.data.datasets.push({
                label: 'Total Order',
                data: [totalOrder],
                backgroundColor: 'rgba(255, 205, 86, 0.2)',
                borderColor: 'rgb(255, 205, 86)',
                borderWidth: 1
            });

            // Update the chart
            lineChart.update();
        </script>
    @endsection --}}

    @section('custom_js')
        <script>
            var ctx = $("#line-chart");
            const lineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($data['label']),
                    datasets: [{
                            label: 'Accepted',
                            data: @json($data['accepted']),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgb(75, 192, 192)',
                            borderWidth: 1
                        },
                        {
                            label: 'Rejected',
                            data: @json($data['rejected']),
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            borderWidth: 1
                        },
                        {
                            label: 'Total Order',
                            data: @json($data['accepted']).map((value, index) => value +
                                @json($data['rejected'])[index]),
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            borderColor: 'rgb(255, 205, 86)',
                            borderWidth: 1
                        }
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Table for Accepted and Rejected Orders
            var tableData = '';
            var labels = @json($data['label']);
            var acceptedData = @json($data['accepted']);
            var rejectedData = @json($data['rejected']);
            var totalData = 0; // Variable to store total orders

            for (var i = 0; i < labels.length; i++) {
                tableData += '<tr>';
                tableData += '<td>' + labels[i] + '</td>';
                tableData += '<td>' + acceptedData[i] + '</td>';
                tableData += '<td>' + rejectedData[i] + '</td>';
                tableData += '<td>' + (acceptedData[i] + rejectedData[i]) + '</td>';
                tableData += '</tr>';

                // Calculate total orders
                totalData += acceptedData[i] + rejectedData[i];
            }

            // Add total row to the table
            tableData += '<tr>';
            tableData += '<td><strong>Total</strong></td>';
            tableData += '<td>' + acceptedData.reduce((a, b) => a + b, 0) + '</td>';
            tableData += '<td>' + rejectedData.reduce((a, b) => a + b, 0) + '</td>';
            tableData += '<td>' + totalData + '</td>';
            tableData += '</tr>';

            $('#order-table tbody').html(tableData);

            // Update the chart
            lineChart.update();
        </script>
    @endsection

</x-app-layout>
