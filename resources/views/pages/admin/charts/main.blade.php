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
                    <div class="text-center">
                        <p>Barang Terlaris: <b>
                                @if (isset($product))
                                    {{ $product->nama }}
                                @endif
                            </b></p>

                    </div>
                    {{-- <div class="card-header">
                        <h4 class="card-title mb-0">Basic Bar</h4>
                    </div> --}}
                    <div class="card-body">
                        {{-- <canvas id="line-chart"></canvas> --}}
                        <div id="chart">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @section('custom_js')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Highcharts.chart('chart', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Chart Penjualan'
                    },
                    subtitle: {
                        text: 'Souvenir Batak'
                    },
                    xAxis: {
                        categories: [
                            @foreach ($data['label'] as $label)
                                '{{ $label }}',
                            @endforeach
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Total Order',
                        data: [
                            @foreach ($data['data'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(0, 119, 255, 0.8)'
                    }, {
                        name: 'Accepted',
                        data: [
                            @foreach ($data['accepted'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(144, 238, 144, 0.8)'
                    }, {
                        name: 'Rejected',
                        data: [
                            @foreach ($data['rejected'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(255, 99, 71, 0.8)' // Mengubah warna menjadi merah
                    }, {
                        name: 'Pending',
                        data: [
                            @foreach ($data['pending'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(255, 204, 0, 0.8)'
                    }]
                });
            });
        </script>


        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                Highcharts.chart('chart', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Chart Penjualan'
                    },
                    subtitle: {
                        text: 'Souvenir Batak'
                    },
                    xAxis: {
                        categories: [
                            @foreach ($data['label'] as $label)
                                '{{ $label }}',
                            @endforeach
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Total Order',
                        data: [
                            @foreach ($data['data'] as $value)
                                {{ $value }},
                            @endforeach
                        ]
                    }, {
                        name: 'Rejected',
                        data: [
                            @foreach ($data['rejected'] as $value)
                                {{ $value }},
                            @endforeach
                        ]
                    }, {
                        name: 'Accepted',
                        data: [
                            @foreach ($data['accepted'] as $value)
                                {{ $value }},
                            @endforeach
                        ]
                    }]
                });
            });
        </script> --}}
    @endsection

    {{-- @section('custom_js')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Highcharts.chart('chart', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Chart Penjualan'
                    },
                    subtitle: {
                        text: 'Souvenir Batak'
                    },
                    xAxis: {
                        categories: [
                            @foreach ($data['label'] as $label)
                                '{{ $label }}',
                            @endforeach
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Total Order',
                        data: [
                            @foreach ($data['data'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(0, 119, 255, 0.8)'
                    }, {
                        name: 'Accepted',
                        data: [
                            @foreach ($data['accepted'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(144, 238, 144, 0.8)'
                    }, {
                        name: 'Rejected',
                        data: [
                            @foreach ($data['rejected'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(255, 99, 71, 0.8)' // Mengubah warna menjadi merah
                    }, {
                        name: 'Pending',
                        data: [
                            @foreach ($data['pending'] as $value)
                                {{ $value }},
                            @endforeach
                        ],
                        color: 'rgba(255, 204, 0, 0.8)'
                    }, {
                        name: 'Frequently Bought',
                        data: [
                            @foreach ($data['frequently_bought'] as $category)
                                '{{ $category }}',
                            @endforeach
                        ],
                        color: 'rgba(255, 0, 0, 0.8)' // Mengubah warna menjadi merah
                    }]
                });
            });
        </script>
    @endsection --}}
</x-app-layout>
