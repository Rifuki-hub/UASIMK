document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const dashboardSearchForm = document.getElementById('dashboard-search-form');
    const dashboardSearchInput = document.getElementById('dashboard-search-input');

    const handleSearch = function (event) {
        event.preventDefault();
        const keyword = this.querySelector('[name="keyword"]').value.trim();
        if (keyword) {
            window.location.href = `search-results.php?keyword=${encodeURIComponent(keyword)}`;
        }
    };

    if (searchForm) {
        searchForm.addEventListener('submit', handleSearch);
    }

    if (dashboardSearchForm) {
        dashboardSearchForm.addEventListener('submit', handleSearch);
    }
});
