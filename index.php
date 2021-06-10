<!doctype html>
<html>
  <head>
    <title>Basic Mirador Feature Branch</title>
  </head>
  <body>
    <!-- <div id="mirador-viewer"></div>
    <script src="/dist/main.js"></script> -->

    <script type="text/javascript" src="mirador.min.js"></script>
    
    <div id="mirador" style="position:absolute; top:0; bottom:0; left:0; right:0;">
      <div class="fullscreen">
        <nav class="MuiPaper-root MuiAppBar-root MuiAppBar-positionAbsolute MuiAppBar-colorDefault mirador5 mirador-workspace-control-panel MuiPaper-elevation4" aria-label="Workspace navigation">
          <div class="MuiToolbar-root MuiToolbar-regular mirador6">
            <button class="MuiButtonBase-root MuiFab-root mirador9 MuiFab-sizeMedium MuiFab-primary mirador10" tabindex="0" type="button" id="addBtn" aria-label="Add resource" title="Add resource">
              <span class="MuiFab-label">
                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                </svg>
              </span>
            </button>
          <div class="mirador8">
            <button class="MuiButtonBase-root MuiIconButton-root mirador14" tabindex="0" type="button" aria-haspopup="true" aria-label="Jump to window" title="Jump to window">
              <span class="MuiIconButton-label">
                <span class="MuiBadge-root">
                  <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M19 18l2 1V1H7v2h12v15zM17 5H3v18l7-3 7 3V5z"></path>
                  </svg>
                <span class="MuiBadge-badge mirador13 MuiBadge-anchorOriginTopRightRectangle">1</span>
              </span>
            </span>
          <span class="MuiTouchRipple-root">
        </span>
      </button>
      <button class="MuiButtonBase-root MuiIconButton-root mirador16" tabindex="0" type="button" aria-haspopup="true" aria-label="Workspace settings" id="menuBtn" title="Workspace settings">
        <span class="MuiIconButton-label">
          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M19.44 12.99l-.01.02c.04-.33.08-.67.08-1.01 0-.34-.03-.66-.07-.99l.01.02 2.44-1.92-2.43-4.22-2.87 1.16.01.01c-.52-.4-1.09-.74-1.71-1h.01L14.44 2H9.57l-.44 3.07h.01c-.62.26-1.19.6-1.71 1l.01-.01-2.88-1.17-2.44 4.22 2.44 1.92.01-.02c-.04.33-.07.65-.07.99 0 .34.03.68.08 1.01l-.01-.02-2.1 1.65-.33.26 2.43 4.2 2.88-1.15-.02-.04c.53.41 1.1.75 1.73 1.01h-.03L9.58 22h4.85s.03-.18.06-.42l.38-2.65h-.01c.62-.26 1.2-.6 1.73-1.01l-.02.04 2.88 1.15 2.43-4.2s-.14-.12-.33-.26l-2.11-1.66zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
          </svg>
        </span>
      <span class="MuiTouchRipple-root"></span>
      </button><button class="MuiButtonBase-root MuiIconButton-root mirador18" tabindex="0" type="button" aria-label="Workspace options" title="Workspace options">
      <span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg></span><span class="MuiTouchRipple-root"></span></button><button class="MuiButtonBase-root MuiIconButton-root mirador12" tabindex="0" type="button" aria-label="Full screen" title="Full screen"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div></div><div class="mirador2"><p class="MuiTypography-root MuiTypography-body1 MuiTypography-alignCenter"><a class="MuiButtonBase-root MuiIconButton-root" tabindex="0" aria-disabled="false" href="https://projectmirador.org" target="_blank" rel="noopener"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false" viewBox="0 0 60 55" role="img" aria-label="About Project Mirador"><rect width="18" height="55"></rect><rect width="18" height="55" transform="translate(42)"></rect><rect width="18" height="34" transform="translate(21)"></rect><title>About Project Mirador</title></svg></span><span class="MuiTouchRipple-root"></span></a></p></div></nav><main class="mirador1 mirador-viewer" lang="en" aria-label="Workspace"><div><div class="mirador-workspace-viewport mirador-workspace-with-control-panel mirador21 mirador20"><h1 class="MuiTypography-root MuiTypography-srOnly">Mirador viewer</h1><div class="mirador-mosaic mirador22 mosaic mosaic-drop-target"><div class="mosaic-root"><div class="mosaic-tile" style="inset: 0%;"><div class="mosaic-window mosaic-drop-target"><div class="mosaic-window-toolbar"><div class="mosaic-window-title"></div><div class="mosaic-window-controls"></div></div><div class="mosaic-window-body"><section class="MuiPaper-root mirador32 mirador-window MuiPaper-elevation1 MuiPaper-rounded" id="window-2785028a-1916-4980-b332-8d7512054520" aria-label="Window: 1 Ansichtskarte an Anna Schöller"><div><header class="MuiPaper-root MuiAppBar-root MuiAppBar-positionRelative MuiAppBar-colorDefault MuiPaper-elevation4"><nav aria-label="Window navigation"><div class="MuiToolbar-root MuiToolbar-dense mirador34 mirador33 mirador-window-top-bar"><button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button" aria-label="Toggle sidebar" title="Toggle sidebar"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></span><span class="MuiTouchRipple-root"></span></button><h2 class="MuiTypography-root mirador36 MuiTypography-h2 MuiTypography-colorInherit MuiTypography-noWrap">1 Ansichtskarte an Anna Schöller</h2><button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button" aria-haspopup="true" aria-label="Window views &amp; thumbnail display"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0,0H24V24H0Z" fill="none"></path><path d="M24.852,17.981,3,18V15.945l21.852-.019Z" transform="translate(-2 5)"></path><path d="M1,4V21H22.853V4.1ZM3,19V6h8V19Zm18,0H13V6h8Z" transform="translate(0 -2)"></path></svg></svg></span><span class="MuiTouchRipple-root"></span></button><button class="MuiButtonBase-root MuiIconButton-root mirador-window-maximize" tabindex="0" type="button" aria-label="Maximize window"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7,14H5v5h5V17H7Zm7-9V7h3v3h2V5Z"></path><path d="M22.517,1.524H1.736V22.37H22.517Zm-2,18.845H3.736V3.524H20.517Z"></path></svg></svg></span><span class="MuiTouchRipple-root"></span></button><button class="MuiButtonBase-root MuiIconButton-root mirador-window-close" tabindex="0" type="button" aria-label="Close window" title="Close window"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div></nav></header></div><div class="mirador26"><div class="mirador27"><div class="mirador28"><div class="mirador-primary-window mirador47"><div class="MuiDrawer-root MuiDrawer-docked mirador48"></div><div class="mirador54  mirador-companion-area-left"><div class="mirador-companion-windows mirador53 " style="visibility: hidden; display: none; transform: translateX(0px);"><aside class="MuiPaper-root mirador69 mirador73 mirador60 mirador-companion-window-left mirador-window-sidebar-info-panel MuiPaper-elevation1" aria-label="About this item" style="order: -1; position: relative;"><div class="mirador68 react-draggable" style="position: relative; user-select: auto; touch-action: none; width: 235px; height: 100%; display: flex; top: 0px; left: 0px; cursor: auto; max-width: 9.0072e+15px; max-height: 9.0072e+15px; min-width: 235px; min-height: 50px; box-sizing: border-box; flex-shrink: 0;"><div class="MuiToolbar-root MuiToolbar-regular mirador72 mirador62 mirador70 mirador-companion-window-header"><h3 class="MuiTypography-root mirador74 MuiTypography-h3">About this item</h3><button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button" aria-label="Open in separate panel" title="Open in separate panel"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 19H5V5h7V3H3v18h18v-9h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div><div class="MuiPaper-root mirador65 MuiPaper-elevation0 MuiPaper-rounded"><div class="mirador57" parentactions="[object Object]"><div class="mirador85"><h4 class="MuiTypography-root mirador86 MuiTypography-overline" id="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-currentItem-0">Current item</h4><button class="MuiButtonBase-root MuiIconButton-root mirador84" tabindex="0" type="button" aria-label="Collapse current item section" aria-expanded="true" title="Collapse current item section"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div><h5 class="MuiTypography-root MuiTypography-h4" aria-labelledby="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-currentItem-0 cw-5cfb319b-03d5-42b5-b873-8956f392fd58-currentItem-0-heading" id="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-currentItem-0-heading">[1]</h5></div><div class="mirador57" parentactions="[object Object]"><div class="mirador85"><h4 class="MuiTypography-root mirador86 MuiTypography-overline" id="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-resource">Resource</h4><button class="MuiButtonBase-root MuiIconButton-root mirador84" tabindex="0" type="button" aria-label="Collapse resource section" aria-expanded="true" title="Collapse resource section"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div><h5 class="MuiTypography-root MuiTypography-h4" aria-labelledby="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-resource cw-5cfb319b-03d5-42b5-b873-8956f392fd58-resource-heading" id="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-resource-heading">1 Ansichtskarte an Anna Schöller</h5><dl class="mirador-label-value-metadata"><dt class="MuiTypography-root MuiTypography-subtitle2">Titel</dt><dd class="MuiTypography-root MuiTypography-body1" style="margin-bottom: 0.5em; margin-left: 0px;"><span class="mirador93 mirador-third-party-html">1 Ansichtskarte an Anna Schöller / von Hermann Suter</span></dd><dt class="MuiTypography-root MuiTypography-subtitle2">Autor, Beteiligte</dt><dd class="MuiTypography-root MuiTypography-body1" style="margin-bottom: 0.5em; margin-left: 0px;"><span class="mirador93 mirador-third-party-html">Suter, Hermann [1870-1926]</span></dd><dt class="MuiTypography-root MuiTypography-subtitle2">Adressat(en)</dt><dd class="MuiTypography-root MuiTypography-body1" style="margin-bottom: 0.5em; margin-left: 0px;"><span class="mirador93 mirador-third-party-html">Schöller, Anna</span></dd><dt class="MuiTypography-root MuiTypography-subtitle2">Entstehung</dt><dd class="MuiTypography-root MuiTypography-body1" style="margin-bottom: 0.5em; margin-left: 0px;"><span class="mirador93 mirador-third-party-html">Basel, 1916.11.21</span></dd><dt class="MuiTypography-root MuiTypography-subtitle2">Besitzende Institution</dt><dd class="MuiTypography-root MuiTypography-body1" style="margin-bottom: 0.5em; margin-left: 0px;"><span class="mirador93 mirador-third-party-html">Zentralbibliothek Zürich, AMG I 1033</span></dd><dt class="MuiTypography-root MuiTypography-subtitle2">Persistenter Link</dt><dd class="MuiTypography-root MuiTypography-body1" style="margin-bottom: 0.5em; margin-left: 0px;"><span class="mirador93 mirador-third-party-html">https://doi.org/10.7891/e-manuscripta-3684</span></dd></dl></div><div class="mirador57" parentactions="[object Object]"><div class="mirador85"><h4 class="MuiTypography-root mirador86 MuiTypography-overline" id="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-related">Related</h4><button class="MuiButtonBase-root MuiIconButton-root mirador84" tabindex="0" type="button" aria-label="Collapse related section" aria-expanded="true" title="Collapse related section"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div><h5 class="MuiTypography-root MuiTypography-h4" aria-labelledby="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-related cw-5cfb319b-03d5-42b5-b873-8956f392fd58-related-heading" id="cw-5cfb319b-03d5-42b5-b873-8956f392fd58-related-heading">Links</h5><dl class="mirador-label-value-metadata mirador87"><dt class="MuiTypography-root MuiTypography-subtitle2">See also</dt><dd class="MuiTypography-root MuiTypography-body1"><a class="MuiTypography-root MuiLink-root MuiLink-underlineAlways MuiTypography-colorPrimary" target="_blank" rel="noopener noreferrer" href="https://www.e-manuscripta.ch/zuz/oai?verb=GetRecord&amp;metadataPrefix=mets&amp;identifier=86571">METS</a><span class="MuiTypography-root MuiTypography-body1">(application/xml)</span></dd><dt class="MuiTypography-root MuiTypography-subtitle2">IIIF manifest</dt><dd class="MuiTypography-root MuiTypography-body1"><a class="MuiTypography-root MuiLink-root MuiLink-underlineAlways MuiTypography-colorPrimary" target="_blank" rel="noopener noreferrer" href="https://www.e-manuscripta.ch/zuz/i3f/v20/86571/manifest">https://www.e-manuscripta.ch/zuz/i3f/v20/86571/manifest</a></dd></dl></div></div><span><div class="" style="position: absolute; user-select: none; width: 10px; height: 100%; top: 0px; right: -5px; cursor: col-resize;"></div></span></div><div class="__resizable_base__" style="width: 100%; height: 100%; position: absolute; transform: scale(0, 0); left: 0px; flex: 0 1 0%;"></div><div class="erd_scroll_detection_container erd_scroll_detection_container_animation_active" style="visibility: hidden; display: inline; width: 0px; height: 0px; z-index: -1; overflow: hidden; margin: 0px; padding: 0px;"><div dir="ltr" class="erd_scroll_detection_container" style="position: absolute; flex: 0 0 auto; overflow: hidden; z-index: -1; visibility: hidden; width: 100%; height: 100%; left: 0px; top: 0px;"><div class="erd_scroll_detection_container" style="position: absolute; flex: 0 0 auto; overflow: hidden; z-index: -1; visibility: hidden; inset: -18px -17px -17px -18px;"><div style="position: absolute; flex: 0 0 auto; overflow: scroll; z-index: -1; visibility: hidden; width: 100%; height: 100%;"><div style="position: absolute; left: 0px; top: 0px; width: 45px; height: 45px;"></div></div><div style="position: absolute; flex: 0 0 auto; overflow: scroll; z-index: -1; visibility: hidden; width: 100%; height: 100%;"><div style="position: absolute; width: 200%; height: 200%;"></div></div></div></div></div></aside></div></div><section class="mirador-osd-container mirador75" id="window-2785028a-1916-4980-b332-8d7512054520-osd" aria-labelledby="osd-info-window-2785028a-1916-4980-b332-8d7512054520" aria-live="polite"><div class="openseadragon-container" style="background: none transparent; border: none; margin: 0px; padding: 0px; position: relative; width: 100%; height: 100%; overflow: hidden; left: 0px; top: 0px; text-align: left;"><div class="openseadragon-canvas" tabindex="0" dir="ltr" style="background: none transparent; border: none; margin: 0px; padding: 0px; position: absolute; width: 100%; height: 100%; overflow: hidden; top: 0px; left: 0px; touch-action: none; text-align: left;"><canvas width="1030" height="938" role="img" aria-label="Digitized view" aria-describedby="osd-info-window-2785028a-1916-4980-b332-8d7512054520" style="background: none transparent; border: none; margin: 0px; padding: 0px; position: absolute; width: 100%; height: 100%;"></canvas><div style="background: none transparent; border: none; margin: 0px; padding: 0px; position: static;"></div></div><div style="background: none transparent; border: none; margin: 0px; padding: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="background: none transparent; border: none; margin: 0px; padding: 0px; position: absolute; right: 0px; top: 0px;"></div><div style="background: none transparent; border: none; margin: 0px; padding: 0px; position: absolute; right: 0px; bottom: 0px;"></div><div style="background: none transparent; border: none; margin: 0px; padding: 0px; position: absolute; left: 0px; bottom: 0px;"></div></div><div class="MuiPaper-root mirador78 mirador-canvas-nav mirador76 MuiPaper-elevation0"><div class="mirador-osd-navigation mirador91" dir="ltr"><button class="MuiButtonBase-root MuiIconButton-root mirador-previous-canvas-button Mui-disabled Mui-disabled" tabindex="-1" type="button" disabled="" aria-label="Previous item"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="transform: rotate(180deg);"><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg></span></button><button class="MuiButtonBase-root MuiIconButton-root mirador-next-canvas-button" tabindex="0" type="button" aria-label="Next item" title="Next item"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div><div id="osd-info-window-2785028a-1916-4980-b332-8d7512054520" class="mirador-osd-info mirador92"><span class="MuiTypography-root mirador-canvas-count MuiTypography-caption MuiTypography-displayInline">1 of 2</span><span class="MuiTypography-root mirador-canvas-label MuiTypography-caption MuiTypography-displayInline"></span></div><div class="erd_scroll_detection_container erd_scroll_detection_container_animation_active" style="visibility: hidden; display: inline; width: 0px; height: 0px; z-index: -1; overflow: hidden; margin: 0px; padding: 0px;"><div dir="ltr" class="erd_scroll_detection_container" style="position: absolute; flex: 0 0 auto; overflow: hidden; z-index: -1; visibility: hidden; width: 100%; height: 100%; left: 0px; top: 0px;"><div class="erd_scroll_detection_container" style="position: absolute; flex: 0 0 auto; overflow: hidden; z-index: -1; visibility: hidden; inset: -18px -17px -17px -18px;"><div style="position: absolute; flex: 0 0 auto; overflow: scroll; z-index: -1; visibility: hidden; width: 100%; height: 100%;"><div style="position: absolute; left: 0px; top: 0px; width: 1075px; height: 121px;"></div></div><div style="position: absolute; flex: 0 0 auto; overflow: scroll; z-index: -1; visibility: hidden; width: 100%; height: 100%;"><div style="position: absolute; width: 200%; height: 200%;"></div></div></div></div></div></div></section></div></div><div class="mirador23"><div class="mirador54 mirador52 mirador-companion-area-bottom"><div class="mirador-companion-windows false mirador52" style="display: flex; transform: none; transition: transform 225ms cubic-bezier(0, 0, 0.2, 1) 0ms;"></div></div></div></div><div class="mirador24"><div class="mirador54  mirador-companion-area-right"><div class="mirador-companion-windows false " style="display: flex; transform: none; transition: transform 225ms cubic-bezier(0, 0, 0.2, 1) 0ms;"></div></div><div class="mirador54  mirador-companion-area-far-right"><div class="mirador-companion-windows false " style="display: flex; transform: none; transition: transform 225ms cubic-bezier(0, 0, 0.2, 1) 0ms;"></div></div></div></div><div class="mirador54 mirador52 mirador-companion-area-far-bottom"><div class="mirador-companion-windows false mirador52" style="display: flex; transform: none; transition: transform 225ms cubic-bezier(0, 0, 0.2, 1) 0ms;"></div></div></section></div><div class="mosaic-window-body-overlay"></div><div class="mosaic-window-additional-actions-bar"></div><div class="mosaic-preview"><section class="MuiPaper-root mirador82 mirador-placeholder-window MuiPaper-elevation1 MuiPaper-rounded" id="window-2785028a-1916-4980-b332-8d7512054520-preview" aria-label="Window: 1 Ansichtskarte an Anna Schöller"><header class="MuiPaper-root MuiAppBar-root MuiAppBar-positionRelative MuiAppBar-colorDefault MuiPaper-elevation4"><div class="MuiToolbar-root MuiToolbar-dense mirador83 mirador-window-top-bar"><button class="MuiButtonBase-root MuiIconButton-root Mui-disabled Mui-disabled" tabindex="-1" type="button" disabled="" aria-label="Toggle sidebar"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></span></button><h2 class="MuiTypography-root mirador81 MuiTypography-h2 MuiTypography-colorInherit MuiTypography-noWrap">1 Ansichtskarte an Anna Schöller</h2><button class="MuiButtonBase-root MuiIconButton-root mirador80 mirador-window-close" tabindex="0" type="button" aria-label="Close window" title="Close window"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div></header></section></div><div class="drop-target-container"><div class="drop-target top"></div><div class="drop-target bottom"></div><div class="drop-target left"></div><div class="drop-target right"></div></div></div></div></div><div class="drop-target-container"><div class="drop-target top"></div><div class="drop-target bottom"></div><div class="drop-target left"></div><div class="drop-target right"></div></div></div></div><div class="MuiBackdrop-root" aria-hidden="true" style="opacity: 0; visibility: hidden; z-index: 9999;"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: rgb(189, 189, 189); font-size: 256px;"><path d="M4.01 2L4 22h16V8l-6-6H4.01zM13 9V3.5L18.5 9H13z"></path></svg></div></div><div class="mirador-background-plugin-area" style="display: none;"></div></main><div><div role="log" aria-live="assertive" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; white-space: nowrap; padding: 0px; width: 1px; position: absolute;"></div><div role="log" aria-live="assertive" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; white-space: nowrap; padding: 0px; width: 1px; position: absolute;"></div><div role="log" aria-live="polite" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; white-space: nowrap; padding: 0px; width: 1px; position: absolute;"></div><div role="log" aria-live="polite" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; white-space: nowrap; padding: 0px; width: 1px; position: absolute;"></div></div></div></div>
    
    <?php 
      // get post data
      $data = $_POST["collection"];
      // collections directory
      $directoryToStoreCollections = './collections/stored_collections/';
      // Returns array of files in collections array
      $alreadySavedCollections = scandir($directoryToStoreCollections);
      // Count number of files
      //$fileCount = count(alreadySavedCollections);
      // file directory
      //$file = $directoryToStoreCollections . 'myFabulousCollection_'. $fileCount .'.json';

      // Initialize filecount variavle
      $fileCount = 0;
        
      $alreadySavedCollections = glob( $directoryToStoreCollections ."*" );
        
      if( $alreadySavedCollections ) {
          $fileCount = count($alreadySavedCollections);
      }
  
      $file = $directoryToStoreCollections . 'myFabulousCollection_'. $fileCount .'.json';

      file_put_contents($file , $data);
      
      // TMP output
      echo "<div>" . $fileCount . " files</div>";
      
      // Display collection in viewer windows
      $collection = json_decode($data, true);
      $manifests = [];
      foreach($collection["manifests"] as $manifest) {
        $manifests[] = $manifest["@id"];
      }
      unset($manifest);
    ?>

    <script type='text/javascript'>
      var miradorInstance = Mirador.viewer({
        id: 'mirador',
          windows: [
            <?php
            foreach($manifests as $manifestId) {
              echo "{manifestId: '". $manifestId ."'}, \n";
            }
            ?>
          ],
          catalog: [
            <?php
              foreach($manifests as $manifestId) {
                echo "{ manifestId: '". $manifestId ."' }, \n";
              }
            ?>
        ]
      });
    </script>
  </body>
</html>
