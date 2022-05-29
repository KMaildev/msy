$('select[name="countrie_id"]').on("change", function () {
    var countrie_id = $(this).val();
    if (countrie_id) {
        $.ajax({
            url: "/overseas_agent_ajax/" + countrie_id,
            type: "GET",
            dataType: "json",
            success: function (data) {
                if (data) {
                    $('select[name="overseas_agencie_id"]').empty();
                    $.each(data, function (key, value) {
                        $('select[name="overseas_agencie_id"]').append(
                            '<option value="' +
                                value.id +
                                '">' +
                                value.company_name +
                                "</option>"
                        );
                    });
                } else {
                    $('select[name="overseas_agencie_id"]').empty();
                }
            },
        });
    }
});

var contact = document.getElementById("contact");
$('select[name="overseas_agencie_id"]').on("change", function () {
    var overseas_agencies = $(this).val();
    if (overseas_agencies) {
        $.ajax({
            url: "/overseas_agent_get_ajax/" + overseas_agencies,
            type: "GET",
            dataType: "json",
            success: function (data) {
                if (data) {
                    contact.value = data.contact;
                } else {
                    contact.val = "Null";
                }
            },
        });
    }
});
