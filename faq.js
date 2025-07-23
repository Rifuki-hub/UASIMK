document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('faq-search-input');
    const faqList = document.getElementById('faq-list');
    const noResults = document.getElementById('no-results');

    if (searchInput && faqList && noResults) {
        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const questions = faqList.querySelectorAll('.faq-item');
            let resultsFound = false;

            questions.forEach(item => {
                const questionSpan = item.querySelector('summary span');
                const questionText = questionSpan ? questionSpan.textContent.toLowerCase() : '';

                if (questionText.includes(searchTerm)) {
                    item.classList.remove('hidden');
                    resultsFound = true;
                } else {
                    item.classList.add('hidden');
                }
            });

            noResults.classList.toggle('hidden', resultsFound);
        });
    }
});
