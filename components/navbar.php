<!-- Link to Bootstrap CSS and Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Navbar Code -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-building"></i> บริษัท </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/mycompany/customers/customer_list.php">
                        <i class="fas fa-users"></i> ลูกค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/mycompany/inventory/inventory_list.php">
                        <i class="fas fa-cogs"></i> คลังสินค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/mycompany/suppliers/supplier_list.php">
                        <i class="fas fa-truck"></i> ผู้จัดส่ง
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Add CSS for hover effects -->
<style>
    /* เพิ่มเอฟเฟกต์เมื่อเมาส์ชี้ */
    .navbar-nav .nav-item .nav-link {
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #f8f9fa;
        /* เปลี่ยนสีข้อความเมื่อเมาส์ชี้ */
        background-color: #007bff;
        /* เปลี่ยนสีพื้นหลัง */
        border-radius: 5px;
        /* เพิ่มมุมโค้งให้กับพื้นหลัง */
    }

    .navbar-nav .nav-item .nav-link i {
        margin-right: 8px;
        /* เว้นระยะระหว่างไอคอนและข้อความ */
    }
</style>

<!-- Include Popper.js and Bootstrap JS (Ensure correct order) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>