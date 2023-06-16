document.addEventListener("DOMContentLoaded", function () {
    const element = document.getElementById("introToast");
    // Create toast instance
    if (element) {
        const introToast = new bootstrap.Toast(element);
        introToast.show();
    }

    const newsToastEl = document.getElementById("newsToast");
    // Create toast instance
    if (newsToastEl) {
        const newsToast = new bootstrap.Toast(newsToastEl);
        newsToast.show();
    }

    const blogToastEl = document.getElementById("blogToast");
    // Create toast instance
    if (blogToastEl) {
        const blogToast = new bootstrap.Toast(blogToastEl);
        blogToast.show();
    }
    // create tooltips
    const tooltipEL = document.getElementById('programSourceTooltip')
    if (tooltipEL) {
        const tooltip1 = new bootstrap.Tooltip(tooltipEL)
    }
});