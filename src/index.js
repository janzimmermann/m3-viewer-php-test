import Mirador from 'mirador/dist/es/src/index';
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
            // No viewing hint provided; use window: defaultView
            manifestId: 'https://purl.stanford.edu/fr426cg9537/iiif/manifest',
        },
        {
            // viewingHint: continuous --> automatically selects Scroll view
            manifestId: 'https://iiif.library.ucla.edu/ark%3A%2F21198%2Fzz001nwthk/manifest',
        },
        { // viewingHint: paged --> automatically selects Book view
            manifestId: 'https://wellcomelibrary.org/iiif/b18035723/manifest',
            canvasIndex: 1, // 
        },
        {
            // viewingHint: paged --> Manually set to Gallery view
            manifestId: 'https://iiif.bodleian.ox.ac.uk/iiif/manifest/e32a277e-91e2-4a6d-8ba6-cc4bad230410.json',
            view: 'gallery',
        }
    ],
    catalog: [{ // These manifests are available in the catalog. 
            manifestId: 'https://damsssl.llgc.org.uk/iiif/2.0/1556378/manifest.json',
            provider: 'The National Library of Wales',
        },
        {
            manifestId: 'https://damsssl.llgc.org.uk/iiif/2.0/1487439/manifest.json',
        },
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
    themes:  {
        ZBTheme: {
            palette: {
                primary: {                    
                    main: '#846963',  //ZB-braun
                },
                secondary: {
                    main: '#5574bb', // ZB-blau
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