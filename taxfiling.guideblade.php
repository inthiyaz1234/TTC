@extends('front')
@section('content')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate Tax Filing Guide 2026 | Income Tax Return (ITR) Filing | The Tax Company</title>
<meta name="description" content="Complete Income Tax Return filing guide for individuals & businesses 2026. ITR forms, tax slabs, deductions, due dates & penalties. CA verified. The Tax Company.">
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
  /* ── NAV HEIGHT used for sticky sidebar calc ── */
  --nav-h:  59px;
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

/* ══════════════════════════════════════════
   3-COL LAYOUT — FUNCTION 1: STICKY SIDEBARS
   Only the main-col scrolls with the page.
   Left & right cols are viewport-height sticky.
══════════════════════════════════════════ */
.doc-wrap{
  max-width:var(--max);
  margin:0 auto;
  padding:0 28px;
  display:grid;
  grid-template-columns:190px 1fr 200px;
  gap:0;
  align-items:start;
}

/* ── LEFT SIDEBAR ── sticky, full viewport height, self-scrollable */
.left-col{
  position:sticky;
  top:var(--nav-h);
  height:calc(100vh - var(--nav-h));
  overflow-y:auto;
  overflow-x:hidden;
  scrollbar-width:none;
  -ms-overflow-style:none;
  padding:20px 14px 20px 0;
  border-right:1px solid var(--bd2);
}
.left-col::-webkit-scrollbar{display:none}

/* ── RIGHT SIDEBAR ── same treatment */
.right-col{
  position:sticky;
  top:var(--nav-h);
  height:calc(100vh - var(--nav-h));
  overflow-y:auto;
  overflow-x:hidden;
  scrollbar-width:none;
  -ms-overflow-style:none;
  padding:20px 0 20px 14px;
  border-left:1px solid var(--bd2);
}
.right-col::-webkit-scrollbar{display:none}

.toc-lbl{font-size:9.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--ink-6);margin-bottom:9px;padding-left:2px;display:block}
.toc-nav{display:flex;flex-direction:column;gap:1px}
.tl{display:flex;align-items:center;gap:7px;padding:6px 8px 6px 10px;border-radius:var(--rxs);font-size:11.5px;font-weight:500;color:var(--ink-5);border-left:2px solid transparent;transition:all .14s}
.tl:hover{color:var(--ink);background:var(--surf)}

/* ── FUNCTION 2: Active TOC highlight ── */
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

/* STEP CARDS */
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

/* TIMELINE */
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

/* ══════════════════════════════════════════
   FUNCTION 2 — MOBILE CTA CHIPS
   Styled identically to .ph-chip
   "Knowledge Center · Tax Filing Guide"
══════════════════════════════════════════ */
.mob-cta-chips{
  display:none; /* hidden on desktop */
  flex-wrap:wrap;
  gap:8px;
  padding:10px 16px 6px;
}
.mc-chip{
  display:inline-flex;
  align-items:center;
  gap:6px;
  background:var(--surf);
  border:1px solid var(--bd);
  border-radius:50px;
  padding:4px 12px;
  font-size:10.5px;
  font-weight:700;
  letter-spacing:.09em;
  text-transform:uppercase;
  color:var(--ink-5);
  text-decoration:none;
  transition:border-color .15s,color .15s;
}
.mc-chip:hover{border-color:#bbb;color:var(--ink)}
.mc-chip svg{width:12px;height:12px;stroke:currentColor;fill:none;stroke-width:1.8;stroke-linecap:round}

/* ── RESPONSIVE ── */
@media(max-width:1120px){
  .doc-wrap{grid-template-columns:172px 1fr 182px}
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
  .steps-g{grid-template-columns:repeat(2,1fr);gap:8px}
  .stl{display:none}
  .rate-strip{grid-template-columns:repeat(5,minmax(120px,1fr));overflow-x:auto;scrollbar-width:none;padding-bottom:4px}
  .rate-strip::-webkit-scrollbar{display:none}
  .bslide{grid-template-columns:1fr}
  .guide-grid{grid-template-columns:1fr;gap:8px}
  footer{padding:24px 16px}

  /* Show mobile CTA chips on mobile */
  .mob-cta-chips{display:flex}

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

/* ══════════════════════════════════════════
   DESKTOP FORCE OVERRIDES
   Keep sidebars visible and apply correct
   column widths on all desktop breakpoints.
══════════════════════════════════════════ */
@media (min-width: 901px){
  .mob-nav,
  .mob-panel,
  .mob-cta-chips{
    display:none !important;
  }

  .doc-wrap{
    display:grid !important;
    grid-template-columns:190px 1fr 200px !important;
  }

  .left-col{
    display:block !important;
    position:sticky !important;
    top:var(--nav-h) !important;
    height:calc(100vh - var(--nav-h)) !important;
    overflow-y:auto !important;
  }

  .right-col{
    display:block !important;
    position:sticky !important;
    top:var(--nav-h) !important;
    height:calc(100vh - var(--nav-h)) !important;
    overflow-y:auto !important;
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
      Knowledge Center · Tax Filing Guide
    </div>
    <h1>Ultimate Tax Filing Guide<br>in India (2026)</h1>
    <p class="ph-sub">Complete Income Tax Return Filing Guide for Individuals, Freelancers, Professionals & Businesses. ITR forms, tax slabs, deductions, due dates & penalties explained.</p>
    <div class="ph-meta">
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-cal"/></svg>Updated January 2026</span>
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg>12 min read</span>
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
  <a class="mob-link" href="#what"       onclick="closeMob(this,'What is ITR?')">       <span class="mn">01</span>What is ITR?</a>
  <a class="mob-link" href="#who"        onclick="closeMob(this,'Who Should File')">    <span class="mn">02</span>Who Should File</a>
  <a class="mob-link" href="#forms"      onclick="closeMob(this,'ITR Forms')">          <span class="mn">03</span>ITR Forms</a>
  <a class="mob-link" href="#slabs"      onclick="closeMob(this,'Tax Slabs')">          <span class="mn">04</span>Tax Slabs</a>
  <a class="mob-link" href="#documents"  onclick="closeMob(this,'Documents Required')"><span class="mn">05</span>Documents Required</a>
  <a class="mob-link" href="#deductions" onclick="closeMob(this,'Deductions')">         <span class="mn">06</span>Deductions</a>
  <a class="mob-link" href="#process"    onclick="closeMob(this,'Filing Process')">     <span class="mn">07</span>Filing Process</a>
  <a class="mob-link" href="#duedates"   onclick="closeMob(this,'Due Dates')">          <span class="mn">08</span>Due Dates</a>
  <a class="mob-link" href="#penalties"  onclick="closeMob(this,'Penalties')">          <span class="mn">09</span>Penalties</a>
  <a class="mob-link" href="#benefits"   onclick="closeMob(this,'Benefits')">           <span class="mn">10</span>Benefits</a>
  <a class="mob-link" href="#mistakes"   onclick="closeMob(this,'Common Mistakes')">    <span class="mn">11</span>Common Mistakes</a>
  <a class="mob-link" href="#why-us"     onclick="closeMob(this,'Why The Tax Company')"><span class="mn">12</span>Why Tax Company</a>
  <a class="mob-link" href="#faq"        onclick="closeMob(this,'FAQ')">                <span class="mn">—</span>FAQ</a>
</div>

{{-- ══ FUNCTION 2 — Mobile CTA chips, styled like ph-chip ══ --}}
<div class="mob-cta-chips">
  <a href="{{ route('boc.step1', ['source' => 'tax-filing-guide']) }}" class="mc-chip">
    <svg viewBox="0 0 20 20"><use href="#I-cal"/></svg>
    Book Our Consultation
  </a>
  <a href="{{ route('callback.page', ['source' => 'tax-filing-guide']) }}" class="mc-chip">
    <svg viewBox="0 0 20 20"><use href="#I-phone"/></svg>
    Request a Callback
  </a>
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
      <a href="#what"        class="tl" data-s="what">       <span class="tn">01</span>What is ITR?</a>
      <a href="#who"         class="tl" data-s="who">        <span class="tn">02</span>Who Should File</a>
      <a href="#forms"       class="tl" data-s="forms">      <span class="tn">03</span>ITR Forms</a>
      <a href="#slabs"       class="tl" data-s="slabs">      <span class="tn">04</span>Tax Slabs</a>
      <a href="#documents"   class="tl" data-s="documents">  <span class="tn">05</span>Documents Required</a>
      <a href="#deductions"  class="tl" data-s="deductions"> <span class="tn">06</span>Deductions</a>
      <a href="#process"     class="tl" data-s="process">    <span class="tn">07</span>Filing Process</a>
      <a href="#duedates"    class="tl" data-s="duedates">   <span class="tn">08</span>Due Dates</a>
      <a href="#penalties"   class="tl" data-s="penalties">  <span class="tn">09</span>Penalties</a>
      <a href="#benefits"    class="tl" data-s="benefits">   <span class="tn">10</span>Benefits</a>
      <a href="#mistakes"    class="tl" data-s="mistakes">   <span class="tn">11</span>Common Mistakes</a>
      <a href="#why-us"      class="tl" data-s="why-us">     <span class="tn">12</span>Why Tax Company</a>
      <div class="toc-div"></div>
      <a href="#faq"         class="tl" data-s="faq">        <span class="tn">—</span>FAQ</a>
    </nav>
    <div class="toc-cta-box">
      <p>Get expert help with Income Tax filing</p>
      <button class="toc-cta-btn">📞 Book Consultation</button>
    </div>
  </aside>

  <!-- ════ MAIN CONTENT ════ -->
  <main class="main-col">

    <!-- ── INTRO ── -->
    <div class="sec" id="intro">
      <div class="panel">
        <p><strong>Filing your Income Tax Return (ITR)</strong> is one of the most important financial responsibilities for individuals, freelancers, professionals, and businesses in India. Whether you are a salaried employee, a business owner, or an NRI, understanding the income tax filing process helps you stay compliant with government regulations and avoid penalties.</p>
        <p>This <strong>Ultimate Tax Filing Guide</strong> by The Tax Company explains everything you need to know about income tax filing in India, including tax slabs, ITR forms, required documents, tax deductions, filing process, deadlines, and penalties.</p>
      </div>
      <div class="hl-strip">
        <div class="hl-strip-ttl">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" viewBox="0 0 20 20"><use href="#I-shield"/></svg>
          What this guide covers
        </div>
        <div class="g3" style="margin-top:0">
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>ITR forms explained</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Tax slabs (New & Old)</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Documents required</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Deductions (80C, 80D, etc.)</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Step-by-step process</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Penalties & due dates</div>
        </div>
      </div>
      <div class="chips">
        <a href="#what"        class="chip">What is ITR</a>
        <a href="#forms"       class="chip">ITR Forms</a>
        <a href="#slabs"       class="chip">Tax Slabs</a>
        <a href="#deductions"  class="chip">Deductions</a>
        <a href="#process"     class="chip">Process</a>
        <a href="#penalties"   class="chip">Penalties</a>
      </div>
    </div>

    <!-- ── 01 WHAT IS ITR ── -->
    <div class="sec" id="what">
      <span class="s-lbl">Section 01</span>
      <h2 class="s-ttl">What is Income Tax Return (ITR)?</h2>
      <div class="panel">
        <p>An <strong>Income Tax Return (ITR)</strong> is a form submitted to the Income Tax Department of India that declares your income, deductions, tax payments, and tax liability for a financial year.</p>
        <p>ITR filing helps the government determine:</p>
        <p>• Total income earned<br>• Taxes already paid<br>• Refunds due (if any)</p>
        <p>ITR filing is mandatory for many individuals and businesses depending on income and compliance requirements.</p>
      </div>
    </div>

    <!-- ── 02 WHO SHOULD FILE ── -->
    <div class="sec" id="who">
      <span class="s-lbl">Section 02</span>
      <h2 class="s-ttl">Who Should File Income Tax Return in India?</h2>
      <p class="s-desc">You must file an Income Tax Return if any of these conditions apply to you.</p>
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-building"/></svg></div>
          <div class="icard-t">Income Above Exemption Limit</div>
          <div class="icard-d">Your annual income exceeds the basic exemption limit (₹2.5L–₹5L depending on age & regime).</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-bank"/></svg></div>
          <div class="icard-t">Tax Refund Claim</div>
          <div class="icard-d">You want to claim a refund for excess tax deducted (TDS) or paid in advance.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-globe"/></svg></div>
          <div class="icard-t">Foreign Assets/Income</div>
          <div class="icard-d">You have foreign assets, foreign bank accounts, or foreign income to declare.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-legal"/></svg></div>
          <div class="icard-t">Companies & Firms</div>
          <div class="icard-d">All companies, partnership firms, and LLPs must file ITR regardless of income.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-home"/></svg></div>
          <div class="icard-t">High-Value Transactions</div>
          <div class="icard-d">You deposited large amounts in bank accounts or purchased property above specified value.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><use href="#I-sync"/></svg></div>
          <div class="icard-t">Carry Forward Losses</div>
          <div class="icard-d">You want to carry forward capital losses or business losses to future years.</div>
        </div>
      </div>
      <p class="s-desc" style="margin-top:12px">Even if your income is below the limit, filing ITR is recommended for financial records and future applications.</p>
    </div>

    <!-- ── 03 ITR FORMS ── (TABS for different ITR types) -->
    <div class="sec" id="forms">
      <span class="s-lbl">Section 03 · ITR Forms</span>
      <h2 class="s-ttl">Types of ITR Forms in India</h2>
      <p class="s-desc">The Income Tax Department provides different forms depending on income type and source.</p>
      <div class="tab-bar">
        <button class="tab-btn on" onclick="switchTab('itr1',this)">ITR-1 (Sahaj)<span class="tsub">Salaried Individuals</span></button>
        <button class="tab-btn" onclick="switchTab('itr2',this)">ITR-2<span class="tsub">Capital Gains / Multiple Properties</span></button>
        <button class="tab-btn" onclick="switchTab('itr3',this)">ITR-3<span class="tsub">Business & Professionals</span></button>
        <button class="tab-btn" onclick="switchTab('itr4',this)">ITR-4 (Sugam)<span class="tsub">Presumptive Taxation</span></button>
      </div>
      <div class="tab-panels">
        <div class="tab-panel on" id="itr1">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-id"/></svg></div>
            <div><div class="tp-ttl">ITR-1 (Sahaj)</div><div class="tp-sub">For salaried individuals with income up to ₹50 lakh</div></div>
          </div>
          <div class="tp-body"><p>ITR-1 is applicable for resident individuals with income from salary, one house property, and other sources like interest.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Income from salary/pension</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Income from one house property</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Income from other sources (interest, family pension up to ₹5,000)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Total income must be ≤ ₹50 lakh</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Not for capital gains</span><span class="tp-tag">Not for business income</span></div>
        </div>
        <div class="tab-panel" id="itr2">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-chart"/></svg></div>
            <div><div class="tp-ttl">ITR-2</div><div class="tp-sub">For individuals with capital gains or multiple properties</div></div>
          </div>
          <div class="tp-body"><p>ITR-2 is for individuals and HUFs not having income from business or profession but may have capital gains, foreign income, or multiple house properties.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Capital gains from sale of investments/property</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>More than one house property</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Foreign assets or foreign income</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Income from lottery, horse races, etc.</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">For individuals & HUFs</span><span class="tp-tag">No business income</span></div>
        </div>
        <div class="tab-panel" id="itr3">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-tools"/></svg></div>
            <div><div class="tp-ttl">ITR-3</div><div class="tp-sub">For business owners and professionals</div></div>
          </div>
          <div class="tp-body"><p>ITR-3 is for individuals and HUFs who have income from business or profession, including freelancers, consultants, and self-employed professionals.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Business income (proprietorship)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Professional income (doctors, lawyers, consultants)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Freelance income</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Income from partnership firm as partner</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Requires books of accounts</span><span class="tp-tag">May need audit</span></div>
        </div>
        <div class="tab-panel" id="itr4">
          <div class="tp-head">
            <div class="tp-ico"><svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><use href="#I-check"/></svg></div>
            <div><div class="tp-ttl">ITR-4 (Sugam)</div><div class="tp-sub">For taxpayers opting for presumptive taxation</div></div>
          </div>
          <div class="tp-body"><p>ITR-4 is for individuals, HUFs, and firms (other than LLP) opting for presumptive income schemes under Sections 44AD, 44ADA, or 44AE.</p></div>
          <div class="tp-list">
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Business income under 44AD (8% or 6% of turnover)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Professional income under 44ADA (50% of gross receipts)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Turnover up to ₹2 crore (business) or ₹50 lakh (professionals)</div>
            <div class="tp-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>No need to maintain detailed books</div>
          </div>
          <div class="tp-tags"><span class="tp-tag">Simplified filing</span><span class="tp-tag">Lower compliance</span></div>
        </div>
      </div>
    </div>

    <!-- ── 04 TAX SLABS ── -->
    <div class="sec" id="slabs">
      <span class="s-lbl">Section 04 · Tax Rates</span>
      <h2 class="s-ttl">Income Tax Slab Rates in India</h2>
      <p class="s-desc">Compare New Tax Regime vs Old Tax Regime. Choose the regime that benefits you most.</p>
      
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-top:12px">
        <!-- New Regime -->
        <div class="rcard" style="padding:16px; border:2px solid var(--ink)">
          <span class="rcard-pct" style="font-size:20px; margin-bottom:12px">New Tax Regime</span>
          <div style="font-size:11px; color:var(--ink-4); margin-bottom:8px">Default regime from FY 2023-24</div>
          <div style="margin-top:10px">
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>Up to ₹3,00,000</span><span style="font-weight:700">Nil</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹3,00,001 – ₹6,00,000</span><span style="font-weight:700">5%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹6,00,001 – ₹9,00,000</span><span style="font-weight:700">10%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹9,00,001 – ₹12,00,000</span><span style="font-weight:700">15%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹12,00,001 – ₹15,00,000</span><span style="font-weight:700">20%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0"><span>Above ₹15,00,000</span><span style="font-weight:700">30%</span></div>
          </div>
        </div>
        
        <!-- Old Regime -->
        <div class="rcard" style="padding:16px">
          <span class="rcard-pct" style="font-size:20px; margin-bottom:12px">Old Tax Regime</span>
          <div style="font-size:11px; color:var(--ink-4); margin-bottom:8px">Allows deductions (80C, 80D, HRA, etc.)</div>
          <div style="margin-top:10px">
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>Up to ₹2,50,000</span><span style="font-weight:700">Nil</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹2,50,001 – ₹5,00,000</span><span style="font-weight:700">5%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹5,00,001 – ₹10,00,000</span><span style="font-weight:700">20%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0"><span>Above ₹10,00,000</span><span style="font-weight:700">30%</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 05 DOCUMENTS ── -->
    <div class="sec" id="documents">
      <span class="s-lbl">Section 05 · Paperwork</span>
      <h2 class="s-ttl">Documents Required for Income Tax Filing</h2>
      <p class="s-desc">Common documents required for ITR filing include:</p>
      <div class="g3">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-id"/></svg></div><div class="icard-t">PAN Card</div><div class="icard-d">Permanent Account Number – mandatory for all taxpayers</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-id"/></svg></div><div class="icard-t">Aadhaar Card</div><div class="icard-d">For identity verification and e-filing</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div><div class="icard-t">Form 16</div><div class="icard-d">For salaried individuals – TDS certificate from employer</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div><div class="icard-t">Bank Statements</div><div class="icard-d">All savings/current account statements for the year</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-pay"/></svg></div><div class="icard-t">Interest Certificates</div><div class="icard-d">From banks, post office, FDs (Form 16A, 26AS)</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-check"/></svg></div><div class="icard-t">Investment Proofs</div><div class="icard-d">80C, 80D, 80G documents for deductions</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-chart"/></svg></div><div class="icard-t">Capital Gains Statements</div><div class="icard-d">From sale of shares, mutual funds, property</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div><div class="icard-t">Rental Income Details</div><div class="icard-d">Rent receipts, agreements for house property</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-factory"/></svg></div><div class="icard-t">Business Financials</div><div class="icard-d">P&L, balance sheet, turnover details for businesses</div></div>
      </div>
      <p class="s-desc">Having these documents ready helps in smooth and accurate filing.</p>
    </div>

    <!-- ── 06 DEDUCTIONS (KB) ── -->
    <div class="sec" id="deductions">
      <span class="s-lbl">Section 06 · Save Tax</span>
      <h2 class="s-ttl">Tax Deductions Available Under Income Tax</h2>
      <p class="s-desc">Taxpayers can reduce their tax liability through various deductions under the Old Tax Regime.</p>
      
      <div class="kb-stack">
        <div class="kb" id="kb1">
          <div class="kb-hd" onclick="toggleKB('kb1')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-check"/></svg></div>
              <div><div class="kb-t">Section 80C – Popular Deductions</div><div class="kb-s">Up to ₹1.5 lakh deduction</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>PPF (Public Provident Fund)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>ELSS – Equity Linked Savings Scheme</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Life Insurance Premium</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>EPF / VPF contributions</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Tax Saving Fixed Deposits (5-year lock-in)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Principal repayment on home loan</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Sukanya Samriddhi Yojana</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>NSC (National Savings Certificate)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Tuition fees for children</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb2">
          <div class="kb-hd" onclick="toggleKB('kb2')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg></div>
              <div><div class="kb-t">Section 80D – Health Insurance</div><div class="kb-s">Premium deduction for self & family</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Self, spouse & children: Up to ₹25,000</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Parents (below 60 years): Additional ₹25,000</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Parents (above 60 years): Additional ₹50,000</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Preventive health check-up: Up to ₹5,000 (within overall limit)</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb3">
          <div class="kb-hd" onclick="toggleKB('kb3')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div>
              <div><div class="kb-t">Section 24 – Home Loan Interest</div><div class="kb-s">Deduction on interest paid</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Self-occupied property: Up to ₹2,00,000 interest deduction</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Let-out property: Full interest amount (no upper limit)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Additional deduction for first-time home buyers (Section 80EEA)</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb4">
          <div class="kb-hd" onclick="toggleKB('kb4')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-trust"/></svg></div>
              <div><div class="kb-t">Section 80G – Donations</div><div class="kb-s">Deduction for charitable contributions</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>100% deduction without limit (e.g., PM Relief Fund, PM CARES)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>50% deduction without limit (certain approved funds)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Donations with limits (e.g., 10% of adjusted gross income)</li>
            </ul>
          </div></div>
        </div>
      </div>
    </div>

    <!-- ── 07 FILING PROCESS (STEPS) ── -->
    <div class="sec" id="process">
      <span class="s-lbl">Section 07 · Step by Step</span>
      <h2 class="s-ttl">Step-by-Step Income Tax Filing Process</h2>
      <div class="steps-g" id="sg1">
        <div class="step-card">
          <div class="s-badge">01</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div>
          <h4>Collect Documents</h4>
          <p>Gather Form 16, bank statements, investment proofs, and all income documents.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">02</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-folder"/></svg></div>
          <h4>Choose ITR Form</h4>
          <p>Select correct ITR form based on income sources and category.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">03</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-cart"/></svg></div>
          <h4>Calculate Total Income</h4>
          <p>Add all income from salary, business, house property, capital gains, other sources.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">04</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-check"/></svg></div>
          <h4>Claim Deductions</h4>
          <p>Apply eligible deductions under 80C, 80D, 24(b), etc. to reduce taxable income.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">05</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-pay"/></svg></div>
          <h4>Compute Tax Liability</h4>
          <p>Calculate tax as per applicable slab rates and deduct TDS/advance tax paid.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">06</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-pay"/></svg></div>
          <h4>Pay Outstanding Tax</h4>
          <p>If tax is due, pay online before filing the return.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">07</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-upload"/></svg></div>
          <h4>File Return Online</h4>
          <p>Login to Income Tax portal, fill details, upload, and submit ITR.</p>
        </div>
        <div class="step-card">
          <div class="s-badge">08</div>
          <div class="s-ico"><svg viewBox="0 0 20 20"><use href="#I-check"/></svg></div>
          <h4>Verify Your Return</h4>
          <p>E-verify using Aadhaar OTP, net banking, or send signed ITR-V to CPC.</p>
        </div>
      </div>
      <div class="stl" id="stl1">
        <div class="stl-c"><div class="stl-d" id="d0"></div></div>
        <div class="stl-c"><div class="stl-d" id="d1"></div></div>
        <div class="stl-c"><div class="stl-d" id="d2"></div></div>
        <div class="stl-c"><div class="stl-d" id="d3"></div></div>
        <div class="stl-c"><div class="stl-d" id="d4"></div></div>
        <div class="stl-c"><div class="stl-d" id="d5"></div></div>
        <div class="stl-c"><div class="stl-d" id="d6"></div></div>
        <div class="stl-c"><div class="stl-d" id="d7"></div></div>
      </div>
    </div>

    <!-- ── 08 DUE DATES ── -->
    <div class="sec" id="duedates">
      <span class="s-lbl">Section 08 · Deadlines</span>
      <h2 class="s-ttl">Income Tax Filing Due Dates</h2>
      <div class="tbl-wrap">
        <table class="ttbl">
          <thead><tr><th>Taxpayer Category</th><th>Due Date</th></tr></thead>
          <tbody>
            <tr><td>Individual taxpayers (no audit required)</td><td><b>31 July</b> of assessment year</td></tr>
            <tr><td>Businesses requiring tax audit</td><td><b>31 October</b> of assessment year</td></tr>
            <tr><td>Businesses requiring transfer pricing report</td><td><b>30 November</b> of assessment year</td></tr>
            <tr><td>Belated return filing (with penalty)</td><td><b>31 December</b> of assessment year</td></tr>
            <tr><td>Revised return filing</td><td><b>31 December</b> of assessment year</td></tr>
          </tbody>
        </table>
      </div>
      <p class="s-desc" style="margin-top:12px">Late filing may attract penalties and interest under Section 234F.</p>
    </div>

    <!-- ── 09 PENALTIES ── -->
    <div class="sec" id="penalties">
      <span class="s-lbl">Section 09 · Consequences</span>
      <h2 class="s-ttl">Penalties for Late Income Tax Filing</h2>
      <div class="tbl-wrap">
        <table class="ttbl">
          <thead><tr><th>Violation</th><th>Penalty / Consequence</th></tr></thead>
          <tbody>
            <tr><td>Late filing (Income below ₹5 lakh)</td><td><b>₹1,000</b> penalty under Section 234F</td></tr>
            <tr><td>Late filing (Income above ₹5 lakh)</td><td><b>₹5,000</b> penalty under Section 234F</td></tr>
            <tr><td>Unpaid tax</td><td>Interest at <b>1% per month</b> (12% p.a.) on unpaid amount</td></tr>
            <tr><td>Non-filing despite mandatory requirement</td><td>Penalty up to <b>200% of tax evaded</b> + prosecution</td></tr>
            <tr><td>Incorrect information / concealment</td><td>Penalty up to <b>300% of tax sought to be evaded</b></td></tr>
            <tr><td>Failure to get audit when required</td><td>0.5% of turnover or ₹1.5 lakh, whichever is less</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ── 10 BENEFITS (SLIDER) ── -->
    <div class="sec" id="benefits">
      <span class="s-lbl">Section 10 · Advantages</span>
      <h2 class="s-ttl">Benefits of Filing Income Tax Return</h2>
      <div class="bslider">
        <div class="btrack" id="btrack">
          <div class="bslide">
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div><div class="bs-t">Loan Approval</div><div class="bs-d">ITR is mandatory for home loans, car loans, and credit card applications.</div></div>
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20"><use href="#I-globe"/></svg></div><div class="bs-t">Visa Processing</div><div class="bs-d">Many countries require ITR copies for tourist and work visa applications.</div></div>
          </div>
          <div class="bslide">
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20"><use href="#I-badge"/></svg></div><div class="bs-t">Claim Tax Refund</div><div class="bs-d">Get refund for excess TDS deducted from your salary or interest income.</div></div>
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20"><use href="#I-sync"/></svg></div><div class="bs-t">Carry Forward Losses</div><div class="bs-d">Capital losses and business losses can be carried forward only if ITR is filed.</div></div>
          </div>
          <div class="bslide">
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg></div><div class="bs-t">Financial Credibility</div><div class="bs-d">Regular ITR filing builds trust with financial institutions and investors.</div></div>
            <div class="bs-cell"><div class="bs-ico"><svg viewBox="0 0 20 20"><use href="#I-legal"/></svg></div><div class="bs-t">Legal Compliance</div><div class="bs-d">Stay compliant with income tax laws and avoid notices/penalties.</div></div>
          </div>
        </div>
        <div class="bctrl">
          <div class="bdots" id="bdots">
            <button class="bdot on" onclick="goSlide(0)"></button>
            <button class="bdot" onclick="goSlide(1)"></button>
            <button class="bdot" onclick="goSlide(2)"></button>
          </div>
          <div class="barrs">
            <button class="barr" onclick="slideStep(-1)"><svg viewBox="0 0 20 20"><use href="#I-arr-l"/></svg></button>
            <button class="barr" onclick="slideStep(1)"><svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></button>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 11 COMMON MISTAKES ── -->
    <div class="sec" id="mistakes">
      <span class="s-lbl">Section 11 · Avoid These</span>
      <h2 class="s-ttl">Common Mistakes to Avoid in ITR Filing</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Wrong ITR Form</div><div class="icard-d">Choosing incorrect form (e.g., using ITR-1 when you have capital gains).</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Missing Income Sources</div><div class="icard-d">Forgetting to declare interest income, rental income, or freelance earnings.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Not Claiming Deductions</div><div class="icard-d">Missing out on 80C, 80D, HRA, and other eligible deductions.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Incorrect Bank Details</div><div class="icard-d">Wrong account number/IFSC delays refund processing.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Not Verifying Return</div><div class="icard-d">Return is considered invalid if not verified within 30 days.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Missing Deadlines</div><div class="icard-d">Late filing attracts penalties and interest – file before due date.</div></div>
      </div>
    </div>

    <!-- ── 12 WHY THE TAX COMPANY ── -->
    <div class="sec" id="why-us">
      <span class="s-lbl">Section 12 · Expert Help</span>
      <h2 class="s-ttl">Why Choose The Tax Company for Income Tax Filing?</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-advisory"/></svg></div><div class="icard-t">Expert Tax Consultation</div><div class="icard-d">Professional guidance on tax planning, regime selection, and deductions.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div><div class="icard-t">Accurate ITR Preparation</div><div class="icard-d">Error-free filing with all income sources and deductions correctly claimed.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg></div><div class="icard-t">Fast Filing Process</div><div class="icard-d">Quick turnaround – we file your return well before the deadline.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg></div><div class="icard-t">Compliance Support</div><div class="icard-d">Assistance with notices, assessments, and tax department queries.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-ongoing"/></svg></div><div class="icard-t">Dedicated Professionals</div><div class="icard-d">CA-qualified team with years of experience in direct taxation.</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-max"/></svg></div><div class="icard-t">Tax Saving Maximization</div><div class="icard-d">Identify all eligible deductions to minimize your tax liability legally.</div></div>
      </div>
    </div>

    <!-- ── FAQ ── -->
    <div class="sec" id="faq">
      <span class="s-lbl">FAQ</span>
      <h2 class="s-ttl">Frequently Asked Questions</h2>
      <div class="faq-wrap">
        <div class="faq open" id="f1">
          <button class="faq-q" onclick="toggleFaq('f1')"><span>What is Income Tax Return (ITR)?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">An Income Tax Return (ITR) is a form submitted to the Income Tax Department of India that declares your income, tax payments, deductions, and tax liability for a financial year.</div></div>
        </div>
        <div class="faq" id="f2">
          <button class="faq-q" onclick="toggleFaq('f2')"><span>Who is required to file Income Tax Return in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Individuals must file ITR if their annual income exceeds the basic exemption limit set by the government. Businesses, companies, and partnership firms are also required to file income tax returns regardless of income level.</div></div>
        </div>
        <div class="faq" id="f3">
          <button class="faq-q" onclick="toggleFaq('f3')"><span>What are the different types of ITR forms?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">The Income Tax Department provides several forms depending on income type: ITR-1 (Sahaj) for salaried individuals with income up to ₹50 lakh; ITR-2 for individuals with capital gains or multiple properties; ITR-3 for business owners and professionals; ITR-4 (Sugam) for presumptive taxation scheme taxpayers.</div></div>
        </div>
        <div class="faq" id="f4">
          <button class="faq-q" onclick="toggleFaq('f4')"><span>What documents are required for income tax filing?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Common documents required include PAN card, Aadhaar card, Form 16 (for salaried individuals), bank statements, investment proofs, capital gains statements, and business income records (if applicable).</div></div>
        </div>
        <div class="faq" id="f5">
          <button class="faq-q" onclick="toggleFaq('f5')"><span>What is the last date to file Income Tax Return in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">For most individual taxpayers, the due date for filing Income Tax Return is 31 July of the assessment year. Businesses requiring tax audit usually have a later deadline of 31 October.</div></div>
        </div>
        <div class="faq-hidden" style="display:none">
          <div class="faq" id="f6">
            <button class="faq-q" onclick="toggleFaq('f6')"><span>What happens if I miss the ITR filing deadline?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">If you miss the deadline, you can still file a belated return, but penalties and interest may apply depending on your income level. Penalty under Section 234F ranges from ₹1,000 to ₹5,000.</div></div>
          </div>
          <div class="faq" id="f7">
            <button class="faq-q" onclick="toggleFaq('f7')"><span>Can I file Income Tax Return myself?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes, individuals can file ITR themselves through the Income Tax e-filing portal. However, many taxpayers prefer professional assistance to avoid mistakes and ensure accurate tax calculations.</div></div>
          </div>
          <div class="faq" id="f8">
            <button class="faq-q" onclick="toggleFaq('f8')"><span>What are the penalties for late income tax filing?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Late filing penalties: ₹1,000 for income below ₹5 lakh, ₹5,000 for income above ₹5 lakh. Additional interest may apply on unpaid tax under Section 234A.</div></div>
          </div>
          <div class="faq" id="f9">
            <button class="faq-q" onclick="toggleFaq('f9')"><span>How can I check my ITR refund status?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">You can check your refund status on the Income Tax e-filing portal using your PAN number and assessment year under 'View Returns/Forms' section.</div></div>
          </div>
          <div class="faq" id="f10">
            <button class="faq-q" onclick="toggleFaq('f10')"><span>What is e-verification of Income Tax Return?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">After filing your ITR, you must verify it electronically using methods such as Aadhaar OTP, net banking verification, or bank account verification. Your return is processed only after successful verification.</div></div>
          </div>
          <div class="faq" id="f11">
            <button class="faq-q" onclick="toggleFaq('f11')"><span>Can I revise my Income Tax Return after filing?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes, if you discover errors after filing your return, you can file a revised return before the prescribed deadline (usually 31 December of assessment year).</div></div>
          </div>
          <div class="faq" id="f12">
            <button class="faq-q" onclick="toggleFaq('f12')"><span>Why should I file Income Tax Return even if my income is below the taxable limit?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Filing ITR even when not mandatory can help with loan applications, visa processing, claiming tax refunds, and maintaining financial records for future reference.</div></div>
          </div>
          <div class="faq" id="f13">
            <button class="faq-q" onclick="toggleFaq('f13')"><span>What are the benefits of filing Income Tax Return?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Filing ITR provides several benefits: claim tax refunds, carry forward capital losses, financial credibility, compliance with tax laws, and easier loan/visa approvals.</div></div>
          </div>
          <div class="faq" id="f14">
            <button class="faq-q" onclick="toggleFaq('f14')"><span>How long does it take to process an Income Tax Return?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Typically, ITR processing may take 7 to 45 days, depending on verification and refund claims. Simple returns without refunds may process faster.</div></div>
          </div>
          <div class="faq" id="f15">
            <button class="faq-q" onclick="toggleFaq('f15')"><span>How can The Tax Company help with income tax filing?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">The Tax Company provides professional tax filing services including income tax consultation, accurate ITR preparation, online tax filing assistance, and compliance support. Our experts ensure that your tax returns are filed correctly and on time.</div></div>
          </div>
        </div>
      </div>
      <button class="faq-view-more" onclick="toggleMoreFAQs(this)">View More</button>
    </div>

    <!-- RELATED GUIDES -->
    <div class="sec" style="border-bottom:none">
      <span class="s-lbl">Knowledge Center</span>
      <h2 class="s-ttl">Tax Filing Guides – Resources & Knowledge Center</h2>
      <div class="guide-grid">
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-book"/></svg>Guide</div><h4>New Tax Regime vs Old Tax Regime – Which is Better?</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-compare"/></svg>Comparison</div><h4>Section 80C Complete Guide: Investments & Deductions</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-chklist"/></svg>Checklist</div><h4>Capital Gains Tax on Property, Shares & Mutual Funds</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-itc"/></svg>Freelancers</div><h4>Income Tax Guide for Freelancers & Self-Employed</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-dl"/></svg>Deadlines</div><h4>Income Tax Due Dates Calendar 2025-26</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-penalty"/></svg>Penalty</div><h4>How to Respond to Income Tax Notices</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
      </div>
    </div>

  </main>

  <!-- ════ RIGHT SIDEBAR ════ -->
  <aside class="right-col">
    <div class="r-card">
      <h5>Guide Information</h5>
      <div class="r-row"><span>Reading time</span><span>12 minutes</span></div>
      <div class="r-row"><span>Difficulty</span><span>Beginner to Intermediate</span></div>
      <div class="r-row"><span>Updated</span><span>Jan 2026</span></div>
      <div class="r-row"><span>Sections</span><span>12 + FAQ</span></div>
      <div class="r-row"><span>Reviewed by</span><span>CA Expert</span></div>
    </div>
    <div class="r-card">
      <h5>Quick Actions</h5>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-dl-arr"/></svg>Download PDF</a>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-share"/></svg>Share this guide</a>
      <a href="#process" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-filing"/></svg>File Your ITR Today</a>
    </div>
    {{-- White Button Group --}}
    <a href="{{ route('boc.step1', ['source' => 'tax-filing-guide']) }}" 
       class="h-btn-white">
       Book Our Consultation
    </a>
    <a href="{{ route('callback.page', ['source' => 'tax-filing-guide']) }}" 
       class="h-btn-white">
       Request a Callback
    </a>
    <div class="r-card" style="margin-top:14px">
      <h5>Quick Facts</h5>
      <div class="r-row"><span>Basic exemption (New)</span><span>₹3,00,000</span></div>
      <div class="r-row"><span>Basic exemption (Old)</span><span>₹2,50,000</span></div>
      <div class="r-row"><span>ITR due date</span><span>31 July</span></div>
      <div class="r-row"><span>80C limit</span><span>₹1.5 lakh</span></div>
      <div class="r-row"><span>Late fee (above ₹5L)</span><span>₹5,000</span></div>
      <div class="r-row"><span>Interest on unpaid tax</span><span>1% per month</span></div>
    </div>
  </aside>

</div><!-- /.doc-wrap -->

<!-- ══ CTA SECTION ══ -->
<div class="cta">
  <h3>Need Help Filing Your Income Tax?</h3>
  <p>Our tax experts are ready to assist you with hassle-free tax filing services.</p>
  <div class="cta-btns">
    <button class="btn-w">Book Consultation</button>
    <button class="btn-g">File Your ITR Today</button>
  </div>
</div>

<footer>
  © 2026 The Tax Company · <b>Income Tax Filing Guide</b> · All rights reserved
</footer>

<script>
/* ── PROGRESS BAR — tracks page scroll ── */
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

/* ══════════════════════════════════════════
   FUNCTION 2 — SCROLL-LINKED TOC HIGHLIGHT
   Uses IntersectionObserver on page scroll.
   Works correctly since main-col scrolls
   with the page (not independently).
══════════════════════════════════════════ */
(function(){
  const secs = document.querySelectorAll('.sec[id]');
  const tls  = document.querySelectorAll('.tl');
  const mls  = document.querySelectorAll('.mob-link');
  let cur = '';
  const map = {};

  tls.forEach(a => {
    const s = a.getAttribute('data-s');
    if (s) map[s] = a;
  });

  function setActive(id) {
    if (id === cur) return;
    cur = id;

    /* Left TOC: remove all, add active to current */
    tls.forEach(a => a.classList.remove('active'));
    if (map[id]) map[id].classList.add('active');

    /* Scroll the active item into view within the sticky sidebar */
    if (map[id]) {
      map[id].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
    }

    /* Mobile bottom nav */
    mls.forEach(a => a.classList.toggle('act', a.getAttribute('href') === '#' + id));
    const ce = document.getElementById('mobCur');
    if (ce && map[id]) ce.textContent = map[id].textContent.trim();
  }

  /* rootMargin: fire when section enters the top 30% of viewport */
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) setActive(e.target.id);
    });
  }, { rootMargin: '-10% 0px -75% 0px' });

  secs.forEach(s => obs.observe(s));
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

/* ── STEP CARD ANIMATION + TIMELINE ── */
(function(){
  const cards=document.querySelectorAll('.step-card');
  const tl1=document.getElementById('stl1');

  const cObs=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(!e.isIntersecting)return;
      const i=[...cards].indexOf(e.target);
      setTimeout(()=>e.target.classList.add('vis'),i*90);
      cObs.unobserve(e.target);
    });
  },{threshold:0.1});
  cards.forEach(c=>cObs.observe(c));

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

  animTL(tl1,['d0','d1','d2','d3','d4','d5','d6','d7']);
})();
</script>

@endsection
