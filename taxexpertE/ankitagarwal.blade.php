@extends('front')
@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CA Ankit Agarwal | Startup & Business Consultant | Company Registration Expert India</title>
<meta name="description" content="CA Ankit Agarwal is a startup and business consultant with 6+ years of experience in company registration, Startup India advisory, LLP, and business structuring across India.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<!-- jQuery (required by Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>
/* ═══════════════════════════════════════════════
   RESET & BASE
═══════════════════════════════════════════════ */
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:auto;overflow-x:hidden}
body{
  font-family:'Montserrat',sans-serif;
  background:#030303;
  color:#fff;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
  max-width:100vw;
}

/* ═══════════════════════════════════════════════
   DESIGN TOKENS
═══════════════════════════════════════════════ */
:root{
  --black:#030303;
  --black-2:#080808;
  --black-3:#0f0f0f;
  --black-4:#141414;
  --black-5:#1a1a1a;
  --white:#ffffff;
  --white-90:rgba(255,255,255,0.90);
  --white-70:rgba(255,255,255,0.70);
  --white-50:rgba(255,255,255,0.50);
  --white-30:rgba(255,255,255,0.30);
  --white-15:rgba(255,255,255,0.15);
  --white-08:rgba(255,255,255,0.08);
  --white-04:rgba(255,255,255,0.04);
  --white-02:rgba(255,255,255,0.02);

  --border:rgba(255,255,255,0.08);
  --border-md:rgba(255,255,255,0.15);
  --border-bright:rgba(255,255,255,0.30);

  --r-xs:6px;--r-sm:10px;--r-md:16px;--r-lg:22px;--r-xl:28px;
  --ease:cubic-bezier(0.22,1,0.36,1);
  --ease-spring:cubic-bezier(0.34,1.56,0.64,1);
  --ease-out:cubic-bezier(0.0,0,0.2,1);
}

/* ═══════════════════════════════════════════════
   NOISE TEXTURE SVG overlay
═══════════════════════════════════════════════ */
.noise-overlay{
  position:fixed;inset:0;z-index:0;pointer-events:none;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='1'/%3E%3C/svg%3E");
  background-size:180px 180px;
  opacity:0.018;
  mix-blend-mode:overlay;
}

/* ═══════════════════════════════════════════════
   AMBIENT AURA
═══════════════════════════════════════════════ */
.aura-layer{
  position:fixed;pointer-events:none;z-index:0;
  border-radius:50%;filter:blur(100px);will-change:transform,opacity;
}
.aura-1{
  width:700px;height:700px;top:-150px;left:-150px;
  background:radial-gradient(circle,rgba(255,255,255,0.022) 0%,transparent 70%);
  animation:auraFloat1 16s ease-in-out infinite;
}
.aura-2{
  width:550px;height:550px;bottom:10%;right:-120px;
  background:radial-gradient(circle,rgba(255,255,255,0.016) 0%,transparent 70%);
  animation:auraFloat2 12s ease-in-out infinite;
}
.aura-3{
  width:420px;height:420px;top:45%;left:35%;
  background:radial-gradient(circle,rgba(255,255,255,0.010) 0%,transparent 70%);
  animation:auraFloat3 14s ease-in-out infinite;
}
@keyframes auraFloat1{0%,100%{transform:translateY(0) translateX(0)}50%{transform:translateY(35px) translateX(22px)}}
@keyframes auraFloat2{0%,100%{transform:translateY(0) translateX(0)}50%{transform:translateY(-28px) translateX(-18px)}}
@keyframes auraFloat3{0%,100%{transform:translateY(0) translateX(0)}33%{transform:translateY(22px) translateX(-22px)}66%{transform:translateY(-12px) translateX(26px)}}

/* ═══════════════════════════════════════════════
   PARTICLE DOTS
═══════════════════════════════════════════════ */
.particle{
  position:fixed;pointer-events:none;z-index:0;
  border-radius:50%;filter:blur(2px);will-change:transform;
  background:rgba(255,255,255,0.10);
}
.p1{width:3px;height:3px;left:15%;top:30%;animation:pf1 9s ease-in-out infinite}
.p2{width:2px;height:2px;left:75%;top:60%;animation:pf2 11s ease-in-out infinite}
.p3{width:4px;height:4px;left:55%;top:20%;animation:pf3 7s ease-in-out infinite}
.p4{width:2px;height:2px;left:85%;top:40%;animation:pf1 13s ease-in-out infinite reverse}
@keyframes pf1{0%,100%{transform:translateY(0)}50%{transform:translateY(-30px)}}
@keyframes pf2{0%,100%{transform:translateY(0)}50%{transform:translateY(-22px)}}
@keyframes pf3{0%,100%{transform:translateY(0)}50%{transform:translateY(-16px)}}

/* ═══════════════════════════════════════════════
   PROGRESS BAR
═══════════════════════════════════════════════ */
.progress-bar{
  position:fixed;top:0;left:0;width:0%;height:2px;
  background:linear-gradient(90deg,rgba(255,255,255,0.2) 0%,#fff 50%,rgba(255,255,255,0.5) 100%);
  z-index:9999;
  box-shadow:0 0 10px rgba(255,255,255,0.3),0 0 24px rgba(255,255,255,0.10);
  transition:width .08s linear;
  border-radius:0 2px 2px 0;
  will-change:width;
}

/* ═══════════════════════════════════════════════
   CURSOR GLOW
═══════════════════════════════════════════════ */
.cursor-glow{
  position:fixed;pointer-events:none;
  width:380px;height:380px;border-radius:50%;
  background:radial-gradient(circle,rgba(255,255,255,0.05) 0%,transparent 65%);
  transform:translate(-50%,-50%);
  z-index:1;display:none;will-change:transform,left,top;
  transition:width .3s var(--ease),height .3s var(--ease),opacity .3s ease;
}
.cursor-glow.over-interactive{
  width:500px;height:500px;
  background:radial-gradient(circle,rgba(255,255,255,0.065) 0%,transparent 65%);
}
@media(hover:hover){.cursor-glow{display:block}}

/* ═══════════════════════════════════════════════
   TOAST
═══════════════════════════════════════════════ */
.toast{
  position:fixed;bottom:24px;right:24px;
  background:rgba(12,12,12,.98);border:1px solid rgba(255,255,255,.22);
  border-radius:12px;padding:12px 22px;font-size:13px;font-weight:500;color:#fff;
  transform:translateY(80px);opacity:0;transition:all .35s var(--ease);z-index:9998;
  box-shadow:0 12px 40px rgba(0,0,0,0.8);
}
.toast.show{transform:translateY(0);opacity:1}

/* ═══════════════════════════════════════════════
   LAYOUT
═══════════════════════════════════════════════ */
.wrap{max-width:1280px;margin:0 auto;padding:0 15px;position:relative;z-index:2}
@media(max-width:768px){.wrap{padding:0 14px}}

/* ═══════════════════════════════════════════════
   SECTION BACKGROUNDS — Premium differentiation
═══════════════════════════════════════════════ */
.sec-bg-pure{background:var(--black)}
.sec-bg-subtle{
  background:linear-gradient(180deg,var(--black) 0%,var(--black-3) 50%,var(--black) 100%);
  position:relative;
}
.sec-bg-subtle::before{
  content:'';position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(ellipse 80% 60% at 50% 0%,rgba(255,255,255,0.025) 0%,transparent 70%);
}
.sec-bg-raised{
  background:var(--black-3);
  position:relative;
  border-top:1px solid var(--border);
  border-bottom:1px solid var(--border);
}
.sec-bg-raised::before{
  content:'';position:absolute;inset:0;pointer-events:none;
  background:
    radial-gradient(ellipse 60% 40% at 20% 50%,rgba(255,255,255,0.018) 0%,transparent 60%),
    radial-gradient(ellipse 40% 60% at 80% 50%,rgba(255,255,255,0.012) 0%,transparent 60%);
}
.sec-bg-grid{
  background:var(--black-2);
  position:relative;
}
.sec-bg-grid::before{
  content:'';position:absolute;inset:0;pointer-events:none;
  background-image:
    linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),
    linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);
  background-size:40px 40px;
  -webkit-mask-image:radial-gradient(ellipse 100% 100% at 50% 50%,#000 30%,transparent 80%);
  mask-image:radial-gradient(ellipse 100% 100% at 50% 50%,#000 30%,transparent 80%);
}
.sec-bg-stripe{
  background:repeating-linear-gradient(
    -45deg,
    var(--black) 0px,var(--black) 14px,
    rgba(255,255,255,0.008) 14px,rgba(255,255,255,0.008) 15px
  );
  position:relative;
}

/* ═══════════════════════════════════════════════
   SECTION DIVIDERS — styled
═══════════════════════════════════════════════ */
.sec-divider{
  position:relative;height:1px;overflow:visible;
  background:linear-gradient(90deg,transparent 0%,var(--border-md) 30%,var(--border-md) 70%,transparent 100%);
  margin:0;
}
.sec-divider::before{
  content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  width:6px;height:6px;border-radius:50%;
  background:#fff;
  box-shadow:0 0 0 3px rgba(255,255,255,0.08),0 0 12px rgba(255,255,255,0.2);
}

/* ═══════════════════════════════════════════════
   BADGE
═══════════════════════════════════════════════ */
.badge{
  display:inline-flex;align-items:center;gap:7px;
  background:rgba(255,255,255,0.05);
  border:1px solid var(--border-md);
  border-radius:100px;padding:5px 15px;
  font-size:10.5px;font-weight:700;color:var(--white-70);
  letter-spacing:.06em;text-transform:uppercase;
  box-shadow:0 0 18px rgba(255,255,255,0.04),inset 0 1px 0 rgba(255,255,255,0.08);
}
.badge-dot{
  width:6px;height:6px;background:#fff;border-radius:50%;
  animation:pulse 2s infinite;position:relative;
}
.badge-dot::after{
  content:'';position:absolute;inset:-3px;border-radius:50%;
  background:rgba(255,255,255,0.3);
  animation:pulseRing 2s infinite;
}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(.8)}}
@keyframes pulseRing{0%{transform:scale(1);opacity:0.7}100%{transform:scale(2.4);opacity:0}}

/* ═══════════════════════════════════════════════
   BUTTONS
═══════════════════════════════════════════════ */
.btn{
  display:inline-flex;align-items:center;gap:8px;
  padding:11px 24px;border-radius:var(--r-sm);
  font-size:13px;font-weight:700;cursor:pointer;
  transition:all .3s var(--ease);border:none;
  text-decoration:none;letter-spacing:.3px;
  font-family:'Montserrat',sans-serif;
  position:relative;overflow:hidden;will-change:transform;
}
.btn::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(105deg,transparent 40%,rgba(255,255,255,0.18),transparent 60%);
  transform:translateX(-100%);
  transition:transform .5s var(--ease);pointer-events:none;
}
.btn:hover::after{transform:translateX(100%)}

.btn-primary{
  background:#fff;color:#000;border:1.5px solid #fff;
  box-shadow:0 4px 20px rgba(255,255,255,0.10);
}
.btn-primary:hover{
  background:#000 !important;color:#fff !important;
  border-color:rgba(255,255,255,0.5) !important;
  transform:translateY(-2px);
  box-shadow:0 8px 28px rgba(255,255,255,0.14),0 0 0 1px rgba(255,255,255,0.15) !important;
}
.btn-primary:active{transform:scale(0.96) translateY(0)}

.btn-secondary{
  background:rgba(255,255,255,0.05);color:#fff;
  border:1.5px solid rgba(255,255,255,0.25);
}
.btn-secondary:hover{
  background:#fff !important;color:#000 !important;
  border-color:#fff !important;transform:translateY(-2px);
  box-shadow:0 8px 24px rgba(255,255,255,0.15) !important;
}

.btn-callback{
  background:transparent;color:#fff;
  border:1.5px solid rgba(255,255,255,0.45);
}
.btn-callback:hover{
  background:#fff !important;color:#000 !important;
  border-color:#fff !important;transform:translateY(-2px);
  box-shadow:0 8px 24px rgba(255,255,255,0.15) !important;
}

.btn-cta-hire{
  background:#000 !important;color:#fff !important;
  border:1.5px solid rgba(255,255,255,0.5) !important;
  box-shadow:0 8px 28px rgba(255,255,255,0.08),0 0 0 1px rgba(255,255,255,0.12) !important;
}
.btn-cta-hire:hover{
  background:#000 !important;color:#fff !important;
  border-color:rgba(255,255,255,0.5) !important;transform:none !important;
  box-shadow:0 8px 28px rgba(255,255,255,0.08),0 0 0 1px rgba(255,255,255,0.12) !important;
}
.btn-cta-hire:active{transform:scale(0.96) !important}
.btn-cta-hire::after{display:none !important}

.btn-arrow{width:14px;height:14px;fill:none;stroke:currentColor;stroke-width:2;transition:transform .3s var(--ease)}
.btn:hover .btn-arrow{transform:translateX(3px)}

/* ═══════════════════════════════════════════════
   CARD BASE
═══════════════════════════════════════════════ */
.card{
  background:var(--white-04);border:1px solid var(--border);
  border-radius:var(--r-lg);padding:28px;
  transition:border-color .3s var(--ease),box-shadow .3s var(--ease),transform .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.card:hover{
  border-color:rgba(255,255,255,0.22);
  box-shadow:0 24px 56px rgba(0,0,0,.65),0 0 0 1px rgba(255,255,255,0.04);
}
.card::before{
  content:'';position:absolute;top:0;left:-100%;
  width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.025),transparent);
  transition:left .7s var(--ease);pointer-events:none;
}
.card:hover::before{left:100%}

/* ═══════════════════════════════════════════════
   SECTION TITLE
═══════════════════════════════════════════════ */
.sec-title{
  font-size:28px;font-weight:900;letter-spacing:-.03em;color:#fff;
  position:relative;display:inline-block;line-height:1.05;
  font-family:'Montserrat',sans-serif;
}
.sec-title-serif{
  font-family:'Playfair Display',serif;
  font-size:30px;font-weight:900;letter-spacing:-.02em;color:#fff;
  position:relative;display:inline-block;line-height:1.05;
  font-style:italic;
}
.sec-title::after,.sec-title-serif::after{
  content:'';position:absolute;bottom:-10px;left:0;
  width:36px;height:2px;background:#fff;border-radius:2px;
}
.sec-sub{font-size:13.5px;color:var(--white-50);margin-top:20px;line-height:1.75}
@media(max-width:768px){
  .sec-title{font-size:20px}
  .sec-title::after{width:26px}
  .sec-title-serif{font-size:21px}
  .sec-title-serif::after{width:26px}
  .sec-sub{font-size:12.5px;margin-top:14px}
}

/* ═══════════════════════════════════════════════
   SECTIONS
═══════════════════════════════════════════════ */
.sec{padding:44px 0}
.sec-sm{padding:32px 0}
@media(max-width:768px){.sec{padding:24px 0}.sec-sm{padding:16px 0}}

/* ═══════════════════════════════════════════════
   SCROLL REVEAL
═══════════════════════════════════════════════ */
.reveal{opacity:0;transform:translateY(26px);transition:opacity .65s var(--ease),transform .65s var(--ease)}
.reveal.visible{opacity:1;transform:translateY(0)}
.reveal-stagger > *{opacity:0;transform:translateY(22px);transition:opacity .55s var(--ease),transform .55s var(--ease)}
.reveal-stagger.visible > *:nth-child(1){opacity:1;transform:translateY(0);transition-delay:.04s}
.reveal-stagger.visible > *:nth-child(2){opacity:1;transform:translateY(0);transition-delay:.10s}
.reveal-stagger.visible > *:nth-child(3){opacity:1;transform:translateY(0);transition-delay:.16s}
.reveal-stagger.visible > *:nth-child(4){opacity:1;transform:translateY(0);transition-delay:.22s}
.reveal-stagger.visible > *:nth-child(5){opacity:1;transform:translateY(0);transition-delay:.28s}
.reveal-stagger.visible > *:nth-child(6){opacity:1;transform:translateY(0);transition-delay:.34s}
.reveal-section .sec-title,.reveal-section .sec-title-serif{opacity:0;transform:translateY(20px);transition:opacity .55s var(--ease),transform .55s var(--ease)}
.reveal-section .sec-sub{opacity:0;transform:translateY(14px);transition:opacity .55s var(--ease) .08s,transform .55s var(--ease) .08s}
.reveal-section.visible .sec-title,.reveal-section.visible .sec-title-serif{opacity:1;transform:translateY(0)}
.reveal-section.visible .sec-sub{opacity:1;transform:translateY(0)}

/* ═══════════════════════════════════════════════
   HERO — Mobile-first redesign
═══════════════════════════════════════════════ */
.hero{
  position:relative;
  background:var(--black);
  padding-top:16px;
  padding-bottom:0;
}

/* Mobile */
@media(max-width:768px){
  .hero{height:auto;min-height:auto;padding:12px 0 0}
  .hero-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:10px;
    align-items:center;
  }
  .hero .badge,.info-strip,.hero-trust{display:none !important}
  .hero-metric{display:flex !important}
  .metric-1{top:-10px;right:-4px;padding:6px 10px;transform:scale(0.82);transform-origin:top right}
  .metric-2{bottom:-10px;left:-4px;padding:6px 10px;transform:scale(0.82);transform-origin:bottom left}
  .hero-metric-val{font-size:13px}
  .hero-metric-lbl{font-size:7.5px}
  .hero-content{max-width:100%;justify-content:center;padding-right:2px}
  .hero-glass-card{padding:12px 11px 11px;border-radius:18px}
  .hero-name{
    font-size:24px;line-height:1.03;margin-bottom:9px;
    background:linear-gradient(135deg,#fff 55%,#bbb);
    -webkit-background-clip:text;-webkit-text-fill-color:transparent;
    animation:heroReveal .6s var(--ease) .18s forwards;
  }
  .hero-pills-grid{gap:5px;margin-bottom:9px}
  .hero-pill{font-size:9px;padding:5px 9px;gap:4px}
  .hero-pill svg{width:9px;height:9px}
  .hero-pill.pill-desktop-only{display:none}
  .hero-pill-dot{width:4px;height:4px}
  .hero-bio-pill{display:none}
  .hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}
  .hero-photo-card{
    width:100%;max-width:145px;height:185px;border-radius:18px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.14);
    backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);
    box-shadow:0 12px 36px rgba(0,0,0,0.65),inset 0 1px 0 rgba(255,255,255,0.10);
    overflow:hidden;
    transform:perspective(1000px) rotateX(0deg) rotateY(0deg);
    transition:transform 0.2s ease,box-shadow 0.2s ease;
  }
  .hero-photo-card::before{
    content:'';position:absolute;inset:0;border-radius:inherit;
    background:linear-gradient(125deg,rgba(255,255,255,0.22),transparent 32%);
    opacity:0.22;pointer-events:none;z-index:2;
  }
  .hero-photo-card::after{display:none}
  .hero-avatar{width:100%;height:100%;object-fit:cover;object-position:center 18%;filter:contrast(1.08) brightness(1.04)}
  .mobile-cta{display:flex !important;gap:5px;margin-top:8px}
  .mobile-cta .btn{
    flex:1;padding:8px 5px;font-size:9.5px;border-radius:10px;
    justify-content:center;letter-spacing:0;
  }
}

/* Desktop */
.hero-grid{display:grid;grid-template-columns:minmax(0,1fr) 300px;gap:48px;align-items:center;width:100%}
.hero-content{display:flex;flex-direction:column;justify-content:center;max-width:580px}

.hero-glass-card{
  background:rgba(255,255,255,0.04);
  backdrop-filter:blur(30px);-webkit-backdrop-filter:blur(30px);
  border:1px solid rgba(255,255,255,0.13);
  border-radius:26px;padding:22px 24px 20px;
  position:relative;overflow:hidden;
  transition:border-color .4s var(--ease),box-shadow .4s var(--ease);
  box-shadow:0 24px 56px rgba(0,0,0,0.4),inset 0 1px 0 rgba(255,255,255,0.08);
}
.hero-glass-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.32),transparent);
  pointer-events:none;z-index:1;
}
.hero-glass-card::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(140deg,rgba(255,255,255,0.055) 0%,transparent 55%);
  pointer-events:none;border-radius:inherit;z-index:0;
}
.hero-glass-card > *{position:relative;z-index:1}
.hero-glass-card:hover{
  border-color:rgba(255,255,255,0.24);
  box-shadow:0 28px 64px rgba(0,0,0,0.55),0 0 0 1px rgba(255,255,255,0.05);
}

.hero-name{
  font-size:clamp(42px,5vw,52px);line-height:1.02;font-weight:900;letter-spacing:-.03em;
  background:linear-gradient(135deg,#fff 30%,#999 55%,#fff 70%,#666 90%);
  background-size:300% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  margin-bottom:12px;opacity:0;
  animation:heroReveal .6s var(--ease) .18s forwards,shimmerName 8s linear 1s infinite;
}
@keyframes shimmerName{0%{background-position:0% center}100%{background-position:300% center}}

.hero-pills-grid{
  display:flex;flex-wrap:wrap;gap:7px;margin-bottom:11px;
  opacity:0;transform:translateY(12px);
  animation:heroReveal .6s var(--ease) .30s forwards;
}
.hero-pill{
  display:inline-flex;align-items:center;gap:6px;
  background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.14);
  border-radius:100px;padding:7px 14px;font-size:11px;font-weight:600;
  color:rgba(255,255,255,0.88);letter-spacing:0.01em;
  font-family:'Montserrat',sans-serif;position:relative;overflow:hidden;
  transition:background .25s ease,border-color .25s ease,transform .25s ease;cursor:default;
}
.hero-pill::before{
  content:'';position:absolute;top:0;left:0;right:0;height:50%;
  background:linear-gradient(180deg,rgba(255,255,255,0.10),transparent);
  border-radius:100px 100px 0 0;pointer-events:none;
}
.hero-pill:hover{background:rgba(255,255,255,0.13);border-color:rgba(255,255,255,0.30);transform:translateY(-1px)}
.hero-pill svg{width:11px;height:11px;stroke:rgba(255,255,255,0.6);fill:none;stroke-width:2;flex-shrink:0}
.hero-pill-dot{width:5px;height:5px;border-radius:50%;background:rgba(255,255,255,0.4);flex-shrink:0;animation:pulse 2s ease-in-out infinite}

.hero-bio-pill{
  background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.09);
  border-radius:14px;padding:10px 14px;font-size:11px;font-weight:500;
  color:#6e6e6e;line-height:1.65;margin-bottom:14px;
  font-family:'Montserrat',sans-serif;opacity:0;transform:translateY(10px);
  animation:heroReveal .6s var(--ease) .38s forwards;
  position:relative;overflow:hidden;
}
.hero-bio-pill::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.14),transparent);
}

.hero-badge-wrap{opacity:0;transform:translateY(16px);animation:heroReveal .6s var(--ease) .1s forwards;margin-bottom:10px}
.hero-btns{opacity:0;transform:translateY(10px);animation:heroReveal .6s var(--ease) .46s forwards}
.hero-photo-wrap{opacity:0;transform:translateY(18px);animation:heroReveal .8s var(--ease) .22s forwards}
@keyframes heroReveal{to{opacity:1;transform:translateY(0)}}

/* Desktop photo card */
.hero-photo-card{
  width:280px;height:360px;border-radius:22px;overflow:hidden;
  background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.09);
  backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);
  transform:perspective(1000px) rotateX(0deg) rotateY(0deg);
  transition:transform 0.4s cubic-bezier(0.22,1,0.36,1),box-shadow 0.4s ease;
  will-change:transform;cursor:default;
  box-shadow:0 24px 48px -8px rgba(0,0,0,0.6),0 0 0 1px rgba(255,255,255,0.05);
}
.hero-photo-card::before{
  content:'';position:absolute;inset:0;border-radius:inherit;
  background:linear-gradient(120deg,rgba(255,255,255,0.1),transparent 40%);
  opacity:0.6;pointer-events:none;z-index:2;transition:opacity .3s ease;
}
.hero-photo-card::after{
  content:'';position:absolute;inset:0;border-radius:inherit;
  background:linear-gradient(105deg,rgba(255,255,255,0) 40%,rgba(255,255,255,0.07) 50%,rgba(255,255,255,0) 60%);
  background-size:200% 200%;pointer-events:none;z-index:3;
  animation:glossSweep 6s ease-in-out infinite;
}
@keyframes glossSweep{0%,100%{background-position:0% 50%}50%{background-position:100% 50%}}
.hero-avatar{width:100%;height:100%;object-fit:cover;object-position:center 15%;display:block;filter:contrast(1.05) brightness(1.02)}

.hero-trust{
  position:absolute;bottom:-16px;left:50%;transform:translateX(-50%);
  backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);
  background:rgba(18,18,18,0.92);border:1px solid rgba(255,255,255,0.16);
  border-radius:100px;padding:6px 16px;font-size:10px;font-weight:600;color:#aaa;
  white-space:nowrap;display:flex;align-items:center;gap:6px;z-index:10;
  transition:transform .25s var(--ease),box-shadow .25s var(--ease);
}
.hero-trust:hover{transform:translateX(-50%) translateY(-2px);box-shadow:0 6px 22px rgba(255,255,255,0.06)}
.trust-check{
  width:14px;height:14px;background:#fff;border-radius:50%;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative;
}
.trust-check::before{
  content:'';position:absolute;inset:-4px;border-radius:50%;
  border:1px solid rgba(255,255,255,0.3);animation:trustPulse 2.5s ease-out infinite;
}
@keyframes trustPulse{0%{transform:scale(1);opacity:0.6}100%{transform:scale(2);opacity:0}}

.hero-metric{
  position:absolute;backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);
  background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.14);
  border-radius:14px;padding:10px 14px;display:flex;flex-direction:column;gap:2px;
  box-shadow:0 8px 32px rgba(0,0,0,0.5),inset 0 1px 0 rgba(255,255,255,0.09);
  z-index:5;will-change:transform;
  transition:transform .3s var(--ease),box-shadow .3s var(--ease);cursor:default;
}
.hero-metric:hover{transform:translateY(-3px) !important;box-shadow:0 16px 42px rgba(0,0,0,0.55),inset 0 1px 0 rgba(255,255,255,0.12)}
.hero-metric-val{font-size:16px;font-weight:900;color:#fff;letter-spacing:-.02em}
.hero-metric-lbl{font-size:9px;color:#666;font-weight:600;text-transform:uppercase;letter-spacing:.06em}
.metric-1{top:-20px;right:-20px;animation:metricFloat1 8s ease-in-out infinite}
.metric-2{bottom:40px;left:-24px;animation:metricFloat2 10s ease-in-out infinite}
@keyframes metricFloat1{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes metricFloat2{0%,100%{transform:translateY(0)}50%{transform:translateY(7px)}}

.info-strip{display:none}

/* ═══════════════════════════════════════════════
   ABOUT — Premium glow card
═══════════════════════════════════════════════ */
.about-card{
  padding:26px;border-radius:20px;
  background:linear-gradient(135deg,rgba(255,255,255,0.05) 0%,rgba(255,255,255,0.02) 100%);
  border:1px solid rgba(255,255,255,0.20) !important;
  box-shadow:
    0 0 20px rgba(255,255,255,0.06),
    0 0 48px rgba(255,255,255,0.02),
    inset 0 0 20px rgba(255,255,255,0.02) !important;
  transition:border-color .35s var(--ease),box-shadow .35s var(--ease) !important;
  position:relative;overflow:hidden;
}
.about-card::after{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.3),transparent);
  pointer-events:none;
}
.about-card::before{display:none !important}
.about-card:hover{
  border-color:rgba(255,255,255,0.38) !important;
  box-shadow:
    0 0 30px rgba(255,255,255,0.10),
    0 0 60px rgba(255,255,255,0.04),
    0 24px 56px rgba(0,0,0,0.5) !important;
}
.about-title{
  font-size:17px;font-weight:800;margin-bottom:13px;color:#fff;
  letter-spacing:-.01em;
}
.about-text{font-size:13px;color:#fff !important;line-height:1.75}
.about-toggle{margin-top:13px;font-size:12px;font-weight:700;color:#6ea8ff;cursor:pointer;transition:opacity .2s ease}
.about-toggle:hover{opacity:0.7}

/* ═══════════════════════════════════════════════
   EXPERTISE GRID — Enhanced mobile
═══════════════════════════════════════════════ */
.expertise-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
@media(max-width:768px){.expertise-grid{grid-template-columns:repeat(2,1fr);gap:10px}}

.exp-card{
  background:linear-gradient(140deg,rgba(255,255,255,0.055) 0%,rgba(255,255,255,0.015) 100%);
  border:1px solid rgba(255,255,255,0.11);
  border-radius:var(--r-md);padding:22px;
  transition:border-color .35s var(--ease),transform .35s var(--ease),box-shadow .35s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.exp-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.045),transparent);
  transition:left .65s var(--ease);pointer-events:none;
}
.exp-card:hover{
  border-color:rgba(255,255,255,0.30);
  transform:translateY(-5px) scale(1.015);
  box-shadow:0 22px 52px rgba(0,0,0,.65),0 0 0 1px rgba(255,255,255,0.06),0 0 30px rgba(255,255,255,0.03);
}
.exp-card:hover::before{left:100%}

.exp-icon{
  width:44px;height:44px;border-radius:12px;
  background:linear-gradient(140deg,rgba(255,255,255,0.14),rgba(255,255,255,0.04));
  border:1px solid rgba(255,255,255,0.13);
  display:flex;align-items:center;justify-content:center;
  margin-bottom:14px;
  transition:transform .35s var(--ease),box-shadow .35s var(--ease);
  box-shadow:0 4px 14px rgba(0,0,0,0.35);
}
.exp-card:hover .exp-icon{transform:scale(1.12) rotate(4deg);box-shadow:0 6px 20px rgba(0,0,0,0.45),0 0 14px rgba(255,255,255,0.05)}
.exp-icon svg{width:20px;height:20px;stroke:#fff;fill:none;stroke-width:1.5}
.exp-title{font-size:13.5px;font-weight:800;color:#fff;margin-bottom:8px;letter-spacing:-.01em}
.exp-desc{font-size:11.5px;color:rgba(255,255,255,0.52);line-height:1.65}

@media(max-width:768px){
  .exp-card{padding:15px 13px;min-height:108px}
  .exp-card .exp-desc{display:none}
  .exp-card .exp-icon{width:36px;height:36px;border-radius:10px;margin-bottom:9px}
  .exp-card .exp-icon svg{width:16px;height:16px}
  .exp-card .exp-title{font-size:12px;font-weight:800;line-height:1.3}
}

/* ═══════════════════════════════════════════════
   TAX SERVICES SECTION
═══════════════════════════════════════════════ */
#tax-services-section{
  font-family:'Montserrat',sans-serif;
  width:100%;box-sizing:border-box;
  padding:44px 0;
}
@media(max-width:768px){#tax-services-section{padding:24px 0}}

.section-title{
  font-size:28px;font-weight:900;letter-spacing:-.025em;color:#ffffff;
  margin:0 0 1px 0;font-family:'Montserrat',sans-serif;line-height:1.08;
}
.section-subtitle{
  font-size:13.5px;color:rgba(255,255,255,0.58);font-weight:400;
  line-height:1.65;margin:0;max-width:560px;
  font-family:'Montserrat',sans-serif;
}
.section-title::after{
  content:'';display:block;width:34px;height:2px;
  background:#fff;border-radius:2px;margin-top:10px;
}
.web-only{display:block}
@media(max-width:768px){.web-only{display:none}}

@keyframes ttc-pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.4;transform:scale(1.5)}}

#tax-services-section .owl-stage{display:flex !important;align-items:stretch !important}
#tax-services-section .owl-item{display:flex !important;height:auto}
#tax-services-section .owl-item > div{display:flex;width:100%}
#tax-services-section .ttc-card-wrap{height:100%;display:flex;flex-direction:column;justify-content:space-between;gap:6px}

#tax-services-section .owl-nav{display:flex !important;align-items:center;justify-content:center;gap:7px;margin-top:22px !important}
#tax-services-section .owl-prev,#tax-services-section .owl-next{
  width:26px !important;height:26px !important;
  background:rgba(255,255,255,0.06) !important;
  border:1px solid rgba(255,255,255,0.12) !important;
  border-radius:50% !important;display:flex !important;align-items:center !important;
  justify-content:center !important;color:#fff !important;font-size:11px !important;
  transition:all 0.25s ease !important;line-height:1 !important;margin:0 !important;
}
#tax-services-section .owl-prev:hover,#tax-services-section .owl-next:hover{
  background:rgba(255,255,255,0.12) !important;border-color:rgba(255,255,255,0.28) !important;
}
#tax-services-section .owl-prev.disabled,#tax-services-section .owl-next.disabled{opacity:0.3;pointer-events:none}
#tax-services-section .owl-dots{display:flex !important;justify-content:center !important;gap:4px !important;margin-top:12px !important}
#tax-services-section .owl-dot span{width:3px !important;height:3px !important;background:rgba(255,255,255,0.14) !important;border-radius:999px !important;transition:all 0.3s ease !important;margin:0 !important}
#tax-services-section .owl-dot.active span{background:#fff !important;width:12px !important}
#tax-services-section .ttc-tab-body::-webkit-scrollbar{width:2px}
#tax-services-section .ttc-tab-body::-webkit-scrollbar-track{background:transparent}
#tax-services-section .ttc-tab-body::-webkit-scrollbar-thumb{background:rgba(255,255,255,0.07);border-radius:99px}

.ttc-tab-pills{
  display:flex;gap:3px;
  background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);
  border-radius:999px;padding:3px;margin-bottom:7px;
  overflow:hidden;box-sizing:border-box;width:100%;
}
.ttc-tab-pills button{
  flex:1;min-width:0;overflow:hidden;white-space:nowrap;
  text-overflow:ellipsis;box-sizing:border-box;
}

@media(max-width:768px){
  #ttc-slider .owl-stage-outer{overflow:visible !important}
  #ttc-slider .owl-stage{display:flex !important;align-items:stretch}
  #ttc-slider .owl-item{display:flex;justify-content:center}
  #ttc-slider .owl-item > div{width:76vw !important;max-width:76vw !important}
  #ttc-slider .ttc-card-wrap{width:100% !important}
}

/* Filter chips */
#ttc-filter-wrap{margin-bottom:28px}
.ttc-filter-quote{
  font-size:12.5px;font-style:italic;color:rgba(255,255,255,0.38);
  margin-bottom:13px;letter-spacing:0.01em;font-family:'Montserrat',sans-serif;
  display:flex;align-items:center;gap:10px;
}
.ttc-filter-quote::before{
  content:'';display:inline-block;width:26px;height:1px;
  background:rgba(255,255,255,0.18);flex-shrink:0;
}
#ttc-filter-chips{display:flex;flex-wrap:wrap;gap:8px}
.ttc-filter-chip{
  display:inline-flex;align-items:center;
  padding:6px 16px;border-radius:999px;font-size:11px;font-weight:600;
  cursor:pointer;border:1px solid rgba(255,255,255,0.14);
  background:rgba(255,255,255,0.04);color:rgba(255,255,255,0.50);
  font-family:'Montserrat',sans-serif;text-transform:capitalize;
  transition:all 0.22s ease;letter-spacing:0.02em;white-space:nowrap;
}
.ttc-filter-chip:hover{border-color:rgba(255,255,255,0.28);color:#fff;background:rgba(255,255,255,0.08)}
.ttc-filter-chip.active{background:#fff;color:#000;border-color:#fff;box-shadow:0 0 16px rgba(255,255,255,0.16)}
#ttc-no-results{
  display:none;text-align:center;padding:48px 20px;
  color:rgba(255,255,255,0.28);font-size:13px;font-family:'Montserrat',sans-serif;
}
@media(max-width:768px){
  .ttc-filter-chip{font-size:10px;padding:5px 13px;flex-shrink:0}
  #ttc-filter-chips{
    flex-wrap:nowrap;overflow-x:auto;-webkit-overflow-scrolling:touch;
    scrollbar-width:none;padding-bottom:6px;gap:7px;
    -webkit-mask-image:linear-gradient(to right,transparent 0%,#000 6%,#000 90%,transparent 100%);
    mask-image:linear-gradient(to right,transparent 0%,#000 6%,#000 90%,transparent 100%);
  }
  #ttc-filter-chips::-webkit-scrollbar{display:none}
  .ttc-filter-quote{font-size:11px}
  #ttc-filter-wrap{margin-bottom:20px}
}

/* ═══════════════════════════════════════════════
   WHO I SERVE — Industry grid
═══════════════════════════════════════════════ */
.industry-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
@media(max-width:768px){
  .industry-grid{grid-template-columns:repeat(2,1fr);gap:10px}
  .ind-card .ind-desc{display:block !important;font-size:10px;line-height:1.6;margin-top:5px}
  .ind-card .ind-title{font-size:13px}
  .ind-card .ind-icon-wrap svg{width:22px;height:22px}
}

.ind-card{
  background:rgba(255,255,255,0.025);
  border:1px solid var(--border);
  border-radius:var(--r-md);padding:22px;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.ind-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.032),transparent);
  transition:left .65s var(--ease);pointer-events:none;
}
.ind-card:hover{border-color:rgba(255,255,255,0.24);transform:translateY(-4px) scale(1.01);box-shadow:0 18px 44px rgba(0,0,0,.55)}
.ind-card:hover::before{left:100%}
.ind-icon-wrap{margin-bottom:12px;display:flex;align-items:center;justify-content:flex-start;transition:transform .3s var(--ease)}
.ind-card:hover .ind-icon-wrap{transform:scale(1.10)}
.ind-icon-wrap svg{width:28px;height:28px;stroke:#fff;fill:none;stroke-width:1.5}
.ind-title{font-size:14.5px;font-weight:700;color:#fff;margin-bottom:6px}
.ind-desc{font-size:12px;color:var(--white-50);line-height:1.65}

/* ═══════════════════════════════════════════════
   CITIES
═══════════════════════════════════════════════ */
.cities-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:2px}
.city-card{
  border-radius:var(--r-md);padding:18px;border:1px solid var(--border);
  transition:transform .35s var(--ease),border-color .3s var(--ease),box-shadow .3s var(--ease);
  cursor:default;position:relative;overflow:hidden;min-height:138px;
  display:flex;flex-direction:column;align-items:center;justify-content:space-between;
  will-change:transform;
}
.city-card::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.028),transparent);transition:left .65s var(--ease);pointer-events:none}
.city-card:hover{transform:translateY(-6px);border-color:rgba(255,255,255,0.22);box-shadow:0 22px 54px rgba(0,0,0,.65)}
.city-card:hover::before{left:100%}
.city-illustration{height:70px;width:100%;display:flex;align-items:center;justify-content:center;margin-bottom:12px}
.city-illustration svg{height:70px;width:auto;max-width:115px}
.city-name{font-size:13.5px;font-weight:700;color:#fff;letter-spacing:.01em;text-align:center}
.city-tag{font-size:10px;color:var(--white-50);text-align:center;margin-top:3px;font-weight:500}
@media(max-width:768px){.cities-grid{grid-template-columns:repeat(2,1fr);gap:9px}.city-card{min-height:108px}}

/* ═══════════════════════════════════════════════
   VALUES + FEATURES
═══════════════════════════════════════════════ */
.values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:32px}
.val-card{
  background:rgba(255,255,255,0.025);border:1px solid var(--border);
  border-radius:var(--r-md);padding:22px;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.val-card::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.032),transparent);transition:left .65s var(--ease);pointer-events:none}
.val-card:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-4px) scale(1.01);box-shadow:0 18px 44px rgba(0,0,0,.5)}
.val-card:hover::before{left:100%}
.val-icon{width:40px;height:40px;margin-bottom:12px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.07);border-radius:10px;transition:transform .3s var(--ease)}
.val-card:hover .val-icon{transform:scale(1.1) rotate(5deg)}
.val-icon svg{width:20px;height:20px;stroke:#fff;fill:none;stroke-width:1.5}
.val-title{font-size:14.5px;font-weight:700;color:#fff;margin-bottom:8px}
.val-desc{font-size:12px;color:var(--white-50);line-height:1.75}
@media(max-width:768px){.values-grid{display:none}}

.features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:14px}
.feat-item{
  background:rgba(255,255,255,0.025);border:1px solid var(--border);
  border-radius:var(--r-md);padding:17px;text-align:center;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  will-change:transform;
}
.feat-item:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-3px);box-shadow:0 12px 34px rgba(0,0,0,.45)}
.feat-icon{display:flex;align-items:center;justify-content:center;margin-bottom:8px;transition:transform .3s var(--ease)}
.feat-item:hover .feat-icon{transform:scale(1.15)}
.feat-icon svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:1.6}
.feat-text{font-size:12px;font-weight:700;color:#fff;margin-bottom:3px}
.feat-sub{font-size:10.5px;color:var(--white-50)}
@media(max-width:768px){.features-grid{grid-template-columns:repeat(2,1fr)}}

/* ═══════════════════════════════════════════════
   PROCESS
═══════════════════════════════════════════════ */
.process-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:0;margin-top:36px;position:relative}
.process-grid::before{content:'';position:absolute;top:24px;left:5%;width:90%;height:1px;background:linear-gradient(90deg,transparent,var(--border),var(--border),transparent)}
.process-step{display:flex;flex-direction:column;align-items:center;text-align:center;padding:0 8px;position:relative;z-index:1}
.step-num{
  width:48px;height:48px;border-radius:50%;background:#fff;color:#000;
  display:flex;align-items:center;justify-content:center;
  font-weight:900;font-size:17px;margin-bottom:14px;flex-shrink:0;
  box-shadow:0 0 0 4px #000,0 0 0 5px rgba(255,255,255,0.13);
  transition:transform .3s var(--ease),box-shadow .3s var(--ease);
}
.process-step:hover .step-num{transform:scale(1.1);box-shadow:0 0 0 4px #000,0 0 0 5px rgba(255,255,255,0.32),0 0 22px rgba(255,255,255,0.10)}
.step-icon{margin:10px 0;transition:transform .3s var(--ease)}
.process-step:hover .step-icon{transform:scale(1.1)}
.step-icon svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:1.6}
.step-title{font-size:12px;font-weight:700;color:#fff;margin-bottom:5px;line-height:1.3}
.step-desc{font-size:11px;color:var(--white-50);line-height:1.55}
@media(max-width:768px){
  .process-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:10px}
  .process-step{padding:13px;background:rgba(255,255,255,0.025);border:1px solid var(--border);border-radius:14px;text-align:center}
  .step-desc{display:none}.step-title{font-size:11px}
  .step-num{font-size:11px;width:28px;height:28px}
  .process-grid::before{display:none}
}

/* ═══════════════════════════════════════════════
   CTA
═══════════════════════════════════════════════ */
.cta{text-align:center;padding:72px 0}
.cta h2{
  font-size:42px;font-weight:900;letter-spacing:-.025em;margin-bottom:12px;
  background:linear-gradient(135deg,#fff 40%,#777 70%,#fff 90%);
  background-size:200% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  line-height:1.1;animation:shimmerName 8s linear infinite;
}
.cta p{font-size:14px;color:var(--white-50);max-width:480px;margin:0 auto 28px;line-height:1.75}
.cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
@media(max-width:768px){.cta{padding:18px 0}.cta h2{font-size:26px}}

/* ═══════════════════════════════════════════════
   FAQ
═══════════════════════════════════════════════ */
.faq-item{
  border-bottom:1px solid var(--border);padding:18px 0;
}
.faq-item:last-child{border-bottom:none}
.faq-q{
  display:flex;justify-content:space-between;align-items:center;
  cursor:pointer;font-size:13.5px;font-weight:600;color:#fff;
  gap:16px;transition:color .2s ease;
}
.faq-q:hover{color:rgba(255,255,255,0.8)}
.faq-toggle{
  width:24px;height:24px;border-radius:50%;
  background:rgba(255,255,255,0.07);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;font-size:14px;
  transition:background .2s ease,transform .3s var(--ease);
  border:1px solid rgba(255,255,255,0.10);
}
.faq-q:hover .faq-toggle{background:rgba(255,255,255,0.14)}
.faq-a{display:none;font-size:12.5px;color:var(--white-50);line-height:1.78;margin-top:12px;padding-right:36px}
.faq-a.open{display:block;animation:fadeUp .35s var(--ease) forwards}
@keyframes fadeUp{from{opacity:0;transform:translateY(7px)}to{opacity:1;transform:translateY(0)}}

/* ═══════════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════════ */
.footer-link{
  padding:7px 16px;background:rgba(255,255,255,0.03);border:1px solid var(--border);
  border-radius:100px;font-size:11px;font-weight:500;color:var(--white-50);
  text-decoration:none;transition:border-color .25s var(--ease),color .25s var(--ease),transform .25s var(--ease);
  display:inline-block;
}
.footer-link:hover{border-color:#fff;color:#fff;transform:translateY(-2px)}
.footer{padding:36px 0 24px}
.footer-links{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px}
.footer-copy{font-size:11px;color:#333;margin-top:24px;border-top:1px solid var(--border);padding-top:20px}
@media(max-width:768px){.footer{display:none}}

/* ═══════════════════════════════════════════════
   CONTACT
═══════════════════════════════════════════════ */
.contact-grid{display:grid;grid-template-columns:1fr;gap:22px;margin-top:32px}
.contact-info{display:grid;grid-template-columns:repeat(2,1fr);gap:10px}
.contact-item{
  display:flex;flex-direction:column;align-items:flex-start;gap:11px;padding:14px;
  background:rgba(255,255,255,0.025);border:1px solid var(--border);border-radius:var(--r-sm);
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  cursor:pointer;will-change:transform;
}
.contact-item:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-3px);box-shadow:0 10px 30px rgba(0,0,0,.45)}
.contact-icon{width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.09);display:flex;align-items:center;justify-content:center;transition:transform .3s var(--ease)}
.contact-item:hover .contact-icon{transform:scale(1.1)}
.contact-icon svg{width:26px;height:26px;stroke:#fff;fill:none;stroke-width:1.5}
.contact-lbl{font-size:10px;color:var(--white-30);text-transform:uppercase;letter-spacing:.06em;font-weight:600;margin-bottom:2px}
.contact-val{font-size:13px;color:#fff;font-weight:600}
@media(max-width:768px){
  .contact-lbl,.contact-val{display:none}
  .contact-item{align-items:center;justify-content:center;text-align:center;padding:18px}
}

/* ═══════════════════════════════════════════════
   TAP CARD SYSTEM
═══════════════════════════════════════════════ */
.tap-card{transition:transform 0.22s var(--ease),border-color 0.22s var(--ease),background 0.22s var(--ease)}
.tap-card:active{transform:scale(0.97)}

@media(max-width:768px){
  .exp-card.tap-card{position:relative;overflow:hidden;min-height:108px;display:flex;align-items:stretch;padding:0}
  .exp-card.tap-card .card-front{width:100%;padding:15px 13px;display:flex;flex-direction:column;transition:opacity .3s var(--ease),transform .3s var(--ease);transform:translateY(0);opacity:1}
  .exp-card.tap-card .card-back{
    position:absolute;inset:0;padding:13px 11px;opacity:0;transform:translateY(10px);
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;
    background:rgba(255,255,255,0.05);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);
    pointer-events:none;
  }
  .service-main-card.tap-card{position:relative;overflow:hidden;min-height:96px;display:flex;align-items:stretch;padding:0}
  .service-main-card.tap-card .card-front{width:100%;padding:14px 10px;display:flex;flex-direction:column;align-items:center;justify-content:center;transition:opacity .3s var(--ease),transform .3s var(--ease);transform:translateY(0);opacity:1}
  .service-main-card.tap-card .card-back{
    position:absolute;inset:0;padding:12px 10px;opacity:0;transform:translateY(10px);
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;
    background:rgba(255,255,255,0.05);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);pointer-events:none;
  }

  /* Industry cards — static on mobile */
  .ind-card.tap-card{position:relative;overflow:hidden;min-height:auto;padding:14px;display:block !important;cursor:default !important}
  .ind-card.tap-card .card-front{opacity:1 !important;transform:none !important;pointer-events:auto !important;padding:0;display:flex;flex-direction:column;transition:none !important}
  .ind-card.tap-card.active .card-front{opacity:1 !important;transform:none !important;pointer-events:auto !important}
  .ind-card.tap-card .card-back{display:none !important}
  .ind-card .tap-hint{display:none !important}

  .tap-card.active .card-front{opacity:0;transform:translateY(-6px);pointer-events:none}
  .tap-card.active .card-back{opacity:1;transform:translateY(0);pointer-events:auto}
  .ind-card.tap-card.active .card-front{opacity:1 !important;transform:none !important;pointer-events:auto !important}
  .tap-card.active{border-color:rgba(255,255,255,0.28) !important;background:rgba(255,255,255,0.05) !important}
  .ind-card.tap-card.active{border-color:rgba(255,255,255,0.11) !important;background:rgba(255,255,255,0.025) !important}

  .card-back-title{font-size:11px;font-weight:800;color:#fff;margin-bottom:5px;letter-spacing:.01em}
  .card-back-desc{font-size:10px;color:var(--white-50);line-height:1.55}
  .tap-card .tap-hint{position:absolute;bottom:7px;right:8px;width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,0.18);transition:opacity .2s ease;pointer-events:none}
  .tap-card.active .tap-hint{opacity:0}
}
@media(min-width:769px){
  .tap-hint{display:none !important}
  .card-back{display:none}
  .card-front{display:contents}
}

/* ═══════════════════════════════════════════════
   SERVICES CLEAN GRID
═══════════════════════════════════════════════ */
.services-clean{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:32px}
.service-main-card{
  background:rgba(255,255,255,0.03);border:1px solid var(--border);
  border-radius:14px;padding:28px;text-align:center;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  cursor:pointer;position:relative;overflow:hidden;will-change:transform;
}
.service-main-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.038),transparent);
  transition:left .65s var(--ease);pointer-events:none;
}
.service-main-card:hover{border-color:#fff;transform:translateY(-4px) scale(1.01);box-shadow:0 16px 40px rgba(0,0,0,.55)}
.service-main-card:hover::before{left:100%}
.service-icon{width:48px;height:48px;margin:0 auto 14px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.07);border-radius:12px;transition:transform .3s var(--ease)}
.service-main-card:hover .service-icon{transform:scale(1.1) rotate(-3deg)}
.service-icon svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:1.5}
.service-title{font-size:14px;font-weight:700}
@media(max-width:768px){
  .services-clean{grid-template-columns:repeat(3,1fr);gap:8px}
  .service-main-card{padding:13px}
  .service-title{font-size:11.5px}
}

/* ═══════════════════════════════════════════════
   MOBILE SECTION LABELS — pill decorators
═══════════════════════════════════════════════ */
.section-label-tag{
  display:inline-flex;align-items:center;gap:5px;
  font-size:9.5px;font-weight:700;letter-spacing:.10em;
  text-transform:uppercase;color:var(--white-30);
  margin-bottom:8px;
}
.section-label-tag::before{
  content:'';width:18px;height:1px;background:rgba(255,255,255,0.25);
}

/* ═══════════════════════════════════════════════
   MOBILE STAT STRIP — below hero
═══════════════════════════════════════════════ */
.stat-strip{
  display:none;
  background:linear-gradient(135deg,rgba(255,255,255,0.045) 0%,rgba(255,255,255,0.02) 100%);
  border:1px solid rgba(255,255,255,0.10);
  border-radius:14px;margin-top:14px;
  padding:12px 8px;
  position:relative;overflow:hidden;
}
.stat-strip::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.22),transparent);
}
.stat-strip-inner{display:flex;align-items:stretch}
.stat-item{
  flex:1;display:flex;flex-direction:column;align-items:center;
  text-align:center;padding:2px 6px;
  border-right:1px solid rgba(255,255,255,0.07);
}
.stat-item:last-child{border-right:none}
.stat-num{font-size:18px;font-weight:900;color:#fff;letter-spacing:-.025em;line-height:1}
.stat-lbl{font-size:8.5px;color:rgba(255,255,255,0.40);font-weight:600;text-transform:uppercase;letter-spacing:.07em;margin-top:3px}
@media(max-width:768px){.stat-strip{display:block}}

/* ═══════════════════════════════════════════════
   MOBILE BOTTOM STICKY CTA BAR
═══════════════════════════════════════════════ */
.mobile-sticky-bar{
  display:none;
  position:fixed;bottom:0;left:0;right:0;z-index:9000;
  background:rgba(6,6,6,0.97);
  backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px);
  border-top:1px solid rgba(255,255,255,0.12);
  padding:10px 14px 14px;
  padding-bottom:calc(10px + env(safe-area-inset-bottom));
  box-shadow:0 -8px 32px rgba(0,0,0,0.55);
}
.mobile-sticky-bar-inner{
  display:flex;gap:8px;
}
.sticky-btn-primary{
  flex:1;background:#fff;color:#000;
  border:none;border-radius:12px;padding:11px 12px;
  font-family:'Montserrat',sans-serif;font-size:12px;font-weight:800;
  cursor:pointer;text-align:center;text-decoration:none;
  display:flex;align-items:center;justify-content:center;gap:5px;
  letter-spacing:.01em;
  transition:opacity .2s ease,transform .15s ease;
  -webkit-tap-highlight-color:transparent;
  box-shadow:0 4px 18px rgba(255,255,255,0.12);
}
.sticky-btn-primary:active{opacity:0.88;transform:scale(0.97)}
.sticky-btn-secondary{
  flex:0 0 auto;
  background:rgba(255,255,255,0.07);
  color:#fff;border:1.5px solid rgba(255,255,255,0.25);
  border-radius:12px;padding:11px 14px;
  font-family:'Montserrat',sans-serif;font-size:11px;font-weight:700;
  cursor:pointer;text-align:center;text-decoration:none;
  display:flex;align-items:center;justify-content:center;
  letter-spacing:.01em;white-space:nowrap;
  transition:opacity .2s ease,transform .15s ease;
  -webkit-tap-highlight-color:transparent;
}
.sticky-btn-secondary:active{opacity:0.88;transform:scale(0.97)}
@media(max-width:768px){.mobile-sticky-bar{display:block}}

/* ═══════════════════════════════════════════════
   DARK MINIMAL CTA section
═══════════════════════════════════════════════ */
#dark-minimal-cta{
  background-color:#000;
  padding:80px 0;
  border-top:1px solid rgba(255,255,255,0.07);
  border-bottom:1px solid rgba(255,255,255,0.07);
  text-align:center;
  font-family:-apple-system,BlinkMacSystemFont,'Helvetica Neue',Arial,sans-serif;
  overflow:hidden;
  position:relative;
}
#dark-minimal-cta::before{
  content:'';position:absolute;top:0;left:0;right:0;bottom:0;pointer-events:none;
  background:
    radial-gradient(ellipse 80% 40% at 20% 50%,rgba(255,255,255,0.015) 0%,transparent 60%),
    radial-gradient(ellipse 60% 40% at 80% 50%,rgba(255,255,255,0.010) 0%,transparent 60%);
}
@media(max-width:768px){#dark-minimal-cta{padding:32px 0}}

#dark-minimal-cta .expert-cta-container{max-width:720px;margin:0 auto;padding:0 24px;position:relative;z-index:1}
#dark-minimal-cta .expert-cta-heading{
  font-size:clamp(28px,4.5vw,44px);font-weight:800;color:#fff;
  letter-spacing:-.03em;line-height:1.1;margin:0 0 16px 0;
  font-family:'Montserrat',sans-serif;
}
#dark-minimal-cta .highlight{position:relative;display:inline-block}
#dark-minimal-cta .highlight::after{
  content:'';position:absolute;width:100%;height:3px;bottom:2px;left:0;
  background-color:rgba(255,255,255,0.35);
  transform:scaleX(0);transform-origin:right;
  transition:transform 0.65s cubic-bezier(0.22,1,0.36,1) 0.4s;
}
#dark-minimal-cta.is-visible .highlight::after{transform:scaleX(1);transform-origin:left}
#dark-minimal-cta .expert-cta-subtext{
  font-size:15px;color:#a1a1aa;max-width:500px;
  margin:0 auto 32px auto;line-height:1.6;font-weight:400;
  font-family:'Montserrat',sans-serif;
}
#dark-minimal-cta .expert-cta-subtext strong{color:#fff;font-weight:700}
#dark-minimal-cta .expert-cta-btn{
  display:inline-flex;align-items:center;gap:10px;
  background-color:#fff;color:#000;
  padding:13px 36px;border-radius:4px;
  font-size:14px;font-weight:700;letter-spacing:.5px;
  text-decoration:none;border:1px solid #fff;
  transition:all .3s ease;
  font-family:'Montserrat',sans-serif;
}
#dark-minimal-cta .expert-cta-btn:hover{background-color:#000;color:#fff}
#dark-minimal-cta .expert-cta-btn svg{transition:transform .3s ease}
#dark-minimal-cta .expert-cta-btn:hover svg{transform:translateX(6px)}
#dark-minimal-cta .reveal-elem{opacity:0;transform:translateY(20px);transition:opacity .5s ease-out,transform .5s ease-out}
#dark-minimal-cta .delay-1{transition-delay:.10s}
#dark-minimal-cta .delay-2{transition-delay:.20s}
#dark-minimal-cta .delay-3{transition-delay:.30s}
#dark-minimal-cta.is-visible .reveal-elem{opacity:1;transform:translateY(0)}

/* ═══════════════════════════════════════════════
   MISC
═══════════════════════════════════════════════ */
.kpi-num{display:inline}
#heroSection{will-change:transform,opacity}

/* Bottom page padding for sticky bar */
@media(max-width:768px){
  body{padding-bottom:72px}
}

/* Mobile horizontal rule — minimal */
.wrap > hr{
  border:none;
  border-top:1px solid rgba(255,255,255,0.06);
  margin:0;
}

/* FAQ card on mobile — tighter */
@media(max-width:768px){
  .faq-item{padding:14px 0}
  .faq-q{font-size:12.5px}
  .faq-a{font-size:11.5px;padding-right:20px}
}
</style>

<!-- ─── AMBIENT LAYERS ─── -->
<div class="noise-overlay"></div>
<div class="aura-layer aura-1"></div>
<div class="aura-layer aura-2"></div>
<div class="aura-layer aura-3"></div>
<div class="particle p1"></div>
<div class="particle p2"></div>
<div class="particle p3"></div>
<div class="particle p4"></div>

<div class="progress-bar" id="progressBar"></div>
<div class="cursor-glow" id="cursorGlow"></div>
<div class="toast" id="toast"></div>

<!-- ─── MOBILE STICKY CTA ─── -->
<div class="mobile-sticky-bar">
  <div class="mobile-sticky-bar-inner">
    <a href="{{ route('boc.step1', ['source' => 'taxexpert-aniktagarwal']) }}" class="sticky-btn-primary">
      Book Consultation
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <a href="#contact" class="sticky-btn-secondary">Callback</a>
  </div>
</div>

<div style="background:var(--black);min-height:100vh;position:relative;z-index:2">

<!-- ═══════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════ -->
<section class="hero sec-bg-pure" id="heroSection">
  <div class="wrap">
    <div class="hero-grid">

      <!-- LEFT: Content -->
      <div class="hero-content">
        <div class="hero-glass-card">

          <div class="hero-badge-wrap">
            <div class="badge">
              <span class="badge-dot"></span>
              <span>Startup Tax Expert | 200+ Businesses Assisted</span>
            </div>
          </div>

          <div class="hero-name">Ankit<br>Agarwal</div>

          <div class="hero-pills-grid">
            <div class="hero-pill">
              <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              Startup &amp; Business Consultant
            </div>
            <div class="hero-pill">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              6+ Years Exp.
            </div>
            <div class="hero-pill pill-desktop-only">
              <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              English &amp; Hindi
            </div>
            <div class="hero-pill pill-desktop-only">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20"/></svg>
              Pan India
            </div>
            <div class="hero-pill pill-desktop-only">
              <span class="hero-pill-dot"></span>
              200+ Businesses Served
            </div>
          </div>

          <div class="hero-bio-pill">
            Focused on startup registration, company formation, and financial structuring for new businesses. Trusted by founders nationwide.
          </div>

          <div class="hero-btns mobile-cta">
            <a href="{{ route('boc.step1', ['source' => 'taxexpert-aniktagarwal']) }}" class="btn btn-primary">Book Consultation</a>
            <a href="#contact" class="btn btn-callback">Request Callback</a>
          </div>

        </div><!-- /hero-glass-card -->

        <!-- Mobile stat strip -->
        <div class="stat-strip">
          <div class="stat-strip-inner">
            <div class="stat-item">
              <div class="stat-num"><span class="kpi-hero" data-target="200">0</span>+</div>
              <div class="stat-lbl">Businesses</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">6+</div>
              <div class="stat-lbl">Years Exp</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">Pan</div>
              <div class="stat-lbl">India</div>
            </div>
          </div>
        </div>

        <div class="info-strip">
          <div class="info-strip-row">
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div class="info-cell-label">Clients</div><div class="info-cell-value">200+</div></div>
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="info-cell-label">Experience</div><div class="info-cell-value">6+ Years</div></div>
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg></div><div class="info-cell-label">Coverage</div><div class="info-cell-value">Pan India</div></div>
          </div>
        </div>
      </div><!-- /hero-content -->

      <!-- RIGHT: Photo -->
      <div class="hero-photo-wrap">
        <div class="hero-metric metric-1">
          <div class="hero-metric-val"><span class="kpi-hero" data-target="200">0</span>+</div>
          <div class="hero-metric-lbl">Businesses</div>
        </div>
        <div class="hero-metric metric-2">
          <div class="hero-metric-val"><span class="kpi-hero" data-target="6">0</span>+ Yrs</div>
          <div class="hero-metric-lbl">Experience</div>
        </div>
        <div class="hero-photo-card" id="heroPhotoCard">
          <img class="hero-avatar" src="{{ asset('images/taxexperts/ankita-garwal.jpg') }}" alt="CA Ankit Agarwal - Startup Consultant" loading="eager">
        </div>
        <div class="hero-trust">
          <div class="trust-check"><svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#000" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          Startup Specialist &bull; Trusted by Founders
        </div>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     ABOUT — subtle raised bg
═══════════════════════════════════════════════ -->
<section class="sec sec-bg-subtle reveal">
  <div class="wrap">
    <div class="card about-card">
      <div class="about-title">About Me</div>
      <div class="about-text collapsed" id="aboutText">
        Ankit Agarwal is a startup and business consultant with over 6 years of experience helping entrepreneurs build legally compliant and scalable businesses. He specializes in company registration, Startup India advisory, LLP formation, and financial structuring for startups and growing businesses.
      </div>
      <div class="about-text expanded" id="aboutFull" style="display:none;">
        Ankit Agarwal is a startup and business consultant with over 6 years of experience helping entrepreneurs build legally compliant and scalable businesses. He specializes in company registration, Startup India advisory, LLP formation, and financial structuring for startups and growing businesses.<br><br>He has assisted 200+ startups and entrepreneurs across India in setting up their business structures, ensuring compliance, and optimizing financial frameworks. His approach focuses on long-term scalability, legal clarity, and business growth.
      </div>
      <div class="about-toggle" onclick="toggleAbout()">Read More ▼</div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     EXPERTISE — grid bg
═══════════════════════════════════════════════ -->
<section class="sec sec-bg-grid reveal-section" id="expertise">
  <div class="wrap">
    <div class="section-label-tag">Specialization</div>
    <div class="sec-title">Areas of Expertise</div>
    <p class="sec-sub">Specialized startup, registration, and compliance services tailored for growing businesses.</p>

    <div class="expertise-grid reveal-stagger" style="margin-top:28px">

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon">
            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div class="exp-title">Business Registration</div>
          <div class="exp-desc">Pvt Ltd, LLP, OPC, partnership &amp; proprietorship registrations handled end-to-end.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Business Registration</div>
          <div class="card-back-desc">Company, LLP, OPC &amp; proprietorship registrations with full compliance support.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="3"/></svg>
          </div>
          <div class="exp-title">Business Support</div>
          <div class="exp-desc">PAN, TAN, business setup, bank account, and startup advisory services.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Business Support</div>
          <div class="card-back-desc">PAN, TAN, name search, business plans &amp; Virtual CFO support for startups.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon">
            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="exp-title">Compliance Services</div>
          <div class="exp-desc">ROC filings, annual compliance, and regulatory support for companies &amp; LLPs.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Compliance Services</div>
          <div class="card-back-desc">Company &amp; LLP compliance, ROC filings, and ongoing regulatory support.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon">
            <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          </div>
          <div class="exp-title">Tax Filing</div>
          <div class="exp-desc">Business tax filing, GST returns, and compliance-focused tax solutions.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Tax Filing</div>
          <div class="card-back-desc">Business ITR, GST returns, and structured tax filing for startups.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     TAX SERVICES CAROUSEL — raised bg
═══════════════════════════════════════════════ -->
<section id="tax-services-section" class="sec-bg-raised">
  <div class="wrap">
    <div class="section-header" style="margin-bottom:24px">
      <div class="section-label-tag">Pricing</div>
      <h2 class="section-title">Expert Service Plans</h2>
      <div class="section-subtitle web-only">
        Professional registration &amp; compliance services.<br>
        Transparent pricing, zero surprises.
      </div>
    </div>

    <div id="ttc-filter-wrap">
      <div class="ttc-filter-quote">Find the right service — filter by your business need</div>
      <div id="ttc-filter-chips"></div>
    </div>

    <div id="ttc-no-results">No services match the selected filters. Try a different combination.</div>
  </div>

  <div class="wrap">
    <div id="ttc-slider" class="owl-carousel owl-theme"></div>
  </div>
</section>

<script>
(function(){

var FILTER_OPTS = ['itr filing','gst','startups','business','compliance','incometax','audit','nri tax','tax planning'];
var activeFilters = [];

var S = [
{n:"Private Limited Company Registration", sf:"Startups & founders", el:"Minimum 2 directors required", p:14999, m:25000, t:"7–10 Working Days", cta:"Start Company",
 link:"https://thetaxcompany.in/servicedetail/private-limited-company-registration",
 cats:['startups','business','compliance'],
 inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
 exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
 doc:["PAN card of applicant","Aadhaar card","Address proof","Email & mobile number","Photograph"]},
{n:"Limited Liability Partnership Registration", sf:"Partners & SMEs", el:"Minimum 2 partners required", p:9999, m:20000, t:"7–10 Working Days", cta:"Register LLP",
 link:"https://thetaxcompany.in/servicedetail/limited-liability-partnership-registration",
 cats:['startups','business','compliance'],
 inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate delivery"],
 exc:["Government fees","Legal disputes","Notice handling","Future compliance","Third party verification"],
 doc:["PAN card","Aadhaar card","Address proof","Email & mobile","Photograph"]},
{n:"One Person Company Registration", sf:"Solo entrepreneurs", el:"Single director/shareholder", p:11999, m:22000, t:"7–10 Working Days", cta:"Start OPC",
 link:"https://thetaxcompany.in/servicedetail/one-person-company-registration",
 cats:['startups','business','compliance'],
 inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate delivery"],
 exc:["Government fees","Legal disputes","Notice handling","Future compliance","Third party verification"],
 doc:["PAN card","Aadhaar card","Address proof","Email & mobile","Photograph"]},
{n:"Partnership Firm Registration", sf:"Small business partners", el:"Minimum 2 partners", p:6999, m:15000, t:"5–7 Working Days", cta:"Register Firm",
 link:"https://thetaxcompany.in/servicedetail/partnership-firm-registration",
 cats:['startups','business','compliance'],
 inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate delivery"],
 exc:["Government fees","Legal disputes","Notice handling","Future compliance","Third party verification"],
 doc:["PAN card","Aadhaar card","Address proof","Email & mobile","Photograph"]},
{n:"Sole Proprietorship Registration", sf:"Individual business owners", el:"Single owner business", p:3999, m:8000, t:"3–5 Working Days", cta:"Start Business",
 link:"https://thetaxcompany.in/servicedetail/sole-proprietorship-registration",
 cats:['startups','business','compliance'],
 inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate delivery"],
 exc:["Government fees","Legal disputes","Notice handling","Future compliance","Third party verification"],
 doc:["PAN card","Aadhaar card","Address proof","Email & mobile","Photograph"]},
{n:"Startup India Registration", sf:"Eligible startups", el:"DPIIT criteria applicable", p:8999, m:10000, t:"3–5 Working Days", cta:"Register Startup",
 link:"https://thetaxcompany.in/servicedetail/startup-india-registration",
 cats:['startups','business','compliance'],
 inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate delivery"],
 exc:["Government fees","Legal disputes","Notice handling","Future compliance","Third party verification"],
 doc:["PAN card","Aadhaar card","Address proof","Email & mobile","Photograph"]},
{n:"GST Registration", sf:"Businesses & startups", el:"Turnover above threshold", p:1499, m:3000, t:"3–7 Working Days", cta:"Get GST",
 link:"https://thetaxcompany.in/servicedetail/gst-registration",
 cats:['gst','startups','business','compliance'],
 inc:["Application filing","Portal support","Document verification","Tracking support","Certificate delivery"],
 exc:["Govt fees","Litigation","Notice handling","Future compliance","Third party verification"],
 doc:["PAN","Aadhaar","Business address proof","Email & mobile","Photograph"]},
{n:"Company Annual Compliance", sf:"Private companies", el:"ROC compliance required", p:9999, m:20000, t:"Yearly", cta:"Stay Compliant",
 link:"https://thetaxcompany.in/servicedetail/company-annual-compliance",
 cats:['compliance','business'],
 inc:["ROC filings","Compliance tracking","Document prep","Submission","Status updates"],
 exc:["Govt penalties","Litigation","Notice handling","Future advisory","Third party audit"],
 doc:["PAN","Incorporation docs","Financials","Board resolutions","Bank details"]},
{n:"LLP Annual Compliance", sf:"LLP entities", el:"Annual filing mandatory", p:6999, m:15000, t:"Yearly", cta:"File LLP Compliance",
 link:"https://thetaxcompany.in/servicedetail/llp-annual-compliance",
 cats:['compliance','business'],
 inc:["Form 11 filing","Form 8 filing","Compliance tracking","Document prep","Status updates"],
 exc:["Govt penalties","Litigation","Notice handling","Future advisory","Third party audit"],
 doc:["LLP PAN","Incorporation docs","Financials","Partner details","Bank statements"]},
{n:"ROC Filing Services", sf:"Registered companies", el:"MCA filing required", p:3999, m:10000, t:"5–7 Working Days", cta:"File ROC",
 link:"https://thetaxcompany.in/servicedetail/roc-filing-services",
 cats:['compliance','business'],
 inc:["Form preparation","MCA filing","Verification","Tracking","Acknowledgment"],
 exc:["Govt fees","Litigation","Notice handling","Future compliance","Third party verification"],
 doc:["Company PAN","MCA login","Financials","Director details","Resolutions"]},
{n:"Business Income Tax Filing", sf:"Business owners", el:"Business income declared", p:2999, m:8000, t:"2–3 Working Days", cta:"File Business Tax",
 link:"https://thetaxcompany.in/servicedetail/business-income-tax-filing",
 cats:['itr filing','incometax','business'],
 inc:["Tax computation","Return preparation","Portal filing","Verification","Acknowledgment delivery"],
 exc:["Govt fees","Litigation","Hearings","Future planning","Third party services"],
 doc:["PAN","Aadhaar","Financial statements","Bank statements","Income proofs"]},
{n:"GST Return Filing", sf:"GST registered firms", el:"Active GST registration", p:2499, m:5000, t:"Monthly", cta:"File GST Return",
 link:"https://thetaxcompany.in/servicedetail/gst-return-filing",
 cats:['gst','compliance','business'],
 inc:["Return preparation","Portal filing","Reconciliation support","Tracking","Compliance check"],
 exc:["Govt penalties","Litigation","Notice handling","Future advisory","Third party audit"],
 doc:["GST login","Sales data","Purchase data","Bank statements","Invoices"]},
{n:"TDS Return Filing", sf:"Employers & businesses", el:"TDS deducted", p:2999, m:6000, t:"Quarterly", cta:"File TDS",
 link:"https://thetaxcompany.in/servicedetail/tds-return-filing",
 cats:['compliance','business','incometax'],
 inc:["Return preparation","Portal filing","Verification","Tracking","Compliance support"],
 exc:["Govt penalties","Litigation","Notice handling","Future compliance","Third party audit"],
 doc:["TAN","Challan details","Deduction data","Employee/vendor details","Bank records"]}
];

function fmt(n){ return '₹'+n.toLocaleString('en-IN'); }
function pct(s){ return Math.round((s.m-s.p)/s.m*100); }

function listRows(arr,type){
  var icon  = type==='inc'?'✔':type==='exc'?'✖':'📄';
  var ibg   = type==='inc'?'rgba(0,255,120,0.10)':type==='exc'?'rgba(255,0,0,0.10)':'rgba(120,120,255,0.10)';
  var icol  = type==='inc'?'#00ff88':type==='exc'?'#ff4d4d':'#7a7aff';
  var tcol  = type==='inc'?'#d6ffe6':type==='exc'?'#ffd6d6':'#d6d6ff';
  return arr.map(function(item){
    return '<li style="display:flex;align-items:flex-start;gap:5px;margin-bottom:5px;font-size:10px;line-height:1.5;color:'+tcol+';font-family:\'Montserrat\',sans-serif;">'+
      '<span style="width:12px;height:12px;min-width:12px;border-radius:50%;background:'+ibg+';color:'+icol+';display:flex;align-items:center;justify-content:center;font-size:7px;margin-top:1px;flex-shrink:0;">'+icon+'</span>'+
      '<span>'+item+'</span></li>';
  }).join('');
}

function buildCard(s,idx){
  var uid = 'ttc'+idx;
  var disc = pct(s);
  return '<div style="width:100%;display:flex;box-sizing:border-box;">'+
    '<div class="ttc-card-wrap" style="background:linear-gradient(180deg,#0c0c0f 0%,#08080a 100%);border:1px solid rgba(255,255,255,0.08);border-radius:10px;padding:12px;display:flex;flex-direction:column;width:100%;box-sizing:border-box;overflow:hidden;font-family:\'Montserrat\',sans-serif;transition:transform 0.35s cubic-bezier(.23,1,.32,1),box-shadow 0.35s ease,border-color 0.3s ease;cursor:default;position:relative;"'+
      ' onmouseenter="this.style.transform=\'translateY(-3px)\';this.style.borderColor=\'rgba(255,255,255,0.16)\';this.style.boxShadow=\'0 10px 30px rgba(0,0,0,0.6)\';"'+
      ' onmouseleave="this.style.transform=\'translateY(0)\';this.style.borderColor=\'rgba(255,255,255,0.08)\';this.style.boxShadow=\'none\';">'+

    '<div style="position:absolute;top:0;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.1),transparent);border-radius:999px;"></div>'+

    '<div style="margin-bottom:7px;">'+
      '<span style="font-size:9px;color:rgba(255,255,255,0.6);font-weight:500;letter-spacing:0.08em;text-transform:uppercase;display:block;margin-bottom:2px;font-family:\'Montserrat\',sans-serif;">Starting from</span>'+
      '<div style="display:flex;align-items:flex-end;gap:5px;flex-wrap:wrap;margin-bottom:2px;">'+
        '<span style="font-size:20px;font-weight:800;color:#fff;letter-spacing:-0.02em;line-height:1;font-family:\'Montserrat\',sans-serif;">'+fmt(s.p)+'</span>'+
        '<span style="font-size:10px;color:rgba(255,255,255,0.5);text-decoration:line-through;font-weight:400;margin-bottom:2px;">'+fmt(s.m)+'</span>'+
        '<span style="display:inline-flex;align-items:center;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);color:rgba(255,255,255,0.8);font-size:9px;font-weight:700;letter-spacing:0.04em;padding:1px 7px;border-radius:999px;margin-bottom:2px;font-family:\'Montserrat\',sans-serif;">'+disc+'% OFF</span>'+
      '</div>'+
      '<span style="font-size:9px;color:rgba(255,255,255,0.5);font-family:\'Montserrat\',sans-serif;">+ GST applicable</span>'+
    '</div>'+

    '<div style="margin-bottom:3px;font-size:10px;color:rgba(255,255,255,0.75);font-family:\'Montserrat\',sans-serif;"><strong style="color:#fff;">Suitable for:</strong> '+s.sf+'</div>'+
    '<div style="margin-bottom:4px;font-size:10px;color:rgba(255,255,255,0.75);font-family:\'Montserrat\',sans-serif;"><strong style="color:#fff;">Eligible for:</strong> <span style="color:rgba(255,255,255,0.55);font-style:italic;">'+s.el+'</span></div>'+
    '<div style="margin-bottom:5px;font-size:9px;color:rgba(255,255,255,0.6);font-weight:600;letter-spacing:0.04em;font-family:\'Montserrat\',sans-serif;">&#9201; '+s.t+'</div>'+

    '<div style="height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.07),transparent);margin:2px 0 7px;"></div>'+

    '<div style="font-size:13px;font-weight:700;color:#fff;letter-spacing:-0.01em;margin-bottom:8px;line-height:1.3;font-family:\'Montserrat\',sans-serif;">'+s.n+'</div>'+

    '<div class="ttc-tab-pills">'+
      '<button class="ttc-btn" data-uid="'+uid+'" data-tab="inc" style="flex:1;min-width:0;font-size:10px;font-weight:500;color:#fff;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:999px;padding:4px 5px;cursor:pointer;transition:all 0.25s;font-family:\'Montserrat\',sans-serif;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;box-sizing:border-box;">Included</button>'+
      '<button class="ttc-btn" data-uid="'+uid+'" data-tab="exc" style="flex:1;min-width:0;font-size:10px;font-weight:500;color:#888;background:transparent;border:1px solid transparent;border-radius:999px;padding:4px 5px;cursor:pointer;transition:all 0.25s;font-family:\'Montserrat\',sans-serif;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;box-sizing:border-box;">Excluded</button>'+
      '<button class="ttc-btn" data-uid="'+uid+'" data-tab="doc" style="flex:1;min-width:0;font-size:10px;font-weight:500;color:#888;background:transparent;border:1px solid transparent;border-radius:999px;padding:4px 5px;cursor:pointer;transition:all 0.25s;font-family:\'Montserrat\',sans-serif;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;box-sizing:border-box;">Docs</button>'+
    '</div>'+

    '<div class="ttc-tab-body" style="flex:1;overflow-y:auto;overflow-x:hidden;min-height:100px;max-height:100px;scrollbar-width:thin;scrollbar-color:rgba(255,255,255,0.08) transparent;">'+
      '<ul id="'+uid+'-inc" style="list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.inc,'inc')+'</ul>'+
      '<ul id="'+uid+'-exc" style="display:none;list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.exc,'exc')+'</ul>'+
      '<ul id="'+uid+'-doc" style="display:none;list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.doc,'doc')+'</ul>'+
    '</div>'+

    '<div style="margin-top:8px;width:100%;box-sizing:border-box;">'+
      '<a href="'+s.link+'" style="display:block;width:100%;max-width:100%;background:#fff;color:#000;border:none;border-radius:999px;padding:7px 8px;font-size:11px;font-weight:700;text-align:center;cursor:pointer;letter-spacing:0.02em;text-decoration:none;transition:background 0.25s ease,transform 0.2s ease;box-sizing:border-box;font-family:\'Montserrat\',sans-serif;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;"'+
        ' onmouseenter="this.style.background=\'#e8e8e8\';this.style.transform=\'translateY(-1px)\';"'+
        ' onmouseleave="this.style.background=\'#fff\';this.style.transform=\'translateY(0)\';">'+
        s.cta+' &rarr;'+
      '</a>'+
    '</div>'+
  '</div></div>';
}

function getFilteredServices(){
  if(activeFilters.length===0) return S;
  return S.filter(function(s){
    return activeFilters.some(function(f){ return s.cats.indexOf(f)!==-1; });
  });
}

function renderFilterChips(){
  var wrap = document.getElementById('ttc-filter-chips');
  if(!wrap) return;
  wrap.innerHTML = FILTER_OPTS.map(function(f){
    var isActive = activeFilters.indexOf(f)!==-1;
    return '<button class="ttc-filter-chip'+(isActive?' active':'')+'" data-filter="'+f+'" onclick="ttcToggleFilter(\''+f+'\')">'+f+'</button>';
  }).join('');
}

var owlInitialized = false;

function initOrRebuildOwl(data){
  var $slider = $('#ttc-slider');
  var noResults = document.getElementById('ttc-no-results');
  if(data.length===0){
    if(owlInitialized){$slider.trigger('destroy.owl.carousel');$slider.removeClass('owl-loaded owl-drag');owlInitialized=false;}
    $slider.html('');if(noResults) noResults.style.display='block';return;
  }
  if(noResults) noResults.style.display='none';
  if(owlInitialized){$slider.trigger('destroy.owl.carousel');$slider.removeClass('owl-loaded owl-drag');owlInitialized=false;}
  $slider.html(data.map(function(s,i){ return buildCard(s,i); }).join(''));
  $slider.owlCarousel({
    loop:false,nav:true,dots:true,autoHeight:false,
    navText:['&#8592;','&#8594;'],
    autoplay:true,autoplayTimeout:3000,autoplayHoverPause:true,
    responsive:{0:{items:1,margin:0},600:{items:2,margin:16},1000:{items:5,margin:20}}
  });
  owlInitialized = true;
  $slider.on('changed.owl.carousel',function(event){
    var carousel=event.relatedTarget;var current=carousel.current();var total=carousel.items().length;var visible=carousel.settings.items;
    $('.owl-prev').toggleClass('disabled',current===0);$('.owl-next').toggleClass('disabled',current+visible>=total);
  });
}

window.ttcToggleFilter = function(f){
  var idx=activeFilters.indexOf(f);if(idx===-1) activeFilters.push(f);else activeFilters.splice(idx,1);
  renderFilterChips();initOrRebuildOwl(getFilteredServices());
};

$(document).on('click','.ttc-btn',function(){
  var uid=$(this).data('uid');var tab=$(this).data('tab');
  $('.ttc-btn[data-uid="'+uid+'"]').each(function(){
    var isActive=$(this).data('tab')===tab;
    $(this).css({background:isActive?'rgba(255,255,255,0.08)':'transparent',color:isActive?'#fff':'#888',borderColor:isActive?'rgba(255,255,255,0.18)':'transparent'});
  });
  $('#'+uid+'-inc,#'+uid+'-exc,#'+uid+'-doc').hide();$('#'+uid+'-'+tab).show();
});

$(function(){ renderFilterChips(); initOrRebuildOwl(S); });

})();
</script>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     WHO I SERVE — stripe bg
═══════════════════════════════════════════════ -->
<section class="sec sec-bg-stripe reveal-section">
  <div class="wrap">
    <div class="section-label-tag">Clients</div>
    <div class="sec-title">Who I Serve</div>
    <p class="sec-sub">Tailored solutions for every type of taxpayer and business across India.</p>

    <div class="industry-grid reveal-stagger">

      <div class="ind-card">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5">
            <path d="M4 21c2-4 6-6 8-6s6 2 8 6"/><circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <div class="ind-title">Startups</div>
        <div class="ind-desc">Early-stage businesses looking to register and scale.</div>
      </div>

      <div class="ind-card">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
          </svg>
        </div>
        <div class="ind-title">Entrepreneurs</div>
        <div class="ind-desc">Individuals launching new ventures and business ideas.</div>
      </div>

      <div class="ind-card">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
          </svg>
        </div>
        <div class="ind-title">Growing Businesses</div>
        <div class="ind-desc">Businesses needing structured compliance and scalability.</div>
      </div>

      <div class="ind-card">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M12 22V12"/>
          </svg>
        </div>
        <div class="ind-title">Enterprises</div>
        <div class="ind-desc">Large organizations requiring structured compliance and audit readiness.</div>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     CITIES — subtle bg
═══════════════════════════════════════════════ -->
<section class="sec sec-bg-subtle reveal-section">
  <div class="wrap">
    <div class="section-label-tag">Coverage</div>
    <div class="sec-title">Cities Served</div>
    <p class="sec-sub">Serving clients across major Indian cities and remote locations nationwide.</p>
    <div class="cities-grid reveal-stagger">

      <div class="city-card" style="background:rgba(79,125,243,0.06);border-color:rgba(79,125,243,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <path d="M10 50 Q 30 30 50 50 T 90 50" stroke="rgba(79,125,243,0.3)" stroke-width="2" fill="none"/>
            <rect x="20" y="45" width="80" height="20" fill="rgba(79,125,243,0.2)" stroke="rgba(79,125,243,0.8)" stroke-width="1"/>
            <rect x="25" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="35" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="45" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="71" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="81" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="91" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="52" y="35" width="16" height="30" fill="rgba(79,125,243,0.3)" stroke="rgba(79,125,243,0.9)" stroke-width="1"/>
            <path d="M50 35 Q 60 15 70 35 Z" fill="rgba(79,125,243,0.5)" stroke="rgba(79,125,243,1)" stroke-width="1"/>
            <line x1="60" y1="15" x2="60" y2="5" stroke="rgba(79,125,243,1)" stroke-width="1"/>
            <polygon points="60,5 68,9 60,13" fill="rgba(79,125,243,0.8)"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(79,125,243,0.5)" stroke-width="1"/>
          </svg>
        </div>
        <div><div class="city-name">Bengaluru</div><div class="city-tag">Tech Capital</div></div>
      </div>

      <div class="city-card" style="background:rgba(245,158,11,0.06);border-color:rgba(245,158,11,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <rect x="40" y="35" width="40" height="30" fill="rgba(245,158,11,0.2)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/>
            <path d="M 48 65 L 48 50 A 12 12 0 0 1 72 50 L 72 65 Z" fill="rgba(245,158,11,0.1)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <rect x="36" y="15" width="8" height="50" fill="rgba(245,158,11,0.3)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/>
            <rect x="76" y="15" width="8" height="50" fill="rgba(245,158,11,0.3)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/>
            <path d="M 34 15 Q 40 5 46 15 Z" fill="rgba(245,158,11,0.5)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <path d="M 74 15 Q 80 5 86 15 Z" fill="rgba(245,158,11,0.5)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <rect x="40" y="30" width="40" height="5" fill="rgba(245,158,11,0.4)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <path d="M 52 30 Q 56 22 60 30 Q 64 22 68 30" fill="none" stroke="rgba(245,158,11,0.7)" stroke-width="1.5"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(245,158,11,0.4)" stroke-width="1"/>
          </svg>
        </div>
        <div><div class="city-name">Hyderabad</div><div class="city-tag">City of Pearls</div></div>
      </div>

      <div class="city-card" style="background:rgba(16,185,129,0.06);border-color:rgba(16,185,129,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <path d="M 0 65 Q 15 60 30 65 T 60 65 T 90 65 T 120 65" fill="none" stroke="rgba(16,185,129,0.5)" stroke-width="2"/>
            <line x1="30" y1="65" x2="50" y2="20" stroke="rgba(16,185,129,0.8)" stroke-width="2"/>
            <line x1="50" y1="20" x2="80" y2="65" stroke="rgba(16,185,129,0.8)" stroke-width="2"/>
            <line x1="50" y1="20" x2="90" y2="40" stroke="rgba(16,185,129,0.8)" stroke-width="2"/>
            <path d="M 50 20 L 80 65 Q 65 50 50 20" fill="rgba(16,185,129,0.2)" stroke="rgba(16,185,129,0.6)" stroke-width="1"/>
            <path d="M 50 20 L 90 40 Q 70 30 50 20" fill="rgba(16,185,129,0.3)" stroke="rgba(16,185,129,0.6)" stroke-width="1"/>
          </svg>
        </div>
        <div><div class="city-name">Kochi</div><div class="city-tag">Financial Hub</div></div>
      </div>

      <div class="city-card" style="background:rgba(59,130,246,0.06);border-color:rgba(59,130,246,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <rect x="35" y="25" width="50" height="40" fill="rgba(59,130,246,0.2)" stroke="rgba(59,130,246,0.8)" stroke-width="1"/>
            <rect x="33" y="20" width="14" height="45" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/>
            <rect x="73" y="20" width="14" height="45" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/>
            <path d="M 47 65 L 47 45 A 13 13 0 0 1 73 45 L 73 65 Z" fill="rgba(59,130,246,0.1)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/>
            <path d="M 31 20 Q 40 8 49 20 Z" fill="rgba(59,130,246,0.5)" stroke="rgba(59,130,246,1)" stroke-width="1"/>
            <path d="M 71 20 Q 80 8 89 20 Z" fill="rgba(59,130,246,0.5)" stroke="rgba(59,130,246,1)" stroke-width="1"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(59,130,246,0.4)" stroke-width="1"/>
          </svg>
        </div>
        <div><div class="city-name">Mumbai</div><div class="city-tag">Financial Capital</div></div>
      </div>

      <div class="city-card" style="background:rgba(139,92,246,0.06);border-color:rgba(139,92,246,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <rect x="35" y="60" width="50" height="5" fill="rgba(139,92,246,0.2)" stroke="rgba(139,92,246,0.7)" stroke-width="1"/>
            <rect x="40" y="20" width="40" height="40" fill="rgba(139,92,246,0.25)" stroke="rgba(139,92,246,0.8)" stroke-width="1"/>
            <rect x="43" y="15" width="34" height="5" fill="rgba(139,92,246,0.3)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/>
            <rect x="47" y="10" width="26" height="5" fill="rgba(139,92,246,0.4)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/>
            <path d="M 52 10 Q 60 5 68 10 Z" fill="rgba(139,92,246,0.5)"/>
            <path d="M 48 60 L 48 38 A 12 12 0 0 1 72 38 L 72 60 Z" fill="rgba(139,92,246,0.1)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(139,92,246,0.3)" stroke-width="1"/>
          </svg>
        </div>
        <div><div class="city-name">Delhi NCR</div><div class="city-tag">National Capital</div></div>
      </div>

      <div class="city-card" style="background:rgba(255,255,255,0.03);border-color:rgba(255,255,255,0.12)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <path d="M 10 36 C 30 10, 60 60, 110 36" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2" stroke-dasharray="4 2"/>
            <circle cx="60" cy="36" r="8" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
            <circle cx="60" cy="36" r="3" fill="rgba(255,255,255,0.8)"/>
            <line x1="60" y1="36" x2="25" y2="22" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="25" cy="22" r="4" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.4)" stroke-width="1"/>
            <circle cx="25" cy="22" r="1.5" fill="rgba(255,255,255,0.6)"/>
            <line x1="60" y1="36" x2="95" y2="20" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="95" cy="20" r="4" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.4)" stroke-width="1"/>
            <circle cx="95" cy="20" r="1.5" fill="rgba(255,255,255,0.6)"/>
            <line x1="60" y1="36" x2="35" y2="55" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="35" cy="55" r="5" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
            <circle cx="35" cy="55" r="2" fill="rgba(255,255,255,0.7)"/>
            <circle cx="60" cy="36" r="24" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
          </svg>
        </div>
        <div><div class="city-name">Pan India</div><div class="city-tag">Remote • All States</div></div>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     WHY CHOOSE — grid bg
═══════════════════════════════════════════════ -->
<section class="sec sec-bg-grid reveal-section">
  <div class="wrap">
    <div class="section-label-tag">Why Us</div>
    <div class="sec-title">Why Choose US</div>
    <p class="sec-sub">Experience the difference of working with a dedicated, verified professional.</p>
    <div class="values-grid reveal-stagger">
      <div class="val-card">
        <div class="val-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3"/></svg></div>
        <div class="val-title">Maximum Tax Saving</div>
        <div class="val-desc">Every filing is optimized to legally minimize your tax liability. We leave no deduction unclaimed — 80C, 80D, HRA, and beyond.</div>
      </div>
      <div class="val-card">
        <div class="val-icon"><svg viewBox="0 0 24 24"><path d="M13 2L3 14h8l-2 8 10-12h-8l2-8z"/></svg></div>
        <div class="val-title">Fast Turnaround</div>
        <div class="val-desc">Efficient processes mean faster filings. Most ITR filings completed within 24–48 hours of receiving complete documents.</div>
      </div>
      <div class="val-card">
        <div class="val-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="val-title">100% Secure</div>
        <div class="val-desc">Your financial data is treated with strict confidentiality. We use secure channels for all document exchange and communication.</div>
      </div>
    </div>
    <div class="features-grid reveal-stagger">
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/><path d="M9 12l2 2 4-4"/></svg></div><div class="feat-text">Verified ICAI Tax Expert</div><div class="feat-sub">Qualified &amp; certified professional</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/><path d="M7 8h10M7 12h6"/></svg></div><div class="feat-text">Bilingual Support</div><div class="feat-sub">English &amp; Hindi communication</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15 15 0 0 1 0 20"/></svg></div><div class="feat-text">Pan India Service</div><div class="feat-sub">All 28 states &amp; 8 UTs covered</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><path d="M6 3h12M6 7h10M6 11h8M10 11c-2 0-4 1-4 3s2 3 4 3 4 1 4 3-2 3-4 3"/></svg></div><div class="feat-text">Transparent Fees</div><div class="feat-sub">Clear pricing, no hidden charges</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg></div><div class="feat-text">Digital Process</div><div class="feat-sub">100% online — no office visit needed</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12l2 2 4-4"/></svg></div><div class="feat-text">Zero Penalties</div><div class="feat-sub">Accurate &amp; timely compliance guaranteed</div></div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     CTA SECTION
═══════════════════════════════════════════════ -->
<section id="dark-minimal-cta">
  <div class="expert-cta-container">
    <h2 class="expert-cta-heading reveal-elem delay-1">
      Build Your Startup<br><span class="highlight">the Right Way</span>
    </h2>
    <p class="expert-cta-subtext reveal-elem delay-2">
      Helps startups build compliant and scalable foundations. Tax expert <strong>Ankit Agarwal</strong> guides you through company registration, compliance, and financial structuring.
    </p>
    <div class="reveal-elem delay-3" style="display:flex;justify-content:center;">
      <a href="{{ route('boc.step1', ['source' => 'taxexpert-aniktagarwal-cta']) }}" class="expert-cta-btn">
        Hire Our Tax Expert
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
  <script>
    (function(){
      var el=document.getElementById('dark-minimal-cta');if(!el) return;
      var obs=new IntersectionObserver(function(e){e.forEach(function(x){if(x.isIntersecting){x.target.classList.add('is-visible');obs.unobserve(x.target)}})},{threshold:0.2});
      obs.observe(el);
    })();
  </script>
</section>

<div class="wrap"><hr></div>

<!-- ═══════════════════════════════════════════════
     FAQ — raised bg
═══════════════════════════════════════════════ -->
<section class="sec sec-bg-raised reveal-section" id="contact">
  <div class="wrap">
    <div class="section-label-tag">Help</div>
    <div class="sec-title">Frequently Asked Questions</div>
    <p class="sec-sub">Common questions about working with Ankit Agarwal.</p>
    <div class="card reveal" style="margin-top:20px">
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFAQ(this)"><span>What documents do I need for company registration?</span><span class="faq-toggle">+</span></div>
        <div class="faq-a">For company registration: PAN, Aadhaar, address proof, registered office proof, and digital signature. Ankit will send you a detailed checklist specific to your business structure.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFAQ(this)"><span>How long does company registration take?</span><span class="faq-toggle">+</span></div>
        <div class="faq-a">Most company registrations (Pvt Ltd, LLP) are completed within 10–15 working days, subject to government processing times and document completeness.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFAQ(this)"><span>Do you serve clients outside major cities?</span><span class="faq-toggle">+</span></div>
        <div class="faq-a">Absolutely. CA Ankit Agarwal provides 100% remote services across all 28 states and 8 Union Territories of India. Everything is handled digitally — documents via email, consultations via call/video.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFAQ(this)"><span>What is Startup India recognition and its benefits?</span><span class="faq-toggle">+</span></div>
        <div class="faq-a">Startup India recognition (DPIIT) provides tax exemptions, easier compliance, and access to funding. Ankit guides you through the entire recognition process and post-recognition benefits.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFAQ(this)"><span>What are your fees for company registration?</span><span class="faq-toggle">+</span></div>
        <div class="faq-a">Fees are transparent and fixed based on the entity type and complexity. Contact Ankit for an exact quote based on your specific requirements — no hidden charges ever.</div>
      </div>
    </div>
  </div>
</section>

<!-- ─── FOOTER ─── -->
<footer class="footer sec-bg-pure">
  <div class="wrap">
    <div style="font-size:13px;color:rgba(255,255,255,0.5)">CA Ankit Agarwal — Startup &amp; Business Consultant</div>
    <div class="footer-links">
      <a class="footer-link" href="#">Privacy Policy</a>
      <a class="footer-link" href="#">Terms of Service</a>
      <a class="footer-link" href="#">Sitemap</a>
    </div>
    <div class="footer-copy">© 2025 CA Ankit Agarwal. All rights reserved. ICAI Registered.</div>
  </div>
</footer>

</div><!-- /bg wrapper -->

<script>
/* ─── PROGRESS BAR ─── */
var targetProgress=0,currentProgress=0;
var progressBar=document.getElementById('progressBar');
function updateProgress(){var s=document.documentElement;targetProgress=(s.scrollTop/(s.scrollHeight-s.clientHeight))*100}
function lerpProgress(){currentProgress+=(targetProgress-currentProgress)*0.12;progressBar.style.width=currentProgress+'%';var isScrolling=Math.abs(targetProgress-currentProgress)>0.05;progressBar.style.height=isScrolling?'3px':'2px';requestAnimationFrame(lerpProgress)}
window.addEventListener('scroll',updateProgress,{passive:true});
lerpProgress();

/* ─── CURSOR GLOW ─── */
var cg=document.getElementById('cursorGlow');
var mouseX=0,mouseY=0,cgX=0,cgY=0;
var isMobile=window.innerWidth<=768;
if(!isMobile){
  document.addEventListener('mousemove',function(e){
    mouseX=e.clientX;mouseY=e.clientY;
    var el=document.elementFromPoint(e.clientX,e.clientY);
    var interactive=el&&(el.closest('.btn')||el.closest('.card')||el.closest('.exp-card')||el.closest('.service-main-card')||el.closest('.ind-card')||el.closest('.city-card')||el.closest('.val-card')||el.closest('.feat-item')||el.closest('.contact-item')||el.closest('.hero-photo-card')||el.closest('.hero-glass-card')||el.closest('.hero-pill'));
    cg.classList.toggle('over-interactive',!!interactive);
  },{passive:true});
  function animateCursor(){cgX+=(mouseX-cgX)*0.1;cgY+=(mouseY-cgY)*0.1;cg.style.left=cgX+'px';cg.style.top=cgY+'px';requestAnimationFrame(animateCursor)}
  animateCursor();
}

/* ─── HERO PARALLAX ─── */
var heroSection=document.getElementById('heroSection');
function updateHeroParallax(){var scrollY=window.scrollY;var heroH=heroSection.offsetHeight;if(scrollY<heroH*1.5){var progress=Math.min(scrollY/heroH,1);heroSection.style.opacity=1-progress*0.6;heroSection.style.transform='translateY('+scrollY*0.12+'px)'}}
window.addEventListener('scroll',updateHeroParallax,{passive:true});

/* ─── HERO PHOTO CARD 3D ─── */
(function(){
  if(window.innerWidth<=768) return;
  var card=document.getElementById('heroPhotoCard');
  if(!card) return;
  var targetRotX=0,targetRotY=0,targetTransX=0,targetTransY=0;
  var currentRotX=0,currentRotY=0,currentTransX=0,currentTransY=0;
  var currentShadowX=0,currentShadowY=0,targetShadowX=0,targetShadowY=0;
  var magneticRadius=200,magneticStrength=0.08,maxRotate=8,shadowFactor=0.15;
  var mx=0,my=0,isOverCard=false;
  function resetCard(){targetRotX=targetRotY=targetTransX=targetTransY=targetShadowX=targetShadowY=0}
  window.addEventListener('scroll',function(){resetCard()},{passive:true});
  window.addEventListener('mousemove',function(e){mx=e.clientX;my=e.clientY},{passive:true});
  card.addEventListener('mouseenter',function(){isOverCard=true});
  card.addEventListener('mouseleave',function(){isOverCard=false;resetCard()});
  function updateCard(){
    var rect=card.getBoundingClientRect();
    var cx=rect.left+rect.width/2,cy=rect.top+rect.height/2;
    var dx=mx-cx,dy=my-cy,dist=Math.sqrt(dx*dx+dy*dy);
    if(dist<magneticRadius){targetTransX=dx*magneticStrength;targetTransY=dy*magneticStrength;targetShadowX=-dx*shadowFactor;targetShadowY=-dy*shadowFactor}
    else{targetTransX=0;targetTransY=0;targetShadowX=0;targetShadowY=0}
    if(isOverCard){var rx=(mx-rect.left)/rect.width,ry=(my-rect.top)/rect.height;targetRotY=(rx-0.5)*2*maxRotate;targetRotX=(ry-0.5)*-2*maxRotate}
    else{targetRotX=0;targetRotY=0}
    var e2=0.12;
    currentRotX+=(targetRotX-currentRotX)*e2;currentRotY+=(targetRotY-currentRotY)*e2;
    currentTransX+=(targetTransX-currentTransX)*e2;currentTransY+=(targetTransY-currentTransY)*e2;
    currentShadowX+=(targetShadowX-currentShadowX)*e2;currentShadowY+=(targetShadowY-currentShadowY)*e2;
    var clamp=function(v,m){return Math.min(m,Math.max(-m,v))};
    card.style.transform='perspective(1000px) rotateX('+clamp(currentRotX,maxRotate)+'deg) rotateY('+clamp(currentRotY,maxRotate)+'deg) translateX('+currentTransX+'px) translateY('+currentTransY+'px)';
    card.style.boxShadow=currentShadowX+'px '+currentShadowY+'px 40px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.05)';
    requestAnimationFrame(updateCard);
  }
  requestAnimationFrame(updateCard);
})();

/* ─── METRIC FLOAT ─── */
if(!isMobile){
  var metrics=document.querySelectorAll('.hero-metric');
  document.addEventListener('mousemove',function(e){
    var px=(e.clientX/window.innerWidth-0.5),py=(e.clientY/window.innerHeight-0.5);
    metrics.forEach(function(m,i){var f=i===0?8:-6;m.style.transform='translate('+px*f+'px,'+py*f+'px)'});
  },{passive:true});
}

/* ─── SCROLL REVEAL ─── */
var revealObs=new IntersectionObserver(function(entries){
  entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');revealObs.unobserve(e.target)}});
},{threshold:0.10,rootMargin:'0px 0px -32px 0px'});
document.querySelectorAll('.reveal,.reveal-section,.reveal-stagger').forEach(function(el){revealObs.observe(el)});

/* ─── KPI COUNTERS ─── */
function animateCount(el,target,duration){
  var start=performance.now();
  function step(now){var elapsed=now-start;var progress=Math.min(elapsed/duration,1);var eased=1-(1-progress)*(1-progress);el.textContent=Math.floor(eased*target);if(progress<1)requestAnimationFrame(step);else el.textContent=target}
  requestAnimationFrame(step);
}
window.addEventListener('load',function(){
  setTimeout(function(){
    document.querySelectorAll('.kpi-hero').forEach(function(el){animateCount(el,parseInt(el.dataset.target),1400)});
  },600);
});

/* ─── FAQ ─── */
function toggleFAQ(el){
  var ans=el.nextElementSibling,tog=el.querySelector('.faq-toggle'),open=ans.classList.contains('open');
  document.querySelectorAll('.faq-a').forEach(function(a){a.classList.remove('open')});
  document.querySelectorAll('.faq-toggle').forEach(function(t){t.textContent='+';t.style.transform=''});
  if(!open){ans.classList.add('open');tog.textContent='−';tog.style.transform='rotate(180deg)'}
}

/* ─── TOAST ─── */
function showToast(msg){var t=document.getElementById('toast');t.textContent=msg;t.classList.add('show');setTimeout(function(){t.classList.remove('show')},3000)}

/* ─── ABOUT TOGGLE ─── */
function toggleAbout(){
  var short=document.getElementById('aboutText'),full=document.getElementById('aboutFull'),btn=document.querySelector('.about-toggle');
  if(full.style.display==='none'){full.style.display='block';short.style.display='none';btn.innerHTML='Read Less ▲'}
  else{full.style.display='none';short.style.display='block';btn.innerHTML='Read More ▼'}
}

/* ─── TAP-TO-REVEAL MOBILE ─── */
(function(){
  var activeCard=null,tapListenersAttached=false;
  function attachTapListeners(){
    if(tapListenersAttached) return;tapListenersAttached=true;
    document.querySelectorAll('.tap-card').forEach(function(card){
      if(card.closest('.industry-grid')) return;
      card.addEventListener('click',handleTap);
    });
  }
  function closeAll(){document.querySelectorAll('.tap-card.active').forEach(function(c){if(!c.closest('.industry-grid')) c.classList.remove('active')});activeCard=null}
  function handleTap(){
    if(window.innerWidth>768) return;var card=this;
    if(activeCard===card){card.classList.remove('active');activeCard=null;return}
    if(activeCard) activeCard.classList.remove('active');
    card.classList.add('active');activeCard=card;
  }
  function init(){if(window.innerWidth<=768){attachTapListeners()}}
  init();
  window.addEventListener('resize',function(){if(window.innerWidth>768) closeAll();else init()});
}());

/* ─── MOBILE STICKY BAR — hide when CTA visible ─── */
(function(){
  var bar = document.querySelector('.mobile-sticky-bar');
  if(!bar || window.innerWidth > 768) return;
  var ctaSection = document.getElementById('dark-minimal-cta');
  if(!ctaSection) return;
  var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      bar.style.opacity = e.isIntersecting ? '0' : '1';
      bar.style.pointerEvents = e.isIntersecting ? 'none' : 'auto';
    });
  },{threshold:0.1});
  obs.observe(ctaSection);
  bar.style.transition = 'opacity 0.35s ease';
})();
</script>
@endsection
