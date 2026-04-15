@extends('front')
@section('content')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate Income Tax Saving Guide 2026 | Legal Tax Saving Strategies | The Tax Company</title>
<meta name="description" content="Complete Income Tax Saving Guide in India 2026. Best legal tax saving strategies, Section 80C, 80D deductions, home loan benefits, NPS tax benefits & investment options.">
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
.doc-wrap{
    display:grid !important;
    grid-template-columns:220px 1fr 230px !important;
}

.left-col{
    display:block !important;
}

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
  <symbol id="I-ppf"     viewBox="0 0 20 20"><rect x="4" y="3" width="12" height="14" rx="1.5"/><line x1="8" y1="7" x2="12" y2="7"/><line x1="8" y1="10" x2="12" y2="10"/><line x1="8" y1="13" x2="10" y2="13"/></symbol>
  <symbol id="I-elss"    viewBox="0 0 20 20"><path d="M10 3l2 4 5 .5-3 3 1 5-5-2-5 2 1-5-3-3 5-.5z"/></symbol>
  <symbol id="I-nps"     viewBox="0 0 20 20"><circle cx="10" cy="10" r="7"/><path d="M10 5v5l3 2"/></symbol>
  <symbol id="I-insurance" viewBox="0 0 20 20"><path d="M10 3l5 2v5c0 3-2 6-5 7-3-1-5-4-5-7V5z"/><line x1="8" y1="8" x2="12" y2="12"/><line x1="12" y1="8" x2="8" y2="12"/></symbol>
</svg>

<!-- ══ PROGRESS BAR ══ -->
<div id="pbar-wrap"><div id="pbar"></div></div>

<!-- ══ PAGE HEADER ══ -->
<div class="ph">
  <div class="ph-in">
    <div class="ph-chip">
      <svg width="12" height="12" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><use href="#I-taxd"/></svg>
      Knowledge Center · Tax Saving Guide
    </div>
    <h1>Ultimate Income Tax Saving Guide<br>in India (2026)</h1>
    <p class="ph-sub">Best Legal Tax Saving Strategies for Individuals, Professionals & Businesses. Deductions, exemptions, investments & planning tips to minimize tax liability.</p>
    <div class="ph-meta">
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-cal"/></svg>Updated January 2026</span>
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg>14 min read</span>
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
  <a class="mob-link" href="#intro"          onclick="closeMob(this,'Introduction')">          <span class="mn">—</span>Introduction</a>
  <a class="mob-link" href="#understanding"  onclick="closeMob(this,'Understanding Tax Saving')"><span class="mn">01</span>Understanding Tax Saving</a>
  <a class="mob-link" href="#regime"         onclick="closeMob(this,'Choose Tax Regime')">      <span class="mn">02</span>Choose Tax Regime</a>
  <a class="mob-link" href="#80c"            onclick="closeMob(this,'Section 80C')">            <span class="mn">03</span>Section 80C</a>
  <a class="mob-link" href="#80d"            onclick="closeMob(this,'Section 80D')">            <span class="mn">04</span>Section 80D</a>
  <a class="mob-link" href="#home-loan"      onclick="closeMob(this,'Home Loan Benefits')">     <span class="mn">05</span>Home Loan Benefits</a>
  <a class="mob-link" href="#80e"            onclick="closeMob(this,'Section 80E')">            <span class="mn">06</span>Section 80E</a>
  <a class="mob-link" href="#hra"            onclick="closeMob(this,'HRA Exemption')">          <span class="mn">07</span>HRA Exemption</a>
  <a class="mob-link" href="#lta"            onclick="closeMob(this,'LTA')">                    <span class="mn">08</span>LTA</a>
  <a class="mob-link" href="#nps"            onclick="closeMob(this,'NPS Benefits')">           <span class="mn">09</span>NPS Benefits</a>
  <a class="mob-link" href="#capital-gains"  onclick="closeMob(this,'Capital Gains')">          <span class="mn">10</span>Capital Gains</a>
  <a class="mob-link" href="#business"       onclick="closeMob(this,'Business Owners')">        <span class="mn">11</span>Business Owners</a>
  <a class="mob-link" href="#freelancers"    onclick="closeMob(this,'Freelancers')">            <span class="mn">12</span>Freelancers</a>
  <a class="mob-link" href="#early-planning" onclick="closeMob(this,'Early Planning')">         <span class="mn">13</span>Early Planning</a>
  <a class="mob-link" href="#mistakes"       onclick="closeMob(this,'Common Mistakes')">        <span class="mn">14</span>Common Mistakes</a>
  <a class="mob-link" href="#why-us"         onclick="closeMob(this,'Why Tax Company')">        <span class="mn">15</span>Why Tax Company</a>
  <a class="mob-link" href="#faq"            onclick="closeMob(this,'FAQ')">                    <span class="mn">—</span>FAQ</a>
</div>
<div class="mob-cta-bar" style="display:none" id="mobCtaBar">
  <button onclick="void(0)">📞 Talk to a Tax Expert</button>
</div>

<!-- ══════════════════════════════════════════════════
     3-COLUMN DOC LAYOUT
══════════════════════════════════════════════════ -->
<div class="doc-wrap">

  <!-- ════ LEFT TOC ════ -->
  <aside class="left-col">
    <span class="toc-lbl">On this page</span>
    <nav class="toc-nav" id="tocNav">
      <a href="#intro"          class="tl" data-s="intro">         <span class="tn">—</span>Introduction</a>
      <a href="#understanding"  class="tl" data-s="understanding"> <span class="tn">01</span>Understanding Tax Saving</a>
      <a href="#regime"         class="tl" data-s="regime">        <span class="tn">02</span>Choose the Right Tax Regime</a>
      <a href="#80c"            class="tl" data-s="80c">           <span class="tn">03</span>Section 80C – Popular Deductions</a>
      <a href="#80d"            class="tl" data-s="80d">           <span class="tn">04</span>Section 80D – Health Insurance</a>
      <a href="#home-loan"      class="tl" data-s="home-loan">     <span class="tn">05</span>Home Loan Tax Benefits</a>
      <a href="#80e"            class="tl" data-s="80e">           <span class="tn">06</span>Section 80E – Education Loan</a>
      <a href="#hra"            class="tl" data-s="hra">           <span class="tn">07</span>HRA Exemption</a>
      <a href="#lta"            class="tl" data-s="lta">           <span class="tn">08</span>Leave Travel Allowance (LTA)</a>
      <a href="#nps"            class="tl" data-s="nps">           <span class="tn">09</span>NPS Tax Benefits</a>
      <a href="#capital-gains"  class="tl" data-s="capital-gains"> <span class="tn">10</span>Capital Gains Tax Planning</a>
      <a href="#business"       class="tl" data-s="business">      <span class="tn">11</span>Tax Saving for Business Owners</a>
      <a href="#freelancers"    class="tl" data-s="freelancers">   <span class="tn">12</span>Tax Saving for Freelancers</a>
      <a href="#early-planning" class="tl" data-s="early-planning"><span class="tn">13</span>Plan Investments Early</a>
      <a href="#mistakes"       class="tl" data-s="mistakes">      <span class="tn">14</span>Common Tax Saving Mistakes</a>
      <a href="#why-us"         class="tl" data-s="why-us">        <span class="tn">15</span>Why The Tax Company</a>
      <div class="toc-div"></div>
      <a href="#faq"            class="tl" data-s="faq">           <span class="tn">—</span>FAQ</a>
    </nav>
    <div class="toc-cta-box">
      <p>Get expert help with tax planning</p>
      <button class="toc-cta-btn">📞 Book Free Consultation</button>
    </div>
  </aside>

  <!-- ════ MAIN CONTENT ════ -->
  <main class="main-col">

    <!-- ── INTRO ── -->
    <div class="sec" id="intro">
      <div class="panel">
        <p><strong>Saving income tax legally</strong> is one of the most important aspects of financial planning for individuals and businesses in India. The Income Tax Act provides several deductions, exemptions, and investment options that allow taxpayers to reduce their tax liability.</p>
        <p>This <strong>Ultimate Income Tax Saving Guide</strong> by The Tax Company explains the best tax-saving strategies, deductions under different sections, investment options, and planning tips to help taxpayers legally minimize their tax burden.</p>
      </div>
      <div class="hl-strip">
        <div class="hl-strip-ttl">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" viewBox="0 0 20 20"><use href="#I-shield"/></svg>
          What this guide covers
        </div>
        <div class="g3" style="margin-top:0">
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Section 80C investments</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Health insurance deductions</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Home loan tax benefits</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>NPS & retirement savings</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>HRA & LTA exemptions</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Capital gains planning</div>
        </div>
      </div>
      <div class="chips">
        <a href="#80c"           class="chip">Section 80C</a>
        <a href="#80d"           class="chip">Section 80D</a>
        <a href="#home-loan"     class="chip">Home Loan</a>
        <a href="#nps"           class="chip">NPS</a>
        <a href="#capital-gains" class="chip">Capital Gains</a>
        <a href="#faq"           class="chip">FAQ</a>
      </div>
    </div>

    <!-- ── 01 UNDERSTANDING TAX SAVING ── -->
    <div class="sec" id="understanding">
      <span class="s-lbl">Section 01</span>
      <h2 class="s-ttl">Understanding Income Tax Saving</h2>
      <div class="panel">
        <p><strong>Income tax saving</strong> involves reducing tax liability by using deductions, exemptions, and tax-saving investments allowed under Indian tax laws.</p>
        <p>Tax planning helps taxpayers:</p>
        <p>• Reduce tax payable<br>• Increase savings<br>• Improve financial planning<br>• Stay compliant with tax regulations</p>
        <p>Proper tax planning should always follow legal methods approved under the Income Tax Act.</p>
      </div>
    </div>

    <!-- ── 02 CHOOSE THE RIGHT TAX REGIME (TABS) ── -->
    <div class="sec" id="regime">
      <span class="s-lbl">Section 02 · Compare Regimes</span>
      <h2 class="s-ttl">Choose the Right Tax Regime</h2>
      <p class="s-desc">Taxpayers in India can choose between Old and New Tax Regime. Compare and choose the one that benefits you most.</p>
      
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-top:12px">
        <!-- Old Regime -->
        <div class="rcard" style="padding:16px">
          <span class="rcard-pct" style="font-size:20px; margin-bottom:12px">Old Tax Regime</span>
          <div style="font-size:11px; color:var(--ink-4); margin-bottom:8px">Allows multiple deductions and exemptions</div>
          <div style="margin-top:10px">
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>Up to ₹2,50,000</span><span style="font-weight:700">Nil</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹2,50,001 – ₹5,00,000</span><span style="font-weight:700">5%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹5,00,001 – ₹10,00,000</span><span style="font-weight:700">20%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0"><span>Above ₹10,00,000</span><span style="font-weight:700">30%</span></div>
          </div>
          <div style="margin-top:12px; padding-top:12px; border-top:1px solid var(--bd)">
            <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>80C, 80D, 80G deductions</div>
            <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>HRA exemption</div>
            <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Home loan interest deduction</div>
          </div>
        </div>
        
        <!-- New Regime -->
        <div class="rcard" style="padding:16px; border:2px solid var(--ink)">
          <span class="rcard-pct" style="font-size:20px; margin-bottom:12px">New Tax Regime</span>
          <div style="font-size:11px; color:var(--ink-4); margin-bottom:8px">Lower tax rates but fewer deductions</div>
          <div style="margin-top:10px">
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>Up to ₹3,00,000</span><span style="font-weight:700">Nil</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹3,00,001 – ₹6,00,000</span><span style="font-weight:700">5%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹6,00,001 – ₹9,00,000</span><span style="font-weight:700">10%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹9,00,001 – ₹12,00,000</span><span style="font-weight:700">15%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0; border-bottom:1px solid var(--bd)"><span>₹12,00,001 – ₹15,00,000</span><span style="font-weight:700">20%</span></div>
            <div style="display:flex; justify-content:space-between; padding:6px 0"><span>Above ₹15,00,000</span><span style="font-weight:700">30%</span></div>
          </div>
          <div style="margin-top:12px; padding-top:12px; border-top:1px solid var(--bd)">
            <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Standard deduction ₹50,000</div>
            <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>No most other deductions</div>
          </div>
        </div>
      </div>
      <p class="s-desc">Choosing the correct regime based on income and deductions can significantly reduce tax liability.</p>
    </div>

    <!-- ── 03 SECTION 80C – POPULAR DEDUCTIONS ── -->
    <div class="sec" id="80c">
      <span class="s-lbl">Section 03 · Save up to ₹1.5 Lakh</span>
      <h2 class="s-ttl">Section 80C – Most Popular Tax Saving Deduction</h2>
      <p class="s-desc">Section 80C allows deductions up to ₹1.5 lakh per financial year.</p>
      
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-ppf"/></svg></div>
          <div class="icard-t">Public Provident Fund (PPF)</div>
          <div class="icard-d">15-year lock-in, tax-free returns, government backed.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div>
          <div class="icard-t">Employee Provident Fund (EPF)</div>
          <div class="icard-d">Mandatory for salaried employees, employer contribution included.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-elss"/></svg></div>
          <div class="icard-t">ELSS Mutual Funds</div>
          <div class="icard-d">3-year lock-in, potential for high returns, tax-free dividends.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div>
          <div class="icard-t">National Savings Certificate (NSC)</div>
          <div class="icard-d">5-year lock-in, fixed returns, interest taxable.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-insurance"/></svg></div>
          <div class="icard-t">Life Insurance Premium</div>
          <div class="icard-d">Premium paid for self, spouse, children qualifies.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div>
          <div class="icard-t">Tax Saving Fixed Deposits</div>
          <div class="icard-d">5-year lock-in, fixed interest rates, TDS applicable.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-star"/></svg></div>
          <div class="icard-t">Sukanya Samriddhi Yojana</div>
          <div class="icard-d">For girl child, high interest rate, tax-free returns.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div>
          <div class="icard-t">Home Loan Principal</div>
          <div class="icard-d">Principal repayment of home loan eligible under 80C.</div>
        </div>
      </div>
      <p class="s-desc">These investments not only reduce tax but also help build long-term savings.</p>
    </div>

    <!-- ── 04 SECTION 80D – HEALTH INSURANCE ── -->
    <div class="sec" id="80d">
      <span class="s-lbl">Section 04 · Health Cover</span>
      <h2 class="s-ttl">Section 80D – Health Insurance Deduction</h2>
      <p class="s-desc">Taxpayers can claim deductions for health insurance premiums.</p>
      
      <div class="rate-strip" style="grid-template-columns:repeat(3,1fr)">
        <div class="rcard">
          <span class="rcard-pct">₹25k</span>
          <div class="rcard-lbl">Self & Family</div>
          <div class="rcard-d">For individuals below 60 years</div>
        </div>
        <div class="rcard">
          <span class="rcard-pct">₹50k</span>
          <div class="rcard-lbl">Senior Citizens</div>
          <div class="rcard-d">For self or parents above 60 years</div>
        </div>
        <div class="rcard">
          <span class="rcard-pct">₹75k+</span>
          <div class="rcard-lbl">Combined</div>
          <div class="rcard-d">Self + senior citizen parents</div>
        </div>
      </div>
      
      <div class="panel" style="margin-top:12px">
        <p><strong>Deduction limits include:</strong></p>
        <p>• ₹25,000 for individuals (self, spouse, children)<br>• Additional ₹25,000 for parents below 60 years<br>• Additional ₹50,000 for senior citizen parents<br>• ₹5,000 for preventive health check-ups (within overall limit)</p>
        <p>Health insurance protects finances and reduces tax liability.</p>
      </div>
    </div>

    <!-- ── 05 HOME LOAN TAX BENEFITS ── -->
    <div class="sec" id="home-loan">
      <span class="s-lbl">Section 05 · Property Benefits</span>
      <h2 class="s-ttl">Home Loan Tax Benefits</h2>
      <p class="s-desc">Home loan borrowers receive tax deductions on both principal and interest payments.</p>
      
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div>
          <div class="icard-t">Section 24 – Interest Deduction</div>
          <div class="icard-d">Interest deduction up to ₹2 lakh per year for self-occupied property.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div>
          <div class="icard-t">Section 80C – Principal Repayment</div>
          <div class="icard-d">Principal repayment deduction up to ₹1.5 lakh under 80C.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div>
          <div class="icard-t">Let-out Property</div>
          <div class="icard-d">Full interest deduction with no upper limit for rented property.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-ongoing"/></svg></div>
          <div class="icard-t">First-time Home Buyers</div>
          <div class="icard-d">Additional deduction under Section 80EEA up to ₹1.5 lakh.</div>
        </div>
      </div>
      <p class="s-desc">Home ownership can significantly reduce taxable income.</p>
    </div>

    <!-- ── 06 SECTION 80E – EDUCATION LOAN ── -->
    <div class="sec" id="80e">
      <span class="s-lbl">Section 06 · Education</span>
      <h2 class="s-ttl">Section 80E – Education Loan Deduction</h2>
      <div class="panel">
        <p>Interest paid on education loans qualifies for deduction under Section 80E.</p>
        <p><strong>Key benefits include:</strong></p>
        <p>• No maximum deduction limit<br>• Available for higher education loans for self, spouse, children<br>• Deduction allowed for up to 8 years from loan start</p>
      </div>
    </div>

    <!-- ── 07 HRA EXEMPTION ── -->
    <div class="sec" id="hra">
      <span class="s-lbl">Section 07 · Rental Benefits</span>
      <h2 class="s-ttl">House Rent Allowance (HRA) Exemption</h2>
      <p class="s-desc">Salaried employees receiving HRA can claim tax exemption.</p>
      
      <div class="g3">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div>
          <div class="icard-t">Actual HRA Received</div>
          <div class="icard-d">50% of salary for metro cities, 40% for non-metros</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-pay"/></svg></div>
          <div class="icard-t">Rent Paid - 10% of Salary</div>
          <div class="icard-d">Excess of rent paid over 10% of salary</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-map"/></svg></div>
          <div class="icard-t">City Factor</div>
          <div class="icard-d">50% for Mumbai, Delhi, Chennai, Kolkata; 40% for others</div>
        </div>
      </div>
      <p class="s-desc">HRA exemption reduces taxable salary for those living in rented accommodation.</p>
    </div>

    <!-- ── 08 LEAVE TRAVEL ALLOWANCE ── -->
    <div class="sec" id="lta">
      <span class="s-lbl">Section 08 · Travel Benefits</span>
      <h2 class="s-ttl">Leave Travel Allowance (LTA)</h2>
      <div class="panel">
        <p>Employees can claim tax exemption on travel expenses within India.</p>
        <p><strong>Key conditions:</strong></p>
        <p>• Travel must be within India<br>• Available for two journeys in a block of four years<br>• Only actual fare expenses qualify (air, train, bus)</p>
      </div>
    </div>

    <!-- ── 09 NPS TAX BENEFITS (KB) ── -->
    <div class="sec" id="nps">
      <span class="s-lbl">Section 09 · Retirement Savings</span>
      <h2 class="s-ttl">National Pension System (NPS) Tax Benefits</h2>
      <p class="s-desc">Contributions to NPS offer additional tax deductions.</p>
      
      <div class="g2" style="margin-bottom:12px">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-nps"/></svg></div>
          <div class="icard-t">Section 80CCD(1)</div>
          <div class="icard-d">Employee contribution up to 10% of salary under 80C limit</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-nps"/></svg></div>
          <div class="icard-t">Section 80CCD(1B)</div>
          <div class="icard-d"><strong>Additional deduction up to ₹50,000 beyond 80C</strong></div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div>
          <div class="icard-t">Section 80CCD(2)</div>
          <div class="icard-d">Employer contribution up to 10% of salary (14% for central govt)</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg></div>
          <div class="icard-t">Retirement Planning</div>
          <div class="icard-d">Market-linked returns, partial withdrawal allowed</div>
        </div>
      </div>
      <p class="s-desc">NPS helps in retirement planning while reducing tax liability significantly.</p>
    </div>

    <!-- ── 10 CAPITAL GAINS TAX PLANNING ── -->
    <div class="sec" id="capital-gains">
      <span class="s-lbl">Section 10 · Investment Gains</span>
      <h2 class="s-ttl">Capital Gains Tax Planning</h2>
      <p class="s-desc">Proper planning can reduce tax on capital gains from property, stocks, and mutual funds.</p>
      
      <div class="kb-stack">
        <div class="kb" id="kb1">
          <div class="kb-hd" onclick="toggleKB('kb1')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div>
              <div><div class="kb-t">Section 54 – Property Sale</div><div class="kb-s">Exemption on sale of residential house</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Invest capital gains in another residential property</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Purchase 1 year before or 2 years after sale</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Construct within 3 years</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb2">
          <div class="kb-hd" onclick="toggleKB('kb2')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div>
              <div><div class="kb-t">Section 54EC – Capital Gain Bonds</div><div class="kb-s">Invest in specified bonds</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Invest in NHAI or REC bonds</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Maximum investment ₹50 lakh</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Lock-in period of 5 years</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb3">
          <div class="kb-hd" onclick="toggleKB('kb3')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-chart"/></svg></div>
              <div><div class="kb-t">Long-term vs Short-term</div><div class="kb-s">Different tax rates apply</div></div>
            </div>
            <div class="kb-body"><div class="kb-in">
              <ul>
                <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Long-term equity: 10% above ₹1 lakh</li>
                <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Short-term equity: 15%</li>
                <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Long-term other assets: 20% with indexation</li>
              </ul>
            </div></div>
        </div>
      </div>
    </div>

    <!-- ── 11 TAX SAVING FOR BUSINESS OWNERS ── -->
    <div class="sec" id="business">
      <span class="s-lbl">Section 11 · Business</span>
      <h2 class="s-ttl">Tax Saving for Business Owners</h2>
      <p class="s-desc">Business owners can reduce taxable income by claiming legitimate business expenses.</p>
      
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div><div class="icard-t">Office Rent</div><div class="icard-d">Deductible business expense</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-id"/></svg></div><div class="icard-t">Employee Salaries</div><div class="icard-d">Fully deductible with TDS compliance</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-plane"/></svg></div><div class="icard-t">Business Travel</div><div class="icard-d">Domestic and international travel expenses</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-tools"/></svg></div><div class="icard-t">Equipment Purchase</div><div class="icard-d">Depreciation on assets</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-advisory"/></svg></div><div class="icard-t">Professional Services</div><div class="icard-d">Legal, accounting, consulting fees</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div><div class="icard-t">Insurance Premiums</div><div class="icard-d">Business insurance deductible</div></div>
      </div>
      <p class="s-desc">Maintaining accurate financial records ensures proper tax benefits.</p>
    </div>

    <!-- ── 12 TAX SAVING FOR FREELANCERS ── -->
    <div class="sec" id="freelancers">
      <span class="s-lbl">Section 12 · Freelancers</span>
      <h2 class="s-ttl">Tax Saving for Freelancers & Professionals</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-code"/></svg></div><div class="icard-t">Internet & Software</div><div class="icard-d">Monthly bills, software subscriptions</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-tools"/></svg></div><div class="icard-t">Work Equipment</div><div class="icard-d">Laptop, phone, camera, accessories</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div><div class="icard-t">Office Space</div><div class="icard-d">Home office or coworking space rent</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-chart"/></svg></div><div class="icard-t">Marketing Expenses</div><div class="icard-d">Advertising, website, social media</div></div>
      </div>
      
      <div class="panel" style="margin-top:12px">
        <p><strong>Presumptive Taxation (Section 44ADA)</strong></p>
        <p>Eligible professionals can declare 50% of gross receipts as income, simplifying tax compliance for income up to ₹50 lakh.</p>
      </div>
    </div>

    <!-- ── 13 PLAN INVESTMENTS EARLY ── -->
    <div class="sec" id="early-planning">
      <span class="s-lbl">Section 13 · Smart Planning</span>
      <h2 class="s-ttl">Plan Investments Early</h2>
      <div class="panel">
        <p>Many taxpayers rush to invest at the end of the financial year.</p>
        <p><strong>Better strategy:</strong></p>
        <p>• Plan tax investments at the beginning of the year<br>• Diversify tax-saving investments<br>• Align investments with financial goals<br>• Benefit from compounding over time</p>
        <p>Early planning maximizes tax benefits and long-term wealth creation.</p>
      </div>
    </div>

    <!-- ── 14 COMMON TAX SAVING MISTAKES ── -->
    <div class="sec" id="mistakes">
      <span class="s-lbl">Section 14 · Avoid These</span>
      <h2 class="s-ttl">Common Tax Saving Mistakes</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Wrong Tax Regime</div><div class="icard-d">Choosing regime without comparing benefits</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Last-Minute Investing</div><div class="icard-d">Rushing investments without proper planning</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Missing Deductions</div><div class="icard-d">Not claiming eligible 80C, 80D, 80G deductions</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Incorrect Calculations</div><div class="icard-d">Errors in tax liability computation</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Not Keeping Proofs</div><div class="icard-d">Missing investment proofs for verification</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Ignoring Exemptions</div><div class="icard-d">HRA, LTA, and other allowances not claimed</div></div>
      </div>
    </div>

    <!-- ── 15 WHY THE TAX COMPANY ── -->
    <div class="sec" id="why-us">
      <span class="s-lbl">Section 15 · Expert Help</span>
      <h2 class="s-ttl">Why Choose The Tax Company for Tax Planning?</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-advisory"/></svg></div><div class="icard-t">Expert Tax Consultation</div><div class="icard-d">Professional guidance on tax saving strategies</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div><div class="icard-t">Income Tax Filing</div><div class="icard-d">Accurate filing with all deductions claimed</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg></div><div class="icard-t">Financial Planning</div><div class="icard-d">Holistic tax and investment planning</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg></div><div class="icard-t">Compliance Support</div><div class="icard-d">Assistance with notices and assessments</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-ongoing"/></svg></div><div class="icard-t">Year-round Support</div><div class="icard-d">Tax advice throughout the year</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-max"/></svg></div><div class="icard-t">Maximum Savings</div><div class="icard-d">Identify all legal tax saving opportunities</div></div>
      </div>
    </div>

    <!-- ── FAQ ── -->
    <div class="sec" id="faq">
      <span class="s-lbl">FAQ</span>
      <h2 class="s-ttl">Frequently Asked Questions</h2>
      <div class="faq-wrap">
        <div class="faq open" id="f1">
          <button class="faq-q" onclick="toggleFaq('f1')"><span>How can I legally save income tax in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">You can legally save income tax by using deductions, exemptions, and tax-saving investments allowed under the Income Tax Act. Common methods include investing under Section 80C, claiming health insurance deductions under Section 80D, and using home loan tax benefits.</div></div>
        </div>
        <div class="faq" id="f2">
          <button class="faq-q" onclick="toggleFaq('f2')"><span>What are the best tax saving investments in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Some of the most popular tax-saving investments include: Public Provident Fund (PPF), Equity Linked Savings Scheme (ELSS), National Pension System (NPS), Life Insurance Premium, Tax Saving Fixed Deposits, and Sukanya Samriddhi Yojana. These investments help reduce taxable income while building long-term savings.</div></div>
        </div>
        <div class="faq" id="f3">
          <button class="faq-q" onclick="toggleFaq('f3')"><span>What is Section 80C deduction?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Section 80C allows taxpayers to claim deductions up to ₹1.5 lakh per financial year for certain investments and expenses such as PPF, ELSS, EPF, life insurance premiums, and principal repayment of home loans.</div></div>
        </div>
        <div class="faq" id="f4">
          <button class="faq-q" onclick="toggleFaq('f4')"><span>What is the tax benefit under Section 80D?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Section 80D allows deductions for health insurance premiums paid for yourself, your spouse, children, and parents. The deduction limit can go up to ₹50,000 for senior citizens.</div></div>
        </div>
        <div class="faq" id="f5">
          <button class="faq-q" onclick="toggleFaq('f5')"><span>What are the tax benefits of a home loan?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Home loan borrowers can claim tax deductions on both principal and interest payments. Section 80C allows deduction for principal repayment up to ₹1.5 lakh, while Section 24 allows interest deduction up to ₹2 lakh for self-occupied property.</div></div>
        </div>
        <div class="faq-hidden" style="display:none">
          <div class="faq" id="f6">
            <button class="faq-q" onclick="toggleFaq('f6')"><span>What is the difference between the old tax regime and the new tax regime?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">The old tax regime allows taxpayers to claim several deductions and exemptions, while the new tax regime offers lower tax rates but removes most deductions. Taxpayers can choose the regime that provides the best tax benefit.</div></div>
          </div>
          <div class="faq" id="f7">
            <button class="faq-q" onclick="toggleFaq('f7')"><span>Can freelancers and self-employed individuals save income tax?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes, freelancers and self-employed professionals can reduce taxable income by claiming legitimate business expenses such as office rent, internet costs, equipment purchases, and professional services. They may also benefit from presumptive taxation under Section 44ADA.</div></div>
          </div>
          <div class="faq" id="f8">
            <button class="faq-q" onclick="toggleFaq('f8')"><span>What is presumptive taxation for small businesses?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Presumptive taxation allows eligible small businesses and professionals to pay tax based on a fixed percentage of turnover instead of maintaining detailed accounting records. This simplifies tax compliance.</div></div>
          </div>
          <div class="faq" id="f9">
            <button class="faq-q" onclick="toggleFaq('f9')"><span>What is the tax benefit of the National Pension System (NPS)?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">NPS offers additional tax deductions under Section 80CCD(1B), allowing taxpayers to claim an extra deduction of ₹50,000 beyond the ₹1.5 lakh limit under Section 80C. Employer contributions also qualify for deduction.</div></div>
          </div>
          <div class="faq" id="f10">
            <button class="faq-q" onclick="toggleFaq('f10')"><span>What is HRA tax exemption?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">House Rent Allowance (HRA) is a salary component that allows salaried employees to claim tax exemption on rent paid for accommodation, subject to certain conditions and calculations based on salary, rent paid, and city of residence.</div></div>
          </div>
          <div class="faq" id="f11">
            <button class="faq-q" onclick="toggleFaq('f11')"><span>What is capital gains tax and how can it be reduced?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Capital gains tax applies to profits earned from selling assets such as property, stocks, or mutual funds. Tax liability can be reduced by investing in eligible assets under Section 54 (property) or Section 54EC (bonds), or by holding assets for the long term to benefit from indexation.</div></div>
          </div>
          <div class="faq" id="f12">
            <button class="faq-q" onclick="toggleFaq('f12')"><span>When should I start tax planning for the financial year?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Tax planning should ideally start at the beginning of the financial year rather than at the end. Early planning allows better investment decisions, diversification, and avoids last-minute financial pressure.</div></div>
          </div>
          <div class="faq" id="f13">
            <button class="faq-q" onclick="toggleFaq('f13')"><span>What are common mistakes people make while saving income tax?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Common tax-saving mistakes include waiting until the end of the financial year to invest, choosing investments only for tax saving without financial planning, missing eligible deductions, selecting the wrong tax regime, and not keeping investment proofs. Proper tax planning can help avoid these errors.</div></div>
          </div>
          <div class="faq" id="f14">
            <button class="faq-q" onclick="toggleFaq('f14')"><span>Why is professional tax planning important?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Professional tax planning helps ensure accurate compliance with tax laws, identify all eligible deductions, reduce tax liability legally, and improve overall financial planning. Experts can also help with investment selection aligned with financial goals.</div></div>
          </div>
          <div class="faq" id="f15">
            <button class="faq-q" onclick="toggleFaq('f15')"><span>How can The Tax Company help with income tax saving strategies?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">The Tax Company provides expert support for individuals and businesses including income tax filing services, tax planning consultation, tax saving advisory, financial compliance guidance, and professional tax support. Our experts help taxpayers maximize tax savings while ensuring full legal compliance.</div></div>
          </div>
        </div>
      </div>
      <button class="faq-view-more" onclick="toggleMoreFAQs(this)">View More</button>
    </div>

    <!-- RELATED GUIDES -->
    <div class="sec" style="border-bottom:none">
      <span class="s-lbl">Knowledge Center</span>
      <h2 class="s-ttl">Income Tax Saving Strategies – Resources & Knowledge Center</h2>
      <div class="guide-grid">
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-book"/></svg>Guide</div><h4>Section 80C Complete Guide: Investments & Deductions</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-compare"/></svg>Comparison</div><h4>Old vs New Tax Regime – Which is Better for You?</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-chklist"/></svg>Checklist</div><h4>NPS Tax Benefits & Retirement Planning Guide</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-itc"/></svg>Freelancers</div><h4>Tax Saving Guide for Freelancers & Self-Employed</div><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg>Property</div><h4>Home Loan Tax Benefits – Section 24 & 80C</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-penalty"/></svg>Capital Gains</div><h4>Capital Gains Tax Exemptions – Section 54, 54EC</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
      </div>
    </div>

  </main>

  <!-- ════ RIGHT SIDEBAR ════ -->
  <aside class="right-col">
    <div class="r-card">
      <h5>Guide Information</h5>
      <div class="r-row"><span>Reading time</span><span>14 minutes</span></div>
      <div class="r-row"><span>Difficulty</span><span>Beginner to Intermediate</span></div>
      <div class="r-row"><span>Updated</span><span>Jan 2026</span></div>
      <div class="r-row"><span>Sections</span><span>15 + FAQ</span></div>
      <div class="r-row"><span>Reviewed by</span><span>CA Expert</span></div>
    </div>
    <div class="r-card">
      <h5>Quick Actions</h5>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-dl-arr"/></svg>Download PDF</a>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-share"/></svg>Share this guide</a>
      <a href="#process" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-filing"/></svg>File Your ITR</a>
    </div>
    <button class="r-cta">📞 Book Tax Consultation</button>
    <button class="r-cta-g">Talk to a Tax Expert</button>
    <div class="r-card" style="margin-top:14px">
      <h5>Quick Facts</h5>
      <div class="r-row"><span>80C limit</span><span>₹1.5 lakh</span></div>
      <div class="r-row"><span>80D limit (self)</span><span>₹25,000</span></div>
      <div class="r-row"><span>80D (senior)</span><span>₹50,000</span></div>
      <div class="r-row"><span>Home loan interest</span><span>₹2 lakh</span></div>
      <div class="r-row"><span>NPS additional</span><span>₹50,000</span></div>
      <div class="r-row"><span>Standard deduction</span><span>₹50,000</span></div>
      <div class="r-row"><span>HRA exemption</span><span>50%/40% of salary</span></div>
    </div>
  </aside>

</div><!-- /.doc-wrap -->

<!-- ══ CTA SECTION ══ -->
<div class="cta">
  <h3>Want to Save More Income Tax?</h3>
  <p>Speak with our tax experts to optimize your tax planning and maximize savings.</p>
  <div class="cta-btns">
    <button class="btn-w">📞 Book Tax Consultation</button>
    <button class="btn-g">Get Tax Planning Support</button>
  </div>
</div>

<footer>
  © 2026 The Tax Company · <b>Income Tax Saving Guide</b> · All rights reserved
</footer>

<script>
/* ── PROGRESS BAR ── */
window.addEventListener('scroll',()=>{
  const st=document.documentElement.scrollTop;
  const sh=document.documentElement.scrollHeight-document.documentElement.clientHeight;
  document.getElementById('pbar').style.width=(st/sh*100)+'%';
});

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
</script>

@endsection