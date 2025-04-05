<script>
    document.addEventListener("DOMContentLoaded", function () {
        const button = document.getElementById("mobile-menu-button");
        const menu = document.getElementById("mobile-nav");

        button?.addEventListener("click", (e) => {
            e.stopPropagation(); 
            const isHidden = menu.classList.contains("hidden");

            menu.classList.toggle("hidden", !isHidden);
            menu.classList.toggle("flex", isHidden);
            menu.classList.toggle("flex-col", isHidden);
        });

        document.addEventListener("click", function (e) {
            if (!menu.classList.contains("hidden") &&
                !menu.contains(e.target) &&
                !button.contains(e.target)) {
                menu.classList.add("hidden");
                menu.classList.remove("flex", "flex-col");
            }
        });
    });
</script>
