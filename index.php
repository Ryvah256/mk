<?php include '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ambidextrous PM - Home</title>
    
    <!-- Preload critical fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Modern CSS Reset and Base Styles */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            /* Enhanced Color Palette */
            --primary: #1a365d;
            --primary-light: #2c5282;
            --primary-dark: #0f2537;
            --secondary: #d69e2e;
            --secondary-light: #f6e05e;
            --secondary-dark: #b7791f;
            --accent: #e53e3e;
            --success: #38a169;
            --warning: #dd6b20;
            
            /* Neutral Colors */
            --dark: #0f172a;
            --dark-light: #1e293b;
            --dark-lighter: #334155;
            --light: #f8fafc;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            
            /* Typography Scale */
            --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-display: 'Playfair Display', Georgia, serif;
            --text-xs: 0.75rem;
            --text-sm: 0.875rem;
            --text-base: 1rem;
            --text-lg: 1.125rem;
            --text-xl: 1.25rem;
            --text-2xl: 1.5rem;
            --text-3xl: 1.875rem;
            --text-4xl: 2.25rem;
            --text-5xl: 3rem;
            --text-6xl: 3.75rem;
            
            /* Spacing Scale */
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;
            --space-16: 4rem;
            --space-20: 5rem;
            --space-24: 6rem;
            
            /* Border Radius */
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-2xl: 1.5rem;
            --radius-full: 9999px;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            
            /* Transitions */
            --transition-fast: 150ms ease;
            --transition-base: 250ms ease;
            --transition-slow: 350ms ease;
            
            /* Z-index scale */
            --z-dropdown: 1000;
            --z-sticky: 1020;
            --z-fixed: 1030;
            --z-modal-backdrop: 1040;
            --z-modal: 1050;
            --z-popover: 1060;
            --z-tooltip: 1070;
        }

        /* Base Typography */
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-primary);
            font-size: var(--text-base);
            line-height: 1.6;
            color: var(--gray-200);
            background-color: var(--dark);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Enhanced Typography Classes */
        .text-display {
            font-family: var(--font-display);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }

        /* Modern Button System */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: var(--space-2);
            padding: var(--space-3) var(--space-6);
            font-weight: 600;
            font-size: var(--text-sm);
            border-radius: var(--radius-full);
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: all var(--transition-base);
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
            color: var(--dark);
            box-shadow: var(--shadow-md);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
            filter: brightness(1.1);
        }

        .btn-secondary {
            background: transparent;
            color: var(--gray-200);
            border: 2px solid var(--gray-300);
        }

        .btn-secondary:hover {
            background: var(--gray-200);
            color: var(--dark);
            border-color: var(--gray-200);
        }

        .btn-lg {
            padding: var(--space-4) var(--space-8);
            font-size: var(--text-base);
        }

        /* Modern Card System */
        .card {
            background: var(--dark-light);
            border: 1px solid var(--gray-700);
            border-radius: var(--radius-xl);
            padding: var(--space-8);
            transition: all var(--transition-base);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--secondary), transparent);
            opacity: 0;
            transition: opacity var(--transition-base);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-2xl);
            border-color: var(--secondary);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-glass {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Section Layouts */
        .section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .section-sm {
            min-height: 60vh;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 var(--space-6);
        }

        /* Hero Section Enhancements */
        .hero {
            background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%);
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') center/cover;
            opacity: 0.3;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .hero-title {
            font-family: var(--font-display);
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: var(--space-6);
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            font-size: clamp(1.125rem, 2.5vw, 1.5rem);
            color: var(--gray-300);
            margin-bottom: var(--space-8);
            font-weight: 400;
            line-height: 1.5;
        }

        .hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-4);
            justify-content: center;
            margin-bottom: var(--space-12);
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-8);
            margin-top: var(--space-12);
        }

        .stat-item {
            text-align: center;
            padding: var(--space-6);
            background: rgba(214, 158, 46, 0.1);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(214, 158, 46, 0.2);
        }

        .stat-number {
            font-size: var(--text-4xl);
            font-weight: 900;
            color: var(--secondary-light);
            display: block;
            margin-bottom: var(--space-2);
        }

        .stat-label {
            font-size: var(--text-lg);
            font-weight: 600;
            color: var(--gray-200);
            margin-bottom: var(--space-1);
        }

        .stat-description {
            font-size: var(--text-sm);
            color: var(--gray-400);
        }

        /* Modern Grid Layouts */
        .grid {
            display: grid;
            gap: var(--space-8);
        }

        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        }

        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .grid-4 {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        /* Enhanced Modal System */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: var(--z-modal);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-slow);
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: linear-gradient(135deg, var(--secondary-light) 0%, var(--secondary) 100%);
            max-width: 800px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            border-radius: var(--radius-2xl);
            padding: var(--space-10);
            box-shadow: var(--shadow-2xl);
            transform: scale(0.7) translateY(50px);
            transition: all var(--transition-slow);
            position: relative;
            color: var(--dark);
        }

        .modal.show .modal-content {
            transform: scale(1) translateY(0);
        }

        .modal-close {
            position: absolute;
            top: var(--space-5);
            right: var(--space-5);
            background: var(--dark);
            color: var(--secondary-light);
            border: 2px solid var(--secondary);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-base);
            z-index: 10;
        }

        .modal-close:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: scale(1.1);
        }

        /* Sustainability Cards */
        .sustainability-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: var(--space-8);
            margin-top: var(--space-12);
        }

        .sustainability-card {
            background: var(--dark-light);
            border: 1px solid var(--gray-700);
            border-radius: var(--radius-xl);
            padding: var(--space-8);
            text-align: center;
            cursor: pointer;
            transition: all var(--transition-base);
            position: relative;
            overflow: hidden;
        }

        .sustainability-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(214, 158, 46, 0.1), transparent);
            transition: left var(--transition-slow);
        }

        .sustainability-card:hover::before {
            left: 100%;
        }

        .sustainability-card:hover {
            transform: translateY(-6px);
            border-color: var(--secondary);
            box-shadow: var(--shadow-xl);
        }

        .sustainability-icon {
            font-size: var(--text-4xl);
            color: var(--secondary);
            margin-bottom: var(--space-6);
            display: block;
        }

        /* Community Section */
        .community-section {
            background: var(--dark);
            position: relative;
        }

        .community-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: var(--space-16);
            align-items: center;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--space-4);
            margin: var(--space-8) 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: var(--space-3);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-full);
            padding: var(--space-3) var(--space-5);
            font-size: var(--text-sm);
            font-weight: 500;
            transition: all var(--transition-base);
        }

        .feature-item:hover {
            background: rgba(214, 158, 46, 0.1);
            border-color: var(--secondary);
        }

        /* Globe Container */
        .globe-container {
            width: 100%;
            height: 400px;
            max-width: 500px;
            margin: 0 auto;
            border-radius: var(--radius-xl);
            overflow: hidden;
            position: relative;
            background: var(--dark);
            border: 1px solid var(--gray-700);
        }

        /* Testimonial Cards */
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: var(--space-8);
            margin-top: var(--space-12);
        }

        .testimonial-card {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-xl);
            padding: var(--space-8);
            transition: all var(--transition-base);
        }

        .testimonial-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            border-color: var(--secondary);
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: var(--space-4);
            margin-bottom: var(--space-6);
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--secondary);
        }

        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-info h4 {
            font-weight: 600;
            color: var(--gray-100);
            margin-bottom: var(--space-1);
        }

        .testimonial-info p {
            font-size: var(--text-sm);
            color: var(--gray-400);
        }

        .testimonial-rating {
            display: flex;
            gap: var(--space-1);
            color: var(--secondary);
            margin-top: var(--space-2);
        }

        .testimonial-content {
            font-style: italic;
            color: var(--gray-300);
            margin-bottom: var(--space-6);
            line-height: 1.7;
        }

        .testimonial-company {
            display: flex;
            align-items: center;
            gap: var(--space-4);
            padding-top: var(--space-4);
            border-top: 1px solid var(--gray-700);
        }

        /* Counter Animation */
        .counter-section {
            background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%);
        }

        .counter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-8);
            margin-bottom: var(--space-16);
        }

        .counter-item {
            text-align: center;
        }

        .counter-number {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 900;
            color: var(--secondary-light);
            margin-bottom: var(--space-2);
            display: block;
        }

        .counter-label {
            font-size: var(--text-xl);
            font-weight: 600;
            color: var(--gray-200);
            margin-bottom: var(--space-2);
        }

        .counter-description {
            font-size: var(--text-sm);
            color: var(--gray-400);
            line-height: 1.5;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .community-grid {
                grid-template-columns: 1fr;
                gap: var(--space-12);
            }

            .grid-2 {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            :root {
                --text-base: 0.9rem;
                --space-6: 1rem;
                --space-8: 1.5rem;
                --space-10: 2rem;
                --space-12: 2.5rem;
                --space-16: 3rem;
            }

            .container {
                padding: 0 var(--space-4);
            }

            .hero-cta {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 280px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .modal-content {
                padding: var(--space-6);
                margin: var(--space-4);
            }
        }

        @media (max-width: 480px) {
            .stats-grid,
            .sustainability-grid,
            .counter-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-header {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Utility Classes */
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }

        .mb-2 { margin-bottom: var(--space-2); }
        .mb-4 { margin-bottom: var(--space-4); }
        .mb-6 { margin-bottom: var(--space-6); }
        .mb-8 { margin-bottom: var(--space-8); }
        .mb-12 { margin-bottom: var(--space-12); }

        .mt-4 { margin-top: var(--space-4); }
        .mt-8 { margin-top: var(--space-8); }
        .mt-12 { margin-top: var(--space-12); }

        .p-4 { padding: var(--space-4); }
        .p-6 { padding: var(--space-6); }
        .p-8 { padding: var(--space-8); }

        .hidden { display: none; }
        .block { display: block; }
        .flex { display: flex; }
        .grid { display: grid; }

        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .gap-4 { gap: var(--space-4); }
        .gap-6 { gap: var(--space-6); }

        /* Loading States */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid var(--secondary);
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <!-- Welcome Modal -->
    <div id="welcomeModal" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeWelcomeModal()" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <h1 class="text-display" style="font-size: var(--text-3xl); margin-bottom: var(--space-6); text-align: center;">
                We're Not Just Managing Projects. We're Shaping People.
            </h1>
            <p style="margin-bottom: var(--space-6); font-weight: 500; font-size: var(--text-lg);">
                Welcome to The Ambidextrous Project Manager™ Global Community. Our vision extends far beyond mere
                project management. We're fostering a worldwide network of "ambidextrous thinkers" who transform complex
                challenges into meaningful impact.
            </p>
            <p style="margin-bottom: var(--space-6);">
                We believe everyone, in their unique way, is a project manager capable of shaping positive change in their lives and communities.
                Inspired by the elegance of leading professional services firms and the structured approach of global
                project management institutes, our platform is designed with a clean interface with warm sand-yellow accents that convey resilience and warmth.
            </p>
            <p>
                Your journey with us is designed to be welcoming, engaging, educating, empowering, and ultimately, inspiring you to contribute to a community
                that aims to become a household name in ambidextrous thinking.
            </p>
        </div>
    </div>

    <!-- Sustainability Popups -->
    <div id="environmentalPopup" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeSustainabilityPopup('environmental')" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <h2 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-6); text-align: center;">
                Environmental Awareness
            </h2>
            <p style="margin-bottom: var(--space-4);">
                At TAPM, we integrate environmental consciousness into every project management decision. Our green PM tools help teams:
            </p>
            <ul style="list-style: none; padding: 0; margin-bottom: var(--space-6);">
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Assess environmental impact of project decisions
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Implement sustainable resource management
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Reduce carbon footprint through digital collaboration
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Promote eco-friendly project methodologies
                </li>
            </ul>
            <p>
                We believe that responsible project management goes hand-in-hand with environmental stewardship,
                creating a sustainable future for generations to come.
            </p>
        </div>
    </div>

    <div id="socialPopup" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeSustainabilityPopup('social')" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <h2 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-6); text-align: center;">
                Social Empowerment
            </h2>
            <p style="margin-bottom: var(--space-4);">
                TAPM's social empowerment initiatives focus on building stronger, more inclusive communities through:
            </p>
            <ul style="list-style: none; padding: 0; margin-bottom: var(--space-6);">
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Comprehensive mentoring programs for young professionals
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Grassroots training in underserved communities
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Youth-led project initiatives
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Cross-cultural collaboration opportunities
                </li>
            </ul>
            <p>
                By empowering individuals and communities, we create a ripple effect of positive change that extends far
                beyond our immediate network.
            </p>
        </div>
    </div>

    <div id="governancePopup" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeSustainabilityPopup('governance')" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <h2 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-6); text-align: center;">
                Governance Transparency
            </h2>
            <p style="margin-bottom: var(--space-4);">
                TAPM maintains the highest standards of governance transparency through:
            </p>
            <ul style="list-style: none; padding: 0; margin-bottom: var(--space-6);">
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Clear role definitions and responsibilities
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Real-time impact dashboards and metrics
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Inclusive decision-making processes
                </li>
                <li style="display: flex; align-items: center; gap: var(--space-3);">
                    <i class="fas fa-check-circle" style="color: var(--success);"></i>
                    Open communication channels
                </li>
            </ul>
            <p>
                We believe that transparency builds trust, and trust is the foundation of sustainable, long-term
                partnerships and community growth.
            </p>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="section hero">
        <div class="container">
            <div class="hero-content animate-fade-in-up">
                <h1 class="hero-title">
                    <span class="text-gradient">The Ambidextrous Project Manager™</span>
                </h1>
                <p class="hero-subtitle">
                    Your Greatest Project is YOU — Lead It with Impact. Lead It Sustainably.
                </p>
                <div class="hero-cta">
                    <a href="#connect" class="btn btn-primary btn-lg">
                        <i class="fas fa-rocket"></i>
                        Explore TAPM
                    </a>
                    <a href="#connect" class="btn btn-secondary btn-lg">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                    <a href="#book" class="btn btn-primary btn-lg">
                        <i class="fas fa-book"></i>
                        Grab the Book
                    </a>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-item animate-float">
                        <span class="stat-number">GLOBAL</span>
                        <div class="stat-label">FORUM</div>
                        <div class="stat-description">Connect with leaders worldwide</div>
                    </div>
                    <div class="stat-item animate-float" style="animation-delay: 0.2s;">
                        <span class="stat-number">PREMIUM</span>
                        <div class="stat-label">EXPERIENCE</div>
                        <div class="stat-description">World-class training & resources</div>
                    </div>
                    <div class="stat-item animate-float" style="animation-delay: 0.4s;">
                        <span class="stat-number">AMBIDEXTROUS+</span>
                        <div class="stat-label">METHODOLOGY</div>
                        <div class="stat-description">Proven dual-mindset framework</div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <p style="font-size: var(--text-lg); color: var(--gray-300); margin-bottom: var(--space-4);">
                        GIRLS AND BOYS FROM MANY PARTS OF WORLD
                    </p>
                    <p style="font-size: var(--text-lg); color: var(--gray-300);">
                        ENTER AND CHANGE YOUR FUTURE WITH GLOBAL TEAMS
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability Section -->
    <section id="sustainability" class="section" style="background: var(--dark-light);">
        <div class="container">
            <div class="text-center mb-12">
                <h2 class="text-display" style="font-size: var(--text-5xl); margin-bottom: var(--space-6);">
                    <span class="text-gradient">SUSTAINABILITY</span> - HEADER
                </h2>
                <p style="font-size: var(--text-xl); color: var(--gray-300); max-width: 800px; margin: 0 auto;">
                    Every TAPM member contributes to and benefits from a <strong>shared value cycle</strong>, emphasizing:
                </p>
            </div>

            <div class="sustainability-grid">
                <div class="sustainability-card" onclick="openSustainabilityPopup('environmental')">
                    <i class="fas fa-leaf sustainability-icon"></i>
                    <h3 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Environmental Awareness
                    </h3>
                    <p style="color: var(--gray-300); margin-bottom: var(--space-4);">
                        Through green PM tools
                    </p>
                    <div style="color: var(--secondary); font-size: var(--text-sm); font-weight: 600;">
                        <i class="fas fa-arrow-right"></i> Click to learn more
                    </div>
                </div>

                <div class="sustainability-card" onclick="openSustainabilityPopup('social')">
                    <i class="fas fa-users sustainability-icon"></i>
                    <h3 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Social Empowerment
                    </h3>
                    <p style="color: var(--gray-300); margin-bottom: var(--space-4);">
                        Via mentoring, grassroots training, youth-led projects
                    </p>
                    <div style="color: var(--secondary); font-size: var(--text-sm); font-weight: 600;">
                        <i class="fas fa-arrow-right"></i> Click to learn more
                    </div>
                </div>

                <div class="sustainability-card" onclick="openSustainabilityPopup('governance')">
                    <i class="fas fa-balance-scale sustainability-icon"></i>
                    <h3 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Governance Transparency
                    </h3>
                    <p style="color: var(--gray-300); margin-bottom: var(--space-4);">
                        Clear roles, impact dashboards, inclusive decision-making
                    </p>
                    <div style="color: var(--secondary); font-size: var(--text-sm); font-weight: 600;">
                        <i class="fas fa-arrow-right"></i> Click to learn more
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p style="font-size: var(--text-xl); color: var(--gray-300); max-width: 600px; margin: 0 auto;">
                    <strong>TAPM isn't extractive — it's regenerative.</strong> We don't just use communities;
                    we build them up.
                </p>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section id="counter" class="section counter-section">
        <div class="container">
            <div class="text-center mb-12">
                <h2 style="font-size: var(--text-2xl); font-weight: 700; margin-bottom: var(--space-4);">
                    BIG NUMBERS
                </h2>
                <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-8);">
                    MARK+ANDRE+ELIANE
                </h3>
                <h1 class="text-display" style="font-size: var(--text-4xl); color: var(--secondary-light); margin-bottom: var(--space-12);">
                    Global Impact Through Local Action
                </h1>
            </div>

            <div class="counter-grid">
                <div class="counter-item">
                    <div class="counter-number" data-target="30" data-suffix="+">0</div>
                    <div class="counter-label">Islands</div>
                    <div class="counter-description">Projects delivered across the Caribbean region</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" data-target="19" data-suffix="+">0</div>
                    <div class="counter-label">Countries</div>
                    <div class="counter-description">Global reach of TAPM methodology and training</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" data-target="100" data-suffix="%">0</div>
                    <div class="counter-label">Purpose-Driven</div>
                    <div class="counter-description">Commitment to people and planet in every project</div>
                </div>
            </div>

            <div class="text-center">
                <h2 style="font-size: var(--text-2xl); font-weight: 700;">
                    MOVEMENT IN NUMBERS
                </h2>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="community" class="section community-section">
        <div class="container">
            <div class="community-grid">
                <div class="community-content">
                    <div class="mb-8">
                        <span style="display: inline-flex; align-items: center; padding: var(--space-2) var(--space-4); border-radius: var(--radius-full); background: rgba(214, 158, 46, 0.12); border: 1px solid rgba(214, 158, 46, 0.35); color: var(--secondary-light); font-size: var(--text-xs); font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: var(--space-6);">
                            Community
                        </span>
                        <h2 class="text-display" style="font-size: var(--text-4xl); line-height: 1.2; margin-bottom: var(--space-6);">
                            A Professional Home for Ambidextrous Leaders
                        </h2>
                        <p style="color: var(--gray-300); font-size: var(--text-lg); line-height: 1.6; max-width: 600px;">
                            Join a standards-driven network of practitioners, mentors, and change-makers. Learn, collaborate, and lead
                            projects that create measurable impact — locally and globally.
                        </p>
                    </div>

                    <div class="feature-grid">
                        <div class="feature-item">
                            <i class="fas fa-user-friends" style="color: var(--secondary);"></i>
                            <span>Mentorship Circles</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-globe" style="color: var(--secondary);"></i>
                            <span>Global Chapters</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chalkboard-teacher" style="color: var(--secondary);"></i>
                            <span>Expert Masterclasses</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-tasks" style="color: var(--secondary);"></i>
                            <span>Hands‑on Project Labs</span>
                        </div>
                    </div>

                    <div style="display: flex; gap: var(--space-4); flex-wrap: wrap; margin: var(--space-8) 0;">
                        <a href="#connect" class="btn btn-primary">
                            <i class="fas fa-users"></i>
                            Join Community
                        </a>
                        <a href="#solutions" class="btn btn-secondary">
                            <i class="fas fa-eye"></i>
                            View Programs
                        </a>
                    </div>

                    <div style="display: flex; gap: var(--space-6); align-items: center; margin-top: var(--space-8);">
                        <div>
                            <h3 style="color: var(--secondary); font-size: var(--text-sm); font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: var(--space-2);">
                                Certification
                            </h3>
                            <p style="color: var(--gray-300); font-size: var(--text-sm); font-weight: 500;">
                                TAPM Community Sustainability Certificate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="community-visual">
                    <div id="communityGlobe" class="globe-container"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="section" style="background: var(--dark-light);">
        <div class="container">
            <div class="text-center mb-12">
                <h2 class="text-display" style="font-size: var(--text-5xl); margin-bottom: var(--space-6);">
                    Why <span class="text-gradient">70% of Projects</span> Fail
                </h2>
                <p style="font-size: var(--text-xl); color: var(--gray-300); max-width: 800px; margin: 0 auto;">
                    Traditional project management approaches often struggle with today's complex challenges. Here's what we're changing:
                </p>
            </div>

            <div class="grid grid-3">
                <div class="card">
                    <div style="color: var(--accent); font-size: var(--text-4xl); margin-bottom: var(--space-6);">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-4);">
                        The Problem
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-times" style="color: var(--accent); margin-top: var(--space-1);"></i>
                            <span>Rigid methodologies</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-times" style="color: var(--accent); margin-top: var(--space-1);"></i>
                            <span>Lack of adaptability</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-times" style="color: var(--accent); margin-top: var(--space-1);"></i>
                            <span>One-dimensional thinking</span>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div style="color: var(--secondary); font-size: var(--text-4xl); margin-bottom: var(--space-6);">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Our Solution
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check" style="color: var(--success); margin-top: var(--space-1);"></i>
                            <span>Balanced approach</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check" style="color: var(--success); margin-top: var(--space-1);"></i>
                            <span>Adaptive frameworks</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-check" style="color: var(--success); margin-top: var(--space-1);"></i>
                            <span>Dual-mindset thinking</span>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div style="color: var(--success); font-size: var(--text-4xl); margin-bottom: var(--space-6);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-4);">
                        The Results
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-arrow-up" style="color: var(--success); margin-top: var(--space-1);"></i>
                            <span>95% success rate</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-arrow-up" style="color: var(--success); margin-top: var(--space-1);"></i>
                            <span>10X ROI improvement</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-arrow-up" style="color: var(--success); margin-top: var(--space-1);"></i>
                            <span>Resilient teams</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Approach Section -->
    <section id="approach" class="section" style="background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%); position: relative;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover; opacity: 0.2; z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="text-center mb-12">
                <h2 class="text-display" style="font-size: var(--text-5xl); margin-bottom: var(--space-6);">
                    The <span class="text-gradient">Ambidextrous</span> Framework
                </h2>
                <p style="font-size: var(--text-xl); color: var(--gray-300);">
                    A proven methodology that blends creativity and logic to navigate complexity
                </p>
            </div>

            <div class="grid grid-3">
                <div class="card card-glass">
                    <div style="color: var(--secondary); font-size: var(--text-4xl); margin-bottom: var(--space-6);">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Dual-Mindset
                    </h3>
                    <p style="color: var(--gray-300); margin-bottom: var(--space-4);">
                        Combining left-brain analytical rigor with right-brain creative thinking to solve complex challenges.
                    </p>
                    <ul style="list-style: none; padding: 0; font-size: var(--text-sm); color: var(--gray-400);">
                        <li style="display: flex; align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Analytical problem-solving</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Creative innovation</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Balanced decision-making</span>
                        </li>
                    </ul>
                </div>

                <div class="card card-glass">
                    <div style="color: var(--secondary); font-size: var(--text-4xl); margin-bottom: var(--space-6);">
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Adaptive Leadership
                    </h3>
                    <p style="color: var(--gray-300); margin-bottom: var(--space-4);">
                        Shifting seamlessly between strategic vision and tactical execution to lead through uncertainty.
                    </p>
                    <ul style="list-style: none; padding: 0; font-size: var(--text-sm); color: var(--gray-400);">
                        <li style="display: flex; align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Situational awareness</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Flexible methodologies</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Change management</span>
                        </li>
                    </ul>
                </div>

                <div class="card card-glass">
                    <div style="color: var(--secondary); font-size: var(--text-4xl); margin-bottom: var(--space-6);">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-4);">
                        Resilient Execution
                    </h3>
                    <p style="color: var(--gray-300); margin-bottom: var(--space-4);">
                        Turning setbacks into opportunities while maintaining focus on measurable outcomes.
                    </p>
                    <ul style="list-style: none; padding: 0; font-size: var(--text-sm); color: var(--gray-400);">
                        <li style="display: flex; align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Agile resilience</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: var(--space-2); margin-bottom: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Continuous improvement</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: var(--space-2);">
                            <i class="fas fa-circle" style="color: var(--secondary); font-size: 6px;"></i>
                            <span>Performance metrics</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="section" style="background: var(--dark-light);">
        <div class="container">
            <div class="text-center mb-12">
                <h2 class="text-display" style="font-size: var(--text-5xl); margin-bottom: var(--space-6);">
                    Our <span class="text-gradient">Solutions</span>
                </h2>
                <p style="font-size: var(--text-xl); color: var(--gray-300);">
                    Comprehensive services tailored to your organizational needs
                </p>
            </div>

            <div class="grid grid-2">
                <div class="card">
                    <div style="display: flex; align-items: start; gap: var(--space-6); margin-bottom: var(--space-6);">
                        <div style="color: var(--secondary); font-size: var(--text-3xl);">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-2);">
                                Project Transformation
                            </h3>
                            <p style="color: var(--gray-400); font-size: var(--text-sm);">
                                Align projects with organizational goals and optimize resources
                            </p>
                        </div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Project Audit & Evaluation</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Methodology Modernization</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Digital Transformation Strategy</span>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div style="display: flex; align-items: start; gap: var(--space-6); margin-bottom: var(--space-6);">
                        <div style="color: var(--secondary); font-size: var(--text-3xl);">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-2);">
                                Leadership Development
                            </h3>
                            <p style="color: var(--gray-400); font-size: var(--text-sm);">
                                Equip your teams with modern skills for complex challenges
                            </p>
                        </div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Ambidextrous Leadership Training</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Team Resilience Workshops</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Executive Coaching</span>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div style="display: flex; align-items: start; gap: var(--space-6); margin-bottom: var(--space-6);">
                        <div style="color: var(--secondary); font-size: var(--text-3xl);">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div>
                            <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-2);">
                                Digital Strategy
                            </h3>
                            <p style="color: var(--gray-400); font-size: var(--text-sm);">
                                Build a strong online presence in today's digital economy
                            </p>
                        </div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Digital Presence Development</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Content Strategy</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Online Community Building</span>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div style="display: flex; align-items: start; gap: var(--space-6); margin-bottom: var(--space-6);">
                        <div style="color: var(--secondary); font-size: var(--text-3xl);">
                            <i class="fas fa-book"></i>
                        </div>
                        <div>
                            <h3 style="font-size: var(--text-xl); font-weight: 700; margin-bottom: var(--space-2);">
                                Resources
                            </h3>
                            <p style="color: var(--gray-400); font-size: var(--text-sm);">
                                Tools to support your continuous growth
                            </p>
                        </div>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>The Ambidextrous PM Book</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3); margin-bottom: var(--space-4);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Online Courses</span>
                        </li>
                        <li style="display: flex; align-items: start; gap: var(--space-3);">
                            <i class="fas fa-check-circle" style="color: var(--secondary); margin-top: var(--space-1);"></i>
                            <span>Exclusive Membership</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section" style="background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%); position: relative;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80') center/cover; opacity: 0.2; z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="text-center mb-12">
                <h2 class="text-display" style="font-size: var(--text-5xl); margin-bottom: var(--space-6);">
                    Trusted by <span class="text-gradient">Organizations</span>
                </h2>
                <p style="font-size: var(--text-xl); color: var(--gray-300);">
                    Leaders who have transformed their projects with our framework
                </p>
            </div>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Emad Nasry">
                        </div>
                        <div class="testimonial-info">
                            <h4>Emad Nasry</h4>
                            <p>Head of Engineering & Maintenance</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        "Mark's methodology fundamentally changed how we approach complex projects. His ambidextrous framework delivers results where traditional methods fail."
                    </div>
                    <div class="testimonial-company">
                        <img src="https://via.placeholder.com/100x50?text=Shell" alt="Shell Corporation" style="height: 32px;">
                        <span style="font-size: var(--text-sm); color: var(--gray-400);">Shell Corporation</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Dr. Tony Prensa">
                        </div>
                        <div class="testimonial-info">
                            <h4>Dr. Tony Prensa</h4>
                            <p>Agile Coach & Change Advocate</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        "Mark's resilience framework bridges the gap between theory and practice. We've seen 40% improvement in project success rates after implementation."
                    </div>
                    <div class="testimonial-company">
                        <img src="https://via.placeholder.com/100x50?text=Huawei" alt="Huawei Technologies" style="height: 32px;">
                        <span style="font-size: var(--text-sm); color: var(--gray-400);">Huawei Technologies</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Priya Jaswal">
                        </div>
                        <div class="testimonial-info">
                            <h4>Priya Jaswal</h4>
                            <p>Growth Associate & Sales Strategist</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        "The ambidextrous approach transformed our digital transformation projects. Mark's methodology delivers both innovation and stability simultaneously."
                    </div>
                    <div class="testimonial-company">
                        <img src="https://via.placeholder.com/100x50?text=CARICOM" alt="CARICOM" style="height: 32px;">
                        <span style="font-size: var(--text-sm); color: var(--gray-400);">CARICOM</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="John Smith">
                        </div>
                        <div class="testimonial-info">
                            <h4>John Smith</h4>
                            <p>CTO, Tech Solutions Inc.</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        "Working with Mark helped us reduce project failures by 65%. His framework is now our standard operating procedure for all major initiatives."
                    </div>
                    <div class="testimonial-company">
                        <img src="https://via.placeholder.com/100x50?text=DPM" alt="DPM Group" style="height: 32px;">
                        <span style="font-size: var(--text-sm); color: var(--gray-400);">DPM Group</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <!-- Enhanced JavaScript -->
    <script>
        // Modern JavaScript with performance optimizations
        
        // Utility functions
        const utils = {
            debounce: (func, wait) => {
                let timeout;
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout);
                        func(...args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            },
            
            throttle: (func, limit) => {
                let inThrottle;
                return function() {
                    const args = arguments;
                    const context = this;
                    if (!inThrottle) {
                        func.apply(context, args);
                        inThrottle = true;
                        setTimeout(() => inThrottle = false, limit);
                    }
                }
            },

            isInViewport: (element) => {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
        };

        // Modal Management
        const modalManager = {
            show: (modalId) => {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('show');
                    document.body.style.overflow = 'hidden';
                }
            },
            
            hide: (modalId) => {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.remove('show');
                    document.body.style.overflow = '';
                }
            }
        };

        // Counter Animation
        const animateCounters = () => {
            const counters = document.querySelectorAll('.counter-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const suffix = counter.getAttribute('data-suffix') || '';
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    counter.textContent = Math.floor(current) + suffix;
                }, 16);
            });
        };

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    
                    // Trigger counter animation for counter section
                    if (entry.target.id === 'counter') {
                        animateCounters();
                    }
                }
            });
        }, observerOptions);

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            // Show welcome modal after a delay
            setTimeout(() => {
                modalManager.show('welcomeModal');
            }, 1000);

            // Observe sections for animations
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => observer.observe(section));

            // Add smooth scroll behavior
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Close modals when clicking outside
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.remove('show');
                        document.body.style.overflow = '';
                    }
                });
            });

            // Initialize Three.js globe
            initCommunityGlobe();
        });

        // Modal functions (maintaining compatibility with existing HTML)
        function closeWelcomeModal() {
            modalManager.hide('welcomeModal');
        }

        function openSustainabilityPopup(type) {
            modalManager.show(type + 'Popup');
        }

        function closeSustainabilityPopup(type) {
            modalManager.hide(type + 'Popup');
        }

        // Enhanced Three.js Globe Implementation
        async function initCommunityGlobe() {
            const container = document.getElementById('communityGlobe');
            if (!container || typeof THREE === 'undefined') {
                console.warn('Globe container or Three.js not found');
                return;
            }

            try {
                // Scene setup
                const scene = new THREE.Scene();
                const camera = new THREE.PerspectiveCamera(
                    75, 
                    container.clientWidth / container.clientHeight, 
                    0.1, 
                    1000
                );
                
                const renderer = new THREE.WebGLRenderer({
                    antialias: true,
                    alpha: true,
                    powerPreference: "high-performance"
                });

                renderer.setSize(container.clientWidth, container.clientHeight);
                renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
                renderer.setClearColor(0x0f172a, 1);
                container.appendChild(renderer.domElement);

                // Create globe
                const geometry = new THREE.SphereGeometry(5, 64, 64);
                
                // Enhanced material with better texturing
                const material = new THREE.MeshPhongMaterial({
                    color: 0x1a202c,
                    transparent: true,
                    opacity: 0.9,
                    shininess: 100
                });

                const globe = new THREE.Mesh(geometry, material);
                scene.add(globe);

                // Add atmosphere
                const atmosphereGeometry = new THREE.SphereGeometry(5.2, 64, 64);
                const atmosphereMaterial = new THREE.MeshPhongMaterial({
                    color: 0xd69e2e,
                    transparent: true,
                    opacity: 0.15,
                    side: THREE.BackSide
                });
                const atmosphere = new THREE.Mesh(atmosphereGeometry, atmosphereMaterial);
                scene.add(atmosphere);

                // Enhanced lighting
                const ambientLight = new THREE.AmbientLight(0x404040, 0.6);
                scene.add(ambientLight);

                const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
                directionalLight.position.set(10, 10, 5);
                directionalLight.castShadow = true;
                scene.add(directionalLight);

                const pointLight = new THREE.PointLight(0xd69e2e, 0.5, 100);
                pointLight.position.set(0, 0, 10);
                scene.add(pointLight);

                // Position camera
                camera.position.z = 15;

                // Animation loop with performance optimization
                let animationId;
                const animate = () => {
                    animationId = requestAnimationFrame(animate);

                    // Rotate globe
                    globe.rotation.y += 0.005;
                    atmosphere.rotation.y += 0.003;

                    // Gentle floating motion
                    const time = Date.now() * 0.001;
                    globe.position.y = Math.sin(time) * 0.1;
                    
                    // Pulsing light effect
                    pointLight.intensity = 0.5 + Math.sin(time * 2) * 0.2;

                    renderer.render(scene, camera);
                };

                // Handle resize
                const handleResize = utils.debounce(() => {
                    const width = container.clientWidth;
                    const height = container.clientHeight;

                    camera.aspect = width / height;
                    camera.updateProjectionMatrix();
                    renderer.setSize(width, height);
                }, 250);

                // Setup resize observer
                if (window.ResizeObserver) {
                    new ResizeObserver(handleResize).observe(container);
                } else {
                    window.addEventListener('resize', handleResize);
                }

                // Start animation
                animate();

                // Cleanup function
                const cleanup = () => {
                    if (animationId) {
                        cancelAnimationFrame(animationId);
                    }
                    if (container.contains(renderer.domElement)) {
                        container.removeChild(renderer.domElement);
                    }
                    geometry.dispose();
                    material.dispose();
                    atmosphereGeometry.dispose();
                    atmosphereMaterial.dispose();
                    renderer.dispose();
                };

                // Store cleanup function for potential use
                window.globeCleanup = cleanup;

            } catch (error) {
                console.error('Error initializing globe:', error);
                // Fallback content
                container.innerHTML = `
                    <div style="display: flex; align-items: center; justify-content: center; height: 100%; background: var(--dark-light); border-radius: var(--radius-xl); color: var(--gray-400);">
                        <div style="text-align: center;">
                            <i class="fas fa-globe" style="font-size: 4rem; color: var(--secondary); margin-bottom: 1rem;"></i>
                            <p>Global Community</p>
                        </div>
                    </div>
                `;
            }
        }

        // Performance monitoring
        if ('performance' in window) {
            window.addEventListener('load', () => {
                setTimeout(() => {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    console.log(`Page loaded in ${perfData.loadEventEnd - perfData.fetchStart}ms`);
                }, 0);
            });
        }
    </script>

    <!-- Three.js for Globe -->
    <script src="https://unpkg.com/three@0.158.0/build/three.min.js"></script>
</body>

</html>