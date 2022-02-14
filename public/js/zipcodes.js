$(() => {
    const allZips = JSON.parse(sessionStorage.getItem("zips")) ?? [];
    const distance = parseFloat(sessionStorage.getItem("distance"));
    for (let i = 0; i < allZips.length; i++) {
        $("#zip-list").append(allZips[i] + "<br />");
    }
    if (distance) {
        $("#total-distance").html(
            distance.toLocaleString(undefined, { maximumFractionDigits: 2 })
        );
    }
});

const runAjax = (zips) => {
    $.ajax({
        type: "POST",
        url: "distance",
        data: {
            zipcodes: zips,
        },
        dataType: "json",
        success: (data) => {
            // noinspection JSCheckFunctionSignatures
            $("#total-distance").html(
                data.toLocaleString(undefined, { maximumFractionDigits: 2 })
            );
            sessionStorage.setItem("distance", data.toString());
        },
        error: (data) => {
            console.log("Error: ", data.responseText);
        },
    });
};

const getDistance = () => {
    // Set the CSRF token for AJAX use.
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    const zipInput = $("#zip-input");
    const zip = zipInput.val();

    // Add the new ZIP to the list of all ZIPs.
    const allZips = JSON.parse(sessionStorage.getItem("zips")) ?? [];
    allZips.push(zip);
    sessionStorage.setItem("zips", JSON.stringify(allZips));

    // Update the display to show all the ZIP codes.
    $("#zip-list").append(zip + "<br />");

    // Get the total distance between the ZIPs and display it.
    runAjax(allZips);

    // Clear the input.
    zipInput.val("");
};

const clearSession = () => {
    sessionStorage.removeItem("zips");
    sessionStorage.removeItem("distance");
    $("#zip-list").html("");
    $("#total-distance").html("0");
    $("#zip-input").val("");
};
