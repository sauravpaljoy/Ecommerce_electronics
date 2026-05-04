<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce websites</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="page-wrapper">
   
    <!-- Tier 2: Middle Bar (Orange) -->
    <div class="middle-bar">
        <div class="container header-container">
            <!-- Mobile Top Row: Hamburger, Logo, Cart (Visible on Mobile) -->
            <div class="mobile-top-row">
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="https://bdfunnelbuilder.com/BFLOGO.png" alt="Binoy Electronics">
                    </a>
                </div>

                <!-- This visible-mobile Cart icon will only show on mobile -->
                <div class="mobile-cart-icon">
                    <div class="icon-wrapper">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="badge">0</span>
                    </div>
                </div>
            </div>
            <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="https://bdfunnelbuilder.com/BFLOGO.png" alt="Binoy Electronics">
                    </a>
                </div>
            <div class="search-container">
                
                <select class="category-select">
                    <option>All categories</option>
                </select>
                <input type="text" class="search-input" placeholder="Search for Television">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>
            
            <div class="user-icons desktop-only-icons">
                <div class="icon-wrapper wishlist-icon">
                    <i class="far fa-heart" style="font-size: 20px;"></i>
                    <span class="badge">0</span>
                </div>
                <div class="icon-wrapper cart-icon">
                    <i class="fas fa-shopping-bag" style="font-size: 20px;"></i>
                    <span class="badge">0</span>
                </div>
                <div class="icon-wrapper user-account-icon">
                    <i class="far fa-user" style="font-size: 20px;"></i>
                    <span class="sign-in-text">SIGN IN</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Tier 3: Bottom Bar (White) -->
    <div class="nav-bar">
        <div class="container">
            
            <nav class="main-nav">
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Television</a></li>
                    <li><a href="#">Refrigerator</a></li>
                    <li><a href="#">Fan And Cables</a></li>
                    <li><a href="#">Microwave Oven</a></li>
                    <li><a href="#">Gas Stove</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </nav>
            <div style="flex-basis: 100px;"></div> <!-- Spacer to match layout if needed -->
        </div>
    </div>

    

    <footer>
        <p>&copy; 2026 Binoy Electronics. All rights reserved.</p>
    </footer>

    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Mobile Sidebar -->
    <div class="mobile-sidebar" id="mobileSidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <img src="https://bdfunnelbuilder.com/BFLOGO.png" alt="Binoy Electronics">
            </div>
            <button class="close-sidebar" id="closeSidebar">&times;</button>
        </div>
        
        <div class="sidebar-search">
            <input type="text" placeholder="Search for products...">
            <i class="fas fa-search"></i>
        </div>
        
        <div class="sidebar-tabs">
            <div class="tab active">MENU</div>
            <div class="tab">CATEGORIES</div>
        </div>
        
        <nav class="sidebar-nav">
            <ul>
                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="#">TELEVISION</a></li>
                <li><a href="#">REFRIGERATOR</a></li>
                <li><a href="#">FAN AND CABLES</a></li>
                <li><a href="#">MICROWAVE OVEN</a></li>
                <li><a href="#">GAS STOVE</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </nav>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.querySelector('.mobile-menu-btn');
        const sidebar = document.getElementById('mobileSidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const closeBtn = document.getElementById('closeSidebar');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
        }

        if (hamburger) hamburger.addEventListener('click', toggleSidebar);
        if (overlay) overlay.addEventListener('click', toggleSidebar);
        if (closeBtn) closeBtn.addEventListener('click', toggleSidebar);

        // Sidebar Tabs Toggle (Placeholder logic)
        const tabs = document.querySelectorAll('.sidebar-tabs .tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    });
</script>
</body>
</html>
