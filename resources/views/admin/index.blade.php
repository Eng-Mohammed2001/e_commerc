@extends('admin.master')
@section('title', 'Dashbord | ' . config('app.name'))
@section('content')
    <div>
        <h3>Dashbord</h3>
    </div>

    <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">

        <!--begin:: Widgets/Daily Sales-->
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-widget14">
                <div class="kt-widget14__header kt-margin-b-30">
                    <h3 class="kt-widget14__title">
                        Daily Sales
                    </h3>
                    <span class="kt-widget14__desc">
                        Check out each collumn for more details
                    </span>
                </div>
                <div class="kt-widget14__chart" style="height:120px;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="kt_chart_daily_sales" style="display: block; height: 120px; width: 338px;" width="422"
                        height="150" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Daily Sales-->
    </div>
@endsection
