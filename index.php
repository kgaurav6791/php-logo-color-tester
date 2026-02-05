<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Logo Color Tester</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      margin: 24px;
      color: #111;
    }

    .wrap {
      max-width: 1200px;
      margin: 0 auto;
    }

    .grid {
      display: grid;
      grid-template-columns: 380px 1fr;
      gap: 18px;
      align-items: start;
    }

    .card {
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 14px;
      background: #fff;
    }

    .row {
      display: flex;
      gap: 10px;
      align-items: center;
      flex-wrap: wrap;
    }

    label {
      font-size: 13px;
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    input[type="color"] {
      width: 44px;
      height: 34px;
      padding: 0;
      border: 1px solid #ccc;
      border-radius: 10px;
      background: #fff;
    }

    input[type="range"] {
      width: 100%;
    }

    input[type="number"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    select {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    button {
      padding: 10px 12px;
      border: 1px solid #ccc;
      background: #f6f6f6;
      border-radius: 10px;
      cursor: pointer;
    }

    button.primary {
      background: #111;
      color: #fff;
      border-color: #111;
    }

    .muted {
      color: #666;
      font-size: 13px;
    }

    .warn {
      color: #b00020;
    }

    .ok {
      color: #0a7b34;
    }

    .previewBox {
      border: 1px dashed #ccc;
      border-radius: 12px;
      padding: 12px;
      background: #fafafa;
    }

    .swatches {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    .swatch {
      width: 26px;
      height: 26px;
      border-radius: 8px;
      border: 1px solid rgba(0, 0, 0, .15);
      cursor: pointer;
    }

    .kpi {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 10px;
    }

    .kpi>div {
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 10px;
      background: #fff;
    }

    .kpi b {
      display: block;
      font-size: 14px;
    }

    .kpi span {
      color: #555;
      font-size: 13px;
    }

    /* ===== Header Mock ===== */
    #headerMockWrap {
      border: 1px solid #e6e6e6;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
      background: #fff;
    }

    #headerMock {
      color: #000;
    }

    #headerMock .header-bar {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 10px 16px;
      flex-wrap: nowrap;
    }

    #headerMock #site-logo {
      display: flex;
      align-items: center;
      flex: 0 0 auto;
    }

    #headerMock #site-logo a.logo-link {
      display: inline-flex;
      align-items: center;
      text-decoration: none;
      gap: 0px;
      flex-wrap: nowrap;
      white-space: nowrap;
    }

    #headerMock #iconCanvas {
      display: block;
      border: none;
      background: transparent;
      position: relative;
      top: -3px;
      width: 93px !important;
      height: 75px !important;
    }

    #headerMock .site-title {
      color: rgb(85, 85, 85);
      font-family: "Playfair Display", serif;
      font-style: normal !important;
      font-size: 18px !important;
      font-weight: 700 !important;
      letter-spacing: 0.1em;
      font-variant: small-caps;
      transform: translate(2px, 4px) scaleX(0.88);
      position: relative;
      top: -4px !important;
      left: -12px;
    }

    #headerMock #main-nav-wrap {
      align-items: center;
      display: flex;
      justify-content: end;
      flex: 1 1 auto;
      padding-right: 1em;
      overflow-x: auto;
      overflow-y: hidden;
      min-width: 0;
      position: relative;
      top: 1px;
    }

    #headerMock #main-nav-wrap::-webkit-scrollbar {
      height: 6px;
    }

    #headerMock #main-nav-wrap::-webkit-scrollbar-thumb {
      background: rgba(0, 0, 0, 0.15);
      border-radius: 10px;
    }

    #headerMock #main-nav {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      flex-wrap: nowrap;
      white-space: nowrap;
    }

    #headerMock #main-nav li {
      display: inline-block;
      list-style: none;
      position: relative;
      margin: 0;
      padding: 0;
      flex: 0 0 auto;
    }

    #headerMock #main-nav a {
      color: inherit;
      display: block;
      text-decoration: none;
      position: relative;
      font-size: .875em;
      font-weight: 600;
      letter-spacing: .1em;
      text-transform: uppercase;
      margin: 0 .7em;
      padding: .975em .1em;
      transition: color .2s ease-in-out;
    }

    #headerMock #main-nav a:hover {
      opacity: .75;
    }

    #headerMock .search-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 10px;
      text-decoration: none;
      flex: 0 0 auto;
    }

    #headerMock .search-button svg {
      fill: #000;
    }

    #headerMock .search-button:hover svg {
      opacity: .75;
    }
  </style>
</head>

<body>
  <div class="wrap">
    <h2 style="margin:0 0 6px;">Logo Color Tester</h2>
    <div class="muted">Using fixed file <code>uploads/logo.jpeg</code>. Pick icon & text colors separately. Preview inside a header bar. Download PNG.</div>

    <div class="card" style="margin-top:16px;">
      <div class="previewBox">
        <div class="row" style="justify-content:space-between;">
          <div>
            <b>Header Preview</b><br />
            <!--             <small class="muted">Icon canvas + real text span + nav + search (one row, scrolls if tight).</small>
 -->
          </div>
          <div class="muted" id="status"></div>
        </div>

        <div id="headerMockWrap" style="margin-top:12px;">
          <header id="headerMock" class="tf_box pagewidth tf_clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <div class="header-bar tf_box">
              <div id="site-logo">
                <a href="#" title="New Democracy" class="logo-link">
                  <canvas id="iconCanvas"></canvas>
                  <span id="siteTitle" class="site-title">NEW DEMOCRACY</span>
                </a>
              </div>

              <nav id="main-nav-wrap" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" aria-label="Main menu">
                <ul id="main-nav" class="main-nav tf_clearfix tf_box">
                  <li><a href="#">POLITICS</a></li>
                  <li><a href="#">ELECTIONS</a></li>
                  <li><a href="#">OPINIONS</a></li>
                  <li><a href="#">INTERVIEWS</a></li>
                  <li><a href="#">EXPLAINERS</a></li>
                  <li><a href="#">MONTHLY ISSUE</a></li>
                </ul>
              </nav>

              <a class="search-button tf_search_icon" href="#" aria-label="Search">
                <svg viewBox="0 0 24 24" width="22" height="22" role="img" aria-hidden="true">
                  <path d="M10.5 3a7.5 7.5 0 105.02 13.07l3.2 3.2a1 1 0 001.42-1.42l-3.2-3.2A7.5 7.5 0 0010.5 3zm0 2a5.5 5.5 0 110 11 5.5 5.5 0 010-11z"></path>
                </svg>
              </a>
            </div>
          </header>
        </div>

        <div style="margin-top:14px;">
          <b>Contrast check vs background</b>
          <div class="kpi" style="margin-top:10px;">
            <div><b>Icon vs Background</b><span id="imgContrast">—</span></div>
            <div><b>Text vs Background</b><span id="textContrast">—</span></div>
            <div><b>Notes</b><span id="notes">—</span></div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid" style="margin-top:16px;">
      <div class="card">
        <form>
          <div style="display:grid; gap:10px;">

            <!-- Hidden image source for JS -->
            <img id="srcImg" src="./uploads/logo.jpeg" alt="source"
              style="position:absolute; left:-99999px; top:-99999px; width:1px; height:1px; opacity:0;" />

            <div>
              <label><b>Text</b></label>
              <input id="logoText" type="text" value="New Democracy" />
            </div>

            <div class="row" style="justify-content:space-between;">
              <div style="min-width:160px;">
                <label><b>Icon color</b></label><br />
                <input id="imgColor" type="color" value="#111111" />
                <small class="muted" id="imgHex">#111111</small>
              </div>

              <div style="min-width:160px;">
                <label><b>Text color</b></label><br />
                <input id="textColor" type="color" value="#555555" />
                <small class="muted" id="textHex">#555555</small>
              </div>

              <div style="min-width:160px;">
                <label><b>Header background</b></label><br />
                <input id="bgColor" type="color" value="#ffffff" />
                <small class="muted" id="bgHex">#ffffff</small>
              </div>
            </div>

            <!--             <div>
              <label><b>Threshold</b> (separates white background from ink)</label>
              <input id="threshold" type="range" min="150" max="255" value="240" />
              <small class="muted">Raise if background tints. Lower if fine edges disappear.</small>
            </div> -->

            <hr style="border:none;border-top:1px solid #eee; margin:10px 0;">

            <div style="display:grid; gap:10px;">
              <div><b>Icon size (independent)</b></div>
              <div class="row" style="justify-content:space-between;">
                <div style="min-width:160px;">
                  <label>Icon width (px)</label><br />
                  <input id="iconW" type="number" value="100" min="20" max="600" step="1" style="width:120px;">
                </div>
                <div style="min-width:160px;">
                  <label>Icon height (px)</label><br />
                  <input id="iconH" type="number" value="70" min="20" max="300" step="1" style="width:120px;">
                </div>
              </div>
            </div>

            <hr style="border:none;border-top:1px solid #eee; margin:10px 0;">

            <div style="display:grid; gap:10px;">
              <div><b>Text styling</b></div>

              <div class="row" style="justify-content:space-between;">
                <div style="min-width:220px;">
                  <label>Font family</label><br />
                  <select id="textFontFamily">
                    <option value='"Playfair Display", serif' selected>Playfair Display</option>
                    <option value='system-ui, -apple-system, Segoe UI, Roboto, Arial'>System UI</option>
                    <option value='Georgia, serif'>Georgia</option>
                  </select>
                </div>

                <div style="min-width:160px;">
                  <label>Font style</label><br />
                  <select id="textFontStyle">
                    <option value="normal" selected>Normal</option>
                    <option value="italic">Italic</option>
                  </select>
                </div>
              </div>

              <div class="row" style="justify-content:space-between;">
                <div style="min-width:160px;">
                  <label>Font size (px)</label><br />
                  <input id="textFontSize" type="number" value="24" min="8" max="120" step="1" style="width:120px;">
                </div>

                <div style="min-width:160px;">
                  <label>Font weight</label><br />
                  <input id="textFontWeight" type="number" value="700" min="100" max="900" step="100" style="width:120px;">
                </div>
              </div>
            </div>

            <div class="row" style="margin-top:6px;">
              <button class="primary" id="downloadBtn" type="button">Download PNG</button>
            </div>

            <div>
              <label><b>Quick suggestions</b> (click to set text color)</label>
              <div class="swatches" id="suggestions"></div>
              <small class="muted">Harmony suggestions based on icon color (still check contrast).</small>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    (function() {
      function init() {
        const imgEl = document.getElementById('srcImg');

        const imgColorEl = document.getElementById('imgColor');
        const textColorEl = document.getElementById('textColor');
        const bgColorEl = document.getElementById('bgColor');
        const thresholdEl = document.getElementById('threshold'); // may be null if cached HTML differs
        const textEl = document.getElementById('logoText');

        const iconCanvas = document.getElementById('iconCanvas');
        const siteTitle = document.getElementById('siteTitle');
        const headerMockWrap = document.getElementById('headerMockWrap');

        const iconWEl = document.getElementById('iconW');
        const iconHEl = document.getElementById('iconH');

        const textFontFamilyEl = document.getElementById('textFontFamily');
        const textFontStyleEl = document.getElementById('textFontStyle');
        const textFontSizeEl = document.getElementById('textFontSize');
        const textFontWeightEl = document.getElementById('textFontWeight');

        const imgHex = document.getElementById('imgHex');
        const textHex = document.getElementById('textHex');
        const bgHex = document.getElementById('bgHex');

        const statusEl = document.getElementById('status');
        const imgContrastEl = document.getElementById('imgContrast');
        const textContrastEl = document.getElementById('textContrast');
        const notesEl = document.getElementById('notes');

        const suggestionsEl = document.getElementById('suggestions');
        const downloadBtn = document.getElementById('downloadBtn');

        // Keep export close to preview (since we removed the controls for these)
        const DEFAULT_LETTER_SPACING_EM = 0.10;
        const DEFAULT_SCALE_X = 0.88;
        const DEFAULT_OFF_X = 2;
        const DEFAULT_OFF_Y = 4;

        // ---- tiny safety check (prevents null crashes) ----
        const required = [
          ['srcImg', imgEl],
          ['imgColor', imgColorEl],
          ['textColor', textColorEl],
          ['bgColor', bgColorEl],
          ['logoText', textEl],
          ['iconCanvas', iconCanvas],
          ['siteTitle', siteTitle],
          ['headerMockWrap', headerMockWrap],
          ['iconW', iconWEl],
          ['iconH', iconHEl],
          ['textFontFamily', textFontFamilyEl],
          ['textFontStyle', textFontStyleEl],
          ['textFontSize', textFontSizeEl],
          ['textFontWeight', textFontWeightEl],
          ['imgHex', imgHex],
          ['textHex', textHex],
          ['bgHex', bgHex],
          ['status', statusEl],
          ['imgContrast', imgContrastEl],
          ['textContrast', textContrastEl],
          ['notes', notesEl],
          ['suggestions', suggestionsEl],
          ['downloadBtn', downloadBtn],
        ];
        const missing = required.filter(([, el]) => !el).map(([id]) => id);
        if (missing.length) {
          console.error('Missing required elements:', missing);
          if (statusEl) statusEl.textContent = 'UI missing: ' + missing.join(', ');
          return;
        }

        // --- Color math ---
        function hexToRgb(hex) {
          const m = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
          if (!m) return {
            r: 0,
            g: 0,
            b: 0
          };
          return {
            r: parseInt(m[1], 16),
            g: parseInt(m[2], 16),
            b: parseInt(m[3], 16)
          };
        }

        function srgbToLin(c) {
          c = c / 255;
          return (c <= 0.04045) ? (c / 12.92) : Math.pow((c + 0.055) / 1.055, 2.4);
        }

        function relLuminance(hex) {
          const {
            r,
            g,
            b
          } = hexToRgb(hex);
          const R = srgbToLin(r),
            G = srgbToLin(g),
            B = srgbToLin(b);
          return 0.2126 * R + 0.7152 * G + 0.0722 * B;
        }

        function contrastRatio(hex1, hex2) {
          const L1 = relLuminance(hex1);
          const L2 = relLuminance(hex2);
          const lighter = Math.max(L1, L2),
            darker = Math.min(L1, L2);
          return (lighter + 0.05) / (darker + 0.05);
        }

        // --- HSL helpers ---
        function rgbToHsl(r, g, b) {
          r /= 255;
          g /= 255;
          b /= 255;
          const max = Math.max(r, g, b),
            min = Math.min(r, g, b);
          let h, s, l = (max + min) / 2;
          if (max === min) {
            h = s = 0;
          } else {
            const d = max - min;
            s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
            switch (max) {
              case r:
                h = (g - b) / d + (g < b ? 6 : 0);
                break;
              case g:
                h = (b - r) / d + 2;
                break;
              case b:
                h = (r - g) / d + 4;
                break;
            }
            h /= 6;
          }
          return {
            h: h * 360,
            s,
            l
          };
        }

        function hslToRgb(h, s, l) {
          h /= 360;
          let r, g, b;
          if (s === 0) r = g = b = l;
          else {
            const hue2rgb = (p, q, t) => {
              if (t < 0) t += 1;
              if (t > 1) t -= 1;
              if (t < 1 / 6) return p + (q - p) * 6 * t;
              if (t < 1 / 2) return q;
              if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
              return p;
            };
            const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
            const p = 2 * l - q;
            r = hue2rgb(p, q, h + 1 / 3);
            g = hue2rgb(p, q, h);
            b = hue2rgb(p, q, h - 1 / 3);
          }
          return {
            r: Math.round(r * 255),
            g: Math.round(g * 255),
            b: Math.round(b * 255)
          };
        }

        function rgbToHex({
          r,
          g,
          b
        }) {
          const to = (n) => n.toString(16).padStart(2, '0');
          return `#${to(r)}${to(g)}${to(b)}`;
        }

        function rotateHue(hex, degrees) {
          const {
            r,
            g,
            b
          } = hexToRgb(hex);
          const hsl = rgbToHsl(r, g, b);
          hsl.h = (hsl.h + degrees) % 360;
          if (hsl.h < 0) hsl.h += 360;
          return rgbToHex(hslToRgb(hsl.h, hsl.s, hsl.l));
        }

        function clamp01(x) {
          return Math.max(0, Math.min(1, x));
        }

        function tweakLightness(hex, delta) {
          const {
            r,
            g,
            b
          } = hexToRgb(hex);
          const hsl = rgbToHsl(r, g, b);
          hsl.l = clamp01(hsl.l + delta);
          return rgbToHex(hslToRgb(hsl.h, hsl.s, hsl.l));
        }

        function buildSuggestions(baseHex) {
          const list = [
            rotateHue(baseHex, 180),
            rotateHue(baseHex, 150),
            rotateHue(baseHex, 210),
            rotateHue(baseHex, 120),
            rotateHue(baseHex, 240),
            rotateHue(baseHex, 30),
            rotateHue(baseHex, -30),
            tweakLightness(baseHex, -0.25),
            tweakLightness(baseHex, +0.25),
          ];
          return [...new Set(list.map(x => x.toLowerCase()))];
        }

        function renderSuggestions() {
          const base = imgColorEl.value;
          const s = buildSuggestions(base);
          suggestionsEl.innerHTML = '';
          s.forEach(hex => {
            const div = document.createElement('div');
            div.className = 'swatch';
            div.style.background = hex;
            div.title = `Set text to ${hex}`;
            div.addEventListener('click', () => {
              textColorEl.value = hex;
              syncHexLabels();
              draw();
            });
            suggestionsEl.appendChild(div);
          });
        }

        function syncHexLabels() {
          imgHex.textContent = imgColorEl.value.toLowerCase();
          textHex.textContent = textColorEl.value.toLowerCase();
          bgHex.textContent = bgColorEl.value.toLowerCase();
        }

        function makeRecoloredBitmap(img, colorHex, threshold) {
          const {
            r: tr,
            g: tg,
            b: tb
          } = hexToRgb(colorHex);
          const w = img.naturalWidth || img.width;
          const h = img.naturalHeight || img.height;

          const tmp = document.createElement('canvas');
          tmp.width = w;
          tmp.height = h;
          const ctx = tmp.getContext('2d', {
            willReadFrequently: true
          });
          ctx.drawImage(img, 0, 0);

          const imgData = ctx.getImageData(0, 0, w, h);
          const d = imgData.data;

          for (let i = 0; i < d.length; i += 4) {
            const r = d[i],
              g = d[i + 1],
              b = d[i + 2],
              a = d[i + 3];
            if (a === 0) continue;

            const lum = 0.2126 * r + 0.7152 * g + 0.0722 * b;

            if (lum >= threshold) {
              d[i + 3] = 0;
              continue;
            }

            const alpha = Math.max(0, Math.min(255, Math.round(255 * (1 - (lum / 255)))));
            if (alpha < 4) {
              d[i + 3] = 0;
              continue;
            }

            d[i] = tr;
            d[i + 1] = tg;
            d[i + 2] = tb;
            d[i + 3] = alpha;
          }

          ctx.putImageData(imgData, 0, 0);
          return tmp;
        }

        function applyTextStyles() {
          const txt = (textEl.value || '').trim().toUpperCase();
          siteTitle.textContent = txt;

          siteTitle.style.color = textColorEl.value;
          siteTitle.style.fontFamily = textFontFamilyEl.value;

          const fs = parseInt(textFontSizeEl.value || '30', 10);
          const fw = parseInt(textFontWeightEl.value || '700', 10);
          const fst = textFontStyleEl.value || 'normal';

          siteTitle.style.setProperty('font-style', fst, 'important');
          siteTitle.style.setProperty('font-size', fs + 'px', 'important');
          siteTitle.style.setProperty('font-weight', String(fw), 'important');
        }

        function updateContrasts() {
          const imgCR = contrastRatio(imgColorEl.value, bgColorEl.value);
          const txtCR = contrastRatio(textColorEl.value, bgColorEl.value);

          imgContrastEl.textContent = imgCR.toFixed(2) + ' : 1';
          textContrastEl.textContent = txtCR.toFixed(2) + ' : 1';

          imgContrastEl.className = (imgCR >= 3) ? 'ok' : 'warn';
          textContrastEl.className = (txtCR >= 4.5) ? 'ok' : 'warn';

          let notes = [];
          if (imgCR < 3) notes.push('Icon color is low-contrast on this background.');
          if (txtCR < 4.5) notes.push('Text color is low-contrast on this background.');
          if (!notes.length) notes.push('Looks strong on this background.');

          notesEl.textContent = notes.join(' ');
          notesEl.className = (notes.length === 1 && notes[0].includes('strong')) ? 'ok' : 'warn';
        }

        function getThresholdValue() {
          // IMPORTANT: fixes your error (if thresholdEl is missing due to caching/minify)
          const v = thresholdEl && typeof thresholdEl.value === 'string' ? thresholdEl.value : '240';
          return parseInt(v || '240', 10);
        }

        function draw() {
          statusEl.textContent = 'Rendering…';
          headerMockWrap.style.background = bgColorEl.value;

          const threshold = getThresholdValue();
          const recolored = makeRecoloredBitmap(imgEl, imgColorEl.value, threshold);

          iconCanvas.width = recolored.width;
          iconCanvas.height = recolored.height;

          const ictx = iconCanvas.getContext('2d');
          ictx.clearRect(0, 0, iconCanvas.width, iconCanvas.height);
          ictx.drawImage(recolored, 0, 0);

          const iconW = parseInt(iconWEl.value || '100', 10);
          const iconH = parseInt(iconHEl.value || '70', 10);
          iconCanvas.style.width = iconW + 'px';
          iconCanvas.style.height = iconH + 'px';

          applyTextStyles();
          updateContrasts();
          statusEl.textContent = 'Ready';
        }

        function drawTextWithSpacing(ctx, text, x, y, letterSpacingPx) {
          for (let i = 0; i < text.length; i++) {
            const ch = text[i];
            ctx.fillText(ch, x, y);
            x += ctx.measureText(ch).width + letterSpacingPx;
          }
        }

        function download() {
          if (!imgEl.complete) return;

          const threshold = getThresholdValue();
          const recolored = makeRecoloredBitmap(imgEl, imgColorEl.value, threshold);

          const iconW = parseInt(iconWEl.value || '100', 10);
          const iconH = parseInt(iconHEl.value || '70', 10);

          const text = ((textEl.value || '').trim() || '').toUpperCase();
          const fontFamily = textFontFamilyEl.value;
          const fontStyle = textFontStyleEl.value;
          const fontSize = parseInt(textFontSizeEl.value || '30', 10);
          const fontWeight = parseInt(textFontWeightEl.value || '700', 10);

          const letterSpacingPx = DEFAULT_LETTER_SPACING_EM * fontSize;
          const sx = DEFAULT_SCALE_X;

          const font = `${fontStyle} ${fontWeight} ${fontSize}px ${fontFamily}`;

          // measure spaced text width
          const tmp = document.createElement('canvas');
          const tctx = tmp.getContext('2d');
          tctx.font = font;

          let textW = 0;
          if (text) {
            for (let i = 0; i < text.length; i++) {
              textW += tctx.measureText(text[i]).width;
              if (i < text.length - 1) textW += letterSpacingPx;
            }
            textW *= sx;
          }

          const padding = 22;
          const gap = 10;
          const outW = Math.ceil(padding * 2 + iconW + gap + textW);
          const outH = Math.ceil(padding * 2 + Math.max(iconH, fontSize * 1.2));

          const exportCanvas = document.createElement('canvas');
          exportCanvas.width = outW;
          exportCanvas.height = outH;
          const ctx = exportCanvas.getContext('2d');
          ctx.clearRect(0, 0, outW, outH);

          // draw icon
          const iconY = padding + (outH - padding * 2 - iconH) / 2;
          ctx.drawImage(recolored, padding, iconY, iconW, iconH);

          // draw text
          if (text) {
            const baseX = padding + iconW + gap;
            const baseY = padding + (outH - padding * 2) / 2;

            ctx.save();
            ctx.translate(baseX + DEFAULT_OFF_X, baseY + DEFAULT_OFF_Y);
            ctx.scale(sx, 1);
            ctx.font = font;
            ctx.fillStyle = textColorEl.value;
            ctx.textBaseline = 'middle';
            drawTextWithSpacing(ctx, text, 0, 0, letterSpacingPx);
            ctx.restore();
          }

          const a = document.createElement('a');
          a.download = 'logo_export.png';
          a.href = exportCanvas.toDataURL('image/png');
          a.click();
        }

        function bind(el, fn) {
          if (!el) return;
          el.addEventListener('input', fn);
          el.addEventListener('change', fn);
        }

        function loadAndDraw() {
          // More reliable than just img.complete on some browsers/caching situations
          if (imgEl.decode) {
            imgEl.decode().then(draw).catch(draw);
          } else {
            draw();
          }
        }

        // Init
        syncHexLabels();
        renderSuggestions();

        imgEl.onload = () => {
          downloadBtn.disabled = false;
          loadAndDraw();
        };
        imgEl.onerror = () => {
          statusEl.textContent = 'Missing: uploads/logo.jpeg';
          downloadBtn.disabled = true;
        };

        // If already cached
        if (imgEl.complete) loadAndDraw();

        [
          imgColorEl, textColorEl, bgColorEl, textEl,
          iconWEl, iconHEl,
          textFontFamilyEl, textFontStyleEl, textFontSizeEl, textFontWeightEl
        ].forEach(el => bind(el, () => {
          syncHexLabels();
          renderSuggestions();
          draw();
        }));

        // threshold binding only if present (prevents your crash)
        bind(thresholdEl, () => {
          syncHexLabels();
          renderSuggestions();
          draw();
        });

        downloadBtn.addEventListener('click', download);
      }

      // IMPORTANT: ensures DOM is ready even if a cache/minifier moved the script
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
      } else {
        init();
      }
    })();
  </script>
</body>

</html>