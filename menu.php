<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARU - Our Menu</title>
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>

    <!-- NAVIGATION BAR -->
    <header class="navbar">
        <div class="logo">MARU</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="menu.php" class="active">Menu</a>
            <a href="reservation.php">Reservation</a>
            <a href="history.php">History</a>
        </nav>
    </header>

    <!-- MENU CONTAINER WITH CSS TAB TOGGLE -->
    <section class="section-container">
        <h1 class="page-main-title text-center">OUR MENU</h1>

        <div class="tabs-container">
            <!-- Hidden inputs handle the switching state without Javascript -->
            <input type="radio" id="tab-dessert" name="menu-tabs" checked class="tab-input">
            <input type="radio" id="tab-beverage" name="menu-tabs" class="tab-input">

            <!-- Tab Headers -->
            <div class="tab-headers">
                <label for="tab-dessert" class="tab-label label-dessert">DESSERT</label>
                <label for="tab-beverage" class="tab-label label-beverage">BEVERAGE</label>
            </div>

            <!-- DESSERT CONTENT PANEL -->
            <div class="tab-content content-dessert">
                
                <h3 class="menu-cat-title">MELTED CHEESE TART</h3>
                <div class="circle-menu-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/1.jpg" alt="Original Melted Cheese Tart">
                    </div><h4>Original</h4><p>50k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/2.jpg" alt="Double Cheese Melted Cheese Tart">
                    </div><h4>Double Cheese</h4><p>55k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/3.jpg" alt="Matcha Melted Cheese Tart">
                    </div><h4>Matcha</h4><p>55k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/4.jpg" alt="Chocolate Melted Cheese Tart">
                    </div><h4>Chocolate</h4><p>50k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/5.jpg" alt="Iceberg Choco Melted Cheese Tart">
                    </div><h4>Iceberg Choco</h4><p>55k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/6.jpg" alt="Pistachio Melted Cheese Tart">
                    </div><h4>Pistachio</h4><p>60k</p></div>
                    <div class="item-circle-wrapper single-bottom"><div class="circle-img">
                        <img src="Public/Dessert Image/Melted Cheese Tart/7.jpg" alt="Dubai Pistachio Kunafa Mochi Original Chocolate Melted Cheese Tart">
                    </div><h4>Dubai Pistachio Kunafa Mochi Original Chocolate</h4><p>76k</p></div>
                </div>

                <h3 class="menu-cat-title">LOAF CHEESECAKE</h3>
                <div class="circle-menu-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Loaf Cheesecake/1.jpg" alt="Original Loaf Cheesecake">
                    </div><h4>Original</h4><p>40k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Loaf Cheesecake/2.jpg" alt="Matcha Loaf Cheesecake">
                    </div><h4>Matcha</h4><p>50k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Loaf Cheesecake/3.jpg" alt="Chocolate Douce Loaf Cheesecake">
                    </div><h4>Chocolate Douce</h4><p>42k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Loaf Cheesecake/4.jpg" alt="Blueberry Loaf Cheesecake">
                    </div><h4>Blueberry</h4><p>42k</p></div>
                </div>

                <h3 class="menu-cat-title">TIRAMISU</h3>
                <div class="circle-menu-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Tiramisu/1.jpg" alt="Matcha Tiramisu">
                    </div><h4>Matcha</h4><p>45k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Tiramisu/2.jpg" alt="Original Tiramisu">
                    </div><h4>Original</h4><p>38k</p></div>
                </div>

                <h3 class="menu-cat-title">PUMPKIN DONUT</h3>
                <div class="circle-menu-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/1.jpg" alt="Classic Glaze Pumpkin Donut">
                    </div><h4>Classic Glaze</h4><p>13k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/2.jpg" alt="Garlic Cheese Pumpkin Donut">
                    </div><h4>Garlic Cheese</h4><p>23k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/3.jpg" alt="Creme Brulee Pumpkin Donut">
                    </div><h4>Creme Brulee</h4><p>25k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/4.jpg" alt="Donkies Pumpkin Donut">
                    </div><h4>Donkies</h4><p>35k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/5.jpg" alt="Cinnamon Pumpkin Donut">
                    </div><h4>Cinnamon</h4><p>15k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/6.jpg" alt="Beef Maple Pumpkin Donut">
                    </div><h4>Beef Maple</h4><p>25k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/7.jpg" alt="Ube Creme Brulee Pumpkin Donut">
                    </div><h4>Ube Creme Brulee</h4><p>20k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/8.jpg" alt="Tuna Mayo Pumpkin Donut">
                    </div><h4>Tuna Mayo</h4><p>23k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/9.jpg" alt="Strawberry Cheesecake Pumpkin Donut">
                    </div><h4>Strawberry Cheesecake</h4><p>20k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Pumpkin Donut/10.jpg" alt="Choco Pistachio Dubai Kunafa Pumpkin Donut">
                    </div><h4>Choco Pistachio Dubai Kunafa Mochi Donut</h4><p>58k</p></div>
                </div>

                <h3 class="menu-cat-title">DONUT</h3>
                <div class="circle-menu-grid last-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Donut/1.jpg" alt="Vanilla Donut">
                    </div><h4>Vanilla</h4><p>18k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Donut/2.jpg" alt="Taro Donut">
                    </div><h4>Taro</h4><p>18k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Donut/3.jpg" alt="Chocolate Donut">
                    </div><h4>Chocolate</h4><p>18k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Donut/4.jpg" alt="Matcha Donut">
                    </div><h4>Matcha</h4><p>20k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Donut/5.jpg" alt="Strawberry Yoghurt Donut">
                    </div><h4>Strawberry Yoghurt</h4><p>20k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Donut/6.jpg" alt="Pistachio Donut">
                    </div><h4>Pistachio</h4><p>28k</p></div>
                </div>

                <h3 class="menu-cat-title">CRISPY DONUT</h3>
                <div class="circle-menu-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Crispy Donut/1.jpg" alt="Milk Crispy Donut">
                    </div><h4>Milk</h4><p>18k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Crispy Donut/2.jpg" alt="Milo Crispy Donut">
                    </div><h4>Milo</h4><p>20k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Crispy Donut/3.jpg" alt="Chocolate Crispy Donut">
                    </div><h4>Chocolate</h4><p>20k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Crispy Donut/4.jpg" alt="Mozarella Crispy Donut">
                    </div><h4>Mozarella</h4><p>28k</p></div>
                </div>

                <h3 class="menu-cat-title">MOCHI DONUT</h3>
                <div class="circle-menu-grid last-grid">
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Mochi Donut/1.jpg" alt="Mochi Vanilla Donut">
                    </div><h4>Mochi Vanilla</h4><p>23k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Mochi Donut/2.jpg" alt="Mochi Chocolate Donut">
                    </div><h4>Mochi Chocolate</h4><p>23k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Mochi Donut/3.jpg" alt="Mochi Taro Donut">
                    </div><h4>Mochi Taro</h4><p>23k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Mochi Donut/4.jpg" alt="Mochi Strawberry Yoghurt Donut">
                    </div><h4>Mochi Strawberry Yoghurt</h4><p>25k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Mochi Donut/5.jpg" alt="Mochi Matcha Donut">
                    </div><h4>Mochi Matcha</h4><p>25k</p></div>
                    <div class="item-circle-wrapper"><div class="circle-img">
                        <img src="Public/Dessert Image/Mochi Donut/6.jpg" alt="Mochi Pistachio Donut">
                    </div><h4>Mochi Pistachio</h4><p>33k</p></div>
                </div>

            </div>

            <!-- BEVERAGE CONTENT PANEL -->
            <div class="tab-content content-beverage">
                <div class="text-menu-list">
                    <h3 class="menu-cat-title">MILK TEA</h3>
                    <div class="text-menu-item"><span class="item-name">Dahong Pao Milk Tea</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Osmanthus Oolong Milk Tea</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Jasmine Milk Tea</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Tie Guan Yin Milk Tea</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Black Milk Tea</span><span class="item-price">28k</span></div>

                    <h3 class="menu-cat-title">ICE SHAKEN TEA</h3>
                    <div class="text-menu-item"><span class="item-name">Lemon Tea</span><span class="item-price">25k</span></div>
                    <div class="text-menu-item"><span class="item-name">Lychee Tea</span><span class="item-price">25k</span></div>
                    <div class="text-menu-item"><span class="item-name">Peach Tea</span><span class="item-price">25k</span></div>
                    
                    <h3 class="menu-cat-title">COFFEE</h3>
                    <div class="text-menu-item"><span class="item-name">Maru Signature Coffee</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Maru Gula Aren</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Americano</span><span class="item-price">25k</span></div>
                    <div class="text-menu-item"><span class="item-name">Butterscotch Latte</span><span class="item-price">35k</span></div>
                    <div class="text-menu-item"><span class="item-name">Nutella Latte</span><span class="item-price">35k</span></div>
                    <div class="text-menu-item"><span class="item-name">Coffee Latte</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Cappuccino</span><span class="item-price">28k</span></div>

                    <h3 class="menu-cat-title">MATCHA</h3>
                    <div class="text-menu-item"><span class="item-name">Ceremonial Matcha Latte</span><span class="item-price">55k</span></div>
                    <div class="text-menu-item"><span class="item-name">Basic Matcha Latte</span><span class="item-price">35k</span></div>
                    <div class="text-menu-item"><span class="item-name">Matcha Strawberry Latte</span><span class="item-price">40k</span></div>
                    <div class="text-menu-item"><span class="item-name">Dirty Matcha - with espresso</span><span class="item-price">45k</span></div>

                    <h3 class="menu-cat-title">LATTE</h3>
                    <div class="text-menu-item"><span class="item-name">Chocolate Latte</span><span class="item-price">35k</span></div>
                    <div class="text-menu-item"><span class="item-name">Hojicha Latte</span><span class="item-price">35k</span></div>
                    <div class="text-menu-item"><span class="item-name">Taro Latte</span><span class="item-price">35k</span></div>
                    <div class="text-menu-item"><span class="item-name">Strawberry Latte</span><span class="item-price">35k</span></div>

                    <h3 class="menu-cat-title">SPARKLING</h3>
                    <div class="text-menu-item"><span class="item-name">Homemade Lemonade</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Matcha Yuzu</span><span class="item-price">28k</span></div>
                    <div class="text-menu-item"><span class="item-name">Strawberry Basil</span><span class="item-price">28k</span></div>

                    <div class="text-menu-item"><span class="item-name">Mineral Water</span><span class="item-price">10k</span></div>
                </div>
            </div>

        </div>
    </section>

            <!-- FOOTER -->
        <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
        <h2 class="footer-logo">MARU</h2>
        <p>For further information</p>
        
        <!-- Phone Contact Row -->
        <p style="display: flex; align-items: center; gap: 8px; margin: 8px 0;">
            <svg xmlns="http://w3.org" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink: 0;">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg>
            <a href="https://api.whatsapp.com/send/?phone=6281373336880&text&type=phone_number&app_absent=0&utm_source=ig" class="footer-link">081373358830</a>
        </p>

        <!-- Instagram Contact Row -->
        <p style="display: flex; align-items: center; gap: 8px; margin: 8px 0;">
            <svg xmlns="http://w3.org" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink: 0;">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
            <a href="https://www.instagram.com/marubakehouse?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="footer-link">@marubakehouse</a>
        </p>
    </div>

            <div class="footer-visit">
                <h3>Visit Us!</h3>
                <p>Komp. Superblock, Sydney Hotel No.6, Sungai Panas, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
                <div class="map-placeholder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0459251659026!2d104.03266769999999!3d1.1274255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989cfa470bcc9%3A0x34818064c5b3942a!2sMaru%20Bake%20House!5e0!3m2!1sen!2sid!4v1780188615537!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
        <div class="footer-copyright">
            ©2026 Maru Bake House
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let customItems = JSON.parse(localStorage.getItem("customAdminMenu")) || [];
            
            const titleHeadings = document.querySelectorAll(".menu-cat-title");

            customItems.forEach(item => {
                let targetHeading = Array.from(titleHeadings).find(
                    h3 => h3.textContent.trim().toUpperCase() === item.subcategory.toUpperCase()
                );

                if (!targetHeading) return;

                let displayContainer = targetHeading.nextElementSibling;

                if (item.category === "beverage" && displayContainer && displayContainer.classList.contains("text-menu-list")) {
                    const drinkRow = document.createElement("div");
                    drinkRow.className = "text-menu-item";
                    
                    drinkRow.innerHTML = `
                        <span class="item-name">${item.name}</span>
                        <span class="item-price">${item.price}</span>
                    `;
                    
                    displayContainer.appendChild(drinkRow);
                } 

                else if (item.category === "dessert" && displayContainer && displayContainer.classList.contains("circle-menu-grid")) {
                    
                    const awkwardCenteredItem = displayContainer.querySelector(".single-bottom");
                    if (awkwardCenteredItem) {
                        awkwardCenteredItem.classList.remove("single-bottom");
                    }

                    const dessertCard = document.createElement("div");
                    dessertCard.className = "item-circle-wrapper";
                    
                    dessertCard.innerHTML = `
                        <div class="circle-img">
                            <img src="${item.image}" alt="${item.name}">
                        </div>
                        <h4>${item.name}</h4>
                        <p>${item.price}</p>
                    `;
                    
                    displayContainer.appendChild(dessertCard);
                }
            });
        });
    </script>

</body>
</html>
