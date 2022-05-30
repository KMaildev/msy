<table class="table">
    <thead>
        <tr>
            <th style="width: 1%;">#</th>
            <th style="width: 3vh; text-align: center;">Name</th>
            <th style="width: 3vh; text-align: center;">Gender</th>
            <th style="width: 3vh; text-align: center;">NRC</th>
            <th style="width: 3vh; text-align: center;">Father Name</th>
            <th style="width: 3vh; text-align: center;">Date of Birth</th>
            <th style="width: 3vh; text-align: center;">Address</th>
            <th style="width: 3vh; text-align: center;">Passport No</th>
            <th style="width: 3vh; text-align: center;">Date of Passport</th>
            <th style="width: 3vh; text-align: center;">Local Agent Name</th>
            <th style="width: 3vh; text-align: center;">OWIC</th>
            <th style="width: 3vh; text-align: center;">OWIC Date</th>
            <th style="width: 3vh; text-align: center;">Place of Passport</th>
            <th style="width: 3vh; text-align: center;">Phone No</th>
            <th style="width: 3vh; text-align: center;">Remark</th>
            <th style="width: 3vh; text-align: center;">Reject Status</th>
            <th style="width: 3vh; text-align: center;">Reject Date</th>
            <th style="width: 3vh; text-align: center;">Reject Reason</th>
            <th style="width: 3vh; text-align: center;">Overseas Company</th>
            <th style="width: 3vh; text-align: center;">Contract Date</th>
            <th style="width: 3vh; text-align: center;">Sending Date</th>
            <th style="width: 3vh; text-align: center;">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($passports as $key => $passport)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $passport->name }}</td>
                <td>{{ ucfirst($passport->gender ?? '-') }}</td>
                <td>{{ $passport->nrc ?? '-' }}</td>
                <td>{{ $passport->father_name ?? '-' }}</td>
                <td>{{ $passport->date_of_birth ?? '-' }}</td>
                <td>{{ $passport->address ?? '-' }}</td>
                <td>{{ $passport->passport ?? '-' }}</td>
                <td>{{ $passport->passport_date ?? '-' }}</td>
                <td>{{ $passport->local_agent_name ?? '-' }}</td>
                <td>{{ $passport->owic ?? '-' }}</td>
                <td>{{ $passport->owic_date ?? '-' }}</td>
                <td>{{ $passport->place_of_passport ?? '-' }}</td>
                <td>{{ $passport->phone ?? '-' }}</td>
                <td>{{ $passport->remark ?? '-' }}</td>
                <td style="background-color: {{ $passport->reject_status ? 'red' : '#3c9e76' }};">
                    {{ $passport->reject_status ?? '-' }}
                </td>
                <td>{{ $passport->reject_date ?? '-' }}</td>
                <td>{{ $passport->reject_reason ?? '-' }}</td>
                <td>
                    {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
                </td>
                <td>
                    {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
                </td>
                <td>
                    {{ $passport->labour_management_table->sendings_table->sending_date ?? '' }}
                </td>
                <td>Active</td>
            </tr>
        @endforeach
    </tbody>
</table>
