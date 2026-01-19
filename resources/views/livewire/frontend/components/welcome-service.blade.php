<div>
    <style>
        .page-hero {
            background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%);
            padding: 120px 40px 80px;
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 98, 27, 0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        .page-hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .page-hero-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .page-hero-title {
            color: #ffffff;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 52px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .page-hero-subtitle {
            color: rgba(255, 255, 255, 0.85);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 20px;
            line-height: 1.7;
            max-width: 600px;
            margin: 0 auto;
        }

        .breadcrumb {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 10px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
        }

        .breadcrumb a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: #FF621B;
        }

        .breadcrumb span {
            color: #FF621B;
        }

        @media (max-width: 768px) {
            .page-hero-title {
                font-size: 36px;
            }
            .page-hero {
                padding: 100px 20px 60px;
            }
        }
    </style>

    <div class="page-hero">
        <div class="page-hero-content">
            <p class="page-hero-label">Our Solutions</p>
            <h1 class="page-hero-title">Enterprise Integration Services</h1>
            <p class="page-hero-subtitle">
                Mission-critical integration solutions connecting your systems with Tanzania's national payment infrastructure and beyond.
            </p>
            <div class="breadcrumb">
                <a href="/">Home</a>
                <span>/</span>
                <span>Solutions</span>
            </div>
        </div>
    </div>
</div>
