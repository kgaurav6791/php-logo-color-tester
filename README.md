# Logo Color Tester (Fixed-File)

A tiny, zero-build, single-page tool to **recolor a logo icon** and **tweak header text styling** in real time—then **export a PNG** for quick mockups.

No frameworks, no npm, no bundlers. Just open the page in a browser.

---

## What it does

- ✅ Loads a **fixed logo file** from `./uploads/logo.jpeg`
- ✅ Converts the logo into a **transparent “ink” mask** and recolors it with an **Icon color** picker
- ✅ Lets you edit the **site title text**, set **text color**, and adjust:
  - Font family
  - Font style
  - Font size
  - Font weight
- ✅ Lets you set **header background** color
- ✅ Shows quick **contrast ratio checks**:
  - Icon vs background (target: **≥ 3.0**)
  - Text vs background (target: **≥ 4.5**)
- ✅ Generates **color suggestions** (click swatches to apply text color)
- ✅ Exports a **PNG** using the current icon + text settings

---

## Required folder + fixed filename (IMPORTANT)

This tool does **not** include an upload feature.

You **must** place your logo at:

uploads/logo.jpeg

✅ Folder name must be exactly: `uploads`  
✅ File name must be exactly: `logo.jpeg`  
✅ Relative to the HTML file location

If the logo is missing, the UI will show:

> `Missing: uploads/logo.jpeg`

…and **Download PNG** will be disabled.

> Tip: If you’re publishing this repo publicly, you may not want to commit your real logo.  
> You can commit a **placeholder** `uploads/logo.jpeg` and tell users to replace it locally.

---

> If you rename `index.html` to `index.php`, it will still work (the current version is plain HTML/JS).  
> Just keep the **relative path** `./uploads/logo.jpeg` working.

---

## How to run locally

### Option 1: Open directly in browser

- Double-click `index.html`
- Or drag it into a browser window

> If you see weird behavior (cache, decode, local file restrictions), use a local server.

### Option 2: Run a local server (recommended)

#### Python

```
python -m http.server 8000
```

Open:

```
http://localhost:8000/
```

Node (http-server)

```
npx http-server -p 8000
```

Open:

```
http://localhost:8000/
```

Usage

Put your logo at uploads/logo.jpeg

Open the page

Adjust:

Icon color

Text

Text color

Header background

Icon width/height

Font family/style/size/weight

Check the contrast KPIs

Click Download PNG to export

How recoloring works (quick explanation)

The script:

Draws the original logo.jpeg into an offscreen canvas

Reads pixel data and treats light pixels as background

Makes background pixels transparent

Uses darker pixels as “ink”

Recolors “ink” pixels to your chosen icon color while preserving edges using alpha

Best results with:

Dark logo on light/white background

High contrast

Clean edges

Notes / limitations

The logo path is fixed to: ./uploads/logo.jpeg

Export is a simple horizontal composition: icon + text (no nav/search included)

Threshold UI is currently removed (logic defaults to a safe value)
