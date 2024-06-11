
function searchCarousel() {
    var query = document.getElementById('searchInput1').value;
    window.location.href = '/search?query=' + encodeURIComponent(query);
};
