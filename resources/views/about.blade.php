<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>About &ndash; Skyrose Atelier</title>

    <!-- Include shared head content (CSS, meta, etc.) -->
    @include('partials.head')

    <style>
        /* Hero section at the top of the page */
        .about-hero {
            background: linear-gradient(135deg, rgba(200,195,137,0.1) 0%, rgba(200,195,137,0.05) 100%);
            padding: 60px 20px;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Main heading styling */
        .about-hero h1 { 
            font-size: 42px; 
            margin: 0 0 15px 0; 
            color: #222; 
            font-weight: 700; 
        }

        /* Subtitle / description text */
        .about-hero p  { 
            font-size: 16px; 
            line-height: 1.8; 
            color: #666; 
            max-width: 700px; 
            margin: 0 auto 30px; 
        }

        /* Main content container */
        .about-content { 
            max-width: 1000px; 
            margin: 0 auto 60px; 
            padding: 0 20px; 
        }

        /* Layout for content sections (text + image) */
        .about-section { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 60px; 
            align-items: center; 
            margin-bottom: 80px; 
        }

        /* Alternate layout direction for better visual flow */
        .about-section:nth-child(even) { direction: rtl; }
        .about-section:nth-child(even) > * { direction: ltr; }

        /* Section headings */
        .about-text h2 { 
            font-size: 28px; 
            margin-bottom: 20px; 
            color: #222; 
            font-weight: 700; 
        }

        /* Paragraph styling for readability */
        .about-text p  { 
            font-size: 15px; 
            line-height: 1.8; 
            color: #555; 
            margin-bottom: 15px; 
        }

        /* Image container styling */
        .about-image { 
            display: flex; 
            justify-content: center; 
            align-items: center; 
        }

        /* Image styling with shadow and rounded corners */
        .about-image img { 
            max-width: 100%; 
            height: auto; 
            border-radius: 8px; 
            box-shadow: 0 8px 24px rgba(0,0,0,0.1); 
        }

        /* Grid layout for values section */
        .values-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 30px; 
            margin: 60px 0; 
        }

        /* Individual value cards */
        .value-card {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            border-top: 3px solid rgba(200,195,137,0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for cards */
        .value-card:hover { 
            transform: translateY(-4px); 
            box-shadow: 0 12px 32px rgba(0,0,0,0.08); 
        }

        /* Value card titles */
        .value-card h3 { 
            font-size: 18px; 
            margin-bottom: 12px; 
            color: #222; 
        }

        /* Value card text */
        .value-card p  { 
            font-size: 14px; 
            color: #666; 
            line-height: 1.6; 
        }

        /* Call-to-action section styling */
        .cta-section {
            background: rgba(200,195,137,0.1);
            padding: 60px 20px;
            text-align: center;
            border-radius: 8px;
            margin: 60px auto;
            max-width: 800px;
        }

        /* CTA heading */
        .cta-section h2 { 
            font-size: 28px; 
            margin-bottom: 15px; 
            color: #222; 
        }

        /* CTA text */
        .cta-section p  { 
            font-size: 16px; 
            color: #666; 
            margin-bottom: 30px; 
        }

        /* Primary button styling */
        .LearnMoreButton {
            background: #111;
            color: white;
            border: none;
            padding: 14px 36px;
            font-size: 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
            font-weight: 600;
        }

        /* Button hover effect */
        .LearnMoreButton:hover { 
            background: #333; 
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .about-section { grid-template-columns: 1fr; gap: 40px; }
            .about-section:nth-child(even) { direction: ltr; }
            .about-hero h1 { font-size: 28px; }
            .about-text h2 { font-size: 22px; }
            .values-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <div class="PageContent">

            <!-- Include navigation bar -->
            @include('partials.nav')

            <!-- Hero section -->
            <section class="about-hero">

                <!-- Brand logo -->
                <img src="{{ asset('images/logo Skyrose.jpg') }}" alt="Skyrose Atelier logo" style="width:260px;height:auto;margin-bottom:20px;border-radius:4px;">

                <h1 class="MainTitle">About Skyrose Atelier</h1>

                <!-- Intro description -->
                <p class="TitleDescription">
                    Founded with a love of fine craftsmanship, Skyrose Atelier offers
                    handcrafted pieces made from ethically sourced materials. Our artisans
                    blend traditional techniques with modern design to deliver heirloom-quality
                    jewelry for every occasion.
                </p>

                <!-- Additional brand details -->
                <p class="TitleDescription">
                    We focus on: craftsmanship, transparency, and exceptional customer service.
                    Every piece is inspected before shipping and comes with a simple care guide.
                </p>

                <!-- Link to products page -->
                <a href="/products"><button class="LearnMoreButton">Browse Collection</button></a>
            </section>

            <!-- Mission section -->
            <section class="Passion">
                <div class="PassionBox">

                    <!-- Mission heading -->
                    <h2 class="PassionTitle">Our Mission</h2>

                    <!-- Mission description -->
                    <p class="PassionBoxText">
                        To create timeless jewelry that celebrates life's special moments — designed
                        to be cherished for generations.
                    </p>
                </div>

                <!-- Supporting image -->
                <div class="PassionJewellryContainer">
                    <img src="{{ asset('images/HandCraftedJewellry.png') }}" alt="Craftsmanship" style="max-width:420px;">
                </div>
            </section>
        </div>

        <!-- Include footer -->
        @include('partials.footer')
    </div>
</body>
</html>


