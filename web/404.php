<?php require "header.php" ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0f4f8 0%, #e8f2f8 100%);
            min-height: 100vh;
            color: #333;
        }

        .header {
            background: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #e53e3e;
        }

        .logo span {
            color: #666;
            font-size: 12px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #e53e3e;
        }

        .search-bar {
            position: relative;
            margin: 0 20px;
        }

        .search-bar input {
            width: 300px;
            padding: 8px 40px 8px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 14px;
        }

        .search-bar::after {
            content: "🔍";
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .cart-icon {
            position: relative;
            font-size: 20px;
            color: #666;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
            padding: 40px 20px;
        }

        .error-container {
            text-align: center;
            max-width: 600px;
        }

        .error-number {
            font-size: 200px;
            font-weight: 900;
            color: #333;
            line-height: 0.8;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .character {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            animation: swing 2s ease-in-out infinite;
        }

        .character-body {
            width: 80px;
            height: 100px;
            position: relative;
        }

        .head {
            width: 50px;
            height: 50px;
            background: #fdbcb4;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .hair {
            width: 45px;
            height: 25px;
            background: #8B4513;
            border-radius: 25px 25px 0 0;
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .eye {
            width: 3px;
            height: 3px;
            background: #333;
            border-radius: 50%;
            position: absolute;
            top: 18px;
        }

        .eye.left { left: 15px; }
        .eye.right { right: 15px; }

        .mouth {
            width: 8px;
            height: 4px;
            background: #333;
            border-radius: 0 0 8px 8px;
            position: absolute;
            top: 28px;
            left: 50%;
            transform: translateX(-50%);
        }

        .body {
            width: 40px;
            height: 35px;
            background: #87CEEB;
            position: absolute;
            top: 45px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 5px;
        }

        .legs {
            width: 35px;
            height: 20px;
            background: #1E90FF;
            position: absolute;
            top: 80px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 0 0 15px 15px;
        }

        .rope {
            position: absolute;
            width: 2px;
            height: 150px;
            background: #8B4513;
            top: -80px;
            left: 50%;
            transform: translateX(-50%);
            transform-origin: top;
        }

        .rope::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -8px;
            width: 18px;
            height: 18px;
            border: 2px solid #8B4513;
            border-radius: 50%;
            background: transparent;
        }

        @keyframes swing {
            0%, 100% { transform: translate(-50%, -50%) rotate(-10deg); }
            50% { transform: translate(-50%, -50%) rotate(10deg); }
        }

        .error-message {
            margin-bottom: 30px;
        }

        .error-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .error-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        .back-button {
            display: inline-block;
            background: linear-gradient(135deg, #e53e3e, #c53030);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(229, 62, 62, 0.3);
        }

        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(229, 62, 62, 0.4);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .float-element {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .float-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .float-element:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .float-element:nth-child(3) {
            top: 80%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @media (max-width: 768px) {
            .error-number {
                font-size: 120px;
            }
            
            .nav-menu {
                display: none;
            }
            
            .search-bar input {
                width: 200px;
            }
            
            .character-body {
                width: 50px;
                height: 60px;
            }
            
            .head {
                width: 30px;
                height: 30px;
            }
            
            .hair {
                width: 28px;
                height: 15px;
            }
            
            .body {
                width: 25px;
                height: 20px;
                top: 25px;
            }
            
            .legs {
                width: 20px;
                height: 15px;
                top: 45px;
            }
        }
    </style>
</head>
<body>

    <main class="main-content">
        <div class="floating-elements">
            <div class="float-element">💻</div>
            <div class="float-element">🎮</div>
            <div class="float-element">⚡</div>
        </div>

        <div class="error-container">
            <div class="error-number">
                4
                <div class="character">
                    <div class="rope"></div>
                    <div class="character-body">
                        <div class="head">
                            <div class="hair"></div>
                            <div class="eye left"></div>
                            <div class="eye right"></div>
                            <div class="mouth"></div>
                        </div>
                        <div class="body"></div>
                        <div class="legs"></div>
                    </div>
                </div>
                4
            </div>
            
            <div class="error-message">
                <h1 class="error-title">Xin lỗi, chúng tôi đang trong quá trình phát triển</h1>
                <p class="error-subtitle">Hãy quay lại trang chủ hoặc trang trước đó</p>
            </div>
            
            <a href="/" class="back-button">QUAY LẠI TRANG CHỦ</a>
        </div>
    </main>

    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Make the character interactive
            const character = document.querySelector('.character');
            character.addEventListener('mouseenter', function() {
                this.style.animationDuration = '0.5s';
            });
            
            character.addEventListener('mouseleave', function() {
                this.style.animationDuration = '2s';
            });

            // Add click effect to button
            const button = document.querySelector('.back-button');
            button.addEventListener('click', function(e) {
                // Add ripple effect
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255,255,255,0.5)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.left = (e.offsetX - 10) + 'px';
                ripple.style.top = (e.offsetY - 10) + 'px';
                ripple.style.width = '20px';
                ripple.style.height = '20px';
                
                this.style.position = 'relative';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>

<?php require "footer.php" ?>