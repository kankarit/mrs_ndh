document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("nav a");
    const contentArea = document.getElementById("content");

    function loadPage(page) {
        contentArea.innerHTML = "<h2>Loading...</h2>"; // แสดงข้อความขณะโหลด
        fetch(`/mrs_ndh/src/pages/${page}.php`)
            .then(response => {
                if (!response.ok) throw new Error('Page not found');
                return response.text();
            })
            .then(html => {
                contentArea.innerHTML = html;
                history.pushState({page: page}, '', `/${page}`);
            })
            .catch(error => {
                console.error(error);
                contentArea.innerHTML = "<h1>404 Page Not Found</h1>";
            });
    }

    // โหลดหน้าเพจตามค่าใน URL
    const path = window.location.pathname.split('/').pop();
    const page = path === '' || path === 'index.php' ? 'home' : path; // โหลด home ถ้าไม่มีค่า
    loadPage(page);

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault(); // หยุดการโหลดหน้าใหม่
            const page = this.getAttribute("href").substring(1); // เอาชื่อเพจจาก URL
            loadPage(page);
        });
    });

    // จัดการกรณีย้อนกลับในประวัติการเข้าชม
    window.addEventListener("popstate", function(event) {
        if (event.state) {
            loadPage(event.state.page);
        }
    });
});
