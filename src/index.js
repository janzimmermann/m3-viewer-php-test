import Mirador from 'mirador/dist/es/src/index';
import React, { Component } from 'react';
import Typography from '@material-ui/core/Typography';
import miradorImageToolsPlugin from 'mirador-image-tools/es/plugins/miradorImageToolsPlugin.js';
import miradorAnnotationPlugins from 'mirador-annotations/es/index';
import LocalStorageAdapter from 'mirador-annotations/es/LocalStorageAdapter';
import CustomBrand from './components/custom_brand';
// import AnnototAdapter from 'mirador-annotations/es/AnnototAdapter';
// import examplePlugin from './plugins/example_plugin';

const endpointUrl = 'http://127.0.0.1:3000/annotations';

// Example of different window view types
const config = {
    
    annotation: {
        adapter: (canvasId) => new LocalStorageAdapter(`localStorage://?canvasId=${canvasId}`),
        // adapter: (canvasId) => new AnnototAdapter(canvasId, endpointUrl),
    },
    id: 'mirador-viewer',
    window: {
        // Set the default view type for all manifests without a viewingHint
        defaultView: 'single', // options: single, book, gallery, scroll
        sideBarPanel: 'annotations',
        views: [ // This is a copy of ProjectMirador/mirador's src/config/settings.js
            { key: 'single' },
            // { key: 'single', behaviors: ['individuals'] },
            // { key: 'book', behaviors: ['paged'] },
            { key: 'gallery' },
        ],
    },
    windows: [
        {
    
            // viewingHint: 'single', 
            manifestId: 'https://www.e-manuscripta.ch/i3f/v20/664401/manifest',
            // canvasIndex: 493, // not working
            canvasId: 'https://www.e-manuscripta.ch/zuz/i3f/v20/664401/canvas/664896',
            thumbnailNavigationPosition: 'far-right', // 'bottom' currently not working: thumbnails are stacked on top of each other
            // sideBarOpen: true,
        },
        {
            manifestId: 'https://www.e-manuscripta.ch/i3f/v20/2886898/manifest',
            // canvasIndex: 7, // not working
            canvasId: 'https://www.e-manuscripta.ch/zuzcmi/i3f/v20/2886898/canvas/2886949',
            thumbnailNavigationPosition: 'far-right',
            // sideBarOpen: true,
            // imageToolsEnabled: true,
            // imageToolsOpen: true,
        },
    ],
    panels: { // Configure which panels are visible in WindowSideBarButtons
        info: true,
        // attribution: true,        // canvas: true,
        annotations: true, // still getting an error on the annotations button
        // search: true,
        // layers: false,
      },
    catalog: [// These manifests are available in the catalog. 
        {
            manifestId: 'https://www.e-codices.unifr.ch/metadata/iiif/collection.json',
            provider: 'e-codices',
        },
        {
            manifestId: 'zb_collection.json',
            provider: 'Zentralbibliothek Zürich',
        }
    
    ],  
    selectedTheme: 'ZBTheme',
    themes:  {
        ZBTheme: {
            palette: {
                primary: {                    
                    main: '#846963',  //ZB-braun
                    dark: '#66514d',
                },
                secondary: {
                    main: '#5574bb', // ZB-blau
                    dark: '#415fa4',
                }
            }
        }
    },
};

const plugins = [
  {
    mode: 'wrap',
    component: CustomBrand,
    target: 'Branding',
  },
  ...miradorImageToolsPlugin,
  ...miradorAnnotationPlugins,
];

Mirador.viewer(config, plugins);
