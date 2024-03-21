document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk menampilkan konten berdasarkan tautan yang diklik
    function showContent(contentId) {
        var contents = document.querySelectorAll(".content");
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = "none";
        }

        var selectedContent = document.getElementById(contentId + "-content");
        if (selectedContent) {
            selectedContent.style.display = "block";
        }
    }

    // Tambahkan event listener ke setiap tautan untuk menampilkan konten yang sesuai
    document.getElementById("survey").addEventListener("click", function () {
        showContent("survey");
    });
    document.getElementById("question").addEventListener("click", function () {
        showContent("question");
    });
    document.getElementById("analytics").addEventListener("click", function () {
        showContent("analytics");
    });
    document.getElementById("logout").addEventListener("click", function () {
        // Handling logout logic
    });
});
