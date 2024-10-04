document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("nav a");

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault(); // หยุดการโหลดหน้าใหม่
            const page = this.getAttribute("href").split("=")[1];

            // ใช้ AJAX เพื่อโหลดเนื้อหาของหน้าที่เลือก
            fetch(`src/pages/${page}.php`)
                .then(response => {
                    if (!response.ok) throw new Error('Page not found');
                    return response.text();
                })
                .then(html => {
                    document.getElementById("content").innerHTML = html;
                    // เปลี่ยน URL โดยไม่โหลดหน้าใหม่
                    history.pushState(null, '', `?page=${page}`);
                })
                .catch(error => {
                    console.error(error);
                    document.getElementById("content").innerHTML = "<h1>404 Page Not Found</h1>";
                });
        });
    });
});
