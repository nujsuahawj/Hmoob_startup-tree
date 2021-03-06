@extends('plugins/marketplace::themes.dashboard.master')

@section('content')
    @if ($totalProducts)
        <div class="mb-1 text-right">
            <button class="select-date-range-btn date-range-picker"
                    data-format-value="{{ trans('plugins/ecommerce::reports.date_range_format_value', ['from' => '__from__', 'to' => '__to__']) }}"
                    data-format="{{ Str::upper(config('core.base.general.date_format.js.date')) }}"
                    data-href="{{ route('marketplace.vendor.dashboard') }}">
                <i class="fa fa-calendar"></i> <span>{{ trans('plugins/ecommerce::reports.select_range') }}</span>
            </button>
        </div>
    @endif
    <section class="ps-dashboard report-chart-content" id="report-chart">
        @include('plugins/marketplace::themes.dashboard.partials.main-content')
    </section>
@stop

@push('footer')
    <script>
        var BotbleVariables = BotbleVariables || {};
        BotbleVariables.languages = BotbleVariables.languages || {};
        BotbleVariables.languages.reports = {!! json_encode(trans('plugins/ecommerce::reports.ranges'), JSON_HEX_APOS) !!}
    </script>
@endpush
