<table class="table">
    <thead>
        <tr>
            <th style="width: 1%;">#</th>
            <th style="width: 3vh; text-align: center;">Name</th>
            <th style="width: 3vh; text-align: center;">Oversea Company</th>
            <th style="width: 3vh; text-align: center;">Male</th>
            <th style="width: 3vh; text-align: center;">Female</th>
            <th style="width: 3vh; text-align: center;">Total</th>
            <th style="width: 3vh; text-align: center;">Demand Date</th>
            <th style="width: 3vh; text-align: center;">Cabinet Date</th>
            <th style="width: 3vh; text-align: center;">Issue Date</th>
            <th style="width: 3vh; text-align: center;">Issue Number</th>
            <th style="width: 3vh; text-align: center;">Contract Date</th>
            <th style="width: 3vh; text-align: center;">Contract Male</th>
            <th style="width: 3vh; text-align: center;">Contract Female</th>
            <th style="width: 3vh; text-align: center;">Sending Date</th>
            <th style="width: 3vh; text-align: center;">Sending Male</th>
            <th style="width: 3vh; text-align: center;">Sending Female</th>
            <th style="width: 3vh; text-align: center;">Demand Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($demands as $key => $demand)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                    {{ $demand->company_name }}
                </td>

                <td>
                    {{ $demand->overseas_agencies_table->company_name ?? '' }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ $demand->male }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ $demand->female }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ $demand->male + $demand->female }}
                </td>

                <td>
                    {{ $demand->demand_date }}
                </td>

                <td>
                    {{ $demand->cabinet_date }}
                </td>

                <td>
                    {{ $demand->issue_date }}
                </td>

                <td>
                    {{ $demand->issue_number }}
                </td>

                <td>
                    {{ $demand->contracts_table->contract_date ?? '' }}
                </td>

                <td>
                    {{ $demand->contracts_table->contract_male ?? '' }}
                </td>

                <td>
                    {{ $demand->contracts_table->contract_female ?? '' }}
                </td>

                <td>
                    {{ $demand->sendings_table->sending_date ?? '' }}
                </td>

                <td>
                    {{ $demand->sendings_table->sending_male ?? '' }}
                </td>

                <td>
                    {{ $demand->sendings_table->sending_female ?? '' }}
                </td>

                <td>
                    @if ($demand->demand_status == 'new_demand')
                        New Demand
                    @else
                        Old Demand
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
