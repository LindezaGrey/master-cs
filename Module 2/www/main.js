document.addEventListener("DOMContentLoaded", function () {
    var element = document.getElementById("introToast");

    // Create toast instance
    const introToast = new bootstrap.Toast(element);
    introToast.show();

    // create tooltips
    const tooltipEL = document.getElementById('programSourceTooltip')
    const tooltip1 = new bootstrap.Tooltip(tooltipEL)

});