import Mirador from 'mirador/dist/es/src/index';
import miradorImageToolsPlugin from 'mirador-image-tools/es/plugins/miradorImageToolsPlugin.js';
import examplePlugin from './plugins/example_plugin';
import CustomBrand from './components/custom_brand';

// Example of different window view types
const config = {
    id: 'mirador-viewer',
    window: {
        // Set the default view type for all manifests without a viewingHint
        defaultView: 'single', // options: single, book, gallery, scroll
        views: [ // This is a copy of ProjectMirador/mirador's src/config/settings.js
            { key: 'single', behaviors: ['individuals'] },
            { key: 'book', behaviors: ['paged'] },
            { key: 'gallery' },
        ],
    },
    windows: [{
            // viewingHint: paged --> automatically selects Book view
            imageToolsEnabled: true,
            imageToolsOpen: true,
            manifestId: 'https://www.e-manuscripta.ch/i3f/v20/2886898/manifest',
            sideBarOpen: true,
            canvasIndex: 7
        },
        {
            // single view
            imageToolsEnabled: true,
            imageToolsOpen: true,
            manifestId: 'https://www.e-rara.ch/i3f/v20/21681782/manifest',
            sideBarOpen: true,
        },
    ],
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
  }
];

Mirador.viewer(config, plugins);