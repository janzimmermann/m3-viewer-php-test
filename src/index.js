import Mirador from 'mirador/dist/es/src/index';
import React, { Component } from 'react';
import Typography from '@material-ui/core/Typography';
import miradorImageToolsPlugin from 'mirador-image-tools/es/plugins/miradorImageToolsPlugin.js';
import miradorAnnotationPlugins from 'mirador-annotations/es/index';
import LocalStorageAdapter from 'mirador-annotations/es/LocalStorageAdapter';
// import AnnototAdapter from 'mirador-annotations/es/AnnototAdapter';
import CustomBrand from './components/custom_brand';
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
            // viewingHint: paged --> automatically selects Book view
            imageToolsEnabled: true,
            // imageToolsOpen: true,
            manifestId: 'https://www.e-manuscripta.ch/i3f/v20/2886898/manifest',
            // canvasIndex: 7, // not working
            canvasId: 'https://www.e-manuscripta.ch/zuzcmi/i3f/v20/2886898/canvas/2886949',
            sideBarOpen: true,
        },
        // {
        //     // single view
        //     imageToolsEnabled: true,
        //     // imageToolsOpen: true,
        //     manifestId: 'https://www.e-rara.ch/i3f/v20/21681782/manifest',
        //     // sideBarOpen: true,
        // },
    ],
    panels: { // Configure which panels are visible in WindowSideBarButtons
        info: true,
        // attribution: true,
        // canvas: true,
        annotations: true, // still getting an error on the annotations button
        // search: true,
        // layers: false,
      },
    catalog: [// These manifests are available in the catalog. 
        {
            manifestId: 'https://cdm16866.contentdm.oclc.org/iiif/info/cchm_photo/5342/manifest.json',
            provider: 'Washington State University',
        },
        { // Secret cat on the 76th page
            manifestId: 'https://iiif.bodleian.ox.ac.uk/iiif/manifest/faeff7fb-f8a7-44b5-95ed-cff9a9ffd198.json',
            provider: 'Bodleian Libraries, University of Oxford',
        },
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