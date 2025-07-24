document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const dashboardSearchForm = document.getElementById('dashboard-search-form');
    const dashboardSearchInput = document.getElementById('dashboard-search-input');
    const dashboardSearchButton = dashboardSearchForm ? dashboardSearchForm.querySelector('button[type="submit"]') : null;

    // Header search: submit on Enter key press
    if (searchForm) {
        searchForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const keyword = searchInput.value.trim();
            if (keyword) {
                window.location.href = `search-results.php?keyword=${encodeURIComponent(keyword)}`;
            }
        });
    }

    // Dashboard search: submit on Enter key press or button click
    if (dashboardSearchForm) {
        dashboardSearchForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const keyword = dashboardSearchInput.value.trim();
            if (keyword) {
                window.location.href = `search-results.php?keyword=${encodeURIComponent(keyword)}`;
            }
        });
    }
});
