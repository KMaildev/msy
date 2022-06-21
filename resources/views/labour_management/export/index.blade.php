<table class="table">
    <thead>
        <tr>
            <th style="width: 1%;">No.</th>
            <th style="width: 3vh; text-align: center;">Labour Card No</th>
            <th style="width: 3vh; text-align: center;">Issue of Labour</th>
            <th style="width: 3vh; text-align: center;">Name</th>
            <th style="width: 3vh; text-align: center;">M/F</th>
            <th style="width: 3vh; text-align: center;">N.R.C No</th>
            <th style="width: 3vh; text-align: center;">Father's Name</th>
            <th style="width: 3vh; text-align: center;">Qualification</th>
            <th style="width: 3vh; text-align: center;">Date of Birth</th>
            <th style="width: 3vh; text-align: center;">Address in Myanmar</th>
            <th style="width: 3vh; text-align: center;">Job</th>
            <th style="width: 3vh; text-align: center;">Factory's Name</th>
            <th style="width: 3vh; text-align: center;">Passport No</th>
            <th style="width: 3vh; text-align: center;">Issue Date of Passport</th>
            <th style="width: 3vh; text-align: center;">ID Card</th>
            <th style="width: 3vh; text-align: center;">Issue Date of ID</th>
            <th style="width: 3vh; text-align: center;">Place of Passport</th>
            <th style="width: 3vh; text-align: center;">Salary(Baht)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contract_labours as $key => $contract_labour)
            <tr>
                <td style="text-align: center;">
                    {{ $key + 1 }}
                </td>

                <td>
                    -
                </td>
                <td>
                    -
                </td>

                <td style="text-align: center;">
                    {{ $contract_labour->passports_table->name }}
                </td>

                <td style="text-align: center;">
                    {{ ucfirst($contract_labour->passports_table->gender ?? '-') }}
                </td>

                <td style="text-align: center;">
                    {{ $contract_labour->passports_table->nrc ?? '-' }}
                </td>

                <td style="text-align: center;">
                    {{ $contract_labour->passports_table->father_name ?? '-' }}
                </td>

                <td>
                    -
                </td>

                <td style="text-align: center;">
                    {{ $contract_labour->passports_table->date_of_birth ?? '-' }}
                </td>


                <td style="text-align: center;">
                    {{ $contract_labour->passports_table->address ?? '-' }}
                </td>

                <td>
                    -
                </td>

                <td>
                    -
                </td>

                <td>
                    {{ $contract_labour->passports_table->passport ?? '-' }}
                </td>

                <td>
                    {{ $contract_labour->passports_table->passport_date ?? '-' }}
                </td>

                <td>
                    -
                </td>

                <td>
                    -
                </td>

                <td>
                    {{ $contract_labour->passports_table->place_of_passport ?? '-' }}
                </td>

                <td>
                    -
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
