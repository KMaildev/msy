<table class="table">
    <tr>
        <th style="width: 5vh">Name</th>
        <td style="width: 5vh">
            {{ $passport->name }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Gender</th>
        <td style="width: 5vh">
            {{ ucfirst(trans($passport->gender)) }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">NRC</th>
        <td style="width: 5vh">
            {{ $passport->nrc }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Father Name</th>
        <td style="width: 5vh">
            {{ $passport->father_name }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Date of Birth</th>
        <td style="width: 5vh">
            {{ $passport->date_of_birth }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Address</th>
        <td style="width: 5vh">
            {{ $passport->address }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Passport No</th>
        <td style="width: 5vh">
            {{ $passport->passport }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Date of Passport</th>
        <td style="width: 5vh">
            {{ $passport->passport_date }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Local Agent Name</th>
        <td style="width: 5vh">
            {{ $passport->local_agent_name }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">OWIC</th>
        <td style="width: 5vh">
            {{ $passport->owic }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">OWIC Date</th>
        <td style="width: 5vh">
            {{ $passport->owic_date }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Place of Passport</th>
        <td style="width: 5vh">
            {{ $passport->place_of_passport }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Phone No</th>
        <td style="width: 5vh">
            {{ $passport->phone }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Remark</th>
        <td style="width: 5vh">
            {{ $passport->remark }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Reject Status</th>
        <td style="background-color: {{ $passport->reject_status ? 'red' : '#3c9e76' }}; color: white;">
            {{ $passport->reject_status ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Reject Date</th>
        <td style="width: 5vh">
            {{ $passport->reject_date ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Reject Reason</th>
        <td style="width: 5vh">
            {{ $passport->reject_reason ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Overseas Company</th>
        <td style="width: 5vh">
            {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Contract Date</th>
        <td style="width: 5vh">
            {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh">Sending Date</th>
        <td style="width: 5vh">
            {{ $passport->labour_management_table->sendings_table->sending_date ?? '' }}
        </td>
    <tr>
</table>
