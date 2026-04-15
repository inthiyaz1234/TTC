@extends('front')
@section('content')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate GST Compliance Guide 2026 | The Tax Company</title>
<meta name="description" content="Complete GST registration, filing, rates, ITC & compliance guide for Indian businesses 2026. CA verified. The Tax Company.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>

    /* Force white background on everything */
    html, body {
        background-color: #ffffff !important;
    }
    body > * {
        background-color: transparent;
    }

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --ink:    #0E0E0E;
  --ink-2:  #2C2C2C;
  --ink-3:  #4A4A4A;
  --ink-4:  #6B6B6B;
  --ink-5:  #909090;
  --ink-6:  #B8B8B8;
  --ink-7:  #D4D4D4;
  --bd:     #E8E8E8;
  --bd2:    #F0F0F0;
  --surf:   #F7F7F7;
  --white:  #FFFFFF;
  --font:   'Montserrat', sans-serif;
  --max:    1380px;
  --r:      14px;
  --rsm:    9px;
  --rxs:    6px;
  --sh:     0 1px 3px rgba(0,0,0,.04), 0 4px 16px rgba(0,0,0,.05);
}
html{scroll-behavior:smooth}
body{font-family:var(--font);color:var(--ink);background:var(--white);font-size:14px;line-height:1.6;-webkit-font-smoothing:antialiased;overflow-x:hidden}
h1,h2,h3,h4,h5{font-family:var(--font)}
a{text-decoration:none;color:inherit}
ul,ol{list-style:none}
button{font-family:var(--font);cursor:pointer;border:none;background:none;outline:none}
img,svg{display:block}

#pbar-wrap{position:fixed;top:0;left:0;width:100%;height:2.5px;background:var(--bd2);z-index:600}
#pbar{height:100%;width:0;background:var(--ink);transition:width .1s linear}

.topbar{background:var(--ink);color:rgba(255,255,255,.45);font-size:11.5px;font-weight:500;text-align:center;padding:7px 20px;letter-spacing:.02em;margin-top:2.5px}
.topbar b{color:rgba(255,255,255,.88)}

.nav{position:sticky;top:2.5px;z-index:400;background:rgba(255,255,255,.97);backdrop-filter:blur(20px);border-bottom:1px solid var(--bd);display:flex;align-items:center;justify-content:space-between;padding:0 28px;height:56px}
.nav-logo{font-size:16px;font-weight:800;color:var(--ink);letter-spacing:-.025em;display:flex;align-items:center;gap:7px}
.nav-links{display:flex;gap:22px}
.nav-links a{font-size:12.5px;font-weight:500;color:var(--ink-3);transition:color .15s}
.nav-links a:hover{color:var(--ink)}
.nav-r{display:flex;align-items:center;gap:9px}
.btn-login{font-size:12.5px;font-weight:600;color:var(--ink-2)}
.btn-nav{background:var(--ink);color:#fff;padding:8px 16px;border-radius:7px;font-size:12.5px;font-weight:700;transition:opacity .18s}
.btn-nav:hover{opacity:.8}

.bc{border-bottom:1px solid var(--bd);padding:9px 28px}
.bc-in{max-width:var(--max);margin:0 auto;display:flex;align-items:center;gap:6px;font-size:11.5px;color:var(--ink-5);font-weight:500}
.bc-in a:hover{color:var(--ink)}
.bcsep{color:var(--ink-7)}
.bccur{color:var(--ink-2);font-weight:600}

.ph{border-bottom:1px solid var(--bd);padding:32px 28px 28px;background:var(--white)}
.ph-in{max-width:var(--max);margin:0 auto}
.ph-chip{display:inline-flex;align-items:center;gap:6px;background:var(--surf);border:1px solid var(--bd);border-radius:50px;padding:4px 12px;font-size:10.5px;font-weight:700;letter-spacing:.09em;text-transform:uppercase;color:var(--ink-5);margin-bottom:14px}
.ph h1{font-size:clamp(20px,2.6vw,32px);font-weight:800;color:var(--ink);line-height:1.18;letter-spacing:-.028em;margin-bottom:9px}
.ph-sub{font-size:14.5px;color:var(--ink-3);max-width:580px;line-height:1.72}
.ph-meta{display:flex;gap:16px;margin-top:14px;flex-wrap:wrap}
.ph-mi{display:flex;align-items:center;gap:5px;font-size:11.5px;color:var(--ink-5);font-weight:500}
.ph-mi svg{width:13px;height:13px;stroke:var(--ink-5);fill:none;stroke-width:1.8;stroke-linecap:round}

.doc-wrap{max-width:var(--max);margin:0 auto;padding:0 28px;display:grid;grid-template-columns:220px 1fr 230px;gap:0;align-items:start}

.left-col{position:sticky;top:66px;height:max-content;padding:24px 20px 24px 0;border-right:1px solid var(--bd2)}
.toc-lbl{font-size:9.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--ink-6);margin-bottom:9px;padding-left:2px;display:block}
.toc-nav{display:flex;flex-direction:column;gap:1px}
.tl{display:flex;align-items:center;gap:7px;padding:6px 8px 6px 10px;border-radius:var(--rxs);font-size:11.5px;font-weight:500;color:var(--ink-5);border-left:2px solid transparent;transition:all .14s}
.tl:hover{color:var(--ink);background:var(--surf)}
.tl.active{color:var(--ink);font-weight:700;background:var(--surf);border-left-color:var(--ink)}
.tl .tn{font-size:9px;font-weight:800;color:var(--ink-7);min-width:16px;text-align:right;transition:color .14s;flex-shrink:0}
.tl.active .tn{color:var(--ink)}
.toc-div{height:1px;background:var(--bd);margin:6px 0 6px 10px}
.toc-cta-box{margin-top:14px;background:var(--ink);border-radius:10px;padding:13px 12px;text-align:center}
.toc-cta-box p{font-size:11px;color:#ffffff;margin-bottom:8px;line-height:1.5}
.toc-cta-btn{display:block;width:100%;background:#fff;color:var(--ink);border-radius:6px;padding:8px 10px;font-family:var(--font);font-size:11px;font-weight:700;transition:opacity .18s;cursor:pointer;border:none}
.toc-cta-btn:hover{opacity:.87}

.main-col{padding:24px 32px 64px;min-width:0}
.sec{padding-bottom:32px;margin-bottom:4px;border-bottom:1px solid var(--bd2)}
.sec:last-child{border-bottom:none;padding-bottom:0}
.s-lbl{font-size:9.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--ink-5);margin-bottom:5px;display:block}
.s-ttl{font-size:19px;font-weight:800;color:var(--ink);line-height:1.2;letter-spacing:-.022em;margin-bottom:12px}
.s-desc{font-size:13px;color:var(--ink-4);margin-bottom:12px;line-height:1.65}
.panel{background:var(--surf);border:1px solid var(--bd);border-radius:12px;padding:17px 16px;margin-bottom:12px}
.panel p{font-size:13.5px;color:var(--ink-2);line-height:1.77}
.panel p+p{margin-top:10px}
.panel strong{color:var(--ink);font-weight:700}

.right-col{position:sticky;top:66px;height:max-content;padding:24px 0 24px 20px;border-left:1px solid var(--bd2)}
.r-card{background:var(--surf);border:1px solid var(--bd);border-radius:var(--r);padding:14px;font-size:12.5px;margin-bottom:12px}
.r-card h5{font-size:11.5px;font-weight:700;color:var(--ink);margin-bottom:10px}
.r-row{display:flex;justify-content:space-between;padding:6px 0;border-bottom:1px solid var(--bd2);font-size:11.5px}
.r-row:last-child{border-bottom:none}
.r-row span:first-child{color:var(--ink-4)}
.r-row span:last-child{font-weight:600;color:var(--ink-2)}
.r-link{display:flex;align-items:center;gap:7px;padding:8px 0;font-size:12px;color:var(--ink-3);border-bottom:1px solid var(--bd2);transition:color .15s}
.r-link:last-child{border-bottom:none}
.r-link svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:1.6;stroke-linecap:round}
.r-link:hover{color:var(--ink)}
.r-cta{background:var(--ink);color:#fff;display:block;width:100%;padding:11px 14px;border-radius:8px;text-align:center;font-family:var(--font);font-size:12px;font-weight:700;margin-top:11px;cursor:pointer;transition:opacity .18s;border:none}
.r-cta:hover{opacity:.85}
.r-cta-g{background:transparent;color:var(--ink-3);display:block;width:100%;padding:9px 14px;border-radius:8px;text-align:center;font-family:var(--font);font-size:12px;font-weight:600;margin-top:7px;cursor:pointer;transition:all .18s;border:1px solid var(--bd)}
.r-cta-g:hover{border-color:var(--ink);color:var(--ink)}

.g2{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-top:12px}
.g3{display:grid;grid-template-columns:repeat(3,1fr);gap:9px;margin-top:12px}
.span2{grid-column:1/-1}
.icard{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:14px;display:flex;flex-direction:column;gap:9px;transition:border-color .18s,transform .2s,box-shadow .2s}
.icard:hover{border-color:#CDCDCD;transform:translateY(-2px);box-shadow:var(--sh)}
.ico-box{width:38px;height:38px;border-radius:9px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ico-box svg{width:17px;height:17px;stroke:var(--ink-2);stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round}
.icard-t{font-size:12.5px;font-weight:700;color:var(--ink);letter-spacing:-.01em;line-height:1.3}
.icard-d{font-size:11.5px;color:var(--ink-3);line-height:1.55}

.hl-strip{background:var(--surf);border:1px solid var(--bd);border-radius:12px;padding:15px 16px;margin-bottom:12px}
.hl-strip-ttl{font-size:11.5px;font-weight:700;color:var(--ink);margin-bottom:10px;display:flex;align-items:center;gap:6px}
.hl-item{display:flex;align-items:center;gap:7px;font-size:12px;color:var(--ink-3);margin-bottom:5px}
.hl-item svg{width:13px;height:13px;stroke:var(--ink-4);fill:none;stroke-width:2;stroke-linecap:round;flex-shrink:0}

.chips{display:flex;flex-wrap:wrap;gap:6px;margin-top:12px}
.chip{padding:5px 12px;background:var(--surf);border:1px solid var(--bd);border-radius:50px;font-size:11px;font-weight:600;color:var(--ink-4);transition:all .15s}
.chip:hover{border-color:#bbb;color:var(--ink)}

/* ════════════════════════════════════════════════
   STEP CARDS — FIX APPLIED
   • Base: repeat(2,1fr) — always 2 columns / 3 rows
   • Old repeat(3,1fr) removed
   • Old @media(min-width:901px) !important removed
   • Both .steps-g and both .stl merged into one each
════════════════════════════════════════════════ */
.steps-g{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-top:20px}
.step-card{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:17px 13px 20px;text-align:center;position:relative;opacity:0;transform:perspective(700px) rotateX(-28deg) scale(.95);transform-origin:top center;transition:box-shadow .25s,border-color .22s}
.step-card.vis{animation:flipIn .65s cubic-bezier(.16,1,.3,1) forwards}
@keyframes flipIn{0%{opacity:0;transform:perspective(700px) rotateX(-28deg) scale(.95);filter:blur(4px)}58%{filter:blur(0)}100%{opacity:1;transform:perspective(700px) rotateX(0) scale(1);filter:blur(0)}}
.step-card:hover{transform:translateY(-4px) scale(1.01)!important;box-shadow:0 12px 28px rgba(0,0,0,.09);border-color:#aaa}
.s-badge{width:28px;height:28px;border-radius:50%;background:var(--ink);color:#fff;font-size:10px;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 10px;box-shadow:0 2px 8px rgba(0,0,0,.22)}
.s-ico{width:42px;height:42px;border-radius:11px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;margin:0 auto 10px}
.s-ico svg{width:19px;height:19px;stroke:var(--ink-2);stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round}
.step-card h4{font-size:12.5px;font-weight:700;color:var(--ink);margin-bottom:5px;letter-spacing:-.01em}
.step-card p{font-size:11.5px;color:var(--ink-4);line-height:1.6}

/* TIMELINE — FIX APPLIED
   6-column grid (was 3). Line spans dot-1 centre → dot-6 centre.
   Each col = 1/6 = 16.67%; centres at 8.33% and 91.67%.      */
.stl{position:relative;height:24px;display:grid;grid-template-columns:repeat(6,1fr);gap:12px;align-items:center;margin-top:12px}
.stl::before{content:'';position:absolute;top:50%;left:calc(8.33% + 5px);right:calc(8.33% + 5px);height:2px;background:var(--bd);transform:translateY(-50%)}
.stl::after{content:'';position:absolute;top:50%;left:calc(8.33% + 5px);width:0;height:2px;background:var(--ink);transform:translateY(-50%);transition:width 1.8s cubic-bezier(.4,0,.2,1)}
.stl.go::after{width:calc(83.34% - 10px)}
.stl-c{display:flex;justify-content:center}
.stl-d{width:10px;height:10px;border-radius:50%;background:var(--bd);border:2px solid var(--white);transition:background .3s}
.stl-d.lit{background:var(--ink)}

.tab-bar{display:flex;border:1px solid var(--bd);border-radius:10px;overflow:hidden;background:var(--surf)}
.tab-btn{flex:1;padding:9px 7px;font-family:var(--font);font-size:11px;font-weight:600;color:var(--ink-4);background:transparent;border:none;border-right:1px solid var(--bd);transition:all .15s;text-align:center;cursor:pointer;line-height:1.3}
.tab-btn:last-child{border-right:none}
.tab-btn.on{background:var(--ink);color:#fff}
.tab-btn .tsub{font-size:9.5px;font-weight:400;opacity:.7;display:block;margin-top:1px}
.tab-panels{margin-top:9px}
.tab-panel{display:none;background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:16px}
.tab-panel.on{display:block}
.tp-head{display:flex;align-items:flex-start;gap:11px;margin-bottom:13px;padding-bottom:13px;border-bottom:1px solid var(--bd2)}
.tp-ico{width:42px;height:42px;border-radius:10px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.tp-ico svg{width:19px;height:19px;stroke:var(--ink-2);stroke-width:1.5;fill:none;stroke-linecap:round;stroke-linejoin:round}
.tp-ttl{font-size:13.5px;font-weight:700;color:var(--ink);margin-bottom:2px}
.tp-sub{font-size:11.5px;color:var(--ink-4)}
.tp-body p{font-size:12.5px;color:var(--ink-3);line-height:1.72;margin-bottom:9px}
.tp-list{display:flex;flex-direction:column}
.tp-li{display:flex;gap:8px;padding:7px 0;border-bottom:1px solid var(--bd2);font-size:12px;color:var(--ink-3);align-items:flex-start;line-height:1.5}
.tp-li:last-child{border-bottom:none}
.tp-li svg{width:13px;height:13px;stroke:var(--ink-5);fill:none;stroke-width:2;stroke-linecap:round;flex-shrink:0;margin-top:2px}
.tp-tags{display:flex;gap:6px;flex-wrap:wrap;margin-top:11px}
.tp-tag{background:var(--surf);border:1px solid var(--bd);border-radius:5px;padding:3px 8px;font-size:10.5px;font-weight:600;color:var(--ink-3)}

.kb-stack{display:flex;flex-direction:column;gap:7px;margin-top:12px}
.kb{border:1px solid var(--bd);border-radius:12px;overflow:hidden;transition:border-color .18s}
.kb.open{border-color:#c6c6c6;box-shadow:var(--sh)}
.kb-hd{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:13px 15px;cursor:pointer;background:var(--white);transition:background .15s}
.kb-hd:hover{background:var(--surf)}
.kb-left{display:flex;align-items:center;gap:9px}
.kb-ico{width:32px;height:32px;border-radius:7px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.kb-ico svg{width:15px;height:15px;stroke:var(--ink-3);stroke-width:1.6;fill:none;stroke-linecap:round}
.kb-t{font-size:12.5px;font-weight:700;color:var(--ink);line-height:1.3}
.kb-s{font-size:10.5px;color:var(--ink-5);margin-top:1px}
.kb-chev{width:22px;height:22px;border-radius:5px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .22s,background .18s}
.kb-chev svg{width:11px;height:11px;stroke:var(--ink-4);stroke-width:2;fill:none;stroke-linecap:round;transition:stroke .18s}
.kb.open .kb-chev{transform:rotate(180deg);background:var(--ink);border-color:var(--ink)}
.kb.open .kb-chev svg{stroke:#fff}
.kb-body{max-height:0;overflow:hidden;transition:max-height .32s ease}
.kb.open .kb-body{max-height:600px}
.kb-in{padding:0 15px 15px;border-top:1px solid var(--bd)}
.kb-in p{font-size:12.5px;color:var(--ink-3);line-height:1.72;margin-top:11px}
.kb-in ul{margin-top:9px;display:flex;flex-direction:column}
.kb-li{display:flex;gap:8px;align-items:flex-start;padding:7px 0;border-bottom:1px solid var(--bd2);font-size:12px;color:var(--ink-3);line-height:1.5}
.kb-li:last-child{border-bottom:none}
.kb-li svg{width:12px;height:12px;stroke:var(--ink-5);fill:none;stroke-width:2;stroke-linecap:round;flex-shrink:0;margin-top:2px}

.rate-strip{display:grid;grid-template-columns:repeat(5,1fr);gap:9px;margin-top:12px}
.rcard{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:14px 12px;transition:all .2s}
.rcard:hover{border-color:#ccc;transform:translateY(-2px);box-shadow:var(--sh)}
.rcard-pct{font-size:26px;font-weight:800;color:var(--ink);letter-spacing:-.03em;line-height:1;margin-bottom:5px;display:block}
.rcard-lbl{font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px}
.rcard-d{font-size:11px;color:var(--ink-4);line-height:1.5}

.bslider{overflow:hidden;border-radius:var(--r);border:1px solid var(--bd);margin-top:12px}
.btrack{display:flex;transition:transform .45s cubic-bezier(.4,0,.2,1)}
.bslide{flex:0 0 100%;display:grid;grid-template-columns:1fr 1fr;gap:1px;background:var(--bd)}
.bs-cell{background:var(--white);padding:18px 16px;display:flex;flex-direction:column;gap:9px}
.bs-ico{width:38px;height:38px;border-radius:9px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center}
.bs-ico svg{width:17px;height:17px;stroke:var(--ink-2);stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round}
.bs-t{font-size:12.5px;font-weight:700;color:var(--ink)}
.bs-d{font-size:11.5px;color:var(--ink-3);line-height:1.55}
.bctrl{display:flex;align-items:center;justify-content:space-between;padding:9px 13px;border-top:1px solid var(--bd);background:var(--surf)}
.bdots{display:flex;gap:5px}
.bdot{width:5px;height:5px;border-radius:50%;background:var(--ink-7);border:none;cursor:pointer;transition:all .2s;padding:0}
.bdot.on{background:var(--ink);width:16px;border-radius:3px}
.barrs{display:flex;gap:5px}
.barr{width:26px;height:26px;border-radius:5px;background:var(--white);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all .15s}
.barr:hover{background:var(--ink);border-color:var(--ink)}
.barr:hover svg{stroke:#fff}
.barr svg{width:13px;height:13px;stroke:var(--ink-3);stroke-width:2;fill:none;stroke-linecap:round;transition:stroke .15s}

.tbl-wrap{border-radius:12px;border:1px solid var(--bd);overflow:hidden;margin-top:12px;overflow-x:auto}
table.ttbl{width:100%;border-collapse:collapse;background:var(--white);font-size:12.5px}
table.ttbl thead{background:var(--ink)}
table.ttbl th{padding:10px 13px;text-align:left;font-size:9.5px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.42)}
table.ttbl td{padding:10px 13px;color:var(--ink-2);border-bottom:1px solid var(--bd);font-weight:500;line-height:1.5}
table.ttbl td b{color:var(--ink);font-weight:700}
table.ttbl tr:last-child td{border-bottom:none}
table.ttbl tbody tr:hover td{background:var(--surf)}

.faq-wrap{display:flex;flex-direction:column;gap:6px;margin-top:12px}
.faq{border:1px solid var(--bd);border-radius:var(--rsm);overflow:hidden;transition:border-color .18s}
.faq.open{border-color:#c6c6c6}
.faq-q{width:100%;display:flex;align-items:center;justify-content:space-between;gap:11px;padding:12px 15px;background:none;border:none;font-family:var(--font);font-size:12.5px;font-weight:600;color:var(--ink);text-align:left;cursor:pointer}
.faq-arr{width:21px;height:21px;border-radius:5px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .22s,background .18s}
.faq-arr svg{width:10px;height:10px;stroke:var(--ink-4);stroke-width:2.2;fill:none;stroke-linecap:round;transition:stroke .18s}
.faq.open .faq-arr{transform:rotate(180deg);background:var(--ink);border-color:var(--ink)}
.faq.open .faq-arr svg{stroke:#fff}
.faq-body{max-height:0;overflow:hidden;transition:max-height .28s ease}
.faq.open .faq-body{max-height:400px}
.faq-in{padding:11px 15px 14px;font-size:12.5px;color:var(--ink-3);line-height:1.75;border-top:1px solid var(--bd)}

.faq-view-more{background:transparent;border:1px solid var(--bd);border-radius:30px;padding:8px 20px;font-size:13px;font-weight:600;color:var(--ink-3);margin-top:12px;cursor:pointer;transition:all .15s}
.faq-view-more:hover{border-color:var(--ink);color:var(--ink)}

.guide-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:9px;margin-top:12px}
.gcard{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:14px;display:flex;flex-direction:column;transition:all .18s}
.gcard:hover{border-color:#ccc;transform:translateY(-2px);box-shadow:var(--sh)}
.g-tag{font-size:9px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-5);margin-bottom:5px;display:flex;align-items:center;gap:4px}
.g-tag svg{width:11px;height:11px;stroke:var(--ink-5);fill:none;stroke-width:1.8;stroke-linecap:round}
.gcard h4{font-size:12.5px;font-weight:700;color:var(--ink);line-height:1.45;flex:1}
.g-read{font-size:11px;font-weight:700;color:var(--ink-4);margin-top:9px;display:flex;align-items:center;gap:4px;transition:color .15s}
.g-read svg{width:11px;height:11px;stroke:currentColor;stroke-width:2;fill:none;stroke-linecap:round;transition:transform .15s}
.gcard:hover .g-read{color:var(--ink)}
.gcard:hover .g-read svg{transform:translateX(3px)}

.cta{background:var(--ink);text-align:center;padding:52px 28px}
.cta h3{font-size:24px;font-weight:800;color:#fff;letter-spacing:-.025em;margin-bottom:8px}
.cta p{font-size:14px;color:rgba(255,255,255,.38);margin-bottom:22px}
.cta-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}
.btn-w{background:#fff;color:var(--ink);padding:11px 24px;border-radius:40px;font-family:var(--font);font-size:13px;font-weight:700;transition:opacity .18s;cursor:pointer;border:none}
.btn-w:hover{opacity:.88}
.btn-g{background:transparent;color:rgba(255,255,255,.7);border:1.5px solid rgba(255,255,255,.18);padding:10px 22px;border-radius:40px;font-family:var(--font);font-size:13px;font-weight:600;transition:all .18s;cursor:pointer}
.btn-g:hover{border-color:rgba(255,255,255,.5);color:#fff}

footer{background:#070707;padding:26px 28px;text-align:center;color:rgba(255,255,255,.28);font-size:11.5px;letter-spacing:.02em}
footer b{color:rgba(255,255,255,.55)}

.mob-nav{display:none}

/* ── RESPONSIVE ── */
@media(max-width:1120px){
  .doc-wrap{grid-template-columns:196px 1fr 210px}
  .main-col{padding:22px 24px 64px}
}
@media(max-width:900px){
  .doc-wrap{grid-template-columns:1fr;gap:0;padding:0}
  .left-col,.right-col{display:none}
  .main-col{padding:0 16px 56px}
  .nav{padding:0 16px;height:52px}
  .nav-links{display:none}
  .bc{padding:8px 16px}
  .ph{padding:20px 16px 18px}
  .cta{padding:40px 20px}
  .cta h3{font-size:20px}
  .cta-btns{flex-direction:column;align-items:center}
  .g2{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch;scrollbar-width:none;gap:10px;padding-bottom:4px}
  .g2::-webkit-scrollbar{display:none}
  .g2 .icard{flex:0 0 calc(72vw - 16px);scroll-snap-align:start;min-width:0}
  .g2 .span2{flex:0 0 calc(88vw - 16px)}
  .g3{grid-template-columns:repeat(2,1fr);gap:8px}
  /* FIX: .steps-g stays 2-col on mobile — no change needed, matches base */
  .steps-g{grid-template-columns:repeat(2,1fr);gap:8px}
  .stl{display:none}
  .rate-strip{grid-template-columns:repeat(5,minmax(120px,1fr));overflow-x:auto;scrollbar-width:none;padding-bottom:4px}
  .rate-strip::-webkit-scrollbar{display:none}
  .bslide{grid-template-columns:1fr}
  .guide-grid{grid-template-columns:1fr;gap:8px}
  footer{padding:24px 16px}
  .mob-nav{display:flex;position:fixed;bottom:16px;left:50%;transform:translateX(-50%);z-index:500;background:rgba(14,14,14,.94);backdrop-filter:blur(16px);border-radius:50px;overflow:hidden;max-width:calc(100vw - 32px)}
  .mob-tgl{display:flex;align-items:center;gap:7px;padding:10px 16px;color:#fff;font-size:12px;font-weight:600;cursor:pointer;white-space:nowrap}
  .mob-tgl svg{width:13px;height:13px;stroke:#fff;stroke-width:1.8;fill:none;stroke-linecap:round;flex-shrink:0}
  .mob-cur{max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
  .mob-panel{position:fixed;bottom:60px;left:50%;transform:translateX(-50%);background:rgba(14,14,14,.96);backdrop-filter:blur(18px);border-radius:14px;padding:8px 6px;width:min(320px,calc(100vw - 32px));max-height:0;overflow:hidden;transition:max-height .28s ease,opacity .22s;opacity:0;pointer-events:none}
  .mob-panel.open{max-height:440px;overflow-y:auto;opacity:1;pointer-events:all}
  .mob-link{display:flex;align-items:center;gap:8px;padding:8px 12px;border-radius:8px;font-size:12px;font-weight:500;color:rgba(255,255,255,.6);transition:all .15s}
  .mob-link:hover,.mob-link.act{background:rgba(255,255,255,.1);color:#fff}
  .mob-link .mn{font-size:9.5px;color:rgba(255,255,255,.3);min-width:18px}
  .mob-cta-bar{display:flex;position:fixed;bottom:0;left:0;width:100%;background:var(--white);border-top:1px solid var(--bd);padding:10px 16px;z-index:490}
  .mob-cta-bar button{width:100%;background:var(--ink);color:#fff;padding:12px;border-radius:9px;font-family:var(--font);font-size:13px;font-weight:700;border:none;cursor:pointer}
}
@media(max-width:500px){
  .g2 .icard{flex:0 0 calc(82vw - 16px)}
  .g3{grid-template-columns:repeat(2,1fr)}
  .steps-g{grid-template-columns:repeat(2,1fr);gap:8px}
  .step-card{padding:13px 9px 15px}
  .ph h1{font-size:19px}
}

/* NOTE: The old @media(min-width:901px) block that forced
   .steps-g to repeat(3,1fr) !important has been REMOVED.
   That was the primary source of the 3-column override on desktop. */
/* Hide mobile TOC on desktop */
@media (min-width: 901px){
  .mob-nav,
  .mob-panel{
      display:none !important;
  }
}

/* ================= MOBILE FIX FOR BLOG LAYOUT ================= */

@media (max-width: 900px){

    /* Hide sidebars */
    .left-col,
    .right-col{
        display:none !important;
    }

    /* Make layout single column */
    .doc-wrap{
        grid-template-columns:1fr !important;
        display:block !important;
        padding:0 !important;
    }

    /* Main content full width */
    .main-col{
        width:100% !important;
        padding:0 16px 60px !important;
    }

    /* Hide mobile TOC panel initially */
    .mob-panel{
        display:none;
    }

    /* Show when JS toggles */
    .mob-panel.open{
        display:block;
    }

}

</style>

<!-- ══ SVG SPRITE ═══════════════════════════════════════════ -->
<svg style="display:none" xmlns="http://www.w3.org/2000/svg">
  <symbol id="I-globe"   viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><ellipse cx="10" cy="10" rx="3.5" ry="8"/><line x1="2" y1="10" x2="18" y2="10"/><line x1="3" y1="6.5" x2="17" y2="6.5"/><line x1="3" y1="13.5" x2="17" y2="13.5"/></symbol>
  <symbol id="I-id"      viewBox="0 0 20 20"><rect x="2" y="5" width="16" height="11" rx="2"/><circle cx="7" cy="10.5" r="2"/><line x1="11" y1="9" x2="16" y2="9"/><line x1="11" y1="12" x2="15" y2="12"/></symbol>
  <symbol id="I-phone"   viewBox="0 0 20 20"><rect x="6" y="2" width="8" height="16" rx="2"/><line x1="10" y1="15" x2="10" y2="15.5" stroke-width="2.5"/></symbol>
  <symbol id="I-upload"  viewBox="0 0 20 20"><polyline points="13,8 10,5 7,8"/><line x1="10" y1="5" x2="10" y2="13"/><path d="M5 13v3a1 1 0 001 1h8a1 1 0 001-1v-3"/></symbol>
  <symbol id="I-receipt" viewBox="0 0 20 20"><path d="M5 2h10v16l-2-1.5-2 1.5-2-1.5-2 1.5-2-1.5z"/><line x1="8" y1="7" x2="12" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/></symbol>
  <symbol id="I-badge"   viewBox="0 0 20 20"><path d="M10 2l1.8 3.6 4 .6-2.9 2.8.7 4L10 11l-3.6 1.9.7-4L4.2 6.2l4-.6z"/><circle cx="10" cy="15.5" r="2.5"/></symbol>
  <symbol id="I-factory" viewBox="0 0 20 20"><path d="M2 16V9l5-3v4l5-3v4l4-2v6z"/><rect x="4" y="12" width="2" height="3"/><rect x="9" y="12" width="2" height="3"/><rect x="14" y="12" width="2" height="3"/></symbol>
  <symbol id="I-tools"   viewBox="0 0 20 20"><path d="M14 2a4 4 0 00-4 4c0 .6.1 1.2.4 1.7L3 15a2 2 0 002.8 2.8l7.3-7.4c.5.3 1.1.4 1.7.4a4 4 0 000-8z"/></symbol>
  <symbol id="I-cart"    viewBox="0 0 20 20"><path d="M2 3h2l2.5 9h9l1.5-6H6"/><circle cx="9" cy="16.5" r="1.5"/><circle cx="15" cy="16.5" r="1.5"/></symbol>
  <symbol id="I-truck"   viewBox="0 0 20 20"><path d="M2 12V6h10v8H2z"/><path d="M12 8h4l2 4v2h-6z"/><circle cx="5.5" cy="15.5" r="1.5"/><circle cx="15.5" cy="15.5" r="1.5"/></symbol>
  <symbol id="I-plane"   viewBox="0 0 20 20"><path d="M18 10L3 5l2 5-2 5 15-5z"/><line x1="7" y1="10" x2="18" y2="10"/></symbol>
  <symbol id="I-cal"     viewBox="0 0 20 20"><rect x="3" y="4" width="14" height="13" rx="2"/><line x1="3" y1="8" x2="17" y2="8"/><line x1="7" y1="2" x2="7" y2="6"/><line x1="13" y1="2" x2="13" y2="6"/></symbol>
  <symbol id="I-doc"     viewBox="0 0 20 20"><path d="M6 2h8l4 4v12a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/><polyline points="14,2 14,6 18,6"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="13" y2="13"/></symbol>
  <symbol id="I-home"    viewBox="0 0 20 20"><path d="M3 9.5L10 3l7 6.5V18H13v-5H7v5H3z"/></symbol>
  <symbol id="I-bank"    viewBox="0 0 20 20"><polygon points="10,2 18,7 2,7"/><rect x="4" y="7" width="2" height="7"/><rect x="9" y="7" width="2" height="7"/><rect x="14" y="7" width="2" height="7"/><rect x="2" y="14" width="16" height="2.5" rx=".5"/></symbol>
  <symbol id="I-pen"     viewBox="0 0 20 20"><path d="M14 3l3 3-10 10H4v-3z"/><line x1="11" y1="6" x2="14" y2="9"/></symbol>
  <symbol id="I-outw"    viewBox="0 0 20 20"><path d="M4 16V4"/><polyline points="4,4 10,10 16,4"/><line x1="4" y1="16" x2="16" y2="16"/></symbol>
  <symbol id="I-chart"   viewBox="0 0 20 20"><rect x="3" y="12" width="3" height="5"/><rect x="8.5" y="8" width="3" height="9"/><rect x="14" y="4" width="3" height="13"/><line x1="2" y1="17" x2="18" y2="17"/></symbol>
  <symbol id="I-folder"  viewBox="0 0 20 20"><path d="M2 6h6l2 2h8v9a1 1 0 01-1 1H3a1 1 0 01-1-1z"/></symbol>
  <symbol id="I-audit"   viewBox="0 0 20 20"><rect x="3" y="2" width="14" height="17" rx="1.5"/><line x1="7" y1="7" x2="13" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/><path d="M7 13h4"/><circle cx="14" cy="15" r="3"/><line x1="16.5" y1="17.5" x2="18.5" y2="19.5"/></symbol>
  <symbol id="I-check"   viewBox="0 0 20 20"><polyline points="4,10 8,14 16,6"/></symbol>
  <symbol id="I-block"   viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="4" y1="4" x2="16" y2="16"/></symbol>
  <symbol id="I-invoice" viewBox="0 0 20 20"><rect x="4" y="2" width="12" height="16" rx="1.5"/><line x1="7" y1="7" x2="13" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="10" y2="13"/><polyline points="12,13 14,15 17,12" stroke-width="1.8"/></symbol>
  <symbol id="I-books"   viewBox="0 0 20 20"><rect x="3" y="3" width="4" height="14" rx="1"/><rect x="8" y="5" width="4" height="12" rx="1"/><path d="M13 7l4 10"/><line x1="12" y1="10" x2="16" y2="10"/></symbol>
  <symbol id="I-clock"   viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><polyline points="10,5 10,10 13.5,13.5"/></symbol>
  <symbol id="I-pay"     viewBox="0 0 20 20"><rect x="2" y="5" width="16" height="11" rx="2"/><line x1="2" y1="9" x2="18" y2="9"/><line x1="6" y1="13" x2="9" y2="13"/></symbol>
  <symbol id="I-code"    viewBox="0 0 20 20"><polyline points="7,6 3,10 7,14"/><polyline points="13,6 17,10 13,14"/><line x1="11" y1="4" x2="9" y2="16"/></symbol>
  <symbol id="I-sync"    viewBox="0 0 20 20"><path d="M3 10a7 7 0 0112.4-4.4L17 7"/><path d="M17 10a7 7 0 01-12.4 4.4L3 13"/><polyline points="15,5 17,7 15,9"/><polyline points="5,11 3,13 5,15"/></symbol>
  <symbol id="I-warn"    viewBox="0 0 20 20"><path d="M10 3L18 17H2z"/><line x1="10" y1="9" x2="10" y2="13"/><line x1="10" y1="15.5" x2="10" y2="15.6" stroke-width="2.5"/></symbol>
  <symbol id="I-shield"  viewBox="0 0 20 20"><path d="M10 2l7 3v5c0 4-3 7-7 8-4-1-7-4-7-8V5z"/><polyline points="7,10 9,12 13,8"/></symbol>
  <symbol id="I-legal"   viewBox="0 0 20 20"><path d="M10 2v16"/><path d="M5 6l-3 4 3 4"/><path d="M15 6l3 4-3 4"/><line x1="5" y1="17" x2="15" y2="17"/></symbol>
  <symbol id="I-trust"   viewBox="0 0 20 20"><path d="M4 7h12M4 10h8M4 13h6"/><rect x="2" y="4" width="16" height="13" rx="1.5"/></symbol>
  <symbol id="I-clarity" viewBox="0 0 20 20"><circle cx="10" cy="10" r="3"/><line x1="10" y1="3" x2="10" y2="4.5"/><line x1="10" y1="15.5" x2="10" y2="17"/><line x1="3" y1="10" x2="4.5" y2="10"/><line x1="15.5" y1="10" x2="17" y2="10"/></symbol>
  <symbol id="I-taxd"    viewBox="0 0 20 20"><path d="M5 4h10M7 4v3l-2 4h10l-2-4V4"/><line x1="10" y1="11" x2="10" y2="16"/><polyline points="7,14 10,17 13,14"/></symbol>
  <symbol id="I-reg"     viewBox="0 0 20 20"><path d="M5 2h10v16l-5-3-5 3z"/><line x1="8" y1="7" x2="12" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/></symbol>
  <symbol id="I-filing"  viewBox="0 0 20 20"><path d="M4 4h12v3H4z"/><path d="M4 7l2 10h8l2-10"/><line x1="10" y1="9" x2="10" y2="14"/><line x1="7.5" y1="11.5" x2="12.5" y2="11.5"/></symbol>
  <symbol id="I-advisory"viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="10" y1="9" x2="10" y2="14"/><line x1="10" y1="6.5" x2="10" y2="7" stroke-width="2.5"/></symbol>
  <symbol id="I-max"     viewBox="0 0 20 20"><polyline points="10,16 10,8 6,12"/><line x1="10" y1="8" x2="14" y2="12"/><path d="M5 6a5 5 0 0110 0"/><line x1="3" y1="18" x2="17" y2="18"/></symbol>
  <symbol id="I-ongoing" viewBox="0 0 20 20"><circle cx="10" cy="10" r="7.5"/><polyline points="10,5.5 10,10 13,13"/></symbol>
  <symbol id="I-arr-r"   viewBox="0 0 20 20"><polyline points="7,5 13,10 7,15"/></symbol>
  <symbol id="I-arr-l"   viewBox="0 0 20 20"><polyline points="13,5 7,10 13,15"/></symbol>
  <symbol id="I-menu"    viewBox="0 0 20 20"><line x1="3" y1="6" x2="17" y2="6"/><line x1="3" y1="10" x2="17" y2="10"/><line x1="3" y1="14" x2="17" y2="14"/></symbol>
  <symbol id="I-chevd"   viewBox="0 0 20 20"><polyline points="5,8 10,13 15,8"/></symbol>
  <symbol id="I-li"      viewBox="0 0 20 20"><polyline points="5,10 8,13 15,7"/></symbol>
  <symbol id="I-star"    viewBox="0 0 20 20"><polygon points="10,2 12.5,7 18,7.5 14,11.5 15,17 10,14 5,17 6,11.5 2,7.5 7.5,7"/></symbol>
  <symbol id="I-book"    viewBox="0 0 20 20"><path d="M4 2h9l4 4v13H4z"/><polyline points="13,2 13,6 17,6"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="13" y2="13"/></symbol>
  <symbol id="I-compare" viewBox="0 0 20 20"><line x1="10" y1="2" x2="10" y2="18"/><rect x="2" y="5" width="6" height="10" rx="1.5"/><rect x="12" y="5" width="6" height="10" rx="1.5"/></symbol>
  <symbol id="I-chklist" viewBox="0 0 20 20"><rect x="3" y="2" width="14" height="16" rx="1.5"/><line x1="7" y1="7" x2="13" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="10" y2="13"/><polyline points="11,12 13,14 16,11" stroke-width="1.8"/></symbol>
  <symbol id="I-itc"     viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="10" y1="7" x2="10" y2="13"/><line x1="7" y1="10" x2="13" y2="10"/></symbol>
  <symbol id="I-dl"      viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><polyline points="10,6 10,10 13,12"/><line x1="6" y1="2" x2="6" y2="4"/><line x1="14" y1="2" x2="14" y2="4"/></symbol>
  <symbol id="I-penalty" viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="7" y1="7" x2="13" y2="13"/><line x1="13" y1="7" x2="7" y2="13"/></symbol>
  <symbol id="I-dl-arr"  viewBox="0 0 20 20"><path d="M10 3v10"/><polyline points="6,9 10,13 14,9"/><line x1="3" y1="17" x2="17" y2="17"/></symbol>
  <symbol id="I-share"   viewBox="0 0 20 20"><circle cx="15" cy="5" r="2"/><circle cx="5" cy="10" r="2"/><circle cx="15" cy="15" r="2"/><line x1="7" y1="9" x2="13" y2="6"/><line x1="7" y1="11" x2="13" y2="14"/></symbol>
  <symbol id="I-building"viewBox="0 0 20 20"><rect x="3" y="6" width="14" height="12"/><polygon points="1,6 10,2 19,6"/><rect x="8" y="12" width="4" height="6"/><line x1="6" y1="9" x2="8" y2="9"/><line x1="12" y1="9" x2="14" y2="9"/></symbol>
  <symbol id="I-map"     viewBox="0 0 20 20"><polygon points="2,4 7,2 13,4 18,2 18,16 13,18 7,16 2,18"/><line x1="7" y1="2" x2="7" y2="16"/><line x1="13" y1="4" x2="13" y2="18"/></symbol>
</svg>

<!-- ══ PROGRESS BAR ══ -->
<div id="pbar-wrap"><div id="pbar"></div></div>

<!-- ══ PAGE HEADER ══ -->
<div class="ph">
  <div class="ph-in">
    <div class="ph-chip">
      <svg width="12" height="12" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><use href="#I-doc"/></svg>
      Knowledge Center · GST Guide
    </div>
    <h1>Ultimate GST Compliance Guide<br>in India (2026)</h1>
    <p class="ph-sub">Complete guide to GST registration, return filing, tax rates, input tax credit, compliance requirements, and penalties for Indian businesses.</p>
    <div class="ph-meta">
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-cal"/></svg>Updated January 2026</span>
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg>10 min read</span>
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg>CA Verified</span>
    </div>
  </div>
</div>

<!-- ══ MOBILE BOTTOM NAV ══ -->
<div class="mob-nav" id="mobNav">
  <div class="mob-tgl" onclick="toggleMob()">
    <svg viewBox="0 0 20 20"><use href="#I-menu"/></svg>
    <span class="mob-cur" id="mobCur">On this page</span>
    <svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg>
  </div>
</div>
<div class="mob-panel" id="mobPanel">
  <a class="mob-link" href="#intro"      onclick="closeMob(this,'Introduction')">      <span class="mn">—</span>Introduction</a>
  <a class="mob-link" href="#what"       onclick="closeMob(this,'What is GST?')">       <span class="mn">01</span>What is GST?</a>
  <a class="mob-link" href="#who"        onclick="closeMob(this,'Who Should Register')"><span class="mn">02</span>Who Should Register</a>
  <a class="mob-link" href="#process"    onclick="closeMob(this,'Registration Process')"><span class="mn">03</span>Registration Process</a>
  <a class="mob-link" href="#documents"  onclick="closeMob(this,'Documents Required')"><span class="mn">04</span>Documents Required</a>
  <a class="mob-link" href="#returns"    onclick="closeMob(this,'GST Returns')">        <span class="mn">05</span>GST Returns</a>
  <a class="mob-link" href="#composition"onclick="closeMob(this,'Composition Scheme')"><span class="mn">06</span>Composition Scheme</a>
  <a class="mob-link" href="#rates"      onclick="closeMob(this,'GST Rates')">          <span class="mn">07</span>GST Rates</a>
  <a class="mob-link" href="#itc"        onclick="closeMob(this,'Input Tax Credit')">   <span class="mn">08</span>Input Tax Credit</a>
  <a class="mob-link" href="#compliance" onclick="closeMob(this,'Compliance')">         <span class="mn">09</span>Compliance</a>
  <a class="mob-link" href="#penalties"  onclick="closeMob(this,'Penalties')">          <span class="mn">10</span>Penalties</a>
  <a class="mob-link" href="#mistakes"   onclick="closeMob(this,'Common Mistakes')">    <span class="mn">11</span>Common Mistakes</a>
  <a class="mob-link" href="#benefits"   onclick="closeMob(this,'Benefits')">           <span class="mn">12</span>Benefits</a>
  <a class="mob-link" href="#why-us"     onclick="closeMob(this,'Why The Tax Company')"><span class="mn">13</span>Why Tax Company</a>
  <a class="mob-link" href="#faq"        onclick="closeMob(this,'FAQ')">                <span class="mn">—</span>FAQ</a>
</div>
<div class="mob-cta-bar" style="display:none" id="mobCtaBar">
  <button onclick="void(0)">📞 Talk to a GST Expert</button>
</div>

<!-- ══════════════════════════════════════════════════
     3-COLUMN DOC LAYOUT
══════════════════════════════════════════════════ -->
<div class="doc-wrap">

  <!-- ════ LEFT TOC ════ -->
  <aside class="left-col">
    <span class="toc-lbl">On this page</span>
    <nav class="toc-nav" id="tocNav">
      <a href="#intro"       class="tl" data-s="intro">      <span class="tn">—</span>Introduction</a>
      <a href="#what"        class="tl" data-s="what">       <span class="tn">01</span>What is GST?</a>
      <a href="#who"         class="tl" data-s="who">        <span class="tn">02</span>Who Should Register</a>
      <a href="#process"     class="tl" data-s="process">    <span class="tn">03</span>Registration Process</a>
      <a href="#documents"   class="tl" data-s="documents">  <span class="tn">04</span>Documents Required</a>
      <a href="#returns"     class="tl" data-s="returns">    <span class="tn">05</span>GST Returns</a>
      <a href="#composition" class="tl" data-s="composition"><span class="tn">06</span>Composition Scheme</a>
      <a href="#rates"       class="tl" data-s="rates">      <span class="tn">07</span>GST Rates</a>
      <a href="#itc"         class="tl" data-s="itc">        <span class="tn">08</span>Input Tax Credit</a>
      <a href="#compliance"  class="tl" data-s="compliance"> <span class="tn">09</span>Compliance</a>
      <a href="#penalties"   class="tl" data-s="penalties">  <span class="tn">10</span>Penalties</a>
      <a href="#mistakes"    class="tl" data-s="mistakes">   <span class="tn">11</span>Common Mistakes</a>
      <a href="#benefits"    class="tl" data-s="benefits">   <span class="tn">12</span>Benefits</a>
      <a href="#why-us"      class="tl" data-s="why-us">     <span class="tn">13</span>Why Tax Company</a>
      <div class="toc-div"></div>
      <a href="#faq"         class="tl" data-s="faq">        <span class="tn">—</span>FAQ</a>
    </nav>
    <div class="toc-cta-box">
      <p>Get expert help with GST registration &amp; filing</p>
      <button class="toc-cta-btn">📞 Book Free Consultation</button>
    </div>
  </aside>

  <!-- ════ MAIN CONTENT ════ -->
  <main class="main-col">

    <!-- ── INTRO ── -->
    <div class="sec" id="intro">
      <div class="panel">
        <p><strong>Goods and Services Tax (GST)</strong> is one of the most important tax systems for businesses operating in India. Whether you run a startup, small business, online store, or professional service — understanding GST compliance is essential to avoid penalties and maintain smooth business operations.</p>
        <p>This Ultimate GST Compliance Guide by The Tax Company explains GST registration, return filing, tax rates, input tax credit, compliance requirements, and penalties — updated for 2026.</p>
      </div>
      <div class="hl-strip">
        <div class="hl-strip-ttl">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" viewBox="0 0 20 20"><use href="#I-shield"/></svg>
          What this guide covers
        </div>
        <div class="g3" style="margin-top:0">
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>GST registration process</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>All return types explained</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Tax rate slabs (0–28%)</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Input Tax Credit rules</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Composition scheme</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Penalties &amp; late fees</div>
        </div>
      </div>
      <div class="chips">
        <a href="#what"        class="chip">What is GST</a>
        <a href="#process"     class="chip">Registration</a>
        <a href="#returns"     class="chip">Returns</a>
        <a href="#rates"       class="chip">Tax rates</a>
        <a href="#itc"         class="chip">ITC</a>
        <a href="#penalties"   class="chip">Penalties</a>
      </div>
    </div>

    <!-- ── 01 WHAT IS GST ── -->
    <div class="sec" id="what">
      <span class="s-lbl">Section 01</span>
      <h2 class="s-ttl">What is GST?</h2>
      <div class="panel">
        <p>Goods and Services Tax (GST) is an indirect tax introduced in India on 1 July 2017, replacing multiple taxes like VAT, service tax, and excise duty — creating a single nationwide tax applied at every stage of the supply chain on the <strong>supply of goods and services</strong> across India.</p>
      </div>
      <span style="font-size:9.5px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-5);display:block;margin:14px 0 9px">GST Components</span>
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-building"/></svg></div>
          <div class="icard-t">CGST — Central GST</div>
          <div class="icard-d">Collected by the central government on intra-state supply of goods and services.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-map"/></svg></div>
          <div class="icard-t">SGST — State GST</div>
          <div class="icard-d">Collected by the state government on intra-state sales — equal share with CGST.</div>
        </div>
        <div class="icard span2">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-globe"/></svg></div>
          <div class="icard-t">IGST — Integrated GST</div>
          <div class="icard-d">Levied on inter-state supplies and imports by the central government. Revenue is shared between the centre and destination state based on the consumption principle.</div>
        </div>
      </div>
    </div>

    <!-- ── 02 WHO SHOULD REGISTER ── -->
    <div class="sec" id="who">
      <span class="s-lbl">Section 02</span>
      <h2 class="s-ttl">Who Should Register for GST?</h2>
      <p class="s-desc">GST registration is mandatory for businesses in the following cases. Voluntary registration is also allowed for businesses wanting to claim Input Tax Credit (ITC).</p>
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-factory"/></svg></div>
          <div class="icard-t">Goods Businesses</div>
          <div class="icard-d">Annual turnover above ₹40 lakh (₹20 lakh in special category states).</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-tools"/></svg></div>
          <div class="icard-t">Service Providers</div>
          <div class="icard-d">Annual turnover above ₹20 lakh (₹10 lakh in special category states).</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-cart"/></svg></div>
          <div class="icard-t">E-commerce Sellers</div>
          <div class="icard-d">Mandatory regardless of turnover — Amazon, Flipkart, Meesho, and all marketplace sellers.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-truck"/></svg></div>
          <div class="icard-t">Interstate Suppliers</div>
          <div class="icard-d">Any business supplying goods or services across state borders must register.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-plane"/></svg></div>
          <div class="icard-t">Importers &amp; Exporters</div>
          <div class="icard-d">All businesses involved in import or export of goods and services.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-cal"/></svg></div>
          <div class="icard-t">Casual Taxable Persons</div>
          <div class="icard-d">Seasonal or occasional suppliers operating outside their home state.</div>
        </div>
      </div>
    </div>

    <!-- ══════════════════════════════════════════════════
         03 REGISTRATION PROCESS — FIXED: SINGLE 2×3 GRID
         All 6 step cards now in ONE .steps-g container.
         ONE .stl timeline with 6 dots (d0–d5).
         JS animates all 6 dots sequentially via animTL.
    ══════════════════════════════════════════════════ -->
    <div class="sec" id="process">
      <span class="s-lbl">Section 03 · Step by Step</span>
      <h2 class="s-ttl">GST Registration Process</h2>
      <p class="s-desc">GST registration can be completed online through the GST portal. A simple, transparent process from enquiry to GSTIN issuance.</p>

      <!-- SINGLE unified 2-column × 3-row grid (was two separate 3-column grids) -->
      <div class="steps-g" id="sg1">

        <!-- Step 01 -->
        <div class="step-card">
          <div class="s-badge">01</div>
          <div class="s-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-globe"/></svg></div>
          <h4>Visit GST Portal</h4>
          <p>Go to gstin.gov.in and click 'New Registration' to begin the application process.</p>
        </div>

        <!-- Step 02 -->
        <div class="step-card">
          <div class="s-badge">02</div>
          <div class="s-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-id"/></svg></div>
          <h4>Submit PAN &amp; Details</h4>
          <p>Enter PAN, mobile number, email, state, and type of business entity.</p>
        </div>

        <!-- Step 03 -->
        <div class="step-card">
          <div class="s-badge">03</div>
          <div class="s-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-phone"/></svg></div>
          <h4>Verify with OTP</h4>
          <p>Authenticate your registered mobile and email with OTPs sent by the portal.</p>
        </div>

        <!-- Step 04 -->
        <div class="step-card">
          <div class="s-badge">04</div>
          <div class="s-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-upload"/></svg></div>
          <h4>Upload Documents</h4>
          <p>Upload PAN, Aadhaar, address proof, bank details, and business registration.</p>
        </div>

        <!-- Step 05 -->
        <div class="step-card">
          <div class="s-badge">05</div>
          <div class="s-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-receipt"/></svg></div>
          <h4>Receive ARN</h4>
          <p>Application Reference Number is generated to track your registration status online.</p>
        </div>

        <!-- Step 06 -->
        <div class="step-card">
          <div class="s-badge">06</div>
          <div class="s-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-badge"/></svg></div>
          <h4>GSTIN Issued</h4>
          <p>After verification, your unique 15-digit GSTIN is issued within 3–7 working days.</p>
        </div>

      </div><!-- /.steps-g -->

      <!-- SINGLE unified 6-dot timeline (was two separate 3-dot timelines) -->
      <div class="stl" id="stl1">
        <div class="stl-c"><div class="stl-d" id="d0"></div></div>
        <div class="stl-c"><div class="stl-d" id="d1"></div></div>
        <div class="stl-c"><div class="stl-d" id="d2"></div></div>
        <div class="stl-c"><div class="stl-d" id="d3"></div></div>
        <div class="stl-c"><div class="stl-d" id="d4"></div></div>
        <div class="stl-c"><div class="stl-d" id="d5"></div></div>
      </div>

    </div><!-- /#process -->

    <!-- ── 04 DOCUMENTS ── -->
    <div class="sec" id="documents">
      <span class="s-lbl">Section 04 · Paperwork</span>
      <h2 class="s-ttl">Documents Required for GST Registration</h2>
      <div class="g3">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-id"/></svg></div>
          <div class="icard-t">PAN Card</div>
          <div class="icard-d">Of the business owner or legal entity — mandatory for all registrations.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-id"/></svg></div>
          <div class="icard-t">Aadhaar Card</div>
          <div class="icard-d">Identity &amp; address verification of proprietor, partners, or directors.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-doc"/></svg></div>
          <div class="icard-t">Business Registration</div>
          <div class="icard-d">Certificate of incorporation, partnership deed, or shop act licence.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-home"/></svg></div>
          <div class="icard-t">Address Proof</div>
          <div class="icard-d">Electricity bill, rent agreement, or property tax receipt for the business premises.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-bank"/></svg></div>
          <div class="icard-t">Bank Details</div>
          <div class="icard-d">Cancelled cheque or recent bank statement of the registered business account.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-pen"/></svg></div>
          <div class="icard-t">Photograph &amp; DSC</div>
          <div class="icard-d">Passport-size photo and digital signature certificate for companies and LLPs.</div>
        </div>
      </div>
    </div>

    <!-- ── 05 GST RETURNS — TABS ── -->
    <div class="sec" id="returns">
      <span class="s-lbl">Section 05 · Filing</span>
      <h2 class="s-ttl">GST Return Filing Explained</h2>
      <p class="s-desc">Registered taxpayers must file GST returns regularly. Timely filing avoids penalties and interest charges.</p>
      <div class="tab-bar">
        <button class="tab-btn on" onclick="switchTab('tp1',this)">GSTR-1<span class="tsub">Outward Supplies</span></button>
        <button class="tab-btn" onclick="switchTab('tp2',this)">GSTR-3B<span class="tsub">Monthly Summary</span></button>
        <button class="tab-btn" onclick="switchTab('tp3',this)">GSTR-9<span class="tsub">Annual Return</span></button>
        <button class="tab-btn" onclick="switchTab('tp4',this)">GSTR-9C<span class="tsub">Reconciliation</span></button>
      </div>
      <div class="tab-panels">
        <div class="tab-panel on" id="tp1">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-outw"/></svg></div>
            <div><div class="tp-ttl">GSTR-1 — Details of Outward Supplies</div><div class="tp-sub">Filed monthly or quarterly · Captures all sales details</div></div>
          </div>
          <div class="tp-body"><p>GSTR-1 captures all outward supply details — B2B invoices, B2C transactions, credit notes, and debit notes issued during the period.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>B2B invoice-level details for all registered buyers</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Summary of B2C sales (invoice-level for inter-state above ₹2.5 lakh)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Export invoice details with shipping bill and port code</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Credit notes and debit notes issued during the period</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Monthly — due 11th of following month</span><span class="tp-tag">Quarterly (QRMP) — due 13th after quarter end</span></div>
        </div>
        <div class="tab-panel" id="tp2">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-chart"/></svg></div>
            <div><div class="tp-ttl">GSTR-3B — Monthly Summary Return</div><div class="tp-sub">Filed monthly · Consolidated liability and payment</div></div>
          </div>
          <div class="tp-body"><p>GSTR-3B is a self-declared summary return consolidating outward supplies, ITC claimed, and net GST liability for the month. Must be filed even for nil-transaction months.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Summary of outward taxable supplies (not invoice-level)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Total eligible input tax credit claimed for the month</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Net GST payable and confirmation of tax payment</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Must be filed even if no transactions occurred (nil return)</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Due — 20th of following month</span></div>
        </div>
        <div class="tab-panel" id="tp3">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-folder"/></svg></div>
            <div><div class="tp-ttl">GSTR-9 — Annual Return</div><div class="tp-sub">Filed annually · Full-year consolidated summary</div></div>
          </div>
          <div class="tp-body"><p>GSTR-9 consolidates all monthly/quarterly returns filed during the financial year and reconciles data across GSTR-1 and GSTR-3B submissions.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Full year outward and inward supply summary by quarter</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>ITC claimed vs ITC eligible reconciliation</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Tax paid under each head — CGST, SGST, IGST</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Demands, refunds, and late fees paid during the year</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Due — 31st December (previous financial year)</span></div>
        </div>
        <div class="tab-panel" id="tp4">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-audit"/></svg></div>
            <div><div class="tp-ttl">GSTR-9C — Reconciliation Statement</div><div class="tp-sub">Annual · CA certified · Turnover above ₹5 crore</div></div>
          </div>
          <div class="tp-body"><p>GSTR-9C is a reconciliation statement for taxpayers with annual turnover above ₹5 crore. Must be certified by a Chartered Accountant or Cost Accountant.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Reconciles GSTR-9 figures with audited financial statements</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Any differences must be explained with documented reasons</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Identifies unreported supplies or incorrect ITC claims</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Must be signed and certified by a practising CA</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Due — same as GSTR-9 (31st December)</span></div>
        </div>
      </div>
    </div>

    <!-- ── 06 COMPOSITION SCHEME ── -->
    <div class="sec" id="composition">
      <span class="s-lbl">Section 06 · Small Businesses</span>
      <h2 class="s-ttl">GST Composition Scheme</h2>
      <div class="panel">
        <p>The Composition Scheme is a simplified GST option for small businesses with turnover up to <strong>₹1.5 crore</strong> (₹75 lakh for services). Businesses pay a flat rate on turnover instead of standard GST rates.</p>
        <p><strong>Key restriction:</strong> Composition dealers cannot claim ITC and cannot make inter-state supplies.</p>
      </div>
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-check"/></svg></div>
          <div class="icard-t">Lower Tax Rate</div>
          <div class="icard-d">Pay a flat 1%–5% on turnover instead of full GST slab rates — reduces outflow significantly.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-filing"/></svg></div>
          <div class="icard-t">Simplified Filing</div>
          <div class="icard-d">File CMP-08 quarterly and GSTR-4 annually — far simpler than monthly GSTR-1 and GSTR-3B.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-block"/></svg></div>
          <div class="icard-t">No ITC Claims</div>
          <div class="icard-d">Cannot claim input tax credit — your buyers also cannot claim ITC from your invoices.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-block"/></svg></div>
          <div class="icard-t">No Interstate Sales</div>
          <div class="icard-d">Restricted to intra-state supplies only — cannot sell goods or services across state borders.</div>
        </div>
      </div>
    </div>

    <!-- ── 07 GST RATES ── -->
    <div class="sec" id="rates">
      <span class="s-lbl">Section 07 · Tax Slabs</span>
      <h2 class="s-ttl">GST Rates in India</h2>
      <p class="s-desc">GST rates vary based on the type of goods or services. Correct classification under HSN/SAC codes is crucial for GST compliance.</p>
      <div class="rate-strip">
        <div class="rcard"><span class="rcard-pct">0%</span><div class="rcard-lbl">Essential Goods</div><div class="rcard-d">Fresh food, milk, eggs, education, basic healthcare services.</div></div>
        <div class="rcard"><span class="rcard-pct">5%</span><div class="rcard-lbl">Basic Goods</div><div class="rcard-d">Packaged food, apparel below ₹1,000, economy air travel.</div></div>
        <div class="rcard"><span class="rcard-pct">12%</span><div class="rcard-lbl">Standard Goods</div><div class="rcard-d">Computers, processed foods, business class travel.</div></div>
        <div class="rcard"><span class="rcard-pct">18%</span><div class="rcard-lbl">Most Services</div><div class="rcard-d">IT services, telecom, insurance, restaurants, AC hotels.</div></div>
        <div class="rcard"><span class="rcard-pct">28%</span><div class="rcard-lbl">Luxury Goods</div><div class="rcard-d">Automobiles, tobacco, aerated drinks — may attract cess.</div></div>
      </div>
    </div>

    <!-- ── 08 ITC ── -->
    <div class="sec" id="itc">
      <span class="s-lbl">Section 08 · Saving Tax</span>
      <h2 class="s-ttl">Input Tax Credit (ITC)</h2>
      <div class="panel">
        <p>Input Tax Credit allows businesses to reduce GST liability by claiming credit for GST paid on purchases. If you pay ₹18 GST on materials and collect ₹36 GST on sales — you remit only <strong>₹18 net</strong> to the government.</p>
      </div>
      <div class="kb-stack">
        <div class="kb" id="kb1">
          <div class="kb-hd" onclick="toggleKB('kb1')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><use href="#I-check"/></svg></div>
              <div><div class="kb-t">Conditions to Claim ITC</div><div class="kb-s">5 mandatory requirements before claiming</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Possess a valid GST invoice or debit note from a registered supplier</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Supplier must have filed GSTR-1 and supply must appear in your GSTR-2B</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>GST must have been paid to the government by the supplier</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Goods or services must have been actually received</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>ITC must be claimed before filing the September return of next year</li>
            </ul>
          </div></div>
        </div>
        <div class="kb" id="kb2">
          <div class="kb-hd" onclick="toggleKB('kb2')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><use href="#I-block"/></svg></div>
              <div><div class="kb-t">Blocked ITC — Section 17(5) Restrictions</div><div class="kb-s">Categories where credit cannot be claimed</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Motor vehicles used for personal purposes (except dealers, driving schools, transport)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Food, beverages, and outdoor catering unless part of your taxable supply chain</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Club memberships and health services for employees</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Construction of immovable property on own account</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>All purchases if you are under the Composition Scheme</li>
            </ul>
          </div></div>
        </div>
      </div>
    </div>

    <!-- ── 09 COMPLIANCE ── -->
    <div class="sec" id="compliance">
      <span class="s-lbl">Section 09 · Stay Compliant</span>
      <h2 class="s-ttl">GST Compliance Requirements</h2>
      <p class="s-desc">Businesses registered under GST must follow several compliance rules. Proper compliance ensures smooth operations and avoids legal issues.</p>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-invoice"/></svg></div><div class="icard-t">Issue GST Invoices</div><div class="icard-d">Every supply requires a proper tax invoice with GSTIN, HSN/SAC codes, and full tax breakup.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-books"/></svg></div><div class="icard-t">Maintain Records</div><div class="icard-d">Keep accurate books of accounts and GST records for a minimum of 6 years.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-clock"/></svg></div><div class="icard-t">File Returns on Time</div><div class="icard-d">File GSTR-1 and GSTR-3B monthly — nil returns must also be filed on time.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-pay"/></svg></div><div class="icard-t">Pay Tax on Time</div><div class="icard-d">Pay full GST liability by due date to avoid 18% per annum interest charges.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-code"/></svg></div><div class="icard-t">Use HSN / SAC Codes</div><div class="icard-d">Correctly classify all goods and services with proper Harmonised System codes on invoices.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-sync"/></svg></div><div class="icard-t">Reconcile GSTR-2B</div><div class="icard-d">Match purchase register with GSTR-2B monthly to identify missing ITC before filing.</div></div>
      </div>
    </div>

    <!-- ── 10 PENALTIES ── -->
    <div class="sec" id="penalties">
      <span class="s-lbl">Section 10 · Consequences</span>
      <h2 class="s-ttl">GST Penalties &amp; Late Fees</h2>
      <p class="s-desc">Failure to comply with GST rules may result in penalties. Interest on late tax payment is 18% per annum.</p>
      <div class="tbl-wrap">
        <table class="ttbl">
          <thead><tr><th>Violation</th><th>Penalty / Consequence</th></tr></thead>
          <tbody>
            <tr><td>Late GST return filing</td><td><b>₹50/day</b> (₹20/day for nil return) — maximum ₹5,000 per return</td></tr>
            <tr><td>Unpaid or short-paid tax</td><td>Interest at <b>18% p.a.</b> on unpaid amount from due date</td></tr>
            <tr><td>Incorrect GST filing</td><td>Penalty + interest + scrutiny assessment risk</td></tr>
            <tr><td>Non-registration when mandatory</td><td><b>100% of tax due</b> or ₹10,000 minimum — whichever is higher</td></tr>
            <tr><td>Tax evasion / fraud</td><td>Up to <b>3× the tax evaded</b> + criminal prosecution under GST Act</td></tr>
            <tr><td>Incorrect ITC claim</td><td>Penalty equal to <b>amount wrongly claimed</b> + 18% interest</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ── 11 COMMON MISTAKES ── -->
    <div class="sec" id="mistakes">
      <span class="s-lbl">Section 11 · Avoid These</span>
      <h2 class="s-ttl">Common GST Compliance Mistakes</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-warn"/></svg></div><div class="icard-t">No Registration</div><div class="icard-d">Operating without GST registration when legally required — heavy penalties apply.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-warn"/></svg></div><div class="icard-t">Wrong Rate Classification</div><div class="icard-d">Incorrect HSN/SAC codes leading to wrong tax — a common audit trigger.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-warn"/></svg></div><div class="icard-t">Missing Deadlines</div><div class="icard-d">Late returns attract daily fees, interest, and affect buyers' ITC claims.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-warn"/></svg></div><div class="icard-t">Incorrect ITC Claims</div><div class="icard-d">Claiming credit without valid invoices or on blocked categories leads to penalties.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-warn"/></svg></div><div class="icard-t">Poor Record Keeping</div><div class="icard-d">Missing invoices or inconsistent accounting creates problems during assessment.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-warn"/></svg></div><div class="icard-t">Not Filing Nil Returns</div><div class="icard-d">Zero-transaction months still need a nil GSTR-3B to avoid accumulating late fees.</div></div>
      </div>
    </div>

    <!-- ── 12 BENEFITS — SLIDER ── -->
    <div class="sec" id="benefits">
      <span class="s-lbl">Section 12 · Advantages</span>
      <h2 class="s-ttl">Benefits of GST Compliance</h2>
      <div class="bslider">
        <div class="btrack" id="btrack">
          <div class="bslide">
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-legal"/></svg></div><div class="bs-t">Legal Operations</div><div class="bs-d">Operate lawfully with a valid GSTIN and issue fully compliant tax invoices to all customers.</div></div>
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-shield"/></svg></div><div class="bs-t">Avoid Penalties</div><div class="bs-d">No late fees, no interest charges, no scrutiny notices from tax authorities.</div></div>
          </div>
          <div class="bslide">
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-taxd"/></svg></div><div class="bs-t">Claim ITC</div><div class="bs-d">Reduce total tax outflow by claiming input tax credit on all eligible business purchases.</div></div>
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-clarity"/></svg></div><div class="bs-t">Financial Clarity</div><div class="bs-d">Structured accounting provides clear visibility into business finances and cash flows.</div></div>
          </div>
          <div class="bslide">
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-trust"/></svg></div><div class="bs-t">Business Credibility</div><div class="bs-d">GST compliance improves trust with vendors, institutional buyers, and financial institutions.</div></div>
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-audit"/></svg></div><div class="bs-t">Smooth Audits</div><div class="bs-d">Well-maintained compliance records make assessments and department audits hassle-free.</div></div>
          </div>
        </div>
        <div class="bctrl">
          <div class="bdots" id="bdots">
            <button class="bdot on" onclick="goSlide(0)"></button>
            <button class="bdot" onclick="goSlide(1)"></button>
            <button class="bdot" onclick="goSlide(2)"></button>
          </div>
          <div class="barrs">
            <button class="barr" onclick="slideStep(-1)"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><use href="#I-arr-l"/></svg></button>
            <button class="barr" onclick="slideStep(1)"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><use href="#I-arr-r"/></svg></button>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 13 WHY THE TAX COMPANY ── -->
    <div class="sec" id="why-us">
      <span class="s-lbl">Section 13 · Expert Help</span>
      <h2 class="s-ttl">Why Choose The Tax Company?</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-reg"/></svg></div><div class="icard-t">GST Registration</div><div class="icard-d">End-to-end assistance from document collection to GSTIN issuance — fully online.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-filing"/></svg></div><div class="icard-t">Return Filing</div><div class="icard-d">Monthly and quarterly GSTR-1 and GSTR-3B filing handled accurately, on time.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-advisory"/></svg></div><div class="icard-t">GST Advisory</div><div class="icard-d">Expert guidance on applicable rates, HSN codes, and compliance strategy for your business.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-max"/></svg></div><div class="icard-t">ITC Maximisation</div><div class="icard-d">Identify and claim every eligible input tax credit to reduce your tax outflow.</div></div>
        <div class="icard span2"><div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-ongoing"/></svg></div><div class="icard-t">Ongoing Compliance &amp; Notice Management</div><div class="icard-d">Continuous GST portal monitoring, notice response handling, and proactive regulatory updates to keep your business protected year-round.</div></div>
      </div>
    </div>

    <!-- ── FAQ ── -->
    <div class="sec" id="faq">
      <span class="s-lbl">FAQ</span>
      <h2 class="s-ttl">Frequently Asked Questions</h2>
      <div class="faq-wrap">
        <div class="faq open" id="f1">
          <button class="faq-q" onclick="toggleFaq('f1')"><span>What is GST in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">GST (Goods and Services Tax) is an indirect tax introduced by the Government of India on 1 July 2017 that replaced multiple indirect taxes such as VAT, service tax, and excise duty. It is applied on the supply of goods and services across the country at every stage of the supply chain.</div></div>
        </div>
        <div class="faq" id="f2">
          <button class="faq-q" onclick="toggleFaq('f2')"><span>Who needs to register for GST?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Businesses must register if annual turnover exceeds ₹40 lakh (goods) or ₹20 lakh (services). GST registration is also mandatory for e-commerce sellers, interstate suppliers, import-export businesses, and casual taxable persons — regardless of turnover.</div></div>
        </div>
        <div class="faq" id="f3">
          <button class="faq-q" onclick="toggleFaq('f3')"><span>What is GSTIN and how is it structured?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">GSTIN is a unique 15-digit number issued to every GST-registered taxpayer. The first two digits are the state code, the next ten are the PAN, followed by entity type code, default 'Z', and a check digit. It is required for filing GST returns and collecting GST from customers.</div></div>
        </div>
        <div class="faq" id="f4">
          <button class="faq-q" onclick="toggleFaq('f4')"><span>What are the penalties for late GST return filing?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Late fee of ₹50 per day (₹20 per day for nil returns), capped at ₹5,000 per return, plus 18% per annum interest on any unpaid tax from the due date. Regular compliance helps businesses avoid these penalties entirely.</div></div>
        </div>
        <div class="faq" id="f5">
          <button class="faq-q" onclick="toggleFaq('f5')"><span>Is GST registration mandatory for online sellers?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Yes. All e-commerce sellers on Amazon, Flipkart, Meesho or any marketplace must obtain GST registration regardless of turnover. Marketplaces require a valid GSTIN before activating your seller account.</div></div>
        </div>
        <div class="faq-hidden" style="display:none">
          <div class="faq" id="f6">
            <button class="faq-q" onclick="toggleFaq('f6')"><span>What is Input Tax Credit (ITC) and how do I claim it?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">ITC allows you to offset GST paid on purchases against GST collected on sales. To claim: you must hold a valid tax invoice, the supplier must have filed their return, the tax must have been remitted, goods must have been received, and the claim must be made before the September return of the following year.</div></div>
          </div>
          <div class="faq" id="f7">
            <button class="faq-q" onclick="toggleFaq('f7')"><span>What is the GST Composition Scheme?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">The GST Composition Scheme is designed for small businesses with turnover up to ₹1.5 crore. It offers lower flat tax rates (1–5%) and simplified compliance, but does not allow businesses to claim input tax credit or make interstate supplies.</div></div>
          </div>
          <div class="faq" id="f8">
            <button class="faq-q" onclick="toggleFaq('f8')"><span>Can I cancel my GST registration?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes. If your turnover falls below the threshold or you close your business, apply for cancellation on the GST portal. You must file a final return (GSTR-10) within 3 months of the cancellation order date.</div></div>
          </div>
          <div class="faq" id="f9">
            <button class="faq-q" onclick="toggleFaq('f9')"><span>What records must businesses maintain for GST?</span><div class="faq-arr"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Businesses must maintain GST invoices, purchase and sales ledgers, tax payment records, ITC records, and stock registers for a minimum of 6 years. Accurate records are essential for smooth GST filing and department assessments.</div></div>
          </div>
        </div>
      </div>
      <button class="faq-view-more" onclick="toggleMoreFAQs(this)">View More</button>
    </div>

    <!-- RELATED GUIDES -->
    <div class="sec" style="border-bottom:none">
      <span class="s-lbl">Knowledge Center</span>
      <h2 class="s-ttl">GST Compliance Guides</h2>
      <div class="guide-grid">
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-book"/></svg>Guide</div><h4>GST Rate Classification with HSN Codes — 2026</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-compare"/></svg>Comparison</div><h4>GST Composition Scheme vs Regular Scheme</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-chklist"/></svg>Checklist</div><h4>Monthly GST Compliance Checklist for Businesses</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-itc"/></svg>ITC</div><h4>How to Maximise Input Tax Credit Legally in 2026</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-dl"/></svg>Deadlines</div><h4>GST Return Due Dates Calendar 2026</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-penalty"/></svg>Penalty</div><h4>How to Avoid GST Penalties &amp; Notices</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
      </div>
    </div>

  </main>

  <!-- ════ RIGHT SIDEBAR ════ -->
  <aside class="right-col">
    <div class="r-card">
      <h5>Guide Information</h5>
      <div class="r-row"><span>Reading time</span><span>10 minutes</span></div>
      <div class="r-row"><span>Difficulty</span><span>Beginner</span></div>
      <div class="r-row"><span>Updated</span><span>Jan 2026</span></div>
      <div class="r-row"><span>Sections</span><span>13 + FAQ</span></div>
      <div class="r-row"><span>Reviewed by</span><span>CA Expert</span></div>
    </div>
    <div class="r-card">
      <h5>Quick Actions</h5>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-dl-arr"/></svg>Download PDF</a>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-share"/></svg>Share this guide</a>
      <a href="#process" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-filing"/></svg>Get GST Registered</a>
    </div>
    <button class="r-cta">📞 Book Free Consultation</button>
    <button class="r-cta-g">Talk to a GST Expert</button>
    <div class="r-card" style="margin-top:14px">
      <h5>Quick Facts</h5>
      <div class="r-row"><span>GST launched</span><span>1 Jul 2017</span></div>
      <div class="r-row"><span>Threshold (goods)</span><span>₹40 lakh</span></div>
      <div class="r-row"><span>Threshold (services)</span><span>₹20 lakh</span></div>
      <div class="r-row"><span>GSTIN digits</span><span>15 digits</span></div>
      <div class="r-row"><span>Late fee (normal)</span><span>₹50/day</span></div>
      <div class="r-row"><span>Interest rate</span><span>18% p.a.</span></div>
    </div>
  </aside>

</div><!-- /.doc-wrap -->

<!-- ══ CTA SECTION ══ -->
<div class="cta">
  <h3>Need help with GST registration or filing?</h3>
  <p>Our GST experts ensure your business stays fully compliant, every month.</p>
  <div class="cta-btns">
    <button class="btn-w">📞 Book Free Consultation</button>
    <button class="btn-g">Talk to GST Expert</button>
  </div>
</div>


<script>
/* ── PROGRESS BAR ── */
window.addEventListener('scroll',()=>{
  const st=document.documentElement.scrollTop;
  const sh=document.documentElement.scrollHeight-document.documentElement.clientHeight;
  document.getElementById('pbar').style.width=(st/sh*100)+'%';
});

/* ── TABS ── */
function switchTab(id,btn){
  document.querySelectorAll('.tab-panel').forEach(p=>p.classList.remove('on'));
  document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('on'));
  document.getElementById(id).classList.add('on');
  btn.classList.add('on');
}

/* ── KNOWLEDGE BLOCKS ── */
function toggleKB(id){document.getElementById(id).classList.toggle('open')}

/* ── FAQ ── */
function toggleFaq(id){
  const el=document.getElementById(id),was=el.classList.contains('open');
  document.querySelectorAll('.faq').forEach(f=>f.classList.remove('open'));
  if(!was)el.classList.add('open');
}

/* ── FAQ VIEW MORE TOGGLE ── */
function toggleMoreFAQs(btn){
  var hidden=document.querySelector('.faq-hidden');
  if(!hidden)return;
  if(hidden.style.display==='none'||getComputedStyle(hidden).display==='none'){
    hidden.style.display='block';
    btn.textContent='View Less';
  }else{
    hidden.style.display='none';
    btn.textContent='View More';
  }
}

/* ── BENEFITS SLIDER ── */
let si=0,sT=3,sTimer;
function goSlide(n){
  si=Math.max(0,Math.min(n,sT-1));
  document.getElementById('btrack').style.transform='translateX(-'+(si*100)+'%)';
  document.querySelectorAll('.bdot').forEach((d,i)=>d.classList.toggle('on',i===si));
  clearInterval(sTimer);
  sTimer=setInterval(()=>goSlide((si+1)%sT),4600);
}
function slideStep(d){goSlide(si+d)}
sTimer=setInterval(()=>goSlide((si+1)%sT),4600);

/* ── SCROLL-LINKED TOC ── */
(function(){
  const secs=document.querySelectorAll('.sec[id]');
  const tls=document.querySelectorAll('.tl');
  const mls=document.querySelectorAll('.mob-link');
  let cur='';
  const map={};
  tls.forEach(a=>{const s=a.getAttribute('data-s');if(s)map[s]=a});
  function setActive(id){
    if(id===cur)return; cur=id;
    tls.forEach(a=>a.classList.remove('active'));
    if(map[id])map[id].classList.add('active');
    mls.forEach(a=>a.classList.toggle('act',a.getAttribute('href')==='#'+id));
    const ce=document.getElementById('mobCur');
    if(ce&&map[id])ce.textContent=map[id].textContent.trim();
  }
  const obs=new IntersectionObserver(es=>{
    es.forEach(e=>{if(e.isIntersecting)setActive(e.target.id)});
  },{rootMargin:'-15% 0px -72% 0px'});
  secs.forEach(s=>obs.observe(s));
})();

/* ── MOBILE NAV ── */
function toggleMob(){document.getElementById('mobPanel').classList.toggle('open')}
function closeMob(link,label){
  document.getElementById('mobPanel').classList.remove('open');
  document.getElementById('mobCur').textContent=label;
}
document.addEventListener('click',function(e){
  const n=document.getElementById('mobNav'),p=document.getElementById('mobPanel');
  if(n&&p&&!n.contains(e.target)&&!p.contains(e.target))p.classList.remove('open');
});
(function(){
  const bar=document.getElementById('mobCtaBar');
  if(!bar)return;
  function onResize(){bar.style.display=window.innerWidth<=900?'flex':'none'}
  onResize(); window.addEventListener('resize',onResize);
})();

/* ════════════════════════════════════════════════
   STEP CARD ANIMATION + TIMELINE — FIXED
   
   FIX: Removed reference to tl2 (now deleted from HTML).
   animTL now called ONCE with all 6 dot IDs ['d0'–'d5'],
   matching the single merged .stl#stl1 timeline element.
════════════════════════════════════════════════ */
(function(){
  const cards=document.querySelectorAll('.step-card');
  /* tl1 is the single unified 6-dot timeline */
  const tl1=document.getElementById('stl1');
  /* tl2 no longer exists — removed from HTML */

  /* flip entrance: stagger by index across all 6 cards */
  const cObs=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(!e.isIntersecting)return;
      const i=[...cards].indexOf(e.target);
      setTimeout(()=>e.target.classList.add('vis'),i*90);
      cObs.unobserve(e.target);
    });
  },{threshold:0.1});
  cards.forEach(c=>cObs.observe(c));

  /* timeline draw + sequential dot lighting */
  function animTL(tlEl,dotIds){
    if(!tlEl)return;
    new IntersectionObserver(es=>{
      es.forEach(e=>{
        if(!e.isIntersecting)return;
        tlEl.classList.add('go');
        dotIds.forEach((id,i)=>{
          const d=document.getElementById(id);
          if(d)setTimeout(()=>d.classList.add('lit'),i*200);
        });
      });
    },{threshold:0.5}).observe(tlEl);
  }

  /* Single call for all 6 dots in the unified timeline */
  animTL(tl1,['d0','d1','d2','d3','d4','d5']);
})();
</script>

@endsection