document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const dashboardSearchForm = document.getElementById('dashboard-search-form');
    const dashboardSearchInput = document.getElementById('dashboard-search-input');

    if (searchForm) {
        searchForm.addEventListener('submit', function (event) {
            const keyword = searchInput.value.trim();
            if (keyword === '') {
                event.preventDefault();
            }
        });
    }

    if (dashboardSearchForm) {
        dashboardSearchForm.addEventListener('submit', function(event) {
            const keyword = dashboardSearchInput.value.trim();
            if (keyword === '') {
                event.preventDefault();
            }
        });
    }
});
