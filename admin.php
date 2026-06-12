<?php
include 'php/server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARU - Admin Dashboard</title>
    
    <!-- LINK TO YOUR STYLESHEET -->
    <link rel="stylesheet" href="admin.css">
    
    <!-- BOOTSTRAP ICONS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="sidebar">
        <h2 class="sidebar-logo">MARU Admin</h2>
        <a href="#reservations" class="nav-item active"><i class="bi bi-calendar-event"></i> Bookings</a>
        <a href="#menu-management" class="nav-item"><i class="bi bi-egg-fried"></i> Menu Settings</a>
        <a href="index.html" class="nav-item back-site"><i class="bi bi-box-arrow-left"></i> View Website</a>
    </div>

    <div class="main-content">
        
        <!-- Reservation data -->
        <section id="reservations" class="dashboard-section">
            <h1 class="page-title">Customer Reservations</h1>
            <div class="table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Guest Name</th>
                            <th>Date</th>
                            <th>Time Slot</th>
                            <th>Guests</th>
                            <th>Tables</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="admin-table-body">
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Add Menu -->
        <section id="menu-management" class="dashboard-section">
            <h1 class="page-title">Menu Settings (Add New Item)</h1>
            <div class="form-card-admin" style="margin-bottom: 30px;">
                <form id="admin-menu-form">
                    <!-- Menu Name -->
                    <div class="admin-form-group">
                        <label for="item-name">Menu Name *</label>
                        <input type="text" id="item-name" placeholder="e.g., Original Tart" required />
                    </div>

                    <!-- Menu Price -->
                    <div class="admin-form-group">
                        <label for="item-price">Price (in Thousands, e.g., 50 for 50k) *</label>
                        <input type="number" id="item-price" min="1" placeholder="e.g., 50" required />
                    </div>

                    <!-- menu type -->
                    <div class="admin-form-group">
                        <label for="item-category">Menu Type *</label>
                        <select id="item-category" required>
                            <option value="dessert">DESSERT (Visual Grid)</option>
                            <option value="beverage">BEVERAGE (Text List)</option>
                        </select>
                    </div>

                    <!-- menu category -->
                    <div class="admin-form-group">
                        <label for="item-subcategory">Menu Varieties *</label>
                        <select id="item-subcategory" required>
                        </select>
                    </div>

                    <!-- 5. Menu Image File Uploader -->
                    <div class="admin-form-group" id="uploader-form-group">
                        <label for="item-image-file">Upload Menu Image *</label>
                        <p style="font-size: 13px; color: #7f1e17; margin-bottom: 8px; line-height: 1.4;">
                            Select an image file from your computer (PNG, JPG, or JPEG).
                        </p>
                        <input type="file" id="item-image-file" accept="image/*" required />
                    </div>

                    <button type="submit" class="admin-submit-btn">Publish to Menu Page</button>
                </form>
            </div>

            <!-- Delete custom menu items -->
            <h3 class="page-title" style="font-size: 22px; margin-top: 40px; margin-bottom: 15px;">Active Custom Menu Items</h3>
            <div class="table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Preview</th>
                            <th>Item Name</th>
                            <th>Category Header</th>
                            <th>Price Tag</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="admin-menu-table-body">
                    </tbody>
                </table>
            </div>
        </section>

    </div>
    
    <!-- <script src="js/admin.js"></script> -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    loadReservations();

    function loadReservations() {
        fetch('php/get_reservations_info.php')
            .then(response => response.json())
            .then(data => {
                renderReservations(data);
            })
            .catch(error => {
                console.error('Error loading data:', error);
            });
    }

    function renderReservations(reservations) {
        const tableBody = document.getElementById('admin-table-body');
        tableBody.innerHTML = '';

        reservations.forEach(res => {
            const row = document.createElement('tr');
            row.setAttribute('data-id', res.reservation_id);
            row.innerHTML = `
                <td>${res.name || '-'}</td>
                <td>${res.date || '-'}</td>
                <td>${res.bookingTime || '-'}</td>
                <td>${res.guest_count || '-'}</td>
                <td>${res.table_count || '-'}</td>
                <!-- Gabung Phone dan Email di satu kolom -->
                <td>${res.phone || '-'}<br><small>${res.email || '-'}</small></td>
                <td>
                    <button class="action-btn delete-btn">Delete</button>
                </td>
            `;
            tableBody.appendChild(row);
        });

        // Pasang event listener buat tombol delete
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach(button => {
            button.addEventListener("click", () => {
                const row = button.closest('tr'); // Cari barisnya
                const targetId = row.getAttribute('data-id'); // Ambil ID nya
                deleteReservation(targetId, row); // Kirim ID dan barisnya ke fungsi
            });
        });
    }

    // GANTI FUNGSI DELETE NYA JADI GINI (KE DATABASE)
    function deleteReservation(id, rowElement) {
        if (confirm("Are you sure you want to cancel and delete this reservation?")) {
            fetch('php/admin_delete.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'id=' + id
            })
            .then(response => response.json())
            .then(result => {
                if(result.status === 'success') {
                    rowElement.remove(); // Hapus baris dari tampilan
                    alert("Deleted successfully!");
                    loadReservations();
                } else {
                    alert("Failed to delete!" + '', result.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    }
});

fetch('php/admin_delete.php', {
    method: 'POST', 
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'id=' + id // Ganti id jadi targetId atau nama variabel kamu
})
.then(res => res.text()) // UBAH INI DARI json() JADI text()
.then(data => {
    if(data === "success"){
        alert("Berhasil dihapus!");
        location.reload();
    } else {
        alert("Gagal menghapus!");
    }
})
</script>
</body>
</html>
